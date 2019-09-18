<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Alaouy\Youtube\YoutubeServiceProvider;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Carbon\Carbon;


use Alaouy\Youtube\Facades\Youtube;
use Alaouy\Youtube\Facades\YoutubeServiceProvider;
use App\Video;
use App\Live_Video;
use App\Directory;
use App\job_opening;
use App\Event;
use App\Advertisement;
use App\CompanyDetail;



class MainController extends Controller
{
    
    public function __construct()
    {
        //$user = Auth::user();    
        
        $this->middleware(function ($request, $next) {
            $user = Auth::user();            
            view()->share('user', $user);
            return $next($request);
        });
    }


    public function index() {
        
        $currenttime = Carbon::now();
        //dd($currenttime);

        $videos      = Video::limit(6)->get();
        $live_videos = Live_Video::where('endtime','>=', $currenttime)->orderBy('starttime','asc')->first();
        if(empty($live_videos)) {
            $live_videos = Video::inRandomOrder()->first();
            //$live_videos = Video::first();
            $live_videos->filename = $live_videos->name;
        }
        //dd($live_videos);
        //$live_videos = Live_Video::all();
        //dd($live_videos->last());
        //dd($live_videos[0]->getOriginal()); 


        $directory   = Directory::orderBy('c_id')->limit(3)->get();
        $jobs        = job_opening::orderBy('job_id')->limit(5)->get();
        $event       = Event::orderBy('id')->limit(4)->where('status','ACTIVE')->get();
        $advtmid     = Advertisement::where('position','middle')->inRandomOrder()->limit(1)->get();
        $advtright   = Advertisement::inRandomOrder()->limit(1)->where('position','right')->get();
        $advtbottom  = Advertisement::inRandomOrder()->limit(1)->where('position','bottom')->get();
        //dd($advtright->id);
        $recommended = Video::inRandomOrder()->limit(10)->get();

        //news
        $feed = simplexml_load_file('https://news.google.com/news/rss');
        $worldfeeds=[];
        for($i=0;$i<5;$i++)
        {
            $worldfeeds[$i]= $feed->channel->item[$i];
        }
        
//dd($live_videos);
        return view('main.index',compact('directory','videos','jobs','event', 'live_videos','worldfeeds','recommended','advtmid','advtbottom','advtright'));


//        return view('main.index')->with(['videos'=>$videos, 'jobs' => $jobs]);
//dd('hello');
        /*$videos = Video::orderBy('id','desc')->first();
        dd(json_decode($videos->upload)[0]->download_link);
        return view('main.video',['videos'=>$videos]);*/
    }

    public function videothumb(Request $request){
        //$user = DB::table('files')->where('name', $name )->value('name');
        $video = Video::where('id', $request->id)->first();
        // dd($video);
        //$tags = Video::where('id',$request->id)->get()->all();

        $all = Video::limit(6)->get();

        return view('video.video')->with('video',$video)->with('all',$all);
    }


    //upload ad

     public function uploadad(Request $request)
    {
        return view('ad.uploadAd'); 
    }


    public function uploadadsubmit(Request $request)
    {
        if(!empty($request->file('fileupload1'))){
            $this->validate($request,[
                'fileupload1' =>'mimes:jpg,jpeg,png']);
            $filename1 = $request->file('fileupload1')->getClientOriginalName();
            $request->file('fileupload1')->storeAs('Advertisement',$filename1);
            
        } else {
            $fileupload1= '';
        }
        
         if(!empty($request->file('fileupload2'))){
            $this->validate($request,[
                'fileupload2' =>'mimes:jpg,jpeg,png']);
            $filename2 = $request->file('fileupload2')->getClientOriginalName();
            $request->file('fileupload2')->storeAs('Advertisement',$filename2);
            
        } else {
            $fileupload2= '';
        }
        
         if(!empty($request->file('fileupload3'))){
            $this->validate($request,[
                'fileupload3' =>'mimes:jpg,jpeg,png']);
            $filename3 = $request->file('fileupload3')->getClientOriginalName();
            $request->file('fileupload3')->storeAs('Advertisement',$filename3);
            
        } else {
            $fileupload3= '';
        }

        $ad = new Advertisement;

        $ad->ad_middle          = $filename1;
        $ad->ad_right           = $filename2;
        $ad->ad_bottom          = $filename3;
     
        $ad->save();
        
        return redirect()->back();
    }


