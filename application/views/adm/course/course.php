<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Course</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-warning mb-2">Daftar Course</h6>
                <a href="<?= site_url('admin/course/add')?>" class="btn btn-sm btn-warning shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i>
                    Tambah
                </a>
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
                    <table class="table table-bordered" id="tableCourse" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 5%;">Poster</th>
                            <th style="width: 20%;">Nama</th>
                            <th style="width: 35%;">Deskripsi</th>
                            <th style="width: 10%;">Materi</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 20%;">Aksi</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($courses as $item) {
                                $status         = ($item->ISPUBLISHED_COURSE == "0" ? '<span class="badge badge-danger">Unpublished</span>' : '<span class="badge badge-success">Published</span>');
                                $statusMateri   = ($item->ISMATREADY_COURSE == "0" ? '<span class="badge badge-danger">Not Ready</span>' : '<span class="badge badge-success">Ready</span>');

                                echo '
                                    <tr>
                                        <td class="text-center"><a class="btn btn-sm btn-primary mdlPoster" data-toggle="modal" data-target="#mdlPoster" data-src="'.$item->IMG_COURSE.'"><i class="fa fa-image"></i></a></td>
                                        <td>'.$item->NAMA_COURSE.'</td>
                                        <td>'.$item->DESKRIPSI_COURSE.'</td>
                                        <td>'.$statusMateri.'</td>
                                        <td>'.$status.'</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Atur Materi"><i class="fa fa-stream"></i></a>
                                            <a class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Publish"><i class="fa fa-cloud-upload-alt"></i></a>
                                            <a class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                                        </td>                            
                                    </tr>
                                
                                ';
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
        $('#tableCourse').DataTable();
    })
    $('#tableCourse tbody').on('click', '.mdlPoster', function(){
        const src = $(this).data('src');
        $('#mdlPoster_src').attr('src', src);
    })
</script>