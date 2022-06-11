<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $registros = [];

  $data = $_POST;
  
  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "create") {

      $dataRegistro = $data["dataRegistro"];
      $debito = $data["debito"];
      $valorDebito = $data["valorDebito"];
      $credito = $data["credito"];
      $valorCredito = $data["valorCredito"];
      $historico = $data["historico"];
      
      $query = "INSERT INTO registros (dataRegistro, debito, valorDebito, credito, valorCredito, historico) VALUES (:dataRegistro, :debito, :valorDebito, :credito, :valorCredito, :historico)";

      $stmt = $conn->prepare($query);
      
      $stmt->bindParam(":dataRegistro", $dataRegistro);
      $stmt->bindParam(":debito", $debito);
      $stmt->bindParam(":valorDebito", $valorDebito);
      $stmt->bindParam(":credito", $credito);
      $stmt->bindParam(":valorCredito", $valorCredito);
      $stmt->bindParam(":historico", $historico);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Transação cadastrada com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
        exit;
      }
        // PERGUNTAR PARA O PRISCO
    } else if($data["type"] === "edit") {

      $dataRegistro = $data["dataRegistro"];
      $debito = $data["debito"];
      $valorDebito = $data["valorDebito"];
      $credito = $data["credito"];
      $valorCredito = $data["valorCredito"];
      $historico = $data["historico"];
      $id = $data["id"];

      $query = "UPDATE registros 
                SET dataRegistro = :dataRegistro, debito = :debito, valorDebito = :valorDebito, 
                credito = :credito, valorCredito = :valorCredito, historico = :historico 
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":dataRegistro", $dataRegistro);
      $stmt->bindParam(":debito", $debito);
      $stmt->bindParam(":valorDebito", $valorDebito);
      $stmt->bindParam(":credito", $credito);
      $stmt->bindParam(":valorCredito", $valorCredito);
      $stmt->bindParam(":historico", $historico);
      $stmt->bindParam(":id", $id);

      try {

        $stmt->execute();
        $_SESSION["msg"] = "Movimentação atualizada com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM registros WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
      try {

        $stmt->execute();
        $_SESSION["msg"] = "Movimentação removida com sucesso!";
    
      } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
      }

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      $query = "SELECT * FROM registros WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $registros = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $registros = [];

      $query = "SELECT * FROM registros";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $registros = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;