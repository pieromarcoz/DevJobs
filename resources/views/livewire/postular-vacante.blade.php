<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-cold my-4">Postularse a esta vacante</h3>
    @if(session()->has('mensaje'))
        <p class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 text-sm rounded-lg">
            {{ session('mensaje') }}
        </p>
    @else
        <form wire:submit.prevent='postularme' action="" class="w-96 mt-5">
            <div class="mb-4">
                <x-label for="cv" :value="__('Curriculum o Hoja de vida')"/>
                <x-input wire:model="cv" id="cv" type="file" accept=".pdf" class="block w-full mt-1"/>
            </div>
            @error('cv')
                <livewire:mostrar-alerta :message="$message">
            @enderror
            <x-button class="my-5">
                {{__('Postularme')}}
            </x-button>
        </form>
    @endif
</div>
