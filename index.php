<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fachrul Abizar - Personal Website">
    <meta name="keywords" content="fachrul, abizar, fachrulabizar, fachrul abizar, portfolio, portofolio, programmer, fullstack developer, fullstack, developer, aws">
    <meta name="author" content="Fachrul Abizar">
	<title>Fachrul Abizar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="/images/favicon/site.webmanifest">
	<link rel="manifest" href="manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div class="outer">
			<!-- Google Chrome -->
			<div class="infinityChrome">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<!-- Safari and others -->
			<div class="infinity">
				<div> <span></span> </div>
				<div> <span></span> </div>
				<div> <span></span> </div>
			</div>
			<!-- Stuff -->
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
				<defs>
					<filter id="goo">
						<feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
						<feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
						<feBlend in="SourceGraphic" in2="goo" /> </filter>
				</defs>
			</svg>
		</div>
	</div>
	<!-- desktop header -->
	<header class="desktop-header-1 d-flex align-items-start flex-column">
		<nav>
			<ul class="vertical-menu scrollspy">
				<li class="active"><a href="#home"><i class="icon-home"></i>Home</a></li>
				<li><a href="#about"><i class="icon-user"></i>About</a></li>
				<li><a href="#statistics"><i class="icon-chart"></i>Statistics</a></li>
				<li><a href="#skills"><i class="icon-layers"></i>Skills</a></li>
				<li><a href="#experience"><i class="icon-briefcase"></i>Experience</a></li>
				<li><a href="#experience"><i class="icon-graduation"></i>Education</a></li>
				<li><a href="#projects"><i class="icon-list"></i>Projects</a></li>
				<li><a href="#contact"><i class="icon-bubbles"></i>Contact</a></li>
			</ul>
		</nav>
		<!-- site footer -->
		<div class="footer">
			<!-- copyright text --><span class="copyright">Developed by Fachrul Abizar</span>
			<br /> <span class="copyright">&copy;<script>
					document.write(new Date().getFullYear());
				</script> All Rights Reserved</span>
		</div>
	</header>
	<!-- main layout -->
	<main class="content">
		<!-- section home -->
		<section id="home" class="home d-flex align-items-center">
			<div class="container">
				<!-- intro -->
				<div class="intro">
					<!-- avatar image --><img src="images/about/IMG_0552_cropped-min.png" width="150px" alt="Fachrul Abizar" class="mb-4" />
					<!-- info -->
					<h1 class="mb-2 mt-0">Fachrul Abizar</h1> <span>I'm a <span class="text-rotating">Network Engineer, Website Developer, Cloud Engineer</span></span>
					<!-- social icons -->
					<ul class="social-icons light list-inline mb-0 mt-4">
						<li class="list-inline-item"><a href="https://www.linkedin.com/in/fachrul-abizar/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/fachrul.abizar/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="mailto:fachrulabizar@fachrulabizar.id" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/fachrulabizar/" target="_blank"><i class="fa-brands fa-github"></i></a></li>
					</ul>
					<!-- buttons -->
					<div class="mt-4"> <a href="#contact" class="btn btn-default">Hire me</a> </div>
				</div>
				<!-- scroll down mouse wheel -->
				<div class="scroll-down">
					<a href="#about" class="mouse-wrapper"> <span>Scroll Down</span> <span class="mouse">
							<span class="wheel"></span> </span>
					</a>
				</div>
				<!-- parallax layers -->
				<div class="parallax" data-relative-input="true">
					<svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg">
						<path d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z" fill="#FFD15C" fill-rule="evenodd" /> </svg>
					<svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg">
						<path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none" fill-rule="evenodd" /> </svg>
					<svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg">
						<path d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z" fill="#44D7B6" fill-rule="evenodd" /> </svg>
					<svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg">
						<rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C" fill-rule="evenodd" /> </svg>
					<svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg">
						<rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd" /> </svg>
					<svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg">
						<g fill="#FF4C60" fill-rule="evenodd">
							<path d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z" />
							<path d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z" /> </g>
					</svg>
					<svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg">
						<path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none" fill-rule="evenodd" /> </svg>
					<svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg">
						<rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd" /> </svg>
					<svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9" xmlns="http://www.w3.org/2000/svg">
						<path d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z" fill="#6C6CE5" fill-rule="evenodd" /> </svg>
					<svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg">
						<g fill="#44D7B6" fill-rule="evenodd">
							<path d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z" />
							<path d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z" /> </g>
					</svg>
					<svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg">
						<path d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z" fill="#FFD15C" fill-rule="evenodd" /> </svg>
				</div>
			</div>
		</section>
		
		<!-- section about -->
		<section id="about">
			<div class="container">
				<!-- section title -->
				<h2 class="section-title wow fadeInUp">About Me</h2>
				<div class="spacer" data-height="60"></div>
				<div class="row">
					<div class="col-md-3 wow fadeInUp">
						<div class="text-center text-md-left">
							<!-- avatar image --><img src="images/about/IMG_0552_cropped-min.png" width="230px" alt="Fachrul Abizar" /> </div>
						<div class="spacer d-md-none d-lg-none" data-height="30"></div>
					</div>
					<div class="col-md-9 triangle-left-md triangle-top-sm wow fadeInUp">
						<div class="rounded bg-white shadow-blue padding-30">
							<div class="row">
								<!-- about text -->
								<h4 align="justify" justify="inter-word">I am a fullstack developer, experienced in building web applications using React for the frontend, Laravel for the backend, MySQL and PostgreSQL for the database, and deploying them on AWS. With a track record of successful projects, I am skilled in designing, developing, and maintaining efficient and reliable software solutions.</h4>
								<div class="mt-8"> <a href="#contact" class="btn btn-default">CV</a> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- section stats -->
		<section id="statistics">
			<div class="container">
				<!-- section title -->
				<h2 class="section-title wow fadeInUp">Statistics</h2>
				<div class="spacer" data-height="60"></div>
				<div class="row">
					<div class="col-md-12 wow fadeInUp">
						<div class="service-box rounded padding-30 text-center text-light shadow-blue">
							<div class="col-sm">
								<img src="https://ghchart.rshah.org/269abf/anuraghazra" />
								<div class="spacer d-md-none d-lg-none" data-height="10"></div>
							</div>
							<div class="col-sm">
								<img src="https://github-readme-stats.vercel.app/api/top-langs/?username=anuraghazra&layout=compact" />
								<div class="spacer d-md-none d-lg-none" data-height="10"></div>
							</div>
							<div class="col-sm">
								<img src="https://github-readme-stats.vercel.app/api?username=anuraghazra&show_icons=true&show=reviews,prs_merged" />
								<div class="spacer d-md-none d-lg-none" data-height="10"></div>
							</div>
							<div class="col-sm">
								<img src="https://github-readme-streak-stats.herokuapp.com/?user=anuraghazra&" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- section services -->
		<section id="skills">
			<div class="container">
				<!-- section title -->
				<h2 class="section-title wow fadeInUp">Skills</h2>
				<div class="spacer" data-height="60"></div>
				<div class="row">
					<!-- Service Box 1-->
					<div class="col-sm wow fadeInUp">
						<div class="service-box rounded padding-30 text-center text-light shadow-blue" id="serviceBox1" data-index="1"> <img src="images/skills/router.png" width="100" height="100" alt="Service 1" />
							<h3 class="mb-3 mt-0" style="color:#454360">Networking</h3> </div>
						<div id="additionalServiceBox1" class="additional-service-box hidden triangle-up">
							<div class="rounded padding-30 text-left text-light shadow-blue">
								<h4 class="mb-2 mt-0" style="color:#454360">- Routing</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- Switching</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- Subnetting</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- Firewall</h4>
							</div>
						</div>
						<div class="spacer d-md-none d-lg-none" data-height="30"></div>
					</div>
					<!-- Service Box 2-->
					<div class="col-sm wow fadeInUp">
						<div class="service-box rounded padding-30 text-center text-light shadow-blue" id="serviceBox2" data-index="2"> <img src="images/skills/personal-computer.png" width="100" height="100" alt="Service 2" />
							<h3 class="mb-3 mt-0" style="color:#454360">Computer</h3> </div>
						<div id="additionalServiceBox2" class="additional-service-box hidden triangle-up">
							<div class="rounded padding-30 text-left text-light shadow-blue">
								<h4 class="mb-2 mt-0" style="color:#454360">- Troubleshooting</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- Hardware</h4>
							</div>
						</div>
						<div class="spacer d-md-none d-lg-none" data-height="30"></div>
					</div>
					<!-- Service Box 3-->
					<div class="col-sm wow fadeInUp">
						<div class="service-box rounded padding-30 text-center text-light shadow-blue" id="serviceBox3" data-index="3"> <img src="images/skills/cloud-computing.png" width="100" height="100" alt="Service 3" />
							<h3 class="mb-3 mt-0" style="color:#454360">Cloud Computing</h3> </div>
						<div id="additionalServiceBox3" class="additional-service-box hidden triangle-up">
							<div class="rounded padding-30 text-left text-light shadow-blue">
								<h4 class="mb-2 mt-0" style="color:#454360">- AWS</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- GCP</h4>
							</div>
						</div>
						<div class="spacer d-md-none d-lg-none" data-height="30"></div>
					</div>
					<!-- Service Box 4-->
					<div class="col-sm wow fadeInUp">
						<div class="service-box rounded padding-30 text-center text-light shadow-blue" id="serviceBox4" data-index="4"> <img src="images/skills/coding.png" width="100" height="100" alt="Service 4" />
							<h3 class="mb-3 mt-0" style="color:#454360">Web Developer</h3> </div>
						<div id="additionalServiceBox4" class="additional-service-box hidden triangle-up">
							<div class="rounded padding-30 text-left text-light shadow-blue">
								<h4 class="mb-2 mt-0" style="color:#454360">- Laravel</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- React</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- Javascript</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- PHP</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- API</h4>
								<h4 class="mb-2 mt-0" style="color:#454360">- Git</h4>
							</div>
						</div>
					</div>
				</div>
		</section>

		<!-- section experience -->
		<section id="experience">
			<div class="container">
				<!-- section title -->
				<h2 class="section-title wow fadeInUp">Experience & Education</h2>
				<div class="spacer" data-height="60"></div>
				<div class="row">
					<div class="col-md-6 wow fadeInUp">
						<!-- timeline wrapper -->
						<div class="timeline exp bg-white rounded shadow-blue padding-30 overflow-hidden">
							<!-- timeline item -->
							<div class="timeline-container wow fadeInUp blur">
								<div class="content"> <span class="time">April 2023 - Present</span>
									<h3 class="title">PT. Digital Siap Transaksi</h3>
									<p>IT Infrastructure Engineer</p>
								</div>
							</div>
							<!-- timeline item -->
							<div class="timeline-container wow fadeInUp blur">
								<div class="content"> <span class="time">Februari 2021 - Present</span>
									<h3 class="title">Medang Technology Solution</h3>
									<p>Freelance</p>
								</div>
							</div>
							<!-- timeline item -->
							<div class="timeline-container wow fadeInUp blur">
								<div class="content"> <span class="time">August 2020 - November 2020</span>
									<h3 class="title">PT. Swadharma Duta Data</h3>
									<p>Part Time</p>
								</div>
							</div>
							<!-- timeline item -->
							<div class="timeline-container wow fadeInUp blur" data-wow-delay="0.2s">
								<div class="content"> <span class="time">August 2017 - October 2017</span>
									<h3 class="title">PT. Ecosif Multi Kreasi</h3>
									<p>PKL</p>
								</div>
							</div>
							<!-- main line -->
							<span class="line blur"></span>
						</div>
					</div>
					<div class="col-md-6 wow fadeInUp">
						<!-- responsive spacer -->
						<div class="spacer d-md-none d-lg-none" data-height="30"></div>
						<!-- timeline wrapper -->
						<div class="timeline edu bg-white rounded shadow-blue padding-30 overflow-hidden">
							<!-- timeline item -->
							<div class="timeline-container wow fadeInUp">
								<div class="content"> <span class="time">2019 - 2023</span>
									<h3 class="title">Universitas Pamulang</h3>
									<p>S1 Teknik Informatika</p>
									<p>IPK 3.25</p>
								</div>
							</div>
							<!-- timeline item -->
							<div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
								<div class="content"> <span class="time">2016 - 2019</span>
									<h3 class="title">SMK PGRI 31 Legok</h3>
									<p>Teknik Komputer Jaringan</p>
									<p>Nilai Akhir 85.4</p>
								</div>
							</div>
							<!-- main line -->
							<span class="line"></span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- section works -->
		<section id="projects">
			<div class="container">
				<!-- section title -->
				<h2 class="section-title wow fadeInUp">My Projects</h2>
				<div class="spacer" data-height="60"></div>
				<!-- portolio wrapper -->
				<div class="row portfolio-wrapper">
					<?php
					include "project.php";
					?>
				</div>
			</div>
		</section>

		<!-- section contact -->
		<section id="contact">
			<div class="container">
				<!-- section title -->
				<h2 class="section-title wow fadeInUp">Get In Touch</h2>
				<div class="spacer" data-height="60"></div>
				<div class="row">
					<div class="col-md-4 wow fadeInUp">
						<!-- contact info -->
						<div class="contact-info">
							<h3 class="wow fadeInUp">Let's talk about everything!</h3>
							<p class="wow fadeInUp">Don't like forms? Send me an <a href="mailto:fachrulabizar@fachrulabizar.id">email</a>.</p>
						</div>
					</div>
					<div class="col-md-8">
						<!-- Contact Form -->
						<form id="contact" class="contact-form mt-6" method="post" action="https://formspree.io/f/mlekrqkv">
							<div class="messages"></div>
							<div class="row">
								<div class="col-md-6 wow fadeInUp">
									<!-- Name input -->
									<div class="form-group">
										<input type="text" class="form-control shadow-blue" name="name" id="name" placeholder="Your name" required="required" data-error="Name is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-6 wow fadeInUp">
									<!-- Email input -->
									<div class="form-group">
										<input type="email" class="form-control shadow-blue" name="email" id="email" placeholder="Email address" required="required" data-error="Email is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12 wow fadeInUp">
									<!-- Subject input -->
									<div class="form-group">
										<input type="text" class="form-control shadow-blue" name="subject" id="subject" placeholder="Subject" required="required" data-error="Subject is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12 wow fadeInUp">
									<!-- Message textarea -->
									<div class="form-group">
										<textarea name="message" id="message" class="form-control shadow-blue" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<button type="submit" id="submit" class="btn btn-default wow fadeInUp">Send Message</button>
							<!-- Send Button -->
						</form>
						<!-- Contact Form end -->
					</div>
				</div>
			</div>
		</section>
		<div class="spacer" data-height="96"></div>
	</main>
	<!-- Go to top button -->
	<a href="javascript:" id="return-to-top"><i class="icon-arrow-up"></i></a>
	<!-- SCRIPTS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/esm/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/4.0.1/infinite-scroll.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.7.0/validator.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Morphext/2.4.4/morphext.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/custom.js"></script>
    <script>
        // Register the Service Worker for PWA
        if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js')
            .then(() => console.log('Service Worker registered successfully.'))
            .catch(error => console.log('Service Worker registration failed:', error));
        }
    </script>
</body>
</html>