@props(["name","type"=>"text"])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input type="{{ $type }}" name="{{ $name }}" value="{{old($name)}}" class="focus:border-red-300 focus:bg-white py-3 bg-gray-200 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">
    <x-form.error name="{{ $name }}" />
</x-form.field>