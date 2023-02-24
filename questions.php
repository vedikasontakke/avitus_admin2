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
  <title>Star Admin2 </title>
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
            <img src="images/logo.svg" alt="logo" />
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
          </li>
        </ul>
      </nav>
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper" position="relative">

          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Question Form</h4>
<!-- 
                <form class="forms-sample" method="" action="" id="question_form"> -->
                <div class="form-group">
                    <label for="question">Question Id</label>
                    <input type="number" class="form-control" name="question" id="question_id" placeholder="Question Id" Required>
                  </div>
                  <div class="form-group">
                    <label for="question">Question</label>
                    <input type="text" class="form-control" name="question" id="question" placeholder="Question" Required>
                  </div>
                  <div class="form-group">
                    <label for="question_type">Select Question Type</label>
                    
                    <select class="form-control" id="question_type" Required>
                      
                      <option value="multiple_choice">Multiple Choice Question</option>
                      <option value="true_false">Two Option Only</option>
                      <option value="brief_answer">Brief Answer</option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="option1" id="option1_label">Option 1</label>
                    <input type="text" class="form-control" name="option1" id="option1" placeholder="Option 1">
                  </div>
                  <div class="form-group">
                    <label for="option2" id="option2_label">Option 2</label>
                    <input type="text" class="form-control" name="option2" id="option2" placeholder="Option 2">
                  </div>
                  <div class="form-group">
                    <label for="option3" id="option3_label">Option 3</label>
                    <input type="text" class="form-control" name="option3" id="option3" placeholder="Option 3">
                  </div>
                  <div class="form-group">
                    <label for="option4" id="option4_label">Option 4</label>
                    <input type="text" class="form-control" name="option4" id="option4" placeholder="Option 4">
                  </div>
                  <div class="form-group">
                    <label for="additional" id="brief_answer_label">Write your answer here</label>
                    <input type="text" class="form-control" name="additional" id="brief_answer" placeholder="Write your answer here">
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
    
    // Labels
    let OptionOneLabel = document.getElementById('option1_label');
    let OptionTwoLabel = document.getElementById('option2_label');
    let OptionThreeLabel = document.getElementById('option3_label');
    let OptionFourLabel = document.getElementById('option4_label');
    let BreifAnsLabel = document.getElementById("brief_answer_label");


    // Inputs
    let QuestionId = document.getElementById('question_id');
    let QuestionBox = document.getElementById('question');
    let QuestionType = document.getElementById('question_type');
    let OptionOne = document.getElementById('option1');
    let OptionTwo = document.getElementById('option2');
    let OptionThree = document.getElementById('option3');
    let OptionFour = document.getElementById('option4');
    let BriefAns = document.getElementById("brief_answer");

    // Buttons
    let SubmitButton = document.getElementById('submit_btn');
    let ResetButton = document.getElementById('reset_btn');

    // ----------------------------- INITIALIZING Components for Multiple choice questions --
    OptionOneLabel.style.display = 'block';
    OptionTwoLabel.style.display = 'block';
    OptionThreeLabel.style.display = 'block';
    OptionFourLabel.style.display = 'block';
    OptionOne.style.display = 'block';
    OptionTwo.style.display = 'block';
    OptionThree.style.display = 'block';
    OptionFour.style.display = 'block';
    BreifAnsLabel.style.display = 'none';
    BriefAns.style.display = 'none';
    

    // ------------------------------ Adding Document To Firestore ---------------------------
    async function AddDocument_CustomeID() {
      
      var ref = doc(db, "questions", QuestionId.value);

      const docRef = await setDoc(
        ref, {
          option1: OptionOne.value,
          option2: OptionTwo.value,
          option3: OptionThree.value,
          option4: OptionFour.value,
          brief_ans: BriefAns.value,
          question_type: QuestionType.value,
          question: QuestionBox.value
        }
      )
      .then(()=>{
        alert("Question added successfully.");
        reset();
      })
      .catch((error)=>{
        alert("Error: " + error);
      });
    }

    // ------------------------------ Getting Document From Firestore -------------------
    async function GetADocument(){
      var ref = doc(db, "questions", QuestionId.value);
      const docSnap = await getDoc(ref);

      if(docSnap.exists()) {
        QuestionBox.value = docSnap.data().question;
        OptionOne.value = docSnap.data().option1;
        OptionTwo.value = docSnap.data().option2;
        OptionThree.value = docSnap.data().option3;
        OptionFour.value = docSnap.data().option4;
        BriefAns.value = docSnap.data().brief_ans;
      }
      else {
        alert("NO such Document");  
      }
    }

    // ---------------------------- CHANGING OPTION TYPES -------------------------------
    function changeOptionsType() {
      
      let selected_option = QuestionType.value;

      if(selected_option === 'true_false')
      {
        // Disabling Unncessary UI
        OptionOneLabel.style.display = 'block';
        OptionTwoLabel.style.display = 'block';
        OptionThreeLabel.style.display = 'none';
        OptionFourLabel.style.display = 'none';
        OptionOne.style.display = 'block';
        OptionTwo.style.display = 'block';
        OptionThree.style.display = 'none';
        OptionFour.style.display = 'none';
        BreifAnsLabel.style.display = 'none';
        BriefAns.style.display = 'none';
      }
      else if(selected_option === 'brief_answer')
      {
        OptionOneLabel.style.display = 'none';
        OptionTwoLabel.style.display = 'none';
        OptionThreeLabel.style.display = 'none';
        OptionFourLabel.style.display = 'none';
        OptionOne.style.display = 'none';
        OptionTwo.style.display = 'none';
        OptionThree.style.display = 'none';
        OptionFour.style.display = 'none';
        BreifAnsLabel.style.display = 'block';
        BriefAns.style.display = 'block';
      }
      else if(selected_option === 'multiple_choice')
      {
        OptionOneLabel.style.display = 'block';
        OptionTwoLabel.style.display = 'block';
        OptionThreeLabel.style.display = 'block';
        OptionFourLabel.style.display = 'block';
        OptionOne.style.display = 'block';
        OptionTwo.style.display = 'block';
        OptionThree.style.display = 'block';
        OptionFour.style.display = 'block';
        BreifAnsLabel.style.display = 'none';
        BriefAns.style.display = 'none';
      }

    }

    // ---------------------------- Resting all inputs ----------------------------------
    async function reset() {
      QuestionId.value = "";
      QuestionBox.value = "";
      OptionOne.value = "";
      OptionTwo.value = "";
      OptionThree.value = "";
      OptionFour.value = "";
    }

    // ------------------------------- TESTING CODE -------------------------------------
    async function getAllDocuments() {

      const querySnapshot = await getDocs(collection(db, 'questions'));

      querySnapshot.forEach((doc) => {
        alert(doc.data().question);
      });

    }



    // ------------------------------ Adding Events to BUtton ---------------------------
    SubmitButton.addEventListener("click", AddDocument_CustomeID);
    ResetButton.addEventListener("click", getAllDocuments);
    QuestionType.addEventListener("change", changeOptionsType);
  </script>
</body>

</html>