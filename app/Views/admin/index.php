<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User list</h1>
    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $s) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $s->username; ?></td>
                            <td><?= $s->email; ?></td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endsection(); ?>