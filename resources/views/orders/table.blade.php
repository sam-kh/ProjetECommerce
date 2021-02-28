<div class="table-responsive">
    <table class="table" id="departments-table">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Total</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->billing->first_name }} {{ $order->billing->last_name }}</td>
                <td>{{ $order->billing->address_1 }}</td>
                <td>{{ $order->billing->phone }}</td>
                <td>{{ $order->date_created }}</td>
                <td>{{$order->status}}</td>
                <td>{{$order->total}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
