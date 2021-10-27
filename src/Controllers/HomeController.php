<?php

namespace Cccchao\Admin\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $message = "Hello World";
        return view('admin::index', compact('message'));
    }
}
