<?php

namespace App\Http\Controllers\Both;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BothAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histories = Advertisement::where('user_id', auth()->user()->id)->get();
        return view('both.advertisement.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('both.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | string | max:255',
            'link' => 'required | string | url',
            'days' => 'required',
            'image' => 'required | image | mimes:jpg,png,jpeg',
        ]);

        $arr = explode(' ', $request->days);
        if (auth()->user()->main_balance < $arr['1']) {
            return back()->with('error', 'You dont have enough main balance.');
        }

        $file = $request->file('image');
        $fileName = time().'-image.'.$file->getClientOriginalExtension();
        $path = 'assets/uploads/';
        $request->image->move($path, $fileName);

        Advertisement::insert([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'link' => $request->link,
            'duration' => $arr['0'],
            'price' => $arr['1'],
            'image' => $path.$fileName,
            'created_at' => Carbon::now()
        ]);

        $user = User::where('id', auth()->user()->id)->first();
        $user->decrement('main_balance', $arr['1']);
        return back()->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Advertisement::where('id', $id)->first();
        return view('both.advertisement.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required | string | max:255',
            'link' => 'required | string | url',
            'image' => 'required | image | mimes:jpg,png,jpeg',
            'days' => 'required',
        ]);
        $arr = explode(' ', $request->days);
        $data = Advertisement::where('id', $id)->first();
        if ($request->hasFile('image')) {
            unlink(base_path($data->image));

            $file = $request->file('image');
            $fileName = time().'-image.'.$file->getClientOriginalExtension();
            $path = 'assets/uploads/';
            $request->image->move($path, $fileName);
            $data->update([
                'image' => $path.$fileName,
            ]);
        }
        $data->update([
            'title' => $request->title,
            'link' => $request->link,
            'duration' => $arr['0'],
            'price' => $arr['1'],
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $data = Advertisement::where('id', $id)->first();
        // unlink(base_path($data->image));
        // $data->delete();
        // return back()->with('success', 'Deleted Successfully');
    }
    public function delete($id)
    {
        $data = Advertisement::where('id', $id)->first();
        unlink(base_path($data->image));
        $data->delete();
        return back()->with('success', 'Deleted Successfully');
    }
}
