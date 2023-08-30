<?php
/*
Template Name: Main
*/
?>


<!DOCTYPE html>
<html class="bg-gray-200" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<? bloginfo('template_url'); ?>/assets/icons/favicon.ico" type="image/x-icon" />
    <? wp_head(); ?>
    <title>INCITY</title>
</head>
<body>

    <section class="main w-full h-full">
        <div class="container container-promo bg-center bg-no-repeat bg-cover p-[2rem] rounded-2xl h-[45rem] sm:h-[40rem] md:h-[50rem] lg:h-[60rem] mt-8">
            <header class="w-full h-[10rem] flex justify-between items-center">
                <div class="w-[18rem] sm:w-[24rem] xl:w-[28rem] h-[4rem] sm:h-[6rem] xl:h-[8rem]">
                    <? echo get_custom_logo(); ?>
                </div>
                <div class="w-[17rem] h-[10rem] flex justify-end sm:justify-center items-center">
                    <button 
                        type="button" 
                        class="header-button"
                        data-te-toggle="modal"
                        data-te-target="#exampleModal"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[4rem] h-[4rem]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                    </button>
                    <!-- Modal -->
                    <div
                        data-te-modal-init
                        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                    >
                        <div
                            data-te-modal-dialog-ref
                            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[650px]"
                        >
                            <div
                                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                <div
                                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                <!--Modal title-->
                                <h5
                                    class="text-[2rem] lg:text-[2.2rem] font-main font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                    id="exampleModalLabel">
                                    <?php  the_field('contacts_title'); ?>
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
                                    class="h-16 w-16">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                            <!--Modal body-->
                            <div class="relative flex-auto p-4 font-main font-normal text-neutral-800 text-[1.4rem] lg:text-[1.6rem]" data-te-modal-body-ref>
                                <p>
                                    <?php the_field('contacts_info'); ?>
                                </p>
                            </div>

                            <!--Modal footer-->
                            <div
                                class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50"
                            >
                                <button
                                    type="button"
                                    class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 w-[9rem] h-[3rem] text-lg font-bold uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                                    data-te-modal-dismiss
                                    data-te-ripple-init
                                    data-te-ripple-color="light">
                                    Закрыть
                                </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="max-w-[120rem] max-h-[45rem] flex flex-col sm:flex-row justify-between items-center m-auto mt-[4rem]">
                <div class="flex flex-col gap-[2rem] items-start w-[24rem] md:w-[30rem] lg:w-[45rem]">
                    <h1 class="font-main font-extrabold text-center sm:text-left text-[2rem] md:text-[2.2rem] lg:text-[2.8rem] xl:text-[3.2rem] text-white"><?= the_field('title_promo'); ?></h1>
                    <p class="font-main font-semibold text-[1.4rem] hidden sm:block md:text-[1.6rem] lg:text-[2rem] xl:text-[2.2rem] text-white">
                        <?= the_field('text_promo'); ?> 
                    </p>
                </div>
                <div class="w-[24rem] sm:w-[30rem] md:w-[40rem] lg:w-[50rem] xl:w-[60rem] mt-[2rem] sm:mt-0">
                    <img src="<?= the_field('pic_promo'); ?>" alt="wifi-bus">
                </div>
            </div>
        </div>