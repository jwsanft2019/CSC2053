<?php include 'header.php';?>
<form method= "post" action ="processForm.php">
<h3> Simple Form</h3>
<p> First Name </p>
<input type = "text" name="fname">

<p> Last Name </p>
<input type = "text" name = "lname">

<p> University Status </p>
<select name = "year">
    <option> Select </option>
    <option> 1st year </option>
    <option> 2nd year </option>
    <option> 3rd year </option>
    <option> 4th year </option>
</select>

<input type="submit">