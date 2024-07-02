<x-layouts.header :web="$web" />

<body class="bg-slate-100 poppins-regular ">

    <div class="w-full h-screen px-4 py-2 flex items-center justify-center">
        <div
            class="w-full max-w-sm p-4 bg-white rounded-lg shadow-2xl shadow-slate-900 sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 relative overflow-hidden">
            {{-- <img src="/img/abstract-shape/blob.svg" alt=""
                class="absolute top-0 left-0 -translate-x-[40%] -translate-y-[60%] opacity-75  "> --}}
            <img src="/img/abstract-shape/blob.svg" alt=""
                class="absolute bottom-0 right-0 translate-x-[40%] translate-y-[60%] opacity-70 ">
            <form class="space-y-6 sticky flex flex-col justify-center" action="# ">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center z-20">Forgot Password</h5>
                <img src="/img/unDraw/04.svg" alt="Image" class=" h-44 z-30 ">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 mb-2 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="name@company.com" required />
                    <label for="code_field" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Enter Code</label>
                    <div class="flex justify-between gap-4">
                        <input type="number" name="code_field" id="code_field"
                            class="bg-gray-50 w-[60%] border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                        <button
                            class="bg-gray-50 w-[40%] border hover:bg-orange-500 hover:text-white  border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500   p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white flex justify-center items-center gap-2">
                            <i data-feather="send" class="text-black dark:text-white text-[0.5rem]"></i>
                            Send
                        </button>
                    </div>
                </div>


                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300 ">
                    Back to <a href="/login" class="text-blue-700 hover:underline dark:text-blue-500">
                        Login</a>
                </div>


            </form>
        </div>
    </div>
    <script>
        function showPassword(element) {
            const passwordField = document.getElementById("password")
            if (passwordField.type === "password") {
                passwordField.type = "text";
                element.setAttribute("data-feather", "eye");
            } else {
                passwordField.type = "password";
                element.setAttribute("data-feather", "eye-off");
            }
            feather.replace();
        }
        feather.replace();
    </script>
    <x-layouts.footer />
