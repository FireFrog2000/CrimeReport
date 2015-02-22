<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Pages</a></li>
        <li class="active"><a href="">Profile</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Profile -->
    <h3 class="page-header page-header-top"><i class="fa fa-user"></i> John Doe <small>Web developer</small></h3>

    <div class="row">
        <!-- First Column | Image and menu -->
        <div class="col-md-3">
            <div class="text-center">
                <img src="img/placeholders/image_light_360x270.png" class="img-responsive" alt="image">
            </div>
            <div class="list-group">
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-coffee"></i> Portfolio</a>
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-paperclip"></i> Projects</a>
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-picture-o"></i> Gallery</a>
            </div>
            <div class="list-group">
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-share"></i> Follow</a>
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-envelope-o"></i> Send Message</a>
            </div>
            <div class="list-group">
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-facebook"></i> Facebook</a>
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-twitter"></i> Twitter</a>
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-linkedin"></i> LinkedIn</a>
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-pinterest"></i> Pinterest</a>
                <a href="javascript:void(0)" class="list-group-item"><i class="fa fa-github"></i> Github</a>
            </div>
        </div>
        <!-- END First Column | Image and menu -->

        <!-- Second Column | Main content -->
        <div class="col-md-6">
            <h4>Experience</h4>
            <ul class="fa-ul push">
                <li><i class="fa fa-li fa-arrow-right"></i> <strong>Company #1</strong>,<br><em>This is the description of the company..</em><br><a href="javascript:void(0)">examplecompany.com</a></li>
                <li><i class="fa fa-li fa-arrow-right"></i> <strong>Company #2</strong>,<br><em>This is the description of the company..</em><br><a href="javascript:void(0)">examplecompany.com</a></li>
                <li><i class="fa fa-li fa-arrow-right"></i> <strong>Company #3</strong>,<br><em>This is the description of the company..</em><br><a href="javascript:void(0)">examplecompany.com</a></li>
            </ul>
            <h4>About</h4>
            <p class="push">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
            <h4><i class="fa fa-book"></i> Address</h4>
            <address>
                <strong>Company</strong><br>
                Street 000<br>
                City, CA 00000<br>
                <abbr title="Phone">P:</abbr> (000) 000-00000
            </address>
            <h4>Favorite Quote</h4>
            <blockquote>
                <p>This is an awesome quote!</p>
                <footer>Someone famous <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
        <!-- END Second Column | Main content -->

        <!-- Third Column | Right Sidebar -->
        <div class="col-md-3">
            <h5 class="page-header-sub">Actions</h5>
            <div class="btn-group push">
                <button class="btn btn-success" data-toggle="tooltip" title="Ask for a quote"><i class="fa fa-plus"></i> Hire now!</button>
                <button class="btn btn-info" data-toggle="tooltip" title="Send a message"><i class="fa fa-envelope"></i></button>
            </div>
            <div class="btn-group push">
                <button class="btn btn-danger" data-toggle="tooltip" title="Add to favorites"><i class="fa fa-star"></i></button>
                <button class="btn btn-warning" data-toggle="tooltip" title="Follow"><i class="fa fa-share"></i></button>
                <button class="btn btn-primary" data-toggle="tooltip" title="Share Profile"><i class="fa fa-share-square-o"></i></button>
            </div>
            <h5 class="page-header-sub"><i class="fa fa-bolt"></i> Current Status</h5>
            <div class="alert alert-success"><i class="fa fa-check-circle"></i> Available for hire</div>
            <h5 class="page-header-sub"><i class="fa fa-certificate"></i> Skills</h5>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="cell-small"><span class="label label-inverse">HTML</span></td>
                        <td>
                            <div class="progress progress-mini">
                                <div class="progress-bar progress-bar-success" style="width: 85%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="label label-inverse">CSS</span></td>
                        <td>
                            <div class="progress progress-mini">
                                <div class="progress-bar progress-bar-info" style="width: 70%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="label label-inverse">Javascript</span></td>
                        <td>
                            <div class="progress progress-mini">
                                <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="label label-inverse">PHP</span></td>
                        <td>
                            <div class="progress progress-mini">
                                <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="label label-inverse">Photoshop</span></td>
                        <td>
                            <div class="progress progress-mini">
                                <div class="progress-bar progress-bar-info" style="width: 60%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="label label-inverse">Node.js</span></td>
                        <td>
                            <div class="progress progress-mini">
                                <div class="progress-bar progress-bar-warning" style="width: 45%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="label label-inverse">Java</span></td>
                        <td>
                            <div class="progress progress-mini">
                                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h5 class="page-header-sub"><i class="fa fa-flag"></i> Featured Projects</h5>
            <ul class="fa-ul">
                <li><i class="fa fa-li fa-angle-right"></i> <strong>Project #1</strong>, <a href="javascript:void(0)">exampleproject1.com</a></li>
                <li><i class="fa fa-li fa-angle-right"></i> <strong>Project #2</strong>, <a href="javascript:void(0)">exampleproject2.com</a></li>
                <li><i class="fa fa-li fa-angle-right"></i> <strong>Project #3</strong>, <a href="javascript:void(0)">exampleproject3.com</a></li>
                <li><i class="fa fa-li fa-angle-right"></i> <strong>Project #4</strong>, <a href="javascript:void(0)">exampleproject4.com</a></li>
                <li><i class="fa fa-li fa-angle-right"></i> <strong>Project #5</strong>, <a href="javascript:void(0)">exampleproject5.com</a></li>
                <li><i class="fa fa-li fa-angle-right"></i> <strong>Project #6</strong>, <a href="javascript:void(0)">exampleproject6.com</a></li>
            </ul>
        </div>
        <!-- END Third Column | Right Sidebar -->
    </div>
    <!-- END Profile -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>
<?php include 'inc/bottom.php'; // Close body and html tags ?>