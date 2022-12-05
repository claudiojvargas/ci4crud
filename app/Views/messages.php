<!DOCTTYPE>
<html lang="pt">
<header>
    <meta chatrset="utf-8"/>
    <title>Alunos - AVISOS</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</header>
<body>
    <div class="container mt-5">
        <div class="text-center alert alert-info py-5">
            <h3><?php echo $message; ?></h3>
            <div class="mt-3">
                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>"><i class="bi bi-box-arrow-left me-2"></i>Voltar</a>
            <div>
        </div>
    </div>

</body>
</html>