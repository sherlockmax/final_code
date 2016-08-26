<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        $input = Input::all();

        $rules = [
            'account'=>'required',
            'password'=>'required'
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->passes()) {
            $attempt = Auth::attempt([
                'account' => $input['account'],
                'password' => $input['password']
            ]);

            if ($attempt) {
                return Redirect::intended('/');
            }
            return Redirect::to('/login')
                ->withErrors(['fail'=>'Account or password is wrong!']);
        }

        return Redirect::to('/login')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}