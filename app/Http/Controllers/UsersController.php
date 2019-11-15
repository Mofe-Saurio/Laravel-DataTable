<?php

namespace App\Http\Controllers;
use App\User;
class UsersController extends Controller
{
    public function index()
    {
        return view('users'); //Retornamos la vista
    }
    public function usersList()
    {
        $users = User::get()->all(); //Peticion de datos Eloquen
        return datatables()->of($users) //Retornamos a datatable por ajax
            ->make(true);
    }
}
