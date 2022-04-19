<?php 
    
    session_start();
	require('../models/sProviderModel.php');
	   
    if(isset($_POST['serviceproviderno1']) && isset ($_POST['ServiceType1']) && isset ($_POST['CompanyName1']) && isset ($_POST['PhoneNo1']) && isset ($_POST['Place1']) && isset ($_POST['OtherInfo1']) )
{
	
	     $serviceproviderno = $_POST['serviceproviderno1'];
	     $ServiceType = $_POST['ServiceType1'];
	     $CompanyName = $_POST['CompanyName1'];
	     $PhoneNo = $_POST['PhoneNo1'];
	     $Place = $_POST['Place1'];
	     $OtherInfo = $_POST['OtherInfo1'];
        

	{
		$status = addservice($serviceproviderno,$ServiceType, $CompanyName, $PhoneNo, $Place,$OtherInfo);
		if($status)
		{
            
            //header('location: ../views/sProvider.php');
            echo "Submit Successful";
        }
        else
        {
           header('location: ../views/sProvider.php?msg=error');
        }


	}
}

?>