<html>
 <head>
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>


  <div id="content">
	<h1>Inserting User Data</h1>
    <p>Enter your SQL query in the box below:</p>
    <form action="data_user_insert.php" method="POST">
      <fieldset>
			Username: <input name="userInsert"/><br>
			Password: <input type="password" name="passwordInsert"/><br>
			Hours: <input name="hoursInsert"/>
      </fieldset>
      <br />
      <fieldset class="center">
        <input type="submit" value="Run Query" />
        <input type="reset" value="Clear and Restart" />
      </fieldset>
    </form>
  </div>

  <div id="content">
	<h1>Updating User Data</h1>
    <p>Enter your SQL query in the box below:</p>
    <form action="data_user_update.php" method="POST">
      <fieldset>
			Username: <input name="userUpdate"/><br>
			Password: <input type="password" name="passwordUpdate"/><br>
			Hours: <input name="hoursUpdate"/><br>
			Where: <input name="whereUpdate"/>
      </fieldset>
      <br />
      <fieldset class="center">
        <input type="submit" value="Run Query" />
        <input type="reset" value="Clear and Restart" />
      </fieldset>
    </form>
  </div>
  
 </body>
</html>