<!DOCTYPE html>
<html lang="en">
<head>

<title>Title</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




</head>
<body>
<!-- mail -->

			<?php
				if (isset($_GET["sent"])) {
					echo 
					'<div class="alert alert-success" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                         <strong>SENT!! </strong><p> Thank you for your message. We will get back to you as soon as possible.</p>
                    </div>'
					;
				}
			?>

					<form action="functions/contact.php" method="post">
						<h4>Your Names*</h4>
						<input type="text" name="names" placeholder="Names..." required="">
						<h4>Your Email*</h4>
						<input type="email" name="email" placeholder="Email..." required="">
						<h4>Your Message*</h4>
						<textarea placeholder="Message..." name="message"></textarea>
						<input type="submit" name="submit" value="Send Message">
					</form>

<!-- //mail -->

<!-- content -->
	
	<?php
				if (isset($_GET["subscribed"])) {
					echo 
					'<div class="alert alert-success" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>SUBSCRIBED!! </strong><p> Obrigado por se inscreve. Vamos mantê-lo informado sobre as tendências de Marketing Digital.</p>
                    </div>'
					;
				}
				elseif (isset($_GET["fail"])) {
					echo 
					'<div class="alert alert-danger" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>Ooops!! </strong><p> Parece que você já está inscrito em nossa lista de e-mails :) </p>
                    </div>'
					;
				}
			?>	

<!-- //process -->



			<h3>Newsletter</h3>
			<p>Subscribe to our newsletter and be the first to know what we are upto.</p>
				<form action="functions/subscribe.php" method="post">
					<input type="email" name="email" placeholder="Seu email..." required="">
					<input type="submit" value=" " name="submit">
				</form>
		

</body>
</html>

