<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>BruFuel • Dashboard</title>

  <!-- Tailwind CDN (no Vite needed) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root { color-scheme: dark; }
    body     { background:#0b1220; }         /* page bg (dark blue/black) */
    .sidebar { background:#0f1625; }         /* sidebar bg */
    .card    { background:#141c2b; border-color:#1f2937; } /* card/border */
  </style>
</head>
<body class="min-h-screen text-slate-100 antialiased">
  <div class="flex min-h-screen">
    
  <!-- Sidebar -->
    <aside class="sidebar w-64 shrink-0 border-r border-slate-800">
      <div class="flex items-center gap-3 px-5 py-5">
        <div class="grid h-12 w-12 place-items-center rounded-xl bg-black-500/20">
          <img src="/AdminPics/whiteshell.png" class="h-11 w-12" alt="Shell Icon">
        </div>
        <div>
          <p class="text-lg font-semibold">BruFuel</p>
          <p class="text-xs text-slate-400">Admin</p>
        </div>
      </div>
      
  <nav class="px-3">
        <ul class="space-y-1">
          <li class="rounded-lg text-slate-300 hover:bg-white/5">
            <a class="flex items-center justify-between px-3 py-2" href="/admin/dashboard">
              <span class="flex items-center gap-3">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
                Dashboard

              </span>
            </a>
          </li>
          <li class="rounded-lg text-slate-300 hover:bg-white/5">
            <a class="flex items-center justify-between px-3 py-2" href="/admin/orders">
              <span class="flex items-center gap-3">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
                Orders

                 </span>
            </a>
          </li>
          <li class="rounded-lg text-slate-300 hover:bg-white/5">
            <a class="flex items-center justify-between px-3 py-2" href="/admin/users">
              <span class="flex items-center gap-3">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
                Users

                  </span>
            </a>
          </li>
          <li class="rounded-lg bg-indigo-500/15 text-white">
            <a class="flex items-center justify-between px-3 py-2" href="/admin/orders">
              <span class="flex items-center gap-3">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-indigo-400"></span>
                Drivers

                   
     <!-- ...other items... -->
      </a>
          </li>
          <li class="rounded-lg text-slate-300 hover:bg-white/5">
      <a class="flex items-center justify-between px-3 py-2" href="/admin/payments">
        <span class="flex items-center gap-3">
          <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
          payments
        </span>
      </a>
    </li>
  </ul>
   <div class="mt-auto p-4">
        <div class="flex items-center gap-3 rounded-xl border border-slate-800 bg-[#0b1220] p-3">
          <div class="grid h-9 w-9 place-items-center rounded-full bg-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5z"/><path d="M12 14c-5 0-9 2.5-9 5v1h18v-1c0-2.5-4-5-9-5z"/>
            </svg>
          </div>
          <div class="text-sm">
            <p class="font-medium">Admin User</p>
            <p class="text-slate-400">Administrator</p>
          </div>
        </div>
      </div>
    </aside>
</nav>

      

    <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
        <!-- Top Navigation -->
            <header class="bg-[#0f1625] py-3 px-10 flex items-center justify-between">
                    <div class="flex items-center">
                        <button class="md:hidden mr-4 text-gray-600">
                        <i data-feather="menu"></i>
                    </button>
                 <div class="flex items-center gap-2">
            <span class="text-xl font-bold">BruFuel</span>
            <span class="text-xs font-semibold text-slate-900 bg-amber-400/90 px-2 py-0.5 rounded">ADMIN</span>
          </div>
                </div>
                <div class="flex items-center space-x-">
                    <div class="relative">
                        <i data-feather="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>
                    <div class="flex items-center">
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6">
                <!-- Header with Actions -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-white-800">Drivers</h1>
                        <p class="text-white-600">Manage your fleet drivers and their information</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex space-x-3">
                        <button class="flex items-center px-4 py-2 border border-white-300 rounded-lg text-white-700 hover:bg-blue-600 transition">
                            <i data-feather="plus" class="mr-0"></i> Add Driver
                        </button>
                        <button class="flex items-center px-4 py-2 border border-white-300 rounded-lg text-white-700 hover:bg-blue-600 transition">
                            <i data-feather="download" class="mr-0"></i> Export
                        </button>
                    </div>
                </div>

                <!-- Filters -->
                <div class="bg-[#0f1625] p-4 rounded-lg shadow-sm mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-white-700 mb-1">Status</label>
                            <select class="w-full border border-white-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>All Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-white-700 mb-1">License Type</label>
                            <select class="w-full border border-white-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                <option>All Types</option>
                                <option>Class A</option>
                                <option>Class B</option>
                                <option>Class C</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-white-700 mb-1">Date Range</label>
                            <input type="date" class="w-full border border-white-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div class="flex items-end">
                            <button class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                                Apply Filters
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Driver Table -->
                <div class="bg-gray-900 rounded-lg shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-900">
                            <thead class="bg-slate-800">

                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Driver
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        License
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Contact
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-900 divide-y divide-gray-700">
                                <!-- Driver 1 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-white">John Smith</div>
                                                <div class="text-sm text-white">ID: DRV-001</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">Class A</div>
                                        <div class="text-sm text-white">Exp: 12/2025</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">john.smith@example.com</div>
                                        <div class="text-sm text-white">(555) 123-4567</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="status-badge active">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex space-x-2">
                                            <button class="text-primary hover:text-blue-600">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button class="text-gray-600 hover:text-gray-900">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Driver 2 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/2" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-white">Sarah Johnson</div>
                                                <div class="text-sm text-white">ID: DRV-002</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">Class B</div>
                                        <div class="text-sm text-white">Exp: 06/2024</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">sarah.j@example.com</div>
                                        <div class="text-sm text-white">(555) 987-6543</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="status-badge active">Active</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex space-x-2">
                                            <button class="text-primary hover:text-blue-600">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button class="text-gray-600 hover:text-gray-900">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Driver 3 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/3" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-white">Michael Brown</div>
                                                <div class="text-sm text-white">ID: DRV-003</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">Class C</div>
                                        <div class="text-sm text-white">Exp: 03/2023</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">michael.b@example.com</div>
                                        <div class="text-sm text-white">(555) 456-7890</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="status-badge inactive">Inactive</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <div class="flex space-x-2">
                                            <button class="text-primary hover:text-blue-600">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button class="text-gray-600 hover:text-gray-900">
                                                <i data-feather="eye"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Driver 4 -->
                                <tr class="table-row">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/4" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-white">Emily Davis</div>
                                                <div class="text-sm text-white">ID: DRV-004</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">Class A</div>
                                        <div class="text-sm text-white">Exp: 09/2026</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-white">emily.d@example.com</div>
                                        <div class="text-sm text-white">(555) 789-0123</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <
</body>
</html>