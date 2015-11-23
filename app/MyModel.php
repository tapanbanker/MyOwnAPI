<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model{

	// Only the fillable attribute will be shown 
    protected $fillable = ['name' , 'phone' ,'secretAttribute', 'password'];

    // The hidden attribute will not be displayed 
    protected $hidden = [ 'secretAttibute' , 'password'];
}