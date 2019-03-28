<?php

namespace App\Http\Controllers;

use Thumbnail;
use App\File;
use FFMpeg;
use Illuminate\Http\Request;

class FileController extends Controller
{
	
    public function showUploadForm()
    {
    	return view('main.upload');
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

    		$file = new File;
    		$file->name = $filename;
    		$file->size = $filesize; 
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

    public function display()
    {
        $files = File::all();
        return view('main.index')->with('files',$files);

    }
}
