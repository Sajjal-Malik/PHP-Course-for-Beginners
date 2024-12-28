<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Theme Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="form-container">
            <h2>Favorite Pet Form</h2>
            <form action="includes/formhandler.php" method="post">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input required type="text" id="firstname" name="firstname" placeholder="Enter your first name">
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Enter your last name">
                </div>

                <div class="form-group">
                    <label for="favoritepet">Favorite Pet</label>
                    <select id="favoritepet" name="favoritepet">
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="bird">Bird</option>
                        <option value="fish">Fish</option>
                        <option value="rabbit">Rabbit</option>
                    </select>
                </div>

                <button type="submit" name="submit" class="submit-button">Submit</button>
            </form>
        </div>
    </main>
</body>

</html>