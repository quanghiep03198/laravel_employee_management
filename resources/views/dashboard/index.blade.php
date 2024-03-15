<x-app-layout>

   <div class="mb-10 grid gap-4 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4">
      <div class="rounded-lg border border-border bg-white p-4 shadow-sm">
         <div class="flex flex-row items-center justify-between space-y-0 pb-2">
            <h3 class="text-sm font-medium">
               Total Revenue
            </h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
               strokeWidth="2" class="text-muted-foreground h-4 w-4">
               <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
            </svg>
         </div>
         <div>
            <div class="text-2xl font-bold">$45,231.89</div>
            <p class="text-muted-foreground text-xs">
               +20.1% from last month
            </p>
         </div>
      </div>
      <div class="rounded-lg border border-border bg-white p-4 shadow-sm">
         <div class="flex flex-row items-center justify-between space-y-0 pb-2">
            <h3 class="text-sm font-medium">
               Subscriptions
            </h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
               strokeWidth="2" class="text-muted-foreground h-4 w-4">
               <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
               <circle cx="9" cy="7" r="4" />
               <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
         </div>
         <div>
            <div class="text-2xl font-bold">+2350</div>
            <p class="text-muted-foreground text-xs">
               +180.1% from last month
            </p>
         </div>
      </div>
      <div class="rounded-lg border border-border bg-white p-4 shadow-sm">
         <div class="flex flex-row items-center justify-between space-y-0 pb-2">
            <h3 class="text-sm font-medium">Sales</h3>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
               strokeWidth="2" class="text-muted-foreground h-4 w-4">
               <rect width="20" height="14" x="2" y="5" rx="2" />
               <path d="M2 10h20" />
            </svg>
         </div>
         <div>
            <div class="text-2xl font-bold">+12,234</div>
            <p class="text-muted-foreground text-xs">
               +19% from last month
            </p>
         </div>
      </div>
      <div class="rounded-lg border border-border bg-white p-4 shadow-sm">
         <div class="flex flex-row items-center justify-between space-y-0 pb-2">
            <div class="text-sm font-medium">
               Active Now
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
               strokeWidth="2" class="text-muted-foreground h-4 w-4">
               <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
            </svg>
         </div>
         <div>
            <div class="text-2xl font-bold">+573</div>
            <p class="text-muted-foreground text-xs">
               +201 since last hour
            </p>
         </div>
      </div>
   </div>

   <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-7">
      <div class="col-span-full overflow-x-auto rounded-lg bg-background p-4 scrollbar-thin xl:col-span-4">
         <div>
            <h3 class="font-semibold">Overview</h3>
         </div>
         <div class="w-full max-w-full">
            <canvas id="myChart"></canvas>
         </div>
         <div class="mt-6 flex flex-col justify-end text-center text-sm font-medium">
            Sale chart</div>
      </div>
      <div class="col-span-full rounded-lg bg-background p-4 xl:col-span-3">
         <div>
            <h3 class="font-semibold">Employees</h3>
            <ul role="list" class="divide-y divide-gray-100">
               <li class="flex justify-between gap-x-6 py-5">
                  <div class="flex min-w-0 gap-x-4">
                     <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                     <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                           Michael Foster</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                           michael.foster@example.com</p>
                     </div>
                  </div>
                  <div class="shrink-0 sm:hidden xl:flex xl:flex-col xl:items-end">
                     <p class="text-sm leading-6 text-gray-900">Co-Founder / CTO
                     </p>
                     <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                        <time datetime="2023-01-23T13:23Z">3h
                           ago</time>
                     </p>
                  </div>
               </li>
               <li class="flex justify-between gap-x-6 py-5">
                  <div class="flex min-w-0 gap-x-4">
                     <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                     <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                           Dries Vincent</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                           dries.vincent@example.com</p>
                     </div>
                  </div>
                  <div class="shrink-0 sm:hidden xl:flex xl:flex-col xl:items-end">
                     <p class="text-sm leading-6 text-gray-900">Business
                        Relations</p>
                     <div class="mt-1 flex items-center gap-x-1.5">
                        <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                           <div class="h-1.5 w-1.5 rounded-full bg-emerald-500">
                           </div>
                        </div>
                        <p class="text-xs leading-5 text-gray-500">Online</p>
                     </div>
                  </div>
               </li>
               <li class="flex justify-between gap-x-6 py-5">
                  <div class="flex min-w-0 gap-x-4">
                     <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                     <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                           Lindsay Walton</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                           lindsay.walton@example.com</p>
                     </div>
                  </div>
                  <div class="shrink-0 sm:hidden xl:flex xl:flex-col xl:items-end">
                     <p class="text-sm leading-6 text-gray-900">Front-end
                        Developer</p>
                     <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                        <time datetime="2023-01-23T13:23Z">3h
                           ago</time>
                     </p>
                  </div>
               </li>
               <li class="flex justify-between gap-x-6 py-5">
                  <div class="flex min-w-0 gap-x-4">
                     <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                     <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                           Courtney Henry</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                           courtney.henry@example.com</p>
                     </div>
                  </div>
                  <div class="shrink-0 sm:hidden xl:flex xl:flex-col xl:items-end">
                     <p class="text-sm leading-6 text-gray-900">Designer</p>
                     <p class="mt-1 text-xs leading-5 text-gray-500">Last seen
                        <time datetime="2023-01-23T13:23Z">3h
                           ago</time>
                     </p>
                  </div>
               </li>
               <li class="flex justify-between gap-x-6 py-5">
                  <div class="flex min-w-0 gap-x-4">
                     <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                     <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                           Tom Cook</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                           tom.cook@example.com</p>
                     </div>
                  </div>
                  <div class="shrink-0 sm:hidden xl:flex xl:flex-col xl:items-end">
                     <p class="text-sm leading-6 text-gray-900">Director of
                        Product</p>
                     <div class="mt-1 flex items-center gap-x-1.5">
                        <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                           <div class="h-1.5 w-1.5 rounded-full bg-emerald-500">
                           </div>
                        </div>
                        <p class="text-xs leading-5 text-gray-500">Online</p>
                     </div>
                  </div>
               </li>
            </ul>

         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script>
      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
         type: 'bar',
         data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug',
               'Sep', 'Oct', 'Nov', 'Dec'
            ],
            datasets: [{
               label: '# of Votes',
               data: [1020, 1900, 3000, 5000, 2000, 3000, 2200, 1000,
                  1100, 2900, 1400, 1600
               ],
               borderWidth: 1,
               backgroundColor: '#ff2d20',
               borderRadius: 4,
               animation: false
            }]
         },
         options: {
            scales: {
               y: {
                  beginAtZero: true
               }
            }
         }
      });
   </script>

</x-app-layout>
