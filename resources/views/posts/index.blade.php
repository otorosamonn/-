<!DOCTYPE html>
<html lang="{{ str_replace('_','_',app()->getlocale())}}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        
        <!--Fonts-->
        <link href="https://fonts,googleapis.com/css2?family=Nunito:wght`400;600;700">
        
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <a href="/posts/create">create</a>
        <div class='post'>
            @foreach($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id}}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                    </form>
                </div>
            @endgoreach
            </div>
          <div class='paginate'>{{ $posts->links()}}</div>
          <script>
              function deletePost(id){
                  'use strict'
                  
                  if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                      document.getElementById(`form_${id}`)
                  }
              }
          </script>
    </body>
</html>