<?php

namespace App\Http\Controllers;
use App\Models\categorie;

use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;

class dashController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $connection = new ConnectionController();
        $this->woocommerce = $connection->woocommerce;
    }

    
    public function index(){
        $data = [
            'orders' => count($this->woocommerce->get('orders')),
            'products' => count($this->woocommerce->get('products')),
            'categories' => count($this->woocommerce->get('products/categories')),
            
                    $query = ['date_min' => '1990-10-01', 'date_max' => '2050-10-30'],
            'sales' => $this->woocommerce->get('reports/sales', $query),

        ];

        //dd($data);
        return view('dash.index')->with($data);
       
    }

    

    
}

    

    