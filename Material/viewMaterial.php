<?php 


include_once ("../config/config.php");
include_once ("../lib/phpqrcode/qrlib.php");
$main->getHeader();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div id="app">
        <?php include("nav.php")  ?> 
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
                        <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Material DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
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
                            <th>Status</th>
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
                        <td>
                        <?php if($val['p_status'] > 0){?> <span class="badge bg-success">Available</span><?php } ?>
                        <?php if($val['p_status'] == 0){?> <span class="badge bg-danger">Runout</span><?php } ?>
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
    <!-- Basic Tables end -->
</div>
<?php $main->getFooter(); ?> 
        </div>
    </div>


</body>

</html>
