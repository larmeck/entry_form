    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student details</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <script src="index.js"></script>
    
        <h1 align="center">Entry Form</h1>
<div>
    <p align="center">700OD Coding School- Explore Your Potential.<br>
    <a href="https://graduate.northeastern.edu/resources/most-popular-programming-languages/"><b color="white">Programing languages</b></a>
</p>
</div>

        <form   action="dbInsert.php" method="POST" >

            <label for="fullName" >Full Name: </label>
            <input type="text"  name="fullName" required><br><br><br>


            <label for="email">Email: </label>
            <input type="text" name="email" required><br><br><br>

            <label for="studentPassword">Password: </label>
            <input type="text" name="studentPassword" required><br><br><br>

            <label for="confirm_password"> Confirm Password: </label>
            <input type="text" name="confirm_password" required><br><br><br>

            <label  for="admNumber" > Admission Number: </label>
            <input type="number"   name ="admNumber"  required><br><br><br>

            <label   for="estate" >Estate: </label>
            <input type="text"  name="estate" required><br><br><br>


            <label name="gender_label" for="gender" >Gender</label><br><br>
                <select name="gender">
                    <option></option>
                    <option>Male</option>
                    <option>Female</option>
                </select><br><br>

            <label name="progLang" for="progLang" > Programming Language: </label><br><br>
                <select name="progLang">
                    <option></option>
                    <option>Java</option>
                    <option>Python</option>
                    <option>Web Design</option>
                    <option>JavaScript</option>
                </select><br><br>

        <p >
            <button id="my_button" type="submit" >Register</button>
        </p>


        </form>
        
    </body>
    </html>