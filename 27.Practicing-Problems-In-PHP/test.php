<?php

/* Section that executes query */
if($_GET['form'] == "yes")
{
	
	if($result == 0) echo "<b>Error ".mysqli_errno().": ".mysqli_error()."</b>";
	elseif (mysqli_num_rows($result) == 0) echo("<b>Query completed. No results returned.</b><br>");
	else
	{
		echo "<table border='1'>
		<thead>
			<tr>";
                for($i = 0; $i < mysqli_num_fields($result);$i++)
                {
                    echo "<th> ".mysqli_field_name($result,$i)." </th>";
                }
                echo "</tr>
			</thead>
			<tbody>";
				for($i = 0; $i < mysqli_num_rows($result); $i++)
				{
				    echo "<tr>";
				    $row = mysqli_fetch_row($result);
                    for($j = 0;$j<mysqli_num_fields($result);$j++)
                    {
                        echo("<td>" . $row[$j] . "</td>");
                    }
					echo "</tr>";
				}
			echo "</tbody>
			</table>";
	} //end else
	echo "
	<hr><br>
	<form action=\"{$_SERVER['PHP_SELF']}\" method=\"POST\">
		<input type='hidden' name='query' value='$query'>
		<input type='hidden' name='database_name'
		value={$_POST['database_name']}>
		<input type='submit' name=\"queryButton\"
		value=\"New Query\">
		<input type='submit' name=\"queryButton\"
		value=\"Edit Query\">
	</form>";
	unset($form);
	exit();
} // endif form=yes

/* Section that requests user input of query */
$query=stripSlashes($_POST['query']);
if ($_POST['queryButton'] != "Edit Query")
{
    $query = " ";
}
?>