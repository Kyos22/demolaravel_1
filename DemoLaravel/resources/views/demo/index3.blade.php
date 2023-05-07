<h3>index3</h3>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>photo</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{$product['id']}}</td>
            <td>{{$product['name']}}</td>
            <td><img src="{{asset('')}}images/{{$product['photo']}}" width="70" height="100"></td>
        </tr>

    @endforeach

</table>