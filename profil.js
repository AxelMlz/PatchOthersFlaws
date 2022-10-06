const API_KEY = 'keyd1MFEbjj1STkyT'
const URL = `https://api.airtable.com/v0/appmlNChYw519PUa6/Profiles?api_key=${API_KEY}`;

function patchProfil(id) {

    let docNom = document.getElementById('nom')
    let nom = docNom.value
    let docPrenom = document.getElementById('prenom')
    let prenom = docPrenom.value    
    let docEmail = document.getElementById('email')
    let email = docEmail.value
    let docPassword = document.getElementById('password')
    let password = docPassword.value
    let docConfirmePassword = document.getElementById('confirmePassword')
    let confirmePassword = docConfirmePassword.value
    let docAdresse = document.getElementById('adresse')
    let adresse = docAdresse.value
    let docVille = document.getElementById('ville')
    let ville = docVille.value

    let data ={
        'records':[{
            'id': id,
            'fields': {
                'Name' : prenom,
                'Last Name' : nom,
                'Email' : email,
                'Password' : password,
                'Address' : adresse,
                'City' : ville,
            } 
        }]
    }
    if (password == confirmePassword){
    fetch(URL, {
        method: "PATCH",
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    })
    .then((response) => {
        if(response.ok){
            response.json().then((data) => {
                console.log(data);
            })
        }else{
            console.log('Erreur status != 200');
        }
    })
    }else {
        alert('Error message: les 2 mots de passe sont pas identique veuillez réessayer');
        console.log('erreur de mots de passe')
    }
}