<?php 
class Msg{

    function success_alert() {
        echo "<div class='alert alert-success'><i class='fa fa-exclamation-triangle'></i> <strong>Record added successfully</strong></div>";
    }
    function upsuccess_alert() {
        echo "<div class='alert alert-success'><i class='fa fa-exclamation-triangle'></i> <strong>Record Updated successfully</strong></div>";
    }
    function unsuccess_alert() {
        echo "<div class='alert alert-danger'><i class='fa fa-exclamation-triangle'></i> Record not Updated <strong>Please try again!</strong></div>";
    }
    function upunsuccess_alert() {
        echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i> Data already exists <strong>Please try again!</strong></div>";
    }
    function any_alert($msg) {
        echo "<div class='alert alert-'><i class='fa fa-exclamation-triangle'></i> <strong>$msg</strong></div>";
    }
    function form_alert($msg) {
        echo "<div class='form-group'><div style='color:red'><i class='fa fa-exclamation-triangle'></i> <strong>$msg</strong></div></div>";

    }
    function form_alert_suc() {
        echo '<script>window.location="addMaterial.php?msg=success"</script>';

    }
    function input_alert($name) {
        $name['class'] = "is-invalid";
        $name['id'] = "invalid-state";
        
        return $name;
    }
    public function textinput($name='',$label,$dis)
    {
        $value='';
        if(isset($_REQUEST[$name]) and $_REQUEST[$name] != '') 
        { $value  = $_REQUEST[$name]; }

     echo "<div class='form-group'><label for='name'>$label</label><input type='text' name='$name' id='$name' id=' ?>' class='form-control ' value='$value' placeholder='$dis'></div>";
         }
   
}

?>
