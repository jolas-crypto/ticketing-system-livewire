<div class="bg-white pb-32">
    <x-admin-nav></x-admin-nav>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Issues Classification</h1>
                <p class="mt-2 text-sm text-gray-700">This table will categorize the issues, for example, by severity or priority.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{ route('issue-classification') }}"
                    wire:navigate
                    class="button-add">
                    Back to List Issue Classification
                </a>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <form wire:submit.prevent="save">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <x-text-input
                                wire:model="issueClassificationSaveForm.code"
                                type="text"
                                label="Code"
                                :required="false"
                                placeholder="Code"
                                class=""
                                />
                            </div>
                            <div class="sm:col-span-3">
                                <x-text-input
                                wire:model="issueClassificationSaveForm.name"
                                type="text"
                                label="Name"
                                :required="false"
                                placeholder="Name"
                                class=""
                                />
                            </div>
                            <div class="col-span-full">
                                <x-textarea 
                                wire:model="issueClassificationSaveForm.description"
                                label="Description"
                                name="description"
                                placeholder="Description"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="button-cancel">Cancel</button>
                    <button type="submit" class="button-save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
