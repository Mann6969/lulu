<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function upload(Request $request)
    {
        // $request->validate([
        //     'upload' => 'image',
        // ]);
        // if ($request->hasFile('upload')) {
        //     $originName = $request->file('upload')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $extension = $request->file('upload')->getClientOriginalExtension();
        //     $fileName = $fileName . '_' . time() . '.' . $extension;

        //     $request->file('upload')->move(public_path('images'), $fileName);
        //     $ckeditorfuncnum=$request->input('ckeditorfuncnum');

        //     $url = asset('images/' . $fileName);
        //     $msg='message uploaded successfully';
        //     $response="<script> window.parent.CKEDITOR.tools.callFunction($ckeditorfuncnum,'$url','$msg') </script>";
        //     // $response=->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        //     @header('Content-type:text/html; charset=utf-8');
        //     echo $response;  
        //     // response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);   

        //     // echo response();

        // }
        // dd($request);
        // $request->validate([
        //     'upload' => 'image',
        // ]);
        // if ($request->hasFile('upload')) {
        //     // $request->file('upload')->move(public_path('images'), $fileName);
        //     $url = $request->upload->store('images');
        //     $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        //     $url = asset('storage/' . $url);
        //     $msg = 'Image successfully uploaded';
        //     $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
        //     @header('Content-type: text/html; charset=utf-8');
        //     return $response;
        // }
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    /**
     */
    public function __construct()
    {
    }
}
