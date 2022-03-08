<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = "tmp-" . uniqid() . "." . $file->extension();
            $folder = "public/temp";
            $file->storeAs($folder, $filename);
            return $filename;
        }
        return "";

        // $files = $request->file('avatar');

        // foreach ($files as $file) {
        //     $filename = $file->getClientOriginalName();
        //     $folder = uniqid();
        //     $file->move("uploads/tmp/" . $folder, $filename);
        //     $url = "uploads/tmp/" . $folder . "/" . $filename;
        //     return $url;
        // }
        // return '';
    }

    public function delete(Request $request)
    {
        Storage::delete('public/temp/' . $request->getContent());
    }
}