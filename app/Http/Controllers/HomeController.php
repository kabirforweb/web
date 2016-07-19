<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Log;

class HomeController extends LineupBeastController
{

    public function landing(){
        return view('guest.welcome');
    }

    public function signUp(Request $request){

        $_previous = (Session::get('_previous'));

        if(!preg_match('/login$/',$_previous['url'])){
            Session::set('redirectTo',$_previous['url']);
        }

        if($request->has('msg')){
            Flash::error($request->get('msg'));
            return Redirect::to('login')->withInput()->with('action','register');
        }

        Session::put('action','register');
        return view('guest.login');
    }

    public function register(Request $request){

        if( null === $request->email        ||
            null === $request->firstname    ||
            null === $request->lastname     ||
            null === $request->password
        ){
            Flash::error('One of the required field is empty');
            return redirect()->back()->withInput($request->all())->with('action','register');
        }

        try {

            $response = $this->client->request( 'POST', $this->api_server_url.'user/register', [

                'form_params' => [
                    'email'         => $request->email,
                    'password'      => $request->password,
                    'firstname'     => $request->firstname,
                    'lastname'      => $request->lastname,
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

    public function login(Request $request){

        $_previous = (Session::get('_previous'));

        if(!preg_match('/login$/',$_previous['url'])){
            Session::set('redirectTo',$_previous['url']);
        }

        if($request->has('msg')){
            Flash::error($request->get('msg'));
            return Redirect::to('login')->withInput()->with('action','login');
        }

        return view('guest.login');
    }

    public function authenticate(Request $request){

        $inputs = $request->all();

        try {

            $response = $this->client->request( 'POST', $this->api_server_url.'user/auth', [
                'form_params' => [
                    'email'         => $inputs['username'],
                    'password'      => $inputs['password'],
                    ]
            ]);

            $body = json_decode($response->getBody());

        } catch (ClientException $e) {
            if($e instanceof ServerException || $e instanceof ClientException){
                $body = json_decode($e->getResponse()->getBody(true));
                Flash::error($body->error);
                return redirect()->back()->withInput($request->all())->with('action','login');
            }
        }
        Session::set('user', $body->user);
        Session::set('user_id', $body->user->id);
        Session::set('access_token',  $body->token);
        return redirect()->action('HomeController@index');
    }

    public function logout(){

        Session::forget('user_id');
        Session::forget('access_token');

        Flash::success('Logged out successfully');
        return redirect()->route('login')->with('action','login');;
    }

    public function forgotPassword(Request $request){

        if( !$request->has('email') || empty($request->get('email') ) ){
            Flash::error('Please enter your email');
            return redirect()->back()->withInput($request->all())->with('action','forgot_password');
        }

        try {

            $response = $this->client->request( 'POST', $this->api_server_url.'user/forgot-password', [
                'form_params' => [
                    'email'         => $request->get('email')
                ]
            ]);

            $body = json_decode($response->getBody());

        } catch (\Exception $e) {
            if($e instanceof ServerException || $e instanceof ClientException){
                $body = json_decode($e->getResponse()->getBody(true));

                Flash::error($body->error);
                return redirect()->back()->withInput($request->all())->with('action','forgot_password');
            }
        }

        Flash::success('A password reset email has been sent successfully');
        return redirect()->back()->with('action','forgot_password');

    }

    public function confirmPasswordReset($token){

        try {
            $response = $this->client->request( 'GET', $this->api_server_url.'user/verify-forgot-password-token/'.$token);
        } catch (\Exception $e) {
            if($e instanceof ServerException || $e instanceof ClientException){
                Flash::error('This URL is no longer valid');
                return view('guest.bad_token')->with('action','forgot_password');
            }
        }

        $response   =   json_decode($response->getBody());
        Session::put('user_id',$response->user_id);
        return view('guest.confirm_password')->with('user_id',$response->user_id);
    }

    public function resetPassword(Request $request){

        try {

            $response = $this->client->request( 'POST', $this->api_server_url.'user/confirm-password', [
                'form_params' => [
                    'user_id'                   => Session::get('user_id'),
                    'password'                  => $request->get('password'),
                    'confirm_password'          => $request->get('confirm_password'),
                ]
            ]);

            $body = json_decode($response->getBody());

        } catch (\Exception $e) {
            if($e instanceof ServerException || $e instanceof ClientException){
                $body = json_decode($e->getResponse()->getBody(true));
                Flash::error($body->error);
                return redirect()->back()->withInput($request->all());
            }
        }

        Flash::success('Your password has been reset successfully!');
        return redirect()->route('login')->with('action','login');
    }

    public function index(){

        $user   =   Session::get('user')->firstname;
        return view('test.dashboard')->with(compact('user'));
    }

}
