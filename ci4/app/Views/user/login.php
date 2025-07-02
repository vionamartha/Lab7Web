<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f0f2f5;
        }
        .login-wrapper {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-title {
            text-align: center;
            margin-bottom: 25px;
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <h3 class="login-title">Login Admin</h3>

    <?php if (session()->getFlashdata('flash_msg')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('flash_msg'); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('/user/login'); ?>">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="InputEmail" value="<?= set_value('email'); ?>" required>
        </div>

        <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="InputPassword" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
