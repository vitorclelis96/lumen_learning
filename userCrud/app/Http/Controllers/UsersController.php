<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller {

    public function show(Request $request) {
        $users = User::all();

        return "ok";

        return response()->json($users, 200);
    }
}
