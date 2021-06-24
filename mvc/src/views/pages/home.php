 <?php $render('header'); ?>


<a href="<?=$base;?>/novo">Novo Usuário</a> 
<table border="1" width="100%">
 <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>AÇÕES</th>
 </tr>



 <?php foreach($usuarios as $usuario): ?>
    <tr> <!-- linha -->
        <td><?= $usuario['id'];?> </td>  <!-- coluna -->
        <td><?= $usuario['nome'];?> </td>
        <td><?= $usuario['email'];?> </td>
        <td>
            <a href= "<?=$base;?>/usuario/<?=$usuario['id'];?>/editar"> 
                <img width="22" src="<?=$base;?>/assets/images/edit_icon.png "alt="" />
            </a>   <!-- link editar -->  <!-- no mvc nunca redirecionamos para um arquivo php e sim para uma rota -->
            
            <a href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir" onclick="return confirm ('Tem certeza que quer excluir parça?')"><!-- link excluir -->
            <img width="19" src="<?=$base;?>/assets/images/trash_icon.png "alt="" />
            </a>
        </td>
    </tr>
<?php endforeach; ?>
</table>

<?php $render ('footer'); ?>