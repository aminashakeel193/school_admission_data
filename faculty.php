<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
     
   
    <title>faculty</title>
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
<body><header>
    <nav class="navbar">
      <div class="logo">
        <img src="assests/images/logo.jpg" alt="Amaal International School Logo">
        <span>AMAAL INTERNATIONAL SCHOOL</span>
      </div>
      <div class="menu-toggle" id="menu-toggle">&#9776;</div>
      <ul class="nav-links" id="nav-links">
        <li><a href="index.php" >Home</a></li>
        <li><a href="faculty.php">Faculty</a></li>
        <li><a href="admission.php">Admission</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

    <header>
    <h1>Our Faculty Members</h1>
  </header>

  <div class="container">
    <div class="faculty-card">
      <img src="assests/images/faculty photo.jpg" alt="Dr. ayesha" class="faculty-img">
      <div class="faculty-name">Dr. Ayesha Sharmeen</div>
      <div class="subject">Physics</div>
      <div class="info">Explores quantum mechanics and teaches advanced physics concepts.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/2faculty photo.jpg" alt="Prof. Rameena Kamran" class="faculty-img">
      <div class="faculty-name">Prof. Rameena Kamran</div>
      <div class="subject">Mathematics</div>
      <div class="info">Specializes in calculus and differential equations.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/2faculty photo.jpg" alt="Dr. Neha Rehman" class="faculty-img">
      <div class="faculty-name">Dr. Neha Rehman</div>
      <div class="subject">Chemistry</div>
      <div class="info">Focuses on organic chemistry and molecular reactions.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/3faculty photo.jpg" alt="Mr. Aakeel " class="faculty-img">
      <div class="faculty-name">Mr. Aakeel</div>
      <div class="subject">Computer Science</div>
      <div class="info">Teaches programming languages and data structures.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/3faculty photo.jpg" alt="Dr. Muhammad Ahmad" class="faculty-img">
      <div class="faculty-name">Dr. Muhammad Ahmad</div>
      <div class="subject">Biology</div>
      <div class="info">Researches genetics and teaches cell biology.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/faculty photo.jpg" alt="Prof. Khadija Iqbal" class="faculty-img">
      <div class="faculty-name">Prof. Khadija Iqbal</div>
      <div class="subject">English</div>
      <div class="info">Expert in literature and communication skills.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/3faculty photo.jpg" alt="Dr. Khawar Mehtab" class="faculty-img">
      <div class="faculty-name">Dr. Khawar Mehtab</div>
      <div class="subject">Economics</div>
      <div class="info">Teaches micro and macroeconomics with real-world applications.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/3faculty photo.jpg" alt="Mr. Rohan Das" class="faculty-img">
      <div class="faculty-name">Mr. Rohan Das</div>
      <div class="subject">History</div>
      <div class="info">Focuses on ancient civilizations and world history.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/2faculty photo.jpg" alt="Dr. Rabbiah Kashif" class="faculty-img">
      <div class="faculty-name">Dr. Rabbiah Kashif</div>
      <div class="subject">Political Science</div>
      <div class="info">Studies political theories and governance systems.</div>
    </div>

    <div class="faculty-card">
      <img src="assests/images/faculty photo.jpg" alt="Prof. Ambreen" class="faculty-img">
      <div class="faculty-name">Prof. Ambreen</div>
      <div class="subject">Psychology</div>
      <div class="info">Teaches human behavior and cognitive psychology.</div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <p>&copy; 2025 AMAAL INTERNATIONAL SCHOOL | All Rights Reserved.</p>
  </footer>
</body>
</html>