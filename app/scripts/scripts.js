$(() => {
    bsCustomFileInput.init();
});


//Show function - Regestration
function showlogin(state) {
    document.getElementById('window').style.display = state;
    document.getElementById('gray').style.display = state;
};

function showreg(state) {
    document.getElementById('window').style.display = 'none';
    document.getElementById('gray').style.display = 'none';
    document.getElementById('windowreg').style.display = state;
    document.getElementById('grayreg').style.display = state;
};


