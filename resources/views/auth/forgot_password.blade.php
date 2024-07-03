<x-layouts.header :web="$web" />

<body class="bg-slate-100 poppins-regular ">

    <div class="w-full h-screen md:px-4 md:py-2 flex items-center justify-center">
        <div
            class="w-full md:max-w-xl h-full md:h-auto  p-4 bg-white rounded-lg shadow-2xl shadow-slate-900 sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 relative overflow-hidden">
            {{-- <img src="/img/abstract-shape/blob.svg" alt=""
                class="absolute top-0 left-0 -translate-x-[40%] -translate-y-[60%] opacity-75  "> --}}
            <img src="/img/abstract-shape/blob.svg" alt=""
                class="absolute bottom-0 right-0 translate-x-[40%] translate-y-[60%] opacity-70 ">
            <livewire:auth.forgot-password-form-component />
        </div>
    </div>
    <script>
        function showPassword(element) {
            const passwordField = document.getElementById("new_password")
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
