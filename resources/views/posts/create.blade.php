<x-layout>
    <x-slot name="data">
        <main class="max-w-6xl flex justify-center mx-auto mt-10 lg:mt-20 space-y-6">
            <div class="rounded-xl shadow-xl p-6 w-2/4">
                <form action="" method="POST">
                @csrf
                <h1 class="mt-7 text-center text-2xl font-bold">Publish New Post!</h1>
                <div class="flex flex-col mt-3">
                <label for="title" class="text-lg">Title:</label>
                <input type="text" name="title" type="text" value="{{old('title')}}" class="focus:border-red-300 focus:bg-white py-3 bg-gray-200 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">
                @error('title')
                    <p class="mt-1 text-red-500 text-sms">{{$message}}</p>
                @enderror
                </div>

                <div class="flex flex-col mt-3">
                    <label for="excerpt" class="text-lg">Excerpt:</label>
                    <input type="text" name="excerpt" type="text" value="{{old('excerpt')}}" class="focus:border-red-300 focus:bg-white py-3 bg-gray-200 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">
                    @error('excerpt')
                        <p class="mt-1 text-red-500 text-sms">{{$message}}</p>
                    @enderror
                </div>


                <div class="flex flex-col mt-3">
                    <label for="body" class="text-lg">Body:</label>
                    <textarea rows="10" name="body" class="focus:border-red-300 focus:bg-white py-3 bg-gray-200 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">{{old('body')}}</textarea>
                    @error('body')
                        <p class="mt-1 text-red-500 text-sms">{{$message}}</p>
                    @enderror
                </div>


                <div class="flex flex-col mt-3">
                    <label for="category" class="text-lg">Category:</label>
                    <select name="category" class="focus:border-red-300 focus:bg-white py-3 bg-gray-200 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
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
