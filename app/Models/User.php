<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phoneno',
        'address',
		
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	public static function getData(){
		

         $query = User::select(
            'users.*',
            'amount.amount as amount',
			'amount.date as amount_date',
           

        )

            ->leftJoin('amount', function ($join) {
                $join->on('amount.uid', 'users.id');
               
            })

            
          
         ->orderBy('users.id', 'DESC');
          
        return $query;

    }
	
	public static function getAllList(){
			//$list = user::where('name')->get();
			 $query=user::orderBy('id','DESC')->get();
			return $query;
		
	}
	public static function usernameArray()
	{
		$query = User::pluck('name','id')->all();
		$query = salaryview::pluck('name','id')->all();
		return $query;
    }

   
		
}
