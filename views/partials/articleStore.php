<?php
require __DIR__ . '/../../database/db.php';
include_once __DIR__ . '/../../components/functions.php';
include_once __DIR__ . '/form.php';
?>

<div class="container py-5">
    <div class="row">
        <?php foreach($filteredArray as $element){ ?>
            <div class="col-6 my-3">
                <div class="card p-3 h-100" >
                  <div class="row g-0">
                    <div class="col-md-4 position-relative">
                        <img src="<?php echo $element->image ?>" class="img-fluid rounded-start" alt="...">
                        <div class="position-absolute" style="top:10px;left:0px;font-size:1.5rem"> 
                            <?php echo $element->getAnimalType() ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h6 class="text-secondary"><?php echo $element->marca ?></h6>
                        <h5 class="card-title"><?php echo $element->Article ?></h5>
                        <p class="card-text"><i><?php echo $element->desc ?></i></p>
                        <div class="row">
                            <?php if( isset($element->peso)) : ?>
                                <?php echo '<div class="col-6">'.$element->peso.'g.</div>' ?>
                             <?php endif; ?>
                            <div class="col-6">
                                <h6>
                                    <?php echo $element->getPrice() ?>
                                </h6>
                            </div>
                            <?php if (($element->genres == 'cibo' or $element->genres == 'cura')) :?>
                                <p class="expiration">
                                    <?php echo $element->setExpiration($element) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php if(empty($filteredArray)) : ?>
        <div class="text-center">
            <p>
                <i>
                    Nessun Risultato
                </i>
            </p>
        </div> 
    <?php endif; ?>
</div>