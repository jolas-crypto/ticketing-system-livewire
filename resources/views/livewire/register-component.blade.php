<div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6">
	<form wire:submit.prevent="save">
		<div class="space-y-12">
			<div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
				<div>
					<h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
					<p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
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
		
			{{-- <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
				<div>
					<h2 class="text-base font-semibold leading-7 text-gray-900">Notifications</h2>
					<p class="mt-1 text-sm leading-6 text-gray-600">We'll always let you know about important changes, but you pick what else you want to hear about.</p>
				</div>
				<div class="max-w-2xl space-y-10 md:col-span-2">
					<fieldset>
						<legend class="text-sm font-semibold leading-6 text-gray-900">By Email</legend>
						<div class="mt-6 space-y-6">
						<div class="relative flex gap-x-3">
							<div class="flex h-6 items-center">
							<input id="comments" name="comments" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
							</div>
							<div class="text-sm leading-6">
							<label for="comments" class="font-medium text-gray-900">Comments</label>
							<p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
							</div>
						</div>
						<div class="relative flex gap-x-3">
							<div class="flex h-6 items-center">
							<input id="candidates" name="candidates" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
							</div>
							<div class="text-sm leading-6">
							<label for="candidates" class="font-medium text-gray-900">Candidates</label>
							<p class="text-gray-500">Get notified when a candidate applies for a job.</p>
							</div>
						</div>
						<div class="relative flex gap-x-3">
							<div class="flex h-6 items-center">
							<input id="offers" name="offers" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
							</div>
							<div class="text-sm leading-6">
							<label for="offers" class="font-medium text-gray-900">Offers</label>
							<p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p>
							</div>
						</div>
						</div>
					</fieldset>
					<fieldset>
						<legend class="text-sm font-semibold leading-6 text-gray-900">Push Notifications</legend>
						<p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your mobile phone.</p>
						<div class="mt-6 space-y-6">
						<div class="flex items-center gap-x-3">
							<input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
							<label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Everything</label>
						</div>
						<div class="flex items-center gap-x-3">
							<input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
							<label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Same as email</label>
						</div>
						<div class="flex items-center gap-x-3">
							<input id="push-nothing" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
							<label for="push-nothing" class="block text-sm font-medium leading-6 text-gray-900">No push notifications</label>
						</div>
						</div>
					</fieldset>
				</div>
			</div> --}}
		</div>
		<div class="mt-6 flex items-center justify-end gap-x-6">
			<button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
			<button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
		</div>
	</form>
</div>