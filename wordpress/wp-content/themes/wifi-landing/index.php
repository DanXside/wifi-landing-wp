<?php
/*
Template Name: Main
*/
?>


<?php

get_header();

?>

    <div class="container container-how-to p-[2rem] h-[50rem] md:h-[28rem] lg:h-[34rem] m-auto">
        <h2 class="dark-title"><?= the_field('title_how-to'); ?></h2>
        <div class="flex flex-col md:flex-row max-w-[120rem] h-[38rem] md:h-[18rem] lg:h-[20rem] justify-between items-center m-auto mt-[2rem] lg:mt-[3rem]">
            <div class="how-to_item">
                <svg class="h-[4rem] lg:h-[8rem] w-[4rem] lg:w-[8rem] mr-8 md:mr-0 text-black"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="6" cy="17" r="2" />  <circle cx="18" cy="17" r="2" />  <path d="M4 17h-2v-11a1 1 0 0 1 1 -1h14a5 7 0 0 1 5 7v5h-2m-4 0h-8" />  <polyline points="16 5 17.5 12 22 12" />  <line x1="2" y1="10" x2="17" y2="10" />  <line x1="7" y1="5" x2="7" y2="10" />  <line x1="12" y1="5" x2="12" y2="10" /></svg>
                <div class="text-left md:text-inherit w-[18rem] sm:w-[34rem] md:w-full">
                  <h3 class="how-to_item-title"><?= the_field('title_how-to-1'); ?></h3>
                  <p class="how-to_item-descr"><?= the_field('descr_how-to-1'); ?></p>
                </div>
            </div>
            <div class="how-to_item">
                <svg class="h-[4rem] lg:h-[8rem] w-[4rem] lg:w-[8rem] mr-8 md:mr-0 text-black"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M5 12.55a11 11 0 0 1 14.08 0" />  <path d="M1.42 9a16 16 0 0 1 21.16 0" />  <path d="M8.53 16.11a6 6 0 0 1 6.95 0" />  <line x1="12" y1="20" x2="12.01" y2="20" /></svg>
                <div class="text-left md:text-inherit w-[18rem] sm:w-[34rem] md:w-full">
                  <h3 class="how-to_item-title"><?= the_field('title_how-to-2'); ?></h3>
                  <p class="how-to_item-descr"><?= the_field('descr_how-to-2'); ?></p>
                </div>
            </div>
            <div class="how-to_item">
                <svg class="h-[4rem] lg:h-[8rem] w-[4rem] lg:w-[8rem] mr-8 md:mr-0 text-black"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg>
                <div class="text-left md:text-inherit w-[18rem] sm:w-[34rem] md:w-full">
                  <h3 class="how-to_item-title"><?= the_field('title_how-to-3'); ?></h3>
                  <p class="how-to_item-descr"><?= the_field('descr_how-to-3'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-adv rounded-2xl p-8 min-h-[68rem] m-auto">
        <h2 class="dark-title"><?= the_field('adv_title'); ?></h2>
        <div class="w-full min-h-[84rem] sm:min-h-[64rem] xl:min-h-[40rem] flex flex-col justify-between items-center mt-8 sm:mt-24">
            <?php
                global $post;

                $myposts = get_posts([ 
                    'numberposts' => 4,
                    'category_name'    => 'advantages',
                    'post_type' => 'post',
                    'order' => 'ASC',
                    'orderby' => 'date'
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                            <div class="adv__item_<?= the_field('location_block'); ?>">
                                <div class="adv__item_wrap-left group">
                                    <h3 class="adv__item_title"><?= the_title(); ?></h3>
                                    <div class="adv__item_divider"></div>
                                    <p class="adv__item_descr"><?= the_content(); ?></p>
                                </div>
                                <?= the_post_thumbnail('full', 'class=adv-pic') ?>
                            </div>
                        <?php 
                    }
                } 
                wp_reset_postdata(); // Сбрасываем $post
            ?>
        </div>
    </div>
    <div class="container rounded-2xl p-8 m-auto">
        <div class="counter-wrap">
          <div class="counter-item">
            <p class="text-center font-main font-bold text-neutral-800 text-[2.4rem] lg:text-[3rem]">Ежедневно</p>
            <div class="flex gap-10 items-center font-main font-medium text-[2rem] lg:text-[2.6rem] text-[#225378] mt-6">
              <div id="count-1" class="font-bold text-[2.4rem] lg:text-[3rem]">
                <?php
                  global $post;

                  $myposts = get_posts([ 
                      'numberposts' => 1,
                      'category_name'    => 'counters',
                      'post_type' => 'post',
                      'order' => 'ASC',
                      'orderby' => 'date'
                  ]);

                  if( $myposts ){
                      foreach( $myposts as $post ){
                          setup_postdata( $post );
                          ?>
                            <?= the_content(); ?>
                          <?php 
                      }
                  } 
                  wp_reset_postdata(); // Сбрасываем $post
                ?>
              </div>
              <span>ед.</span>
            </div>
            <p class="text-center font-main font-bold text-neutral-800 text-[1.8rem] md:text-[2rem] lg:text-[2.6rem] mt-6">автотранспорта</p>
          </div>
          <div class="counter-item">
            <p class="text-center font-main font-bold text-neutral-800 text-[2.4rem] lg:text-[3rem]">Более</p>
            <div class="flex gap-10 items-center font-main font-medium text-[2rem] lg:text-[2.6rem] text-[#225378] mt-6">
              <div id="count-2" class="font-bold text-[2.4rem] lg:text-[3rem]">
                  <?php
                      global $post;

                      $myposts = get_posts([ 
                          'numberposts' => 1,
                          'category_name'    => 'counters',
                          'post_type' => 'post',
                          'order' => 'DESC',
                          'orderby' => 'date'
                      ]);

                      if( $myposts ){
                          foreach( $myposts as $post ){
                              setup_postdata( $post );
                              ?>
                                <?= the_content(); ?>
                              <?php 
                          }
                      } 
                      wp_reset_postdata(); // Сбрасываем $post
                    ?>
              </div>
              <span>тыс.</span>
            </div>
            <p class="text-center font-main font-bold text-neutral-800 text-[1.8rem] md:text-[2rem] lg:text-[2.6rem] mt-6">пассажиров в день</p>
          </div>
        </div>
    </div>
    <div class="container container-price rounded-2xl p-8 min-h-[102rem] md:min-h-[56rem] lg:min-h-[65rem] xl:min-h-[77rem] m-auto mt-[3rem] bg-[#225378] bg-opacity-90">
        <h2 class="font-main font-bold text-center text-white text-[2.4rem] lg:text-[3rem] mt-4 lg:mt-8">Наши тарифы:</h2>
        <div class="price-wrap">

            <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => 3,
                        'category_name'    => 'tarifs',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'orderby' => 'date'
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                                <div class="price-item">
                                    <div class="w-[8rem] lg:w-[14rem] h-[8rem] lg:h-[14rem]">
                                        <?= the_post_thumbnail(); ?>
                                    </div>
                                    <h3 class="price-title"><?= the_title(); ?></h3>
                                    <div class="price-descr">
                                        <?= the_content() ?? ''; ?>
                                    </div>
                                    <button 
                                    type="button" 
                                    class="price-btn"
                                    data-te-toggle="modal"
                                    data-te-target="#exampleModalCenter"
                                    data-te-ripple-init
                                    data-te-ripple-color="light">Заказать консультацию</button>
                                    <div
                                    data-te-modal-init
                                    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                    id="exampleModalCenter"
                                    tabindex="-1"
                                    aria-labelledby="exampleModalCenterTitle"
                                    aria-modal="true"
                                    role="dialog">
                                    <div
                                        data-te-modal-dialog-ref
                                        class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
                                        <div
                                        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                        <div
                                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                            <!--Modal title-->
                                            <h5
                                            class="text-[2.2rem] font-main font-bold leading-normal text-neutral-800 dark:text-neutral-200"
                                            id="exampleModalScrollableLabel">
                                            Закажите консультацию
                                            </h5>
                                            <!--Close button-->
                                            <button
                                            type="button"
                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                            data-te-modal-dismiss
                                            aria-label="Close">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="h-12 w-12">
                                                <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            </button>
                                        </div>

                                        <!--Modal body-->
                                        <?php echo do_shortcode('[contact-form-7 id="968e4c4" title="Без названия"]'); ?>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <?php 
                        }
                    } 
                    wp_reset_postdata(); // Сбрасываем $post
            ?>
        
        </div>
    </div>

    <div class="container rounded-2xl p-8 bg-transparent m-auto">
        <h2 class="dark-title"><?= the_field('form_title'); ?></h2>
        <div
            class="block max-w-[60rem] rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] m-auto mt-12 dark:bg-neutral-700">
            <?php echo do_shortcode('[contact-form-7 id="47a9453" title="Основная форма"]'); ?>
        </div>
    </div>

    <div class="container container-qna rounded-2xl p-8 min-h-[50rem] m-auto mt-[2rem] lg:mt-[3rem] bg-white">
        <section class="mt-12">
            <h2 class="dark-title"><?= the_field('faq_title'); ?></h2>
            <div id="accordionFlushExample" class="mt-16">
              

              <?php
                global $post;

                $myposts = get_posts([ 
                    'numberposts' => 5,
                    'category_name'    => 'accordeon',
                    'post_type' => 'post',
                    'order' => 'ASC',
                    'orderby' => 'date'
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
              ?>

                  <?php if(get_field('tab_active')) : ?>

                    <div class="rounded-none border border-t-0 border-l-0 border-r-0 border-neutral-200 w-[28rem] sm:w-[60rem] lg:w-[100rem] m-auto">
                      <h2 class="mb-0" id="flush-heading<?= the_field('tab_id'); ?>">
                        <button
                          class="group relative flex w-full items-center rounded-none border-0 py-4 px-5 text-left text-gray-800 text-[1.6rem] font-main font-bold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:text-primary-400"
                          type="button" data-te-collapse-init data-te-target="#flush-collapse<?= the_field('tab_id'); ?>" aria-expanded="false"
                          aria-controls="flush-collapse<?= the_field('tab_id'); ?>">
                          <?= the_title() ?? ''; ?>
                          <span
                            class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-[#8FAEE0] dark:group-[[data-te-collapse-collapsed]]:fill-[#eee]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                          </span>
                        </button>
                      </h2>
                      <div id="flush-collapse<?= the_field('tab_id'); ?>" class="!visible border-0" data-te-collapse-item data-te-collapse-show
                        aria-labelledby="flush-heading<?= the_field('tab_id'); ?>" data-te-parent="#accordionFlushExample">
                        <div class="py-4 px-5 text-neutral-500 dark:text-neutral-300 text-[1.6rem] font-main">
                          <?= the_content() ?? ''; ?>
                        </div>
                      </div>
                    </div>

                  <?php else : ?>

                    <div class="rounded-none border border-l-0 border-r-0 border-t-0 border-neutral-200 w-[28rem] sm:w-[60rem] lg:w-[100rem] m-auto mt-[2rem]">
                      <h2 class="mb-0" id="flush-heading<?= the_field('tab_id'); ?>">
                        <button
                          class="group relative flex w-full items-center rounded-none border-0 py-4 px-5 text-left text-gray-800 text-[1.6rem] font-main font-bold transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:text-primary-400"
                          type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#flush-collapse<?= the_field('tab_id'); ?>"
                          aria-expanded="false" aria-controls="flush-collapse<?= the_field('tab_id'); ?>">
                          <?= the_title() ?? ''; ?>
                          <span
                            class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-[#8FAEE0] dark:group-[[data-te-collapse-collapsed]]:fill-[#eee]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                              <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                            </svg>
                          </span>
                        </button>
                      </h2>
                      <div id="flush-collapse<?= the_field('tab_id'); ?>" class="!visible hidden border-0" data-te-collapse-item
                        aria-labelledby="flush-heading<?= the_field('tab_id'); ?>" data-te-parent="#accordionFlushExample">
                        <div class="py-4 px-5 text-neutral-500 dark:text-neutral-300 text-[1.6rem] font-main">
                          <?= the_content() ?? ''; ?>
                        </div>
                      </div>
                    </div>

                  <?php endif; ?>

              <?php 
                    }
                } 
                wp_reset_postdata(); // Сбрасываем $post
              ?>

            </div>
          </section>
    </div>


<?php

get_footer();

?>
