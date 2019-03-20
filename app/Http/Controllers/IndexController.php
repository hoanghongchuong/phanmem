<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Products;
use App\ProductCate;
use App\NewsLetter;
use App\Recruitment;
use DB,Cache,Mail, Session;
use Cart;
use App\Campaign;
use App\Bill;
use App\CampaignCard;
use App\District;
use App\ChiNhanh;
class IndexController extends Controller {
	protected $setting = NULL;

	
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		session_start();
    	$setting = DB::table('setting')->select()->where('id',1)->get()->first();
    	
    	$about = DB::table('about')->where('com','gioi-thieu')->get();
    	Cache::forever('setting', $setting);
        
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$setting = DB::table('setting')->select()->where('id',1)->get()->first();
		$title = $setting->title;
		$keyword = $setting->keyword;
		$description = $setting->description;		
		$com = 'index';
		// End cấu hình SEO
		$img_share = asset('upload/hinhanh/'.$setting->photo);
		return view('templates.index_tpl', compact('com','keyword','description','title','img_share'));
	}
	public function getProduct(Request $req)
	{
		$cate_pro = ProductCate::where('status',1)->where('parent_id',0)->orderby('stt','asc')->get();
		$partners = DB::table('partner')->get();
		$products = DB::table('products')->where('status',1)->where('com','san-pham')->paginate(18);
		$com='san-pham';		
		$title = "Sản phẩm";
		$keyword = "Sản phẩm";
		$description = "Sản phẩm";
		// $img_share = asset('upload/hinhanh/'.$banner_danhmuc->photo);		
		return view('templates.product_tpl', compact('title','keyword','description','products', 'com','cate_pro','partners'));
	}
	public function getProductList($id, Request $req)
	{		
		
		$cate_pro = DB::table('product_categories')->where('status',1)->where('parent_id',0)->orderby('id','asc')->get();
		$partners = DB::table('partner')->get();
        $com = 'san-pham';
        $product_cate = ProductCate::select('*')->where('status', 1)->where('alias', $id)->where('com','san-pham')->first();        
        if (!empty($product_cate)) {            
        	$cate_parent = DB::table('product_categories')->where('id', $product_cate->parent_id)->first();
        	$cateChilds = DB::table('product_categories')->where('parent_id', $product_cate->id)->get();
        	$array_cate[] = $product_cate->id;
        	if($cateChilds){
        		foreach($cateChilds as $cate){
        			$array_cate[] = $cate->id;
        		}
        	}
        	$products = Products::whereIn('cate_id', $array_cate)->orderBy('id','desc')->paginate(18);
            
            if (!empty($product_cate->title)) {
                $title = $product_cate->title;
            } else {
                $title = $product_cate->name;
            }
            $keyword = $product_cate->keyword;
            $description = $product_cate->description;
            $img_share = asset('upload/product/' . $product_cate->photo);
            return view('templates.productlist_tpl', compact('products', 'product_cate', 'keyword', 'description', 'title', 'img_share', 'cate_pro', 'cate_parent', 'com','partners'));
        } else {
            return redirect()->route('getErrorNotFount');
        }
	}

	
	public function setCookies(Request $req, $id)
	{
		$idCookie = $id;
		$minutes = 1;
		$id_cookie = cookie('id_cookie', $idCookie, $minutes);

		return response()
			->view('templates.product_detail_tpl')
			->withCookie($id_cookie);
	}

	public function getProductDetail($id, Request $req)
	{
        
        $cate_pro = DB::table('product_categories')->where('status',1)->orderby('id','asc')->get();
		$product_detail = DB::table('products')->select()->where('status',1)->where('alias',$id)->get()->first();
		if(!empty($product_detail)){
			$banner_danhmuc = DB::table('lienket')->select()->where('status',1)->where('com','chuyen-muc')->where('link','san-pham')->get()->first();
			// sản phẩm đã xem
			$_SESSION['daxem'][$product_detail->id] = $product_detail->id;
			$ids_session = $_SESSION['daxem'];
			$productDaXem = DB::table('products')->whereIn('id', $ids_session)->where('status', 1)->get();

			$album_hinh = DB::table('images')->select()->where('product_id',$product_detail->id)->orderby('id','asc')->get();		
			$cateProduct = DB::table('product_categories')->select('name','alias')->where('id',$product_detail->cate_id)->first();
			$productSameCate = DB::table('products')->select()->where('status',1)->where('id','<>',$product_detail->id)->where('cate_id',$product_detail->cate_id)->orderby('stt','desc')->take(20)->get();			
			
			// Cấu hình SEO
			if(!empty($product_detail->title)){
				$title = $product_detail->title;
			}else{
				$title = $product_detail->name;
			}
			$keyword = $product_detail->keyword;
			$description = $product_detail->description;
			$img_share = asset('upload/product/'.$product_detail->photo);
			
			// End cấu hình SEO
			return view('templates.product_detail_tpl', compact('product_detail','banner_danhmuc','keyword','description','title','img_share','product_khac','album_hinh','cateProduct','productSameCate','tintucs','cate_pro','colors', 'productDaXem'));
		}else{
			return redirect()->route('getErrorNotFount');
		}
	}

	public function getAbout()
	{
		$about = DB::table('about')->where('com','gioi-thieu')->first();		
        $com = 'gioi-thieu';		
		 //Cấu hình SEO
		$title = 'Giới thiệu';
		$keyword = 'Giới thiệu';
		$description = 'Giới thiệu';
		// End cấu hình SEO

		return view('templates.about_tpl', compact('about','keyword','description','title','img_share','com'));
	}
	
	public function search(Request $request)
	{
		$search = $request->txtSearch;
		$com = 'tim-kiem';
		$cate_pro = DB::table('product_categories')->where('status',1)->where('parent_id',0)->orderby('id','asc')->get();
		// Cấu hình SEO
		$title = "Tìm kiếm: ".$search;
		$keyword = "Tìm kiếm: ".$search;
		$description = "Tìm kiếm: ".$search;
		$img_share = '';		
		$data = DB::table('products')
		->where('com','san-pham')
		->where('name', 'LIKE', '%' . $search . '%')
		->where('status',1)
		->orderBy('id','DESC')->get();
		// dd($data);
		return view('templates.search_tpl', compact('data','keyword','description','title','img_share','search','com','cate_pro'));
	}

	public function getNews()
	{
		
		$tintuc = DB::table('news')->select()->where('status',1)->where('com','tin-tuc')->orderby('id','desc')->paginate(10);		
		$hot_news = DB::table('news')->where('status',1)->where('com','tin-tuc')->where('noibat',1)->orderby('id','desc')->take(6)->get();
		$com='tin-tuc';
		// Cấu hình SEO
		$title = "Tin tức";
		$keyword = "Tin tức";
		$description = "Tin tức";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.news_tpl', compact('tintuc','keyword','description','title','img_share','com','cateNews','hot_news'));
	}
	public function getVanHoa()
	{
		
		$tintuc = DB::table('news')->select()->where('status',1)->where('com','van-hoa')->orderby('id','desc')->paginate(10);		
		$hot_news = DB::table('news')->where('status',1)->where('com','van-hoa')->where('noibat',1)->orderby('id','desc')->take(6)->get();
		$com='van-hoa';
		// Cấu hình SEO
		$title = "Văn hóa chè";
		$keyword = "Văn hóa chè";
		$description = "Văn hóa chè";
		$img_share = '';
		// End cấu hình SEO
		return view('templates.vanhoa_tpl', compact('tintuc','keyword','description','title','img_share','com','cateNews','hot_news'));
	}
	public function getListNews($id)
	{
		//Tìm article thông qua mã id tương ứng
		$tintuc_cate = DB::table('news_categories')->select()->where('status',1)->where('com','tin-tuc')->where('alias',$id)->get()->first();
		$cateNews = DB::table('news_categories')->where('com','tin-tuc')->get();
		if(!empty($tintuc_cate)){
			$tintuc = DB::table('news')->select()->where('status',1)->where('cate_id',$tintuc_cate->id)->orderBy('id','desc')->paginate(5);
			$tintuc_moinhat_detail = DB::table('news')->select()->where('status',1)->where('com','tin-tuc')->orderby('created_at','desc')->take(6)->get();
			$hot_news = DB::table('news')->where('status',1)->where('com', 'tin-tuc')->where('noibat',1)->orderBy('stt','asc')->take(5)->get();
			$setting = Cache::get('setting');

			if(!empty($tintuc_cate->title)){
				$title = $tintuc_cate->title;
			}else{
				$title = $tintuc_cate->name;
			}
			
			$keyword = $tintuc_cate->keyword;
			$description = $tintuc_cate->description;
			$img_share = asset('upload/news/'.$tintuc_cate->photo);

			// End cấu hình SEO
			return view('templates.news_list', compact('tintuc','tintuc_cate','banner_danhmuc','keyword','description','title','img_share','tintuc_moinhat_detail','hot_news', 'cateNews'));
		}else{
			return redirect()->route('getErrorNotFount');
		}
	}
	
	public function getNewsDetail($id)
	{
		$news_detail = DB::table('news')->select()->where('status',1)->where('com','tin-tuc')->where('alias',$id)->get()->first();
		
		if(!empty($news_detail)){			
			$cate_pro = DB::table('product_categories')->where('status',1)->where('parent_id',0)->orderby('id','asc')->get();			
			$com='tin-tuc';
			$setting = Cache::get('setting');
			// Cấu hình SEO
			if(!empty($news_detail->title)){
				$title = $news_detail->title;
			}else{
				$title = $news_detail->name;
			}
			$keyword = $news_detail->keyword;
			$description = $news_detail->description;
			$img_share = asset('upload/news/'.$news_detail->photo);

			return view('templates.news_detail_tpl', compact('news_detail','com','keyword','description','title','img_share'));
		}else{
			return redirect()->route('getErrorNotFount');
		}
		
	}
	
	public function postNewsLetter(Request $request)
	{
		$this->validate($request,
            ["txtEmail" => "required"],
            ["txtEmail.required" => "Bạn chưa nhập email"]
        );
        $kiemtra_mail = DB::table('newsletter')->select()->where('status',1)->where('com','newsletter')->where('email',$request->txtEmail)->get()->first();
        if(empty($kiemtra_mail)){
			$data = new NewsLetter();
			$data->name = $request->txtName;
			$data->email = $request->txtEmail;
			$data->phone = $request->txtPhone;
			$data->content = $request->txtContent;
			$data->status = 1;
			$data->com = 'newsletter';
			$data->save();

			echo "<script type='text/javascript'>
				alert('Bạn đã đăng kí nhận tin tức thành công !');
				window.location = '".url('/')."' </script>";
		}else{
			echo "<script type='text/javascript'>
				alert('Email này đã đăng ký !');
				window.location = '".url('/')."' </script>";
		}
	}
	public function getErrorNotFount(){
		$banner_danhmuc = DB::table('lienket')->select()->where('status',1)->where('com','chuyen-muc')->where('link','san-pham')->get()->first();
		return view('templates.404_tpl',compact('banner_danhmuc'));
	}

	
    public function loadDistrictByProvince($id){
    	$district = District::where('province_id',$id)->get();
    	// dd($district);
    	foreach($district as $item){
    		echo "<option value='".$item->id."'>".$item->district_name."</option>";
    	}
    }
    
    public function SapXep(Request $request){
    	$result = DB::table('products')
    			->join('product_categories','products.cate_id','=','product_categories.id')
    			->select('products.id', 'products.name as productName','products.alias as productAlias','products.photo as productPhoto','products.price as productPrice');

    	if ($request->cate) {
    		$result = $result->where('products.cate_id', $request->cate);
    	}
    	if ($request->price) {
    		$result = $result->whereBetween('products.price', array(0, $request->price));
    	}

    	$result = $result->orderBy('products.id', $request->sort ? $request->sort : 'asc')->paginate(12);
    	return response()->json([
    		'paginator'  => (String) $result->render(),
    		'data'		 => json_decode(json_encode($result))->data,
    	]);
    }
	
    public function service()
    {
    	$data = DB::table('about')->where('com','service')->first();
    	$title = 'Phí dịch vụ';
    	$com = 'service';
    	return view('templates.service', compact('title','com','data'));
    }
	public function download()
	{
		$title = 'Tải về';
		return view('templates.download', compact('title'));
	}
	public function huongdan()
	{
		
		$title = "Hướng dẫn";
		return view('templates.huongdan', compact('title'));
	}
}
