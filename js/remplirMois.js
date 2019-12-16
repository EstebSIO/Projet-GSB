var visiteur = document.getElementById("lstVisiteur");
 visiteur.addEventListener('change', function() {
       hydrater();
   });

 function hydrater(){
     var idVisiteur = document.getElementById("lstVisiteur").value;
     var data={idVisiteur};
     var lstMois = document.getElementById("lstMois");
     lstMois.innerHTML='';
     $.ajax({
         type : "POST",
         url: './vues/afficheMois.php',
         data: data,
         success : function(data){
             console.log(data);
         },
         error : function(){
             console.log('error');
         }
     });    
 }