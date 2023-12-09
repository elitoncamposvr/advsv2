function getChecks() {
    let check = document.querySelectorAll('[name=check]');
    let checkItens = document.querySelectorAll('[name=check]:checked');
    let check_values = [];
    let check_array = [];

    for (let i = 0; i < checkItens.length; i++) {
        check_values = checkItens[i].value;
        check_array.push(check_values);

        document.getElementById('checks_value').value = check_array;
    }

    if(checkItens.length === check.length) {
        document.querySelector('#checkall').checked = true;
    } else{
        document.querySelector('#checkall').checked = false;
    }

}

function toggle(source) {
    let check = document.querySelectorAll('[name=check]');
    let check_values = document.querySelector('#checks_value');
    let check_all = document.querySelector('#checkall');
    let array_check = [];

    if (check_all.checked) {
        for (let i = 0; i < check.length; i++) {
            check[i].checked = source.checked;
            check_values = check[i].value;
            array_check.push(check_values);

            document.getElementById('checks_value').value = array_check;
        }
    } else {
        for (let i = 0; i < check.length; i++) {
            check[i].checked = source.checked;
            check_values = check[i].value;

            document.getElementById('checks_value').value = array_check;
        }
    }

}