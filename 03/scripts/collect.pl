#!/usr/bin/perl -w
# Process user data and update file

use CGI ":standard";

sub error {
    print "<script type=\"text/javascript\">alert('Error opening file.');window.location=\"http://162.105.146.180:8096/03/homework3-2.html\"</script>";
    exit(1);
}

sub success {
    print "<script type=\"text/javascript\">alert('Success. Thank you!');window.location=\"http://162.105.146.180:8096/03/homework3-2.html\"</script>";
}

print header();

$LOCK = 2;
$UNLOCK = 8;

my($name, $age, $gender, $email) = (param("name"), param("age"), param("gender"), param("email"));

open(DB, ">>userdata.txt") or error();
flock(DB, $LOCK);

print DB "$name\n";
print DB "$age\n";
print DB "$gender\n";
print DB "$email\n";

flock(DB, $UNLOCK);
close(DB);

success();
