<div class="drawer-side z-40" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer"
        class="drawer-overlay" aria-label="Close menu"></label>
    <aside class="bg-base-100 min-h-screen w-80">
        <div data-sveltekit-preload-data
            class="bg-base-100 sticky top-0 z-20 items-center gap-2 bg-opacity-90 px-4 py-2 backdrop-blur lg:flex ">
            <a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2"><svg
                    width="32" height="32" viewBox="0 0 415 415" xmlns="http://www.w3.org/2000/svg">
                    <rect x="82.5" y="290" width="250" height="125" rx="62.5" fill="#1AD1A5">
                    </rect>
                    <circle cx="207.5" cy="135" r="130" fill="black" fill-opacity=".3"></circle>
                    <circle cx="207.5" cy="135" r="125" fill="white"></circle>
                    <circle cx="207.5" cy="135" r="56" fill="#FF9903"></circle>
                </svg>
                <div class="font-title inline-flex text-lg md:text-2xl">SampahHeroes</div>
            </a>
        </div>
        <div class="h-4"></div>
        <ul class="menu px-4 py-0">
            <li> <x-navbar-item  url="{{ route('home') }}" active="{{ request()->routeIs('home') }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <path d="M3 12l9-9 9 9"></path>
                            <path d="M9 21V12h6v9"></path>
                            <path d="M21 21H3"></path>
                        </svg>

                    </span> <span>Home</span> </x-navbar-item>
            </li>
            <li> <x-navbar-item url="{{ route('notifikasi') }}" active="{{ request()->routeIs('notifikasi') }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </span> <span>Notifikasi</span> </x-navbar-item>
            </li>
            <li> <x-navbar-item url="{{ url('profile/' . auth()->user()->username) }}"
                    active="{{ request()->routeIs('profile') }}">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                            <circle cx="12" cy="7" r="4"></circle>
                            <path d="M5.5 21c0-3 3.58-5.5 6.5-5.5s6.5 2.5 6.5 5.5"></path>
                        </svg>
                    </span> <span>Profil</span> </x-navbar-item>
            </li>
            <li> <a href="/store/"
                    class="group from-primary to-primary/0 hover:to-primary/10 from-[-200%] to-60% [background-image:linear-gradient(-35deg,var(--tw-gradient-stops))]"><span
                        class=" group-hover:text-primary transition-colors"><svg class="h-5 w-5" width="18"
                            height="18" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40.0391 22V42H8.03906V22" stroke="currentColor" stroke-width="4"
                                stroke-linecap="butt" stroke-linejoin="bevel" />
                            <path
                                d="M5.84231 13.7766C4.31276 17.7377 7.26307 22 11.5092 22C14.8229 22 17.5276 19.3137 17.5276 16C17.5276 19.3137 20.2139 22 23.5276 22H24.546C27.8597 22 30.546 19.3137 30.546 16C30.546 19.3137 33.2518 22 36.5655 22C40.8139 22 43.767 17.7352 42.2362 13.7723L39.2337 6H8.84523L5.84231 13.7766Z"
                                fill="none" stroke="currentColor" stroke-width="4" stroke-linejoin="bevel" />
                        </svg></span> <span>Store</span> <span
                        class="badge badge-sm font-mono text-opacity-70 bg-primary/10 text-[inherit] border-transparent uppercase font-sans font-bold">new</span>
                </a></li>

            <li> <a href="/resources/videos/" class="group "><span><svg width="18" height="18"
                            viewBox="0 0 48 48" class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z"
                                fill="none" stroke="currentColor" stroke-width="4" stroke-linejoin="bevel" />
                            <path d="M20 24V17.0718L26 20.5359L32 24L26 27.4641L20 30.9282V24Z" fill="none"
                                stroke="currentColor" stroke-width="4" stroke-linejoin="bevel" />
                        </svg></span> <span>Resources</span> </a></li>
            <li></li>
            <li> <a href="/tailwindplay/" target="_blank" rel="noopener noreferrer" class="group    "><span><svg
                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 54 33">
                            <g clip-path="url(#prefix__clip0)">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"
                                    clip-rule="evenodd" />
                            </g>
                            <defs>
                                <clipPath id="prefix__clip0">
                                    <path fill="#fff" d="M0 0h54v32.4H0z" />
                                </clipPath>
                            </defs>
                        </svg></span> <span>Playground</span> <svg width="12" height="12"
                        class="opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H37V29" stroke="currentColor" stroke-width="4" stroke-linecap="butt"
                            stroke-linejoin="bevel"></path>
                        <path d="M11.5439 36.4559L36.9997 11" stroke="currentColor" stroke-width="4"
                            stroke-linecap="butt" stroke-linejoin="bevel"></path>
                    </svg></a></li>
            <li> <a href="https://github.com/saadeghi/daisyui" target="_blank" rel="noopener noreferrer"
                    class="group    "><span><svg width="18" height="18" class="h-5 w-5" viewBox="0 0 48 48"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.3444 30.4765C31.7481 29.977 33.9292 29.1108 35.6247 27.8391C38.5202 25.6676 40 22.3136 40 18.9999C40 16.6752 39.1187 14.505 37.5929 12.6668C36.7427 11.6425 39.2295 3.99989 37.02 5.02919C34.8105 6.05848 31.5708 8.33679 29.8726 7.83398C28.0545 7.29565 26.0733 6.99989 24 6.99989C22.1992 6.99989 20.4679 7.22301 18.8526 7.6344C16.5046 8.23237 14.2591 5.99989 12 5.02919C9.74086 4.05848 10.9736 11.9632 10.3026 12.7944C8.84119 14.6051 8 16.7288 8 18.9999C8 22.3136 9.79086 25.6676 12.6863 27.8391C14.6151 29.2857 17.034 30.2076 19.7401 30.6619"
                                stroke="currentColor" stroke-width="4" stroke-linecap="butt" />
                            <path
                                d="M19.7397 30.6619C18.5812 31.937 18.002 33.1478 18.002 34.2944C18.002 35.441 18.002 38.3464 18.002 43.0106"
                                stroke="currentColor" stroke-width="4" stroke-linecap="butt" />
                            <path
                                d="M29.3446 30.4766C30.4423 31.9174 30.9912 33.211 30.9912 34.3576C30.9912 35.5042 30.9912 38.3885 30.9912 43.0107"
                                stroke="currentColor" stroke-width="4" stroke-linecap="butt" />
                            <path
                                d="M6 31.2155C6.89887 31.3254 7.56554 31.7387 8 32.4554C8.65169 33.5303 11.0742 37.518 13.8251 37.518C15.6591 37.518 17.0515 37.518 18.0024 37.518"
                                stroke="currentColor" stroke-width="4" stroke-linecap="butt" />
                        </svg></span> <span>GitHub</span> <svg width="12" height="12"
                        class="opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H37V29" stroke="currentColor" stroke-width="4" stroke-linecap="butt"
                            stroke-linejoin="bevel"></path>
                        <path d="M11.5439 36.4559L36.9997 11" stroke="currentColor" stroke-width="4"
                            stroke-linecap="butt" stroke-linejoin="bevel"></path>
                    </svg></a></li>

            <li> <a href="https://opencollective.com/daisyui" target="_blank" rel="noopener noreferrer"
                    class="group    "><span><svg width="18" class="h-5 w-5" height="18" viewBox="0 0 48 48"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 8C8.92487 8 4 12.9249 4 19C4 30 17 40 24 42.3262C31 40 44 30 44 19C44 12.9249 39.0751 8 33 8C29.2797 8 25.9907 9.8469 24 12.6738C22.0093 9.8469 18.7203 8 15 8Z"
                                fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="butt"
                                stroke-linejoin="bevel" />
                        </svg></span> <span>Support daisyUI</span> <svg width="12" height="12"
                        class="opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100"
                        viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H37V29" stroke="currentColor" stroke-width="4" stroke-linecap="butt"
                            stroke-linejoin="bevel"></path>
                        <path d="M11.5439 36.4559L36.9997 11" stroke="currentColor" stroke-width="4"
                            stroke-linecap="butt" stroke-linejoin="bevel"></path>
                    </svg></a></li>
            <li>
                <label class="flex cursor-pointer gap-2">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round">
                      <circle cx="12" cy="12" r="5" />
                      <path
                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                    </svg>
                    <input type="checkbox" value="synthwave" class="toggle theme-controller" />
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                  </label>
            </li>

        </ul>
        <div
            class="bg-base-100 pointer-events-none sticky bottom-0 flex h-40 [mask-image:linear-gradient(transparent,#000000)]">
        </div>

    </aside>
</div>
