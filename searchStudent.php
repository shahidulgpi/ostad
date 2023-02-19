<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search project for explaining super global variable </title>
</head>

<body>
    <h1>Searching Student From Data Table</h1>
    <form action="" method="post">
        <label for="student">Search by Name:</label>
        <input type="text" name="student">
        <button type="submit">Search</button>
    </form>
    <?php

    //search query using POST superglobal
    $dataFound = isset($_POST['student']) ? $_POST['student'] : '';
    echo "Searchin data name is: $dataFound" . "<br>";
    /*---------
     //search query using Get superglobal
    $dataFound = isset($_GET['student'])? $_GET['student']:'';
    echo "Searchin data name is: $dataFound"."<br>";

    //search query using Request superglobal
    $dataFound = isset($_REQUEST['student'])? $_REQUEST['student']:'';
    echo "Searchin data name is: $dataFound"."<br>";
    ------*/

    function search_student_data($dataFound)
    {

        $db = array("Karim", "Shaidul", "Mysha");
        $searchResult = array_search($dataFound, $db);


        if ($searchResult !== false) {
            echo "The searched student " . $dataFound . " is at index " . $searchResult;
        } else {
            echo "The searched student " . $dataFound . " is not found in our database.";
        }
    }
    ?>
</body>

</html>