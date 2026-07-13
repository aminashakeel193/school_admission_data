<?php 
require_once 'config.php'; 

// Update verified status if changed
if (isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $status = $_POST['verified']; // 'Pending' or 'Verified'
    $stmt = $conn->prepare("UPDATE admission SET verified=? WHERE id=?");
    $stmt->bind_param("si", $status, $id);
    $stmt->execute();
}

// Count Pending rows for notification
$pendingResult = $conn->query("SELECT COUNT(*) AS pending_count FROM admission WHERE verified='Pending'");
$pendingCount = $pendingResult->fetch_assoc()['pending_count'];

// Get all admission rows
$result = $conn->query("SELECT * FROM admission ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admission Dashboard</title>
<style>
body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f7efe3; }

/* Header */
header { 
    background:#6b2f00; /* brown header */
    color:white; 
    padding:15px 30px; 
    display:flex; 
    justify-content:space-between; 
    align-items:center; 
}
header h1 { margin:0; }

/* Left-aligned notification button */
.header-left { display:flex; align-items:center; gap:10px; }
.notification-btn { 
    background:#d88810; 
    border:none; 
    color:white; 
    padding:10px 15px; 
    border-radius:5px; 
    cursor:pointer; 
    font-weight:bold; 
}
.notification-btn .count { 
    background:red; 
    border-radius:50%; 
    padding:2px 6px; 
    margin-left:5px; 
    font-weight:bold;
}

/* Logout button */
.logout-btn { 
    background:#e84118; 
    border:none; 
    color:white; 
    padding:10px 15px; 
    border-radius:5px; 
    cursor:pointer; 
}

/* Table */
table { 
    width:100%; 
    border-collapse:collapse; 
    margin:20px 0; 
    background:white; 
}
th, td { padding:12px; border:1px solid #ddd; text-align:left; }
th { background:#d88810; color:white; }
tr:nth-child(even) { background:#fff7e6; }
select { padding:5px; border-radius:5px; border:1px solid #c89232; background:#fff5d6; }
form { margin:0; }
</style>
</head>
<body>

<header>
    <div class="header-left">
        <button class="notification-btn">
            Notifications <span class="count"><?php echo $pendingCount; ?></span>
        </button>
    </div>
    <h1>Admin Dashboard</h1>
    <div>
        <button class="logout-btn">Logout</button>
    </div>
</header>

<main>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Created At</th>
            <th>Reg No</th>
            <th>Course</th>
            <th>Admission Date</th>
            <th>Verified</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td><?php echo $row['regno']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['admission_date']; ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <select name="verified" onchange="this.form.submit()">
                            <option value="Pending" <?php if($row['verified']=='Pending') echo 'selected'; ?>>Pending</option>
                            <option value="Verified" <?php if($row['verified']=='Verified') echo 'selected'; ?>>Verified</option>
                        </select>
                        <input type="hidden" name="update_status" value="1">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</main>

</body>
</html>
