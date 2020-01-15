<script>
var plusFormulaire = 0; 
class Formulaire
{    
    constructor(atribus,id,classn,textmodel,boditype)
    {   
        // Création du constructeur avec atribut maximum de 10     
            this._titre = titre ;
            this._id = id ;
            this._classn = classn ;
            this._textmodel = textmodel ;
            this._atribut4 = atribut4 ;


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


            
  // test 
            
    var formulaireliste = [atribus,id,classn,textmodel,atribut4];
    for(var i = 0 ; i<10;i++)
    {
                if(formulaireliste[i]!=undefined) // Si la vaiable n'est pas vide  effectuer  les tache souivantes !! 
            {
                    var paragraph = formulaireliste[i]; // initiation de variable de vérification
                    var regex =  /[a-z-A-Z]/g; // verification de valeur de alphabetiques 
                    var found = paragraph.match(regex); // verifie les valeurs 
                    var _atribus_ = "";
                for(var  i =0 ; i<found.length;i++)
                    {
                        _titre_ = _titre_+found[i]; 
                        // creation d'une nouvelle variable avec des nouveau parametres sans majuscule et caracteres spétiaux 
                    }    
                    var valeurFinalMinus= _titre_.toLowerCase();   
                    console.log(valeurFinalMinus);  

                  

                            





                    // fin du test

            }

    }
    plusFormulaire++;
     // Fin du constructeur avec atribut maximum de 10        
    }
    get atribus() 
    {
        return this._atribus ; 
    }
    get id() 
    {
        return this._id ; 
    }
    get classn() 
    {
        return this._atribut1 ; 
    }
    get textmodel() 
    {
        return this._textmodel ; 
    }
    get atribut4() 
    {
        return this._atribut4 ; 
    }

    // setters
   set atribus(x) 
    {
           this._titre=x; 
    }
   set id(x) 
    {     
           this._atribut1=x;
    }
   set classn(x) 
    {
           this._atribut1 =x;
    }
   set textmodel(x) 
    {
           this._atribut3  =x;
    }
   set atribut4(x) 
    {
           this._atribut4  =x;
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
    

 
    addprincipal("li","contenneur_name"+3,'formulaire_'+plusFormulaire,"","contenneur_name"+10); 
    addprincipal("a","contenneur_name"+112,'formulaire_'+plusFormulaire,"UserName","contenneur_name"+3);

    addprincipal("li","contenneur_name"+4,'formulaire_'+plusFormulaire,"","contenneur_name"+10); 
    addprincipal("input","contenneur_name"+44,"","","contenneur_name"+4); 
    document.getElementById("contenneur_name"+44).setAttribute("type","password") ; 
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