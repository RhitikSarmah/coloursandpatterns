<?php

namespace App\Http\Controllers;

use App\Dashboard;
use App\Designs;
use Illuminate\Http\Request;

class DashboardController extends Controller
{   public function __construct(){
	$this->middleware('auth');
    }
     public function dashboard(){
    	return view('dashboard.dashboard');
    }
    public function addDesigns(){
    	return view('dashboard.adddesigns');
    }
      public function adminDesigns(){
        $design = Designs::orderBy('id','desc')->paginate(12);
        return view('dashboard.admindesigns')->with('designs',$design);
    }
    public function delDesign($id){
     	$del = Designs::find($id);
    	$del->delete();
    	return redirect()->back();
    }
}
