<?php 
class Data {
        /**
     * database connection object
     * @var \PDO
     */
    protected $pdo;
    
    /**
     * Connect to the database
     */


    private $array=array();
    private $array2=array();

    private $calls;






    public function config(\PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    public function database()
{
  $dsn  =   "mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
  $pdo  =   "";
  try {
    $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
  }catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  $this->config($pdo);


    }

    public function getall($tableName)
    {
        $this->database();
        $stmt = $this->pdo->prepare("SELECT * FROM $tableName");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
        
    }
    public function textinput($type,$name_input,$label,$dis,$valdation=false,$fut,$row)
    {
        
          
        $this->array2[]=true;
        $class_error="";
        $id_error=""; 
        $value="";
        $msg = new Msg();
if($row != ''){

    $value = $row[0]['m_name'];

}


        if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
            switch ($fut) {
                case "time":
                    date_default_timezone_set('Africa/Nairobi');
                    $date = date('Y-m-d H:i:s');
                    $_REQUEST[$name_input]=$date;
                  break;
                default:
                  
            }
        if($valdation){
            
            if(isset($_REQUEST[$name_input]) and $_REQUEST[$name_input] != '') 
            { 
            $value  = $_REQUEST[$name_input];  
            $temp[$name_input]=$value;
    
             $this->getArray($temp);
             
             
            } 
            else{
                $class_error="is-invalid";
                $id_error="invalid-state"; 
                echo $msg->form_alert($label.' cannot be empty. Please enter a valid '.$label);
    
            }

        }
        else{
    
            if(isset($_REQUEST[$name_input]) and $_REQUEST[$name_input] != '') 
            { 
                $value  = $_REQUEST[$name_input];  
                $temp[$name_input]=$value;
        
                 $this->getArray($temp);
    
                
        
                
            }
            else{

                $value  = '';  
                $temp[$name_input]="NULL";
        
                 $this->getArray($temp);
                
            }

        }            

    }
     echo "<div class='form-group'><label for='name'>$label</label> <input type=$type name='$name_input' id='$name_input' id='$id_error' class='form-control $class_error' value='$value' placeholder='$dis'></div>";
    
    }






    public function selectinput($name_input='',$label,$tableName,$valdation,$row)
    {
        $this->array2[]=true;
        $value='';
        $value2  = 'Choose...';
        $class_error='';
        $msg = new Msg();
        if($row != ''){

            $value = $row[0][$name_input];
            $value2  = $row[0][$name_input];
                      }
        if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
            if($valdation){
      
            if(isset($_REQUEST[$name_input]) and $_REQUEST[$name_input] != '') 
            { 
                $value  = $_REQUEST[$name_input]; 
                $value2  = $_REQUEST[$name_input];
                $temp[$name_input]=$value;

                $this->getArray($temp);
                
        
                
            }
            else{
                $class_error="class='btn btn-danger dropdown-toggle me-1 show";
                $value2  = 'Choose...';
                echo $msg->form_alert($label.' cannot be empty. Please enter a valid '.$label);
            }
        }
        else{
            
            if(isset($_REQUEST[$name_input]) and $_REQUEST[$name_input] != '') 
            { 
                $value  = $_REQUEST[$name_input]; 
                $value2  = $_REQUEST[$name_input];
                $temp[$name_input]=$value;

                $this->getArray($temp);
                
        
                
            }
            else{
                $value  = ''; 
                $value2  = $_REQUEST[$name_input];
                $temp[$name_input]= "NULL";

                $this->getArray($temp);
            }

        }
        } 

    

     echo "<div class='dropdown'><label for='$name_input'>$label </label><br><select class='custom-select btn btn-primary $class_error' id='$name_input' name='$name_input' id=''><option class=dropdown-item' value='$value' selected>$value2</option>";
     
     $b	= $this->getall($tableName);
     foreach($b as $val){
        $v = $val[$name_input];
        echo "<option class=dropdown-item' value='$v' >$v</option>";
        
           }
    echo "</select></div>";
        }







    public function inputsubmit($table)
    {
        $dsn  =   "mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
        $pdo  =   "";
        try {
          $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
        }catch (PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
     $msg = new Msg();
     $db    =   new Database($pdo);

    if(count(array_filter($this->array2)) == count($this->array)){

			$insert	=	$db->insert($table,$this->array);

			if($insert){
                $msg->form_alert_suc();
              
			}else{
                
				$msg->unsuccess_alert();
			}
	}
    }

    public function inputsubmit_update($table,$editId)
    {
        $dsn  =   "mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
        $pdo  =   "";
        try {
          $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
        }catch (PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
     $msg = new Msg();
     $db    =   new Database($pdo);

    if(count(array_filter($this->array2)) == count($this->array)){

        $update	=	$db->update($table,$this->array,array('id'=>$editId));

			if($update){

                $msg->form_alert_suc();
			}else{
                
				$msg->upunsuccess_alert();
			}
	}
    }


    public function getArray($temp)
    {
        $this->array = array_merge($this->array,$temp);
        return $this->array;
    }

    
    }
  
        
                            
                                        
   


?>
