@extends('customer.layouts.layout')
@section('customer_title')
    Contact Customer
@endsection
@section('customer_layout')
    <section id="contact" class="py-16 bg-gray-100 mt-10">
        <div class="container mx-auto px-6 md:px-12 lg:px-24 text-center">
            <h2 class="text-4xl font-bold text-gray-800">Lời đánh giá từ bạn về sản phẩm</h2>
            <p class="mt-4 text-lg text-gray-600">Chúng tôi luôn luôn lắng nghe nhưng ý kiến từ bạn để có thể giúp cho cửa hành MyKingToys ngày càng phát triển.</p>
            <div class="flex flex-col lg:flex-row mt-12 space-y-8 lg:space-y-0 lg:space-x-8">
                <!-- Contact Form -->
                <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2">
                    {{-- <form action="send_mail.php" method="POST" class="space-y-4"> --}}
                        <div>
                            <label for="name" class="block text-left font-semibold text-gray-700">Tên của bạn </label>
                            <input type="text" id="fullName" name="name"
                                class="w-full border border-gray-300 rounded-lg p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required>
                        </div>
                        <div>
                            <label for="email" class="block text-left font-semibold text-gray-700">Email của bạn</label>
                            <input type="email" id="email_id" name="email"
                                class="w-full border border-gray-300 rounded-lg p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required>
                        </div>
                        <div>
                            <label for="message" class="block text-left font-semibold text-gray-700">Lời nhắn </label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full border border-gray-300 rounded-lg p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-cyan-500"
                                required></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-cyan-600 text-white font-semibold py-3 rounded-lg hover:bg-cyan-700 transition" onclick="SendMail()">Gửi tin nhắn</button>
                    {{-- </form> --}}
                </div>


                <div class="bg-white p-6 rounded-lg shadow-md w-full lg:w-1/2">
                    <h3 class="text-2xl font-semibold text-cyan-600">Liên hệ</h3>
                    <p class="mt-4 text-gray-600">Hãy liên hệ với chúng tôi qua email hoặc điện thoại. Chúng tôi ở đây để giúp bạn giải đáp mọi
                        thắc mắc.</p>
                    <ul class="mt-6 space-y-4 text-gray-700 ">
                        <li>
                            <strong>Email:</strong> 23010315@st.phenikaa-uni.edu.vn
                        </li>
                        <li>
                            <strong>Số điện thoại:</strong> 0123456789
                        </li>
                        <li>
                            <strong>Địa chỉ:</strong> Trường đại học Phenikaa
                        </li>
                    </ul>
                    <h4 class="text-xl font-semibold text-cyan-600 mt-6">Vị trí</h4>

                    <!-- Google Map -->
                    <div class="mt-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.7484136612884!2d105.7461114747127!3d20.962616190048152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452efff394ce3%3A0x391a39d4325be464!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaGVuaWthYQ!5e0!3m2!1svi!2s!4v1747051119254!5m2!1svi!2s" 
                            width="100%" height="400" style="border:0;" 
                            allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                        <!-- Địa chỉ hiển thị rõ ràng bên dưới -->
                        <p class="mt-2 text-gray-700 text-sm">
                            📍 Địa chỉ: Trường Đại học Phenikaa, Yên Nghĩa, Hà Đông, Hà Nội
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function SendMail(){
                var params = {
                    from_name : document.getElementById("fullName").value,
                    email_id : document.getElementById("email_id").value,
                    message : document.getElementById("message").value
                }
                emailjs.send("service_c1z88jd" , "template_ay64d0m" , params).then(function(res){
                    swal("Thành công",
                        "Đã gửi email thành công.\nChúc bạn một ngày tốt lành.\nCảm ơn bạn.",
                        "success"
                    );
                });
            }
        </script>

    @endsection


    @section('customer_footer')
        <footer class=" body-font bg-gradient-to-r from-cyan-500 to-blue-200 text-white">
            <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <div>
                        <img src="{{ asset('admin_asset/img/photos/blocks.png') }}" class="h-20 w-20" alt="logo" />
                        <p class="max-w-xs mt-4 text-sm  text-white">
                            Mọi chi tiết xin liên hệ
                        </p>
                        <div class="flex mt-8 space-x-6  text-white">
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Facebook </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Instagram </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Twitter </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> GitHub </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                            <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                                <span class="sr-only"> Dribbble </span>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fillRule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clipRule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4 text-white">
                        <div>
                            <p class="font-medium">
                                Company
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm  text-white">
                                <a class="hover:opacity-75" href> About </a>
                                <a class="hover:opacity-75" href> Meet the Team </a>
                                <a class="hover:opacity-75" href> History </a>
                                <a class="hover:opacity-75" href> Careers </a>
                            </nav>
                        </div>
                        <div>
                            <p class="font-medium">
                                Services
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm  text-white">
                                <a class="hover:opacity-75" href> 1on1 Coaching </a>
                                <a class="hover:opacity-75" href> Company Review </a>
                                <a class="hover:opacity-75" href> Accounts Review </a>
                                <a class="hover:opacity-75" href> HR Consulting </a>
                                <a class="hover:opacity-75" href> SEO Optimisation </a>
                            </nav>
                        </div>
                        <div>
                            <p class="font-medium">
                                Helpful Links
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm  text-white">
                                <a class="hover:opacity-75" href> Contact </a>
                                <a class="hover:opacity-75" href> FAQs </a>
                                <a class="hover:opacity-75" href> Live Chat </a>
                            </nav>
                        </div>
                        <div>
                            <p class="font-medium">
                                Legal
                            </p>
                            <nav class="flex flex-col mt-4 space-y-2 text-sm  text-white">
                                <a class="hover:opacity-75" href> Privacy Policy </a>
                                <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                                <a class="hover:opacity-75" href> Returns Policy </a>
                                <a class="hover:opacity-75" href> Accessibility </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-xs  text-white">
                    © 2022 Comany Name
                </p>
            </div>
        </footer>
    @endsection
