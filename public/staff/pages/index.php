<?php
require_once('../../../private/initialize.php'); 
include(SHARED_PATH . '/staff_header.php');  
include './../../../database/connection.php';

$page_title = 'pages';

$sql = "SELECT * FROM `pages`";

$query = mysqli_query($conn, $sql) or die(`Query error`);
 
?>

<div id="content">   

    <div class="subjects listing">
        <h1>Pages</h1>
        <div class="actions">
        <a class="action" href="<?php echo url_for('/staff/pages/new.php');?>">Create New Page</a>
     </div>

    	<table class="list">
        <tr>
            <th style="text-align: center;">Position</th>    
            <th style="text-align: center;">Visible</th>
            <th style="text-align: center;">Name</th>
            <th colspan="3" style="text-align: center;">Action</th>
  	     </tr>

        <?php 
          if (mysqli_num_rows($query) > 0) {
            while ($data = mysqli_fetch_assoc($query)) { 
        ?>
        <tr>
          <td style="text-align: center;"><?php echo $data['Position'] ?></td>
        <td style="text-align: center;"><?php echo $data['Visible'] == 1 ?   "true"  :  'false' ?></td>
        <td style="text-align: center;"><?php echo $data['Name'] ?></td>
        <td class="text-center"> <a class="action" href=" ">View</a></td>  
        <td class="text-center"><a class="action" href='../pages/edit.php/?id=<?php echo $data['ID'] ?>'>Edit</a></td>
        <td class="text-center"><a class="action" href='../pages/deletep.php/?id=<?php echo $data['ID'] ?>'>Delete</a></td>
      </tr>

         <?php ;
         }
        } 
        ?>


  	</table>
  </div>
</div>  

<?php include(SHARED_PATH .'/staff_footer.php');?>