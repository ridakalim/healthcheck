<?php include("db.php");

class data extends db {


    private $mealname;
    private $mealdetail;
    private $mealprice;
    private $mealquantity;

 
    function __construct() {
        // echo " constructor ";
        echo "</br></br>";
    }




    function adminLogin($t1, $t2) {

        $q="SELECT * FROM admin where email='$t1' and Pass='$t2'";
        $recordSet=$this->connection->query($q);
        $result=$recordSet->rowCount();

        if ($result > 0) {

            foreach($recordSet->fetchAll() as $row) {
                $logid=$row['id'];
                //echo "login succesful";
                header("location: admin_service_dashboard.php?logid=$logid");
            }
        }

        else {
            header("location: loginpanel.php?msg=Invalid data");
        }

    }



    
}