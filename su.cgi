#!C:\xampp\perl\bin\perl.exe
use DBI;
use strict;
use CGI':standard';

print "content-type:text/html\n\n";
print "Successful yes";
my $fn=$_POST['fn'];
my $ln=$_POST['ln'];
my $email=$_POST['email'];
my $password=$_POST['password'];
my $dsn = DBI->connect("DBI:mysql:database=mmt;host=localhost","root", "");


my $sth=$dsn->prepare("insert into user values('$fn','$ln','$email','$password')");
$sth->execute();
$sth->finish();

print "Successful";