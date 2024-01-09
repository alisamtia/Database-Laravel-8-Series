<x-layout>
    <x-slot name="data">
        <main class="max-w-6xl flex justify-center mx-auto mt-10 lg:mt-20 space-y-6">
            <div class="rounded-xl shadow-xl p-6 w-2/4">
                <form action="/admin/posts/create" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="mt-7 text-center text-2xl font-bold">Publish New Post!</h1>

                <x-form.text name="title" />
                <x-form.text name="slug" />
                <x-form.text name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" rows="5" />
                <x-form.textarea name="body" />


                <x-form.field>
                    <x-form.label name="Category:" />
                    <select name="category_id" class="focus:border-red-300 focus:bg-white py-3 bg-gray-200 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">
                        <option disabled>Select a Category!</option>
                        @foreach ($categories as $category)
                            <option {{ $category->id==old("category") ? "selected": '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id" />
                </x-form.field>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-400 mt-8 text-white pl-8 pr-8 pt-3 pb-3">Submit</button>
                </div>
            </form>
            </div>

        </main>
    </x-slot>
</x-layout>
