<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/resetstyle.css">
    <title>Document</title>
</head>
<body>
<main>
    <h1>PHP Form Handling</h1>
    
    <form action="includes/formhandler.php" method="post">
    <!-- <form action="includes/formhandler.php" method="get"> -->
        <label for="firstname">Firstname?</label>
        <input type="text" id="firstname" name="firstname"  placeholder="Enter your firstname....">
        
        <label for="lastname">lastname?</label>
        <input type="text" id="lastname" name="lastname" >
        
        <label for="lastname">Favourite Pet?</label>
        <select id="favoritepet" name="favoritepet">
            <option value="None">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
            <option value="fish">Fish</option>
        </select>
        <button type="submit">Submit</button>
    </form>
    
    
</main>    
</body>
</html>