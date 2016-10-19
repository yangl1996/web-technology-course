#!/usr/bin/perl -w
# Process user data and update file

use CGI ":standard";

$LOCK = 2;
$UNLOCK = 8;

open(DB, "<userdata.txt");
flock(DB, $LOCK);

print header('application/json');
print '[';

my $first_element = 1;

while (my $line = <DB>) {
    if ($first_element == 1) {
        $first_element = 0;
    }
    else {
        print ", ";
    }

    print '{';
    
    chomp $line;
    print "\"name\": \"";
    print $line;
    
    $line = <DB>;
    chomp $line;
    print "\", \"age\": \"";
    print $line;

    $line = <DB>;
    chomp $line;
    print "\", \"gender\": \"";
    print $line;

    $line = <DB>;
    chomp $line;
    print "\", \"email\": \"";
    print $line;

    print "\"}";
}
print ']';

flock(DB, $UNLOCK);
close(DB);




