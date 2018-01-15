<!doctype html>
<html lang="id">
<head>
<?php 
    $this->load->view($meta);
    $this->load->view($css_mdl);
    if($this->uri->segment(2) == ""){
        $this->load->view($css_owl);
    }elseif($this->uri->segment(2) == "hubungi"){
        
    }else{
        
    }
    
?>
</head>