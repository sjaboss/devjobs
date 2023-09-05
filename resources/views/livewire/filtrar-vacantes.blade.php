<div class="bg-gray-100 py-2">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Vacantes Disponibles
    </h2>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 ">
        <form wire:submit.prevent='leerDatosFormulario'>
            <div class="lg:grid lg:grid-cols-3 gap-5">
                <div class="mb-5">
                    <x-input-label class="block mb-1 text-sm text-gray-700 uppercase font-bold " for="termino">Término de
                        Búsqueda
                    </x-input-label>
                    <x-text-input id="termino" type="text" placeholder="Buscar por Término: ej. Laravel"
                        class=" border
                        text-sm rounded-lg
                          block w-full p-2.5
                            bg-gray-700
                             border-gray-600
                             placeholder-gray-400
                              text-white
                               focus:ring-blue-500
                                focus:border-blue-500"
                        wire:model='termino' />
                </div>

                <div class="mb-5">
                    <x-input-label
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold">Categoría</x-input-label>
                    <select wire:model='categoria'
                        class="
                        border
                        text-sm rounded-lg
                          block w-full p-2.5
                            bg-gray-700
                             border-gray-600
                             placeholder-gray-400
                              text-white
                               focus:ring-blue-500
                                focus:border-blue-500">
                        <option>--Seleccione--</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <x-input-label class="block mb-1 text-sm text-gray-700 uppercase font-bold">Salario
                        Mensual</x-input-label>
                    <select wire:model='salario' c class="
                    border
                    text-sm rounded-lg
                      block w-full p-2.5
                        bg-gray-700
                         border-gray-600
                         placeholder-gray-400
                          text-white
                           focus:ring-blue-500
                            focus:border-blue-500">
                        <option>-- Seleccione --</option>
                        @foreach ($salarios as $salario)
                            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">

                <x-primary-button class="justify-center  mt-2 mb-2">
                    {{ __('Buscar') }}
                </x-primary-button>
            </div>



        </form>
    </div>
</div>
