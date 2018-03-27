function initializePage()
{
	document.getElementById("completeRadio").disabled = true;
	
	//Show dashboard
		//Total number of tasks:
		//Total number of Incomplete tasks:
		//Total number of Complete tasks:
	
	//Hide newTaskForm & markTaskComplete
}

function displayAllTasks()
{
    var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "php.php?function=displayAllTasks", false);
	xhttp.send();
	document.getElementById("table").innerHTML = xhttp.responseText;
}

function displayIncompleteTasks()
{
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "php.php?function=displayIncompleteTasks", false);
	xhttp.send();
	document.getElementById("table").innerHTML = xhttp.responseText;
}

function displayCompleteTasks()
{
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "php.php?function=displayCompleteTasks", false);
	xhttp.send();
	document.getElementById("table").innerHTML = xhttp.responseText;
}

function addNewTask()
{
	// hide and show form when user clicks 'Add New Task' button
	var x = document.getElementById("newTaskForm");
    if (x.style.display === "none") 
	{
        x.style.display = "block";
    } 
	else 
	{
        x.style.display = "none";
    }
}

function submitNewTask()
{
	var taskName = document.getElementById("taskName").value;
	var taskDueDate = document.getElementById("taskDueDate").value;
	var taskStatus = "Incomplete";
	
	// error checking to make sure all values are filled in
	if (taskName != "" && taskDueDate != "")
	{
		alert('getting here first');
		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "php.php?function=submitNewTask", false);
		xhttp.send();
		document.getElementById("table").innerHTML = xhttp.responseText;
	}
	else
	{
		alert("One or more invalid values. Please fill in all values then resubmit.");
	}
}

/*
function markTaskComplete()
{
	var xhttp = new XMLHttpRequest();
	xhttp.open("PUT", "php.php?function=markTaskComplete", false);
	xhttp.send();
	alert(xhttp.responseText);
}
*/