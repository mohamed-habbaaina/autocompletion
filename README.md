# autocompletion
# Descriptif du projet

L’outil de barre de recherche est un outil très utilisé sur les sites. Elle englobe un élément
très important : l’autocomplétion.
L’autocomplétion va permettre de faire une recherche plus ou moins précise selon son
paramétrage. Il s’agit du mécanisme qui permet de proposer à l’utilisateur des résultats
pour sa recherche, en fonction de ce qu’il tape dans l’input. Les résultats s’adaptent à
chaque fois que l’utilisateur entre un caractère supplémentaire.
# Création d'une base de données “autocompletion”:
Dans cette base de données, créez une table qui possède des informations sur le thème de Plages dans le sud français.
# notre site va contenir les pages suivantes :
- Une page d’accueil (index.php) :
Cette page va ressembler à la page d’accueil d’un moteur de recherche.
- Une page de résultats de recherche (recherche.php/?search=) :
Cette page présente une liste des éléments qui correspondent à search présent dans
GET.
- Une page présentant un élément (element.php/?id=) :
Cette page présente les informations contenues dans la base de données qui
correspondent à l’id présent dans GET.
Le header des pages va contenir une barre de recherche. Cette barre de recherche
suggère des résultats liés au fur et à mesure que l’utilisateur écrit, divisés en deux
parties :
- En premier : les résultats qui correspondent exactement à la recherche (qui
commencent par ce que l’utilisateur écrit)
- En second : les résultats qui contiennent la recherche de l’utilisateur

Ces deux parties doivent se trouver dans la même liste, mais une petite séparation doit
se trouver entre les deux.