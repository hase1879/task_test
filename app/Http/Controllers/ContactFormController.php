<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return('contacts.index');
    }

    public function create()
    {
        return view('contacts.create');
    }
}

