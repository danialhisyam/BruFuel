<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>BruFuel • Dashboard</title>

  <!-- Tailwind (one time only) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    :root { color-scheme: dark; }
    body     { background:#0b1220; }           /* page bg (dark blue/black) */
    .sidebar { background:#0f1625; }           /* sidebar bg */
    .card    { background:#141c2b; border-color:#1f2937; } /* card/border */

    .order-card:hover { transform: translateY(-2px); box-shadow: 0 10px 25px -5px rgba(0,0,0,.1); }
    .map-container { height: 400px; background-image:url('http://static.photos/indoor/640x360/42'); background-size:cover; background-position:center; }
    @keyframes pulse { 0%{ box-shadow:0 0 0 0 rgba(59,130,246,.4);} 70%{ box-shadow:0 0 0 10px rgba(59,130,246,0);} 100%{ box-shadow:0 0 0 0 rgba(59,130,246,0);} }
    .pulse-animation { animation:pulse 2s infinite; }
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

      <!-- CONTENT WRAPPER -->
      <div class="max-w-7xl mx-auto px-4 lg:px-6 py-6">
        <!-- Grid: left takes 2/3, right takes 1/3 -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <!-- LEFT COLUMN -->
          <section class="lg:col-span-2 space-y-6 min-w-0">
            <!-- Current Ride -->
            <div class="bg-white/5 card rounded-lg shadow overflow-hidden">
              <div class="p-4 border-b border-gray-700">
                <h2 class="text-lg font-semibold text-white">Current Ride</h2>
              </div>
              <div class="p-4">
                <div class="flex items-start gap-4">
                  <div class="relative">
                    <div class="w-12 h-12 rounded-full bg-blue-500/20 flex items-center justify-center">
                      <i data-feather="user" class="w-5 h-5 text-blue-400"></i>
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-[#141c2b]"></div>
                  </div>
                  <div class="flex-1 min-w-0">
                    <div class="flex justify-between">
                      <h3 class="font-medium text-white truncate">Sarah Johnson</h3>
                      <span class="text-sm bg-green-900/40 text-green-300 px-2 py-1 rounded-full">In Progress</span>
                    </div>
                    <div class="mt-2 space-y-2">
                      <div class="flex items-start gap-2">
                        <div class="mt-1 w-4 h-4 rounded-full bg-blue-500 flex-shrink-0"></div>
                        <p class="text-sm text-slate-300">123 Main St, Downtown</p>
                      </div>
                      <div class="flex items-start gap-2">
                        <div class="mt-1 w-4 h-4 rounded-full bg-purple-500 flex-shrink-0"></div>
                        <p class="text-sm text-slate-300">456 Park Ave, Uptown</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-4 pt-4 border-t border-gray-700 flex justify-between items-center">
                  <div>
                    <p class="text-sm text-slate-400">Estimated Fare</p>
                    <p class="text-lg font-semibold text-white">$18.75</p>
                  </div>
                  <div class="flex gap-2">
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center gap-2 transition">
                      <i data-feather="phone" class="w-4 h-4"></i>
                      <span>Call</span>
                    </button>
                    <button class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg flex items-center gap-2 transition">
                      <i data-feather="message-square" class="w-4 h-4"></i>
                      <span>Message</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Available Orders -->
            <div class="bg-white/5 card rounded-lg shadow overflow-hidden">
              <div class="p-4 border-b border-gray-700 flex justify-between items-center">
                <h2 class="text-lg font-semibold text-white">Available Orders</h2>
                <button class="text-sm text-blue-400 hover:text-blue-300 flex items-center gap-1">
                  <i data-feather="refresh-cw" class="w-4 h-4"></i><span>Refresh</span>
                </button>
              </div>

              <div class="divide-y divide-gray-700">
                <!-- Order 1 -->
                <div class="p-4 hover:bg-white/5 transition order-card cursor-pointer">
                  <div class="flex items-start gap-4">
                    <div class="relative">
                      <div class="w-12 h-12 rounded-full bg-gray-700 grid place-items-center">
                        <i data-feather="user" class="w-5 h-5 text-gray-400"></i>
                      </div>
                      <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-[#141c2b]"></div>
                    </div>
                    <div class="flex-1 min-w-0">
                      <div class="flex justify-between">
                        <h3 class="font-medium text-white truncate">Michael Brown</h3>
                        <span class="text-xs bg-yellow-900/40 text-yellow-300 px-2 py-1 rounded-full">5 min away</span>
                      </div>
                      <div class="mt-2 space-y-2">
                        <div class="flex items-start gap-2">
                          <div class="mt-1 w-4 h-4 rounded-full bg-blue-500 flex-shrink-0"></div>
                          <p class="text-sm text-slate-300">789 Elm St, Midtown</p>
                        </div>
                        <div class="flex items-start gap-2">
                          <div class="mt-1 w-4 h-4 rounded-full bg-purple-500 flex-shrink-0"></div>
                          <p class="text-sm text-slate-300">101 Oak Ave, Suburb</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 flex justify-between items-center">
                    <div>
                      <p class="text-sm text-slate-400">Estimated Fare</p>
                      <p class="text-lg font-semibold text-white">$22.50</p>
                    </div>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center gap-2 transition">
                      <i data-feather="check" class="w-4 h-4"></i><span>Accept</span>
                    </button>
                  </div>
                </div>

                <!-- Order 2 -->
                <div class="p-4 hover:bg-white/5 transition order-card cursor-pointer">
                  <div class="flex items-start gap-4">
                    <div class="relative">
                      <div class="w-12 h-12 rounded-full bg-gray-700 grid place-items-center">
                        <i data-feather="user" class="w-5 h-5 text-gray-400"></i>
                      </div>
                      <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-gray-400 rounded-full border-2 border-[#141c2b]"></div>
                    </div>
                    <div class="flex-1 min-w-0">
                      <div class="flex justify-between">
                        <h3 class="font-medium text-white truncate">Emily Wilson</h3>
                        <span class="text-xs bg-yellow-900/40 text-yellow-300 px-2 py-1 rounded-full">8 min away</span>
                      </div>
                      <div class="mt-2 space-y-2">
                        <div class="flex items-start gap-2">
                          <div class="mt-1 w-4 h-4 rounded-full bg-blue-500 flex-shrink-0"></div>
                          <p class="text-sm text-slate-300">202 Pine St, Downtown</p>
                        </div>
                        <div class="flex items-start gap-2">
                          <div class="mt-1 w-4 h-4 rounded-full bg-purple-500 flex-shrink-0"></div>
                          <p class="text-sm text-slate-300">303 Maple Dr, Uptown</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 flex justify-between items-center">
                    <div>
                      <p class="text-sm text-slate-400">Estimated Fare</p>
                      <p class="text-lg font-semibold text-white">$15.25</p>
                    </div>
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center gap-2 transition">
                      <i data-feather="check" class="w-4 h-4"></i><span>Accept</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- RIGHT COLUMN -->
          <aside class="space-y-6 min-w-0">
            <!-- Map -->
            <div class="card rounded-lg shadow overflow-hidden">
              <div class="p-4 border-b border-gray-700">
                <h2 class="text-lg font-semibold text-white">Live Location</h2>
              </div>
              <div class="map-container relative">
                <div class="absolute top-4 right-4 z-10">
                  <button class="p-2 bg-[#141c2b] rounded-full shadow">
                    <i data-feather="maximize" class="w-4 h-4 text-slate-300"></i>
                  </button>
                </div>
                <div class="absolute bottom-4 left-4 z-10">
                  <div class="rounded-full shadow p-3 pulse-animation bg-[#141c2b]">
                    <i data-feather="navigation" class="w-5 h-5 text-blue-400"></i>
                  </div>
                </div>
              </div>
            </div>

            <!-- Driver Status -->
            <div class="card rounded-lg shadow overflow-hidden">
              <div class="p-4 border-b border-gray-700">
                <h2 class="text-lg font-semibold text-white">Driver Status</h2>
              </div>
              <div class="p-4 space-y-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <div class="p-2 rounded-full bg-green-900/40">
                      <i data-feather="check-circle" class="w-5 h-5 text-green-400"></i>
                    </div>
                    <div>
                      <p class="text-sm font-medium text-slate-300">Online Status</p>
                      <p class="text-xs text-slate-400">You're currently online</p>
                    </div>
                  </div>
                  <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" checked class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-700 rounded-full peer peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full"></div>
                  </label>
                </div>

                <div class="flex items-center gap-3">
                  <div class="p-2 rounded-full bg-blue-900/40">
                    <i data-feather="car" class="w-5 h-5 text-blue-400"></i>
                  </div>
                  <div>
                    <p class="text-sm font-medium text-slate-300">Vehicle Info</p>
                    <p class="text-xs text-slate-400">Toyota Camry • ABC-1234</p>
                  </div>
                </div>

                <div class="flex items-center gap-3">
                  <div class="p-2 rounded-full bg-purple-900/40">
                    <i data-feather="clock" class="w-5 h-5 text-purple-400"></i>
                  </div>
                  <div>
                    <p class="text-sm font-medium text-slate-300">Shift Duration</p>
                    <p class="text-xs text-slate-400">4 hours 22 minutes</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick Actions -->
            <div class="card rounded-lg shadow overflow-hidden">
              <div class="p-4 border-b border-gray-700">
                <h2 class="text-lg font-semibold text-white">Quick Actions</h2>
              </div>
              <div class="p-4 grid grid-cols-2 gap-3">
                <button class="p-3 bg-gray-800 hover:bg-gray-700 rounded-lg flex flex-col items-center transition">
                  <div class="p-2 rounded-full bg-red-900/40 mb-2">
                    <i data-feather="alert-octagon" class="w-5 h-5 text-red-400"></i>
                  </div>
                  <span class="text-sm font-medium text-slate-300">Emergency</span>
                </button>
                <button class="p-3 bg-gray-800 hover:bg-gray-700 rounded-lg flex flex-col items-center transition">
                  <div class="p-2 rounded-full bg-yellow-900/40 mb-2">
                    <i data-feather="coffee" class="w-5 h-5 text-yellow-400"></i>
                  </div>
                  <span class="text-sm font-medium text-slate-300">Break</span>
                </button>
                <button class="p-3 bg-gray-800 hover:bg-gray-700 rounded-lg flex flex-col items-center transition">
                  <div class="p-2 rounded-full bg-green-900/40 mb-2">
                    <i data-feather="home" class="w-5 h-5 text-green-400"></i>
                  </div>
                  <span class="text-sm font-medium text-slate-300">Go Offline</span>
                </button>
                <button class="p-3 bg-gray-800 hover:bg-gray-700 rounded-lg flex flex-col items-center transition">
                  <div class="p-2 rounded-full bg-blue-900/40 mb-2">
                    <i data-feather="settings" class="w-5 h-5 text-blue-400"></i>
                  </div>
                  <span class="text-sm font-medium text-slate-300">Settings</span>
                </button>
              </div>
            </div>
          </aside>
        </div>
      </div>

      <!-- Mobile bottom nav -->
      <nav class="fixed bottom-0 left-0 right-0 bg-[#141c2b] border-t border-slate-800 shadow-lg lg:hidden">
        <div class="flex justify-around items-center h-16">
          <a href="#" class="flex flex-col items-center p-2 text-blue-400"><i data-feather="home" class="w-5 h-5"></i><span class="text-xs mt-1">Home</span></a>
          <a href="#" class="flex flex-col items-center p-2 text-slate-400"><i data-feather="map" class="w-5 h-5"></i><span class="text-xs mt-1">Map</span></a>
          <a href="#" class="flex flex-col items-center p-2 text-slate-400"><i data-feather="list" class="w-5 h-5"></i><span class="text-xs mt-1">Orders</span></a>
          <a href="#" class="flex flex-col items-center p-2 text-slate-400"><i data-feather="user" class="w-5 h-5"></i><span class="text-xs mt-1">Profile</span></a>
        </div>
      </nav>
    </main>
  </div>

  <!-- Feather (load once) -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      feather.replace();

      const html = document.documentElement;
      const themeToggle = document.getElementById('themeToggle');
      themeToggle?.addEventListener('click', () => {
        html.classList.toggle('dark');
        themeToggle.innerHTML = html.classList.contains('dark')
          ? '<i data-feather="sun" class="w-5 h-5 text-yellow-300"></i>'
          : '<i data-feather="moon" class="w-5 h-5 text-yellow-300"></i>';
        feather.replace();
      });
    });
  </script>
</body>
</html>
