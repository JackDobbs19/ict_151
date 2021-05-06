$(function() {
    $("#alert").on("click", ".close",function (){
            $("#alert").css("display", "none");
        }
    );
});

function message(data, form_name){
    $("#alert .message").html(data.message.text);
    $("#alert").removeClass().addClass("alert").addClass("alert-" + data.message.type).css("display", "block");

    if(data.reponse === true) {
        $("#" + form_name).trigger("reset");
        if(form_name === "inscription_form"){
            $("#news_letter").prop("checked", false);
        }
    }
}
