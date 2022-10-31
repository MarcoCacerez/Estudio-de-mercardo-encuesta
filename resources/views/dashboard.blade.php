<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-start space-x-4">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Encuestas') }}
                </h2>
            </div>
            <div>
                <a href="/encuestas/crear" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Crear encuesta
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-6">
                        @foreach ($encuestas as $encuesta)
                            <div class="p-6 mb-3 max-w-auto bg-white rounded-lg border border-gray-200 shadow-md">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $encuesta->titulo }}</h5>
                                <p class="mb-3 font-normal text-gray-700 ">{{ $encuesta->descripcion }}</p>
                                <a href="/encuestas/{{ $encuesta->id }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Ver mas
                                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </a>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
