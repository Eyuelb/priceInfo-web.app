<?php
class Main{


    public function getHeader()
    {
         
    echo "<head>";  
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<link rel='stylesheet' href='../assets/css/main/app.css'>";
    echo "<link rel='stylesheet' href='../assets/css/main/app-dark.css'>";
    echo "<link rel='shortcut icon' href='../assets/images/logo/favicon.svg' type='image/x-icon'>";
    echo "<link rel='shortcut icon' href='../assets/images/logo/favicon.png' type='image/png'>";
    echo "<link rel='stylesheet' href='../assets/css/shared/iconly.css'>";
    echo "<link rel='stylesheet' href='../assets/css/pages/fontawesome.css'>";
    echo "<link rel='stylesheet' href='../assets/css/pages/datatables.css'>";
    echo "</head>";
    }
    public function getFooter()
    {
         
    echo "<footer style='position: fixed;left: 0;bottom: 0;width: 100%;'>";
    echo "<div class='footer clearfix mb-0 text-muted'><div class='float-end'><p>Powerd By <span class='text-danger'><i class='bi bi-heart'></i></span> by <a href=''>Allora Grops</a></p></div></div>";
    echo "<script src='../assets/js/admin.js'></script>";
    echo "<script src='../assets/js/app.js'></script>";
    echo "<script src='../assets/js/extensions/datatables.js'></script>";
    echo "</footer>";
   
    }
    public function getHeaderIndex()
    {
         
    echo "<head>";  
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<link rel='stylesheet' href='./assets/css/main/app.css'>";
    echo "<link rel='stylesheet' href='./assets/css/main/app-dark.css'>";
    echo "<link rel='shortcut icon' href='./assets/images/logo/favicon.svg' type='image/x-icon'>";
    echo "<link rel='shortcut icon' href='./assets/images/logo/favicon.png' type='image/png'>";
    echo "<link rel='stylesheet' href='./assets/css/shared/iconly.css'>";
    echo "<link rel='stylesheet' href='./assets/css/pages/fontawesome.css'>";
    echo "<link rel='stylesheet' href='./assets/css/pages/datatables.css'>";
    echo "</head>";
    }
    public function getFooterIndex()
    {
         
    echo "<footer style='position: fixed;left: 0;bottom: 0;width: 100%;'>";
    echo "<div class='footer clearfix mb-0 text-muted'><div class='float-end'><p>Powerd By <span class='text-danger'><i class='bi bi-heart'></i></span> by <a href=''>Allora Grops</a></p></div></div>";
    echo "<script src='./assets/js/admin.js'></script>";
    echo "<script src='./assets/js/app.js'></script>";
    echo "<script src='./assets/js/extensions/datatables.js'></script>";
    echo "</footer>";
   
    }


}

?>