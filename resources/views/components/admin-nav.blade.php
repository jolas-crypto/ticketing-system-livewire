<nav class="bg-white mb-4">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="border-b border-gray-700">
            <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                <div class="flex items-center">
                    <div class="md:block">
                        <div class="flex items-baseline space-x-4" x-data="{ active: '{{ Route::currentRouteName() }}' }">
                            <a href="/assigned" 
                                :class="{ 'admin-nav-active': active.includes('admin-assigned') || active.includes('setting') }"
                                wire:navigate
                                class="admin-nav">
                                Assigned
                            </a>
                            <a href="/issue-classification" 
                                :class="{ 'admin-nav-active': active.includes('issue-classification') }"
                                wire:navigate
                                class="admin-nav">
                                Issue Classification
                            </a>
                            <a href="/support" 
                                :class="{ 'admin-nav-active': active.includes('support') }"
                                wire:navigate
                                class="admin-nav">
                                Support For
                            </a>
                            <a href="/issue-type" 
                                :class="{ 'admin-nav-active': active.includes('issue-type') }"
                                wire:navigate
                                class="admin-nav">
                                Issue Type
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>