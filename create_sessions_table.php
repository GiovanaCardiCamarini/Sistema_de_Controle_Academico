<?php
try {

     $databasePath = 'var/www/html/Sistema-de-Controle-Academico/database.sqlite';
     $pdo = new PDO('sqlite:' . $databasePath);

     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $createTableSQL = "CREATE TABLE IF NOT EXISTS sessions (
                        id TEXT PRIMARY KEY,
                        payload TEXT,
                        last_activity INTEGER);";

     $pdo->exec($createTableSQL);
     echo "Tabela 'sessions' criada com sucesso!";
     } catch (PDOException $e) {
     echo "Erro ao criar a tabela: " . $e->getMessage();
     }
?>
