<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>User</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tabel User</h5>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                        </tr>
                        <?php foreach ($list as $item) { ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['nama']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php echo $item['telepon']; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>