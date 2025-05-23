<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Posts') }}

            <a href="{{ route('posts.create') }}" class="text-sx bg-gray-800 text-white rounded-md px-2 py-1">
                Crear
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Listado de publicaciones!") }}

                    <table class="mb-4">
                        @foreach ($posts as $post)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{ $post->title }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('posts.edit', $post) }}" class="bg-gray-800 text-white rounded-md px-4 py-2">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('posts.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input 
                                    type="submit" 
                                    value="Eliminar" 
                                    class="bg-gray-800 text-white rounded-md px-4 py-2"
                                    onclick="return confirm(' ¿Desea eliminar el post?')"
                                    >
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $posts->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>