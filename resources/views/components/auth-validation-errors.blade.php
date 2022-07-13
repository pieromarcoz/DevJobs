@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Ops! algo salió mal.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600 space-y-2">
            @foreach ($errors->all() as $error)
                <li class="bg-red-100 border-l-4 border-red-600 p-3">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
