const userIdneg = document.getElementById('userIdeng').innerHTML;
const database = firebase.firestore();
const usersCollection = database.collection('users');
const editbtnclickeng =document.getElementById('editbtneng');
console.log(userIdneg);

const queryforeng =usersCollection.where('English_voter_ID','==',userIdneg);
queryforeng.get().then(snapshot => {
    snapshot.forEach(user => {
        document.getElementById("English_name").value=user.data().English_name;
        document.getElementById("English_father_name").value=user.data().English_father_name;
        document.getElementById("English_mother_name").value=user.data().English_mother_name;
        document.getElementById("English_mobile_number").value=user.data().English_mobile_number;
        document.getElementById("voter_id_number_eng").value=user.data().English_voter_ID;
        document.getElementById("English_house_number").value=user.data().English_house_number;
        document.getElementById("English_road_number").value=user.data().English_road_number;
        document.getElementById("English_block_number").value=user.data().English_block_number;
        document.getElementById("English_village_name").value=user.data().English_village_name;
        document.getElementById("English_district_name").value=user.data().English_district_name;
        document.getElementById("English_police_station").value=user.data().English_police_station;
        document.getElementById("English_post_office").value=user.data().English_post_office;

    });
})
    .catch(error => {
        console.error(error);
    });

editbtnclickeng.addEventListener('click', e => {
    e.preventDefault();
    var Bname = document.getElementById('English_name').value;
    var Bfathername = document.getElementById('English_father_name').value;
    var Bmothername = document.getElementById('English_mother_name').value;
    var Bmobilenumber = document.getElementById('English_mobile_number').value;
    var Bhousenumber = document.getElementById('English_house_number').value;
    var Broadnumber = document.getElementById('English_road_number').value;
    var Bblocknumber = document.getElementById('English_block_number').value;
    var Bvillagename = document.getElementById('English_village_name').value;
    var Bdistrictname = document.getElementById('English_district_name').value;
    var Bpolicestation = document.getElementById('English_police_station').value;
    var Bpostoffice = document.getElementById('English_post_office').value;
    var nationalidnumber = document.getElementById('voter_id_number_eng').value;
    console.log(nationalidnumber);

    usersCollection.doc(nationalidnumber).set({
        English_name: Bname,
        English_father_name: Bfathername,
        English_mother_name: Bmothername,
        English_mobile_number: Bmobilenumber,
        English_house_number: Bhousenumber,
        English_road_number: Broadnumber,
        English_block_number: Bblocknumber,
        English_village_name: Bvillagename,
        English_district_name: Bdistrictname,
        English_police_station: Bpolicestation,
        English_post_office: Bpostoffice
    },{merge:true})
        .then(()=>{
            alert("This NID : "+nationalidnumber+" --->English data has been updated to User list ");
            window.location.href="user_certificate_form_history.html";
            console.log('Data has been saved successfully !')})




        .catch(error => {
            console.error(error)
        });
});





