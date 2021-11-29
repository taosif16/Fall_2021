<!DOCTYPE html>
<html>


<body>
    <h3>Registration Form</h3>
    <hr>
    <form action="" method="POST" onsubmit="return validation()">

        <script type="text/javascript" src="../js/js.js">

        </script>
        <p id="error"></p>

        First Name :
        <input type="text" name="fname"> <br>

        Last Name :
        <input type="text" name="lname"> <br>

        Age :
        <input type="text" name="age"> <br>

        Designation :
        <input type="radio" id="jp" name="Designation" value="Junior Programmer">
        <label for="jp">Junior Programmer</label>
        <input type="radio" id="sp" name="Designation" value="Senior Programmer">
        <label for="sp">Senior Programmer</label>
        <input type="radio" id="pl" name="Designation" value="Project Lead">
        <label for="pl">Project Lead</label>
        <br>

        Preferred Language:
        <input type="checkbox" id="java" name="java" value="JAVA">
        JAVA
        <input type="checkbox" id="php" name="php" value="PHP">
        PHP
        <input type="checkbox" id="c++" name="c++" value="C++">
        C++ <br>

        Email :
        <input type="text" name="email"> <br>

        Password :
        <input type="text" name="password"> <br>

        Please choose a file :
        <input type="file" name="filetoupload"><br>

        <input type="submit" name="submit" value="Sumbit">
        <input type="reset" name="reset" value="Reset">
    </form>

</body>

</html>