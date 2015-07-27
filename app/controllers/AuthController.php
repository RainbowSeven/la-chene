<?php

class AuthController extends BaseController {
    protected $restful = true;

    public function getLogin() {
        return View::make('admin.forms.login');
    }

    public function postLogin() {
        $data = Input::all();
        $remember = Input::get('remember')?true:false;
        $validator = Validator::make($data, User::$auth_rules);

        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        if(Auth::attempt(['email'=>Input::get('email'), 
            'password'=>Input::get('password')], $remember))
        {
            return Redirect::intended('admin/quotes');
        }
        //return var_dump(Input::all());
        return Redirect::to('admin/login');
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('admin/login');
    }

}