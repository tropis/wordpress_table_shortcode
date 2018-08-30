<?php
// Shortcode table example
// template file
// phil hardaker aug 30 2018
//
// Requires an array of rows of fields $data_rows 
// Requires a string $group_title
?>

<style>
.prh_div {
  background: #ffffee; /* pale yellow */
}
.prh_table {
  font-size: .66em;
  width: 100%;
}
.prh_table thead {
  font-weight: bold;
  background: #cceecc; /* heading background light green */
}
.prh_title {
  font-weight: bold;
  color: #338833; /* darker green */
}
</style>

<div class="prh_div">
  <div class="prh_title"><b><?=$group_title?></b></div>
  <table class="prh_table">
    <thead>
      <tr>
        <td>First</td>
        <td>Last</td>
        <td>Addr1</td>
        <td>Addr2</td>
        <td>City</td>
        <td>State</td>
        <td>Zip</td>
      </tr>
    </thead>
    <tbody>
<?php

  //echo "<pre>";
  //print_r($data_rows);
  //echo "</pre>";

  foreach ( $data_rows as $ix => $row ){

    echo "\n<tr>\n";
    echo "<td>". htmlentities( $row['first'] ) ."</td>\n";
    echo "<td>". htmlentities( $row['last'] ) ."</td>\n";
    echo "<td>". htmlentities( $row['addr1'] ) ."</td>\n";
    echo "<td>". htmlentities( $row['addr2'] ) ."</td>\n";
    echo "<td>". htmlentities( $row['city'] ) ."</td>\n";
    echo "<td>". htmlentities( $row['state'] ) ."</td>\n";
    echo "<td>". htmlentities( $row['postal'] ) ."</td>\n";
    echo "\n</tr>\n";
  }
?>
    </tbody>
  </table>
</div>

