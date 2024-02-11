<?php
// Include database connection code
include "db.php";

// Check if 'id' parameter is set in the URL
if (isset($_GET['card_id'])) {
    $id = $_GET['card_id'];

    // Retrieve data for the selected gift card
    $result = mysqli_query($conn, "SELECT * FROM gift_cards WHERE card_id='$id'");
    $row = mysqli_fetch_array($result);
?>
    <!-- Include header -->
    <?php include '../myFeature/header.php'; ?>

    <div class="container mt-5">
        <h2>Update Gift Card Information</h2>
        <form name="updateForm" method="post" action="">
            <div class="mb-3">
                <label for="recipientName" class="form-label">Recipient's Name:</label>
                <input type="text" class="form-control" id="recipientName" name="recipientName" value="<?php echo $row['recipient_name']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="recipientEmail" class="form-label">Recipient's Email:</label>
                <input type="email" class="form-control" id="recipientEmail" name="recipientEmail" value="<?php echo $row['recipient_email']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount:</label>
                <input type="number" class="form-control" id="amount" name="amount" step="0.01" value="<?php echo $row['amount']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Optional Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4"><?php echo $row['message']; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update Gift Card</button>
        </form>
    </div>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve updated data from the form
        $recipientName = $_POST['recipientName'];
        $recipientEmail = $_POST['recipientEmail'];
        $amount = $_POST['amount'];
        $message = $_POST['message'];

        // Update the gift card information in the database
        $updateQuery = mysqli_query($conn, "UPDATE gift_cards SET recipient_name='$recipientName', recipient_email='$recipientEmail', amount=$amount, message='$message' WHERE card_id='$id'");

        if ($updateQuery) {
            echo "<div class='container mt-5'><h3>Gift card information updated successfully!</h3></div>";
        } else {
            echo "<div class='container mt-5'><h3>Error updating gift card information: " . mysqli_error($conn) . "</h3></div>";
        }
    }

    // Include footer
    include '../myFeature/footer.php';
} else {
    // Redirect or display an error message if 'id' parameter is not set
    header("Location: read.php");
    exit();
}
?>
