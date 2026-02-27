<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details - Admin</title>
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
        }
        
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        
        .sidebar a i {
            margin-right: 10px;
        }
        
        .main-content {
            padding: 30px;
        }
        
        .detail-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        .detail-label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .detail-value {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 20px;
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
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a href="{{ route('admin.inquiries.index') }}"><i class="fas fa-envelope"></i> Appointments</a>
                    <a href="{{ route('home') }}" target="_blank"><i class="fas fa-external-link-alt"></i> View Website</a>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;"></form>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Appointment Details</h2>
                    <a href="{{ route('admin.inquiries.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Back
                    </a>
                </div>
                
                <div class="detail-card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-label">Patient Name</div>
                            <div class="detail-value">{{ $inquiry->name }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-label">Phone Number</div>
                            <div class="detail-value">{{ $inquiry->phone }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-label">Email</div>
                            <div class="detail-value">{{ $inquiry->email ?? 'Not provided' }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-label">Preferred Location</div>
                            <div class="detail-value">{{ $inquiry->preferred_location }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-label">Preferred Date</div>
                            <div class="detail-value">{{ $inquiry->preferred_date ?? 'Not specified' }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-label">Requested On</div>
                            <div class="detail-value">{{ $inquiry->created_at->format('d M Y, h:i A') }}</div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-label">Status</div>
                            <div class="detail-value">
                                @if($inquiry->status)
                                    <span class="badge bg-success">Read</span>
                                @else
                                    <span class="badge bg-warning">Unread</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="detail-label">Message / Symptoms</div>
                            <div class="detail-value" style="font-size: 16px;">{{ $inquiry->message ?? 'No message provided' }}</div>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="d-flex gap-2">
                        @if(!$inquiry->status)
                        <form action="{{ route('admin.inquiries.mark-read', $inquiry) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check me-2"></i>Mark as Read
                            </button>
                        </form>
                        @endif
                        
                        <a href="tel:{{ $inquiry->phone }}" class="btn btn-primary">
                            <i class="fas fa-phone-alt me-2"></i>Call Patient
                        </a>
                        
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" class="btn btn-success">
                            <i class="fab fa-whatsapp me-2"></i>WhatsApp
                        </a>
                        
                        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this appointment request?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash me-2"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>