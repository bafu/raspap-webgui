<div class="row">
<div class="col-lg-12">
  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="col">
          <i class="fas fa-ghost mr-2"></i><?php echo _("Configure Pipeline"); ?>
        </div>
      </div><!-- /.row -->
    </div><!-- /.card-header -->
    <div class="card-body">
      <?php $status->showMessages(); ?>
      <h4><?php echo _("Pipeline settings") ;?></h4>
      <form role="form" action="?page=pipeline_conf" method="POST">
        <?php echo CSRFTokenFieldTag() ?>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="cbxpipeline"><?php echo _("Sensitivity") ;?></label>
                <?php
                  SelectorOptions('pipeline', $sensitivities, $arrPipelineConfig['default'], 'cbxpipeline');
                ?>
              </div>
            </div>


            <input type="submit" class="btn btn-outline btn-primary" name="SavePipelineSettings" value="<?php echo _("Save settings"); ?>" />
      </form>
    </div><!-- /.card -->
  <div class="card-footer"></div>
</div><!-- /.col-lg-12 -->
</div><!-- /.row -->
