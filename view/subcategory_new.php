<?php 
	require 'backendheader.php';
?>

	<div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Subcategory Form </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <a href="<?php echo $GLOBALS['view_path'] ?>subcategory_list" class="btn btn-outline-primary">
                <i class="icofont-double-left"></i>
            </a>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form action="<?php echo $GLOBALS['view_path'] ?>subcategory_add" method="POST" enctype="multipart/form-data">
                        
                        <div class="form-group row">
                            <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name_id" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo_id" class="col-sm-2 col-form-label"> Category </label>
                            <div class="col-sm-10">
                                <select class="form-control" name="categoryid"> 
                                    <option> Choose Category </option>
                                    <?php
                                        foreach ($categories as $category) {
                                        
                                    ?>
                                        <option value="<?php echo $category['id'] ?>"> <?php echo $category['name']; ?> </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    <i class="icofont-save"></i>
                                    Save
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php 
	require 'backendfooter.php';
?>