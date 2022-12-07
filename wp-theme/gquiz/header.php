<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gquiz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gquiz' ); ?></a>

    <header class="header">
        <div class="container">
            <div class="top-line section-padding">
                <a href="/" class="header-logo">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/brain.webp" alt="log" class="header-logo__brain">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/logo-text.webp" alt="Гвоздатый Квиз" class="header-logo__text">
                </a>
                <div class="header-socials">
                    <ul class="header-icons">
                        <li class="header-icons__item">
                            <a href="https://t.me/+0-3EfQxGSRA3MGQy" target="_blank">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="35px" height="30px">
                                    <image  x="0px" y="0px" width="35px" height="30px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAeCAQAAAAMNG+hAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCxkTJzHDc9RNAAACC0lEQVRIx52VT0hUURSHvydTA1HRiMKY1Kpy4WDuEoIS0ijEli0K2lVgkBBG6EIYWkibitq5cVOBIMLk1BCtkiCwJIioJKZaGLPQCiz8M+r8Wsybx5uZe988fWdxOb9z7sc579x3nyO2/zhtXKCFHLfRtowY15j13OmtA+o4xRNWysTC1hAHGea7IZALC4hynhdsWsLpMIgE91msEBd45fOSwYC9XGGmSi4wyhE++JReO+I4Y/wzBLJ0coivZVqzCdDIDT4Z2RvcZRcnK1rMiephjrNmKfAjxwRXq+JpH4Y4g2StPeZJEiXCA0MsKRA4dDFBPuBdv6VNEOOlMdor4ARzgeNa4SYRQQtfLBn7BfwKhExzWAi6+WPJmBcCfloRS/ThCEE/G9asVBHTzpQxKcMBIdjJaGC9Q8KdFE1c57Xvi1nkkju/hrJDb7LTHkYl2GWesozod5UE32pACtRXYNyt+1glIwRnWKoBEXPuLsPH8IxVdotQt8ij4lJnuGLTROl2IsRDXMdviosJM4U4Rz3wmEwNzIy7mipllgVaEcM43GLd2tIyO+xNQYoGeoDfku7QybyllndaD6rmKOIz4qJ3ep4bE0e8HeZq+YEQZz3fYcBwB/TUwtxDiI4yrcOFl2yzePSCMAn+kqe5Qo0x6XPf+yK2IbCHuFHv8/6YAyEwdqOVFFkeloYtxH+LZUmahdZEjAAAAABJRU5ErkJggg==" />
                                </svg>
                            </a>
                        </li>
                        <li class="header-icons__item">
                            <a href="https://vk.com/gvozdiquiz" target="_blank">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="46px" height="28px">
                                    <image  x="0px" y="0px" width="46px" height="28px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAcCAQAAAC0AkUaAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCxkTKAuC5xEwAAACLklEQVRIx6WVy2sTURSHv5tgKJX6oqC2lZZWhWxqrN0I2UgtXRTRpVixCAriQpGiuNKtQv4EERdVEApFcOPGrrQbH+hSodT6oLaljVIfiTHHxcQw9547D+i5kJl7fud888vkTMYIJs8+DEGs80rWsMIMsMdK1HkjC6gwXeRpbWwqvJUvcJQ6ElqLtIe3HLbUYK2zxU0xStWp2Zqhq+k6iJ1csPZl/iiTm+lxXBtKbLJSOWowoHy9w1ieJjzeC8q3W/FYgCwrSihajVneJ8JnVcWwgMAdJUw6rbfj4YwofUYI4ENKqrDbaj4fByfDa0f9y6AgZIAZ5pwfLMcla18lLs5ScDL35AVAcO0rylmZ7SFv49HOaWfZ0Zb/D3Pw0caaar+VEn5faWNNrXG4qUp+0p0M56RvBF34No/3qSQ4eb47+VU6FFzgmgIIxyPhhwR6WVD5U9aUNU9amFOli+yKgJcY46vKTjvPR+j0hMf7M1q9c+5bv8K3xIELPPK0zNLPZCr4Ei1x8E6+pcJErbvOX55zrfENwYVSDFxgaoP4G3HwHcynQMwzzecI7XIkXOAgPxLhIwI5rlPxaHXORMIFRr1N4VVoVBZZ8qhVhiPhAscS8IVm5V4+evRVeiLhAkXPE+iBC/R58c/JxvTTwZM0cIH93ptzMfa7YzjNh2S4wCBlz0QljQU5zvHSSdbsd6wgcETNWM0IacL0MkQ/3bRR4RMP5Kmn5gBX6Wxuf/PwH/2iFpeglmUSAAAAAElFTkSuQmCC" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <a href="tel:+79037913869" class="header-icons__phone">(903)-791-38-69</a>
                </div>

                <a href="#callback" class="header-call">
                    заказать
                </a>

                <div class="buttons-wrapper">
                    <button class="hamburger hamburger--slider " id="hamburger" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                    </button>
                </div>
            </div><!-- /.top-line -->

            <div class="mobile-menu__wrapper section-padding">

                <nav class="mobile-menu">
                    <ul class="mobile-menu__list">
                        <li class="mobile-menu__item"><a href="#theming" class="mobile-menu__link">Тематики</a></li>
                        <li class="mobile-menu__item"><a href="#when" class="mobile-menu__link">Когда нужнен квиз</a></li>
                        <li class="mobile-menu__item"><a href="#structure" class="mobile-menu__link">Структура квиза</a></li>
                        <li class="mobile-menu__item"><a href="#pricing" class="mobile-menu__link">Цены</a></li>
                        <li class="mobile-menu__item"><a href="#mechanic" class="mobile-menu__link">Игровая механика</a></li>
                    </ul>
                    <hr>
                    <div class="mobile-footer">
                        <div class="header-socials header-socials_mobile">
                            <ul class="header-icons">
                                <li class="header-icons__item">
                                    <a href="https://t.me/+0-3EfQxGSRA3MGQy" target="_blank">
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="35px" height="30px">
                                            <image  x="0px" y="0px" width="35px" height="30px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAeCAQAAAAMNG+hAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCxkTJzHDc9RNAAACC0lEQVRIx52VT0hUURSHvydTA1HRiMKY1Kpy4WDuEoIS0ijEli0K2lVgkBBG6EIYWkibitq5cVOBIMLk1BCtkiCwJIioJKZaGLPQCiz8M+r8Wsybx5uZe988fWdxOb9z7sc579x3nyO2/zhtXKCFHLfRtowY15j13OmtA+o4xRNWysTC1hAHGea7IZALC4hynhdsWsLpMIgE91msEBd45fOSwYC9XGGmSi4wyhE++JReO+I4Y/wzBLJ0coivZVqzCdDIDT4Z2RvcZRcnK1rMiephjrNmKfAjxwRXq+JpH4Y4g2StPeZJEiXCA0MsKRA4dDFBPuBdv6VNEOOlMdor4ARzgeNa4SYRQQtfLBn7BfwKhExzWAi6+WPJmBcCfloRS/ThCEE/G9asVBHTzpQxKcMBIdjJaGC9Q8KdFE1c57Xvi1nkkju/hrJDb7LTHkYl2GWesozod5UE32pACtRXYNyt+1glIwRnWKoBEXPuLsPH8IxVdotQt8ij4lJnuGLTROl2IsRDXMdviosJM4U4Rz3wmEwNzIy7mipllgVaEcM43GLd2tIyO+xNQYoGeoDfku7QybyllndaD6rmKOIz4qJ3ep4bE0e8HeZq+YEQZz3fYcBwB/TUwtxDiI4yrcOFl2yzePSCMAn+kqe5Qo0x6XPf+yK2IbCHuFHv8/6YAyEwdqOVFFkeloYtxH+LZUmahdZEjAAAAABJRU5ErkJggg==" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="header-icons__item">
                                    <a href="https://vk.com/gvozdiquiz" target="_blank">
                                        <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="46px" height="28px">
                                            <image  x="0px" y="0px" width="46px" height="28px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAcCAQAAAC0AkUaAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmCxkTKAuC5xEwAAACLklEQVRIx6WVy2sTURSHv5tgKJX6oqC2lZZWhWxqrN0I2UgtXRTRpVixCAriQpGiuNKtQv4EERdVEApFcOPGrrQbH+hSodT6oLaljVIfiTHHxcQw9547D+i5kJl7fud888vkTMYIJs8+DEGs80rWsMIMsMdK1HkjC6gwXeRpbWwqvJUvcJQ6ElqLtIe3HLbUYK2zxU0xStWp2Zqhq+k6iJ1csPZl/iiTm+lxXBtKbLJSOWowoHy9w1ieJjzeC8q3W/FYgCwrSihajVneJ8JnVcWwgMAdJUw6rbfj4YwofUYI4ENKqrDbaj4fByfDa0f9y6AgZIAZ5pwfLMcla18lLs5ScDL35AVAcO0rylmZ7SFv49HOaWfZ0Zb/D3Pw0caaar+VEn5faWNNrXG4qUp+0p0M56RvBF34No/3qSQ4eb47+VU6FFzgmgIIxyPhhwR6WVD5U9aUNU9amFOli+yKgJcY46vKTjvPR+j0hMf7M1q9c+5bv8K3xIELPPK0zNLPZCr4Ei1x8E6+pcJErbvOX55zrfENwYVSDFxgaoP4G3HwHcynQMwzzecI7XIkXOAgPxLhIwI5rlPxaHXORMIFRr1N4VVoVBZZ8qhVhiPhAscS8IVm5V4+evRVeiLhAkXPE+iBC/R58c/JxvTTwZM0cIH93ptzMfa7YzjNh2S4wCBlz0QljQU5zvHSSdbsd6wgcETNWM0IacL0MkQ/3bRR4RMP5Kmn5gBX6Wxuf/PwH/2iFpeglmUSAAAAAElFTkSuQmCC" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                            <a href="tel:+79037913869" class="header-icons__phone">(903)-791-38-69</a>
                        </div>
                        <a href="#callback" class="header-call header-socials_mobile">
                            заказать
                        </a>
                    </div><!-- /.mobile-footer -->
                </nav>

            </div><!-- /.mobile-menu__wrapper -->

            <div class="header-advertisment section-padding">
                <h1><a href="#callback"> ЗАКАЖИ ГВОЗДАТЫЙ КВИЗ НА ЛЮБУЮ ТЕМУ ОТ 25.000 РУБ.!</a></h1>
            </div>
        </div>
    </header>