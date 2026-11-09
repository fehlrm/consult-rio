<?php
use App\Paciente;
include('../includes/cabecalho.php');
include('../includes/menu.php');
include('../includes/rodape.php');
$pacientes = Paciente::listar();
?>
<main class="container">
    <h1 class="text-center">Lista de Pacientes</h1>
    <div class="text-end my-2">
        <button class="btn btn-success">Novo Paciente</button>
        <a href="/consultorio/view/paciente/cadastrar.php">
            <button class="btn btn-success">Novo Paciente</button>
        </a>
    </div>
    <table class="table table-hover">
        <thead class="table-primary">
@@ -25,25 +27,25 @@
            </tr>
        </thead>
        <tbody>
<?php
    foreach($pacientes as $paciente){
        echo "<tr>
        <td>".$paciente->nome."</td>
        <td>".$paciente->cpf."</td>
        <td>".date("d/m/Y",strtotime($paciente->data_nascimento))."</td>
        <td>".$paciente->telefone."</td>
        <td>".$paciente->email."</td>
        <td>".$paciente->endereco."</td>
        <td>".$paciente->convenio."</td>
        <td>".$paciente->observacao."</td>
        <td><a href='editar.php?id=".$paciente->id."'>
            <?php
            foreach ($pacientes as $paciente) {
                echo "<tr>
        <td>" . $paciente->nome . "</td>
        <td>" . $paciente->cpf . "</td>
        <td>" . date("d/m/Y", strtotime($paciente->data_nascimento)) . "</td>
        <td>" . $paciente->telefone . "</td>
        <td>" . $paciente->email . "</td>
        <td>" . $paciente->endereco . "</td>
        <td>" . $paciente->convenio . "</td>
        <td>" . $paciente->observacao . "</td>
        <td><a href='editar.php?id=" . $paciente->id . "'>
            <button class='btn btn-primary'>Editar</button></a></td>
        <td><a href='/consultorio/action/action_paciente.php?action=excluir&id=".$paciente->id."'>
        <td><a href='/consultorio/action/action_paciente.php?action=excluir&id=" . $paciente->id . "'>
            <button class='btn btn-danger'>Excluir</button></a></td>
        </tr>";
    }
?>
            }
            ?>
        </tbody>
    </table>
    <div class="pb-5"></div>
</main>    
</main>