#!/usr/bin/perl -w
# Process user data and update file

use CGI ":standard";

$LOCK = 2;
$UNLOCK = 8;

sub success {
    print "<script type=\"text/javascript\">window.location=\"http://162.105.146.180:8096/03/homework3-2-results.html\"</script>";
}

my(@name, @age, @gender, @email);
my @selected_list = param("select");
my %selected = map {$_ => 1} @selected_list;
my $entry_count = 0;

open(DB, "<userdata.txt");
flock(DB, $LOCK);

while (my $line = <DB>) {
    if (exists($selected{$entry_count})) {
        $entry_count += 1;
        $line = <DB>;
        $line = <DB>;
        $line = <DB>;
        next;
    }
    $entry_count += 1;
    chomp $line;
    push @name, $line;

    $line = <DB>;
    chomp $line;
    push @age, $line;

    $line = <DB>;
    chomp $line;
    push @gender, $line;

    $line = <DB>;
    chomp $line;
    push @email, $line;
}

flock(DB, $UNLOCK);
close(DB);

open(DB, ">userdata.txt");
flock(DB, $LOCK);

while (my $output = shift(@name)) {
    print DB "$output\n";
    $output = shift(@age);
    print DB "$output\n";
    $output = shift(@gender);
    print DB "$output\n";
    $output = shift(@email);
    print DB "$output\n";
}

flock(DB, $UNLOCK);
close(DB);
print header();
success();
