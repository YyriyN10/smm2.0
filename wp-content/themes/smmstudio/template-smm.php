<?php
	/**
	 * Template part for displaying page content in page.php
	 *
	 * Template name: Шаблон страницы "SMM"
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package smmstudio
	 */
	get_header();

?>

	<!-- Главный экран --->

	<section class="main-serv-screen">
    <div class="container">
      <div class="row">
        <div class="content col-12">
          <?php the_content();?>

          <!--<div class="block-pic">
            <img src="<?php /*echo get_field('kartinka_na_glavnom_ekrane');*/?>" alt="">
          </div>-->
          <a href="#" class="button" data-toggle="modal" data-target="#formModal">
            <?php echo get_field('tekst_knopki_na_pervom_ekrane');?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#343BBC"/>
            </svg>
          </a>

          <div class="smm-smile-animation-wrapper">
            <div class="pic-wrapper">
              <img src="<?php echo THEME_PATH;?>/assets/img/smm-page-main-scr-pic.png" alt="">
            </div>
            <div class="smile smile-1 smm-smile-animation-1">
              <svg width="166" height="166" viewBox="0 0 166 166" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_3030:95676sh1)">
                  <path d="M96.8616 140.271C130.701 132.688 151.985 99.1095 144.403 65.2707C136.821 31.4318 103.242 10.1468 69.403 17.7293C35.5641 25.3118 14.2791 58.8904 21.8616 92.7293C29.4441 126.568 63.0228 147.853 96.8616 140.271Z" fill="#FFD05D"/>
                  <path d="M137.886 48.2446C138.725 62.4265 134.73 76.4738 126.554 88.0916C118.377 99.7094 106.502 108.211 92.8692 112.207C79.2363 116.204 64.651 115.459 51.496 110.095C38.3411 104.73 27.3942 95.0632 20.4436 82.6729C21.0012 92.0982 23.6773 101.276 28.2727 109.525C32.868 117.773 39.2643 124.878 46.9856 130.312C54.7068 135.746 63.5541 139.369 72.8692 140.911C82.1842 142.453 91.7271 141.875 100.788 139.219C109.848 136.563 118.193 131.898 125.201 125.57C132.209 119.243 137.7 111.417 141.266 102.674C144.831 93.9313 146.379 84.497 145.793 75.0733C145.208 65.6497 142.506 56.4793 137.886 48.2446Z" fill="#FDC453"/>
                  <path d="M32.4842 58.3704C38.4105 47.7211 47.5254 39.1968 58.5473 33.996C69.5692 28.7951 81.9439 27.1794 93.9317 29.3758C105.92 31.5722 116.917 37.4703 125.38 46.241C133.842 55.0117 139.342 66.2138 141.108 78.2725C140.991 70.3008 139.241 62.4378 135.964 55.1696C132.688 47.9013 127.956 41.3822 122.06 36.0154C116.165 30.6486 109.231 26.5481 101.687 23.9674C94.1441 21.3867 86.1516 20.3806 78.2041 21.0114C70.2565 21.6421 62.5228 23.8963 55.481 27.6346C48.4392 31.3729 42.239 36.5157 37.2637 42.7453C32.2883 48.9749 28.6437 56.1588 26.5549 63.8528C24.4662 71.5469 23.9777 79.5876 25.1199 87.4779C24.9769 77.2972 27.5168 67.2583 32.4842 58.3704Z" fill="#FFD77F"/>
                  <path d="M53.528 77.2417C50.9875 83.3291 50.7757 90.1385 52.9329 96.372C55.0902 102.605 59.4656 107.827 65.2254 111.042C70.9851 114.257 77.7264 115.24 84.1645 113.804C90.6025 112.368 96.2871 108.614 100.135 103.256L53.528 77.2417Z" fill="#695342"/>
                  <path d="M52.6995 95.6526C54.7089 102.054 59.0436 107.47 64.849 110.834C70.6544 114.198 77.5093 115.264 84.0623 113.824L84.1267 113.198C72.7396 96.8309 52.9664 95.671 52.6995 95.6526Z" fill="#F06669"/>
                  <path d="M84.4302 58.8677C84.442 58.8383 84.4575 58.8104 84.4763 58.7849C87.3023 53.7219 86.2253 47.048 80.7205 43.9734C76.3479 41.5247 72.049 43.2553 69.5451 45.7132C70.3184 42.2888 69.5451 37.7321 65.1633 35.2927C59.6401 32.2181 53.408 34.8048 50.582 39.8954V39.9782C49.9376 41.0645 43.7055 52.2858 55.5437 70.8808C77.5538 71.1753 83.8411 59.9816 84.4302 58.8677Z" fill="#E62728"/>
                  <path d="M133.431 86.2169C133.45 86.1913 133.465 86.1635 133.477 86.134C136.303 81.0711 135.235 74.3971 129.73 71.3225C125.349 68.8831 121.059 70.6137 118.555 73.0716C119.328 69.6472 118.555 65.0813 114.173 62.6418C108.65 59.5672 102.418 62.1631 99.5918 67.2445L99.5458 67.3274C98.9014 68.4044 92.6785 79.635 104.517 98.2207C126.564 98.5245 132.851 87.3399 133.431 86.2169Z" fill="#E62728"/>
                </g>
                <defs>
                  <filter id="filter0_d_3030:95676sh1" x="0.328613" y="0.196289" width="165.607" height="165.607" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="10"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3030:95676"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3030:95676" result="shape"/>
                  </filter>
                </defs>
              </svg>

            </div>
            <div class="smile smile-2 smm-smile-animation-2">
              <svg width="151" height="153" viewBox="0 0 151 153" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_3030:95697sh2)">
                  <path d="M112.632 112.5C133.343 91.7893 133.343 58.2107 112.632 37.5C91.9216 16.7893 58.343 16.7894 37.6323 37.5C16.9216 58.2107 16.9216 91.7893 37.6323 112.5C58.343 133.211 91.9216 133.211 112.632 112.5Z" fill="#4A85D3"/>
                  <path d="M76.4035 21.9301C87.0733 27.4331 95.5602 36.3935 100.477 47.3461C105.393 58.2986 106.447 70.5952 103.468 82.225C100.489 93.8547 93.6513 104.129 84.0744 111.369C74.4975 118.609 62.7476 122.384 50.7461 122.079C57.8309 125.733 65.6482 127.743 73.6168 127.959C81.5854 128.176 89.5003 126.593 96.7728 123.328C104.045 120.064 110.488 115.202 115.623 109.104C120.757 103.006 124.451 95.8296 126.429 88.1074C128.408 80.3853 128.62 72.3165 127.05 64.5011C125.48 56.6857 122.168 49.3247 117.361 42.9657C112.554 36.6066 106.375 31.413 99.2842 27.7711C92.1932 24.1292 84.3724 22.1327 76.4035 21.9301Z" fill="#407EC1"/>
                  <path d="M38.3063 102.836C33.1475 93.9424 30.9022 83.6567 31.8855 73.422C32.8688 63.1874 37.0314 53.5173 43.7891 45.7683C50.5469 38.0193 59.5608 32.5802 69.5666 30.2139C79.5723 27.8476 90.0679 28.6728 99.5808 32.5739C93.7397 29.2089 87.2698 27.0792 80.572 26.3166C73.8743 25.554 67.0913 26.1748 60.6432 28.1405C54.1951 30.1063 48.2194 33.3752 43.0861 37.7446C37.9529 42.114 33.7715 47.4909 30.8011 53.5422C27.8306 59.5935 26.1344 66.1903 25.8174 72.9239C25.5004 79.6575 26.5695 86.3844 28.9583 92.688C31.3472 98.9916 35.0049 104.738 39.7049 109.57C44.4049 114.402 50.0471 118.218 56.282 120.781C48.8183 116.482 42.6185 110.292 38.3063 102.836Z" fill="#5B9ADD"/>
                  <path d="M95.2733 48.8159L87.9571 53.061L84.9949 54.7793L79.3502 58.0603C79.2556 58.1154 79.1496 58.1481 79.0403 58.1558C78.9311 58.1635 78.8216 58.146 78.7202 58.1047C78.6188 58.0634 78.5283 57.9993 78.4555 57.9175C78.3828 57.8357 78.3298 57.7382 78.3006 57.6327C77.5013 54.9712 76.3424 52.4313 74.8563 50.0832C74.0882 48.6545 73.2474 47.2662 72.3372 45.9236C71.4406 44.5513 70.1774 43.4577 68.6908 42.7669C67.8749 42.4003 66.9867 42.2231 66.0926 42.2486C65.1985 42.2742 64.3217 42.5019 63.5282 42.9147C59.8895 45.0217 61.3823 48.9247 62.7507 52.0036C64.3057 55.6034 66.1794 59.1799 66.4904 63.1451C66.7081 65.9285 66.3193 68.6498 64.5311 70.9201C63.3407 72.5524 61.9888 74.0606 60.496 75.4218C60.37 75.5311 60.2857 75.6806 60.2573 75.845C60.229 76.0094 60.2583 76.1785 60.3404 76.3237L74.0088 99.8662C74.0562 99.9475 74.1192 100.019 74.1941 100.075C74.269 100.132 74.3544 100.174 74.4454 100.198C74.5364 100.222 74.6312 100.227 74.7244 100.214C74.8175 100.202 74.9073 100.17 74.9885 100.123L81.4961 96.3442C81.5972 96.2923 81.709 96.2653 81.8226 96.2653C81.9362 96.2653 82.0482 96.2923 82.1492 96.3442C83.3165 96.8443 84.5845 97.0647 85.8521 96.9878C87.1197 96.9108 88.3517 96.5387 89.4499 95.901L99.5573 90.0231L106.912 85.7469L109.836 84.0597C111.266 83.222 112.307 81.853 112.732 80.2511C113.157 78.6491 112.932 76.944 112.106 75.5073C111.671 74.7629 111.07 74.1295 110.349 73.6569C110.213 73.5706 110.11 73.4399 110.059 73.2869C110.008 73.1339 110.012 72.9679 110.069 72.8172C110.668 71.2622 110.217 68.8752 109.338 67.3747L108.973 66.7527C108.541 66.0082 107.939 65.3767 107.216 64.91C107.08 64.8213 106.979 64.6887 106.93 64.5344C106.88 64.3802 106.885 64.2136 106.944 64.0625C107.249 63.2875 107.375 62.4537 107.313 61.6231C107.251 60.7925 107.003 59.9866 106.586 59.2654L106.228 58.6434C105.793 57.899 105.192 57.2656 104.471 56.793C104.335 56.7067 104.233 56.576 104.182 56.423C104.131 56.27 104.134 56.104 104.191 55.9533C104.5 55.1793 104.629 54.3454 104.568 53.5145C104.507 52.6835 104.259 51.8771 103.841 51.1561C103.014 49.7115 101.647 48.654 100.041 48.2153C98.4349 47.7766 96.7204 47.9926 95.2733 48.8159Z" fill="white"/>
                  <path d="M53.2456 76.0226L44.3694 81.1742C43.3518 81.7648 43.0056 83.0684 43.5962 84.086L58.774 110.238C59.3646 111.255 60.6683 111.601 61.6858 111.011L70.5621 105.859C71.5797 105.268 71.9259 103.965 71.3353 102.947L56.1575 76.7957C55.5669 75.7781 54.2632 75.432 53.2456 76.0226Z" fill="white"/>
                </g>
                <defs>
                  <filter id="filter0_d_3030:95697sh2" x="2.09937" y="5.93005" width="146.066" height="146.103" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="10"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3030:95697"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3030:95697" result="shape"/>
                  </filter>
                </defs>
              </svg>

            </div>
            <div class="smile smile-3 smm-smile-animation-3">
              <svg width="152" height="155" viewBox="0 0 152 155" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_3030:95692sh3)">
                  <path d="M124.726 101.406C139.31 74.5686 129.376 40.99 102.539 26.4062C75.701 11.8225 42.1223 21.7561 27.5385 48.5937C12.9548 75.4313 22.8885 109.01 49.7261 123.594C76.5637 138.178 110.142 128.244 124.726 101.406Z" fill="#F94343"/>
                  <path d="M125.766 50.5726C125.81 63.0861 121.61 75.2447 113.851 85.0628C106.093 94.8808 95.2342 101.778 83.0495 104.628C70.8647 107.477 58.0738 106.111 46.7657 100.752C35.4577 95.3937 26.3008 86.3589 20.7908 75.1238C20.8254 83.4378 22.7341 91.6369 26.3749 99.1114C30.0156 106.586 35.2946 113.143 41.8193 118.296C48.3441 123.449 55.9466 127.064 64.0614 128.873C72.1762 130.682 80.5945 130.639 88.6901 128.745C96.7856 126.852 104.35 123.158 110.821 117.937C117.292 112.717 122.502 106.105 126.065 98.593C129.628 91.081 131.451 82.8625 131.399 74.5486C131.347 66.2348 129.422 58.0396 125.766 50.5726Z" fill="#E53939"/>
                  <path d="M32.5717 54.3105C38.312 45.2533 46.7437 38.2204 56.684 34.1985C66.6242 30.1766 77.5741 29.3676 87.9975 31.8849C98.4209 34.4022 107.795 40.1195 114.804 48.2348C121.813 56.35 126.105 66.456 127.079 77.1347C127.384 70.1084 126.241 63.0945 123.723 56.5279C121.205 49.9613 117.365 43.982 112.441 38.9606C107.517 33.9393 101.613 29.983 95.0973 27.3371C88.5811 24.6912 81.5909 23.4121 74.56 23.579C67.5291 23.746 60.6076 25.3555 54.2243 28.3077C47.8411 31.2599 42.1324 35.4919 37.4521 40.7413C32.7718 45.9907 29.2198 52.1455 27.0162 58.8243C24.8127 65.503 24.0046 72.5632 24.642 79.5671C25.0199 70.5977 27.755 61.8863 32.5717 54.3105Z" fill="#F76363"/>
                  <path d="M106.996 86.9373L107.085 86.8076C112.29 78.5942 111.139 67.3483 102.179 61.6727C95.0849 57.1727 87.731 59.67 83.304 63.5537C84.9256 57.8781 84.0417 50.1835 76.9472 45.716C68.0283 40.0404 57.3013 43.8106 52.096 52.0241L52.023 52.1619C50.8393 53.9132 39.3583 72.132 57.4555 104.362C94.3471 106.907 105.909 88.7536 106.996 86.9373Z" fill="white"/>
                </g>
                <defs>
                  <filter id="filter0_d_3030:95692sh3" x="0.790771" y="3.68445" width="150.657" height="150.631" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="10"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3030:95692"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3030:95692" result="shape"/>
                  </filter>
                </defs>
              </svg>

            </div>
            <div class="smile smile-4 smm-smile-animation-4">
              <svg width="154" height="156" viewBox="0 0 154 156" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_3030:95684sh4)">
                  <path d="M101.749 125.251C129.502 111.583 140.92 78.0045 127.251 50.2514C113.583 22.4983 80.0045 11.0803 52.2514 24.7485C24.4983 38.4168 13.0803 71.9954 26.7486 99.7485C40.4168 127.502 73.9955 138.92 101.749 125.251Z" fill="#FFD05D"/>
                  <path d="M120.126 39.1475C123.147 51.4571 121.905 64.4275 116.602 75.9398C111.299 87.4522 102.249 96.8261 90.9298 102.53C79.6109 108.235 66.6922 109.932 54.284 107.345C41.8758 104.759 30.7114 98.0408 22.6145 88.289C24.6268 96.4655 28.4565 104.083 33.8189 110.575C39.1813 117.067 45.9383 122.267 53.5875 125.787C61.2366 129.308 69.581 131.058 78.0001 130.909C86.4191 130.76 94.6962 128.714 102.216 124.925C109.735 121.135 116.304 115.699 121.432 109.021C126.561 102.343 130.118 94.5943 131.839 86.3517C133.56 78.1091 133.401 69.5845 131.373 61.412C129.345 53.2394 125.501 45.6293 120.126 39.1475Z" fill="#FDC453"/>
                  <path d="M29.2664 64.9912C32.7645 54.7094 39.3936 45.7808 48.2237 39.4578C57.0539 33.1349 67.6419 29.7349 78.5024 29.7349C89.3629 29.7349 99.951 33.1349 108.781 39.4578C117.611 45.7808 124.24 54.7094 127.738 64.9912C126.355 58.0099 123.554 51.3868 119.508 45.5318C115.462 39.6769 110.257 34.7146 104.216 30.9523C98.1743 27.19 91.4252 24.7077 84.3859 23.659C77.3465 22.6103 70.1669 23.0176 63.2913 24.8556C56.4158 26.6935 49.9906 29.9232 44.4135 34.3445C38.8365 38.7658 34.2262 44.2848 30.8682 50.5597C27.5101 56.8347 25.4756 63.7321 24.8908 70.825C24.3059 77.9179 25.183 85.0554 27.4679 91.7957C25.6967 82.8584 26.3171 73.6118 29.2664 64.9912Z" fill="#FFD77F"/>
                  <path d="M65.7367 56.7954C64.5049 60.4334 61.7456 62.7902 59.594 62.0594C57.4425 61.3285 56.6869 57.7808 57.9516 54.1428C59.2163 50.5049 61.9345 48.148 64.0943 48.8871C66.2541 49.6262 66.9768 53.1984 65.7367 56.7954Z" fill="#303030"/>
                  <path d="M104.81 70.0826C103.578 73.7205 100.827 76.0774 98.6674 75.3383C96.5076 74.5992 95.7603 71.0598 97.0249 67.43C98.2896 63.8003 101.008 61.4352 103.168 62.166C105.327 62.8969 106.05 66.4446 104.81 70.0826Z" fill="#303030"/>
                  <path d="M39.6547 67.8817C37.6669 76.9758 39.0978 86.4834 43.6742 94.5896C48.2507 102.696 55.6521 108.833 64.4656 111.829C73.2791 114.825 82.8873 114.47 91.4559 110.833C100.025 107.195 106.953 100.529 110.92 92.1076L39.6547 67.8817Z" fill="#695342"/>
                  <path d="M43.1943 93.6351C47.6084 102.005 54.9972 108.417 63.9047 111.609C72.8122 114.802 82.5923 114.542 91.3176 110.881L91.2519 109.994C71.2881 90.1532 43.5721 93.5858 43.1943 93.6351Z" fill="#F06669"/>
                </g>
                <defs>
                  <filter id="filter0_d_3030:95684sh4" x="0.972412" y="2.97229" width="152.055" height="152.055" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="10"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3030:95684"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3030:95684" result="shape"/>
                  </filter>
                </defs>
              </svg>

            </div>
          </div>

        </div>
      </div>
    </div>

		<a href="#business-in-good-hands" class="go-down scroll-to">
      <span class="arrow-wrapper">
        <span class="white"></span>
        <span class="blue"></span>
          <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.292893 8.70711C-0.0976311 8.31658 -0.0976311 7.68342 0.292893 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292893 8.70711ZM2 9H1V7H2V9Z" fill="#181A22"/>
          </svg>
      </span>
		</a>
	</section>

    <!-- Наши кейсы --->

