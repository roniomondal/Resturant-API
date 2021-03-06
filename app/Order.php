<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Order extends Model {
	use ObservantTrait;

    protected $table = 'Order';

		protected $fillable = [
        'user_id', 'items','item_count', 'item_total', 'total',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

		public function setItemsAttribute($value){
			return json_decode($value);
		}


}
