<?php

require("../database/db.php");




$term=$_GET['term'];





echo ' 

 <h3 id="dialog-content-heading" style="color:grey">Update Current term</h3>
<hr>


  <form action="" id="update-term-form" term="'.$term.'">
<div class="form-group">
<select name=""  class="form-control" id="term">
<option value="Term 1">Term 1</option>
<option value="Term 2">Term 2</option>
<option value="Term 3">Term 3</option>
</select>
 
</div>
<button class="btn btn-primary" term="'.$term.'" id="" type="submit"><i class="fa"></i> Change</button>


</form>
<button class="btn btn-default pull-right" style="margin-top:-50px" onclick="hideDialog()">Cancel</button>
<br> <br>
 ';

?>