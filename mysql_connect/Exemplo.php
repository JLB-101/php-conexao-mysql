<?php 

# Exemplo #1 mysql_connect() example:

/*
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
*---------------------------------------------------------------*/


# Exemplo #2 mysql_connect() example using hostname:port syntax
// we connect to example.com and port 3307
// Nós nos conectamos ao exemplo.com e à porta 3307

/*
$link = mysql_connect('example.com:3307', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

// we connect to localhost at port 3307
$link = mysql_connect('127.0.0.1:3307', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
*---------------------------------------------------------------*/


# Exemplo #3 mysql_connect() example using ":/path/to/socket" syntax

// we connect to localhost and socket e.g. /tmp/mysql.sock
// Nós nos conectamos ao localhost e ao soquete, por exemplo /tmp/mysql.sock
// variant 1: omit localhost
/* 
$link = mysql_connect(':/tmp/mysql', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);


// variant 2: with localhost
$link = mysql_connect('localhost:/tmp/mysql.sock', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
*---------------------------------------------------------------*/

/* simple:*/
$server = 'y.com';
$login='x';
$pass='x';
$db='x';

$spojeni=mysql_connect($server,$login,$pass) or die ('nelze se pripojit');
mysql_select_db($db,$spojeni);
mysql_query("Set names 'utf8'");
