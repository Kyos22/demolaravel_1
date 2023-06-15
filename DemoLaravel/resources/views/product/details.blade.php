<h3>details</h3>
<a href="{{url('/product/index')}}">back</a>
<h3>product</h3>

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
        <td>
           <a href="{{url('/product/details/'.$product->id)}}">{{$product->name}}</a>
        </td>
        <td>{{$product -> price}}</td>
        <td>{{$product -> quantity}}</td>
        <td>{{$product -> status}}</td>
        <td>
         <a href="{{url('/product/details/'.$product->id)}}">
            <img src="{{asset('images/' . $product->photo)}}"width="70" height="100" alt="">
            </a>
        </td>
        <!-- <td><img src="{{asset('images')}}/ {{$product->photo}}"width="70" height="100" alt=""></td> -->

        <td>{{DateTime::createFromFormat('Y-m-d',$product->created)->format('d/m/Y')}}</td>
    </tr>
    
</table>
