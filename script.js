let typingEffect = new Typed("#multitext", {
    strings: ["Coder", "Designer", "Front-End Developer",],
    loop: true,
    typeSpeed: 100,
    backSpeed: 80,
    backDelay: 1000
})

function send(){
    // console.log ("function call");

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "sahusujeet751@gmail.com",
        Password : "245F8821BE6A067884936862B0E2B59F6F22",
        To : 'kumarmakhan467@gmail.com',
        From : "sahusujeet751@gmail.com",
        // From : document.getElementById("email").value,
        Subject : "New contact form enquiry",
        Body : "Name:" +document.getElementById("name").value
             +  "<br>Mobile:" +document.getElementById("mobile").value
              + "<br>Email:" +document.getElementById("email").value
              +  "<br>Message:" +document.getElementById("message").value
    }).then(
    message => alert("Message send sucessfully")
    );
}