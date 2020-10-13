const userId = document.getElementById('userId').innerHTML;
console.log(userId);
const database = firebase.firestore();
const usersCollection = database.collection('users');
const query =usersCollection.where('English_voter_ID','==',userId);

query.get().then(snapshot => {
    snapshot.forEach(user => {
        document.getElementById("English_name").innerHTML=user.data().English_name;
        document.getElementById("English_father_name").innerHTML=user.data().English_father_name;
        document.getElementById("English_mother_name").innerHTML=user.data().English_mother_name;
        document.getElementById("English_mobile_number").innerHTML=user.data().English_mobile_number;
        document.getElementById("voter_id_number_ban").innerHTML=user.data().English_voter_ID;
        document.getElementById("English_house_number").innerHTML=user.data().English_house_number;
        document.getElementById("English_road_number").innerHTML=user.data().English_road_number;
        document.getElementById("English_block_number").innerHTML=user.data().English_block_number;
        document.getElementById("English_village_name").innerHTML=user.data().English_village_name;
        document.getElementById("English_district_name").innerHTML=user.data().English_district_name;
        document.getElementById("English_police_station").innerHTML=user.data().English_police_station;
        document.getElementById("English_post_office").innerHTML=user.data().English_post_office;
        // document.getElementById("father").innerHTML=user.data().English_father_name;
    });
})
    .catch(error => {
        console.error(error);
    });