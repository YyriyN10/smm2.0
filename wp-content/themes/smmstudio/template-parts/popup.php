
<?php

    $popupLang = get_bloginfo('language');

    $popupFormHeaderText = get_field('osnovnoj_zagolovok_vsplyvayushhej_formy', 'options');

    $popupFormCallText = get_field('prizyv_ostavit_zayavku_vo_vsplyvayushhej_formy', 'options');

    $popupFormSubmitBtnText = get_field('tekst_knopki_otpravit_vo_vsplyvayushhej_formy', 'options');

    $addPravicyText = get_field('tekst_flazhka_soglasiya_s_politikoj_konfidenczialnosti_v_forme', 'options');

    $linkPravPol = get_field('ssylka_na_straniczu_politiki_konfidenczialnosti', 'options');

    $nameTextForm = get_field('podpis_polya_imya_v_forme', 'options');

    $messTextForm = get_field('podpis_polya_soobshhenie_v_forme', 'options');

    $errorTextForm = get_field('podpis_oshibki_dlya_ne_zapolennogo_polya_formy', 'options');

    $autoTargetFormTitle = get_field('osnovnoj_zagolovok_avtomaticheskoj_vsplyvayushhej_formy_dlya_targeta', 'options');

    $autoTargetFormCall = get_field('prizyv_ostavit_zayavku_v_avtomaticheskoj_vsplyvayushhej_forme_dlya_targeta', 'options');

    $popupFormHeaderText = $popupFormHeaderText[$popupLang];
    $popupFormCallText = $popupFormCallText[$popupLang];
    $popupFormSubmitBtnText = $popupFormSubmitBtnText[$popupLang];
    $addPravicyText = $addPravicyText[$popupLang];
    $linkPravPol = $linkPravPol[$popupLang];
    $nameTextForm = $nameTextForm[$popupLang];
    $messTextForm = $messTextForm[$popupLang];
    $errorTextForm = $errorTextForm[$popupLang];
    $autoTargetFormTitle = $autoTargetFormTitle[$popupLang];
    $autoTargetFormCall = $autoTargetFormCall[$popupLang];

?>

<!-- Всплывающее окно для видео -->

<div class="modal fade video-modal" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#FFF" fill-rule="evenodd" d="M24 2.402L21.598 0l-9.593 9.6L2.402 0 0 2.402l9.6 9.603L0 21.598 2.402 24l9.603-9.6 9.593 9.6L24 21.598l-9.6-9.593z"/>
                    </svg>

                </button>
			</div>
			<div class="modal-body">
				<div class="video">

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Всплывающее окно для видео кейса -->

<div class="modal fade video-case-modal" id="videoCaseModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#FFF" fill-rule="evenodd" d="M24 2.402L21.598 0l-9.593 9.6L2.402 0 0 2.402l9.6 9.603L0 21.598 2.402 24l9.603-9.6 9.593 9.6L24 21.598l-9.6-9.593z"/>
                    </svg>

                </button>
            </div>
            <div class="modal-body">
                <div class="video">

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Всплывающее окно с формой -->

