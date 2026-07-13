<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>contact</title>
    <style>
        :root {
  --primary: #a72695;
  --secondary: #1af085;
  --light: #f5f9ff;
  --dark: #1a1a1a;
  --transition: all 0.3s ease;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background: var(--light);
  color: var(--dark);
}

/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: var(--primary);
  color: white;
  padding: 15px 50px;
  position: sticky;
  top: 0;
  z-index: 10;
}

.logo {
  display: flex;
  align-items: center;
}

.logo img {
  width: 50px;
  height: 50px;
  margin-right: 10px;
}

.logo span {
  font-size: 1.2rem;
  font-weight: 600;
  letter-spacing: 1px;
}

.nav-links {
  display: flex;
  gap: 30px;
  list-style: none;
}

.nav-links a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: var(--transition);
}

.nav-links a:hover,
.nav-links a.active {
  color: var(--secondary);
}

/* Mobile menu */
.menu-toggle {
  display: none;
  font-size: 2rem;
  cursor: pointer;
}

@media (max-width: 768px) {
  .menu-toggle {
    display: block;
  }

  .nav-links {
    position: absolute;
    top: 70px;
    right: 0;
    width: 100%;
    flex-direction: column;
    background: var(--primary);
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.3s ease-out;
  }

  .nav-links.open {
    max-height: 300px;
  }

  .nav-links li {
    padding: 10px 0;
  }
}

/* Hero */
.hero {
  text-align: center;
  padding: 120px 20px;
  background: linear-gradient(120deg, #b37597, #ddcbd0);
}

.hero h1 {
  color: var(--primary);
  font-size: 3rem;
  margin-bottom: 15px;
}

.hero p {
  font-size: 1.2rem;
  color: #f4faf9;
  margin-bottom: 30px;
}

.btn {
  background: var(--primary);
  color: white;
  padding: 12px 25px;
  border-radius: 6px;
  text-decoration: none;
  transition: var(--transition);
}

.btn:hover {
  background: var(--secondary);
  color: var(--dark);
}

/* Highlights */
.highlights {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding: 60px 20px;
  gap: 25px;
  background: #e7b7b7;
}

.highlight {
  width: 300px;
  padding: 25px;
  background: var(--light);
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: var(--transition);
}

.highlight:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

.highlight h3 {
  color: var(--primary);
  margin-bottom: 10px;
}
/* Leadership Section */
.leadership {
 background: linear-gradient(120deg, #b37597, #ddcbd0);
  text-align: center;
  padding: 70px 20px;
}

.leadership h2 {
  color: var(--primary);
  font-size: 2rem;
  margin-bottom: 40px;
  font-weight: 600;
}

.leaders {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 40px;
}

.leader-card {
  background: rgb(224, 221, 223);
  border-radius: 10px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
  padding: 25px;
  width: 300px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.leader-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.leader-card img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 15px;
}

.leader-card h3 {
  color: var(--primary);
  margin-bottom: 5px;
  font-size: 1.2rem;
}

.leader-card p {
  color: #444;
  line-height: 1.5;
}

/* Footer */
footer {
  background: var(--dark);
  color: white;
  text-align: center;
  padding: 20px 0;
  font-size: 0.9rem;
}
/* -------------------faculty member */
 body {
      font-family: Arial, sans-serif;
      background-color: #815d78;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #ff80ce;
      color: white;
      text-align: center;
      padding: 20px 0;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin: 30px auto;
      max-width: 1100px;
      padding: 0 20px;
    }

    .faculty-card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(124, 47, 47, 0.1);
      text-align: center;
      padding: 20px;
      transition: transform 0.2s ease;
    }

    .faculty-card:hover {
      transform: scale(1.05);
    }

    .faculty-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
      border: 3px solid #8bc234;
    }

    .faculty-name {
      font-size: 1.2em;
      font-weight: bold;
      color: #d37014;
    }

    .subject {
      font-size: 1em;
      color: #d213e4;
      margin: 5px 0;
    }

    .info {
      font-size: 0.9em;
      color: black;
    }

    /* 📱 Responsive Styles */
    @media (max-width: 768px) {
      header {
        font-size: 1.2em;
      }

      .faculty-card {
        padding: 15px;
      }

      .faculty-img {
        width: 90px;
        height: 90px;
      }
    }

    @media (max-width: 480px) {
      .faculty-name {
        font-size: 1.1em;
      }

      .subject {
        font-size: 0.95em;
      }

      .info {
        font-size: 0.85em;
      }
    }
    /* ------------------admission------------ */
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  background: #f3aaf3;
  color: #333;
  line-height: 1.6;
}

header {
  background: #004d40;
  color: white;
  padding: 20px;
  text-align: center;
}

header h1 {
  margin-bottom: 10px;
}

nav ul {
  list-style: none;
  padding: 0;
}

nav ul li {
  display: inline;
  margin: 0 10px;
}

nav ul li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
}

nav ul li a.active,
nav ul li a:hover {
  text-decoration: underline;
}

.contact-section {
  padding: 40px 20px;
  max-width: 1000px;
  margin: auto;
}

.contact-section h2 {
  text-align: center;
  margin-bottom: 10px;
  color: #004d40;
  font-weight: bold;
}

.contact-section p {
  text-align: center;
  margin-bottom: 30px;
}

.contact-container {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
}

form {
  flex: 1;
  min-width: 300px;
  background: rgb(236, 213, 236);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

form input,
form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #eb78eb;
  border-radius: 5px;
}

form button {
  background: #004d40;
  color: rgb(247, 186, 247);
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
  font-size: 16px;
}

form button:hover {
  background: #00695c;
}

#form-status {
  margin-top: 10px;
  font-weight: bold;
}

.contact-info {
  flex: 1;
  min-width: 300px;
}

.contact-info h3 {
  color: #004d40;
  margin-bottom: 10px;
}

.map-container {
  margin-top: 15px;
}

footer {
  background: #151a19;
  color: white;
  text-align: center;
  padding: 15px;
  margin-top: 40px;
}
    </style>
</head>
<body>
    <header>
    <nav class="navbar">
      <div class="logo">
        <img src="assests/images/logo.jpg" alt="Amaal International School Logo">
        <span>AMAAL INTERNATIONAL SCHOOL</span>
      </div>
      <div class="menu-toggle" id="menu-toggle">&#9776;</div>
      <ul class="nav-links" id="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="faculty.php">Faculty</a></li>
        <li><a href="admission.php">Admission</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
    <section class="contact-section">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you! Please fill out the form below or reach us directly.</p>

    <div class="contact-container">
     <form id="contactForm" method="POST" action="contact1.php">
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" placeholder="Your name" required />

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" placeholder="Your email" required />

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" placeholder="Your message" required></textarea>

    <button type="submit">Send Message</button>
    <p id="form-status"></p>
</form>


      <div class="contact-info">
        <h3>Our Address</h3>
        <p>Amaal International School<br>
           123 Education Lane,<br>
           Springfield, USA</p>
        <p><strong>Phone:</strong> (123) 456-7890<br>
           <strong>Email:</strong> info@greenfieldhigh.edu</p>

        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1671475940034!2d-122.42037948468136!3d37.77851927975806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c3f2cb5ef%3A0xaaa5eeb9ee3b3dd0!2sSchool!5e0!3m2!1sen!2sus!4v0000000000000" 
            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2025 Amaal High School. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>

