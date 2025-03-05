<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('dashboard'); ?></p>
    <?php endif; ?>

    <form method="POST" action="<?php echo ('auth/login'); ?>">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    
    <p>Belum punya akun? <a href="<?php echo ('auth/register'); ?>">Register</a></p>
</body>
</html>
