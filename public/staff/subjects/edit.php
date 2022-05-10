<?php

  require_once('../../../private/initialize.php');
  include './../../../database/connection.php';
  include(SHARED_PATH . '/staff_header.php'); 

  
  $page_title = 'Edit Subject';
  if(!isset($_GET['id'])){
    redirect_to(url_for('staff/subjects/index.php'));
  }

  $id = $_GET['id'];
?>

<div id="content">

  <a class="back-link" href="../index.php">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <?php 
      $sql= "SELECT * FROM `subject` WHERE ID = {$id}";     
      $query  = mysqli_query($conn, $sql);
      if (mysqli_num_rows($query) > 0) {
        while ($data  = mysqli_fetch_assoc($query)) {
    ?>

    <form action="<?php echo url_for('/staff/subjects/updatequery.php'); ?>" method="POST">
    <input type="hidden" name="id" value="<?php echo $id ?>" />
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo $data['Name'] ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>    
          <select name="position">
            <option value="<?php echo $data['Position'] ?>">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
         <?php echo  $data['Visible'] == 1 ?  '<input type="checkbox" checked name="visible" value="0" />'  : '<input type="checkbox" name="visible" value="1" />' ?>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>


    <?php 
              }
            }
    ?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
