<?php

// create a connection

$connect = mysqli_connect("localhost","miko","1234","miko");//Opens up a socket

// Check connection

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die;
}

// Perform queries

$result = mysqli_query($connect,"SELECT * FROM USERS");

// print the output

while ($row = mysqli_fetch_array($result)) {
    echo $row['id'] . ': ' . $row['username'] . ' ' . $row['password'];
    echo '<br />';
}

// print number of returned rows

echo "returned: " . mysqli_num_rows($result) . " rows from table.";

echo '<hr />';

?>

    <form action="new_user.php" method="post">

        <input type="text" name="new_user_username" placeholder="Type new username here" />
        <br />
        <input type="password" name="new_user_password" placeholder="Type new password here" />
        <br />
        <input type="submit" value="Go! create new user" />

    </form>

<?php

// close the connection

mysqli_close($connect);

?>