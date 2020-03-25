<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
  case 'about':
    include 'about.php';
    break;
  case 'contact':
    include 'contact.php';
    break;
  }
} else {
  include 'main.php';
}

?>
