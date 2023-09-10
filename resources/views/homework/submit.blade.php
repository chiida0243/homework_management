<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>宿題管理システム</h1>
        <h2>生徒宿題提出画面</h2>
        <form action="/posts" method="POST"　enctype="multipart/form-data">
            @csrf
            <div>
                <h2>{{ $post->homework_name }}</h2>
            </div>
            <div>
                <img src="{{ $post->image_url }}">
            </div>
            <div>
                <h2>写真</h2>
　　　　　　　　<input type="file" name="homework[homework_url]">
            </div>
            <div>
                <h2>締め切り</h2>
                
            </div>
            <input type="submit" value="登録"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
