<h3>add invoice</h3>
<a href="{{url('/invoice/index')}}">back</a>
<form method="post" action="{{url('/invoice/save')}}" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>name</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>payment</td>
            <td>
                <input type="text" name="payment">
            </td>
        </tr>
        <tr>
            <td>status</td>
            <td>
                <input type="text" name="status">
            </td>
        </tr>
        <tr>
            <td>created</td>
            <td>
                <input type="text" name="created" id="created">
            </td>
        </tr>
        <tr>
            <td>total</td>
            <td>
                <input type="text" name="total">
            </td>
        </tr>
        <tr>
            <td>photo</td>
            <td>
                <input type="file" name="photo">
            </td>
        </tr>
       
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" value="saveinvoice">
            </td>
        </tr>

    </table>
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