<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="col-4 offset-4 mt-5">
        <form action="action-connect-account.php" method="post">

            <div class="col-12 mt-4 mb-4 text-center">
                <h1>SE CONNECTER</h1>
            </div>

            <div class="col-10 offset-1 mb-3">
                <input type="text" class="form-control border-dark text-center" placeholder="Email" name="email">
            </div>

            <div class="col-10 offset-1 mb-3">
                <input type="text" class="form-control border-dark text-center" placeholder="Mot de passe" name="password">
            </div>

            <div class="col-10 offset-1 mb-4">
                <button type="submit" class="form-control btn btn-primary border-dark text-center">SE CONNECTER</button>
            </div>

        </form>
    </div>
    
</body>
</html>