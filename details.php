<?php
if (isset($_GET['well'])) {
    
    echo json_encode(array('success' => 1));
} else {
    
    echo json_encode(array('success' => 0));
}