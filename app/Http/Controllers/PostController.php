<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\amount;
use App\Models\salaryview;
use Auth;
use Hash;



class PostController extends Controller
{
    /*-----------------user-----------*/


    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('home');
    }
	

    public static function create()
    {
        $data['viewarr'] = post::all();
		return view('post.create',$data);
    }

	
	public function store(Request $request)
    {
	  $res=new post;
	  $res->title=$request->title;
	  $res->descripation=$request->descripation;
	  if ($request->hasfile('image')) 
			{
				$file = $request->file('image');
				
				$name = $file->getClientOriginalName();
				$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
				$file->move(public_path() . '/images/', $name);
				$res['image'] = $name;
			}
	  $res->phoneno=$request->phoneno;
	  $res->USER=$request->USER;
	 
	  
	  $res->save();
	  
	  
		
	  $request->session()->flash('msg','data submitted');
      return redirect('show'); 
    }
	

	public function show()
    {		
		$this->data['viewarr'] =$data= post::all();
        return view('post/show',$this->data);
    }
	
}
?>