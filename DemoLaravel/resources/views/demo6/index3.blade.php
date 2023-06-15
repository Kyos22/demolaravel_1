<h3>demo6</h3>
<table border ="1">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>price</th>
        <th>quantity</th>
        <th>status</th>
        <th>photo</th>
        <th>created</th>
    </tr>
    
    <tr>
        <td>{{$product -> id}}</td>
        <td>{{$product -> name}}</td>
        <td>{{$product -> price}}</td>
        <td>{{$product -> quantity}}</td>
        <td>{{$product -> status}}</td>
        <!-- <td><img src="{{asset('index3')}}/images/{{$product -> photo}}" alt=""></td> -->
        <td><img src="{{asset('images/' . $product->photo)}}"width="70" height="100" alt=""></td>
        <td>{{$product -> created}}</td>
    </tr>
    
</table>
