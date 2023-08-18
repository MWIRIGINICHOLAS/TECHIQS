<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Services Section Styles */
    .services {
      padding: 50px 0;
      text-align: center;
      background-color: #f5f5f5;
    }

    .service-categories {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 40px;
      justify-items: center;
    }

    .service-category {
      padding: 30px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .service-category img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 20px;
    }

    .service-category h3 {
      font-size: 24px;
      margin-bottom: 10px;
      color: #333;
    }

    .service-category p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 20px;
      color: #666;
    }

    .service-category a {
      color: #f23d3d;
      text-decoration: none;
      font-weight: bold;
    }

  </style>
  <title>TECHIQs - Services</title>
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
      <h1>Our Services</h1>
      <p>Discover how we can help your business succeed</p>
      <a href="#" class="cta-button">Get Started</a>
    </div>
  </header>

  <section class="services">
    <h2>Our Services</h2>
    <div class="service-categories">
      <div class="service-category">
        <img src="images/service8.jpg" alt="Service 7">
        <div class="content">
          <h3>Network Solutions</h3>
          <p>We offer expert network troubleshooting services to identify and resolve network issues quickly and efficiently.
            Whether you're facing connectivity problems, slow network speeds, or other network-related challenges, our skilled
            team uses advanced diagnostic tools and techniques to get your network up and running smoothly.</p>
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service-category">
        <img src="images/service7.jpg" alt="Service 8">
        <div class="content">
          <h3>Computer Repairs</h3>
          <p>If your computer is facing issues like hardware malfunctions, software glitches, or performance slowdowns, our
            computer repair services can help. Our skilled technicians diagnose and fix a wide range of computer problems,
            ensuring your devices are back to optimal performance.</p>
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service-category">
        <img src="images/service6.jpg" alt="Service 9">
        <div class="content">
          <h3>Software Solutions</h3>
          <p>Our software installation services cover a wide range of applications and systems. We ensure proper installation,
            configuration, and compatibility, making sure your software works seamlessly and efficiently across your devices.</p>
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service-category">
        <img src="images/service10.jpg" alt="Service 10">
        <div class="content">
          <h3>IT Consultation</h3>
          <p>Our IT consultation services provide expert insights and recommendations to help you make informed decisions about
            your technology strategy. Whether you're planning to upgrade your systems, implement new technologies, or optimize
            your IT infrastructure, our consultants are here to guide you.</p>
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service-category">
        <img src="images/service5.jpg" alt="Service 2">
        <div class="content">
          <h3>Marketing Services</h3>
          <p>Our marketing services help businesses reach their target audiences effectively. From digital marketing strategies to
            social media campaigns, we create tailored marketing solutions that boost brand visibility, engagement, and
            conversions.</p>
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service-category">
        <img src="images/service3.jpg" alt="Service 3">
        <div class="content">
          <h3>Database Design</h3>
          <p>Our expert database designers excel at creating efficient and scalable database solutions tailored to your specific 
		  business needs. We specialize in crafting well-structured, normalized, and optimized databases that ensure data integrity,
		  security, and optimal performance. From data modeling and schema design to query optimization and database administration.</p>
          <a href="#">Learn More</a>
		</div>
      </div>
      <div class="service-category">
        <img src="images/service2.jpg" alt="Service 2">
        <div class="content">
          <h3>Web Development</h3>
          <p>Our web development services encompass everything from crafting elegant and responsive websites to building complex
		  web applications. With expertise in various frontend and backend technologies, we deliver dynamic, feature-rich, 
		  and scalable web solutions that captivate audiences and drive business growth.</p>
          <a href="#">Learn More</a>
        </div>
      </div>
      <div class="service-category">
	  <img src="images/service11.jpg" alt="Service 2">
        <div class="content">
          <h3>Asset Management</h3>
          <p>Our tailored solutions provide comprehensive asset visibility, enabling organizations to streamline asset
		  lifecycle management, improve maintenance processes, minimize downtime, and ensure regulatory compliance. king software, maintenance management systems,
		  we leverage cutting-edge technologies and industry best practices to create scalable and secure asset management systems.</p>
          <a href="#">Learn More</a>
		</div>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="content">
      <h2>About Us</h2>
      <h3>Mission</h3>
      <p>Our mission is to deliver innovative and high-quality Tech solutions that empower businesses and individuals to succeed in the digital world.</p>
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
        <p><strong>Address: 278 Street, MERU, Kenya</strong></p>
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
        <h3>Connect with us</h3>
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
