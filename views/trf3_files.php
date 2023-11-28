<div class="breadcrumb">
    <span class="breadcrumb-title">TRF3 <i class="fa-solid fa-chevron-right px-2"></i> <?php echo $trf3_info['id']; ?> - <?php echo $trf3_info['requerentes']; ?> <i class="fa-solid fa-chevron-right px-2"></i> ARQUIVOS</span>
    <span class="breadcrumb-btns">
        <span>
            <a href="<?php echo BASE_URL; ?>trf3/edit/<?php echo $trf3_info['id']; ?>" class="btn-alert hover:btn-alert--hover"><i class="fa-solid fa-angles-left"></i> Voltar</a>
        </span>
    </span>
</div>

<!-- Button to open the modal -->
<div class="w-full">
    <span class="btn-success hover:btn-success--hover" id="openModalBtn"><i class="fa-solid fa-file-pdf"></i> Enviar Arquivos</span>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <form action="<?php echo BASE_URL; ?>trf3/files_send" method="post" enctype="multipart/form-data">
            <input type="hidden" name="client_id" value="<?php echo $trf3_info['id']; ?>">
            <div class="input-line">
                <div class="w-full bg-slate-200 rounded-md p-2">
                    <label for="doc_name">Nome do Documento</label>
                    <input type="text" name="doc_name" id="doc_name" class="w-full" required>
                </div>
            </div>
            <div class="input-line">
                <div class="w-full bg-slate-200 rounded-md p-2">
                    <label for="image">Documento</label>
                    <input type="file" name="image" id="image" class="w-full" required>
                </div>
            </div>
            <div class="flex justify-center pt-2.5">
                <button type="submit" class="btn-success hover:btn-success--hover">Enviar Arquivo</button>
                <a class="btn-danger hover:btn-danger--hover mx-1.5" id="closeModalBtn">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<div class="grid grid-cols-2 gap-4 pt-4">
    <?php foreach ($images as $image) : ?>
        <div class="flex items-center w-full bg-slate-300 p-3 rounded-md">
            <div class="w-8/12">
                <?php echo $image['doc_name']; ?>
            </div>
            <div class="w-3/12">
                <?php echo date('d/m/Y H:i', strtotime($image['date_send'])); ?>
            </div>
            <div class="w-1/12 text-right">
                <a class="icon hover:icon--hover" href="<?php echo BASE_URL; ?>images/trf3/<?php echo $image['image']; ?>" download><i class="fa-solid fa-download"></i></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/modal.js"></script>