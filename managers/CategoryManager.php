<?php  
 
class CategoryManager extends AbstractManager {  
   
   public function getAllCategories() : array  
{  
    $list = [];  
  
   $query = $this->db->prepare('SELECT * FROM categories'); // Pour accéder à la base de données utilisez $this->db  
   $query->execute();
   $categories = $query->fetchAll(PDO::FETCH_ASSOC);
   $categ = [];
   
   foreach($categories as $categorie)
   {
        $categ = new Categorie($categorie["id"], $categorie["name"], $categorie["slug"], $categorie["description"]);
        $categ->setId($categorie["id"]);
        $categories[] = $categorie;
   }
    return $list;  
}  
  
public function getCategoryBySlug() : Category  
{  
    $category = new Category();  
  
    // Pour accéder à la base de données utilisez $this->db  
  
    return $category;  
}   
}