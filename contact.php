<?php include("includes/doc.php"); ?>
<title>contact</title>
</head>
<body>

  <header>
    <img id="logo" src="images/logo.png" alt="logo">
  </header>

<div id="wrapper">

<?php include("includes/nav.php"); ?>





<div id="map">

<iframe class="map-image" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2685.895745925969!2d-122.1412833!3d47.6864446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54900d5ab39ddee9%3A0xb5c94902c36a3c81!2s15110+NE+95th+St%2C+Redmond%2C+WA+98052!5e0!3m2!1sen!2sus!4v1481500250571"  style="border:0" allowfullscreen></iframe>
<h4>Swing Along Dance Studio</h4>
<p>15110 NE 95th St</p>
<p>Avondale Road, Redmod</p>
<p>206 123 4567</p>
</div> <!--end map-->

<div id=form>
<form action="formhandler.php" method="post">
<fieldset>
<legend>CONTACT FORM</legend>
<label>Name</label>
<input type="text" name="NAME" placeholder="Name">
<label> Email </label>
<input type="email" name="Email"  placeholder="Email">
<label> Subject </label>
<input type="text" name="subject"  placeholder="Subject">

<label> Comments </label>
<textarea name="comments" rows="8" placeholder="Comments"> </textarea>

<input type="submit" value="Send">
<input type="reset" value="Reset">

</fieldset>
</form>


</div> <!--end form-->

















</div> <!-- end wrapper-->

<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fedison.seattlecentral.edu%2F~Manitasha.Arora%2Fweb120%2Ffinal%2Fcontact.php">VALID HTML </a>
<a href="http://www.css-validator.org/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~Manitasha.Arora%2Fweb120%2Ffinal%2Fcontact.php&profile=css3&usermedium=all&warning=1&lang=en"> VALID CSS </a>



<?php include("includes/footer.php"); ?>
</body>
</html>
