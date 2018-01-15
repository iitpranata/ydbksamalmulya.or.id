<div class="container-fluid">
	<a class="btn bg-blue" href="<?php echo base_url('index.php/Admin/Visi/ubah_visi')?>"><i class="material-icons">edit</i> UBAH VISI</a>
	<hr>
  <div class="panel panel-default">
    <div class="panel-body">
      <?php foreach($visi as $v){?>
        <?php echo $v->visi;?>
      <?php } ?>
    </div>
  </div>
</div>  	