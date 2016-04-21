<?php
// index.php
$database = "fantacy";
$host = "localhost";
$user = "root";
$pass = "";
$link = new mysqli($host, $user, $pass, $database);

$result = $link->query('SELECT id, title FROM post');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <h1> shashikumar</h1>
        <ul>
            <?php while ($row = $result->fetch_array(MYSQLI_ASSOC)): ?>
            <li>
                <a href="/show.php?id=<?php echo $row['id'] ?>">
                    <?php echo $row['title'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php
$link = null;
?>
