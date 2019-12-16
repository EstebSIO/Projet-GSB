 $(document).ready(function(){
    $('#lstVisiteur').change(function(){
        var idVisiteur = document.getElementById("lstVisiteur").value;
        var data={idVisiteur};
        var lstMois = document.getElementById("lstMois");
        lstMois.innerHTML='';
        $.ajax({
            type : "POST",
            url: 'http://gsb/?uc=valider&action=selectionnerVisiteur',
            data: data,
            success : function(response){
                $('#containerMois').html($(response).find('#lstMois'));
                remove($('#lstMois'));
            },
            error : function(){
                console.log('error');
            }
        });  
    })
 })