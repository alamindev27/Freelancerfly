<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomScript;
use App\Models\CustomStyle;
use App\Models\SiteMeta;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminSettingController extends Controller
{
    public function generalSetting() {
        return view('admin.setting.general-setting');
    }

    public function generalSettingUpdate(Request $request) {
        $user = User::where('id', auth()->user()->id)->first();
        $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | string | email | max:255 | unique:users,email,'.$user->id.',id',
            'avatar' => 'image | mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('avatar')) {
            $arr = explode('/', $user->avatar);
            $img = end($arr);
            if ($img != 'avatar.png') {
                unlink(base_path($user->avatar));
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
            'email' => $request->email
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function siteSetting() {
        return view('admin.setting.site-setting');
    }

    public function siteSettingUpdate(Request $request) {
        $request->validate([
            'author_name' => 'required | string | max:255',
            'site_name' => 'required | string | max:255',
            'site_logo' => 'image | mimes:jpg,png,jpeg',
            'site_favicon' => 'image | mimes:jpg,png,jpeg',
            'footer_message' => 'required | string | max:255',
            'footer_address' => 'required | string | max:255',
            'footer_email' => 'required | string | max:255',
            'footer_number' => 'required | string | max:255',
        ]);


        if ($request->hasFile('site_logo')) {
            $logoArr = explode('/', setting()->site_logo);
            $oldLogo = end($logoArr);
            if ($oldLogo != 'default-logo.png') {
                unlink(base_path(setting()->site_logo));
            }
            $fileLogo = $request->file('site_logo');
            $fileNameLogo = time().'-logo.'.$fileLogo->getClientOriginalExtension();
            $path1 = 'assets/uploads/';
            $request->site_logo->move($path1, $fileNameLogo);
            setting()->update([
                'site_logo' => $path1.$fileNameLogo,
            ]);
        }

        if ($request->hasFile('site_favicon')) {
            $iconArr = explode('/', setting()->site_favicon);
            $oldIcon = end($iconArr);
            if ($oldIcon != 'default-favicon.png') {
                unlink(base_path(setting()->site_favicon));
            }

            $fileFavicon = $request->file('site_favicon');
            $fileNameFavicon = time().'-site-favicon.'.$fileFavicon->getClientOriginalExtension();
            $path2 = 'assets/uploads/';
            $request->site_favicon->move($path2, $fileNameFavicon);

            setting()->update([
                'site_favicon' => $path2.$fileNameFavicon,
            ]);
        }

        setting()->update([
            'author_name' => $request->author_name,
            'site_name' => $request->site_name,
            'footer_message' => $request->footer_message,
            'footer_address' => $request->footer_address,
            'footer_email' => $request->footer_email,
            'footer_number' => $request->footer_number,
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function securitySetting() {
        return view('admin.setting.security-setting');
    }

    public function securitySettingUpdate(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required |string | min:8 | confirmed',
        ]);
        $user = User::where('id', auth()->user()->id)->first();
        if (Hash::check($request->current_password, $user->password)) {
            User::where('id', auth()->id())->update([
                'password' => Hash::make($request->password)
            ]);
            return back()->with('success', 'Updated Successfully');
        }else{
            return back()->with('notMatch', 'Current password not match');
        }
        return back()->with('success', 'Updated Successfully');
    }


    public function siteMetaSetting() {
        $data = SiteMeta::where('id', 1)->first();
        return view('admin.setting.site-meta-setting', compact('data'));
    }


    public function siteMetaSettingUpdate(Request $request) {
        $request->validate([
            'meta_title' => 'required | string | max:255',
            'focus_keywords' => 'required | string | max:255',
            'meta_keywords' => 'required | string | max:255',
            'meta_description' => 'required | string | max:255',
        ]);
        $data = SiteMeta::where('id', 1)->first();
        $data->update([
            'meta_title' => $request->meta_title,
            'focus_keywords' => $request->focus_keywords,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function custom() {
        return view('admin.setting.custom');
    }

    public function customUpdate(Request $request) {
        $request->validate([
            'header_style' => 'required_without:footer_scripts',
            'footer_scripts' => 'required_without:header_style',
        ]);
        if (!empty($request->header_style) && $request->header_style != '') {
            CustomStyle::insert([
                'header_style' => $request->header_style,
                'created_at' => Carbon::now()
            ]);
        }
        if (!empty($request->footer_scripts) && $request->footer_scripts != '') {
            CustomScript::insert([
                'footer_scripts' => $request->footer_scripts,
                'created_at' => Carbon::now()
            ]);
        }
        return back()->with('success', 'Added Successfully');
    }

    public function referCommission() {
        return view('admin.setting.refer-commission');
    }

    public function referCommissionUpdate(Request $request) {
        $request->validate([
            'refer_commission' => 'required | numeric | min:1 | max:100'
        ]);
        setting()->update([
            'refer_commission' => $request->refer_commission
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
