
<x-layout>
<x-slot name="data">

@include ("posts._header")

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

<x-layout-post-grid :posts="$posts" />

{{$posts->links()}}

</main>








</x-slot>
</x-layout>