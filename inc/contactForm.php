<form action="https://drivenlocal.wufoo.com/forms/wmea0x302dzt4e/#public" method="post" id="contactForm">
	<input type="text" class="form-control" name="Field1" placeholder="Name*" required>
	<input type="text" class="form-control" name="Field2" placeholder="Phone*" required>
	<input type="email" class="form-control" name="Field3" placeholder="Email*" required>
	<select name="Field4" id="" class="form-control">
		<option selected disabled>Project Type</option>
		<option value="Roofing">Roofing</option>
		<option value="Siding">Siding</option>
		<option value="Flooring">Flooring</option>
		<option value="Painting">Painting</option>
		<option value="Windows">Windows</option>
		<option value="Doors">Doors</option>
		<option value="Gutters">Gutters</option>
		<option value="Interiors">Interiors</option>
		<option value="Other">Other</option>
	</select>
	<textarea name="Field5" rows="5" class="form-control" placeholder="Additional Details..."></textarea>
	<button name="saveForm" type="submit" value="Submit" class="btn-primary">Submit</button>
	<div class="hide">
		<label for="comment">Do Not Fill This Out</label>
		<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
		<input type="hidden" id="idstamp" name="idstamp" value="OzwCPFmT4bjqhaUvlwVuSJAGrV9fk2xnxB6TTVZvTHw=" />
	</div>
	<script language="JavaScript">
		jQuery().ready(function() {
			var validator = jQuery("#contactForm").validate();
		});
	</script>  
</form>