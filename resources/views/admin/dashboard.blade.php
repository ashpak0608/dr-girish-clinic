<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a5f7a;
            --secondary: #2c9a7a;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
        }
        
        .sidebar {
            background: linear-gradient(135deg, var(--primary), #0e4b63);
            min-height: 100vh;
            padding: 20px;
            color: white;
        }
        
        .sidebar h4 {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .sidebar a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            padding: 12px 15px;
            display: block;
            border-radius: 10px;
            margin-bottom: 5px;
            transition: all 0.3s;
        }
        
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
            color: white;
            padding-left: 20px;
        }
        
        .sidebar a i {
            margin-right: 10px;
            width: 20px;
        }
        
        .main-content {
            padding: 30px;
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .stats-number {
            font-size: 32px;
            font-weight: 700;
            color: var(--primary);
        }
        
        .table thead th {
            background: #f8f9fa;
            font-weight: 600;
            font-size: 14px;
        }
        
        .badge-success {
            background: var(--secondary);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
        }
        
        .badge-warning {
            background: #f7b731;
            color: #333;
            padding: 5px 10px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0">
                <div class="sidebar">
                    <h4><i class="fas fa-clinic-medical me-2"></i>Dr. Girish Ojha</h4>
                    <a href="{{ route('admin.dashboard') }}" class="active">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    <a href="{{ route('admin.inquiries.index') }}">
                        <i class="fas fa-envelope"></i> Appointments
                        @if($unreadInquiries > 0)
                        <span class="badge bg-danger float-end">{{ $unreadInquiries }}</span>
                        @endif
                    </a>
                    <a href="{{ route('home') }}" target="_blank">
                        <i class="fas fa-external-link-alt"></i> View Website
                    </a>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;"></form>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <h2 class="mb-4">Dashboard</h2>
                
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="stats-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Total Appointments</span>
                                    <div class="stats-number">{{ $totalInquiries }}</div>
                                </div>
                                <i class="fas fa-calendar-check fa-3x opacity-25"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Unread</span>
                                    <div class="stats-number">{{ $unreadInquiries }}</div>
                                </div>
                                <i class="fas fa-envelope-open-text fa-3x opacity-25"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="text-muted">Conversion Rate</span>
                                    <div class="stats-number">
                                        @if($totalInquiries > 0)
                                            {{ round(($totalInquiries - $unreadInquiries) / $totalInquiries * 100) }}%
                                        @else
                                            0%
                                        @endif
                                    </div>
                                </div>
                                <i class="fas fa-chart-line fa-3x opacity-25"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">Recent Appointment Requests</h5>
                    </div>
                    <div class="card-body">
                        @if($recentInquiries->count() > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentInquiries as $inquiry)
                                    <tr>
                                        <td>{{ $inquiry->name }}</td>
                                        <td>{{ $inquiry->phone }}</td>
                                        <td>{{ $inquiry->preferred_location }}</td>
                                        <td>{{ $inquiry->created_at->format('d M Y') }}</td>
                                        <td>
                                            @if($inquiry->status)
                                                <span class="badge-success">Read</span>
                                            @else
                                                <span class="badge-warning">Unread</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.inquiries.show', $inquiry) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                        <p class="text-center text-muted py-4">No appointment requests yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>