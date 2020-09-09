# RabIT Test Solution
This is a solution for the job application test sent to me by RabIT.

## The Task
I had to create a simple web application applying MVC pattern.\
Other criteria:
- Object Oriented
- MySQL database
- Minimal CSS
    
The backend was in the focus. The database consisted of two tables with a foreign key connection.

## Method
Until now, i was working with the Laravel framework, so basically what i made is the skeleton of Laravel (or probably even less 😅).

### Model
The model should only contain database and data related functions. Basic CRUD, for the relevant table and maybe some specific joins or reduced datasets (ViewModel in .NET). Because i only needed to show data, the model's purpose is not that straightforward. So i made some placeholders for the other CRUD functions.\
This approach may contradict one of the requirements:\
"Model and service methods should be separated. Model here should be clear, used only for representation."\
But i think putting the basic CRUD operations for the table is acceptable. If some more complex business logic is needed, then that can go into a different model.

### Controller
The controller handles the user interaction with the system. Routing data from user input to the applicable model function, or putting data from the database into views.

### View
The view layer consists of webpages populated with data supplied by the models through the controller.

### Routing
I made a router which handles the requests and routes information to the appropriate controller.

### Booting
The boot process gathers the needed classes.

### Logging
For easier development, i made a simple logging function.

### Error handling
The error handling is very simple, but i was not sure how complex it should have been. Normally i would use try catch blocks in the controller so i can have detailed information about the problem and can supply detailed information to the user if needed.

## Configuration
The database connection details must be added in the /database/settings.ini file.\
If missing, the /logs folder must be created for the logging to work.\
The webserver should be pointed to the /public folder. The starting point is the index.php file.
