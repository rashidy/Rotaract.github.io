 <?php require_once('../config/session.php'); ?>  
<?php

require_once('../config/config.php');
require_once('../config/session.php');

$notif_name = mysqli_query($db,"select fname,lname from users where fname = '$user_check' ");
$row = mysqli_fetch_array($notif_name,MYSQLI_ASSOC);
 $notif_name=$row['fname'];

?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>My Rotaract profile</title>
 <script  src="..\Rotaract\profile\script.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.css'><link rel="stylesheet" type="text/css" href="./style.css">

<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="mdb/css/mdb.lite.css.map">
<link rel="stylesheet" href="mdb/css/bootstrap.css">

<script>
$('#dt-more-row-col').mdbEditor({
modalEditor: true,
headerLength: 7,
});
$('.dataTables_length').addClass('bs-select');

</script>


</head>
<body >
<!-- partial:index.partial.html -->
<!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
<div class="jumbotron text-center" style="text-align:center;padding-top:45px;">
<img src="imgs/rotaract.png" height="100" width="100">&nbsp;&nbsp;<img src="imgs/Rotary.png" class="working-image" height="100" width="100">
  <h3 style="color:darkred; ">Welcome to Rotaract Cairo Fairways</h3>
<button class="btn btn-danger" style="float:right;"><a href="logout.php">Logout</a> </button>
</div>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
   

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">
    <div class="row">

      <div class="col s4">
        <!-- Promo Content 1 goes here -->
      </div>
      <div class="col s4">
        <!-- Promo Content 2 goes here -->
      </div>
      <div class="col s4">
        <!-- Promo Content 3 goes here -->
      </div>

    </div>
                <!--start container-->
                <div class="container">
				
                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div id="work-collections">
                        <div class="row">
                               <div class=" " style="margin-left:40px;width:370px;"	>
                                <div id="profile-card" class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="imgs/Rotary.png" alt="user background">
                                    </div>
                                    <div class="card-content">
									<a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <img src="imgs/Rashidy.jpeg" alt="" class="circle responsive-img activator card-profile-image">
                                        
                                            <i class="mdi-action-account-circle"></i>
                                        </a>

                                        <span class="card-title activator grey-text text-darken-4">Mohamed El-Rashidy</span>
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Teaching Assistant CIC</p>
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +(20) 1061775063</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Mohamed.Rashidy@hotmail.com</p>

                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Mohamed El-Rashidy </span>
                                        
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Teaching Assistant CIC</p>
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +(20) 1061775063</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> Mohamed.Rashidy@hotmail.com</p>
                                        <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th August 1994</p>
                                        <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> CAI - EGY</p>
                                    </div>
                                </div>
                            </div>
  
                            <div class="col s12 m12 l8">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-file-folder circle light-blue darken-2"></i>
                                        <span class="collection-header">Mohamed Rashidy</span>
                                        <p>Rotaract Cairo Fairways </p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">MSc of Business information system  </p>
                                                <p class="collections-content">Helwan university</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat cyan">Current</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-1"><canvas width="135" height="30" style="display: inline-block; width: 135px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">BSc of Business information system</p>
                                                <p class="collections-content">Helwan university</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat grey darken-3">2017</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-2"><canvas width="135" height="30" style="display: inline-block; width: 135px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">ADSL Technical Support</p>
                                                <p class="collections-content"> Vodafone Egypt</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat teal">2016</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-3"><canvas width="135" height="30" style="display: inline-block; width: 135px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Basketball Referee </p>
                                                <p class="collections-content">Egyptian basketball Association</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat green">2006</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-4"><canvas width="135" height="30" style="display: inline-block; width: 135px; height: 30px; vertical-align: top;"></canvas></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!--work collections end-->

                    <!-- Floating Action Button -->
                    <div class="fixed-action-btn" style="bottom: 45px; right:24px;">
                        <a class="btn-floating btn-large  blue">
                          <i class="fa fa-plus"></i>
                        </a><ul>
                          
                          <li><a href="app-calendar.html" class="btn-floating btn-large green" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="fa fa-calendar"></i></a></li>
                          <li><a href="mail_index.php" class="btn-floating btn-large" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="fa fa-at"></i></a></li>
                        </ul>
						
                    </div>
                    <!-- Floating Action Button -->
                        <!--  <div class="col s12 m12 l4">
                                <ul id="myUL" >
                                    
                                        <span class="collection-header"><p>To-DO list</p> </span>
                                        <div id="myDIV" class="header">
												 
												  <input type="text" id="myInput" placeholder="Title...">
												  <span onclick="newElement()" class="addBtn">Add</span>
										</div>
                                         <li>Hit the gym</li>
										  <li class="checked">Pay bills</li>
										  <li>Meet George</li>
										  <li>Buy eggs</li>
										  <li>Read a book</li>
										  <li>Organize office</li>
								
                            </div>
                </div>-->
			<div class="col s12">
              <ul id="task-card" class="collection with-header">
                  <li class="collection-header cyan">
                      <h4 class="task-card-title">My Tasks</h4>
                      <p class="task-card-date">March 15, 2020</p>
           <a href="#task-modal" class="waves-effect task-add  modal-trigger waves-circle waves-light waves-effect btn-floating secondary-content" style="margin-top:-30px;" ><i class="material-icons">add</i></a>
		   
				
                
					
  
				</ul> 
                  
              
 
              <div id="task-modal" class="modal " style="margin-left:40px;width:40%;height:25%;text-align:center; overflow-y: auto;">
                <nav class="task-modal-nav red">
                    <div class="nav-wrapper">
                      <div class="center " >
                        <ul>
                          <li><a href="#!" class="todo-menu"></a>
							
                          <li><a href="#!" class="addBtn" onclick="newElement()">Add New Task</a>
                          
                        </ul>
                      </div>
                      
                    </div>
                  </nav>
                  <div class="modal-content">                    
                    <div class="row">
                      <form class="col s12">                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="myInput" type="text" class="validate">
                            <label for="todo-title">Todo Title</label>
							
                          </div>
						  
                        </div>
						
                        </div>
						
                          </div>
						  
                       </form>
					   
                        
                      
                    </div>
                  </div>                 
                </div>
          </div>		
                <!--end container-->
                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">
                            <div class=" "style="margin-left:40px;width:470px;">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h4 class="task-card-title">Treasury</h4>
                                        <p class="task-card-date">March 15, 2020</p>
                                    </li>
                                    <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        
                                        <label for="task1" style="text-decoration: none;">Create Mobile App UI. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                                        </label>
                                        <span class="task-cat teal">Mobile App</span>
                                    </li>
                                    <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        
                                        <label for="task2" style="text-decoration: none;">Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                                        </label>
                                        <span class="task-cat purple">Web API</span>
                                    </li>
                                    <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                       
                                        <label for="task3" style="text-decoration: line-through;">Check the new Mockup of ABC. <a href="#" class="secondary-content"><span class="ultra-small">Wednesday</span></a>
                                        </label>
                                        <span class="task-cat pink">Mockup</span>
                                    </li>
                                    <li class="collection-item dismissable" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        
                                        <label for="task4" style="text-decoration: line-through;">I did it !</label>
                                        <span class="task-cat cyan">Mobile App</span>
                                    </li>
                                </ul>
                            </div>

                         
                                

                        <div class="row">


                         


                            <!-- map-card -->
                            <div class="col s12 m12 l4">
                                <div class="map-card">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <div id="map-canvas" data-lat="30.094500" data-lng="31.327600" class="" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 4, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 37px; top: -127px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 37px; top: 129px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -219px; top: -127px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -219px; top: 129px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 293px; top: -127px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 293px; top: 129px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 37px; top: -127px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 37px; top: 129px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -219px; top: -127px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -219px; top: 129px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 293px; top: -127px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 293px; top: 129px;"></div></div></div></div><div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: 37px; top: -127px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i384!4i256!2m3!1e0!2sm!3i344012265!3m14!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=43838" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 293px; top: 129px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i385!4i256!2m3!1e0!2sm!3i344012265!3m14!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=1250" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 293px; top: -127px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i302!3i384!4i256!2m3!1e0!2sm!3i344012265!3m14!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=49447" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -219px; top: 129px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i385!4i256!2m3!1e0!2sm!3i344012265!3m14!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=121103" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 37px; top: 129px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i301!3i385!4i256!2m3!1e0!2sm!3i344012265!3m14!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=126712" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -219px; top: -127px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i10!2i300!3i384!4i256!2m3!1e0!2sm!3i344012265!3m14!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjgyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZlMGVmZWYscy50OjJ8cy5lOmcuZnxwLnY6b258cC5oOiMxOTAwZmZ8cC5jOiNmZmMwZThlOCxzLnQ6M3xzLmU6Z3xwLmw6MTAwfHAudjpzaW1wbGlmaWVkLHMudDozfHMuZTpsfHAudjpvZmYscy50OjY1fHMuZTpnfHAudjpvbnxwLmw6NzAwLHMudDo2fHAuYzojZmY3ZGNkY2Q!4e0&amp;token=38229" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;"><p class="gm-style-pbt">Use two fingers to move the map</p></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 4, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=40.67,-73.94&amp;z=10&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                        </div>
                                        <div class="card-content">                    
                                            <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                                <i class="mdi-maps-pin-drop"></i>
                                            </a>
                                            <h4 class="card-title white-text text-darken-4"><a href="#" class="grey-text text-darken-4">Company Name LLC</a>
                                            </h4>
                                            <p class="blog-post-content">Some more information about this company.</p>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>

                    </div>
                    <!--card widgets end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
	
                    <!--work collections start-->

            </div></section>
            <!-- END CONTENT -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
				
            
            <!-- LEFT RIGHT SIDEBAR NAV-->

    
        <!-- END WRAPPER -->

    <!-- END MAIN -->


