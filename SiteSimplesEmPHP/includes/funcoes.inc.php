<?php
 
 function mostraPagina($pagina, \PDO $db){
	$stmt = $db->prepare("SELECT * FROM Paginas WHERE nome = :nome");
    $stmt->bindParam("nome", $pagina);
    $stmt->execute();			
	$result = $stmt->fetchAll(\PDO::FETCH_OBJ);

    return $result;
}

function busca($texto, \PDO $db) {
    
    $stmt = $db->prepare("SELECT * FROM Paginas WHERE texto LIKE :texto");
    $texto = "%{$texto}%";
    $stmt->bindParam("texto", $texto);
    $stmt->execute();
	//$result["Paginas"] = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
	
    return $result;
}
 
?>