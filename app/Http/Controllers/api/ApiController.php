<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function getAllInfo(){
    $info = Info::get();
    return response($info);
}
}
