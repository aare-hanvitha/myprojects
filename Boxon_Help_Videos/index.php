<?php include '../config.php'; ?>
<?php include '../header-projects.php'; ?>

    <div class="boxon-help-page">
          <div class="row mainHeading" >
              <h2>Boxon Help Videos</h2>
          </div>

          <div class="container" >
              <div class="card" style="width: 18rem;">
                  <div class="card-body">
                  <center>
                    <h5 class="card-title">Boxon Help Videos <br> (Customer Portal)</h5>
                    <a href="<?php echo $baseurl; ?>/Boxon_Help_Videos/fe_videos.php" class="btn btn-project">Go to project <i class="fa-sharp fa-solid fa-arrow-right"></i></a>
                  </center> 
                  </div>
              </div>

              <div class="card" style="width: 18rem;">
                  <div class="card-body">
                  <center>
                    <h5 class="card-title">Boxon Help Videos <br> (Admin Portal)</h5>
                    <a href="<?php echo $baseurl; ?>/Boxon_Help_Videos/be_videos.php" class="btn btn-project" >Go to project <i class="fa-sharp fa-solid fa-arrow-right"></i> </a>
                  </center>
                  </div>
              </div>

          </div>
      </div>

 <script>
    var link=document.createElement("link");
    link.type="text/css";
    link.rel="stylesheet";
    link.href="css/style.css";  
    document.getElementsByTagName("head")[0].appendChild(link);
 </script>
        
  </body>
</html>

