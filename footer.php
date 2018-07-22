				<!-- footer start -->
				<footer id="contact" class="footer-widget-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-sm-3 col-md-3 col-md-offset-1">
								<div class="footer-widget footer-logo">
									<a href="#"><h1>Dev<br>
									Vagon</h1></a>
								</div><!-- /.col-md-6 -->
							</div><!-- /.col-md-6 -->
							<div class="col-sm-3 col-md-2 col-lg-2">
								<div class="footer-widget">
									<h3>Social</h3>
									<ul>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">Facebook</a></li>
										<li><a href="#">Dribble</a></li>
										<li><a href="#">Linkedin</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-sm-3 col-md-3">
								<div class="footer-widget">
									<h3>Location</h3>
									<address>
									  50 Louis St. NW, Ste. 520<br>
									  Grand Rapids, MI 49503<br>
									  <!-- Google Map Modal Trigger -->
									  <a class="modal-map" data-toggle="modal" data-target="#cssMapModal" href="#">View on Google Maps</a>
									</address>


									<!-- Modal -->
									<div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Our Location</h4>
									      </div>
									      <div class="modal-body">

										    <div id="googleMap"></div>
										    
									      </div>
									    </div><!-- /.modal-content -->
									  </div><!-- /.modal-dialog -->
									</div><!-- End Modal -->

								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-sm-3 col-md-3">
								<div class="footer-widget">
									<h3>Get in Touch</h3>
									<a href="#">+00 (123) 456 789</a>
									<a href="mailto:#">info@mail.com</a>
									<a class="feedback-modal" data-toggle="modal" data-target="#feedModal" href="#">Send us your feedback</a>

									<!-- Modal -->
									<div class="modal fade" id="feedModal" tabindex="-1" role="dialog" aria-labelledby="feedModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="feedModalLabel">Send us your feedback</h4>
									      </div>
									      <div class="modal-body">
											<form id="contactForm" action="sendemail.php" method="POST">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
														    <label for="name">Name</label>
														    <input id="cname" name="cname" type="text" class="form-control"  required="" placeholder="Name">
														</div>
													</div>
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="email">Email address</label>
													    <input id="cemail" name="cemail" type="email" class="form-control" required="" placeholder="Email">
													  </div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="phone">Phone</label>
													    <input id="cphone" name="cphone" type="text" class="form-control" placeholder="Phone">
													  </div>
													</div>
													<div class="col-md-6">
													  <div class="form-group">
													    <label for="subject">Subject</label>
													    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="Subject">
													  </div>
													</div>
												</div>

												<div class="form-group text-area">
													<label for="message">Message</label>
													<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder="Message"></textarea>
												</div>

												<button type="submit" class="btn btn-primary">Send Message</button>
											</form>
									      </div>
									    </div>
									  </div>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
						</div><!-- /.row -->

						<div class="row">
							<div class="col-xs-12 text-center">
								<div class="copyright">
									<p>&copy; 2018 Design by : <a href="https://www.github.com/aadityagupta13" title="uiCookies">Aaditya Gupta</a></p>
								</div>
							</div>
						</div>

					</div><!-- /.container -->
				</footer>
				<!-- footer end -->
        </div> <!-- .st-content-inner -->
    </div> <!-- .st-content -->
    </div> <!-- .st-pusher -->


    	<!-- OFFCANVAS MENU -->
    	<div class="offcanvas-menu offcanvas-effect visible-sm">
	        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	        <h3>Sidebar Menu</h3>
	        <ul class="list-unstyled">
	            <li class="active"><a class="offcanvas-link" href="#page-top">Home<span class="sr-only">(current)</span></a></li>
	            <li><a class="offcanvas-link" href="#services">Services</a></li>
	            <li><a class="offcanvas-link" href="#work">Works</a></li>
	            <li><a class="offcanvas-link" href="#about">About</a></li>
	            <li><a class="offcanvas-link" href="#blog">Blog</a></li>
	            <li><a class="offcanvas-link" href="#contact">Contact</a></li>
	            <li><a  href="login.php">Login</a></li>
				<li><a  href="register.php">Sign up</a></li>
	        </ul>
      	</div><!-- .offcanvas-menu -->
	</div><!-- /st-container -->



	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- wow.min.js -->
	    <script src="js/wow.min.js"></script>
	    <!-- smoothscroll -->
	    <script src="js/smoothscroll.js"></script>
	    <!-- owl.carousel -->
	    <script src="js/owl.carousel.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
	    <!-- Scrolling Nav JavaScript -->
	    <script src="js/jquery.easing.min.js"></script>
		<!-- flickerPhoto -->
		<script src="js/flickerPhoto.min.js"></script>
		<!-- Shuffle.min js -->
		<script src="js/jquery.shuffle.min.js"></script>
	    <!-- GOGLE MAP -->
	    <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>
