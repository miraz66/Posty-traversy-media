<x-layout>
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <h1 class="pt-6 pb-10 text-center text-2xl">Register Now!</h1>
            <form action="{{ route('register') }}" method="POST">
              @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="text" name="password" id="password" placeholder="Your password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">comfirm password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Comfirm your password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
            </form>
        </div>
    </div>
</x-layout>
