@extends('customer.layouts.layout')
@section('customer_title')
    Introduce Customer
@endsection
@section('customer_layout')
    <div class="text-gray-900 py-16 px-8">

        {{-- Phần hiển thị các hình ảnh đồ chơi --}}
        <div class="container mx-auto px-6 md:px-12 lg:px-24 text-center">
            <h2 class="text-4xl font-extrabold text-gray-800">Giới thiệu</h2>
            <p class="mt-4 text-lg text-gray-500 italic">"Nơi niềm vui gặp gỡ sự sáng tạo!"</p>

            <!-- Content Section -->
            <div class="content_about text-left mt-10 text-gray-700 leading-relaxed text-lg ">
                <p>
                    <span class="font-semibold text-red-500">MYKINGTOYS</span> bắt đầu hành trình từ niềm đam mê với thế giới
                    tuổi thơ vào năm 2020. Được sáng lập bởi những con người trẻ đầy nhiệt huyết, MyKingToys mang trong mình
                    sứ mệnh mang đến niềm vui và giá trị thực sự cho cộng đồng qua những món đồ chơi chất lượng, an toàn và
                    phù hợp với mọi ngân sách.
                </p>
                <p class="mt-6">
                    Với niềm tin rằng thế giới của trẻ thơ cần được tô điểm bởi những khoảnh khắc sáng tạo và ý nghĩa, chúng
                    tôi luôn nỗ lực tạo nên những sản phẩm không chỉ đẹp mắt mà còn hỗ trợ trẻ phát triển toàn diện về trí
                    tuệ, kỹ năng và cảm xúc.
                </p>
                <p class="mt-6">
                    Hãy để MyKingToys đồng hành cùng tuổi thơ của bé – nơi những ước mơ được chắp cánh và những kỷ niệm đáng
                    nhớ được khắc sâu mãi mãi!
                </p>
            </div>
        </div>

        {{-- Phần giới thiệu --}}
        <div id="s_about"
            class="container mx-auto text-center flex flex-col items-center justify-center px-4 md:px-8 mt-16">
            <h2 class="text-3xl font-semibold mb-4 w-full sm:max-w-lg md:max-w-md lg:max-w-2xl mx-auto">Về MyKingToys</h2>
            <p class="text-gray-700 w-full max-w-lg md:max-w-xl lg:max-w-2xl mx-auto leading-relaxed">
                MyKingToys là nơi tuyệt vời để tìm kiếm những món đồ chơi thú vị cho trẻ em. Chúng tôi luôn cung cấp các sản
                phẩm chất lượng cao và an toàn, mang lại niềm vui và sự sáng tạo cho trẻ em.
            </p>
        </div>

        {{-- Phần thông tin quản trị viên --}}
        <div class="admin mt-16">
            <div class="text_ad text-center mb-10">
                <h1 class="font-bold text-4xl lg:text-5xl mb-4">Người sáng tạo trang web "MYKINGTOYS"</h1>
                {{-- <p class="text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p> --}}
            </div>

            <div class="flex flex-wrap justify-center gap-8">
                <a class="admin-col w-full sm:w-64 p-4 bg-white shadow-lg rounded-lg flex flex-col items-center hover:no-underline" href="https://web.facebook.com/profile.php?id=100064415755780">
                    <img src="https://i.pinimg.com/736x/36/15/4a/36154ab421a363983f294e2d12bbcec1.jpg" alt="Hoàng Minh Quân"
                        class="h-48 w-full object-cover rounded-md mb-4">
                    <div class="text-center">
                        <p class="text-gray-600 leading-relaxed mb-3">Người đẹp trai nhất Thế giới.</p>
                        <h3 class="font-semibold text-lg">Hoàng Minh Quân (Leader)</h3>
                    </div>
                </a>

                <a class="admin-col w-full sm:w-64 p-4 bg-white shadow-lg rounded-lg flex flex-col items-center hover:no-underline" href="https://web.facebook.com/profile.php?id=100051993213594">
                    <img src="https://static.zerochan.net/Kamado.Tanjirou.full.2903190.jpg" alt="Nguyễn Thành Long"
                        class="h-48 w-full object-cover rounded-md mb-4">
                    <div class="text-center">
                        <p class="text-gray-600 leading-relaxed mb-3">Người xấu trai nhất thế giới và đã có người yêu.</p>
                        <h3 class="font-semibold text-lg">Nguyễn Thành Long</h3>
                    </div>
                </a>

                <a class="admin-col w-full sm:w-64 p-4 bg-white shadow-lg rounded-lg flex flex-col items-center hover:no-underline" href="https://web.facebook.com/phamquocviet1805?_rdc=1&_rdr#">
                    <img src="https://static.zerochan.net/Kochou.Shinobu.full.2691316.jpg"
                        alt="Nguyễn Thị Thương" class="h-48 w-full object-cover rounded-md mb-4">
                    <div class="text-center">
                        <p class="text-gray-600 leading-relaxed mb-3">Tôi không biết nói gì
                        </p>
                        <h3 class="font-semibold text-lg">Nguyễn Thị Thương</h3>
                    </div>
                </a>

                <a class="admin-col w-full sm:w-64 p-4 bg-white shadow-lg rounded-lg flex flex-col items-center hover:no-underline" href="https://web.facebook.com/phamquocviet1805?_rdc=1&_rdr#">
                    <img src="https://static.zerochan.net/Kamado.Nezuko.1024.2918119.webp"
                        alt="Trần Thị Thu Hường" class="h-48 w-full object-cover rounded-md mb-4">
                    <div class="text-center">
                        <p class="text-gray-600 leading-relaxed mb-3">Tôi không biết nói gì
                        </p>
                        <h3 class="font-semibold text-lg">Trần Thị Thu Hường</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
