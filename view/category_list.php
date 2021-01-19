<?php 
	require 'backendheader.php';
?>
	<div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Category </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <a href="<?php echo $GLOBALS['view_path'] ?>category_new" class="btn btn-outline-primary">
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
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php 
                            		$i=1;
                            		foreach($categories as $category){
                            		$id = $category['id'];
                            		$name = $category['name'];
                            		$logo = $GLOBALS['view_path'].$category['logo'];


                            	?>
                                <tr>
                                    <td> <?php echo $i++; ?> </td>
                                    <td>
                                        <img src="<?php echo $logo ?>" class="img-fluid mx-auto d-block" style="width: 150px; height: 100px;"> 
                                        <?php echo $name; ?> 
                                    </td>
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