$(document).ready(() => {

    $(".form-group").on("submit", (event) =>{

        event.preventDefault();

        let login = $("#username").val();
        let pass = $("#password").val();

        if(login.length > 0 && pass.length > 0){
            sessionStorage.setItem("user", login);
            sessionStorage.setItem("password", pass);
            $("#p").html("<b>Log in successful</b>");

            value = 0;

            $("label").hide();
            $("input").hide();
            closePopUp.hide();
            popUp.fadeOut(2700);
            // review.css("display", "true");

        } else {
           alert("CHECK CREDENTIALS");     
        }

    })
})