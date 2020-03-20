const fname = document.getElementById('form-name');
const fsuggest = document.getElementById('form-suggest');
const qnext = document.getElementById('form-qnext');
fname.addEventListener('input', event => {
    let err = document.getElementById('form-nameError');
    if (fname.validity.valid) {
        fname.style.borderBottomColor = 'white';
        qnext.disabled = false;
        err.classList.remove('show');
    } else {
        fname.style.borderBottomColor = 'red';
        qnext.disabled = true;
        err.classList.add('show');
    }
});
fsuggest.addEventListener('input', event => {
    let err = document.getElementById('form-suggestError');
    if (fsuggest.validity.valid) {
        fsuggest.style.borderBottomColor = 'white';
        qnext.disabled = false;
        err.classList.remove('show');
    } else {
        fsuggest.style.borderBottomColor = 'red';
        qnext.disabled = true;
        err.classList.add('show');
    }
});