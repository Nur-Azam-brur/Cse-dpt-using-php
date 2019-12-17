<?php include 'h.php';?>
 <div>
   <?php
    if (isset($_GET['msg'])) {
      echo "<span style='color:red'>".$_GET['msg']."</span>";
    }
  ?>
 </div>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/IMG_8756.JPG" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/icpc3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid">
<p>
<b>
  "Welcome to the department of ComputerScience&Engineering, BegumRokeyaUniversity, Rangpur.The Department of Computer Science and Engineering was established on 12 October, 2008.It is one of the founding department among six, Begum Rokeya University, Rangpur started its journey with.Since the beginning ofitsestablishment, the department has been able to attract the very best students who secure topmost merit positions in the undergraduate admission test every year.In the last eight years, CSE, BRUR prepared some talented graduates and they are playing important role both in the academic sector and industry.The department is conducting its activities with the motto to prepare future technology leaders and innovators of the country as well as throughout the globe in the domain of Computer Science and Engineering"
</b>
</p>
</div>
<br><br>
<p class="s2">Head of the Department <br><b>-Dr. Abu Kalam Md. Farid Ul Islam</b>
</p>

<?php include 'f.php';?>