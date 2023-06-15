<h3>edit product</h3>
<a href="{{url('/product/index')}}">back</a>
<form method="post" action="{{url('/product/update')}}" enctype="multipart/form-data">
    @csrf
    
    <table>
        <tr>
            <td>name</td>
            <td>
                <input type="text" name="name" value="{{$product -> name}}">
            </td>
        </tr>
        <tr>
            <td>price</td>
            <td>
                <input type="text" name="price" value="{{$product -> price}}">
            </td>
        </tr>
        <tr>
            <td>quantity</td>
            <td>
                <input type="text" name="quantity" value="{{$product -> quantity}}">
            </td>
        </tr>
        <tr>
            <td>status</td>
            <td>
                <input type="checkbox" name="status" {{$product ->status == 1 ? 'checked' : ''}}>
            </td>
        </tr>
        <tr>
            <td>created</td>
            <td>
                <input type="text" name="created" id="created" value="{{DateTime::createFromFormat('Y-m-d',$product->created)->format('d/m/Y')}}">
            </td>
        </tr>
        <tr>
            <td valign="top">photo</td>
            <td>
                <input type="file" name="photo">
                <br>
                <img src="{{asset('images/' . $product->photo)}}"width="70" height="100" alt="">
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
    <input type="hidden" name="id" value="{{$product -> id}}">
    <input type="hidden" name="current_photo" value="{{$product -> photo}}">
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