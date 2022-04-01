<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Koleksi</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tabel Koleksi</h5>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Detail</th>
                        </tr>
                        <?php foreach ($list as $item) { ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['judul']; ?></td>
                                <td><a href="koleksi/detail/<?php echo $item['id']; ?>" class="btn btn-primary">Detail</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>