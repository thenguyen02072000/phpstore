# phpstore

# hello world

# alo 3

// update
$sql = "UPDATE admins SET role = {$\_POST['role']}";
mysqli_query($connect, $sql);

GET result set.
$sql = "SELECT * FROM products WHERE id = {$id}";
$results = $connect -> query($sql);
$final=$results->fetch_assoc();
