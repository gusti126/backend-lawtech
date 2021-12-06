<div>
    @section('header')
        <div class=" md:-mt-14 z-0">
            <div class="">
                <img src="{{ asset('image/bg-home-full.jpg') }}" alt="" class="z-10">
            </div>
        </div>
    @endsection

    {{-- kategori --}}
    <div class="mt-4 md:mt-8">
        <div class="font-semibold text-2xl text-center">Kategori</div>
        <div class="md:flex grid grid-cols-4 gap-4 justify-around mt-4">
            <div>
                <img src="{{ asset('image/icon/Group 83.svg') }}" class="md:w-28" alt="">
            </div>
            <div>
                <img src="{{ asset('image/icon/Group 84.svg') }}" class="md:w-28" alt="">
            </div>
            <div>
                <img src="{{ asset('image/icon/Group 85.svg') }}" class="md:w-28" alt="">
            </div>
            <div>
                <img src="{{ asset('image/icon/Group 86.svg') }}" class="md:w-28" alt="">
            </div>
        </div>
        <div class="mt-6 w-full text-center">
            <button
                class="bg-hijau-custom-dua text-white py-2 px-3 rounded text-xs md:text-sm mx-auto text-center">Lihat
                Semua</button>
        </div>
    </div>
    {{-- endkategori --}}

    {{-- Pengacara Populer --}}
    <div class="mt-16 ">
        <div class="mb-6 flex justify-between">
            <div class=" font-semibold text-lg">Pengacara Populer</div>
            <div class="text-hijau-custom">Lihat semua</div>
        </div>
        <div class=" your-class">
            {{-- lawyer data --}}
            <div class="  border p-4 rounded-lg shadow">
                <img src="https://images.unsplash.com/photo-1636877360230-a8a90012de77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt=""
                    class="w-24 h-24 object-cover border-2 border-hijau-custom-dua p-1 object-center rounded-full mx-auto">
                <div class="font-bold text-center mt-2">
                    Lalita Susinta, S.H
                </div>
                <div class="text-gray-500 text-sm text-center">
                    Hukum Tata Negara
                </div>
                <div>
                    <img src="{{ asset('image/icon/emojione-monotone_sports-medal.svg') }}" class="w-8 mx-auto"
                        alt="">
                </div>
            </div>
            {{-- lawyer data --}}
            <div class=" border p-4 rounded-lg shadow">
                <img src="https://images.unsplash.com/photo-1636877360230-a8a90012de77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt=""
                    class="w-24 h-24 object-cover border-2 border-hijau-custom-dua p-1 object-center rounded-full mx-auto">
                <div class="font-bold text-center mt-2">
                    Lalita Susinta, S.H
                </div>
                <div class="text-gray-500 text-sm text-center">
                    Hukum Tata Negara
                </div>
                <div>
                    <img src="{{ asset('image/icon/emojione-monotone_sports-medal.svg') }}" class="w-8 mx-auto"
                        alt="">
                </div>
            </div>
            {{-- lawyer data --}}
            <div class=" border p-4 rounded-lg shadow">
                <img src="https://images.unsplash.com/photo-1636877360230-a8a90012de77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt=""
                    class="w-24 h-24 object-cover border-2 border-hijau-custom-dua p-1 object-center rounded-full mx-auto">
                <div class="font-bold text-center mt-2">
                    Lalita Susinta, S.H
                </div>
                <div class="text-gray-500 text-sm text-center">
                    Hukum Tata Negara
                </div>
                <div>
                    <img src="{{ asset('image/icon/emojione-monotone_sports-medal.svg') }}" class="w-8 mx-auto"
                        alt="">
                </div>
            </div>
            {{-- lawyer data --}}
            <div class=" border p-4 rounded-lg shadow">
                <img src="https://images.unsplash.com/photo-1636877360230-a8a90012de77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                    alt=""
                    class="w-24 h-24 object-cover border-2 border-hijau-custom-dua p-1 object-center rounded-full mx-auto">
                <div class="font-bold text-center mt-2">
                    Lalita Susinta, S.H
                </div>
                <div class="text-gray-500 text-sm text-center">
                    Hukum Tata Negara
                </div>
                <div>
                    <img src="{{ asset('image/icon/emojione-monotone_sports-medal.svg') }}" class="w-8 mx-auto"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- endPengacara Populer --}}

    {{-- forum populer --}}
    <div class="mt-16 mb-20">
        <div class="mb-6 flex justify-between">
            <div class=" font-semibold text-lg">Forum Populer</div>
            <div class="text-hijau-custom">Lihat semua</div>
        </div>
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-12 gap-4">
            <div class="md:col-start-3 col-span-8 border border-hijau-custom-dua rounded-lg p-4">
                <div class="flex mb-2">
                    <div class="">
                        <img src="https://images.unsplash.com/photo-1636991201198-cd255063f6a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                            alt="image profile" class="rounded-full w-10 h-10 object-cover">
                    </div>
                    <div class="ml-2">
                        <div class="font-semibold">
                            Lisa Lanita
                        </div>
                        <div class="text-xs text-gray-500">
                            22 September 2021 : 10.00 - Hukum Pidana
                        </div>
                    </div>

                </div>
                <div>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, impedit nostrum. Deleniti
                        assumenda
                        ut
                        officiis id, dolorum, earum odit labore rerum maxime, velit officia! Ducimus eaque reiciendis
                        mollitia
                        suscipit numquam!
                    </div>
                    <div class="mt-4 flex">
                        <div class="mr-6 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  text-hijau-custom-dua" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <div class="text-sm text-hijau-custom-dua my-auto ml-1">
                                100
                            </div>
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-hijau-custom-dua" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                            <div class="text-sm ml-1 text-hijau-custom-dua my-auto">
                                200
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endforum populer --}}

    {{-- about connection --}}
    <div class="mt-16">
        <div class="grid grid-flow-row grid-cols-5 md:grid-cols-12 gap-6">
            <div class="col-span-5">
                <img src="{{ asset('image/connect2.png') }}" alt="connection.png">
            </div>
            <div class="col-span-5">
                <div class="my-10">
                    <div class="font-bold text-3xl">
                        Lakukan <span class="text-hijau-custom-dua">Meeting</span> Tanpa Batas Dengan <span
                            class="text-hijau-custom-dua">Pengacara</span>
                        <hr class="w-20 bg-hijau-custom-dua mt-2 h-1 rounded-full">
                    </div>
                    <div class="mt-4">
                        Pengacara yang sudah terverifikasi siap untuk menyelesaikan masalah hukum anda, lakukan meeting
                        dengan mudah bersama pengacara yang tersebar di seluruh indonesia.
                    </div>
                    <div class="mt-8">
                        <a href="" class="bg-hijau-custom-dua px-3 py-2 rounded text-white">
                            Temukan Pengacara
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    {{-- endabout connection --}}

    @push('style')
        <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}">

    @endpush
    @push('script')
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="{{ asset('slick-1.8.1/slick/slick.min.js') }}"></script>
        <script src="{{ asset('slick-1.8.1/slick/slick.js') }}"></script>
        <style>
            .slick-slide {
                padding: 10px;
                /* background-color: red; */
                text-align: center;
                margin-right: 10px;
                margin-left: 10px;
            }

        </style>
        <script>
            $(document).ready(function() {
                $('.your-class').slick({
                    slidesToScroll: 1,
                    dots: true,
                    centerMode: true,
                    focusOnSelect: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    variableWidth: true,
                    infinite: true,
                    centerPadding: '60px',
                    margin: '27px'
                });
            });
        </script>
    @endpush
</div>
