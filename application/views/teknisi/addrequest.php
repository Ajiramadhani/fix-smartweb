<!-- Begin Page Content -->
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

    <div class="row">
        <form action="<?= base_url('Teknisi/post') ?>" method="POST" id="Simpan">
            <div class="col-md-12">
                <table class="table table-responsive table-hover" id="tablebarang">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Pilih Item</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                            <th><a class="btn btn-sm btn-success text-white" id="BarisBaru"><i class="fa fa-plus"> Baris</i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"> Simpan</i></button>
                    <button type="reset" class="btn btn-secondary"><i class="fa fa-undo"> Reset</i></button>
                </div>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        for (B = 1; B <= 1; B++) {
            Barisbaru();
        }
        $('#BarisBaru').click(function(e) {
            e.preventDefault();
            Barisbaru();
        });
        $("tablebarang tbody").find('input[type=text]').filter(':visible:first').focus();
    });

    function Barisbaru() {
        $(document).ready(function() {
            $("[data-toggle='tooltip'").tooltip();
        });
        var no = $("#tablebarang tbody tr").length + 1;
        var Baris = '<tr>';
        Baris += '<td class="text-center">' + no + '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="produk_id[]" class="form-control nama_barang" placeholder="Masukkan Item .." required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="number" name="jumlah[]" class="form-control jumlah" placeholder="Masukkan Jumlah .." required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<input type="text" name="keterangan[]" class="form-control keterangan" placeholder="Masukkan Keterangan .." required="">';
        Baris += '</td>';
        Baris += '<td>';
        Baris += '<a class="btn btn-sm btn-danger text-white" data-toggle="tooltip" title="Hapus Baris" id="HapusBaris"><i class="far fa-times-circle"></i></a>';
        Baris += '</td>';
        Baris += '</tr>';

        $("#tablebarang tbody").append(Baris);
        $("#tablebarang tbody tr").each(function() {
            $(this).find('td:nth-child(2) input').focus();
        });
    }

    $(document).on('click', '#HapusBaris', function(e) {
        e.preventDefault();
        var no = 1;
        $(this).parent().parent().remove();
        $('tablebarang tbody tr').each(function() {
            $(this).find('td:nth-child(1)').html(no);
            no++;
        });
    });

    $(document).ready(function() {
        $('#Simpan').submit(function(e) {
            e.preventDefault();
            produkout();
        });
    });

    function produkout() {
        $.ajax({
            url: $("#Simpan").attr('action'),
            type: 'POST',
            cache: false,
            dataType: 'json',
            data: $("#Simpan").serialize(),
            success: function(data) {
                if (data.success == true) {
                    console.log(data);
                    $('.nama_barang').val('');
                    $('.jumlah').val('');
                    $('.keterangan').val('');
                    $('#notif').fadeIn(800, function() {
                        $("#notif").html(data.notif).fadeOut(5000).delay(800);
                    });
                } else {
                    $('#notif').html('<div class="alert alert-danger"><i class="far fa-times-circle"></i> Data Gagal Disimpan</div>')
                }
            },
            error: function(error) {
                alert(error);
            }
        });
    }
</script>