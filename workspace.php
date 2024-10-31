<?php
session_start();
$pagetitle = "workspace";
require "includes/header.php";

?>
<div id="box" style="height: 100%; width: 100vw; background-color: yellow;">
<?php
require 'includes/navbar.php';
?>
<div class="main bg-info d-flex justify-content-center align-items-center" style="height:90vh">
    <div class="box1 h-100 w-25 bg-secondary border border-light p-5">
        <div class="h1">Dashboard</div>
        <div class="row p-5">
            <div class="col-12 mb-4 h4"><a href="#tasks" class="text-dark text-decoration-none">Tasks</a></div>
            <div class="col-12 mb-4 h4"><a href="#media" class="text-dark text-decoration-none">Media</a></div>
            <div class="col-12 mb-4 h4"><a href="#comments" class="text-dark text-decoration-none">Comments</a></div>
            <div class="col-12 mb-4 h4"><a href="#projects" class="text-dark text-decoration-none">Projects</a></div>
            <div class="col-12 mb-4 h4"><a href="#users" class="text-dark text-decoration-none">Users</a></div>
            <div class="col-12 mb-4 h4"><a href="#tools" class="text-dark text-decoration-none">Tools</a></div>
        </div>
    </div>
    <div class="box2 h-100 w-75 bg-secondary border border-light" style="overflow-y: hidden;">
        <div id="tasks"></div>
        <div id="media"></div>
        <div id="comments"></div>
        <div id="projects"></div>
        <div id="users"></div>
        <div id="tools"></div>
    </div>

</div>
<?php
require "includes/footer.php";
?>