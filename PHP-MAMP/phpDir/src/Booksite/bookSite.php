<?php
include 'db.php';

// Create Book
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['publishing_year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    if (!empty($title) && !empty($author) && !empty($year) && !empty($genre) && !empty($description)) {

        $stmt = $conn->prepare("INSERT INTO books(title, author, publishing_year, genre, description) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $title, $author, $year, $genre, $description);

        if ($stmt->execute()) {
            echo "Book added successfully";
        } else {
            echo "Query insertion failed: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Book data cannot be empty.";
    }
}

// Update Book
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    if (isset($_POST['id'], $_POST['title'], $_POST['description'], $_POST['author'], $_POST['publishing_year'], $_POST['genre']) && is_numeric($_POST['id'])) {
        $book_id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $publishing_year = $_POST['publishing_year'];
        $genre = $_POST['genre'];

        $stmt = $conn->prepare("UPDATE books SET title = ?, description = ?, author = ?, publishing_year = ?, genre = ? WHERE id = ?");
        $stmt->bind_param("sssisi", $title, $description, $author, $publishing_year, $genre, $book_id);

        if ($stmt->execute()) {
            echo "Book updated successfully";
        } else {
            echo "Error updating book: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Invalid or incomplete book details";
    }
}

// Delete Book
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $book_id = $_POST['id'];

        $sql = "DELETE FROM books WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $book_id);

        if ($stmt->execute()) {
            echo "Book deleted successfully!";
        } else {
            echo "Error deleting book: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Invalid book ID!";
    }
}

// List Books
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Management</title>
    <style>
        body {
            margin-left: 20px;
            padding: 10px;
            background-color: lavender;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Add New Book</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="publishing_year">Publishing Year:</label><br>
        <input type="text" id="publishing_year" name="publishing_year"><br>
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <input type="submit" name="submit" value="Add Book">
    </form>

    <h2>List of Books</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publishing Year</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["author"] . "</td>";
                echo "<td>" . $row["publishing_year"] . "</td>";
                echo "<td>" . $row["genre"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>";
                echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='POST'>";
                echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                echo "<input type='submit' name='update' value='Update'>";
                echo "<input type='submit' name='delete' value='Delete'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No books found</td></tr>";
        }
        ?>
    </table>

    <?php
    if (isset($_POST['update'])) {
        $book_id = $_POST['id'];
        $sql = "SELECT * FROM books WHERE id = $book_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <h2>Edit Book Information</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>"><br>
                <label for="author">Author:</label><br>
                <input type="text" id="author" name="author" value="<?php echo $row['author']; ?>"><br>
                <label for="publishing_year">Publishing Year:</label><br>
                <input type="text" id="publishing_year" name="publishing_year" value="<?php echo $row['publishing_year']; ?>"><br>
                <label for="genre">Genre:</label><br>
                <input type="text" id="genre" name="genre" value="<?php echo $row['genre']; ?>"><br>
                <label for="description">Description:</label><br>
                <textarea id="description" name="description"><?php echo $row['description']; ?></textarea><br><br>
                <input type="submit" name="update" value="Update Book">
            </form>
            <?php
        }
    }
    ?>
</body>
</html>
