<?php
$db = mysqli_connect("localhost", "usr_2016_96", "UmQAisW2lWGwkaDFwoPB");
// account info only for test
if (!$db) {
    print "Error establishing database connection.";
    exit;
}

$err = mysqli_select_db($db, "db_2016_96");
if (!$err) {
    print "Error selecting database.";
    exit;
}

$name = mysqli_real_escape_string($db, stripslashes($_POST['name']));
$age = mysqli_real_escape_string($db, stripslashes($_POST['age']));
$gender = mysqli_real_escape_string($db, stripslashes($_POST['gender']));
$email = mysqli_real_escape_string($db, stripslashes($_POST['email']));

$query = "INSERT INTO guest(Guest_Name, Gender, Age, E_mail) VALUES('$name', '$gender', '$age', '$email');";
$result = mysqli_query($db, $query);
if (!$result) {
    print "Error querying database.";
    $error_msg = mysqli_error($db);
    print "$error_msg";
    exit;
}

?>

<script type="text/javascript">
    alert('Success. Thank you!');
    window.location="http://162.105.146.180:8096/04/homework4-2.html";
</script>
