@section('title', 'Flight - Index')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('flights.header') }}
        </h2>
    </x-slot>

    <div class="px-4">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Flights</h1>
                <p class="mt-2 text-sm text-gray-700">See all the flights in the future or add a new one.</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <button type="button" class="ds-btn ds-btn-accent ds-btn-block text-white">Add Flight</button>
            </div>
        </div>
    </div>
    <div class="py-12">
        @include('.flights._table-read', ['flights' => $flights])
    </div>
</x-app-layout>
