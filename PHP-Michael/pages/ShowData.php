<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: ../');        
    exit();
}

if (isset($_POST['submit'])) {    
    $data = [
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'gender' => $_POST['gender'],
        'course' => $_POST['course'],
        'campus' => $_POST['campus'],
        'college' => $_POST['college']
    ];

    if (!isset($_SESSION['data'])) {
        $_SESSION['data'] = [];
    }
    
    $_SESSION['data'][] = $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Show Data</title>
    <?php include('../layout/style.php'); ?>
</head>
<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>
    
    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Show Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Show Data</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Table
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Course</th>
                                        <th>Campus</th>
                                        <th>College</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['data'])) {
                                        foreach ($_SESSION['data'] as $row) {
                                            echo "<tr>";
                                            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['age']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['course']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['campus']) . "</td>";
                                            echo "<td>" . htmlspecialchars($row['college']) . "</td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>