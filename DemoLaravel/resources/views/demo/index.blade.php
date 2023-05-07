<h3>index</h3>
id: {{$id}}
<br>
username: {{$username}}
<br>
price : {{$price}}
<br>
quantity: {{$quantity}}
<br>
status: {{$status}}
<br>
total: {{$quantity *$price}}
<br>
status: {{$status ? 'show' : 'hide'}}
<br><br>
<table border="1" width= "{{$width}} " bgcolor= "{{$bgcolor}}">
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>

    </tr>
</table>
<br>
@if($status)
<span style="color: blue;">Show</span>
@else 
<span style="color:red;">Hide</span>
@endif
<br>
@if($score >=8) 
<span style="color: blue;">A</span>
@elseif($score >=7)
<span style="color: yellow;">B</span>
@elseif($score >=6)
<span style="color: orange;">c</span>
@else
<span style="color: red;">D</span>

@endif