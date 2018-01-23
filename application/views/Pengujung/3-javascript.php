<?php
    if($this->uri->segment(2) == ""){
        $this->load->view($jquery);
    }elseif($this->uri->segment(2) == "donasi"){
        $this->load->view($jquery);
    }elseif($this->uri->segment(2) == "hubungi"){
        
    }else{
        
    }
    
    $this->load->view($mdl);
    if($this->uri->segment(2) == ""){
        $this->load->view($owl);
    }elseif($this->uri->segment(2) == "donasi"){
        $this->load->view($datatables);
    }elseif($this->uri->segment(2) == "hubungi"){
        $this->load->view($googlemap);
    }else{
        
    }
?>
</body>
</html>

<!-- Inpirasi Desain Web
Gerakan Nasional Orang Tua Asuh (GNOTA)
http://www.gn-ota.or.id/ -->