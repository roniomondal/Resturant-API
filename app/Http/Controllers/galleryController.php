<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class galleryController extends CrudController{

    public function all($entity){
        parent::all($entity); 

        /** Simple code of  filter and grid part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields


			$this->filter = \DataFilter::source(new \App\Category);
			$this->filter->add('name', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('name', 'Name');
			$this->grid->add('code', 'Code');
			$this->addStylesToGrid();

        */
		
		$this->filter = \DataFilter::source(new \App\Gallery);
		
		$this->filter->add('categoryId','Category','select')->options(\App\Category::lists("name", "id")->all()); // Filter with Select List
		
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('title', 'Title');
        $this->grid->add('image', 'Image');
        $this->addStylesToGrid();

        return $this->returnView();
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        /* Simple code of  edit part , List of all fields here : http://laravelpanel.com/docs/master/crud-fields
	
			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');

			$this->edit->add('name', 'Name', 'text');
		
			$this->edit->add('code', 'Code', 'text')->rule('required');


        */
       
        return $this->returnEditView();
    }    
}
