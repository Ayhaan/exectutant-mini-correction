<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all();
        return view('admin.avatars.main', compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.avatars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avatar = new Avatar();

        //STORAGE
        $path = 'img/';
        $file = $request->file('url');
        $newImage = date('Ymd') . uniqid(). '.jpg';
        $file->move(public_path($path), $newImage);
        //DB
        $avatar->name = $request->name;
        $avatar->url = $newImage;

        $avatar->save();
        return redirect()->route('avatar.index')->with('success', 'avatar upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {

        return view('admin.avatars.edit', compact('avatar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        
        $destination = '/img'. $avatar->url;
        Storage::disk('public')->delete($destination);

        $path = 'img/';
        $file = $request->file('url');
        $newImage = date('Ymd') . uniqid(). '.jpg';
        $file->move(public_path($path), $newImage);
        //DB
        $avatar->name = $request->name;
        $avatar->url = $newImage;

        $avatar->save();
        return redirect()->route('avatar.index')->with('success', 'avatar changé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        $destination = '/img'. $avatar->url;
        Storage::disk('public')->delete($destination);

        $avatar->delete();
        return redirect()->route('avatar.index')->with('warning', 'img delete');
    }
}
