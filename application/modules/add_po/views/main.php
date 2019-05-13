<div id="content">
   <!-- row -->
   <div class="row">
      <!-- col -->
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
         <h1 class="page-title txt-color-blueDark">
            <!-- PAGE HEADER -->
            <i class="fa-fw fa fa-bar-chart-o"></i>
            Create PO Form
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


      <!-- START ROW -->

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
                  <h2>Create PO </h2>

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

                     <form id="checkout-form" class="smart-form" novalidate="novalidate" method="POST" action="<?php echo base_url('add_po/create_po') ?>">
                        <fieldset>
                           <div class="row">
                              <section class="col col-2">
                                 <img src="<?php echo base_url('assets/img/login/stp_white.png') ?>" style="width: 140px;height: 121px;">
                              </section>
                              <section class="col col-6">
                                 <b>PT Solusi Tunas Pratama</b> <br>
                                 Rukan Permata Senayan Blok C.01 - 02 RT/RW 009/007
                                 Grogol Utara Kebayoran Lama Jakarta Selatan DKI Jakarta Raya<br>
                                 12210<br>
                                 Telp : +62 21 57940688 Fax : +62 21 57950077
                              </section>
                              <section class="col col-3" style="font-size: 41px;">
                                 <b>
                                    <center>PURCHASE ORDER</center>
                                 </b>
                              </section>
                           </div>
                        </fieldset>
                        <fieldset>
                           <div class="row">
                              <section class="col col-6">
                                 <label class="input"> <i class="icon-prepend fa fa-suitcase"></i>
                                    <input type="text" name="po_no" placeholder="PO Number" required>
                                 </label>
                              </section>
                              <section class="col col-6">
                                 <label class="select">
                                    <select name="template" onChange = "setTemplate(this);">
                                       <option value="0" selected="" disabled="">Select PO</option>
                                       <?php foreach ($template as $data) { ?>
                                          <option value="<?php echo $data->template_id; ?>"><?php echo $data->template_name; ?></option>
                                       <?php } ?>
                                    </select> <i></i> </label>
                              </section>
                           </div>
                           <div class="row">
                              <section class="col col-6">
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                       <!-- <label>Select a date (single):</label> -->
                                       <div class="input-group">
                                          <span class="input-group-addon" style="background: white;"><i class="fa fa-calendar"></i></span>
                                          <input type="text" name="po_date" placeholder="  PO Date" class="form-control datepicker" data-dateformat="dd/mm/yy">
                                       </div>
                                    </div>
                              </section>
                              <section class="col col-6">
                                 <label class="select">
                                    <select name="project_id">
                                       <option value="0" selected="" disabled="">Select Project ID</option>
                                       <?php foreach ($project as $data) { ?>
                                          <option value="<?php echo $data->project_id; ?>"><?php echo $data->project_id; ?></option>
                                       <?php } ?>
                                    </select> <i></i> </label>
                              </section>
                           </div>

                           <div class="row">
                              <section class="col col-6">
                                 <label class="select">
                                    <select name="po_type">
                                       <option value="0" selected="" disabled="">PO Type</option>
                                       <option value="PO Standard">PO Standard</option>
                                    </select> <i></i> </label>
                              </section>
                              <section class="col col-6">
                                 <label class="select">
                                    <select name="cost_center">
                                       <option value="0" selected="" disabled="">Select Cost Center</option>
                                       <?php foreach ($cost_center as $data) { ?>
                                          <option value="<?php echo $data->cost_center_id; ?>"><?php echo $data->cost_center_name; ?></option>
                                       <?php } ?>
                                    </select> <i></i> </label>
                              </section>
                           </div>
                           <div class="row">
                              <section class="col col-6">
                                 <label class="input"> <i class="icon-prepend fa fa-slack"></i>
                                    <input type="text" name="bpid" placeholder="BPID">
                                 </label>
                              </section>
                              <section class="col col-6">
                                 <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="po_creator" placeholder="PO Creator" value="<?php echo $_SESSION['username'] ?>" readonly>
                                 </label>
                              </section>
                           </div>
                        </fieldset>
                        <fieldset>
                           <div class="row">
                           <section class="col col-6">
                                 <label class="select">
                                    <select name="vendor" onChange = "setTemplate(this);">
                                       <option value="0" selected="" disabled="">Select Vendor</option>
                                       <?php foreach ($vendor as $data) { ?>
                                          <option value="<?php echo $data->vendor_id; ?>"><?php echo $data->vendor_name; ?></option>
                                       <?php } ?>
                                    </select> <i></i> </label>
                              </section>
                              <section class="col col-6">
                                 <label class="textarea"> <i class="icon-prepend fa fa-building"></i>
                                    <textarea rows="4" class="custom-scroll" readonly>Invoice To :
Rukan Permata Senayan Blok C.01 - 02 RT/RW 009/007
Grogol Utara Kebayoran Lama Jakarta Selatan DKI Jakarta Raya
12210
Phone : +62 21 57940688 Fax : +62 21 57950077
NPWP : 02.493.271.7-054.000</textarea>
                              </section>
                           </div>
                        </fieldset>
                        <fieldset>
                           <div class="row">
                              <section class="col col-4">
                                 <label class="select">
                                    <select name="country">
                                       <option value="0" selected="" disabled="">Select PO Item</option>


                                    </select> <i></i> </label>
                              </section>

                           </div>
                           <div class="row">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th class="text-center">No</th>
                                       <th>ITEM ID</th>
                                       <th>ITEM DESCRIPTION</th>
                                       <th>QTY</th>
                                       <th>UNIT</th>
                                       <th>DELEVERY DATE</th>
                                       <th>PRICE</th>
                                       <th>AMOUNT</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="text-center"><strong>1</strong></td>
                                       <td>300000000227</a></td>
                                       <td>SNI Colo MAC Area 4</td>
                                       <td><input type="number" style="width:50px" min="1"></td>
                                       <td>AU</td>
                                       <td><input type="text" name="mydate" style="width:100px" placeholder="PO Date" class="datepicker" data-dateformat="dd/mm/yy">
                                       </td>
                                       <!-- 06.03.2019 -->
                                       <td><input type="number" style="width:100px" min="1"></td>
                                       <td class="text-right"><input type="number" style="width:100px" min="1" readonly></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </fieldset>
                        <fieldset>
                           <div class="row">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th class="text-center"></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td class="text-center"><strong></strong></td>
                                       <td>Total Before Tax</a></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <!-- 06.03.2019 -->
                                       <td></td>
                                       <td class="text-right">1.300.000</td>
                                    </tr>
                                    <tr>
                                       <td class="text-center"><strong></strong></td>
                                       <td>VAT 10%</a></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <!-- 06.03.2019 -->
                                       <td></td>
                                       <td class="text-right">130.000</td>
                                    </tr>
                                    <tr>
                                       <td class="text-center"><strong></strong></td>
                                       <td>Total</a></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <!-- 06.03.2019 -->
                                       <td></td>
                                       <td class="text-right">1.430.000</td>
                                    </tr>
                                 </tbody>
                              </table>

                           </div>
                           <section>
                              <label class="textarea">
                                 <textarea rows="3" name="info" placeholder="Amount in words :"></textarea>
                              </label>
                           </section>
                        </fieldset>
                        <fieldset>
                           Approval 
                        </fieldset>
                        <footer>
                           <button type="submit" class="btn btn-primary">
                              Create PO
                           </button>
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

      <!-- END ROW -->

   </section>

   <!-- end widget grid -->
</div>