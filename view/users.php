<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>USERS</title>
</head>

<body>
    <a href="/">Home</a>
    <h1>Users</h1>
    <ul class="userlist">
        <?php for ($i = 0; $i < count($parameters['users']); $i++) {
            echo '<li>' . $parameters['users'][$i]['name'] . '</li>';
        } ?>
    </ul>
</body>

</html>