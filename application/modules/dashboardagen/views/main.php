<li><a href="#">Home</a></li>
<li class="active">Dashboard Agen Lion Parcel</li>
</ul>
<div class="page-content-wrap">

  <!-- START counting -->
  <div class="row">

    <div class="col-md-3">

      <!-- START WIDGET MESSAGES -->
      <div style="overflow: hidden; padding-top: 0; min-height: auto;" class="widget widget-default widget-item-icon">
        <div class="widget-item-left" style="background-color: #00ca8a;margin-bottom: -8px;margin-left: 0px;width: 80px;">
          <span class="fa fa-check" style="color:#ffff"></span>
        </div>
        <div class="widget-data">
          <div class="widget-int num-count" style="color:#6c7074">92,710</div>
          <div class="widget-title" style="color:#00ca8a">Completed</div>
          <div class="widget-subtitle">collected data
            <a href="http://103.77.78.169/dbs/invoice" data-toggle="tooltip" data-placement="top" title="" target="_blank" data-original-title="View all Invoice"><span class="label label-primary">View</span></a>
          </div>
          <!-- <div class="widget-subtitle">In your mailbox</div> -->
        </div>

      </div>
      <!-- END WIDGET MESSAGES -->

    </div>
    <div class="col-md-3">

      <!-- START WIDGET REGISTRED -->
      <div style="overflow: hidden; padding-top: 0; min-height: auto;" class="widget widget-default widget-item-icon">
        <div class="widget-item-left" style="background-color: #FEB162;margin-bottom: -8px;margin-left: 0px;width: 80px;">
          <span class="fa fa-truck" style="color:#FFFF"></span>
        </div>
        <div class="widget-data">
          <div class="widget-int num-count" style="color:#6c7074">1,410</div>
          <div class="widget-title" style="color:#FEB162">Shipping Process</div>
          <div class="widget-subtitle">collected data
            <a href="http://103.77.78.169/dbs/invoice" data-toggle="tooltip" data-placement="top" title="" target="_blank" data-original-title="View all Invoice"><span class="label label-primary">View</span></a>
          </div>
          <!-- <div class="widget-subtitle">In your mailbox</div> -->
        </div>

      </div>
      <!-- END WIDGET REGISTRED -->

    </div>
    <div class="col-md-3">

      <!-- START WIDGET CLOCK -->
      <div style="overflow: hidden; padding-top: 0; min-height: auto;" class="widget widget-default widget-item-icon">
        <div class="widget-item-left" style="background-color: #ed3237;margin-bottom: -8px;margin-left: 0px;width: 80px;" style="background-color: #4DC6F4;margin-bottom: -8px;margin-left: 0px;width: 80px;">
          <span class="fa fa-times" style="color:#ffff"></span>
        </div>
        <div class="widget-data">
          <div class="widget-int num-count" style="color:#6c7074">216</div>
          <div class="widget-title" style="color:red">Package Canceled</div>
          <div class="widget-subtitle">collected data
            <a href="http://103.77.78.169/dbs/invoice" data-toggle="tooltip" data-placement="top" title="" target="_blank" data-original-title="View all Invoice"><span class="label label-primary">View</span></a>
          </div>
          <!-- <div class="widget-subtitle">In your mailbox</div> -->
        </div>

      </div>
      <!-- END WIDGET CLOCK -->

    </div>

    <div class="col-md-3">

      <!-- START WIDGET CLOCK -->
      <div style="overflow: hidden; padding-top: 0; min-height: auto;" class="widget widget-default widget-item-icon">
        <div class="widget-item-left" style="background-color: #4DC6F4;margin-bottom: -8px;margin-left: 0px;width: 80px;">
          <span class="fa fa-cube" style="color:#ffff"></span>
        </div>
        <div class="widget-data">
          <div class="widget-int num-count" style="color:#6c7074">48</div>
          <div class="widget-title" style="color:#4dc6f4">Pickup List</div>
          <div class="widget-subtitle">collected data
            <a href="http://103.77.78.169/dbs/invoice" data-toggle="tooltip" data-placement="top" title="" target="_blank" data-original-title="View all Invoice"><span class="label label-primary">View</span></a>
          </div>
          <!-- <div class="widget-subtitle">In your mailbox</div> -->
        </div>

      </div>
      <!-- END WIDGET CLOCK -->

    </div>
  </div>
  <!-- END counting -->


    <!-- news -->
    <div class="row">
    <div class="col-md-8">

      <!-- START USERS ACTIVITY BLOCK -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Announcements</h3>
          <ul class="panel-controls">
            <li><a href="#" class="control-danger"><span class="fa fa-pencil"></span></a></li>
          </ul>
        </div>
        <div class="panel-body scroll" style="height: 230px;">
        <?php foreach ($news as $data) { ?>
          <h6><?php echo $data->news_name ?></h6>
          <p>
            <?php echo $data->more ?> <a href=""> More </a>
            <span class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $data->news_date ?></span>
          </p>
          <hr>
          <?php } ?>
        </div>
      </div>
      <!-- END USERS ACTIVITY BLOCK -->

    </div>
    <div class="col-md-4">

      <!-- START VISITORS BLOCK -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title-box">
            <h3>Monthly Transactions</h3>
            <!-- <span>Sales activity by period you selected</span> -->
          </div>


        </div>
        <div class="panel-body">
          <div class="row stacked">
            <div class="col-md-12">
              <div class="progress-list">
                <div class="pull-left"><strong>Complete Delivered</strong></div>
                <div class="pull-right">75%</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div>
              </div>
              <div class="progress-list">
                <div class="pull-left"><strong>Shipping Process</strong></div>
                <div class="pull-right">450/500</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                </div>
              </div>
              <div class="progress-list">
                <div class="pull-left"><strong class="text-danger">Package Canceled</strong></div>
                <div class="pull-right">25/500</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">5%</div>
                </div>
              </div>
              <div class="progress-list">
                <div class="pull-left"><strong class="text-warning">Progress Today</strong>
                </div>
                <div class="pull-right">75/150</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                </div>
              </div>
              <!-- <p><span class="fa fa-warning"></span> Data update in end of each hour. You can
                update it manual by pressign update button</p> -->
            </div>
          </div>
        </div>
      </div>
      <!-- END VISITORS BLOCK -->

    </div>
  </div>
  <!-- end News -->
  <div class="row">
    <div class="col-md-8">

      <!-- START USERS ACTIVITY BLOCK -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title-box">
            <h3>Complete Transactions</h3>
          </div>
          <ul class="panel-controls" style="margin-top: 2px;">
            <!-- <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span>
                    Remove</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
        <div class="panel-body padding-0">
        <div id="container2" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
        </div>
      </div>
      <!-- END USERS ACTIVITY BLOCK -->

    </div>
    <div class="col-md-4">

      <!-- START SALES BLOCK -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title-box">
            <h3>Monthly Transactions</h3>
            <!-- <span>Sales activity by period you selected</span> -->
          </div>


        </div>
        <div class="panel-body">
          <div class="row stacked">
            <div class="col-md-12">
              <div class="progress-list">
                <div class="pull-left"><strong>Complete Delivered</strong></div>
                <div class="pull-right">75%</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div>
              </div>
              <div class="progress-list">
                <div class="pull-left"><strong>Shipping Process</strong></div>
                <div class="pull-right">450/500</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                </div>
              </div>
              <div class="progress-list">
                <div class="pull-left"><strong class="text-danger">Package Canceled</strong></div>
                <div class="pull-right">25/500</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">5%</div>
                </div>
              </div>
              <div class="progress-list">
                <div class="pull-left"><strong class="text-warning">Progress Today</strong>
                </div>
                <div class="pull-right">75/150</div>
                <div class="progress progress-small progress-striped active">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                </div>
              </div>
              <!-- <p><span class="fa fa-warning"></span> Data update in end of each hour. You can
                update it manual by pressign update button</p> -->
            </div>
          </div>
        </div>
      </div>
      <!-- END SALES BLOCK -->

    </div>
  </div>

  <div class="row">

    <div class="col-md-8">

      <!-- START SALES & EVENTS BLOCK -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title-box">
            <h3>Monthly Revenue</h3>
            <!-- <span>Event "Purchase Button"</span> -->
          </div>
          <ul class="panel-controls" style="margin-top: 2px;">
            <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span>
                    Remove</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="panel-body padding-0">
          <div class="chart-holder" id="container" style="height: 235px;"></div>
        </div>
      </div>
      <!-- END SALES & EVENTS BLOCK -->

    </div>

    <div class="col-md-4">

      <!-- START VISITORS BLOCK -->
      <div class="widget widget-primary">
        <div class="widget-title">Revenue This Month</div>
        <div class="widget-int">Rp <span data-toggle="counter" data-to="1,623,000">1,623,000</span></div>
        <div>
          <div class="col-md-4">Accont Name :</div>
          <div class="col-md-8"> Dodi Supriatna</div>
        </div>
        <div>
          <div class="col-md-4">Accont No :</div>
          <div class="col-md-8"> 63293712</div>
        </div>
        <div>
          <div class="col-md-4">Bank : </div>
          <div class="col-md-4"><img src="https://2.bp.blogspot.com/-Cu51v4LCySc/VkcpON7QGvI/AAAAAAAAAP4/ls5c85sKLsY/s400/Logo%2BBank%2BBCA_PNG.png" style="height: 20px;width: 50px;"> </div>
        </div>

        


      </div>

      <div class="widget widget-primary" style="background: black;">
        <div class="widget-title">Revenue This Year</div>
        <div class="widget-int">Rp <span data-toggle="counter" data-to="1,623,000">8,423,000</span></div>
      </div>
      <!-- END VISITORS BLOCK -->

    </div>
    <!-- <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
        <ul class="list-inline item-details">
          <li><a href="http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/">Admin
              templates</a></li>
          <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
      </div>
    </div> -->

  </div>

  <!-- START DASHBOARD CHART -->
  <div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
  <div class="block-full-width">

  </div>
  <!-- END DASHBOARD CHART -->
  

</div>