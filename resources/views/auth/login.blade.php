<x-layout>
    <x-form title="Log in" description="Glad to have you back.">
        <form action="/login" method="POST" class="mt-10 space-y-4">
            @csrf

            <x-form.field label="Email" name="email" type="email" />

            <x-form.field label="Password" name="password" type="password" />

            <button type="submit" class="btn h-10 w-full mt-2">Sign in</button>
        </form>
    </x-form>
</x-layout>
