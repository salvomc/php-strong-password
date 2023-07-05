<?php
    
include 'functions.php'

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Password Generator</title>
    </head>
    <body class="bg-primary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4 text-center">Password Generator</h1>
                    <h2 class="mt-2 text-center">Generate a strong password!<h2>
                    <div class="content p-5 mt-5 rounded border border-1 border-secondary bg-primary-subtle">
                    <form action="index.php" method="GET" class="form-group">
                    <div>       
                    <label for="password" class="fs-5">Insert password length</label> 
                    <input type="text" class="form-control w-25" placeholder="" name="password" id="password">
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Invia</button>
                    <button class="btn btn-secondary mt-3">Annulla</button>
                    </form>
                    <?php
                        if(isset($_GET['password']) && $_GET['password'] != '' && is_numeric($_GET['password']) == true) 
                        {?>
                            <div class="alert alert-success mt-5 fs-5" role="alert">
                                <?php echo "Password generated: ".genRandomPassword() ?>
                            </div>
                    <?php } ?>  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>