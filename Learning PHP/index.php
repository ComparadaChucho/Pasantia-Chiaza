<?php

require 'functions.php';
require 'Database.php';


$db = new Database();
$post = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

dd($post['title']);