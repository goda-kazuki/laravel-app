<body>
<h1>Hello/Index</h1>
<p>{{$msg}}</p>
@isset($data)
<ul>
    @foreach($data as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>
@endisset

<form action="/hello/other" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <input type="submit">

</form>
</body>
