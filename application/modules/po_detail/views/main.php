<div id="content">

   <!-- Bread crumb is created dynamically -->
   <!-- row -->
   <div class="row">

      <!-- col -->
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
         <h1 class="page-title txt-color-blueDark">
            <!-- PAGE HEADER --><i class="fa-fw fa fa-puzzle-piece"></i> PO DETAIL </span></h1>
      </div>
      <!-- end col -->

      <!-- right side of the page with the sparkline graphs -->
      <!-- col -->

      <!-- end col -->

   </div>
   <!-- end row -->

   <!-- row -->

   <div class="row">

      <div class="col-sm-12">


         <div class="well well-sm">

            <div class="row">

               <div class="col-sm-8 col-md-8 col-lg-8">
                  <div class="well well-light well-sm no-margin no-padding">
                     <div class="row">

                        <!-- NEW COL START -->
                        <article class="col-sm-12 col-md-12 col-lg-12">

                           <!-- Widget ID (each widget will need unique ID)-->
                           <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-colorbutton="false" data-widget-sortable="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false">
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
                              <header>
                                 <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                                 <h2> </h2>

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

                                    <form id="checkout-form" class="smart-form" novalidate="novalidate">
                                       <fieldset>
                                          <div class="row">
                                             <section class="col col-3">
                                                <img src="<?php echo base_url('assets/img/login/stp_white.png') ?>" style="width: 80px;height: 100px;">
                                             </section>
                                             <section class="col col-5" style="font-size: 10px;">
                                                <b>PT Solusi Tunas Pratama</b> <br>
                                                Rukan Permata Senayan Blok C.01 - 02 RT/RW 009/007
                                                Grogol Utara Kebayoran Lama Jakarta Selatan DKI Jakarta Raya<br>
                                                12210<br>
                                                Telp : +62 21 57940688 Fax : +62 21 57950077
                                             </section>
                                             <section class="col col-3" style="font-size: 20px;">
                                                <b>
                                                   <center>PURCHASE ORDER <?php
                                                                           ?></center>
                                                </b>
                                             </section>
                                          </div>
                                       </fieldset>

                                       <fieldset>
                                          <div class="row">
                                             <section class="col col-6">
                                                <section class="col col-4">
                                                   <address>
                                                      <strong>PO Number</strong><br>
                                                      <strong>PO Date</strong><br>
                                                      <strong>PO Date</strong><br>
                                                      <strong>PO (Work)</strong><br>

                                                   </address>
                                                </section>
                                                <section class="col col-8">
                                                   <address>
                                                      : <?php echo $po_detail->po_no ?><br>
                                                      : <?php echo $po_detail->po_date ?><br>
                                                      : <?php echo $po_detail->po_type ?><br>
                                                      : <?php echo $po_detail->po_desc ?><br>
                                                   </address>
                                                </section>
                                             </section>
                                             <section class="col col-6">
                                                <section class="col col-4">
                                                   <address>
                                                      <strong>PO Creator</strong><br>
                                                      <strong>Project ID</strong><br>
                                                      <strong>Vendor</strong><br>
                                                      <strong>Cost Center</strong><br>

                                                   </address>
                                                </section>
                                                <section class="col col-8">
                                                   <address>
                                                      : <?php echo $po_detail->po_creator ?><br>
                                                      : <?php echo $po_detail->project_id ?><br>
                                                      : <?php echo $po_detail->vendor_name ?><br>
                                                      : <?php echo $po_detail->cost_center ?><br>
                                                   </address>
                                                </section>
                                             </section>
                                          </div>

                                       </fieldset>

                                       <!-- <fieldset>
                                          <div class="row">
                                             <section class="col col-12">
                                                <div class="show-stat-microcharts">
                                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                      <div class="easy-pie-chart txt-color-red easyPieChart" data-percent="33" data-pie-size="50">
                                                         <span class="percent percent-sign">35</span>
                                                      </div>
                                                      <span class="easy-pie-title"> UNRELEASED </span>

                                                   </div>
                                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                      <div class="easy-pie-chart txt-color-red easyPieChart" data-percent="33" data-pie-size="50">
                                                         <span class="percent percent-sign">35</span>
                                                      </div>
                                                      <span class="easy-pie-title"> UNRELEASED </span>

                                                   </div>
                                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                      <div class="easy-pie-chart txt-color-red easyPieChart" data-percent="33" data-pie-size="50">
                                                         <span class="percent percent-sign">35</span>
                                                      </div>
                                                      <span class="easy-pie-title"> UNRELEASED </span>

                                                   </div>
                                                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                      <div class="easy-pie-chart txt-color-red easyPieChart" data-percent="33" data-pie-size="50">
                                                         <span class="percent percent-sign">35</span>
                                                      </div>
                                                      <span class="easy-pie-title"> UNRELEASED </span>

                                                   </div>
                                                </div>
                                             </section>
                                          </div>
                                          <div class="row">
                                             <section class="col col-12">
                                                adasd
                                             </section>
                                          </div>

                                       </fieldset> -->



                                       <footer>
                                          <?php if ($po_detail->po_active == 0) { ?>
                                             <!-- <button type="submit" class="btn btn-primary"> -->
                                             <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload"></i> Upload PO </a>
                                             </button>
                                          <?php } else { ?>
                                             <a href="<?php echo base_url('assets/doc/' . $po_detail->po_doc) ?>" class="btn btn-default"><i class="fa fa-download"></i> Download PO </a>
                                             <!-- <i class="fa fa-cloud-download"></i>Download PO -->
                                          <?php } ?>

                                       </footer>
                                    </form>

                                 </div>
                                 <!-- end widget content -->

                              </div>
                              <!-- end widget div -->

                           </div>
                           <!-- end widget -->

                        </article>
                        <!-- END COL -->


                     </div>
                     <?php if ($po_detail->po_active != 0) { ?>
                        <div class="row">
                           <?php if ($_SESSION['group_id'] == '2') { ?>
                              <div class="col-sm-12">

                                 <hr>

                                 <div class="padding-10">

                                    <ul class="nav nav-tabs tabs-pull-right">

                                       <li class="pull-left">
                                          <span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i><b> REQUIREMENT DOCUMENT PROGRES</b></span>
                                       </li>
                                    </ul>

                                    <div class="tab-content padding-top-10">
                                       <div class="tab-pane fade in active" id="a1aaa">

                                          <div class="row">
                                             <table class="table table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th>Document Type</th>
                                                      <th style="width: 16px">file</th>
                                                      <th>
                                                         <center>status</center>
                                                      </th>

                                                      <th>
                                                         <center>Action</center>
                                                      </th>

                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <?php if ($_SESSION['group_id'] == '2') { ?>
                                                      <form action="<?php echo base_url('po_detail/upload_required/' . $po_detail->po_no) ?>" method="POST" enctype="multipart/form-data">
                                                         <?php $tombol = 0; ?>
                                                         <?php foreach ($get_current_doc_vendor as $current_doc) { ?>
                                                            <tr>
                                                               <td><?php echo $current_doc->doc_name . "   " ?></td>
                                                               <td><a href="<?php echo base_url('assets/doc/' . $current_doc->file_name) ?>"><img style="width: 16px" src="<?php echo base_url('assets/img/component/pdf.png') ?>"></a></td>
                                                               <td>
                                                                  <center><?php echo $current_doc->icon ?></center>
                                                               </td>
                                                               <td>
                                                                  <center>
                                                                     <?php if ($current_doc->event_id == '6') { ?>
                                                                        Document Approved
                                                                     <?php } elseif ($current_doc->event_id == '4') { ?>
                                                                        Document In Review
                                                                     <?php } elseif ($current_doc->event_id == '3') { ?>
                                                                        Document Uploaded, Waiting Response
                                                                     <?php } else { ?>
                                                                        <?php $tombol++; ?>
                                                                        <section class="col col-6">
                                                                           <span class="badge bg-color-darken"><input type="file" name="<?php echo $current_doc->doc_id . "_" . $current_doc->po_no ?>" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"></span>
                                                                        </section>
                                                                     <?php } ?>
                                                                  </center>

                                                               </td>
                                                            </tr>
                                                         <?php } ?>

                                                      <?php } ?>
                                                </tbody>
                                             </table>
                                             <center>
                                                <?php if ($tombol > '0') { ?>
                                                   <button type="submit" class="btn btn-primary">
                                                      <i class="fa fa-cloud-upload"></i> Update
                                                   </button>
                                                <?php } ?>
                                             </center>
                                             </form>
                                          </div>

                                       </div>
                                       <!-- end tab -->
                                    </div>

                                 </div>

                              </div>
                           <?php } ?>
                           <?php if ($_SESSION['group_id'] != '2') { ?>
                              <div class="col-sm-12">

                                 <hr>

                                 <div class="padding-10">

                                    <ul class="nav nav-tabs tabs-pull-right">

                                       <li class="pull-left">
                                          <span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i><b> REQUIREMENT DOCUMENT PROGRES</b></span>
                                       </li>
                                    </ul>

                                    <div class="tab-content padding-top-10">
                                       <div class="tab-pane fade in active" id="a1aaa">

                                          <div class="row">
                                             <table class="table table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th>Document Type</th>
                                                      <th style="width: 16px">file</th>
                                                      <th>
                                                         <center>status</center>
                                                      </th>
                                                      <th>
                                                         <center>document history</center>
                                                      </th>
                                                      <th>
                                                         <center>Action</center>
                                                      </th>

                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <form action="<?php echo base_url('po_detail/update_status_detail/' . $po_detail->po_no) ?>" method="POST" enctype="multipart/form-data">
                                                      <?php foreach ($get_current_doc as $current_doc) { ?>
                                                         <tr>
                                                            <td><?php echo $current_doc->doc_name ?></td>
                                                            <td><a href="<?php echo base_url('assets/doc/' . $current_doc->file_name) ?>"><img style="width: 16px" src="<?php echo base_url('assets/img/component/pdf.png') ?>"></a></td>

                                                            <td>
                                                               <center><?php echo $current_doc->icon ?> <?php
                                                                                                         ?></center>
                                                            </td>
                                                            <td>
                                                               <center><span class="label label-primary" data-toggle="modal" data-target="#history">view Document history</span></center>'
                                                            </td>
                                                            <td>
                                                               <center>
                                                                  <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                                                  <?php if ($current_doc->event_id == '5') { ?>
                                                                     Document Rejected
                                                                  <?php } elseif ($current_doc->event_id == '6') { ?>
                                                                     Document Approved
                                                                  <?php } elseif ($current_doc->event_id == '2') { ?>
                                                                     Waiting Document
                                                                  <?php } else { ?>
                                                                     <section class="col col-6">
                                                                        <label class="select">
                                                                           <select name="<?php echo $current_doc->doc_id . "_" . $current_doc->po_no ?>">
                                                                              <option value="0" selected="" disabled="">Select Action</option>
                                                                              <option value="4">Review</option>
                                                                              <option value="6">Approve</option>
                                                                              <option value="5">Reject</option>
                                                                           </select> <i></i> </label>
                                                                     </section>
                                                                  <?php } ?>
                                                               </center>
                                                            </td>
                                                         </tr>
                                                      <?php }  ?>

                                                </tbody>
                                             </table>
                                             <center>
                                                <!-- <button type="submit" class="btn btn-primary" >
                                                                     <i class="fa fa-cloud-upload"></i> Update
                                                                  </button> -->
                                                <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#resson"><i class="fa fa-upload"></i> Update </a>
                                             </center>
                                             <form>
                                          </div>
                                       </div>
                                       <!-- end tab -->
                                    </div>

                                 </div>

                              </div>
                           <?php } ?>

                        </div>
                     <?php } ?>

                     <?php if (($po_detail->po_active == 3) or ($po_detail->po_active == 4)) { ?>
                        <div class="row">

                           <div class="col-sm-12">

                              <hr>

                              <div class="padding-10">

                                 <ul class="nav nav-tabs tabs-pull-right">

                                    <li class="pull-left">
                                       <span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i><b> BAST DOCUMENT PROGRES</b></span>
                                    </li>
                                 </ul>

                                 <div class="tab-content padding-top-10">
                                    <div class="tab-pane fade in active" id="a1aaa">

                                       <div class="row">
                                          <table class="table table-bordered">
                                             <thead>
                                                <tr>
                                                   <th>Document Type</th>
                                                   <th style="width: 16px">file</th>
                                                   <th>
                                                      <center>status</center>
                                                   </th>
                                                   <th>
                                                      <center>Action</center>
                                                   </th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php if ($_SESSION['group_id'] == '2') { ?>
                                                   <?php foreach ($get_current_bast_vendor as $current_doc) { ?>
                                                      <tr>
                                                         <td><?php echo $current_doc->doc_name ?></td>
                                                         <td><img style="width: 16px" src="<?php echo base_url('assets/img/component/pdf.png') ?>"></td>
                                                         <td>
                                                            <center><?php echo $current_doc->icon ?></center>
                                                         </td>
                                                         <td>
                                                            <center>
                                                               <?php if ($current_doc->event_id == '5') { ?>
                                                                  Document Approved
                                                               <?php } elseif ($current_doc->event_id == '4') { ?>
                                                                  Document In Review
                                                               <?php } else { ?>
                                                                  <section class="col col-6">
                                                                     <span class="badge bg-color-darken"><input type="file" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"></span>
                                                                  </section>
                                                               <?php } ?>
                                                            </center>

                                                         </td>
                                                      </tr>
                                                   <?php } ?>
                                                <?php } else { ?>
                                                   <?php foreach ($get_current_bast as $current_doc) { ?>
                                                      <tr>
                                                         <td><?php echo $current_doc->doc_name ?></td>
                                                         <td><img style="width: 16px" src="<?php echo base_url('assets/img/component/pdf.png') ?>"></td>
                                                         <td>
                                                            <center><?php echo $current_doc->icon ?></center>
                                                         </td>
                                                         <td>
                                                            <center>
                                                               <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                                               <?php if ($current_doc->event_id == '6') { ?>
                                                                  Document Approved
                                                               <?php } else { ?>
                                                                  <section class="col col-6">
                                                                     <label class="select">
                                                                        <select name="po_type">
                                                                           <option value="0" selected="" disabled="">Select Action</option>
                                                                           <option value="PO Standard">Review</option>
                                                                           <option value="PO Standard">Approve</option>
                                                                           <option value="PO Standard">Reject</option>
                                                                        </select> <i></i> </label>
                                                                  </section>
                                                               <?php } ?>
                                                            </center>
                                                         </td>
                                                      </tr>
                                                   <?php }  ?>
                                                <?php } ?>
                                             </tbody>
                                          </table>
                                          <center>
                                             <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-cloud-upload"></i> Update
                                             </button>
                                          </center>
                                       </div>

                                    </div>
                                    <!-- end tab -->
                                 </div>

                              </div>

                           </div>

                        </div>
                     <?php } ?>
                     <?php if (($po_detail->po_active == 4)) { ?>
                        <div class="row">

                           <div class="col-sm-12">

                              <hr>

                              <div class="padding-10">

                                 <ul class="nav nav-tabs tabs-pull-right">

                                    <li class="pull-left">
                                       <span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i><b> INVOICE DOCUMENT PROGRES</b></span>
                                    </li>
                                 </ul>

                                 <div class="tab-content padding-top-10">
                                    <div class="tab-pane fade in active" id="a1aaa">

                                       <div class="row">
                                          <table class="table table-bordered">
                                             <thead>
                                                <tr>
                                                   <th>Document Type</th>
                                                   <th style="width: 16px">file</th>
                                                   <th>
                                                      <center>status</center>
                                                   </th>
                                                   <th>
                                                      <center>Action</center>
                                                   </th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php if ($_SESSION['group_id'] == '2') { ?>
                                                   <?php foreach ($get_current_invoice_vendor as $current_doc) { ?>
                                                      <tr>
                                                         <td><?php echo $current_doc->doc_name ?></td>
                                                         <td><img style="width: 16px" src="<?php echo base_url('assets/img/component/pdf.png') ?>"></td>
                                                         <td>
                                                            <center><?php echo $current_doc->icon ?></center>
                                                         </td>
                                                         <td>
                                                            <center>
                                                               <?php if ($current_doc->event_id == '5') { ?>
                                                                  Document Approved
                                                               <?php } elseif ($current_doc->event_id == '4') { ?>
                                                                  Document In Review
                                                               <?php } else { ?>
                                                                  <section class="col col-6">
                                                                     <span class="badge bg-color-darken"><input type="file" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"></span>
                                                                  </section>
                                                               <?php } ?>
                                                            </center>

                                                         </td>
                                                      </tr>
                                                   <?php } ?>
                                                <?php } else { ?>
                                                   <?php foreach ($get_current_doc as $current_doc) { ?>
                                                      <tr>
                                                         <td><?php echo $current_doc->doc_name ?></td>
                                                         <td><img style="width: 16px" src="<?php echo base_url('assets/img/component/pdf.png') ?>"></td>
                                                         <td>
                                                            <center><?php echo $current_doc->icon ?></center>
                                                         </td>
                                                         <td>
                                                            <center>
                                                               <!-- <span class="badge bg-color-darken"><a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Upload Document" style="color: white;"><i class="fa fa-cloud-upload"></i></a></span> -->
                                                               <?php if ($current_doc->event_id == '6') { ?>
                                                                  Document Approved
                                                               <?php } else { ?>
                                                                  <section class="col col-6">
                                                                     <label class="select">
                                                                        <select name="po_type">
                                                                           <option value="0" selected="" disabled="">Select Action</option>
                                                                           <option value="PO Standard">Review</option>
                                                                           <option value="PO Standard">Approve</option>
                                                                           <option value="PO Standard">Reject</option>
                                                                        </select> <i></i> </label>
                                                                  </section>
                                                               <?php } ?>
                                                            </center>
                                                         </td>
                                                      </tr>
                                                   <?php }  ?>
                                                <?php } ?>
                                             </tbody>
                                          </table>
                                          <center>
                                             <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-cloud-upload"></i> Update
                                             </button>
                                          </center>
                                       </div>

                                    </div>
                                    <!-- end tab -->
                                 </div>

                              </div>

                           </div>

                        </div>
                     <?php } ?>

                     <!-- end row -->

                  </div>

               </div>
               <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                  <div class="well well-sm">
                     <!-- Timeline Content -->
                     <div class="smart-timeline">
                        <ul class="smart-timeline-list">
                           <?php foreach ($get_history_doc as $history_doc) { ?>

                              <li>
                                 <div class="smart-timeline-icon">
                                    <!-- <i class="fa fa-file-text"></i> -->
                                    <?php echo $history_doc->history_icon ?>
                                 </div>
                                 <div class="smart-timeline-time">
                                    <small><?php echo $history_doc->create_on ?></small>
                                 </div>
                                 <div class="smart-timeline-content">
                                    <p>
                                       <strong><?php echo $history_doc->create_by . " " . $history_doc->event_name ?> [<a href="javascript:void(0);"><i><?php echo ($history_doc->event_before - $history_doc->create_on) ?> day</i></a>]</strong>
                                    </p>

                                    <!-- <div class="well well-sm display-inline">
                                                            <p><?php echo $history_doc->comment ?></p>
                                                            <?php if ($history_doc->path != '0') { ?>
                                                                                    <p>
                                                                                       <a href="<?php echo base_url('assets/doc/' . $history_doc->path) ?>" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> Download Document </a>
                                                                                    </p>
                                                            <?php } ?>
                                                         </div> -->

                                 </div>
                              </li>

                           <?php } ?>
                           <li class="text-center">
                              <!-- <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fa fa-table text-muted"></i> View in Table</a> -->
                           </li>
                        </ul>
                     </div>
                     <!-- END Timeline Content -->

                  </div>

               </div>
            </div>

         </div>


      </div>

   </div>

   <!-- end row -->

