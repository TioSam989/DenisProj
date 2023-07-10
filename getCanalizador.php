<?php
    
include("conexao.php");
    $sql = "SELECT * FROM canalizador";
    
    $result = $conn->query($sql);

    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row; // Add each row to the array
    }
    
    $jsonResult = json_encode($rows);
    echo $jsonResult;
    $conn->close();
?>