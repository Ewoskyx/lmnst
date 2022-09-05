<?php

namespace App\Http\Controllers;

use App\Models\User;

class ChartController extends Controller
{
    public function index () {
        $users = User::all();
        $admin_count = 0;
        $user_count = 0;
        foreach($users as $user) {
            if($user->is_admin) {
                $admin_count ++;
            }
            $user_count ++;
        }

        return view('chart.index', [
            'admin_count' => $admin_count,
            'user_count' => $user_count,
            ]);
    }
}
