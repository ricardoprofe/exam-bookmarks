

<!DOCTYPE html>
<html>
<head>
    <title> New Bookmark </title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <link type="text/css" rel="stylesheet" href="main.css">
</head>

<body>
<h1> New bookmark </h1>
<form> <!-- Complete the post and method attributes -->
    <label>ID</label>
    <input type="text" name="id" readonly value=""> <br>

    <label>Web name</label>
    <input type="text" name="name" value="" size="40"> <br>

    <label>URL</label>
    <input type="text" name="url" value="" size="80"> <br>

    <label>Timestamp</label>
    <input type="text" name="timestamp" readonly value=""> <br>

    <input type="submit" name="submit" value="Save">
    <input type="submit" name="import" value="Import CSV">
</form>

</body>
</html>
