const key = require('../key.js')

let data = {
            'records' : [{
                'fields' : {
                    'Name' : '',
                    'Curr' : '',
                    'Categories' : '',
                }
                }]
        }

        const URL = `https://api.airtable.com/v0/appEThACH88noEOih/Products?api_key=${key}`;

        fetch(URL, {
            method: 'POST',
            headers : {'Content-Type': 'application/json'},
            body : JSON.stringify(data),
        })
        .then((response)=>{
            if(response.ok){
                response.json().then((data)=>{
                    console.log(data)
                })
            }
            else{
                console.log('erreur status != 200')
            }
        })
        .catch((error)=>{
            console.log(`Erreur : ${error.message}`)  
        })
        