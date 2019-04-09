<?php

namespace App\Http\Controllers;

use Thumbnail;
use App\Video;
use FFMpeg;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function showUploadForm()
    {
    	return view('video.upload');
    	// return $request->all();
    }

    public function storeFile(request $request)
    {
    	if($request->hasFile('videoFile'))
    	{
    		$filename = $request->file('videoFile')->getClientOriginalName();
            $withoutExtFile = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

    		$filesize = $request->file('videoFile')->getClientSize(); // file size in bytes
    		$request->file('videoFile')->storeAs('video/upload',$filename);
            //$videoUrl = storage_path('\\app\\public\\upload\\'.$filename);
            //$storageUrl = storage_path('\\app\\public\\upload\\thumbs\\');

            $ffprobe = \FFMpeg\FFProbe::create();
            $durationVid = $ffprobe->format('video/upload/'.$filename)->get('duration');
    		$file = new Video;
    		$file->name = $filename;
    		$file->size = $filesize;
            $file->duration = $durationVid;
            $file->tags = $request->tags;
            $file->slug = hash('crc32',time());
            $file->thumbnail = $withoutExtFile.'.png';
    		$file->save();

            Thumbnail::getThumbnail(public_path('/video/upload/'.$filename),public_path('video/thumbs/') ,$withoutExtFile.'.png', $durationVid/2);

            // $ffprobe = \FFMpeg\FFProbe::create();
            // $durationVid = $ffprobe->format('storage/upload/'.$filename)->get('duration');

            return 'done';
            // dd(floor($durationVid));
    	}
    	return $request->all();
    }
}
