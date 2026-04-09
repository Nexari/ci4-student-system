<h2>Edit Student</h2>
<form method="post" action="/students/update/<?= $student['id'] ?>">
    Name: <input type="text" name="name" value="<?= esc($student['name']) ?>"><br>
    Email: <input type="email" name="email" value="<?= esc($student['email']) ?>"><br>
    Course: <input type="text" name="course" value="<?= esc($student['course']) ?>"><br>
    <button type="submit">Update</button>
</form>
