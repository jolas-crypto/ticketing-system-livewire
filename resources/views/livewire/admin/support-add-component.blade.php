<div class="bg-white pb-32">
    <x-admin-nav></x-admin-nav>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Support For</h1>
                <p class="mt-2 text-sm text-gray-700">This table can be used to identify what the support is being provided for, such as specific products, services, or departments.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{ route('support') }}"
                    wire:navigate
                    class="button-add">
                    Back to List Support For
                </a>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <form wire:submit.prevent="save">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <x-text-input
                                wire:model="supportForSaveForm.code"
                                type="text"
                                label="Code"
                                :required="false"
                                placeholder="Code"
                                class=""
                                />
                            </div>
                            <div class="sm:col-span-3">
                                <x-text-input
                                wire:model="supportForSaveForm.name"
                                type="text"
                                label="Name"
                                :required="false"
                                placeholder="Name"
                                class=""
                                />
                            </div>
                            <div class="col-span-full">
                                <x-textarea 
                                wire:model="supportForSaveForm.description"
                                label="Description"
                                name="description"
                                placeholder="Description"
                                />
                            </div>
                            <div class="sm:col-span-2">
                                <x-select-input 
                                wire:model="supportForSaveForm.status"
                                label="Status"
                                :items="$status"
                                placeholder="Status"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{ route('issue-type') }}" wire:navigate class="button-cancel">Cancel</a>
                    <button type="submit" class="button-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
