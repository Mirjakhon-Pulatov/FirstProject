<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\View\View;
use function Psy\sh;

class ProfileController extends Controller
{

    public function edit(Request $request,$id): View
    {
        $user = User::find($id);
//        dd($user);
        return view('auth.partials.profile',compact('user'));
    }


    public function update(Request $request, $id)
    {
//        dd($id);
////        $request->user()->fill($request->validated());
//
////        if ($request->user()->isDirty('email')) {
////            $request->user()->email_verified_at = null;
////        }
//
        $user = User::find($id);
//        dd($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

//        dd($user);
    }

    public function update_password(Request $request, $id)
    {
        $user = User::find($id);
        if ($user->password == Hash::make($request->password))
        {
            dd("Pizdoshen shvayns");
        }
        else{
//            dd(Hash::make($request->password));
        $user->password = Hash::make($request->new_password);
        $user->update();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(RouteServiceProvider::LOGIN);
        }
    }


    public function destroy(Request $request): RedirectResponse
    {

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
