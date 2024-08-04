<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {

    public function index(Request $request)
    {
        error_log($request->get('user.0.name'));
    }

    public function create(Request $request)
    {
        $post = new User;
        $post -> name = $request->name;
        $post -> email = $request->email;
        $post -> password = $request->password;
        $post->save();
        error_log('Does this print to terminal');
        return redirect('/signup')->with('status', 'User has been created');
    
    }

}