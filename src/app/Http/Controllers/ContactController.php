<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'email', 'gender', 'tel', 'one', 'two', 'three', 'address', 'building', 'select', 'detail']);
        return view('confirm', compact('contact'));
    }
    public function store(Request $request)
    {
        return view('thanks');
    }
}
