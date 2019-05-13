<div id="content">
   <!-- row -->
   <div class="row">
      <!-- col -->
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
         <h1 class="page-title txt-color-blueDark">
            <!-- PAGE HEADER -->
            <i class="fa-fw fa fa-bar-chart-o"></i>
            PROJECT LIST
         </h1>
      </div>
      <!-- end col -->
      <!-- right side of the page with the sparkline graphs -->
      <!-- col -->
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
         <!-- sparks -->
         <ul id="sparks">
            <li class="sparks-info">
               <h5> Total PROJECT <span class="txt-color-blue">47,171</span></h5>
               <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                  1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
               </div>
            </li>
            <li class="sparks-info">
               <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
               <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                  110,150,300,130,400,240,220,310,220,300, 270, 210
               </div>
            </li>
            <li class="sparks-info">
               <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
               <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                  110,150,300,130,400,240,220,310,220,300, 270, 210
               </div>
            </li>
         </ul>
         <!-- end sparks -->
      </div>
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
      <div class="row">
         <!-- NEW WIDGET START -->
         <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">
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
                  <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                  <h2>Column Filters </h2>

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
                              <th class="hasinput" style="width:17%">
                                 <input type="text" class="form-control" placeholder="Project ID" />
                              </th>
                              <th class="hasinput" style="width:17%">
                                 <input type="text" class="form-control" placeholder="Project Name" />
                              </th>
                              <th class="hasinput" style="width:16%">
                                 <input type="text" class="form-control" placeholder="Filter Milestone" />
                              </th>
                              <th class="hasinput" style="width:17%">
                                 <input type="text" class="form-control" readonly />
                              </th>
                              
                              

                           </tr>
                           <tr>
                              <th data-class="expand">Project ID</th>
                              <th data-hide="phone">Project Name</th>
                              <th data-hide="phone">Milestone</th>
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