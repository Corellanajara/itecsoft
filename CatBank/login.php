<!DOCTYPE html>
<html>
  <head>
    <title>CatBank</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      .container{margin-top:100px}
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-horizontal" action="comprobar.php" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Rut</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="rut"  placeholder="Rut" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
