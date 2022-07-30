<?php 


include_once ("../config/config.php");
include_once ("../lib/phpqrcode/qrlib.php");
$main->getHeader();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div id="app">
        <?php include_once("nav.php") ?> 
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>View Product</h3>
         </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <?php if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="success"){

$msg->upsuccess_alert();
}?>
    <section class="section">
        <div class="row match-height">
            <div class="card-header">
            Product DataTable
            </div>

            <div class="card-body">
            <table class="table" id="table1">
               <thead>
                        <tr>
                           <th>#No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $userData	=   $db->getall('p_detail');
					if(count($userData)>0){
						$s	=	'';
						foreach($userData as $val){
							$s++;
					?>
					<tr>
						<td><?php echo $s;?></td>
						<td><?php echo $val['p_name'];?></td>
						<td><?php echo $val['p_price'];?> BIRR</td>
                        <td align="center">
            <a href="editMaterial.php?editId=<?php echo $val['id'];?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
            <a href="deleteMaterial.php?delId=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
          </td>
        </tr>
                        
                        
                        <?php } 
                    }else{  ?>
                        <tr><td colspan="5" align="center">No Record(s) Found!</td></tr> 
                        <?php } ?>                        
                     </tbody>
                    </table>
            
         </div>
        </div>

    </section>
    </section>
    <!-- Basic Tables end -->
</div>
<?php $main->getFooter(); ?> 
        </div>
    </div>


</body>

</html>
