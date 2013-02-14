<?php

/**
 * @author Afreen
 * @copyright 2013
 */

?>
<html>
    <head>
        <title> Demo Page</title>
    </head>
    <body>
        <form action="" name="user_details" id="user_details" method="post">
            <table>
                 <tr>
                    <th colspan="2"> Users Details </th>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="user_name" id="user_name" /></td>
                </tr>
                <tr>
                    <td>Email ID</td>
                    <td><input type="text" name="email" id="email"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" id="submit" value="Submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?
if(isset($_POST['submit']))
{
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    echo "Username is :".$username;
    echo "<br /> Email ID is :".$email;
    
}
?>