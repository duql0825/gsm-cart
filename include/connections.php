<?php

   $server="13.209.36.194";
   $user="root";
   $pass="gsmcart";
   $db="alfk";

   // connect to mysql

   mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");

   // select the db

   mysql_select_db($db) or die("Sorry, can't select the database.");
