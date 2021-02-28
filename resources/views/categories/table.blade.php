<div class="table-responsive">
    <table class="table" id="departments-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Products</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug}}</td>
                <td>{{ $category->count }}</td>
                    <td>
                        
                    <div class='btn-group'>
                        <form class="offset-1" action="{{url('/categories/delete')}}" method="post">
                            @csrf
                        <a href="{{url('/categories/update/'.$category->id.'')}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        
                            {{method_field('DELETE')}}
                        <button class="btn btn-danger btn-xs" onclick = "return confirm('Are you sure?')" type="submit" name="id" value="{{$category->id}}"><i class="glyphicon glyphicon-trash"></i></button>
                         
                            </form>
                    </div>
                    
                        

   
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
