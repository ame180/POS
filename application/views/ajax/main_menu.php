<?php
/**
 * Created by PhpStorm.
 * User: Hardner07@gmail.com
 * Date: 6/28/2019
 * Time: 12:28 PM
 */
?>
<div class="row center-content m-4">
    <h1>Lista zamówień</h1>
</div>
<div id="main-menu-table" class="row h-auto overflow-scroll">
    <div class="col-12">
        <div class="row text-center">
            <div class="col-3">
                #
            </div>
            <div class="col-3">
                Stolik
            </div>
            <div class="col-3">
                Godzina
            </div>
        </div>
        <hr class="m-0">
        <?php
        foreach ($orders as $order) {
            $collapse_id = 'order-info-' . $order->order_id ?>
            <div class="row text-center">
                <div class="col" onclick="trigger_collapse('<?= $collapse_id ?>')"><?= $order->order_id ?></div>
                <div class="col" onclick="trigger_collapse('<?= $collapse_id ?>')"><?= $order->order_table ?></div>
                <div class="col" onclick="trigger_collapse('<?= $collapse_id ?>')"><?= $order->order_time ?></div>
                <div class="col">
                    <a onclick="load_order_menu(<?= $order->order_id ?>)" href="#" class="btn btn-primary w-100 h-100 rounded-0">
                        <i class="far fa-sticky-note"></i>
                    </a>
                </div>
                <div class="col-12 collapse text-left" id=<?= $collapse_id ?>>
					<div class="m-2">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
						squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
						sapiente ea proident.
					</div>
                    <div class="row no-gutters">
                        <div class="col-4">
                            <a href="#" class="btn btn-primary w-100 rounded-0">
                                <i class="far fa-sticky-note text-light"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="btn btn-danger w-100 rounded-0">
                                <i class="far fa-sticky-note text-light"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="btn btn-warning w-100 rounded-0">
                                <i class="far fa-sticky-note text-light"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="m-0">
            <?php
        }
        ?>
    </div>
</div>
<div class="row h-auto fixed-bottom center-content">
    <div class="col-8 col-sm-6">
        <div class="input-group mb-3 px-2">
            <input type="text" class="form-control" id="table-input" placeholder="Stolik">
            <div class="input-group-append">
                <button onclick="add_order()" type="button" class="btn btn-primary">Dodaj</button>
            </div>
        </div>
    </div>
</div>
