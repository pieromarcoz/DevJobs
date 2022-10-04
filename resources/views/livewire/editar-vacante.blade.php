<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante'>
    <div>
        <x-label for="titulo" :value="__('Título Vacante')" />
        <x-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')" placeholder="Título Vacante"/>
        @error('titulo')
            @livewire('mostrar-alerta', ['message'=> $message])
        @enderror
    </div>
    <div>
        <x-label for="salario" :value="__('Salario Mensual')" />
        <select wire:model="salario" id="salario" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{$salario->id}}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        @error('salario')
            @livewire('mostrar-alerta', ['message'=> $message])
        @enderror
    </div>
    <div>
        <x-label for="categoria" :value="__('Categoria')" />
        <select wire:model="categoria" id="categoria" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        @error('categoria')
            @livewire('mostrar-alerta', ['message'=> $message])
        @enderror
    </div>
    <div>
        <x-label for="empresa" :value="__('Empresa')" />
        <x-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')" placeholder="Empresa: ej. Netflix, Uber, Spotify"/>
        @error('empresa')
            @livewire('mostrar-alerta', ['message'=> $message])
        @enderror
    </div>
    <div>
        <x-label for="ultimo_dia" :value="__('Último Día para postularse')" />
        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia" :value="old('ultimo_dia')"/>
        @error('ultimo_dia')
            @livewire('mostrar-alerta', ['message'=> $message])
        @enderror
    </div>
    <div>
        <x-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea id="descripcion"class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-52" type="text" wire:model="descripcion" :value="old('descripcion')" placeholder="Descripción general del puesto, experiencia"></textarea>
        @error('descripcion')
            @livewire('mostrar-al erta', ['message'=> $message])
        @enderror
    </div>
    <div>
        <x-label for="imagen" :value="__('Imagen')" />
        <x-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva" accept="image/*" />
    <div class="my-5 w-80">
        <x-label :value="__('Imagen Actual')" />
        <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante ' . $titulo}}">
    </div>
    <div class="my-5 w-80">
        @if ($imagen_nueva)
            Imagen Nueva:
            <img src="{{ $imagen_nueva->temporaryUrl() }}">                
        @endif
    </div>
        @error('imagen_nueva')
            @livewire('mostrar-alerta', ['message'=> $message])
        @enderror
    </div>
    <x-button>Guardar Cambios</x-button>
</form>