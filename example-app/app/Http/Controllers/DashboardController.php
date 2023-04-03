<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//untuk dashboard controller admin template
class DashboardController extends Controller
{
   public function index(){
    return view('backend.dashboard');
   }
}
?>
