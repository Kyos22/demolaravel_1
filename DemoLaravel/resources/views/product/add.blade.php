<h3>add product</h3>
<a href="{{url('/product/index')}}">back</a>
<form method="post" action="{{url('/product/save')}}" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>name</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>price</td>
            <td>
                <input type="text" name="price">
            </td>
        </tr>
        <tr>
            <td>quantity</td>
            <td>
                <input type="text" name="quantity">
            </td>
        </tr>
        <tr>
            <td>status</td>
            <td>
                <input type="checkbox" name="status">
            </td>
        </tr>
        <tr>
            <td>created</td>
            <td>
                <input type="text" name="created" id="created">
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
                <input type="submit" value="save">
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