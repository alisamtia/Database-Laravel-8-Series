@props(["name"])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input name="{{ $name }}" class="focus:border-red-300 focus:border-2 border py-3 bg-white px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300"
    {{ $attributes(['value'=>old($name)]) }}
    >
    <x-form.error name="{{ $name }}" />
</x-form.field>
