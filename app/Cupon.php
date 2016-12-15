<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Cupon extends Model {
	use ObservantTrait;
	
    protected $table = 'Cupon';

}
