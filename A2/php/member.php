<?php

    function update_elevatorNetwork(string $tablename, string $column, $node_ID, $id, $new_status): void{
        try{
            $db = new PDO(
                'mysql:host=127.0.0.1;dbname=elevator_network',     // Database name either 'elevator' or 'joinExample'
                'root',                                 // username
                ''                                // Password
            );
    
            // Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        } catch(PDOException $e){
            echo "Connection to DB Failed: " . $e->getMessage();
        }
    
        // Use transactions 
        $db->beginTransaction();      
        try {
            // Change elevatorNetwork 
            $query = "UPDATE $tablename SET $column = :stat WHERE $node_ID = :id"; // This allows different tables to be selected but risks an SQL injection at the $tablename variable
                                                                                // A solution to this problem is to use a switch statment: https://stackoverflow.com/questions/182287/can-php-pdo-statements-accept-the-table-or-column-name-as-parameter
            $statement = $db->prepare($query); 
            $statement->bindValue('stat', $new_status); 
            $statement->bindValue('id', $id);
            $statement->execute();
            
            // Return number of rows that were updated - If no rows were affected by the update statement then throw error
            $count = $statement->rowCount();
            if($count == 0) {
                throw new Exception('Error - Database unchanged !!!');
            }
            echo "<br/><br/>Success - Database updated<br/><br/>";
            $db->commit(); 
             
        } catch (Exception $e) {
            echo $e->getMessage();
            $db->rollBack(); 
        }
    }

    function changeFloor($floor){
        update_elevatorNetwork("elevatorcan", "elevatorPresent", "elevatorPresent", 1, 0);
        update_elevatorNetwork("elevatorcan", "elevatorPresent", "floorNumber", $floor, 1);
    }

    function insertNewRequest($floor){
        try{
            $db = new PDO(
                'mysql:host=127.0.0.1;dbname=elevator_network',     // Database name either 'elevator' or 'joinExample'
                'root',                                 // username
                ''                                // Password
            );
    
            // Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        } catch(PDOException $e){
            echo "Connection to DB Failed: " . $e->getMessage();
        }

         // Use transactions 
         $db->beginTransaction();      
         try {
             //Add a new floor request to elevator_network internet table
             $query = "INSERT INTO `elevatorinternet`(`userID`, `request`) VALUES (1,:floor)"; 
             $statement = $db->prepare($query); 
             $params = [
                'floor' => $floor
            ];
            $statement->execute($params);

             echo "<br/><br/>Success - Database updated<br/><br/>";
             $db->commit(); 
              
         } catch (Exception $e) {
             echo $e->getMessage();
             $db->rollBack(); 
         }
    }

    function showRequestTable(){
        try{
            $db = new PDO(
                'mysql:host=127.0.0.1;dbname=elevator_network',     // Database name either 'elevator' or 'joinExample'
                'root',                                 // username
                ''                                // Password
            );
    
            // Boilerplate - Return arrays with keys that are the field names in the database - Call the PDO method setAttribute()
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        } catch(PDOException $e){
            echo "Connection to DB Failed: " . $e->getMessage();
        }

        $rows = $db->query("SELECT * FROM elevatorinternet WHERE 1");
        echo "<table>";
        echo "<tr>";
        echo "<td> USER ID </td>";
        echo "<td> REQUEST </td>";
        echo "<td> REQUEST TIME </td>";
        echo "<td> REQUEST STATUS </td>";
        echo "</tr>";
        foreach($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row['userID'] . "</td>";
            echo "<td>" . $row['request'] . "</td>";
            echo "<td>" . $row['requestTime'] . "</td>";
            echo "<td>" . $row['requestStatus'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    session_start();
    //changeFloor(1);
    //insertNewRequest(2);
    //showrequestTable();

    if(isset($_POST['submitInsert'])){
        echo "Data Inserted"
    }
    
    if(isset($_POST['submitChange'])){
        echo "Data Changed"
    }
    
?>

<h1>Hello <?php echo  $_SESSION["username"]; ?></h1>
<h2>Successful Login</h3>

<h3>Insert a New Request</h3>
<form method="post">
    <label for="ffloor">Floor:</label><br>
    <input type="text" id="ffloor" name="ffloor"><br>
    <input type="submit" value="submitInsert">
</form>
<h3>Change an Data </h3>
<form method="post">
    <label for="ftable">Table:</label><br>
    <input type="text" id="ftable" name="ftable"><br>
    <label for="fcolumn">Column:</label><br>
    <input type="text" id="fcolumn" name="fcolumn"><br>
    <label for="fid">ID:</label><br>
    <input type="text" id="fid" name="fid"><br>
    <label for="fvalue">Value:</label><br>
    <input type="text" id="fvalue" name="fvalue"><br>
    <input type="submit" value="submitChange">

</form>
<h3>Delete Data</h3>
<form method="post">
    <label for="ffloor">Floor:</label><br>
    <input type="text" id="ffloor" name="ffloor"><br>
    <input type="submit" value="submitDelete">
</form>