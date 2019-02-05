<?php 
    flexible_function();
    function flexible_function(){
        $function = 'view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }

        $function();
    }

    function view(){
        echo "View function";
    }

    function add(){
        echo "Add function";
    }

    function update(){
        echo "Update function";
    }

    function delete(){
        echo "Delete function";
    }
?>