<?php
	$ourCasesTitle = get_field('zagolovok_bloka_kejsy');

	if ( $ourCasesTitle ):
		?>
        <section class="our-cases animation-tracking" id="our-cases">
            <div class="container">
                <div class="row first-up">
                    <h2 class="block-title col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                        <?php echo $ourCasesTitle;?>
                        <span>
                            <img src="<?php echo THEME_PATH;?>/assets/img/kristal.png" alt="">
                        </span>
                    </h2>
                </div>
            </div>
            <div class="cases-list second-up" id="cases-list">
		        <?php
			        $argsCases = array(
				        'tax_query' => array(
					        array(
						        'taxonomy' => 'cases-cat-tax',
						        'field' => 'id',
						        'terms' => $caseSmmCatId,
					        )
				        ),
				        'post_type' => 'cases',
				        'orderby' 	 => 'date',
                'post_status' => 'publish',
                'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
				        'posts_per_page' => 6
			        );

			        $ourDevCases = new WP_Query( $argsCases );

			        if ( $ourDevCases->have_posts() ) :

				        while ( $ourDevCases->have_posts() ) : $ourDevCases->the_post();

					        ?>

                            <a href="<?php the_permalink();?>" class="case-item">
                                <img class="case-pic" src="<?php the_post_thumbnail_url();?>" alt="">

                                <div class="hover-preview-content">
                                    <div class="inner-content">
                                        <div class="case-logo-wrapper">
                                            <img src="" alt="">
                                        </div>
                                        <h3><?php the_title();?></h3>
                                        <p><?php echo get_field('chem_zanimaetsya_kompaeiya');?></p>
                                        <p class="more">
									        <?php echo $textMoreCases;?>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.79999 12.4478L9.79999 8.44778L4.79999 4.44778L5.79999 2.84778L12.8 8.44778L5.79999 14.0478L4.79999 12.4478Z" fill="white"/>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="case-cat-teg-wrapper">
							        <?php
							        global $post;

								        $category = get_the_terms($post->ID, 'cases-cat-tax');
								        $current_cat_id = $category[0]->term_id;
								        $cat_posts_count = $category[0]->count;
							        ?>

                                    <p>#<?php echo $category[0]->name;?></p>

                                </div>
                                <div class="preview-content">
                                    <h3><?php the_title();?></h3>
                                    <p><?php echo get_field('sfera_deyatelnosti_-_kratko');?></p>
                                </div>
                            </a>
				        <?php endwhile;?>

			        <?php endif; ?>
		        <?php wp_reset_postdata();?>

            </div>
            <?php

            $argsCasesDevAll = array(
              'tax_query' => array(
                array(
                  'taxonomy' => 'cases-cat-tax',
                  'field' => 'id',
                  'terms' => $caseSmmCatId,
                )
              ),
              'post_type' => 'cases',
              'post__not_in' => array(3636, 3555, 3828, 3828, 3873, 3870),
            );

            $ourDevCasesMore = new WP_Query( $argsCasesDevAll );
            $allDevCases = $ourDevCasesMore->post_count;

            ;?>
          <div class="row" id="mor-cases-btn-wrap" data-allposts="<?php echo $allDevCases;?>">

            <div class="col-12 text-center">

              <a href="#dev-cases"
                 class="button less d-none"
                 id="less-cases"
                 data-currentcat="<?php echo $caseSmmCatId;?>"
                 data-offsetpost="0"
                 data-lang="<?php echo $siteLang;?>">
                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 10.5L7 4.25L12 10.5L14 9.25L7 0.5L-5.46392e-08 9.25L2 10.5Z" fill="#C6CCDA"/>
                </svg>
                <?php echo $textLassCases;?>


              </a>
              <a href=""
                 class="button more"
                 id="more-cases"
                 data-currentcat="<?php echo $caseSmmCatId;?>"
                 data-offsetpost="1"
                 data-lang="<?php echo $siteLang;?>">
                <?php echo $moreCasesText;?>
                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 0.499999L7 6.75L12 0.5L14 1.75L7 10.5L-5.46392e-08 1.75L2 0.499999Z" fill="#6B799A"/>
                </svg>
              </a>

            </div>

          </div>

            <!-- <div id="mor-cases-btn-wrap">
                <div class="col-12 text-center">
                    <a href="#"
                       class="button"
                       id="more-cases"
                       data-currentcat="176"
                       data-domen="<?php echo get_home_url();?>"
                       data-offsetpost="1"
                       data-allcat=""
                       data-allcases=""
                       data-lang="<?php echo $siteLang;?>"
                    ><?php echo $moreCasesText;?></a>
                </div>
            </div> -->
        </section>
	<?php endif;?>

	<!-- Бизнес в надежных руках ️--->

