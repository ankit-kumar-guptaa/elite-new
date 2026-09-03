<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require '../include/db.php';

// Auto-create tables if they don't exist
try {
    $pdo->exec("CREATE TABLE IF NOT EXISTS elite_hr_inquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        email VARCHAR(100) NOT NULL,
        company VARCHAR(150) DEFAULT '',
        service_needed VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        submission_date DATETIME NOT NULL,
        status VARCHAR(20) DEFAULT 'pending'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

    $pdo->exec("CREATE TABLE IF NOT EXISTS zneus_software_inquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        email VARCHAR(100) NOT NULL,
        company VARCHAR(150) DEFAULT '',
        employee_count VARCHAR(50) NOT NULL,
        message TEXT NOT NULL,
        submission_date DATETIME NOT NULL,
        status VARCHAR(20) DEFAULT 'pending'
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
} catch (PDOException $e) {
    error_log("Table creation error: " . $e->getMessage());
}

// Handle filters
$search = $_GET['search'] ?? '';
$filter_date = $_GET['filter_date'] ?? '';
$form_type = $_GET['form_type'] ?? 'elite';

// Quick Stats
try {
    $eliteTotal = $pdo->query("SELECT COUNT(*) FROM elite_hr_inquiries")->fetchColumn();
    $eliteToday = $pdo->query("SELECT COUNT(*) FROM elite_hr_inquiries WHERE DATE(submission_date) = CURDATE()")->fetchColumn();
    $zneusTotal = $pdo->query("SELECT COUNT(*) FROM zneus_software_inquiries")->fetchColumn();
    $zneusToday = $pdo->query("SELECT COUNT(*) FROM zneus_software_inquiries WHERE DATE(submission_date) = CURDATE()")->fetchColumn();
} catch (PDOException $e) {
    $eliteTotal = $eliteToday = $zneusTotal = $zneusToday = 0;
}

// Build query based on form type
if ($form_type === 'elite') {
    $query = "SELECT * FROM elite_hr_inquiries WHERE 1=1";
    
    if (!empty($search)) {
        $query .= " AND (name LIKE :search OR email LIKE :search OR phone LIKE :search OR company LIKE :search)";
    }
    if (!empty($filter_date)) {
        $query .= " AND DATE(submission_date) = :filter_date";
    }
    
    $query .= " ORDER BY submission_date DESC";
    $stmt = $pdo->prepare($query);
    
    if (!empty($search)) {
        $stmt->bindValue(':search', "%$search%");
    }
    if (!empty($filter_date)) {
        $stmt->bindValue(':filter_date', $filter_date);
    }
    
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} elseif ($form_type === 'zneus') {
    $query = "SELECT * FROM zneus_software_inquiries WHERE 1=1";
    
    if (!empty($search)) {
        $query .= " AND (name LIKE :search OR email LIKE :search OR phone LIKE :search OR company LIKE :search)";
    }
    if (!empty($filter_date)) {
        $query .= " AND DATE(submission_date) = :filter_date";
    }
    
    $query .= " ORDER BY submission_date DESC";
    $stmt = $pdo->prepare($query);
    
    if (!empty($search)) {
        $stmt->bindValue(':search', "%$search%");
    }
    if (!empty($filter_date)) {
        $stmt->bindValue(':filter_date', $filter_date);
    }
    
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite + Zneus Dashboard - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-header {
            background: linear-gradient(135deg, #261a6a, #1a1a4e);
            color: #fff;
            padding: 24px;
            text-align: center;
            border-radius: 12px;
            margin-bottom: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        .dashboard-header h1 {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
        }
        .dashboard-header p {
            margin: 6px 0 0;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.7);
        }

        /* Stats Cards */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }
        .stat-card {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            display: flex;
            align-items: center;
            gap: 16px;
            transition: transform 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
        }
        .stat-card .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        .stat-icon-red {
            background: rgba(195,37,40,0.1);
            color: #c32528;
        }
        .stat-icon-blue {
            background: rgba(67,97,238,0.1);
            color: #4361ee;
        }
        .stat-icon-green {
            background: rgba(34,197,94,0.1);
            color: #22c55e;
        }
        .stat-icon-purple {
            background: rgba(139,92,246,0.1);
            color: #8b5cf6;
        }
        .stat-card .stat-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
            color: #1a1a2e;
        }
        .stat-card .stat-info p {
            font-size: 0.8rem;
            color: #64748b;
            margin: 0;
        }

        /* Tabs */
        .nav-tabs {
            border: none;
            background: #fff;
            border-radius: 12px;
            padding: 6px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }
        .nav-tabs .nav-link {
            border: none;
            border-radius: 8px;
            color: #64748b;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }
        .nav-tabs .nav-link.active {
            background: linear-gradient(135deg, #261a6a, #4361ee);
            color: #fff;
        }
        .nav-tabs .nav-link:hover:not(.active) {
            background: #f0f2f5;
            color: #1a1a2e;
        }

        /* Filter */
        .filter-form {
            display: flex;
            gap: 12px;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .filter-form .form-control {
            max-width: 280px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
            font-size: 0.9rem;
        }
        .filter-form .form-control:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 3px rgba(67,97,238,0.1);
        }

        /* Table */
        .table-container {
            background-color: #fff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            overflow-x: auto;
        }
        .table {
            margin-bottom: 0;
            font-size: 0.85rem;
        }
        .table thead th {
            background-color: #f8fafc;
            color: #475569;
            text-align: center;
            font-weight: 600;
            font-size: 0.8rem;
            padding: 12px;
            border-bottom: 2px solid #e2e8f0;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .table tbody tr {
            transition: background 0.2s ease;
        }
        .table tbody tr:hover {
            background-color: #f1f5f9;
        }
        .table tbody td {
            text-align: center;
            vertical-align: middle;
            padding: 12px;
            color: #334155;
        }
        .badge-service {
            background: linear-gradient(135deg, rgba(195,37,40,0.1), rgba(195,37,40,0.05));
            color: #c32528;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-employees {
            background: linear-gradient(135deg, rgba(67,97,238,0.1), rgba(67,97,238,0.05));
            color: #4361ee;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-status {
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .badge-pending {
            background: rgba(245,158,11,0.1);
            color: #f59e0b;
        }
        .badge-contacted {
            background: rgba(34,197,94,0.1);
            color: #22c55e;
        }

        /* Buttons */
        .btn-primary {
            background: linear-gradient(135deg, #4361ee, #6366f1);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #3451de, #5558e0);
        }
        .btn-secondary {
            background: #64748b;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 10px 20px;
        }
        .btn-danger {
            background: linear-gradient(135deg, #c32528, #e74c3c);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 10px 20px;
        }

        .footer {
            text-align: center;
            margin-top: 24px;
            padding: 16px;
            font-size: 0.8rem;
            color: #94a3b8;
        }

        /* Loader */
        .loader {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(255,255,255,0.8);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
        .loader i {
            font-size: 48px;
            color: #4361ee;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
<div class="loader" id="loader">
    <i class="fas fa-spinner"></i>
</div>

<div class="container py-4">
    <div class="dashboard-header">
        <h1><i class="fas fa-chart-pie"></i> Elite + Zneus Leads Dashboard</h1>
        <p>Manage inquiries from the Elite & Zneus landing page</p>

        <div class="text-end mt-3">
            <a href="dashboard.php" class="btn btn-sm btn-light me-2">
                <i class="fas fa-chart-line"></i> Main Dashboard
            </a>
            <a href="slider_dashboard.php" class="btn btn-sm btn-light me-2">
                <i class="fas fa-sliders-h"></i> Slider Dashboard
            </a>
            <a href="logout.php" class="btn btn-sm btn-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-row">
        <div class="stat-card">
            <div class="stat-icon stat-icon-red"><i class="fas fa-building"></i></div>
            <div class="stat-info">
                <h3><?= $eliteTotal ?></h3>
                <p>Total Elite HR Leads</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon stat-icon-green"><i class="fas fa-calendar-day"></i></div>
            <div class="stat-info">
                <h3><?= $eliteToday ?></h3>
                <p>Elite HR Today</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon stat-icon-blue"><i class="fas fa-desktop"></i></div>
            <div class="stat-info">
                <h3><?= $zneusTotal ?></h3>
                <p>Total Zneus Leads</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon stat-icon-purple"><i class="fas fa-calendar-day"></i></div>
            <div class="stat-info">
                <h3><?= $zneusToday ?></h3>
                <p>Zneus Today</p>
            </div>
        </div>
    </div>

    <!-- Form Type Tabs -->
    <ul class="nav nav-tabs" id="formTypeTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= $form_type === 'elite' ? 'active' : '' ?>" 
                    type="button" onclick="changeFormType('elite')">
                <i class="fas fa-building me-1"></i> Elite HR Inquiries
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= $form_type === 'zneus' ? 'active' : '' ?>" 
                    type="button" onclick="changeFormType('zneus')">
                <i class="fas fa-desktop me-1"></i> Zneus Software Inquiries
            </button>
        </li>
    </ul>

    <form method="GET" class="filter-form" onsubmit="showLoader()">
        <input type="hidden" name="form_type" id="form_type" value="<?= $form_type ?>">
        
        <input type="text" name="search" class="form-control" placeholder="Search by name, email, phone, company..." value="<?= htmlspecialchars($search) ?>">
        <input type="date" name="filter_date" class="form-control" value="<?= htmlspecialchars($filter_date) ?>">
        
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-filter"></i> Filter
        </button>
        <a href="elite_zneus_dashboard.php" class="btn btn-secondary">
            <i class="fas fa-redo"></i> Reset
        </a>
    </form>

    <div class="table-container">
        <?php if ($form_type === 'elite'): ?>
            <h5 class="mb-3"><i class="fas fa-building text-danger"></i> Elite HR Inquiry Submissions</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Service Needed</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td>
                                <a href="tel:<?= htmlspecialchars($row['phone']) ?>" style="color:#4361ee;text-decoration:none;">
                                    <?= htmlspecialchars($row['phone']) ?>
                                </a>
                            </td>
                            <td>
                                <a href="mailto:<?= htmlspecialchars($row['email']) ?>" style="color:#4361ee;text-decoration:none;">
                                    <?= htmlspecialchars($row['email']) ?>
                                </a>
                            </td>
                            <td><?= htmlspecialchars($row['company'] ?: '—') ?></td>
                            <td><span class="badge-service"><?= htmlspecialchars($row['service_needed']) ?></span></td>
                            <td title="<?= htmlspecialchars($row['message']) ?>">
                                <?= strlen($row['message']) > 40 ? htmlspecialchars(substr($row['message'], 0, 40)) . '...' : htmlspecialchars($row['message']) ?>
                            </td>
                            <td><?= htmlspecialchars($row['submission_date']) ?></td>
                            <td><span class="badge-status badge-<?= $row['status'] ?>"><?= ucfirst(htmlspecialchars($row['status'])) ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-muted py-4">No Elite HR inquiries found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        
        <?php elseif ($form_type === 'zneus'): ?>
            <h5 class="mb-3"><i class="fas fa-desktop text-primary"></i> Zneus Software Inquiry Submissions</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Team Size</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td>
                                <a href="tel:<?= htmlspecialchars($row['phone']) ?>" style="color:#4361ee;text-decoration:none;">
                                    <?= htmlspecialchars($row['phone']) ?>
                                </a>
                            </td>
                            <td>
                                <a href="mailto:<?= htmlspecialchars($row['email']) ?>" style="color:#4361ee;text-decoration:none;">
                                    <?= htmlspecialchars($row['email']) ?>
                                </a>
                            </td>
                            <td><?= htmlspecialchars($row['company'] ?: '—') ?></td>
                            <td><span class="badge-employees"><?= htmlspecialchars($row['employee_count']) ?></span></td>
                            <td title="<?= htmlspecialchars($row['message']) ?>">
                                <?= strlen($row['message']) > 40 ? htmlspecialchars(substr($row['message'], 0, 40)) . '...' : htmlspecialchars($row['message']) ?>
                            </td>
                            <td><?= htmlspecialchars($row['submission_date']) ?></td>
                            <td><span class="badge-status badge-<?= $row['status'] ?>"><?= ucfirst(htmlspecialchars($row['status'])) ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-muted py-4">No Zneus software inquiries found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <div class="footer">
        &copy; <?= date('Y') ?> Elite Admin Dashboard. All rights reserved.
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showLoader() {
        document.getElementById('loader').style.display = 'flex';
    }
    
    function changeFormType(type) {
        document.getElementById('form_type').value = type;
        showLoader();
        document.querySelector('form').submit();
    }
</script>
</body>
</html>
