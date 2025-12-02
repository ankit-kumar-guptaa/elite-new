<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require '../include/db.php';

// Handle filters and form type selection
$search = $_GET['search'] ?? '';
$filter_date = $_GET['filter_date'] ?? '';
$form_type = $_GET['form_type'] ?? 'employer'; // Default to employer form

// Build query based on form type
if ($form_type === 'employer') {
    $query = "SELECT * FROM slider_employer_submissions WHERE 1=1";
    
    if (!empty($search)) {
        $query .= " AND (name LIKE :search OR email LIKE :search OR phone LIKE :search)";
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
    
} elseif ($form_type === 'jobseeker') {
    $query = "SELECT * FROM slider_jobseeker_submissions WHERE 1=1";
    
    if (!empty($search)) {
        $query .= " AND (name LIKE :search OR email LIKE :search)";
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
    <title>Slider Forms Dashboard - Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eef2f7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-header {
            background-color: #576899;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dashboard-header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: bold;
        }
        .dashboard-header p {
            margin: 5px 0 0;
            font-size: 1rem;
            font-weight: 300;
        }
        .filter-form {
            display: flex;
            gap: 15px;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .filter-form .form-control, .filter-form .form-select {
            max-width: 300px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .table-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }
        .table {
            margin-bottom: 0;
            font-size: 0.9rem;
        }
        .table thead th {
            background-color: #f4f4f9;
            color: #333333;
            text-align: center;
            font-weight: bold;
            font-size: 0.95rem;
            padding: 10px 12px;
            border-bottom: 2px solid #dddddd;
            text-transform: capitalize;
            letter-spacing: 0.05em;
        }
        .table thead th:hover {
            background-color: #e9ecef;
            cursor: pointer;
        }
        .table tbody tr:hover {
            background-color: #f1f5f9;
        }
        .table tbody td {
            text-align: center;
            vertical-align: middle;
        }
        .loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
        .loader i {
            font-size: 50px;
            color: #4CAF50;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        .btn-primary, .btn-secondary {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }
        .btn-primary:hover {
            background-color: #388e3c;
        }
        .btn-secondary:hover {
            background-color: #5c6bc0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
        }
        .btn-danger {
            background-color: #ff4d4f;
            border: none;
            padding: 10px 20px;
            font-size: 0.9rem;
            border-radius: 5px;
            color: #ffffff;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s ease-in-out;
        }
        .btn-danger:hover {
            background-color: #e63946;
            text-decoration: none;
        }
        .nav-tabs .nav-link {
            color: #495057;
            font-weight: 500;
        }
        .nav-tabs .nav-link.active {
            color: #0d6efd;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="loader" id="loader">
    <i class="fas fa-spinner"></i>
</div>

<div class="container">
    <div class="dashboard-header">
        <h1><i class="fas fa-sliders-h"></i> Slider Forms Dashboard</h1>
        <p>Manage employer and job seeker submissions from website slider forms</p>

        <div class="text-end mb-3">
            <a href="dashboard.php" class="btn btn-primary me-2">
                <i class="fas fa-chart-line"></i> Main Dashboard
            </a>
            <a href="logout.php" class="btn btn-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

    <!-- Form Type Tabs -->
    <ul class="nav nav-tabs mb-4" id="formTypeTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= $form_type === 'employer' ? 'active' : '' ?>" 
                    id="employer-tab" data-bs-toggle="tab" data-bs-target="#employer" 
                    type="button" role="tab" onclick="changeFormType('employer')">
                <i class="fas fa-building"></i> Employer Forms
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link <?= $form_type === 'jobseeker' ? 'active' : '' ?>" 
                    id="jobseeker-tab" data-bs-toggle="tab" data-bs-target="#jobseeker" 
                    type="button" role="tab" onclick="changeFormType('jobseeker')">
                <i class="fas fa-user-tie"></i> Job Seeker Forms
            </button>
        </li>
    </ul>

    <form method="GET" class="filter-form" onsubmit="showLoader()">
        <input type="hidden" name="form_type" id="form_type" value="<?= $form_type ?>">
        
        <input type="text" name="search" class="form-control" placeholder="Search by name or email" value="<?= htmlspecialchars($search) ?>">
        <input type="date" name="filter_date" class="form-control" value="<?= htmlspecialchars($filter_date) ?>">
        
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-filter"></i> Apply Filters
        </button>
        <a href="slider_dashboard.php" class="btn btn-secondary">
            <i class="fas fa-redo"></i> Reset
        </a>
    </form>

    <div class="table-container">
        <?php if ($form_type === 'employer'): ?>
            <h4 class="mb-3"><i class="fas fa-building"></i> Employer Submissions</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Submission Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td title="<?= htmlspecialchars($row['message']) ?>">
                                <?= strlen($row['message']) > 50 ? htmlspecialchars(substr($row['message'], 0, 50)) . '...' : htmlspecialchars($row['message']) ?>
                            </td>
                            <td><?= htmlspecialchars($row['submission_date']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">No employer submissions found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        
        <?php elseif ($form_type === 'jobseeker'): ?>
            <h4 class="mb-3"><i class="fas fa-user-tie"></i> Job Seeker Submissions</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>CV File</th>
                        <th>Submission Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td title="<?= htmlspecialchars($row['message']) ?>">
                                <?= strlen($row['message']) > 50 ? htmlspecialchars(substr($row['message'], 0, 50)) . '...' : htmlspecialchars($row['message']) ?>
                            </td>
                            <td>
                                <?php if (!empty($row['cv_filename'])): ?>
                                    <a href="../uploads/<?= htmlspecialchars($row['cv_filename']) ?>" class="btn btn-sm btn-link" download>
                                        <i class="fas fa-download"></i> Download
                                    </a>
                                <?php else: ?>
                                    No CV
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($row['submission_date']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">No job seeker submissions found</td>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function showLoader() {
        document.getElementById('loader').style.display = 'flex';
    }
    
    function changeFormType(type) {
        document.getElementById('form_type').value = type;
        document.querySelector('form').submit();
    }
</script>
</body>
</html>