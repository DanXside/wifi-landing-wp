        <footer class="bg-neutral-400 text-center text-white mt-[2rem] dark:bg-neutral-600">
            <div class="container pt-9  m-auto">
              <div class="mb-9 flex justify-center">
                <a href="<?= the_field('href_1') ?? ''; ?>" class="mr-9 text-neutral-800 dark:text-neutral-200">
                  <img class="h-11 w-11" src="<?= the_field('icon_1') ?? ''; ?>" alt="icon">
                </a>
                <a href="<?= the_field('href_2') ?? ''; ?>" class="mr-9 text-neutral-800 dark:text-neutral-200">
                  <img class="h-11 w-11" src="<?= the_field('icon_2') ?? ''; ?>" alt="icon">
                </a>
                <a href="<?= the_field('href_3') ?? ''; ?>" class="mr-9 text-neutral-800 dark:text-neutral-200">
                  <img class="h-11 w-11" src="<?= the_field('icon_3') ?? ''; ?>" alt="icon">
                </a>
                <a href="<?= the_field('href_4') ?? ''; ?>" class="mr-9 text-neutral-800 dark:text-neutral-200">
                  <img class="h-11 w-11" src="<?= the_field('icon_4') ?? ''; ?>" alt="icon">
                </a>
                <a href="<?= the_field('href_5') ?? ''; ?>" class="mr-9 text-neutral-800 dark:text-neutral-200">
                  <img class="h-11 w-11" src="<?= the_field('icon_5') ?? ''; ?>" alt="icon">
                </a>
                <a href="<?= the_field('href_6') ?? ''; ?>" class="text-neutral-800 dark:text-neutral-200">
                  <img class="h-11 w-11" src="<?= the_field('icon_6') ?? ''; ?>" alt="icon">
                </a>
              </div>
              <div class="w-[20rem] m-auto mb-6">
                <? echo get_custom_logo(); ?>
              </div>
              <div class="w-[12rem] m-auto mb-6 text-neutral-800 font-main font-bold text-[1.2rem] text-center">
                <?= the_field('phone_number') ?? ''; ?>
              </div>
            </div>
          
            <!--Copyright section-->
            <div
              class="bg-neutral-300 p-4 text-center text-neutral-700 dark:bg-neutral-700 dark:text-neutral-200">
              © 2023 Copyright:
              <a
                class="text-neutral-800 dark:text-neutral-400"
                href="https://tailwind-elements.com/"
                >INCITY</a
              >
            </div>
          </footer>
    </section>
    <? wp_footer(); ?>
</body>
</html>