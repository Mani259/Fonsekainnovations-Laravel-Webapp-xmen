<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Auth;

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
        return view('home');
    }

    //  public function profile(){
    //    return veiw('profile', array('user'=>Auth::user() ));
    //  }

    public function update_avatar(Request $request){

        if($request->hasFile('avatar')){
          $avatar = $request->file('avatar');
          $filename = time() . '.' . $avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(300,300)->save(public_path('/images/avatars/' . $filename));

          $user = Auth::user();
          $user->avatar = $filename;
          $user->save();
//this fucntion is take the uploaded user image and give it a name and save it to the database, we have used image intervension package to call for image handling
        }

          return view('home', array('user' => Auth::user()) );
    }

    public function update_mutant(Request $request){

        if($request->hasFile('avatar2')){
          $avatar2 = $request->file('avatar2');
          $filename = time() . '.' . $avatar2->getClientOriginalExtension();
          Image::make($avatar2)->resize(300,300)->save(public_path('/images/avatars2/' . $filename));

          $user = Auth::user();
          $user->avatar2 = $filename;
          $user->save();

        }

          return view('home', array('user' => Auth::user()) );
    }
}
