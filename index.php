<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>

<html>
<head>
    <title>Neki ze</title>
</head>
<body>

<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultChech = mysqli_num_rows($result);

    if ($resultChech > 0) {
        while ($row = mysqli_fetch_assoc($result)){    #preverja has next type
            echo $row['user_uid'];

        } 

    }
?>

</body>
</html>