<!DOCTYPE html>
<html>
<head>
    <title>Student Admission Form</title>
    <<style>
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
</style>

</head>
<body>

<h2>Student Admission Form</h2>

<form action="submit_form.php" method="POST">

    <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" id="name" name="name" placeholder="Enter student name" required>
    </div>

    <div class="flex-row">
        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" id="class" name="class" placeholder="Enter class" required>
        </div>
        <div class="form-group">
            <label for="regno">Phone no</label>
            <input type="text" id="regno" name="regno" placeholder="Enter registration number" required>
        </div>
    </div>

    <div class="flex-row">
        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" id="course" name="course" placeholder="Enter course" required>
        </div>
        <div class="form-group">
            <label for="admissions_date">Date of Birth</label>
            <input type="date" id="admissions_date" name="admissions_date" required>
        </div>
    </div>

    <div class="checkbox-container">
        <input type="checkbox" id="verify" name="verify" required>
        <label for="verify" style="margin:0; font-weight: normal; color: #f5f5f5;">
            I verify that all information provided is correct
        </label>
    </div>

    <button type="submit" name="submit">Submit</button>

</form>

</body>
</html>
