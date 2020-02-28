<?php

namespace App\Http\Controllers;

use Session;
use App\Designs;
use Illuminate\Http\Request;

class DesignsController extends Controller
{
    public function designs(){
    	$design = Designs::orderBy('id','desc')->paginate(12);
        return view('designs')->with('designs',$design);
    }
        public function submitDesign(Request $request){
        $request->validate([
        'designs'=>'required|mimes:png,jpg,jpeg,gif|max:300',
        ]);
    	$design = new Designs;
    	$designimage = $request->designs;
    	$name = $designimage->getClientOriginalName();
    	$newname = time().$name;
    	$designimage->move('uploads/designs',$newname);
    	$url = 'uploads/designs/'.$newname;
    	$design->designs = $url;
    	$create = $design->save();
        if($create){
            Session::flash('success','You have added a new photo to the gallary');
        }else{
            Session::flash('error','Some error occured');
        }
    	return redirect()->back();
    }
}
