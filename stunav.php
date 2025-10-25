<html>
<head>
  <title>Private Tutor Management System</title>
  <link rel="stylesheet" href="assets/css/style1.css">
  <style>
    body {
      background: url("student_Background.jpg") no-repeat center center fixed;
      background-size: cover;
      background-color: #f2f2f7; /* fallback */
    }
  </style>
</head>
<body>

<?php require 'includes/header.php'; ?>

  <!-- Body Section --> 
  <main class="main-content">
    <div class="welcome">
      <h4>Welcome to Smart-Kids</h4>
      <p>Each student will be the best in future.</p>
    </div>

    <div class="dashboard">
      <a href="modules/classSlots/student_dashboardCS.php" class="card-btn red">Class Slot</a>
      <a href="modules/assessments/student_dashboard.php" class="card-btn green">Assessment</a>
      <a href="payment.html" class="card-btn blue">Payment</a>
    </div>
  </main>
<a href = "/tutor_management/modules/feedback/feedback.php" class="feedback-btn"> Feedback</a>
<?php require 'includes/footer.php'; ?>

<script src="assets/js/script.js"></script>
</body>
</html>
