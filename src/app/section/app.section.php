<script>
var plusFormulaire = 0; 
class Formulaire
{    
    constructor(titre,atribut1,atribut2,atribut3,atribut4,atribut5,atribut6,atribut7,atribut8,atribut9,atribut10)
    {   
        // Création du constructeur avec atribut maximum de 10     
            this._titre = titre ;
            this._atribut1 = atribut1 ;
            this._atribut2 = atribut2 ;
            this._atribut3 = atribut3 ;
            this._atribut4 = atribut4 ;
            this._atribut5 = atribut5 ;
            this._atribut6 = atribut6 ;
            this._atribut7 = atribut7 ;
            this._atribut8 = atribut8 ;
            this._atribut9 = atribut9 ;
            this._atribut10 = atribut10;

            
    var formulaireliste = [titre,atribut1,atribut2,atribut3,atribut4,atribut5,atribut6,atribut7,atribut8,atribut9,atribut10];
    for(var i = 0 ; i<10;i++)
    {
                if(formulaireliste[i]!=undefined) // Si la vaiable n'est pas vide  effectuer  les tache souivantes !! 
            {
                    var paragraph = formulaireliste[i]; // initiation de variable de vérification
                    var regex =  /[a-z-A-Z]/g; // verification de valeur de alphabetiques 
                    var found = paragraph.match(regex); // verifie les valeurs 
                    var _titre_ = "";
                for(var  i =0 ; i<found.length;i++)
                    {
                        _titre_ = _titre_+found[i]; 
                        // creation d'une nouvelle variable avec des nouveau parametres sans majuscule et caracteres spétiaux 
                    }    
                    var valeurFinalMinus= _titre_.toLowerCase();   
                    console.log(valeurFinalMinus);  

                            /*          var adds =0 ; 
                    var node = document.createElement("div");
                    node.setAttribute("id",'contenneur_name'+adds);
                    document.body.appendChild(node);  
                    var node = document.createElement("h1");
                    node.setAttribute("id",'title'+adds);
                    // Create a <li> node
                    var textnode = document.createTextNode(titre);         // Create a text node
                    node.appendChild(textnode);   
                    // Append the text to <li>
                    document.getElementById('contenneur_name'+adds).appendChild(node); */
            }

    }
    plusFormulaire++;
     // Fin du constructeur avec atribut maximum de 10        
    }
    get titre() 
    {
        return this._titre ; 
    }
    get atribut1() 
    {
        return this._atribut1 ; 
    }
    get atribut2() 
    {
        return this._atribut1 ; 
    }
    get atribut3() 
    {
        return this._atribut3 ; 
    }
    get atribut4() 
    {
        return this._atribut4 ; 
    }
    get atribut5() 
    {
        return this._atribut5 ; 
    }
    get atribut6() 
    {
        return this._atribut6 ; 
    }
    get atribut7() 
    {
        return this._atribut7 ; 
    }
    get atribut8() 
    {
        return this._atribut8 ; 
    }
    get atribut9() 
    {
        return this._atribut9 ; 
    }
    get atribut10() 
    {
        return this._atribut10 ; 
    }
    // setters
   set titre(x) 
    {
           this._titre=x; 
    }
   set atribut1(x) 
    {     
           this._atribut1=x;
    }
   set atribut2(x) 
    {
           this._atribut1 =x;
    }
   set atribut3(x) 
    {
           this._atribut3  =x;
    }
   set atribut4(x) 
    {
           this._atribut4  =x;
    }
   set atribut5(x) 
    {
           this._atribut5  =x;
    }
   set atribut6(x) 
    {
           this._atribut6  =x;
    }
   set atribut7(x) 
    {
           this._atribut7  =x;
    }
   set atribut8(x) 
    {
           this._atribut8  =x;
    }
   set atribut9(x) 
    {
           this._atribut9  =x;
    }
   set atribut10(x) 
    {
           this._atribut10 =x ;
    } 

    getenvoyer(x) 
    {
           this._atribut10 =x ;
    }   
}

var myArray = ['Sébastien', 'Laurence', 'Ludovic', 'Pauline', 'Guillaume'];
myArray =["autre"] ; 

myArray[0]= new Formulaire("Lol");
 
// tab2 = new Formulaire("LolXXx");

 
 
 

</script>






 

 

<div class="formulaire_">    
    <h1 class="title_f">
               Inscription
    </h1>
    <ul>
        <li>
               UserNAme 
        </li>
        <li>
            <input type="text"><i class="fa fa-eye-slash etautre" style="margin-left: 15px"></i>
        </li>

        <li>
               Password
        </li>
        <li>
            <input type="password"><i class="fa fa-eye-slash" style="margin-left: 15px"></i>           
        </li>
        <li>
            <input type="submit" class="send" style="margin-top: 20px" value="Envoyer">
        </li>
    </ul>
</div>
<style>
.formulaire_ 
{
    width: 50%;
    margin: auto ; 
    text-align: center ; 
}
.formulaire_ input
{
    padding: 5px ;  
}
.formulaire_ ul li 
{
    list-style: none ; 
}
.send 
{
    background-color: #b7d5b4 ; 
    width: 100px;
    padding: 10px;
}
 </style>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<i class="material-icons" onclick="">add_circle</i>





<script>

    function addprincipal(atribus,id,classn,textmodel,boditype) 
    {                   
                   var node = document.createElement(atribus);
                   node.setAttribute("id",id);
                   node.setAttribute("class",classn);
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
    addprincipal("div","contenneur_name"+0,'formulaire_',"","body"); 
    addprincipal("h1","","","Inscription","contenneur_name"+0); 
    addprincipal("ul","contenneur_name"+10,'formulaire_'+plusFormulaire,"","contenneur_name"+0); 
    addprincipal("li","contenneur_name"+1,'formulaire_'+plusFormulaire,"","contenneur_name"+10); 
    addprincipal("a","contenneur_name"+111,'formulaire_'+plusFormulaire,"UserName","contenneur_name"+1); 

    addprincipal("li","contenneur_name"+2,'formulaire_'+plusFormulaire,"","contenneur_name"+10); 
    addprincipal("input","contenneur_name"+112,'formulaire_'+plusFormulaire,"UserName","contenneur_name"+2);
    addprincipal("i","","fa fa-eye","","contenneur_name"+2);  
    document.getElementById("contenneur_name"+112).setAttribute("type","password") ; 

 
    addprincipal("li","contenneur_name"+3,'formulaire_'+plusFormulaire,"","contenneur_name"+10); 
    addprincipal("a","contenneur_name"+112,'formulaire_'+plusFormulaire,"UserName","contenneur_name"+3);

    addprincipal("li","contenneur_name"+4,'formulaire_'+plusFormulaire,"","contenneur_name"+10); 
    addprincipal("input","","","","contenneur_name"+4); 
    addprincipal("i","","fa fa-eye","","contenneur_name"+4); 
   
 




 

 
  
 
 
    

      
                 
/*
<div class="formulaire_">    
    <h1 class="title_f">
               Inscription
    </h1>
    <ul>
        <li>
               UserNAme 
        </li>
        <li>
            <input type="text"><i class="fa fa-eye-slash etautre" style="margin-left: 15px"></i>
        </li>

        <li>
               Password
        </li>
        <li>
            <input type="password"><i class="fa fa-eye-slash" style="margin-left: 15px"></i>           
        </li>
        <li>
            <input type="submit" class="send" style="margin-top: 20px" value="Envoyer">
        </li>
    </ul>
</div>
*/
</script>

<style>

.fa
{
 
margin-left: 15px;
}

</style>