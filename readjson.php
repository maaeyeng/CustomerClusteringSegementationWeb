<?php
require('header.php');
$json=file_get_contents("data.json");
      $data =  json_decode($json, true);
      echo "<table class='table'>";
      foreach ($data as $key => $value) {
          echo "<tr scope='row'>";
            if (!is_array($value)) {
                echo "<td>". $value . '</td>';
            } else {
                foreach ($value as $key => $val) {
                    echo "<td>". $val . '</td>';
                }
            }
            echo "</tr>";
        }
        echo "</table>"
?> 