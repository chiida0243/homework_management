<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>先生投稿一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿課題一覧画面</h1>
        <!--<a href='/posts/create'>新規投稿</a>-->
        <div>
            @foreach ($posts_grouped as $posts)
                @foreach($posts as $post)
                    <!--<div style='border:solid 1px; margin-bottom: 10px;'>-->
                    <h2>{{ $post->deadline }}</h2>
                    <p>
                        締切日：{{ $post->deadline }}
                        宿題：{{ $post->homework_name }}
                    </p>
                    </div>
                @endforeach
            @endforeach
            
        </div>
        
    </body>
</html>
