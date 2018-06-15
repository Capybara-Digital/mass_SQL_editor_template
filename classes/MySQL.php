<?php

class MySQL
{
    private $pdo;
    public function __construct($dbSettings)
    {
        $this->pdo = new PDO('mysql:dbname='.$dbSettings['dbName'].';host='.$dbSettings['host'], $dbSettings['login'], $dbSettings['password']);
    }

	public function complexQuery($old_data, $new_data)
	{
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket` SET `OWNER_USER_ID`='$new_data' WHERE `OWNER_USER_ID`='$old_data' ");
	    $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket` SET `CREATED_USER_ID`='$new_data' WHERE `CREATED_USER_ID`='$old_data' ");
        $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket` SET `RESPONSIBLE_USER_ID`='$new_data' WHERE `RESPONSIBLE_USER_ID`='$old_data' ");
        $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket` SET `MODIFIED_USER_ID`='$new_data' WHERE `MODIFIED_USER_ID`='$old_data' ");
        $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket` SET `LAST_MESSAGE_USER_ID`='$new_data' WHERE `LAST_MESSAGE_USER_ID`='$old_data' ");
        $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket_message` SET `CURRENT_RESPONSIBLE_USER_ID`='$new_data' WHERE `CURRENT_RESPONSIBLE_USER_ID`='$old_data' ");
        $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket_message` SET `OWNER_USER_ID`='$new_data' WHERE `OWNER_USER_ID`='$old_data' ");
        $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket_message` SET `CREATED_USER_ID`='$new_data' WHERE `CREATED_USER_ID`='$old_data' ");
        $Stmt->execute();
        $Stmt = $this->pdo->prepare("UPDATE `b_ticket_message` SET `MODIFIED_USER_ID`='$new_data' WHERE `MODIFIED_USER_ID`='$old_data' ");
        $Stmt->execute();
	}
}
