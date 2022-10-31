<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $encuesta->titulo }}
        </h2>
        <a href="/encuestas/{{ $encuesta->id }}/preguntas/crear">
            Crear pregunta
        </a>
        <a href="/formularios/{{ $encuesta->id }}-{{ Str::slug($encuesta->titulo) }}">
            Contestar encuesta
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($encuesta->preguntas as $pregunta )
                        <div class="mb-6">
                            <div class="flex flex-col md:flex-row">
                                <div>
                                    <h1 class="mb-4 mr-2 font-semibold text-gray-900">{{ $pregunta->pregunta }}</h1>
                                </div>
                                <div class="flex flex-row mb-6">
                                    <div>
                                        <a href="#" class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Editar</a>
                                    </div>
                                    <div>
                                        <form action="">
                                            <button class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex">
                                @foreach ($pregunta->respuestas as $respuesta )
                                    <li class="w-full border-b border-gray-200 text-center sm:border-b-0 sm:border-r">
                                        {{ $respuesta->respuesta }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
