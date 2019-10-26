<?php
namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function store(Request $request)
{
    $request->logo->storeAs('files', $request->title .'.'. $request->type);
    /*$file = new File();
    $file->name = $request->title;
    $file->type = $request->type;
    $file->size = $request->logo->getSize();
    $file->description = $request->description;
    $file->save(); */
    /*$file = File::create([])*/
    $file = File::create([
    	"name"=>$request->title,
    	"type" =>$request->type,
    	"size"=>$request->logo->getSize(),
    	"description"=>$request->description
    ]);
$file->save();
}
    public function show(){
        $files = File::all();

        return view('fichier',['files'=> $files]);
    }
    public function delete($id){
    $file = File::find($id);
    Storage::delete("files/" . $file->name.'.'.$file->type);
    $file->delete();
    return redirect()->back();
    }
    public function download($id){
    	$file = File::find($id);
    	return response()->download(storage_path('app/files/' . $file->name.'.'.$file->type));
    }
}
