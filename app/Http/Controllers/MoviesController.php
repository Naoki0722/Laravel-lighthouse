<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MoviesController extends Controller
{
    // 保存したファイルを出力する
    public function show()
    {
        $files = Storage::disk('public')->files('');
        foreach($files as $file) {
            if(strpos($file, 'mp4')) {
                $fileInfo[] = $file;
            }
        }
        return view('movie.index')->with('fileInfo', $fileInfo);
    }

    public function index()
    {
        return view('movie.form');
    }

    public function register(Request $request)
    {
        $file_name = $request->file('file')->getClientOriginalName();
        Storage::disk('local')->putFileAs('public', $request->file('file'), $file_name);

        return view(('movie.complete'));
    }
}
