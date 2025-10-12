<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>BruFuel • User Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root { color-scheme: dark; }
    body     { background:#0b1220; }
    .sidebar { background:#0f1625; }
    .card    { background:#141c2b; border-color:#1f2937; }
  </style>
</head>
<body class="min-h-screen text-slate-100 antialiased">
  <div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="sidebar w-64 shrink-0 border-r border-slate-800 flex flex-col">
      <!-- Brand -->
      <div class="flex items-center gap-3 px-5 py-5">
        <div class="grid h-12 w-12 place-items-center rounded-xl bg-white/10">
          <img src="/AdminPics/whiteshell.png" class="h-11 w-12" alt="Shell Icon">
        </div>
        <div>
          <p class="text-lg font-semibold">BruFuel</p>
          <p class="text-xs text-slate-400">Admin</p>
        </div>
      </div>

      <!-- Nav -->
      <nav class="px-3">
        <ul class="space-y-1">
          <li>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-slate-300 hover:bg-white/5" href="/admin/dashboard">
              <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
              Dashboard
            </a>
          </li>

          <li>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-slate-300 hover:bg-white/5" href="/admin/orders">
              <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
              Orders
            </a>
          </li>

          <li>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2 bg-indigo-500/15 text-white" href="/admin/users">
              <span class="inline-block h-1.5 w-1.5 rounded-full bg-indigo-400"></span>
              Users
            </a>
          </li>

          <li>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-slate-300 hover:bg-white/5" href="/admin/drivers">
              <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
              Drivers
            </a>
          </li>

          <li>
            <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-slate-300 hover:bg-white/5" href="/admin/payments">
              <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
              Payments
            </a>
          </li>
        </ul>
      </nav>

      <!-- Push footer card to bottom -->
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

    <!-- MAIN -->
    <main class="flex-1">
      <!-- Top bar -->
      <header class="border-b border-slate-800">
        <div class="mx-auto max-w-6xl px-1 py-4 flex items-center justify-between">
          <div class="flex items-center gap-2">
            <span class="text-xl font-bold">BruFuel</span>
            <span class="text-xs font-semibold text-slate-900 bg-amber-400/90 px-2 py-0.5 rounded">ADMIN</span>
          </div>
          <div class="flex items-center gap-3">
            <button class="rounded-full bg-slate-800 p-2 text-slate-300 hover:text-white">
              <!-- bell -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a6 6 0 0 0-6 6v3.586l-1.707 1.707A1 1 0 0 0 5 15h14a1 1 0 0 0 .707-1.707L18 11.586V8a6 6 0 0 0-6-6zM8 16a4 4 0 0 0 8 0H8z"/></svg>
            </button>
            <img class="h-8 w-8 rounded-full" src="http://static.photos/workspace/200x200/5" alt="Admin">
          </div>
        </div>
      </header>

      <!-- Content container -->
      <section class="mx-auto max-w-7xl px-6 py-8">
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
          <h1 class="text-2xl font-semibold">User Management</h1>
          <div class="flex items-center gap-3">
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                <!-- search icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor"><path d="M10 2a8 8 0 0 1 6.32 12.906l4.387 4.387-1.414 1.414-4.387-4.387A8 8 0 1 1 10 2zm0 2a6 6 0 1 0 .001 12.001A6 6 0 0 0 10 4z"/></svg>
              </span>
              <input class="w-72 rounded-md border border-slate-700 bg-[#0f1625] pl-9 pr-3 py-2 text-sm placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                     placeholder="Search users" />
            </div>
            <button class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-500">
              + Add User
            </button>
          </div>
        </div>

        <!-- Filters -->
        <div class="card rounded-lg border p-4 mb-6">
          <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
            <div>
              <label class="mb-1 block text-sm text-slate-300">Role</label>
              <select class="w-full rounded-md border border-slate-700 bg-[#0f1625] py-2 pl-3 pr-10 text-sm focus:ring-indigo-500">
                <option>All Roles</option><option>Admin</option><option>Dispatcher</option><option>Driver</option><option>Customer</option>
              </select>
            </div>
            <div>
              <label class="mb-1 block text-sm text-slate-300">Status</label>
              <select class="w-full rounded-md border border-slate-700 bg-[#0f1625] py-2 pl-3 pr-10 text-sm focus:ring-indigo-500">
                <option>All Statuses</option><option>Active</option><option>Inactive</option><option>Pending</option>
              </select>
            </div>
            <div>
              <label class="mb-1 block text-sm text-slate-300">Last Login</label>
              <select class="w-full rounded-md border border-slate-700 bg-[#0f1625] py-2 pl-3 pr-10 text-sm focus:ring-indigo-500">
                <option>Any Time</option><option>Last 24 Hours</option><option>Last 7 Days</option><option>Last 30 Days</option>
              </select>
            </div>
            <div class="flex items-end">
              <button class="w-full rounded-md border border-slate-700 bg-[#0f1625] px-4 py-2 text-sm hover:bg-white/5">
                Apply Filters
              </button>
            </div>
          </div>
        </div>

        <!-- Bulk actions -->
        <div class="mb-4 flex flex-wrap items-center gap-3">
          <label class="inline-flex items-center gap-2 text-sm">
            <input type="checkbox" class="h-4 w-4 rounded border-slate-700 bg-[#0f1625] text-indigo-500 focus:ring-indigo-500">
            Select all
          </label>
          <select class="rounded-md border border-slate-700 bg-[#0f1625] py-1.5 pl-3 pr-10 text-sm">
            <option>Bulk Actions</option><option>Activate</option><option>Deactivate</option><option>Delete</option><option>Export</option>
          </select>
          <button class="rounded-md bg-slate-800 px-3 py-1.5 text-sm hover:bg-slate-700">Apply</button>
        </div>

        <!-- Table -->
        <div class="overflow-hidden rounded-lg border border-slate-800">
          <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
              <thead class="bg-[#0f1625] text-slate-300">
                <tr>
                  <th class="py-3.5 pl-6 pr-3 text-left font-semibold">Name</th>
                  <th class="px-3 py-3.5 text-left font-semibold">Email</th>
                  <th class="px-3 py-3.5 text-left font-semibold">Role</th>
                  <th class="px-3 py-3.5 text-left font-semibold">Status</th>
                  <th class="px-3 py-3.5 text-left font-semibold">Last Login</th>
                  <th class="py-3.5 pl-3 pr-6 text-right font-semibold">Actions</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-800 bg-[#141c2b]">
                <!-- Repeat rows as needed -->
     <!-- Row 1 -->
    <tr>
                  <td class="whitespace-nowrap py-4 pl-6 pr-3">
                    <div class="flex items-center gap-4">
                      <input type="checkbox" class="h-4 w-4 rounded border-slate-700 bg-[#0f1625] text-indigo-500">
                      <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                      <div>
                        <div class="font-medium">Michael Foster</div>
                        <div class="text-slate-400">ID: FL-001</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 py-4 text-slate-300">michael.foster@example.com</td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full border border-indigo-400/40 bg-indigo-400/10 px-2.5 py-0.5 text-xs font-medium text-indigo-300">Admin</span>
                  </td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full bg-emerald-400/10 px-2.5 py-0.5 text-xs font-medium text-emerald-300">Active</span>
                  </td>
                  <td class="px-3 py-4 text-slate-300">2 hours ago</td>
                  <td class="py-4 pl-3 pr-6">
                    <div class="flex justify-end gap-2">
                      <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
                      <button class="text-slate-400 hover:text-slate-300">View</button>
                      <button class="text-rose-400 hover:text-rose-300">Delete</button>
                    </div>
                  </td>
                    </tr>
    <!-- Row 2 -->
      <tr>
                  <td class="whitespace-nowrap py-4 pl-6 pr-3">
                    <div class="flex items-center gap-4">
                      <input type="checkbox" class="h-4 w-4 rounded border-slate-700 bg-[#0f1625] text-indigo-500">
                      <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                      <div>
                        <div class="font-medium">Hafiz Sapiuddin</div>
                        <div class="text-slate-400">ID: FL-002</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 py-4 text-slate-300">hafiz.sapiuddin@example.com</td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full border border-indigo-400/40 bg-indigo-400/10 px-2.5 py-0.5 text-xs font-medium text-indigo-300">Admin</span>
                  </td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full bg-emerald-400/10 px-2.5 py-0.5 text-xs font-medium text-emerald-300">Active</span>
                  </td>
                  <td class="px-3 py-4 text-slate-300">12 hours ago</td>
                  <td class="py-4 pl-3 pr-6">
                    <div class="flex justify-end gap-2">
                      <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
                      <button class="text-slate-400 hover:text-slate-300">View</button>
                      <button class="text-rose-400 hover:text-rose-300">Delete</button>
                    </div>
                  </td>
                    </tr>
   <!-- Row 3 -->
     <tr>
                  <td class="whitespace-nowrap py-4 pl-6 pr-3">
                    <div class="flex items-center gap-4">
                      <input type="checkbox" class="h-4 w-4 rounded border-slate-700 bg-[#0f1625] text-indigo-500">
                      <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                      <div>
                        <div class="font-medium">Hirman</div>
                        <div class="text-slate-400">ID: FL-003</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 py-4 text-slate-300">hirman@example.com</td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full border border-indigo-400/40 bg-indigo-400/10 px-2.5 py-0.5 text-xs font-medium text-indigo-300">Admin</span>
                  </td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full bg-emerald-400/10 px-2.5 py-0.5 text-xs font-medium text-emerald-300">Active</span>
                  </td>
                  <td class="px-3 py-4 text-slate-300">2 mins ago</td>
                  <td class="py-4 pl-3 pr-6">
                    <div class="flex justify-end gap-2">
                      <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
                      <button class="text-slate-400 hover:text-slate-300">View</button>
                      <button class="text-rose-400 hover:text-rose-300">Delete</button>
                    </div>
                  </td>
                    </tr>
     <!-- Row 4 -->
       <tr>
                  <td class="whitespace-nowrap py-4 pl-6 pr-3">
                    <div class="flex items-center gap-4">
                      <input type="checkbox" class="h-4 w-4 rounded border-slate-700 bg-[#0f1625] text-indigo-500">
                      <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                      <div>
                        <div class="font-medium">Ajay Ghale</div>
                        <div class="text-slate-400">ID: FL-004</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 py-4 text-slate-300">ajay.ghale@example.com</td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full border border-indigo-400/40 bg-indigo-400/10 px-2.5 py-0.5 text-xs font-medium text-indigo-300">Admin</span>
                  </td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full bg-emerald-400/10 px-2.5 py-0.5 text-xs font-medium text-emerald-300">Active</span>
                  </td>
                  <td class="px-3 py-4 text-slate-300">1 day ago</td>
                  <td class="py-4 pl-3 pr-6">
                    <div class="flex justify-end gap-2">
                      <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
                      <button class="text-slate-400 hover:text-slate-300">View</button>
                      <button class="text-rose-400 hover:text-rose-300">Delete</button>
                    </div>
                  </td>
                    </tr>
       <!-- Row 5 -->
         <tr>
                  <td class="whitespace-nowrap py-4 pl-6 pr-3">
                    <div class="flex items-center gap-4">
                      <input type="checkbox" class="h-4 w-4 rounded border-slate-700 bg-[#0f1625] text-indigo-500">
                      <img class="h-10 w-10 rounded-full" src="http://static.photos/people/200x200/1" alt="">
                      <div>
                        <div class="font-medium">Abng Muiz</div>
                        <div class="text-slate-400">ID: FL-005</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 py-4 text-slate-300">abng.muiz@example.com</td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full border border-indigo-400/40 bg-indigo-400/10 px-2.5 py-0.5 text-xs font-medium text-indigo-300">Admin</span>
                  </td>
                  <td class="px-3 py-4">
                    <span class="inline-flex items-center rounded-full bg-emerald-400/10 px-2.5 py-0.5 text-xs font-medium text-emerald-300">Active</span>
                  </td>
                  <td class="px-3 py-4 text-slate-300">12 hours ago</td>
                  <td class="py-4 pl-3 pr-6">
                    <div class="flex justify-end gap-2">
                      <button class="text-indigo-400 hover:text-indigo-300">Edit</button>
                      <button class="text-slate-400 hover:text-slate-300">View</button>
                      <button class="text-rose-400 hover:text-rose-300">Delete</button>
                    </div>
                  </td>
                    </tr>
                <!-- …clone rows 2–5 using your data… -->

              </tbody>
            </table>
          </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex items-center justify-between text-sm text-slate-300">
          <p>Showing <span class="font-semibold">1</span> to <span class="font-semibold">5</span> of <span class="font-semibold">24</span> results</p>
          <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm">
            <a href="#" class="relative inline-flex items-center rounded-l-md border border-slate-700 bg-[#0f1625] px-2 py-2 hover:bg-white/5">‹</a>
            <a href="#" class="relative inline-flex items-center border border-indigo-500 bg-indigo-500/10 px-3 py-2 text-indigo-300">1</a>
            <a href="#" class="relative inline-flex items-center border border-slate-700 bg-[#0f1625] px-3 py-2 hover:bg-white/5">2</a>
            <a href="#" class="relative hidden md:inline-flex items-center border border-slate-700 bg-[#0f1625] px-3 py-2 hover:bg-white/5">3</a>
            <span class="relative inline-flex items-center border border-slate-700 bg-[#0f1625] px-3 py-2">…</span>
            <a href="#" class="relative hidden md:inline-flex items-center border border-slate-700 bg-[#0f1625] px-3 py-2 hover:bg-white/5">8</a>
            <a href="#" class="relative inline-flex items-center rounded-r-md border border-slate-700 bg-[#0f1625] px-2 py-2 hover:bg-white/5">›</a>
          </nav>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
