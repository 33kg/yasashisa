<?php
$table = get_sub_field( 'fdt_table' );
if ( ! empty ( $table ) ) {
echo '<table class="fdt_tables">';
  if ( ! empty( $table['caption'] ) ) {
  echo '<caption>' . $table['caption'] . '</caption>';
  }
  if ( ! empty( $table['header'] ) ) {
  echo '<thead>';
    echo '<tr>';
      foreach ( $table['header'] as $th ) {
      echo '<th>';
        echo $th['c'];
        echo '</th>';
      }
      echo '</tr>';
    echo '</thead>';
  }
  echo '<tbody>';
    foreach ( $table['body'] as $tr ) {
    echo '<tr>';
      foreach ( $tr as $td ) {
      echo '<td>';
        echo $td['c'];
        echo '</td>';
      }
      echo '</tr>';
    }
    echo '</tbody>';
  echo '</table>';
}
?>