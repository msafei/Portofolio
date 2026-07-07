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
    <link rel="icon" href="assets/img/logo.svg" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/venobox.min.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
	
		<style>
		
	.image-hover-wrapper {
		position: relative;
		overflow: hidden;
		background-color: #171717; /* Default background color */
		transition: background-color 0.5s ease; /* Smooth transition for background */
	}

	.image-hover-wrapper img {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		transition: opacity 0.5s ease, transform 0.5s ease;
		object-fit: contain;
		object-position: bottom;
	}

	.main-image {
		opacity: 1;
		transform: scale(1);
		z-index: 1;
	}

	.hover-image {
		opacity: 0;
		transform: scale(1.1);
		z-index: 2;
	}

	.image-hover-wrapper:hover {
		background-color: #171717; /* Change background color on hover */
	}

	.image-hover-wrapper:hover .main-image {
		opacity: 0;
		transform: scale(1.1); /* Zoom out */
	}

	.image-hover-wrapper:hover .hover-image {
		opacity: 1;
		transform: scale(1); /* Zoom in */
	}

	</style>
	
</head>


<body class="relative h-screen overflow-y-auto overflow-x-hidden bg-light text-dark dark:bg-dark-2 dark:text-light">
    <div class="mx-auto flex max-w-screen-2xl flex-col justify-between gap-4 p-4 lg:gap-6 lg:p-6">
       
        <?php include './navbar/navbar.php'; ?>
        
        <main class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
            <!-- Intro -->
            <div class="">
                <div class="rounded-2xl bg-white bg-white-glass p-6 dark:bg-black dark:bg-black-glass lg:sticky lg:top-24">
				<div class="image-hover-wrapper aspect-6/4 overflow-hidden rounded-lg bg-light pt-4 text-center">
					<img src="assets/img/profile.jpg" alt="Profile Image" class="main-image h-full w-full scale-110 object-contain object-bottom" />
					<img src="assets/img/alternate.jpg" alt="Alternate Image" class="hover-image h-full w-full scale-125 object-contain object-bottom" />
				</div>	

                    <div class="mt-6">
                        <h3 class="text-2xl font-semibold dark:text-light">Muhamad Safei 👋</h3>
                        <p class="mt-2 text-muted dark:text-light/70">
                            <span class="font-semibold text-dark dark:text-white">
                                    Full Stack Developer 👩🏻‍💻
                                </span>
                                 with
                            <span class="font-semibold text-dark dark:text-white"><span id="experience-years"></span> Years</span>
                            of Experiences. & <span class="font-semibold text-dark dark:text-white">Product Designer 🎨</span> with <span class="font-semibold text-dark dark:text-white">1 year</span> of Experience.
                        </p>
    
                        <!-- CTA buttons -->
                        <div class="mt-6 flex flex-wrap gap-2">
                            <a href="/assets/doc/cv.pdf" download="CV Muhamad Safei.pdf" class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-primary px-6 py-4 font-medium text-white transition hover:bg-orange-600 focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50">
                                <svg viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H12M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.5 15V21M17.5 21L15 18.5M17.5 21L20 18.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                <span>Download CV</span>
                            </a>
                            <button type="button" data-clipboard-text="msafei.ti@gmail.com" data-clipboard-action="copy" data-clipboard-success-text="Copied to clipboard" class="js-clipboard hs-tooltip inline-flex items-center gap-x-2 rounded-lg border border-light bg-transparent px-6 py-4 font-medium text-dark transition [--trigger:focus] hover:bg-light focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-light/70 dark:hover:bg-dark dark:hover:text-white">
                                <svg viewBox="0 0 24 24" fill="none" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 15C4.06812 15 3.60218 15 3.23463 14.8478C2.74458 14.6448 2.35523 14.2554 2.15224 13.7654C2 13.3978 2 12.9319 2 12V5.2C2 4.0799 2 3.51984 2.21799 3.09202C2.40973 2.71569 2.71569 2.40973 3.09202 2.21799C3.51984 2 4.0799 2 5.2 2H12C12.9319 2 13.3978 2 13.7654 2.15224C14.2554 2.35523 14.6448 2.74458 14.8478 3.23463C15 3.60218 15 4.06812 15 5M12.2 22H18.8C19.9201 22 20.4802 22 20.908 21.782C21.2843 21.5903 21.5903 21.2843 21.782 20.908C22 20.4802 22 19.9201 22 18.8V12.2C22 11.0799 22 10.5198 21.782 10.092C21.5903 9.71569 21.2843 9.40973 20.908 9.21799C20.4802 9 19.9201 9 18.8 9H12.2C11.0799 9 10.5198 9 10.092 9.21799C9.71569 9.40973 9.40973 9.71569 9.21799 10.092C9 10.5198 9 11.0799 9 12.2V18.8C9 19.9201 9 20.4802 9.21799 20.908C9.40973 21.2843 9.71569 21.5903 10.092 21.782C10.5198 22 11.0799 22 12.2 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Copy Email</span>
    
                                <span class="hs-tooltip-content invisible z-10 hidden rounded-lg bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100 dark:bg-slate-700"
                                        role="tooltip">
                                        Copied to clipboard
                                    </span>
                            </button>
                        </div>


                    <!-- Social -->
                    <div class="mt-8 flex flex-wrap items-center gap-2">
                        <a href="https://www.linkedin.com/in/msafei/" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 5 1036 990">
                                <path d="M0 120c0-33.334 11.667-60.834 35-82.5C58.333 15.833 88.667 5 126 5c36.667 0 66.333 10.666 89 32 23.333 22 35 50.666 35 86 0 32-11.333 58.666-34 80-23.333 22-54 33-92 33h-1c-36.667 0-66.333-11-89-33S0 153.333 0 120zm13 875V327h222v668H13zm345 0h222V622c0-23.334 2.667-41.334 8-54 9.333-22.667 23.5-41.834 42.5-57.5 19-15.667 42.833-23.5 71.5-23.5 74.667 0 112 50.333 112 151v357h222V612c0-98.667-23.333-173.5-70-224.5S857.667 311 781 311c-86 0-153 37-201 111v2h-1l1-2v-95H358c1.333 21.333 2 87.666 2 199 0 111.333-.667 267.666-2 469z"/>
                            </svg>
                        </a>
                        <a href="https://www.behance.net/savei_" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6" viewBox="0.5 94.187 511 323.626">
                                <path d="M206.729 238.87s48.358-3.59 48.358-60.297c0-56.711-39.563-84.387-89.678-84.387H.5v316.909h164.909s100.671 3.18 100.671-93.537c0 .001 4.389-78.688-59.351-78.688zm-53.19-88.357h11.87s22.416 0 22.416 32.973c0 32.969-13.183 37.749-28.136 37.749H73.161v-70.722h80.378zm7.21 204.257H73.161v-84.69h92.248s33.41-.438 33.41 43.522c0 37.068-24.954 40.888-38.07 41.168zm239.593-179.953c-121.873 0-121.765 121.766-121.765 121.766s-8.362 121.141 121.765 121.141c0 0 108.438 6.195 108.438-84.271h-55.768s1.86 34.068-50.81 34.068c0 0-55.777 3.738-55.777-55.135H510.64c0-.001 17.968-137.569-110.298-137.569zm-54.53 95.263s6.81-48.846 55.769-48.846c48.949 0 48.336 48.846 48.336 48.846H345.812zm117.096-118.199H332.159v-39.025h130.749v39.025z"/>
                            </svg>
                        </a>
                        <a href="https://dribbble.com/_savei" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 1000 1000">
                                <path d="M0 500c0-90.667 22.334-174.333 67-251 44.667-76.667 105.334-137.333 182-182C325.667 22.333 409.334 0 500 0c90.667 0 174.334 22.333 251 67 76.667 44.667 137.334 105.333 182 182 44.667 76.667 67 160.333 67 251s-22.333 174.333-67 251c-44.666 76.667-105.333 137.333-182 182-76.666 44.667-160.333 67-251 67-90.666 0-174.333-22.333-251-67-76.666-44.667-137.333-105.333-182-182C22.334 674.333 0 590.667 0 500zm83 0c0 104 35 195.667 105 275 32-62.667 82.667-122.333 152-179 69.334-56.667 137-92.333 203-107-10-23.333-19.666-44.333-29-63-114.666 36.667-238.666 55-372 55-26 0-45.333-.333-58-1 0 2.667-.166 6-.5 10-.333 4-.5 7.333-.5 10zm13-103c14.667 1.333 36.334 2 65 2 111.334 0 217-15 317-45-50.666-90-106.333-165-167-225-52.666 26.667-97.833 63.667-135.5 111-37.666 47.333-64.166 99.667-79.5 157zm149 432c75.334 58.667 160.334 88 255 88 49.334 0 98.334-9.333 147-28-13.333-114-39.333-224.333-78-331-61.333 13.333-123.166 47-185.5 101C321.167 713 275 769.667 245 829zM398 97c58.667 60.667 113 136.333 163 227 90.667-38 159-86.333 205-145-77.333-64-166-96-266-96-34 0-68 4.667-102 14zm199 298c10 21.333 21.334 48.333 34 81 49.334-4.667 103-7 161-7 41.334 0 82.334 1 123 3-5.333-90.667-38-171.333-98-242-43.333 64.667-116.666 119.667-220 165zm59 151c34 98.667 57 200 69 304 52.667-34 95.667-77.667 129-131 33.334-53.333 53.334-111 60-173-48.666-3.333-93-5-133-5-36.666 0-78.333 1.667-125 5z"/>
                            </svg>
                        </a>
                        <a href="https://github.com/msafei" class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-200 bg-transparent text-center text-slate-600 transition hover:text-primary focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-dark-2 dark:text-slate-500 dark:hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                <path d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10Z" />
                            </svg>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Portfolio -->
            <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
                <div class="">
                    <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">
                        Check Out My <span class="text-primary">Portofolio</span>
                    </h2>
                    <p class="mt-4 text-lg text-muted dark:text-light/70">
                    I'm here to help if you're looking for a full-stack programmer and product designer to bring your idea to life or take your business to the next level.
                    </p>
                </div>

                <!-- Portfolio -->
                <div class="mt-10 lg:mt-14">
                    <div class="mt-6 space-y-6">
                        <div class="">
                            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0 xl:p-10 xl:pb-0">
                                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                                    <img src="assets/img/portofolio-1-mockup.jpg" alt="" class="h-full w-full rounded-t-lg object-cover object-top transition" />

                                    <a href="assets/img/portofolio-1-mockup.jpg" data-gall="project-gallry-1" class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-start justify-between py-4 md:p-6">
                                <div class="">
                                    <h3 class="text-lg font-medium md:text-xl lg:text-2xl">
                                        <a href="portofolio_detail/1" class="border-b border-transparent text-dark transition hover:border-b-primary hover:text-primary dark:text-light/80 dark:hover:text-primary">
                                            Redesign UI/UX - XXI Mobile Apps
                                        </a>
                                    </h3>
                                    <p class="text-sm text-muted lg:text-base">
                                        UI/UX Redesign
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0 xl:p-10 xl:pb-0">
                                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                                    <img src="assets/img/portofolio-2-mockup.jpg" alt="" class="h-full w-full rounded-t-lg object-cover object-top transition" />

                                    <a href="assets/img/portofolio-2-mockup.jpg" data-gall="project-gallry-1" class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-start justify-between py-4 md:p-6">
                                <div class="">
                                    <h3 class="text-lg font-medium md:text-xl lg:text-2xl">
                                        <a href="portofolio_detail/2" class="border-b border-transparent text-dark transition hover:border-b-primary hover:text-primary dark:text-light/80 dark:hover:text-primary">
                                            KeepitBee - Daily Management
                                        </a>
                                    </h3>
                                    <p class="text-sm text-muted lg:text-base">
                                    UI/UX Design Project
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Contact -->
                <div class="mt-10 lg:mt-14">
                    <div class="group flex gap-6 overflow-hidden rounded-lg bg-light p-6 dark:bg-dark-2">
                        <div class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                            <a href="#" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                            <a href="#" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                        </div>
                        <div class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                            <a href="#" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                            <a href="#" class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                                Let's 👋 Work Together
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="shapes">
        <div class="fixed -left-1/2 -top-1/2 -z-10 animate-spin-very-slow xl:-left-[20%] xl:-top-1/3">
            <img src="assets/img/gradient-1.png" alt="" class="" />
        </div>

        <div class="fixed -right-[50%] top-[10%] -z-10 animate-spin-very-slow xl:-right-[15%] xl:top-[10%]">
            <img src="assets/img/gradient-2.png" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed left-[10%] top-[20%] -z-10">
            <img src="assets/img/object-3d-1.png" alt="" class="" />
        </div>

        <div class="move-with-cursor fixed bottom-[20%] right-[10%] -z-10">
            <img src="assets/img/object-3d-2.png" alt="" class="" />
        </div>
    </div>

    <script>
        const startYear = 2020; // Tahun mulai kerja
        const currentYear = new Date().getFullYear();
        const experienceYears = currentYear - startYear;

        document.getElementById('experience-years').textContent = experienceYears;
    </script>

    <script src="./assets/js/preline.js"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/clipboard.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>