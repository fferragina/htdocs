<?php
try {
    $handler = new PDO('mysql:host=localhost;dbname=efbcfd8_db', 'efbcfd8_dbuser', 'efbcfd8_dbuser');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

class PhotoArchiv {
    public $id, $PhotoID, $Titel, $Model,
            $entry;

    public function __construct() {
        $this->entry = "{$this->PhotoID} is: {$this->Titel}";
    }
}

$query = $handler->query('SELECT * from photoarchive LIMIT 25');
$query->setFetchMode(PDO::FETCH_CLASS, 'PhotoArchiv');
if($query->rowCount()){
while($r = $query->fetch()) {
    echo $r->entry, '<br>';
}
} else {
    echo 'No results';
}
?>