    public function mainsearch(Request $request)
    {

        $searchkey= $request->search;
        $s = 'Bawana Chamber Of Industries';
       
        
        if($searchkey){ 
            $jobs = job_opening::where(function($query) use ($searchkey){
                $query->where('job_title' , 'like','%' .$searchkey. '%');
                $query->orWhere('skills' , 'like','%' .$searchkey. '%');
                $query->orwhere('company_name', 'LIKE', '%' .$searchkey. '%');
            });
            $jobs = $jobs->get();
            
           $videos = Video::where(function($query) use ($searchkey){
                $query->where('title' , 'like','%' .$searchkey. '%');
                $query->orWhere('tags' , 'like','%' .$searchkey. '%');
                $query->orwhere('name', 'LIKE', '%' .$searchkey. '%');
            });
           $videos = $videos->get();


           $directory = Directory::where(function($query) use ($searchkey){
                $query->where('cname' , 'like','%' .$searchkey. '%');
                $query->orWhere('industrytype' , 'like','%' .$searchkey. '%');
                $query->orwhere('businesstype', 'LIKE', '%' .$searchkey. '%');
            });
            $directory = $directory->get();

           $event = Event::where(function($query) use ($searchkey){
                $query->where('title' , 'like','%' .$searchkey. '%'); 
            });
           $event = $event->get();
            
            $results = Youtube::searchVideos($searchkey);

        }
        
        else
        {
            $videos      = Video::limit(6)->get();
            $directory   = Directory::orderBy('c_id')->limit(3)->get();
            $jobs        = job_opening::orderBy('job_id')->limit(5);
            $event       = Event::orderBy('id')->limit(4)->where('status','=','ACTIVE')->get();
            $results = Youtube::search($s);
        }
        
        //dd($results);

        return view('main.search',compact('directory','videos','jobs','event','results'));
    }


     //Current affairs function

   public function CurrentAffairs(Request $request)
    {
        return view('main.Currentaffairs'); 
    }




 //training's function

   public function training(Request $request)
    {
        return view('main.training'); 
    }

    // industrial property function
    public function industrialproperty(Request $request)
    {
        return view('main.industrialproperty'); 
    }

    // privacy and policy function
    public function privacyandpolicy(Request $request)
    {
        return view('main.privacyandpolicy'); 
    }

    //terms and conditions function
    public function termsandconditions(Request $request)
    {
        return view('main.termsandconditions'); 
    }


    //current Law function

   public function currentLaw(Request $request)
    {
        return view('main.currentLaw'); 
    }


    //labour Laws function

   public function labourLaws(Request $request)
    {
        return view('main.labourlaws'); 
    }


    //taxation function

   public function taxation (Request $request)
    {
        return view('main.taxation'); 
    }


    //Presently Development function

   public function presentlyDevelopment(Request $request)
    {
        return view('main.presentlydevelopment'); 
    }


    //new technology function

    public function newTechnology(Request $request)
    {
        return view('main.newtechnology'); 
    }


    //new products function

    public function newProducts(Request $request)
    {
        return view('main.newproducts'); 
    }

    
    //health function

    public function health(Request $request)
    {
        return view('main.health'); 
    }


    //how to grow business function

    public function growBusiness(Request $request)
    {
        return view('main.growbusiness'); 
    }

    
     //registerations and arade marks function 

     public function regAradeMarks(Request $request)
    {
                 
        return view('main.regarademarks');
    }


     public function  mainalljob(Request $request)
    {
        $jobs = job_opening::all();        
        return view('main.mainalljob',compact('jobs'));
    }

}
