<div>
    <div class="flex h-screen bg-gray-100">
        <!-- Left Section -->
        <div class="w-1/2 p-8">
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
                Back
            </a>

            <form
                class="rounded-lg bg-white p-6 shadow-md"
                wire:submit="submit"
            >
                <h2 class="mb-6 text-2xl font-bold">Submit</h2>

                <input
                    class="w-full rounded border p-2"
                    type="url"
                    placeholder="Tool URL..."
                    wire:model="toolUrl"
                    required
                >
                @error('toolUrl')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
                <input
                    class="mt-4 w-full rounded border p-2"
                    type="email"
                    placeholder="Your email address..."
                    wire:model="email"
                    required
                >
                @error('email')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror

                <div class="mb-6 mt-4">
                    <h3 class="mb-2 font-semibold">Price</h3>
                    <div class="rounded-lg border bg-gray-100 p-4">
                        <div class="text-lg font-semibold">$59.99 <span
                                class="text-sm font-normal line-through">$69.99</span> / year</div>
                        <div class="text-sm text-gray-600">* You save $10 (Launch discount).</div>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="mb-2 font-semibold">Checklist</h3>
                    <ul>
                        <li class="mb-2 flex items-center">
                            <svg
                                class="mr-2 h-5 w-5 text-green-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>Your tool is functional</span>
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg
                                class="mr-2 h-5 w-5 text-green-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>It delivers what it promises</span>
                        </li>
                        <li class="mb-2 flex items-center">
                            <svg
                                class="mr-2 h-5 w-5 text-green-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>Is not an infoproduct</span>
                        </li>
                    </ul>
                </div>

                <button class="w-full rounded-lg bg-black py-2 text-white">Next</button>
            </form>
        </div>

        <!-- Right Section -->
        <div class="w-1/2 overflow-y-auto bg-gray-200 p-8">
            <h2 class="mb-6 text-2xl font-bold">Testimonials</h2>
            <div class="mb-4 rounded-lg bg-white p-4 shadow-md">
                <p class="mb-2">"Since day one, 1000.tools has been bringing traffic to TagParrot with a 4% conversion
                    rate."</p>
                <div class="flex items-center">
                    <div class="mr-3 h-10 w-10 rounded-full bg-gray-300"></div>
                    <div>
                        <p class="font-semibold">Blakey</p>
                        <p class="text-sm text-gray-600">Founder TagParrot</p>
                    </div>
                </div>
            </div>
            <!-- More testimonials would be added here, following the same structure -->
        </div>
    </div>
</div>
