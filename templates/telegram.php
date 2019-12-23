<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
	        <div class="col">
						<i class="fab fa-telegram mr-2"></i><?php echo _("Configure Telegram"); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.card-header -->
      <div class="card-body">
        <?php $status->showMessages(); ?>
        <h4><?php echo _("Telegram token settings") ;?></h4>
        <form role="form" action="?page=telegram_conf" method="POST">
            <?php echo CSRFTokenFieldTag() ?>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="password"><?php echo _("Telegram token"); ?></label>
              <input type="text" class="form-control" name="telegramtoken"/>
            </div>
          </div>
          <input type="submit" class="btn btn-outline btn-primary" name="UpdateTelegramToken" value="<?php echo _("Save settings"); ?>" />
        </form>
      </div><!-- /.card-body -->
      <div class="card-footer"></div>
    </div><!-- /.card -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
