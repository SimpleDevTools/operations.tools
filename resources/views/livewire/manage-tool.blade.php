<div class="flex min-h-screen items-center justify-center bg-gray-100 px-4 py-12 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8 rounded-lg bg-white p-8 shadow-md">
        <div>
            <a
                class="mb-8 flex items-center text-gray-600"
                href="{{ route('home') }}"
            >
                <svg
                    class="mr-2 h-5 w-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"
                    />
                </svg>
                Home
            </a>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Manage Your Tool
            </h2>
            @if ($message)
                <div class="mt-4 text-center text-sm text-green-500">
                    {{ $message }}
                </div>
            @endif
        </div>
        <form
            class="mt-8 space-y-6"
            wire:submit.prevent="saveTool"
        >
            <div class="space-y-4">
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="tool-url"
                    >
                        Tool URL
                    </label>
                    <input
                        class="mt-1 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        id="tool-url"
                        type="url"
                        wire:model="url"
                        required
                        placeholder="https://example.com"
                    >
                    @error('url')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="tool-name"
                    >
                        Tool Name
                    </label>
                    <input
                        class="mt-1 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        id="tool-name"
                        type="text"
                        wire:model="name"
                        required
                        placeholder="My Awesome Tool"
                    >
                    @error('name')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="tool-description"
                    >
                        Description
                    </label>
                    <textarea
                        class="mt-1 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        id="tool-description"
                        wire:model="description"
                        required
                        placeholder="Describe your tool here..."
                        rows="3"
                    ></textarea>
                    @error('description')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label
                        class="block text-sm font-medium text-gray-700"
                        for="image-url"
                    >
                        Image URL
                    </label>
                    <input
                        class="mt-1 block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                        id="image-url"
                        type="url"
                        wire:model="imageUrl"
                        required
                        placeholder="https://example.com/image.png"
                    >
                    @error('imageUrl')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex h-5 items-center">
                    <input
                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                        id="active"
                        type="checkbox"
                        wire:model="active"
                    >
                </div>
                <div class="ml-3 text-sm">
                    <label
                        class="font-medium text-gray-700"
                        for="active"
                    >Active</label>
                    <p class="text-gray-500">Check this box if the tool is ready to be listed</p>
                </div>
            </div>

            <div>
                <button
                    class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    type="submit"
                >
                    Save Tool
                </button>
            </div>
        </form>
    </div>
</div>
