<?php
require('header.php');
require('body.php');
?>
<form enctype='multipart/form-data' action='upload-php.php' method='post'>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload File CSV format</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    <input class='btn btn-primary'  type='submit' name='submit' value='Training import'><p></p>
  </div>
</form>
<?php
require('upload-php.php');
require('footer.php')
?>