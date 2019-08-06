<li><a href="#">Home</a></li>
<li class="active">Preview</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
   <div id="content">
      <!-- row -->
      <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark">
               <!-- PAGE HEADER -->
               <i class="fa-fw fa fa-eye"></i>
               Preview
            </h1>
         </div>
      </div>
      <!-- PAGE CONTENT WRAPPER -->
      <div class="page-content-wrap">

         <div class="row">
            <div class="col-md-12">

            <div class="col-md-3">

            <!-- START WIDGET MESSAGES -->
            <div style="overflow: hidden; padding-top: 0; min-height: auto;" class="widget widget-default widget-item-icon">
            <div class="widget-item-left" style="background-color: #ffba00;margin-bottom: -8px;margin-left: 0px;width: 80px;">
               <span class="fa fa-download" style="color:#ffff"></span>
            </div>
            <div class="widget-data">
               <div class="widget-int num-count" style="color:#6c7074">92,710</div>
               <div class="widget-title" style="color:#ffba00">Updated</div>
               <div class="widget-subtitle">collected data
                  <a href="http://103.77.78.169/dbs/invoice" data-toggle="tooltip" data-placement="top" title="" target="_blank" data-original-title="View all Invoice"><span class="label label-primary">View</span></a>
               </div>
               <!-- <div class="widget-subtitle">In your mailbox</div> -->
            </div>

            </div>
            <!-- END WIDGET MESSAGES -->

         </div>

         <div class="col-md-3">

         <!-- START WIDGET MESSAGES -->
         <div style="overflow: hidden; padding-top: 0; min-height: auto;" class="widget widget-default widget-item-icon">
         <div class="widget-item-left" style="background-color: #00ca8a;margin-bottom: -8px;margin-left: 0px;width: 80px;">
            <span class="fa fa-check" style="color:#ffff"></span>
         </div>
         <div class="widget-data">
            <div class="widget-int num-count" style="color:#6c7074">42,000</div>
            <div class="widget-title" style="color:#00ca8a">Added</div>
            <div class="widget-subtitle">collected data
               <a href="http://103.77.78.169/dbs/invoice" data-toggle="tooltip" data-placement="top" title="" target="_blank" data-original-title="View all Invoice"><span class="label label-primary">View</span></a>
            </div>
            <!-- <div class="widget-subtitle">In your mailbox</div> -->
         </div>

         </div>
         <!-- END WIDGET MESSAGES -->

      </div>

      <div class="col-md-3">

         <!-- START WIDGET MESSAGES -->
         <div style="overflow: hidden; padding-top: 0; min-height: auto;" class="widget widget-default widget-item-icon">
         <div class="widget-item-left" style="background-color: #ea0008;margin-bottom: -8px;margin-left: 0px;width: 80px;">
            <span class="fa fa-times" style="color:#ffff"></span>
         </div>
         <div class="widget-data">
            <div class="widget-int num-count" style="color:#6c7074">3,000</div>
            <div class="widget-title" style="color:#ea0008">Removed</div>
            <div class="widget-subtitle">collected data
               <a href="http://103.77.78.169/dbs/invoice" data-toggle="tooltip" data-placement="top" title="" target="_blank" data-original-title="View all Invoice"><span class="label label-primary">View</span></a>
            </div>
            <!-- <div class="widget-subtitle">In your mailbox</div> -->
         </div>

         </div>
         <!-- END WIDGET MESSAGES -->

      </div>

               <!-- START DEFAULT DATATABLE -->
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><a href="<?php echo base_url('rate') ?>" style=" background:#d7282d; border-color:#d7282d; border-width: 2px; color: #fff; font-size:12px; width:200px; border-radius: 5px;" type="button" class="btn btn-danger"><span class="fa fa-download"></span> Click Here To Update Rate</a></h3>
                     <ul class="panel-controls">
                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                     </ul>
                  </div>
                  <div class="panel-body">
                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th>Product</th>
                              <th>Origin</th>
                              <th>Destination</th>
                              <th>Old Price</th>
                              <th>Status</th>
                              <th>New Price</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($perview as $data) { 
                              if ($data->new_price > $data->old_price) {
                                 $panah='<span class="label label-success"><i class="fa fa-sort-asc fa-lg" style="color: white;"></i> <b> Updated</b></span>';
                              }else{
                                 $panah='<span class="label label-danger"><i class="fa fa-sort-desc fa-lg" style="color: white;"></i> <b> Updated</b></span>';                                 
                              }
                              ?>
                              <tr>
                                 <td><?php echo $data->product ?></td>
                                 <td><?php echo $data->origin ?></td>
                                 <td><?php echo $data->destination ?></td>
                                 <td><?php echo $data->old_price ?></td>
                                 <td><?php if ($data->status == 'update') {
                                                         echo $panah;
                                                      } else {
                                                         echo '<span class="label label-danger">Add</span>';
                                                      } ?></td>
                                 <!-- <td><a data-toggle="tooltip" data-placement="right" title="" data-original-title="View Detail" href="<?php echo base_url() ?>" ><span class="label label-primary" ><i class="glyphicon glyphicon-user"></i></span></a></td> -->
                                 <td><?php echo $data->new_price ?></td>                              
                              </tr>
                           <?php } ?>
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
               <h4 class="modal-title" id="myModalLabel">Upload PO LIST</h4>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('po_list/uploadData') ?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="alert alert-block alert-success">
                              <a class="close" data-dismiss="alert" href="#">×</a>
                              <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Information</h4>
                              <p>
                                 SAP sync CSV " This selection enables SAP Integration for PO number session only. All syntax and tables to sync is based on agreed table structure
                              </p>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input input-file">
                              <input type="file" name="uploadFile" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" value="">
                           </div>
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

   <div class="modal fade" id="doc_pos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
               </button>
               <h4 class="modal-title" id="myModalLabel">Document Position</h4>
            </div>
            <div class="modal-body">
               <form action="<?php echo base_url('po_list/uploadData') ?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="alert alert-block alert-success">
                              <a class="close" data-dismiss="alert" href="#">×</a>
                              <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Information</h4>
                              <p>
                                 <!-- SAP sync CSV " This selection enables SAP Integration for PO number session only. All syntax and tables to sync is based on agreed table structure -->
                                 to show all document position and progress
                              </p>
                           </div>
                        </div>
                        <!-- disini tabel -->
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>Document Type</th>
                                 <th style="width: 16px">file</th>
                                 <th>
                                    <center>status</center>
                                 </th>
                                 <th>
                                    <center>Position</center>
                                 </th>
                                 <th>
                                    <center>Action</center>
                                 </th>

                              </tr>
                           </thead>
                           <tbody>
                              <form action="http://localhost/stp_tower/po_detail/update_status_detail/PO2019014" method="POST" enctype="multipart/form-data"></form>
                              <tr>
                                 <td>Berita Acara Negosiasi (BAN)</td>
                                 <td>2 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>Asset</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Berita Acara Kesepakatan (BAK)</td>
                                 <td>3 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>Asset</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Surat Persetujuan Warga &amp; Copy KTP</td>
                                 <td>3 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>Asset</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Rekomendasi Lurah dan Camat</td>
                                 <td>3 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>Project Manager</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Perjanjian Kerjasama (PKS)</td>
                                 <td>2 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>Project Manager</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Checklist for SITAC B2S Document (include its document)</td>
                                 <td>2 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>Project Manager</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Hammer Test/ Soil Test Report</td>
                                 <td>2 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>Finance</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Investment Calculation (IRR) (Mandatory for Over Budget)</td>
                                 <td>2 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-red"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Reject" style="color: white;"><i class="fa fa-exclamation"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>view Document history</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Rejected
                                    </center>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Surat Ijin Kawasan (jika Kawasan)</td>
                                 <td>2 Days</td>

                                 <td>
                                    <center><span class="badge bg-color-greenLight"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Approve" style="color: white;"><i class="fa fa-check"></i></a></span> </center>
                                 </td>
                                 <td>
                                    <center>view Document history</span></center>
                                 </td>
                                 <td>
                                    <center>
                                       <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                       Document Approved
                                    </center>
                                 </td>
                              </tr>

                           </tbody>
                        </table>
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