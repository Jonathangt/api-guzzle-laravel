<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
  

</head>
<body>   
    <div class="container">
       <a href="/"> <h2>Publicaciones</h2><br> </a>
        @foreach($posts as $post)
        <div class="card">           
            <div class="card-body">
                <a href="/posts/{{$post->id}}">
                {{$post -> title}}
                </a>
            </div>
        </div>            
        @endforeach
       
    </div>
</body>
</html>