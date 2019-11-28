<div class=content>
<form class="login_frm" action="usr_page.php" method="post">
  <fieldset>
    <legend>Accedi al tuo account</legend>
    <label for="username" class="simpleText">Username:</label>
	<input class="inputArea" type="text" name="username">
    <label for="password" class="simpleText">Password:</label>
	<input class="inputArea" type="password" name="pwd">
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
	  display:block;
  }
  
  .login_frm .button{
		margin:1em;
		display:block;
		margin:auto;
		margin-top:2em;
		margin-bottom:2em;
  }
  
  .inputArea{
		color:white;
		background-color:grey;
	}
  
  body{
	background:#383838;  
  }
	
</style>

</div>

