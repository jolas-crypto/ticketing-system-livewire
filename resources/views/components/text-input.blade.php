@props([
    'type' => "",
    'label' => "",
    'required' => false,
    'placeholder' => ""
])

<div>
    <div>
        <label 
			for="{{ $attributes->whereStartsWith('wire:model')->first() }}" 
			class="block text-sm font-medium leading-6 text-gray-900">
			{{ $label }}
		</label>
        <div class="relative mt-2 rounded-md shadow-sm">
			<input 
			{{ $attributes->whereStartsWith('wire:model') }}
			id="{{ $attributes->whereStartsWith('wire:model')->first() }}"
			type="{{ $type }}" 
			@error($attributes->whereStartsWith('wire:model')->first())
			class="block w-full rounded-md border-0 py-1.5 px-2 pr-10 text-red-900 ring-1 ring-inset ring-red-300 placeholder:text-red-300 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6" 
			@else
			class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-300 sm:text-sm sm:leading-6"
			@endif
			placeholder="{{ $placeholder }}" 
			@error($attributes->whereStartsWith('wire:model')->first())
			aria-invalid="true" 
			aria-describedby="email-error"
			@enderror
			>
			@error($attributes->whereStartsWith('wire:model')->first())
				<div wire:key="error_{{ $attributes->whereStartsWith('wire:model')->first() }}" class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
					<svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
					</svg>
				</div>
			@enderror
        </div>
		@error($attributes->whereStartsWith('wire:model')->first())
			<p wire:key="error_{{ $attributes->whereStartsWith('wire:model')->first() }}" class="text-sm text-red-600" id="email-error">{{ $message }}</p>
		@enderror
      </div>
</div>