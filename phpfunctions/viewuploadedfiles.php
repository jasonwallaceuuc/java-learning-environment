<?php
$count=1;
$sel_query="Select * from filetable;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><a href="upload/viewpdf.php?file=<?php echo $row["filename"]; ?>.pdf" target="_new"><?php echo $row["filetitle"]; ?></a></td><td align="center"><a href="deletefile.php?id=<?php echo $row["id"]; ?>&filename=<?php echo $row["filename"]; ?>" onclick="return confirm('Are you sure?')">Delete</a></td></tr>
<?php $count++; } ?>