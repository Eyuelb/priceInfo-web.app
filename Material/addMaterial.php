<?php 


include_once ("../config/config.php");
include_once ("../lib/phpqrcode/qrlib.php");
$main->getHeader();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div id="app">
        <?php include_once("nav.php");
         ?> 
        <div id="main">
            <div class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </div>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Material</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Material</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic card start -->
    <?php




if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="success"){

    $msg->success_alert();
}
?>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Material DataTable</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" >
                            <div class="row">
                                       <!--type,id&name,label,placeholder,required,time&other,value--> 
                                        <div class="col-md-6 col-12">
                                        <?php $d->textinput('text','p_name','Product Name','Insert Name',true,'',''); ?>
                                        </div>

                                        <div class="col-md-6 col-12">
                                        <?php $d->textinput('number','p_price','Product Price','Insert price',true,'',''); ?>
                                        </div>

                                        <div class="col-md-6 col-12">
                                        <?php $d->textinput('hidden','p_add_date','','',false,'time',''); ?>
                                        </div>
                                       
                                        <div class="col-12 d-flex justify-content-end">
                                        <?php $d->inputsubmit("p_detail");?>
                                            <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary me-1 mb-1"  >Submit</button>
                                        </div>

                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $main->getFooter(); ?> 
        </div>
    </div>


</body>

</html>
