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
          <li class="rounded-lg text-slate-300 hover:bg-white/5">
            <a class="flex items-center justify-between px-3 py-2" href="/admin/drivers">
              <span class="flex items-center gap-3">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-slate-500"></span>
                Drivers

                   
     <!-- ...other items... -->
            </a>
          </li>
          <li class="rounded-lg bg-indigo-500/15 text-white">
            <a class="flex items-center justify-between px-3 py-2" href="/admin/orders">
              <span class="flex items-center gap-3">
                <span class="inline-block h-1.5 w-1.5 rounded-full bg-indigo-400"></span>
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



    <!-- Main -->
    <main class="flex-1 p-6 md:p-8">
      <div class="mb-5 flex items-center justify-between">
      
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
              <i data-feather="bell"></i>
            </button>
          </div>
        </div>
        <h1 class="text-2xl font-bold">Payment Overview</h1>
        <p class="text-sm text-slate-400">Welcome back! Here's what's happening with your payments today.</p>

      <section class="p-6 bg-[#0b1321] min-h-screen text-white font-sans">

  <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- LEFT SIDE: Revenue Summary -->
    <div class="space-y-6">
      <!-- Total Revenue Card -->
      <div class="bg-[#2b2db8] rounded-xl p-6 text-center shadow-md hover:scale-[1.01] transition">
        <h3 class="text-white/80 font-medium">Total Revenue</h3>
        <p class="text-5xl font-extrabold mt-2">B$8,000</p>
      </div>

      <!-- Stats Row -->
      <div class="grid grid-cols-3 gap-4">
        <div class="bg-[#3c3ebf] rounded-xl p-4 text-center">
          <h4 class="text-sm text-white/70">Total Transaction</h4>
          <p class="text-3xl font-bold mt-1">100</p>
        </div>
        <div class="bg-[#3c3ebf] rounded-xl p-4 text-center">
          <h4 class="text-sm text-white/70">Pending Payments</h4>
          <p class="text-3xl font-bold mt-1">4</p>
        </div>
        <div class="bg-[#3c3ebf] rounded-xl p-4 text-center">
          <h4 class="text-sm text-white/70">Failed Payments</h4>
          <p class="text-3xl font-bold mt-1">6</p>
        </div>
      </div>

      <!-- Revenue Chart -->
      <div class="bg-[#1c2240] rounded-xl p-5">
        <h4 class="text-sm text-white/70 mb-3">Revenue (B$)</h4>
        <canvas id="revenueChart" height="150"></canvas>
      </div>
    </div>

    <!-- RIGHT SIDE: Transactions Table -->
    <div class="lg:col-span-2">
      <div class="bg-[#141a30] rounded-xl shadow-md overflow-hidden">
        <div class="bg-[#1c2442] px-6 py-3 font-semibold text-lg border-b border-gray-700 flex justify-between items-center">
          <span>Transaction</span>
          <input
            type="text"
            id="searchInput"
            placeholder="Search..."
            class="bg-[#0b1321] text-white px-3 py-2 rounded-md text-sm border border-gray-700 focus:ring focus:ring-indigo-500/40"
            onkeyup="filterTable()"
          />
        </div>

        <table class="w-full text-left text-sm">
          <thead class="bg-[#1c2442] text-white/70">
            <tr>
              <th class="py-3 px-6">NAME / ORDER ID</th>
              <th class="py-3 px-6">DATE / TIME</th>
              <th class="py-3 px-6">AMOUNT / PROVIDER</th>
              <th class="py-3 px-6 text-right">STATUS</th>
            </tr>
          </thead>

          <tbody id="transactionTable">
            @php
              $transactions = [
                ['name'=>'ADIB','id'=>875,'date'=>'Oct 10, 2025','time'=>'17:53:01 PM','amount'=>'B$30.00','provider'=>'BAIDURI','status'=>'Pending'],
                ['name'=>'MOHAMMAD ALI','id'=>236,'date'=>'Oct 10, 2025','time'=>'12:05:58 PM','amount'=>'B$40.00','provider'=>'BIBD','status'=>'Paid'],
                ['name'=>'IRYNA','id'=>101,'date'=>'Oct 09, 2025','time'=>'18:12:06 PM','amount'=>'B$26.00','provider'=>'TAIB','status'=>'Paid'],
                ['name'=>'NADEERAH','id'=>641,'date'=>'Oct 08, 2025','time'=>'15:10:01 PM','amount'=>'B$30.00','provider'=>'BAIDURI','status'=>'Fail'],
                ['name'=>'AFIQ','id'=>522,'date'=>'Oct 07, 2025','time'=>'10:52:57 PM','amount'=>'B$20.00','provider'=>'CASH','status'=>'Paid'],
                ['name'=>'FAIZ','id'=>465,'date'=>'Oct 07, 2025','time'=>'13:45:15 PM','amount'=>'B$30.00','provider'=>'TAIB','status'=>'Paid'],
                ['name'=>'SARAH','id'=>323,'date'=>'Oct 06, 2025','time'=>'18:20:00 PM','amount'=>'B$20.00','provider'=>'BIBD','status'=>'Fail'],
                ['name'=>'MOHAMMAD SAFWAN','id'=>205,'date'=>'Oct 05, 2025','time'=>'10:02:21 PM','amount'=>'B$40.00','provider'=>'BIBD','status'=>'Paid']
              ];
            @endphp

            @foreach($transactions as $t)
              @php
                $color = match($t['status']) {
                  'Paid' => 'text-green-400 bg-green-500/10',
                  'Pending' => 'text-yellow-400 bg-yellow-500/10',
                  'Fail' => 'text-red-400 bg-red-500/10',
                  default => 'text-gray-300 bg-gray-700/10'
                };
              @endphp
              <tr class="border-t border-gray-800 hover:bg-[#1f2a49] transition">
                <td class="py-3 px-6 font-semibold">
                  {{ $t['name'] }}<br>
                  <span class="text-xs text-gray-400">ID: {{ $t['id'] }}</span>
                </td>
                <td class="py-3 px-6">
                  {{ $t['date'] }}<br>
                  <span class="text-xs text-gray-400">{{ $t['time'] }}</span>
                </td>
                <td class="py-3 px-6">
                  {{ $t['amount'] }}<br>
                  <span class="text-xs text-gray-400">{{ $t['provider'] }}</span>
                </td>
                <td class="py-3 px-6 text-right">
                  <span class="px-3 py-1 rounded-full text-sm font-medium {{ $color }}">
                    {{ $t['status'] }}
                  </span>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('revenueChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct'],
        datasets: [{
          label: 'Revenue (B$)',
          data: [100,180,210,190,220,160,200,130,100,170],
          backgroundColor: ['#f87171','#facc15','#34d399','#60a5fa','#c084fc','#f472b6','#f97316','#22d3ee','#fbbf24','#4ade80'],
        }]
      },
      options: {
        plugins: { legend: { display: false }},
        scales: {
          x: { ticks: { color: '#ddd' }, grid: { color: 'rgba(255,255,255,0.1)' } },
          y: { ticks: { color: '#ddd' }, grid: { color: 'rgba(255,255,255,0.1)' } },
        }
      }
    });

    // simple search filter
    function filterTable() {
      const input = document.getElementById('searchInput');
      const filter = input.value.toLowerCase();
      const rows = document.querySelectorAll('#transactionTable tr');
      rows.forEach(row => {
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(filter) ? '' : 'none';
      });
    }
  </script>
</section>


  
