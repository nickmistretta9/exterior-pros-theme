<form action="https://drivenlocal.wufoo.com/forms/w1d567zd1tj7ve9/#public" method="post" id="employeeForm">
	<input type="text" class="form-control" name="Field1" placeholder="First Name*" required autocomplete="first-name">
	<input type="text" class="form-control" name="Field2" placeholder="Last Name*" required autocomplete="last-name">
	<input type="text" class="form-control" name="Field3" placeholder="Phone*" required autocomplete="tel">
	<input type="email" class="form-control" name="Field4" placeholder="Email*" required autocomplete="email">
	<select name="Field5" class="form-control">
		<option selected disabled>Available Positions</option>
		<option value="Roofing Crew">Roofing Crew</option>
		<option value="Siding Installer">Siding Installer</option>
		<option value="Gutter / Gutter Cap Installer">Gutter / Gutter Cap Installer</option>
		<option value="Window Installer">Window Installer</option>
		<option value="Restoration Sales">Restoration Sales</option>
		<option value="Home Improvement Sales">Home Improvement Sales</option>
		<option value="Canvassers">Canvassers</option>
		<option value="Call Center Staff">Call Center Staff</option>
		<option value="Marketing Manager">Marketing Manager</option>
		<option value="Production Manager Assistant">Production Manager Assistant</option>
	</select>
	<textarea name="Field6" rows="5" class="form-control" placeholder="Tell Us About Yourself"></textarea>
	<button name="saveForm" type="submit" value="Submit" class="btn-primary">Submit</button>
	<div class="hide">
		<label for="comment">Do Not Fill This Out</label>
		<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
		<input type="hidden" id="idstamp" name="idstamp" value="s3Bj6i7j3ojddEaZrQ0pcFJYynDQNprYsiyWOENKvVc=" />
	</div>
	<script language="JavaScript">
		jQuery().ready(function() {
			var validator = jQuery("#employeeForm").validate();
		});
	</script>  
</form>