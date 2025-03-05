<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php echo validation_errors(); ?>
    
    <form method="POST" action="<?php echo ('auth/register'); ?>">
        <input type="text" name="name" placeholder="Nama" required><br>
        <input type="text" name="usia" placeholder="Usia" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirm" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>
    
    <p>Sudah punya akun? <a href="<?php echo site_url('auth/login'); ?>">Login</a></p>
</body>
</html>
