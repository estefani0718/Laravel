<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    
    <div class="text-3xl font-bold"><h2>Bienvenido</h2></div>

 @foreach($posts as $item)
 <div class="container ">

   <div class="card ">
      <div class="card__elements">
         <div class="titles ">
            <h1>{{$item->id}}</h1>
            <h2>{{$item->title}}</h2>
         </div>
         <div class="cuerpo">
            <img src="{{  $item->imageable->path }}" alt="Imagen de post" class="imagen w-full max-w-sm">
         </div>   
         <div>
            <h3 class="card__body">{{$item->body}}</h3>
         </div>
      </div>
   </div>
 </div> 
 @endforeach
 
  </body>
</html>




<h1 class="titulo">Hola desde Laravel</h1>
