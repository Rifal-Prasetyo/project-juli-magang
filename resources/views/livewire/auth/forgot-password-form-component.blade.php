<form class="space-y-6 sticky flex flex-col justify-center" wire:submit.prevent="forgotPassword">
    <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center z-20">Forgot Password</h5>
    <img src="/img/unDraw/04.svg" alt="Image" class=" h-36 z-30 ">
    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
            email</label>
        <input type="email" name="email" id="email" wire:model.live="email"
            class="bg-gray-50 border border-gray-300 mb-2 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('email') border-red-500 @enderror"
            placeholder="name@company.com" />
        @error('email')
            <span class=" text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
        <label for="code_field" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Code
        </label>
        <div class="flex justify-between gap-4">
            <input type="number" name="code_field" id="code_field" wire:model.live="code"
                class="bg-gray-50 w-[60%] border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
            <button
                class="bg-gray-50 w-[40%] border hover:bg-orange-500 hover:text-white  border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500   p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white flex justify-center items-center gap-2">
                <i data-feather="send" class="text-black dark:text-white text-[0.5rem]"></i>
                Send
            </button>
        </div>

        <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
            Password

        </label>
        <div class="relative">

            <input type="password" name="new_password" id="new_password" wire:model.live="new_password"
                onchange="feather.replace()"
                class="bg-gray-50 border border-gray-300 mb-2 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('new_password') border-red-500 @enderror"
                placeholder="" />

            <i data-feather="eye-off" onclick="showPassword(this)"
                class="text-black dark:text-white absolute right-0 top-1/2 transform -translate-y-1/2 mr-5 w-[1rem] h-[1rem]"></i>
        </div>
        @error('new_password')
            <span class=" text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>


    <button type="submit"
        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    <div class="text-sm font-medium text-gray-500 dark:text-gray-300 ">
        Back to <a href="/login" class="text-blue-700 hover:underline dark:text-blue-500">
            Login</a>
    </div>


</form>