<?php
    $businessInGoodHands = get_field('blok_biznes_v_nadezhnyh_rukah');

    if ( $businessInGoodHands ):

        $block_title = $businessInGoodHands['zagolovok_bloka'];
        $content = $businessInGoodHands['prepyatstviya'];
?>
      <section class="business-in-good-hands animation-tracking" id="business-in-good-hands">
          <div class="container">
              <div class="row first-up">
                  <h2 class="block-title col-12"><?php echo $block_title;?></h2>
              </div>
          </div>
          <?php if ( $content ):?>
          <div class="items-wrapper second-up">
              <?php foreach ( $content as $item ):?>
              <div class="item">
                  <h3><?php echo $item['nazvanie'];?></h3>
                  <p class="more-text"><?php echo $item['kratkoe_opisanie'];?></p>
                  <!--<a href="#" class="more">
                      <span><?php /*echo $btnMoreText;*/?></span>
                      <span><?php /*echo $btnLessText;*/?></span>
                      <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2.0001 0.799987L6.0001 5.79999L10.0001 0.799988L11.6001 1.79999L6.0001 8.79999L0.400097 1.79999L2.0001 0.799987Z" fill="white"/>
                      </svg>
                  </a>-->
                  <a href="#contact-form" class="button scroll-to">
	                  <?php echo $btnGetSolutionText;?>
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#343BBC"/>
                      </svg>
                  </a>
              </div>
              <?php endforeach;?>
          </div>
        <?php endif;?>

      </section>

