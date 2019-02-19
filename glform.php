<!DOCTYPE html>
<html lang="en">
<head>
  <title>GuestLectures</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

</head>

<?php require_once 'process.php'; ?>

<div class="container">
<center>
<h1>ADD THE DETAILES OF NEW GUEST LECTURE</h1><br><br>
</center>

<div class="row justify-content-center">
<form action="process.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">
  <label>Select list:</label>
  <select name="dept" class="form-control" id="sel1">
    <option value="CSE" selected>CSE</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="MEC">MEC</option>
    <option value="CIV">CIV</option>
    <option value="FED">FED</option>
  </select>
</div>
<div class="form-group">
<label>Year</label>
<input type="text" name="Year" class="form-control" value="<?php echo $Year; ?>" placeholder="Enter Year">
</div>
<div class="form-group">
<label>Topic</label>
<input type="text" name="topic" class="form-control" value="<?php echo $topic; ?>" placeholder="Enter Topic">
</div>
<div class="form-group">
<label>Organisation</label>
<input type="text" name="organisation" class="form-control" value="<?php echo $organisation; ?>" placeholder="Enter Organisation">
</div>
<div class="form-group">
  <label>Remarks</label>
  <textarea name="remarks" class="form-control" rows="5" ><?php echo $remarks; ?></textarea>
</div>

<input name="evcode" type="hidden" value="101">
<div class="form-group">
<div class="fixed-bottom"><button type="button" class="btn btn-primary" name="B1" onclick="window.location.href = 'http://localhost/Life/ghome.php';">HOME</button>
</div>
<?php
if($update==true):
?>
<button type="submit" class="btn btn-info" name="update">UPDATE</button>
<?php else: ?>
<button type="submit" class="btn btn-primary" name="save">SAVE</button>
<?php endif; ?>
</div>

</form>
</div>

</div>
</html>