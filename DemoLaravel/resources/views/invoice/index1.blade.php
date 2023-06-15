<h3>invoice</h3>
<table border ="1">
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>payment</th>
        <th>status</th>
        <th>total</th>
        <th>created</th>
    </tr>
    @foreach($invoices as $invoice)
    <tr>
        <td>{{$invoice -> id}}</td>
        <td>{{$invoice -> name}}</td>
        <td>{{$invoice -> payment}}</td>
        <td>{{$invoice -> status}}</td>
        <td>{{$invoice -> total}}</td>
        <td>{{$invoice -> created}}</td>
    </tr>
    @endforeach
</table>