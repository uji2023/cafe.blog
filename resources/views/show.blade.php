<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
   <meta charset="utf-8">
   <title>cafe.blog</title>
   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  </head>
       
  <body>
    <h1>CAFE BLOG</h1>
    <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
   <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
     @csrf
     @method('DELETE')
    <input type="submit" style="display:none">
    <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
   </form>
          
   <div class='post'>
    <h2 class='title'>{{ $post->title}}</h2>
    <p class='image'>{{ $post->image}}</p>
    <p class='detail_cafeURL'>{{$post->detail_cafeURL}}</p>
    <p class='body'>{{$post->body}}</p>
    <p class='detail_foodname'>{{$post->detail_foodname}}</p>
    <p class='updated_at'>{{$post->updated_at}}</p>
   </div>
          
   <div class='back'>[<a href='/'>back</a>]</div>
          
   <script>
    function deletePost(e){
    'use strict';
    if (confirm('削除すると復元できません。\n本当に削除しますか？')){
    document.getElementById('form_delete').submit();
   }
   }
   </script>
  </body>
</html>
