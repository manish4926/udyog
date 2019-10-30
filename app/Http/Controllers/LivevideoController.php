<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Live_Video;
use App\Video;
use Carbon\Carbon;
class LivevideoController extends Controller
{

    public function __construct()
    {
        //$user = Auth::user();    
        
        $this->middleware(function ($request, $next) {
            $user = Auth::user();      
            $recentpostedvideos = Video::orderBy('id','desc')->limit(4)->get();      
            view()->share(['user'=> $user,'recentpostedvideos' => $recentpostedvideos]);
            return $next($request);
        });
    }
    
     public function index()
    {
        $currenttime = Carbon::now();
        Live_Video::where('endtime','<=', $currenttime)->delete();
    	$video= Video::orderBy('id')->get();
        $livevideo= Live_Video::orderBy('order')->get();

        $videos= $video->filter(function($allvideo, $key){
            return $allvideo->id;
        })->values();

        $livevideos= $livevideo->filter(function($livvideo, $key){
            return  $livvideo->id;
        })->values();        

    	//return view('admin.videos.index',compact('videos'));
        return view('admin.videos.index')->with([
            'videos' => $videos,
            'livevideos' => $livevideos,
        ]);
    }
    public function show($id)
    {
    	$video=Live_Video::findOrFail($id);
    	return view('admin.videos.show',compact('video'));
    }
    public function edit($id)
    {
    	$video=Live_Video::findOrFail($id);
    	return view('admin.videos.edit',compact('video'));
    }
    public function update(Request $request, $id)
    {
    	$request->validate([
    		'name'=>'required',
    		'description'=>'required'
    	]);
    	Live_Video::findOrFail($id)->update($request->all());
    	//Video::findOrFail($id)->update($request->name, $request->description);
    	return redirect()->route('videos.index')->with('success','Video Info Updated Successfully');
    }
    public function updateAll(Request $request)
    {
        $videos= Live_Video::all();
        //dd($request->videos);
        //return 'hello';
        foreach ($videos as $video) 
        {
            //$video->timestamp = false;
            $id = $video->id;
            foreach ($request->videos as $videoOrder) 
            {
                if($videoOrder['id'] == $id)
                {
                    $video->update(['order'=> $videoOrder['order']]);
                }
            }
        }
        return response('Update Successful.',200);
    }

    public function updateLive(Request $request)
    {
        $currentVisibility = $request->visible;
        

        if($currentVisibility==1)
        {
            
             $video = Video::find($request->id);
             $video->visible='1';
             $video->save();

             $videos= Video::all();
            foreach ($video as $videos) 
            {
                //$video->timestamp = false;
                $id = $videos->id;
                foreach ($request->video as $videoOrder) 
                {
                    if($videoOrder['id'] == $id)
                    {
                        $video->update(['order'=> $videoOrder['order']]);
                    }
                }
            }

            //Video_Info::where('id',$request->id)->update(['visible' => 0]);
        }
        elseif ($currentVisibility==0) {
               
               
               $temp = Video::find($request->id);

               //$date = Carbon::now();
               

               //dd($temp->description); 
               $livevideo = new Live_Video;

              
               
                   $livevideo->video_id = $temp->id;
                   $livevideo->name = $temp->title;
                   $livevideo->filename = $temp->name;
                   $livevideo->description = $temp->description;
                   $count = Live_Video::count();
                   $livevideo->order = $count + 1;
                   
                   $livevideo->duration = $temp->duration;
                   $livevideo->visible = 0;
                   
                   $count = Live_Video::count();
                   if($count == 0)
                   {
                        $starttime = Carbon::now();
                        $endtime = Carbon::now()->addSeconds($temp->duration);
                        
                        $livevideo->starttime = $starttime;
                        $livevideo->endtime = $endtime;
                   }
                   else
                   {
                        $last= Live_Video::orderBy('id', 'DESC')->first();
                        $starttime = Carbon::parse($last->endtime)->addSecond();
                        
                        $endtime = Carbon::parse($last->starttime)->addSeconds($temp->duration + 1);

                        $livevideo->starttime = $starttime;
                        $livevideo->endtime = $endtime;
                        

                   }
                    
                
                   
                   //dd($date);
                   
                   //$livevideo->endtime = $date;

                   //dd($date);
                   $livevideo->save();
        }

            return response('Update Successful',200);
    }

     public function updateAllLive(Request $request)
    {
        //dd($request->videosNotVisible);
        $livevideos= Live_Video::all();
        //dd($request->videos);
        //return 'hello';
        foreach ($livevideos as $video) 
        {
            //$video->timestamp = false;
            $id = $video->id;
            foreach ($request->livevideos as $videoOrder) 
            {
                if($videoOrder['id'] == $id)
                {
                    $video->update(['order'=> $videoOrder['order']]);
                }
            }
        }
        return response('Update Successful.',200);
    }

