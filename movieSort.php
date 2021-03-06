<!DOCTYPE html>
<html>
<head>
    <title>Movie Sort</title>
</head>
<body>
<table border="0" cellspacing="3" cellpadding="3" align="center">
<tr>
    <td><h2>Rating</h2></td>
    <td><h2>Title</h2></td>
</tr>
<?php
/**
 * Shane Teall
 * Movie Sort Script
 * 9/19/2015
 */
// create movies array
$movies = array(
    'Blackhat' => 7,
    'Edge of Tomorrow' => 6,
    'Hackers' => 5,
    'Mad Max' => 9,
    'ExMachina' => 8,
    'Source Code' => 4,
);
// display in original order
echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
foreach ($movies as $title => $rating) {
    echo "<tr><td>$rating</td><td>$title</td></tr>\n";
}
// display sorted by title
ksort($movies);
echo '<tr><td colspan="2"><b>Sorted by Title:</b></td></tr>';
foreach ($movies as $title => $rating) {
    echo "<tr><td>$rating</td><td>$title</td></tr>\n";
}
// display sorted by rating
arsort($movies);
echo '<tr><td colspan="2"><b>Sorted by Title:</b></td></tr>';
foreach ($movies as $title => $rating) {
    echo "<tr><td>$rating</td><td>$title</td></tr>\n";
}
?>
</table>
</body>
</html>
