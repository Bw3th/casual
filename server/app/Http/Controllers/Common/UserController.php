<?php

namespace App\Http\Controllers\Common;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Auth\AuthenticationException;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->only('logout');
    }
    public function login(Request $request)
    {
        $password = $request->input('password');
        $username = $request->input('userName');
        
        $loginType = $request->input('login_type', 'email-password');
        switch ($loginType) {
            case 'username-password':
                $credentials['username'] = $username;
                break;
            case 'phone-password':
                $credentials['phone'] = $username;
                break;
            case 'email-password':
                $credentials['email'] = $username;
                break;
            case 'username-name':
                $credentials['username'] = $username;
                $credentials['name'] = $password;
            default:
                $credentials['username'] = $username;
                break;
        }
        $user = User::where($credentials)->first();
        if (!$user) {
            throw new AuthenticationException('用户不存在');
        } else {
            $hasher = new BcryptHasher();
            if ($hasher->check($password, $user->getAuthPassword())) {
                $token = $user->createToken('Login Success:' . $loginType);
                $token->token_type = 'Bearer';
                $res = [
                    'access_token' => $token->accessToken,
                    'token_type' => 'Bearer',
                ];
                return responder()->success($res);
            }
        }
        throw new AuthenticationException('用户名密码错误');
    }

    public function logout(Request $request)
    {
        $user = auth('api')->user();
        $user->token()->revoke();
        $user->token()->delete();
        // $user = auth('api')->user();
        // $tokens = Token::where([['user_id', $user->getKey()]])->get();
        // foreach ($tokens as $token) {
        //     $token->revoke();
        // }
        return responder()->success();
    }
}
