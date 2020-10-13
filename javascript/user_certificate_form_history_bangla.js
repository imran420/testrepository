const database = firebase.firestore();
const usersCollection = database.collection('users');

const userList = document.querySelector('#user-list-view-bangla');
function rendervoterlist(user){
    let li = document.createElement('li');
    let divcontainer =document.createElement('div');
    let tdname = document.createElement('div');
    let tdidnumbeer = document.createElement('div');
    let tdlastcertificateissue = document.createElement('div');
    let tddob = document.createElement('div');
    let tddetails = document.createElement('a');
    let tdedit = document.createElement('a');

    divcontainer.setAttribute("class","list_flex");
    tdname.setAttribute("class","list_flex_value");
    tddob.setAttribute("class","list_flex_value");
    tdlastcertificateissue.setAttribute("class","list_flex_value");
    tdidnumbeer.setAttribute("class","list_flex_value");
    tddetails.setAttribute("class","list_flex_value");
    tdedit.setAttribute("class","list_flex_value");


    li.setAttribute('data-id', user.id);
    tdname.textContent = user.data().Bangla_name;
    tdidnumbeer.textContent = user.data().English_voter_ID;
    tdlastcertificateissue.textContent = user.data().last_certificate_issue;
    tddob.textContent = user.data().data_issue_date;
    tddetails.textContent = "Details";
    tddetails.href="user_certificate_detail_bangla.php?id="+tdidnumbeer.innerHTML;

    tdedit.textContent = "Edit";
    tdedit.href="new_user_form_edit_section_bangla.php?id="+tdidnumbeer.innerHTML;

    divcontainer.appendChild(tdname);
    divcontainer.appendChild(tdidnumbeer);
    divcontainer.appendChild(tddob);
    divcontainer.appendChild(tdlastcertificateissue);
    divcontainer.appendChild(tddetails);
    divcontainer.appendChild(tdedit);

    li.appendChild(divcontainer);

    userList.appendChild(li);

}
const querylist = usersCollection.limit(10);
querylist.get().then(snapshot => {
    snapshot.forEach(user => {
        rendervoterlist(user);
    });
});





