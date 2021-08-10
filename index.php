<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mailchimp Form</title>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input#MERGE0 {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type="submit"] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
h3 {
    font-size: 2rem !important;
    line-height: 2.625rem;
    margin-top: 1.875rem;
}
</style>
</head>
<body>
<div>
  <form action="processor.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text" name="MERGE1" id="MERGE1" size="25" value="" placeholder="Enter Fname">

    <label for="lname">Last Name</label>
    <input type="text" name="MERGE2" id="MERGE2" size="25" value="" placeholder="Enter Lname">

    <label for="email">Email</label>
    <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="" placeholder="Enter Email">

    <input type="submit" value="Submit">

  </form>
</div>

</body>
</html>
