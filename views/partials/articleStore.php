<?php
require __DIR__ . '/../../database/db.php'

?>

<div class="container py-5">
    <div class="row">
        <?php foreach($arrayArticoli as $element){ ?>
            <div class="col-6">
                <div class="card mb-3">
                  <div class="row g-0">
                    <div class="col-md-4 position-relative">
                        <img src="<?php echo $element->image ?>" class="img-fluid rounded-start" alt="...">
                        <div class="position-absolute" style="top:10px;left:10px;font-size:1.5rem"> 
                            <?php echo $element->getAnimalType() ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $element->Article ?></h5>
                        <p class="card-text"><?php echo $element->desc ?></p>
                        <div class="row">
                            <div class="col-6"><?php echo $element->peso ?> g.</div>
                            <div class="col-6"><?php echo $element->getPrice() ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>