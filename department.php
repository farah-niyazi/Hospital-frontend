<?php
require_once("templates/header.php")
?>
<head>
<link href="./assets/css/department.css" rel="stylesheet">
</head>
<router-outlet></router-outlet>
<app-dept-list class="ng-tns-c5-5 ng-star-inserted">
<div class="m-3 p-3 ng-tns-c5-5" style="box-shadow: 1px 3px 17px  #5f9ea0; border-radius: 22px; border: 3px solid lightsea green;
 min-height: 300px; margin-top:300px !important;padding:50px !important;">
<h2 class="ng-tns-c5-5">Departments</h2>
<div class="row mb-3 ng-tns-c5-5" style="padding:10px; margin:5px;"> 
<div  class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;">
<a class="ng-tns-c5-5" href="Department/index.php">Department of Medicine</a>
</div>
<div  class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;">
<a class="ng-tns-c5-5" href="#/Department/d6e05db5-adce-45a4-a581-1302995cc627">Department of ENT</a>
</div>
<div  class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;"> 
<a class="ng-tns-c5-5" href="#/Department/e4dd41f3-e5ef-4042-9487-c8629254baa0">Department of Neurology  </a>
</div> 
<div  class="col-md-3 mb-4 ng-tns-c5-5 ng-star-inserted" style="border-radius: 12px; cursor: pointer;"> 
<a class="ng-tns-c5-5" href="#/Department/e5327ba6-e51b-4581-bd3f-e60986031f2e">Department of Surgery</a>
</div>
</div>
</div>
</div>
</app-dept-list>
<?php
require_once("templates/footer.php")
?>