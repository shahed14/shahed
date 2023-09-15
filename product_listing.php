<?php
// Include the database connection file

// Function to retrieve products from the database
function getProducts()
{
   include 'database_connection.php';


    // Prepare the SQL query to retrieve products
    $query = "SELECT * FROM products";

    // Execute the query and fetch the results
    $result = $connection->query($query);

    // Create an empty array to store the products
    $products = [];

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Loop through the rows and fetch the product data
        while ($row = $result->fetch_assoc()) {
            // Add the product data to the array
            $products[] = $row;
        }
    }

    // Close the database connection
    $connection->close();

    // Return the products array
    return $products;
}

// Call the getProducts() function to retrieve the products
$products = getProducts();
?>

<!-- Display the products in a table -->
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['category_id'] ?></td>
                <td>
                    <!-- Add edit and delete buttons with appropriate links -->
                    <a href="edit_product.php?id=<?php echo $product['id']; ?>" class="btn btn-primary" name= "editProduct">Edit</a>
                    <a href="delete_product.php?id=<?php echo $product['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
