echo "<table border='1'>";

echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Skill</th>
<th>Experience</th>
<th>Phone</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['skill']."</td>";
    echo "<td>".$row['experience']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "</tr>";
}

echo "</table>";

?>