<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div>
            <a href='/'>Home</a>
        </div>

    <div class="py-12">
    </x-slot>
    <form>
        <div>
            <label for="account">Account:</label>
            <input type="text" name= "account">
        </div>

    
    </form>
    
    
</x-app-layout>

