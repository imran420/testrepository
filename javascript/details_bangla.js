const userId = document.getElementById('userId').innerHTML;
const database = firebase.firestore();
const usersCollection = database.collection('users');
const query =usersCollection.where('English_voter_ID','==',userId);

query.get().then(snapshot => {
    snapshot.forEach(user => {
        document.getElementById("Bangla_name").innerHTML=user.data().Bangla_name;
        document.getElementById("Bangla_father_name").innerHTML=user.data().Bangla_father_name;
        document.getElementById("Bangla_mother_name").innerHTML=user.data().Bangla_mother_name;
        document.getElementById("Bangla_mobile_number").innerHTML=user.data().Bangla_mobile_number;
        document.getElementById("voter_id_number").innerHTML=user.data().English_voter_ID;
        document.getElementById("Bangla_house_number").innerHTML=user.data().Bangla_house_number;
        document.getElementById("Bangla_road_number").innerHTML=user.data().Bangla_road_number;
        document.getElementById("Bangla_block_number").innerHTML=user.data().Bangla_block_number;
        document.getElementById("Bangla_village_name").innerHTML=user.data().Bangla_village_name;
        document.getElementById("Bangla_district_name").innerHTML=user.data().Bangla_district_name;
        document.getElementById("Bangla_police_station").innerHTML=user.data().Bangla_police_station;
        document.getElementById("Bangla_post_office").innerHTML=user.data().Bangla_post_office;
        // document.getElementById("father").innerHTML=user.data().English_father_name;
    });
})
    .catch(error => {
        console.error(error);
    });