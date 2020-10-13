const Ename = document.getElementById('Ename');
const Efathername = document.getElementById('Efathername');
const Emothername = document.getElementById('Emothername');
const Emobilenumber = document.getElementById('Emobilenumber');
const Evoteridnumber = document.getElementById('Evoteridnumber');
const Ehousenumber = document.getElementById('Ehousenumber');
const Eroadnumber = document.getElementById('Eroadnumber');
const Eblocknumber = document.getElementById('Eblocknumber');
const Evillagename = document.getElementById('Evillagename');
const Edistrictname = document.getElementById('Edistrictname');
const Epolicestation = document.getElementById('Epolicestation');
const Epostoffice = document.getElementById('Epostoffice');
const Edateofbirth = document.getElementById('Edateofbirth');
const date = moment().format("YYYY-MM-DD");
const time = moment().format("hh:mm:ss a");
const Bname = document.getElementById('Bname');
const Bfathername = document.getElementById('Bfathername');
const Bmothername = document.getElementById('Bmothername');
const Bmobilenumber = document.getElementById('Bmobilenumber');
const Bhousenumber = document.getElementById('Bhousenumber');
const Broadnumber = document.getElementById('Broadnumber');
const Bblocknumber = document.getElementById('Bblocknumber');
const Bvillagename = document.getElementById('Bvillagename');
const Bdistrictname = document.getElementById('Bdistrictname');
const Bpolicestation = document.getElementById('Bpolicestation');
const Bpostoffice = document.getElementById('Bpostoffice');

const addBtndetails = document.getElementById('nextBtn');
const addBtnpicture = document.getElementById('nextBtn2');

const database = firebase.firestore();

const usersCollection = database.collection('users');


//add value to firestore database
addBtndetails.addEventListener('click', e => {
    //personal-image url link

    e.preventDefault();
        usersCollection.doc(Evoteridnumber.value).set({
            English_name: Ename.value,
            English_father_name: Efathername.value,
            English_mother_name: Emothername.value,
            English_mobile_number: Emobilenumber.value,
            English_voter_ID: Evoteridnumber.value,
            English_house_number: Ehousenumber.value,
            English_road_number: Eroadnumber.value,
            English_block_number: Eblocknumber.value,
            English_village_name: Evillagename.value,
            English_district_name: Edistrictname.value,
            English_police_station: Epolicestation.value,
            English_post_office: Epostoffice.value,
            English_date_of_birth: Edateofbirth.value,
            last_certificate_issue: "",
            data_issue_date: date,
            data_issue_time: time,
            Bangla_name: Bname.value,
            Bangla_father_name: Bfathername.value,
            Bangla_mother_name: Bmothername.value,
            Bangla_mobile_number: Bmobilenumber.value,
            Bangla_house_number: Bhousenumber.value,
            Bangla_road_number: Broadnumber.value,
            Bangla_block_number: Bblocknumber.value,
            Bangla_village_name: Bvillagename.value,
            Bangla_district_name: Bdistrictname.value,
            Bangla_police_station: Bpolicestation.value,
            Bangla_post_office: Bpostoffice.value

    },{merge:true})
        .then(()=>{
            console.log('Data has been saved successfully !')})
        .catch(error => {
            console.error(error)
        });
});
