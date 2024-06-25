<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    include '../database/database.php';

    try {
        // Esegui la query per ottenere i dati degli utenti
        $data = [
            'email' => $_REQUEST["text"],
        ];
        $sql = 'SELECT * FROM users WHERE mail = :email';
        $stmt = $db->prepare($sql);
        $stmt->execute($data);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Restituisci i dati degli utenti come JSON
        echo json_encode($users);
    } catch (PDOException $e) {
        echo "Errore durante l'accesso al database: " . $e->getMessage();
    }
} else {
    echo "Non sei autorizzato ad accedere alla pagina";
}
<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    include '../database/database.php';

    try {
        // Esegui la query per ottenere i dati degli utenti
        $data = [
            'email' => $_REQUEST["text"],
        ];
        $sql = 'SELECT * FROM users WHERE mail = :email';
        $stmt = $db->prepare($sql);
        $stmt->execute($data);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Restituisci i dati degli utenti come JSON
        echo json_encode($users);
    } catch (PDOException $e) {
        echo "Errore durante l'accesso al database: " . $e->getMessage();
    }
} else {
    echo "Non sei autorizzato ad accedere alla pagina";
}
