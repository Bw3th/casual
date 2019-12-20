<?php

namespace App\Http\Controllers\Food;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foods;
use App\File;

class FoodController extends Controller
{
    public function index()
    {
        $res = Foods::where('is_delete',0)->paginate();
        foreach($res as $k => $v){
            $file = explode(',',$v['file']);
            $img = [];
            $imgnum = 0;
            $files = [];
            $filenum = 0;
            if($file[0]){
                foreach($file as $key => $val){
                    $path = File::find($val);
                    
                    if(in_array($path['ext'],['png','jpg','jpeg'])){
                        $img[$imgnum]['url'] = "http://122.51.233.226/Uploads".$path['savepath'].'/'.$path['savename'].'.'.$path['ext'];
                        $img[$imgnum]['filename'] =$path['name'].'.'.$path['ext'];
                        $imgnum += 1;
                    }else{
                        $files[$filenum]['url'] = "http://122.51.233.226/Uploads".$path['savepath'].'/'.$path['savename'].'.'.$path['ext'];
                        $files[$filenum]['filename'] =$path['name'].'.'.$path['ext'];
                        $filenum += 1;
                    }
                }
            }
            $res[$k]['file'] = $img;
            $res[$k]['otherFile'] = $files;
        }
        return responder()->success($res);
    }

    public function add(Request $request)
    {
        $response = [
            'error_code' => 0,
            'error_msg' => 'success',
            'failed' => [],
            'successful' => [],
        ];
        $data['name'] = $request->input('name')?$request->input('name'):'';
        $data['introduce'] = $request->input('introduce')?$request->input('introduce'):'';
        $data['score'] = $request->input('score')?$request->input('score'):0;
        $data['image'] = implode(',',$request->input('image',[]));
        $data['created_at'] = date("Y-m-d H:i:s");
        $data['updated_at'] = date("Y-m-d H:i:s");
        $res = Foods::insert($data);
        $response['successful'] = $res;
        return $response;
    }

    public function update(Request $request,$id)
    {
        $response = [
            'error_code' => 0,
            'error_msg' => 'success',
            'failed' => [],
            'successful' => [],
        ];
        $data['name'] = $request->input('name')?$request->input('name'):'';
        $data['introduce'] = $request->input('introduce')?$request->input('introduce'):'';
        $data['score'] = $request->input('score')?$request->input('score'):0;
        $data['image'] = implode(',',$request->input('image',[]));
        return $data['image'];
        $data['updated_at'] = date("Y-m-d H:i:s");
        $res = Foods::find($id);
        $res->update($data);
        $response['successful'] = $res;
        return $response;
    }

    public function delete($id)
    {
        $res = Foods::find($id);
        $res->update([
            'is_delete' => 1,
        ]);
        return [
            'success' => true,
            'data' => $res
        ];
    }
}
