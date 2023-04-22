<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Library</h1>
    <form method="post" action="form.php"><div class="row g-3">
  <div class="col">
    <input name="book_title" type="text" class="form-control" placeholder="Book Title" aria-label="Book Title">
  </div>
  <div class="col">
    <input name="author" type="text" class="form-control" placeholder="Author" aria-label="Author">
  </div>
  <div class="col">
    <input name="customers_name" type="text" class="form-control" placeholder="Customers Name" aria-label="Customer Name">
  </div>
  <div class="col">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div></form>

<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Customer Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
include 'db.php';

$query = "SELECT * FROM borrowers_record";

$stmt = $conn->query($query);

while ($row = $stmt->fetch()) {
    echo "<tr>
    <th scope='row'>" . $row['id'] . "</th>
    <td>" . $row['book_title'] . "</td>
    <td>" . $row['author'] . "</td>
    <td>" . $row['customers_name'] . "</td>
  </tr>";
}
    ?>
  </tbody>
</table>
</div>
</body>
</html>