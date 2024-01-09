@props(['title'])
<main class="max-w-6xl flex flex-col ml-auto mt-10 lg:mt-20 space-y-6">

    <h1 class="py-3 text-2xl font-bold border-b">{{$title}}</h1>

    <div class="flex lg:mr-40">
        <aside class="w-48">
            <h4 class="font-semibold my-4">Links</h4>

            <ul>
                <li>
                    <a href="/admin/posts" class="{{request()->is('admin/posts') ? 'text-blue-500' : ''}}">All Posts</a>
                </li>

                <li>
                    <a href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'text-blue-500' : ''}}">New Post</a>
                </li>
            </ul>
        </aside>
        <div class="rounded-xl border p-6 w-full">
                    {{ $slot }}
        </div>
    </div>

</main>
