<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>TECHIQs - Services</title>
  <style>
  <style>
  /* Portfolio section styles */
    .portfolio {
      padding: 40px;
      text-align: center;
      background-color: #F5F5F5;
    }

    .portfolio h2 {
      font-size: 38px;
      margin-bottom: 40px;
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
      gap: 20px;
    }

    .project {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .project img {
      width: 100%;
      height: 200px;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .project h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .project p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 20px;
    }
	.project:hover {
      transform: translateY(-5px);
    }
	
  /* Development process section styles */
  .development-process {
    padding: 40px;
    text-align: center;
    
  }

  .development-process h2 {
    font-size: 38px;
    margin-bottom: 40px;
    color: red;
  }
  .development-process h3 {
    color: red;
	}

  .development-process p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
	padding-left:50px;
	padding-right:50px;
	
   
  }

  .development-process ol {
    text-align: left;
    max-width: 1100px;
    margin: 0 auto;
    padding-left: 40px;
    list-style: decimal;
	
  }
  
  .development-process li {
    font-size: 20px;
    margin-bottom: 20px;
	list-style:none;
	text-align: left;
	padding-left:50px;
	padding-right:50px;
  }

  .methodology-img {
    max-width: 100%;
    margin: 20px 0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  /* Technologies Used section styles */
    .technologies {
      padding: 40px;
      text-align: center;
	  background-color: #F5F5F5;
      
    }

    .technologies h2 {
      font-size: 38px;
      margin-bottom: 40px;
	  color:red;
    }

    .technologies ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .technologies li {
      font-size: 20px;
      margin-bottom: 10px;
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
      <h1>Our Portfolio</h1>
      <p>We have worked with Several comapnies and satisfied them</p>
      <a href="contacts.php" class="cta-button">Get Started</a>
    </div>
  </header>
  <section class="portfolio">
  <h2>Our Portfolio</h2>
  <div class="projects">
    <div class="project">
      <img src="images/project6.jpg" alt="Project 6">
      <h3>Nyambene Hospital</h3> 
	  <h4>Technical Support</h4>
      <p>We offered technical support and IT solutions to Nyambene Hospital, ensuring their systems were optimized, secure, and well-maintained for smooth healthcare service delivery.</p>
    </div>
    <div class="project">
      <img src="images/project7.jpg" alt="Project 7">
      <h3>Angels Hospital </h3>
	  <h4>Network Installation and Support</h4>
      <p>We installed and provided ongoing support for the network infrastructure at Angels Health Services, enabling reliable connectivity and data access for efficient healthcare operations.</p>
    </div>
    <div class="project">
      <img src="images/project8.jpg" alt="Project 8">
      <h3>Zoe Kenya </h3>
	  <h4>Software Support</h4>
      <p>We offered software support and solutions to Zoe Kenya, ensuring their software systems were functional, up-to-date, and tailored to their operational needs.</p>
    </div>
    <div class="project">
      <img src="images/project9.jpg" alt="Project 9">
      <h3>Laare General Hospital </h3>
	  <h4>Network Installation</h4>
      <p>We installed a robust network infrastructure at Laare General Hospital, facilitating seamless data exchange and communication among staff and departments for enhanced healthcare services.</p>
    </div>
	<div class="project">
      <img src="images/project1.jpg" alt="Project 1">
      <h3>Maua Methodist <h3>
        <h4>Fleet Management</h4>
      <p>Our team developed a comprehensive fleet management system for Maua Methodist Hospital, enabling efficient tracking and management of their vehicle fleet, resulting in improved operational efficiency and cost savings.</p>
    </div>
    <div class="project">
      <img src="images/project3.jpg" alt="Project 3">
      <h3>Patient Management</h3>
      <p>We developed a patient management system for efficient record keeping and streamlined processes at Maua Methodist Hospital, ensuring accurate patient data, efficient workflows, and improved healthcare delivery.</p>
    </div>
    <div class="project">
      <img src="images/project4.jpg" alt="Project 4">
      <h3>Support-Desk System</h3>
      <p>We created a support-desk system for efficient issue tracking and resolution at Maua Methodist Hospital, ensuring timely response to staff and patient inquiries, leading to enhanced support services and improved communication.</p>
    </div>
    <div class="project">
      <img src="images/project5.jpg" alt="Project 5">
      <h3>Mwenge Sacco<h3>
	  <h4>Network and Computer Repairs</h4>
      <p>We provided comprehensive network setup and ongoing computer repair services for Mwenge Sacco, ensuring seamless connectivity and reliable IT infrastructure for efficient operations.</p>
    </div>
  </div>
</section>

  
  
  <section class="development-process">
  <div class="process-content">
    <h2>Our Development Process and Methodologies</h2>
    <p>At TECHIQs, we follow industry-standard development processes and methodologies to ensure efficient project management and successful client collaboration. Our team of experienced professionals is well-versed in various approaches, including Agile and Scrum, to deliver high-quality solutions tailored to meet our clients' specific needs.</p>
    <h3>Here is an overview of our development process:</h3>
	<br>
    <img class="methodology-img" src="images/scrum.jpg" alt="Agile and Scrum Methodologies">
	<br>
    <ol>
      <li><strong>1. Project Initiation:</strong> <br> We begin each project by thoroughly understanding our client's requirements, goals, and expectations. This involves comprehensive discussions to align our vision with theirs.</li>
      <li><strong>2. Requirement Analysis:</strong> <br>Our team conducts a detailed analysis of the project requirements, breaking them down into manageable tasks and deliverables.</li>
      <li><strong>3. Agile Planning: </strong><br>We adopt Agile principles to divide the project into sprints, with each sprint representing a set timeframe for development and testing.</li>
      <li><strong>4. Scrum Implementation:</strong><br> Within each sprint, we follow Scrum methodology to facilitate team collaboration, daily stand-up meetings, and progress tracking.</li>
      <li><strong>5. Continuous Integration and Testing:</strong><br> Throughout the development process, we emphasize continuous integration and rigorous testing to identify and address issues promptly.</li>
      <li><strong>6. Client Collaboration: </strong><br>We maintain open communication with our clients, providing regular updates, seeking feedback, and incorporating changes as needed.</li>
      <li><strong>7. Deployment and Support:</strong> <br>Once the development is complete and thoroughly tested, we deploy the solution and provide ongoing support and maintenance as required.</li>
    </ol>
    <p>By leveraging these methodologies and best practices, we ensure that our projects are delivered on time, within budget, and with the highest level of quality, exceeding our clients' expectations.</p>
  <br>
  <h3>Using Agile and Scrum methodologies offers several benefits:</h3>
  <br>
    <ul>
      <li><strong>Increased Flexibility:</strong> <br>Agile allows us to adapt to changing requirements and market conditions, ensuring the final product meets current needs.</li>
      <li><strong>Continuous Improvement:</strong><br> By embracing iterative development cycles, we continuously refine the solution, resulting in a more refined and polished end product.</li>
      <li><strong>Client Collaboration:</strong><br> With Scrum, we involve clients throughout the development process, seeking their feedback and ensuring alignment with their vision.</li>
      <li><strong>Enhanced Transparency:</strong><br> Agile provides transparency into the progress and development status, keeping all stakeholders informed.</li>
    </ul>
  
  </div>
</section>

<section class="technologies">
    <h2>Technologies Used</h2>
    <ul>
      <li>Programming Languages: HTML, CSS, JavaScript, Python, Java</li>
      <li>Front-end Frameworks: React, Vue.js</li>
      <li>Back-end Frameworks: Node.js, Django, Spring Boot</li>
      <li>Database Management: MySQL, MongoDB</li>
      <li>Version Control: Git</li>
      <li>Deployment: Docker</li>
      <li>Cloud Services: AWS, Azure</li>
      <li>Agile Project Management</li>
    </ul>
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
  <body>
  </html>