<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $name = explode('.',$request->file('file')->getClientOriginalName());
        $ext = $request->file('file')->getClientOriginalExtension();
        $savename = time().rand();
        $savepath = '/'.date('Y-m-d',time());
        $size = $request->file('file')->getClientSize();
        $id = File::insertGetId([
            'name' => $name[0],
            'ext' => $ext,
            'savename' => $savename,
            'savepath' => $savepath,
            'size' => $size,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        $savename = $savename.".".$ext;
        $request->file('file')->move('./Uploads'.$savepath,$savename);
        return $id;
    }
}
