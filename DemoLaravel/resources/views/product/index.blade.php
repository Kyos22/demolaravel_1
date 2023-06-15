<fieldset>
    <legend>search by keyword</legend>
    <form method="get" action="{{url('/product/searchbykeyword')}}">
        keyword <input type="text" name="keyword">
        <br>
        <input type="submit" value="search">
    </form>
</fieldset>
<fieldset>
    <legend>search by price</legend>
    <form method="get" action="{{url('/product/searchbyprice')}}">
        min <input type="text" name="min">
        <br>
        max <input type="text" name="max">
        <br>
        <input type="submit" value="search">
    </form>
</fieldset>

<br>
<a href="{{url('/product/add')}}">add</a>
<br>




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
        <th>action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{$product -> id}}</td>
        <td>
           <a href="{{url('/product/details/'.$product->id)}}">{{$product->name}}</a>
           
        </td>
        <td>{{$product -> price}}</td>
        <td>{{$product -> quantity}}</td>
        <td>{{$product -> status == 1 ? 'show' : 'hide'}}</td>
        <td>
         <a href="{{url('/product/details/'.$product->id)}}">
            <img src="{{asset('images/' . $product->photo)}}"width="70" height="100" alt="">
           
            </a>
        </td>

        <td>{{DateTime::createFromFormat('Y-m-d',$product->created)->format('d/m/Y')}}</td>
        <td>
            <a href="{{url('/product/delete/' . $product ->id)}}"
            onclick ="return confirm('are u sure?')">Delete |</a>
            <a href="{{url('/product/edit/' . $product ->id)}}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
