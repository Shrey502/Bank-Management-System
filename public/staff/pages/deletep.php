<?php 
  include './../../../database/connection.php';
require_once('../../../private/initialize.php');
include(SHARED_PATH . '/staff_header.php'); 

$id = $_GET['id'];

if(!isset($id)) {
  redirect_to(url_for('/staff/pages/index.php'));
}

$page_title = 'Delete page'; 
?>

<div id="content">
  
  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page delete">
    <h1>Delete page</h1>
    <p>Are you sure to delete this page? </p>



    <div id="operations">
        <form action="<?php echo url_for('/staff/pages/deletequery.php'); ?>" method="POST">
          <input type="hidden" name="id" value="<?php echo $id ?>"/>
        <input type="submit" name="commit" value="Delete Page" />
      </form>
      </div>
  </div>

</div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>
