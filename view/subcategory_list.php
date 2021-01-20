<?php 
	require 'backendheader.php';
?>
	<div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Sub-category </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <a href="<?php echo $GLOBALS['view_path'] ?>subcategory_new" class="btn btn-outline-primary">
                <i class="icofont-plus"></i>
            </a>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=1;
                                    foreach($subcategories as $subcategory){

                                    $id = $subcategory['id'];
                                    $name = $subcategory['name'];

                                    $cid = $subcategory['cid'];
                                    $cname = $subcategory['cname'];


                                ?>
                                <tr>
                                    <td> <?php echo $i++; ?> </td>
                                    <td> <?php echo $name; ?> </td>
                                    <td> <?php echo $cname; ?> </td>
                                    <td>
                                        <a href="" class="btn btn-warning">
                                            <i class="icofont-ui-settings"></i>
                                        </a>

                                        <a href="" class="btn btn-outline-danger">
                                            <i class="icofont-close"></i>
                                        </a>  
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
	require 'backendfooter.php';
?>