
<?php
include 'header.php';
include '../function/database.php';
?>

<?php
// Include database connection
$conn = new mysqli('localhost', 'root', '', 'JejakBaduy');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch all submissions
$sql = "SELECT * FROM tb_form ORDER BY submission_date DESC";
$result = $conn->query($sql);
?>


<div class="content-wrapper">
  <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin Page</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </div>
        <div class="card mb-4" style="width: 100%;">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h2 class="m-0 font-weight-bold text-primary">Form Submissions</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="form-submissions-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo "<tr onclick='showDetails(" . json_encode($row) . ")' style='cursor:pointer;'>";
                        echo "<td data-label='ID'>" . $row["id"] . "</td>";
                        echo "<td data-label='Name'>" . htmlspecialchars($row["firstName"] . " " . $row["lastName"]) . "</td>";
                        echo "<td data-label='Email'>" . htmlspecialchars($row["email"]) . "</td>";
                        echo "<td data-label='Subject'>" . htmlspecialchars($row["subject"]) . "</td>";
                        echo "<td data-label='Message' class='message-cell'>" . htmlspecialchars($row["message"]) . "</td>";
                        echo "<td data-label='Date'>" . $row["submission_date"] . "</td>";
                        echo "</tr>";
                    }
                    } else {
                        echo "<tr><td colspan='6'>No submissions found</td></tr>";
                    }
                    ?>
                  </tbody>
              </table>
          </div>
      </div>
  <!-- Modal Logout -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
          <a href="index.php?logout=1" class="btn btn-primary">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal for Form Details -->
<div class="modal fade" id="formDetailsModal" tabindex="-1" role="dialog" aria-labelledby="formDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formDetailsModalLabel">Form Submission Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong>ID:</strong> <span id="modalId"></span></p>
                <p><strong>Name:</strong> <span id="modalName"></span></p>
                <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                <p><strong>Subject:</strong> <span id="modalSubject"></span></p>
                <p><strong>Message:</strong> <span id="modalMessage"></span></p>
                <p><strong>Date:</strong> <span id="modalDate"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<?php
$conn->close();
include 'footer.php';
?>

