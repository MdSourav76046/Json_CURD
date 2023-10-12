
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="main">
        <div class="forum">
            <p>Create New Book</p>
            <form action="add.php" method = "get">
                <div class="name">
                    <label for="Atitle">Title</label>
                    <input id="Atitle" type="text" name="title" placeholder="Title Name ..." required>
                </div>
                <div class="pass">
                    <label for="Aname">Author's Name</label>
                    <input id="Aname" type="text" name="author" placeholder="Your Password... " required>
                </div>
                <div class="pass">
                    <label for="Aase">Avaiable</label>
                    <input id="Aase" type="number" name="available" placeholder="Is it Available? ..." required>
                </div>
                <div class="pass">
                    <label for="Apage">Page</label>
                    <input id="Apage" type="number" name="pages" placeholder="Your Password... " required>
                </div>
                <div class="pass">
                    <label for="Aisbn">Your Stall id</label>
                    <input id="Aisbn" type="number" name="isbn" placeholder="Your id... " required>
                </div>
                <input type="submit" aria-label="submit">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


