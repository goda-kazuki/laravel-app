<body>
<h1>Hello/Index</h1>
<p>{{$msg}}</p>

<form action="/hello" method="post">
    @csrf
    <div>
        名前
        <input type="text" name="name">
    </div>
    <div>
        メッセージ
        <input type="text" name="msg">
    </div>
    <div>
        電話番号
        <input type="text" name="tel">
    </div>
    <div>
        メール
        <input type="text" name="mail">
    </div>
    <input type="submit">
</form>
<ul>
    @for($i=0;$i<count($keys);$i++)
        <li>{{$keys[$i]}}:{{$values[$i]}}</li>
    @endfor

</ul>
</body>
