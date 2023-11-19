function getChecks(){
    let checkItens = document.querySelectorAll('[name=check]:checked');
    let check_values = [];
    let check_array = [];

    for (let i = 0; i < checkItens.length; i++){
        check_values = checkItens[i].value;
        check_array.push(check_values);
    
        document.getElementById('checks_value').value = check_array;
    }
}