<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require '../include/db.php';

// Handle filters
$search = $_GET['search'] ?? '';
$filter_date = $_GET['filter_date'] ?? '';

$query = "SELECT * FROM submissions WHERE 1=1";

if (!empty($search)) {
    $query .= " AND (first_name LIKE :search OR last_name LIKE :search)";
}
if (!empty($filter_date)) {
    $query .= " AND DATE(submitted_at) = :filter_date";
}

$query .= " ORDER BY submitted_at DESC";
$stmt = $pdo->prepare($query);

if (!empty($search)) {
    $stmt->bindValue(':search', "%$search%");
}
if (!empty($filter_date)) {
    $stmt->bindValue(':filter_date', $filter_date);
}

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        }
        .filter-form .form-control {
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
        /* .table thead th {
            background-color: #6c757d;
            color: #fff;
            text-align: center;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        } */


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
    background-color: #ff4d4f; /* Light red color */
    border: none;
    padding: 10px 20px;
    font-size: 0.9rem;
    border-radius: 5px;
    color: #ffffff;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.15);
    transition: background-color 0.3s ease-in-out;
}

.btn-danger:hover {
    background-color: #e63946; /* Slightly darker red */
    text-decoration: none;
}

    </style>
</head>
<body>
<div class="loader" id="loader">
    <i class="fas fa-spinner"></i>
</div>

<div class="container">
    <div class="dashboard-header">
        <!-- <img src="https://ecs.elitecorporatesolutions.com/wp-content/uploads/2022/06/elite_logo-140x51.jpeg" alt="logo"> -->
        <h1><i class="fas fa-chart-line"></i> Admin Dashboard</h1>
        <p>Manage and review submissions seamlessly</p>

        <div class="text-end mb-3">
    <a href="logout.php" class="btn btn-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
</div>
    </div>


   

    <form method="GET" class="filter-form" onsubmit="showLoader()">
        <input type="text" name="search" class="form-control" placeholder="Search by name" value="<?= htmlspecialchars($search) ?>">
        <input type="date" name="filter_date" class="form-control" value="<?= htmlspecialchars($filter_date) ?>">
        <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Apply</button>
        <a href="dashboard.php" class="btn btn-secondary"><i class="fas fa-redo"></i> Reset</a>
    </form>
    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>City</th>
                    <th>Company</th>
                    <th>Designation</th>
                    <th>Experience</th>
                    <th>Current Salary</th>
                    <th>Educational Qualification</th>
                    <th>Institute</th>
                    <th>Functional Area</th>
                    <th>Industry</th>
                    <th>Skills</th>
                    <th>CV</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['first_name']) ?></td>
                        <td><?= htmlspecialchars($row['last_name']) ?></td>
                        <td><?= htmlspecialchars($row['gender']) ?></td>
                        <td><?= htmlspecialchars($row['date_of_birth']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['mobile_no']) ?></td>
                        <td><?= htmlspecialchars($row['city']) ?></td>
                        <td><?= htmlspecialchars($row['company']) ?></td>
                        <td><?= htmlspecialchars($row['designation']) ?></td>
                        <td><?= htmlspecialchars($row['experience']) ?></td>
                        <td><?= htmlspecialchars($row['current_salary']) ?></td>
                        <td><?= htmlspecialchars($row['educational_qualification']) ?></td>
                        <td><?= htmlspecialchars($row['institute']) ?></td>
                        <td><?= htmlspecialchars($row['functional_area']) ?></td>
                        <td><?= htmlspecialchars($row['industry']) ?></td>
                        <td><?= htmlspecialchars($row['skills']) ?></td>
                        <td>
                            <?php if ($row['cv_path']): ?>
                                <a href="../<?= htmlspecialchars($row['cv_path']) ?>" class="btn btn-sm btn-link"><i class="fas fa-download"></i> Download</a>
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td><?= htmlspecialchars($row['submitted_at']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="19">No submissions found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
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
</script>
</body>
</html>
