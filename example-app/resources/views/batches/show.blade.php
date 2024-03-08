<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Batch {{ $batch->id }} Deatils 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Id--{{ $batch->id }}</h2>
                    <h2>Name--{{ $batch->name }}</h2>
                    <h2>Starting--{{ $batch->starting }}</h2>
                    <h2>Type--{{ $batch->type }}</h2>
                    <h2>Course--{{ $batch->course }}</h2>

                    <p><a href="{{route('batches.edit', ['batch'=> $batch])}}">Edit</a></p>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
