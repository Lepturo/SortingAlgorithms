<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sorting Algorithms</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
</head>

<body>
    <?php 
    include("../Backend/SortingAlgorithms.php");
    
    ?>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-8"><?php include("./Display.php");?></div>
            <div class="col-md-4"><?php include("Menue.php"); ?></div>
        </div>
    </div>


    <script src="./assets/vendor/echarts/echarts.min.js"></script>
</body>

<!-- 
    

    $sorting = new SortingAlgorithms();
    
    //$algorithm = "Selection Sort";
    $array = array();

    for ($n = 0; $n < 10; $n++) {
        $array[] = rand(1, 100);
    }

    $sortedArray = $sorting->selectionSortASC($array);
    $sortedArrayString = $sorting->arrayToString($sortedArray);

    $sortedArrayDSC = $sorting->selectionSortDSC($array);
    $sortedArrayDSCString = $sorting->arrayToString($sortedArrayDSC);

    $arrayString = $sorting->arrayToString($array);

    $display->paint();

 -->
</html>

