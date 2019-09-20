<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\VideoCategory;


class VideoCategoryController extends Controller
{
    public function page()
    {
    	return view('admin.newcategory');
    }

    public function add(Request $request)
    {

        $category = new VideoCategory;
        $category->category = $request->category;
        $category->save();
        // return redirect()->route('categorypage');
           return  redirect('admin/category/all')->with('status', 'Successfully Added!');

    }

    public function fetch()
    {
        $categories = VideoCategory::all();

    	return view('admin.allcategory')->with('categories',$categories);
    }

    public function delete($id)
    {
        $category = VideoCategory::find($id);
        $category->delete();

    	return redirect()->back();
    }

    public function update($id)
    {
        $category = VideoCategory::find($id);

    	return view('admin.updatecategory')->with('category',$category);
    }

    public function save(Request $request, $id)
    {
        $category = VideoCategory::find($id);
        $category->category = $request->category;
        $category->save();
        // return redirect()->route('allcategory'); 
        return  redirect('admin/category/all')->with('status', 'Successfully Updated!');
    }

}
