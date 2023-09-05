<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        @if (count($vacantes) > 0)
            @foreach ($vacantes as $item)
                <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                    <div class="leading-10">
                        <a href="{{ route('vacantes.show', $item->id) }}" class="text-xl font-bold">
                            {{ $item->titulo }}
                        </a>
                        <p class="text-sm text-gray-600 font-bold">{{ $item->empresa }}</p>
                        <p class="text-sm text-gray-600">Último día: {{ date('d/m/Y', strtotime($item->ultimo_dia)) }}
                        </p>
                    </div>
                    <div class="flex gap-3 flex-col md:flex-row items-stretch pt-5 md:mt-0 ">
                        <a href="{{route('candidatos.index' , $item)}}"
                            class="bg-slate-800 py-2  px-4  rounded-l-lg border-b-4 border-l-8 border-gray-400 hover:border-green-600 text-white text-xs font-bold uppercase text-center">
                            {{$item->candidatos->count()}}
                            Candidatos</a>


                        <a href="{{ route('vacantes.edit', $item->id) }}"
                            class="bg-slate-800 py-2  px-4  rounded-lg border-b-4 border-l-8 border-gray-400 hover:border-cyan-600 text-white text-xs font-bold uppercase text-center">Editar</a>


                        <button wire:click="$emit('mostrarAlerta',{{ $item->id }})"
                            class="bg-slate-800 py-2  px-4  rounded-lg border-b-4 border-l-8 border-gray-400 hover:border-red-600 text-white text-xs font-bold uppercase text-center">eliminar</button>
                    </div>
                </div>
            @endforeach
        @else
            <p class="p-3 text-center text-sm text-gray-600">No posee Vacantes que mostrar</p>
        @endif
    </div>

    <div class=" mt-10">
        {{ $vacantes->links() }}
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('mostrarAlerta', vacanteId => {

            Swal.fire({
                title: 'Eliminar Vacante?',
                text: "Una vacante eliminada no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#305149',
                cancelButtonColor: '#814517',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {

                    //eliminar vacante
                    Livewire.emit('eliminarVacante', vacanteId)
                    Swal.fire(
                        'Se eliminó la Vacante!',
                        'Eliminado Correctamente.',
                        'success'
                    )
                }
            })

        })
    </script>
@endpush
