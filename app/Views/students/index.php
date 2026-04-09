<h2>Student List</h2>
<a href="/students/create">Add Student</a>

<table border="1">
    <tr>
        <th>Name</th><th>Email</th><th>Course</th><th>Actions</th>
    </tr>
    <?php foreach ($students as $s): ?>
    <tr>
        <td><?= esc($s['name']) ?></td>
        <td><?= esc($s['email']) ?></td>
        <td><?= esc($s['course']) ?></td>
        <td>
            <a href="/students/edit/<?= $s['id'] ?>">Edit</a>
            <a href="/students/delete/<?= $s['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<!-- Pagination links -->
<div>
    <?= $pager->links() ?>
</div>
