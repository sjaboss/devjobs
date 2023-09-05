
@php
  $clases = " text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"  
@endphp

<div>
    <a {{$attributes->merge(['class'=>$clases])}}> {{-- JAVI bueno aca en $attributes le estamos pasando los href de adelante. y con el merge le agregamos las clases de css --}}
        {{$slot }}{{-- aca le enviamos los textos de adelante usan la variable de x-slot que usa usando $slot --}}
    </a>
</div>