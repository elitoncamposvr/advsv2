const modal = document.getElementById('myModal');
const btn = document.getElementById('openModalBtn');
const span = document.getElementById('closeModalBtn');

btn.onclick = function () {
    modal.style.display = 'flex';
};


span.onclick = function () {
    modal.style.display = 'none';
};


window.onclick = function (event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};