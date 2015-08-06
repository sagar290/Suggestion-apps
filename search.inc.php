<?php

//mysql connection
if (@mysql_connect('localhost', 'root', '')) {

  if (@mysql_select_db('a_database')) {

  }
}

//GET search_txt
if (isset($_GET['search_txt'])) {
   $search_txt = $_GET['search_txt'];

     if (!empty($search_txt)){
       $query = "SELECT `name` FROM `names` WHERE `name` LIKE '%".mysql_real_escape_string($search_txt)."%'";
     $query_run = mysql_query($query);
     while ($query_row = mysql_fetch_assoc($query_run)) {
       echo $name = '<a href="anotherpage.php?search_txt='.$query_row['name'].'">'.$query_row['name'].'</a><br>';
     }
   }
}

 ?>
