<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="javascript:void(0)">Tables</a></li>
        <li class="active"><a href="">DataTables</a></li>
    </ul>
    <!-- END Navigation info -->

    <!-- Datatables -->
    <h3 class="page-header page-header-top">Heding <small>Full DataTables Integration</small></h3>

    <table id="example-datatables" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="cell-small"></th>
                <th class="cell-small text-center hidden-xs hidden-sm">#</th>
                <th><i class="fa fa-user"></i> Username</th>
                <th class="hidden-xs hidden-sm hidden-md"><i class="fa fa-envelope-o"></i> Email</th>
                <th><i class="fa fa-bolt"></i> Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $labels['0']['class'] = "label-default";
            $labels['0']['text'] = "Inactive";
            $labels['1']['class'] = "label-success";
            $labels['1']['text'] = "Approved!";
            $labels['2']['class'] = "label-danger";
            $labels['2']['text'] = "Unapproved";
            $labels['3']['class'] = "label-warning";
            $labels['3']['text'] = "Pending..";
            $labels['4']['class'] = "label-info";
            $labels['4']['text'] = "Manual Approval";
            $labels['5']['class'] = "label-inverse";
            $labels['5']['text'] = "Spam Account";
            ?>
            <?php for($i=1; $i<31; $i++) { ?>
            <tr>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
                <td class="text-center hidden-xs hidden-sm"><?php echo $i; ?></td>
                <td><a href="javascript:void(0)">username<?php echo $i; ?></a></td>
                <td class="hidden-xs hidden-sm hidden-md">user<?php echo $i; ?>@example.com</td>
                <?php $rand = rand(0, 5); ?>
                <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text'] ?></span></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- END Datatables -->

    <!-- Datatables in the grid -->
  </div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        /* Initialize Datatables */
        $('#example-datatables').dataTable({ "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ] });
        $('#example-datatables2').dataTable();
        $('#example-datatables3').dataTable();
        $('.dataTables_filter input').addClass('form-control').attr('placeholder', 'Search');
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>