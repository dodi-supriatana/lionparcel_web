<div id="content">
   <!-- row -->
   <div class="row">
      <!-- col -->
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
         <h1 class="page-title txt-color-blueDark">
            <!-- PAGE HEADER -->
            <i class="fa-fw fa fa-bar-chart-o"></i>
            PO TRACKING
         </h1>
      </div>

      <!-- end col -->
      <!-- right side of the page with the sparkline graphs -->
      <!-- col -->

      <!-- end col -->
   </div>

   <!-- end row -->
   <!--
      The ID "widget-grid" will start to initialize all widgets below 
      You do not need to use widgets if you dont want to. Simply remove 
      the <section></section> and you can use wells or panels instead 
      -->
   <!-- widget grid -->
   <section id="widget-grid" class="">
      <!-- row -->
      <ul class="demo-btns">
         <li>
            <a href="<?php echo base_url('assets/format_po/Format_Upload_data2.xlsx') ?>" class="btn btn-default"><i class="fa fa-download"></i> Download Format</a>
            <!-- <button class="btn bg-color-blueDark txt-color-white"><i class="fa fa-download"></i> Download</button> -->
         </li>
         <li>
            <!-- <button class="btn bg-color-blueDark txt-color-white"><i class="fa fa-upload"></i> Upload PO</button> -->
            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload"></i> Upload PO </a>
         </li>
      </ul>
      <div class="show-stat-microcharts">
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

            <div class="easy-pie-chart txt-color-red easyPieChart" data-percent="33" data-pie-size="50">
               <span class="percent percent-sign">35</span>
            </div>
            <span class="easy-pie-title"> UNRELEASED </span>

         </div>
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="easy-pie-chart txt-color-orangeDark" data-percent="78.9" data-pie-size="50">
               <span class="percent percent-sign">78.9 </span>
            </div>
            <span class="easy-pie-title"> IN PROGRESS </span>

         </div>
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="easy-pie-chart txt-color-blue" data-percent="23" data-pie-size="50">
               <span class="percent percent-sign">23 </span>
            </div>
            <span class="easy-pie-title"> READY FOR BAST <i class="fa fa-caret-up icon-color-good"></i></span>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="easy-pie-chart txt-color-greenLight" data-percent="36" data-pie-size="50">
               <span class="percent percent-sign">36 <i class="fa fa-caret-up"></i></span>
            </div>
            <span class="easy-pie-title" style="width: 170px;"> READY TO SUBMIT INVOICE </span>
         </div>
      </div>
      <div class="row">
         <!-- NEW WIDGET START -->
         <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false" data-widget-sortable="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
               <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
            
                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"
            
                        -->
               <!-- <span class="widget-icon label label-success"> <i class="fa fa-plus"> CREATE PO</i> </span> -->

               <header>
                  <!-- <span class="widget-icon"> <i class="fa fa-plus"></i> </span>
                  <h2>Create PO </h2> -->

               </header>

               <!-- widget div-->
               <div>

                  <!-- widget edit box -->
                  <div class="jarviswidget-editbox">
                     <!-- This area used as dropdown edit box -->

                  </div>
                  <!-- end widget edit box -->

                  <!-- widget content -->
                  <div class="widget-body no-padding">

                     <!-- <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%"> -->

                     <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">


                        <thead>
                           <tr>
                              <th class="hasinput" style="width:10%">
                                 <input type="text" class="form-control" placeholder="Project ID" />
                              </th>
                              <th class="hasinput" style="width:12%">
                                 <input type="text" class="form-control" placeholder="Project ID" />
                              </th>
                              <th class="hasinput" style="width:8%">
                                 <input type="text" class="form-control" placeholder="Project Name" />
                              </th>
                              <th class="hasinput" style="width:30%">
                                 <input type="text" class="form-control" placeholder="Filter Milestone" />
                              </th>
                              <th class="hasinput" style="width:15%">
                                 <input type="text" class="form-control" placeholder="Filter Milestone" />
                              </th>
                              <th class="hasinput" style="width:8%">
                                 <input type="text" class="form-control" placeholder="Filter Milestone" />
                              </th>
                              <th class="hasinput" style="width:19%">
                                 <input type="text" class="form-control" placeholder="Filter Milestone" />
                              </th>
                              <th class="hasinput" style="width:17%">
                                 <input type="text" class="form-control" readonly />
                              </th>
                           </tr>
                           <tr>
                              <th data-class="expand">PO NO</th>
                              <th data-class="expand">PO Date</th>

                              <!-- <th data-hide="phone">PO Details</th> -->
                              <!-- <th data-hide="phone">Milestone</th> -->
                              <th data-hide="phone">PO</th>
                              <th data-hide="phone">VENDOR</th>
                              <th data-hide="phone">Document Position</th>
                              <th data-hide="phone">Status</th>
                              <th data-hide="phone">Progress</th>
                              <th data-hide="phone">Action</th>
                           </tr>
                        </thead>

                     </table>

                  </div>
                  <!-- end widget content -->

               </div>
               <!-- end widget div -->

            </div>
            <!-- end widget -->
         </article>
         <!-- WIDGET END -->
      </div>
      <!-- end row -->
      <!-- row -->
      <div class="row">
         <!-- a blank row to get started -->
         <div class="col-sm-12">
            <!-- your contents here -->
         </div>
      </div>
      <!-- end row -->
   </section>

   <!-- end widget grid -->
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