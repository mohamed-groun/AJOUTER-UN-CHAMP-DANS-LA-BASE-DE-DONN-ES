let submitForm = document.querySelector('.form-container')
submitForm.onsubmit = function (event) {
    event.preventDefault()
    let cin=	document.getElementById('cin')
    let nom =	document.getElementById('nom')
    let prenom =	document.getElementById('prenom')
    let age =	document.getElementById('age')


    if (cin.value.trim() == '') {
        alert('cin empty!')
    } else if (nom.value.trim() == '') {
        alert('nom empty!')
    } else if (prenom.value.trim() == '') {
        alert('prenom empty!')
    } else if (age.value.trim() == '') {
        alert('age empty!')
    }
}


