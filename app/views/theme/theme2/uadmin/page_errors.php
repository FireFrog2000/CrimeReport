<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li class="active"><a href="">Errors</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Error Tabs -->
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <ul id="error-tabs" class="nav nav-pills" data-toggle="tabs">
                <li><a href="#error-tabs-400">400</a></li>
                <li><a href="#error-tabs-401">401</a></li>
                <li><a href="#error-tabs-403">403</a></li>
                <li class="active"><a href="#error-tabs-404">404</a></li>
                <li><a href="#error-tabs-500">500</a></li>
                <li><a href="#error-tabs-503">503</a></li>
            </ul>
        </div>
    </div>
    <!-- END Error Tabs -->

    <!-- Tabs content -->
    <div class="tab-content tab-content-default">
        <!-- 400 Error -->
        <div id="error-tabs-400" class="tab-pane row">
            <div class="col-md-offset-2 col-md-8">
                <div class=" error-container">
                    <div class="error-code"><i class="fa fa-exclamation-triangle"></i> 400</div>
                    <div class="error-text">Ooops.. <strong>Bad Request</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" id="example-error-search1" name="example-error-search1" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 400 Error -->

        <!-- 401 Error -->
        <div id="error-tabs-401" class="tab-pane row">
            <div class="col-md-offset-2 col-md-8">
                <div class=" error-container">
                    <div class="error-code"><i class="fa fa-exclamation-triangle"></i> 401</div>
                    <div class="error-text">Ooops.. <strong>Unauthorized</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" id="example-error-search2" name="example-error-search2" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 401 Error -->

        <!-- 403 Error -->
        <div id="error-tabs-403" class="tab-pane row">
            <div class="col-md-offset-2 col-md-8">
                <div class=" error-container">
                    <div class="error-code"><i class="fa fa-exclamation-triangle"></i> 403</div>
                    <div class="error-text">Ooops.. <strong>Forbidden</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" id="example-error-search3" name="example-error-search3" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 403 Error -->

        <!-- 404 Error -->
        <div id="error-tabs-404" class="tab-pane active row">
            <div class="col-md-offset-2 col-md-8">
                <div class=" error-container">
                    <div class="error-code"><i class="fa fa-exclamation-triangle"></i> 404</div>
                    <div class="error-text">Ooops.. <strong>Page not found</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" id="example-error-search4" name="example-error-search4" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 404 Error -->

        <!-- 500 Error -->
        <div id="error-tabs-500" class="tab-pane row">
            <div class="col-md-offset-2 col-md-8">
                <div class=" error-container">
                    <div class="error-code"><i class="fa fa-exclamation-triangle"></i> 500</div>
                    <div class="error-text">Ooops.. <strong>Internal Server Error</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" id="example-error-search5" name="example-error-search5" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 500 Error -->

        <!-- 503 Error -->
        <div id="error-tabs-503" class="tab-pane row">
            <div class="col-md-offset-2 col-md-8">
                <div class=" error-container">
                    <div class="error-code"><i class="fa fa-exclamation-triangle"></i> 503</div>
                    <div class="error-text">Ooops.. <strong>Service Unavailable</strong>!</div>
                    <form class="error-search" onsubmit="return false;">
                        <div class="input-group">
                            <input type="text" id="example-error-search6" name="example-error-search6" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END 503 Error -->
    </div>
    <!-- END Tabs content -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>