</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
               &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">PO Attachment File</h4>
         </div>
         <div class="modal-body">
            <form action="<?php echo base_url('po_detail/aksi_upload/' . $po_detail->po_no) ?>" method="POST" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="alert alert-block alert-success">
                           <a class="close" data-dismiss="alert" href="#">×</a>
                           <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Information</h4>
                           <p>
                              Pleace Attach PO Document
                           </p>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input input-file">
                           <input type="file" name="berkas" accept=".pdf" value="">
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
            <input type="submit" name="submit" value="upload" class="btn btn-success" />
         </div>
         </form>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>


<div class="modal fade" id="resson" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
               &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Document Rejecting</h4>
         </div>
         <div class="modal-body">
            <form action="<?php echo base_url('po_detail/aksi_upload/' . $po_detail->po_no) ?>" method="POST" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="alert alert-block alert-success">
                           <a class="close" data-dismiss="alert" href="#">×</a>
                           <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Information</h4>
                           <p>
                              please input your reason why you rejected this document
                           </p>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input input-file">
                           <!-- <input type="texarea" name="berkas" accept=".pdf" value=""> -->
                           <textarea rows="3" class="custom-scroll"></textarea>
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
            <input type="submit" name="submit" value="update" class="btn btn-success" />
         </div>
         </form>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>


