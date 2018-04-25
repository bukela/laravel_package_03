<?php

namespace Mirko\Packy;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackyController extends Controller
{
    public function index(){
        return view('packy::packy');
    }
}
