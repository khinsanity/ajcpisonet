<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(Auth::user()->accountNumber==0)
        <div class="container mt-3">
            <div class="row flex justify-content-center">
                hello
            </div>
        </div>


    @else
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                      
                    
                        <h1>It is not Zero</h1>
                    
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
