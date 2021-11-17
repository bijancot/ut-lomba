<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Course</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-warning mb-2">Form</h6>
            </div>
        </div>
        <div class="card-body">
            <?php
                if(!empty($this->session->flashdata('err_msg'))){
                    echo '
                        <div class="alert alert-danger" role="alert">
                           '.$this->session->flashdata('err_msg').'
                        </div>
                    ';        
                }
            ?>
            <form action="<?= site_url('admin/event/update')?>" enctype='multipart/form-data' method="post">
                <div class="form-group">
                    <label>Poster (max 2mb)</label><span class="text-warning">*</span>
                    <br>
                    <div id="boxImg" class="text-center mt-3 mb-3 p-3" style="border: 1px solid #ddd;border-radius: 10px;cursor: pointer;">
                        <img style="max-width: 250px;" id="blah" class="" src="<?= (!empty($event->IMG_EVENT) ? $event->IMG_EVENT : (!empty($dataTemp['imgEvent']) ? $dataTemp['imgEvent'] : "")) ?>" />
                        <input type="hidden" name="imgEvent" value="<?= (!empty($event->IMG_EVENT) ? $event->IMG_EVENT : (!empty($dataTemp['imgEvent']) ? $dataTemp['imgEvent'] : "")) ?>">
                    </div>
                    <input type="file" class="form-control" accept=".jpg,.png,.jpeg,.bmp" name="poster" style="cursor: pointer;" id="imgPoster">
                </div>
                <div class="form-group">
                    <label>Judul</label><span class="text-warning">*</span>
                    <input class="form-control" type="text" value="<?= (!empty($event->NAMA_EVENT) ? $event->NAMA_EVENT : (!empty($dataTemp['judul']) ? $dataTemp['judul'] : "")) ?>" name="judul" id="" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label><span class="text-warning">*</span>
                    <textarea class="form-control" type="text" name="deskripsi" id="" required><?= (!empty($event->DESKRIPSI_EVENT) ? $event->DESKRIPSI_EVENT : (!empty($dataTemp['deskripsi']) ? $dataTemp['deskripsi'] : "")) ?></textarea>
                </div>
                <div class="form-group">
                    <label>Tempat</label><span class="text-warning">*</span>
                    <input class="form-control" type="text" value="<?= (!empty($event->LOKASI_EVENT) ? $event->LOKASI_EVENT : (!empty($dataTemp['tempat']) ? $dataTemp['tempat'] : "")) ?>" name="tempat" id="" required>
                </div>
                <div class="form-group">
                    <label>Tanggal</label><span class="text-warning">*</span>
                    <input class="form-control" type="date" value="<?= (!empty($event->TGL_EVENT) ? date_format(date_create($event->TGL_EVENT), 'm-d-Y') : (!empty($dataTemp['tgl']) ? $dataTemp['tgl'] : "")) ?>" name="tgl" id="" required>
                </div>
                <div class="form-group">
                    <label>Penyelenggara</label><span class="text-warning">*</span>
                    <input class="form-control" type="text" value="<?= (!empty($event->PENYELENGGARA_EVENT) ? $event->PENYELENGGARA_EVENT : (!empty($dataTemp['penyelenggara']) ? $dataTemp['penyelenggara'] : "")) ?>" name="penyelenggara" id="" required>
                </div>
                <div class="form-group">
                    <label>Narahubung</label>
                    <input class="form-control" type="text" value="<?= (!empty($event->NARAHUBUNG_EVENT) ? $event->NARAHUBUNG_EVENT : (!empty($dataTemp['narahubung']) ? $dataTemp['narahubung'] : "")) ?>" name="narahubung" id="" >
                </div>
                <div class="form-group">
                    <label>Link Video Conference</label>
                    <input class="form-control" type="text" value="<?= (!empty($event->LINK_EVENT) ? $event->LINK_EVENT : (!empty($dataTemp['link']) ? $dataTemp['link'] : "")) ?>" name="link" id="">
                </div>
                <input type="hidden" name="idEvent" value="<?= (!empty($event->ID_EVENT) ? $event->ID_EVENT : (!empty($dataTemp['idEvent']) ? $dataTemp['idEvent'] : "")) ?>">
                <button style="float: right;" type="submit" class="btn btn-sm btn-warning">Simpan</button>
            </form>
        </div>
    </div>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#boxImg").click(function(){
        $('#imgPoster').click();
    });

    $("#imgPoster").change(function(){
        readURL(this);
    });
</script>
