<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Services\DeppartmentServices;

class BaseController extends Controller
{
    public $deppartmentServices;

    public function __construct(DeppartmentServices $deppartmentServices){
        $this->deppartmentServices = $deppartmentServices;
    }
}
