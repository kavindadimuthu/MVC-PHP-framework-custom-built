<!-- views/users_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Users</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
                <?php foreach ($data['users'] as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['userID']); ?></td>
                    <td><?php echo htmlspecialchars($user['firstName'] . ' ' . $user['lastName']); ?></td>
                    <td><?php echo htmlspecialchars($user['username']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <!-- Add more columns as needed -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>