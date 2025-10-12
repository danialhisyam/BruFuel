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
        <div class="mx-auto max-w-7xl px-6 py-4 flex items-center justify-between">
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

    <!-- Main -->
    <main class="flex-1 p-6 md:p-8">
      <div class="mb-5 flex items-center justify-between">
        <div>
          <h1 class="text-2xl font-bold">Dashboard Overview</h1>
          <p class="text-sm text-slate-400">Welcome back! Here's what's happening with your fleet today.</p>
        </div>
      </div>

      <!-- KPI cards -->
      <section class="grid gap-4 md:grid-cols-4">
        <!-- Users -->
        <div class="card rounded-xl border p-5">
          <div class="flex items-start justify-between">
            <p class="text-sm text-slate-400">Total Users</p>
            <div class="grid h-9 w-9 place-items-center rounded-lg bg-indigo-500/15">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-300" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5z"/><path d="M12 14c-5 0-9 2.5-9 5v1h18v-1c0-2.5-4-5-9-5z"/>
              </svg>
            </div>
          </div>
          <p class="mt-3 text-3xl font-semibold">1,248</p>
          <p class="mt-1 text-xs text-emerald-400">▲ 12.5% <span class="text-slate-400">vs last month</span></p>
          <div class="mt-3 h-1.5 w-full overflow-hidden rounded-full bg-slate-800">
            <div class="h-full bg-emerald-500" style="width:65%"></div>
          </div>
        </div>

        <!-- Drivers -->
        <div class="card rounded-xl border p-5">
          <div class="flex items-start justify-between">
            <p class="text-sm text-slate-400">Active Drivers</p>
            <div class="grid h-9 w-9 place-items-center rounded-lg bg-green-500/15">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-300" viewBox="0 0 24 24" fill="currentColor">
                <path d="M10 17l-3.5-3.5 1.4-1.4L10 14.2l6.7-6.7 1.4 1.4z"/>
              </svg>
            </div>
          </div>
          <p class="mt-3 text-3xl font-semibold">24</p>
          <p class="mt-1 text-xs text-emerald-400">67% available</p>
          <div class="mt-3 h-1.5 w-full overflow-hidden rounded-full bg-slate-800">
            <div class="h-full bg-emerald-500" style="width:67%"></div>
          </div>
        </div>

        <!-- Orders -->
        <div class="card rounded-xl border p-5">
          <div class="flex items-start justify-between">
            <p class="text-sm text-slate-400">Today’s Orders</p>
            <div class="grid h-9 w-9 place-items-center rounded-lg bg-yellow-500/15">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 7h18v13H3z"/><path d="M3 7l2-4h14l2 4"/>
              </svg>
            </div>
          </div>
          <p class="mt-3 text-3xl font-semibold">47</p>
          <p class="mt-1 text-xs text-emerald-400">▲ 8.2% <span class="text-slate-400">vs yesterday</span></p>
          <p class="mt-1 text-xs text-slate-400">Peak: 2:00 PM</p>
        </div>

        <!-- Revenue -->
        <div class="card rounded-xl border p-5">
          <div class="flex items-start justify-between">
            <p class="text-sm text-slate-400">Payment Received</p>
            <div class="grid h-9 w-9 place-items-center rounded-lg bg-purple-500/15">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-300" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 1a11 11 0 1 0 11 11A11.012 11.012 0 0 0 12 1zm1 17h-2v-2h2a2 2 0 0 0 0-4h-2a4 4 0 0 1 0-8h2v2h-2a2 2 0 0 0 0 4h2a4 4 0 0 1 0 8z"/>
              </svg>
            </div>
          </div>
          <p class="mt-3 text-3xl font-semibold">$0</p>
          <div class="mt-4 space-y-1.5 text-sm">
            <div class="flex justify-between text-slate-300"><span>Credit Card</span><span>$0</span></div>
            <div class="flex justify-between text-slate-300"><span>Digital Wallet</span><span>$0</span></div>
            <div class="flex justify-between text-slate-300"><span>Cash</span><span>$0</span></div>
          </div>
        </div>
      </section>

      <!-- Recent Activity -->
      <section class="mt-6 card rounded-xl border p-5">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="text-lg font-semibold">Recent Activity</h2>
          <a class="text-sm text-indigo-300 hover:text-indigo-200" href="/admin/orders">View All</a>
        </div>

        <div class="divide-y divide-slate-800">
          <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-4">
              <div class="grid h-10 w-10 place-items-center rounded-lg bg-white/5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-400" viewBox="0 0 24 24" fill="currentColor"><path d="M10 17l-4-4 1.4-1.4L10 14.2l6.7-6.7 1.4 1.4z"/></svg>
              </div>
              <div>
                <p class="font-medium">Order #FD-2874 completed</p>
                <p class="text-sm text-slate-400">Driver: Michael Johnson • 12 minutes ago</p>
              </div>
            </div>
            <p class="font-medium">$42.50</p>
          </div>

          <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-4">
              <div class="grid h-10 w-10 place-items-center rounded-lg bg-white/5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5z"/><path d="M12 14c-5 0-9 2.5-9 5v1h18v-1c0-2.5-4-5-9-5z"/></svg>
              </div>
              <div>
                <p class="font-medium">Driver assigned to Order #FD-2875</p>
                <p class="text-sm text-slate-400">Driver: Sarah Williams • 24 minutes ago</p>
              </div>
            </div>
            <p class="font-medium">$68.00</p>
          </div>

          <div class="flex items-center justify-between py-4">
            <div class="flex items-center gap-4">
              <div class="grid h-10 w-10 place-items-center rounded-lg bg-white/5">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 8v4l3 3"/><path d="M21 12A9 9 0 1 1 12 3a9 9 0 0 1 9 9z"/></svg>
              </div>
              <div>
                <p class="font-medium">Order #FD-2876 delayed</p>
                <p class="text-sm text-slate-400">ETA updated • 41 minutes ago</p>
              </div>
            </div>
            <p class="text-slate-500">—</p>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
