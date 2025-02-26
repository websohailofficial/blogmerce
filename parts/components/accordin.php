<?php if (have_rows('accordin')): ?>
  <?php while (have_rows('accordin')): the_row();?>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <?php the_sub_field('accordin_heading');?>
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <?php the_sub_field('accordin_content');?>
            </div>
          </div>
        </div>
      </div>
  <?php endwhile;?>
<?php endif;?>
