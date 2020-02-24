<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;

use App\User;

class UserController extends Controller
{
  public function index()
  {
    return view('users.index');
  }

  public function add()
  {
    return view('users.add');
  }

  public function addPost(AddUserRequest $request)
  {
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $user->save();
    return redirect()->route('users');
  }
}
