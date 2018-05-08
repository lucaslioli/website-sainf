<div id="inscricoesContainer" class="container-fluid"> 
		<div class="divisor">
			<div class="title-section"><i class="fa fa-edit" aria-hidden="true"></i> INSCRIÇÕES</div>
		</div>
		<div class="text-center">
			<?php if($prazo_evento > $agora): ?>
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd3XlniOHAY2LUiIp0oer2j4ClgAMzS6IPsqvERfGei-IKFgg/viewform?embedded=true" width="100%" height="1730px" frameborder="0" marginheight="0" marginwidth="20" scrolling="no">Carregando…</iframe>
			<?php else: ?>
				<h3>Prazo de inscrição encerrado!</h3>
			<?php endif; ?>
		</div><!--
			--><div id="maratona" class="menu-height"></div>
</div>