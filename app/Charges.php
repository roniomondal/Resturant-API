<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Charges extends Model {
	use ObservantTrait;

    protected $table = 'Charges';

		protected $fillable = [
        'packaging_charges', 'tax','	delivery_charges',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];

}
