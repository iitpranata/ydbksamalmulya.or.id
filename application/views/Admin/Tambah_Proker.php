<form method="post" action="<?php echo base_url('index.php/Admin/Proker/goTambah_proker');?>">
	<div class="container-fluid">
		<div class="col-md-12">
			<button type="submit" class="btn btn-success waves-effect right">
		        <i class="material-icons">check</i> SELESAI
		    </button>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<div class="form-line">
					<input type="text" name="bidang" class="form-control" placeholder="Bidang" required>
				</div>
			</div>
		</div>
	</div>
	<textarea name="proker" id="texteditor"></textarea>
</form>


