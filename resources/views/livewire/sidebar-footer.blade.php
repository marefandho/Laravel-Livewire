<footer class="hidden lg:block yfv61 lnk45 dark:border-neutral-700">
    <div class="border-t border-gray-200">
        <div class="hs-dropdown relative flex">
            <button id="hs-pro-dnwpd" type="button" 
            class="group w-full inline-flex items-center disabled:opacity-50 hover:bg-gray-200 
            focus:bg-gray-200 disabled:pointer-events-none focus:outline-hidden py-2 px-4
            dark:text-white" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <div class="block rounded-full bg-indigo-600 text-white font-semibold py-2 px-2.5">
                    {{ \App\Helpers\StringHelpers::initials(auth()->user()->name) }}
                </div>
                <span class="block pl-2 text-sm">
                    {{ auth()->user()->name }}
                </span>
                <x-icons.chevron-up-down class="h-4 w-4 ms-auto" />
            </button>
            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 nq1zh transition-[opacity,margin] duration opacity-0 hidden gbcuh aqyoh er6t7 gmg3v dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-dnwpd" tabindex="-1">
                <div class="vyel6 yfv61 lnk45 dark:border-neutral-800">
                    <button type="button" class="w-full flex items-center vyfcq s53ws f2l40 pb094 w4xo0 c9jt8 d05xb disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden r17tr dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                    <x-icons.user-round-pen class="h-5 w-5 me-2" />
                        Profile
                    </button>
                </div>

                <div class="vyel6 yfv61 lnk45 dark:border-neutral-800">
                    <button type="button" class="w-full flex items-center vyfcq s53ws f2l40 pb094 w4xo0 c9jt8 d05xb disabled:opacity-50 focus:outline-hidden r17tr dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                    <x-icons.log-out class="h-5 w-5 me-2" />
                    Sign out
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>