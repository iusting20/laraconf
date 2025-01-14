<x-filament::page>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
        <div class="rounded-lg overflow-hidden shadow-lg h-48">
            <!-- Your content here -->
            <p>Contact Us</p>

            <form class="space-y-4 p-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500"></textarea>
                </div>

                <div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-primary-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-700 focus:bg-primary-700 active:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-filament::page> 