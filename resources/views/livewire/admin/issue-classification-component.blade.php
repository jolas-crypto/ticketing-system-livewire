<div class="bg-white pb-32">
    <x-admin-nav></x-admin-nav>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold leading-6 text-gray-900">Issues Classification</h1>
                <p class="mt-2 text-sm text-gray-700">This table will categorize the issues, for example, by severity or priority.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a href="{{ route('add-issue-classification') }}"
                    wire:navigate
                    class="button-add">
                    Add Issue Classification
                </a>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="border-b border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between">
                <div>
                    
                </div>
                <div>
                    <form wire:submit="search">
                        <div class="mt-2 flex rounded-md shadow-sm">
                            <div class="relative flex flex-grow items-stretch focus-within:z-10">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                </div>
                                <input 
                                type="text" 
                                name="search" 
                                id="search" 
                                class="table-search-input" 
                                placeholder="Search"
                                wire:model="query">
                            </div>
                            <button 
                            type="submit" 
                            class="table-search-button">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                @foreach ($tableHeaders as $tableHeader)
                                    <th scope="col" class="table-th">{{ $tableHeader }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($issueClassification as $issueClass)
                                <tr wire:key="{{ $issueClass->id }}">
                                    <td class="table-tbody">{{ $issueClass->code }}</td>
                                    <td class="table-tbody">{{ $issueClass->name }}</td>
                                    <td class="table-tbody">{{ $issueClass->description }}</td>
                                    <td class="table-tbody"><span class="table-tbody-span">{{ ($issueClass->status) ? 'Active' : 'In-Active' }}</span></td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-0">
                                        <a href="{{ route('show-issue-classification', $issueClass->id) }}" wire:navigate class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table-pagination">
                {{ $issueClassification->links() }}
            </div>
        </div>
    </div>
</div>
