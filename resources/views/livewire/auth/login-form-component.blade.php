<form class="space-y-6 sticky flex flex-col justify-center" wire:submit.prevent="login">
    <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center z-20">Welcome Back</h5>
    <img src="/img/unDraw/01.svg" alt="Image" class=" h-44 z-30 ">
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
            email</label>
        <input type="text" name="email" id="email" wire:model.live="email"
            class="bg-gray-50 border border-gray-300 @error('email') border-red-500 @enderror mb-2 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="name@company.com" />
        @error('email')
            <span class=" text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
            password</label>
        <div class="relative">
            <input type="password" name="password" id="password" wire:model.live="password"
                class="bg-gray-50 border border-gray-300 @error('password') border-red-500 @enderror text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
            <i data-feather="eye-off" onclick="showPassword(this)"
                class="text-black dark:text-white absolute right-0 top-1/2 transform -translate-y-1/2 mr-5"></i>
        </div>
        @error('password')
            <span class=" text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex items-start">
        <div class="flex items-start">
            <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="1" wire:model="remember"
                    class="w-4 h-4 border border-gray-300 rounded-full bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
            </div>
            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                me</label>
        </div>
        <a href="/forgot_password" class="ms-auto text-sm text-blue-700 hover:underline dark:text-blue-500">Forget
            Password?</a>
    </div>
    <button type="submit"
        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
    <div class="text-sm font-medium text-gray-500 dark:text-gray-300 ">
        Not registered? <a href="/register" class="text-blue-700 hover:underline dark:text-blue-500">Create
            account</a>
    </div>
    <div class="relative flex justify-center items-center w-full mb-2">
        <hr class="absolute border border-slate-300 h-[1px] w-full" />
        <span class="px-2 bg-slate-300 rounded-full z-10 dark:bg-gray-800 dark:border-gray-70  text-white">or</span>
    </div>
    <div class="flex gap-2">
        <button
            class=" px-4  rounded-full border border-black flex gap-4 py-2 w-full items-center transition-all bg-white bg-opacity-60 hover:bg-opacity-100 hover:text-black hover:border hover:border-black dark:hover:bg-white dark:hover:text-black dark:hover:border-white">
            <img src="/img/providers-logo/apple.png" alt="apple" class="w-7 ">
            <p class="dark:text-white text-black">Apple</p>
        </button>
        <button
            class=" px-4  rounded-full border border-black flex gap-4 py-2 w-full items-center transition-all bg-white bg-opacity-60 hover:bg-opacity-100 hover:text-black hover:border hover:border-black dark:hover:bg-white dark:hover:text-black dark:hover:border-white">
            <img src="/img/providers-logo/google-icon.webp" alt="google" class="w-8 ">
            <p class="dark:text-white text-black">Google</p>
        </button>
    </div>
</form>
