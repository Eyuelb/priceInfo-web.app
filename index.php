<?php 


include_once ("./config/config.php");

$main->getHeaderIndex();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div id="app">
    <?php include_once ("nav.php"); ?> 
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">

</div>
<?php $main->getFooterIndex(); ?> 
        </div>
    </div>
</body>

</html>
