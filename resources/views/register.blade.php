<!DOCTYPE html>
<html>
<head>
    <title>Student Management | Add</title>
</head>
<body>
    <form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type='text' name='first_name' /></td>
        </tr>
        <tr>
            <td>Middle Name</td>
            <td><input type="text" name='middle_name'/></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name='last_name'/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name='email'/></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name='age'/></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="text" name='gender'/></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name='address'/></td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Add student"/>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>