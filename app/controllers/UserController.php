<?php

class UserController extends BaseController {

    
    /**
     * Show the profile for the given user.
     */
    
    
    public function showProfile()
    {
        return View::make('user.profile', array('user' => Auth::user()));
    }
        
    public function showUserInfo($id)
    {
        $user = User::find($id);
        return View::make('user.info', array('user' => $user));
    }
    
    public function showLogin() {
        return View::make('user.login');
    }
    
    
    public function doLogin() {
        $credential  = Input::only('email', 'password');
        if (Auth::attempt($credential)){
            return Redirect::to('/home');
        } else {
            return Redirect::to('/')->with('login_errors', true);
        }
    }
    
    
    public function logout() {
        
    }
    
    

}