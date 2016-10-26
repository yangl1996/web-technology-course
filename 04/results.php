<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Homework 4</title>
        <link rel="stylesheet" href="./static/homework4.css">
        <link rel="stylesheet" href="./static/table.css">
    </head>

    <body>
        <div class="header">
            <h1 class="title">Week 4: Access Database through Web</h1>
            <h2 class="title">Online Questionare Remastered</h2>
        </div>
        <div class="left-bar">
            <p><a href="../index.html">Back to Homepage</a></p>
            <p><a href="./homework4-1.html">Questions</a></p>
            <p><a href="./homework4-2.html">Online Questionare Remastered</a></p>
        </div>
        <div class="main">
            <form action="./delete.php" method="post" id="dispform">
                <table id="mytable">
                    <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Email</th>
                    </tr>
<?php
$db = mysqli_connect("localhost", "usr_2016_96", "UmQAisW2lWGwkaDFwoPB");
if (!$db) {
    print "Error establishing database connection.";
    exit;
}

$err = mysqli_select_db($db, "db_2016_96");
if (!$err) {
    print "Error selecting database.";
    exit;
}
$query = "SELECT * FROM guest;";
$result = mysqli_query($db, $query);
if (!$result) {
    print "Error querying database.";
    $error_msg = mysqli_error($db);
    print "$error_msg";
    exit;
}

$num_rows = mysqli_num_rows($result);

for ($row_num=0; $row_num < $num_rows; $row_num++) {
    $row = mysqli_fetch_array($result);
    print "<tr><td><input type=\"checkbox\" name=\"select[]\" value=\"".($row["Guest_ID"])."\"></td><td>";
    print htmlspecialchars($row["Guest_Name"]);
    print "</td><td>".($row["Age"])."</td><td>".($row["Gender"])."</td><td>";
    print htmlspecialchars($row["E_mail"]);
    print "</td></tr>";
}
?>
                </table>
                <input type="submit" value="Delete Selected">
            </form>
        </div>
        <div class="footer">
            <p class="footer">Lei Yang, Fall 2016</p>
        </div>
    </body>
</html>

