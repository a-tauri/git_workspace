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
    @if ($errors->any())
        <div class="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div>
       <p>記事一覧</p>
    </div>
    <table width=500>
       <tr>
           <th width="50%">記事タイトル</th>
           <th width="50%"></th>
       </tr>
       
        @foreach($data as $d)
        <tr>
        <td>{{$d['title']}}</td>
        <td>
        <a href="" class="btn">詳細</a>
        <a href="" class="btn">編集</a>
        <form action="delete" method = "POST">
            {{csrf_field()}}
            <input type = "hidden" name = "id" value="{{ $d->id}}">
            <input type = "submit" value = "削除" class="btn-delete">
        </form>
        </td>
        </tr>
        @endforeach
    </table>
</body>
</html>