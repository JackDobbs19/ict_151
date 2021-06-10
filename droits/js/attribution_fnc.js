$(function (){
    $(".auth").change(function (){
        //console.log("click Personne : " + $(this).attr("id_per") + " Fonction : " + $(this).attr("id_fnc"));

        $.post(
            "./json/add_del_fnc_per.json.php?_=" + Date.now(),
            {
                id_fnc : $(this).attr("id_fnc"),
                id_per : $(this).attr("id_per"),
                status : $(this).is(":checked")
            },
            function (data, status){
                message(data, "");
            }
        )
    });
});