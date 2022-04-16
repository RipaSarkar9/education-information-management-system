<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create New Course</title>
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
<h3>Create New Courses Here</h3>
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
                <label>Course Name (initials) </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Brief course description</label>
                <textarea type="text" class="form-control" rows="3" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Details course description</label>
                <textarea type="text" class="form-control" rows="5" name="longdes"></textarea>
            </div>
            <div class="form-group">
                <label>Preferable time: </label>
                <input type="text" name="appointment" class="form-control">
            </div>
            <div class="form-group">
                <label>Prereq of the course (if any): </label>
                <input type="text" name="prereq" class="form-control">
            </div>
            <div class="form-group">
                <label>Link to course file: (PDF preferred) </label>
                <input type="text" name="filelink" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" name="submit">
            </div>

</form>
</div> 
<?php require "../controller/config.php"?>

</body>
</html>