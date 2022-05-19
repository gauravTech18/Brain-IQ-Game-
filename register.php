<?php
include_once "header.php";
include_once "includes/register.inc.php";
?>
	<div class="row">
		<div class="col-md-12">
			<?php display_message(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" name="registration_form">
				<h2>Please Sign Up <small>It's free and always will be.</small></h2>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4" required>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5" required>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="confirm_password" id="confirm_password" class="form-control input-lg" placeholder="Confirm Password" tabindex="6" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-sm-3 col-md-3 checkbox">
						<label>
							<input type="checkbox" required> Check me out
						</label>
					</div>
					<div class="col-xs-8 col-sm-9 col-md-9">
						By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
					</div>
				</div>

				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
					<div class="col-xs-12 col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
				</div>
			</form>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
				</div>
				<div class="modal-body">
					<p>IQ is an acronym for Intelligence Quotient. It is the measure of your   intelligence and is expressed in a number.</p>
					<p>Measure of a person’s cognitive capacity relative to his or her peers. It is computed by dividing the person’s mental age by his or her chorological age, and multiplying with 100.</p>
					<p>Binet’s concept of MENTAL AGE led to the development of the Intelligence Quotient.</p>
					<p> Mental age / Chorological age * 100</p>
					<p>A person’s IQ can be calculated by having the person take an intelligence test. The average IQ is 100. If you achieve a score higher than 100, you are smarter than the average person, and lower score means you are (somewhat) less smart.</p>
					<p>Allows students to understand and focus on their intellectual strengths. Helps test takers discover their strengths and avoid their weaknesses.</p>
					<p>Accurate I.Q. measurements also allow parents to help their children improve their   cognitive skills before they grow up.</p>
					<p>It helps us to understand how the brain works.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<script>
	var password = document.getElementById("password")
	, confirm_password = document.getElementById("confirm_password");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
<?php
include_once "footer.php";
?>