<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Dashboard ydbks.or.id</title>
        <link rel="icon" href="<?php echo base_url()?>/assets/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url()?>/assets/plugins/jquery/jquery.min.js" type="text/javascript"></script>
        <link href="<?php echo base_url()?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url()?>/assets/plugins/node-waves/waves.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/assets/plugins/animate-css/animate.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url()?>/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url()?>/assets/css/themes/all-themes.css" rel="stylesheet" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    </head>

    <body class="theme-blue">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="../../index.html"><b>ydbks.or.id</b> | Yayasan Dharma Bhakti Sosial Provinsi Bengkulu</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <aside id="leftsidebar" class="sidebar">
                <div class="menu">
                    <ul class="list">
                        <li class="header">NAVIGASI</li>
                        <li>
                            <a href="../../index.html">
                                <i class="material-icons">home</i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Admin/Sejarah')?>">
                                <i class="material-icons">history</i>
                                <span>Sejarah Yayasan</span>
                            </a>
                        </li>
                         <li>
                            <a href="<?php echo base_url('index.php/Admin/Visi')?>">
                                <i class="material-icons">accessibility</i>
                                <span>Visi</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/Admin/Pengurus')?>">
                                <i class="material-icons">supervisor_account</i>
                                <span>Pengurus</span>
                            </a>
                        </li>
                         <li>
                            <a href="<?php echo base_url('index.php/Admin/Proker')?>">
                                <i class="material-icons">work</i>
                                <span>Program Kerja</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/admin/Kriteria/m_lokasi')?>">
                                <i class="material-icons">payment</i>
                                <span>Donasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/admin/Penginapan/bobot_penginapan')?>">
                                <i class="material-icons">event</i>
                                <span>Kegiatan</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/admin/Penginapan/ranking_penginapan')?>">
                                <i class="material-icons">import_contacts</i>
                                <span>Artikel</span>
                            </a>
                        </li>
                  	</ul>
                </div>
            </aside>
        </section>

        <section class="content">
            <div class="container-fluid">
                <h3>
                  <?php echo $judul;?>
               </h3>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                        	<div class="body">
                                <?php $this->load->view($halaman);?>
                        	</div>
                        </div>   
                    </div>
                </div>
            </div>
        </section>

        <script src="<?php echo base_url()?>/assets/plugins/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/node-waves/waves.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/autosize/autosize.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/momentjs/moment.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        <script src="<?php echo base_url()?>/assets/js/admin.js"></script>
        <script src="<?php echo base_url()?>/assets/js/pages/tables/jquery-datatable.js"></script>
        <script src="<?php echo base_url()?>/assets/js/pages/forms/basic-form-elements.js"></script>
        <script src="<?php echo base_url()?>/assets/js/pages/cards/colored.js"></script>
        <script src="<?php echo base_url()?>/assets/js/pages/ui/modals.js"></script>
        <script src="<?php echo base_url()?>/assets/js/demo.js"></script>

        <script>
            $(document).ready(function() {
                $('#texteditor').summernote({
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['misc', ['undo','redo','fullscreen']],
                    ]
                });
            });
          </script>
    </body>

</html>