window.modificautenteRegistrato = (e) => {
    e.preventDefault();
    var nome = $('#nome').val();
    var cognome = $('#cognome').val();
    var residenza = $('#residenza').val();
    var datanascita = $('#datanascita').val();
    var occupazione = $('#occupazione').val();

    if (
        nome === undefined ||
        cognome === undefined ||
        residenza === undefined ||
        datanascita === undefined ||
        occupazione === undefined ||
        nome === '' ||
        residenza === '' ||
        cognome === '' ||
        datanascita === '' ||
        occupazione === '' )
    {
        alert('Riempi tutti i campi');
        return;
    }

    let inputData = {
        nome: nome,
        cognome: cognome,
        residenza:residenza,
        datanascita: datanascita,
        occupazione: occupazione
    };
    debugger;
    startLoading();
    return axios.post(rootUrl + '/api/utente/update', inputData)
        .then(function (response) {
            let data = response.data;
            // handle success
            if (data.success) {
                alert(data.message);
            } else {
                alert(data.error_message);
            }
        })
        .catch(function (error) {
            alert("Errore: " + error);
        })
        .then(function () {
            endLoading();
        });

}

window.modificaDatiAccessoUtenteRegistrato = (e) => {
    e.preventDefault();
    var email = $('#email').val();
    var password = $('#password').val();

    if (
        email === undefined ||
        password === undefined ||
        email === '' ||
        password === '' )
    {
        alert('Riempi tutti i campi');
        return;
    }

    let inputData = {
        email: email,
        password: password
    };

    startLoading();
    return axios.post(rootUrl + '/api/utente/updateAccess', inputData)
        .then(function (response) {
            let data = response.data;
            // handle success
            if (data.success) {
                alert(data.message);
            } else {
                alert(data.error_message);
            }
        })
        .catch(function (error) {
            alert("Errore: " + error);
        })
        .then(function () {
            endLoading();
        });

}




window.disable=(dataClass,idButton)=> {
        var formelements = document.getElementsByClassName(dataClass);
        for (i = 0; i < formelements.length; i++) {
            formelements[i].disabled = true;
        }
        document.getElementById(dataClass).style.display = "block";
        document.getElementById(idButton).style.display = "none";        }

window.enable=(dataClass,idbutton)=> {
    var formelements = document.getElementsByClassName(dataClass);
    for (i = 0; i < formelements.length; i++) {
        formelements[i].disabled = false;
    }
    document.getElementById(dataClass).style.display = "none";
    document.getElementById(idbutton).style.display = "block";
}

