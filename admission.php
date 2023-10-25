<style>
.ad-container{
	max-width:500px;
	width:100%;
	margin:20px auto;
	padding:20px auto;
	box-sizing:border-box;
	box-shadow:5px 5px 5px rgba(0,0,0,0.5);
}
.ad-container .title{
	font-size:24px;
	font-weight:700;
	margin-bottom:25px;
	color:orange;
	text-transform:uppercase;
	text-align:center;
}
.ad-container .form{
	width:100%;
}
.ad-container .form .input_field{
	margin-bottom:15px;
	display:flex;
	align-items:center;
}
.ad-container .form .input_field label{
	width:200px;
	margin-right:10px;
	font-size:14px;
}
.ad-container .form .input_field .input,
.ad-container .form .input_field .textarea
{
	width:100%;
	outline:none;
	border:1px solid orange;
	font-size:15px;
	padding:8px 10px;
	border-radius:3px;
	transition:all 0.5s ease;
}
.ad-container .form .input_field .textarea{
	resize:none;
	height:70px;
}
.ad-container .form .input_field .selectbox{
	position:relative;
	width:100%;
	height:37px;
}
.ad-container .form .input_field .selectbox select{
	-webkit-appearance:none;
	appearance:none;
	padding:8px 10px;
	width:100%;
	height:100%;
	border:1px solid orange;
	border-radius:3px;
	outline:none;
}
.ad-container .form .input_field .selectbox:before{
	content:"";
	position:absolute;
	top:12px;
	right:10px;
	border:8px solid black;
	border-color:orange transparent transparent transparent;
}
.ad-container .form .input_field .input:focus,
.ad-container .form .input_field .textarea:focus,
.ad-container .form .input_field select:focus
{
	border:1px solid red;
}
.ad-container .form .input_field p{
	margin-left:20px;
	font-size:14px;
	color:blue;
}
.ad-container .form .input_field .check{
	width:15px;
	height:15px;
	position:relative;
	display:block;
	cursor:pointer;
}
.ad-container .form .input_field .check input[type="checkbox"]{
	position:absolute;
	top:0;
	left:0;
	opacity:0;
}
.ad-container .form .input_field .check .checkmark{
	width:15px;
	height:15px;
	border:1px solid red;
	display:block;
	position:relative;
}
.ad-container .form .input_field .check .checkmark:before{
	content:"";
	position:absolute;
	top:2px;
	left:2px;
	width:5px;
	height:2px;
	border:2px solid;
	border-color:transparent transparent white white;
	transform:rotate(-45deg);
}
.ad-container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark{
	background:red;
}
.ad-container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark:before{
	display:block;
}
.ad-container .form .input_field .btn{
	margin-left:50px;
	width:80%;
	padding:8px 10px;
	font-size:15px;
	border:0;
	background:orange;
	color:white;
	cursor:pointer;
	margin-bottom:15px;

}
.ad-container .form .input_field .btn:hover{
	background:red;
}
.ad-container .form .input_field:last-child{
	margin-bottom:0;
}
</style>



<?php include('data manage/includes/config.php');

if(isset($_POST['register'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pwd = $_POST['password'];
	$cpwd = $_POST['conpassword'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

$query = "INSERT INTO `admission` values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
$data = mysqli_query($db_conn,$query);

if($data)
{
	echo "Data inserted successfully";
}
else
{
	echo "Data is not inserted";
}
}
?>
<?php include('header.php'); ?>

<div class="ad-container">
<form action="" method="POST">
<div class="title">
	Registration Form
</div>
<div class="form">
	<div class="input_field">
		<label>First Name</label>
		<input type="text" class="input" name="fname">
	</div>
	
	<div class="input_field">
		<label>Last Name</label>
		<input type="text" class="input" name="lname">
	</div>
	
	<div class="input_field">
		<label>Password</label>
		<input type="password" class="input" name="password">
	</div>
	
	<div class="input_field">
		<label>Confirm password</label>
		<input type="password" class="input" name="conpassword">
	</div>
	
	<div class="input_field">
		<label>Gender</label>
		<div class="selectbox">
		<select name="gender">
			<option value="not selected">Select<option>
			<option value="male">Male<option>
			<option value="female">Female<option>
		</select>
		</div>
	</div>
	
	<div class="input_field">
		<label>Email Address</label>
		<input type="password" class="input" name="email">
	</div>
	
	<div class="input_field">
		<label>Phone Number</label>
		<input type="password" class="input" name="phone">
	</div>
	
	<div class="input_field">
		<label>Address</label>
		<textarea class="textarea" name="address"></textarea>
	</div>
	
	<div class="input_field terms">
		<label class="check">
		<input type="checkbox">
		<span class="checkmark"></span>
		</label>
		<p>Agree to terms and conditions</p>
	</div>
	<div class="input_field">
		<input type="submit" value="Register" class="btn" name="register">
	</div>
</div>
</form>
</div>

