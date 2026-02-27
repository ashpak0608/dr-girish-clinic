<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments - Admin</title>
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
        
        .sidebar a:hover, .sidebar a.active {
            background: rgba(255,255,255,0.1);
            color: white;
        }
        
        .sidebar a i {
            margin-right: 10px;
        }
        
        .main-content {
            padding: 30px;
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
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a href="{{ route('admin.inquiries.index') }}" class="active"><i class="fas fa-envelope"></i> Appointments</a>
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
                    <h2>Appointment Requests</h2>
                </div>
                
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($inquiries as $inquiry)
                                    <tr>
                                        <td>#{{ $inquiry->id }}</td>
                                        <td>{{ $inquiry->name }}</td>
                                        <td>{{ $inquiry->phone }}</td>
                                        <td>{{ $inquiry->preferred_location }}</td>
                                        <td>{{ $inquiry->created_at->format('d M Y') }}</td>
                                        <td>{{ Str::limit($inquiry->message, 30) }}</td>
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
                                            @if(!$inquiry->status)
                                            <form action="{{ route('admin.inquiries.mark-read', $inquiry) }}" method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                            @endif
                                            <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this inquiry?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-4">
                            {{ $inquiries->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>