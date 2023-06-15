<h3>invoice</h3>


<a href="{{url('/invoice/add')}}">add invoice</a>

<table border ="1">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>payment</th>
        <th>status</th>
        <th>total</th>
        <th>created</th>
        <th>
            photo
        </th>
        <th>action</th>
    </tr>
    @foreach($invoices as $invoice)
    <tr>
        <td>{{$invoice -> id}}</td>
        <td>{{$invoice -> name}}</td>
        <td>{{$invoice -> payment}}</td>
        <td>{{$invoice -> status}}</td>
        <td>{{$invoice -> total}}</td>
        <td>{{DateTime::createFromFormat('Y-m-d',$invoice->created)->format('d/m/Y')}}</td>
        <td>
            
            <img src="{{asset('images/' .$invoice -> photo)}}" width="70" height="100"></td>
        <td><a href="{{url('/invoice/delete/' .$invoice -> id)}}" onclick ="return confirm('are you sure ?') ">delete|</a>
            <a href="{{url('/invoice/edit/' .$invoice -> id)}}">edit</a>
        </td>
     </tr>
    @endforeach
</table>
