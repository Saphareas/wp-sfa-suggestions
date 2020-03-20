var qIndex = 1;
            
function nextQ(n) {
    qIndex += n;
    showQ();
}
function showQ() {
    let qs = document.getElementsByClassName("field");                
    if (qIndex > qs.length) {qIndex = qs.length}
    if (qIndex < 1) {qIndex = 1}
    for (i = 0; i < qs.length; i++) {
        qs[i].classList.remove("active");
    }
    qs[qIndex-1].classList.add("active");
    let chn = document.getElementsByClassName('next')[0];
    let chp = document.getElementsByClassName('prev')[0];
    if (qIndex > 1 && qIndex < qs.length) {chn.classList.add("active")}
    else {chn.classList.remove("active")}
    if (qIndex > 2 && qIndex <= qs.length) {chp.classList.add("active")}
    else {chp.classList.remove("active")}
}