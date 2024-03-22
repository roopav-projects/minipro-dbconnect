<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
              body{
                  background-image:url(https://th.bing.com/th/id/R.4816f0a6a4b1a7e819657347b613e420?rik=P0%2fISa7IGp1rrg&riu=http%3a%2f%2fwallpapercave.com%2fwp%2f8jrntKh.jpg&ehk=jju02FTHr%2bbvsxwgcF%2b5aXIy1W1CnOo8Od6sDLHXNRE%3d&risl=&pid=ImgRaw&r=0);
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
        }#sum{
            background-color:black;font-size:25px;
            color:white;
           text-decoration: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 4px;
            margin-left:200px;
        }
        
        
        
       </style>
</head>
<body>
    
    <div class="container">
        <h2> Admin  Login</h2>
    <form  method="post" action="login.php">
        <label>Username:</label><br><br>
        <input type="username" id="username" name="username" required><br><br>
        <label>Password:</label><br><br>
        <input type="password" id="password" name="password" required><br><br><br>
        <input id="sum"type="submit" value="Login">
    </form>
</div>
</body>
</html>


