<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Order extends Model {
	use ObservantTrait;
	
    protected $table = 'Order';

}
