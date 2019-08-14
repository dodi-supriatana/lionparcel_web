  <!-- START BREADCRUMB -->
  <ul class="breadcrumb">
     <li><a href="#">Home</a></li>
     <li><a href="#">Rate</a></li>
     <li class="active">Rate History</li>
  </ul>
  <!-- END BREADCRUMB -->

  <!-- PAGE CONTENT WRAPPER -->
  <div class="page-content-wrap">

     <div class="row">
        <div class="col-md-6">

           <!-- START TIMELINE FILTER -->
           <div class="panel panel-default">
              <div class="panel-body">
                 <h3><?php echo $data_header->product ?> From <?php echo $data_header->origin_city ?> To <?php echo $data_header->destination_city ?></h3>

              </div>
           </div>
           <!-- END TIMELINE FILTER -->

        </div>

     </div>

     <div class="row">
        <div class="col-md-12">

           <!-- START TIMELINE -->
           <div class="timeline timeline-right">

              <!-- START TIMELINE ITEM -->
              <!-- <div class="timeline-item timeline-main">
                 <div class="timeline-date">2014</div>
              </div> -->
              <!-- END TIMELINE ITEM -->
              <!-- START TIMELINE ITEM -->
  <?php foreach ($data as $key) { ?>
     
  
              <div class="timeline-item timeline-item-right">
                 <div class="timeline-item-info"><?php echo $key->created_date ?></div>
                 <div class="timeline-item-icon"><span class="fa fa-globe"></span></div>
                 <div class="timeline-item-content">
                    <div class="timeline-heading">
                       <!-- AMBON To LARANTUKA<br> -->
                       Price Updated be <strong> <?php echo $key->total ?> </strong> by <?php echo $key->update_by ?>

                    </div>

                 </div>
                 <!-- END TIMELINE ITEM -->
                 <!-- START TIMELINE ITEM -->

                 <!-- END TIMELINE ITEM -->
              </div>
              <!-- END TIMELINE -->
              <!-- START TIMELINE ITEM -->
              <?php } ?>

           </div>
        </div>

     </div>
     <!-- END PAGE CONTENT WRAPPER -->