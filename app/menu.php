<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class menu extends Model {
	use ObservantTrait;
	
    protected $table = 'menus';
	
	protected $fillable = [
        'name', 'image','description','price', 'recipe', 'category', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'remember_token','created_at','updated_at'
    ];
	

	public function getImageAttribute($value)
    {
        return \URL::to('/').'/uploads/images/'.$value;
    }
	
		

}
