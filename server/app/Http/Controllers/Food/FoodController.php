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
        $data['name'] = $request->input('name');
        $data['introduce'] = $request->input('introduce');
        $data['score'] = $request->input('score');
        $data['image'] = $request->input('image');
    }
}
