<?php

namespace App\Http\Controllers;

use Thumbnail;
use App\File;
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
    		$request->file('videoFile')->storeAs('public/upload',$filename);
            $videoUrl = storage_path('\\app\\public\\upload\\'.$filename);
            $storageUrl = storage_path('\\app\\public\\upload\\thumbs\\');

            $ffprobe = \FFMpeg\FFProbe::create();
            $durationVid = $ffprobe->format('storage/upload/'.$filename)->get('duration');

    		$file = new File;
    		$file->name = $filename;
    		$file->size = $filesize; 
            $file->duration = $durationVid;
            $file->thumbnail = $withoutExtFile.'.png';
    		$file->save();

            
            Thumbnail::getThumbnail('storage/upload/'.$filename, 'storage/thumbs/',$withoutExtFile.'.png', 5);

            $ffprobe = \FFMpeg\FFProbe::create();
            $durationVid = $ffprobe->format('storage/upload/'.$filename)->get('duration');

            // return 'done'; 
            dd(floor($durationVid));
    	}
    	return $request->all();
    }
}
