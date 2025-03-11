<!-- Main navigation container -->
<nav class="relative flex w-full flex-wrap items-center justify-between bg-transparent py-2 shadow-dark-mild lg:py-4 z-40"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <div>
            <a class="mx-2 my-1 flex items-center lg:mb-0 lg:mt-0" href="#">
                <img class="me-2" src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp"
                    style="height: 20px" alt="TE Logo" loading="lazy" />
            </a>
        </div>

        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-white hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
            type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4"
            aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7 [&>svg]:stroke-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <!-- Collapsible navbar container -->
        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent4" data-twe-collapse-item>
            <!-- Left links -->
            <ul class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row" data-twe-navbar-nav-ref>
                <!-- Home link -->
                <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                    <a class="text-white/60 transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none  lg:px-2"
                        aria-current="page" href="#" data-twe-nav-link-ref>Home</a>
                </li>
                
                <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                    <a class="text-white/60 transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none  lg:px-2"
                        aria-current="page" href="#" data-twe-nav-link-ref>Catalog</a>
                </li>
                
                <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
                    <a class="text-white/60 transition duration-200 hover:text-white/80 hover:ease-in-out focus:text-white/80 active:text-white/80 motion-reduce:transition-none  lg:px-2"
                        aria-current="page" href="#" data-twe-nav-link-ref>About us</a>
                </li>
            </ul>

            <div class="flex items-center">
                <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                    class="me-3 inline-block rounded px-2 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700">
                    Login
                </button>
            </div>
        </div>
    </div>
</nav>
