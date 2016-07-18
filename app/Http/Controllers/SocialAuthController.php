<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class SocialAuthController extends LineupBeastController
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $providerUser = \Socialite::driver('facebook')->user();

        $name        =   $providerUser->name;
        $email       =   $providerUser->email;
        $social_id   =   $providerUser->id;
        $names       =   $providerUser->name;

        $names       =   explode(' ',$names);
        $first_name   =   $names[0];
        unset($names[0]);
        $last_name    =   implode(' ',$names);

        try {

            $response = $this->client->request('POST', $this->api_server_url.'user/register', [

                'form_params' => [
                    'email'         => $email,
                    'password'      => '',
                    'firstname'     => $first_name,
                    'lastname'      => $last_name,
                    'social_id'     => $social_id
                ]
            ]);

            $body = json_decode($response->getBody());

        } catch (\Exception $e) {

            if($e instanceof ServerException || $e instanceof ClientException){
                $body = json_decode($e->getResponse()->getBody(true));
                Flash::error($body->error);
                return redirect()->back()->withInput()->with('action','register');
            }
        }

        Session::set('user', $body->user);
        Session::set('user_id', $body->user->id);
        Session::set('access_token',  $body->token);
        return redirect()->action('HomeController@index');

    }
}
