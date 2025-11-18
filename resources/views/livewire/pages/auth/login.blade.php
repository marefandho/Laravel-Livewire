<div 
class="bg-white border border-gray-200 rounded-xl shadow-md dark:bg-neutral-900 
dark:border-neutral-700">
    <div class="p-2 sm:p-6 mt-2">
        <div class="text-left mb-5 -space-y-2">
            <h1 class="block text-4xl font-bold text-indigo-600">mStore</h1>
            <h1 class="block text-lg font-medium text-gray-600 dark:text-white">Authentication</h1>
        </div>
        <div class="mt-2">
            <form wire:submit.prevent="login" novalidate>
                <div class="grid gap-y-3">
                    <div>
                        <label for="email" class="absolute hidden text-sm mb-2 dark:text-white">Email address</label>
                        <div class="relative">
                            <input 
                                wire:model="email" type="email" id="email" placeholder="Email address"
                                class="peer py-2.5 sm:py-3 pe-0 ps-9 block w-full 
                                rounded-lg placeholder-gray-400 sm:text-sm disabled:opacity-50 
                                disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 
                                dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                                {{ $errors->has('email') 
                                    ? 'border-red-500 focus:border-red-500 focus:ring-red-500' 
                                    : 'border-gray-300 focus:border-blue-500 focus:ring-blue-500' }}"
                                required aria-describedby="email-error" autocomplete="off"
                            /> 
                            <div 
                                class="absolute inset-y-0 start-0 flex items-center pointer-events-none 
                                ps-3 peer-disabled:opacity-50 peer-disabled:pointer-events-none"
                            >
                                <x-icons.mail class="w-4 h-4 text-gray-600" />
                            </div>
                        </div>
                        @error('email') 
                            <span class="text-red-500 text-xs">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div>              
                        <label for="password" class="absolute hidden text-sm mb-2 dark:text-white">Password</label>
                        <div class="relative">
                            <input 
                                wire:model="password" type="password" id="password" placeholder="Password"
                                class="peer py-2.5 sm:py-3 pe-0 ps-9 block w-full rounded-lg sm:text-sm 
                                disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900
                                dark:border-neutral-700 dark:text-neutral-400 
                                dark:placeholder-neutral-500 dark:focus:ring-neutral-600
                                placeholder-gray-400
                                {{ $errors->has('password') 
                                    ? 'border-red-500 focus:border-red-500 focus:ring-red-500' 
                                    : 'border-gray-300 focus:border-blue-500 focus:ring-blue-500' }}"
                                required aria-describedby="password-error">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                <x-icons.key-square class="w-4 h-4 text-gray-600" />
                            </div>
                            <button type="button" 
                            class="absolute inset-y-0 right-0 pr-3 flex items-center mr-auto cursor-pointer 
                            focus:outline-hidden dark:text-neutral-600 dark:focus:text-indigo-500 z-20" 
                            data-hs-toggle-password='{"target": "#password"}'>
                                <x-icons.eye-off class="w-4 h-4 text-gray-600 z-30 hs-password-active:hidden" />
                                <x-icons.eye class="hidden w-4 h-4 text-indigo-600 z-30 hs-password-active:block" />
                            </button>
                        </div>
                        @error('password') 
                            <span class="text-red-500 text-xs">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="flex items-center">
                        <div class="flex">
                            <input id="remember-me" name="remember-me" type="checkbox" 
                            class="shrink-0 mt-0.5 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 
                            dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 
                            dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                        </div>
                        <div class="ms-3">
                            <label for="remember-me" class="text-sm dark:text-white text-gray-500">Remember me</label>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm 
                        font-medium rounded-lg border border-transparent bg-indigo-600 text-white 
                        hover:bg-indigo-700 focus:outline-hidden focus:bg-indigo-700 
                        disabled:opacity-50 disabled:pointer-events-none">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>