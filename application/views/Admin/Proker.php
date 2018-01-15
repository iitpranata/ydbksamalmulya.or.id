<div class="container-fluid">
	<a class="btn bg-blue" href="<?php echo base_url('index.php/Admin/Proker/tambah_proker')?>"><i class="material-icons">add</i> TAMBAH PROGRAM KERJA</a>
	<hr>
	<div class="panel-group" id="timeline" role="tablist" aria-multiselectable="true">
		<?php $id=1; foreach($proker->result() as $p){?>
		<div class="panel panel-primary">
			<div class="panel-heading" rol="tab" id="pan_<?php echo $id?>">
				 <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#timeline" href="#timeline_<?php echo $id?>" aria-expanded="true" aria-controls="collapseOne_1">
                        <center><?php echo $p->bidang?></center>
                    </a>
                </h4>
			</div>
			<div id="timeline_<?php echo $id;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pan_<?php echo $id;?>">
                <div class="panel-body">
                      <?php echo $p->proker;?>
                      <hr>
                      <center>
                      	<a class="btn bg-green" href="<?php echo base_url('index.php/Admin/Proker/ubah_proker/'.$p->id_proker)?>"><i class="material-icons">edit</i></a>
                      	<a class="btn bg-pink" data-toggle="modal" data-target="#hapus" data-id="<?php echo $p->id_proker?>"><i class="material-icons">remove</i></a>
                      </center>                           
                </div>
            </div>
		</div>
		<?php $id++;}?>
	</div>	
</div>

<div class="modal fade" id="hapus" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Hapus Program Kerja</h4>
            </div>
            <div class="modal-body">
               
            </div>
            <div class="modal-footer">
                    <a class="btn btn-link waves-effect" href="" id="action">YA</a>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		$('#hapus').on('show.bs.modal');

		$('#hapus').on('show.bs.modal', function (event){
			var div = $(event.relatedTarget)
			var id = div.data('id')
			var modal = $(this)

			modal.find('.modal-body').html("Anda yakin akan Menghapus Program Kerja Ini ?")
			modal.find('#action').attr("href","<?php echo base_url('index.php/Admin/Proker/hapus_proker/')?>"+id)
		});

	});	
</script>