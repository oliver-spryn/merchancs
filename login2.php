<?php require('header.php'); ?>
	
<div class="input-group username">
<input class="form-control" type="text" placeholder="Username">
</div>
    
<div class="input-group password">
<input class="form-control" type="text" placeholder="Password"></div>
    
<div class="input-group confirmPassword">
<input class="form-control" type="text" placeholder="Confirm Password"></div>
    
<div class="input-group email">
<input class="form-control" type="text" placeholder="Email Address"></div>
  
<div class="input-group sex">
<input type="radio" name="sex" value="male">Male
<input type="radio" name="sex" value="female">Female<br/>
</div>

<div class="input-group dateOfBirth">
<input type="date" name="bday"> Date of Birth
</div>

    
<button id = "submitButton" class="btn btn-default" type="button">Submit</button>
</form>



<?php require('footer.php'); ?>