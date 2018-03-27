<?php
	
	//Take these values out before putting on GitHub
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";
	
	// Create & check connection
	$connection = mysqli_connect($servername, $username, $password, $dbname)
    or die ('Could not connect to the database server' . mysqli_connect_error());
	$function=$_REQUEST["function"];
	$function();
	
	function displayAllTasks()
	{
		global $connection;
		$query = "SELECT * FROM mydatabase.tasklist";
		if($result = mysqli_query($connection, $query))
		{
			if(mysqli_num_rows($result) > 0)
			{
				echo "<table>";
					echo "<tr>";
						echo "<th>Task Name</th>";
						echo "<th>Due Date</th>";
						echo "<th>Status</th>";
						echo "<th>Task Number</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
						echo "<td>" . $row['taskName'] . "</td>";
						echo "<td>" . $row['dueDate'] . "</td>";
						echo "<td>" . $row['status'] . "</td>";
						echo "<td>" . $row['taskNumber'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
	}
	
	function displayIncompleteTasks()
	{
		global $connection;
		$query = "SELECT * FROM mydatabase.tasklist WHERE status = 'Incomplete'";
		if($result = mysqli_query($connection, $query))
		{
			if(mysqli_num_rows($result) > 0)
			{
				echo "<table>";
					echo "<tr>";
						echo "<th>Task Name</th>";
						echo "<th>Due Date</th>";
						echo "<th>Status</th>";
						echo "<th>Task Number</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
						echo "<td>" . $row['taskName'] . "</td>";
						echo "<td>" . $row['dueDate'] . "</td>";
						echo "<td>" . $row['status'] . "</td>";
						echo "<td>" . $row['taskNumber'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
	}
	
	function displayCompleteTasks()
	{
		global $connection;
		$query = "SELECT * FROM mydatabase.tasklist WHERE status = 'Complete'";
		if($result = mysqli_query($connection, $query))
		{
			if(mysqli_num_rows($result) > 0)
			{
				echo "<table>";
					echo "<tr>";
						echo "<th>Task Name</th>";
						echo "<th>Due Date</th>";
						echo "<th>Status</th>";
						echo "<th>Task Number</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
						echo "<td>" . $row['taskName'] . "</td>";
						echo "<td>" . $row['dueDate'] . "</td>";
						echo "<td>" . $row['status'] . "</td>";
						echo "<td>" . $row['taskNumber'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
	}
	
	function submitNewTask()
	{	
		$taskName = $POST['taskName'];
		$taskDueDate = $POST['taskDueDate'];
		$taskStatus = $POST['taskStatus'];
		/*
		global $connection;
		$query = "INSERT INTO mydatabase.tasklist(taskName, dueDate, status) VALUES ($taskName, $taskDueDate, $taskStatus)";
		if($result = mysqli_query($connection, $query))
		{
			if(mysqli_num_rows($result) > 0)
			{
				echo "<table>";
					echo "<tr>";
						echo "<th>Task Name</th>";
						echo "<th>Due Date</th>";
						echo "<th>Status</th>";
						echo "<th>Task Number</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
						echo "<td>" . $row['taskName'] . "</td>";
						echo "<td>" . $row['dueDate'] . "</td>";
						echo "<td>" . $row['status'] . "</td>";
						echo "<td>" . $row['taskNumber'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
		*/
	}
	
	/*
	function markTaskComplete()
	{
		global $connection;
		$parm=$_REQUEST["parm"];
		$query = mysql_query("SELECT * FROM mydatabase.tasklist WHERE status = 'Complete'");
		echo "Hello " . $parm;
	}
	
	*/
?>