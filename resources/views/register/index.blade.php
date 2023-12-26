<x-layout>
    <x-slot name="data">
        <main class="max-w-6xl flex justify-center mx-auto mt-10 lg:mt-20 space-y-6">
            <div class="bg-gray-100 p-6 w-2/4">
                <form action="" method="POST">
                @csrf
                <h1 class="mt-7 text-center text-2xl font-bold">Register Now!</h1>
                <div class="flex flex-col mt-3">
                <label for="name" class="text-lg">Name:</label>
                <input value="{{old('name')}}" class="focus:border-red-300 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300" type="text" name="name" id="name">
                @error('name')
                    <p class="mt-1 text-red-500 text-sms">{{$message}}</p>
                @enderror
                </div>
                <div class="flex flex-col mt-3">
                <label for="username" class="text-lg">Username:</label>
                <input value="{{old('username')}}" class="focus:border-red-300 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300" type="text" name="username" id="username">
                @error('username')
                <p class="mt-1 text-red-500 text-sms">{{$message}}</p>
                @enderror
                </div>
                <div class="flex flex-col mt-3">
                <label for="email" class="text-lg">Email:</label>
                <input value="{{old('email')}}" class="focus:border-red-300 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300" type="email" name="email" id="email">
                @error('email')
                <p class="mt-1 text-red-500 text-sms">{{$message}}</p>
                @enderror
                </div>
                <div class="flex flex-col mt-3">
                <label for="password" class="text-lg">Password:</label>
                <input class="focus:border-red-300 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300" type="password" name="password" id="password">
                @error('password')
                <p class="mt-1 text-red-500 text-sms">{{$message}}</p>
                @enderror
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-400 mt-8 text-white pl-8 pr-8 pt-3 pb-3">Submit</button>
                </div>
            </form>
            </div>
            
        </main>
    </x-slot>
</x-layout>