$(function (){
    $("#autorisation_form").validate({
        rules:{
            nom_aut:{
                required:true,
                minlength:5
            },
            code_aut:{
                required: true,
                minlength: 3,
                maxlength:4
            },
            desc_adm_aut:{
                required:true,
                minlength:20
            },
            desc_usr_aut:{
                required:true,
                minlength:20
            }
        },
        messages:{
            nom_aut: {
                required:"Un nom d'autorisation est indispensable",
                minlength: "Le nom de l'autorisation doit être composé de 5 caractères au minimum"
            },
            code_aut: {
                required:"Une abréviation d'autorisation est indispensable",
                minlength: "L'abréviation de l'autorisation doit être composé de 3 à 4 caractères",
                maxlength: "L'abréviation de l'autorisation doit être composé de 3 à 4 caractères",
            },
            desc_adm_aut: {
                required:"Une description d'autorisation est indispensable",
                minlength: "Le nom de l'autorisation doit être composé de 20 caractères au minimum"
            },
            desc_usr_aut: {
                required:"Une description d'autorisation est indispensable",
                minlength: "Le nom de l'autorisation doit être composé de 20 caractères au minimum"
            }
        },
        submitHandler:function (form){
            console.log("formulaire envoyé");
            $.post(
                "./json/add_autorisation.json.php?_=" + Date.now(),
                {
                    nom_aut:$("#nom_aut").val(),
                    code_aut:$("#code_aut").val(),
                    desc_adm_aut:$("#desc_adm_aut").val(),
                    desc_usr_aut:$("#desc_usr_aut").val()
                },
                function result (data, status){
                    message(data, "autorisation_form");
                }
            )
        }
    });
});