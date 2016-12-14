<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class menuController extends CrudController{

    public function all($entity){
        parent::all($entity); 

         


			$this->filter = \DataFilter::source(new \App\Menu());
			
			$this->filter->add('category','Category','select')->options(\App\Category::pluck('category', 'id')->all()); // Filter with Select List
			
			$this->filter->add('name', 'Name', 'text'); // Filter by String
		
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID');
			$this->grid->add('name', 'Name');
			$this->grid->add('category','Category');
			$this->grid->add('recipe','Veg/Non-Veg');
			$this->grid->add('price', 'price');
			
			$this->grid->add('status', 'Avilablity');
			
			
			$this->addStylesToGrid();
			
			
			$this->grid->paginate(10);
			$this->grid->add('name', 'Name', true);

       
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

         
	
			$this->edit = \DataEdit::source(new \App\Menu());

			$this->edit->label('Edit Menu');

			$this->edit->add('name', 'Dish Name', 'text')->rule('required');	
					
			$this->edit->add('image', 'Image', 'image')->move('uploads/images/')->preview(80,80);
			$this->edit->add('description', 'Description', 'textarea')->rule('required');
			$this->edit->add('price', 'Price', 'text')->rule('required');
			$this->edit->add('recipe', 'Veg/Non-Veg', 'radiogroup')->option('0', 'Veg')->option('1', 'Non-Veg');
			
			$this->edit->add('category','Category','select')->options(\App\Category::pluck("category", "id")->all());
			
			$this->edit->add('status', 'Status', 'radiogroup')->option('1', 'Avilable')->option('0', 'Not Avilable');

			


        
       
        return $this->returnEditView();
    }    
}
