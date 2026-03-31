<footer class="border-t border-gray-200 bg-gray-50 dark:border-gray-800 dark:bg-gray-950">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">

        {{-- Main Footer Grid --}}
        <div class="grid gap-12 lg:grid-cols-5">

            {{-- Brand Column --}}
            <div class="lg:col-span-2">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img src="{{ asset('logo.png') }}" alt="Digitwace" class="h-14 w-auto">
                </a>
                <p class="mt-4 max-w-sm text-sm text-gray-600 dark:text-gray-400">
                    The modern investment platform for everyone. Trade stocks, ETFs, crypto, and options with zero commissions.
                </p>
                {{-- Social Links --}}
                <div class="mt-6 flex items-center gap-4">
                    <a href="#" class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300" aria-label="Twitter">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300" aria-label="LinkedIn">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 transition-colors hover:text-gray-600 dark:hover:text-gray-300" aria-label="YouTube">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Link Columns --}}
            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Products</h3>
                <ul class="mt-4 space-y-3">
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Stocks</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">ETFs</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Crypto</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Options</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Company</h3>
                <ul class="mt-4 space-y-3">
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">About Us</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Careers</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Blog</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Resources</h3>
                <ul class="mt-4 space-y-3">
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Help Center</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">API Docs</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Security</a></li>
                    <li><a href="#" class="text-sm text-gray-600 transition-colors hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Status</a></li>
                </ul>
            </div>
        </div>

        {{-- Bottom Section --}}
        <div class="mt-12 border-t border-gray-200 pt-8 dark:border-gray-800">
            <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#" class="text-xs text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">Terms of Service</a>
                    <a href="#" class="text-xs text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">Privacy Policy</a>
                    <a href="#" class="text-xs text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">Cookie Policy</a>
                </div>
                <p class="text-xs text-gray-500">
                    &copy; {{ date('Y') }} Digitwace. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
