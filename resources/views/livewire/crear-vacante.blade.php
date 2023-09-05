<form class="md:w-1/2" wire:submit.prevent='crearVacante'>

    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input
        id="titulo" 
        wire:model="titulo" 
        class="block mt-2 mb-2 w-full"
        type="text"
        :value="old('titulo')"
        />
        @error('titulo')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror

        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select  wire:model="salario" id="salario"
            class="w-full mt-2 mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
       <option value="">-- Seleccione</option>
                @foreach ($salarios as $item)
                    <option value="{{$item->id}}">{{$item->salario}} </option>
                @endforeach
        </select>
        @error('salario')
        <livewire:mostrar-alerta :message="$message"/>
         @enderror
   
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select  wire:model="categoria" id="categoria"
            class="w-full mt-2 mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <option value="">-- Seleccione</option>
            @foreach ($categorias as $item)
                <option value="{{$item->id}}">{{$item->categoria}} </option>
            @endforeach
        </select>
        @error('categoria')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
    
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
        id="empresa" 
        wire:model="empresa" 
        class="block mt-2 mb-2 w-full"
        type="text"
        :value="old('empresa')"
        />
        @error('empresa')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror

        <x-input-label for="ultimo_dia" :value="__('Último Dia para postularse')" />
        <x-text-input
        id="ultimo_dia" 
        wire:model="ultimo_dia" 
        class="block mt-2 mb-2 w-full"
        type="date"
        :value="old('ultimo_dia')"
        />
        @error('ultimo_dia')
        <livewire:mostrar-alerta :message="$message"/>
         @enderror

        <x-input-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea 
        wire:model="descripcion" 
        id="descripcion" 
        placeholder="Descripción general del puesto, experiencia."
        class="w-full mt-2 mb-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-52"></textarea> 
        @error('descripcion')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror
     
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
        id="imagen" 
        wire:model="imagen" 
        class="block mt-2 mb-2 w-full"
        type="file"
        accept="image/*"
        />
        <div class="my-5 ">
            @if ($imagen)
               imagen:
               <img src="{{$imagen->temporaryUrl()}}" alt=""> 
            @endif
        </div>  

        @error('imagen')
        <livewire:mostrar-alerta :message="$message"/>
        @enderror

        
        <x-primary-button class="justify-center  mt-2 mb-2">
            {{ __('Crear Vacante') }}
        </x-primary-button>
  
    </div>
</form>
