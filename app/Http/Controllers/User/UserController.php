<?php

namespace App\Http\Controllers\User;

use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        $allUsers = $this->userService->getAllUsers();
        return view('', compact('allUsers'));
    }

    public function store()
    {
        $this->userService->updateUserAll();
    }

    public function show(User $user)
    {
        return view('', compact($user));
    }

    public function edit()
    {

    }

    public function update()
    {

    }

}
