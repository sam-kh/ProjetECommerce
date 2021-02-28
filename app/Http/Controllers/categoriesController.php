<?php

namespace App\Http\Controllers;
use App\Models\categorie;

use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;

class categoriesController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $connection = new ConnectionController();
        $this->woocommerce = $connection->woocommerce;
    }

    
    public function index(){
        $categories = [
            'categories' => $this->woocommerce->get("products/categories"),
        ];
        
        return view('categories.index')->with($categories);
       
    }

    public function add(Request $request){

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        
        ];
        $this->woocommerce->post("products/categories",$data);
        Flash::success('categorie saved successfully.');
        return redirect('/categories');
    }
    
    public function updateform($id){
        $category = [
            'category' => $this->woocommerce->get("products/categories/".$id),
        ];
        
        return view('categories.edit')->with($category);
    }

    
    public function update(Request $request){
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        
        ];

        $this->woocommerce->put("products/categories/".$request->id , $data);
        Flash::success('categorie updated successfully.');
        return redirect('/categories');
    }

 
    public function delete(Request $request){
        $categorie=$this->woocommerce->get("products/categories/".$request->id);

        if (empty($categorie)) {
            Flash::error('categorie not found');
            return redirect('/categories');
        }
        
        $this->woocommerce->delete('products/categories/' . $request->id, ['force' => true]);
        Flash::success('categorie deleted successfully.');
        return redirect('/categories');
    }
  

    
}

    

    