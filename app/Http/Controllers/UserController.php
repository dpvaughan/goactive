<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile(){

      if (Auth::check()){

        $userInfo = Auth::user();
        
        return view('pages.students_profile', ['name' => $userInfo->name]);

      }

    }

}
