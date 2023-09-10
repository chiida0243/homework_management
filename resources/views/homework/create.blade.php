<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>宿題管理システム</h1>
        <h2>先生宿題投稿画面</h2>
        <form action="/homework" method="POST"　enctype="multipart/form-data">
            @csrf
            <div>
                <h2>課題名</h2>
                <input type="text" name="post[homework_name]" placeholder="課題名を入力">
                <p class="title__error" style="color:red">{{ $errors->first('post.homework_name') }}</p>
            </div>
            <div>
                <h2>写真</h2>
　　　　　　　　<input type="file" name="image">
            </div>
            <div>
                <h2>締め切り</h2>
                <input type="date" name="post[deadline]">
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
