<section class="newsletter">
    <div class="newsletter__container ">
        <div class="newsletter__content">
            <div class="newsletter__icon">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/dev/dist/res/img/assets/tecnologia.svg" alt="">
            </div>
            <h3 class="newsletter__heading">Comece hoje mesmo sua transição energética</h3>
            <p class="newsletter__text">
                Nossa plataforma sinérgica engloba soluções 360° em energia,
                para que o seu negócio faça uma transformação energética sem limitações.
                Fale com a gente para dar os próximos passos com as soluções que você
                realmente precisa para atingir seu maior potencial de descarbonização.
                <br>
                <br>

                Fale com o nosso time de especialistas.
            </p>
        </div>
        <div class="newsletter__holder">
            <form action="" class="newsletter__form" method="post">
                <div class="newsletter__form--input">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome">
                </div>
                <div class="newsletter__form--double">
                    <div class="newsletter__form--input">
                        <label for="email">E-mail</label>
                        <input type="email" id="email">
                    </div>
                    <div class="newsletter__form--input">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone">
                    </div>
                </div>
                <div class="newsletter__form--double">
                    <div class="newsletter__form--input">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade">
                    </div>
                    <div class="newsletter__form--input select">
                        <label for="solucoes">Solução de interesse</label>
                        <select name="solucoes" id="solucoes">
                            <option value="">teste</option>
                            <option value="">teste2</option>
                            <option value="">teste3</option>
                        </select>
                    </div>
                </div>
                <input type="submit" class="button button--newsletter" value="ENVIAR" />
            </form>
        </div>
    </div>
</section>