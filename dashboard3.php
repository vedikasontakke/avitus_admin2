<?php

session_start();

if (!isset($_SESSION['username'])) {
  $var_email =  $_SESSION['email'];

  header('Location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Avitus</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />



  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="module">
    // FIREBASE CODE
    // Import the functions you need from the SDKs you need
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
    import {
      getAnalytics
    } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyBsYqAVCD4dBUrN4ekRBXd1cX-RoYJ-zxQ",
      authDomain: "avitus-c6483.firebaseapp.com",
      projectId: "avitus-c6483",
      storageBucket: "avitus-c6483.appspot.com",
      messagingSenderId: "837050693635",
      appId: "1:837050693635:web:5425e1c099894857747636",
      measurementId: "G-QRG2GQ5MDD"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);

    import {
      getFirestore,
      doc,
      getDoc,
      setDoc,
      collection,
      addDoc,
      updateDoc,
      deleteDoc,
      deleteField,
      getDocs
    }
    from "https://www.gstatic.com/firebasejs/9.17.1/firebase-firestore.js";

    const db = getFirestore();

    // Code for charts

    google.charts.load('current', {
      'packages': ['corechart']
    });

    google.charts.setOnLoadCallback(drawChart_Name);
    // google.charts.setOnLoadCallback(drawChart_Class);
    // google.charts.setOnLoadCallback(drawChart_Subject);

    async function drawChart_Name() {

      // FIREBASE TESTING
      const querySnapshot = await getDocs(collection(db, 'questions'));

      // Get a reference to the parent element where the HTML blocks will be appended
      const parentElement = document.querySelector('.row');

      let i = 0;
      querySnapshot.forEach((doc) => {

        // Setting up the graph data
        var data = google.visualization.arrayToDataTable([
          ['question', 'ans count'],
          [doc.data().option1, 10],
          [doc.data().option2, 5],
          [doc.data().option3, 2],
          [doc.data().option4, 2],
        ]);

        var options = {
          title: doc.data().question 
        };

        // Create a new <td> element
        const tdElement = document.createElement('td');

        // Create a new <div> element
        const divElement = document.createElement('div');
        divElement.setAttribute('id', `piechart_name_${i}`); // Set a unique ID for each chart
        divElement.setAttribute('style', 'margin:10px');

        // Set the style attribute for the <div> element
        divElement.style.width = '500px';
        divElement.style.height = '300px';

        // Append the <tr> element to the parent element
        parentElement.appendChild(divElement);

        // Creating graph
        var chart = new google.visualization.PieChart(document.getElementById(`piechart_name_${i}`));
        chart.draw(data, options);

        i = i + 1;
      });

    }
  </script>




</head>

<body>

  <!-- partial:partials/_navbar.html -->
  <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
      <div class="me-3">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
      </div>
      <div>
        <a class="navbar-brand brand-logo" href="dashboard3.php">
          <!-- <img src="images/logo.svg" alt="logo" /> -->
          <p style="font-size: 22px; margin-top:6px; margin-left:20px">Avitus</p>
        </a>
        <a class="navbar-brand brand-logo-mini" href="dashboard3.php">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
      <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          <h1 class="welcome-text">Hello, <span class="text-black fw-bold"><?php echo $_SESSION['username'] ?></span></h1>
          <h3 class="welcome-sub-text">Check what people thinks about our nest</h3>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">

        <li class="nav-item d-none d-lg-block">
          <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
            <span class="input-group-addon input-group-prepend border-right">
              <span class="icon-calendar input-group-text calendar-icon"></span>
            </span>
            <input type="text" class="form-control">
          </div>
        </li>

        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
          <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
              <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
              <p class="mb-1 mt-3 font-weight-semibold"><?php echo $_SESSION['username'] ?></p>
              <p class="fw-light text-muted mb-0"><?php echo $_SESSION['username']   ?></p>
            </div>
            <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
            <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">

    <div id="right-sidebar" class="settings-panel">

      <div class="tab-content" id="setting-content">

        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
          </div>

        </div>
      </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="dashboard3.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-item nav-category">Add</li>
        <li class="nav-item">
          <a class="nav-link" href="questions.php">
            <i class="menu-icon mdi mdi-file-document"></i>
            <span class="menu-title">Questions</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <div class="home-tab">
              <div class="tab-content tab-content-basic">
                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

                  <div class="row">
                    <tr>
                      <!-- <td>
                        <div id="piechart_name" style="width: 500px; height: 300px;"></div>
                      </td>
                      <td>
                        <div id="piechart_name_1" style="width: 500px; height: 300px;"></div>
                      </td> -->
                    </tr>
                  </div>

                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <!--       <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span> -->
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>