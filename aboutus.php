<!DOCTYPE html>
<html>
<head>
	<?php include("incs/header.php")?>
</head>
<body>
	<?php include ("incs/nav.php"); ?>
	<section class="">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-12">
					<div class="forms">
						<h1 class="mb-4">About Us</h1>
						<p>We know that you wish to find the right canditates to fill your job vanacies, thats why we are here to help you achieve that task by connect you to sutably qualified candidates.</p>

						<ul class="">
							<li>
								Employers / Recruiters posts their jobs at anytime of the day.
							</li>
							<li>
								We notify the suitable candidates about the latest jobs suiting there expertise or qualifications
							</li>
							<li>
								Employers and notified about the prospective employees and how their job ad is doing
							</li>
						</ul>
						<p>Our commitment is to help job seekers with the following:</p>
						<ul>
							<li>Tips on how to write a job application letter</li>
							<li>Tips on how to create a catchy Resume or Curriculum Vitae</li>
							<li>Tips on how to get ready for an interview</li>
						</ul>
						<h3>Our Legal Compliance</h3>
						<embed src="http://localhost/golinkjobs.com/cv_uploads/Tax Clearance 2022_copy.pdf" type="application/pdf" width="100%" height="800px" />
						<h4 class="mt-4 mb-3">Contact Us</h4>

						<form method="post" id="contactForm">
							<div class="row">
								<div class="form-group mb-3">
									<label class="mb-2">Your Names</label>
									<input type="text" name="names" id="names" class="form-control" required>
								</div>
								<div class="form-group mb-3">
									<label class="mb-2">Your Email</label>
									<input type="email" name="email" id="email" class="form-control" required>
								</div>
								<div class="form-group mb-3">
									<label class="mb-2">Your Message</label>
									<textarea class="form-control" name="message" id="message" rows="5" placeholder="Your Message"></textarea>
								</div>
								<div class="form-group">
									<button class="btn btn-outline-success" id="sendMsg" type="submit">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<?php include("incs/footer.php") ?>
</body>
</html>