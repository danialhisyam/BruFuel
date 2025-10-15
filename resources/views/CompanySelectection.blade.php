<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Selection Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        
        .card {
            transition: all 0.3s ease;
            cursor: pointer;
            transform: translateY(0);
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .card.selected {
            border: 3px solid #4f46e5;
            background-color: rgba(79, 70, 229, 0.05);
        }
        
        .icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        
        .card:hover .icon {
            transform: scale(1.1);
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(79, 70, 229, 0.4);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(79, 70, 229, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(79, 70, 229, 0);
            }
        }
        
        .btn-continue {
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .btn-continue.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container mx-auto max-w-4xl">
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Welcome to <span class="text-indigo-600">Company Portal</span></h1>
                <p class="text-gray-600 max-w-md mx-auto">Please select your role to continue to the appropriate dashboard</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <!-- Admin Card -->
                <div class="card bg-white rounded-xl p-6 text-center border border-gray-200" onclick="selectRole('admin')" id="admin-card">
                    <div class="icon text-indigo-600">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Administrator</h3>
                    <p class="text-gray-600 text-sm">Access system settings, manage users, and view analytics</p>
                    <div class="mt-4 hidden" id="admin-check">
                        <i class="fas fa-check-circle text-green-500 text-2xl"></i>
                    </div>
                </div>
                
                <!-- Customer Card -->
                <div class="card bg-white rounded-xl p-6 text-center border border-gray-200" onclick="selectRole('customer')" id="customer-card">
                    <div class="icon text-blue-600">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Customer</h3>
                    <p class="text-gray-600 text-sm">Place orders, track shipments, and manage your account</p>
                    <div class="mt-4 hidden" id="customer-check">
                        <i class="fas fa-check-circle text-green-500 text-2xl"></i>
                    </div>
                </div>
                
                <!-- Driver Card -->
                <div class="card bg-white rounded-xl p-6 text-center border border-gray-200" onclick="selectRole('driver')" id="driver-card">
                    <div class="icon text-amber-600">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Driver</h3>
                    <p class="text-gray-600 text-sm">View delivery routes, update status, and manage shipments</p>
                    <div class="mt-4 hidden" id="driver-check">
                        <i class="fas fa-check-circle text-green-500 text-2xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <button id="continue-btn" class="btn-continue bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform">
                    Continue <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </div>
        
        <div class="text-center mt-8 text-gray-500 text-sm">
            <p>Having trouble selecting your role? <a href="#" class="text-indigo-600 hover:underline">Contact support</a></p>
        </div>
    </div>

    <script>
        let selectedRole = null;
        
        function selectRole(role) {
            // Reset all cards
            document.querySelectorAll('.card').forEach(card => {
                card.classList.remove('selected', 'pulse');
                card.querySelector('div[id$="-check"]').classList.add('hidden');
            });
            
            // Select the clicked card
            const card = document.getElementById(`${role}-card`);
            card.classList.add('selected', 'pulse');
            document.getElementById(`${role}-check`).classList.remove('hidden');
            
            selectedRole = role;
            
            // Show continue button
            const continueBtn = document.getElementById('continue-btn');
            continueBtn.classList.add('show');
        }
        
        document.getElementById('continue-btn').addEventListener('click', function() {
            if (selectedRole) {
                // In a real application, you would redirect to the appropriate dashboard
                alert(`Redirecting to ${selectedRole} dashboard...`);
                
                // Simulate redirection (remove in production)
                switch(selectedRole) {
                    case 'admin':
                        window.location.href = 'admin/login';
                        break;
                    case 'customer':
                        window.location.href = 'customer/login';
                        break;
                    case 'driver':
                        window.location.href = 'driver/login';
                        break;
                }
            } else {
                alert('Please select a role first');
            }
        });
    </script>
</body>
</html>