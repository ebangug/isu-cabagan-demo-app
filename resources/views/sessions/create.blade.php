<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center text-xl font-bold">Login!</h1>

            <form action="/login" method="POST" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-sm text-gray-700">
                        Email
                    </label>

                    <input type="email" class="border border-gray-400 w-full p-2" name="email" id="email" required
                        value="{{ old('email') }}" />

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-sm text-gray-700">
                        Password
                    </label>

                    <input type="password" class="border border-gray-400 w-full p-2" name="password" id="password"
                        required />

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6 text-right">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Login
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
