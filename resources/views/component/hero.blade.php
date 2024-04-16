<header
    class="relative flex pt-32 pb-48 sm:pt-32 sm:pb-64 lg:pb-48 px-4 bg-gradient-bg w-full md:pb-40 lg:px-16 lg:pt-48 xl:pt-40 xl:pb-64 xl:h-screen md:px-8 xl:px-24 xxl:px-40">
    <div class="w-full md:w-1/2 z-10 xxl:max-w-2xl">
        <div class="text-center md:text-left">
            <h1
                class="text-2xl xl:text-4xl bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent font-bold leading-tight">
                Welcome to Laravel website services by kuli IT Tecno
            </h1>
            <p class="text-base xl:text-xl text-paragraf mt-4 mb-2">Telah hadir jasa web building khusus laravel yang
                terpercaya dan berpengalaman.
            </p>
            <p class="text-xs text-gray-300 mb-2 pangolin-regular">Lebih dari ratusan orang bergabung dan menikmati
                kepuasan productnya.
            </p>
            <hr class="w-48 h-1 mt-4 bg-gradient-to-r from-red-500 to-orange-500  border-0">
            <div class="flex">
                <form action="/check_ticket" class="flex" method="POST">
                    @csrf
                    <label class="input input-bordered flex items-center gap-2 w-34 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input id="passwordInput" type="password" name="ticket" class="grow" value="{{ $session->ticket }}" />
                        <a href="javascript:void(0)" type="text" id="togglePassword"><i class="fa-solid fa-eye-slash"></i></a>
                    </label>
                    <div class="p-2">
                        <button type="submit"
                            class="btn bg-button transition duration-500 ease-in-out text-white hover:bg-chat focus:outline-none">Masuk</button>
                    </div>
                </form>
                
            </div>


            <p class="text-sm text-gray-300 mb-2 font-medium"><span class="text-xl text-red-800">* </span>Konsultan
                gratis tanpa harus login, tanpa lewat whatsapp.
            </p>
        </div>
    </div>

    <div class="w-full md:w-1/2 absolute bottom-0 lg:bottom-20 right-0">
        <img class="" src="https://i.ibb.co/0F0xL6j/1-Ilt-I-lwv-JR2-Oe-ZJKMgr81-A-removebg-preview.png"
            alt="">
    </div>
</header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#togglePassword').click(function() {
            var passwordInput = $('#passwordInput');
            var icon = $(this).find('i');

            if (passwordInput.attr('type') === 'password') {
                passwordInput.attr('type', 'text');
                icon.removeClass('fa-eye-slash').addClass('fa-eye');
            } else {
                passwordInput.attr('type', 'password');
                icon.removeClass('fa-eye').addClass('fa-eye-slash');
            }
        });
    });
</script>
