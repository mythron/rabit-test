<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Advertisements</title>
</head>

<body>
    <a href="/">Home</a>
    <h1>Advertisements</h1>
    <table class="table ads">
        <thead>
            <tr>
                <th>Advertisement</th>
                <th>User</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($parameters['ads']); $i++) {
                echo '<tr>';
                echo '<td>' . $parameters['ads'][$i]['adtitle'] . '</td>';
                echo '<td>' . $parameters['ads'][$i]['username'] . '</td>';
                echo '</tr>';
            } ?>
        </tbody>
    </table>
</body>

</html>