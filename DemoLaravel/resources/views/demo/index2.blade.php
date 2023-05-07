<link rel="stylesheet" href="{{asset('css/style.css')}}">
<script src="{{asset('js/mylib.js')}}"></script>
<h3 class="format">index2</h3>
<ul>
    @foreach($numbers as $number)
        @if($number >= 0)
            <li>{{$number}}</li>
         @endif

    @endforeach
</ul>
<br>
<img src="{{asset('images/chair-1.jpg')}}" width="70" height="100" 
onclick="clickMe()" >

<h3>product info</h3>
<table border="1">
    <tr>
        <td>Id</td>
        <td>{{$products['id']}}</td>
    </tr>
    <tr>
        <td>name</td>
        <td>{{$products['name']}}</td>
    </tr>
    <tr>
        <td>photo</td>
        <td><img src="{{asset('images/'.$products['photo'])}}"width="70" height="100"></td>
    </tr>
    <tr>
        <td>photo</td>
        <td><img src="{{asset('')}}images/{{$products['photo']}}" width="70" height="100"></td>
    </tr>
    
</table>