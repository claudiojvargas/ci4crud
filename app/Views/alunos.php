<!DOCTTYPE>
<html lang="pt">
<header>
    <meta chatrset="utf-8"/>
    <title>Alunos</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        h1{
            text-align: center;
        }
        ul.pagination li{
            display: inline;
            margin-right: 10px;
        }

        ul.pagination li a{
            color: #333;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            border:1px solid #cecece;
            
        }

        .active{
            background-color: #cecece;
            color: #fff;
            border-radius: 5px;
        }

        ul.pagination li a:hover:not(.active){
            background-color: #212529;
            color: #fff;
            border-radius: 5px;
            border-color: #212529;
        }

    </style>
    <script>
        function confirmDelete() {
            if(!confirm('Dejesa excluir o registro?')){
                return false;
            }
            return true;
        }
    </script>
</header>
<body>
    <section class="w-50 container">
    <h1>ALUNOS</h1>
    <div class="mb-3">
        <a class="btn btn-outline-primary" href="<?php echo base_url('user/create/'); ?>" role="button"><i class="bi bi-plus-square me-1"></i>Novo Aluno</a>
    </div>
        <table class="table table-hover table-sm">
            <thead>
                <tr class="table-dark">
                    <th scope="col"></th>
                    <th scope="col">NOME</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col"></th>
                <tr>
        </thead>
            <tbody>
                <?php foreach ($alunos as $aluno) : ?>
                    <tr>
                        <td class="align-middle"><img class="rounded-circle my-3" src="<?php echo base_url("assets/upload/image/perfil/{$aluno['img_perfil']}"); ?>" width="50" height="50" /></td>
                        <td class="align-middle"><?php echo $aluno['name'] ?></td>
                        <td class="align-middle"><?php echo $aluno['adress'] ?></td>
                        <td class="align-middle">
                            <a class="btn btn-outline-info me-3" href="<?php echo base_url('user/edit/'.$aluno['id']); ?>" role="button"><i class="bi bi-pencil me-1"></i>Editar</a>
                            <a class="btn btn-outline-danger" href="<?php echo base_url('user/delete/'.$aluno['id']); ?>" role="button" onClick="return confirmDelete()"><i class="bi bi-trash me-1"></i>Excluir</a>
                        </td>
                    <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php echo $pager->links(); ?>
    </section>
</body>
</html>