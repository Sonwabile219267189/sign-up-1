<!DOCTYPE html>
    <head>
        <title>Businesses</title>
        <link rel="stylesheet" href="style.css" media="screen" />
       <meta name="viewport" content="width=1100">
    </head>



<body>
    <div class ="banner"> </div>
     
<h1>A list of all businesses</h1>

        <?php 

        $db = mysqli_connect('localhost','root','','testdatabase');

        if(!$db){
            die("Connection Failed: " . mysql_connect_errno());
        }


        $sqlbusinessName;  
        $sqlprodOrServ; 
        $sqlpricing;  
        $sqlempFirstName; 
        $sqlempLastName; 
        $sqlemails; 


        $id = 0;

        $sqlVendor = "SELECT * FROM vendor;" ;
        $results = mysqli_query($db, $sqlVendor);

        while($row = $results->fetch_assoc()){
            $sqlbusinessName = $row["businessName"] ;
            $sqlprodOrServ = $row["productOrServiceOffered"];
            $sqlpricing = $row["price"];
            $sqlempFirstName = $row["firstName"]; 
            $sqlempLastName = $row["lastName"]; 
            $sqlemails = $row["emailAddress"];

            
            echo "Business Name: " . $sqlbusinessName . 
            "<br>Product / Service: " . $sqlprodOrServ . 
            "<br>Pricing: R" . $sqlpricing .
            "<br> Name:" . $sqlempFirstName . " " . $sqlempLastName . 
            "<br>Email Address: " . $sqlemails . "<br><br>";
        }

        ?>

</body>
<html>