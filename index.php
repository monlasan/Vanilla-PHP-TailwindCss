<?php
// session_start();


if (isset($_GET['p']) && $_GET['p'] !== "") {
  if (is_file("src/controllers/" . $_GET['p'] . ".php")) {
    include "src/controllers/" . $_GET['p'] . ".php";
  } else {
    include "templates/_404.php";
  }
} else {
  include "src/controllers/home.php";
}
