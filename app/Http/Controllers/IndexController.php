<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index.index');
    }

    public function data()
    {
    	$data = ['name' => 'budi'];
    	return json_encode($data);
    }

    public function post(Request $request)
    {
    	$nama = $request->input('name');
    	$data = ['name' => $nama];
    	return json_encode($data);
    }
}
