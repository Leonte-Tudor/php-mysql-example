<main>
    <form action="search.php" method="post">
        <input
            type="text"
            placeholder="Enter your search term"
            name="search"
            required>
        <button type="submit" name="submit">Search</button>
    </form>
</main>

<?php
if (isset($_POST['submit'])) {
    // Connect to the database
    $connection_string = new mysqli("localhost", "root", "phpissosecure", "images");

    // Escape the search string and trim
    // all whitespace
    $searchString = mysqli_real_escape_string($connection_string, trim(htmlentities($_POST['search'])));

    // If there is a connection error, notify
    // the user, and Kill the script.
    if ($connection_string->connect_error) {
        echo "Failed to connect to Database";
        exit();
    }

    // Check for empty strings and non-alphanumeric
    // characters.
    // Also, check if the string length is less than
    // three. If any of the checks returns "true",
    // return "Invalid search string", and
    // kill the script.
    if ($searchString === "" || !ctype_alnum($searchString) || $searchString < 3) {
        echo "Invalid search string";
        exit();
    }

    // We are using a prepared statement with the
    // search functionality to prevent SQL injection.
    // So, we need to prepend and append the search
    // string with percent signs
    $searchString = "%$searchString%";

    // The prepared statement
    $sql = "SELECT * FROM images WHERE title LIKE ?";

    // Prepare, bind, and execute the query
    $prepared_stmt = $connection_string->prepare($sql);
    $prepared_stmt->bind_param('s', $searchString);
    $prepared_stmt->execute();

    // Fetch the result
    $result = $prepared_stmt->get_result();

    if ($result->num_rows === 0) {
        // No match found
        echo "No match found";
        // Kill the script
        exit();

    } else {
        // Process the result(s)
        while ($row = $result->fetch_assoc()) {?>

<tr style="border-bottom: 1px solid black;">
    <td><?php echo $row['title'];?></td>
    <td><img class="img_db" src="<?php echo $row['image'];?>"</td>
    <td>
        <?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>"?>
    </td>
</tr>
<?php
        } // end of while loop
    } // end of if($result->num_rows)

} else { // The user accessed the script directly

    // Tell them nicely and kill the script.
    echo "That is not allowed!";
    exit();
}
?>

