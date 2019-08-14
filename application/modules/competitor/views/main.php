<li><a href="#">Home</a></li>
<li class="active">Rate Management</li>
</ul>


<div class="page-content-wrap">
   <div id="content">
      <div class="row">
      
         <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark">
               <!-- PAGE HEADER -->
               <i class="fa-fw fa fa-usd"></i>
               Competitor
            </h1>
         </div>

        
      </div>
      
      <!-- PAGE CONTENT WRAPPER -->
      <div class="page-content-wrap">

         <div class="row">
            <div class="col-md-12">

               <!-- START DEFAULT DATATABLE -->
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-controls"><a href="javascript:void(0);"  data-toggle="modal" data-target="#myModal" class="btn btn-success">Upload New Competitor Rate</button>&nbsp<a href="<?php echo base_url('rateuploadhistory') ?>" class="btn btn-primary" style="display: none;">Upload History</a></h3>
                  </div>
                  <div class="panel-body">
                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th>Company</th>
                              <th>Product</th>
                              <th>Origin City</th>
                              <th>Destination</th>
                              <th>Price</th>
                              <!-- <th>Total</th> -->
                              <!-- <th>History</th> -->
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($price as $data) { ?>
                           <tr>
                              <td><?php echo $data->company ?></td>
                              <td><?php echo $data->product ?></td>
                              <td><?php echo $data->origin_city ?></td>
                              <td><?php echo $data->destination_city ?></td>
                              <td><?php echo $data->price ?></td>
                           <!-- <td><a href="<?php echo base_url('ratehistory') ?>" type="button" class="btn btn-primary btn-xs">View</a></td> -->
                           </tr>
                           <?php } ?>

                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- END DEFAULT DATATABLE -->

            </div>
         </div>

      </div>
      <!-- PAGE CONTENT WRAPPER -->
   </div>



   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
               &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Upload New Competitor Rate</h4>
         </div>
         <div class="modal-body">
            <!-- <form action="<?php echo base_url('rate/uploadData') ?>" method="POST" enctype="multipart/form-data"> -->
            <form action="<?php echo base_url('perview') ?>" method="POST" enctype="multipart/form-data">

               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="alert alert-block alert-success">
                           <a class="close" data-dismiss="alert" href="#">×</a>
                           <h4 class="alert-heading"><i class="fa fa-warning"></i> Information</h4>
                           <p>
                              Update rate table for new price. All syntax and tables to sync is based on agreed table structure
                           </p>
                        </div>
                     </div>
                     <div class="form-group">
                        <!-- <div class="input input-file"> -->
                           <input type="file"  name="uploadFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" value="">
                        <!-- </div> -->
                     </div>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">
               Cancel
            </button>
            <!-- <button type="submit" class="btn btn-primary">
               Proccess
            </button> -->
            <!-- <input type="submit" name="preview" value="Preview" class="btn btn-success"> -->
            <input type="submit" name="submit" value="Upload" class="btn btn-success" />
         </div>
         </form>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>