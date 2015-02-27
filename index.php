<!doctype html>
<html>
<head> 
<link href="CSS/Layout.css" rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<title></title>
</head>

<body>
<div id="Holder">
<div id="Header">
  <p>&nbsp;</p>
  <p></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="NavBar">
	<nav>
    	<ul>
        	<li><a href="login.php">Login</a></li>
            <li><a href="loginsystem/register.php">Register</a></li>
            <li><a href="#">Forgot password</a></li>
        </ul>
    </nav>
</div>
<div id="Content">
	<div id="PageHeading">
	  <h1>Sign up!</h1></div>
	<div id="ContentLeft">
	  <p>Welcome</p>
	  <h6>to the system!</h6>
	</div>
    <div id="ContentRight">
      <form action="login.php" method="post">
        <table width="506" border="0" align="center" id="table">
          <tbody>
            <tr bgcolor="#CCB6D5">
              <td width=auto><p>
                <label for="username" id="label" style="color: #FFFFFF">Username:                </label>
                <input name="username" type="text" class="text" id="FirstName">                
                </p>
                <p>
                  <label for="password" id="label" style="color: #FFFFFF">Password:</label>              
                  <input name="password" type="text" class="text" id="LastName">
              </p>                <p>&nbsp;</p></td>
            </tr>
            <tr bgcolor="#CCB6D5">
              <td><input type="submit" id="RegisterButton" value="Register" style="color: #815493"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
</div>
<div id="Footer"></div>
</div>

</body>
</html>

	
	

