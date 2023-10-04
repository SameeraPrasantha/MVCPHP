<?php
class DataHandler {
    private $nid;
    private $name;
    private $gender;
    private $group1;
    private $bdate;
    private $conn;

    public function __construct($conn) {
        $this->nid = '';
        $this->name = '';
        $this->gender = '';
        $this->group1 = '';
        $this->bdate = '';
        $this->conn = $conn;
    }

    public function setData($nid,$name, $gender, $group1, $bdate) {
        $this->nid = $nid;
        $this->name = $name;
        $this->gender = $gender;
        $this->group1 = $group1;
        $this->bdate = $bdate;
    }

    public function saveData() {
        $checkQuery = "SELECT id FROM user_data WHERE id = ?";
        $checkStmt = $this->conn->prepare($checkQuery);
        $checkStmt->bind_param("i", $this->nid);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();


            if ($checkResult->num_rows === 0) {
                $stmt = $this->conn->prepare("INSERT INTO user_data (id, name, gender, blood_group, birthdate) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $this->nid, $this->name, $this->gender, $this->group1, $this->bdate);
            } else {
                $stmt = $this->conn->prepare("UPDATE user_data SET name=?, gender=?, blood_group=?, birthdate=? WHERE id=?");
                $stmt->bind_param("ssssi", $this->name, $this->gender, $this->group1, $this->bdate, $this->nid);
            }



        // Execute the statement
        if ($stmt->execute()) {
            if ($checkResult->num_rows === 0) {
                return "Data inserted successfully.";

            } else {
                return "Data updated successfully.";
            }
        } else {
            return "Error: " . $stmt->error;
        }
    }


}



