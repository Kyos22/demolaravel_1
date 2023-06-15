<h3>search by keyword</h3>
<form method="get" action="{{url('/demo4/searchbykeyword')}}">
    keyword: <input type="text" name="keyword">
    <br>
    <input type="submit" value="search">
</form>

<h3>search by price</h3>
<form method="get" action="{{url('/demo4/searchbyprice')}}">
    min: <input type="text" name="min">
    <br>
    max: <input type="text" name="max">
    <br>
    <input type="submit" value="search">
</form>

<h3>LOGIN</h3>
<form method="post" action="{{url('/demo4/login')}}">
    @csrf
    username: <input type="text" name="username">
    <br>
    password: <input type="password" name="password">
    <br>
    <input type="submit" value="login">
</form>


<h3>Upload file</h3>
<form method="post" action="{{url('/demo4/upload')}}"enctype="multipart/form-data" > 
    @csrf
    photo: <input type="file" name="photo" >
    <br>
    <input type="submit" value="upload">
</form>