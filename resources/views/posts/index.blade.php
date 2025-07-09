<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
 <div class="text-3xl font-bold text-center mb-6">
  <h2>Bienvenido</h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
  <a href="{{route('posts.create')}}">Nuevo</a>
  @foreach($posts as $item)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
      
      <div class="p-4">
        {{-- <h1 class="text-sm text-gray-500">ID: {{$item->id}}</h1> --}}
        <h2 class="text-xl font-semibold mb-2">{{$item->title}}</h2>
        <img src="{{ $item->imageable->path ?? 'holi' }}" alt="Imagen de post" class="w-full h-48 object-cover rounded">
        <h3 class="mt-4 text-gray-700">{{$item->body}}</h3>
      </div>
    </div>
  @endforeach
</div>
  </body>
</html>




<h1 class="titulo">Hola desde Laravel</h1>
