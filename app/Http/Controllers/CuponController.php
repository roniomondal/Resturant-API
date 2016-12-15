<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CuponController extends CrudController {

    public function all($entity){
        parent::all($entity);

        /* Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields

        */

			$this->filter = \DataFilter::source(new \App\Cupon);
			$this->filter->add('cupon', 'Cupon Code', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();



			$this->grid = \DataGrid::source($this->filter);


      $this->grid->add('id', 'Cupon ID');
			$this->grid->add('cupon', 'Cupon Code');
			$this->grid->add('discount', 'Discount Amount');
      $this->grid->add('{{ ($percentage==1)? "Percentage" : "Not Percentage" }}', 'Percentage / Amount');


      $this->grid->add('{{ ($status==1)? "Avilable" : "Not Avilable" }}', 'Availability');


			$this->addStylesToGrid();

        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
        */
			$this->edit = \DataEdit::source(new \App\Cupon);

			$this->edit->label('Edit Cupon');

			/*$this->edit->add('name', 'Name', 'text');

			$this->edit->add('code', 'Code', 'text')->rule('required');*/
      	$this->edit->add('cupon', 'Cupon Code', 'text');
				$this->edit->add('discount', 'Discount Amount', 'text');
        $this->edit->add('percentage', 'Percentage / Amount (Check, If Cupon is applied as percentage)', 'checkbox');
        $this->edit->add('status', 'Status', 'radiogroup')->option('1', 'Avilable')->option('0', 'Not Avilable');




        return $this->returnEditView();
    }
}
