<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Request Baru</a> -->
            <!-- <?= $this->session->flashdata('sukses'); ?> -->
            <div id="notif"></div>
        </div>
    </div>
    <form action="<?= base_url('Teknisi/tambahreq') ?>" method="POST">
        <div id="repeater">
            <div class="row mb-3 repeater-heading">
                <div class="col-lg">
                    <h5 class="text-primary">Form Request Barang</h5>
                </div>
                <div class="col-lg text-right">
                    <a class="btn btn-primary text-white btn-sm repeater-add-btn"><i class="fa fa-plus"></i> Baris</a>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="items" data-group="formadd">
                <div class="form-row form-floating item-content mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="produk_id" id="produk_id" placeholder="Nama Produk" data-name="produk_id">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" data-name="jumlah_out">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" data-name="keterangan">
                    </div>
                    <div class="col repeater-remove-btn">
                        <button class="btn btn-danger remove-btn">
                            Remove
                        </button>
                    </div>
                    <!-- <div class="col">
                        <input type="hidden" class="form-control" name="user" data-name="user">ss
                        <input type="hidden" class="form-control" name="tanggal" data-name="tanggal">
                        <input type="hidden" class="form-control" name="status" data-name="status">
                        <input type="hidden" class="form-control" name="statusby" data-name="statusby">
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg text-right">
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"> Simpan</i></button>
            </div>
        </div>
    </form>
</div>