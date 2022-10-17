<?php
    require_once '../models/db_connect.php';
    require_once '../controllers/studentController.php';
    include 'header.php';
?>
<center>
    <form action="" method="POST" onsubmit="return doStudentValidation()">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id="name"><span id="err_name" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob" id="dob"><span id="err_dob" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Credit:</td>
                <td><input type="number" name="credit" id="credit"><span id="err_credit" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>CGPA:</td>
                <td><input type="number"  name="cgpa" id="cgpa"><span id="err_cgpa" style="color:red;"></span></td>
            </tr>
			 <tr>
                <td>DEPT_ID:</td>
                <td><input type="number" name="dept_id" id="credit"><span id="err_dept_id" style="color:red;"></span></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="add" value="Add"></td>
            </tr>
        </table>
    </form>
</center>
<script src="../scripts/validate.js"></script>
<?php
    include 'footer.php';
?>
