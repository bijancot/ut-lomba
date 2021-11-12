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
                    <a href="<?= site_url('admin/course/add')?>" class="btn btn-sm btn-info shadow-sm">
                        <i class="fas fa-check fa-sm text-white-50"></i>
                        Selesai
                    </a>
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
                            <th style="">Deskripsi</th>
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
                                        <td>'.$item->NAMA_MATERIAL.'</td>
                                        <td>'.$item->DESKRIPSI_MATERIAL.'</td>
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
<!-- Modal Approve -->
<div class="modal fade" id="mdlPoster" tabindex="-1" aria-labelledby="mdlPoster" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlPoster">Pratinjau Poster</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img id="mdlPoster_src" style="max-width: 250px;" />
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#tableMaterial').DataTable();
    })
    $('#tableMaterial tbody').on('click', '.mdlPoster', function(){
        const src = $(this).data('src');
        $('#mdlPoster_src').attr('src', src);
    })
</script>