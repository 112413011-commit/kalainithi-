<!DOCTYPE html>
<html>
<head>
    <title>College Club Registration</title>

    <style>
        body{
            background:#d9f2ff;
            font-family:Arial, sans-serif;
        }

        .container{
            width:700px;
            margin:auto;
            background:white;
            padding:20px;
            border:2px solid navy;
            border-radius:10px;
        }

        h2{
            text-align:center;
            color:darkblue;
        }

        table{
            width:100%;
        }

        td{
            padding:8px;
        }

        input[type=text],
        input[type=email],
        input[type=password],
        input[type=date],
        select,
        textarea{
            width:100%;
            padding:8px;
        }

        textarea{
            resize:none;
        }

        .error{
            color:red;
            font-weight:bold;
            text-align:center;
        }

        .success{
            color:green;
            font-weight:bold;
            text-align:center;
            font-size:18px;
        }

        input[type=submit],
        input[type=reset]{
            background:darkblue;
            color:white;
            padding:10px 20px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        input[type=submit]:hover,
        input[type=reset]:hover{
            background:green;
        }
    </style>
</head>

<body>

<div class="container">

<h2>College Club Registration Form</h2>

<?php

$name = $regno = $email = $password = $dept = $club = $reason = $dob = $year = "";
$message = "";

if(isset($_POST['submit']))
{
    $name = trim($_POST['name']);
    $regno = trim($_POST['regno']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $dept = $_POST['dept'];
    $club = $_POST['club'];
    $reason = trim($_POST['reason']);
    $dob = $_POST['dob'];
    $year = isset($_POST['year']) ? $_POST['year'] : "";

    if($name=="" || $regno=="" || $email=="" || $password=="" || $dept=="" || $club=="" || $reason=="" || $dob=="" || $year=="")
    {
        $message = "<p class='error'>All fields are required.</p>";
    }
    else
    {
        $today = new DateTime();
        $birth = new DateTime($dob);
        $age = $today->diff($birth)->y;

        if($age >= 18)
        {
            $message = "<p class='success'>Registration Successful!</p>";
        }
        else
        {
            $message = "<p class='error'>Age must be greater than or equal to 18 years.</p>";
        }
    }
}

echo $message;

?>

<form method="post">

<table>

<tr>
<td><b>Student Name</b></td>
<td>
<input type="text" name="name" value="<?php echo $name; ?>">
</td>
</tr>

<tr>
<td><b>Register Number</b></td>
<td>
<input type="text" name="regno" value="<?php echo $regno; ?>">
</td>
</tr>

<tr>
<td><b>Email ID</b></td>
<td>
<input type="email" name="email" value="<?php echo $email; ?>">
</td>
</tr>

<tr>
<td><b>Password</b></td>
<td>
<input type="password" name="password" value="<?php echo $password; ?>">
</td>
</tr>

<tr>
<td><b>Department</b></td>
<td>
<select name="dept">
<option value="">Select Department</option>
<option value="BCA" <?php if($dept=="BCA") echo "selected"; ?>>BCA</option>
<option value="B.Sc Computer Science" <?php if($dept=="B.Sc Computer Science") echo "selected"; ?>>B.Sc Computer Science</option>
<option value="B.Sc IT" <?php if($dept=="B.Sc IT") echo "selected"; ?>>B.Sc IT</option>
<option value="B.Com" <?php if($dept=="B.Com") echo "selected"; ?>>B.Com</option>
</select>
</td>
</tr>

<tr>
<td><b>Club</b></td>
<td>
<select name="club">
<option value="">Select Club</option>
<option value="Dance Club" <?php if($club=="Dance Club") echo "selected"; ?>>Dance Club</option>
<option value="Robotics Club" <?php if($club=="Robotics Club") echo "selected"; ?>>Robotics Club</option>
<option value="Environment Club" <?php if($club=="Environment Club") echo "selected"; ?>>Environment Club</option>
<option value="Music Club" <?php if($club=="Music Club") echo "selected"; ?>>Music Club</option>
<option value="Art Club" <?php if($club=="Art Club") echo "selected"; ?>>Art Club</option>
<option value="Cultural Club" <?php if($club=="Cultural Club") echo "selected"; ?>>Cultural Club</option>
</select>
</td>
</tr>

<tr>
<td><b>Reason for Joining</b></td>
<td>
<textarea name="reason" rows="4"><?php echo $reason; ?></textarea>
</td>
</tr>

<tr>
<td><b>Date of Birth</b></td>
<td>
<input type="date" name="dob" value="<?php echo $dob; ?>">
</td>
</tr>

<tr>
<td><b>Year of Study</b></td>
<td>

<input type="radio" name="year" value="I Year"
<?php if($year=="I Year") echo "checked"; ?>> I Year

<input type="radio" name="year" value="II Year"
<?php if($year=="II Year") echo "checked"; ?>> II Year

<input type="radio" name="year" value="III Year"
<?php if($year=="III Year") echo "checked"; ?>> III Year

<input type="radio" name="year" value="IV Year"
<?php if($year=="IV Year") echo "checked"; ?>> IV Year

</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Register">
<input type="reset" value="Clear">
</td>
</tr>

</table>

</form>

</div>

</body>
</html>