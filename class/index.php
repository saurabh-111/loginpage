<html>  
<head>  
    <title>PHP login system</title>  
    <!-- // insert style.css file inside index.html  --> 
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>
<center>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "jiva.php" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password :  </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
    
</center> 
</body>     
</html>