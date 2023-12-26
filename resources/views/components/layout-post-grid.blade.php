@props(["posts"])


@if($posts->count())
<x-layout-featured-post :post="$posts[0]" />

@if($posts->count() > 1)
    <div class="lg:grid lg:grid-cols-6">

        @foreach ($posts->skip(1) as $post)
        <x-layout-article 
        :post="$post" 
        class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}" />
        @endforeach
@endif
    </div>
@else

<p class="text-center text-gray-400 font-bold text-xl">No Post Found Please Check Later</p>

@endif