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
                    <img src="../assets/img/portofolio-1-mockup.jpg" alt="" class="h-full w-full object-cover" />
                </figure>

                <article class="prose mt-6 dark:prose-invert xl:prose-lg prose-headings:font-medium prose-blockquote:border-primary lg:mt-10">
                    <h2 class="text-primary">Redesign XXI Cinema Apps</h2>
                    <h3 class="font-semibold">Project overview</h3>
                    <p>
                    Redesign Cinema XXI Apps is a mobile application designed for
                    Simplify the process of ordering cinema tickets. this application
                    intended for film viewers who are looking for a way that
                    practical and efficient for booking seats,
                    explore movie options, and access showtimes.
                    </p>
                    <h4 class="font-semibold">The problem:</h4>
                    <blockquote>
                        <p>
                        Users experience Difficulty finding broadcast schedules
                        book tickets efficiently, and get the desired seat.
                        </p>
                    </blockquote>
                    <h4 class="font-semibold">The goal:</h4>
                    <blockquote>
                        <p>
                        Creating intuitive and easy applications
                        used which simplifies the process
                        ticket booking, increasing satisfaction
                        users, and increase ticket sales.
                        </p>
                    </blockquote>

                    <h3 class="font-semibold">User research: Pain Points</h3>

                    <ul>
                        <li>
                        <span class="font-semibold">Navigation : </span> Users are having trouble navigate some screen to order ticket.
                        </li>
                        <li>
                        <span class="font-semibold">Seat Selection : </span>Difficulty in visualize and choose that chair desired.
                        </li>
                        <li>
                        <span class="font-semibold">Payment : </span>Payment process complicated one causing transactions abandoned.
                        </li>
                        <li>
                        <span class="font-semibold">Show Schedule : </span>Lack of information clear broadcast schedule and easy to access.
                        </li>
                    </ul>

                    <h3 class="font-semibold">High-fidelity Mockup</h3>
                    <ul>
                        <li>
                            <h4 class="font-semibold">Before Redesign</h4>
                        </li>
                            <figure class="aspect-video overflow-hidden rounded-lg">
                            <img src="../assets/img/portofolio-1-before.jpg" alt="" class="h-full w-full object-cover" />
                            </figure>
                        <li>
                            <h4 class="font-semibold">After Redesign</h4>
                        </li>
                            <figure class="aspect-video overflow-hidden rounded-lg">
                            <img src="../assets/img/portofolio-1-after.jpg" alt="" class="h-full w-full object-cover" />
                            </figure>
                    </ul>

                    <h3 class="font-semibold">High-fidelity Prototype</h3>
                    <p>
                    The high-fidelity app prototype for Cinema XXI was tested and can be viewed <br><a href="https://www.figma.com/proto/2JOFZIhcy7o9xapT7LJNjW/Coursera-Modul-3?node-id=68-1070&t=96MsFEFZZJCjmOeW-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=68%3A1807&show-proto-sidebar=1"> Prototype View from Figma</a>
                    </p>


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

    <script>
        const startYear = 2020; // Tahun mulai kerja
        const currentYear = new Date().getFullYear();
        const experienceYears = currentYear - startYear;

        document.getElementById('experience-years').textContent = experienceYears;
    </script>

    <script src="../assets/js/preline.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/venobox.min.js"></script>
    <script src="../assets/js/clipboard.min.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>