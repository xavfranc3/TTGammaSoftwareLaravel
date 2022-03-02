
<h1>Exemple d'importeur de fichier XLSX</h1>

Librairie utilisée pour parser le fichier Xlsx: https://github.com/shuchkin/simplexlsx 

Créer la base de données:
```bash
touch database/database.sqlite
```

Effectuer la migration:
```bash
php artisan migrate
```

Lancer le serveur:
```bash
php artisan serve
```

Charger le fichier à entrer en base de données à l'url:
```bash
http://localhost:8000
```

Le dump de la base de données est à la racine du repository:
```bash
db_dump.csv
```
