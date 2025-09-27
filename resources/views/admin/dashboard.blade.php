<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BruFuel | Fleet Management</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Blackish-blue palette
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50:  '#eaf1ff',
              100: '#cfdcf9',
              200: '#a5b8e4',
              300: '#7a94cf',
              400: '#5877bf',
              500: '#3c5aa9',
              600: '#2b4387',
              700: '#1f3267',
              800: '#142246',   /* blackish blue used for sidebar/header accents */
              900: '#0b1324'    /* deepest background */
            },
            ink: {
              950: '#0a0f1d'
            }
          },
          boxShadow: {
            soft: '0 10px 15px -3px rgba(0,0,0,.15), 0 4px 6px -2px rgba(0,0,0,.08)'
          }
        }
      }
    }
  </script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    body { font-family: 'Inter', sans-serif; }
    .sidebar { transition: all .3s ease; }
    .metric-card:hover { transform: translateY(-2px); box-shadow: var(--tw-shadow), 0 10px 15px -3px rgba(0,0,0,.08); }
    .nav-item.active { border-left: 4px solid rgb(60 90 169); } /* brand-500 */
    .trend-up { animation: pulseUp 2s infinite; }
    @keyframes pulseUp { 0%,100%{ color:#16a34a } 50%{ color:#86efac } }
  </style>

  <!-- Feather Icons -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</head>

<body class="bg-ink-950 h-full flex text-gray-100">
  <!-- Sidebar -->
  <aside class="sidebar w-64 min-h-screen fixed hidden md:block bg-brand-800 text-gray-100 shadow-lg">
    <div class="p-6">
      <div class="flex items-center space-x-3">
        <div class="bg-brand-500 p-2 rounded-lg">
          <i data-feather="truck" class="text-white"></i>
        </div>
        <h1 class="text-xl font-bold">BruFuel</h1>
      </div>
    </div>

    <nav class="mt-6">
      <div class="px-6">
        <p class="text-xs font-semibold uppercase tracking-wider text-gray-300">Navigation</p>
      </div>
      <ul class="mt-3">
        <li>
          <a href="#" class="nav-item active flex items-center px-6 py-3 text-sm font-medium bg-brand-700/40 hover:bg-brand-700/60">
            <i data-feather="home" class="mr-3 text-brand-200"></i> Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
            <i data-feather="users" class="mr-3 text-gray-300"></i> Users
            <span class="ml-auto bg-brand-700/50 text-brand-100 text-xs font-medium px-2 py-0.5 rounded-full">12 new</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
            <i data-feather="user-check" class="mr-3 text-gray-300"></i> Drivers
            <span class="ml-auto bg-emerald-700/30 text-emerald-200 text-xs font-medium px-2 py-0.5 rounded-full">24/36</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
            <i data-feather="package" class="mr-3 text-gray-300"></i> Orders
            <span class="ml-auto bg-amber-700/30 text-amber-200 text-xs font-medium px-2 py-0.5 rounded-full">47 today</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
            <i data-feather="credit-card" class="mr-3 text-gray-300"></i> Payments
            <span class="ml-auto bg-rose-700/30 text-rose-200 text-xs font-medium px-2 py-0.5 rounded-full">3 pending</span>
          </a>
        </li>
      </ul>

      <div class="absolute bottom-0 w-full p-6">
        <div class="flex items-center space-x-4">
          <div class="w-10 h-10 rounded-full bg-brand-700 flex items-center justify-center">
            <i data-feather="user" class="text-brand-100"></i>
          </div>
          <div>
            <p class="text-sm font-medium">Admin User</p>
            <p class="text-xs text-gray-300">Administrator</p>
          </div>
        </div>
      </div>
    </nav>
  </aside>

  <!-- Mobile Header -->
  <header class="md:hidden fixed top-0 left-0 right-0 bg-brand-800 text-gray-100 shadow-sm z-10">
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center space-x-3">
        <div class="bg-brand-500 p-2 rounded-lg">
          <i data-feather="truck" class="text-white"></i>
        </div>
        <h1 class="text-xl font-bold">BruFuel</h1>
      </div>
      <button id="mobile-menu-button" class="text-gray-200">
        <i data-feather="menu"></i>
      </button>
    </div>
  </header>

  <!-- Mobile Sidebar Overlay -->
  <div id="mobile-sidebar" class="fixed inset-0 bg-black/50 z-20 hidden md:hidden">
    <div class="absolute left-0 top-0 bottom-0 w-64 bg-brand-800 shadow-xl">
      <div class="p-4 flex justify-end">
        <button id="close-mobile-menu" class="text-gray-200">
          <i data-feather="x"></i>
        </button>
      </div>
      <nav class="mt-2">
        <ul>
          <li>
            <a href="#" class="nav-item active flex items-center px-6 py-3 text-sm font-medium bg-brand-700/40">
              <i data-feather="home" class="mr-3 text-brand-200"></i> Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
              <i data-feather="users" class="mr-3 text-gray-300"></i> Users
              <span class="ml-auto bg-brand-700/50 text-brand-100 text-xs font-medium px-2 py-0.5 rounded-full">12 new</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
              <i data-feather="user-check" class="mr-3 text-gray-300"></i> Drivers
              <span class="ml-auto bg-emerald-700/30 text-emerald-200 text-xs font-medium px-2 py-0.5 rounded-full">24/36</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
              <i data-feather="package" class="mr-3 text-gray-300"></i> Orders
              <span class="ml-auto bg-amber-700/30 text-amber-200 text-xs font-medium px-2 py-0.5 rounded-full">47 today</span>
            </a>
          </li>
          <li>
            <a href="#" class="nav-item flex items-center px-6 py-3 text-sm font-medium hover:bg-brand-700/40">
              <i data-feather="credit-card" class="mr-3 text-gray-300"></i> Payments
              <span class="ml-auto bg-rose-700/30 text-rose-200 text-xs font-medium px-2 py-0.5 rounded-full">3 pending</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Main Content -->
  <main class="flex-1 md:ml-64">
    <div class="pt-6 pb-12 px-4 sm:px-6 md:px-8">
      <div class="md:hidden h-16"></div>

      <div class="mb-8">
        <h2 class="text-2xl font-bold text-white">Dashboard Overview</h2>
        <p class="text-gray-300">Welcome back! Here's what's happening with your fleet today.</p>
      </div>

      <!-- Metrics -->
      <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Total Users -->
        <div class="metric-card bg-brand-800/40 backdrop-blur rounded-lg border border-white/10 p-6 shadow-soft">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-300">Total Users</p>
              <p class="mt-1 text-3xl font-semibold text-white">1,248</p>
            </div>
            <div class="p-3 rounded-full bg-brand-700 text-brand-100">
              <i data-feather="users"></i>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <span class="text-emerald-400 flex items-center trend-up">
              <i data-feather="trending-up" class="mr-1"></i> 12.5%
            </span>
            <span class="text-gray-400 text-sm ml-2">vs last month</span>
          </div>
          <div class="mt-2 h-1 w-full bg-white/10 rounded-full overflow-hidden">
            <div class="h-full bg-brand-400" style="width:75%"></div>
          </div>
        </div>

        <!-- Active Drivers -->
        <div class="metric-card bg-brand-800/40 backdrop-blur rounded-lg border border-white/10 p-6 shadow-soft">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-300">Active Drivers</p>
              <p class="mt-1 text-3xl font-semibold text-white">24</p>
            </div>
            <div class="p-3 rounded-full bg-emerald-700/40 text-emerald-200">
              <i data-feather="user-check"></i>
            </div>
          </div>
          <div class="mt-4 flex items-center text-emerald-300">
            <i data-feather="check-circle" class="mr-1"></i> 67% available
          </div>
          <div class="mt-2 flex space-x-1">
            <div class="h-1 flex-1 bg-emerald-400 rounded-full"></div>
            <div class="h-1 flex-1 bg-emerald-400 rounded-full"></div>
            <div class="h-1 flex-1 bg-emerald-400 rounded-full"></div>
            <div class="h-1 flex-1 bg-white/10 rounded-full"></div>
            <div class="h-1 flex-1 bg-white/10 rounded-full"></div>
          </div>
        </div>

        <!-- Today's Orders -->
        <div class="metric-card bg-brand-800/40 backdrop-blur rounded-lg border border-white/10 p-6 shadow-soft">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-300">Today's Orders</p>
              <p class="mt-1 text-3xl font-semibold text-white">47</p>
            </div>
            <div class="p-3 rounded-full bg-amber-700/30 text-amber-200">
              <i data-feather="package"></i>
            </div>
          </div>
          <div class="mt-4 flex items-center">
            <span class="text-emerald-400 flex items-center trend-up">
              <i data-feather="trending-up" class="mr-1"></i> 8.2%
            </span>
            <span class="text-gray-400 text-sm ml-2">vs yesterday</span>
          </div>
          <div class="mt-2 text-sm text-gray-300">Peak: 2:00 PM</div>
        </div>

        <!-- Payment Received -->
        <div class="metric-card bg-brand-800/40 backdrop-blur rounded-lg border border-white/10 p-6 shadow-soft">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-300">Payment Received</p>
              <p class="mt-1 text-3xl font-semibold text-white">$8,742</p>
            </div>
            <div class="p-3 rounded-full bg-violet-700/30 text-violet-200">
              <i data-feather="dollar-sign"></i>
            </div>
          </div>
          <div class="mt-4 space-y-1 text-sm">
            <div class="flex justify-between text-gray-300"><span>Credit Card</span><span class="font-semibold text-white">$5,240</span></div>
            <div class="flex justify-between text-gray-300"><span>Digital Wallet</span><span class="font-semibold text-white">$2,156</span></div>
            <div class="flex justify-between text-gray-300"><span>Cash</span><span class="font-semibold text-white">$1,346</span></div>
          </div>
        </div>
      </section>

      <!-- Recent Activity -->
      <section class="mt-12">
        <div class="flex items-center justify-between mb-6">
          <h3 class="text-lg font-medium text-white">Recent Activity</h3>
          <button class="text-sm font-medium text-brand-300 hover:text-brand-200">View All</button>
        </div>

        <div class="bg-brand-800/40 border border-white/10 rounded-lg overflow-hidden shadow-soft">
          <div class="divide-y divide-white/10">
            <div class="p-4 hover:bg-brand-700/30 transition-colors">
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-emerald-700/30 p-2 rounded-full text-emerald-200">
                  <i data-feather="check-circle" class="w-5 h-5"></i>
                </div>
                <div class="ml-3 flex-1">
                  <p class="text-sm font-medium text-white">Order #FD-2874 completed</p>
                  <p class="text-sm text-gray-300">Driver: Michael Johnson • 12 minutes ago</p>
                </div>
                <div class="text-sm text-gray-200">$42.50</div>
              </div>
            </div>

            <div class="p-4 hover:bg-brand-700/30 transition-colors">
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-brand-700 p-2 rounded-full text-brand-100">
                  <i data-feather="truck" class="w-5 h-5"></i>
                </div>
                <div class="ml-3 flex-1">
                  <p class="text-sm font-medium text-white">Driver assigned to Order #FD-2875</p>
                  <p class="text-sm text-gray-300">Driver: Sarah Williams • 24 minutes ago</p>
                </div>
                <div class="text-sm text-gray-200">$68.00</div>
              </div>
            </div>

            <div class="p-4 hover:bg-brand-700/30 transition-colors">
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-amber-700/30 p-2 rounded-full text-amber-200">
                  <i data-feather="clock" class="w-5 h-5"></i>
                </div>
                <div class="ml-3 flex-1">
                  <p class="text-sm font-medium text-white">Order #FD-2876 delayed</p>
                  <p class="text-sm text-gray-300">ETA updated • 41 minutes ago</p>
                </div>
                <div class="text-sm text-gray-200">$—</div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>

  <script>
    // Feather icons + simple mobile sidebar toggles
    feather.replace();

    const mobileBtn = document.getElementById('mobile-menu-button');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const closeMobile = document.getElementById('close-mobile-menu');

    mobileBtn?.addEventListener('click', () => mobileSidebar.classList.remove('hidden'));
    closeMobile?.addEventListener('click', () => mobileSidebar.classList.add('hidden'));
    mobileSidebar?.addEventListener('click', (e) => {
      if (e.target === mobileSidebar) mobileSidebar.classList.add('hidden');
    });
  </script>
</body>
</html>
