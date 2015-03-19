daringfireball.net/projects/markdown/syntax
pragprog
# iesa-2015-m1dt 

#Liste de code 
* code commençant par 1 : information
* code commençant par 2 : Succès
* code commençant par 3 : Redirection
* code commençant par 4 : Erreur du client 
* code commençant par 5 : Erreur du serveur / du serveur d'application



#GitHub

* Supprimer un fichier : git rm + chemin vers le fichier
* Git pull : récuperer les modifications faite sur github 
* mkdir pour rajouter un fichier
* cd .. pour revenir à la racine du dossier
* cd + le glisser-deposer du fichier pour rentrer 
* git checkout . pour supprimer la précedente sauvegarde
* pour travailler à partir de mon ordinateur pour cela il faut commencer par faire un mkdir ensuite créer un nouveau fichier abec cd avec le nom du fichier (important ne pas oublier de mettre un espace entre le cd et le nom du fichier et ensuite il faut faire git clone.

#JavaScript

* Google Map : mettre des dimensions dans la div
* pour les commentaires en javascript // pour une ligne et /**/ pour plusieurs lignes
* ECMAScript est un langage de programmation de type script standardisé par Ecma International dans le cadre de la spécification ECMA-262. Il s'agit donc d'un standard, dont les spécifications sont mises en œuvre dans différents langages de script, comme JavaScript ou ActionScript, ainsi qu'en C++ (norme 2011). C'est un langage de programmation orienté prototype.
* Le script est souvent vers la fin du script 
* <script src="#" /> feuille distante
* Una variable ne peut pas commencer par un chiffre. Camel Case pour deux noms comme nom de variable
* On n'est pas obligé de mettre un var pour definir une nouvelle valeur
* CASE SENSITIVE 
* une varible peut avoir plusieurs types (numérique,float,booléen,string)
* condition : avec les if, les for, while
* struture du if : if (condition (doit être soit vrai ou faux)){}
* on peut mettre plusieurs variable dans une console.log avec console.log(a+" "+b) ou console.log(a,b);
* il y a plusieurs consoles .error,debug,warn,info


* Les opérateurs logiques :

	+	opérateur d'addition	Ajoute deux valeurs	
	-	opérateur de soustraction	Soustrait deux valeurs	
	*	opérateur de multiplication	Multiplie deux valeurs	
	/	plus: opérateur de division	Divise deux valeurs	
	=	opérateur d'affectation	Affecte une valeur à une variable	x=3	Met la valeur 3 dans la variable 
	%	opérateur modulo	Retourne le reste de la division entière de l'opérande de gauche par celle de droite

* Les opérateurs de comparaison :

== opérateur d'égalité	Compare deux valeurs et vérifie leur égalité	
===	opérateur d'identité	Vérifie l'identité de valeur et de type de deux valeurs	a===b	
!=	opérateur de différence	Vérifie qu'une variable est différente d'une valeur 	
!==	opérateur de non identité	Vérifie la non identité de valeur et de type de deux valeurs, c'est-à-dire si les deux valeurs n'ont pas la même valeur ou bien sont de types différents
<	opérateur d'infériorité stricte	Vérifie qu'une variable est strictement inférieure à une valeur 	
<=	opérateur d'infériorité	Vérifie qu'une variable est inférieure ou égale à une valeur 
>	opérateur de supériorité stricte	Vérifie qu'une variable est strictement supérieure à une valeur 	
>=	opérateur de supériorité	Vérifie qu'une variable est supérieure ou égale à une valeur 	


* Le point virgule n'est pas obligé pour les if 
* Entre les accolades il y a un bloc de code
* On peut enchainer les if  mais ce n'est pas bien
* Syntaxe if(){} else if(){} et else 

##boucle
 *syntaxe de la boucle while 
 while(condition){
 il faut pas oublier de mettre un ++
}

* syntaxe de la boucle do while
do{}while(condition){}

* syntaxe de la boucle for 
for (var i=1; i<10; i++){console.log(i)}
deux instructions avec break et continue (mais cela n'est pas recommandable)

##functions
* les parametres pouvent avoir le même nom vu qu'ils sont dans des functions différentes
* Ne pas oublier de mettre des parametres entre virgule

#CSS
* text-indent : permet l'indentation de la première ligne
* letter-spacing: les espaces entre les lettres
* pour les raccourcis (ex: padding : 10px(top), 20px(right), 15px(bottom), 20px(left))
* important lorsqu'il y a pas de px la valeur prend celui de son opposé
* le border n'est pas le même suivant le navigateur

#PHP
*echo permet d'afficher 
*Les variables sont créée à partir l'un "$"
* global permet à la fonction de voir les variables en dehors de la fonction
* Les variables dynamique = $$ 
* les constantes ne peut etre modifié. normalement elles sont en maj. Pour definir une constante il faut mettre define.
*le mot-clé const = 
*Les types de données
9 types en php
type scalaire = booleen, interger,float,string
type composes = array, object
type speciaux = resource et NULL
var_dump(le type de variable + valeur)
gettype = type de variable
=> permet de faire des égales
pour creer un tableau, il faut utiliser array ()
exemple avec $[] pour rajouter un element dans un tableau.
on peut faire des tableaux dans des tableaux 