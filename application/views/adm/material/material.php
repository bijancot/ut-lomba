<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Materi</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-warning mb-2">Course | <?= $course->NAMA_COURSE?></h6>
                <div>
                    <a href="<?= site_url('admin/material/add/'.$course->ID_COURSE)?>" class="btn btn-sm btn-warning shadow-sm">
                        <i class="fas fa-plus fa-sm text-white-50"></i>
                        Tambah
                    </a>
                    <?php
                        if($course->ISMATREADY_COURSE == "0"){
                            echo '
                                <button data-toggle="modal" data-target="#mdlSelesai" class="btn btn-sm btn-info shadow-sm">
                                    <i class="fas fa-check fa-sm text-white-50"></i>
                                    Validasi
                                </button>
                                ';
                        }else{
                            echo '
                                <button class="btn btn-sm btn-success shadow-sm" disabled>
                                    Tervalidasi
                                </button>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php
                if(!empty($this->session->flashdata('error'))){
                    echo '
                        <div class="alert alert-danger" role="alert">
                           '.$this->session->flashdata('err_msg').'
                        </div>
                    ';        
                }
                if(!empty($this->session->flashdata('succ_msg'))){
                    echo '
                        <div class="alert alert-success" role="alert">
                            '.$this->session->flashdata('succ_msg').'
                        </div>
                    ';        
                }
            ?>
            <div class="table-responsive">
                    <table class="table table-bordered" id="tableMaterial" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="">Materi</th>
                            <th style="">Topik</th>
                            <th style="">Konten File</th>
                            <th style="">Resource</th>
                            <th style="">Aksi</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($materials as $item) {
                                echo '
                                    <tr>
                                        <td class="text-center">'.$no.'</td>
                                        <td>'.$item->NAMA_MATERIAL.'</td>
                                        <td><a href="'.$item->CONTENT_MATERIAL.'">'.$item->CONTENT_MATERIAL.'</a></td>
                                        <td>'.$item->NAMA_MATERIAL.'</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="'.site_url('admin/material/edit/'.$item->ID_MATERIAL).'" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                ';
                                $no++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal Selesai -->
<div class="modal fade" id="mdlSelesai" tabindex="-1" aria-labelledby="mdlSelesai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Konfirmasi Materi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah anda yakin untuk mevalidasi materi?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <form action="<?= site_url('admin/material/finish')?>" method="post">
                    <input type="hidden" name="idCourse" value="<?= $course->ID_COURSE?>" />
                    <button type="submit" class="btn btn-success">Validasi</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#tableMaterial').DataTable();
    })
</script>