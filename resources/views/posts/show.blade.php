<!DOCTYPE html>
<html lang="{{ str_replace('_','_',app()->getlocale())}}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!--Fonts-->
        <link href="https://fonts,googleapis.com/css2?family=Nunito:wght`400;600;700">
        
    </head>
    <body class="antialiased">
        <h1='title'>
            {{ $post->title }}
            </h1>
            <div class='content'>
                <div class='content_post'>
                    <h3>本文</h3>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            </div> 
            <div class='edit'>
                <a href="/posts{{ $post->id }}/edit">戻る</a>
            </div>
            <div class='footer'>
                <a href='/'>戻る</a>
            </div>
    </body>
</html>