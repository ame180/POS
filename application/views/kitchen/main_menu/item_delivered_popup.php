<div class="popup-bg center-content">
	<div class="popup">
		<h1 class="p-5">Czy potwierdzasz odebranie dania?</h1>
		<div class="row no-gutters text-light">
			<div class="col-6">
				<a onclick="item_delivered(<?= $order_item_id ?>); close_popup()"
				   class="p-4 btn btn-primary w-100 h-100 rounded-0"><h3>Tak</h3></a>
			</div>
			<div class="col-6">
				<a onclick="close_popup()" class="p-4 btn btn-danger w-100 h-100 rounded-0"><h3>Nie</h3></a>
			</div>
		</div>
	</div>
</div>
