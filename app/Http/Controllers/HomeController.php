<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->isAdmin){
            $users = User::all()->where('isAdmin', false);
            return view('users')->with('users', $users);
        }
        else{
            $colors = [
                'Silver', 'Gray', 'Black', 'Red', 'Maroon', 'Yellow', 'Olive',
                'Lime', 'Green', 'Aqua', 'Teal', 'Blue', 'Navy', 'Fuchsia', 'Purple',
            ];
            return view('home')->with('colors',$colors);
        }
    }

    // public function store(){
    //   return view('welcome');
    //   dd("In store");
    // }
    public function store(Request $request)
    {
      dd($request);
        return \Response::json($response);
    }

//show all users

    public function show()
    {
      $this->authorize('view', auth()->user());
      $users = User::where('id', '!=', auth()->id())->get();
      return view('users', compact('users'));
    }

    public function edit(User $user)
    {
      return view('edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
      $this->authorize('edit', auth()->user());
      $theuser = User::find($user->id());
      dd($theuser);
      $theuser->name = $request['name'];
      $theuser->role = $request['role'];
      $theuser->password = $request['password'];
      $theuser->save();
      $users = User::where('id', '!=', auth()->id())->get();

      return view('users', compact('users'));
    }

}
