<?php
require 'database.php';

class task{
    static function read(){
        global $conn;
        $query = "SELECT * FROM tbtask";
        $result = mysqli_query($conn, $query);
        $data = array();
        if ($result->num_rows > 0) {
          while($a = $result->fetch_array()) {
            $data[]=$a;
          }
        }
        return $data;
      }

    static function create($task, $collaboration, $duedate, $status)
    {
        global $conn;
        $query = "INSERT INTO tbtask (task, collaboration, duedate, status) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $task, $collaboration, $duedate, $status);
        $stmt->execute();
        $result = $stmt->affected_rows > 0;
        $stmt->close();
        return $result;
    }

      
    static function getTaskById($id) {
      global $conn;
      $stmt = $conn->prepare("SELECT * FROM tbtask WHERE id = ?");
      $stmt->bind_param("i", $id);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
          $taskData = $result->fetch_assoc();
          $stmt->close();
          return $taskData;
      } else {
          return false; // Jika data tidak ditemukan
      }
  }

  // Metode update
  static function update($id, $task, $collaboration, $duedate, $status){
      global $conn;
      $stmt = $conn->prepare("UPDATE tbtask SET task=?, collaboration=?, duedate=?, Status=? WHERE id=?");
      $stmt->bind_param("ssssi", $task, $collaboration, $duedate, $status, $id);
      $stmt->execute();
      $result = $stmt->affected_rows > 0 ? true : false;
      $stmt->close();
      return $result;
  }

  static function delete($id){
    global $conn;
    $query = "DELETE FROM tbtask WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);

    // Bind nilai id ke dalam pernyataan
    mysqli_stmt_bind_param($stmt, 'i', $id);
    
    $success = mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
        
    return $success; 
}
}