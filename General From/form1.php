<form id="form1" method="post">
        FirstName:
        <input type="text" name="firstname" required/>
        <br>
        <br> 
        LastName
        <input type="text" name="lastname" required/>
        <br>
        <br> 
        Address
        <input type="text" name="address" required/>
        <br>
        <br> 
        Email Address:
        <input type="email" name="emailaddress" required/>
        <br>
        <br> 
        Password:
        <input type="password" name="password" required/>
        <br>
        <br>
        <input type="submit" value="Submit”/>
    </form>
</body>
</html>
Form Validation: Form validation is done to ensure that the user has provided the relevant information. Basic validation can be done using HTML elements. For example, in the above script, the email address text box is having a type value as “email”, which prevents the user from entering the incorrect value for an email. Every form field in the above script is followed by a required attribute, which will intimate the user not to leave any field empty before submitting the form. PHP methods and arrays used in form processing are:

isset(): This function is used to determine whether the variable or a form control is having a value or not.
$_GET[]: It is used the retrieve the information from the form control through the parameters sent in the URL. It takes the attribute given in the url as the parameter.
$_POST[]: It is used the retrieve the information from the form control through the HTTP POST method. IT takes name attribute of corresponding form control as the parameter.
$_REQUEST[]: It is used to retrieve an information while using a database.
Form Processing using PHP: Above HTML script is rewritten using the above mentioned functions and array. The rewritten script validates all the form fields and if there are no errors, it displays the received information in a tabular form.

Example:
<?php
if (isset($_POST['submit']))
{
    if ((!isset($_POST['firstname'])) || (!isset($_POST['lastname'])) || 
        (!isset($_POST['address'])) || (!isset($_POST['emailaddress'])) || 
        (!isset($_POST['password'])) || (!isset($_POST['gender'])))
    {
        $error = "*" . "Please fill all the required fields";
    }
    else
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $emailaddress = $_POST['emailaddress'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
    }
}
?>
<html>
  
<head>
    <title>Simple Form Processing</title>
</head>
  
<body>
    <h1>Form Processing using PHP</h1>
    <fieldset>
        <form id="form1" method="post" action="form.php">
            <?php
                if (isset($_POST['submit']))
                {
                    if (isset($error))
                    {
                        echo "<p style='color:red;'>" 
                        . $error . "</p>";
                    }
                }
                ?>
  
                FirstName:
                <input type="text" name="firstname"/> 
                 <span style="color:red;">*</span>
                <br>
                <br>
                Last Name:
                <input type="text" name="lastname"/>
                  <span style="color:red;">*</span>
                <br>
                <br> 
                Address:
                <input type="text" name="address"/>
                  <span style="color:red;">*</span>
                <br>
                <br> 
                Email:
                <input type="email" name="emailaddress"/>
                  <span style="color:red;">*</span>
                <br>
                <br> 
                Password:
                <input type="password" name="password"/>
                   <span style="color:red;">*</span>
                <br>
                <br> 
                Gender:
                <input type="radio" 
                       value="Male" 
                       name="gender"> Male
                <input type="radio" 
                       value="Female"
                       name="gender">Female
                <br>
                <br>
                <input type="submit" value="Submit" name="submit" />
        </form>
    </fieldset>
    <?php
       if(isset($_POST['submit']))
       {
          if(!isset($error))
           {
                   echo"<h1>INPUT RECEIVED</h1><br>";
                   echo "<table border='1'>";
                   echo "<thead>";
                   echo "<th>Parameter</th>";
                   echo "<th>Value</th>";
                   echo "</thead>";
                   echo "<tr>";
                   echo "<td>First Name</td>";
                   echo "<td>".$firstname."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Last Name</td>";
                   echo "<td>".$lastname."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Address</td>";
                   echo "<td>".$address."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Email Address</td>";
                   echo "<td>" .$emailaddress."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Password</td>";
                   echo "<td>".$password."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Gender</td>";
                   echo "<td>".$gender."</td>";
                   echo "</tr>";
                   echo "</table>";
        }
      }
    ?>
</body>
  
</html>