<x-layout>
    <x-slot name="data">
    <main class="max-w-6xl flex justify-center mx-auto mt-10 lg:mt-20 space-y-6">
    <div class="border rounded-3xl border-gray-200 p-6 w-2/4">
        <form action="" method="POST">
            @csrf
            <h1 class="mt-7 text-center text-2xl font-bold">Register Now!</h1>
            <x-form.text name="name" type="text" />
            <x-form.text name="username" type="text" />
            <x-form.text name="email" type="email" autocomplete="create-email" />
            <x-form.text name="password" type="password" autocomplete="create-password" />
            <x-form.button name="Register" />
        </form>
            </div>

        </main>
    </x-slot>
</x-layout>
