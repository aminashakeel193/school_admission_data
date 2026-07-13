<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
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
    </style>
</head>
<body>
     <!-- Navbar --> 
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

  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to AMAAL INTERNATIONAL SCHOOL</h1>
    <p>Empowering students for a brighter tomorrow through global education and excellence.</p>
    <a href="admission.php" class="btn">Apply Now</a>
  </section>

  <!-- Highlights -->
  <section class="highlights">
    <div class="highlight">
      <h3>Modern Facilities</h3>
      <p>State-of-the-art labs, libraries, and classrooms that inspire learning.</p>
    </div>
    <div class="highlight">
      <h3>Expert Faculty</h3>
      <p>Dedicated, highly qualified teachers fostering growth and creativity.</p>
    </div>
    <div class="highlight">
      <h3>Global Curriculum</h3>
      <p>Innovative programs designed for international academic success.</p>
    </div>
  </section>

  <!-- 🌟 Leadership Section -->
  <section class="leadership">
    <h2>Our School Leadership</h2>
    <div class="leaders">
      <div class="leader-card">
        <img src="assests/images/principle.webp" alt="Principal Amina Shakeel">
        <h3>Mrs. Amina Shakeel</h3>
        <p><strong>Principal</strong></p>
        <p>“Our mission is to nurture responsible, creative, and confident learners prepared to meet global challenges.”</p>
      </div>
      <div class="leader-card">
        <img src="assests/images/vice.prinicple.png" alt="Vice Principal Ummu Momineen">
        <h3>Mrs. Ummu Momineen</h3>
        <p><strong>Vice Principal</strong></p>
        <p>“Together, we inspire excellence, build character, and cultivate lifelong learning in every student.”</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 AMAAL INTERNATIONAL SCHOOL | All Rights Reserved.</p>
  </footer>
</body>
</html>