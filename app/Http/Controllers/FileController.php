<?php

namespace App\Http\Controllers;

use VideoThumbnail;
use App\File;
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
    	if($request->hasFile('file'))
    	{
    		$filename = $request->file->getClientOriginalName();
            $withoutExtFile = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    		$filesize = $request->file->getClientSize(); // file size in bytes
    		$videoUrl = $request->file->storeAs('public/upload',$filename);
            $storageUrl = storage_path().'\app\public\upload\thumbs';
    		$file = new File;
    		$file->name = $filename;
    		$file->size = $filesize; 
            $file->thumbnail = $withoutExtFile;
    		$file->save();

            VideoThumbnail::createThumbnail($videoUrl, $storageUrl ,$withoutExtFile.'.jpeg',5);

            return 'done'; 

    	}
    	return $request->all();
    }

    public function display()
    {

        $files = File::all();
        return view('main.index')->with('files',$files);

    }
}
