<!-- Begin Page Content -->
<div class="container-fluid fixed">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <!-- <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Request Baru</a> -->
            <a href="<?= base_url('teknisi/addrequest'); ?>" class="btn btn-primary mb-3">Tambah Request</a>
            <?= $this->session->flashdata('sukses'); ?>
        </div>
        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Request</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action by</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($pout as $r) { ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $r->name; ?></td>
                        <td><?= $r->produk_id; ?></td>
                        <td><?= $r->jumlah_out; ?></td>
                        <!-- <td><?= date('d F Y', $r->tanggal) ?></td> -->
                        <td><?= $r->tanggal; ?></td>
                        <td><?= $r->keterangan ?></td>
                        <td><?php if ($r->status == 1) {
                                echo '<span class="badge badge-success">Di Setujui</span>';
                            } else {
                                echo '<span class="badge text-dark badge-warning">Di Tinjau</span>';
                            } ?></td>
                        <td>
                            <!-- <a href="<?= base_url('teknisi/edit/') . $r->id_produk_out ?>" class="badge badge-warning">Edit</a> -->
                            <a onclick="javascript: return confirm('Are you sure to delete ?')" href="<?= base_url('teknisi/hapus/') . $r->id_produk_out ?>" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<!-- <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModal">Ajukan Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('teknisi/addrequest'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="role" id="role" placeholder="Role name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> -->