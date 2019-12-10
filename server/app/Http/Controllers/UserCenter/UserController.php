<?php

namespace App\Http\Controllers\UserCenter;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userInfo()
    {
        $user = auth('api')->user();
        return responder()->success($user);
    }
    public function updateMyInfo(Request $request)
    {
        $nickname = $request->nickname;
        $name = $request->name;
        $avatar = $request->avatar;
        $user = auth('api')->user();
        if ($nickname) {
            $user->nickname = $nickname;
        }
        if ($name) {
            $user->name = $name;
        }
        if ($avatar) {
            $user->avatar = $avatar;
        }
        $user->save();
        return responder()->success($user);
    }
    public function changePhone(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'verifyCode' => 'required|verify_code',
        ]);
        if ($validator->fails()) {
            return responder()->error(400, '验证码错误');
        }
        $phone = $request->input('phone');
        if(!$phone){
            return responder()->error(400, '缺少手机号');
        }
        $exists = User::where('phone', $phone)->first();
        if($exists){
            return responder()->error(400, '该手机号已经被使用');
        }
        $user = auth('api')->user();
        $user->phone = $phone;
        $user->save();
        return responder()->success($user);
    }
}
