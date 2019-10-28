<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <fieldset>
            <form action="store.php" method="post">
                <h1>Editer un etudiant</h1>
                <div class="form-group" >
                    <label for="firstname">First_name</label>
                    <input type="text" name="firstname" id="fn" class="form-control">
                </div>
                <div class="form-group">
                    <label for="lastname">Last_name</label>
                    <input type="text" name="lastname" id="ln" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="em" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone_Number</label>
                    <input type="text" name="phone" id="ph" class="form-control">
                </div>
                <input type="submit" value="enregistrer" class="btn btn-primary">
                <input type="reset" value="annuler" class="btn btn-primary">           
            </form>
        </fieldset>
    </div>
     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>