<?php endif;?>

	<!-- Работаем с брендами --->

<?php
    $workWithBrands = get_field('blok_rabotaem_s_brendami');

    if ( $workWithBrands ):

        $block_title = $workWithBrands['zagolovok_bloka'];
        $content = $workWithBrands['preimushhestva'];
?>
    <section class="work-with-brands animation-tracking">
        <div class="container">
            <div class="row first-up">
                <h2 class="block-title col-12"><?php echo $block_title;?></h2>
            </div>
            <?php if ($content):?>
            <div class="row second-up">
                <?php foreach ( $content as $item):?>
                <div class="item col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="pic-wrapper">
                        <img src="<?php echo $item['kartinka'];?>" alt="">
                    </div>
                    <h3><?php echo $item['nazvanie'];?></h3>
                    <p><?php echo $item['kratkoe_opisanie'];?></p>
                </div>
                <?php endforeach;?>
            </div>
            <?php endif;?>
        </div>
    </section>
<?php endif;?>

	<!-- Цепочка потерь --->

<?php

	$lossChain = get_field('blok_czepochka_poter');

	if ( $lossChain ):
		$block_title = $lossChain['zagolovok_bloka'];
		$block_text = $lossChain['tekst'];
		$btn_text = $lossChain['tekst_knopki'];
		?>
		<section class="loss-chain animation-tracking">
      <div class="pic-wrapper pic-top">
        <img class="lazy" data-src="<?php echo THEME_PATH;?>/assets/img/img_hand_1.png" alt="">
      </div>
      <div class="pic-wrapper pic-bottom">
        <img class="lazy" data-src="<?php echo THEME_PATH;?>/assets/img/img_hand_2.png" alt="">
      </div>
      <div class="smm-bg-light bg-pic-1">
        <img class="lazy" data-src="<?php echo THEME_PATH;?>/assets/img/smm-light-pic-1.png" alt="">
      </div>
      <div class="smm-bg-light bg-pic-2">
        <img class="lazy" data-src="<?php echo THEME_PATH;?>/assets/img/smm-light-pic-2.png" alt="">
      </div>
      <div class="smm-bg-light bg-pic-3">
        <img class="lazy" data-src="<?php echo THEME_PATH;?>/assets/img/smm-light-pic-3.png" alt="">
      </div>
      <div class="smm-bg-light bg-pic-4">
        <img class="lazy" data-src="<?php echo THEME_PATH;?>/assets/img/smm-light-pic-4.png" alt="">
      </div>
      <div class="smm-bg-light bg-pic-5">
        <img class="lazy" data-src="<?php echo THEME_PATH;?>/assets/img/smm-light-pic-5.png" alt="">
      </div>
			<div class="container">
				<div class="row first-up">
					<div class="content col-12">
            <?php if ( $block_title):?>
              <h2 class="small-block-title">
                <?php foreach ( $block_title as $part ):?>
                  <span>
                    <?php echo $part['sostavlyayushhaya'];?>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.1891 24.5223L14.0001 27.3333L27.3334 14L14.0001 0.666656L11.1891 3.47765L19.7235 12.012H0.666748V15.988H19.7235L11.1891 24.5223Z" fill="white"/>
                    </svg>
                  </span>
                <?php endforeach;?>
              </h2>
            <?php endif;?>
						<p><?php echo $block_text;?></p>
						<a href="#contact-form" class="button scroll-to"><?php echo $btn_text;?></a>
            <div class="cirkle-wrapper"></div>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!-- SMM услуги --->

