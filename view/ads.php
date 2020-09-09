<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADS</title>
</head>

<body>
    <h1>ADS</h1>
    <table class="table">
        <tr>
            <th>Advertisement</th>
            <th>User</th>
        </tr>
        <?php for ($i = 0; $i < count($parameters['ads']); $i++) {
            echo '<tr>';
            echo '<td>' . $parameters['ads'][$i]['adtitle'] . '</td>';
            echo '<td>' . $parameters['ads'][$i]['username'] . '</td>';
            echo '</tr';
        } ?>
    </table>
</body>

</html>