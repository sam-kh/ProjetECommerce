<div class="table-responsive">
    <table class="table" id="departments-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Sales</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->categories[0]->name }}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->stock_quantity }}</td>
                <td>{{ $product->total_sales }}</td>
                <td><img src="{{ $product->images[0]->src}}" alt="{{$product->name}}"  width="80" height="80" style="border-radius:50%; "></td>
                <td>
                    
                        
                    <div class='btn-group'>
                        <form class="offset-1" action="{{url('/products/delete')}}" method="post">
                            @csrf
                        <a href="{{url('/products/show/'.$product->id.'')}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{url('/products/update/'.$product->id.'')}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        
                            {{method_field('DELETE')}}
                        <button class="btn btn-danger btn-xs" onclick = "return confirm('Are you sure?')" type="submit" name="id" value="{{$product->id}}"><i class="glyphicon glyphicon-trash"></i></button>
                         
                            </form>
                    </div>
                    
                        

   
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
