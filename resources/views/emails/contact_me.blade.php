<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Notre dossier de sponsoring - Les 4Tiches</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
    <style>
        @font-face {
            font-family: "Selima";
            font-style: italic;
            src: url('{{ $message->embed(public_path() . "/css/fonts/Selima.ttf") }}');
        }
        * {
            font-family: sans-serif !important;
        }
    </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .x-gmail-data-detectors,    /* Gmail */
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit @ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

        /* What it does: Forces Gmail app to display email full width */
        u ~ div .email-container {
            min-width: 100vw;
        }

    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 480px) {

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

            /* What it does: Adjust typography on small screens to improve readability */
            .email-container p {
                font-size: 17px !important;
            }
        }

    </style>
    <!-- Progressive Enhancements : END -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body width="100%" bgcolor="#222222" style="margin: 0; mso-line-height-rule: exactly;">
<center style="width: 100%; text-align: left; background: linear-gradient(45deg, #c19240 2.5%, #ffbd4a 2.5%, #ffbd4a 47.5%, #c19240 47.5%, #c19240 52.5%, #ffbd4a 52.5%, #ffbd4a 97.5%, #c19240 97.5%); background-size: 40px 40px; background-position: 0px 50px;">

    <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        Demande de contact de Les 4Tiches. Vous serez recontacter prochainement.
    </div>

    <div style="max-width: 680px; margin: auto;" class="email-container">
        <!--[if mso]>
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center">
            <tr>
                <td>
        <![endif]-->

        <!-- Email Header : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
            <tr>
                <td style="padding: 20px 0; text-align: center; font-size: 8px;">
                    <a href="https://les4tiches.fr" style="color: #ffffff !important; font-family: sans-serif; font-weight: normal;">Les 4Tiches</a>
                </td>
            </tr>
        </table>
        <!-- Email Header : END -->

        <!-- Email Body : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;" class="email-container">

            <!-- 1 Column Text + Button : BEGIN -->
            <tr>
                <td bgcolor="#fffef5">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="padding: 40px 40px 20px; text-align: center;">
                                <h1 style="margin: 0; font-family: 'Selima'; font-size: 24px; line-height: 125%; color: #ffbd4a; font-weight: normal; border: #ff5c5c solid 3px; padding: 16px;">
                                    <img src="{{ $message->embed(public_path() . '/img/2-transparent.png') }}" height="50" alt="alt_text" border="0" style="height: 50px; font-size: 20px; line-height: 140%; border-radius: 50%;"/>
                                    <a href="https://les4tiches.fr" style="color: #ff5c5c !important; font-family: 'Selima', Lato,'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: normal; text-decoration: none;">Les 4Tiches</a>
                                </h1>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; text-align: left;">
                                <p style="background-color: #ffbd4a; text-align: center; color: #ffffff; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 10px;"><strong>Ce n'est que le début d'une grande histoire !</strong></p>
                                <p>
                                    {!! $name !!},<br>
                                    Si vous recevez cet email, c'est que vous êtes en partie sensibilisé à la cause humanitaire du <strong>Raid 4L Trophy</strong>. Nous vous <strong>remercions</strong> donc pour l'engouement que vous portez à nos ambitions pour le projet.
                                </p>
                                <p>
                                    Nous vous joignons dans cet email notre <strong>dossier de sponsoring</strong> qui vous permettra de nous découvrir et de comprendre nos objectifs à accomplir lors de cette <strong>aventure</strong>.
                                </p>
                                <p>
                                    Nous mettons à disposition différents moyens, pour que les plus <strong>gros sponsors</strong> comme les <strong>petites bourses</strong> puissent nous aider à leur manière.<br>
                                    <a href="https://www.helloasso.com/associations/les-4tiches/collectes/participation-au-raid-4l-trophy">Voir notre page de financement participatif</a>
                                </p>
                                <p>Si vous avez la moindre question avant que l'on vous recontacte, vous pouvez déjà <strong>répondre à cet email</strong>, ou nous contacter <strong>par téléphone</strong> :
                                <ul>
                                    <li><strong>Dimitri Sandron :</strong> 06.48.59.19.03</li>
                                    <li><strong>Rémi Sany :</strong> 06.41.98.09.21</li>
                                </ul>
                                Nous vous répondrons le plus rapidement possible.
                                </p>
                                <p>
                                    Enfin, n'hésitez pas à parcourir notre <a href="https://les4tiches.fr">Site internet</a> si ce n'est pas encore fait. Celui-ci complètera notre plaquette de présentation (joint à ce mail). Ou encore visiter notre <a href="https://www.facebook.com/Les4Tiches/">Page Facebook</a> sur laquelle vous pourrez suivre nos dernières actualités de l'association Les 4Tiches.
                                </p>
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <!-- 1 Column Text + Button : END -->

        </table>
        <!-- Email Body : END -->

        <!-- Email Footer : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 12px; line-height: 140%;">
            <tr>
                <td style="padding: 20px 10px; width: 100%; font-family: sans-serif; font-size: 12px; line-height: 140%; text-align: center; color: #4c4c4c !important;" class="x-gmail-data-detectors">
                    Les 4Tiches<br><a href="mailto:contact@les4tiches.fr">contact@les4tiches.fr</a>
                    {{--<br><br>--}}
                    {{--<unsubscribe style="color: #888888; text-decoration: underline;">Se désinscrire</unsubscribe>--}}
                </td>
            </tr>
        </table>
        <!-- Email Footer : END -->

        <!--[if mso]>
        </td>
        </tr>
        </table>
        <![endif]-->
    </div>

    <!-- Full Bleed Background Section : BEGIN -->
    <table role="presentation" bgcolor="#ff5c5c" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
        <tr>
            <td valign="top" align="center">
                <div style="max-width: 680px; margin: auto;" class="email-container">
                    <!--[if mso]>
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center">
                        <tr>
                            <td>
                    <![endif]-->
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="padding: 20px; text-align: center; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #ffffff;">
                                <p style="margin: 0;">Copyrights Les 4Tiches 2018
                                    <a href="https://www.facebook.com/Les4Tiches/"><img src="{{ $message->embed(public_path() . '/img/facebook.png') }}" height="30" alt="alt_text" border="0" style="height: 30px; font-size: 20px; line-height: 140%; border-radius: 50%;"/></a>
                                </p>
                            </td>
                        </tr>
                    </table>
                    <!--[if mso]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
                </div>
            </td>
        </tr>
    </table>
    <!-- Full Bleed Background Section : END -->

</center>
</body>
</html>