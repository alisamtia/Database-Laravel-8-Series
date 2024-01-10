<x-layout>
    <x-slot name="data">
        <x-setting title="Edit: {{$post->title}}">
        <form action="/admin/posts/{{$post->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <x-form.text name="title" :value="old('title',$post->title)" />
                <x-form.text name="slug" :value="old('slug',$post->slug)" />

                <div class="flex gap-4 mt-6">
                    <div class="flex-1"><x-form.text name="thumbnail" type="file" :value="old('thumbnail',$post->thumbnail)" /></div>
                    <img width="100" class="rounded-xl" src="/storage/{{$post->thumbnail}}">
                </div>
                <x-form.textarea name="excerpt" rows="5">{{old('excerpt',$post->excerpt)}}</x-form.textarea>
                <x-form.textarea name="body">{{old('body',$post->body)}}</x-form.textarea>

                <x-form.field>
                    <x-form.label name="Category:" />
                    <select name="category_id" class="focus:border-blue-300 py-3 bg-white border px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 focus:border-blue-300">
                        <option disabled>Select a Category!</option>
                        @foreach ($categories as $category)
                            <option {{ $category->id==old("category") ? "selected": '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category_id" />
                    <x-form.button name="Update Post" />
                </x-form.field>
            </form>
        </x-setting>
    </x-slot>
</x-layout>
