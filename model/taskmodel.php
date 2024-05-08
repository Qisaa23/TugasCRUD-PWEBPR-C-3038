<?php
require 'config/database.php';

class TaskModel {
    static function read() {
        global $conn;
        $query = "SELECT * FROM tbtask";
        $result = mysqli_query($conn, $query);
        $data = array();
        if ($result->num_rows > 0) {
            while($a = $result->fetch_array()) {
                $data[] = $a;
            }
        }
        return $data;
        
    }

    static function create($task, $collaboration, $duedate, $status, $taskimage, $conn) {
        if ($taskimage['name'] != "") {
            $allowed_extensions = array('png', 'jpg', 'jpeg');
            $extension = strtolower(pathinfo($taskimage['name'], PATHINFO_EXTENSION));
            $file_tmp = $taskimage['tmp_name'];
            $number = rand(1, 999);
            $new_image_name = $number.'-'.$taskimage['name'];
    
            if (in_array($extension, $allowed_extensions)) {
                $destination = 'D:/XAMPP/htdocs/TugasCRUD-PWEBPR-C-3038/img/' . $new_image_name;
    
                if (move_uploaded_file($file_tmp, $destination)) {
                    $query = "INSERT INTO tbtask (task, collaboration, duedate, status, image) VALUES (?, ?, ?, ?, ?)";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("sssss", $task, $collaboration, $duedate, $status, $new_image_name);
                    $result = $stmt->execute();
                    $stmt->close();
    
                    if (!$result) {
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    echo "Gagal memindahkan file.";
                    echo "Error: " . $_FILES["taskimage"]["error"];
                    return false;
                }
            } else {
                echo "<script>alert('Ekstensi gambar hanya bisa digunakan jpg dan png');window.location='http://localhost/TUGASCRUD/php/insertpage.php';</script>";
                exit();
            }
        } else {
            echo "File gambar tidak ada yang diunggah.";
            return false;
        }
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
            return false; 
        }
    }

    static function update($id, $task, $collaboration, $duedate, $status, $taskimage) {
        global $conn;
        if ($taskimage !== null && $taskimage['name'] != "") {
            $allowed_extensions = array('png', 'jpg', 'jpeg');
            $extension = strtolower(pathinfo($taskimage['name'], PATHINFO_EXTENSION));
            $file_tmp = $taskimage['tmp_name'];
            $number = rand(1, 999);
            $new_image_name = $number . '-' . $taskimage['name'];
            if (in_array($extension, $allowed_extensions)) {
                $destination = 'D:/XAMPP/htdocs/TugasCRUD-PWEBPR-C-3038/img/' . $new_image_name;
                if (move_uploaded_file($file_tmp, $destination)) {
                    $stmt = $conn->prepare("UPDATE tbtask SET task=?, collaboration=?, duedate=?, Status=?, image=? WHERE id=?");
                    $stmt->bind_param("sssssi", $task, $collaboration, $duedate, $status, $new_image_name, $id);
                    $stmt->execute();
                    $result = $stmt->affected_rows > 0 ? true : false;
                    $stmt->close();
                    return $result;
                } else {
                    echo "Gagal memindahkan file.";
                    echo "Error: " . $_FILES["taskimage"]["error"];
                    return false;
                }
            } else {
                echo "<script>alert('Ekstensi gambar hanya bisa digunakan jpg dan png');window.location='http://localhost/TUGASCRUD/php/insertpage.php';</script>";
                exit();
            }
        } else {
            $stmt = $conn->prepare("UPDATE tbtask SET task=?, collaboration=?, duedate=?, Status=? WHERE id=?");
            $stmt->bind_param("ssssi", $task, $collaboration, $duedate, $status, $id);
            $stmt->execute();
            $result = $stmt->affected_rows > 0 ? true : false;
            $stmt->close();
            return $result;
        }
    }
    
    static function delete($id) {
        global $conn;
        $query = "DELETE FROM tbtask WHERE id=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'i', $id);
        $success = mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);
        return $success; 
    }
}
?>
