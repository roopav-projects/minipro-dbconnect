<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image:url(https://freedesignfile.com/upload/2014/05/Crystal-water-drops-with-blurred-background-art-01-280x235.jpg);
            background-size:cover;
        }
        .container {
            width: 550px;height:510px;border:solid black;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;color:green;
            margin-bottom: 20px;font-size:60px;
        }
        label {
            font-weight: bold;font-size:25px; color:black;
        }
        
        
        #sum{
            background-color:red;font-size:25px;
            color:black;
           text-decoration: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 3px;
            margin-left:200px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Login</h2><br>
        <form action="stu.php" method="post">
            <label>STUDENT REGNO</label><br><br><br>
            <input type="text" id="regno" name="regno" required><br><br>
            <label >YEAR:</label><br><br>
            <input type="radio" id="year" name="year" value="I YEAR" required>I YEAR<br><br>
            <input type="radio" id="year" name="year" value="II YEAR" required>II YEAR<br><br>
            <input type="radio" id="year" name="year" value="III YEAR" required>III YEAR<br><br>
            <input type="radio" id="year" name="year" value="IV YEAR" required>IV YEAR<br><br>
            <input id="sum"type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
