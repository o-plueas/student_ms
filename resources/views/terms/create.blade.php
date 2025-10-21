<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Term') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">




    <form method="POST" action="{{ route('terms.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- code -->
        <div class="mt-4">
            <x-input-label for="code" :value="__('Code')" />
            <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required autocomplete="code" />
            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

      


        <div class="flex items-center justify-end mt-4">
      

            <x-primary-button class="ms-4">
                {{ __('Add Term') }}
            </x-primary-button>
        </div>
    </form>








                </div>
            </div>
        </div>
    </div>
</x-app-layout>
