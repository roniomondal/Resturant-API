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
			$this->grid->add('category', 'Category');
			$this->addStylesToGrid();
        
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

        
	
			$this->edit = \DataEdit::source(new \App\Category());

			$this->edit->label('Edit Category');			
		
			$this->edit->add('category', 'Category', 'text')->rule('required');
        
       
        return $this->returnEditView();
    }    
}
