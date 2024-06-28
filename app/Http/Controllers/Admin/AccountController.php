<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AppController;


class AccountController extends AppController 
{
   public function login() {
    return view('Admin.login');
   } 
}