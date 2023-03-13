<?php  
 
class ShopController extends AbstractController {  
  
    private ProductManager $pm;  
    private CategoryManager $cm;  
  
    public function __construct()  
    {  
  
    }  
    public function checkRoute(string $route) : void  
{  
    $routeTab = $this->splitRouteAndParameters($route);  
  
    if() // condition(s) pour envoyer vers la home  
    {  
        // appeler la méthode du controlleur pour afficher la home  
    }  
    else if() // condition(s) pour envoyer vers la liste des produits  
    {  
        // appeler la méthode du controlleur pour afficher les produits  
    }  
    else if() // condition(s) pour envoyer vers la liste des produits d'une catégorie  
    {  
        // appeler la méthode du controlleur pour afficher les produits d'une catégorie  
    }  
    else if() // condition(s) pour envoyer vers le détail d'un produit  
    {  
        // appeler la méthode du controlleur pour afficher le détail d'un produit  
    }  
}
    /* Pour la route de la home */  
    public function categoriesList() : void  
    {  
        $categories = []; // à remplacer par un appel au manager pour récupérer la liste des catégories  
      
        $this->render("index", [  
            "categories" => $categories  
        ]);  
    }
        /* Pour la route /categories/:slug-categorie */  
    public function productsInCategory(string $categorySlug) : void  
    {  
        $products = []; // à remplacer par un appel au manager pour récupérer la liste des produits d'une catégorie  

        $this->render("category", [  
            "products" => $products  
        ]);  
    }
        /* Pour la route /categories/produits */  
    public function productsList() : void  
    {  
        $products = []; // à remplacer par un appel au manager pour récupérer la liste de tous les produits  
      
        $this->render("products", [  
            "products" => $products  
        ]);  
    }
        /* Pour la route /produits/:slug-produit */  
    public function productDetails(string $productSlug) : void  
    {  
        $product = []; // à remplacer par un appel au manager pour récupérer les informations d'un produit  
      
        $this->render("product", [  
            "product" => $product  
        ]);  
    }
}