<?php
require_once "model/taskmodel.php";
require_once "function/function.php";
require_once "config/database.php";

class TaskController{
  
  public function read(){
    $data = TaskModel::read();
    loadView('dashboard', $data);
  }
  public function create(){
    global $url;
    global $conn;
    $data = TaskModel::create($_POST["task"], $_POST["collaboration"], $_POST["duedate"], $_POST["status"], $_FILES["taskimage"], $conn);
    header("Location:".$url."/dashboard");
  }
  public function getTaskById($id){
    $data = TaskModel::getTaskById($id);
    return $data;
  }
  public function update($id){
    global $url;
    if(isset($_FILES["taskimage"])) {
        $taskimage = $_FILES["taskimage"];
    } else {
        $taskimage = null;
    }
    $data = TaskModel::update($_POST["id"], $_POST["task"], $_POST["collaboration"], $_POST["duedate"], $_POST["status"], $taskimage);
    header("Location:".$url."/dashboard");
  }
  public function delete($id){
    global $url;
    $data = TaskModel::delete($id);
    header("Location:".$url."/dashboard");
  }
  public function insertpage(){
    loadView('insertpage');
  }
  public function updatepage($id){
    if(isset($_FILES["taskimage"])) {
        $taskimage = $_FILES["taskimage"];
    } else {
        $taskimage = null;
  }
    $data = TaskModel::getTaskById($id);
    loadView('updatepage', $data);
  }
  public function detailpage(){
    loadView('detailpage');
  }
  public function login(){
    loadView('login');
  }
  public function register(){
    loadView('register');
  }
}