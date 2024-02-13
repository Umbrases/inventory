<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\UserServices;

class BaseController extends Controller
{
    public $userService;

    public function __construct(UserServices $userService){
        $this->userService = $userService;
    }
}
