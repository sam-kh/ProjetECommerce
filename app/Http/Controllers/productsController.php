<?php

namespace App\Http\Controllers;
use App\Models\Product;

use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromArray;

class productsController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $connection = new ConnectionController();
        $this->woocommerce = $connection->woocommerce;
    }

    
    public function index(){
        $products = [
            'products' => $this->woocommerce->get("products", array('per_page'=>100,'page'=>1)),
        ];
        $categories = [
            'categories' => $this->woocommerce->get("products/categories"),
        ];
        return view('products.index',$categories)->with($products);
       
    }

    public function add(Request $request){

        $data = [
            'name' => $request->name,
            'regular_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'categories' => [
                [
                    'id' => $request->categories
                ]
            ],
            'images' => [
                [
                    'src' => 'http://localhost/samshoping/wp-content/uploads/2021/01/'.$request->file('image')->getClientOriginalName()
                ]
                ],
            
            'stock_status' => $request->stock_status,
            "manage_stock"=> true,
            'stock_quantity' =>$request->stock_quantity

        ];
        $this->woocommerce->post("products",$data);
        Flash::success('Product saved successfully.');
        return redirect('/products');
    }

   
    public function show($id){
        $product = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        return view('products.show')->with($product);
    }

    
    public function updateform($id){
        $product = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        $categories = [
            'categories' => $this->woocommerce->get("products/categories"),
        ];
        return view('products.edit',$categories)->with($product);
    }

    
    public function update(Request $request){
        $data = [
            'name' => $request->name,
            'regular_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'categories' => [
                [
                    'id' => $request->categories
                ]
            ],
            'stock_status' => $request->stock_status,
            "manage_stock"=> true,
            'stock_quantity' =>$request->stock_quantity
        ];

        $this->woocommerce->put("products/".$request->id , $data);
        Flash::success('Product updated successfully.');
        return redirect('/products');
    }

 
    public function delete(Request $request){
        $product=$this->woocommerce->get("products/".$request->id);

        if (empty($product)) {
            Flash::error('product not found');
            return redirect('/products');
        }
        
        $this->woocommerce->delete('products/' . $request->id, ['force' => true]);
        Flash::success('Product deleted successfully.');
        return redirect('/products');
    }
  

    function excel()
    {
        $products=$this->woocommerce->get("products",array('per_page'=>100,'page'=>1));
        $file[] = array('id','name','price','sale price','category') ;       
        foreach ($products as $product) {
                    $file[] = array(
                    $product->id,
                    $product->name,
                    $product->regular_price,
                    $product->sale_price,
                    $product->categories[0]->name,
                );
                }
               
        return Excel::download(new productInvoices($file), 'product.xlsx');
    }
}


class productInvoices implements FromArray{
    protected $invoices;
    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }
    public function array():array{
        return $this->invoices;
    }
}
    

    