

function allTasks()
{
	
}

function incompleteTasks()
{
	
}

function completeTasks()
{
	
}

function newTask()
{
	/* hide and show form when user clicks 'Add New Task' button */
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
	var valid = "";
	
	/* error checking before form submission */
	var x = document.forms["newTaskForm"]["taskName"].value;
	var y = document.forms["newTaskForm"]["taskDueDate"].value;
	
    /* error checking on taskName value */
	if (x == "") 
	{
        alert("Please fill in a task name.");
        valid = "invalid";
    }
	
	/* error checking on taskDueDate value */
	if (y == "") 
	{
        alert("Please fill in a due date.");
        valid = "invalid";
    }
	
	/* if inputs pass validation checks, submit to table - else, do not submit */
	if (valid == "valid")
	{
		alert("Valid");
	}
	else
	{
		alert("Invalid");
	}
}