<?php
    $smmServices = get_field('blok_smm_uslugi');

    if ( $smmServices ):

      $block_title = $smmServices['zagolovok_bloka'];
      $steps = $smmServices['etapy'];
?>
    <section class="smm-services animation-tracking">
      <div class="container">
        <div class="row first-up">
          <h2 class="block-title col-12"><?php echo $block_title;?></h2>
        </div>
        <?php if ( $steps ):?>
          <div class="row second-up">
            <?php foreach ( $steps as $item ):?>
              <div class="step col-12">
                <div class="text-content">
                  <h2><?php echo $item['nazvanie_etapa'];?></h2>
                  <h3><?php echo $item['zagolovok'];?></h3>
                  <?php if ( $item['sostavlyayushhie'] ):?>
                    <ul>
                      <?php foreach ( $item['sostavlyayushhie'] as $list_text ):?>
                        <li><?php echo $list_text['tekst'];?></li>
                      <?php endforeach;?>
                    </ul>
                  <?php endif;?>
                </div>
                <div class="pic-wrapper">
                  <div class="pic">
                    <img src="<?php echo $item['kartinka_etapa'];?>" alt="">
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        <?php endif;?>
      </div>
    </section>
<?php endif;?>

    <!-- Блок с призывом --->

<?php

    $callBlock = get_field('blok_s_prizyvom');

    if ( $callBlock ):

        $block_title = $callBlock['zagolovok_bloka'];
        $block_text = $callBlock['tekst'];
        $btn_text = $callBlock['tekst_knopki'];
        $block_pic = $callBlock['kartinka_bloka'];
?>
    <section class="call-block animation-tracking">
        <div class="container">
            <div class="row first-up">
                <div class="content col-12">
                    <h2 class="small-block-title"><?php echo $block_title;?></h2>
                    <p><?php echo $block_text;?></p>
                    <a href="#contact-form" class="button scroll-to"><?php echo $btn_text;?></a>
                    <?php if($siteLang == 'ua'):?>
                      <div class="pic-wrapper ua">
                    <?php else:?>
                      <div class="pic-wrapper">
                    <?php endif;?>
                    
                        <img class="lazy" data-src="<?php echo $block_pic;?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

    <!-- Эффективный результат --->

<?php
    $effectiveResult = get_field('blok_effektivnyj_rezultat');

    if ( $effectiveResult ):

      $block_title = $effectiveResult['zagolovok_bloka'];
      $constituents = $effectiveResult['sostavlyayushhie'];
?>
    <section class="effective-result animation-tracking">
      <div class="container">
        <div class="row first-up">
          <h2 class="block-title col-12"><?php echo $block_title;?></h2>
        </div>
        <?php if ( $constituents ):?>
          <div class="row second-up">
            <div class="content col-12">
              <?php foreach ( $constituents as $item ):?>
                <div class="item">
                  <div class="pic-wrapper">
                    <img src="<?php echo $item['kartinka'] ;?>" alt="">
                  </div>
                  <div class="text-wrapper">
                    <p><?php echo $item['nazvanie'] ;?></p>
                  </div>
                </div>
              <?php endforeach;?>
            </div>
          </div>
        <?php endif;?>
      </div>
    </section>
<?php endif;?>

	<!-- DreamTeam --->

<?php
	$dreamTeam = get_field('blok_dream_team');

	if ( $dreamTeam ):

		$block_title = $dreamTeam['zagolovok_bloka'];
	    $sub_title = $dreamTeam['podzagolovok'];
		$all_team = $dreamTeam['uchastniki'];
		$i = 0;
		?>
		<section class="dream-team animation-tracking">
			<div class="container">
				<div class="row first-up">
					<h2 class="block-title col-12"><?php echo $block_title;?></h2>
          <h3 class="sub-title col-12"><?php echo $sub_title;?></h3>
				</div>
			</div>
			<div class="slider-wrapper second-up">

				<div class="dream-team-slider" id="dream-team-slider">
					<?php foreach ( $all_team as $item ):?>
						<div class="slide" data-menname="<?php echo $item['imya'];?>" data-menpost="<?php echo $item['dolzhnost'];?>">
							<img src="<?php echo $item['fotografiya'];?>" alt="">
						</div>
					<?php endforeach;?>
				</div>

				<div class="men-info">
					<h3></h3>
					<p></p>
				</div>
			</div>
		</section>

	<?php endif;?>

	<!-- Нам доверяют --->

