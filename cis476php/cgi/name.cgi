#!D:/perl/bin/perl.exe
#
## Paste this into a html file in htdocs
##
## <FORM action="/cgi-bin/name.cgi" method="POST">
## First Name: <input type="text" name="first_name">  <br>
## Last Name: <input type="text" name="last_name">
## <input type="submit" value="Submit">
## </FORM>


    local ($buffer, @pairs, $pair, $name, $value, %FORM);
    # Read in text
    $ENV{'REQUEST_METHOD'} =~ tr/a-z/A-Z/;
    if ($ENV{'REQUEST_METHOD'} eq "POST")
    {
        read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
    }else {
	$buffer = $ENV{'QUERY_STRING'};
    }
    # Split information into name/value pairs
    @pairs = split(/&/, $buffer);
    foreach $pair (@pairs)
    {
	($name, $value) = split(/=/, $pair);
	$value =~ tr/+/ /;
	$value =~ s/%(..)/pack("C", hex($1))/eg;
	$FORM{$name} = $value;
    }
    $first_name = $FORM{first_name};
    $last_name  = $FORM{last_name};

print "Content-type:text/html\r\n\r\n";
print "<html>";
print "<head>";
print "<title>Hello - my CGI Program</title>";
print "</head>";
print "<body>";
print "<h2>Hello $first_name $last_name - from my CGI Program</h2>";
print "</body>";
print "</html>";

