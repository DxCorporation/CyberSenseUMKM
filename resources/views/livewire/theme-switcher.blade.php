 <div class="min-h-[100vh] overflow-hidden pb-40 pt-32">
     <div class="relative">
         <div
             class="relative flex flex-col items-center justify-center gap-10 px-4 md:px-10 xl:flex-row-reverse xl:gap-20">
             <div>
                 <div
                     class="bg-primary pointer-events-none absolute start-20 aspect-square w-96 rounded-full opacity-20 blur-3xl [transform:translate3d(0,0,0)]">
                 </div>
                 <div
                     class="bg-success pointer-events-none absolute aspect-square w-full rounded-full opacity-10 blur-3xl [transform:translate3d(0,0,0)]">
                 </div>
                 <h2 class="font-title text-center text-[clamp(2rem,8vw,4rem)] font-black leading-none xl:text-start">
                     <span class="motion-reduce:!opacity-100" style="opacity:1">Fewer class names</span> <br> <span
                         class="motion-reduce:!opacity-100" style="opacity:1">Faster development</span> <br> <span
                         class="motion-reduce:!opacity-100" style="opacity:1">Smaller file size</span>
                 </h2>
                 <div class="h-10"></div>
                 <p class="text-base-content/70 font-title text-center font-light md:text-3xl xl:text-start">With
                     daisyUI, you write 80% fewer class names<br />And your HTML size will be about 70% smaller.</p>
                 <div class="h-10"></div>
                 <div class="flex w-full justify-center xl:justify-start"><a data-sveltekit-preload-data
                         href="/docs/install/" class="btn btn-lg btn-wide group">Get started <svg
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor"
                             class="hidden h-6 w-6 transition-transform duration-300 group-hover:translate-x-1 rtl:rotate-180 rtl:group-hover:-translate-x-1 md:inline-block">
                             <path stroke-linecap="round" stroke-linejoin="round"
                                 d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                         </svg></a></div>
             </div>
             <div class="grid shrink-0 gap-6 xl:grid-cols-5">
                 <div class="card border-base-content/10 col-span-3 col-start-1 row-start-1 flex flex-col border border-dashed will-change-auto motion-reduce:!transform-none"
                     style="transform:translateX(0%)">
                     <div class="card-body">
                         <h3><span class="font-bold">CSS Class names</span></h3>
                         <div class="flex flex-col gap-2">
                             <div class="flex justify-between text-sm"><span>Tailwind only</span> <span
                                     class="font-mono text-xs">107</span></div> <progress
                                 class="progress progress-warning w-56" value="93" max="100"></progress>
                         </div>
                         <div class="flex flex-col gap-2">
                             <div class="flex justify-between text-sm"><span>Tailwind + daisyUI</span> <span
                                     class="font-mono text-xs">14</span></div> <progress
                                 class="progress progress-success w-56" value="0" max="100"></progress>
                         </div> <span class="mt-2 flex gap-2 text-xs"><svg xmlns="http://www.w3.org/2000/svg"
                                 height="16" viewBox="0 0 24 24" width="16" fill="currentColor"
                                 class="text-success">
                                 <path d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                             </svg> 86% fewer class names</span>
                     </div>
                 </div>
                 <div class="card border-base-content/10 col-span-3 row-start-2 flex flex-col border border-dashed will-change-auto motion-reduce:!transform-none xl:col-start-3"
                     style="transform:translateX(0%)">
                     <div class="card-body">
                         <h3><span class="font-bold">HTML size</span></h3>
                         <div class="flex flex-col gap-2">
                             <div class="flex justify-between text-sm"><span>Tailwind only</span> <span
                                     class="font-mono text-xs">1884 byte</span></div> <progress
                                 class="progress progress-warning w-56" value="93" max="100"></progress>
                         </div>
                         <div class="flex flex-col gap-2">
                             <div class="flex justify-between text-sm"><span>Tailwind + daisyUI</span> <span
                                     class="font-mono text-xs">471 byte</span></div> <progress
                                 class="progress progress-success w-56" value="0" max="100"></progress>
                         </div> <span class="mt-2 flex gap-2 text-xs"><svg xmlns="http://www.w3.org/2000/svg"
                                 height="16" viewBox="0 0 24 24" width="16" fill="currentColor"
                                 class="text-success">
                                 <path d="M0 0h24v24H0z" fill="none"></path>
                                 <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
                             </svg> 74% smaller DOM size</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

