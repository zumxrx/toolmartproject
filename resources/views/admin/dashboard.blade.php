<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        .dashboard-stats {
            padding: 20px;
        }
        
        .stats-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stats-card {
            flex: 1;
            min-width: 250px;
            background: #191c24;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
        }
        
        .stats-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }
        
        .users-icon {
            background: rgba(0, 144, 231, 0.2);
            color: #0090e7;
        }
        
        .orders-icon {
            background: rgba(0, 210, 91, 0.2);
            color: #00d25b;
        }
        
        .revenue-icon {
            background: rgba(246, 122, 43, 0.2);
            color: #f67a2b;
        }
        
        .tools-icon {
            background: rgba(255, 76, 114, 0.2);
            color: #ff4c72;
        }
        
        .stats-info {
            color: #fff;
        }
        
        .stats-number {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .stats-label {
            font-size: 16px;
            color: #6c7293;
        }
        
        .stats-change {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
            margin-top: 10px;
        }
        
        .stats-up {
            color: #00d25b;
        }
        
        .stats-down {
            color: #fc424a;
        }
        
        .welcome-card {
            background: linear-gradient(to right, #0090e7, #00d25b);
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            color: white;
        }
        
        .welcome-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .welcome-subtitle {
            opacity: 0.9;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        
        <div class="container-fluid page-body-wrapper">
            @include('admin.header')
            
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Welcome Card -->
                    <div class="welcome-card">
                        <h2 class="welcome-title">Welcome to Admin Dashboard</h2>
                        <p class="welcome-subtitle">Monitor and manage your business metrics</p>
                    </div>

                    <!-- Stats Cards -->
                    <div class="stats-row">
                        <!-- Users Card -->
                        <div class="stats-card">
                            <div class="stats-header">
                                <div class="stats-icon users-icon">
                                    <i class="mdi mdi-account-multiple"></i>
                                </div>
                            </div>
                            <div class="stats-info">
                                <div class="stats-number">2,300</div>
                                <div class="stats-label">Total Customers</div>
                                <div class="stats-change stats-up">
                                    <i class="mdi mdi-arrow-up"></i>
                                    <span>+3.5% this week</span>
                                </div>
                            </div>
                        </div>

                        <!-- Orders Card -->
                        <div class="stats-card">
                            <div class="stats-header">
                                <div class="stats-icon orders-icon">
                                    <i class="mdi mdi-shopping"></i>
                                </div>
                            </div>
                            <div class="stats-info">
                                <div class="stats-number">1,420</div>
                                <div class="stats-label">Total Orders</div>
                                <div class="stats-change stats-up">
                                    <i class="mdi mdi-arrow-up"></i>
                                    <span>+5.2% this week</span>
                                </div>
                            </div>
                        </div>

                        <!-- Revenue Card -->
                        <div class="stats-card">
                            <div class="stats-header">
                                <div class="stats-icon revenue-icon">
                                    <i class="mdi mdi-currency-usd"></i>
                                </div>
                            </div>
                            <div class="stats-info">
                                <div class="stats-number">$45,820</div>
                                <div class="stats-label">Total Revenue</div>
                                <div class="stats-change stats-down">
                                    <i class="mdi mdi-arrow-down"></i>
                                    <span>-2.1% this week</span>
                                </div>
                            </div>
                        </div>

                        <!-- Tools Card -->
                        <div class="stats-card">
                            <div class="stats-header">
                                <div class="stats-icon tools-icon">
                                    <i class="mdi mdi-tools"></i>
                                </div>
                            </div>
                            <div class="stats-info">
                                <div class="stats-number">156</div>
                                <div class="stats-label">Available Tools</div>
                                <div class="stats-change stats-up">
                                    <i class="mdi mdi-arrow-up"></i>
                                    <span>+12 this month</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('admin.body')
                </div>
                
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © ToolMart 2024</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    
    @include('admin.script')
</body>
</html> 