<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function lang() {
        App::setLocale('tr');
        $users = User::all();
        return view('users.index', ['users' => $users]);

    }
}
