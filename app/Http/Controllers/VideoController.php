<?php

namespace App\Http\Controllers;

use Thumbnail;
use App\Video;
use App\Live_Video;
use FFMpeg;
use Illuminate\Http\Request;
use Session;

class VideoController extends Controller
{

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function upload(request $request)
    {
    	return view('admin.upload');
    }

    public function storeFile(request $request)
    {
    	if($request->hasFile('videoFile') && $request->hasFile('thumbFile'))
    	{
            
    		$filename = $request->file('videoFile')->getClientOriginalName();
            $thumbname = $request->file('thumbFile')->getClientOriginalName();
            $withoutExtFile = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

    		$filesize = $request->file('videoFile')->getClientSize(); // file size in bytes
    		$request->file('videoFile')->storeAs('video/upload',$filename);
            $request->file('thumbFile')->storeAs('video/thumbs',$thumbname);
            //$videoUrl = storage_path('\\app\\public\\upload\\'.$filename);
            //$storageUrl = storage_path('\\app\\public\\upload\\thumbs\\');


            // ---------Uncomment Later----------
            $ffprobe = \FFMpeg\FFProbe::create();
            $durationVid = $ffprobe->format('video/upload/'.$filename)->get('duration');
            // --------------------------------------
            //$durationVid = 300;
    		$file = new Video;

            $file->name = $filename;
            $file->title = $request->title;
            $file->description = $request->description;
            $file->category = $request->category;
            $file->tags = $request->tags;
    		$file->size = $filesize;
            $file->duration = $durationVid;
            $file->tags = $request->tags;
            $file->slug = hash('crc32',time());
            $file->thumbnail = $thumbname;
            $file->visible = 1;
            // ---------Uncomment Later----------
            // $file->thumbnail = $withoutExtFile.'.png';
             // --------------------------------------

    		$file->save();   
            // Thumbnail::getThumbnail(public_path('/video/upload/'.$filename),public_path('video/thumbs/') ,$withoutExtFile.'.png', $durationVid/2);

            // $ffprobe = \FFMpeg\FFProbe::create();
            // $durationVid = $ffprobe->format('storage/upload/'.$filename)->get('duration');
            
            // return response()->json(['success'=>'You have successfully upload file.']);            // dd(floor($durationVid));
            Session::flash('successMessage', 'Video Added Successfully');
            return redirect()->back();
    	}
    	return $request->all();
    }

    public function fetch()
    {
        $videos = Video::all();

    	return view('admin.fetch')->with('videos',$videos);
    }

    public function delete($id)
    {
        $video = Video::find($id);
        $video->delete();

    	return redirect()->back();
    }

    public function update($id)
    {
        $video = Video::find($id);

    	return view('admin.update')->with('video',$video);
    }

    public function save(Request $request, $id)
    {
        $video = Video::find($id);
        $video->title = $request->title;
        $video->description = $request->description;
        $video->tags = $request->tags;
        $video->save();
        return redirect()->route('videoall');
    }

}
