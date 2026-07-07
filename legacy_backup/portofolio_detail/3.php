<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Title -->
    <title>Svei Portofolio</title>

    <!-- Favicon -->
    <link rel="icon" href="../assets/img/logo.svg" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/venobox.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>


<body class="relative h-screen overflow-y-auto overflow-x-hidden bg-light text-dark dark:bg-dark-2 dark:text-light">
    <div class="mx-auto flex max-w-screen-2xl flex-col justify-between gap-4 p-4 lg:gap-6 lg:p-6">
 
    <?php include '../navbar/navbar.php'; ?>

        <main class="grid grid-cols-1 gap-4 lg:gap-6">

            <!-- Article -->
            <div class="rounded-2xl bg-white p-6 bg-white bg-white-glass dark:bg-black dark:bg-black-glass lg:p-10">
                <figure class="aspect-video overflow-hidden rounded-lg">
                    <img src="../assets/img/portofolio-3-mockup.jpg" alt="" class="h-full w-full object-cover" />
                </figure>

                <article class="prose mt-6 dark:prose-invert xl:prose-lg prose-headings:font-medium prose-blockquote:border-primary lg:mt-10">
                    <h2 class="text-primary">Sales Tools PT Powerblock Indonesia</h2>
                    <h3 class="font-semibold">Project overview</h3>
                    <p>
					Sales Tools is a mobile application designed to simplify the product sales process. 
					This application is intended for sales representatives looking for a practical and efficient way to manage sales, 
					explore product options, and access information related to stock and product requirement calculations.
                    </p>

                    <h3 class="font-semibold">Key Features of the Sales Tools Application:</h3>
                    <ul>
                        <li>
                            <h4 class="font-semibold">Articles:</h4>
							<p>Provides a variety of informative articles that help users understand products and effective sales strategies.</p>
                        </li>
						<li>
                            <h4 class="font-semibold">Calculation Tools</h4>
														<p>
							Allows users to monitor and manage product stock in real-time, facilitating better decision-making in sales
							</p>
                        </li>

						                        <li>
                            <h4 class="font-semibold">Before Redesign</h4>
							<p>
							Allows users to monitor and manage product stock in real-time, facilitating better decision-making in sales
							</p>
                        </li>

                            <figure class="aspect-video overflow-hidden rounded-lg">
                            <img src="../assets/img/portofolio-3.1.jpg" alt="" class="h-full w-full object-cover" />
                            </figure>
						    <figure class="aspect-video overflow-hidden rounded-lg">
                            <img src="../assets/img/portofolio-3.2.jpg" alt="" class="h-full w-full object-cover" />
                            </figure>
                    </ul>



                </article>

            </div>
        </main>

    <div class="shapes">
        <div class="fixed -left-1/2 -top-1/2 -z-10 animate-spin-very-slow xl:-left-[20%] xl:-top-1/3">
            <img src="../assets/img/gradient-1.png" alt="" class="" />
        </div>

        <div class="fixed -right-[50%] top-[10%] -z-10 animate-spin-very-slow xl:-right-[15%] xl:top-[10%]">
            <img src="../assets/img/gradient-2.png" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed left-[10%] top-[20%] -z-10">
            <img src="../assets/img/object-3d-1.png" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed bottom-[20%] right-[10%] -z-10">
            <img src="../assets/img/object-3d-2.png" alt="" class="" />
        </div>
    </div>


    <script src="../assets/js/preline.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/venobox.min.js"></script>
    <script src="../assets/js/clipboard.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>