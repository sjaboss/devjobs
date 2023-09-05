<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacante->titulo }}
        </h3>
    </div>
    <div class="md:grid md:grid-cols-2 normal-case bg-gray-100 p-4 my-10">
        <p class="font-bold text-sm uppercase text-gray-800 my-3">Empresa:
            <samp class="normal-case font-normal">
                {{ $vacante->empresa }}
            </samp>
        </p>

        <p class="font-bold text-sm uppercase text-gray-800 my-3">Ultimo día para postularse:
            <samp class="normal-case font-normal">
                {{ date('d/m/Y', strtotime($vacante->ultimo_dia)) }}
            </samp>
        </p>

        <p class="font-bold text-sm uppercase text-gray-800 my-3">Categoría:
            <samp class="normal-case font-normal">
                {{ $vacante->categoria->categoria }}
            </samp>
        </p>

        <p class="font-bold text-sm uppercase text-gray-800 my-3">Salario:
            <samp class="normal-case font-normal">
                {{ $vacante->salario->salario }}
            </samp>
        </p>

    </div>

    <div class="md:grid md:grid-cols-6 gap-28">
        <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}"
                alt="{{ 'Imagen vacante' . $vacante->titulo }}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripción de Puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>

    @guest
        <div class="bg-gray-100 border border-dashed p-5 text-center">
            <p>¿Deseas aplicar a esta vacante?
                <a class="font-bold text-green-600" href="{{ route('register') }}">Óbten una Cúenta y aplica a esta y otras
                    Vacantes</a>
            </p>
        </div>
   @else 
   
      @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante" />
    @endcannot
        
    @endguest


</div>
