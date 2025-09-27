<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BruFuel • Admin Login</title>
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Smooth font rendering */
    html { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
  </style>
</head>
<body class="min-h-screen bg-[#071321] text-white flex items-center justify-center p-6">
  <!-- Outer container mimicking browser bar spacing in screenshot -->
  <main class="w-full max-w-3xl">
    <section class="mx-auto w-full">
      <!-- Card -->
      <div class="mx-auto w-full max-w-2xl rounded-3xl bg-[#131b27] p-8 sm:p-10 shadow-xl ring-1 ring-white/5">
        <!-- Logo + Title -->
        <div class="mb-8 text-center">
          <div class="mx-auto mb-4 inline-flex h-20 w-20 items-center justify-center rounded-full bg-white/5 ring-1 ring-white/10">
            <!-- Minimal shell logo (SVG) -->
            <svg viewBox="0 0 64 64" class="h-12 w-12" aria-hidden="true">
              <path fill="#ffffff" d="M6 33c0-3.6 2-7.9 4.7-10.9C14.2 18 20.3 14 32 14s17.8 4 21.3 8.1C56 25.1 58 29.4 58 33c0 1.3-.2 2.6-.5 3.9H6.5A16 16 0 0 1 6 33Z"/>
              <path fill="#0f172a" d="M11 35h42c-.3 1.3-.8 2.7-1.5 3.9H12.5A12 12 0 0 1 11 35Z"/>
              <rect x="22" y="39" width="20" height="5" fill="#fff" rx="2"/>
            </svg>
          </div>
          <h1 class="text-3xl font-extrabold tracking-tight">BruFuel</h1>
          <p class="mt-1 text-sm text-white/80">Admin Portal</p>
        </div>

        <h2 class="mb-6 text-center text-white/90">Sign In to your Admin Account</h2>

        <!-- Form -->
        <form action="#" method="post" class="space-y-5">
          <!-- Email -->
          <div>
            <label for="email" class="mb-1 block text-sm">Email address</label>
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-0 flex w-10 items-center justify-center">
                <!-- mail icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-white/70">
                  <path d="M1.5 6.75A2.25 2.25 0 0 1 3.75 4.5h16.5A2.25 2.25 0 0 1 22.5 6.75v10.5A2.25 2.25 0 0 1 20.25 19.5H3.75A2.25 2.25 0 0 1 1.5 17.25V6.75Zm3.03-.75a.75.75 0 0 0-.53 1.28l6.72 6.72a2.25 2.25 0 0 0 3.18 0l6.72-6.72a.75.75 0 0 0-.53-1.28H4.53Z"/>
                </svg>
              </span>
              <input id="email" name="email" type="email" required autocomplete="username" placeholder="you@example.com"
                class="block w-full rounded-xl border-0 bg-white text-gray-900 placeholder-gray-500 pl-10 pr-4 py-2.5 shadow-inner focus:ring-4 focus:ring-[#9fb3ff]" />
            </div>
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="mb-1 block text-sm">Password</label>
            <div class="relative">
              <span class="pointer-events-none absolute inset-y-0 left-0 flex w-10 items-center justify-center">
                <!-- key icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5 text-white/70">
                  <path d="M16.5 2.25a5.25 5.25 0 1 0 2.25 10.02V14.25a.75.75 0 0 0 .75.75h1.5a.75.75 0 0 0 .75-.75V12.75h1.5a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-4.005A5.25 5.25 0 0 0 16.5 2.25Z"/>
                </svg>
              </span>
              <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="••••••••"
                class="block w-full rounded-xl border-0 bg-white text-gray-900 placeholder-gray-500 pl-10 pr-4 py-2.5 shadow-inner focus:ring-4 focus:ring-[#9fb3ff]" />
            </div>
          </div>

          <!-- Remember + Forgot -->
          <div class="flex items-center justify-between pt-1">
            <label class="inline-flex items-center gap-2 text-sm text-white/90">
              <input type="checkbox" name="remember" class="h-4 w-4 rounded border-white/30 bg-transparent text-white focus:ring-2 focus:ring-offset-0 focus:ring-white/60" />
              Remember me
            </label>
            <a href="#" class="text-sm font-medium text-yellow-300 hover:text-yellow-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-yellow-300 rounded px-1">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="mt-2 w-full rounded-xl bg-[#7a0a0a] px-4 py-3 text-center text-base font-semibold tracking-wide shadow-lg ring-1 ring-white/10 transition hover:bg-[#971010] focus:outline-none focus:ring-4 focus:ring-[#e11d2a]/50">
            Log In
          </button>
        </form>

        <!-- Footer -->
        <p class="mt-8 text-center text-xs text-white/60">© 2025 Your Company. All rights reserved.</p>
      </div>
    </section>
  </main>
</body>
</html>
