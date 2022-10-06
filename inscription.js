const API_KEY = 'keyd1MFEbjj1STkyT'
const URL = `https://api.airtable.com/v0/appmlNChYw519PUa6/Profiles?api_key=${API_KEY}`;

function inscription() {
let docNom = document.getElementById('nom')
let nom = docNom.value
let docPrenom = document.getElementById('prenom')
let prenom = docPrenom.value    
let docEmail = document.getElementById('email')
let email = docEmail.value
let docPassword = document.getElementById('password')
let password = docPassword.value
let data ={
    'records':[{
        'fields': {
            'Name' : nom,
            'Last Name' : prenom,
            'Email' : email,
            'Password' : password,
        } 
    }]
}

fetch(URL, {
    method: "POST",
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify(data)
})
.then((response) => {
    if(response.ok){
        response.json().then((data) => {
            console.log(data);
            location.replace("http://localhost/airtable/patch/connexion.php");
        })
    }else{
        console.log('Erreur status != 200');
    }
})
}
