<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edição</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <div class="w-25 container mt-5">
        <?php echo form_open_multipart('user/store'); ?>
        <form class="form-group">
            <div class="text-center mb-3"><img class="rounded-circle" src="<?php echo isset($aluno['img_perfil']) ? base_url("assets/upload/image/perfil/{$aluno['img_perfil']}"): base_url("assets/upload/image/perfil/avatar.jpg"); ?>" width="150" height="150" /></div>
            <label for="name">Nome</label>
            <input type="text" name="name" value="<?php echo isset($aluno['name']) ? $aluno['name'] : '' ?>" id="name" class="form-control mt-2 mb-3" require>
            <label for="adress">Endereço</label>
            <input type="text" name="adress"  value="<?php echo isset($aluno['adress']) ? $aluno['adress'] : '' ?>" id="adress" class="form-control mt-2 mb-3" require>
            <label for="img-perfil">Nova foto de Perfil</label>
            <input type="file" accept="image/jpeg" name="img_perfil" id="img-perfil" class="form-control mt-2 mb-3" require>
            
            <input type="hidden" name="perfil_img" value="<?php echo isset($aluno['img_perfil']) ? $aluno['img_perfil'] : '' ?>">
            <input type="hidden" name='id' value="<?php echo isset($aluno['id']) ? $aluno['id'] : '' ?>">
            
            <input type="submit" value="Salvar" class="btn btn-outline-success mt-3">
        </form>
        <?php echo form_close(); ?>
    </div>
    
</body>
</html>