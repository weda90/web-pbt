<?php require_once 'header.php';?>

<!-- page container -->
<div class="dev-page-container">
<?php require_once 'sidebar.php'; ?>

<!-- page content -->
<div class="dev-page-content">                    
    <!-- page content container -->
    <div class="container">
<?php if (isset($_GET['add']) OR isset($_GET['edit'])): ?>       

<?php 
$position ="";
$location = "";
$required = "";
$respons = "";
$closed = "";
if (isset($_GET['edit'])) {
    if (!empty($_GET['edit'])) {
        $id_career = $_GET['edit'];
        $career = $data['career']->where('id','=',$id_career)->get(); 
        $position = $career[0]['pos'];
        $location = $career[0]['loc'];
        $required = $career[0]['req'];
        $respons = $career[0]['res'];
        $closed = date_format( new DateTime($career[0]['closed']), 'd/m/Y' );
    }
}

?>                 
<!-- page title -->
<div class="page-title">
 <?php if (isset($_GET['add'])) : ?>
	<h1>New Page</h1>  
<?php elseif (isset($_GET['edit'])) : ?>
	<h1>Edit Page</h1>  
<?php endif; ?>                  
</div>                        
<!-- ./page title -->   

<!-- Horizontal Form -->
<div class="wrapper">
    <form id="form-input">
        <div class="form-group">
            <label>Position</label>
            <input type="text" class="form-control form-input-text" placeholder="Position" value="<?php echo $position; ?>">
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control form-input-text" placeholder="Location" value="<?php echo $location; ?>">
        </div>

        <div class="form-group">
            <label>Required</label>
            <!-- summernote plugin -->
            <div class="summernote2 form-summernote"><?php echo $required; ?></div>                  
            <style>
            .note-editable {
			   background-color: #fff;
			}
			</style>      
            <!-- ./summernote plugin -->
        </div>
        <div class="form-group">
            <label>Responsibilities</label>
            <!-- summernote plugin -->
            <div class="summernote2 form-summernote"><?php echo $respons; ?></div>                  
            <style>
            .note-editable {
			   background-color: #fff;
			}
			</style>      
            <!-- ./summernote plugin -->
        </div>  

        <div class="row">
        	<div class="col-md-3">
                <div class="form-group">
                    <label>Closed Date</label>                         
                    <input id="career-closed" type="text" class="form-control datepicker form-input-text" value="<?php echo $closed; ?>" />
                </div>                        
            </div>
        </div>
        <?php if (isset($_GET['add'])) : ?>
            <a href="javascript:void(0)" id="add-job" class="btn btn-primary pull-right btn-add-ajax">Save</a>
        <?php else: ?>
            <a href="javascript:void(0)" id="edit-job" class="btn btn-primary pull-right btn-edit-ajax" data-href="<?php echo $id_career; ?>">Edit</a>
        <?php endif; ?>
        
    </form>
    
</div>
<!-- ./Horizontal Form -->
<?php else : ?>   
<!-- page title -->
<div class="page-title">
    <h1>New Page</h1>   
    <p>Create new page</p>                         
    <!-- <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Forms</a></li>
        <li>Form Layouts</li>
    </ul> -->
</div>                        
<!-- ./page title -->

<?php 
$careers = $data['career']->get(); 
// var_dump($data['career']);
?>
<!-- datatables plugin -->
<div class="wrapper wrapper-white">
	<div class="table-responsive">
	    <table class="table table-bordered table-striped table-sortable">
	        <thead>
	            <tr>
	                <th>Position</th>
	                <th>Location</th>
	                <th>Required</th>
	                <th>Responsibilities</th>
	                <th>Closed</th>
	                <th>&nbsp;</th>
	            </tr>
	        </thead>                               
	        <tbody>
	        <?php foreach($careers as $key => $value) : ?>
	        	<tr>
	                <td><?php echo $value['pos'] ?></td>
	                <td><?php echo $value['loc'] ?></td>
	                <td><?php echo $value['req'] ?></td>
	                <td><?php echo $value['res'] ?></td>
	                <td><?php echo $value['closed'] ?></td>
	                <td>
	                	<a href="?edit=<?php echo $value['id'] ?>">Edit</a>
	                	<a id="delete-job" href="javascript:void(0)" class="btn-delete-ajax" data-href="<?php echo $value['id'] ?>">Delete</a>
	                </td>
	            </tr>
	    	<?php endforeach; ?>        
	        </tbody>
	    </table>
	</div>	
</div>                        
<!-- ./datatables plugin --> 
<?php endif; ?>                       
    </div>
    <!-- ./page content container -->                                       
</div>
<!-- ./page content --> 


</div>  
<!-- ./page container -->
<?php require_once 'footer.php' ?>
