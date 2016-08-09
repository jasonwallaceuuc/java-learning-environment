<?php
$count=1;
$sel_query="Select * from users ORDER BY id desc;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["id"]; ?></td><td align="center"><?php echo $row["username"]; ?></td><td align="center"><?php echo $row["trn_date"]; ?></td><td align="center"><?php echo $row["email"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["email"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=">Delete</a></td></tr>
<?php $count++; } ?>