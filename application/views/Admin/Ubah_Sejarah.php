<?php foreach($sejarah->result() as $s){?>
<form method="post" action="<?php echo base_url('index.php/Admin/Sejarah/goUbah_sejarah/'.$s->tahun);?>">
	<div class="container-fluid">
		<div class="col-md-12">
			<button type="submit" class="btn btn-success waves-effect right">
		        <i class="material-icons">check</i> SELESAI
		    </button>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<div class="form-line">
					<input type="number" name="tahun" class="form-control" placeholder="Tahun" value="<?php echo $s->tahun?>" required>
				</div>
			</div>
		</div>
	</div>
	<textarea name="sejarah" id="texteditor"><?php echo $s->sejarah?></textarea>
</form>
<?php }?>

