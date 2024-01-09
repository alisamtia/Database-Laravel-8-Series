<x-layout>
    <x-slot name="data">
        <x-setting title="Publish New Post!">
        <form action="/admin/posts/create" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.text name="title" />
                <x-form.text name="slug" />
                <x-form.text name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" rows="5" />
                <x-form.textarea name="body" />

                <x-form.field>
                    <x-form.label name="Category:" />
                    <select name="category_id" class="focus:border-blue-300 py-3 bg-white border px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">
                        <option disabled>Select a Category!</option>
                        @foreach ($categories as $category)
                            <option {{ $category->id==old("category") ? "selected": '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id" />
                    <x-form.button name="Publish Post" />
                </x-form.field>
            </form>
        </x-setting>
    </x-slot>
</x-layout>
