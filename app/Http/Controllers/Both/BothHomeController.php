<?php

namespace App\Http\Controllers\Both;

use App\Http\Controllers\Controller;
use App\Models\Gig;
use App\Models\Message;
use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BothHomeController extends Controller
{
    public function index() {
        return view('both.index');
    }
    public function editProfile() {
        $skills = Skill::orderBy('name', 'ASC')->get();
        return view('both.edit-profile', compact('skills'));
    }
    public function updateProfile(Request $request){
        // return $request->skill;
        $user = User::where('id', auth()->user()->id)->first();
        $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | string | email | max:255, unique:users,email,'.$user->id.',id',
            'avatar' => 'image | mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('avatar')) {
            $arr = explode('/', auth()->user()->avatar);
            $avatar = end($arr);
            if ($avatar != 'avatar.png') {
                unlink(base_path(auth()->user()->avatar));
            }
            $file = $request->file('avatar');
            $fileName = time().'-avatar.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';

            $request->avatar->move($path, $fileName);
            $user->update([
                'avatar' => $path.$fileName,
            ]);
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'overview' => $request->overview,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'age' => $request->age,
            'language' => $request->language,
            'city' => $request->city,
            'country' => $request->country,
            'postcode' => $request->postal_code,
            'full_address' => $request->full_address
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function changePassword() {
        return view('both.change-password');
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required |string | min:8 | confirmed',
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        if (Hash::check($request->old_password, $user->password)) {
            User::where('id', auth()->id())->update([
                'password' => Hash::make($request->password)
            ]);
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('notMatch', 'Current password not match');
        }
        return back()->with('success', 'Updated Successfully');
    }

    public function refer() {
        return view('both.refer');
    }


    public function gig() {
        $gigs = Gig::where('status', 'success')->orderBy('created_at', 'DESC')->get();
        return view('both.gig', compact('gigs'));
    }


    public function gigDetails($id) {
        $gig = Gig::where([['status', 'success'], ['id', $id]])->first();
        return view('both.gig-details', compact('gig'));
    }

    public function sendMessage(Request $request) {
        $request->validate([
            'sender_id' => 'required | numeric',
            'resiver_id' => 'required | numeric',
            'message' => 'required | string | max:255'
        ]);

        Message::insert([
            'sender_id' => $request->sender_id,
            'resiver_id' => $request->resiver_id,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        return back()->with('success', 'Message Sent Successfully');
    }

    public function readMessage() {
        $users = Message::where('sender_id', auth()->user()->id)->orWhere('resiver_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get()->unique('resiver_id');
        return view('both.message', compact('users'));
    }




    public function replyMessage($msgId) {
        $users = Message::where('sender_id', auth()->user()->id)->orWhere('resiver_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get()->unique('resiver_id');
        $messages = Message::where('sender_id', auth()->user()->id)->orWhere('resiver_id', auth()->user()->id)->get();
        $singleMessage = Message::where('id', $msgId)->first();
        return view('both.message-reply', compact('users', 'messages', 'singleMessage'));
    }
}