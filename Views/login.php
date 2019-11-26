<div class=content>
<form class="login_frm" action="usr_page.php" method="post">
  <fieldset>
    <legend>Accedi al tuo account</legend>
    <p class="simpleText">Username:<input type="text" name="username"><br></p>
    <p class="simpleText">Password:<input type="password" name="pwd"><br></p>
    <input class="button" type="submit" name="login_input" value="Login">
  </fieldset>
</form>

<style media="screen">

  fieldset{
    margin: auto;
    width: 50%;
    text-align: center;
	color:cornsilk;
  }
  fieldset > input {
    display: inline-block;
    margin: 0.5em;
  }
  
  fieldset > legend {
    padding: 0.3em;
    margin-left: 0.5em;
  }
  
  legend{
	  padding:0.3em;
	  text-align:center;
	  color:cornsilk;
  }
    
  .login_frm .simpleText{
	  margin:0.5em;
  }
  
  .login_frm .button{
		margin:1em;
  }
  
  .simpleText{
		padding-left: 8em;
		padding-right:8em;
	}
  body{
	background:#383838;  
  }
	
</style>

</div>

