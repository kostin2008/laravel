<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Laravel\Socialite\Facades\Socialite;
use App\Services\SocialiteService;

class SocialiteController extends Controller
{
    public function init(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialiteService $service) {
        $user = Socialite::driver('facebook')->user();
        $service->userLogin($user);

        return redirect()->route('admin.news.index');
    }
}