<x-auth.layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <section class="w-full min-h-[80vh] flex justify-center items-center">
        <div class="border-2 border-slate-700 py-6 w-[550px] flex flex-col items-center">
            <h1 class="font-bold text-4xl">Register Your Account</h1>
            <form class="mt-10 w-full px-7" action="/register" method="POST">
                @csrf
                <div class="flex gap-4 w-full">
                    <div class="w-full">
                        <label for="firstName" class="block text-sm/6 font-medium text-gray-900">First Name</label>
                        <div class="mt-2">
                            <input type="text" name="firstName" id="firstName" placeholder="First Name" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                    <div class="w-full">
                        <label for="lastName" class="block text-sm/6 font-medium text-gray-900">Last Name</label>
                        <div class="mt-2">
                            <input type="text" name="lastName" id="lastName" placeholder="Last Name" required
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>
                </div>
                <div class="w-full mt-2">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                    <div class="mt-2">
                        <input type="text" name="email" id="email" autocomplete="email" placeholder="your@mail.com" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="w-full mt-2">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    <div class="mt-2">
                        <input type="password" name="password" id="password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="w-full mt-2">
                    <label for="password_confirmation" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
                    <div class="mt-2">
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="flex items-center mt-2">
                    <input id="default-checkbox" type="checkbox" value="" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded">
                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900">I agree to the <a class="text-blue-500 hover:underline" href="/">Terms & Conditions</a></label>
                </div>
                <div class="flex justify-between items-center mt-6">
                    <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 font-medium rounded-lg text-sm px-5 py-2.5">Register</button>
                    <a class="text-sm hover:text-blue-700 underline" href="/login">Already have account?</a>
                </div>
            </form>
        </div>
    </section>
</x-auth.layout>
