<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> filling-layout-style2

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
<<<<<<< HEAD

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
=======
>>>>>>> filling-layout-style2
}
