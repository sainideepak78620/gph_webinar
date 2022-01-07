<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <!-- types of request method -->
    <!--
        GET     DATA FETCH
        POST    DATA SEND-->

        <h1>Form Handling - GET</h1>
        <form action="./insert.php" method="get">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="semester">Semester</label>
            <input type="number" name="semester" id="semester">

            <input type="submit" value="Submit">
        </form>

        <h1>Form Handling - POST</h1>
        <form action="./insert.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="semester">Semester</label>
            <input type="number" name="semester" id="semester">

            <input type="submit" value="Submit">
        </form>


        <h1>Form for UPDATE</h1>
        <form action="./update.php" method="post">
            <label for="id">ID</label>
            <input type="number" name="id" id="id">

            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="semester">Semester</label>
            <input type="number" name="semester" id="semester">

            <input type="submit" value="Submit">
        </form>


        <h1>Form for DELETE</h1>
        <form action="./delete.php" method="post">
            <label for="id">ID</label>
            <input type="number" name="id" id="id">

            <input type="submit" value="Submit">
        </form>
</body>
</html>