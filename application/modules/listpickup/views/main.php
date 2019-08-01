<li><a href="#">Home</a></li>
<li class="active"> Delivered Status</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
   <div id="content">
      <!-- row -->
      <div class="row">
         <!-- col -->
         <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark">
               <!-- PAGE HEADER -->
               <i class="fa-fw fa fa-car"></i>
               Delivered Status
            </h1>
         </div>

         <!-- end col -->
         <!-- right side of the page with the sparkline graphs -->
         <!-- col -->

         <!-- end col -->
      </div>
      <!-- PAGE CONTENT WRAPPER -->
      <div class="page-content-wrap">

         <div class="row">
            <div class="col-md-12">

               <!-- START DEFAULT DATATABLE -->
               <div class="panel panel-default">
                  
                  <div class="panel-body">
                     <table class="table datatable">
                        <thead>
                           <tr>
                              <th>Receiver</th>
                              <th>Sender</th>
                              <th>origin</th>
                              <th>destination</th>
                              <th>date</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($list as $datas) { 
                              if ($datas->status=='1') {
                                 $Status='<span class="label label-success">Delivered</span>';
                              }elseif ($datas->status=='2') {
                                 $Status='<span class="label label-warning">Shipping</span>';
                              }elseif ($datas->status=='3') {
                                 $Status='<span class="label label-danger">Canceled</span>';
                              }else {
                                 $Status='<span class="label label-primary">Pickup</span>';
                              }
                              ?>
                           <tr>
                              <td><?php echo $datas->receiver ?></td>
                              <td><?php echo $datas->sender ?></td>
                              <td><?php echo $datas->origin ?></td>
                              <td><?php echo $datas->destination ?></td>
                              <td><?php echo $datas->date ?></td>
                              <td><?php echo $Status ?></td>                              
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