    public function destroy($id)
    {
    	Live_Video::findOrFail($id)->delete();
        /*$counter=1;
        $videos= Live_Video::where('id', 'id')->pluck('id');
        //$titles = DB::table('roles')->pluck('title');
        foreach ($videos->id as $ids) 
        {
            Live_Video::where('id', $ids['id'])->update(['order' => $counter]);
            $counter++;
        }*/
        $videos = Live_Video::all();
        $counter= 1;
        
        foreach ($videos as $video) 
        {
            $id = $video->id;
            if ($video['id'] == $id)
            {
                // $video->update(['order' => $video['$counter']]);
                Live_Video::findOrFail($id)->update(['order' => $counter]);
                $counter++;
            }           
        }
    	return redirect()->route('videos.index')->with('success','Video Info Deleted Successfully');
    }

    public function getNextVideo(Request $request)
    {
        $starttime = $request->starttime;
        //$live_videos = Live_Video::where('starttime','>=', $starttime)->orderBy('starttime','asc')->first()->toJson(); 
        $live_videos = Live_Video::orderBy('id','desc')->first()->toJson(); 
        return $live_videos;
    }

    public function getcurrentvideo(Request $request)
    {
        //$starttime = $request->starttime;
        $starttime = Carbon::now();
        $live_videos = Live_Video::where('starttime','>=', $starttime)->orderBy('starttime','asc')->first(); 
        //dd($live_videos);
        $playtime = strtotime($live_videos->starttime) - strtotime($starttime);
        //dd($playtime);
        //$live_videos = Live_Video::orderBy('id','desc')->first()->toJson(); 
        return view('testvideo',compact('live_videos,','playtime'));
    }

    //new scheduler

    public function moveToLive(Request $request)
    {       
        $temp = Video::find($request->id);
        //dd($temp);

        $livevideo = new Live_Video;
        
        $livevideo->video_id = $temp->id;
        $livevideo->name = $temp->title;
        $livevideo->filename = $temp->name;
        $count = Live_Video::count();
        $livevideo->order = $count + 1;
        $livevideo->duration = $temp->duration;
        //$livevideo->visible = 0;

        $count = Live_Video::count();
           if($count == 0)
           {
                $starttime = Carbon::now();
                $endtime = Carbon::now()->addSeconds($temp->duration);
                
                $livevideo->starttime = $starttime;
                $livevideo->endtime = $endtime;
           }
           else
           {
                //$last= Live_Video::orderBy('id', 'DESC')->first();
                $last = Live_Video::latest()->first();

                $starttime = Carbon::parse($last->endtime)->addSecond();
                $endtime = Carbon::parse($last->starttime)->addSeconds($temp->duration + 1);

                $livevideo->starttime = $starttime;
                $livevideo->endtime = $endtime;                
           }
            
             $livevideo->save();
             return response('Update Successful',200);
             /*$video = Video::find($request->id);
             //$video->save();
             $videos= Video::all();
            foreach ($video as $videos) 
            {
                //$video->timestamp = false;
                $id = $videos->id;
                foreach ($request->video as $videoOrder) 
                {
                    if($videoOrder['id'] == $id)
                    {
                        $video->update(['order'=> $videoOrder['order']]);
                    }
                }
            }

            //Video_Info::where('id',$request->id)->update(['visible' => 0]);
        }
        elseif ($currentVisibility==0) {
               
               
               $temp = Video::find($request->id);

               //$date = Carbon::now();
               

               //dd($temp->description); 
               $livevideo = new Live_Video;

              
               
                   $livevideo->video_id = $temp->id;
                   $livevideo->name = $temp->title;
                   $livevideo->filename = $temp->name;
                   $livevideo->description = $temp->description;
                   $count = Live_Video::count();
                   $livevideo->order = $count + 1;
                   
                   $livevideo->duration = $temp->duration;
                   $livevideo->visible = 0;
                   
                   $count = Live_Video::count();
                   if($count == 0)
                   {
                        $starttime = Carbon::now();
                        $endtime = Carbon::now()->addSeconds($temp->duration);
                        
                        $livevideo->starttime = $starttime;
                        $livevideo->endtime = $endtime;
                   }
                   else
                   {
                        $last= Live_Video::orderBy('id', 'DESC')->first();
                        $starttime = Carbon::parse($last->endtime)->addSecond();
                        
                        $endtime = Carbon::parse($last->starttime)->addSeconds($temp->duration + 1);

                        $livevideo->starttime = $starttime;
                        $livevideo->endtime = $endtime;
                        

                   }
                    
                
                   
                   //dd($date);
                   
                   //$livevideo->endtime = $date;

                   //dd($date);
                   $livevideo->save();
        }

            return response('Update Successful',200);*/
    }


}
