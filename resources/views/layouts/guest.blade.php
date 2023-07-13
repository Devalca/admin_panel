<div class="font-sans text-gray-900">

    <nav class="bg-transparent z-20 top-0 left-0 fixed p-5 w-full">
        <div
            class="bg-white rounded-full border-b border-gray-200 px-7 backdrop-filter backdrop-blur-lg bg-opacity-70 shadow-lg max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <span class=" text-md self-center font-semibold whitespace-nowrap dark:text-white">Nusaputra University
                    Bot Office</span>
            </a>
            <div class="flex md:order-2">
                <button type="button"
                    class=" hidden md:block text-white bg-[#770042] hover:bg-[#770041cd] focus:ring-4 focus:outline-none focus:bg-[#77004195] font-medium rounded-lg text-sm px-4 py-2 text-center">Get
                    started</button>
            </div>
        </div>
    </nav>

    <section class="dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">

                <h1 class="mb-4 pt-20 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Better
                        Data</span> Scalable AI.
                </h1>
                <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on
                    markets where technology, innovation, and capital can unlock long-term value and drive economic
                    growth.</p>

                {{ $slot }}
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="/assets/img/tech.svg" alt="mockup">
            </div>
        </div>
    </section>

    <footer class="p-4 md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <p class=" text-gray-500 dark:text-gray-400">Open-source library of over 400+ web components and
                interactive elements built for better web.</p>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                    class="hover:underline">Nusaputra University™</a>. All Rights Reserved.</span>
        </div>
    </footer>

</div>
