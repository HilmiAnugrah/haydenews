<section class="member-link">
<div class="container-section">
    <div class="title">
    <h1>Member Area</h1>
    <p>Hayde Bismillah dulu!</p>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <th>#</th>
                <th>Image</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td>
                        <img src="" alt="image" width="50">
                    </td>
                    <td><?= $user['username']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td>
                        <a href="" class="badge text-bg-warning">ubah</a> |
                        <a href="" class="badge text-bg-danger">hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    



</div>





</section>