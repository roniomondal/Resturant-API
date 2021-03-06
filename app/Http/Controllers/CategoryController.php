<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class CategoryController extends CrudController{

    public function all($entity){
        parent::all($entity);


			$this->filter = \DataFilter::source(new \App\Category);
			$this->filter->add('category', 'Category', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
      $this->grid->add('id','Category ID');
			$this->grid->add('category', 'Category');
      $this->grid->add('status','Active');
			$this->addStylesToGrid();

      $this->grid->orderBy('id','asc'); //default orderby
        return $this->returnView();
    }

    public function  edit($entity){

        parent::edit($entity);



			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');

			$this->edit->add('category', 'Category', 'text')->rule('required');

      $this->edit->add('status', 'Status', 'radiogroup')->option('1', 'Avilable')->option('0', 'Not Avilable');


        return $this->returnEditView();
    }
}
