<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-center mb-10">Mis Notificaciones</h1>

                    <div class="divide-y divide-gray-200">
                        @forelse ($notificaciones as $item)
                            <div class="p-5  md:flex md:justify-between md:items-center">
                                <div>
                                    <p>Tienes un nuevo candidato
                                        <samp class="font-bold">{{ $item->data['nombre_vacante'] }}</samp>
                                    </p>
                                    <span class="font-bold">{{ $item->created_at->diffForHumans() }}</span>
                                </div>

                                <div class="mt-5 mg:mt-0">
                                    <a href="{{ route('candidatos.index',$item->data['id_vacante'])}}"
                                        class="bg-slate-800 py-2  px-4  rounded-l-lg border-b-4 border-l-8 border-gray-400
                                hover:border-green-600 text-white text-xs font-bold uppercase text-center">Ver
                                        Candidatos</a>
                                </div>
                            </div>

                        @empty
                            <p class="text-center text-gray-600">No hay Notificaciones Nuevas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
