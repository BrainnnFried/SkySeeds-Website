<?php

class Header{
    public function createHeader(){
        $headerHtml ='
        <footer class="footer">
		<div class="container row">
			<div class = "footer-first">
				<h1>SkySeeds</h1>
				<p>Tellus non diam morbi quam vel venenatis proin sed. Dolor elementum nunc dictum interdum amet arcu aenean eu integer</p>
			</div>
			<div class="footer-col">
				<h4>Product</h4>
				<ul>
					<li><a href="#">Tools</a></li>
					<li><a href="#">Fertilisers</a></li>
					<li><a href="#">Seeds</a></li>
					<li><a href="#">Veggies</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Company</h4>
				<ul>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Academy</h4>
				<ul>
					<li><a href="#">Home Garden</a></li>
					<li><a href="#">School Programme</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Need Help?</h4>
				<ul>
					<li><a href="#">Consultation</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<div class="social-links">
					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#"><i class="fa-brands fa-x-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>
			</div>
		</div>
	</footer>';
    
        echo $headerHtml;
    }
    
}
?>