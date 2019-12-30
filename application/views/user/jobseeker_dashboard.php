 
<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Dashboard</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="breadcromb-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box-pagin">
                  <ul>
                     <li><a href="<?= base_url(); ?>">home</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Dashboard</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Breadcromb Area End -->
 
 
<!-- Candidate Dashboard Area Start -->
<section class="candidate-dashboard-area section_70">
   <div class="container">
      <div class="row">
         <?php $this->load->view(USER."jobseeker_left_side.php"); ?>
         <div class="col-lg-9 col-md-12">
            <div class="dashboard-right">
               <div class="welcome-dashboard">
                  <h3>Welcome <?= ucwords($_SESSION[PREFIX.'name']); ?></h3>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     <div class="widget_card_page grid_flex widget_bg_blue">
                        <div class="widget-icon">
                           <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="widget-page-text">
                           <h4>5</h4>
                           <h2>Applied Job</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     <div class="widget_card_page grid_flex  widget_bg_purple">
                        <div class="widget-icon">
                           <i class="fa fa-chain-broken" aria-hidden="true"></i>
                        </div>
                        <div class="widget-page-text">
                           <h4>3</h4>
                           <h2>Shortlisted Job</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     <div class="widget_card_page grid_flex widget_bg_dark_red">
                        <div class="widget-icon">
                           <i class="fa fa-users"></i>
                        </div>
                        <div class="widget-page-text">
                           <h4>45</h4>
                           <h2>Jobs Applied</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
 