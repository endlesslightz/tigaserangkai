<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <h1>Koleksi</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tabel Koleksi</h5>
                    <a href="koleksi/add" class="btn btn-success">Tambah Data</a>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th style="width:20%">Aksi</th>
                        </tr>
                        <?php foreach ($list as $item) { ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['judul']; ?></td>
                                <td>
                                    <a href="koleksi/detail/<?php echo $item['id']; ?>" class="btn btn-info">Detail</a>
                                    <a href="koleksi/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a onclick="konfirmasi(<?php echo $item['id']; ?>)" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function konfirmasi(id) {
        let text = "Apakah Anda yakin akan Menghapus data?";
        if (confirm(text) == true) {
            window.location.href = 'koleksi/delete/' + id;
        }
    }
</script>

<?php $this->load->view('layout/footer'); ?>