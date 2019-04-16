<html>
 <head>
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>


  <div id="content">
	<h1>Inserting Data</h1>
    <p>Enter your SQL query in the box below:</p>
    <form action="data_insert.php" method="POST">
      <fieldset>
			Table: <input name="table"/>
			<h3> Separate the following by comas; use single quotes for each value </h3>
			Fields: <input name="fields"/><br>
			Values: <input name="values"/>
      </fieldset>
      <br />
      <fieldset class="center">
        <input type="submit" value="Run Query" />
        <input type="reset" value="Clear and Restart" />
      </fieldset>
    </form>
  </div>

  <div id="content">
	<h1>Deleting Data</h1>
    <p>Enter your SQL query in the box below:</p>
    <form action="data_delete.php" method="POST">
      <fieldset>
			Table: <input name="table"/><br>
			Where: <input name="where"/>
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