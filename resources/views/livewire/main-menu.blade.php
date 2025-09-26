<ul class="flex flex-col space-y-1">
    <li>
        <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
            <x-icons.house-heart class="h-4 w-4" />
            Dashboard
        </a>
    </li>
    <li class="hs-accordion" id="items-accordion">
        <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" aria-expanded="true" aria-controls="items-accordion-child">
            <x-icons.tool-case class="h-5 w-5" />
            Items
            <x-icons.chevron-down class="h-4 w-4 hs-accordion-active:hidden ms-auto block" />
            <x-icons.chevron-up class="h-4 w-4 hs-accordion-active:block ms-auto hidden" />
        </button>

        <div id="items-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="items-accordion">
            <ul class="hs-accordion-group ps-8 pt-1 space-y-1">
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                Link 1
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                Link 2
                </a>
            </li>
            </ul>
        </div>
    </li>

    <li class="hs-accordion" id="manage-accordion">
        <button type="button" class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" aria-expanded="true" aria-controls="manage-accordion-child">
            <x-icons.folder-key class="h-5 w-5" />
            Manage
            <x-icons.chevron-down class="h-4 w-4 hs-accordion-active:hidden ms-auto block" />
            <x-icons.chevron-up class="h-4 w-4 hs-accordion-active:block ms-auto hidden" />
        </button>

        <div id="manage-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="manage-accordion">
            <ul class="hs-accordion-group ps-8 pt-1 space-y-1">
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                Link 1
                </a>
            </li>
            <li>
                <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
                Link 2
                </a>
            </li>
            </ul>
        </div>
    </li>

    <li>
        <a class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100" href="#">
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
        Calendar
        </a>
    </li>
</ul>