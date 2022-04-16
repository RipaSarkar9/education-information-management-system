<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create Class</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 650px; padding: 20px; margin-left:450px}
    </style>
</head>

<body>
<div class="wrapper">
<h2>Hello, Teacher!</h2>
<h3>Create Classes Here</h3>
<form action="../controller/submit.php" method="post">
<div class="form-group">
<div class="form-group">
                <label for="coursetype">Course Type</label>
                <select type="text" name="coursetype" class="form-control">
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="OTH">OTHER</option>
                </select>
            </div>
            <div class="form-group">
                <label>Course Code</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Course Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Preferable Days: </label>
                <input type="text" name="appointment" class="form-control">
            </div>
            <div class="form-group">
                <label>Preferable Time: </label>
                <input type="text" name="appointment" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" name="submit">
            </div>

</form>
</div> 
<?php require "../controller/config.php"?>

</body>
</html>