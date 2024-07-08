<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AppController;


class DashboardController extends AppController 
{
   public function index() {
    return view('admin.pages.dashboard');
   } 
}