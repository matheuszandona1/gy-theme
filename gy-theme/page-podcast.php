<?php

// Template Name: Podcast

get_header();
?>

<div class="page--podcast">
	<main class="podcast">
		<?php get_template_part('components/topo', 'conteudos'); ?>
		<div class="podcast__container">
			<div class="podcast__container--destaque">
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1UyCYTsnhUd4C0u5FSYPIF?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
			</div>
			<div class="podcast__container--postagens">
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/5tnp5eB12kiDvjx6tTY0A9?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1JNfoCqMdjUKgrpHWGU3y9?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/0cFUX3iV7OFoFEWULmGGLK?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
			</div>
			<div class="podcast__container--info text-center">
				<p>Quinzenalmente, trazemos convidados e experts para um bate-papo sobre energia e suas várias ramificações: energia limpa, renovável, sustentável e as inovações na área energética.</p>
				<p><strong>Ouça agora na sua plataforma preferida:</strong></p>
				<div class="buttons">
					<a href="" target="_blank" class="button  button--lighten">
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.0879 0C5.4637 0 0.0878906 5.37581 0.0878906 12C0.0878906 18.6242 5.4637 24 12.0879 24C18.7121 24 24.0879 18.6242 24.0879 12C24.0879 5.37581 18.7121 0 12.0879 0ZM16.9605 17.6565C16.7572 17.6565 16.6314 17.5935 16.4427 17.4823C13.4234 15.6629 9.91047 15.5855 6.44112 16.2968C6.25241 16.3452 6.00563 16.4226 5.86531 16.4226C5.39596 16.4226 5.10079 16.05 5.10079 15.6581C5.10079 15.1597 5.39595 14.9226 5.75886 14.8452C9.72176 13.9694 13.7718 14.0468 17.2266 16.1129C17.5218 16.3016 17.696 16.471 17.696 16.9113C17.696 17.3516 17.3524 17.6565 16.9605 17.6565ZM18.2621 14.4823C18.0105 14.4823 17.8411 14.371 17.6669 14.279C14.6427 12.4887 10.1331 11.7677 6.12176 12.8565C5.8895 12.9194 5.7637 12.9823 5.54596 12.9823C5.02821 12.9823 4.60725 12.5613 4.60725 12.0435C4.60725 11.5258 4.85886 11.1823 5.35725 11.0419C6.70241 10.6645 8.0766 10.3839 10.0895 10.3839C13.2298 10.3839 16.2637 11.1629 18.654 12.5855C19.046 12.8177 19.2008 13.1177 19.2008 13.5387C19.196 14.0613 18.7895 14.4823 18.2621 14.4823ZM19.7621 10.7952C19.5105 10.7952 19.3556 10.7323 19.1379 10.6065C15.6927 8.55 9.53305 8.05645 5.54596 9.16935C5.37176 9.21774 5.15402 9.29516 4.92176 9.29516C4.28305 9.29516 3.79434 8.79677 3.79434 8.15323C3.79434 7.49516 4.20079 7.12258 4.63628 6.99677C6.3395 6.49839 8.24595 6.26129 10.3218 6.26129C13.854 6.26129 17.5556 6.99677 20.2605 8.57419C20.6379 8.79194 20.8847 9.09194 20.8847 9.66774C20.8847 10.3258 20.3524 10.7952 19.7621 10.7952Z" fill="#266400" />
						</svg>
						<span>Spotify</span>
					</a>
					<a href="" target="_blank" class="button  button--lighten">
						<svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.6621 12.6827C16.6516 10.7162 17.5259 9.23204 19.2958 8.13898C18.3055 6.69765 16.8096 5.90465 14.8344 5.74926C12.9645 5.59923 10.9208 6.85839 10.1728 6.85839C9.38271 6.85839 7.57076 5.80284 6.14859 5.80284C3.20944 5.85106 0.0859375 8.1872 0.0859375 12.9399C0.0859375 14.3437 0.338767 15.7939 0.844428 17.2906C1.51864 19.2571 3.95213 24.0794 6.49096 23.999C7.81832 23.9669 8.7559 23.0399 10.4836 23.0399C12.1586 23.0399 13.0277 23.999 14.5078 23.999C17.0677 23.9615 19.2694 19.5786 19.912 17.6068C16.4777 15.9618 16.6621 12.7845 16.6621 12.6827ZM13.6808 3.88464C15.1188 2.1486 14.9871 0.56796 14.945 0C13.6756 0.0750136 12.206 0.878731 11.3685 1.86998C10.4467 2.93089 9.90417 4.24363 10.02 5.72247C11.3948 5.82963 12.6484 5.11164 13.6808 3.88464Z" fill="#266400" />
						</svg>
						<span>apple podcasts</span>
					</a>
					<a href="" target="_blank" class="button  button--lighten">
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#clip0_2048_24407)">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.9141 0C6.28641 0 0.914062 5.37234 0.914062 12C0.914062 18.6277 6.28641 24 12.9141 24C19.5417 24 24.9141 18.6277 24.9141 12C24.9141 5.37234 19.5417 0 12.9141 0ZM15.9998 7.31344H18.8264V8.96297H15.9998V7.31344ZM18.8264 9.61031V11.2608H15.9998V9.61031H18.8264ZM15.4111 11.9058V13.5544H12.5845V11.9058H15.4111ZM9.16875 9.61078H11.9939V11.2598H9.16875V9.61078ZM8.57953 15.8545H5.75297V14.2036H8.57953V15.8545ZM11.9948 15.8545H9.16828V14.2036H11.9948V15.8545ZM11.9948 13.5563H9.16734V11.9077H11.9948V13.5563ZM15.4106 15.8545H12.5841V14.2036H15.4106V15.8545ZM15.9975 11.9081H18.8241V13.5581H15.9975V11.9081ZM18.8259 15.8545H15.9994V14.2036H18.8259V15.8545Z" fill="#266400" />
							</g>
							<defs>
								<clipPath id="clip0_2048_24407">
									<rect width="24" height="24" fill="white" transform="translate(0.914062)" />
								</clipPath>
							</defs>
						</svg>
						<span>deezer</span>
					</a>
				</div>
			</div>
			<div class="podcast__container--postagens">
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/3ZY7RL7DuVlRsKgOQaQ3IZ?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/3eJiIJIZAX6YzWU5zOQw7x?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/0lxueqh7rU0fUQJj5sctgn?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1hIC6WWDthESt6Cfro7y3m?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/0406e1HIwRTCTUsbnXoK9v?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/0GNzLRTPtCGiMonCMYFPFN?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/3RNAc5QZEhnxkKWULMDpHs?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
				<div class="box">
					<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/6SanZclck8zLd1t74JCgPe?utm_source=generator" width="100%" height="294px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
				</div>
			</div>
		</div>
		<?php get_template_part('components/newsletter', 'post'); ?>
	</main>
</div>
<?php
get_footer();
