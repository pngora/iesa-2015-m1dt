daringfireball.net/projects/markdown/syntax
pragprog

les livres numériques : http://www.liberation.fr/culture/2015/03/05/la-france-sommee-de-relever-la-tva-pour-les-livres-numeriques_1214767

# iesa-2015-m1dt (nom de mon dossier)

pour les \"\" quand on a les doubles cotes
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
* tj etre à la racine

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
* L'interpreteur affiche tj la date de la même façon (voir exo dates.html javascript)
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
phpinfo = pour voir les infos
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
la signature de methode pour la première ligne de la signature
une fonction doit avoir qu'une seule responsabilité
* on ne peut pas mettre deux fois la même plus pour une valeur
*pour les tableaux, il faut mettre des [] pour les afficher.
*IMPORTANT : METTRE DES VERBES DANS LES METHODES 

Explication de la fonction.
* la methode de cette fonction est buildRows, important mettre des VERBES
* Le parametres de la fonction est $titre 
* Ce parametre prend les informations de $tunisiens que nous avons defini en haut et elle fait apparaitre la fonction Important elle dois etre en dehors de la fonction. (appel de la fonction)
* POur finir on fait un echo pour afficher le title du parametre $titre qui a les informations de $tunisiens 
function buildRows($titre){
			/*echo "<ul>";;
			echo "<li>".$titre["title"]."<li>";;
			echo "</ul>";;*/
			foreach ($titre as $key => $value) {
			echo "<li>".$value."<li>";;
			}
		}
       buildRows($tunisiens);;

* Pour le foreach = la syntaxe 
foreach ($variable as $key => $value) {
	
}
	la variable c'est le "nom" du tableau
	la key, c'est le premier "mot" du tableau avant le =>
	et la valeur c'est ceux qui a apres.

*$xml = simplexml_load_string($string); c'est la syntaxe pour ranger des xml
*Parse error: syntax error, unexpected end of file in C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\m1dt\iesa-2015-m1dt\06_php\03_form\bad_form.php on line 26
C'est une erreur de php donc reprendre tt les règles de php pour comprendre

pour faire une redirection sur php <?php

	header('Location: index.php?nom='.$_POST["nom"].'&prenom='.$_POST["prenom"]);

?>

Ne pas oublier le . pour le plus

Ne pas retourner le set pour les dates