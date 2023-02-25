<?php

session_start();

if (!isset($_SESSION['username'])) {
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
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="/js/validation.js" defer></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
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
            <h1 class="welcome-text">Hello , <span class="text-black fw-bold"><?php echo $_SESSION['username'] ?></span></h1>
            <h3 class="welcome-sub-text">Add Your Question here </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">

          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user ?></p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
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

      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
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
            <a class="nav-link" href="news.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Blogs</span>
            </a>
            <a class="nav-link" href="faq.php">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">FAQs</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper" position="relative">

          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">FAQ Form</h4>
<!-- 
                <form class="forms-sample" method="" action="" id="question_form"> -->
                  <div class="form-group">
                    <label for="blog_id">FAQ Id</label>
                    <input type="number" class="form-control" id="faq_id" placeholder="FAQ Id" Required>
                  </div>
                  <div class="form-group">
                    <label for="question">FAQ Question</label>
                    <input type="text" class="form-control" id="faq_question" placeholder="FAQ Question" Required>
                  </div>
                  <div class="form-group">
                    <label for="additional" id="brief_answer_label">Write your answer here</label>
                    <textarea style="height:150px" class="form-control" id="faq_answer" placeholder="Write your answer here"></textarea>
                  </div>
                  <button type="submit" name="submit" id="submit_btn" value="submit" class="btn btn-primary me-2">Submit</button>
                  <a class="btn btn-primary me-2" id="reset_btn">Reset</a>
                <!-- </form> -->
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->

  <!-- Firebase Configuration -->
  <script type="module">
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
      getFirestore, doc, getDoc, setDoc, collection, addDoc, updateDoc, deleteDoc, deleteField, getDocs
    }
    from "https://www.gstatic.com/firebasejs/9.17.1/firebase-firestore.js";

    const db = getFirestore();

    // ------------------------------ References For UI in Form ---------------------------
    

    // Inputs
    let FaqId = document.getElementById('faq_id');
    let FaqQuestion = document.getElementById('faq_question');
    let FaqAnswer = document.getElementById('faq_answer');

    // Buttons
    let SubmitButton = document.getElementById('submit_btn');
    let ResetButton = document.getElementById('reset_btn');


    // ------------------------------ Adding Document To Firestore ---------------------------
    async function AddDocument_CustomeID() {
      
      let b_id = parseInt(FaqId.value)

      var ref = doc(db, "faq", FaqId.value);

      const docRef = await setDoc(
        ref, {
          id: b_id,
          question: FaqQuestion.value,
          answer: FaqAnswer.value
        }
      )
      .then(()=>{
        alert("FAQ added successfully.");
        reset();
      })
      .catch((error)=>{
        alert("Error: " + error);
      });
    }

    // ------------------------------ Getting Document From Firestore -------------------
    async function GetADocument(){
      var ref = doc(db, "top_news", FaqId.value);
      const docSnap = await getDoc(ref);

      if(docSnap.exists()) {
        FaqId.value = docSnap.data().id;
        FaqQuestion.value = docSnap.data().question;
        FaqAnswer.value = docSnap.data().answer;
      }
      else {
        alert("NO such Document");  
      }
    }


    // ---------------------------- Resting all inputs ----------------------------------
    async function reset() {
      FaqId.value = "";
      FaqQuestion.value = "";
      FaqAnswer.value = "";
    }

    // ------------------------------- TESTING CODE -------------------------------------
    async function getAllDocuments() {

      const querySnapshot = await getDocs(collection(db, 'faq'));

      querySnapshot.forEach((doc) => {
        alert(doc.data().question);
      });

    }



    // ------------------------------ Adding Events to BUtton ---------------------------
    SubmitButton.addEventListener("click", AddDocument_CustomeID);
    ResetButton.addEventListener("click", reset);
  </script>
</body>

</html>