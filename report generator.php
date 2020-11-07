<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Generate Report</title>
<link  rel="stylesheet" href="design.css" >
</head>
<body>	
<img src="test (1).svg" class="i">
<form method="POST" action=" " >   

<label class="n"> Student name:</label> <input type="text" name="sn" id="sn" class="s">
  <?php if(isset($_POST['submit'])){if(empty($_POST['sn'])){echo  "Please Enter The Name! ";}}?><br> 
	
	
<label class="n">Student ID:</label> <input type="text" name="si" id="si" class="s"> 
<?php if(isset($_POST['submit'])){if(empty($_POST['si'])){echo "Please Enter The ID! ";}}?><br>
	

<label class="n"> Quiz 1 Mark:</label><input type="number" name="q1" id="q1"  placeholder="0" min="0" max="5" class="s">
<?php if(isset($_POST['submit'])){if(empty($_POST['q1'])){echo "Please Enter Quiz 1 Mark! ";}}?><br>
	
	
<label class="n"> Quiz 2 Mark:</label><input type="number" name="q2" id="q2" placeholder="0" min="0" max="5" class="s">
 <?php if(isset($_POST['submit'])){if(empty($_POST['q2'])){echo "Please Enter Quiz 2 Mark! ";}}?><br>
	
	
<label class="n"> Assignment Mark:</label><input type="number" name="am" id="am" placeholder="0" min="0" class="s"> 
<?php if(isset($_POST['submit'])){if(empty($_POST['am'])){echo "Please Enter Assignment Mark! ";}}?><br>
	
	
<label class="n"> Midterm Mark:</label><input type="number" name="mm" id="mm" placeholder="0" min="0" class="s">
 <?php if(isset($_POST['submit'])){if(empty($_POST['mm'])){echo "Please Enter Midterm Mark! ";}}?><br>
	
	
<label class="n"> Project Mark:</label><input type="number" name="pm" id="pm" placeholder="0" min="0" class="s">
<?php if(isset($_POST['submit'])){if(empty($_POST['pm'])){echo "Please Enter Project Mark! ";}}?><br>
	
	
<label class="n"> Final Exam Mark:</label><input type="number" name="fm" id="fm" placeholder="0" min="0" class="s">
<?php if(isset($_POST['submit'])){if(empty($_POST['fm'])){echo "Please Enter Final Mark! ";}}?><br>
	
	
	<input type= "submit"  value="Generate Report" name="submit" class="b">
    
    <input type="reset" value="Reset" name="Reset" class="b"><br>
	
	<?php 
	if(isset($_POST['submit'])){
	?>
	
	
	<label class="n">This the report of (<?php echo $_POST['sn'] ?>) student with ID(<?php echo $_POST['si'] ?>)</label>
    <table border="1" class="t"> 
    <thead>
    <tr>
    <th> Quiz 1 </th>
    <th> Quiz 2 </th>
    <th> Assignment </th>
    <th> Midterm </th>
    <th> Project </th>
    <th> Final Exam </th>
    <th> Total </th>
    </tr>
    </thead> 
    <tbody>
    <tr> 
    <td> <?php echo $_POST['q1'] ?> </td>
    <td> <?php echo $_POST['q2'] ?> </td>
    <td> <?php echo $_POST['am'] ?> </td>
    <td> <?php echo $_POST['mm'] ?> </td>
    <td> <?php echo $_POST['pm'] ?> </td>
    <td> <?php echo $_POST['fm'] ?> </td>
    <td> <?php echo $_POST['q1']+$_POST['q2']+$_POST['am']+$_POST['mm']+$_POST['pm']+$_POST['fm'] ?> </td>
    </tr>
    </tbody>
    </table>
     <a href="report generator.php">Refresh This Page</a>                   

</form> 
	
<?php } ?>
	
</body>
</html>