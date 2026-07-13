<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admission.css">
    <title>Events</title>
    <style>
          /* === Variables === */
    :root {
      --primary: #be04a6;
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
      background: linear-gradient(120deg, #ce9ec3, #6b395a);
      color: var(--dark);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* === Navbar === */
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
        background: #2c2c2c; 
        padding: 30px; 
    }

    h2 {
        text-align: center; 
        color: #f5f5f5; 
        margin-bottom: 40px;
    }

    form {
        background: #3e3e3e; 
        padding: 40px; 
        border-radius: 10px;
        max-width: 600px; 
        margin: auto; 
        box-shadow: 0 0 20px rgba(0,0,0,0.5);
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #f5f5f5; 
        font-weight: bold;
        font-size: 14px;
    }

    input[type="text"],
    input[type="date"] {
        width: 100%; 
        padding: 12px; 
        border-radius: 5px;
        font-size: 16px;
        border: 1px solid #a0522d; 
        background-color: #fdf5e6; 
        transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="date"]:focus {
        border-color: #8b4513; 
        box-shadow: 0 0 5px #8b4513;
        outline: none;
        background-color: #fff8f0;
    }

    .flex-row {
        display: flex;
        gap: 30px;           /* More space between the two fields */
        margin-bottom: 25px; /* Extra space below the row */
    }

    .flex-row .form-group {
        flex: 1;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .checkbox-container {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .checkbox-container input[type="checkbox"] {
        margin-right: 10px;
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #8b4513; 
        transition: transform 0.2s ease;
    }

    button { 
        width: 100%;
        padding: 14px; 
        background: #8b4513; 
        color: white; 
        border: none; 
        border-radius: 5px;
        cursor: pointer; 
        font-size: 16px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    button:hover { 
        background: #a0522d; 
        transform: scale(1.02);
    }

    @media (max-width: 600px) {
        .flex-row {
            flex-direction: column;
            gap: 15px; /* smaller space on mobile */
        }
    }
    /* ------event----- */
    /* === Base Styles === */
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background-color: #f898d3;
      border: 1px,solid,purple;
      color: #333;
    }

    header {
      background-color: #c91182;
      color: white;
      text-align: center;
      padding: 20px 0;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    header h1 {
      margin: 0;
      font-size: 1.8rem;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }

    /* === Event Card === */
    .event-card {
      background: #ffffffff;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(206, 10, 10, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .event-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .event-image {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .event-content {
      padding: 20px;
    }

    .event-date {
      background-color: #ca8824;
      border: 1px, green, solid;
      color: #fff;
      display: inline-block;
      padding: 6px 12px;
      border-radius: 5px;
      font-size: 0.85rem;
      margin-bottom: 10px;
    }

    .event-title {
      font-size: 1.2rem;
      color: #e00850;
      margin: 10px 0 5px;
    }

    .event-desc {
      font-size: 0.95rem;
      color: #555;
    }

    footer {
      background: #121416;
      color: #fff;
      text-align: center;
      padding: 15px 0;
      margin-top: 40px;
      font-size: 0.9rem;
    }

    /* === Animations === */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .event-card {
      animation: fadeInUp 0.8s ease forwards;
    }

    /* === Responsive Adjustments === */
    @media (max-width: 768px) {
      header h1 {
        font-size: 1.5rem;
      }
      .event-card {
        margin-bottom: 20px;
      }
      .event-title {
        font-size: 1.1rem;
      }
    }

    @media (max-width: 480px) {
      .event-content {
        padding: 15px;
      }
      .event-date {
        font-size: 0.8rem;
      }
    }
  
    

    </style>
</head>
<body>
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


    <header>
    <h1>Amal International School - Upcoming Events</h1>
  </header>

    
    <div class="container">
    <div class="event-card">
      <img src="assests/images/sports day.avif" alt="Sports Day" class="event-image">
      <div class="event-content">
        <div class="event-date">Dec 10, 2025</div>
        <h3 class="event-title">Annual Sports Day</h3>
        <p class="event-desc">Join us for an exciting day filled with sports competitions, teamwork, and fun activities for all students.</p>
      </div>
    </div>

    <div class="event-card">
      <img src="assests/images/science day.jpg" alt="Science Exhibition" class="event-image">
      <div class="event-content">
        <div class="event-date">Jan 15, 2026</div>
        <h3 class="event-title">Science Exhibition</h3>
        <p class="event-desc">Students will showcase innovative science projects and experiments. Parents are warmly invited!</p>
      </div>
    </div>

    <div class="event-card">
      <img src="assests/images/cltural day.jpg" alt="Cultural Festival" class="event-image">
      <div class="event-content">
        <div class="event-date">Feb 20, 2026</div>
        <h3 class="event-title">Cultural Festival</h3>
        <p class="event-desc">A colorful day of dance, drama, music, and art celebrating diverse cultures and talents of our students.</p>
      </div>
    </div>

    <div class="event-card">
      <img src="assests/images/parent-teacher.jpg" alt="Parent-Teacher Meeting" class="event-image">
      <div class="event-content">
        <div class="event-date">Mar 5, 2026</div>
        <h3 class="event-title">Parent-Teacher Meeting</h3>
        <p class="event-desc">An interactive session between parents and teachers to discuss student progress and future goals.</p>
      </div>
    </div>
  </div>

  <footer>
    © 2025 Amal International School | All Rights Reserved
  </footer>
</body>
</html>