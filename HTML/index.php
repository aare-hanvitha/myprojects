<?php 
include '../config.php';
include '../header-projects.php'; 
include '../interface.php';
include '../implements/htmlimplement.php';


$html = new HTML();
$qns = $html->Questions();
$ans = $html->Answers();
$count = count($qns);   
?>


<div class="react-page pb-5">
    <div class="mainheading">
        <h2>HTML</h2>
    </div>
<div class="container mt-5">
   
<?php
    for($i=1;$i<=$count;$i++){
?>

    <!-- Section -->
    <div class="card mt-3">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn" data-toggle="collapse" data-target="#section<?php echo $i ?>"><?php echo $qns[$i]; ?></button>
            </h5>
        </div>
        <div id="section<?php echo $i ?>" class="collapse">
            <div class="card-body">
            <pre>
                <code>
                  <?php echo $ans[$i];  ?>
                </code>
            </pre>
            </div>
        </div>
    </div>
    <!-- end -->

  <?php }  ?>

   
</div>
</div>


<!-- Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    var link=document.createElement("link");
    link.type="text/css";
    link.rel="stylesheet";
    link.href="css/style.css";  
    document.getElementsByTagName("head")[0].appendChild(link);
 </script>
</body>
</html>
