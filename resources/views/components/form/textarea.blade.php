@props(['name','rows'=>10])

<x-form.field>
    <x-form.label name="{{ $name }}" />
    <textarea rows="{{ $rows }}" name="{{ $name }}" class="focus:border-2 py-3 bg-white border px-4 block w-full border-gray-200 rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">{{$slot ?? old($name)}}</textarea>
    <x-form.error name="{{ $name }}" />
</x-form.field>
