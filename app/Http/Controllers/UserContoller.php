<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContoller extends Controller
{
    public function show($id, $name) {
        return view('user.profile', compact('id', 'name'));
    }
}
