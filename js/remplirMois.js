 $(document).ready(function(){
    $('#lstVisiteur').change(function(){
        var idVisiteur = document.getElementById("lstVisiteur").value;
        var data={idVisiteur};
        $.ajax({
            type : "POST",
            url: 'http://gsb/?uc=valider&action=selectionnerVisiteur',
            data: data,
            success : function(response){
                $('#lstMois').remove();
                $('#containerMois').html($(response).find('#lstMois'));
            },
            error : function(){
                console.log('error');
            }
        });
    });
 });