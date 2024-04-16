<div id="chat" class="flex-1 p:2 sm:p-6 justify-between flex flex-col  h-screen shadow-inner rounded-lg">
    <div class="flex sm:items-center justify-between p-3 border-b-2 border-gray-200 bg-gradient-bg rounded-xl">
        <div class="relative flex items-center space-x-4 ">
            <div class="relative">
                <span class="absolute text-green-500 right-0 bottom-0">
                    <svg width="20" height="20">
                        <circle cx="8" cy="8" r="8" fill="currentColor"></circle>
                    </svg>
                </span>
                <img src="{{ asset('assets/logo2.png') }}" alt=""
                    class="w-10 sm:w-16 h-10 sm:h-16 rounded-full">
            </div>
            <div class="flex flex-col leading-tight">
                <div class="text-2xl mt-1 flex items-center">
                    <span class="text-title mr-3">Kuli IT Tecno</span>
                </div>
                <span class="text-lg text-paragraf">Service Web Laravel</span>
            </div>
        </div>
        <div class="flex items-center space-x-2">
            <button type="button"
                class="inline-flex items-center justify-center rounded-lg border h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                <i class="fa-solid fa-bell"></i>
            </button>
            <button onclick="toggleFullscreen();" type="button"
                class="inline-flex items-center justify-center rounded-lg border h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                <i id="fullscreenIcon" class="fa-solid fa-expand"></i>
            </button>
        </div>
    </div>

    <div id="messages"
        class="overflow-y-auto max-h-96 scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 p-3 scrolling-touch">

        @if ($message->isEmpty())
            <div class="chat chat-start">
                <div class="chat-image avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS chat bubble component"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <div class="chat-header"></div>
                <div class="chat-bubble">Hallo.. Apa kabar ? ada yang bisa saya bantu ?</div>
            </div>
            <div class="chat chat-start">
                <div class="chat-image avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS chat bubble component"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <div class="chat-header"></div>
                <div class="chat-bubble">Jangan malu malu untuk bertanya...</div>
                <div class="chat-footer opacity-50">
                    Kuli IT Tecno
                </div>
            </div>
        @else
            @foreach ($message as $msg)
                @if ($msg->sessions_id != $request_sessions)
                    <div class="chat chat-start">
                        <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS chat bubble component"
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </div>
                        <div class="chat-header"></div>
                        <div class="chat-bubble">You were the Chosen One!</div>
                        <div class="chat-footer opacity-50">
                            Delivered
                        </div>
                    </div>
                @else
                    <div class="chat chat-end">
                        <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS chat bubble component"
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </div>
                        <div class="chat-header"></div>
                        <div class="chat-bubble">I hate you!</div>
                        <div class="chat-footer opacity-50">
                            Seen at 12:46
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>


    <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
        <div class="relative flex">
            <span class="absolute inset-y-0 flex items-center">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-full h-12 w-12 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                </button>
            </span>
            <input type="text" placeholder="Write your message!"
                class="w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-12 bg-gray-200 rounded-md py-3">
            <div class="absolute right-0 items-center inset-y-0 hidden sm:flex">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                        </path>
                    </svg>
                </button>
                <button type="button"
                    class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </button>
                <button type="button"
                    class="inline-flex items-center justify-center rounded-full h-10 w-10 transition duration-500 ease-in-out text-gray-500 hover:bg-gray-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </button>
                <button type="button"
                    class="btn inline-flex items-center justify-center rounded-lg px-4 py-3 transition duration-500 ease-in-out text-white bg-button hover:bg-chat focus:outline-none">
                    <span class="font-bold">Send</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="h-6 w-6 ml-2 transform rotate-90">
                        <path
                            d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const el = document.getElementById('messages');
    el.scrollTop = el.scrollHeight;

    function toggleFullscreen() {
        var icon = document.getElementById('fullscreenIcon');
        var chat = document.getElementById('chat');
        var navbar = document.getElementById("navbar");
        if (icon.classList.contains('fa-expand')) {
            icon.classList.remove('fa-expand');
            icon.classList.add('fa-minimize');
            chat.classList.add('fixed', 'inset-0', 'bg-white', 'z-10', 'bg-white-75', 'flex');
            navbar.classList.add('hidden');
        } else {
            icon.classList.remove('fa-minimize');
            icon.classList.add('fa-expand');
            chat.classList.remove('fixed', 'inset-0', 'bg-white', 'z-10', 'bg-white-75', 'flex');
            navbar.classList.remove('hidden');
        }
        openFullscreen();
    }
</script>
