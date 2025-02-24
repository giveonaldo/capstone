<x-main-layout>
    <x-slot:title>
        AgriPartner
    </x-slot:title>
    <x-slot:user>
        {{ $user->id ?? '' }}
    </x-slot:user>

    {{-- Hero --}}
    <section class="relative max-w-7xl mx-auto min-h-[50vh] overflow-hidden">
        <div class="flex flex-wrap">
            <div class="w-full sm:w-8/12 mb-10">
                <div class="container mx-auto h-full sm:p-10">
                    <nav class="flex px-4 justify-between items-center">
                        <div class="text-4xl font-bold">
                            AgriPartner<span class="text-green-700">.</span>
                        </div>
                        <div>
                            <img src="https://image.flaticon.com/icons/svg/497/497348.svg" alt="" class="w-8">
                        </div>
                    </nav>
                    <header class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
                        <div class="w-full">
                            <h1 class="text-4xl lg:text-6xl font-bold">Empowering Sustainable Partnerships for <span
                                    class="text-green-700">Greenhouse</span> Business Success</h1>
                            <div class="w-20 h-2 bg-green-700 my-4"></div>
                            <p class="text-xl mb-10">Agri Partner is your gateway to revolutionizing agriculture in
                                Indonesia. Our innovative web portal bridges the gap between farmers and investors,
                                creating a powerful partnership to drive growth and sustainability. Farmers gain access
                                to the funds they need to expand their operations and boost productivity, while
                                investors unlock unique opportunities to support and profit from Indonesia's thriving
                                agricultural sector.</p>
                            <a href="https://wa.me/+6282142024160"
                                class="bg-green-500 text-white text-2xl font-medium px-4 py-2 rounded shadow">Learn
                                More</a>
                        </div>
                    </header>
                </div>
            </div>
            <img src="{{ asset('images/bg-main.jpg') }}" alt="Leafs"
                class="w-full h-40 object-cover sm:h-screen sm:w-4/12">
        </div>
    </section>
    <h3 id="keep-scroll" class="font-serif text-center text-xl my-8">Keep scroll</h3>

    {{-- Petani --}}
    <section class="mx-auto py-10 bg-gray-50 max-w-7xl">
        <div class="w-full h-full flex flex-col items-center md:py-4 py-10">
            <!-- Col - 2 -->
            <div
                class="xl:w-[80%] sm:w-[85%] w-[90%] mx-auto flex md:flex-row flex-col lg:gap-4 gap-2 justify-center lg:items-stretch md:items-center mt-4">
                <!--  -->
                <img class="md:w-[50%] w-full md:rounded-t-lg rounded-sm" src="{{ asset('images/petani.webp') }}"
                    alt="petani image" />

                <div class="md:w-[50%] w-full bg-gray-100 md:p-4 p-0 rounded-md">
                    <h2 class="text-3xl font-semibold text-green-900">Why Choose Agri Partner?</h2>
                    <p class="text-md mt-4">Because we are more than just a platform we are a movement. Agri Partner
                        provides farmers with the tools, partnerships, and funding they need to unlock their full
                        potential and transform their agricultural practices. At the same time, we offer investors a
                        unique opportunity to contribute to a sustainable future while earning meaningful returns.</p>
                </div>

            </div>
    </section>

    {{-- Investors --}}
    <section class="max-w-7xl mx-auto mt-8">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 text-primary">Meet Our Team</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Team Member 1" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">Abriansyah Adam</h3>
                    <p class="text-gray-700">Role: Full-Stack Developer</p>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="{{ asset('images/reja.jpg') }}" alt="Team Member 2" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">Adrian Rezha</h3>
                    <p class="text-gray-700">Role: UI/UX Designer</p>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="{{ asset('images/desta.jpg') }}" alt="Team Member 3" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">Desta Atikananda</h3>
                    <p class="text-gray-700">Role: Project Manager</p>
                </div>

                <!-- Team Member 4 -->
                <div class="bg-white rounded-lg shadow-md p-6 my-6 text-center">
                    <img src="{{ asset('images/sarah.jpg') }}" alt="Team Member 4" class="w-full rounded-full mb-4">
                    <h3 class="text-xl font-semibold mb-2">Sarah Hanna</h3>
                    <p class="text-gray-700">Role: QA Tester</p>
                </div>
            </div>

        </div>
    </section>

    <section class="max-w-7xl my-12 bg-gray-100 mx-auto">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">About Us</h2>
                    <p class="mt-4 text-gray-600 text-lg">AgriPartner is a dedicated online platform for fostering
                        partnerships and business growth in agriculture. We empower farmers by providing innovative
                        financing solutions, effective marketing strategies, and direct access to potential investors.
                        Our mission is to bridge the gap between farmers and markets, enabling them to secure funding,
                        adopt modern farming practices, and expand their businesses. With AgriPartner, farmers can
                        promote their products, find business partners, and access the investments needed to take their
                        agricultural ventures to the next level.</p>
                </div>
                <div class="mt-12 md:mt-0">
                    <img src="{{ asset('images/about-us.jpg') }}" alt="About Us Image"
                        class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
