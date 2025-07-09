<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-center italic text-2xl text-gray-800 mb-4">Bienvenido</h1>
    <h3 class="text-center text-gray-600 mb-6">Crear nuevos posts</h3>

    <form action={{route('posts.store')}} method="POST"  novalidate class="flex flex-col gap-4" enctype="multipart/form-data">
      @csrf
      <label for="title"class=" text-[#2271b3]  text-lg text-gray-700 ">Titulo</label>
      
          
      <input type="text" name="title"   class="border border-gray-300 rounded px-4 py-2" value="{{old("title")}}">
        @error('title')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <label for="body" class="text-lg text-gray-700">Contenido</label>
      <textarea name="body"   class="border border-gray-300 rounded px-4 py-2">{{old("body")}}</textarea>
       @error('body')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror
       <label for="file">IMAGEn</label>
      <input type="file" name="file">
      @error('file')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
       
      <button class="bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">
        Enviar
      </button>
    </form>
  </div>

</body>
</html>
{{-- {{route('posts.store')}} method="POST" --}}