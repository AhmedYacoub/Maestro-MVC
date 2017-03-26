<?php require 'MVC/MVC-header.php'; ?>
<?php require 'MVC/MVC-navbar.php'; ?>

<div class="container">
    <h1>Read Page</h1>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['age']; ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php require 'MVC/MVC-footer.php'; ?>
