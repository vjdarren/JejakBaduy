<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; <script>
          document.write(new Date().getFullYear());
        </script> - developed by
        <b>UIC</b>
      </span>
    </div>
  </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script>
function showDetails(data) {
    document.getElementById('modalId').innerText = data.id;
    document.getElementById('modalName').innerText = data.firstName + " " + data.lastName;
    document.getElementById('modalEmail').innerText = data.email;
    document.getElementById('modalSubject').innerText = data.subject;
    document.getElementById('modalMessage').innerText = data.message;
    document.getElementById('modalDate').innerText = data.submission_date;

    // Show the modal
    $('#formDetailsModal').modal('show');
}
</script>
</body>

</html>