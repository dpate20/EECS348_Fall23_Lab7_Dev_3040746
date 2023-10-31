<?php



 $numberOfTables = $_POST['Size of the multiplication table'];
 for ($i = 1; $i <= $numberOfTables; $i++) {
    echo "<table border='1'>";
    echo "<caption>Table " . $i . "</caption>";


    for ($j = 1; $j <= 10; $j++) {
      echo "<tr><td>{$i} x {$j}</td>";
      for ($k = 1; $k <= 10; $k++) {
        echo "<td>" . ($i * $j * $k) . "</td>";
      }
      echo "</tr>";
    }

    echo "</table>";
    echo "<br>";
    
    if (ob_get_level() > 0) {
    ob_end_flush();
}

 }
?>
