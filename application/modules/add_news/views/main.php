<li><a href="#">Home</a></li>
<li class="active">News</li>
<li class="active">Add News</li>
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
                    <i class="fa-fw fa fa-plus"></i>
                    News
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

                    <form action="<?php echo base_url('add_news/add') ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Fill the News</strong> form</h3>
                                <ul class="panel-controls">
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>
                            </div>

                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">News Title</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-edit"></span></span>
                                                    <input type="text" name="name" class="form-control" placeholder="Input promo name" />
                                                </div>

                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Messages</label>
                                            <div class="col-md-9 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                    <!-- <input type="text" name="highlight" class="form-control" placeholder="Input the highlight" /> -->
                                                    <!-- <span class="input-group-addon"><span class="fa fa-paragraph"></span></span> -->
                                                    <textarea class="form-control" name="highlight" rows="5"></textarea>                                                
                                                </div>
                                                <!-- <span class="help-block">Password field sample</span> -->
                                            </div>
                                        </div>
                                        <br>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Attachment</label>
                                            <div class="col-md-9">
                                                <input type="file" class="fileinput btn-primary" name="my_file" id="filename" title="Browse file" />
                                                <span class="help-block">Choosing Attachment</span>
                                            </div>
                                        </div>

                                    </div>
                                    

                                </div>

                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <!-- PAGE CONTENT WRAPPER -->
    </div>