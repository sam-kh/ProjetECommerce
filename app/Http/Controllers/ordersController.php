<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $Cnx = new ConnectionController();
        $this->woocommerce = $Cnx->woocommerce;
    }

    
    public function index(){
        $orders = [
            'orders' => $this->woocommerce->get("orders"),
        ];
        
        return view('orders.index')->with($orders);
    }

}