<div class="modal fade" id="history" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
               &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">Document History (Berita Acara Kesepakatan (BAK)-PO2019014)</h4>
         </div>
         <div class="modal-body">
            <form action="<?php echo base_url('po_detail/aksi_upload/' . $po_detail->po_no) ?>" method="POST" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                     <div class="well well-sm">
                        <!-- Timeline Content -->
                        <div class="smart-timeline">
                          
                       
                           <ul class="smart-timeline-list">
                              <li>
                                 <div class="smart-timeline-icon">
                                    <!-- <img src="img/avatars/sunny.png" width="32" height="32" alt="user"> -->
                                    <i class="fa fa-file-text"></i>

                                 </div>
                                 <div class="smart-timeline-time">
                                    <small>5 Mei 2019 </small>
                                 </div>
                                 <div class="smart-timeline-content">
                                    <p>
                                       <a href="javascript:void(0);"><strong>Indah (Asset)</strong></a>
                                    </p>
                                    <p>
                                       Approved Document " <font color="green"> ok semnua sudah lengkap</font>"
                                    </p>
                                    <p>
                                       <!-- <a href="javascript:void(0);" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> View Document</a> -->
                                    </p>
                                    <!-- <img src="img/superbox/superbox-thumb-4.jpg" alt="img" width="150"> -->



                                 </div>
                              </li>

                           </ul>
                           <ul class="smart-timeline-list">
                              <li>
                                 <div class="smart-timeline-icon">
                                    <!-- <img src="img/avatars/sunny.png" width="32" height="32" alt="user"> -->
                                    <i class="fa fa-file-text"></i>

                                 </div>
                                 <div class="smart-timeline-time">
                                    <small>4 Mei 2019</small>
                                 </div>
                                 <div class="smart-timeline-content">
                                    <p>
                                       <a href="javascript:void(0);"><strong>Budi (Project Manager)</strong></a>
                                    </p>
                                    <p>
                                       Approved Document " <font color="green"> OK data sudah benar</font>"
                                    </p>
                                    <p>
                                       <!-- <a href="javascript:void(0);" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> View Document</a> -->
                                    </p>
                                    <!-- <img src="img/superbox/superbox-thumb-4.jpg" alt="img" width="150"> -->



                                 </div>
                              </li>

                           </ul>
                           <ul class="smart-timeline-list">
                              <li>
                                 <div class="smart-timeline-icon">
                                    <!-- <img src="img/avatars/sunny.png" width="32" height="32" alt="user"> -->
                                    <i class="fa fa-file-text"></i>

                                 </div>
                                 <div class="smart-timeline-time">
                                    <small>4 Mei 2019</small>
                                 </div>
                                 <div class="smart-timeline-content">
                                    <p>
                                       <a href="javascript:void(0);"><strong>Piter Novianto (Vendor)</strong></a>
                                    </p>
                                    <p>
                                       Uploaded Document
                                    </p>
                                    <p>
                                       <a href="javascript:void(0);" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> View Document</a>
                                    </p>
                                    <!-- <img src="img/superbox/superbox-thumb-4.jpg" alt="img" width="150"> -->



                                 </div>
                              </li>

                           </ul>
                           </ul>
                           <ul class="smart-timeline-list">
                              <li>
                                 <div class="smart-timeline-icon">
                                    <!-- <img src="img/avatars/sunny.png" width="32" height="32" alt="user"> -->
                                    <i class="fa fa-file-text"></i>

                                 </div>
                                 <div class="smart-timeline-time">
                                    <small>2 Mei 2019</small>
                                 </div>
                                 <div class="smart-timeline-content">
                                    <p>
                                       <a href="javascript:void(0);"><strong>Budi (Project Manager)</strong></a>
                                    </p>
                                    <p>
                                       Rejected Document " <font color="red"> Data nya salah mohon di perbaiki</font>"
                                    </p>
                                    <p>
                                       <!-- <a href="javascript:void(0);" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> View Document</a> -->
                                    </p>
                                    <!-- <img src="img/superbox/superbox-thumb-4.jpg" alt="img" width="150"> -->



                                 </div>
                              </li>

                           </ul>
                           <ul class="smart-timeline-list">
                              <li>
                                 <div class="smart-timeline-icon">
                                    <!-- <img src="img/avatars/sunny.png" width="32" height="32" alt="user"> -->
                                    <i class="fa fa-file-text"></i>

                                 </div>
                                 <div class="smart-timeline-time">
                                    <small>2 Mei 2019</small>
                                 </div>
                                 <div class="smart-timeline-content">
                                    <p>
                                       <a href="javascript:void(0);"><strong>Piter Novianto (Vendor)</strong></a>
                                    </p>
                                    <p>
                                       Uploaded Document
                                    </p>
                                    <p>
                                       <a href="javascript:void(0);" class="btn btn-xs btn-primary"><i class="fa fa-file"></i> View Document</a>
                                    </p>
                                    <!-- <img src="img/superbox/superbox-thumb-4.jpg" alt="img" width="150"> -->



                                 </div>
                              </li>

                           </ul>
                        </div>
                        <!-- END Timeline Content -->

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
            <!-- <input type="submit" name="submit" value="upload" class="btn btn-success" /> -->
         </div>
         </form>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>