<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Following;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index($id)
    {
        $userId = auth()->user()->id;
        $answers = Answer::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        $user = User::where('id', $id)->first();
        $isFollowing = Following::where('user_id', $userId)
            ->where('follower_id', $id)
            ->exists();
        $follows = Following::where('user_id', $user->id)->get();
        $followers = Following::where('follower_id', $user->id)->get();
        return view('user.profil', compact('answers', 'user', 'isFollowing', 'follows', 'followers'));
    }

    public function show($id)
    {
        $questions = Question::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        $user = User::where('id', $id)->first();
        $isFollowing = Following::where('user_id', $user->id)
            ->where('follower_id', $id)
            ->exists();
        $follows = Following::where('user_id', $user->id)->get();
        $followers = Following::where('follower_id', $user->id)->get();
        return view('user.profil_question', compact('questions', 'user', 'isFollowing', 'follows', 'followers'));
    }

    public function edit_profile($id)
    {
        $user = User::find($id);
        return view('user.edit_profil', compact('user'));
    }

    public function update_profile(Request $request, $id)
    {
        $user = User::find($id);

        $validated = $request->validate([
            'username' => 'required',
            'gender' => 'required',
            'jenjang' => 'required',
            'aboutme' => 'required',
            'photo_profil' => 'image|mimes:jpg,jpeg,png|max:4096'
        ]);

        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->jenjang = $request->jenjang;
        $user->aboutme = $request->aboutme;

        if ($request->hasFile('photo_profil')) {
            // define image location in local path
            $location = public_path('/img');

            // ambil file img dan simpan ke local server
            $request->file('photo_profil')->move($location, $request->file('photo_profil')->getClientOriginalName());

            // simpan nama file di database
            $user->photo_profil = $request->file('photo_profil')->getClientOriginalName();
        }

        $user->save();

        return redirect()->route('profile.user', ['user' => $user->id])->with('status', 'Profile berhasil diperbaharui');
    }

    public function follow(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'follower_id' => 'required',
        ]);

        $new_follow = new Following;
        $new_follow->user_id = $request->user_id;
        $new_follow->follower_id = $request->follower_id;

        $new_follow->save();

        return redirect()->route('profile.user', ['user' => $request->follower_id]);
    }

    public function unfollow(User $user)
    {
        $follow = Following::where('user_id', auth()->user()->id)
            ->where('follower_id', $user->id)->first();
        $follow->delete();
        return redirect()->route('profile.user', ['user' => $follow->follower_id]);
    }

    public function edit(Request $request): View
    {
        return view('user.ubahkatasandi', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('user.ubahkatasandi')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
