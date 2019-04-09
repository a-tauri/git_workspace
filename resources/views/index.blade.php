<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    <h1>Laravelでの記事投稿ページ</h1>
    <form action="resist" method="POST">
       {{csrf_field()}}
        <p>記事タイトル</p>
        <input type="text" name = "title">
        <p>記事内容</p>
        <textarea name="article" cols="20" rows="10"></textarea><br>
        <input type="submit" value="投稿">
    </form>
    @foreach($data as $d)
    {{$d['title']}}
    @endforeach
</body>
</html>