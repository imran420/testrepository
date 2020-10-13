const userId = document.getElementById('userId').innerHTML;
console.log(userId);
const database = firebase.firestore();
const usersCollection = database.collection('users');
const editbtnclick =document.getElementById('editbtn');

const query =usersCollection.where('English_voter_ID','==',userId);
query.get().then(snapshot => {
    snapshot.forEach(user => {
            document.getElementById("Bangla_name").value=user.data().Bangla_name;
            document.getElementById("Bangla_father_name").value=user.data().Bangla_father_name;
            document.getElementById("Bangla_mother_name").value=user.data().Bangla_mother_name;
            document.getElementById("Bangla_mobile_number").value=user.data().Bangla_mobile_number;
            document.getElementById("voter_id_number").value=user.data().English_voter_ID;
            document.getElementById("Bangla_house_number").value=user.data().Bangla_house_number;
            document.getElementById("Bangla_road_number").value=user.data().Bangla_road_number;
            document.getElementById("Bangla_block_number").value=user.data().Bangla_block_number;
            document.getElementById("Bangla_village_name").value=user.data().Bangla_village_name;
            document.getElementById("Bangla_district_name").value=user.data().Bangla_district_name;
            document.getElementById("Bangla_police_station").value=user.data().Bangla_police_station;
            document.getElementById("Bangla_post_office").value=user.data().Bangla_post_office;

    });
})
    .catch(error => {
        console.error(error);
    });

editbtnclick.addEventListener('click', e => {
    e.preventDefault();
    var Bname = document.getElementById('Bangla_name').value;
    var Bfathername = document.getElementById('Bangla_father_name').value;
    var Bmothername = document.getElementById('Bangla_mother_name').value;
    var Bmobilenumber = document.getElementById('Bangla_mobile_number').value;
    var Bhousenumber = document.getElementById('Bangla_house_number').value;
    var Broadnumber = document.getElementById('Bangla_road_number').value;
    var Bblocknumber = document.getElementById('Bangla_block_number').value;
    var Bvillagename = document.getElementById('Bangla_village_name').value;
    var Bdistrictname = document.getElementById('Bangla_district_name').value;
    var Bpolicestation = document.getElementById('Bangla_police_station').value;
    var Bpostoffice = document.getElementById('Bangla_post_office').value;
    var nationalidnumber = document.getElementById('voter_id_number').value;
    console.log(nationalidnumber);

    usersCollection.doc(nationalidnumber).set({
        Bangla_name: Bname,
        Bangla_father_name: Bfathername,
        Bangla_mother_name: Bmothername,
        Bangla_mobile_number: Bmobilenumber,
        Bangla_house_number: Bhousenumber,
        Bangla_road_number: Broadnumber,
        Bangla_block_number: Bblocknumber,
        Bangla_village_name: Bvillagename,
        Bangla_district_name: Bdistrictname,
        Bangla_police_station: Bpolicestation,
        Bangla_post_office: Bpostoffice
    },{merge:true})
        .then(()=>{
            alert("This NID : "+nationalidnumber+" --->Bangla data has been updated to User list ")
            console.log('Data has been saved successfully !')})
            window.location.replace("user_certificate_form_history.html")
        .catch(error => {
            console.error(error)
        });
});












// const Ename = document.getElementById('Ename');
// const Efathername = document.getElementById('Efathername');
// const Emothername = document.getElementById('Emothername');
// const Emobilenumber = document.getElementById('Emobilenumber');
// const Evoteridnumber = document.getElementById('Evoteridnumber');
// const Ehousenumber = document.getElementById('Ehousenumber');
// const Eroadnumber = document.getElementById('Eroadnumber');
// const Eblocknumber = document.getElementById('Eblocknumber');
// const Evillagename = document.getElementById('Evillagename');
// const Edistrictname = document.getElementById('Edistrictname');
// const Epolicestation = document.getElementById('Epolicestation');
// const Epostoffice = document.getElementById('Epostoffice');
//
// const Bname = document.getElementById('Bname');
// const Bfathername = document.getElementById('Bfathername');
// const Bmothername = document.getElementById('Bmothername');
// const Bmobilenumber = document.getElementById('Bmobilenumber');
// const Bhousenumber = document.getElementById('Bhousenumber');
// const Broadnumber = document.getElementById('Broadnumber');
// const Bblocknumber = document.getElementById('Bblocknumber');
// const Bvillagename = document.getElementById('Bvillagename');
// const Bdistrictname = document.getElementById('Bdistrictname');
// const Bpolicestation = document.getElementById('Bpolicestation');
// const Bpostoffice = document.getElementById('Bpostoffice');
//
// const addBtndetails = document.getElementById('nextBtn');
// const addBtnpicture = document.getElementById('nextBtn2');
//
// const database = firebase.firestore();
//
// const usersCollection = database.collection('users');
//
//
// //add value to firestore database
// addBtndetails.addEventListener('click', e => {
//     //personal-image url link
//
//     e.preventDefault();
//     usersCollection.doc(Evoteridnumber.value).set({
//         English_name: Ename.value,
//         English_father_name: Efathername.value,
//         English_mother_name: Emothername.value,
//         English_mobile_number: Emobilenumber.value,
//         English_voter_ID: Evoteridnumber.value,
//         English_house_number: Ehousenumber.value,
//         English_road_number: Eroadnumber.value,
//         English_block_number: Eblocknumber.value,
//         English_village_name: Evillagename.value,
//         English_district_name: Edistrictname.value,
//         English_police_station: Epolicestation.value,
//         English_post_office: Epostoffice.value,
//
//         Bangla_name: Bname.value,
//         Bangla_father_name: Bfathername.value,
//         Bangla_mother_name: Bmothername.value,
//         Bangla_mobile_number: Bmobilenumber.value,
//         Bangla_house_number: Bhousenumber.value,
//         Bangla_road_number: Broadnumber.value,
//         Bangla_block_number: Bblocknumber.value,
//         Bangla_village_name: Bvillagename.value,
//         Bangla_district_name: Bdistrictname.value,
//         Bangla_police_station: Bpolicestation.value,
//         Bangla_post_office: Bpostoffice.value
//
//     },{merge:true})
//         .then(()=>{
//             console.log('Data has been saved successfully !')})
//         .catch(error => {
//             console.error(error)
//         });
// });
