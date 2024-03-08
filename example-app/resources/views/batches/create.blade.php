<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Batch') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('batches.store') }}">
                        @csrf

                        <div>
                            <label for="name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Name') }}</label>
                            <input id="name" class="block mt-1 w-full " type="text" name="name" :value="old('name')" required style="color: #000;" />
                        </div>

                        <div class="mt-4">
                            <label for="date" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ __('Date') }}</label>
                            <input id="date" class="block mt-1 w-full" type="date" name="starting" :value="old('starting')" required style="color: #000;" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button class="ml-4">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