<div class="wrapper-editor">

  <div class="d-flex justify-content-center buttons-wrapper" style="text-align:center;">
    <button id="" class="btn btn-sm btn-teal btn-rounded addNewColumn">Activate edits</button>
    <button id="" class="btn btn-sm btn-mdb-color btn-rounded removeColumns" disabled>Deactivate edits</button>
    <button id="" class="btn btn-sm btn-info btn-rounded addNewRows">Add new rows</button>
  </div>

  <div class="closeByClick d-none"></div>

  <div class="showForm d-none" style="position: fixed; top: 20%; left:50%; transform: translate(-50%, -50%); z-index: 1100;">

    <form class="text-center border border-light p-5" style="background: white;">

      <button type="button" class="close position-relative button-x" style="top:-12%; right: -5%">
        <span aria-hidden="true" class="text-danger">×</span>
      </button>

      <h3 class="h3 my-3 text-danger font-weight-bold">Delete</h3>

      <hr class="mt-2 mb-3">

      <p class="text-center h5 py-2 pb-3">Are you sure to delete selected rows?</p>

      <hr class="mt-2 mb-3">

      <div class="d-flex justify-content-center buttonYesNoWrapper">
        <button type="button" class="btn btn-danger btnYes btn-sm">Yes</button>
        <button type="button" class="btn btn-primary btnNo btn-sm">No</button>
      </div>
    </form>

  </div>

  <table id="dtBasicExample-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
	  <th class="th-sm">Id </th>
        <th class="th-sm">Name </th>
        <th class="th-sm">Position </th>
        <th class="th-sm">Office </th>
        <th class="th-sm">Age </th>
        <th class="th-sm">Start date </th>
        <th class="th-sm">Salary </th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <td>1</td>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>2011/04/25</td>
        <td>$320,800</td>
      </tr>
      <tr>
	  <td>2</td>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td>2011/07/25</td>
        <td>$170,750</td>
      </tr>
      <tr>
	  <td>3</td>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td>2009/01/12</td>
        <td>$86,000</td>
      </tr>
      <tr>
	  <td>4</td>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2012/03/29</td>
        <td>$433,060</td>
      </tr>
      <tr>
	  <td>5</td>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>33</td>
        <td>2008/11/28</td>
        <td>$162,700</td>
      </tr>
      <tr>
	  <td>6</td>
        <td>Brielle Williamson</td>
        <td>Integration Specialist</td>
        <td>New York</td>
        <td>61</td>
        <td>2012/12/02</td>
        <td>$372,000</td>
      </tr>
      <tr>
	  <td>7</td>
        <td>Herrod Chandler</td>
        <td>Sales Assistant</td>
        <td>San Francisco</td>
        <td>59</td>
        <td>2012/08/06</td>
        <td>$137,500</td>
      </tr>
      <tr>
	  <td>8</td>
        <td>Rhona Davidson</td>
        <td>Integration Specialist</td>
        <td>Tokyo</td>
        <td>55</td>
        <td>2010/10/14</td>
        <td>$327,900</td>
      </tr>
      <tr>
	  <td>9</td>
        <td>Colleen Hurst</td>
        <td>Javascript Developer</td>
        <td>San Francisco</td>
        <td>39</td>
        <td>2009/09/15</td>
        <td>$205,500</td>
      </tr>
      <tr>
	  <td>10</td>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>2008/12/13</td>
        <td>$103,600</td>
      </tr>
      
  </table>

</div>

    <!-- //////////////////////////////////////////////////////////////////////////// -->


    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script><div class="jvectormap-label"></div>    


<div class="hiddendiv common"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); right: 0px;"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); right: 0px;"></div><div class="drag-target" style="right: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div><div id="toast-container"></div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/chartist/0.9.7/chartist.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.10/js/min/perfect-scrollbar.jquery.min.js'></script><script  src="./script.js"></script>


</body>
</html>