<div class="modal form-modal" id="formModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.3334 3.35238L24.6477 0.666664L14.0001 11.3143L3.35246 0.666664L0.666748 3.35238L11.3144 14L0.666748 24.6476L3.35246 27.3333L14.0001 16.6857L24.6477 27.3333L27.3334 24.6476L16.6858 14L27.3334 3.35238Z" fill="white"/>
                    </svg>
                </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h2 class="small-block-title"><?php echo $popupFormHeaderText;?></h2>
                <h3 class="call-to"><?php echo $popupFormCallText;?></h3>
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
                      method="post"
                      class="needs-validation"
                      novalidate
                      data-toggle="validator"
                      id="form_pagePopup">
                    <input type="hidden" name="action" value="main_contact_form">
	                <?php wp_nonce_field('main_contact_form','hash'); ?>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="<?php echo $nameTextForm;?>" required>
                        <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                    </div>
                    <div class="form-group phone-group">
                        <input type="tel" name="phone" class="form-control" placeholder="+38 (___) ___ - __ - __ " required>
                        <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                    </div>

                    <div class="form-group textarea-group">
                        <textarea name="message" class="form-control" placeholder="<?php echo $messTextForm;?>"></textarea>
                    </div>

                    <div class="ch-button-wrapper">
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input type="checkbox"
                                       checked
                                       name="chboxfild"
                                       class="form-check-input"
                                       value="">

                                <p class="checkbox__text">
                                            <a href="<?php echo $linkPravPol;?>" target="_blank">
                                                <?php echo $addPravicyText;?>
                                            </a>
                                        </p>
                            </label>
                        </div>
                        <button type="submit" class="button" onclick="document.getElementById('popupform1').value = 'nospam';">
				            <?php echo $popupFormSubmitBtnText;?>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#221EC4"/>
                            </svg>
                        </button>
                        <input type="hidden" id="popupform1"  name="moreinfo" value="">
                        <!-- <input type="hidden" id="popup-form" class="g-recaptcha-response" name="g-recaptcha-response" value="" /> -->
                        <input type="hidden" name="form-lang" value="<?php echo $popupLang;?>">
                        <input type="hidden" name="page-name" value="<?php the_title(); ?>">
                        <input type="hidden" name="home-url" value="<?php echo home_url('/');?>">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Всплывающее автоматическое окно с формой для страницы таргета -->

<?php
    if(!isset($_COOKIE['smmsend'])) {
        ?>

<div class="modal form-modal" id="autoTargetformModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.3334 3.35238L24.6477 0.666664L14.0001 11.3143L3.35246 0.666664L0.666748 3.35238L11.3144 14L0.666748 24.6476L3.35246 27.3333L14.0001 16.6857L24.6477 27.3333L27.3334 24.6476L16.6858 14L27.3334 3.35238Z" fill="white"/>
                    </svg>
                </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h2 class="small-block-title"><?php echo $autoTargetFormTitle;?></h2>
                <h3 class="call-to"><?php echo $autoTargetFormCall;?></h3>
                <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
                      method="post"
                      class="needs-validation"
                      novalidate
                      data-toggle="validator"
                      id="pop_up__lead_target">
                    <input type="hidden" name="action" value="main_contact_form">
	                <?php wp_nonce_field('main_contact_form','hash'); ?>

                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="<?php echo $nameTextForm;?>" required>
                        <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                    </div>
                    <div class="form-group phone-group">
                        <input type="tel" name="phone" class="form-control" placeholder="+38 (___) ___ - __ - __ " required>
                        <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        <div class="invalid-feedback"><?php echo $errorTextForm;?></div>
                    </div>

                    <div class="form-group textarea-group">
                        <textarea name="mess" class="form-control" placeholder="<?php echo $messTextForm;?>"></textarea>
                    </div>

                    <div class="ch-button-wrapper">
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input type="checkbox"
                                       checked
                                       name="chboxfild"
                                       class="form-check-input"
                                       value="">
                                <p class="checkbox__text">
                                    <a href="<?php echo $linkPravPol;?>" target="_blank">
                                        <?php echo $addPravicyText;?>
                                    </a>
                                </p>
                            </label>
                        </div>
                        <button type="submit" class="button" onclick="document.getElementById('popupform2').value = 'nospam';">
                            <?php echo $popupFormSubmitBtnText;?>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#221EC4"/>
                            </svg>
                        </button>
                        <input type="hidden" id="popupform2"  name="moreinfo" value="">
                        <!-- <input type="hidden" id="popup-form-lid" class="g-recaptcha-response" name="g-recaptcha-response" /> -->
                        <input type="hidden" name="form-lang" value="<?php echo $popupLang;?>">
                        <input type="hidden" name="page-name" value="<?php the_title(); ?>">
                        <input type="hidden" name="home-url" value="<?php echo home_url('/');?>">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php
    } else {?>
        <?php
    }
?>