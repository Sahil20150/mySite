burger = document.querySelector('.burger');
navlist = document.querySelector('.navlist');
rightnav = document.querySelector('.rightnav');
navbar = document.querySelector('.navbar');


burger.addEventListener('click', () => {

    navbar.classList.toggle('h-nav-resp');
    navlist.classList.toggle('v-nav-resp');
    rightnav.classList.toggle('v-nav-resp');



})


function sendEmail() {

    var params = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,

    };
   

    emailjs.send("service_ug3f6ct","template_je9jzlj" ,params)
        .then((res) => {
            document.getElementById("name").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";
            console.log(res);
            alert("success");

        })
        .catch((err) => console.log(err));
}

