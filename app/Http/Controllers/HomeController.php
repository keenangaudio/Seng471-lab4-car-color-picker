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
        $cars= [
          "2019 Porsche 911","Jaguar I-Pace Electric SUV","2019 Mercedes-Benz Sprinter Crew Van","Ford F150 Supercharger","Dodge Tomahawk"
        ];

        if(auth()->user()->isAdmin){
            $users = User::all()->where('isAdmin', false);
            return view('users')
                            ->with('users', $users)
                            ->with('cars',  $cars);
        }
        else{
            $colors = [
                'Silver', 'Gray', 'Black', 'Red', 'Maroon', 'Yellow', 'Olive',
                'Lime', 'Green', 'Aqua', 'Teal', 'Blue', 'Navy', 'Fuchsia', 'Purple',
            ];

            $active_cars = ["", "", "", "", ""];
            
            $active_cars[auth()->user()->carModel] = "active";

            return view('home')
                            ->with('cars',        $cars)
                            ->with('colors',      $colors)
                            ->with('active_cars', $active_cars)
                            ->with('accent',      auth()->user()->carAccentColor)
                            ->with('interior',    auth()->user()->carSeatColor)
                            ->with('car',         auth()->user()->carColor)
                            ->with('trim',        auth()->user()->trim);
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
