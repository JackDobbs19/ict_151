$(function (){
    $(".auth").change(function (){
        var status = false
        if($(this).is(":checked")){

            status = true
        }
        //console.log("click Personne : " + $(this).attr("id_per") + " Fonction : " + $(this).attr("id_fnc"));

        $.post(
            "./json/add_del_fnc_per.json.php?_=" + Date.now(),
            {
                id_fnc : $(this).attr("id_fnc"),
                id_per : $(this).attr("id_per"),
                status : status
            }
        )
    });
});