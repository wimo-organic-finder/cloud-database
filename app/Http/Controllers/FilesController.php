<?php
namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{

	public function show(){
		$files = File::all();

        return view('user/index',['files'=> $files]);
	}
	public function upload(){
			return view('admin/upload');
	}
    public function store(Request $request)
{
		$name = $request->title .'.'. $request->file->getClientOriginalExtension();
		if($request->file->storeAs('files', $name)){
				    $file = File::create([
	    	"name"=>$name,
	    	"type" =>$request->file->getMimeType(),
	    	"size"=>$request->file->getSize(),
	    	"description"=>$request->description
		    ]);
		}
	    
		$file->save();

		
		return redirect()->back();
}



    public function showAdmin(){
        $files = File::all();

        return view('admin/index_admin',['files'=> $files]);
    }
    public function delete($id){
    $file = File::find($id);
    Storage::delete("files/" . $file->name);
    $file->delete();
    return redirect()->back();
    }
    public function download($id){
    	$file = File::find($id);
    	return response()->download(storage_path('app/files/' . $file->name));
    }
}
