<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta name="viewport">

<head>


	<?php wp_head(); ?>
</head>

<body class="font-[noto] max-w-[1500px] mx-auto">
	<div>
		<header>
			<div class="flex mx-4 py-2 justify-between items-center">
				<div>
					<a href="http://seitenwind.local/" class="flex items-center ml-10 text-4xl  ">
						<span class="text-5xl text-[#E20D17]">[</span>
						<span class="text-[#E20D17] pt-4 font-bold text-base">
							<span class="text-black font-bold text-4xl">A</span>security
						</span>
						<span class="text-5xl text-[#E20D17]">]</span>
					</a>
				</div>
				<div class="mt-4">
					<div class="flex gap-1 mr-32 ">
						<div class="flex p-2 bg-[#E20D17]">
							<button class="flex justify-center">
								<img src="<?php echo get_theme_file_uri('/images/phone.svg')  ?>" alt="phone" />
							</button>
						</div>
						<div class="flex p-2 bg-[#615B5C]">
							<button class="cursor-pointer">
								<img src="<?php echo get_theme_file_uri('/images/email.svg')  ?>" alt="email" />
							</button>
						</div>
						<div class="flex p-2 bg-[#9C9B9B]">
							<button class="cursor-pointer" id="navButton">
								<img src="<?php echo get_theme_file_uri('/images/bars.svg')  ?>" alt="Navigation" />
							</button>
						</div>
					</div>
				</div>
			</div>
			<?php include('template-parts/nav.php') ?>
		</header>
		<div id="content" class="site-content flex-grow text-white">
			<?php if (is_front_page()) { ?>
			<?php } ?>
		</div>