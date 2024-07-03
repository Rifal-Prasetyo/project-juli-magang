<form class="space-y-6 sticky flex flex-col justify-center w-full" wire:submit.prevent="login">
    <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center z-20">Welcome Back</h5>
    <img src="/img/unDraw/01.svg" alt="Image" class=" h-44 z-30 ">

    <div id="toast-success"
        class="flex items-center w-full     @if (session('status')) flex @else hidden @endif   p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">
            @if (session('status'))
                {{ session('status') }}
            @endif
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>


    <div id="toast-danger"
        class=" items-center  @error('info') flex @else hidden @enderror w-full  p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
        role="alert">
        <div
            class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
            </svg>
            <span class="sr-only">Error icon</span>
        </div>
        <div class="ms-3 text-sm font-normal"> @error('info')
                {{ $message }}
            @enderror
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-danger" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
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
                onchange="feather.replace()"
                class="bg-gray-50 border border-gray-300 @error('password') border-red-500 @enderror text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
            <i data-feather="eye-off" onclick="showPassword(this)"
                class="text-black dark:text-white absolute right-0 top-1/2 transform -translate-y-1/2 mr-5 w-[1rem] h-[1rem]"></i>
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
        <hr class="absolute border border-slate-300 h-[1px] w-full border-opacity-40" />
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
