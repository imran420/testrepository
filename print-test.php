<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
</head>
<body>
<script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-firestore.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-analytics.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyA2jo1u1g_YojzeOR4gtamDf8H2XXcT4JU",
        authDomain: "dmssystemdemo.firebaseapp.com",
        databaseURL: "https://dmssystemdemo.firebaseio.com",
        projectId: "dmssystemdemo",
        storageBucket: "dmssystemdemo.appspot.com",
        messagingSenderId: "978589697652",
        appId: "1:978589697652:web:d57ee63723a915f50cf321",
        measurementId: "G-33ZMLZJN3T"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    const userId = '105';
    const database = firebase.firestore();
    const usersCollection = database.collection('users');
    const query =usersCollection.where('English_voter_ID','==',userId);

    query.get().then(snapshot => {
        snapshot.forEach(user => {
            var emps = [];
            var emp ={};
            emp.name =user.data().Bangla_name;
            emp.fatherName=user.data().Bangla_father_name;
            emp.motherName=user.data().Bangla_mother_name;
            emps.push(emp);
            $.ajax({
                url: 'print_crtificate.php',
                method: 'post',
                data: {emps :JSON.stringify(emps)},
                success: function () {
                    alert("hello");
                   //window.location.href="print_crtificate.php";
                }
            })
            // document.getElementById("father").innerHTML=user.data().English_father_name;
        });
    })
        .catch(error => {
            console.error(error);
        });
</script>
</body>
</html>