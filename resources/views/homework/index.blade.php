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
            <button id ="showAlertBtn" >先生ボタン</button>
            @foreach ($posts_grouped as $posts)
                @foreach($posts as $post)
                    <!--<div style='border:solid 1px; margin-bottom: 10px;'>-->
                    <h2>{{ $post->deadline }}</h2>
                    <p>
                        締切日：{{ $post->deadline }}
                        宿題：<a href="/homework/{{ $post->id }}">{{ $post->homework_name }}</a>
                    </p>
                    
                @endforeach
            @endforeach
        
    <script>
    // ボタンがクリックされたときにアラートを表示する関数
    document.getElementById('showAlertBtn').addEventListener('click', function () {
    // パスワード入力欄を表示するプロンプトを表示
    var password = prompt('パスワードを入力してください:');
    
    // 正しいパスワードの場合、指定のルートにリダイレクト
    if (password === 'teacher') {
    window.location.href = "/homework/create";
    } else {
    alert('パスワードが正しくありません。');
    }
    });
    </script>
        </div>
        
    </body>
</html>
