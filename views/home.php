<p class="py-4 text-center"><span class="font-semibold">Olá</span> <?php echo $username; ?>.</p>

<div class="card-field">
	<a href="<?php echo BASE_URL; ?>tjsp">
		<div class="card-home bg-amber-200">
			<span class="text-center py-2 font-semibold text-lg">
				TJSP
			</span>
			<div class="rounded-md bg-amber-400 text-center py-2">
				<span class="font-semibold">Processos:</span>
				<?php echo $tsjp_count; ?>
			</div>
		</div>
	</a>
	<a href="<?php echo BASE_URL; ?>trf2">
		<div class="card-home bg-slate-200">
		<span class="text-center py-2 font-semibold text-lg">
				TRF2
			</span>
			<div class="rounded-md bg-slate-400 text-center py-2">
				<span class="font-semibold">Processos:</span>
				<?php echo $trf2_count; ?>
			</div>
		</div>
	</a>
	<a href="<?php echo BASE_URL; ?>trf3">
		<div class="card-home bg-red-300">
		<span class="text-center py-2 font-semibold text-lg">
				TRF3
			</span>
			<div class="rounded-md bg-red-500 text-center py-2">
				<span class="font-semibold">Processos:</span>
				<?php echo $trf3_count; ?>
			</div>
		</div>
	</a>
</div>