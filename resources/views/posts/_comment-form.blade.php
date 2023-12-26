@auth
<div class="p-6 border rounded-xl">
    <div class="flex gap-5 items-center mb-4">
        <img  src="https://i.pravatar.cc/60?u={{auth()->id()}}" class="rounded-3xl" alt="">
        <h2 class="text-xl font-bold">Participate, Leave your opinion!</h2>
    </div>
        <form method="POST" action="/posts/{{$post->slug}}/comment" >
            @csrf
            <textarea required name="body" cols="30" rows="10" class="w-full rounded-none border-b-2 text-sm p-4 focus:ring focus:border-none" placeholder="Quick, Think of something to Say!"></textarea>
            @error('body')
                <p class="text-red-500 mt-2 text-xs">The body of the comment is Required!</p>
            @enderror
            <div class="flex mt-3 justify-end">
                <x-show-button>Submit</x-show-button>
            </div>
        </form>
    
</div>
@else
<h2 class="mt-2 text-1xl text-black font-bold"><a href="/login">Login</a> or <a href="/register">Register</a> to Post a Comment</h2>
@endauth