<?php
	$trustUs = get_field('zagolovok_bloka_nam_doveryayut');

	if( $trustUs ):
		?>
		<section class="trust-us animation-tracking">
			<div class="container">
				<div class="row first-up">
					<h2 class="block-title text-center col-12"><?php echo $trustUs;?></h2>
				</div>
				<div class="row second-up">
					<div class="trust-us-slider-wrapper owl-carousel owl-theme" id="trust-us-slider">
						<?php
							$argsTrustSlides = array(
								'posts_per_page' => -1,
								'orderby' 	 => 'date',
								'post_type'  => 'trust'

							);

							$trustSlides = new WP_Query( $argsTrustSlides );

							if ( $trustSlides->have_posts() ) :

								while ( $trustSlides->have_posts() ) : $trustSlides->the_post();
									?>
									<div class="slide">
										<div class="partner">
											<img data-lazy="<?php echo get_field('logotip_1');?>" alt="">
										</div>
										<div class="partner">
											<img data-lazy="<?php echo get_field('logotip_2');?>" alt="">
										</div>
										<div class="partner">
											<img data-lazy="<?php echo get_field('logotip_3');?>" alt="">
										</div>
									</div>
								<?php endwhile;?>

							<?php endif; ?>

						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!-- Отзывы --->

<?php
	$reviews = get_field('zagolovok_bloka_s_otzyvami');

	if ( $reviews ):
		?>
		<section class="reviews animation-tracking">
			<div class="container-fluid">
				<div class="row first-up">
					<h2 class="block-title text-center col-12"><?php echo $reviews;?></h2>
				</div>
				<div class="rev-slider-wrapper second-up">
					<a href="#" class="control prev">
						<svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.4 20.0001L6.40002 12L16.4 4.00005L14.4 0.800049L0.400024 12L14.4 23.2001L16.4 20.0001Z" fill="#6B799A"/>
						</svg>

					</a>
					<a href="#" class="control next">
						<svg width="17" height="24" viewBox="0 0 17 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.600098 20.0001L10.6001 12L0.600098 4.00005L2.6001 0.800049L16.6001 12L2.6001 23.2001L0.600098 20.0001Z" fill="#6B799A"/>
						</svg>

					</a>
					<div class="rev-slider" id="rev-slider">
						<?php
							$revArgs = array(
								'posts_per_page' => -1,
								'orderby' 	 => 'date',
								'post_type'  => 'reviews'

							);

							$revSlides = new WP_Query( $revArgs );

							if ( $revSlides->have_posts() ) :

								while ( $revSlides->have_posts() ) : $revSlides->the_post(); ?>
									<div class="slide">
										<div class="slide-wrapper">

											<?php
												$media_type = get_field('kartinkavideo');

												if ( $media_type['value'] == 'image' ): ?>
													<a href="<?php echo get_field('kartinka')?>" data-fancybox="rev">
														<img data-lazy="<?php echo get_field('kartinka')?>" alt="" class="pic">
													</a>
												<?php elseif ( $media_type['value'] == 'video' ):?>
													<div class="author">
														<!-- <div class="photo-wrapper">
															<img data-lazy="<?php the_post_thumbnail_url();?>" alt="">
														</div> -->
														<div class="text">
															<h3><?php the_title();?></h3>
															<p><?php echo get_field('kampaniya');?></p>
														</div>
													</div>
													<div class="youtube" id="<?php echo get_field('video')?>"></div>
													<div class="timing">
														<p><?php echo get_field('dlitelnost_video');?></p>
													</div>
													<a href="#" class="open-review"  data-videoid="<?php echo get_field('video')?>"></a>
												<?php else:?>
												<?php endif;
											?>
										</div>
									</div>

								<?php endwhile;?>
							<?php endif; ?>
						<?php wp_reset_postdata(); ?>
					</div>

				</div>
			</div>
    
		</section>
	<?php endif;?>

	<!-- Форма обратной связи --->

