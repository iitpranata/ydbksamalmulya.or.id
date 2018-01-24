<!doctype html>
<html lang="id">
<head>
<?php 
    $this->load->view($meta);
    $this->load->view($css_mdl);
    if($this->uri->segment(2) == ""){
        $this->load->view($css_owl);
    }elseif($this->uri->segment(2) == "tentang"){
        $this->load->view($css_timeline);
    }elseif($this->uri->segment(2) == "tentang_anak"){
        $this->load->view($css_datatables);
    }elseif($this->uri->segment(2) == "donasi"){
        $this->load->view($css_datatables);
    }elseif($this->uri->segment(2) == "hubungi"){

    }else{
        
    }
    
?>
</head>