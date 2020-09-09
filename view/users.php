<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>
</head>

<body>
    USERS
    <ul>
        <?php for ($i = 0; $i < count($parameters['users']); $i++) {
            echo '<li>' . $parameters['users'][$i]['name'] . '</li>';
        } ?>
    </ul>
</body>

</html>