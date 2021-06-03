
document.querySelector('#checkbox').addEventListener('click', () => {
    var e = document.querySelector('#password');
    if(e.getAttribute('type') == 'password'){
        e.setAttribute('type','text');
    }else{
        e.setAttribute('type','password');
    }
})