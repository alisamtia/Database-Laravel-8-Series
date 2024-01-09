<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 gap-4 md:mt-0 flex items-center">
                @auth
                <x-dropdown trigger="Welcome Back, {{auth()->user()->name}}">
                    <x-dropdown-item href="/admin/posts" class="{{request()->is('admin/posts') ? 'bg-blue-500 text-white' : ''}}">All Posts</x-dropdown-item>
                    <x-dropdown-item href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'bg-blue-500 text-white' : ''}}">Create Post</x-dropdown-item>

                    <x-dropdown-item>
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="block text-left text-sm leading-6 hover:bg-blue-400 focus:bg-blue-400">Logout</button>
                        </form>
                    </x-dropdown-item>
                </x-dropdown>

                @else
                <a href="/register" class="text-xs mr-3 font-bold uppercase">Register</a>
                <a href="/login" class="text-xs font-bold uppercase">Login</a>
                @endauth
                <a href="#subscribe_news_letter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>
        {{$data}}
        <footer id="subscribe_news_letter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input type="email" id="email" name="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
                @error('email')
                <p class="mt-3 text-center text-red-500 text-xs">{{$message}}</p>
                @enderror
            </div>
        </footer>
    </section>
    @if(session()->has('success'))
    <div id="success"
        class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl right-3 bottom-3 text-sm">
        <p>{{session('success')}}</p>
    </div>
    <script>
        setTimeout(() => {
            $("#success").hide();
        }, 4000);
    </script>
    @endif

    @if(session()->has('error'))
    <div id="#error"
        class="fixed bg-red-500 text-white py-2 px-4 rounded-xl right-3 bottom-3 text-sm">
        <p>{{session('error')}}</p>
    </div>
    <script>
        setTimeout(() => {
            $("#error").hide();
        }, 4000);
    </script>
    @endif
</body>
