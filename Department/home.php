<?php
require_once("header.php")
?>
<div  class="container pb-3 mb-3 ng-tns-c32-7">

<app-mainbodysub  class="ng-ths-c32-7 ng-trigger ng-trigger-fadeIn">

<router-outlet ></router-outlet>

<app-notification  class="ng-star-inserted">

<div  Id="row" class="row pt-3"> 

<div  Id="col" class="col-md-3"> 
<div  id="height" style="border:4px solid lightgrey; border-radius: 13px; padding:5px;
 margin-bottom:10px;">

<h4  class="sticky-top" style="background-color: teal; color: whitesmoke;
 padding: 6px; z-index:0; text-align: center; font-size: 23px; border-radius: 13px;">Department Notifications</h4>

<div  id="scroll">

<p  id="p" style="font-weight: bold; text-align: center;" class="ng-star-inserted"> No

Notifications added...</p>



</div>

<div  class="viewall">

<a  href="/Department/5a2ab54e-82f14fb4-97bb-b0b4e1ddd5be/viewMoreNotifications" id="viewall">

View all </a>

</div>


</div>

<div  id="details" style="border: 4px solid lightgrey; padding: 5px; border-radius: 13px;"> 
<h4  style="background-color: teal; color: whitesmoke; padding: 3px; text-align: center;borders:4px solid lightgrey; border-radius: 13px;
 margin-bottom:10px;">
Contact Details</h4>

<h3  style="color: #026060;">&nbsp;&nbsp;Majid Khan </h3>

<h5  style="color:#026060 ;">&nbsp;&nbsp;Software Developer </h5>

<p  style="color: #026060; font-weight: bold; overflow: auto;">

&nbsp;



<i class="bi bi-envelope-fill"></i>&nbsp;majidkhanliver@live.com

<br >

&nbsp;


<i class="bi bi-telephone-fill"></i>&nbsp;7006056384

</p>

</div>

</div>

<div  class="col-md-9 order-first order-md-0">

<router-outlet ></router-outlet>

<app-about  class="ng-star-inserted" style>

<div >

<img  id="cimg" alt="Logo" class="img-fluid" style="width: 100%; height: 563px; margin-botton:10px
; border: 4px solid lightgrey; border-radius: 13px; padding: 5px;" src="../assets/img/sir.jpg">

<div  id="dept" style="border: 4px solid lightgrey; border-radius: 13px; padding:5px;margin-bottom: 10px; min-height: 200px;">

<h4  style="background-color: teal; color: whitesmoke; text-align: center; padding-top:6px; padding-bottom:6px; border-radius: 13px; padding:5px;">

ABOUT DEPARTMENT</h4>

<p >

"About the department of ent About the department of ent About the department of ent About the department of

ant. About the department of ent. About the department of ent About the department of ent
</p>

</div>

</div>

</app-about>
</div>

</div>
</div>

</app-notification>



<?php
require_once("../templates/footer.php")
?>