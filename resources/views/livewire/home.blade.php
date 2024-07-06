<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 overflow-y-auto bg-white shadow-md">
        <div class="sticky top-0 bg-white p-4">
            <h2 class="text-lg font-semibold">Categories</h2>
        </div>
        <nav class="mt-4">
            <button
                @class([
                    'text-gray-7000 px-4 py-2 hover:bg-gray-200 w-full text-left',
                    'bg-gray-200' => $toolCategory === null,
                ])
                wire:click="setToolCategory(null)"
            >
                All
            </button>
            @foreach ($availableToolCategories as $availableToolCategory)
                <button
                    @class([
                        'text-gray-7000 px-4 py-2 hover:bg-gray-200 w-full text-left',
                        'bg-gray-200' => $toolCategory?->is($availableToolCategory),
                    ])
                    wire:click="setToolCategory({{ $availableToolCategory->id }})"
                >
                    {{ $availableToolCategory->name }}
                </button>
            @endforeach
        </nav>
    </div>

    <div class="flex-1 overflow-y-auto">
        <header class="bg-white shadow-sm">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">Operations.Tools</h1>
                <div>
                    <a
                        class="ml-4 text-gray-600 hover:text-gray-900"
                        href="{{ route('submit-new-tool') }}"
                    >
                        Submit
                    </a>
                </div>
            </div>
        </header>

        <main class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <h2 class="mb-4 text-2xl font-semibold">
                    An exclusive list of the best operations tools for your business.
                </h2>
                <p class="mb-4">Carefully vetted and maintained by our team.</p>
                <div class="mb-8 flex space-x-4">
                    <a
                        class="rounded bg-black px-4 py-2 text-white"
                        href="{{ route('submit-new-tool') }}"
                    >
                        + Submit tool
                    </a>
                </div>
                <div class="mb-8 flex space-x-4">
                    <button
                        @class([
                            'px-2 py-1 hover:bg-gray-200 rounded bg-black',
                            'bg-gray-200 text-gray-700' => $businessType === null,
                            'text-white' => $businessType !== null,
                        ])
                        wire:click="setBusinessType(null)"
                    >
                        All
                    </button>
                    @foreach ($availableBusinessTypes as $availableBusinessType)
                        <button
                            @class([
                                'px-2 py-1 hover:bg-gray-200 rounded bg-black',
                                'bg-gray-200 text-black' => $businessType?->is($availableBusinessType),
                                'text-white' => $businessType?->isNot($availableBusinessType) ?? true,
                            ])
                            wire:click="setBusinessType({{ $availableBusinessType->id }})"
                        >
                            {{ $availableBusinessType->name }}
                        </button>
                    @endforeach
                </div>
                <input
                    class="mb-8 w-full rounded-lg border border-gray-300 px-4 py-2"
                    type="text"
                    placeholder="Search..."
                    wire:model.live="search"
                >

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    @forelse ($availableTools as $availableTool)
                        <div class="rounded-lg bg-white p-4 shadow">
                            <img
                                class="mb-2 h-16 w-16"
                                src="{{ $availableTool->image }}"
                                alt="{{ $availableTool->name }} icon"
                            >
                            <h3 class="mb-1 font-semibold">{{ $availableTool->name }}</h3>
                            <p class="text-sm text-gray-600">{{ $availableTool->description }}</p>
                        </div>
                    @empty
                        <p class="text-gray-600">No tools available.</p>
                    @endforelse
                </div>
            </div>
        </main>
    </div>
</div>