<?php
	$contactForm = get_field('forma_obratnoj_svyazi');

	if ( $contactForm ):
		$block_title = $contactForm['zagolovok'];
		$call_to = $contactForm['prizyv'];
		$btn_text = $contactForm['tekst_knopki'];
		$send_mess_text = $contactForm['prizyv_pisat_v_messendzhery'];
		?>
		<section class="contact-form">
			<div class="container">
				<div class="row">
					<h2 class="small-block-title col-12"><?php echo $block_title;?></h2>
				</div>
				<div class="row">
					<div class="content col-12" id="contact-form">
						<div class="form-wrapper">
							<div class="title-wrapper">
								<!--<h2 class="first-up"><?php /*echo $call_to;*/?></h2>
								<h3 class="first-up"><?php /*echo $block_title;*/?></h3>-->
							</div>
							<div class="form-pic">
								<picture>
									<source srcset="<?php echo THEME_PATH; ?>/assets/img/form-pic-mob.png" media="(max-width: 992px)">
									<img data-src="<?php echo THEME_PATH; ?>/assets/img/form-pic.png" alt="" class="lazy">
								</picture>

							</div>
							<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
							      method="post"
							      class="needs-validation"
							      novalidate
							      data-toggle="validator"
							      id="form_pageSMM">
								<input type="hidden" name="action" value="contact_form">
								<div class="form-step-1">
									<h3>1. <?php echo $formStep1Name;?></h3>
									<div class="ch-button-wrapper">
										<input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check1" autocomplete="off" value="target">
										<label class="ch-button" for="btn-check1"><?php echo $formChSrSocialAdvertising;?></label>
									</div>
                  <div class="ch-button-wrapper">
                    <input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check3" autocomplete="off" value="context">
                    <label class="ch-button" for="btn-check3"><?php echo $formChSrContextualAdvertising;?></label>
                  </div>
									<div class="ch-button-wrapper">
										<input type="checkbox" checked name="ch-service[]" class="btn-check" id="btn-check2" autocomplete="off" value="ved">
										<label class="ch-button active-ch" for="btn-check2"><?php echo $formChSrMaintainingSocial;?></label>
									</div>
									
									<div class="ch-button-wrapper">
										<input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check4" autocomplete="off" value="dev">
										<label class="ch-button" for="btn-check4"><?php echo $formChSrWebsiteDevelopment;?></label>
									</div>
									<div class="ch-button-wrapper">
										<input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check5" autocomplete="off" value="automation">
										<label class="ch-button" for="btn-check5"><?php echo $formChSrSalesAutomation;?></label>
									</div>
									<div class="ch-button-wrapper">
										<input type="checkbox" name="ch-service[]" class="btn-check" id="btn-check6" autocomplete="off" value="diz">
										<label class="ch-button" for="btn-check6"><?php echo $formChSrDesign;?></label>
									</div>

								</div>
								<div class="form-step-2">
									<h3>2. <?php echo $formStep2Name;?></h3>
									<div class="fields-wrapper">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="<?php echo $nameTextForm;?>" required autocomplete="off" >
											<div class="invalid-feedback"><?php echo $errorTextForm;?></div>
										</div>
										<div class="form-group phone-group">
											<input type="tel" name="phone" class="form-control" placeholder="+38 (___) ___ - __ - __ " required autocomplete="off">
											<div class="invalid-feedback"><?php echo $errorTextForm;?></div>
										</div>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="E-mail" required autocomplete="off">
											<div class="invalid-feedback"><?php echo $errorTextForm;?></div>
										</div>
									</div>
									<div class="form-group textarea-group">
										<textarea name="mess" class="form-control" placeholder="<?php echo $messTextForm;?>" autocomplete="off"></textarea>
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
										<button type="submit" class="button" onclick="document.getElementById('pageform').value = 'nospam';">
											<?php echo $btn_text;?>
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M0.0114107 1L0 9.55554L17.1429 12L0 14.4445L0.0114107 23L24 12L0.0114107 1Z" fill="#ffffff"/>
											</svg>
										</button>
										<input type="hidden" id="pageform"  name="moreinfo" value="">
										<input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response" />
										<input type="hidden" name="form-lang" value="<?php echo $siteLang;?>">
										<input type="hidden" name="page-name" value="<?php the_title(); ?>">
										<input type="hidden" name="home-url" value="<?php echo home_url('/');?>">
									</div>
								</div>
							</form>
						</div>

						<div class="messengers-wrapper">
							<h3><?php echo $send_mess_text;?></h3>
							<div class="messengers">
								<a href="<?php echo get_field('ssylka_na_telegramm_messendzher', 'options');?>" target="_blank">
                                    <span class="icon-wrapper">
                                        <svg width="50" height="42" viewBox="0 0 50 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M46.371 1.06005L3.15408 17.7252C0.204705 18.9099 0.221768 20.5552 2.61296 21.2889L13.7085 24.7501L39.3802 8.55293C40.5941 7.81437 41.7031 8.21168 40.7915 9.02093L19.9923 27.7921H19.9875L19.9923 27.7946L19.227 39.2313C20.3482 39.2313 20.843 38.717 21.4719 38.1101L26.8612 32.8694L38.0713 41.1496C40.1383 42.2879 41.6227 41.7029 42.137 39.2362L49.4958 4.55543C50.249 1.53537 48.3429 0.167929 46.371 1.06005V1.06005Z" fill="#221EC4"/>
</svg>
                                    </span>

									<p>Telegram</p>
								</a>
								<a href="<?php echo get_field('ssylka_na_fejsbuk_messendzher', 'options');?>" target="_blank">
                                    <span class="icon-wrapper">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M25.25 0.875C38.9829 0.875 49.625 10.9346 49.625 24.5187C49.625 38.1029 38.9829 48.1625 25.25 48.1625C22.8665 48.1686 20.493 47.8538 18.1934 47.2265C17.7615 47.1077 17.3019 47.1413 16.8918 47.3216L12.0558 49.4568C11.7636 49.5859 11.4442 49.6413 11.1256 49.6181C10.807 49.5948 10.499 49.4936 10.2287 49.3234C9.95833 49.1532 9.73394 48.9192 9.57524 48.642C9.41654 48.3648 9.32837 48.0528 9.3185 47.7335L9.18444 43.3948C9.17565 43.1309 9.1132 42.8717 9.00088 42.6328C8.88857 42.3939 8.72875 42.1804 8.53119 42.0054C3.78781 37.7666 0.875 31.6289 0.875 24.5187C0.875 10.9346 11.5196 0.875 25.25 0.875ZM10.6128 31.4339C9.92544 32.5235 11.2661 33.752 12.2923 32.972L19.9826 27.1366C20.2364 26.945 20.5457 26.8414 20.8637 26.8414C21.1817 26.8414 21.4911 26.945 21.7449 27.1366L27.4413 31.4023C27.8454 31.7053 28.3079 31.9214 28.7996 32.0369C29.2913 32.1523 29.8017 32.1647 30.2984 32.073C30.7951 31.9814 31.2675 31.7879 31.6857 31.5046C32.1039 31.2214 32.4589 30.8545 32.7282 30.4272L39.8872 19.0685C40.5746 17.9765 39.2339 16.748 38.2077 17.5256L30.5174 23.3658C30.2636 23.5574 29.9543 23.6611 29.6363 23.6611C29.3183 23.6611 29.0089 23.5574 28.7551 23.3658L23.0587 19.1002C22.6546 18.7971 22.1921 18.581 21.7004 18.4655C21.2087 18.3501 20.6983 18.3378 20.2016 18.4294C19.7049 18.521 19.2325 18.7145 18.8143 18.9978C18.3961 19.2811 18.0411 19.6479 17.7718 20.0752L10.6128 31.4339V31.4339Z" fill="#221EC4"/>
