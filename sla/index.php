<?php include("cabecalho.php") ?>
 
<h1>📌 Tarefas</h1>
<a href="novo-formulario.php" class="btn btn-primary">Adicionar Tarefa</a>

<table class="table">
    <tr>
        <th>&nbsp;</th>
        <th>ID</th>
        <th>Título</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </tr>
    <?php
    include("conexao.php");
    $sql = "select * from tarefas order by status asc, id desc";
    $resultado = mysqli_query($conexao, $sql);

    while($umaTarefa = mysqli_fetch_assoc($resultado)):
    ?>
        <tr>
            <td>
                <?php
                if($umaTarefa['status'] == 0){
                ?>
                    <a href='editar-salvar.php?id=<?php echo $umaTarefa['id'] ?>' class="btn">✅</a>
                <?php    
                }
                ?>
            </td>
            <td><?php echo $umaTarefa['id']; ?></td>
            <td><?php echo $umaTarefa['titulo']; ?></td>
            <td><?php echo $umaTarefa['descricao']; ?></td>
            <td>
                <?php 
                if($umaTarefa['status'] == 1){
                    echo "Completo";
                }else{
                    echo "Pendente";
                } 
                ?>
            
            </td>
            <td>
                <a href="excluir.php?id=<?php echo $umaTarefa['id']?>" class="btn">❌</a>
            </td>
        </tr>
        
        

    <?php    
    endwhile;
    ?>

</table>







<?php include("rodape.php") ?>