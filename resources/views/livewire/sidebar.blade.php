<div id="hs-application-sidebar" 
    class="hs-overlay [--body-scroll:true] lg:[--overlay-backdrop:false] [--is-layout-affect:true] 
    [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform
    w-65 h-full hidden fixed inset-y-0 start-0 z-60 bg-white border-e border-gray-200" 
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
      
        <header class="px-6 pt-4 flex items-center mb-3">
            <span class="text-indigo-600 font-extrabold text-3xl tracking-tight">mStore</span>
        </header>

        <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>

                <livewire:main-menu />

            </nav>
        </div>

        <livewire:sidebar-footer />

    </div>
</div>