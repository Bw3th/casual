<?php

namespace App\Http\Controllers\Food;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Foods;

class FoodController extends Controller
{
    public function index()
    {
        $res = Foods::where('is_delete',0)->paginate();
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
        $data['score'] = $request->input('score')?$request->input('score'):'';
        $data['image'] = $request->input('image')?$request->input('image'):'';
        $data['created_at'] = date("Y-m-d H:i:s");
        $data['updated_at'] = date("Y-m-d H:i:s");
        $res = Foods::insert($data);
        $response['successful'] = $res;
        return $response;
    }
}
