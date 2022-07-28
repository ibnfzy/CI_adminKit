<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" id="head">
                <div class="row">
                    <h5 class="card-title mb-0 col-10">Table Admin</h5>
                    <a href="<?= base_url('U/Admin/new'); ?>" style="float: right;" class="btn btn-info col-2"><i
                            class="align-middle me-2" data-feather="plus-square"></i>Tambah
                        Admin</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover" id="table">
                    <thead>
                        <tr>
                            <th>~</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Login Terakhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admin as $item) : ?>
                        <tr>
                            <td><?= $item['id_admin']; ?></td>
                            <td><?= $item['fullname']; ?></td>
                            <td><?= $item['username']; ?></td>
                            <td><?= $item['last_login']; ?></td>
                            <td>
                                <div class="btn-group btn-group-lg" role="group">
                                    <a href="<?= base_url('U/Admin/' . $item['id_admin'] . '/edit'); ?>" type="button"
                                        class="btn btn-info"><i class="align-middle me-2" data-feather="edit"></i></a>
                                    <button onclick="deleteData('<?= $item['id_admin']; ?>')" type="button"
                                        class="btn btn-danger"><i class="align-middle me-2"
                                            data-feather="trash-2"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
function deleteData(a) {
    swal({
            title: "Apa kamu yakin?",
            text: "Data akan terhapus",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    method: "DELETE",
                    url: "Admin/" + a,
                    success: function(response) {
                        swal("Data Telah Terhapus", {
                            icon: "success",
                        }).then(() => {
                            window.location.reload()
                        })
                    },
                    error: function(response) {
                        swal("Terjadi kesalahan pada AJAX", {
                            icon: "error",
                        })
                    }
                });
            }
        });
}
</script>

<script>
$(function() {
    var table = $("#table").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "print", "colvis"]
    });

    table.buttons().container().appendTo($('.col-md-6:eq(0)', table.table().container()));
});
</script>

<?= $this->endSection(); ?>