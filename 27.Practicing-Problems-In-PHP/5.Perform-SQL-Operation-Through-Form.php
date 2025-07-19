<!-- Program:
	Desc:
	mysql_send.php
	PHP program that sends an SQL query to the
	MySQL server and displays the results.
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SQL Query Sender</title>
	</head>
	<style>
		form{
			margin: 0 auto;
		}
		table{
			border:1px solid #000;
			padding: 10px 10px;
			margin: 10px;
		}
		table tr{
			border-top: 1px solid #000;
			border-bottom: 1px solid #000;
		}
		table tr td input{
			width: 95%;
		}
		table tr td input, table tr td textarea{
			border: 1px solid #000;
			padding: 6px;
			margin: 5px;
		}
		.heading-title{
			color: blue;
			text-decoration:underline;
			padding: 7px;
			margin: 5px;
		}
		.btn, .btn-edit, .btn-new{
			padding:5px 10px;
			color: #fff;
			background-color: blue;
			font-weight: 700;
			border:1px solid blue;
			outline: none;
			border-radius: 5px 5px;
			margin: 10px;
		}
		.db-msg, .query-msg{
			color: blue;
			font-size: 18px;
			font-weight: 800;
		}
		.db-msg b, .query-msg b{
			color: gray;
		}
		.result-msg{
			color: green;
			font-weight: 800;
		}
	</style>
<body>
	<?php
		// define db property
		$host = "localhost";
		$user = "root";
		$password = "";

		function connect_database($host, $user, $password, $post_details)
		{	
			// $connection = new mysqli($host, $user, $password, $_POST['database_name']);
			$connection = mysqli_connect($host,$user,$password);
			// var_dump($connection->connect_error);
			if($connection->connect_error !== NULL){
				// display the connection error
       			die("Connection failed: " . $connection->connect_error);
				
			}
			$db_select = mysqli_select_db($connection, $post_details['database_name']);
			return [
				'connection' => $connection,
				'db_select' => $db_select,
			];
		}

		function query_perform_operation($connection, $query_input)
		{
			// setup query string
			$query = stripSlashes($query_input);

			// perform query
			$result = mysqli_query($connection, $query);

			return [
				'query_input' => $query_input,
				'result' => $result
			];
		}

		function get_formatted_data($host, $user, $password, $post_data)
		{
			
			$db_setup = connect_database($host, $user, $password, $post_data);
			$performed_query = query_perform_operation($db_setup['connection'], $post_data['query']);

			$j = 1;
			while ($row = $fetch_records = mysqli_fetch_array($performed_query['result'], MYSQLI_ASSOC))
			{
				foreach ($row as $colname => $value)
				{
					$array[$j][$colname] = $value;
				}
				$j++;
			}
			return $array;
			
		}

		function generate_formatted_html($formatted_data)
		{
			/* Display results in a table */
			echo "<h1>Horses</h1>";
			echo "<table cellspacing='15'>";
			echo "<tr><td colspan='4'><hr></td></tr>";
			for ($i=1; $i<=sizeof($formatted_data); $i++)
			{
				$f_price = number_format($formatted_data[$i]['product_price'],2);
				echo "<tr>\n
				<td>$i.</td>\n
				<td>{$formatted_data[$i]['prodcut_name']}</td>\n
				<td>{$formatted_data[$i]['prodcut_type']}</td>\n
				<td>{$formatted_data[$i]['prodcut_code']}</td>\n
				<td>{$formatted_data[$i]['prodcut_barcode']}</td>\n
				<td>{$formatted_data[$i]['prodcut_status']}</td>\n
				<td align='right'>\$$f_price</td>\n
				</tr>\n";
				echo "<tr><td colspan='4'><hr></td></tr>\n";
			}
			echo "</table>\n";
		}

	?>

	<form action="<?php echo $_SERVER["PHP_SELF"]?>" form="yes" method="POST">
		<h2 class="heading-title">Query Submission Form</h2>
		<table>
			<tr>
				<td align="right"><b>Type in database name</b></td>
				<td><input type="text" name="database_name" value="<?php echo $_POST["database_name"] ?>"></td>
			</tr>
			<tr>
				<td align="right" valign="top"><b>Type in SQL query</b></td>
				<td>
					<textarea name="query" cols="60" rows="10"><?php echo $_POST['query'] ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit" name="btn-submit-query" class="btn">Submit Query</button></td>
			</tr>
		</table>
	</form>

	<?php

		if(isset($_POST['btn-submit-query']))
		{
			
			$db_setup = connect_database($host, $user, $password, $_POST);
			$performed_query = query_perform_operation($db_setup['connection'], $_POST['query']);

			$fetch_records = mysqli_fetch_array($performed_query['result'], MYSQLI_ASSOC);
			// var_dump($fetch_records);
			// var_dump($performed_query['result']);
	
			
			$db_msg = "<p class='db-msg'> Database Selected: <b> {$_POST["database_name"]} </b> </p>";
			$query_msg = "<p class='query-msg'>Query: <b>{$performed_query["query_input"]}</b> </p>";
			echo "{$db_msg} {$query_msg} <br>";
			echo "<h3 class='result-msg'>Results</h3><hr>";

			// $formatted_result = get_formatted_data($host, $user, $password, $_POST);
			// generate_formatted_html($formatted_result);
		

			if(!$performed_query['result']){
				echo "<b>Error ".$db_setup['connection']->errno . ": ". $db_setup['connection']->error ? 'No query error' : '' . "</b>";
			} elseif ($performed_query['result']->num_rows == 0) { 
				echo("<b>Query completed. No results returned.</b><br>");
			}else{
				echo "<table border='1'>
					<thead>
						<tr>";
							foreach($fetch_records as $key => $value)
							{
								echo "<th> ".$key." </th>";
							}
							echo "</tr>
						</thead>
						<tbody>";
							for($i = 0; $i < mysqli_num_rows($performed_query['result']); $i++)
							{
								echo "<tr>";
								$row = mysqli_fetch_row($performed_query['result']);
								for($j = 0; $j < mysqli_num_fields($performed_query['result']); $j++)
								{
									echo("<td>" . $row[$j] . "</td>");
								}
								echo "</tr>";
							}
						echo "</tbody>
					</table>";
				
			}//end else

			echo "
			<hr><br>
			<form action=\"{$_SERVER['PHP_SELF']}\" method=\"POST\">
				<input type='hidden' name='query' value={$_POST['query']}>
				<input type='hidden' name='database_name' value={$_POST['database_name']}>
				<input type='submit' name=\"queryButton\" class=\"btn-new\" value=\"New Query\">
				<input type='submit' name=\"queryButton\" class=\"btn-edit\" value=\"Edit Query\">
			</form>";
			unset($form);
			exit();

		}	

		// $query=stripSlashes($_POST['query']);
		// if ($_POST['queryButton'] != "Edit Query")
		// {
		// 	$query = " ";
		// }

	?>
</body>
</html>