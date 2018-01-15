<?php foreach($visi as $v){?>
<form method="post" action="<?php echo base_url('index.php/Admin/Visi/goUbah_visi');?>">
	<div class="container-fluid">
		<div class="col-md-12">
			<button type="submit" class="btn btn-success waves-effect right">
		        <i class="material-icons">check</i> SELESAI
		    </button>
		</div>
	</div>
	<textarea name="visi" id="texteditor"><?php echo $v->visi?></textarea>
</form>
<?php }?>

