<div class="container-fluid">
	<div class="panel panel-default">
		<div class="panel-heading"><center>PEMBINA</center></div>
		<div class="panel-body">
			
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading"><center>PENGURUS</center></div>
		<div class="panel-body">
			<div class="container-fluid">
				<?php foreach($inti->result() as $i){?>
				<div class="col-md-4">
					<div class="card">
						<center><b><?php echo $i->jabatan?></b></center>
						<center><img style="width:100%; height:160px;" src="<?php echo base_url('assets/img/foto-pengurus/'.$i->foto)?>"></center>
						<br>
						<center><?php echo $i->nama?></center>
						<hr>
						<center><a class="btn bg-pink" data-toggle="modal" data-target="#edit" data-id="<?php echo $i->id_pengurus?>" data-nama="<?php echo $i->nama?>" data-foto="<?php echo $i->foto?>"><i class="material-icons">edit</i> SUNTING</a></center>
						<br>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading"><center>SEKSI-SEKSI</center></div>
		<div class="panel-body">
			<a class="btn bg-blue" data-toggle="modal" data-target="#tambah-seksi"><i class="material-icons">add</i> TAMBAH SEKSI</a>
			<br>
			<?php foreach($seksi->result() as $s){?>
			<b><?php echo $s->jabatan?></b><hr>
			<?php } ?>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading"><center>PENGAWAS</center></div>
		<div class="panel-body">
			
		</div>
	</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Sunting Pengurus</h4>
            </div>
            <div class="modal-body">
            	<form method="post" action="" id="form" enctype="multipart/form-data">
	               	<div class="form-group">
						<div class="form-line">
							<label for="nama">Nama</label>
							<input type="text" id="nama" name="nama" value="" class="form-control" required>
						</div><br>
						<img  src="" class="img-responsive" style="width:100%;" src="" id="foto">
						<br>
						<center>
							<label><small>Masukan URL Foto jika ingin mengubah foto lama</small></label>
							<input name="userfile" type="file" id="preview_gambar">
						</center>
					</div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SELESAI</button>
                </form>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambah-seksi" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Penambahan Seksi</h4>
            </div>
            <div class="modal-body">
            	<form method="post" action="<?php echo base_url('index.php/Admin/Pengurus/tambah_seksi')?>" enctype="multipart/form-data">
	               	<div class="form-group">
						<div class="form-line">
							<label for="nama">Nama</label>
							<input type="text" id="nama" name="nama" class="form-control" required>
						</div><br>
						<div class="form-line">
							<label for="seksi">Seksi</label>
							<input type="text" id="seksi" name="jabatan" style="text-transform:uppercase;" class="form-control" required>
						</div><i style="color:red; display:none;" id="warning">Jabatan yang anda masukkan tidak diizinkan</i><br>
						<img  src="" class="img-responsive" style="width:100%;" src="" id="foto-seksi">
						<br>
						<label><small>Masukan URL Foto</small></label>
						<input name="userfile" type="file" id="preview_gambar_seksi">
						
					</div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect" id="go">SELESAI</button>
                </form>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		$('#edit').on('show.bs.modal');

		$('#edit').on('show.bs.modal', function (event){
			var div = $(event.relatedTarget)
			var id = div.data('id')
			var nama = div.data('nama')
			var foto = div.data('foto')
			var modal = $(this)

			modal.find('#nama').attr("value",nama)
			modal.find('#foto').attr("src","<?php echo base_url('assets/img/foto-pengurus/')?>"+foto)
			modal.find('#form').attr("action","<?php echo base_url('index.php/Admin/Pengurus/goUbah_pengurus/')?>"+id)
		});

		$('#seksi').keyup(function(){
			seksi = $(this).val();
			if(seksi.toUpperCase()=="KETUA" || seksi.toUpperCase()=="SEKRETARIS I" || seksi.toUpperCase()=="SEKRETARIS II" || seksi.toUpperCase()=="BENDAHARA" || seksi.toUpperCase()=="WAKIL KETUA"){
				$('#warning').css('display','');
				$('#go').prop('disabled',true)
			}else{
				$('#warning').css('display','none');
				$('#go').prop('disabled',false)
			}
		});
	});	

	function bacaGambar(input) {
		if (input.files && input.files[0]) {
		    var reader = new FileReader();
		 
		    reader.onload = function (e) {
		        $('#foto').attr('src', e.target.result);
		        $('#foto-seksi').attr('src', e.target.result);
		    }
		 
		    reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function(){
	   bacaGambar(this);
	});
	$("#preview_gambar_seksi").change(function(){
	   bacaGambar(this);
	});

</script>