<?php require_once 'header.php';?>

<!-- page container -->
<div class="dev-page-container">
<?php require_once 'sidebar.php'; ?>

<!-- page content -->
<div class="dev-page-content">                    
    <!-- page content container -->
    <div class="container">

<?php if (isset($_GET['add']) OR isset($_GET['edit'])): ?>   
<!-- page title -->
<div class="page-title">
    <h1>Upload</h1>
    <p>Awesome gallery powered by isotope plugin</p>
    
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Pages</a></li>
        <li>Upload</li>
    </ul>
</div>                        
<!-- ./page title -->
<div class="wrapper">
  <div class="form-group-one-unit">
      <div class="row">
          <div class="col-md-5">
              <div class="form-group form-group-custom form-control-clear">
                  <label>Input File <span>Custom color</span></label>
                  <br/>                                                               
                  <input type="file" id="input-file-upload" class="file" title="Choose file" name="data_files"/>
              </div>
              <div class="form-group form-group-custom form-control-clear">
                  <label>Name <span>declaration name file</span></label>
                  <input type="text" id="input-name-file" class="form-control" placeholder="Name File"/>
              </div>
              <div class="form-group form-group-custom form-control-clear">
                  <label>Tags <span>for image empty tags</span></label>
                  <input type="text" id="input-tag-file" class="form-control" placeholder="Tags File"/>
              </div>
          </div>

          <div class="col-md-4">
              <div id="preview-file" class="form-group form-group-custom"></div>
          </div>
      </div>                         
  </div>
  <div class="row">
    <div class="col-sm-5 form-group">                                                              
        <input type="submit" id="btn-upload-file" class="btn btn-primary" value="Upload" name="file_4"/>
    </div>
  </div>

</div>

<style>
  .ajax-file-upload {
    padding: 10px;
    border: dashed 1px;
}
  #preview-file img {
    width: 100%;
  }
</style>
<?php else : ?>   
<!-- page title -->
<div class="page-title">
    <h1>Gallery</h1>
    <p>Awesome gallery powered by isotope plugin</p>
    
    <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Pages</a></li>
        <li>Gallery</li>
    </ul>
</div>                        
<!-- ./page title -->

<?php 
$files = $data['files']->get();
?>
<!-- gallery powered by isotope -->

<div class="portfolioFilter">
 <div class="btn-group" role="group">
    <a href="javascript:void(0)" data-filter="*" class="current btn btn-default">All</a>
    <?php foreach($data['files']->groupBy('tag')->get() as $key => $value) : ?>

      <?php if (!empty($value['tag'])) :?>
          <a href="javascript:void(0)" data-filter=".<?php echo $value['tag']; ?>" class="btn btn-default"><?php echo $value['tag']; ?></a>
      <?php endif; ?>

    <?php endforeach; ?>
</div> 

</div>


<div class="gallery portfolioContainer">
    
<?php foreach($files as $key => $value) : ?>     

    <div class="gallery-item col-md-3 col-sm-4 col-xs-6 <?php echo $value['tag']; ?>">
      <div class="item-img">
        <a href="<?php echo SERVER_UPLOAD . $value['link']; ?>" title="<?php echo $value['name']; ?>" data-gallery="">
          <?php if ($value['type'] == "image/jpeg" || $value['type'] == "image/png" || $value['type'] == "image/jpg") : ?>
            <img src="<?php echo SERVER_UPLOAD . $value['link']; ?>" alt="">
          <?php else: ?>
            <img src="https://placehold.it/50?text=<?php echo$value['type']; ?>" alt="">
          <?php endif; ?>
          
        </a>
      </div>
      <div class="item-info">
          <p>
            <?php 
              if (empty($value['name'])) {
                echo "noname"; 
              } else {
                echo $value['name']; 
              }
              
            ?> 
            <br> <code><?php echo $value['tag']; ?></code>
          </p>

          <input type="text" class="form-control" value="<?php echo SERVER_UPLOAD . $value['link']; ?>">
          <!-- <span><i class="glyphicon glyphicon-pencil"></i></span> -->
          <span><i class="glyphicon glyphicon-remove"></i></span>
          <a id="delete-media" href="javascript:void(0)" class="btn-delete-ajax" data-href="<?php echo $value['id'] ?>">Delete</a>
      </div>
    </div>

<?php endforeach; ?> 
<style>
  .portfolioFilter {
    padding: 20px;
  }
  .gallery-item {
    /*float: left; */
    margin-right: 5px;
  }
  .gallery-item img{
    width: 100%;
  }
  .gallery-item .item-img {
    overflow: hidden;
    height: 150px;
    margin-bottom: 10px;
  }
</style> 
</div>
<!-- ./gallery powered by isotope -->
<?php endif; ?>     

    </div>
    <!-- ./page content container -->                                       
</div>
<!-- ./page content --> 


</div>  
<!-- ./page container -->

<!-- /////////////////////////////////////////////////////////////////// -->
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
      <!-- The container for the modal slides -->
      <div class="slides"></div>
      <!-- Controls for the borderless lightbox -->
      <h3 class="title"></h3>
      <a class="prev">‹</a>
      <a class="next">›</a>
      <a class="close">×</a>
      <a class="play-pause"></a>
      <ol class="indicator"></ol>
      <!-- The modal dialog, which will be used to wrap the lightbox content -->
      <div class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" aria-hidden="true">&times;</button>
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body next"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left prev">
                <i class="fa fa-chevron-left"></i> Previous
              </button>
              <button type="button" class="btn btn-primary next">
                Next
                <i class="fa fa-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- /////////////////////////////////////////////////////////////////// -->

<style>
  .modal-body img {
    width: 100%;
  }
</style>
<?php require_once 'footer.php' ?>
