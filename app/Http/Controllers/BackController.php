<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function serveur()
    {
        $avatars = Avatar::all();
        return view('admin.serveur.main', compact('avatars'));
    }

    public function user()
    {
        return view('admin.user.main');
    }

    public function utilisateurs()
    {
        return view('admin.utilisateurs.main');
    }

    public function images()
    {
        return view('admin.images.main');
    }

    public function gallerie()
    {
        return view('admin.gallerie.main');
    }

    public function categories()
    {
        return view('admin.categories.main');
    }
    
    public function avatars()
    {
        return view('admin.avatars.main');
    }
    
}
