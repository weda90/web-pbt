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
$post = ""; 
$title = "";
$content = "";
$short_content = "";
$category = "";
if (isset($_GET['edit'])) {
	if (!empty($_GET['edit'])) {
		$id_post = $_GET['edit'];
		$post = $data['post']->where('id','=',$id_post)->get(); 
		$title = $post[0]['title'];
		$content = $post[0]['content'];
		$short_content = $post[0]['short_content'];
		$category = $post[0]['cat'];
		$img_featured = $post[0]['img_featured'];
	}
}

?>                 
<!-- page title -->
<div class="page-title">
 <?php if (isset($_GET['add'])) : ?>
	<h1>New Page</h1>  
	<p>Create Page</p> 
<?php elseif (isset($_GET['edit'])) : ?>
	<h1>Edit Page</h1> 
	<p>Modified Page</p>  
<?php endif; ?>                  
</div>                        
<!-- ./page title -->   
<!-- Horizontal Form -->
<div class="wrapper">
    <form id="form-input">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control form-input-text" placeholder="Title Page" value="<?php echo $title; ?>">
        </div>
        <div class="form-group">
            <label>Content</label>
            <!-- summernote plugin -->
            <div class="summernote form-summernote"><?php echo $content; ?></div>                  
            <style>
            .note-editable {
			   background-color: #fff;
			}
			</style>      
            <!-- ./summernote plugin -->
        </div>
        <?php if (isset($_GET['add'])) : ?>
        	<a href="javascript:void(0)" id="add-page" class="btn btn-primary pull-right btn-add-ajax">Save</a>
        <?php else: ?>
        	<a href="javascript:void(0)" id="edit-page" class="btn btn-primary pull-right btn-edit-ajax" data-href="<?php echo $id_post; ?>">Edit</a>
        <?php endif; ?>
        
    </form>
    
</div>
<!-- ./Horizontal Form -->
<?php else : ?>   
<!-- page title -->
<div class="page-title">
    <h1>All Page</h1>   
    <p>All Pages Created</p>                         
    <!-- <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Forms</a></li>
        <li>Form Layouts</li>
    </ul> -->
</div>                        
<!-- ./page title -->

<?php 
$pages = $data['post']->where('type','=','page')->get(); 
// var_dump($pages);
?>
<!-- datatables plugin -->
<div class="wrapper wrapper-white">
	<div class="table-responsive">
	    <table class="table table-bordered table-striped table-sortable">
	        <thead>
	            <tr>
	                <th>Title</th>
	                <th>Date</th>
	                <th>&nbsp;</th>
	            </tr>
	        </thead>                               
	        <tbody>
	        <?php foreach($pages as $key => $value) : ?>
	        	<tr>
	                <td><?php echo $value['title'] ?></td>
	                <td><?php echo $value['updated_at'] ?></td>
	                <td>
	                	<a href="?edit=<?php echo $value['id'] ?>">Edit</a>
	                	<a id="delete-page" href="javascript:void(0)" class="btn-delete-ajax" data-href="<?php echo $value['id'] ?>">Delete</a>
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
