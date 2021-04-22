$(function (){
    $("#fonction_form").validate({
        rules:{
            nom_fnc:{
                required:true,
                minlength:5
            },
            abr_fnc:{
                required: true,
                minlength: 2
            },
            desc_fnc:{
                required:true,
                minlength:20
            }
        },
        messages:{
            nom_fnc: {
                required:"Un nom de fonction est indispensable",
                minlength: "Le nom de la fonction doit être composé de 5 caractères au minimum"
            },
            abr_fnc: {
                required:"Une abréviation de fonction est indispensable",
                minlength: "L'abréviation de la fonction doit être composé de 2 caractères au minimum"
            },
            desc_fnc: {
                required:"Une description de fonction est indispensable",
                minlength: "Le nom de la fonction doit être composé de 20 caractères au minimum"
            }
        },
        submitHandler:function (form){
            console.log("formulaire envoyé");
            $.post(
                "./json/add_fonction.json.php?_=" + Date.now(),
                {
                    nom_fnc:$("#nom_fnc").val(),
                    abr_fnc:$("#abr_fnc").val(),
                    desc_fnc:$("#desc_fnc").val()
                },
                function result (data, status){
                    $("#alert .message").html(data.message.texte);
                    $("#alert").removeClass().addClass("alert").addClass("alert-" + data.message.type).css("display", "block");

                    if(data.reponse) {
                        $("#fonction_form .form-control").val("");
                    }
                }
            )
        }
    });
});