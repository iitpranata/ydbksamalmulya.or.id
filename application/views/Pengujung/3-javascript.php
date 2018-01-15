<?php
    if($this->uri->segment(2) == ""){
        $this->load->view($jquery);
    }elseif($this->uri->segment(2) == "hubungi"){
        
    }else{
        
    }
    $this->load->view($mdl);
    if($this->uri->segment(2) == ""){
        $this->load->view($owl);
    }elseif($this->uri->segment(2) == "hubungi"){
        $this->load->view($googlemap);
    }else{
        
    }
?>
</body>
</html>