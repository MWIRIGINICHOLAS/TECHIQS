<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>TECHIQs - Full Stack Development Company</title>
  <style>
   /* Team section styles */
    .team {
      padding: 40px;
      text-align: center;
      background-color: white;
    }

    .team h2 {
      font-size: 38px;
      margin-bottom: 40px;
    }

    .members {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .member {
      position: relative;
      width: 280px;
      height: 280px;
      background-color: #fff;
      border-radius: 50%;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .member img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .member:hover img {
      transform: scale(1.1);
    }

    .member-details {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8);
      color: #fff;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .member:hover .member-details {
      opacity: 1;
    }

    .member h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .member p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 20px;
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
      <h1>Tech Solutions Company</h1>
      <p>Transforming your ideas into innovative solutions</p>
      <a href="contacts.php" class="cta-button">Get Started</a>
    </div>
  </header>
 <section class="services">
  <div class="serv">
    <div class="service">
      <img src="images/service8.jpg" alt="Network Solutions">
      <div class="content">
        <h3>Network Solutions</h3>
        <p>Enhance your business connectivity with expert network troubleshooting services that swiftly identify and resolve issues.</p>
      </div>
    </div>
    <div class="service">
      <div class="content">
        <h3>Web Development</h3>
        <p>Elevate your online presence with modern, responsive websites and powerful web applications tailored to drive your business forward.</p>
      </div>
      <img src="images/service1.jpg" alt="Web Development">
    </div>
    <div class="service">
      <img src="images/service7.jpg" alt="Computer Repairs">
      <div class="content">
        <h3>Computer Repairs</h3>
        <p>Restore your devices to optimal performance with skilled computer repair services, resolving hardware and software issues.</p>
      </div>
    </div>
  </div>
</section>
<section class="services">
  <div class="serv">
    <div class="service">
      <img src="images/service6.jpg" alt="Software Solutions">
      <div class="content">
        <h3>Software Solutions</h3>
        <p>Create visually captivating user interfaces and intuitive experiences, ensuring seamless usability across various platforms.</p>
      </div>
    </div>
    <div class="service">
      <div class="content">
        <h3>IT Consultation</h3>
        <p>Maximize your technology strategy with expert IT consultation, providing insights for upgrades, new technologies, and infrastructure optimization.</p>
      </div>
      <img src="images/service10.jpg" alt="IT Consultation">
    </div>
    <div class="service">
      <img src="images/service11.jpg" alt="Asset Management Solutions">
      <div class="content">
        <h3>Asset Management Solutions</h3>
        <p>Efficiently track and optimize assets with custom systems, unlocking cost savings, streamlined operations, and improved utilization.</p>
      </div>
    </div>
  </div>
</section>

  <section class="testimonials">
  <h2>Client Testimonials</h2>
  <br>
  <div class="testimonial-container">
    <div class="slider">
      <div class="testimonial">
        <img src="images/client1.jpg" alt="Client 1">
        <h3>Ken Gitonga</h3>
        <p>"TECHIQs exceeded my expectations with their professionalism and technical capabilities. They delivered my project on time and within budget. Highly recommended!"</p>
      </div>
      <div class="testimonial">
        <img src="images/client2.jpg" alt="Client 2">
        <h3>James Okwara</h3>
        <p>"I'm extremely satisfied with the quality of work provided by TECHIQs. Their attention to detail and commitment to customer satisfaction is outstanding. I will definitely work with them again."</p>
      </div>
      <div class="testimonial">
        <img src="images/client3.jpg" alt="Client 3">
        <h3>Hannah Mugo</h3>
        <p>"TECHIQs delivered beyond my expectations. Their expertise and dedication were instrumental in the success of my project. I look forward to working with them in the future."</p>
      </div>
      <div class="testimonial">
        <img src="images/client4.png" alt="Client 4">
        <h3>Antoney Murithi</h3>
        <p>"Working with TECHIQs was a pleasure. They understood my requirements and delivered a top-notch solution. I highly recommend their services to anyone in need of a reliable development partner."</p>
      </div>
    </div>
  </div>
  <div class="testimonial-navigation">
    <div class="arrow arrow-left">&larr;</div>
    <div class="arrow arrow-right">&rarr;</div>
  </div>
</section>
  
  <section class="portfolio">
    <h2>Our Portfolio</h2>
    <div class="projects">
      <div class="project">
        <img src="images/project1.jpg" alt="Project 1">
        <h3>Fleet Management</h3>
        <p>Our team developed a comprehensive fleet management system for Maua Methodist Hospital, enabling efficient tracking and management of their vehicle fleet, resulting in improved operational efficiency and cost savings.</p>
      </div>
      <div class="project">
        <img src="images/project2.jpg" alt="Project 2">
        <h3>Workload Management</h3>
        <p>We built a workload management system for Maua Methodist Hospital, allowing staff to efficiently manage patient appointments, track resources, and optimize the scheduling process, leading to improved patient care and streamlined operations.</p>
      </div>
      <div class="project">
        <img src="images/project3.jpg" alt="Project 3">
        <h3>Patient Management</h3>
        <p>We built a workload management system for Maua Methodist Hospital, allowing staff to efficiently manage patient appointments, track resources, and optimize the scheduling process, leading to improved patient care and streamlined operations.</p>
      </div>
      <div class="project">
        <img src="images/project4.jpg" alt="Project 4">
        <h3>Support-Desk System </h3>
        <p>We built a workload management system for Maua Methodist Hospital, allowing staff to efficiently manage patient appointments, track resources, and optimize the scheduling process, leading to improved patient care and streamlined operations.</p>
      </div>
    </div>
  </section>
  <section class="team">
    <h2>Our Team</h2>
    <div class="members">
      <div class="member">
        <img src="images/member1.png" alt="Team Member 1">
        <div class="member-details">
          <h3>Mwirigi Nicholas</h3>
          <p>Founder|CEO</p>
        </div>
      </div>
      <div class="member">
        <img src="images/member2.jpg" alt="Team Member 2">
        <div class="member-details">
          <h3>Dida Irbaye</h3>
          <p>Support Technician</p>
        </div>
      </div>
      <div class="member">
        <img src="images/member3.jpg" alt="Team Member 3">
        <div class="member-details">
          <h3>Frank Okwomi</h3>
          <p>Web Developer</p>
        </div>
      </div>
      <div class="member">
        <img src="images/member4.jpg" alt="Team Member 4">
        <div class="member-details">
          <h3>Stanley Mungai</h3>
          <p>Software Developer</p>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="content">
      <h2>About Us</h2>
      <h3>Mission</h3>
      <p>Our mission is to deliver innovative and high-quality solutions that empower businesses and individuals to succeed in the digital world.</p>
      <h3>Vision</h3>
      <p>Our vision is to be a leading full-stack development company, recognized for our technical expertise, exceptional customer service, and commitment to delivering impactful solutions.</p>
      <h3>Why Choose Us</h3>
      <ul>
        <li>Experienced team of skilled developers and designers</li>
        <li>End-to-end development services tailored to your specific requirements</li>
        <li>Proven track record of delivering successful projects & solutions</li>
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
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const testimonials = document.querySelectorAll('.testimonial');
    const testimonialContainer = document.querySelector('.testimonial-container');
    let currentTestimonial = 0;
    let totalTestimonials = testimonials.length;
    const testimonialsPerBlock = 2; // Display 2 testimonials per block
    let autoplayInterval;

    function showTestimonial(index) {
      testimonials.forEach((testimonial, i) => {
        if (i >= index && i < index + testimonialsPerBlock) {
          testimonial.style.display = 'block';
        } else {
          testimonial.style.display = 'none';
        }
      });
    }

    function nextTestimonial() {
      currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
      if (currentTestimonial === totalTestimonials - 1) {
        // If the last testimonial is displayed, show the first testimonial as well
        showTestimonial(totalTestimonials - 1 - testimonialsPerBlock + 1);
      } else {
        showTestimonial(currentTestimonial);
      }
    }

    function prevTestimonial() {
      currentTestimonial = (currentTestimonial - 1 + totalTestimonials) % totalTestimonials;
      if (currentTestimonial === 0) {
        // If the first testimonial is displayed, show the last testimonial as well
        showTestimonial(totalTestimonials - testimonialsPerBlock);
      } else {
        showTestimonial(currentTestimonial);
      }
    }

    function startAutoplay() {
      autoplayInterval = setInterval(nextTestimonial, 5000); // Change slide every 5 seconds
    }

    function stopAutoplay() {
      clearInterval(autoplayInterval);
    }

    const prevArrow = document.querySelector('.arrow-left');
    prevArrow.addEventListener('click', () => {
      stopAutoplay();
      prevTestimonial();
      startAutoplay();
    });

    const nextArrow = document.querySelector('.arrow-right');
    nextArrow.addEventListener('click', () => {
      stopAutoplay();
      nextTestimonial();
      startAutoplay();
    });

    // Show the first two testimonials initially
    showTestimonial(currentTestimonial);

    // Start autoplay
    startAutoplay();
  });
</script>

</body>
</html>
