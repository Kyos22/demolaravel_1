<h3>edit invoice</h3>
<a href="{{url('/invoice/index')}}">back</a>
<form method="post" action="{{url('/invoice/update')}}" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>name</td>
            <td>
                <input type="text" name="name" value="{{$invoice -> name}}">
            </td>
        </tr>
        <tr>
            <td>payment</td>
            <td>
                <input type="text" name="payment" value="{{$invoice -> payment}}">
            </td>
        </tr>
        <tr>
            <td>status</td>
            <td>
                <input type="text" name="status" value="{{$invoice -> status}}">
            </td>
        </tr>
        <tr>
            <td>total</td>
            <td>
                <input type="text" name="total" value="{{$invoice -> status}}">
            </td>
        </tr>
        <tr>
            <td>created</td>
            <td>
                <input type="text" name="created" id="created" value="{{DateTime::createFromFormat('Y-m-d',$invoice->created)->format('d/m/Y')}}">
            </td>
        </tr>
        <tr>
            <td valign="top">photo</td>
            <td>
                <input type="file" name="photo">
                <br>
                <img src="{{asset('images/' . $invoice->photo)}}"width="70" height="100" alt="">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" value="save">
            </td>
        </tr>

    </table>
    <!-- dấu mã sản phầm -->
    <input type="hidden" name="id" value="{{$invoice -> id}}">
    <input type="hidden" name="current_photo" value="{{$invoice -> photo}}">
</form>


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#created" ).datepicker({
        dateFormat: 'dd/mm/yy'
    });
  } );
  </script>