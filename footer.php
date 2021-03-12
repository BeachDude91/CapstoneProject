<!--
	Nick MacFarland
	CSIS 410-D01
	04/07/20
	Capstone Project II
	Footer File
	Description:
		-This is the footer page that holds just the footer 
			for all pages of my website.
-->

	<div class="footer">														<!-- This is the footer div for icons of xhtml and css -->
		
		<br>		
		<!--W3C XHTML Validation-->
		<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88">
		</a>
		
		<!--W3C CSS Validation-->
		<a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!">
		</a>
		
			
		<p>																			<!-- Last Modified date and time found here -->
			<?php
				echo "Page last modified: ".date("F d Y H:i:s.", filemtime("index.php"));
			?>
		</p>	
		
	</div>																		<!-- End of footer div -->
			
			
