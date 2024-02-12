<?php
$title = "Gift Card Purchase";
include_once '../myFeature/header.php';
?>

<!-- Gift Card Purchase Form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Gift Card Purchase</h2>
                </div>
                <div class="card-body">
                    <form id="giftCardForm" action="process_gift_card.php" method="post">
                        <div class="mb-3">
                            <label for="recipientName" class="form-label">Recipient's Name:</label>
                            <input type="text" class="form-control" id="recipientName" name="recipientName" required>
                        </div>
                        <span id = "nameError"></span>

                        <div class="mb-3">
                            <label for="recipientEmail" class="form-label">Recipient's Email:</label>
                            <input type="email" class="form-control" id="recipientEmail" name="recipientEmail" required>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount:</label>
                            <input type="number" class="form-control" id="amount" name="amount" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Optional Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Purchase Gift Card</button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// function to validate name
function validateName() {
    const recipientName = document.getElementById('recipientName').value;
    const nameError = document.getElementById("nameError");

    if (recipientName.length < 3 || recipientName.length > 20) {
        nameError.innerHTML = "Name must be between 3 and 20 characters";
        return false;
    } else {
        nameError.innerHTML = "";
        return true;
    }
}





// event listeners for real time validation
document.getElementById("recipientName").addEventListener("input", validateName);
</script>
<?php
include '../myFeature/footer.php';
?>
