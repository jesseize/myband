<?php

$result_list = array();

$sql = "SELECT * FROM social";

$result = $mysqli->query($sql);

while($item = $result->fetch_assoc()) {
  $result_list[] = $item;
}
