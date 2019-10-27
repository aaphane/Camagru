# PHP-MVC-Framework
PHP MVC is an application design pattern that separates the application data and business logic (model) from the presentation (view). MVC stands for Model, View &amp; Controller. The controller mediates between the models and views.  Think of the MVC design pattern as a car and the driver.  The car has the windscreens (view) which the driver (controller) uses to monitor traffic ahead then speed or brake (model) depending on what he sees ahead.

Why use PHP MVC Framework?

PHP MVC Frameworks simplify working with complex technologies by;
Hiding all the complex implementation details
Providing standard methods that we can use to build our applications.
Increased developer productivity, this is because the base implementation of activities such as connecting to the database, sanitizing user input etc. are already partially implemented.
Adherence to professional coding standards

PHP MVC Design Pattern

MODEL – this part is concerned with the business logic and the application data. It can be used to perform data validations, process data and store it. The data can come from;
flat file
database
XML document
Other valid data sources.
CONTROLLER – this is the part deals with the users’ requests for resources from the server.
As an example, when the users requests for the URL …/index.php?products=list, the controller will load the products model to retrieve the products data then output the results in the list view.
In a nutshell, the controller links the models and views together depending on the requested resources.
VIEWS – this part deals with presenting the data to the user. This is usually in form of HTML pages.
