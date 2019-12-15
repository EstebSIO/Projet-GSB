var visiteur = document.getElementById("lstVisiteur");
 visiteur.addEventListener('change', function() {
       hydrater();
   });

 function hydrater(){  
     //var data={remplirMois:Mois};
     var Mois = $(this).val();
     var idVisiteur = document.getElementById("lstVisiteur").value;
     var lstMois = document.getElementById("lstMois");
     lstMois.innerHTML='';
     $.ajax({
         type : "POST",
         url: 'http://gsb/?uc=valider&action=selectionnerVisiteur',
         data: idVisiteur,
         sucess : function(){
             console.log('gg');
         },
         error : function(){
             console.log('erreur');
         }
     });
     /*$.ajax({
         type : "POST",
         url: '../js.getMois.php',
         data: data,
         sucess : function(){
             console.log('succès');
         },
         error : function(){
             console.log('erreurPHP');
         }
     });
       */

     for(var i = 0; i < Mois.length; i++) {
         var opt = Mois[i];
         var el = document.createElement("option");
         el.textContent = opt;
         el.value = opt;
         lstMois.appendChild(el);
     }
 }