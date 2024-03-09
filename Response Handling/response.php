<?php
  // Handle the AJAX request
  if ($_POST["data"] == "1") {
    echo "Ajax ran successfully!";
  }
  if ($_GET["data"] == "2") {
      echo "Ajax error has occurred..";
  }
?>