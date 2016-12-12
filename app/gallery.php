<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class gallery extends Model {
	use ObservantTrait;
	
    protected $table = 'gallery';

}
