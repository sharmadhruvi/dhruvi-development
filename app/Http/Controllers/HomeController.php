<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;
use Hash;



class HomeController extends Controller
{
    /*-----------------user-----------*/


/*    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    
    public function index()
    {
        return view('home');
    }
	

    public static function create()
    {
        $data['viewarr'] = User::all();
		return view('user.create',$data);
    }

	
	public function store(Request $request)
    {
	  $res=new user;
	  $res->first_name=$request->first_name;
	  $res->last_name=$request->last_name;
	  $res->email=$request->email;
	  $res->phoneno=$request->phoneno;
	  $res->address=$request->address;
	 
	  
	  $res->save();
	  
	  
		
	  $request->session()->flash('msg','data submitted');
      return redirect('show'); 
    }
	

	 public function show()   
    {       

   		$this->data['viewarr'] =$data= user::all();
        return view('user/show',$this->data);
    }
}
?>