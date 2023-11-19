<div class="breadcrumb">
    <span class="breadcrumb-title">Usuários <i class="fa-solid fa-chevron-right px-2"></i> Permissões <i class="fa-solid fa-chevron-right px-2"></i> Grupo de Permissões</span>
    <span class="breadcrumb-btns">
        <span class="px-2">
            <a href="<?php echo BASE_URL; ?>users/permissions_create_group" class="btn hover:btn-hover"><i class="fa-solid fa-plus"></i> Novo Grupo de Permisssão</a>
        </span>
        <span>
            <a href="<?php echo BASE_URL; ?>users/permissions" class="btn hover:btn-hover"><i class="fa-solid fa-key"></i> Lista de Permissões</a>
        </span>
    </span>
</div>

<div class="table-header">
    <div class="w-5/6">
        Grupo de Permissão
    </div>
    <div class="w-1/6"></div>
</div>

<?php foreach ($permissions_groups_list as $p) : ?>
    <div class="table-data">
        <div class="w-5/6">
            <?php echo $p['name']; ?>
        </div>
        <div class="w-1/6 text-center">
            <a class="px-2" href="<?php echo BASE_URL; ?>users/permissions_edit_group/<?php echo  $p['id']; ?>"><i class="fas fa-edit"></i></a>
            <a href="<?php echo BASE_URL; ?>users/permissions_destroy_group/<?php echo  $p['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i></a>
        </div>
    </div>
<?php endforeach; ?>