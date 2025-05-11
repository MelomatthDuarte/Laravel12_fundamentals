Formulario

@csrf

<label for="title" class="uppercase text-gray-700 text-xs">Titulo</label>
@error('title')
    <span class="text-xs text-red-500">{{ $message }}</span>
@enderror
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ old('title', $post->title) }}">


<label for="slug" class="uppercase text-gray-700 text-xs">Slug</label>
@error('title')
    <span class="text-xs text-red-500">{{ $message }}</span>
@enderror
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4" value="{{ old('slug', $post->slug) }}">


<label for="body" class="uppercase text-gray-700 text-xs">Contenido</label>
@error('body')
    <span class="text-xs text-red-500">{{ $message }}</span>
@enderror
<textarea name="body" rows="5" class="rounded border-gray-200 w-full mb-4">{{ old('body', $post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index')}}" class="text-indigo-600"> Volver </a>
    <button type="submit" class="bg-gray-800 text-white rounded-md px-4 py-2">Enviar</button>
</div>
