

<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Query database for data
$sql = "SELECT * FROM tb_reprotgarbage";
$result = mysqli_query($conn, $sql);



// Display data in HTML table
echo "<table width:100%>";
echo "<tr><th>Image</th><th>Details</th><th>Map</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  $image = $row['image_data'];
  $details = $row['details'];
  $latitude = $row['lat'];
  $longitude = $row['lang'];

  echo "<tr>";
  echo "<td><img src='../gtf_member/GTF_member_dash/uploads/".$image."' width='250'></td>";
  echo "<td>$details</td>";
  echo "<td><iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31702.12261065936!2d".$longitude."!3d".$latitude."!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1683822487380!5m2!1sen!2slk' 
width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></td>";
    echo "</tr>";
}
echo "</table>";

// Close database connection
mysqli_close($conn);
?>
<style>
table {
  border-collapse: collapse; /* remove default spacing between table cells */
  border: 1px solid black; /* add border to table */
  margin: auto; /* center the table on the page */
}

th, td {
  padding: 8px;
  width: 50px;
  border: 1px solid black; /* add border to table */
  margin: auto;
   /* add padding to table cells */
}

tr:nth-child(even) {
  background-color: #f2f2f2; /* add alternating background color to table rows */
}
</style>
