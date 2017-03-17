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

$username = "";
$password = "";
$group = ""; 
$email = "";
$perm = ["admin","user"];

if (isset($_GET['edit'])) {
    if (!empty($_GET['edit'])) {
        $id_user = $_GET['edit'];
        $user = $data['user']->where('id','=',$id_user)->get(); 
        $username = $user[0]['username'];
        $password = $user[0]['password'];
        $group = $user[0]['user_group']; 
        $email = $user[0]['email'];
        $auth = $user[0]['auth'];
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
            <label>Username</label>
            <input type="text" class="form-control form-input-text" placeholder="Username" value="<?php echo $username; ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control form-input-text" placeholder="Password" value="<?php echo $password; ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control form-input-text" placeholder="Your Mail" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label>Permission</label>
            <select name="" id="" class="form-control selectpicker form-input-select">

                <?php foreach( $perm as $key => $value) : ?>     
                <?php if($value == $auth) : ?>
                    <option value="<?php echo $key; ?>" selected><?php echo $value; ?></option>
                <?php else : ?> 
                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                <?php endif; ?>
                   
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Group <span>Just for user Permission</span></label>
            <input type="text" class="form-control form-input-text" placeholder="Group" value="<?php echo $group; ?>">
        </div>
         <?php if (isset($_GET['add'])) : ?>
            <a href="javascript:void(0)" id="add-user" class="btn btn-primary pull-right btn-add-ajax">Save</a>
        <?php else: ?>
            <a href="javascript:void(0)" id="edit-user" class="btn btn-primary pull-right btn-edit-ajax" data-href="<?php echo $id_user; ?>">Edit</a>
        <?php endif; ?>
   </form>
</div>


<!-- ./Horizontal Form -->
<?php else : ?>   

<!-- page title -->
<div class="page-title">
    <h1>All Users</h1>   
    <p>All Users Created</p>                         

</div>                        
<!-- ./page title -->

<?php 
$users = $data['user']->get(); 
// var_dump($pages);
?>
<!-- datatables plugin -->
<div class="wrapper wrapper-white">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sortable">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Group</th>
                    <th>Permission</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>                               
            <tbody>
            <?php foreach($users as $key => $value) : ?>
                <tr>
                    <td><?php echo $value['username'] ?></td>
                    <td><?php echo $value['password'] ?></td>
                    <td>
                    <?php if(empty($value['user_group'])): ?>
                        -
                    <?php else: ?>
                        <?php echo $value['user_group']; ?>
                    <?php endif; ?>
                    </td>
                    <td>
                    <?php if($value['auth'] == 0): ?>
                        admin
                    <?php else: ?>
                        user
                    <?php endif; ?>
                    </td>
                    <td>
                        <a href="?edit=<?php echo $value['id'] ?>">Edit</a>
                        <a id="del-user" href="javascript:void(0)" class="btn-delete-ajax" data-href="<?php echo $value['id'] ?>">Delete</a>
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
