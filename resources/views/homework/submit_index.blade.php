<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>宿題管理システム</h1>
        <h2>提出済み課題一覧</h2>
        <!--<a href='/posts/create'>新規投稿</a>-->
        
        <div>
                <h3>提出済課題</h3>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <div class="submit_homework">
                     <p>{{ $post->title }}</p>
                     <p>{{ $post->image_url}}</p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
