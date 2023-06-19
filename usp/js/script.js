//STICKY NAVBAR
const header = document.querySelector("header");
window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 100);
});

//HAMBURGER MENU FOR SMALLER SCREENS
let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
};

//CONFIRM PASSWORD
function check() {
    if (document.getElementById('newPass').value == document.getElementById('conNewPass').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password matched';
        document.getElementById('confirmBtn').disabled = false;
    } 
    else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password does not match';
        document.getElementById('confirmBtn').disabled = true;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Get the pop-up element
    var popup = document.querySelector('.popup');
    
    // Check if the pop-up exists
    if (popup) {
        // Set a timeout to remove the pop-up after 2 seconds
        setTimeout(function() {
            popup.remove();
        }, 5000); // 5 seconds = 5000 milliseconds
    }
});