<div class="breadcrumb">
    <span class="breadcrumb-title">Agendamentos</span>
</div>


<?php if ($schedule_list) : ?>
    <div class="table-header">
        <div class="w-4/12">Nome</div>
        <div class="w-2/12">Data</div>
        <div class="w-4/12">Motivo do contato</div>
        <div class="w-1/12">Tipo</div>
        <div class="w-1/12 flex justify-end">Ação</div>
    </div>
    <?php foreach ($schedule_list as $list) : ?>
        <div class="table-data hover:bg-slate-200">
            <div class="w-4/12"><?php echo $list['client_name']; ?></div>
            <div class="w-2/12"><?php echo $list['schedule_date']; ?></div>
            <div class="w-4/12"><?php echo $list['reason']; ?></div>
            <div class="w-1/12"><?php echo $list['client_type']; ?></div>
            <div class="w-1/12 flex justify-end">
                <a href="<?php echo BASE_URL; ?>schedule/edit/<?php echo $list['id']; ?>">Ver</a>
            </div>
        </div>
    <?php endforeach; ?>

    <?php if ($p_count > 1) { ?>
        <div class="pagination">
            <a class="pagination-item" href="<?php echo BASE_URL; ?>schedule?p=1">Primeira</a>
            <?php
            for ($q = $p - 5; $q <= $p - 1; $q++) {
                if ($q >= 1) { ?>
                    <a class="pagination-item" href="<?php echo BASE_URL; ?>schedule?p=<?php echo $q; ?>"><?php echo $q; ?></a>
            <?php }
            } ?>
            <div class="pagination-item pg-active"><?php echo "$q"; ?></div>
            <?php for ($q = $p + 1; $q <= $p + 5; $q++) {
                if ($q <= $p_count) { ?>
                    <a class="pagination-item" href="<?php echo BASE_URL; ?>schedule?p=<?php echo $q; ?>"><?php echo $q; ?></a>
            <?php }
            }
            ?>
            <a class="pagination-item" href="<?php echo BASE_URL; ?>schedule?p=<?php echo $p_count; ?>">Última</a>
        </div>

    <?php } ?>

<?php else : ?>
    <div class="flash_info my-x">
        <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
    </div>
<?php endif; ?>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/delete-users.js"></script>