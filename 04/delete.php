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

$checked_list = $_POST["select"];
foreach((array)$checked_list as $index) {
    $query = "DELETE FROM guest WHERE Guest_ID=$index;";
    $result = mysqli_query($db, $query);
    if (!$result) {
        print "Error querying database.";
        $error_msg = mysqli_error($db);
        print "$error_msg";
        exit;
    }
}
?>

<script type="text/javascript">
    window.location="http://162.105.146.180:8096/04/results.php";
</script>
