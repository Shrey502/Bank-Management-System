<?php require_once('../../private/initialize.php');

 $page_title = 'Staff Menu' ;
 include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<div id="main-menu">
  <h2 class="text-left">Main Menu</h2>
   <ul>
     <li><a href="<?php echo  url_for('/staff/subjects/index.php');?>">Subjects</a>
</li>
     <li><a href="<?php echo  url_for('/staff/pages/index.php');?>">pages</a>
</li>
  </ul>
  </div>

</div>  

<?php include(SHARED_PATH .'/staff_footer.php');?>
