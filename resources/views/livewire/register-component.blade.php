<div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6">
	<form wire:submit.prevent="save">
		<div class="space-y-12">
			<div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
				<div>
					<x-heading 
					header='Profile'
					/>
					<p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
				</div>
				@if (session('status'))
					<div aria-live="assertive" class="pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
						<div class="flex w-full flex-col items-center space-y-4 sm:items-end">
							<div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
								<div class="p-4">
									<div class="flex items-start">
										<div class="flex-shrink-0">
											<svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>
										</div>
										<div class="ml-3 w-0 flex-1 pt-0.5">
											<p class="text-sm font-medium text-gray-900">Successfully saved!</p>
											<p class="mt-1 text-sm text-gray-500">Anyone with a link can now view this file.</p>
										</div>
										<div class="ml-4 flex flex-shrink-0">
											<button type="button" class="inline-flex rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
												<span class="sr-only">Close</span>
												<svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
												<path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
												</svg>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endif

				@error('image_name') <span class="error">{{ $message }}</span> @enderror

				<div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
					<div class="col-span-full">
						<x-textarea 
						wire:model="registerSaveForm.about"
						label="About"
						name="about"
						/>
						<p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
					</div>
					<div class="col-span-full">
						<label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
						<div class="mt-2 flex items-center gap-x-3">
							<svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
								<path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
							</svg>
							<button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
						</div>
					</div>
					<div class="col-span-full">
						<label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover photo</label>
						<div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
							<div class="text-center">
								@if ($registerSaveForm->image_path) 
									<img src="{{ $registerSaveForm->image_path->temporaryUrl() }}">
								@else
									<svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
										<path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
									</svg>
								@endif
								<div class="mt-4 flex text-sm leading-6 text-gray-600 justify-center">
									<label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
										<span>Upload a file</span>
										<input 
										id="file-upload" 
										name="file-upload" 
										type="file" 
										class="sr-only"
										wire:model="registerSaveForm.image_path"
										>
									</label>
								</div>
								<p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
				<div>
					<h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
					<p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
				</div>
				
				<div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
					<div class="sm:col-span-3">
						<x-text-input
						wire:model="registerSaveForm.first_name"
						type="text"
						label="First Name"
						:required="false"
						placeholder="First Name"
						class=""
						/>
					</div>
					<div class="sm:col-span-3">
						<x-text-input
						wire:model="registerSaveForm.last_name"
						type="text"
						label="Last Name"
						:required="false"
						placeholder="Last Name"
						class=""
						/>
					</div>
					<div class="sm:col-span-4">
						<x-text-input
						wire:model="registerSaveForm.email"
						type="email"
						label="Email Address"
						:required="false"
						placeholder="Email Address"
						class=""
						/>
					</div>
					<div class="col-span-full">
						<x-text-input
						wire:model="registerSaveForm.street_address"
						type="text"
						label="Street Address"
						:required="false"
						placeholder="Street Address"
						class=""
						/>
					</div>
					<div class="sm:col-span-2 sm:col-start-1">
						<x-text-input
						wire:model="registerSaveForm.city"
						type="text"
						label="City"
						:required="false"
						placeholder="City"
						class=""
						/>
					</div>
					<div class="sm:col-span-2">
						<x-text-input
						wire:model="registerSaveForm.state_province"
						type="text"
						label="State / Province"
						:required="false"
						placeholder="State / Province"
						class=""
						/>
					</div>
					<div class="sm:col-span-2">
						<x-text-input
						wire:model="registerSaveForm.zip_code"
						type="text"
						label="Zip / Postal Code"
						:required="false"
						placeholder="Zip / Postal Code"
						class=""
						/>
					</div>
				</div>
			</div>
			<div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
				<div>
					<h2 class="text-base font-semibold leading-7 text-gray-900">Validation</h2>
					<p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
				</div>
				<div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
					<div class="sm:col-span-3">
						<x-select-input 
						wire:model="registerSaveForm.type"
						label="Type"
						:items="$type"
						placeholder="User Type"
						/>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-6 flex items-center justify-end gap-x-6">
			<button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
			<button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
		</div>
	</form>
</div>