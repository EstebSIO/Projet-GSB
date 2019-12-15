    var visiteur = document.getElementById("lstVisiteur");
    visiteur.addEventListener('change', function() {
          hydrater();
      });

    function hydrater(){  
        var idVisiteur = document.getElementById("lstVisiteur").value;
        var lstMois = document.getElementById("lstMois");
        lstMois.innerHTML='';
        var Mois = [Math.random(), Math.random(), Math.random()]


        for(var i = 0; i < Mois.length; i++) {
            var opt = Mois[i];
            var el = document.createElement("option");
            el.textContent = opt;
            el.value = opt;
            lstMois.appendChild(el);
        }
    }
