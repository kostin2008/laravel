<?php declare(strict_types=1);

namespace App\Services;

use App\Models\User as Model;
use SocialiteProviders\Manager\OAuth2\User;

class SocialiteService {
    public function userLogin(User $user) {
        $email = $user->getEmail();
        $userDate = Model::where('email', $email)->first();
        if($userDate) {
            Auth::loginUsingId($userDate->id);
        }
    }
}