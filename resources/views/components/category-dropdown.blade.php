<x-dropdown>
    <x-slot name="trigger">
        <button class="inline-flex rounded-xl text-left bg-gray-100 lg:w-32 w-full font-semibold py-2 pr-3 pl-3 text-sm">
            {{isset($current_category)?ucwords($current_category->name):"Categories"}}
            <x-icon></x-icon>
        </button>
    </x-slot>
    @php
$search=request("search")!==null?"&search=".request("search"):"";
    @endphp
<x-dropdown-item href="/">All</x-dropdown-item>
        @foreach ($categories as $category)
        <x-dropdown-item href="?category={{$category->slug}}{{$search}}" :active="isset($current_category) && $current_category->id===$category->id">{{ucwords($category->name)}}</x-dropdown-item>
        @endforeach
</x-dropdown>