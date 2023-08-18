<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>TECHIQs - Contact Us</title>
  
 <style>
 .contact {
  padding: 80px 100px;
  text-align: center;
}

.contact-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-info {
  flex-basis: 50%;
  text-align: left;
  margin-right: 50px;
}

.contact-form {
  flex-basis: 50%;
}

.contact h2 {
  font-size: 32px;
  margin-bottom: 40px;
  color:red;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-size: 18px;
  margin-bottom: 8px;
}

input,
textarea {
  width: 100%;
  padding: 12px;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 16px;
}

button[type="submit"] {
  padding: 12px 24px;
  background-color: #F23D3D;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #E01919;
}

 </style>
</head>

<body>
  <header>
    <nav>
      <div class="logo"><img src="images/techiqslogo.png" alt="TechIQs-logo"></div>
	  
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contacts.php">Contact</a></li>
      </ul>
    </nav>
    <div class="hero">
      <h1>Contact Us</h1>
      <p>Get in touch with our team for inquiries and support</p>
    </div>
  </header>

  <section class="contact">
  <div class="contact-container">
    <div class="contact-info">
      <h2>Contact Information</h2>
      <p>Email: info@techiqs.com</p>
      <p>Phone: +254 712-892-952</p>
      <p>Address: 278 Street, MERU, Kenya</p>
    </div>
    <div class="contact-form">
      <h2>Send us a Message</h2>
      <form action="send_email.php" method="POST">
        <div class="form-group">
          <label for="name">Your Name:</label>
          <input type="text" id="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <label for="email">Your Email:</label>
          <input type="email" id="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <label for="message">Your Message:</label>
          <textarea id="message" placeholder="Your Message" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit">Send</button>
        </div>
      </form>
    </div>
  </div>
</section>


  <section class="about">
    <div class="content">
      <h2>About Us</h2>
      <h3>Mission</h3>
      <p>Our mission is to deliver innovative and high-quality software solutions that empower businesses and individuals to succeed in the digital world.</p>
      <h3>Vision</h3>
      <p>Our vision is to be a leading full-stack development company, recognized for our technical expertise, exceptional customer service, and commitment to delivering impactful solutions.</p>
      <h3>Why Choose Us</h3>
      <ul>
        <li>Experienced team of skilled developers and designers</li>
        <li>End-to-end development services tailored to your specific requirements</li>
        <li>Proven track record of delivering successful projects</li>
        <li>Commitment to customer satisfaction and long-term partnerships</li>
        <li>Innovative and forward-thinking approach to problem-solving</li>
      </ul>
    </div>
  </section>
 <footer>
    <div class="footer-content">
      <div class="footer-section">
	  <h3>About us</h3>
		<p color="grey">TECHIQs is a forward-looking tech solutions company, driven by innovation and expertise. 
		    We specialize in crafting transformative digital solutions that empower businesses to excel
			in today's dynamic digital landscape.</p>
			<br>
			<br>
        <p><strong>Email: info@techiqs.com</strong></p>
        <p><strong>Phone: +254 712-892-952</strong></p>
        <p><strong>Address: 278 Street, MAUA-MERU, Kenya</strong></p>
      </div>

      <div class="footer-section">
        <h3>Our Services</h3>
        <ul class="services-list">
          <li>Network Solutions</li>
		  <li>Computer Repairs</li>
		  <li>Software Solutions</li>
		  <li>IT Consultation</li>
          <li>Marketing Services</li>
          <li>Database Design</li>
          <li>Web Development</li>
          <li>Asset Management</li>
          <!-- ... (other services) ... -->
        </ul>
      </div>

      <div class="footer-section">
        <h3 style ='padding-left:50px;'>Connect with us</h3>
        <div class="social-links">
          <a href="#"><img src="images/facebook.jpg" alt="Facebook"></a>
          <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
          <a href="#"><img src="images/linkedin.png" alt="LinkedIn"></a>
          <a href="#"><img src="images/instagram.png" alt="Instagram"></a>
        </div>
      </div>
    </div>
    <div class="copyright">
      <h5>&copy; 2023 TECHIQs. All rights reserved. Designed by TechIQs. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></h5>
    </div>
  </footer>

</body>

</html>
