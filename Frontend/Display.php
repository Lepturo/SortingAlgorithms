
<script>
    
    function create() {
        document.addEventListener("DOMContentLoaded", () => {
            chart = echarts.init(document.getElementById('barChart')).setOption({
                xAxis: {
                      type: 'category',
                      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                    },
                    yAxis: {
                      type: 'value'
                    },
                    series: [{
                      data: [120, 200, 150, 80, 70, 110, 130],
                      type: 'bar'
                    }]
            });
        });
    }

    function paint() {
        chart.setOption({
                xAxis: {
                      type: 'category',
                      data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                    },
                    yAxis: {
                      type: 'value'
                    },
                    series: [{
                      data: [120, 200, 150, 80, 70, 110, 130],
                      type: 'bar'
                    }]
            });
    }
</script>
<?php
    Class Display {
        
        private $algorithm = "";
        

        function __construct($algorithm) {
            $this->algorithm = $algorithm;
        }

        function initChart() {
            echo '<script>create();</script>';
        }

        /*function paint() {
            echo '<script src="#">paint();</script>';
        }*/

        function getAlgorithm() {
            return $this->algorithm;
        }
    }
?>
<?php
    include("../Backend/Sorting.php");
    $sorting = new SortingAlgorithms();
    $display = new Display("SelectionSort");
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

    $display->initChart();
    //$display->paint();
?>



<div class="card" id="card">
    <div class="card-body">
        <h5 class="card-title"><?php echo $display->getAlgorithm();?></h5>

        <!-- Bar Chart -->
        <div id="barChart" style="min-height: 450px;" class="echart"></div>  
        
        <!-- End Bar Chart -->

    </div>
</div>


