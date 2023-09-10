<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>宿題一覧画面</h1>
        <!--<a href='/posts/create'>新規投稿</a>-->
        <div>
            @foreach ($posts as $post)
                <!--<div style='border:solid 1px; margin-bottom: 10px;'>-->
                <h2>{{ $post->deadline }}</h2>
                    @foreach($homeworkList as $homework)
                    <p>
                        締切日：{{ $homework->deadline }}
                        宿題：<a href="/posts/{{ $post->id }}">{{ $post->homework_name }}</a>
                    </p>
                   @endforeach
                </div>
            @endforeach
            
        </div>
        
    </body>
</html>
