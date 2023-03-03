<?php

namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
       $accounts = Account::all();

       return view('accounts.index', ['accounts'=>$accounts]);
    }

    public function signup()
    {
        return view('accounts.signup');
    }



}
