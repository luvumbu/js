function longeurAll(variable) 
    { 
        // ajout des elements avec le boutton plus  !!!  
        // permet d'ajouter une option de plus a la casse 
        var longeurTotal =variable.length;
        var verificateur = false ; 
        var valeurFinal = "";
        for(var  i = 0 ; i<longeurTotal ; i++ ) 
            {                    
                if(variable[i]=="_")
                      {
                         verificateur = true ; 
                      }
                if(verificateur  == true )
                      {
                         if(variable[i]!="_")
                            {
                                valeurFinal = valeurFinal+variable[i];
                            }           
                      }
            }


                     /*       addprincipal("div","espace__1"+valeurFinal,"","","espace_"+valeurFinal);
                            addprincipal("p","","","ooookk","espace__1"+valeurFinal);

                            addprincipal("div","espace__2"+valeurFinal,"","","espace_"+valeurFinal);
                            addprincipal("p","","","ooookk","espace__2"+valeurFinal);
*/



                            
                            
                            // alert(document.getElementById("q1").className) ; 
                            var qclasName= document.getElementById("q"+valeurFinal) ; //creation d'une variable pour la lissibilite du code
                            qclasName.className = parseInt( qclasName.className ) +1; // encrrementation a la variable  
                            // ajoute plus un au contenue et a la classe egalement                
          } 

function addprincipal(atribus,id,classn,textmodel,boditype,onclick,onkeypress) 
    {                   
            var node = document.createElement(atribus);
            node.setAttribute("id",id);
            node.setAttribute("class",classn);
            node.setAttribute("onclick",onclick);
            node.setAttribute("onkeypress",onkeypress);                  
            if(atribus=="input")
                {
                    node.setAttribute("placeholder",textmodel);
                }
            var textnode = document.createTextNode(textmodel);         // Create a text node
            node.appendChild(textnode);
            if(boditype=="body")
                {
                    document.body.appendChild(node);  //ajoute la valeur dans le body de la page apres tout les elements
                }
            else 
                {
                    document.getElementById(boditype).appendChild(node);  // prend la valeur précedent puis elle ajoute contenue
                }
                   // si le nom de la variable == body  ajouter du contenue dans la totalite de la page si non ajouter au nom demandé                
    }
    function ajoutplus(_this) 
    {        

        if(_this.id=="adds1")// adds1 est le nom de l'id sa permet de veriifier le nom de la variable 
        {
            plusFormulaire ++ ;
            h1vercel ="h1_"+plusFormulaire+"_" ; 
            ulvercel= "ul_"+plusFormulaire+"_" ; 
            livercel ="li_"+plusFormulaire+"_" ; 
            titlevercel = "title"+plusFormulaire+'_';
            descvercel = "title"+plusFormulaire+'_'; 
            idvercell= "contenneur_name_id_"+plusFormulaire+"_";           
            addprincipal("div",idvercell,'formulaire_',"","body"); // crréation d'un element en dernier body
            addprincipal("h1",h1vercel,h1vercel,"Formulaire",idvercell); 
            addprincipal("ul",ulvercel,ulvercel,"",idvercell); 
            addprincipal("li_ttl_",livercel+"0",livercel,"",idvercell); 
            document.getElementById(livercel+"0").setAttribute("style","list-style: none");                     
            addprincipal("input",livercel+"_t",livercel,"Formulaire sans titre ",livercel+"0");
            addprincipal("li_des",livercel+"00",livercel+"_d","",idvercell);            
            addprincipal("input",livercel,livercel,"Description",livercel+"00"); 
            document.getElementById(livercel+"00").setAttribute("style","list-style: none"); 
            addprincipal("div","all"+plusFormulaire,"","",idvercell);

            
            addprincipal("div","sec"+plusFormulaire ,"sec","",idvercell);
            addprincipal("div","secA_"+plusFormulaire,"","","sec"+plusFormulaire ); 
            addprincipal("i","fas fa-plus-circle _"+plusFormulaire,"fas fa-plus-circle","","secA_"+plusFormulaire,"ajoutplus(this)",""); 
            addprincipal("div","secB_"+plusFormulaire,"","","sec"+plusFormulaire);
            addprincipal("i",h1vercel+"3_","fa fa-remove","","secB_"+plusFormulaire);
            addprincipal("p","q"+plusFormulaire,"0","","secB_"+plusFormulaire);


            


 

        }
        else 
        {     
          longeurAll(_this.id) ;
        }
    }
  