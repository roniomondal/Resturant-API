<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class menu extends Model {
	use ObservantTrait;
	
    protected $table = 'menus';

}
