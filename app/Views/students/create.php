<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <?= $this->renderSection('content') ?>
    <?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h2 class="mb-3">Add Student</h2>
<form method="post" action="/students/store" class="form">
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Course</label>
        <input type="text" name="course" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>

<?= $this->endSection() ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
