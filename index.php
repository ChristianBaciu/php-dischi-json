<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- 
    Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
    Stack
    Html, CSS, VueJS (importato tramite CDN), axios, PHP
    Consigli
    Nello svolgere l’esercizio seguite un approccio graduale.
    Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare 
    correttamente con il vostro script PHP (le vostre “API”).
    Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
    Bonus
    Al click su un disco, recuperare e mostrare i dati del disco selezionato.
     -->

</head>
<body>

    <div id="app">
        <h1>prova</h1>
    </div>    

    <!-- vue cdn -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="./js/main.js"></script>
</body>
</html>