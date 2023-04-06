<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("css/bootstrap.css") ?>">
    <title>Ponto digital</title>
</head>
<body>
<div>
    <h1>HORAS DE TRABALHO:</h1> 
        <table class="table">
         <tr>
             <th>Email</th>
             <th>Faculdade</th>
             <th>Semestre</th>
             <th>Presença</th>
             <th>Atividade do dia</th>
         </tr>
            <?php foreach($usuarios as $usuario): ?>                                   </td>
            <tr>
                <td><?= $usuario['email']?></td>
                <td><?= $usuario['faculdade']?></td>
                <td><?= $usuario['semestre']?></td>
                <td><?= $usuario['presenca']?></td>
                <td><?= $usuario['atividade']?></td>
            </tr>
            <?php endforeach ?>
    </table>
    <h1>BATER PONTO:</h1>

    <?php 
    echo form_open("usuarios/novo");
    
    echo form_label("Nome:","nome");
    echo form_input(array(
        "name"=>"nome",
        "id"=>"nome",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Email:","email");
    echo form_input(array(
        "name"=>"email",
        "id"=>"email",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));
    echo form_label("Senha:","senha");
    echo form_password(array(
        "name"=>"senha",
        "id"=>"senha",
        "class"=>"form-control",
        "maxlength"=>"255"
    ));

    echo form_button(array(
        "class"=>"btn btn-primary",
        "type"=>"submit",
        "content"=>"Casdastrar"
    ));
    echo form_close(); 
    ?>
</div>
</body>
</html>