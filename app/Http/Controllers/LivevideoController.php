<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Live_Video;
use App\Video;

class LivevideoController extends Controller
{
     public function index()
    {
    	$videos= Live_Video::orderBy('order')->get();
    	return view('admin.videos.index',compact('videos'));
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
}
