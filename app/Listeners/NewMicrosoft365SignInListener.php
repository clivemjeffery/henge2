<?php

namespace App\Listeners;

use App\Models\User;
use Dcblogdev\MsGraph\MsGraph;
use Illuminate\Support\Facades\Auth;

class NewMicrosoft365SignInListener
{
    public function handle(object $event): void
    {
        $info = [
            'name_first' => $event->token['info']['givenName'],
            'name_last' => $event->token['info']['surname'],
            'name_pref' => $event->token['info']['displayName'],
            'email' => $event->token['info']['mail'] ?? $event->token['info']['userPrincipalName'],
            'password' => '',
            'user_type' => 'staff',
        ];

        $user = User::firstOrCreate(['email' => $info['email']], $info);

        (new MsGraph())->storeToken(
            $event->token['accessToken'],
            $event->token['refreshToken'],
            $event->token['expires'],
            $user->id,
            $user->email
        );

        Auth::login($user);
    }
}
