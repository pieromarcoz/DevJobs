<form action="" class="md:w-1/2 space-y-5">
    <div>
        <x-label for="titulo" :value="__('Título Vacante')" />
        <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" placeholder="Título Vacante"/>
    </div>
    <div>
        <x-label for="salario" :value="__('Salario Mensual')" />
        <select name="salario" id="salario" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="">-- Selecciona --</option>
        </select>
    </div>
    <div>
        <x-label for="categoria" :value="__('Categoria')" />
        <select name="categoria" id="categoria" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="">-- Selecciona --</option>
        </select>
    </div>
    <div>
        <x-label for="empresa" :value="__('Empresa')" />
        <x-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" placeholder="Empresa: ej. Netflix, Uber, Spotify"/>
    </div>
    <div>
        <x-label for="ultimo_dia" :value="__('Último Día para postularse')" />
        <x-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')"/>
    </div>
    <div>
        <x-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea id="descripcion"class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-52" type="text" name="descripcion" :value="old('descripcion')" placeholder="Descripción general del puesto, experiencia"></textarea>
    </div>
    <div>
        <x-label for="imagen" :value="__('Imagen')" />
        <x-input id="imagen" class="block mt-1 w-full" type="file" name="imagen"/>
    </div>
    <x-button>Crear Vacante</x-button>
</form>