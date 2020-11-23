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
       
        <div class="card-header">  
          
            <h4>{{$post -> title}}</h4>
        </div> 

        <div class="card-body">           
            <p>{{$post -> body}}</p>
        </div>           
        
        <div class="card-footer">
            <a href="/">Regresar</a>
        </div>
       
    </div>
</body>
</html>