</svg>
                                    </span>

									<p>Messenger</p>
								</a>
								<!-- <a href="<?php echo get_field('ssylka_na_viber', 'options');?>" target="_blank">
                                    <span class="icon-wrapper">
                                        <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M27.7838 0.00948897C23.0892 0.0661608 12.9961 0.83763 7.35087 6.01671C3.15167 10.1775 1.68551 16.3292 1.51367 23.936C1.37107 31.5154 1.19923 45.7492 14.9193 49.6248V55.5278C14.9193 55.5278 14.8334 57.8898 16.3946 58.3742C18.3178 58.983 19.4128 57.1658 21.241 55.2134L24.6504 51.3579C34.0378 52.1385 41.2279 50.3396 42.056 50.0727C43.9609 49.4639 54.6902 48.0928 56.4433 33.8572C58.2422 19.1554 55.5677 9.89233 50.7396 5.70227H50.7103C49.2533 4.36043 43.3978 0.0935827 30.3158 0.0460515C30.3158 0.0460515 29.345 -0.019761 27.7838 0.00766085V0.00948897ZM27.9447 4.14288C29.2774 4.13374 30.0873 4.19041 30.0873 4.19041C41.1602 4.21966 46.4453 7.55233 47.6921 8.6748C51.7579 12.1592 53.8529 20.5101 52.3191 32.7841C50.8621 44.6852 42.1602 45.4384 40.5496 45.9521C39.8641 46.1715 33.5314 47.7327 25.5535 47.219C25.5535 47.219 19.6121 54.3889 17.7547 56.2353C17.4604 56.5589 17.1167 56.6539 16.8973 56.6064C16.5829 56.5296 16.4878 56.1402 16.5061 55.6064L16.5628 45.8095C4.92678 42.592 5.61232 30.4514 5.73664 24.1097C5.87923 17.7679 7.06934 12.5797 10.6122 9.06602C15.3818 4.75347 23.9521 4.17213 27.941 4.14288H27.9447ZM28.8222 10.4828C28.7264 10.4819 28.6314 10.4999 28.5426 10.5358C28.4539 10.5717 28.3731 10.6248 28.3049 10.6921C28.2368 10.7594 28.1826 10.8396 28.1456 10.9279C28.1085 11.0162 28.0894 11.111 28.0891 11.2068C28.0891 11.6163 28.4218 11.9398 28.8222 11.9398C30.6348 11.9054 32.4363 12.2301 34.1228 12.8953C35.8092 13.5604 37.3473 14.5529 38.6484 15.8155C41.3046 18.3949 42.5989 21.8611 42.6483 26.393C42.6483 26.7933 42.9719 27.1261 43.3814 27.1261V27.0968C43.5744 27.0973 43.7597 27.0215 43.8971 26.8859C44.0344 26.7503 44.1125 26.5659 44.1145 26.3729C44.2032 24.2397 43.8573 22.1108 43.0977 20.1155C42.3381 18.1202 41.1807 16.3002 39.6959 14.7661C36.802 11.938 33.1347 10.481 28.8222 10.481V10.4828ZM19.1862 12.1592C18.6687 12.0836 18.141 12.1875 17.6907 12.4535H17.6524C16.6071 13.0662 15.6656 13.8406 14.8626 14.7478C14.1954 15.5193 13.8334 16.2999 13.7383 17.0513C13.6817 17.4992 13.7201 17.9471 13.8535 18.3748L13.901 18.4041C14.6524 20.6125 15.6341 22.7367 16.8334 24.7367C18.3782 27.5465 20.2793 30.145 22.4896 32.4678L22.5554 32.5629L22.6596 32.6397L22.7254 32.7165L22.8022 32.7823C25.1335 34.9991 27.7383 36.909 30.5534 38.4659C33.7709 40.2173 35.7234 41.0454 36.8952 41.3891V41.4074C37.2389 41.5116 37.5515 41.5591 37.8659 41.5591C38.8646 41.4859 39.81 41.0805 40.5514 40.4074C41.4546 39.6042 42.2203 38.6588 42.8183 37.6085V37.5903C43.3796 36.5336 43.1894 35.5336 42.3796 34.8572C40.7577 33.4395 39.0038 32.1803 37.142 31.0968C35.8952 30.4203 34.6283 30.8298 34.1146 31.5154L33.0196 32.8956C32.4583 33.5812 31.4382 33.4861 31.4382 33.4861L31.409 33.5044C23.8022 31.5611 21.7729 23.8592 21.7729 23.8592C21.7729 23.8592 21.6779 22.8117 22.3817 22.2779L23.7528 21.1737C24.4091 20.6399 24.8661 19.3748 24.1623 18.1262C23.0863 16.2618 21.8298 14.5075 20.411 12.8886C20.1008 12.507 19.6657 12.2473 19.1825 12.1556L19.1862 12.1592ZM30.0873 14.331C29.1165 14.331 29.1165 15.7972 30.0964 15.7972C31.3035 15.8168 32.4949 16.074 33.6025 16.5543C34.7101 17.0345 35.7122 17.7283 36.5515 18.596C37.3172 19.4406 37.9055 20.4303 38.2817 21.5065C38.6579 22.5826 38.8143 23.7233 38.7416 24.861C38.7449 25.0536 38.8235 25.2371 38.9606 25.3724C39.0976 25.5077 39.2821 25.584 39.4747 25.585L39.5039 25.6233C39.6979 25.6219 39.8835 25.5442 40.0207 25.407C40.1579 25.2699 40.2356 25.0842 40.237 24.8903C40.3028 21.9854 39.3997 19.5485 37.6283 17.5961C35.8477 15.6436 33.3633 14.5486 30.1915 14.331H30.0873ZM31.2883 18.2725C30.2884 18.2432 30.25 19.7386 31.2408 19.7679C33.6503 19.8922 34.8203 21.1097 34.9738 23.6142C34.9772 23.8043 35.0548 23.9856 35.1901 24.1192C35.3254 24.2528 35.5076 24.3281 35.6978 24.329H35.727C35.8248 24.3248 35.9207 24.3012 36.0092 24.2596C36.0978 24.2179 36.1771 24.159 36.2426 24.0863C36.3082 24.0137 36.3585 23.9287 36.3909 23.8363C36.4232 23.744 36.4368 23.6461 36.4309 23.5484C36.259 20.2834 34.4784 18.4443 31.3176 18.2743H31.2883V18.2725Z" fill="#221EC4"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="58.5" height="58.5" fill="white"/>
</clipPath>
</defs>
</svg>
                                    </span>

									<p>Viber</p>
								</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif;?>

	<!-- Другие услуги --->

<?php
	$moreServices = get_field('blok_drugie_uslugi');

	if ( $moreServices ):

		$block_title = $moreServices['zagolovok_bloka'];
		$services = $moreServices['uslugi'];
		?>
		<section class="more-services animation-tracking">
			<div class="container">
				<div class="row first-up">
					<h2 class="block-title col-12"><?php echo $block_title;?></h2>
				</div>
				<div class="row second-up">
					<?php foreach ( $services as $item ):?>
						<a href="<?php echo $item['ssylka_na_straniczu'];?>" class="item col-lg-3 col-sm-6 col-12">
							<div class="inner">
								<div class="pic-wrapper">
									<img class="lazy" data-src="<?php echo $item['kartinka_uslugi'];?>" alt="">
								</div>
								<p><?php echo $item['nazvanie_uslugi'];?></p>
							</div>
						</a>
					<?php endforeach;?>
				</div>
			</div>
		</section>
	<?php endif;?>

<?php
	get_footer();
