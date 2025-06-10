# 🎓 School-Express  

**School-Express** est une application web de gestion du stocks développée avec **Laravel** et **MySQL**.qui permet de gérer efficacement les stocks de produits et les informations des employés au sein d’un entreprise (école, établissement , etc.).

---

## ✨ Fonctionnalités principales  

✔️ **Gestion des utilisateurs** (Employées)  
✔️ **Gestion des produits**  
✔️ **Ajout et consultation des catégories**  
✔️ **Authentification sécurisée avec Laravel**  
✔️ **Interface d'administration pour l'admin**  

---

## 🚀 Technologies utilisées  

- **Laravel 10+** (framework PHP)  
- **MySQL** (base de données)  
- **Blade** (moteur de templates Laravel)  
- **Bootstrap / Tailwind CSS** (design de l'interface)  

---

## 📂 Structure du projet  

```
📦 School-Express  
 ┣ 📂 app/Http/Controllers    # Contrôleurs Laravel  
 ┣ 📂 database/migrations     # Migrations de la base de données  
 ┣ 📂 resources/views         # Templates Blade  
 ┣ 📂 routes                 # Définition des routes  
 ┣ 📜 .env                    # Configuration de l'application  
 ┗ 📜 README.md               # Documentation  
```  

---

## ⚙️ Installation et exécution  

### 🛠️ 1. Cloner le projet  
```bash
git clone https://github.com/Mouhlal/School-Express.git
cd myapp
```  

### 🛠️ 2. Installer les dépendances  
```bash
composer install
```  

### 🛠️ 3. Configurer l’environnement  
- Copier le fichier `.env.example` en `.env`  
- Modifier les informations de connexion à la base de données dans `.env` :  
  ```ini
  DB_DATABASE=school_express
  DB_USERNAME=root
  DB_PASSWORD=
  ```  
- Générer la clé d’application :  
  ```bash
  php artisan key:generate
  ```  

### 🛠️ 4. Exécuter les migrations et seeders  
```bash
php artisan migrate --seed
```  

### 🛠️ 5. Lancer le serveur  
```bash
php artisan serve
```  
L'application sera accessible sur : **http://127.0.0.1:8000**  

