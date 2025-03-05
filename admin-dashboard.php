<?php
require 'db.php';

if ($_SESSION['user_role'] != 'SUPER ADMIN') {
    echo "Access Denied!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $role = $_POST['role'];

    $stmt = $conn->prepare("INSERT INTO users (email, role) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $role);
    $stmt->execute();
}

$result = $conn->query("SELECT * FROM users");
?>

<h2>Manage Users</h2>
<form method="POST">
    <input type="email" name="email" placeholder="User Email" required>
    <select name="role">
        <option value="ADMIN">Admin</option>
        <option value="OTC">OTC</option>
        <option value="PT">PT</option>
        <option value="VRTT">VRTT</option>
        <option value="MPT">MPT</option>
        <option value="FT">FT</option>
    </select>
    <button type="submit">Add User</button>
</form>

<table>
    <tr>
        <th>Email</th>
        <th>Role</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['email'] ?></td>
            <td><?= $row['role'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
