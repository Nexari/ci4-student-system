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

<h2 class="mb-3">Student List</h2>

<a href="/students/create" class="btn btn-primary mb-3">Add Student</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $s): ?>
        <tr>
            <td><?= esc($s['name']) ?></td>
            <td><?= esc($s['email']) ?></td>
            <td><?= esc($s['course']) ?></td>
            <td>
                <a href="/students/edit/<?= $s['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="/students/delete/<?= $s['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<!-- Pagination -->
<div class="mt-3">
    <?= $pager->links() ?>
</div>

<?= $this->endSection() ?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
