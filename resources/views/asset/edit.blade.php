<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Asset') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul><br/>
        @endif
        <form method="post" action="{{ route('asset.update', $item->id) }}"> 
            @csrf
            @method('PATCH')
            Name: <input type="text" name="name" value="{{ $item->name }}"><br/>
            Description: <input type="text" name="description" value="{{ $item->description }}"><br/>
            Value: <input type="number" name="value" value = "{{ $item->value }}"><br/>
            Date Purchased: <input type="date" name="purchased" value="{{ $item->purchased }}"><br/>
            <button type="submit">Edit asset</button>
        </form>
    </div>
</div>
</div>
</div>
</x-app-layout>
