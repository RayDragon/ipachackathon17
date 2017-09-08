<?php
    include("mylib/conn.php");
    $con=new conn();
    $con->connect();
    
    $id= getUserId($con->conn);
    $data = mysqli_fetch_assoc(mysqli_query($con->conn,"SELECT * FROM users where uid='".$id."'"));
?>

    <h1>About</h1>
    <table width="100%" class="w3-table">
        <tr>
            <td>Email</td>
            <td><input class="w3-input" type="text" value="<?php echo $data['name']?>"></td>
        </tr>
    	<tr>
            <td>Website</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
    	<tr>
            <td>qualifications</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
    	<tr>
            <td>Email</td>
            <td><input class="w3-input" type="text" value="<?php echo$data['email']?>"></td>
        </tr>
    	
    </table>
    <h1>Skills</h1>
    <table class="w3-table">
        <tr>
            <td>Technologies Known</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
        <tr>
            <td>Technologies on which you<br> can provide guidance</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
    </table>
   <h1>Work Experience</h1>
    <table class="w3-table">
        <tr>
            <td>Internships</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
        <tr>
            <td>Projects</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
        <tr>
            <td>Achievements</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
        <tr>
            <td>Research work</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
    </table>
    <h1>Status</h1>
    <table class="w3-table">
        <tr>
            <td>Providing guidance to</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
        <tr>
            <td>Taking guidance under</td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
        <tr>
            <td>Ongoing Work: </td>
            <td><input class="w3-input" type="text" ></td>
        </tr>
    </table>
    