<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
        return view('home', [
            'posts' => Post::get()
        ]);
    }

    public function createPost(Request $request)
    {
        $request->validate(['body' => 'required|min:6']);

        auth()->user()->posts()->create(['body' => $request->body]);

        return redirect(route('dashboard'));
    }

    public function editUser(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if($user) {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
            if ($request['image_confirmation']) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png'
                ]);
//                dd($request['image_confirmation']);
                $imageName = $user['id'].'.'.$request['image_confirmation']->extension();

                $request['image_confirmation']->move(public_path().'/imgs/', $imageName);

                $user->image_confirmation = $imageName;
            }

            $user->save();
            return redirect(route('dashboard'));
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->get();

        if(count($user)>0){
            Post::where('user_id', $id)->delete();
            User::where('id', $id )->delete();
            return redirect(route('dashboard'));
        }
        else{
            return redirect(route('dashboard'));
        }
    }
}
