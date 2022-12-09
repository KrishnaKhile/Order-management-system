<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <style>
        .fa,
        .fab,
        .fad,
        .fal,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-lg {
            font-size: 1.33333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-xs {
            font-size: .75em
        }

        .fa-sm {
            font-size: .875em
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit
        }

        .fa-border {
            border: .08em solid #eee;
            border-radius: .1em;
            padding: .2em .25em .15em
        }

        .fa-pull-left {
            float: left
        }

        .fa-pull-right {
            float: right
        }

        .fa.fa-pull-left,
        .fab.fa-pull-left,
        .fal.fa-pull-left,
        .far.fa-pull-left,
        .fas.fa-pull-left {
            margin-right: .3em
        }

        .fa.fa-pull-right,
        .fab.fa-pull-right,
        .fal.fa-pull-right,
        .far.fa-pull-right,
        .fas.fa-pull-right {
            margin-left: .3em
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s linear infinite;
            animation: fa-spin 2s linear infinite
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s steps(8) infinite;
            animation: fa-spin 1s steps(8) infinite
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        .fa-flip-vertical {
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical,
        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1);
            transform: scale(-1)
        }

        :root .fa-flip-both,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270 {
            -webkit-filter: none;
            filter: none
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            line-height: 2em;
            position: relative;
            vertical-align: middle;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            left: 0;
            position: absolute;
            text-align: center;
            width: 100%
        }

        .fa-stack-1x {
            line-height: inherit
        }

        .fa-stack-2x {
            font-size: 2em
        }

        .fa-inverse {
            color: #fff
        }

        .fa-500px:before {
            content: "\f26e"
        }

        .fa-accessible-icon:before {
            content: "\f368"
        }

        .fa-accusoft:before {
            content: "\f369"
        }

        .fa-acquisitions-incorporated:before {
            content: "\f6af"
        }

        .fa-ad:before {
            content: "\f641"
        }

        .fa-address-book:before {
            content: "\f2b9"
        }

        .fa-address-card:before {
            content: "\f2bb"
        }

        .fa-adjust:before {
            content: "\f042"
        }

        .fa-adn:before {
            content: "\f170"
        }

        .fa-adversal:before {
            content: "\f36a"
        }

        .fa-affiliatetheme:before {
            content: "\f36b"
        }

        .fa-air-freshener:before {
            content: "\f5d0"
        }

        .fa-airbnb:before {
            content: "\f834"
        }

        .fa-algolia:before {
            content: "\f36c"
        }

        .fa-align-center:before {
            content: "\f037"
        }

        .fa-align-justify:before {
            content: "\f039"
        }

        .fa-align-left:before {
            content: "\f036"
        }

        .fa-align-right:before {
            content: "\f038"
        }

        .fa-alipay:before {
            content: "\f642"
        }

        .fa-allergies:before {
            content: "\f461"
        }

        .fa-amazon:before {
            content: "\f270"
        }

        .fa-amazon-pay:before {
            content: "\f42c"
        }

        .fa-ambulance:before {
            content: "\f0f9"
        }

        .fa-american-sign-language-interpreting:before {
            content: "\f2a3"
        }

        .fa-amilia:before {
            content: "\f36d"
        }

        .fa-anchor:before {
            content: "\f13d"
        }

        .fa-android:before {
            content: "\f17b"
        }

        .fa-angellist:before {
            content: "\f209"
        }

        .fa-angle-double-down:before {
            content: "\f103"
        }

        .fa-angle-double-left:before {
            content: "\f100"
        }

        .fa-angle-double-right:before {
            content: "\f101"
        }

        .fa-angle-double-up:before {
            content: "\f102"
        }

        .fa-angle-down:before {
            content: "\f107"
        }

        .fa-angle-left:before {
            content: "\f104"
        }

        .fa-angle-right:before {
            content: "\f105"
        }

        .fa-angle-up:before {
            content: "\f106"
        }

        .fa-angry:before {
            content: "\f556"
        }

        .fa-angrycreative:before {
            content: "\f36e"
        }

        .fa-angular:before {
            content: "\f420"
        }

        .fa-ankh:before {
            content: "\f644"
        }

        .fa-app-store:before {
            content: "\f36f"
        }

        .fa-app-store-ios:before {
            content: "\f370"
        }

        .fa-apper:before {
            content: "\f371"
        }

        .fa-apple:before {
            content: "\f179"
        }

        .fa-apple-alt:before {
            content: "\f5d1"
        }

        .fa-apple-pay:before {
            content: "\f415"
        }

        .fa-archive:before {
            content: "\f187"
        }

        .fa-archway:before {
            content: "\f557"
        }

        .fa-arrow-alt-circle-down:before {
            content: "\f358"
        }

        .fa-arrow-alt-circle-left:before {
            content: "\f359"
        }

        .fa-arrow-alt-circle-right:before {
            content: "\f35a"
        }

        .fa-arrow-alt-circle-up:before {
            content: "\f35b"
        }

        .fa-arrow-circle-down:before {
            content: "\f0ab"
        }

        .fa-arrow-circle-left:before {
            content: "\f0a8"
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9"
        }

        .fa-arrow-circle-up:before {
            content: "\f0aa"
        }

        .fa-arrow-down:before {
            content: "\f063"
        }

        .fa-arrow-left:before {
            content: "\f060"
        }

        .fa-arrow-right:before {
            content: "\f061"
        }

        .fa-arrow-up:before {
            content: "\f062"
        }

        .fa-arrows-alt:before {
            content: "\f0b2"
        }

        .fa-arrows-alt-h:before {
            content: "\f337"
        }

        .fa-arrows-alt-v:before {
            content: "\f338"
        }

        .fa-artstation:before {
            content: "\f77a"
        }

        .fa-assistive-listening-systems:before {
            content: "\f2a2"
        }

        .fa-asterisk:before {
            content: "\f069"
        }

        .fa-asymmetrik:before {
            content: "\f372"
        }

        .fa-at:before {
            content: "\f1fa"
        }

        .fa-atlas:before {
            content: "\f558"
        }

        .fa-atlassian:before {
            content: "\f77b"
        }

        .fa-atom:before {
            content: "\f5d2"
        }

        .fa-audible:before {
            content: "\f373"
        }

        .fa-audio-description:before {
            content: "\f29e"
        }

        .fa-autoprefixer:before {
            content: "\f41c"
        }

        .fa-avianex:before {
            content: "\f374"
        }

        .fa-aviato:before {
            content: "\f421"
        }

        .fa-award:before {
            content: "\f559"
        }

        .fa-aws:before {
            content: "\f375"
        }

        .fa-baby:before {
            content: "\f77c"
        }

        .fa-baby-carriage:before {
            content: "\f77d"
        }

        .fa-backspace:before {
            content: "\f55a"
        }

        .fa-backward:before {
            content: "\f04a"
        }

        .fa-bacon:before {
            content: "\f7e5"
        }

        .fa-bacteria:before {
            content: "\e059"
        }

        .fa-bacterium:before {
            content: "\e05a"
        }

        .fa-bahai:before {
            content: "\f666"
        }

        .fa-balance-scale:before {
            content: "\f24e"
        }

        .fa-balance-scale-left:before {
            content: "\f515"
        }

        .fa-balance-scale-right:before {
            content: "\f516"
        }

        .fa-ban:before {
            content: "\f05e"
        }

        .fa-band-aid:before {
            content: "\f462"
        }

        .fa-bandcamp:before {
            content: "\f2d5"
        }

        .fa-barcode:before {
            content: "\f02a"
        }

        .fa-bars:before {
            content: "\f0c9"
        }

        .fa-baseball-ball:before {
            content: "\f433"
        }

        .fa-basketball-ball:before {
            content: "\f434"
        }

        .fa-bath:before {
            content: "\f2cd"
        }

        .fa-battery-empty:before {
            content: "\f244"
        }

        .fa-battery-full:before {
            content: "\f240"
        }

        .fa-battery-half:before {
            content: "\f242"
        }

        .fa-battery-quarter:before {
            content: "\f243"
        }

        .fa-battery-three-quarters:before {
            content: "\f241"
        }

        .fa-battle-net:before {
            content: "\f835"
        }

        .fa-bed:before {
            content: "\f236"
        }

        .fa-beer:before {
            content: "\f0fc"
        }

        .fa-behance:before {
            content: "\f1b4"
        }

        .fa-behance-square:before {
            content: "\f1b5"
        }

        .fa-bell:before {
            content: "\f0f3"
        }

        .fa-bell-slash:before {
            content: "\f1f6"
        }

        .fa-bezier-curve:before {
            content: "\f55b"
        }

        .fa-bible:before {
            content: "\f647"
        }

        .fa-bicycle:before {
            content: "\f206"
        }

        .fa-biking:before {
            content: "\f84a"
        }

        .fa-bimobject:before {
            content: "\f378"
        }

        .fa-binoculars:before {
            content: "\f1e5"
        }

        .fa-biohazard:before {
            content: "\f780"
        }

        .fa-birthday-cake:before {
            content: "\f1fd"
        }

        .fa-bitbucket:before {
            content: "\f171"
        }

        .fa-bitcoin:before {
            content: "\f379"
        }

        .fa-bity:before {
            content: "\f37a"
        }

        .fa-black-tie:before {
            content: "\f27e"
        }

        .fa-blackberry:before {
            content: "\f37b"
        }

        .fa-blender:before {
            content: "\f517"
        }

        .fa-blender-phone:before {
            content: "\f6b6"
        }

        .fa-blind:before {
            content: "\f29d"
        }

        .fa-blog:before {
            content: "\f781"
        }

        .fa-blogger:before {
            content: "\f37c"
        }

        .fa-blogger-b:before {
            content: "\f37d"
        }

        .fa-bluetooth:before {
            content: "\f293"
        }

        .fa-bluetooth-b:before {
            content: "\f294"
        }

        .fa-bold:before {
            content: "\f032"
        }

        .fa-bolt:before {
            content: "\f0e7"
        }

        .fa-bomb:before {
            content: "\f1e2"
        }

        .fa-bone:before {
            content: "\f5d7"
        }

        .fa-bong:before {
            content: "\f55c"
        }

        .fa-book:before {
            content: "\f02d"
        }

        .fa-book-dead:before {
            content: "\f6b7"
        }

        .fa-book-medical:before {
            content: "\f7e6"
        }

        .fa-book-open:before {
            content: "\f518"
        }

        .fa-book-reader:before {
            content: "\f5da"
        }

        .fa-bookmark:before {
            content: "\f02e"
        }

        .fa-bootstrap:before {
            content: "\f836"
        }

        .fa-border-all:before {
            content: "\f84c"
        }

        .fa-border-none:before {
            content: "\f850"
        }

        .fa-border-style:before {
            content: "\f853"
        }

        .fa-bowling-ball:before {
            content: "\f436"
        }

        .fa-box:before {
            content: "\f466"
        }

        .fa-box-open:before {
            content: "\f49e"
        }

        .fa-box-tissue:before {
            content: "\e05b"
        }

        .fa-boxes:before {
            content: "\f468"
        }

        .fa-braille:before {
            content: "\f2a1"
        }

        .fa-brain:before {
            content: "\f5dc"
        }

        .fa-bread-slice:before {
            content: "\f7ec"
        }

        .fa-briefcase:before {
            content: "\f0b1"
        }

        .fa-briefcase-medical:before {
            content: "\f469"
        }

        .fa-broadcast-tower:before {
            content: "\f519"
        }

        .fa-broom:before {
            content: "\f51a"
        }

        .fa-brush:before {
            content: "\f55d"
        }

        .fa-btc:before {
            content: "\f15a"
        }

        .fa-buffer:before {
            content: "\f837"
        }

        .fa-bug:before {
            content: "\f188"
        }

        .fa-building:before {
            content: "\f1ad"
        }

        .fa-bullhorn:before {
            content: "\f0a1"
        }

        .fa-bullseye:before {
            content: "\f140"
        }

        .fa-burn:before {
            content: "\f46a"
        }

        .fa-buromobelexperte:before {
            content: "\f37f"
        }

        .fa-bus:before {
            content: "\f207"
        }

        .fa-bus-alt:before {
            content: "\f55e"
        }

        .fa-business-time:before {
            content: "\f64a"
        }

        .fa-buy-n-large:before {
            content: "\f8a6"
        }

        .fa-buysellads:before {
            content: "\f20d"
        }

        .fa-calculator:before {
            content: "\f1ec"
        }

        .fa-calendar:before {
            content: "\f133"
        }

        .fa-calendar-alt:before {
            content: "\f073"
        }

        .fa-calendar-check:before {
            content: "\f274"
        }

        .fa-calendar-day:before {
            content: "\f783"
        }

        .fa-calendar-minus:before {
            content: "\f272"
        }

        .fa-calendar-plus:before {
            content: "\f271"
        }

        .fa-calendar-times:before {
            content: "\f273"
        }

        .fa-calendar-week:before {
            content: "\f784"
        }

        .fa-camera:before {
            content: "\f030"
        }

        .fa-camera-retro:before {
            content: "\f083"
        }

        .fa-campground:before {
            content: "\f6bb"
        }

        .fa-canadian-maple-leaf:before {
            content: "\f785"
        }

        .fa-candy-cane:before {
            content: "\f786"
        }

        .fa-cannabis:before {
            content: "\f55f"
        }

        .fa-capsules:before {
            content: "\f46b"
        }

        .fa-car:before {
            content: "\f1b9"
        }

        .fa-car-alt:before {
            content: "\f5de"
        }

        .fa-car-battery:before {
            content: "\f5df"
        }

        .fa-car-crash:before {
            content: "\f5e1"
        }

        .fa-car-side:before {
            content: "\f5e4"
        }

        .fa-caravan:before {
            content: "\f8ff"
        }

        .fa-caret-down:before {
            content: "\f0d7"
        }

        .fa-caret-left:before {
            content: "\f0d9"
        }

        .fa-caret-right:before {
            content: "\f0da"
        }

        .fa-caret-square-down:before {
            content: "\f150"
        }

        .fa-caret-square-left:before {
            content: "\f191"
        }

        .fa-caret-square-right:before {
            content: "\f152"
        }

        .fa-caret-square-up:before {
            content: "\f151"
        }

        .fa-caret-up:before {
            content: "\f0d8"
        }

        .fa-carrot:before {
            content: "\f787"
        }

        .fa-cart-arrow-down:before {
            content: "\f218"
        }

        .fa-cart-plus:before {
            content: "\f217"
        }

        .fa-cash-register:before {
            content: "\f788"
        }

        .fa-cat:before {
            content: "\f6be"
        }

        .fa-cc-amazon-pay:before {
            content: "\f42d"
        }

        .fa-cc-amex:before {
            content: "\f1f3"
        }

        .fa-cc-apple-pay:before {
            content: "\f416"
        }

        .fa-cc-diners-club:before {
            content: "\f24c"
        }

        .fa-cc-discover:before {
            content: "\f1f2"
        }

        .fa-cc-jcb:before {
            content: "\f24b"
        }

        .fa-cc-mastercard:before {
            content: "\f1f1"
        }

        .fa-cc-paypal:before {
            content: "\f1f4"
        }

        .fa-cc-stripe:before {
            content: "\f1f5"
        }

        .fa-cc-visa:before {
            content: "\f1f0"
        }

        .fa-centercode:before {
            content: "\f380"
        }

        .fa-centos:before {
            content: "\f789"
        }

        .fa-certificate:before {
            content: "\f0a3"
        }

        .fa-chair:before {
            content: "\f6c0"
        }

        .fa-chalkboard:before {
            content: "\f51b"
        }

        .fa-chalkboard-teacher:before {
            content: "\f51c"
        }

        .fa-charging-station:before {
            content: "\f5e7"
        }

        .fa-chart-area:before {
            content: "\f1fe"
        }

        .fa-chart-bar:before {
            content: "\f080"
        }

        .fa-chart-line:before {
            content: "\f201"
        }

        .fa-chart-pie:before {
            content: "\f200"
        }

        .fa-check:before {
            content: "\f00c"
        }

        .fa-check-circle:before {
            content: "\f058"
        }

        .fa-check-double:before {
            content: "\f560"
        }

        .fa-check-square:before {
            content: "\f14a"
        }

        .fa-cheese:before {
            content: "\f7ef"
        }

        .fa-chess:before {
            content: "\f439"
        }

        .fa-chess-bishop:before {
            content: "\f43a"
        }

        .fa-chess-board:before {
            content: "\f43c"
        }

        .fa-chess-king:before {
            content: "\f43f"
        }

        .fa-chess-knight:before {
            content: "\f441"
        }

        .fa-chess-pawn:before {
            content: "\f443"
        }

        .fa-chess-queen:before {
            content: "\f445"
        }

        .fa-chess-rook:before {
            content: "\f447"
        }

        .fa-chevron-circle-down:before {
            content: "\f13a"
        }

        .fa-chevron-circle-left:before {
            content: "\f137"
        }

        .fa-chevron-circle-right:before {
            content: "\f138"
        }

        .fa-chevron-circle-up:before {
            content: "\f139"
        }

        .fa-chevron-down:before {
            content: "\f078"
        }

        .fa-chevron-left:before {
            content: "\f053"
        }

        .fa-chevron-right:before {
            content: "\f054"
        }

        .fa-chevron-up:before {
            content: "\f077"
        }

        .fa-child:before {
            content: "\f1ae"
        }

        .fa-chrome:before {
            content: "\f268"
        }

        .fa-chromecast:before {
            content: "\f838"
        }

        .fa-church:before {
            content: "\f51d"
        }

        .fa-circle:before {
            content: "\f111"
        }

        .fa-circle-notch:before {
            content: "\f1ce"
        }

        .fa-city:before {
            content: "\f64f"
        }

        .fa-clinic-medical:before {
            content: "\f7f2"
        }

        .fa-clipboard:before {
            content: "\f328"
        }

        .fa-clipboard-check:before {
            content: "\f46c"
        }

        .fa-clipboard-list:before {
            content: "\f46d"
        }

        .fa-clock:before {
            content: "\f017"
        }

        .fa-clone:before {
            content: "\f24d"
        }

        .fa-closed-captioning:before {
            content: "\f20a"
        }

        .fa-cloud:before {
            content: "\f0c2"
        }

        .fa-cloud-download-alt:before {
            content: "\f381"
        }

        .fa-cloud-meatball:before {
            content: "\f73b"
        }

        .fa-cloud-moon:before {
            content: "\f6c3"
        }

        .fa-cloud-moon-rain:before {
            content: "\f73c"
        }

        .fa-cloud-rain:before {
            content: "\f73d"
        }

        .fa-cloud-showers-heavy:before {
            content: "\f740"
        }

        .fa-cloud-sun:before {
            content: "\f6c4"
        }

        .fa-cloud-sun-rain:before {
            content: "\f743"
        }

        .fa-cloud-upload-alt:before {
            content: "\f382"
        }

        .fa-cloudflare:before {
            content: "\e07d"
        }

        .fa-cloudscale:before {
            content: "\f383"
        }

        .fa-cloudsmith:before {
            content: "\f384"
        }

        .fa-cloudversify:before {
            content: "\f385"
        }

        .fa-cocktail:before {
            content: "\f561"
        }

        .fa-code:before {
            content: "\f121"
        }

        .fa-code-branch:before {
            content: "\f126"
        }

        .fa-codepen:before {
            content: "\f1cb"
        }

        .fa-codiepie:before {
            content: "\f284"
        }

        .fa-coffee:before {
            content: "\f0f4"
        }

        .fa-cog:before {
            content: "\f013"
        }

        .fa-cogs:before {
            content: "\f085"
        }

        .fa-coins:before {
            content: "\f51e"
        }

        .fa-columns:before {
            content: "\f0db"
        }

        .fa-comment:before {
            content: "\f075"
        }

        .fa-comment-alt:before {
            content: "\f27a"
        }

        .fa-comment-dollar:before {
            content: "\f651"
        }

        .fa-comment-dots:before {
            content: "\f4ad"
        }

        .fa-comment-medical:before {
            content: "\f7f5"
        }

        .fa-comment-slash:before {
            content: "\f4b3"
        }

        .fa-comments:before {
            content: "\f086"
        }

        .fa-comments-dollar:before {
            content: "\f653"
        }

        .fa-compact-disc:before {
            content: "\f51f"
        }

        .fa-compass:before {
            content: "\f14e"
        }

        .fa-compress:before {
            content: "\f066"
        }

        .fa-compress-alt:before {
            content: "\f422"
        }

        .fa-compress-arrows-alt:before {
            content: "\f78c"
        }

        .fa-concierge-bell:before {
            content: "\f562"
        }

        .fa-confluence:before {
            content: "\f78d"
        }

        .fa-connectdevelop:before {
            content: "\f20e"
        }

        .fa-contao:before {
            content: "\f26d"
        }

        .fa-cookie:before {
            content: "\f563"
        }

        .fa-cookie-bite:before {
            content: "\f564"
        }

        .fa-copy:before {
            content: "\f0c5"
        }

        .fa-copyright:before {
            content: "\f1f9"
        }

        .fa-cotton-bureau:before {
            content: "\f89e"
        }

        .fa-couch:before {
            content: "\f4b8"
        }

        .fa-cpanel:before {
            content: "\f388"
        }

        .fa-creative-commons:before {
            content: "\f25e"
        }

        .fa-creative-commons-by:before {
            content: "\f4e7"
        }

        .fa-creative-commons-nc:before {
            content: "\f4e8"
        }

        .fa-creative-commons-nc-eu:before {
            content: "\f4e9"
        }

        .fa-creative-commons-nc-jp:before {
            content: "\f4ea"
        }

        .fa-creative-commons-nd:before {
            content: "\f4eb"
        }

        .fa-creative-commons-pd:before {
            content: "\f4ec"
        }

        .fa-creative-commons-pd-alt:before {
            content: "\f4ed"
        }

        .fa-creative-commons-remix:before {
            content: "\f4ee"
        }

        .fa-creative-commons-sa:before {
            content: "\f4ef"
        }

        .fa-creative-commons-sampling:before {
            content: "\f4f0"
        }

        .fa-creative-commons-sampling-plus:before {
            content: "\f4f1"
        }

        .fa-creative-commons-share:before {
            content: "\f4f2"
        }

        .fa-creative-commons-zero:before {
            content: "\f4f3"
        }

        .fa-credit-card:before {
            content: "\f09d"
        }

        .fa-critical-role:before {
            content: "\f6c9"
        }

        .fa-crop:before {
            content: "\f125"
        }

        .fa-crop-alt:before {
            content: "\f565"
        }

        .fa-cross:before {
            content: "\f654"
        }

        .fa-crosshairs:before {
            content: "\f05b"
        }

        .fa-crow:before {
            content: "\f520"
        }

        .fa-crown:before {
            content: "\f521"
        }

        .fa-crutch:before {
            content: "\f7f7"
        }

        .fa-css3:before {
            content: "\f13c"
        }

        .fa-css3-alt:before {
            content: "\f38b"
        }

        .fa-cube:before {
            content: "\f1b2"
        }

        .fa-cubes:before {
            content: "\f1b3"
        }

        .fa-cut:before {
            content: "\f0c4"
        }

        .fa-cuttlefish:before {
            content: "\f38c"
        }

        .fa-d-and-d:before {
            content: "\f38d"
        }

        .fa-d-and-d-beyond:before {
            content: "\f6ca"
        }

        .fa-dailymotion:before {
            content: "\e052"
        }

        .fa-dashcube:before {
            content: "\f210"
        }

        .fa-database:before {
            content: "\f1c0"
        }

        .fa-deaf:before {
            content: "\f2a4"
        }

        .fa-deezer:before {
            content: "\e077"
        }

        .fa-delicious:before {
            content: "\f1a5"
        }

        .fa-democrat:before {
            content: "\f747"
        }

        .fa-deploydog:before {
            content: "\f38e"
        }

        .fa-deskpro:before {
            content: "\f38f"
        }

        .fa-desktop:before {
            content: "\f108"
        }

        .fa-dev:before {
            content: "\f6cc"
        }

        .fa-deviantart:before {
            content: "\f1bd"
        }

        .fa-dharmachakra:before {
            content: "\f655"
        }

        .fa-dhl:before {
            content: "\f790"
        }

        .fa-diagnoses:before {
            content: "\f470"
        }

        .fa-diaspora:before {
            content: "\f791"
        }

        .fa-dice:before {
            content: "\f522"
        }

        .fa-dice-d20:before {
            content: "\f6cf"
        }

        .fa-dice-d6:before {
            content: "\f6d1"
        }

        .fa-dice-five:before {
            content: "\f523"
        }

        .fa-dice-four:before {
            content: "\f524"
        }

        .fa-dice-one:before {
            content: "\f525"
        }

        .fa-dice-six:before {
            content: "\f526"
        }

        .fa-dice-three:before {
            content: "\f527"
        }

        .fa-dice-two:before {
            content: "\f528"
        }

        .fa-digg:before {
            content: "\f1a6"
        }

        .fa-digital-ocean:before {
            content: "\f391"
        }

        .fa-digital-tachograph:before {
            content: "\f566"
        }

        .fa-directions:before {
            content: "\f5eb"
        }

        .fa-discord:before {
            content: "\f392"
        }

        .fa-discourse:before {
            content: "\f393"
        }

        .fa-disease:before {
            content: "\f7fa"
        }

        .fa-divide:before {
            content: "\f529"
        }

        .fa-dizzy:before {
            content: "\f567"
        }

        .fa-dna:before {
            content: "\f471"
        }

        .fa-dochub:before {
            content: "\f394"
        }

        .fa-docker:before {
            content: "\f395"
        }

        .fa-dog:before {
            content: "\f6d3"
        }

        .fa-dollar-sign:before {
            content: "\f155"
        }

        .fa-dolly:before {
            content: "\f472"
        }

        .fa-dolly-flatbed:before {
            content: "\f474"
        }

        .fa-donate:before {
            content: "\f4b9"
        }

        .fa-door-closed:before {
            content: "\f52a"
        }

        .fa-door-open:before {
            content: "\f52b"
        }

        .fa-dot-circle:before {
            content: "\f192"
        }

        .fa-dove:before {
            content: "\f4ba"
        }

        .fa-download:before {
            content: "\f019"
        }

        .fa-draft2digital:before {
            content: "\f396"
        }

        .fa-drafting-compass:before {
            content: "\f568"
        }

        .fa-dragon:before {
            content: "\f6d5"
        }

        .fa-draw-polygon:before {
            content: "\f5ee"
        }

        .fa-dribbble:before {
            content: "\f17d"
        }

        .fa-dribbble-square:before {
            content: "\f397"
        }

        .fa-dropbox:before {
            content: "\f16b"
        }

        .fa-drum:before {
            content: "\f569"
        }

        .fa-drum-steelpan:before {
            content: "\f56a"
        }

        .fa-drumstick-bite:before {
            content: "\f6d7"
        }

        .fa-drupal:before {
            content: "\f1a9"
        }

        .fa-dumbbell:before {
            content: "\f44b"
        }

        .fa-dumpster:before {
            content: "\f793"
        }

        .fa-dumpster-fire:before {
            content: "\f794"
        }

        .fa-dungeon:before {
            content: "\f6d9"
        }

        .fa-dyalog:before {
            content: "\f399"
        }

        .fa-earlybirds:before {
            content: "\f39a"
        }

        .fa-ebay:before {
            content: "\f4f4"
        }

        .fa-edge:before {
            content: "\f282"
        }

        .fa-edge-legacy:before {
            content: "\e078"
        }

        .fa-edit:before {
            content: "\f044"
        }

        .fa-egg:before {
            content: "\f7fb"
        }

        .fa-eject:before {
            content: "\f052"
        }

        .fa-elementor:before {
            content: "\f430"
        }

        .fa-ellipsis-h:before {
            content: "\f141"
        }

        .fa-ellipsis-v:before {
            content: "\f142"
        }

        .fa-ello:before {
            content: "\f5f1"
        }

        .fa-ember:before {
            content: "\f423"
        }

        .fa-empire:before {
            content: "\f1d1"
        }

        .fa-envelope:before {
            content: "\f0e0"
        }

        .fa-envelope-open:before {
            content: "\f2b6"
        }

        .fa-envelope-open-text:before {
            content: "\f658"
        }

        .fa-envelope-square:before {
            content: "\f199"
        }

        .fa-envira:before {
            content: "\f299"
        }

        .fa-equals:before {
            content: "\f52c"
        }

        .fa-eraser:before {
            content: "\f12d"
        }

        .fa-erlang:before {
            content: "\f39d"
        }

        .fa-ethereum:before {
            content: "\f42e"
        }

        .fa-ethernet:before {
            content: "\f796"
        }

        .fa-etsy:before {
            content: "\f2d7"
        }

        .fa-euro-sign:before {
            content: "\f153"
        }

        .fa-evernote:before {
            content: "\f839"
        }

        .fa-exchange-alt:before {
            content: "\f362"
        }

        .fa-exclamation:before {
            content: "\f12a"
        }

        .fa-exclamation-circle:before {
            content: "\f06a"
        }

        .fa-exclamation-triangle:before {
            content: "\f071"
        }

        .fa-expand:before {
            content: "\f065"
        }

        .fa-expand-alt:before {
            content: "\f424"
        }

        .fa-expand-arrows-alt:before {
            content: "\f31e"
        }

        .fa-expeditedssl:before {
            content: "\f23e"
        }

        .fa-external-link-alt:before {
            content: "\f35d"
        }

        .fa-external-link-square-alt:before {
            content: "\f360"
        }

        .fa-eye:before {
            content: "\f06e"
        }

        .fa-eye-dropper:before {
            content: "\f1fb"
        }

        .fa-eye-slash:before {
            content: "\f070"
        }

        .fa-facebook:before {
            content: "\f09a"
        }

        .fa-facebook-f:before {
            content: "\f39e"
        }

        .fa-facebook-messenger:before {
            content: "\f39f"
        }

        .fa-facebook-square:before {
            content: "\f082"
        }

        .fa-fan:before {
            content: "\f863"
        }

        .fa-fantasy-flight-games:before {
            content: "\f6dc"
        }

        .fa-fast-backward:before {
            content: "\f049"
        }

        .fa-fast-forward:before {
            content: "\f050"
        }

        .fa-faucet:before {
            content: "\e005"
        }

        .fa-fax:before {
            content: "\f1ac"
        }

        .fa-feather:before {
            content: "\f52d"
        }

        .fa-feather-alt:before {
            content: "\f56b"
        }

        .fa-fedex:before {
            content: "\f797"
        }

        .fa-fedora:before {
            content: "\f798"
        }

        .fa-female:before {
            content: "\f182"
        }

        .fa-fighter-jet:before {
            content: "\f0fb"
        }

        .fa-figma:before {
            content: "\f799"
        }

        .fa-file:before {
            content: "\f15b"
        }

        .fa-file-alt:before {
            content: "\f15c"
        }

        .fa-file-archive:before {
            content: "\f1c6"
        }

        .fa-file-audio:before {
            content: "\f1c7"
        }

        .fa-file-code:before {
            content: "\f1c9"
        }

        .fa-file-contract:before {
            content: "\f56c"
        }

        .fa-file-csv:before {
            content: "\f6dd"
        }

        .fa-file-download:before {
            content: "\f56d"
        }

        .fa-file-excel:before {
            content: "\f1c3"
        }

        .fa-file-export:before {
            content: "\f56e"
        }

        .fa-file-image:before {
            content: "\f1c5"
        }

        .fa-file-import:before {
            content: "\f56f"
        }

        .fa-file-invoice:before {
            content: "\f570"
        }

        .fa-file-invoice-dollar:before {
            content: "\f571"
        }

        .fa-file-medical:before {
            content: "\f477"
        }

        .fa-file-medical-alt:before {
            content: "\f478"
        }

        .fa-file-pdf:before {
            content: "\f1c1"
        }

        .fa-file-powerpoint:before {
            content: "\f1c4"
        }

        .fa-file-prescription:before {
            content: "\f572"
        }

        .fa-file-signature:before {
            content: "\f573"
        }

        .fa-file-upload:before {
            content: "\f574"
        }

        .fa-file-video:before {
            content: "\f1c8"
        }

        .fa-file-word:before {
            content: "\f1c2"
        }

        .fa-fill:before {
            content: "\f575"
        }

        .fa-fill-drip:before {
            content: "\f576"
        }

        .fa-film:before {
            content: "\f008"
        }

        .fa-filter:before {
            content: "\f0b0"
        }

        .fa-fingerprint:before {
            content: "\f577"
        }

        .fa-fire:before {
            content: "\f06d"
        }

        .fa-fire-alt:before {
            content: "\f7e4"
        }

        .fa-fire-extinguisher:before {
            content: "\f134"
        }

        .fa-firefox:before {
            content: "\f269"
        }

        .fa-firefox-browser:before {
            content: "\e007"
        }

        .fa-first-aid:before {
            content: "\f479"
        }

        .fa-first-order:before {
            content: "\f2b0"
        }

        .fa-first-order-alt:before {
            content: "\f50a"
        }

        .fa-firstdraft:before {
            content: "\f3a1"
        }

        .fa-fish:before {
            content: "\f578"
        }

        .fa-fist-raised:before {
            content: "\f6de"
        }

        .fa-flag:before {
            content: "\f024"
        }

        .fa-flag-checkered:before {
            content: "\f11e"
        }

        .fa-flag-usa:before {
            content: "\f74d"
        }

        .fa-flask:before {
            content: "\f0c3"
        }

        .fa-flickr:before {
            content: "\f16e"
        }

        .fa-flipboard:before {
            content: "\f44d"
        }

        .fa-flushed:before {
            content: "\f579"
        }

        .fa-fly:before {
            content: "\f417"
        }

        .fa-folder:before {
            content: "\f07b"
        }

        .fa-folder-minus:before {
            content: "\f65d"
        }

        .fa-folder-open:before {
            content: "\f07c"
        }

        .fa-folder-plus:before {
            content: "\f65e"
        }

        .fa-font:before {
            content: "\f031"
        }

        .fa-font-awesome:before {
            content: "\f2b4"
        }

        .fa-font-awesome-alt:before {
            content: "\f35c"
        }

        .fa-font-awesome-flag:before {
            content: "\f425"
        }

        .fa-font-awesome-logo-full:before {
            content: "\f4e6"
        }

        .fa-fonticons:before {
            content: "\f280"
        }

        .fa-fonticons-fi:before {
            content: "\f3a2"
        }

        .fa-football-ball:before {
            content: "\f44e"
        }

        .fa-fort-awesome:before {
            content: "\f286"
        }

        .fa-fort-awesome-alt:before {
            content: "\f3a3"
        }

        .fa-forumbee:before {
            content: "\f211"
        }

        .fa-forward:before {
            content: "\f04e"
        }

        .fa-foursquare:before {
            content: "\f180"
        }

        .fa-free-code-camp:before {
            content: "\f2c5"
        }

        .fa-freebsd:before {
            content: "\f3a4"
        }

        .fa-frog:before {
            content: "\f52e"
        }

        .fa-frown:before {
            content: "\f119"
        }

        .fa-frown-open:before {
            content: "\f57a"
        }

        .fa-fulcrum:before {
            content: "\f50b"
        }

        .fa-funnel-dollar:before {
            content: "\f662"
        }

        .fa-futbol:before {
            content: "\f1e3"
        }

        .fa-galactic-republic:before {
            content: "\f50c"
        }

        .fa-galactic-senate:before {
            content: "\f50d"
        }

        .fa-gamepad:before {
            content: "\f11b"
        }

        .fa-gas-pump:before {
            content: "\f52f"
        }

        .fa-gavel:before {
            content: "\f0e3"
        }

        .fa-gem:before {
            content: "\f3a5"
        }

        .fa-genderless:before {
            content: "\f22d"
        }

        .fa-get-pocket:before {
            content: "\f265"
        }

        .fa-gg:before {
            content: "\f260"
        }

        .fa-gg-circle:before {
            content: "\f261"
        }

        .fa-ghost:before {
            content: "\f6e2"
        }

        .fa-gift:before {
            content: "\f06b"
        }

        .fa-gifts:before {
            content: "\f79c"
        }

        .fa-git:before {
            content: "\f1d3"
        }

        .fa-git-alt:before {
            content: "\f841"
        }

        .fa-git-square:before {
            content: "\f1d2"
        }

        .fa-github:before {
            content: "\f09b"
        }

        .fa-github-alt:before {
            content: "\f113"
        }

        .fa-github-square:before {
            content: "\f092"
        }

        .fa-gitkraken:before {
            content: "\f3a6"
        }

        .fa-gitlab:before {
            content: "\f296"
        }

        .fa-gitter:before {
            content: "\f426"
        }

        .fa-glass-cheers:before {
            content: "\f79f"
        }

        .fa-glass-martini:before {
            content: "\f000"
        }

        .fa-glass-martini-alt:before {
            content: "\f57b"
        }

        .fa-glass-whiskey:before {
            content: "\f7a0"
        }

        .fa-glasses:before {
            content: "\f530"
        }

        .fa-glide:before {
            content: "\f2a5"
        }

        .fa-glide-g:before {
            content: "\f2a6"
        }

        .fa-globe:before {
            content: "\f0ac"
        }

        .fa-globe-africa:before {
            content: "\f57c"
        }

        .fa-globe-americas:before {
            content: "\f57d"
        }

        .fa-globe-asia:before {
            content: "\f57e"
        }

        .fa-globe-europe:before {
            content: "\f7a2"
        }

        .fa-gofore:before {
            content: "\f3a7"
        }

        .fa-golf-ball:before {
            content: "\f450"
        }

        .fa-goodreads:before {
            content: "\f3a8"
        }

        .fa-goodreads-g:before {
            content: "\f3a9"
        }

        .fa-google:before {
            content: "\f1a0"
        }

        .fa-google-drive:before {
            content: "\f3aa"
        }

        .fa-google-pay:before {
            content: "\e079"
        }

        .fa-google-play:before {
            content: "\f3ab"
        }

        .fa-google-plus:before {
            content: "\f2b3"
        }

        .fa-google-plus-g:before {
            content: "\f0d5"
        }

        .fa-google-plus-square:before {
            content: "\f0d4"
        }

        .fa-google-wallet:before {
            content: "\f1ee"
        }

        .fa-gopuram:before {
            content: "\f664"
        }

        .fa-graduation-cap:before {
            content: "\f19d"
        }

        .fa-gratipay:before {
            content: "\f184"
        }

        .fa-grav:before {
            content: "\f2d6"
        }

        .fa-greater-than:before {
            content: "\f531"
        }

        .fa-greater-than-equal:before {
            content: "\f532"
        }

        .fa-grimace:before {
            content: "\f57f"
        }

        .fa-grin:before {
            content: "\f580"
        }

        .fa-grin-alt:before {
            content: "\f581"
        }

        .fa-grin-beam:before {
            content: "\f582"
        }

        .fa-grin-beam-sweat:before {
            content: "\f583"
        }

        .fa-grin-hearts:before {
            content: "\f584"
        }

        .fa-grin-squint:before {
            content: "\f585"
        }

        .fa-grin-squint-tears:before {
            content: "\f586"
        }

        .fa-grin-stars:before {
            content: "\f587"
        }

        .fa-grin-tears:before {
            content: "\f588"
        }

        .fa-grin-tongue:before {
            content: "\f589"
        }

        .fa-grin-tongue-squint:before {
            content: "\f58a"
        }

        .fa-grin-tongue-wink:before {
            content: "\f58b"
        }

        .fa-grin-wink:before {
            content: "\f58c"
        }

        .fa-grip-horizontal:before {
            content: "\f58d"
        }

        .fa-grip-lines:before {
            content: "\f7a4"
        }

        .fa-grip-lines-vertical:before {
            content: "\f7a5"
        }

        .fa-grip-vertical:before {
            content: "\f58e"
        }

        .fa-gripfire:before {
            content: "\f3ac"
        }

        .fa-grunt:before {
            content: "\f3ad"
        }

        .fa-guilded:before {
            content: "\e07e"
        }

        .fa-guitar:before {
            content: "\f7a6"
        }

        .fa-gulp:before {
            content: "\f3ae"
        }

        .fa-h-square:before {
            content: "\f0fd"
        }

        .fa-hacker-news:before {
            content: "\f1d4"
        }

        .fa-hacker-news-square:before {
            content: "\f3af"
        }

        .fa-hackerrank:before {
            content: "\f5f7"
        }

        .fa-hamburger:before {
            content: "\f805"
        }

        .fa-hammer:before {
            content: "\f6e3"
        }

        .fa-hamsa:before {
            content: "\f665"
        }

        .fa-hand-holding:before {
            content: "\f4bd"
        }

        .fa-hand-holding-heart:before {
            content: "\f4be"
        }

        .fa-hand-holding-medical:before {
            content: "\e05c"
        }

        .fa-hand-holding-usd:before {
            content: "\f4c0"
        }

        .fa-hand-holding-water:before {
            content: "\f4c1"
        }

        .fa-hand-lizard:before {
            content: "\f258"
        }

        .fa-hand-middle-finger:before {
            content: "\f806"
        }

        .fa-hand-paper:before {
            content: "\f256"
        }

        .fa-hand-peace:before {
            content: "\f25b"
        }

        .fa-hand-point-down:before {
            content: "\f0a7"
        }

        .fa-hand-point-left:before {
            content: "\f0a5"
        }

        .fa-hand-point-right:before {
            content: "\f0a4"
        }

        .fa-hand-point-up:before {
            content: "\f0a6"
        }

        .fa-hand-pointer:before {
            content: "\f25a"
        }

        .fa-hand-rock:before {
            content: "\f255"
        }

        .fa-hand-scissors:before {
            content: "\f257"
        }

        .fa-hand-sparkles:before {
            content: "\e05d"
        }

        .fa-hand-spock:before {
            content: "\f259"
        }

        .fa-hands:before {
            content: "\f4c2"
        }

        .fa-hands-helping:before {
            content: "\f4c4"
        }

        .fa-hands-wash:before {
            content: "\e05e"
        }

        .fa-handshake:before {
            content: "\f2b5"
        }

        .fa-handshake-alt-slash:before {
            content: "\e05f"
        }

        .fa-handshake-slash:before {
            content: "\e060"
        }

        .fa-hanukiah:before {
            content: "\f6e6"
        }

        .fa-hard-hat:before {
            content: "\f807"
        }

        .fa-hashtag:before {
            content: "\f292"
        }

        .fa-hat-cowboy:before {
            content: "\f8c0"
        }

        .fa-hat-cowboy-side:before {
            content: "\f8c1"
        }

        .fa-hat-wizard:before {
            content: "\f6e8"
        }

        .fa-hdd:before {
            content: "\f0a0"
        }

        .fa-head-side-cough:before {
            content: "\e061"
        }

        .fa-head-side-cough-slash:before {
            content: "\e062"
        }

        .fa-head-side-mask:before {
            content: "\e063"
        }

        .fa-head-side-virus:before {
            content: "\e064"
        }

        .fa-heading:before {
            content: "\f1dc"
        }

        .fa-headphones:before {
            content: "\f025"
        }

        .fa-headphones-alt:before {
            content: "\f58f"
        }

        .fa-headset:before {
            content: "\f590"
        }

        .fa-heart:before {
            content: "\f004"
        }

        .fa-heart-broken:before {
            content: "\f7a9"
        }

        .fa-heartbeat:before {
            content: "\f21e"
        }

        .fa-helicopter:before {
            content: "\f533"
        }

        .fa-highlighter:before {
            content: "\f591"
        }

        .fa-hiking:before {
            content: "\f6ec"
        }

        .fa-hippo:before {
            content: "\f6ed"
        }

        .fa-hips:before {
            content: "\f452"
        }

        .fa-hire-a-helper:before {
            content: "\f3b0"
        }

        .fa-history:before {
            content: "\f1da"
        }

        .fa-hive:before {
            content: "\e07f"
        }

        .fa-hockey-puck:before {
            content: "\f453"
        }

        .fa-holly-berry:before {
            content: "\f7aa"
        }

        .fa-home:before {
            content: "\f015"
        }

        .fa-hooli:before {
            content: "\f427"
        }

        .fa-hornbill:before {
            content: "\f592"
        }

        .fa-horse:before {
            content: "\f6f0"
        }

        .fa-horse-head:before {
            content: "\f7ab"
        }

        .fa-hospital:before {
            content: "\f0f8"
        }

        .fa-hospital-alt:before {
            content: "\f47d"
        }

        .fa-hospital-symbol:before {
            content: "\f47e"
        }

        .fa-hospital-user:before {
            content: "\f80d"
        }

        .fa-hot-tub:before {
            content: "\f593"
        }

        .fa-hotdog:before {
            content: "\f80f"
        }

        .fa-hotel:before {
            content: "\f594"
        }

        .fa-hotjar:before {
            content: "\f3b1"
        }

        .fa-hourglass:before {
            content: "\f254"
        }

        .fa-hourglass-end:before {
            content: "\f253"
        }

        .fa-hourglass-half:before {
            content: "\f252"
        }

        .fa-hourglass-start:before {
            content: "\f251"
        }

        .fa-house-damage:before {
            content: "\f6f1"
        }

        .fa-house-user:before {
            content: "\e065"
        }

        .fa-houzz:before {
            content: "\f27c"
        }

        .fa-hryvnia:before {
            content: "\f6f2"
        }

        .fa-html5:before {
            content: "\f13b"
        }

        .fa-hubspot:before {
            content: "\f3b2"
        }

        .fa-i-cursor:before {
            content: "\f246"
        }

        .fa-ice-cream:before {
            content: "\f810"
        }

        .fa-icicles:before {
            content: "\f7ad"
        }

        .fa-icons:before {
            content: "\f86d"
        }

        .fa-id-badge:before {
            content: "\f2c1"
        }

        .fa-id-card:before {
            content: "\f2c2"
        }

        .fa-id-card-alt:before {
            content: "\f47f"
        }

        .fa-ideal:before {
            content: "\e013"
        }

        .fa-igloo:before {
            content: "\f7ae"
        }

        .fa-image:before {
            content: "\f03e"
        }

        .fa-images:before {
            content: "\f302"
        }

        .fa-imdb:before {
            content: "\f2d8"
        }

        .fa-inbox:before {
            content: "\f01c"
        }

        .fa-indent:before {
            content: "\f03c"
        }

        .fa-industry:before {
            content: "\f275"
        }

        .fa-infinity:before {
            content: "\f534"
        }

        .fa-info:before {
            content: "\f129"
        }

        .fa-info-circle:before {
            content: "\f05a"
        }

        .fa-innosoft:before {
            content: "\e080"
        }

        .fa-instagram:before {
            content: "\f16d"
        }

        .fa-instagram-square:before {
            content: "\e055"
        }

        .fa-instalod:before {
            content: "\e081"
        }

        .fa-intercom:before {
            content: "\f7af"
        }

        .fa-internet-explorer:before {
            content: "\f26b"
        }

        .fa-invision:before {
            content: "\f7b0"
        }

        .fa-ioxhost:before {
            content: "\f208"
        }

        .fa-italic:before {
            content: "\f033"
        }

        .fa-itch-io:before {
            content: "\f83a"
        }

        .fa-itunes:before {
            content: "\f3b4"
        }

        .fa-itunes-note:before {
            content: "\f3b5"
        }

        .fa-java:before {
            content: "\f4e4"
        }

        .fa-jedi:before {
            content: "\f669"
        }

        .fa-jedi-order:before {
            content: "\f50e"
        }

        .fa-jenkins:before {
            content: "\f3b6"
        }

        .fa-jira:before {
            content: "\f7b1"
        }

        .fa-joget:before {
            content: "\f3b7"
        }

        .fa-joint:before {
            content: "\f595"
        }

        .fa-joomla:before {
            content: "\f1aa"
        }

        .fa-journal-whills:before {
            content: "\f66a"
        }

        .fa-js:before {
            content: "\f3b8"
        }

        .fa-js-square:before {
            content: "\f3b9"
        }

        .fa-jsfiddle:before {
            content: "\f1cc"
        }

        .fa-kaaba:before {
            content: "\f66b"
        }

        .fa-kaggle:before {
            content: "\f5fa"
        }

        .fa-key:before {
            content: "\f084"
        }

        .fa-keybase:before {
            content: "\f4f5"
        }

        .fa-keyboard:before {
            content: "\f11c"
        }

        .fa-keycdn:before {
            content: "\f3ba"
        }

        .fa-khanda:before {
            content: "\f66d"
        }

        .fa-kickstarter:before {
            content: "\f3bb"
        }

        .fa-kickstarter-k:before {
            content: "\f3bc"
        }

        .fa-kiss:before {
            content: "\f596"
        }

        .fa-kiss-beam:before {
            content: "\f597"
        }

        .fa-kiss-wink-heart:before {
            content: "\f598"
        }

        .fa-kiwi-bird:before {
            content: "\f535"
        }

        .fa-korvue:before {
            content: "\f42f"
        }

        .fa-landmark:before {
            content: "\f66f"
        }

        .fa-language:before {
            content: "\f1ab"
        }

        .fa-laptop:before {
            content: "\f109"
        }

        .fa-laptop-code:before {
            content: "\f5fc"
        }

        .fa-laptop-house:before {
            content: "\e066"
        }

        .fa-laptop-medical:before {
            content: "\f812"
        }

        .fa-laravel:before {
            content: "\f3bd"
        }

        .fa-lastfm:before {
            content: "\f202"
        }

        .fa-lastfm-square:before {
            content: "\f203"
        }

        .fa-laugh:before {
            content: "\f599"
        }

        .fa-laugh-beam:before {
            content: "\f59a"
        }

        .fa-laugh-squint:before {
            content: "\f59b"
        }

        .fa-laugh-wink:before {
            content: "\f59c"
        }

        .fa-layer-group:before {
            content: "\f5fd"
        }

        .fa-leaf:before {
            content: "\f06c"
        }

        .fa-leanpub:before {
            content: "\f212"
        }

        .fa-lemon:before {
            content: "\f094"
        }

        .fa-less:before {
            content: "\f41d"
        }

        .fa-less-than:before {
            content: "\f536"
        }

        .fa-less-than-equal:before {
            content: "\f537"
        }

        .fa-level-down-alt:before {
            content: "\f3be"
        }

        .fa-level-up-alt:before {
            content: "\f3bf"
        }

        .fa-life-ring:before {
            content: "\f1cd"
        }

        .fa-lightbulb:before {
            content: "\f0eb"
        }

        .fa-line:before {
            content: "\f3c0"
        }

        .fa-link:before {
            content: "\f0c1"
        }

        .fa-linkedin:before {
            content: "\f08c"
        }

        .fa-linkedin-in:before {
            content: "\f0e1"
        }

        .fa-linode:before {
            content: "\f2b8"
        }

        .fa-linux:before {
            content: "\f17c"
        }

        .fa-lira-sign:before {
            content: "\f195"
        }

        .fa-list:before {
            content: "\f03a"
        }

        .fa-list-alt:before {
            content: "\f022"
        }

        .fa-list-ol:before {
            content: "\f0cb"
        }

        .fa-list-ul:before {
            content: "\f0ca"
        }

        .fa-location-arrow:before {
            content: "\f124"
        }

        .fa-lock:before {
            content: "\f023"
        }

        .fa-lock-open:before {
            content: "\f3c1"
        }

        .fa-long-arrow-alt-down:before {
            content: "\f309"
        }

        .fa-long-arrow-alt-left:before {
            content: "\f30a"
        }

        .fa-long-arrow-alt-right:before {
            content: "\f30b"
        }

        .fa-long-arrow-alt-up:before {
            content: "\f30c"
        }

        .fa-low-vision:before {
            content: "\f2a8"
        }

        .fa-luggage-cart:before {
            content: "\f59d"
        }

        .fa-lungs:before {
            content: "\f604"
        }

        .fa-lungs-virus:before {
            content: "\e067"
        }

        .fa-lyft:before {
            content: "\f3c3"
        }

        .fa-magento:before {
            content: "\f3c4"
        }

        .fa-magic:before {
            content: "\f0d0"
        }

        .fa-magnet:before {
            content: "\f076"
        }

        .fa-mail-bulk:before {
            content: "\f674"
        }

        .fa-mailchimp:before {
            content: "\f59e"
        }

        .fa-male:before {
            content: "\f183"
        }

        .fa-mandalorian:before {
            content: "\f50f"
        }

        .fa-map:before {
            content: "\f279"
        }

        .fa-map-marked:before {
            content: "\f59f"
        }

        .fa-map-marked-alt:before {
            content: "\f5a0"
        }

        .fa-map-marker:before {
            content: "\f041"
        }

        .fa-map-marker-alt:before {
            content: "\f3c5"
        }

        .fa-map-pin:before {
            content: "\f276"
        }

        .fa-map-signs:before {
            content: "\f277"
        }

        .fa-markdown:before {
            content: "\f60f"
        }

        .fa-marker:before {
            content: "\f5a1"
        }

        .fa-mars:before {
            content: "\f222"
        }

        .fa-mars-double:before {
            content: "\f227"
        }

        .fa-mars-stroke:before {
            content: "\f229"
        }

        .fa-mars-stroke-h:before {
            content: "\f22b"
        }

        .fa-mars-stroke-v:before {
            content: "\f22a"
        }

        .fa-mask:before {
            content: "\f6fa"
        }

        .fa-mastodon:before {
            content: "\f4f6"
        }

        .fa-maxcdn:before {
            content: "\f136"
        }

        .fa-mdb:before {
            content: "\f8ca"
        }

        .fa-medal:before {
            content: "\f5a2"
        }

        .fa-medapps:before {
            content: "\f3c6"
        }

        .fa-medium:before {
            content: "\f23a"
        }

        .fa-medium-m:before {
            content: "\f3c7"
        }

        .fa-medkit:before {
            content: "\f0fa"
        }

        .fa-medrt:before {
            content: "\f3c8"
        }

        .fa-meetup:before {
            content: "\f2e0"
        }

        .fa-megaport:before {
            content: "\f5a3"
        }

        .fa-meh:before {
            content: "\f11a"
        }

        .fa-meh-blank:before {
            content: "\f5a4"
        }

        .fa-meh-rolling-eyes:before {
            content: "\f5a5"
        }

        .fa-memory:before {
            content: "\f538"
        }

        .fa-mendeley:before {
            content: "\f7b3"
        }

        .fa-menorah:before {
            content: "\f676"
        }

        .fa-mercury:before {
            content: "\f223"
        }

        .fa-meteor:before {
            content: "\f753"
        }

        .fa-microblog:before {
            content: "\e01a"
        }

        .fa-microchip:before {
            content: "\f2db"
        }

        .fa-microphone:before {
            content: "\f130"
        }

        .fa-microphone-alt:before {
            content: "\f3c9"
        }

        .fa-microphone-alt-slash:before {
            content: "\f539"
        }

        .fa-microphone-slash:before {
            content: "\f131"
        }

        .fa-microscope:before {
            content: "\f610"
        }

        .fa-microsoft:before {
            content: "\f3ca"
        }

        .fa-minus:before {
            content: "\f068"
        }

        .fa-minus-circle:before {
            content: "\f056"
        }

        .fa-minus-square:before {
            content: "\f146"
        }

        .fa-mitten:before {
            content: "\f7b5"
        }

        .fa-mix:before {
            content: "\f3cb"
        }

        .fa-mixcloud:before {
            content: "\f289"
        }

        .fa-mixer:before {
            content: "\e056"
        }

        .fa-mizuni:before {
            content: "\f3cc"
        }

        .fa-mobile:before {
            content: "\f10b"
        }

        .fa-mobile-alt:before {
            content: "\f3cd"
        }

        .fa-modx:before {
            content: "\f285"
        }

        .fa-monero:before {
            content: "\f3d0"
        }

        .fa-money-bill:before {
            content: "\f0d6"
        }

        .fa-money-bill-alt:before {
            content: "\f3d1"
        }

        .fa-money-bill-wave:before {
            content: "\f53a"
        }

        .fa-money-bill-wave-alt:before {
            content: "\f53b"
        }

        .fa-money-check:before {
            content: "\f53c"
        }

        .fa-money-check-alt:before {
            content: "\f53d"
        }

        .fa-monument:before {
            content: "\f5a6"
        }

        .fa-moon:before {
            content: "\f186"
        }

        .fa-mortar-pestle:before {
            content: "\f5a7"
        }

        .fa-mosque:before {
            content: "\f678"
        }

        .fa-motorcycle:before {
            content: "\f21c"
        }

        .fa-mountain:before {
            content: "\f6fc"
        }

        .fa-mouse:before {
            content: "\f8cc"
        }

        .fa-mouse-pointer:before {
            content: "\f245"
        }

        .fa-mug-hot:before {
            content: "\f7b6"
        }

        .fa-music:before {
            content: "\f001"
        }

        .fa-napster:before {
            content: "\f3d2"
        }

        .fa-neos:before {
            content: "\f612"
        }

        .fa-network-wired:before {
            content: "\f6ff"
        }

        .fa-neuter:before {
            content: "\f22c"
        }

        .fa-newspaper:before {
            content: "\f1ea"
        }

        .fa-nimblr:before {
            content: "\f5a8"
        }

        .fa-node:before {
            content: "\f419"
        }

        .fa-node-js:before {
            content: "\f3d3"
        }

        .fa-not-equal:before {
            content: "\f53e"
        }

        .fa-notes-medical:before {
            content: "\f481"
        }

        .fa-npm:before {
            content: "\f3d4"
        }

        .fa-ns8:before {
            content: "\f3d5"
        }

        .fa-nutritionix:before {
            content: "\f3d6"
        }

        .fa-object-group:before {
            content: "\f247"
        }

        .fa-object-ungroup:before {
            content: "\f248"
        }

        .fa-octopus-deploy:before {
            content: "\e082"
        }

        .fa-odnoklassniki:before {
            content: "\f263"
        }

        .fa-odnoklassniki-square:before {
            content: "\f264"
        }

        .fa-oil-can:before {
            content: "\f613"
        }

        .fa-old-republic:before {
            content: "\f510"
        }

        .fa-om:before {
            content: "\f679"
        }

        .fa-opencart:before {
            content: "\f23d"
        }

        .fa-openid:before {
            content: "\f19b"
        }

        .fa-opera:before {
            content: "\f26a"
        }

        .fa-optin-monster:before {
            content: "\f23c"
        }

        .fa-orcid:before {
            content: "\f8d2"
        }

        .fa-osi:before {
            content: "\f41a"
        }

        .fa-otter:before {
            content: "\f700"
        }

        .fa-outdent:before {
            content: "\f03b"
        }

        .fa-page4:before {
            content: "\f3d7"
        }

        .fa-pagelines:before {
            content: "\f18c"
        }

        .fa-pager:before {
            content: "\f815"
        }

        .fa-paint-brush:before {
            content: "\f1fc"
        }

        .fa-paint-roller:before {
            content: "\f5aa"
        }

        .fa-palette:before {
            content: "\f53f"
        }

        .fa-palfed:before {
            content: "\f3d8"
        }

        .fa-pallet:before {
            content: "\f482"
        }

        .fa-paper-plane:before {
            content: "\f1d8"
        }

        .fa-paperclip:before {
            content: "\f0c6"
        }

        .fa-parachute-box:before {
            content: "\f4cd"
        }

        .fa-paragraph:before {
            content: "\f1dd"
        }

        .fa-parking:before {
            content: "\f540"
        }

        .fa-passport:before {
            content: "\f5ab"
        }

        .fa-pastafarianism:before {
            content: "\f67b"
        }

        .fa-paste:before {
            content: "\f0ea"
        }

        .fa-patreon:before {
            content: "\f3d9"
        }

        .fa-pause:before {
            content: "\f04c"
        }

        .fa-pause-circle:before {
            content: "\f28b"
        }

        .fa-paw:before {
            content: "\f1b0"
        }

        .fa-paypal:before {
            content: "\f1ed"
        }

        .fa-peace:before {
            content: "\f67c"
        }

        .fa-pen:before {
            content: "\f304"
        }

        .fa-pen-alt:before {
            content: "\f305"
        }

        .fa-pen-fancy:before {
            content: "\f5ac"
        }

        .fa-pen-nib:before {
            content: "\f5ad"
        }

        .fa-pen-square:before {
            content: "\f14b"
        }

        .fa-pencil-alt:before {
            content: "\f303"
        }

        .fa-pencil-ruler:before {
            content: "\f5ae"
        }

        .fa-penny-arcade:before {
            content: "\f704"
        }

        .fa-people-arrows:before {
            content: "\e068"
        }

        .fa-people-carry:before {
            content: "\f4ce"
        }

        .fa-pepper-hot:before {
            content: "\f816"
        }

        .fa-perbyte:before {
            content: "\e083"
        }

        .fa-percent:before {
            content: "\f295"
        }

        .fa-percentage:before {
            content: "\f541"
        }

        .fa-periscope:before {
            content: "\f3da"
        }

        .fa-person-booth:before {
            content: "\f756"
        }

        .fa-phabricator:before {
            content: "\f3db"
        }

        .fa-phoenix-framework:before {
            content: "\f3dc"
        }

        .fa-phoenix-squadron:before {
            content: "\f511"
        }

        .fa-phone:before {
            content: "\f095"
        }

        .fa-phone-alt:before {
            content: "\f879"
        }

        .fa-phone-slash:before {
            content: "\f3dd"
        }

        .fa-phone-square:before {
            content: "\f098"
        }

        .fa-phone-square-alt:before {
            content: "\f87b"
        }

        .fa-phone-volume:before {
            content: "\f2a0"
        }

        .fa-photo-video:before {
            content: "\f87c"
        }

        .fa-php:before {
            content: "\f457"
        }

        .fa-pied-piper:before {
            content: "\f2ae"
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8"
        }

        .fa-pied-piper-hat:before {
            content: "\f4e5"
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7"
        }

        .fa-pied-piper-square:before {
            content: "\e01e"
        }

        .fa-piggy-bank:before {
            content: "\f4d3"
        }

        .fa-pills:before {
            content: "\f484"
        }

        .fa-pinterest:before {
            content: "\f0d2"
        }

        .fa-pinterest-p:before {
            content: "\f231"
        }

        .fa-pinterest-square:before {
            content: "\f0d3"
        }

        .fa-pizza-slice:before {
            content: "\f818"
        }

        .fa-place-of-worship:before {
            content: "\f67f"
        }

        .fa-plane:before {
            content: "\f072"
        }

        .fa-plane-arrival:before {
            content: "\f5af"
        }

        .fa-plane-departure:before {
            content: "\f5b0"
        }

        .fa-plane-slash:before {
            content: "\e069"
        }

        .fa-play:before {
            content: "\f04b"
        }

        .fa-play-circle:before {
            content: "\f144"
        }

        .fa-playstation:before {
            content: "\f3df"
        }

        .fa-plug:before {
            content: "\f1e6"
        }

        .fa-plus:before {
            content: "\f067"
        }

        .fa-plus-circle:before {
            content: "\f055"
        }

        .fa-plus-square:before {
            content: "\f0fe"
        }

        .fa-podcast:before {
            content: "\f2ce"
        }

        .fa-poll:before {
            content: "\f681"
        }

        .fa-poll-h:before {
            content: "\f682"
        }

        .fa-poo:before {
            content: "\f2fe"
        }

        .fa-poo-storm:before {
            content: "\f75a"
        }

        .fa-poop:before {
            content: "\f619"
        }

        .fa-portrait:before {
            content: "\f3e0"
        }

        .fa-pound-sign:before {
            content: "\f154"
        }

        .fa-power-off:before {
            content: "\f011"
        }

        .fa-pray:before {
            content: "\f683"
        }

        .fa-praying-hands:before {
            content: "\f684"
        }

        .fa-prescription:before {
            content: "\f5b1"
        }

        .fa-prescription-bottle:before {
            content: "\f485"
        }

        .fa-prescription-bottle-alt:before {
            content: "\f486"
        }

        .fa-print:before {
            content: "\f02f"
        }

        .fa-procedures:before {
            content: "\f487"
        }

        .fa-product-hunt:before {
            content: "\f288"
        }

        .fa-project-diagram:before {
            content: "\f542"
        }

        .fa-pump-medical:before {
            content: "\e06a"
        }

        .fa-pump-soap:before {
            content: "\e06b"
        }

        .fa-pushed:before {
            content: "\f3e1"
        }

        .fa-puzzle-piece:before {
            content: "\f12e"
        }

        .fa-python:before {
            content: "\f3e2"
        }

        .fa-qq:before {
            content: "\f1d6"
        }

        .fa-qrcode:before {
            content: "\f029"
        }

        .fa-question:before {
            content: "\f128"
        }

        .fa-question-circle:before {
            content: "\f059"
        }

        .fa-quidditch:before {
            content: "\f458"
        }

        .fa-quinscape:before {
            content: "\f459"
        }

        .fa-quora:before {
            content: "\f2c4"
        }

        .fa-quote-left:before {
            content: "\f10d"
        }

        .fa-quote-right:before {
            content: "\f10e"
        }

        .fa-quran:before {
            content: "\f687"
        }

        .fa-r-project:before {
            content: "\f4f7"
        }

        .fa-radiation:before {
            content: "\f7b9"
        }

        .fa-radiation-alt:before {
            content: "\f7ba"
        }

        .fa-rainbow:before {
            content: "\f75b"
        }

        .fa-random:before {
            content: "\f074"
        }

        .fa-raspberry-pi:before {
            content: "\f7bb"
        }

        .fa-ravelry:before {
            content: "\f2d9"
        }

        .fa-react:before {
            content: "\f41b"
        }

        .fa-reacteurope:before {
            content: "\f75d"
        }

        .fa-readme:before {
            content: "\f4d5"
        }

        .fa-rebel:before {
            content: "\f1d0"
        }

        .fa-receipt:before {
            content: "\f543"
        }

        .fa-record-vinyl:before {
            content: "\f8d9"
        }

        .fa-recycle:before {
            content: "\f1b8"
        }

        .fa-red-river:before {
            content: "\f3e3"
        }

        .fa-reddit:before {
            content: "\f1a1"
        }

        .fa-reddit-alien:before {
            content: "\f281"
        }

        .fa-reddit-square:before {
            content: "\f1a2"
        }

        .fa-redhat:before {
            content: "\f7bc"
        }

        .fa-redo:before {
            content: "\f01e"
        }

        .fa-redo-alt:before {
            content: "\f2f9"
        }

        .fa-registered:before {
            content: "\f25d"
        }

        .fa-remove-format:before {
            content: "\f87d"
        }

        .fa-renren:before {
            content: "\f18b"
        }

        .fa-reply:before {
            content: "\f3e5"
        }

        .fa-reply-all:before {
            content: "\f122"
        }

        .fa-replyd:before {
            content: "\f3e6"
        }

        .fa-republican:before {
            content: "\f75e"
        }

        .fa-researchgate:before {
            content: "\f4f8"
        }

        .fa-resolving:before {
            content: "\f3e7"
        }

        .fa-restroom:before {
            content: "\f7bd"
        }

        .fa-retweet:before {
            content: "\f079"
        }

        .fa-rev:before {
            content: "\f5b2"
        }

        .fa-ribbon:before {
            content: "\f4d6"
        }

        .fa-ring:before {
            content: "\f70b"
        }

        .fa-road:before {
            content: "\f018"
        }

        .fa-robot:before {
            content: "\f544"
        }

        .fa-rocket:before {
            content: "\f135"
        }

        .fa-rocketchat:before {
            content: "\f3e8"
        }

        .fa-rockrms:before {
            content: "\f3e9"
        }

        .fa-route:before {
            content: "\f4d7"
        }

        .fa-rss:before {
            content: "\f09e"
        }

        .fa-rss-square:before {
            content: "\f143"
        }

        .fa-ruble-sign:before {
            content: "\f158"
        }

        .fa-ruler:before {
            content: "\f545"
        }

        .fa-ruler-combined:before {
            content: "\f546"
        }

        .fa-ruler-horizontal:before {
            content: "\f547"
        }

        .fa-ruler-vertical:before {
            content: "\f548"
        }

        .fa-running:before {
            content: "\f70c"
        }

        .fa-rupee-sign:before {
            content: "\f156"
        }

        .fa-rust:before {
            content: "\e07a"
        }

        .fa-sad-cry:before {
            content: "\f5b3"
        }

        .fa-sad-tear:before {
            content: "\f5b4"
        }

        .fa-safari:before {
            content: "\f267"
        }

        .fa-salesforce:before {
            content: "\f83b"
        }

        .fa-sass:before {
            content: "\f41e"
        }

        .fa-satellite:before {
            content: "\f7bf"
        }

        .fa-satellite-dish:before {
            content: "\f7c0"
        }

        .fa-save:before {
            content: "\f0c7"
        }

        .fa-schlix:before {
            content: "\f3ea"
        }

        .fa-school:before {
            content: "\f549"
        }

        .fa-screwdriver:before {
            content: "\f54a"
        }

        .fa-scribd:before {
            content: "\f28a"
        }

        .fa-scroll:before {
            content: "\f70e"
        }

        .fa-sd-card:before {
            content: "\f7c2"
        }

        .fa-search:before {
            content: "\f002"
        }

        .fa-search-dollar:before {
            content: "\f688"
        }

        .fa-search-location:before {
            content: "\f689"
        }

        .fa-search-minus:before {
            content: "\f010"
        }

        .fa-search-plus:before {
            content: "\f00e"
        }

        .fa-searchengin:before {
            content: "\f3eb"
        }

        .fa-seedling:before {
            content: "\f4d8"
        }

        .fa-sellcast:before {
            content: "\f2da"
        }

        .fa-sellsy:before {
            content: "\f213"
        }

        .fa-server:before {
            content: "\f233"
        }

        .fa-servicestack:before {
            content: "\f3ec"
        }

        .fa-shapes:before {
            content: "\f61f"
        }

        .fa-share:before {
            content: "\f064"
        }

        .fa-share-alt:before {
            content: "\f1e0"
        }

        .fa-share-alt-square:before {
            content: "\f1e1"
        }

        .fa-share-square:before {
            content: "\f14d"
        }

        .fa-shekel-sign:before {
            content: "\f20b"
        }

        .fa-shield-alt:before {
            content: "\f3ed"
        }

        .fa-shield-virus:before {
            content: "\e06c"
        }

        .fa-ship:before {
            content: "\f21a"
        }

        .fa-shipping-fast:before {
            content: "\f48b"
        }

        .fa-shirtsinbulk:before {
            content: "\f214"
        }

        .fa-shoe-prints:before {
            content: "\f54b"
        }

        .fa-shopify:before {
            content: "\e057"
        }

        .fa-shopping-bag:before {
            content: "\f290"
        }

        .fa-shopping-basket:before {
            content: "\f291"
        }

        .fa-shopping-cart:before {
            content: "\f07a"
        }

        .fa-shopware:before {
            content: "\f5b5"
        }

        .fa-shower:before {
            content: "\f2cc"
        }

        .fa-shuttle-van:before {
            content: "\f5b6"
        }

        .fa-sign:before {
            content: "\f4d9"
        }

        .fa-sign-in-alt:before {
            content: "\f2f6"
        }

        .fa-sign-language:before {
            content: "\f2a7"
        }

        .fa-sign-out-alt:before {
            content: "\f2f5"
        }

        .fa-signal:before {
            content: "\f012"
        }

        .fa-signature:before {
            content: "\f5b7"
        }

        .fa-sim-card:before {
            content: "\f7c4"
        }

        .fa-simplybuilt:before {
            content: "\f215"
        }

        .fa-sink:before {
            content: "\e06d"
        }

        .fa-sistrix:before {
            content: "\f3ee"
        }

        .fa-sitemap:before {
            content: "\f0e8"
        }

        .fa-sith:before {
            content: "\f512"
        }

        .fa-skating:before {
            content: "\f7c5"
        }

        .fa-sketch:before {
            content: "\f7c6"
        }

        .fa-skiing:before {
            content: "\f7c9"
        }

        .fa-skiing-nordic:before {
            content: "\f7ca"
        }

        .fa-skull:before {
            content: "\f54c"
        }

        .fa-skull-crossbones:before {
            content: "\f714"
        }

        .fa-skyatlas:before {
            content: "\f216"
        }

        .fa-skype:before {
            content: "\f17e"
        }

        .fa-slack:before {
            content: "\f198"
        }

        .fa-slack-hash:before {
            content: "\f3ef"
        }

        .fa-slash:before {
            content: "\f715"
        }

        .fa-sleigh:before {
            content: "\f7cc"
        }

        .fa-sliders-h:before {
            content: "\f1de"
        }

        .fa-slideshare:before {
            content: "\f1e7"
        }

        .fa-smile:before {
            content: "\f118"
        }

        .fa-smile-beam:before {
            content: "\f5b8"
        }

        .fa-smile-wink:before {
            content: "\f4da"
        }

        .fa-smog:before {
            content: "\f75f"
        }

        .fa-smoking:before {
            content: "\f48d"
        }

        .fa-smoking-ban:before {
            content: "\f54d"
        }

        .fa-sms:before {
            content: "\f7cd"
        }

        .fa-snapchat:before {
            content: "\f2ab"
        }

        .fa-snapchat-ghost:before {
            content: "\f2ac"
        }

        .fa-snapchat-square:before {
            content: "\f2ad"
        }

        .fa-snowboarding:before {
            content: "\f7ce"
        }

        .fa-snowflake:before {
            content: "\f2dc"
        }

        .fa-snowman:before {
            content: "\f7d0"
        }

        .fa-snowplow:before {
            content: "\f7d2"
        }

        .fa-soap:before {
            content: "\e06e"
        }

        .fa-socks:before {
            content: "\f696"
        }

        .fa-solar-panel:before {
            content: "\f5ba"
        }

        .fa-sort:before {
            content: "\f0dc"
        }

        .fa-sort-alpha-down:before {
            content: "\f15d"
        }

        .fa-sort-alpha-down-alt:before {
            content: "\f881"
        }

        .fa-sort-alpha-up:before {
            content: "\f15e"
        }

        .fa-sort-alpha-up-alt:before {
            content: "\f882"
        }

        .fa-sort-amount-down:before {
            content: "\f160"
        }

        .fa-sort-amount-down-alt:before {
            content: "\f884"
        }

        .fa-sort-amount-up:before {
            content: "\f161"
        }

        .fa-sort-amount-up-alt:before {
            content: "\f885"
        }

        .fa-sort-down:before {
            content: "\f0dd"
        }

        .fa-sort-numeric-down:before {
            content: "\f162"
        }

        .fa-sort-numeric-down-alt:before {
            content: "\f886"
        }

        .fa-sort-numeric-up:before {
            content: "\f163"
        }

        .fa-sort-numeric-up-alt:before {
            content: "\f887"
        }

        .fa-sort-up:before {
            content: "\f0de"
        }

        .fa-soundcloud:before {
            content: "\f1be"
        }

        .fa-sourcetree:before {
            content: "\f7d3"
        }

        .fa-spa:before {
            content: "\f5bb"
        }

        .fa-space-shuttle:before {
            content: "\f197"
        }

        .fa-speakap:before {
            content: "\f3f3"
        }

        .fa-speaker-deck:before {
            content: "\f83c"
        }

        .fa-spell-check:before {
            content: "\f891"
        }

        .fa-spider:before {
            content: "\f717"
        }

        .fa-spinner:before {
            content: "\f110"
        }

        .fa-splotch:before {
            content: "\f5bc"
        }

        .fa-spotify:before {
            content: "\f1bc"
        }

        .fa-spray-can:before {
            content: "\f5bd"
        }

        .fa-square:before {
            content: "\f0c8"
        }

        .fa-square-full:before {
            content: "\f45c"
        }

        .fa-square-root-alt:before {
            content: "\f698"
        }

        .fa-squarespace:before {
            content: "\f5be"
        }

        .fa-stack-exchange:before {
            content: "\f18d"
        }

        .fa-stack-overflow:before {
            content: "\f16c"
        }

        .fa-stackpath:before {
            content: "\f842"
        }

        .fa-stamp:before {
            content: "\f5bf"
        }

        .fa-star:before {
            content: "\f005"
        }

        .fa-star-and-crescent:before {
            content: "\f699"
        }

        .fa-star-half:before {
            content: "\f089"
        }

        .fa-star-half-alt:before {
            content: "\f5c0"
        }

        .fa-star-of-david:before {
            content: "\f69a"
        }

        .fa-star-of-life:before {
            content: "\f621"
        }

        .fa-staylinked:before {
            content: "\f3f5"
        }

        .fa-steam:before {
            content: "\f1b6"
        }

        .fa-steam-square:before {
            content: "\f1b7"
        }

        .fa-steam-symbol:before {
            content: "\f3f6"
        }

        .fa-step-backward:before {
            content: "\f048"
        }

        .fa-step-forward:before {
            content: "\f051"
        }

        .fa-stethoscope:before {
            content: "\f0f1"
        }

        .fa-sticker-mule:before {
            content: "\f3f7"
        }

        .fa-sticky-note:before {
            content: "\f249"
        }

        .fa-stop:before {
            content: "\f04d"
        }

        .fa-stop-circle:before {
            content: "\f28d"
        }

        .fa-stopwatch:before {
            content: "\f2f2"
        }

        .fa-stopwatch-20:before {
            content: "\e06f"
        }

        .fa-store:before {
            content: "\f54e"
        }

        .fa-store-alt:before {
            content: "\f54f"
        }

        .fa-store-alt-slash:before {
            content: "\e070"
        }

        .fa-store-slash:before {
            content: "\e071"
        }

        .fa-strava:before {
            content: "\f428"
        }

        .fa-stream:before {
            content: "\f550"
        }

        .fa-street-view:before {
            content: "\f21d"
        }

        .fa-strikethrough:before {
            content: "\f0cc"
        }

        .fa-stripe:before {
            content: "\f429"
        }

        .fa-stripe-s:before {
            content: "\f42a"
        }

        .fa-stroopwafel:before {
            content: "\f551"
        }

        .fa-studiovinari:before {
            content: "\f3f8"
        }

        .fa-stumbleupon:before {
            content: "\f1a4"
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3"
        }

        .fa-subscript:before {
            content: "\f12c"
        }

        .fa-subway:before {
            content: "\f239"
        }

        .fa-suitcase:before {
            content: "\f0f2"
        }

        .fa-suitcase-rolling:before {
            content: "\f5c1"
        }

        .fa-sun:before {
            content: "\f185"
        }

        .fa-superpowers:before {
            content: "\f2dd"
        }

        .fa-superscript:before {
            content: "\f12b"
        }

        .fa-supple:before {
            content: "\f3f9"
        }

        .fa-surprise:before {
            content: "\f5c2"
        }

        .fa-suse:before {
            content: "\f7d6"
        }

        .fa-swatchbook:before {
            content: "\f5c3"
        }

        .fa-swift:before {
            content: "\f8e1"
        }

        .fa-swimmer:before {
            content: "\f5c4"
        }

        .fa-swimming-pool:before {
            content: "\f5c5"
        }

        .fa-symfony:before {
            content: "\f83d"
        }

        .fa-synagogue:before {
            content: "\f69b"
        }

        .fa-sync:before {
            content: "\f021"
        }

        .fa-sync-alt:before {
            content: "\f2f1"
        }

        .fa-syringe:before {
            content: "\f48e"
        }

        .fa-table:before {
            content: "\f0ce"
        }

        .fa-table-tennis:before {
            content: "\f45d"
        }

        .fa-tablet:before {
            content: "\f10a"
        }

        .fa-tablet-alt:before {
            content: "\f3fa"
        }

        .fa-tablets:before {
            content: "\f490"
        }

        .fa-tachometer-alt:before {
            content: "\f170"
        }

        .fa-tag:before {
            content: "\f02b"
        }

        .fa-tags:before {
            content: "\f02c"
        }

        .fa-tape:before {
            content: "\f4db"
        }

        .fa-tasks:before {
            content: "\f0ae"
        }

        .fa-taxi:before {
            content: "\f1ba"
        }

        .fa-teamspeak:before {
            content: "\f4f9"
        }

        .fa-teeth:before {
            content: "\f62e"
        }

        .fa-teeth-open:before {
            content: "\f62f"
        }

        .fa-telegram:before {
            content: "\f2c6"
        }

        .fa-telegram-plane:before {
            content: "\f3fe"
        }

        .fa-temperature-high:before {
            content: "\f769"
        }

        .fa-temperature-low:before {
            content: "\f76b"
        }

        .fa-tencent-weibo:before {
            content: "\f1d5"
        }

        .fa-tenge:before {
            content: "\f7d7"
        }

        .fa-terminal:before {
            content: "\f120"
        }

        .fa-text-height:before {
            content: "\f034"
        }

        .fa-text-width:before {
            content: "\f035"
        }

        .fa-th:before {
            content: "\f00a"
        }

        .fa-th-large:before {
            content: "\f009"
        }

        .fa-th-list:before {
            content: "\f00b"
        }

        .fa-the-red-yeti:before {
            content: "\f69d"
        }

        .fa-theater-masks:before {
            content: "\f630"
        }

        .fa-themeco:before {
            content: "\f5c6"
        }

        .fa-themeisle:before {
            content: "\f2b2"
        }

        .fa-thermometer:before {
            content: "\f491"
        }

        .fa-thermometer-empty:before {
            content: "\f2cb"
        }

        .fa-thermometer-full:before {
            content: "\f2c7"
        }

        .fa-thermometer-half:before {
            content: "\f2c9"
        }

        .fa-thermometer-quarter:before {
            content: "\f2ca"
        }

        .fa-thermometer-three-quarters:before {
            content: "\f2c8"
        }

        .fa-think-peaks:before {
            content: "\f731"
        }

        .fa-thumbs-down:before {
            content: "\f165"
        }

        .fa-thumbs-up:before {
            content: "\f164"
        }

        .fa-thumbtack:before {
            content: "\f08d"
        }

        .fa-ticket-alt:before {
            content: "\f3ff"
        }

        .fa-tiktok:before {
            content: "\e07b"
        }

        .fa-times:before {
            content: "\f00d"
        }

        .fa-times-circle:before {
            content: "\f057"
        }

        .fa-tint:before {
            content: "\f043"
        }

        .fa-tint-slash:before {
            content: "\f5c7"
        }

        .fa-tired:before {
            content: "\f5c8"
        }

        .fa-toggle-off:before {
            content: "\f204"
        }

        .fa-toggle-on:before {
            content: "\f205"
        }

        .fa-toilet:before {
            content: "\f7d8"
        }

        .fa-toilet-paper:before {
            content: "\f71e"
        }

        .fa-toilet-paper-slash:before {
            content: "\e072"
        }

        .fa-toolbox:before {
            content: "\f552"
        }

        .fa-tools:before {
            content: "\f7d9"
        }

        .fa-tooth:before {
            content: "\f5c9"
        }

        .fa-torah:before {
            content: "\f6a0"
        }

        .fa-torii-gate:before {
            content: "\f6a1"
        }

        .fa-tractor:before {
            content: "\f722"
        }

        .fa-trade-federation:before {
            content: "\f513"
        }

        .fa-trademark:before {
            content: "\f25c"
        }

        .fa-traffic-light:before {
            content: "\f637"
        }

        .fa-trailer:before {
            content: "\e041"
        }

        .fa-train:before {
            content: "\f238"
        }

        .fa-tram:before {
            content: "\f7da"
        }

        .fa-transgender:before {
            content: "\f224"
        }

        .fa-transgender-alt:before {
            content: "\f225"
        }

        .fa-trash:before {
            content: "\f1f8"
        }

        .fa-trash-alt:before {
            content: "\f2ed"
        }

        .fa-trash-restore:before {
            content: "\f829"
        }

        .fa-trash-restore-alt:before {
            content: "\f82a"
        }

        .fa-tree:before {
            content: "\f1bb"
        }

        .fa-trello:before {
            content: "\f181"
        }

        .fa-tripadvisor:before {
            content: "\f262"
        }

        .fa-trophy:before {
            content: "\f091"
        }

        .fa-truck:before {
            content: "\f0d1"
        }

        .fa-truck-loading:before {
            content: "\f4de"
        }

        .fa-truck-monster:before {
            content: "\f63b"
        }

        .fa-truck-moving:before {
            content: "\f4df"
        }

        .fa-truck-pickup:before {
            content: "\f63c"
        }

        .fa-tshirt:before {
            content: "\f553"
        }

        .fa-tty:before {
            content: "\f1e4"
        }

        .fa-tumblr:before {
            content: "\f173"
        }

        .fa-tumblr-square:before {
            content: "\f174"
        }

        .fa-tv:before {
            content: "\f26c"
        }

        .fa-twitch:before {
            content: "\f1e8"
        }

        .fa-twitter:before {
            content: "\f099"
        }

        .fa-twitter-square:before {
            content: "\f081"
        }

        .fa-typo3:before {
            content: "\f42b"
        }

        .fa-uber:before {
            content: "\f402"
        }

        .fa-ubuntu:before {
            content: "\f7df"
        }

        .fa-uikit:before {
            content: "\f403"
        }

        .fa-umbraco:before {
            content: "\f8e8"
        }

        .fa-umbrella:before {
            content: "\f0e9"
        }

        .fa-umbrella-beach:before {
            content: "\f5ca"
        }

        .fa-uncharted:before {
            content: "\e084"
        }

        .fa-underline:before {
            content: "\f0cd"
        }

        .fa-undo:before {
            content: "\f0e2"
        }

        .fa-undo-alt:before {
            content: "\f2ea"
        }

        .fa-uniregistry:before {
            content: "\f404"
        }

        .fa-unity:before {
            content: "\e049"
        }

        .fa-universal-access:before {
            content: "\f29a"
        }

        .fa-university:before {
            content: "\f19c"
        }

        .fa-unlink:before {
            content: "\f127"
        }

        .fa-unlock:before {
            content: "\f09c"
        }

        .fa-unlock-alt:before {
            content: "\f13e"
        }

        .fa-unsplash:before {
            content: "\e07c"
        }

        .fa-untappd:before {
            content: "\f405"
        }

        .fa-upload:before {
            content: "\f093"
        }

        .fa-ups:before {
            content: "\f7e0"
        }

        .fa-usb:before {
            content: "\f287"
        }

        .fa-user:before {
            content: "\f007"
        }

        .fa-user-alt:before {
            content: "\f406"
        }

        .fa-user-alt-slash:before {
            content: "\f4fa"
        }

        .fa-user-astronaut:before {
            content: "\f4fb"
        }

        .fa-user-check:before {
            content: "\f4fc"
        }

        .fa-user-circle:before {
            content: "\f2bd"
        }

        .fa-user-clock:before {
            content: "\f4fd"
        }

        .fa-user-cog:before {
            content: "\f4fe"
        }

        .fa-user-edit:before {
            content: "\f4ff"
        }

        .fa-user-friends:before {
            content: "\f500"
        }

        .fa-user-graduate:before {
            content: "\f501"
        }

        .fa-user-injured:before {
            content: "\f728"
        }

        .fa-user-lock:before {
            content: "\f502"
        }

        .fa-user-md:before {
            content: "\f0f0"
        }

        .fa-user-minus:before {
            content: "\f503"
        }

        .fa-user-ninja:before {
            content: "\f504"
        }

        .fa-user-nurse:before {
            content: "\f82f"
        }

        .fa-user-plus:before {
            content: "\f234"
        }

        .fa-user-secret:before {
            content: "\f21b"
        }

        .fa-user-shield:before {
            content: "\f505"
        }

        .fa-user-slash:before {
            content: "\f506"
        }

        .fa-user-tag:before {
            content: "\f507"
        }

        .fa-user-tie:before {
            content: "\f508"
        }

        .fa-user-times:before {
            content: "\f235"
        }

        .fa-users:before {
            content: "\f0c0"
        }

        .fa-users-cog:before {
            content: "\f509"
        }

        .fa-users-slash:before {
            content: "\e073"
        }

        .fa-usps:before {
            content: "\f7e1"
        }

        .fa-ussunnah:before {
            content: "\f407"
        }

        .fa-utensil-spoon:before {
            content: "\f2e5"
        }

        .fa-utensils:before {
            content: "\f2e7"
        }

        .fa-vaadin:before {
            content: "\f408"
        }

        .fa-vector-square:before {
            content: "\f5cb"
        }

        .fa-venus:before {
            content: "\f221"
        }

        .fa-venus-double:before {
            content: "\f226"
        }

        .fa-venus-mars:before {
            content: "\f228"
        }

        .fa-vest:before {
            content: "\e085"
        }

        .fa-vest-patches:before {
            content: "\e086"
        }

        .fa-viacoin:before {
            content: "\f237"
        }

        .fa-viadeo:before {
            content: "\f2a9"
        }

        .fa-viadeo-square:before {
            content: "\f2aa"
        }

        .fa-vial:before {
            content: "\f492"
        }

        .fa-vials:before {
            content: "\f493"
        }

        .fa-viber:before {
            content: "\f409"
        }

        .fa-video:before {
            content: "\f03d"
        }

        .fa-video-slash:before {
            content: "\f4e2"
        }

        .fa-vihara:before {
            content: "\f6a7"
        }

        .fa-vimeo:before {
            content: "\f40a"
        }

        .fa-vimeo-square:before {
            content: "\f194"
        }

        .fa-vimeo-v:before {
            content: "\f27d"
        }

        .fa-vine:before {
            content: "\f1ca"
        }

        .fa-virus:before {
            content: "\e074"
        }

        .fa-virus-slash:before {
            content: "\e075"
        }

        .fa-viruses:before {
            content: "\e076"
        }

        .fa-vk:before {
            content: "\f189"
        }

        .fa-vnv:before {
            content: "\f40b"
        }

        .fa-voicemail:before {
            content: "\f897"
        }

        .fa-volleyball-ball:before {
            content: "\f45f"
        }

        .fa-volume-down:before {
            content: "\f027"
        }

        .fa-volume-mute:before {
            content: "\f6a9"
        }

        .fa-volume-off:before {
            content: "\f026"
        }

        .fa-volume-up:before {
            content: "\f028"
        }

        .fa-vote-yea:before {
            content: "\f772"
        }

        .fa-vr-cardboard:before {
            content: "\f729"
        }

        .fa-vuejs:before {
            content: "\f41f"
        }

        .fa-walking:before {
            content: "\f554"
        }

        .fa-wallet:before {
            content: "\f555"
        }

        .fa-warehouse:before {
            content: "\f494"
        }

        .fa-watchman-monitoring:before {
            content: "\e087"
        }

        .fa-water:before {
            content: "\f773"
        }

        .fa-wave-square:before {
            content: "\f83e"
        }

        .fa-waze:before {
            content: "\f83f"
        }

        .fa-weebly:before {
            content: "\f5cc"
        }

        .fa-weibo:before {
            content: "\f18a"
        }

        .fa-weight:before {
            content: "\f496"
        }

        .fa-weight-hanging:before {
            content: "\f5cd"
        }

        .fa-weixin:before {
            content: "\f1d7"
        }

        .fa-whatsapp:before {
            content: "\f232"
        }

        .fa-whatsapp-square:before {
            content: "\f40c"
        }

        .fa-wheelchair:before {
            content: "\f193"
        }

        .fa-whmcs:before {
            content: "\f40d"
        }

        .fa-wifi:before {
            content: "\f1eb"
        }

        .fa-wikipedia-w:before {
            content: "\f266"
        }

        .fa-wind:before {
            content: "\f72e"
        }

        .fa-window-close:before {
            content: "\f410"
        }

        .fa-window-maximize:before {
            content: "\f2d0"
        }

        .fa-window-minimize:before {
            content: "\f2d1"
        }

        .fa-window-restore:before {
            content: "\f2d2"
        }

        .fa-windows:before {
            content: "\f17a"
        }

        .fa-wine-bottle:before {
            content: "\f72f"
        }

        .fa-wine-glass:before {
            content: "\f4e3"
        }

        .fa-wine-glass-alt:before {
            content: "\f5ce"
        }

        .fa-wix:before {
            content: "\f5cf"
        }

        .fa-wizards-of-the-coast:before {
            content: "\f730"
        }

        .fa-wodu:before {
            content: "\e088"
        }

        .fa-wolf-pack-battalion:before {
            content: "\f514"
        }

        .fa-won-sign:before {
            content: "\f159"
        }

        .fa-wordpress:before {
            content: "\f19a"
        }

        .fa-wordpress-simple:before {
            content: "\f411"
        }

        .fa-wpbeginner:before {
            content: "\f297"
        }

        .fa-wpexplorer:before {
            content: "\f2de"
        }

        .fa-wpforms:before {
            content: "\f298"
        }

        .fa-wpressr:before {
            content: "\f3e4"
        }

        .fa-wrench:before {
            content: "\f0ad"
        }

        .fa-x-ray:before {
            content: "\f497"
        }

        .fa-xbox:before {
            content: "\f412"
        }

        .fa-xing:before {
            content: "\f168"
        }

        .fa-xing-square:before {
            content: "\f169"
        }

        .fa-y-combinator:before {
            content: "\f23b"
        }

        .fa-yahoo:before {
            content: "\f19e"
        }

        .fa-yammer:before {
            content: "\f840"
        }

        .fa-yandex:before {
            content: "\f413"
        }

        .fa-yandex-international:before {
            content: "\f414"
        }

        .fa-yarn:before {
            content: "\f7e3"
        }

        .fa-yelp:before {
            content: "\f1e9"
        }

        .fa-yen-sign:before {
            content: "\f157"
        }

        .fa-yin-yang:before {
            content: "\f6ad"
        }

        .fa-yoast:before {
            content: "\f2b1"
        }

        .fa-youtube:before {
            content: "\f167"
        }

        .fa-youtube-square:before {
            content: "\f431"
        }

        .fa-zhihu:before {
            content: "\f63f"
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(../webfonts/fa-brands-400.eot);
            src: url(../webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-brands-400.woff2) format("woff2"), url(../webfonts/fa-brands-400.woff) format("woff"), url(../webfonts/fa-brands-400.ttf) format("truetype"), url(../webfonts/fa-brands-400.svg#fontawesome) format("svg")
        }

        .fab {
            font-family: "Font Awesome 5 Brands"
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(../webfonts/fa-regular-400.eot);
            src: url(../webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-regular-400.woff2) format("woff2"), url(../webfonts/fa-regular-400.woff) format("woff"), url(../webfonts/fa-regular-400.ttf) format("truetype"), url(../webfonts/fa-regular-400.svg#fontawesome) format("svg")
        }

        .fab,
        .far {
            font-weight: 400
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(../webfonts/fa-solid-900.eot);
            src: url(../webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(../webfonts/fa-solid-900.woff2) format("woff2"), url(../webfonts/fa-solid-900.woff) format("woff"), url(../webfonts/fa-solid-900.ttf) format("truetype"), url(../webfonts/fa-solid-900.svg#fontawesome) format("svg")
        }

        .fa,
        .far,
        .fas {
            font-family: "Font Awesome 5 Free"
        }

        .fa,
        .fas {
            font-weight: 900
        }


        */:root {
            --blue: #4e73df;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #e74a3b;
            --orange: #fd7e14;
            --yellow: #f6c23e;
            --green: #1cc88a;
            --teal: #20c9a6;
            --cyan: #36b9cc;
            --white: #fff;
            --gray: #858796;
            --gray-dark: #5a5c69;
            --primary: #4e73df;
            --secondary: #858796;
            --success: #1cc88a;
            --info: #36b9cc;
            --warning: #f6c23e;
            --danger: #e74a3b;
            --light: #f8f9fc;
            --dark: #5a5c69;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: "Nunito", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #858796;
            text-align: left;
            background-color: #fff
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        abbr[data-original-title],
        abbr[title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit
        }

        dl,
        ol,
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        b,
        strong {
            font-weight: bolder
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        a {
            color: #4e73df;
            text-decoration: none;
            background-color: transparent
        }

        a:hover {
            color: #224abe;
            text-decoration: underline
        }

        a:not([href]):not([class]) {
            color: inherit;
            text-decoration: none
        }

        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        code,
        kbd,
        pre,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            -ms-overflow-style: scrollbar
        }

        figure {
            margin: 0 0 1rem
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        svg {
            overflow: hidden;
            vertical-align: middle
        }

        table {
            border-collapse: collapse
        }

        caption {
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #858796;
            text-align: left;
            caption-side: bottom
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        select {
            word-wrap: normal
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: none
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        output {
            display: inline-block
        }

        summary {
            display: list-item;
            cursor: pointer
        }

        template {
            display: none
        }

        [hidden] {
            display: none !important
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: .5rem;
            font-weight: 400;
            line-height: 1.2
        }

        .h1,
        h1 {
            font-size: 2.5rem
        }

        .h2,
        h2 {
            font-size: 2rem
        }

        .h3,
        h3 {
            font-size: 1.75rem
        }

        .h4,
        h4 {
            font-size: 1.5rem
        }

        .h5,
        h5 {
            font-size: 1.25rem
        }

        .h6,
        h6 {
            font-size: 1rem
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300
        }

        .display-1 {
            font-size: 6rem;
            font-weight: 300;
            line-height: 1.2
        }

        .display-2 {
            font-size: 5.5rem;
            font-weight: 300;
            line-height: 1.2
        }

        .display-3 {
            font-size: 4.5rem;
            font-weight: 300;
            line-height: 1.2
        }

        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .small,
        small {
            font-size: 80%;
            font-weight: 400
        }

        .mark,
        mark {
            padding: .2em;
            background-color: #fcf8e3
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            list-style: none
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: .5rem
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem
        }

        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #858796
        }

        .blockquote-footer::before {
            content: "\2014\00A0"
        }

        .img-fluid {
            max-width: 100%;
            height: auto
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dddfeb;
            border-radius: .35rem;
            max-width: 100%;
            height: auto
        }

        .figure {
            display: inline-block
        }

        .figure-img {
            margin-bottom: .5rem;
            line-height: 1
        }

        .figure-caption {
            font-size: 90%;
            color: #858796
        }

        code {
            font-size: 87.5%;
            color: #e83e8c;
            word-wrap: break-word
        }

        a>code {
            color: inherit
        }

        kbd {
            padding: .2rem .4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #3a3b45;
            border-radius: .2rem
        }

        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 700
        }

        pre {
            display: block;
            font-size: 87.5%;
            color: #3a3b45
        }

        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: .75rem;
            padding-left: .75rem;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:576px) {

            .container,
            .container-sm {
                max-width: 540px
            }
        }

        @media (min-width:768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 720px
            }
        }

        @media (min-width:992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1140px
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -.75rem;
            margin-left: -.75rem
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .no-gutters>.col,
        .no-gutters>[class*=col-] {
            padding-right: 0;
            padding-left: 0
        }

        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: .75rem;
            padding-left: .75rem
        }

        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-3>* {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .row-cols-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-6>* {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%
        }

        .col-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%
        }

        .col-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%
        }

        .col-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%
        }

        .col-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%
        }

        .col-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%
        }

        .col-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%
        }

        .col-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-first {
            order: -1
        }

        .order-last {
            order: 13
        }

        .order-0 {
            order: 0
        }

        .order-1 {
            order: 1
        }

        .order-2 {
            order: 2
        }

        .order-3 {
            order: 3
        }

        .order-4 {
            order: 4
        }

        .order-5 {
            order: 5
        }

        .order-6 {
            order: 6
        }

        .order-7 {
            order: 7
        }

        .order-8 {
            order: 8
        }

        .order-9 {
            order: 9
        }

        .order-10 {
            order: 10
        }

        .order-11 {
            order: 11
        }

        .order-12 {
            order: 12
        }

        .offset-1 {
            margin-left: 8.33333%
        }

        .offset-2 {
            margin-left: 16.66667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.33333%
        }

        .offset-5 {
            margin-left: 41.66667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.33333%
        }

        .offset-8 {
            margin-left: 66.66667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.33333%
        }

        .offset-11 {
            margin-left: 91.66667%
        }

        @media (min-width:576px) {
            .col-sm {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-sm-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-sm-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-sm-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-sm-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-sm-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-sm-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-sm-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-sm-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-sm-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-sm-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-sm-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-sm-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-sm-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-sm-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-sm-first {
                order: -1
            }

            .order-sm-last {
                order: 13
            }

            .order-sm-0 {
                order: 0
            }

            .order-sm-1 {
                order: 1
            }

            .order-sm-2 {
                order: 2
            }

            .order-sm-3 {
                order: 3
            }

            .order-sm-4 {
                order: 4
            }

            .order-sm-5 {
                order: 5
            }

            .order-sm-6 {
                order: 6
            }

            .order-sm-7 {
                order: 7
            }

            .order-sm-8 {
                order: 8
            }

            .order-sm-9 {
                order: 9
            }

            .order-sm-10 {
                order: 10
            }

            .order-sm-11 {
                order: 11
            }

            .order-sm-12 {
                order: 12
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.33333%
            }

            .offset-sm-2 {
                margin-left: 16.66667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.33333%
            }

            .offset-sm-5 {
                margin-left: 41.66667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.33333%
            }

            .offset-sm-8 {
                margin-left: 66.66667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.33333%
            }

            .offset-sm-11 {
                margin-left: 91.66667%
            }
        }

        @media (min-width:768px) {
            .col-md {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-md-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-md-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-md-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-md-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-md-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-md-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-md-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-md-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-md-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-md-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-md-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-md-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-md-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-md-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-md-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-md-first {
                order: -1
            }

            .order-md-last {
                order: 13
            }

            .order-md-0 {
                order: 0
            }

            .order-md-1 {
                order: 1
            }

            .order-md-2 {
                order: 2
            }

            .order-md-3 {
                order: 3
            }

            .order-md-4 {
                order: 4
            }

            .order-md-5 {
                order: 5
            }

            .order-md-6 {
                order: 6
            }

            .order-md-7 {
                order: 7
            }

            .order-md-8 {
                order: 8
            }

            .order-md-9 {
                order: 9
            }

            .order-md-10 {
                order: 10
            }

            .order-md-11 {
                order: 11
            }

            .order-md-12 {
                order: 12
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.33333%
            }

            .offset-md-2 {
                margin-left: 16.66667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.33333%
            }

            .offset-md-5 {
                margin-left: 41.66667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.33333%
            }

            .offset-md-8 {
                margin-left: 66.66667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.33333%
            }

            .offset-md-11 {
                margin-left: 91.66667%
            }
        }

        @media (min-width:992px) {
            .col-lg {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-lg-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-lg-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-lg-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-lg-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-lg-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-lg-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-lg-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-lg-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-lg-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-lg-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-lg-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-lg-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-lg-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-lg-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-lg-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-lg-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-lg-first {
                order: -1
            }

            .order-lg-last {
                order: 13
            }

            .order-lg-0 {
                order: 0
            }

            .order-lg-1 {
                order: 1
            }

            .order-lg-2 {
                order: 2
            }

            .order-lg-3 {
                order: 3
            }

            .order-lg-4 {
                order: 4
            }

            .order-lg-5 {
                order: 5
            }

            .order-lg-6 {
                order: 6
            }

            .order-lg-7 {
                order: 7
            }

            .order-lg-8 {
                order: 8
            }

            .order-lg-9 {
                order: 9
            }

            .order-lg-10 {
                order: 10
            }

            .order-lg-11 {
                order: 11
            }

            .order-lg-12 {
                order: 12
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.33333%
            }

            .offset-lg-2 {
                margin-left: 16.66667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.33333%
            }

            .offset-lg-5 {
                margin-left: 41.66667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.33333%
            }

            .offset-lg-8 {
                margin-left: 66.66667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.33333%
            }

            .offset-lg-11 {
                margin-left: 91.66667%
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-xl-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-xl-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-xl-3>* {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .row-cols-xl-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-xl-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-xl-6>* {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-xl-1 {
                flex: 0 0 8.33333%;
                max-width: 8.33333%
            }

            .col-xl-2 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%
            }

            .col-xl-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-xl-4 {
                flex: 0 0 33.33333%;
                max-width: 33.33333%
            }

            .col-xl-5 {
                flex: 0 0 41.66667%;
                max-width: 41.66667%
            }

            .col-xl-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-xl-7 {
                flex: 0 0 58.33333%;
                max-width: 58.33333%
            }

            .col-xl-8 {
                flex: 0 0 66.66667%;
                max-width: 66.66667%
            }

            .col-xl-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-xl-10 {
                flex: 0 0 83.33333%;
                max-width: 83.33333%
            }

            .col-xl-11 {
                flex: 0 0 91.66667%;
                max-width: 91.66667%
            }

            .col-xl-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-xl-first {
                order: -1
            }

            .order-xl-last {
                order: 13
            }

            .order-xl-0 {
                order: 0
            }

            .order-xl-1 {
                order: 1
            }

            .order-xl-2 {
                order: 2
            }

            .order-xl-3 {
                order: 3
            }

            .order-xl-4 {
                order: 4
            }

            .order-xl-5 {
                order: 5
            }

            .order-xl-6 {
                order: 6
            }

            .order-xl-7 {
                order: 7
            }

            .order-xl-8 {
                order: 8
            }

            .order-xl-9 {
                order: 9
            }

            .order-xl-10 {
                order: 10
            }

            .order-xl-11 {
                order: 11
            }

            .order-xl-12 {
                order: 12
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.33333%
            }

            .offset-xl-2 {
                margin-left: 16.66667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.33333%
            }

            .offset-xl-5 {
                margin-left: 41.66667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.33333%
            }

            .offset-xl-8 {
                margin-left: 66.66667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.33333%
            }

            .offset-xl-11 {
                margin-left: 91.66667%
            }
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #858796
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #e3e6f0
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #e3e6f0
        }

        .table tbody+tbody {
            border-top: 2px solid #e3e6f0
        }

        .table-sm td,
        .table-sm th {
            padding: .3rem
        }

        .table-bordered {
            border: 1px solid #e3e6f0
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #e3e6f0
        }

        .table-bordered thead td,
        .table-bordered thead th {
            border-bottom-width: 2px
        }

        .table-borderless tbody+tbody,
        .table-borderless td,
        .table-borderless th,
        .table-borderless thead th {
            border: 0
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05)
        }

        .table-hover tbody tr:hover {
            color: #858796;
            background-color: rgba(0, 0, 0, .075)
        }

        .table-primary,
        .table-primary>td,
        .table-primary>th {
            background-color: #cdd8f6
        }

        .table-primary tbody+tbody,
        .table-primary td,
        .table-primary th,
        .table-primary thead th {
            border-color: #a3b6ee
        }

        .table-hover .table-primary:hover {
            background-color: #b7c7f2
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #b7c7f2
        }

        .table-secondary,
        .table-secondary>td,
        .table-secondary>th {
            background-color: #dddde2
        }

        .table-secondary tbody+tbody,
        .table-secondary td,
        .table-secondary th,
        .table-secondary thead th {
            border-color: #c0c1c8
        }

        .table-hover .table-secondary:hover {
            background-color: #cfcfd6
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #cfcfd6
        }

        .table-success,
        .table-success>td,
        .table-success>th {
            background-color: #bff0de
        }

        .table-success tbody+tbody,
        .table-success td,
        .table-success th,
        .table-success thead th {
            border-color: #89e2c2
        }

        .table-hover .table-success:hover {
            background-color: #aaebd3
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #aaebd3
        }

        .table-info,
        .table-info>td,
        .table-info>th {
            background-color: #c7ebf1
        }

        .table-info tbody+tbody,
        .table-info td,
        .table-info th,
        .table-info thead th {
            border-color: #96dbe4
        }

        .table-hover .table-info:hover {
            background-color: #b3e4ec
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #b3e4ec
        }

        .table-warning,
        .table-warning>td,
        .table-warning>th {
            background-color: #fceec9
        }

        .table-warning tbody+tbody,
        .table-warning td,
        .table-warning th,
        .table-warning thead th {
            border-color: #fadf9b
        }

        .table-hover .table-warning:hover {
            background-color: #fbe6b1
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #fbe6b1
        }

        .table-danger,
        .table-danger>td,
        .table-danger>th {
            background-color: #f8ccc8
        }

        .table-danger tbody+tbody,
        .table-danger td,
        .table-danger th,
        .table-danger thead th {
            border-color: #f3a199
        }

        .table-hover .table-danger:hover {
            background-color: #f5b7b1
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f5b7b1
        }

        .table-light,
        .table-light>td,
        .table-light>th {
            background-color: #fdfdfe
        }

        .table-light tbody+tbody,
        .table-light td,
        .table-light th,
        .table-light thead th {
            border-color: #fbfcfd
        }

        .table-hover .table-light:hover {
            background-color: #ececf6
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6
        }

        .table-dark,
        .table-dark>td,
        .table-dark>th {
            background-color: #d1d1d5
        }

        .table-dark tbody+tbody,
        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #a9aab1
        }

        .table-hover .table-dark:hover {
            background-color: #c4c4c9
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #c4c4c9
        }

        .table-active,
        .table-active>td,
        .table-active>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, .075)
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #5a5c69;
            border-color: #6c6e7e
        }

        .table .thead-light th {
            color: #6e707e;
            background-color: #eaecf4;
            border-color: #e3e6f0
        }

        .table-dark {
            color: #fff;
            background-color: #5a5c69
        }

        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #6c6e7e
        }

        .table-dark.table-bordered {
            border: 0
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, .05)
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, .075)
        }

        @media (max-width:575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-sm>.table-bordered {
                border: 0
            }
        }

        @media (max-width:767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-md>.table-bordered {
                border: 0
            }
        }

        @media (max-width:991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-lg>.table-bordered {
                border: 0
            }
        }

        @media (max-width:1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-xl>.table-bordered {
                border: 0
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }

        .table-responsive>.table-bordered {
            border: 0
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #d1d3e2;
            border-radius: .35rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #6e707e
        }

        .form-control:focus {
            color: #6e707e;
            background-color: #fff;
            border-color: #bac8f3;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .form-control::-webkit-input-placeholder {
            color: #858796;
            opacity: 1
        }

        .form-control::-moz-placeholder {
            color: #858796;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #858796;
            opacity: 1
        }

        .form-control::-ms-input-placeholder {
            color: #858796;
            opacity: 1
        }

        .form-control::placeholder {
            color: #858796;
            opacity: 1
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #eaecf4;
            opacity: 1
        }

        input[type=date].form-control,
        input[type=datetime-local].form-control,
        input[type=month].form-control,
        input[type=time].form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        select.form-control:focus::-ms-value {
            color: #6e707e;
            background-color: #fff
        }

        .form-control-file,
        .form-control-range {
            display: block;
            width: 100%
        }

        .col-form-label {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5
        }

        .col-form-label-lg {
            padding-top: calc(.5rem + 1px);
            padding-bottom: calc(.5rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5
        }

        .col-form-label-sm {
            padding-top: calc(.25rem + 1px);
            padding-bottom: calc(.25rem + 1px);
            font-size: .875rem;
            line-height: 1.5
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: .375rem 0;
            margin-bottom: 0;
            font-size: 1rem;
            line-height: 1.5;
            color: #858796;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0
        }

        .form-control-plaintext.form-control-lg,
        .form-control-plaintext.form-control-sm {
            padding-right: 0;
            padding-left: 0
        }

        .form-control-sm {
            height: calc(1.5em + .5rem + 2px);
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        select.form-control[multiple],
        select.form-control[size] {
            height: auto
        }

        textarea.form-control {
            height: auto
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-text {
            display: block;
            margin-top: .25rem
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px
        }

        .form-row>.col,
        .form-row>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem
        }

        .form-check-input {
            position: absolute;
            margin-top: .3rem;
            margin-left: -1.25rem
        }

        .form-check-input:disabled~.form-check-label,
        .form-check-input[disabled]~.form-check-label {
            color: #858796
        }

        .form-check-label {
            margin-bottom: 0
        }

        .form-check-inline {
            display: inline-flex;
            align-items: center;
            padding-left: 0;
            margin-right: .75rem
        }

        .form-check-inline .form-check-input {
            position: static;
            margin-top: 0;
            margin-right: .3125rem;
            margin-left: 0
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #1cc88a
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(28, 200, 138, .9);
            border-radius: .35rem
        }

        .form-row>.col>.valid-tooltip,
        .form-row>[class*=col-]>.valid-tooltip {
            left: 5px
        }

        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip,
        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip {
            display: block
        }

        .form-control.is-valid,
        .was-validated .form-control:valid {
            border-color: #1cc88a;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231cc88a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-valid:focus,
        .was-validated .form-control:valid:focus {
            border-color: #1cc88a;
            box-shadow: 0 0 0 .2rem rgba(28, 200, 138, .25)
        }

        .was-validated textarea.form-control:valid,
        textarea.form-control.is-valid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .custom-select.is-valid,
        .was-validated .custom-select:valid {
            border-color: #1cc88a;
            padding-right: calc(.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%231cc88a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat
        }

        .custom-select.is-valid:focus,
        .was-validated .custom-select:valid:focus {
            border-color: #1cc88a;
            box-shadow: 0 0 0 .2rem rgba(28, 200, 138, .25)
        }

        .form-check-input.is-valid~.form-check-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: #1cc88a
        }

        .form-check-input.is-valid~.valid-feedback,
        .form-check-input.is-valid~.valid-tooltip,
        .was-validated .form-check-input:valid~.valid-feedback,
        .was-validated .form-check-input:valid~.valid-tooltip {
            display: block
        }

        .custom-control-input.is-valid~.custom-control-label,
        .was-validated .custom-control-input:valid~.custom-control-label {
            color: #1cc88a
        }

        .custom-control-input.is-valid~.custom-control-label::before,
        .was-validated .custom-control-input:valid~.custom-control-label::before {
            border-color: #1cc88a
        }

        .custom-control-input.is-valid:checked~.custom-control-label::before,
        .was-validated .custom-control-input:valid:checked~.custom-control-label::before {
            border-color: #34e3a4;
            background-color: #34e3a4
        }

        .custom-control-input.is-valid:focus~.custom-control-label::before,
        .was-validated .custom-control-input:valid:focus~.custom-control-label::before {
            box-shadow: 0 0 0 .2rem rgba(28, 200, 138, .25)
        }

        .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,
        .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before {
            border-color: #1cc88a
        }

        .custom-file-input.is-valid~.custom-file-label,
        .was-validated .custom-file-input:valid~.custom-file-label {
            border-color: #1cc88a
        }

        .custom-file-input.is-valid:focus~.custom-file-label,
        .was-validated .custom-file-input:valid:focus~.custom-file-label {
            border-color: #1cc88a;
            box-shadow: 0 0 0 .2rem rgba(28, 200, 138, .25)
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #e74a3b
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(231, 74, 59, .9);
            border-radius: .35rem
        }

        .form-row>.col>.invalid-tooltip,
        .form-row>[class*=col-]>.invalid-tooltip {
            left: 5px
        }

        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip,
        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip {
            display: block
        }

        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            border-color: #e74a3b;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e74a3b' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e74a3b' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-invalid:focus,
        .was-validated .form-control:invalid:focus {
            border-color: #e74a3b;
            box-shadow: 0 0 0 .2rem rgba(231, 74, 59, .25)
        }

        .was-validated textarea.form-control:invalid,
        textarea.form-control.is-invalid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .custom-select.is-invalid,
        .was-validated .custom-select:invalid {
            border-color: #e74a3b;
            padding-right: calc(.75em + 2.3125rem);
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23e74a3b' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23e74a3b' stroke='none'/%3e%3c/svg%3e") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat
        }

        .custom-select.is-invalid:focus,
        .was-validated .custom-select:invalid:focus {
            border-color: #e74a3b;
            box-shadow: 0 0 0 .2rem rgba(231, 74, 59, .25)
        }

        .form-check-input.is-invalid~.form-check-label,
        .was-validated .form-check-input:invalid~.form-check-label {
            color: #e74a3b
        }

        .form-check-input.is-invalid~.invalid-feedback,
        .form-check-input.is-invalid~.invalid-tooltip,
        .was-validated .form-check-input:invalid~.invalid-feedback,
        .was-validated .form-check-input:invalid~.invalid-tooltip {
            display: block
        }

        .custom-control-input.is-invalid~.custom-control-label,
        .was-validated .custom-control-input:invalid~.custom-control-label {
            color: #e74a3b
        }

        .custom-control-input.is-invalid~.custom-control-label::before,
        .was-validated .custom-control-input:invalid~.custom-control-label::before {
            border-color: #e74a3b
        }

        .custom-control-input.is-invalid:checked~.custom-control-label::before,
        .was-validated .custom-control-input:invalid:checked~.custom-control-label::before {
            border-color: #ed7468;
            background-color: #ed7468
        }

        .custom-control-input.is-invalid:focus~.custom-control-label::before,
        .was-validated .custom-control-input:invalid:focus~.custom-control-label::before {
            box-shadow: 0 0 0 .2rem rgba(231, 74, 59, .25)
        }

        .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,
        .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before {
            border-color: #e74a3b
        }

        .custom-file-input.is-invalid~.custom-file-label,
        .was-validated .custom-file-input:invalid~.custom-file-label {
            border-color: #e74a3b
        }

        .custom-file-input.is-invalid:focus~.custom-file-label,
        .was-validated .custom-file-input:invalid:focus~.custom-file-label {
            border-color: #e74a3b;
            box-shadow: 0 0 0 .2rem rgba(231, 74, 59, .25)
        }

        .form-inline {
            display: flex;
            flex-flow: row wrap;
            align-items: center
        }

        .form-inline .form-check {
            width: 100%
        }

        @media (min-width:576px) {
            .form-inline label {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 0
            }

            .form-inline .form-group {
                display: flex;
                flex: 0 0 auto;
                flex-flow: row wrap;
                align-items: center;
                margin-bottom: 0
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .form-control-plaintext {
                display: inline-block
            }

            .form-inline .custom-select,
            .form-inline .input-group {
                width: auto
            }

            .form-inline .form-check {
                display: flex;
                align-items: center;
                justify-content: center;
                width: auto;
                padding-left: 0
            }

            .form-inline .form-check-input {
                position: relative;
                flex-shrink: 0;
                margin-top: 0;
                margin-right: .25rem;
                margin-left: 0
            }

            .form-inline .custom-control {
                align-items: center;
                justify-content: center
            }

            .form-inline .custom-control-label {
                margin-bottom: 0
            }
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #858796;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .35rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .btn {
                transition: none
            }
        }

        .btn:hover {
            color: #858796;
            text-decoration: none
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .btn.disabled,
        .btn:disabled {
            opacity: .65
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        a.btn.disabled,
        fieldset:disabled a.btn {
            pointer-events: none
        }

        .btn-primary {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #2e59d9;
            border-color: #2653d4
        }

        .btn-primary.focus,
        .btn-primary:focus {
            color: #fff;
            background-color: #2e59d9;
            border-color: #2653d4;
            box-shadow: 0 0 0 .2rem rgba(105, 136, 228, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #2653d4;
            border-color: #244ec9
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(105, 136, 228, .5)
        }

        .btn-secondary {
            color: #fff;
            background-color: #858796;
            border-color: #858796
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #717384;
            border-color: #6b6d7d
        }

        .btn-secondary.focus,
        .btn-secondary:focus {
            color: #fff;
            background-color: #717384;
            border-color: #6b6d7d;
            box-shadow: 0 0 0 .2rem rgba(151, 153, 166, .5)
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            color: #fff;
            background-color: #858796;
            border-color: #858796
        }

        .btn-secondary:not(:disabled):not(.disabled).active,
        .btn-secondary:not(:disabled):not(.disabled):active,
        .show>.btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #6b6d7d;
            border-color: #656776
        }

        .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-secondary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(151, 153, 166, .5)
        }

        .btn-success {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a
        }

        .btn-success:hover {
            color: #fff;
            background-color: #17a673;
            border-color: #169b6b
        }

        .btn-success.focus,
        .btn-success:focus {
            color: #fff;
            background-color: #17a673;
            border-color: #169b6b;
            box-shadow: 0 0 0 .2rem rgba(62, 208, 156, .5)
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #169b6b;
            border-color: #149063
        }

        .btn-success:not(:disabled):not(.disabled).active:focus,
        .btn-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(62, 208, 156, .5)
        }

        .btn-info {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc
        }

        .btn-info:hover {
            color: #fff;
            background-color: #2c9faf;
            border-color: #2a96a5
        }

        .btn-info.focus,
        .btn-info:focus {
            color: #fff;
            background-color: #2c9faf;
            border-color: #2a96a5;
            box-shadow: 0 0 0 .2rem rgba(84, 196, 212, .5)
        }

        .btn-info.disabled,
        .btn-info:disabled {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc
        }

        .btn-info:not(:disabled):not(.disabled).active,
        .btn-info:not(:disabled):not(.disabled):active,
        .show>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #2a96a5;
            border-color: #278c9b
        }

        .btn-info:not(:disabled):not(.disabled).active:focus,
        .btn-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(84, 196, 212, .5)
        }

        .btn-warning {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #f4b619;
            border-color: #f4b30d
        }

        .btn-warning.focus,
        .btn-warning:focus {
            color: #fff;
            background-color: #f4b619;
            border-color: #f4b30d;
            box-shadow: 0 0 0 .2rem rgba(247, 203, 91, .5)
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e
        }

        .btn-warning:not(:disabled):not(.disabled).active,
        .btn-warning:not(:disabled):not(.disabled):active,
        .show>.btn-warning.dropdown-toggle {
            color: #fff;
            background-color: #f4b30d;
            border-color: #e9aa0b
        }

        .btn-warning:not(:disabled):not(.disabled).active:focus,
        .btn-warning:not(:disabled):not(.disabled):active:focus,
        .show>.btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(247, 203, 91, .5)
        }

        .btn-danger {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #e02d1b;
            border-color: #d52a1a
        }

        .btn-danger.focus,
        .btn-danger:focus {
            color: #fff;
            background-color: #e02d1b;
            border-color: #d52a1a;
            box-shadow: 0 0 0 .2rem rgba(235, 101, 88, .5)
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b
        }

        .btn-danger:not(:disabled):not(.disabled).active,
        .btn-danger:not(:disabled):not(.disabled):active,
        .show>.btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #d52a1a;
            border-color: #ca2819
        }

        .btn-danger:not(:disabled):not(.disabled).active:focus,
        .btn-danger:not(:disabled):not(.disabled):active:focus,
        .show>.btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(235, 101, 88, .5)
        }

        .btn-light {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc
        }

        .btn-light:hover {
            color: #3a3b45;
            background-color: #dde2f1;
            border-color: #d4daed
        }

        .btn-light.focus,
        .btn-light:focus {
            color: #3a3b45;
            background-color: #dde2f1;
            border-color: #d4daed;
            box-shadow: 0 0 0 .2rem rgba(220, 221, 225, .5)
        }

        .btn-light.disabled,
        .btn-light:disabled {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc
        }

        .btn-light:not(:disabled):not(.disabled).active,
        .btn-light:not(:disabled):not(.disabled):active,
        .show>.btn-light.dropdown-toggle {
            color: #3a3b45;
            background-color: #d4daed;
            border-color: #cbd3e9
        }

        .btn-light:not(:disabled):not(.disabled).active:focus,
        .btn-light:not(:disabled):not(.disabled):active:focus,
        .show>.btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 221, 225, .5)
        }

        .btn-dark {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #484a54;
            border-color: #42444e
        }

        .btn-dark.focus,
        .btn-dark:focus {
            color: #fff;
            background-color: #484a54;
            border-color: #42444e;
            box-shadow: 0 0 0 .2rem rgba(115, 116, 128, .5)
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69
        }

        .btn-dark:not(:disabled):not(.disabled).active,
        .btn-dark:not(:disabled):not(.disabled):active,
        .show>.btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #42444e;
            border-color: #3d3e47
        }

        .btn-dark:not(:disabled):not(.disabled).active:focus,
        .btn-dark:not(:disabled):not(.disabled):active:focus,
        .show>.btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(115, 116, 128, .5)
        }

        .btn-outline-primary {
            color: #4e73df;
            border-color: #4e73df
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .btn-outline-primary.focus,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .5)
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            color: #4e73df;
            background-color: transparent
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .show>.btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .5)
        }

        .btn-outline-secondary {
            color: #858796;
            border-color: #858796
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #858796;
            border-color: #858796
        }

        .btn-outline-secondary.focus,
        .btn-outline-secondary:focus {
            box-shadow: 0 0 0 .2rem rgba(133, 135, 150, .5)
        }

        .btn-outline-secondary.disabled,
        .btn-outline-secondary:disabled {
            color: #858796;
            background-color: transparent
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active,
        .btn-outline-secondary:not(:disabled):not(.disabled):active,
        .show>.btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #858796;
            border-color: #858796
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(133, 135, 150, .5)
        }

        .btn-outline-success {
            color: #1cc88a;
            border-color: #1cc88a
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a
        }

        .btn-outline-success.focus,
        .btn-outline-success:focus {
            box-shadow: 0 0 0 .2rem rgba(28, 200, 138, .5)
        }

        .btn-outline-success.disabled,
        .btn-outline-success:disabled {
            color: #1cc88a;
            background-color: transparent
        }

        .btn-outline-success:not(:disabled):not(.disabled).active,
        .btn-outline-success:not(:disabled):not(.disabled):active,
        .show>.btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #1cc88a;
            border-color: #1cc88a
        }

        .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .btn-outline-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(28, 200, 138, .5)
        }

        .btn-outline-info {
            color: #36b9cc;
            border-color: #36b9cc
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc
        }

        .btn-outline-info.focus,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 .2rem rgba(54, 185, 204, .5)
        }

        .btn-outline-info.disabled,
        .btn-outline-info:disabled {
            color: #36b9cc;
            background-color: transparent
        }

        .btn-outline-info:not(:disabled):not(.disabled).active,
        .btn-outline-info:not(:disabled):not(.disabled):active,
        .show>.btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #36b9cc;
            border-color: #36b9cc
        }

        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(54, 185, 204, .5)
        }

        .btn-outline-warning {
            color: #f6c23e;
            border-color: #f6c23e
        }

        .btn-outline-warning:hover {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e
        }

        .btn-outline-warning.focus,
        .btn-outline-warning:focus {
            box-shadow: 0 0 0 .2rem rgba(246, 194, 62, .5)
        }

        .btn-outline-warning.disabled,
        .btn-outline-warning:disabled {
            color: #f6c23e;
            background-color: transparent
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active,
        .btn-outline-warning:not(:disabled):not(.disabled):active,
        .show>.btn-outline-warning.dropdown-toggle {
            color: #fff;
            background-color: #f6c23e;
            border-color: #f6c23e
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(246, 194, 62, .5)
        }

        .btn-outline-danger {
            color: #e74a3b;
            border-color: #e74a3b
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b
        }

        .btn-outline-danger.focus,
        .btn-outline-danger:focus {
            box-shadow: 0 0 0 .2rem rgba(231, 74, 59, .5)
        }

        .btn-outline-danger.disabled,
        .btn-outline-danger:disabled {
            color: #e74a3b;
            background-color: transparent
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active,
        .btn-outline-danger:not(:disabled):not(.disabled):active,
        .show>.btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #e74a3b;
            border-color: #e74a3b
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(231, 74, 59, .5)
        }

        .btn-outline-light {
            color: #f8f9fc;
            border-color: #f8f9fc
        }

        .btn-outline-light:hover {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc
        }

        .btn-outline-light.focus,
        .btn-outline-light:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 252, .5)
        }

        .btn-outline-light.disabled,
        .btn-outline-light:disabled {
            color: #f8f9fc;
            background-color: transparent
        }

        .btn-outline-light:not(:disabled):not(.disabled).active,
        .btn-outline-light:not(:disabled):not(.disabled):active,
        .show>.btn-outline-light.dropdown-toggle {
            color: #3a3b45;
            background-color: #f8f9fc;
            border-color: #f8f9fc
        }

        .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .btn-outline-light:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 252, .5)
        }

        .btn-outline-dark {
            color: #5a5c69;
            border-color: #5a5c69
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69
        }

        .btn-outline-dark.focus,
        .btn-outline-dark:focus {
            box-shadow: 0 0 0 .2rem rgba(90, 92, 105, .5)
        }

        .btn-outline-dark.disabled,
        .btn-outline-dark:disabled {
            color: #5a5c69;
            background-color: transparent
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active,
        .btn-outline-dark:not(:disabled):not(.disabled):active,
        .show>.btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #5a5c69;
            border-color: #5a5c69
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(90, 92, 105, .5)
        }

        .btn-link {
            font-weight: 400;
            color: #4e73df;
            text-decoration: none
        }

        .btn-link:hover {
            color: #224abe;
            text-decoration: underline
        }

        .btn-link.focus,
        .btn-link:focus {
            text-decoration: underline
        }

        .btn-link.disabled,
        .btn-link:disabled {
            color: #858796;
            pointer-events: none
        }

        .btn-group-lg>.btn,
        .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .btn-block {
            display: block;
            width: 100%
        }

        .btn-block+.btn-block {
            margin-top: .5rem
        }

        input[type=button].btn-block,
        input[type=reset].btn-block,
        input[type=submit].btn-block {
            width: 100%
        }

        .fade {
            transition: opacity .15s linear
        }

        @media (prefers-reduced-motion:reduce) {
            .fade {
                transition: none
            }
        }

        .fade:not(.show) {
            opacity: 0
        }

        .collapse:not(.show) {
            display: none
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            transition: height .15s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .collapsing {
                transition: none
            }
        }

        .dropdown,
        .dropleft,
        .dropright,
        .dropup {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: .85rem;
            color: #858796;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e3e6f0;
            border-radius: .35rem
        }

        .dropdown-menu-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-right {
            right: 0;
            left: auto
        }

        @media (min-width:576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-sm-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-md-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-lg-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-xl-right {
                right: 0;
                left: auto
            }
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: .125rem
        }

        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: 0;
            border-right: .3em solid transparent;
            border-bottom: .3em solid;
            border-left: .3em solid transparent
        }

        .dropup .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: .125rem
        }

        .dropright .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid
        }

        .dropright .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropright .dropdown-toggle::after {
            vertical-align: 0
        }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: .125rem
        }

        .dropleft .dropdown-toggle::after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: ""
        }

        .dropleft .dropdown-toggle::after {
            display: none
        }

        .dropleft .dropdown-toggle::before {
            display: inline-block;
            margin-right: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: .3em solid;
            border-bottom: .3em solid transparent
        }

        .dropleft .dropdown-toggle:empty::after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle::before {
            vertical-align: 0
        }

        .dropdown-menu[x-placement^=bottom],
        .dropdown-menu[x-placement^=left],
        .dropdown-menu[x-placement^=right],
        .dropdown-menu[x-placement^=top] {
            right: auto;
            bottom: auto
        }

        .dropdown-divider {
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #eaecf4
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #3a3b45;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #2e2f37;
            text-decoration: none;
            background-color: #eaecf4
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: #4e73df
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #b7b9cc;
            pointer-events: none;
            background-color: transparent
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            display: block;
            padding: .5rem 1.5rem;
            margin-bottom: 0;
            font-size: .875rem;
            color: #858796;
            white-space: nowrap
        }

        .dropdown-item-text {
            display: block;
            padding: .25rem 1.5rem;
            color: #3a3b45
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            position: relative;
            flex: 1 1 auto
        }

        .btn-group-vertical>.btn:hover,
        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus {
            z-index: 1
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group>.btn-group:not(:first-child),
        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .dropdown-toggle-split {
            padding-right: .5625rem;
            padding-left: .5625rem
        }

        .dropdown-toggle-split::after,
        .dropright .dropdown-toggle-split::after,
        .dropup .dropdown-toggle-split::after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle-split::before {
            margin-right: 0
        }

        .btn-group-sm>.btn+.dropdown-toggle-split,
        .btn-sm+.dropdown-toggle-split {
            padding-right: .375rem;
            padding-left: .375rem
        }

        .btn-group-lg>.btn+.dropdown-toggle-split,
        .btn-lg+.dropdown-toggle-split {
            padding-right: .75rem;
            padding-left: .75rem
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%
        }

        .btn-group-vertical>.btn-group:not(:first-child),
        .btn-group-vertical>.btn:not(:first-child) {
            margin-top: -1px
        }

        .btn-group-vertical>.btn-group:not(:last-child)>.btn,
        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child)>.btn,
        .btn-group-vertical>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group-toggle>.btn,
        .btn-group-toggle>.btn-group>.btn {
            margin-bottom: 0
        }

        .btn-group-toggle>.btn input[type=checkbox],
        .btn-group-toggle>.btn input[type=radio],
        .btn-group-toggle>.btn-group>.btn input[type=checkbox],
        .btn-group-toggle>.btn-group>.btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%
        }

        .input-group>.custom-file,
        .input-group>.custom-select,
        .input-group>.form-control,
        .input-group>.form-control-plaintext {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            margin-bottom: 0
        }

        .input-group>.custom-file+.custom-file,
        .input-group>.custom-file+.custom-select,
        .input-group>.custom-file+.form-control,
        .input-group>.custom-select+.custom-file,
        .input-group>.custom-select+.custom-select,
        .input-group>.custom-select+.form-control,
        .input-group>.form-control+.custom-file,
        .input-group>.form-control+.custom-select,
        .input-group>.form-control+.form-control,
        .input-group>.form-control-plaintext+.custom-file,
        .input-group>.form-control-plaintext+.custom-select,
        .input-group>.form-control-plaintext+.form-control {
            margin-left: -1px
        }

        .input-group>.custom-file .custom-file-input:focus~.custom-file-label,
        .input-group>.custom-select:focus,
        .input-group>.form-control:focus {
            z-index: 3
        }

        .input-group>.custom-file .custom-file-input:focus {
            z-index: 4
        }

        .input-group>.custom-select:not(:first-child),
        .input-group>.form-control:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group>.custom-file {
            display: flex;
            align-items: center
        }

        .input-group>.custom-file:not(:first-child) .custom-file-label,
        .input-group>.custom-file:not(:last-child) .custom-file-label {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group:not(.has-validation)>.custom-file:not(:last-child) .custom-file-label::after,
        .input-group:not(.has-validation)>.custom-select:not(:last-child),
        .input-group:not(.has-validation)>.form-control:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group.has-validation>.custom-file:nth-last-child(n+3) .custom-file-label::after,
        .input-group.has-validation>.custom-select:nth-last-child(n+3),
        .input-group.has-validation>.form-control:nth-last-child(n+3) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group-append,
        .input-group-prepend {
            display: flex
        }

        .input-group-append .btn,
        .input-group-prepend .btn {
            position: relative;
            z-index: 2
        }

        .input-group-append .btn:focus,
        .input-group-prepend .btn:focus {
            z-index: 3
        }

        .input-group-append .btn+.btn,
        .input-group-append .btn+.input-group-text,
        .input-group-append .input-group-text+.btn,
        .input-group-append .input-group-text+.input-group-text,
        .input-group-prepend .btn+.btn,
        .input-group-prepend .btn+.input-group-text,
        .input-group-prepend .input-group-text+.btn,
        .input-group-prepend .input-group-text+.input-group-text {
            margin-left: -1px
        }

        .input-group-prepend {
            margin-right: -1px
        }

        .input-group-append {
            margin-left: -1px
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: .375rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            text-align: center;
            white-space: nowrap;
            background-color: #eaecf4;
            border: 1px solid #d1d3e2;
            border-radius: .35rem
        }

        .input-group-text input[type=checkbox],
        .input-group-text input[type=radio] {
            margin-top: 0
        }

        .input-group-lg>.custom-select,
        .input-group-lg>.form-control:not(textarea) {
            height: calc(1.5em + 1rem + 2px)
        }

        .input-group-lg>.custom-select,
        .input-group-lg>.form-control,
        .input-group-lg>.input-group-append>.btn,
        .input-group-lg>.input-group-append>.input-group-text,
        .input-group-lg>.input-group-prepend>.btn,
        .input-group-lg>.input-group-prepend>.input-group-text {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .input-group-sm>.custom-select,
        .input-group-sm>.form-control:not(textarea) {
            height: calc(1.5em + .5rem + 2px)
        }

        .input-group-sm>.custom-select,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-append>.btn,
        .input-group-sm>.input-group-append>.input-group-text,
        .input-group-sm>.input-group-prepend>.btn,
        .input-group-sm>.input-group-prepend>.input-group-text {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .input-group-lg>.custom-select,
        .input-group-sm>.custom-select {
            padding-right: 1.75rem
        }

        .input-group.has-validation>.input-group-append:nth-last-child(n+3)>.btn,
        .input-group.has-validation>.input-group-append:nth-last-child(n+3)>.input-group-text,
        .input-group:not(.has-validation)>.input-group-append:not(:last-child)>.btn,
        .input-group:not(.has-validation)>.input-group-append:not(:last-child)>.input-group-text,
        .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
        .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
        .input-group>.input-group-prepend>.btn,
        .input-group>.input-group-prepend>.input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>.input-group-append>.btn,
        .input-group>.input-group-append>.input-group-text,
        .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
        .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
        .input-group>.input-group-prepend:not(:first-child)>.btn,
        .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .custom-control {
            position: relative;
            z-index: 1;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem;
            -webkit-print-color-adjust: exact;
            color-adjust: exact
        }

        .custom-control-inline {
            display: inline-flex;
            margin-right: 1rem
        }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.25rem;
            opacity: 0
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #4e73df;
            background-color: #4e73df
        }

        .custom-control-input:focus~.custom-control-label::before {
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .custom-control-input:focus:not(:checked)~.custom-control-label::before {
            border-color: #bac8f3
        }

        .custom-control-input:not(:disabled):active~.custom-control-label::before {
            color: #fff;
            background-color: #e5ebfa;
            border-color: #e5ebfa
        }

        .custom-control-input:disabled~.custom-control-label,
        .custom-control-input[disabled]~.custom-control-label {
            color: #858796
        }

        .custom-control-input:disabled~.custom-control-label::before,
        .custom-control-input[disabled]~.custom-control-label::before {
            background-color: #eaecf4
        }

        .custom-control-label {
            position: relative;
            margin-bottom: 0;
            vertical-align: top
        }

        .custom-control-label::before {
            position: absolute;
            top: .25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border: #b7b9cc solid 1px
        }

        .custom-control-label::after {
            position: absolute;
            top: .25rem;
            left: -1.5rem;
            display: block;
            width: 1rem;
            height: 1rem;
            content: "";
            background: 50%/50% 50% no-repeat
        }

        .custom-checkbox .custom-control-label::before {
            border-radius: .35rem
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e")
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
            border-color: #4e73df;
            background-color: #4e73df
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")
        }

        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(78, 115, 223, .5)
        }

        .custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
            background-color: rgba(78, 115, 223, .5)
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%
        }

        .custom-radio .custom-control-input:checked~.custom-control-label::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
        }

        .custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(78, 115, 223, .5)
        }

        .custom-switch {
            padding-left: 2.25rem
        }

        .custom-switch .custom-control-label::before {
            left: -2.25rem;
            width: 1.75rem;
            pointer-events: all;
            border-radius: .5rem
        }

        .custom-switch .custom-control-label::after {
            top: calc(.25rem + 2px);
            left: calc(-2.25rem + 2px);
            width: calc(1rem - 4px);
            height: calc(1rem - 4px);
            background-color: #b7b9cc;
            border-radius: .5rem;
            transition: transform .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-switch .custom-control-label::after {
                transition: none
            }
        }

        .custom-switch .custom-control-input:checked~.custom-control-label::after {
            background-color: #fff;
            transform: translateX(.75rem)
        }

        .custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
            background-color: rgba(78, 115, 223, .5)
        }

        .custom-select {
            display: inline-block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem 1.75rem .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%235a5c69' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat;
            border: 1px solid #d1d3e2;
            border-radius: .35rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .custom-select:focus {
            border-color: #bac8f3;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .custom-select:focus::-ms-value {
            color: #6e707e;
            background-color: #fff
        }

        .custom-select[multiple],
        .custom-select[size]:not([size="1"]) {
            height: auto;
            padding-right: .75rem;
            background-image: none
        }

        .custom-select:disabled {
            color: #858796;
            background-color: #eaecf4
        }

        .custom-select::-ms-expand {
            display: none
        }

        .custom-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #6e707e
        }

        .custom-select-sm {
            height: calc(1.5em + .5rem + 2px);
            padding-top: .25rem;
            padding-bottom: .25rem;
            padding-left: .5rem;
            font-size: .875rem
        }

        .custom-select-lg {
            height: calc(1.5em + 1rem + 2px);
            padding-top: .5rem;
            padding-bottom: .5rem;
            padding-left: 1rem;
            font-size: 1.25rem
        }

        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            margin-bottom: 0
        }

        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            margin: 0;
            overflow: hidden;
            opacity: 0
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #bac8f3;
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .custom-file-input:disabled~.custom-file-label,
        .custom-file-input[disabled]~.custom-file-label {
            background-color: #eaecf4
        }

        .custom-file-input:lang(en)~.custom-file-label::after {
            content: "Browse"
        }

        .custom-file-input~.custom-file-label[data-browse]::after {
            content: attr(data-browse)
        }

        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            overflow: hidden;
            font-weight: 400;
            line-height: 1.5;
            color: #6e707e;
            background-color: #fff;
            border: 1px solid #d1d3e2;
            border-radius: .35rem
        }

        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: calc(1.5em + .75rem);
            padding: .375rem .75rem;
            line-height: 1.5;
            color: #6e707e;
            content: "Browse";
            background-color: #eaecf4;
            border-left: inherit;
            border-radius: 0 .35rem .35rem 0
        }

        .custom-range {
            width: 100%;
            height: 1.4rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .custom-range:focus {
            outline: 0
        }

        .custom-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .custom-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .custom-range:focus::-ms-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .custom-range::-moz-focus-outer {
            border: 0
        }

        .custom-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -.25rem;
            background-color: #4e73df;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none
            }
        }

        .custom-range::-webkit-slider-thumb:active {
            background-color: #e5ebfa
        }

        .custom-range::-webkit-slider-runnable-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dddfeb;
            border-color: transparent;
            border-radius: 1rem
        }

        .custom-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #4e73df;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -moz-appearance: none;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none
            }
        }

        .custom-range::-moz-range-thumb:active {
            background-color: #e5ebfa
        }

        .custom-range::-moz-range-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dddfeb;
            border-color: transparent;
            border-radius: 1rem
        }

        .custom-range::-ms-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: 0;
            margin-right: .2rem;
            margin-left: .2rem;
            background-color: #4e73df;
            border: 0;
            border-radius: 1rem;
            -ms-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            appearance: none
        }

        @media (prefers-reduced-motion:reduce) {
            .custom-range::-ms-thumb {
                -ms-transition: none;
                transition: none
            }
        }

        .custom-range::-ms-thumb:active {
            background-color: #e5ebfa
        }

        .custom-range::-ms-track {
            width: 100%;
            height: .5rem;
            color: transparent;
            cursor: pointer;
            background-color: transparent;
            border-color: transparent;
            border-width: .5rem
        }

        .custom-range::-ms-fill-lower {
            background-color: #dddfeb;
            border-radius: 1rem
        }

        .custom-range::-ms-fill-upper {
            margin-right: 15px;
            background-color: #dddfeb;
            border-radius: 1rem
        }

        .custom-range:disabled::-webkit-slider-thumb {
            background-color: #b7b9cc
        }

        .custom-range:disabled::-webkit-slider-runnable-track {
            cursor: default
        }

        .custom-range:disabled::-moz-range-thumb {
            background-color: #b7b9cc
        }

        .custom-range:disabled::-moz-range-track {
            cursor: default
        }

        .custom-range:disabled::-ms-thumb {
            background-color: #b7b9cc
        }

        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {

            .custom-control-label::before,
            .custom-file-label,
            .custom-select {
                transition: none
            }
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem
        }

        .nav-link:focus,
        .nav-link:hover {
            text-decoration: none
        }

        .nav-link.disabled {
            color: #858796;
            pointer-events: none;
            cursor: default
        }

        .nav-tabs {
            border-bottom: 1px solid #dddfeb
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px;
            border: 1px solid transparent;
            border-top-left-radius: .35rem;
            border-top-right-radius: .35rem
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: #eaecf4 #eaecf4 #dddfeb
        }

        .nav-tabs .nav-link.disabled {
            color: #858796;
            background-color: transparent;
            border-color: transparent
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #6e707e;
            background-color: #fff;
            border-color: #dddfeb #dddfeb #fff
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav-pills .nav-link {
            border-radius: .35rem
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #4e73df
        }

        .nav-fill .nav-item,
        .nav-fill>.nav-link {
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified .nav-item,
        .nav-justified>.nav-link {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .navbar {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: .5rem 1rem
        }

        .navbar .container,
        .navbar .container-fluid,
        .navbar .container-lg,
        .navbar .container-md,
        .navbar .container-sm,
        .navbar .container-xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between
        }

        .navbar-brand {
            display: inline-block;
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none
        }

        .navbar-text {
            display: inline-block;
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .35rem
        }

        .navbar-toggler:focus,
        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: 50%/100% 100% no-repeat
        }

        .navbar-nav-scroll {
            max-height: 75vh;
            overflow-y: auto
        }

        @media (max-width:575.98px) {

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid,
            .navbar-expand-sm>.container-lg,
            .navbar-expand-sm>.container-md,
            .navbar-expand-sm>.container-sm,
            .navbar-expand-sm>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:576px) {
            .navbar-expand-sm {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid,
            .navbar-expand-sm>.container-lg,
            .navbar-expand-sm>.container-md,
            .navbar-expand-sm>.container-sm,
            .navbar-expand-sm>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-sm .navbar-toggler {
                display: none
            }
        }

        @media (max-width:767.98px) {

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid,
            .navbar-expand-md>.container-lg,
            .navbar-expand-md>.container-md,
            .navbar-expand-md>.container-sm,
            .navbar-expand-md>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:768px) {
            .navbar-expand-md {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid,
            .navbar-expand-md>.container-lg,
            .navbar-expand-md>.container-md,
            .navbar-expand-md>.container-sm,
            .navbar-expand-md>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-md .navbar-toggler {
                display: none
            }
        }

        @media (max-width:991.98px) {

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid,
            .navbar-expand-lg>.container-lg,
            .navbar-expand-lg>.container-md,
            .navbar-expand-lg>.container-sm,
            .navbar-expand-lg>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:992px) {
            .navbar-expand-lg {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid,
            .navbar-expand-lg>.container-lg,
            .navbar-expand-lg>.container-md,
            .navbar-expand-lg>.container-sm,
            .navbar-expand-lg>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        @media (max-width:1199.98px) {

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid,
            .navbar-expand-xl>.container-lg,
            .navbar-expand-xl>.container-md,
            .navbar-expand-xl>.container-sm,
            .navbar-expand-xl>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:1200px) {
            .navbar-expand-xl {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid,
            .navbar-expand-xl>.container-lg,
            .navbar-expand-xl>.container-md,
            .navbar-expand-xl>.container-sm,
            .navbar-expand-xl>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xl .navbar-toggler {
                display: none
            }
        }

        .navbar-expand {
            flex-flow: row nowrap;
            justify-content: flex-start
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid,
        .navbar-expand>.container-lg,
        .navbar-expand>.container-md,
        .navbar-expand>.container-sm,
        .navbar-expand>.container-xl {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-expand .navbar-nav {
            flex-direction: row
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid,
        .navbar-expand>.container-lg,
        .navbar-expand>.container-md,
        .navbar-expand>.container-sm,
        .navbar-expand>.container-xl {
            flex-wrap: nowrap
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: rgba(0, 0, 0, .7)
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, .3)
        }

        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .show>.nav-link {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .5);
            border-color: rgba(0, 0, 0, .1)
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-text a {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-text a:focus,
        .navbar-light .navbar-text a:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-dark .navbar-brand {
            color: #fff
        }

        .navbar-dark .navbar-brand:focus,
        .navbar-dark .navbar-brand:hover {
            color: #fff
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(255, 255, 255, .5)
        }

        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: rgba(255, 255, 255, .75)
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, .25)
        }

        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .show>.nav-link {
            color: #fff
        }

        .navbar-dark .navbar-toggler {
            color: rgba(255, 255, 255, .5);
            border-color: rgba(255, 255, 255, .1)
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
        }

        .navbar-dark .navbar-text {
            color: rgba(255, 255, 255, .5)
        }

        .navbar-dark .navbar-text a {
            color: #fff
        }

        .navbar-dark .navbar-text a:focus,
        .navbar-dark .navbar-text a:hover {
            color: #fff
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e3e6f0;
            border-radius: .35rem
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit
        }

        .card>.list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: calc(.35rem - 1px);
            border-top-right-radius: calc(.35rem - 1px)
        }

        .card>.list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: calc(.35rem - 1px);
            border-bottom-left-radius: calc(.35rem - 1px)
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem
        }

        .card-title {
            margin-bottom: .75rem
        }

        .card-subtitle {
            margin-top: -.375rem;
            margin-bottom: 0
        }

        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link+.card-link {
            margin-left: 1.25rem
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0
        }

        .card-header:first-child {
            border-radius: calc(.35rem - 1px) calc(.35rem - 1px) 0 0
        }

        .card-footer {
            padding: .75rem 1.25rem;
            background-color: #f8f9fc;
            border-top: 1px solid #e3e6f0
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.35rem - 1px) calc(.35rem - 1px)
        }

        .card-header-tabs {
            margin-right: -.625rem;
            margin-bottom: -.75rem;
            margin-left: -.625rem;
            border-bottom: 0
        }

        .card-header-pills {
            margin-right: -.625rem;
            margin-left: -.625rem
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
            border-radius: calc(.35rem - 1px)
        }

        .card-img,
        .card-img-bottom,
        .card-img-top {
            flex-shrink: 0;
            width: 100%
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(.35rem - 1px);
            border-top-right-radius: calc(.35rem - 1px)
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: calc(.35rem - 1px);
            border-bottom-left-radius: calc(.35rem - 1px)
        }

        .card-deck .card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-deck {
                display: flex;
                flex-flow: row wrap;
                margin-right: -.75rem;
                margin-left: -.75rem
            }

            .card-deck .card {
                flex: 1 0 0%;
                margin-right: .75rem;
                margin-bottom: 0;
                margin-left: .75rem
            }
        }

        .card-group>.card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap
            }

            .card-group>.card {
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0
            }

            .card-group>.card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-header,
            .card-group>.card:not(:last-child) .card-img-top {
                border-top-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-footer,
            .card-group>.card:not(:last-child) .card-img-bottom {
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-header,
            .card-group>.card:not(:first-child) .card-img-top {
                border-top-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-footer,
            .card-group>.card:not(:first-child) .card-img-bottom {
                border-bottom-left-radius: 0
            }
        }

        .card-columns .card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-columns {
                -moz-column-count: 3;
                column-count: 3;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1
            }

            .card-columns .card {
                display: inline-block;
                width: 100%
            }
        }

        .accordion {
            overflow-anchor: none
        }

        .accordion>.card {
            overflow: hidden
        }

        .accordion>.card:not(:last-of-type) {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .accordion>.card:not(:first-of-type) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .accordion>.card>.card-header {
            border-radius: 0;
            margin-bottom: -1px
        }

        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            padding: .75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #eaecf4;
            border-radius: .35rem
        }

        .breadcrumb-item+.breadcrumb-item {
            padding-left: .5rem
        }

        .breadcrumb-item+.breadcrumb-item::before {
            float: left;
            padding-right: .5rem;
            color: #858796;
            content: "/"
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: underline
        }

        .breadcrumb-item+.breadcrumb-item:hover::before {
            text-decoration: none
        }

        .breadcrumb-item.active {
            color: #858796
        }

        .pagination {
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .35rem
        }

        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #4e73df;
            background-color: #fff;
            border: 1px solid #dddfeb
        }

        .page-link:hover {
            z-index: 2;
            color: #224abe;
            text-decoration: none;
            background-color: #eaecf4;
            border-color: #dddfeb
        }

        .page-link:focus {
            z-index: 3;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .25)
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: .35rem;
            border-bottom-left-radius: .35rem
        }

        .page-item:last-child .page-link {
            border-top-right-radius: .35rem;
            border-bottom-right-radius: .35rem
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .page-item.disabled .page-link {
            color: #858796;
            pointer-events: none;
            cursor: auto;
            background-color: #fff;
            border-color: #dddfeb
        }

        .pagination-lg .page-link {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: .3rem;
            border-bottom-left-radius: .3rem
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem
        }

        .pagination-sm .page-link {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: .2rem;
            border-bottom-left-radius: .2rem
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .35rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .badge {
                transition: none
            }
        }

        a.badge:focus,
        a.badge:hover {
            text-decoration: none
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-primary {
            color: #fff;
            background-color: #4e73df
        }

        a.badge-primary:focus,
        a.badge-primary:hover {
            color: #fff;
            background-color: #2653d4
        }

        a.badge-primary.focus,
        a.badge-primary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(78, 115, 223, .5)
        }

        .badge-secondary {
            color: #fff;
            background-color: #858796
        }

        a.badge-secondary:focus,
        a.badge-secondary:hover {
            color: #fff;
            background-color: #6b6d7d
        }

        a.badge-secondary.focus,
        a.badge-secondary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(133, 135, 150, .5)
        }

        .badge-success {
            color: #fff;
            background-color: #1cc88a
        }

        a.badge-success:focus,
        a.badge-success:hover {
            color: #fff;
            background-color: #169b6b
        }

        a.badge-success.focus,
        a.badge-success:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(28, 200, 138, .5)
        }

        .badge-info {
            color: #fff;
            background-color: #36b9cc
        }

        a.badge-info:focus,
        a.badge-info:hover {
            color: #fff;
            background-color: #2a96a5
        }

        a.badge-info.focus,
        a.badge-info:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(54, 185, 204, .5)
        }

        .badge-warning {
            color: #fff;
            background-color: #f6c23e
        }

        a.badge-warning:focus,
        a.badge-warning:hover {
            color: #fff;
            background-color: #f4b30d
        }

        a.badge-warning.focus,
        a.badge-warning:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(246, 194, 62, .5)
        }

        .badge-danger {
            color: #fff;
            background-color: #e74a3b
        }

        a.badge-danger:focus,
        a.badge-danger:hover {
            color: #fff;
            background-color: #d52a1a
        }

        a.badge-danger.focus,
        a.badge-danger:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(231, 74, 59, .5)
        }

        .badge-light {
            color: #3a3b45;
            background-color: #f8f9fc
        }

        a.badge-light:focus,
        a.badge-light:hover {
            color: #3a3b45;
            background-color: #d4daed
        }

        a.badge-light.focus,
        a.badge-light:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(248, 249, 252, .5)
        }

        .badge-dark {
            color: #fff;
            background-color: #5a5c69
        }

        a.badge-dark:focus,
        a.badge-dark:hover {
            color: #fff;
            background-color: #42444e
        }

        a.badge-dark.focus,
        a.badge-dark:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(90, 92, 105, .5)
        }

        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #eaecf4;
            border-radius: .3rem
        }

        @media (min-width:576px) {
            .jumbotron {
                padding: 4rem 2rem
            }
        }

        .jumbotron-fluid {
            padding-right: 0;
            padding-left: 0;
            border-radius: 0
        }

        .alert {
            position: relative;
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .35rem
        }

        .alert-heading {
            color: inherit
        }

        .alert-link {
            font-weight: 700
        }

        .alert-dismissible {
            padding-right: 4rem
        }

        .alert-dismissible .close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: .75rem 1.25rem;
            color: inherit
        }

        .alert-primary {
            color: #293c74;
            background-color: #dce3f9;
            border-color: #cdd8f6
        }

        .alert-primary hr {
            border-top-color: #b7c7f2
        }

        .alert-primary .alert-link {
            color: #1c294e
        }

        .alert-secondary {
            color: #45464e;
            background-color: #e7e7ea;
            border-color: #dddde2
        }

        .alert-secondary hr {
            border-top-color: #cfcfd6
        }

        .alert-secondary .alert-link {
            color: #2d2e33
        }

        .alert-success {
            color: #0f6848;
            background-color: #d2f4e8;
            border-color: #bff0de
        }

        .alert-success hr {
            border-top-color: #aaebd3
        }

        .alert-success .alert-link {
            color: #093b29
        }

        .alert-info {
            color: #1c606a;
            background-color: #d7f1f5;
            border-color: #c7ebf1
        }

        .alert-info hr {
            border-top-color: #b3e4ec
        }

        .alert-info .alert-link {
            color: #113b42
        }

        .alert-warning {
            color: #806520;
            background-color: #fdf3d8;
            border-color: #fceec9
        }

        .alert-warning hr {
            border-top-color: #fbe6b1
        }

        .alert-warning .alert-link {
            color: #574516
        }

        .alert-danger {
            color: #78261f;
            background-color: #fadbd8;
            border-color: #f8ccc8
        }

        .alert-danger hr {
            border-top-color: #f5b7b1
        }

        .alert-danger .alert-link {
            color: #4f1915
        }

        .alert-light {
            color: #818183;
            background-color: #fefefe;
            border-color: #fdfdfe
        }

        .alert-light hr {
            border-top-color: #ececf6
        }

        .alert-light .alert-link {
            color: #686869
        }

        .alert-dark {
            color: #2f3037;
            background-color: #dedee1;
            border-color: #d1d1d5
        }

        .alert-dark hr {
            border-top-color: #c4c4c9
        }

        .alert-dark .alert-link {
            color: #18181c
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }

            to {
                background-position: 0 0
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 1rem 0
            }

            to {
                background-position: 0 0
            }
        }

        .progress {
            display: flex;
            height: 1rem;
            overflow: hidden;
            line-height: 0;
            font-size: .75rem;
            background-color: #eaecf4;
            border-radius: .35rem
        }

        .progress-bar {
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #4e73df;
            transition: width .6s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar {
                transition: none
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none
            }
        }

        .media {
            display: flex;
            align-items: flex-start
        }

        .media-body {
            flex: 1
        }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: .35rem
        }

        .list-group-item-action {
            width: 100%;
            color: #6e707e;
            text-align: inherit
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            z-index: 1;
            color: #6e707e;
            text-decoration: none;
            background-color: #f8f9fc
        }

        .list-group-item-action:active {
            color: #858796;
            background-color: #eaecf4
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: .75rem 1.25rem;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125)
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #858796;
            pointer-events: none;
            background-color: #fff
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #4e73df;
            border-color: #4e73df
        }

        .list-group-item+.list-group-item {
            border-top-width: 0
        }

        .list-group-item+.list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px
        }

        .list-group-horizontal {
            flex-direction: row
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-left-radius: .35rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-top-right-radius: .35rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }

        @media (min-width:576px) {
            .list-group-horizontal-sm {
                flex-direction: row
            }

            .list-group-horizontal-sm>.list-group-item:first-child {
                border-bottom-left-radius: .35rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item:last-child {
                border-top-right-radius: .35rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:768px) {
            .list-group-horizontal-md {
                flex-direction: row
            }

            .list-group-horizontal-md>.list-group-item:first-child {
                border-bottom-left-radius: .35rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-md>.list-group-item:last-child {
                border-top-right-radius: .35rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:992px) {
            .list-group-horizontal-lg {
                flex-direction: row
            }

            .list-group-horizontal-lg>.list-group-item:first-child {
                border-bottom-left-radius: .35rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item:last-child {
                border-top-right-radius: .35rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:1200px) {
            .list-group-horizontal-xl {
                flex-direction: row
            }

            .list-group-horizontal-xl>.list-group-item:first-child {
                border-bottom-left-radius: .35rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item:last-child {
                border-top-right-radius: .35rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        .list-group-flush {
            border-radius: 0
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 1px
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0
        }

        .list-group-item-primary {
            color: #293c74;
            background-color: #cdd8f6
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            color: #293c74;
            background-color: #b7c7f2
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #293c74;
            border-color: #293c74
        }

        .list-group-item-secondary {
            color: #45464e;
            background-color: #dddde2
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            color: #45464e;
            background-color: #cfcfd6
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #45464e;
            border-color: #45464e
        }

        .list-group-item-success {
            color: #0f6848;
            background-color: #bff0de
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            color: #0f6848;
            background-color: #aaebd3
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #0f6848;
            border-color: #0f6848
        }

        .list-group-item-info {
            color: #1c606a;
            background-color: #c7ebf1
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            color: #1c606a;
            background-color: #b3e4ec
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #1c606a;
            border-color: #1c606a
        }

        .list-group-item-warning {
            color: #806520;
            background-color: #fceec9
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            color: #806520;
            background-color: #fbe6b1
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #806520;
            border-color: #806520
        }

        .list-group-item-danger {
            color: #78261f;
            background-color: #f8ccc8
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            color: #78261f;
            background-color: #f5b7b1
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #78261f;
            border-color: #78261f
        }

        .list-group-item-light {
            color: #818183;
            background-color: #fdfdfe
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            color: #818183;
            background-color: #ececf6
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #818183;
            border-color: #818183
        }

        .list-group-item-dark {
            color: #2f3037;
            background-color: #d1d1d5
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            color: #2f3037;
            background-color: #c4c4c9
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #2f3037;
            border-color: #2f3037
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5
        }

        .close:hover {
            color: #000;
            text-decoration: none
        }

        .close:not(:disabled):not(.disabled):focus,
        .close:not(:disabled):not(.disabled):hover {
            opacity: .75
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0
        }

        a.close.disabled {
            pointer-events: none
        }

        .toast {
            flex-basis: 350px;
            max-width: 350px;
            font-size: .875rem;
            background-color: rgba(255, 255, 255, .85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .1);
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .1);
            opacity: 0;
            border-radius: .25rem
        }

        .toast:not(:last-child) {
            margin-bottom: .75rem
        }

        .toast.showing {
            opacity: 1
        }

        .toast.show {
            display: block;
            opacity: 1
        }

        .toast.hide {
            display: none
        }

        .toast-header {
            display: flex;
            align-items: center;
            padding: .25rem .75rem;
            color: #858796;
            background-color: rgba(255, 255, 255, .85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, .05);
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .toast-body {
            padding: .75rem
        }

        .modal-open {
            overflow: hidden
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none
        }

        .modal.fade .modal-dialog {
            transition: transform .3s ease-out;
            transform: translate(0, -50px)
        }

        @media (prefers-reduced-motion:reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            transform: none
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02)
        }

        .modal-dialog-scrollable {
            display: flex;
            max-height: calc(100% - 1rem)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 1rem);
            overflow: hidden
        }

        .modal-dialog-scrollable .modal-footer,
        .modal-dialog-scrollable .modal-header {
            flex-shrink: 0
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem)
        }

        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 1rem);
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            content: ""
        }

        .modal-dialog-centered.modal-dialog-scrollable {
            flex-direction: column;
            justify-content: center;
            height: 100%
        }

        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
            max-height: none
        }

        .modal-dialog-centered.modal-dialog-scrollable::before {
            content: none
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #e3e6f0;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }

        .modal-header .close {
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem auto
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem
        }

        .modal-footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: .75rem;
            border-top: 1px solid #e3e6f0;
            border-bottom-right-radius: calc(.3rem - 1px);
            border-bottom-left-radius: calc(.3rem - 1px)
        }

        .modal-footer>* {
            margin: .25rem
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-scrollable {
                max-height: calc(100% - 3.5rem)
            }

            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 3.5rem)
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem)
            }

            .modal-dialog-centered::before {
                height: calc(100vh - 3.5rem);
                height: -webkit-min-content;
                height: -moz-min-content;
                height: min-content
            }

            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width:992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px
            }
        }

        @media (min-width:1200px) {
            .modal-xl {
                max-width: 1140px
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            margin: 0;
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            opacity: 0
        }

        .tooltip.show {
            opacity: .9
        }

        .tooltip .arrow {
            position: absolute;
            display: block;
            width: .8rem;
            height: .4rem
        }

        .tooltip .arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid
        }

        .bs-tooltip-auto[x-placement^=top],
        .bs-tooltip-top {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=top] .arrow,
        .bs-tooltip-top .arrow {
            bottom: 0
        }

        .bs-tooltip-auto[x-placement^=top] .arrow::before,
        .bs-tooltip-top .arrow::before {
            top: 0;
            border-width: .4rem .4rem 0;
            border-top-color: #000
        }

        .bs-tooltip-auto[x-placement^=right],
        .bs-tooltip-right {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow,
        .bs-tooltip-right .arrow {
            left: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow::before,
        .bs-tooltip-right .arrow::before {
            right: 0;
            border-width: .4rem .4rem .4rem 0;
            border-right-color: #000
        }

        .bs-tooltip-auto[x-placement^=bottom],
        .bs-tooltip-bottom {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow,
        .bs-tooltip-bottom .arrow {
            top: 0
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow::before,
        .bs-tooltip-bottom .arrow::before {
            bottom: 0;
            border-width: 0 .4rem .4rem;
            border-bottom-color: #000
        }

        .bs-tooltip-auto[x-placement^=left],
        .bs-tooltip-left {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow,
        .bs-tooltip-left .arrow {
            right: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow::before,
        .bs-tooltip-left .arrow::before {
            left: 0;
            border-width: .4rem 0 .4rem .4rem;
            border-left-color: #000
        }

        .tooltip-inner {
            max-width: 200px;
            padding: .25rem .5rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: .35rem
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: block;
            max-width: 276px;
            font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem
        }

        .popover .arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: .5rem;
            margin: 0 .3rem
        }

        .popover .arrow::after,
        .popover .arrow::before {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid
        }

        .bs-popover-auto[x-placement^=top],
        .bs-popover-top {
            margin-bottom: .5rem
        }

        .bs-popover-auto[x-placement^=top]>.arrow,
        .bs-popover-top>.arrow {
            bottom: calc(-.5rem - 1px)
        }

        .bs-popover-auto[x-placement^=top]>.arrow::before,
        .bs-popover-top>.arrow::before {
            bottom: 0;
            border-width: .5rem .5rem 0;
            border-top-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=top]>.arrow::after,
        .bs-popover-top>.arrow::after {
            bottom: 1px;
            border-width: .5rem .5rem 0;
            border-top-color: #fff
        }

        .bs-popover-auto[x-placement^=right],
        .bs-popover-right {
            margin-left: .5rem
        }

        .bs-popover-auto[x-placement^=right]>.arrow,
        .bs-popover-right>.arrow {
            left: calc(-.5rem - 1px);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=right]>.arrow::before,
        .bs-popover-right>.arrow::before {
            left: 0;
            border-width: .5rem .5rem .5rem 0;
            border-right-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=right]>.arrow::after,
        .bs-popover-right>.arrow::after {
            left: 1px;
            border-width: .5rem .5rem .5rem 0;
            border-right-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom],
        .bs-popover-bottom {
            margin-top: .5rem
        }

        .bs-popover-auto[x-placement^=bottom]>.arrow,
        .bs-popover-bottom>.arrow {
            top: calc(-.5rem - 1px)
        }

        .bs-popover-auto[x-placement^=bottom]>.arrow::before,
        .bs-popover-bottom>.arrow::before {
            top: 0;
            border-width: 0 .5rem .5rem .5rem;
            border-bottom-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=bottom]>.arrow::after,
        .bs-popover-bottom>.arrow::after {
            top: 1px;
            border-width: 0 .5rem .5rem .5rem;
            border-bottom-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom] .popover-header::before,
        .bs-popover-bottom .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -.5rem;
            content: "";
            border-bottom: 1px solid #f7f7f7
        }

        .bs-popover-auto[x-placement^=left],
        .bs-popover-left {
            margin-right: .5rem
        }

        .bs-popover-auto[x-placement^=left]>.arrow,
        .bs-popover-left>.arrow {
            right: calc(-.5rem - 1px);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=left]>.arrow::before,
        .bs-popover-left>.arrow::before {
            right: 0;
            border-width: .5rem 0 .5rem .5rem;
            border-left-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=left]>.arrow::after,
        .bs-popover-left>.arrow::after {
            right: 1px;
            border-width: .5rem 0 .5rem .5rem;
            border-left-color: #fff
        }

        .popover-header {
            padding: .5rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }

        .popover-header:empty {
            display: none
        }

        .popover-body {
            padding: .5rem .75rem;
            color: #858796
        }

        .carousel {
            position: relative
        }

        .carousel.pointer-event {
            touch-action: pan-y
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: ""
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: transform .6s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-item {
                transition: none
            }
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block
        }

        .active.carousel-item-right,
        .carousel-item-next:not(.carousel-item-left) {
            transform: translateX(100%)
        }

        .active.carousel-item-left,
        .carousel-item-prev:not(.carousel-item-right) {
            transform: translateX(-100%)
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none
        }

        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right,
        .carousel-fade .carousel-item.active {
            z-index: 1;
            opacity: 1
        }

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s .6s
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-fade .active.carousel-item-left,
            .carousel-fade .active.carousel-item-right {
                transition: none
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            color: #fff;
            text-align: center;
            opacity: .5;
            transition: opacity .15s ease
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-control-next,
            .carousel-control-prev {
                transition: none
            }
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: .9
        }

        .carousel-control-prev {
            left: 0
        }

        .carousel-control-next {
            right: 0
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: 50%/100% 100% no-repeat
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e")
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: flex;
            justify-content: center;
            padding-left: 0;
            margin-right: 15%;
            margin-left: 15%;
            list-style: none
        }

        .carousel-indicators li {
            box-sizing: content-box;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-indicators li {
                transition: none
            }
        }

        .carousel-indicators .active {
            opacity: 1
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center
        }

        @-webkit-keyframes spinner-border {
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes spinner-border {
            to {
                transform: rotate(360deg)
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            border: .25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: .2em
        }

        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0)
            }

            50% {
                opacity: 1;
                transform: none
            }
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0)
            }

            50% {
                opacity: 1;
                transform: none
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: text-bottom;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: .75s linear infinite spinner-grow;
            animation: .75s linear infinite spinner-grow
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem
        }

        @media (prefers-reduced-motion:reduce) {

            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s
            }
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .bg-primary {
            background-color: #4e73df !important
        }

        a.bg-primary:focus,
        a.bg-primary:hover,
        button.bg-primary:focus,
        button.bg-primary:hover {
            background-color: #2653d4 !important
        }

        .bg-secondary {
            background-color: #858796 !important
        }

        a.bg-secondary:focus,
        a.bg-secondary:hover,
        button.bg-secondary:focus,
        button.bg-secondary:hover {
            background-color: #6b6d7d !important
        }

        .bg-success {
            background-color: #1cc88a !important
        }

        a.bg-success:focus,
        a.bg-success:hover,
        button.bg-success:focus,
        button.bg-success:hover {
            background-color: #169b6b !important
        }

        .bg-info {
            background-color: #36b9cc !important
        }

        a.bg-info:focus,
        a.bg-info:hover,
        button.bg-info:focus,
        button.bg-info:hover {
            background-color: #2a96a5 !important
        }

        .bg-warning {
            background-color: #f6c23e !important
        }

        a.bg-warning:focus,
        a.bg-warning:hover,
        button.bg-warning:focus,
        button.bg-warning:hover {
            background-color: #f4b30d !important
        }

        .bg-danger {
            background-color: #e74a3b !important
        }

        a.bg-danger:focus,
        a.bg-danger:hover,
        button.bg-danger:focus,
        button.bg-danger:hover {
            background-color: #d52a1a !important
        }

        .bg-light {
            background-color: #f8f9fc !important
        }

        a.bg-light:focus,
        a.bg-light:hover,
        button.bg-light:focus,
        button.bg-light:hover {
            background-color: #d4daed !important
        }

        .bg-dark {
            background-color: #5a5c69 !important
        }

        a.bg-dark:focus,
        a.bg-dark:hover,
        button.bg-dark:focus,
        button.bg-dark:hover {
            background-color: #42444e !important
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-transparent {
            background-color: transparent !important
        }

        .border {
            border: 1px solid #e3e6f0 !important
        }

        .border-top {
            border-top: 1px solid #e3e6f0 !important
        }

        .border-right {
            border-right: 1px solid #e3e6f0 !important
        }

        .border-bottom {
            border-bottom: 1px solid #e3e6f0 !important
        }

        .border-left {
            border-left: 1px solid #e3e6f0 !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-right-0 {
            border-right: 0 !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-left-0 {
            border-left: 0 !important
        }

        .border-primary {
            border-color: #4e73df !important
        }

        .border-secondary {
            border-color: #858796 !important
        }

        .border-success {
            border-color: #1cc88a !important
        }

        .border-info {
            border-color: #36b9cc !important
        }

        .border-warning {
            border-color: #f6c23e !important
        }

        .border-danger {
            border-color: #e74a3b !important
        }

        .border-light {
            border-color: #f8f9fc !important
        }

        .border-dark {
            border-color: #5a5c69 !important
        }

        .border-white {
            border-color: #fff !important
        }

        .rounded-sm {
            border-radius: .2rem !important
        }

        .rounded {
            border-radius: .35rem !important
        }

        .rounded-top {
            border-top-left-radius: .35rem !important;
            border-top-right-radius: .35rem !important
        }

        .rounded-right {
            border-top-right-radius: .35rem !important;
            border-bottom-right-radius: .35rem !important
        }

        .rounded-bottom {
            border-bottom-right-radius: .35rem !important;
            border-bottom-left-radius: .35rem !important
        }

        .rounded-left {
            border-top-left-radius: .35rem !important;
            border-bottom-left-radius: .35rem !important
        }

        .rounded-lg {
            border-radius: .3rem !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-pill {
            border-radius: 50rem !important
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""
        }

        .d-none {
            display: none !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: flex !important
        }

        .d-inline-flex {
            display: inline-flex !important
        }

        @media (min-width:576px) {
            .d-sm-none {
                display: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: flex !important
            }

            .d-sm-inline-flex {
                display: inline-flex !important
            }
        }

        @media (min-width:768px) {
            .d-md-none {
                display: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: flex !important
            }

            .d-md-inline-flex {
                display: inline-flex !important
            }
        }

        @media (min-width:992px) {
            .d-lg-none {
                display: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: flex !important
            }

            .d-lg-inline-flex {
                display: inline-flex !important
            }
        }

        @media (min-width:1200px) {
            .d-xl-none {
                display: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: flex !important
            }

            .d-xl-inline-flex {
                display: inline-flex !important
            }
        }

        @media print {
            .d-print-none {
                display: none !important
            }

            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: flex !important
            }

            .d-print-inline-flex {
                display: inline-flex !important
            }
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden
        }

        .embed-responsive::before {
            display: block;
            content: ""
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive embed,
        .embed-responsive iframe,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .embed-responsive-21by9::before {
            padding-top: 42.85714%
        }

        .embed-responsive-16by9::before {
            padding-top: 56.25%
        }

        .embed-responsive-4by3::before {
            padding-top: 75%
        }

        .embed-responsive-1by1::before {
            padding-top: 100%
        }

        .flex-row {
            flex-direction: row !important
        }

        .flex-column {
            flex-direction: column !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-wrap {
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .flex-fill {
            flex: 1 1 auto !important
        }

        .flex-grow-0 {
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important
        }

        .justify-content-start {
            justify-content: flex-start !important
        }

        .justify-content-end {
            justify-content: flex-end !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .justify-content-around {
            justify-content: space-around !important
        }

        .align-items-start {
            align-items: flex-start !important
        }

        .align-items-end {
            align-items: flex-end !important
        }

        .align-items-center {
            align-items: center !important
        }

        .align-items-baseline {
            align-items: baseline !important
        }

        .align-items-stretch {
            align-items: stretch !important
        }

        .align-content-start {
            align-content: flex-start !important
        }

        .align-content-end {
            align-content: flex-end !important
        }

        .align-content-center {
            align-content: center !important
        }

        .align-content-between {
            align-content: space-between !important
        }

        .align-content-around {
            align-content: space-around !important
        }

        .align-content-stretch {
            align-content: stretch !important
        }

        .align-self-auto {
            align-self: auto !important
        }

        .align-self-start {
            align-self: flex-start !important
        }

        .align-self-end {
            align-self: flex-end !important
        }

        .align-self-center {
            align-self: center !important
        }

        .align-self-baseline {
            align-self: baseline !important
        }

        .align-self-stretch {
            align-self: stretch !important
        }

        @media (min-width:576px) {
            .flex-sm-row {
                flex-direction: row !important
            }

            .flex-sm-column {
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-sm-fill {
                flex: 1 1 auto !important
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-sm-start {
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                justify-content: center !important
            }

            .justify-content-sm-between {
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                justify-content: space-around !important
            }

            .align-items-sm-start {
                align-items: flex-start !important
            }

            .align-items-sm-end {
                align-items: flex-end !important
            }

            .align-items-sm-center {
                align-items: center !important
            }

            .align-items-sm-baseline {
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                align-items: stretch !important
            }

            .align-content-sm-start {
                align-content: flex-start !important
            }

            .align-content-sm-end {
                align-content: flex-end !important
            }

            .align-content-sm-center {
                align-content: center !important
            }

            .align-content-sm-between {
                align-content: space-between !important
            }

            .align-content-sm-around {
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                align-content: stretch !important
            }

            .align-self-sm-auto {
                align-self: auto !important
            }

            .align-self-sm-start {
                align-self: flex-start !important
            }

            .align-self-sm-end {
                align-self: flex-end !important
            }

            .align-self-sm-center {
                align-self: center !important
            }

            .align-self-sm-baseline {
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:768px) {
            .flex-md-row {
                flex-direction: row !important
            }

            .flex-md-column {
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-md-wrap {
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-md-fill {
                flex: 1 1 auto !important
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-md-start {
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                justify-content: center !important
            }

            .justify-content-md-between {
                justify-content: space-between !important
            }

            .justify-content-md-around {
                justify-content: space-around !important
            }

            .align-items-md-start {
                align-items: flex-start !important
            }

            .align-items-md-end {
                align-items: flex-end !important
            }

            .align-items-md-center {
                align-items: center !important
            }

            .align-items-md-baseline {
                align-items: baseline !important
            }

            .align-items-md-stretch {
                align-items: stretch !important
            }

            .align-content-md-start {
                align-content: flex-start !important
            }

            .align-content-md-end {
                align-content: flex-end !important
            }

            .align-content-md-center {
                align-content: center !important
            }

            .align-content-md-between {
                align-content: space-between !important
            }

            .align-content-md-around {
                align-content: space-around !important
            }

            .align-content-md-stretch {
                align-content: stretch !important
            }

            .align-self-md-auto {
                align-self: auto !important
            }

            .align-self-md-start {
                align-self: flex-start !important
            }

            .align-self-md-end {
                align-self: flex-end !important
            }

            .align-self-md-center {
                align-self: center !important
            }

            .align-self-md-baseline {
                align-self: baseline !important
            }

            .align-self-md-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:992px) {
            .flex-lg-row {
                flex-direction: row !important
            }

            .flex-lg-column {
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-lg-fill {
                flex: 1 1 auto !important
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-lg-start {
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                justify-content: center !important
            }

            .justify-content-lg-between {
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                justify-content: space-around !important
            }

            .align-items-lg-start {
                align-items: flex-start !important
            }

            .align-items-lg-end {
                align-items: flex-end !important
            }

            .align-items-lg-center {
                align-items: center !important
            }

            .align-items-lg-baseline {
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                align-items: stretch !important
            }

            .align-content-lg-start {
                align-content: flex-start !important
            }

            .align-content-lg-end {
                align-content: flex-end !important
            }

            .align-content-lg-center {
                align-content: center !important
            }

            .align-content-lg-between {
                align-content: space-between !important
            }

            .align-content-lg-around {
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                align-content: stretch !important
            }

            .align-self-lg-auto {
                align-self: auto !important
            }

            .align-self-lg-start {
                align-self: flex-start !important
            }

            .align-self-lg-end {
                align-self: flex-end !important
            }

            .align-self-lg-center {
                align-self: center !important
            }

            .align-self-lg-baseline {
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:1200px) {
            .flex-xl-row {
                flex-direction: row !important
            }

            .flex-xl-column {
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-xl-fill {
                flex: 1 1 auto !important
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-xl-start {
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                justify-content: center !important
            }

            .justify-content-xl-between {
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                justify-content: space-around !important
            }

            .align-items-xl-start {
                align-items: flex-start !important
            }

            .align-items-xl-end {
                align-items: flex-end !important
            }

            .align-items-xl-center {
                align-items: center !important
            }

            .align-items-xl-baseline {
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                align-items: stretch !important
            }

            .align-content-xl-start {
                align-content: flex-start !important
            }

            .align-content-xl-end {
                align-content: flex-end !important
            }

            .align-content-xl-center {
                align-content: center !important
            }

            .align-content-xl-between {
                align-content: space-between !important
            }

            .align-content-xl-around {
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                align-content: stretch !important
            }

            .align-self-xl-auto {
                align-self: auto !important
            }

            .align-self-xl-start {
                align-self: flex-start !important
            }

            .align-self-xl-end {
                align-self: flex-end !important
            }

            .align-self-xl-center {
                align-self: center !important
            }

            .align-self-xl-baseline {
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                align-self: stretch !important
            }
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        @media (min-width:576px) {
            .float-sm-left {
                float: left !important
            }

            .float-sm-right {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }
        }

        @media (min-width:768px) {
            .float-md-left {
                float: left !important
            }

            .float-md-right {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }
        }

        @media (min-width:992px) {
            .float-lg-left {
                float: left !important
            }

            .float-lg-right {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }
        }

        @media (min-width:1200px) {
            .float-xl-left {
                float: left !important
            }

            .float-xl-right {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            -ms-user-select: all !important;
            user-select: all !important
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .overflow-auto {
            overflow: auto !important
        }

        .overflow-hidden {
            overflow: hidden !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030
        }

        @supports ((position:-webkit-sticky) or (position:sticky)) {
            .sticky-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem 0 rgba(58, 59, 69, .2) !important
        }

        .shadow {
            box-shadow: 0 .15rem 1.75rem 0 rgba(58, 59, 69, .15) !important
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .min-vw-100 {
            min-width: 100vw !important
        }

        .min-vh-100 {
            min-height: 100vh !important
        }

        .vw-100 {
            width: 100vw !important
        }

        .vh-100 {
            height: 100vh !important
        }

        .m-0 {
            margin: 0 !important
        }

        .mt-0,
        .my-0 {
            margin-top: 0 !important
        }

        .mr-0,
        .mx-0 {
            margin-right: 0 !important
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important
        }

        .ml-0,
        .mx-0 {
            margin-left: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1,
        .my-1 {
            margin-top: .25rem !important
        }

        .mr-1,
        .mx-1 {
            margin-right: .25rem !important
        }

        .mb-1,
        .my-1 {
            margin-bottom: .25rem !important
        }

        .ml-1,
        .mx-1 {
            margin-left: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2,
        .my-2 {
            margin-top: .5rem !important
        }

        .mr-2,
        .mx-2 {
            margin-right: .5rem !important
        }

        .mb-2,
        .my-2 {
            margin-bottom: .5rem !important
        }

        .ml-2,
        .mx-2 {
            margin-left: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important
        }

        .mr-3,
        .mx-3 {
            margin-right: 1rem !important
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important
        }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important
        }

        .mr-5,
        .mx-5 {
            margin-right: 3rem !important
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important
        }

        .ml-5,
        .mx-5 {
            margin-left: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0,
        .py-0 {
            padding-top: 0 !important
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1,
        .py-1 {
            padding-top: .25rem !important
        }

        .pr-1,
        .px-1 {
            padding-right: .25rem !important
        }

        .pb-1,
        .py-1 {
            padding-bottom: .25rem !important
        }

        .pl-1,
        .px-1 {
            padding-left: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2,
        .py-2 {
            padding-top: .5rem !important
        }

        .pr-2,
        .px-2 {
            padding-right: .5rem !important
        }

        .pb-2,
        .py-2 {
            padding-bottom: .5rem !important
        }

        .pl-2,
        .px-2 {
            padding-left: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .pt-5,
        .py-5 {
            padding-top: 3rem !important
        }

        .pr-5,
        .px-5 {
            padding-right: 3rem !important
        }

        .pb-5,
        .py-5 {
            padding-bottom: 3rem !important
        }

        .pl-5,
        .px-5 {
            padding-left: 3rem !important
        }

        .m-n1 {
            margin: -.25rem !important
        }

        .mt-n1,
        .my-n1 {
            margin-top: -.25rem !important
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -.25rem !important
        }

        .mb-n1,
        .my-n1 {
            margin-bottom: -.25rem !important
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -.25rem !important
        }

        .m-n2 {
            margin: -.5rem !important
        }

        .mt-n2,
        .my-n2 {
            margin-top: -.5rem !important
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -.5rem !important
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -.5rem !important
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -.5rem !important
        }

        .m-n3 {
            margin: -1rem !important
        }

        .mt-n3,
        .my-n3 {
            margin-top: -1rem !important
        }

        .mr-n3,
        .mx-n3 {
            margin-right: -1rem !important
        }

        .mb-n3,
        .my-n3 {
            margin-bottom: -1rem !important
        }

        .ml-n3,
        .mx-n3 {
            margin-left: -1rem !important
        }

        .m-n4 {
            margin: -1.5rem !important
        }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important
        }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important
        }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important
        }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important
        }

        .m-n5 {
            margin: -3rem !important
        }

        .mt-n5,
        .my-n5 {
            margin-top: -3rem !important
        }

        .mr-n5,
        .mx-n5 {
            margin-right: -3rem !important
        }

        .mb-n5,
        .my-n5 {
            margin-bottom: -3rem !important
        }

        .ml-n5,
        .mx-n5 {
            margin-left: -3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mt-auto,
        .my-auto {
            margin-top: auto !important
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important
        }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important
        }

        @media (min-width:576px) {
            .m-sm-0 {
                margin: 0 !important
            }

            .mt-sm-0,
            .my-sm-0 {
                margin-top: 0 !important
            }

            .mr-sm-0,
            .mx-sm-0 {
                margin-right: 0 !important
            }

            .mb-sm-0,
            .my-sm-0 {
                margin-bottom: 0 !important
            }

            .ml-sm-0,
            .mx-sm-0 {
                margin-left: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .mt-sm-1,
            .my-sm-1 {
                margin-top: .25rem !important
            }

            .mr-sm-1,
            .mx-sm-1 {
                margin-right: .25rem !important
            }

            .mb-sm-1,
            .my-sm-1 {
                margin-bottom: .25rem !important
            }

            .ml-sm-1,
            .mx-sm-1 {
                margin-left: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .mt-sm-2,
            .my-sm-2 {
                margin-top: .5rem !important
            }

            .mr-sm-2,
            .mx-sm-2 {
                margin-right: .5rem !important
            }

            .mb-sm-2,
            .my-sm-2 {
                margin-bottom: .5rem !important
            }

            .ml-sm-2,
            .mx-sm-2 {
                margin-left: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .mt-sm-3,
            .my-sm-3 {
                margin-top: 1rem !important
            }

            .mr-sm-3,
            .mx-sm-3 {
                margin-right: 1rem !important
            }

            .mb-sm-3,
            .my-sm-3 {
                margin-bottom: 1rem !important
            }

            .ml-sm-3,
            .mx-sm-3 {
                margin-left: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .mt-sm-4,
            .my-sm-4 {
                margin-top: 1.5rem !important
            }

            .mr-sm-4,
            .mx-sm-4 {
                margin-right: 1.5rem !important
            }

            .mb-sm-4,
            .my-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-sm-4,
            .mx-sm-4 {
                margin-left: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .mt-sm-5,
            .my-sm-5 {
                margin-top: 3rem !important
            }

            .mr-sm-5,
            .mx-sm-5 {
                margin-right: 3rem !important
            }

            .mb-sm-5,
            .my-sm-5 {
                margin-bottom: 3rem !important
            }

            .ml-sm-5,
            .mx-sm-5 {
                margin-left: 3rem !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .pt-sm-0,
            .py-sm-0 {
                padding-top: 0 !important
            }

            .pr-sm-0,
            .px-sm-0 {
                padding-right: 0 !important
            }

            .pb-sm-0,
            .py-sm-0 {
                padding-bottom: 0 !important
            }

            .pl-sm-0,
            .px-sm-0 {
                padding-left: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .pt-sm-1,
            .py-sm-1 {
                padding-top: .25rem !important
            }

            .pr-sm-1,
            .px-sm-1 {
                padding-right: .25rem !important
            }

            .pb-sm-1,
            .py-sm-1 {
                padding-bottom: .25rem !important
            }

            .pl-sm-1,
            .px-sm-1 {
                padding-left: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .pt-sm-2,
            .py-sm-2 {
                padding-top: .5rem !important
            }

            .pr-sm-2,
            .px-sm-2 {
                padding-right: .5rem !important
            }

            .pb-sm-2,
            .py-sm-2 {
                padding-bottom: .5rem !important
            }

            .pl-sm-2,
            .px-sm-2 {
                padding-left: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .pt-sm-3,
            .py-sm-3 {
                padding-top: 1rem !important
            }

            .pr-sm-3,
            .px-sm-3 {
                padding-right: 1rem !important
            }

            .pb-sm-3,
            .py-sm-3 {
                padding-bottom: 1rem !important
            }

            .pl-sm-3,
            .px-sm-3 {
                padding-left: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .pt-sm-4,
            .py-sm-4 {
                padding-top: 1.5rem !important
            }

            .pr-sm-4,
            .px-sm-4 {
                padding-right: 1.5rem !important
            }

            .pb-sm-4,
            .py-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-sm-4,
            .px-sm-4 {
                padding-left: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .pt-sm-5,
            .py-sm-5 {
                padding-top: 3rem !important
            }

            .pr-sm-5,
            .px-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-5,
            .py-sm-5 {
                padding-bottom: 3rem !important
            }

            .pl-sm-5,
            .px-sm-5 {
                padding-left: 3rem !important
            }

            .m-sm-n1 {
                margin: -.25rem !important
            }

            .mt-sm-n1,
            .my-sm-n1 {
                margin-top: -.25rem !important
            }

            .mr-sm-n1,
            .mx-sm-n1 {
                margin-right: -.25rem !important
            }

            .mb-sm-n1,
            .my-sm-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-sm-n1,
            .mx-sm-n1 {
                margin-left: -.25rem !important
            }

            .m-sm-n2 {
                margin: -.5rem !important
            }

            .mt-sm-n2,
            .my-sm-n2 {
                margin-top: -.5rem !important
            }

            .mr-sm-n2,
            .mx-sm-n2 {
                margin-right: -.5rem !important
            }

            .mb-sm-n2,
            .my-sm-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-sm-n2,
            .mx-sm-n2 {
                margin-left: -.5rem !important
            }

            .m-sm-n3 {
                margin: -1rem !important
            }

            .mt-sm-n3,
            .my-sm-n3 {
                margin-top: -1rem !important
            }

            .mr-sm-n3,
            .mx-sm-n3 {
                margin-right: -1rem !important
            }

            .mb-sm-n3,
            .my-sm-n3 {
                margin-bottom: -1rem !important
            }

            .ml-sm-n3,
            .mx-sm-n3 {
                margin-left: -1rem !important
            }

            .m-sm-n4 {
                margin: -1.5rem !important
            }

            .mt-sm-n4,
            .my-sm-n4 {
                margin-top: -1.5rem !important
            }

            .mr-sm-n4,
            .mx-sm-n4 {
                margin-right: -1.5rem !important
            }

            .mb-sm-n4,
            .my-sm-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-sm-n4,
            .mx-sm-n4 {
                margin-left: -1.5rem !important
            }

            .m-sm-n5 {
                margin: -3rem !important
            }

            .mt-sm-n5,
            .my-sm-n5 {
                margin-top: -3rem !important
            }

            .mr-sm-n5,
            .mx-sm-n5 {
                margin-right: -3rem !important
            }

            .mb-sm-n5,
            .my-sm-n5 {
                margin-bottom: -3rem !important
            }

            .ml-sm-n5,
            .mx-sm-n5 {
                margin-left: -3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mt-sm-auto,
            .my-sm-auto {
                margin-top: auto !important
            }

            .mr-sm-auto,
            .mx-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-auto,
            .my-sm-auto {
                margin-bottom: auto !important
            }

            .ml-sm-auto,
            .mx-sm-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:768px) {
            .m-md-0 {
                margin: 0 !important
            }

            .mt-md-0,
            .my-md-0 {
                margin-top: 0 !important
            }

            .mr-md-0,
            .mx-md-0 {
                margin-right: 0 !important
            }

            .mb-md-0,
            .my-md-0 {
                margin-bottom: 0 !important
            }

            .ml-md-0,
            .mx-md-0 {
                margin-left: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .mt-md-1,
            .my-md-1 {
                margin-top: .25rem !important
            }

            .mr-md-1,
            .mx-md-1 {
                margin-right: .25rem !important
            }

            .mb-md-1,
            .my-md-1 {
                margin-bottom: .25rem !important
            }

            .ml-md-1,
            .mx-md-1 {
                margin-left: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .mt-md-2,
            .my-md-2 {
                margin-top: .5rem !important
            }

            .mr-md-2,
            .mx-md-2 {
                margin-right: .5rem !important
            }

            .mb-md-2,
            .my-md-2 {
                margin-bottom: .5rem !important
            }

            .ml-md-2,
            .mx-md-2 {
                margin-left: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .mt-md-3,
            .my-md-3 {
                margin-top: 1rem !important
            }

            .mr-md-3,
            .mx-md-3 {
                margin-right: 1rem !important
            }

            .mb-md-3,
            .my-md-3 {
                margin-bottom: 1rem !important
            }

            .ml-md-3,
            .mx-md-3 {
                margin-left: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .mt-md-4,
            .my-md-4 {
                margin-top: 1.5rem !important
            }

            .mr-md-4,
            .mx-md-4 {
                margin-right: 1.5rem !important
            }

            .mb-md-4,
            .my-md-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-md-4,
            .mx-md-4 {
                margin-left: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .mt-md-5,
            .my-md-5 {
                margin-top: 3rem !important
            }

            .mr-md-5,
            .mx-md-5 {
                margin-right: 3rem !important
            }

            .mb-md-5,
            .my-md-5 {
                margin-bottom: 3rem !important
            }

            .ml-md-5,
            .mx-md-5 {
                margin-left: 3rem !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .pt-md-0,
            .py-md-0 {
                padding-top: 0 !important
            }

            .pr-md-0,
            .px-md-0 {
                padding-right: 0 !important
            }

            .pb-md-0,
            .py-md-0 {
                padding-bottom: 0 !important
            }

            .pl-md-0,
            .px-md-0 {
                padding-left: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .pt-md-1,
            .py-md-1 {
                padding-top: .25rem !important
            }

            .pr-md-1,
            .px-md-1 {
                padding-right: .25rem !important
            }

            .pb-md-1,
            .py-md-1 {
                padding-bottom: .25rem !important
            }

            .pl-md-1,
            .px-md-1 {
                padding-left: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .pt-md-2,
            .py-md-2 {
                padding-top: .5rem !important
            }

            .pr-md-2,
            .px-md-2 {
                padding-right: .5rem !important
            }

            .pb-md-2,
            .py-md-2 {
                padding-bottom: .5rem !important
            }

            .pl-md-2,
            .px-md-2 {
                padding-left: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .pt-md-3,
            .py-md-3 {
                padding-top: 1rem !important
            }

            .pr-md-3,
            .px-md-3 {
                padding-right: 1rem !important
            }

            .pb-md-3,
            .py-md-3 {
                padding-bottom: 1rem !important
            }

            .pl-md-3,
            .px-md-3 {
                padding-left: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .pt-md-4,
            .py-md-4 {
                padding-top: 1.5rem !important
            }

            .pr-md-4,
            .px-md-4 {
                padding-right: 1.5rem !important
            }

            .pb-md-4,
            .py-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-md-4,
            .px-md-4 {
                padding-left: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .pt-md-5,
            .py-md-5 {
                padding-top: 3rem !important
            }

            .pr-md-5,
            .px-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-5,
            .py-md-5 {
                padding-bottom: 3rem !important
            }

            .pl-md-5,
            .px-md-5 {
                padding-left: 3rem !important
            }

            .m-md-n1 {
                margin: -.25rem !important
            }

            .mt-md-n1,
            .my-md-n1 {
                margin-top: -.25rem !important
            }

            .mr-md-n1,
            .mx-md-n1 {
                margin-right: -.25rem !important
            }

            .mb-md-n1,
            .my-md-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-md-n1,
            .mx-md-n1 {
                margin-left: -.25rem !important
            }

            .m-md-n2 {
                margin: -.5rem !important
            }

            .mt-md-n2,
            .my-md-n2 {
                margin-top: -.5rem !important
            }

            .mr-md-n2,
            .mx-md-n2 {
                margin-right: -.5rem !important
            }

            .mb-md-n2,
            .my-md-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-md-n2,
            .mx-md-n2 {
                margin-left: -.5rem !important
            }

            .m-md-n3 {
                margin: -1rem !important
            }

            .mt-md-n3,
            .my-md-n3 {
                margin-top: -1rem !important
            }

            .mr-md-n3,
            .mx-md-n3 {
                margin-right: -1rem !important
            }

            .mb-md-n3,
            .my-md-n3 {
                margin-bottom: -1rem !important
            }

            .ml-md-n3,
            .mx-md-n3 {
                margin-left: -1rem !important
            }

            .m-md-n4 {
                margin: -1.5rem !important
            }

            .mt-md-n4,
            .my-md-n4 {
                margin-top: -1.5rem !important
            }

            .mr-md-n4,
            .mx-md-n4 {
                margin-right: -1.5rem !important
            }

            .mb-md-n4,
            .my-md-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-md-n4,
            .mx-md-n4 {
                margin-left: -1.5rem !important
            }

            .m-md-n5 {
                margin: -3rem !important
            }

            .mt-md-n5,
            .my-md-n5 {
                margin-top: -3rem !important
            }

            .mr-md-n5,
            .mx-md-n5 {
                margin-right: -3rem !important
            }

            .mb-md-n5,
            .my-md-n5 {
                margin-bottom: -3rem !important
            }

            .ml-md-n5,
            .mx-md-n5 {
                margin-left: -3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mt-md-auto,
            .my-md-auto {
                margin-top: auto !important
            }

            .mr-md-auto,
            .mx-md-auto {
                margin-right: auto !important
            }

            .mb-md-auto,
            .my-md-auto {
                margin-bottom: auto !important
            }

            .ml-md-auto,
            .mx-md-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:992px) {
            .m-lg-0 {
                margin: 0 !important
            }

            .mt-lg-0,
            .my-lg-0 {
                margin-top: 0 !important
            }

            .mr-lg-0,
            .mx-lg-0 {
                margin-right: 0 !important
            }

            .mb-lg-0,
            .my-lg-0 {
                margin-bottom: 0 !important
            }

            .ml-lg-0,
            .mx-lg-0 {
                margin-left: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .mt-lg-1,
            .my-lg-1 {
                margin-top: .25rem !important
            }

            .mr-lg-1,
            .mx-lg-1 {
                margin-right: .25rem !important
            }

            .mb-lg-1,
            .my-lg-1 {
                margin-bottom: .25rem !important
            }

            .ml-lg-1,
            .mx-lg-1 {
                margin-left: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .mt-lg-2,
            .my-lg-2 {
                margin-top: .5rem !important
            }

            .mr-lg-2,
            .mx-lg-2 {
                margin-right: .5rem !important
            }

            .mb-lg-2,
            .my-lg-2 {
                margin-bottom: .5rem !important
            }

            .ml-lg-2,
            .mx-lg-2 {
                margin-left: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .mt-lg-3,
            .my-lg-3 {
                margin-top: 1rem !important
            }

            .mr-lg-3,
            .mx-lg-3 {
                margin-right: 1rem !important
            }

            .mb-lg-3,
            .my-lg-3 {
                margin-bottom: 1rem !important
            }

            .ml-lg-3,
            .mx-lg-3 {
                margin-left: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .mt-lg-4,
            .my-lg-4 {
                margin-top: 1.5rem !important
            }

            .mr-lg-4,
            .mx-lg-4 {
                margin-right: 1.5rem !important
            }

            .mb-lg-4,
            .my-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-lg-4,
            .mx-lg-4 {
                margin-left: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .mt-lg-5,
            .my-lg-5 {
                margin-top: 3rem !important
            }

            .mr-lg-5,
            .mx-lg-5 {
                margin-right: 3rem !important
            }

            .mb-lg-5,
            .my-lg-5 {
                margin-bottom: 3rem !important
            }

            .ml-lg-5,
            .mx-lg-5 {
                margin-left: 3rem !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .pt-lg-0,
            .py-lg-0 {
                padding-top: 0 !important
            }

            .pr-lg-0,
            .px-lg-0 {
                padding-right: 0 !important
            }

            .pb-lg-0,
            .py-lg-0 {
                padding-bottom: 0 !important
            }

            .pl-lg-0,
            .px-lg-0 {
                padding-left: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .pt-lg-1,
            .py-lg-1 {
                padding-top: .25rem !important
            }

            .pr-lg-1,
            .px-lg-1 {
                padding-right: .25rem !important
            }

            .pb-lg-1,
            .py-lg-1 {
                padding-bottom: .25rem !important
            }

            .pl-lg-1,
            .px-lg-1 {
                padding-left: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .pt-lg-2,
            .py-lg-2 {
                padding-top: .5rem !important
            }

            .pr-lg-2,
            .px-lg-2 {
                padding-right: .5rem !important
            }

            .pb-lg-2,
            .py-lg-2 {
                padding-bottom: .5rem !important
            }

            .pl-lg-2,
            .px-lg-2 {
                padding-left: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .pt-lg-3,
            .py-lg-3 {
                padding-top: 1rem !important
            }

            .pr-lg-3,
            .px-lg-3 {
                padding-right: 1rem !important
            }

            .pb-lg-3,
            .py-lg-3 {
                padding-bottom: 1rem !important
            }

            .pl-lg-3,
            .px-lg-3 {
                padding-left: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .pt-lg-4,
            .py-lg-4 {
                padding-top: 1.5rem !important
            }

            .pr-lg-4,
            .px-lg-4 {
                padding-right: 1.5rem !important
            }

            .pb-lg-4,
            .py-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-lg-4,
            .px-lg-4 {
                padding-left: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .pt-lg-5,
            .py-lg-5 {
                padding-top: 3rem !important
            }

            .pr-lg-5,
            .px-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-5,
            .py-lg-5 {
                padding-bottom: 3rem !important
            }

            .pl-lg-5,
            .px-lg-5 {
                padding-left: 3rem !important
            }

            .m-lg-n1 {
                margin: -.25rem !important
            }

            .mt-lg-n1,
            .my-lg-n1 {
                margin-top: -.25rem !important
            }

            .mr-lg-n1,
            .mx-lg-n1 {
                margin-right: -.25rem !important
            }

            .mb-lg-n1,
            .my-lg-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-lg-n1,
            .mx-lg-n1 {
                margin-left: -.25rem !important
            }

            .m-lg-n2 {
                margin: -.5rem !important
            }

            .mt-lg-n2,
            .my-lg-n2 {
                margin-top: -.5rem !important
            }

            .mr-lg-n2,
            .mx-lg-n2 {
                margin-right: -.5rem !important
            }

            .mb-lg-n2,
            .my-lg-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-lg-n2,
            .mx-lg-n2 {
                margin-left: -.5rem !important
            }

            .m-lg-n3 {
                margin: -1rem !important
            }

            .mt-lg-n3,
            .my-lg-n3 {
                margin-top: -1rem !important
            }

            .mr-lg-n3,
            .mx-lg-n3 {
                margin-right: -1rem !important
            }

            .mb-lg-n3,
            .my-lg-n3 {
                margin-bottom: -1rem !important
            }

            .ml-lg-n3,
            .mx-lg-n3 {
                margin-left: -1rem !important
            }

            .m-lg-n4 {
                margin: -1.5rem !important
            }

            .mt-lg-n4,
            .my-lg-n4 {
                margin-top: -1.5rem !important
            }

            .mr-lg-n4,
            .mx-lg-n4 {
                margin-right: -1.5rem !important
            }

            .mb-lg-n4,
            .my-lg-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-lg-n4,
            .mx-lg-n4 {
                margin-left: -1.5rem !important
            }

            .m-lg-n5 {
                margin: -3rem !important
            }

            .mt-lg-n5,
            .my-lg-n5 {
                margin-top: -3rem !important
            }

            .mr-lg-n5,
            .mx-lg-n5 {
                margin-right: -3rem !important
            }

            .mb-lg-n5,
            .my-lg-n5 {
                margin-bottom: -3rem !important
            }

            .ml-lg-n5,
            .mx-lg-n5 {
                margin-left: -3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mt-lg-auto,
            .my-lg-auto {
                margin-top: auto !important
            }

            .mr-lg-auto,
            .mx-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-auto,
            .my-lg-auto {
                margin-bottom: auto !important
            }

            .ml-lg-auto,
            .mx-lg-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:1200px) {
            .m-xl-0 {
                margin: 0 !important
            }

            .mt-xl-0,
            .my-xl-0 {
                margin-top: 0 !important
            }

            .mr-xl-0,
            .mx-xl-0 {
                margin-right: 0 !important
            }

            .mb-xl-0,
            .my-xl-0 {
                margin-bottom: 0 !important
            }

            .ml-xl-0,
            .mx-xl-0 {
                margin-left: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .mt-xl-1,
            .my-xl-1 {
                margin-top: .25rem !important
            }

            .mr-xl-1,
            .mx-xl-1 {
                margin-right: .25rem !important
            }

            .mb-xl-1,
            .my-xl-1 {
                margin-bottom: .25rem !important
            }

            .ml-xl-1,
            .mx-xl-1 {
                margin-left: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .mt-xl-2,
            .my-xl-2 {
                margin-top: .5rem !important
            }

            .mr-xl-2,
            .mx-xl-2 {
                margin-right: .5rem !important
            }

            .mb-xl-2,
            .my-xl-2 {
                margin-bottom: .5rem !important
            }

            .ml-xl-2,
            .mx-xl-2 {
                margin-left: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .mt-xl-3,
            .my-xl-3 {
                margin-top: 1rem !important
            }

            .mr-xl-3,
            .mx-xl-3 {
                margin-right: 1rem !important
            }

            .mb-xl-3,
            .my-xl-3 {
                margin-bottom: 1rem !important
            }

            .ml-xl-3,
            .mx-xl-3 {
                margin-left: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .mt-xl-4,
            .my-xl-4 {
                margin-top: 1.5rem !important
            }

            .mr-xl-4,
            .mx-xl-4 {
                margin-right: 1.5rem !important
            }

            .mb-xl-4,
            .my-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-xl-4,
            .mx-xl-4 {
                margin-left: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .mt-xl-5,
            .my-xl-5 {
                margin-top: 3rem !important
            }

            .mr-xl-5,
            .mx-xl-5 {
                margin-right: 3rem !important
            }

            .mb-xl-5,
            .my-xl-5 {
                margin-bottom: 3rem !important
            }

            .ml-xl-5,
            .mx-xl-5 {
                margin-left: 3rem !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .pt-xl-0,
            .py-xl-0 {
                padding-top: 0 !important
            }

            .pr-xl-0,
            .px-xl-0 {
                padding-right: 0 !important
            }

            .pb-xl-0,
            .py-xl-0 {
                padding-bottom: 0 !important
            }

            .pl-xl-0,
            .px-xl-0 {
                padding-left: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .pt-xl-1,
            .py-xl-1 {
                padding-top: .25rem !important
            }

            .pr-xl-1,
            .px-xl-1 {
                padding-right: .25rem !important
            }

            .pb-xl-1,
            .py-xl-1 {
                padding-bottom: .25rem !important
            }

            .pl-xl-1,
            .px-xl-1 {
                padding-left: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .pt-xl-2,
            .py-xl-2 {
                padding-top: .5rem !important
            }

            .pr-xl-2,
            .px-xl-2 {
                padding-right: .5rem !important
            }

            .pb-xl-2,
            .py-xl-2 {
                padding-bottom: .5rem !important
            }

            .pl-xl-2,
            .px-xl-2 {
                padding-left: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .pt-xl-3,
            .py-xl-3 {
                padding-top: 1rem !important
            }

            .pr-xl-3,
            .px-xl-3 {
                padding-right: 1rem !important
            }

            .pb-xl-3,
            .py-xl-3 {
                padding-bottom: 1rem !important
            }

            .pl-xl-3,
            .px-xl-3 {
                padding-left: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .pt-xl-4,
            .py-xl-4 {
                padding-top: 1.5rem !important
            }

            .pr-xl-4,
            .px-xl-4 {
                padding-right: 1.5rem !important
            }

            .pb-xl-4,
            .py-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-xl-4,
            .px-xl-4 {
                padding-left: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .pt-xl-5,
            .py-xl-5 {
                padding-top: 3rem !important
            }

            .pr-xl-5,
            .px-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-5,
            .py-xl-5 {
                padding-bottom: 3rem !important
            }

            .pl-xl-5,
            .px-xl-5 {
                padding-left: 3rem !important
            }

            .m-xl-n1 {
                margin: -.25rem !important
            }

            .mt-xl-n1,
            .my-xl-n1 {
                margin-top: -.25rem !important
            }

            .mr-xl-n1,
            .mx-xl-n1 {
                margin-right: -.25rem !important
            }

            .mb-xl-n1,
            .my-xl-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-xl-n1,
            .mx-xl-n1 {
                margin-left: -.25rem !important
            }

            .m-xl-n2 {
                margin: -.5rem !important
            }

            .mt-xl-n2,
            .my-xl-n2 {
                margin-top: -.5rem !important
            }

            .mr-xl-n2,
            .mx-xl-n2 {
                margin-right: -.5rem !important
            }

            .mb-xl-n2,
            .my-xl-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-xl-n2,
            .mx-xl-n2 {
                margin-left: -.5rem !important
            }

            .m-xl-n3 {
                margin: -1rem !important
            }

            .mt-xl-n3,
            .my-xl-n3 {
                margin-top: -1rem !important
            }

            .mr-xl-n3,
            .mx-xl-n3 {
                margin-right: -1rem !important
            }

            .mb-xl-n3,
            .my-xl-n3 {
                margin-bottom: -1rem !important
            }

            .ml-xl-n3,
            .mx-xl-n3 {
                margin-left: -1rem !important
            }

            .m-xl-n4 {
                margin: -1.5rem !important
            }

            .mt-xl-n4,
            .my-xl-n4 {
                margin-top: -1.5rem !important
            }

            .mr-xl-n4,
            .mx-xl-n4 {
                margin-right: -1.5rem !important
            }

            .mb-xl-n4,
            .my-xl-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-xl-n4,
            .mx-xl-n4 {
                margin-left: -1.5rem !important
            }

            .m-xl-n5 {
                margin: -3rem !important
            }

            .mt-xl-n5,
            .my-xl-n5 {
                margin-top: -3rem !important
            }

            .mr-xl-n5,
            .mx-xl-n5 {
                margin-right: -3rem !important
            }

            .mb-xl-n5,
            .my-xl-n5 {
                margin-bottom: -3rem !important
            }

            .ml-xl-n5,
            .mx-xl-n5 {
                margin-left: -3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mt-xl-auto,
            .my-xl-auto {
                margin-top: auto !important
            }

            .mr-xl-auto,
            .mx-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-auto,
            .my-xl-auto {
                margin-bottom: auto !important
            }

            .ml-xl-auto,
            .mx-xl-auto {
                margin-left: auto !important
            }
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: rgba(0, 0, 0, 0)
        }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important
        }

        .text-justify {
            text-align: justify !important
        }

        .text-wrap {
            white-space: normal !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .text-left {
            text-align: left !important
        }

        .text-right {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        @media (min-width:576px) {
            .text-sm-left {
                text-align: left !important
            }

            .text-sm-right {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width:768px) {
            .text-md-left {
                text-align: left !important
            }

            .text-md-right {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width:992px) {
            .text-lg-left {
                text-align: left !important
            }

            .text-lg-right {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .text-xl-left {
                text-align: left !important
            }

            .text-xl-right {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .dropdown .dropdown-menu .dropdown-header,
        .sidebar .sidebar-heading,
        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .font-weight-light {
            font-weight: 300 !important
        }

        .font-weight-lighter {
            font-weight: lighter !important
        }

        .font-weight-normal {
            font-weight: 400 !important
        }

        .font-weight-bold {
            font-weight: 700 !important
        }

        .font-weight-bolder {
            font-weight: bolder !important
        }

        .font-italic {
            font-style: italic !important
        }

        .text-white {
            color: #fff !important
        }

        .text-primary {
            color: #4e73df !important
        }

        a.text-primary:focus,
        a.text-primary:hover {
            color: #224abe !important
        }

        .text-secondary {
            color: #858796 !important
        }

        a.text-secondary:focus,
        a.text-secondary:hover {
            color: #60616f !important
        }

        .text-success {
            color: #1cc88a !important
        }

        a.text-success:focus,
        a.text-success:hover {
            color: #13855c !important
        }

        .text-info {
            color: #36b9cc !important
        }

        a.text-info:focus,
        a.text-info:hover {
            color: #258391 !important
        }

        .text-warning {
            color: #f6c23e !important
        }

        a.text-warning:focus,
        a.text-warning:hover {
            color: #dda20a !important
        }

        .text-danger {
            color: #e74a3b !important
        }

        a.text-danger:focus,
        a.text-danger:hover {
            color: #be2617 !important
        }

        .text-light {
            color: #f8f9fc !important
        }

        a.text-light:focus,
        a.text-light:hover {
            color: #c2cbe5 !important
        }

        .text-dark {
            color: #5a5c69 !important
        }

        a.text-dark:focus,
        a.text-dark:hover {
            color: #373840 !important
        }

        .text-body {
            color: #858796 !important
        }

        .text-muted {
            color: #858796 !important
        }

        .text-black-50 {
            color: rgba(0, 0, 0, .5) !important
        }

        .text-white-50 {
            color: rgba(255, 255, 255, .5) !important
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-break {
            word-break: break-word !important;
            word-wrap: break-word !important
        }

        .text-reset {
            color: inherit !important
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        @media print {

            *,
            ::after,
            ::before {
                text-shadow: none !important;
                box-shadow: none !important
            }

            a:not(.btn) {
                text-decoration: underline
            }

            abbr[title]::after {
                content: " ("attr(title) ")"
            }

            pre {
                white-space: pre-wrap !important
            }

            blockquote,
            pre {
                border: 1px solid #b7b9cc;
                page-break-inside: avoid
            }

            thead {
                display: table-header-group
            }

            img,
            tr {
                page-break-inside: avoid
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }

            h2,
            h3 {
                page-break-after: avoid
            }

            @page {
                size: a3
            }

            body {
                min-width: 992px !important
            }

            .container {
                min-width: 992px !important
            }

            .navbar {
                display: none
            }

            .badge {
                border: 1px solid #000
            }

            .table {
                border-collapse: collapse !important
            }

            .table td,
            .table th {
                background-color: #fff !important
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #dddfeb !important
            }

            .table-dark {
                color: inherit
            }

            .table-dark tbody+tbody,
            .table-dark td,
            .table-dark th,
            .table-dark thead th {
                border-color: #e3e6f0
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #e3e6f0
            }
        }

        html {
            position: relative;
            min-height: 100%
        }

        body {
            height: 100%
        }

        a:focus {
            outline: 0
        }

        #wrapper {
            display: flex
        }

        #wrapper #content-wrapper {
            background-color: #f8f9fc;
            width: 100%;
            overflow-x: hidden
        }

        #wrapper #content-wrapper #content {
            flex: 1 0 auto
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .scroll-to-top {
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            display: none;
            width: 2.75rem;
            height: 2.75rem;
            text-align: center;
            color: #fff;
            background: rgba(90, 92, 105, .5);
            line-height: 46px
        }

        .scroll-to-top:focus,
        .scroll-to-top:hover {
            color: #fff
        }

        .scroll-to-top:hover {
            background: #5a5c69
        }

        .scroll-to-top i {
            font-weight: 800
        }

        @-webkit-keyframes growIn {
            0% {
                transform: scale(.9);
                opacity: 0
            }

            100% {
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes growIn {
            0% {
                transform: scale(.9);
                opacity: 0
            }

            100% {
                transform: scale(1);
                opacity: 1
            }
        }

        .animated--grow-in,
        .sidebar .nav-item .collapse {
            -webkit-animation-name: growIn;
            animation-name: growIn;
            -webkit-animation-duration: .2s;
            animation-duration: .2s;
            -webkit-animation-timing-function: transform cubic-bezier(.18, 1.25, .4, 1), opacity cubic-bezier(0, 1, .4, 1);
            animation-timing-function: transform cubic-bezier(.18, 1.25, .4, 1), opacity cubic-bezier(0, 1, .4, 1)
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .animated--fade-in {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
            -webkit-animation-duration: .2s;
            animation-duration: .2s;
            -webkit-animation-timing-function: opacity cubic-bezier(0, 1, .4, 1);
            animation-timing-function: opacity cubic-bezier(0, 1, .4, 1)
        }

        .bg-gradient-primary {
            background-color: #4e73df;
            background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            background-size: cover
        }

        .bg-gradient-secondary {
            background-color: #858796;
            background-image: linear-gradient(180deg, #858796 10%, #60616f 100%);
            background-size: cover
        }

        .bg-gradient-success {
            background-color: #1cc88a;
            background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%);
            background-size: cover
        }

        .bg-gradient-info {
            background-color: #36b9cc;
            background-image: linear-gradient(180deg, #36b9cc 10%, #258391 100%);
            background-size: cover
        }

        .bg-gradient-warning {
            background-color: #f6c23e;
            background-image: linear-gradient(180deg, #f6c23e 10%, #dda20a 100%);
            background-size: cover
        }

        .bg-gradient-danger {
            background-color: #e74a3b;
            background-image: linear-gradient(180deg, #e74a3b 10%, #be2617 100%);
            background-size: cover
        }

        .bg-gradient-light {
            background-color: #f8f9fc;
            background-image: linear-gradient(180deg, #f8f9fc 10%, #c2cbe5 100%);
            background-size: cover
        }

        .bg-gradient-dark {
            background-color: #5a5c69;
            background-image: linear-gradient(180deg, #5a5c69 10%, #373840 100%);
            background-size: cover
        }

        .bg-gray-100 {
            background-color: #f8f9fc !important
        }

        .bg-gray-200 {
            background-color: #eaecf4 !important
        }

        .bg-gray-300 {
            background-color: #dddfeb !important
        }

        .bg-gray-400 {
            background-color: #d1d3e2 !important
        }

        .bg-gray-500 {
            background-color: #b7b9cc !important
        }

        .bg-gray-600 {
            background-color: #858796 !important
        }

        .bg-gray-700 {
            background-color: #6e707e !important
        }

        .bg-gray-800 {
            background-color: #5a5c69 !important
        }

        .bg-gray-900 {
            background-color: #3a3b45 !important
        }

        .o-hidden {
            overflow: hidden !important
        }

        .text-xs {
            font-size: .7rem
        }

        .text-lg {
            font-size: 1.2rem
        }

        .text-gray-100 {
            color: #f8f9fc !important
        }

        .text-gray-200 {
            color: #eaecf4 !important
        }

        .text-gray-300 {
            color: #dddfeb !important
        }

        .text-gray-400 {
            color: #d1d3e2 !important
        }

        .text-gray-500 {
            color: #b7b9cc !important
        }

        .text-gray-600 {
            color: #858796 !important
        }

        .text-gray-700 {
            color: #6e707e !important
        }

        .text-gray-800 {
            color: #5a5c69 !important
        }

        .text-gray-900 {
            color: #3a3b45 !important
        }

        .icon-circle {
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .border-left-primary {
            border-left: .25rem solid #4e73df !important
        }

        .border-bottom-primary {
            border-bottom: .25rem solid #4e73df !important
        }

        .border-left-secondary {
            border-left: .25rem solid #858796 !important
        }

        .border-bottom-secondary {
            border-bottom: .25rem solid #858796 !important
        }

        .border-left-success {
            border-left: .25rem solid #1cc88a !important
        }

        .border-bottom-success {
            border-bottom: .25rem solid #1cc88a !important
        }

        .border-left-info {
            border-left: .25rem solid #36b9cc !important
        }

        .border-bottom-info {
            border-bottom: .25rem solid #36b9cc !important
        }

        .border-left-warning {
            border-left: .25rem solid #f6c23e !important
        }

        .border-bottom-warning {
            border-bottom: .25rem solid #f6c23e !important
        }

        .border-left-danger {
            border-left: .25rem solid #e74a3b !important
        }

        .border-bottom-danger {
            border-bottom: .25rem solid #e74a3b !important
        }

        .border-left-light {
            border-left: .25rem solid #f8f9fc !important
        }

        .border-bottom-light {
            border-bottom: .25rem solid #f8f9fc !important
        }

        .border-left-dark {
            border-left: .25rem solid #5a5c69 !important
        }

        .border-bottom-dark {
            border-bottom: .25rem solid #5a5c69 !important
        }

        .progress-sm {
            height: .5rem
        }

        .rotate-15 {
            transform: rotate(15deg)
        }

        .rotate-n-15 {
            transform: rotate(-15deg)
        }

        .dropdown .dropdown-menu {
            font-size: .85rem
        }

        .dropdown .dropdown-menu .dropdown-header {
            font-weight: 800;
            font-size: .65rem;
            color: #b7b9cc
        }

        .dropdown.no-arrow .dropdown-toggle::after {
            display: none
        }

        .sidebar .nav-item.dropdown .dropdown-toggle::after,
        .topbar .nav-item.dropdown .dropdown-toggle::after {
            width: 1rem;
            text-align: center;
            float: right;
            vertical-align: 0;
            border: 0;
            font-weight: 900;
            content: '\f105';
            font-family: 'Font Awesome 5 Free'
        }

        .sidebar .nav-item.dropdown.show .dropdown-toggle::after,
        .topbar .nav-item.dropdown.show .dropdown-toggle::after {
            content: '\f107'
        }

        .sidebar .nav-item .nav-link,
        .topbar .nav-item .nav-link {
            position: relative
        }

        .sidebar .nav-item .nav-link .badge-counter,
        .topbar .nav-item .nav-link .badge-counter {
            position: absolute;
            transform: scale(.7);
            transform-origin: top right;
            right: .25rem;
            margin-top: -.25rem
        }

        .sidebar .nav-item .nav-link .img-profile,
        .topbar .nav-item .nav-link .img-profile {
            height: 2rem;
            width: 2rem
        }

        .topbar {
            height: 4.375rem
        }

        .topbar #sidebarToggleTop {
            height: 2.5rem;
            width: 2.5rem
        }

        .topbar #sidebarToggleTop:hover {
            background-color: #eaecf4
        }

        .topbar #sidebarToggleTop:active {
            background-color: #dddfeb
        }

        .topbar .navbar-search {
            width: 25rem
        }

        .topbar .navbar-search input {
            font-size: .85rem;
            height: auto
        }

        .topbar .topbar-divider {
            width: 0;
            border-right: 1px solid #e3e6f0;
            height: calc(4.375rem - 2rem);
            margin: auto 1rem
        }

        .topbar .nav-item .nav-link {
            height: 4.375rem;
            display: flex;
            align-items: center;
            padding: 0 .75rem
        }

        .topbar .nav-item .nav-link:focus {
            outline: 0
        }

        .topbar .nav-item:focus {
            outline: 0
        }

        .topbar .dropdown {
            position: static
        }

        .topbar .dropdown .dropdown-menu {
            width: calc(100% - 1.5rem);
            right: .75rem
        }

        .topbar .dropdown-list {
            padding: 0;
            border: none;
            overflow: hidden
        }

        .topbar .dropdown-list .dropdown-header {
            background-color: #4e73df;
            border: 1px solid #4e73df;
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #fff
        }

        .topbar .dropdown-list .dropdown-item {
            white-space: normal;
            padding-top: .5rem;
            padding-bottom: .5rem;
            border-left: 1px solid #e3e6f0;
            border-right: 1px solid #e3e6f0;
            border-bottom: 1px solid #e3e6f0;
            line-height: 1.3rem
        }

        .topbar .dropdown-list .dropdown-item .dropdown-list-image {
            position: relative;
            height: 2.5rem;
            width: 2.5rem
        }

        .topbar .dropdown-list .dropdown-item .dropdown-list-image img {
            height: 2.5rem;
            width: 2.5rem
        }

        .topbar .dropdown-list .dropdown-item .dropdown-list-image .status-indicator {
            background-color: #eaecf4;
            height: .75rem;
            width: .75rem;
            border-radius: 100%;
            position: absolute;
            bottom: 0;
            right: 0;
            border: .125rem solid #fff
        }

        .topbar .dropdown-list .dropdown-item .text-truncate {
            max-width: 10rem
        }

        .topbar .dropdown-list .dropdown-item:active {
            background-color: #eaecf4;
            color: #3a3b45
        }

        @media (min-width:576px) {
            .topbar .dropdown {
                position: relative
            }

            .topbar .dropdown .dropdown-menu {
                width: auto;
                right: 0
            }

            .topbar .dropdown-list {
                width: 20rem !important
            }

            .topbar .dropdown-list .dropdown-item .text-truncate {
                max-width: 13.375rem
            }
        }

        .topbar.navbar-dark .navbar-nav .nav-item .nav-link {
            color: rgba(255, 255, 255, .8)
        }

        .topbar.navbar-dark .navbar-nav .nav-item .nav-link:hover {
            color: #fff
        }

        .topbar.navbar-dark .navbar-nav .nav-item .nav-link:active {
            color: #fff
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link {
            color: #d1d3e2
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link:hover {
            color: #b7b9cc
        }

        .topbar.navbar-light .navbar-nav .nav-item .nav-link:active {
            color: #858796
        }

        .sidebar {
            width: 6.5rem;
            min-height: 100vh
        }

        .sidebar .nav-item {
            position: relative
        }

        .sidebar .nav-item:last-child {
            margin-bottom: 1rem
        }

        .sidebar .nav-item .nav-link {
            text-align: center;
            padding: .75rem 1rem;
            width: 6.5rem
        }

        .sidebar .nav-item .nav-link span {
            font-size: .65rem;
            display: block
        }

        .sidebar .nav-item.active .nav-link {
            font-weight: 700
        }

        .sidebar .nav-item .collapse {
            position: absolute;
            left: calc(6.5rem + 1.5rem / 2);
            z-index: 1;
            top: 2px
        }

        .sidebar .nav-item .collapse .collapse-inner {
            border-radius: .35rem;
            box-shadow: 0 .15rem 1.75rem 0 rgba(58, 59, 69, .15)
        }

        .sidebar .nav-item .collapsing {
            display: none;
            transition: none
        }

        .sidebar .nav-item .collapse .collapse-inner,
        .sidebar .nav-item .collapsing .collapse-inner {
            padding: .5rem 0;
            min-width: 10rem;
            font-size: .85rem;
            margin: 0 0 1rem 0
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-header,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-header {
            margin: 0;
            white-space: nowrap;
            padding: .5rem 1.5rem;
            text-transform: uppercase;
            font-weight: 800;
            font-size: .65rem;
            color: #b7b9cc
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item {
            padding: .5rem 1rem;
            margin: 0 .5rem;
            display: block;
            color: #3a3b45;
            text-decoration: none;
            border-radius: .35rem;
            white-space: nowrap
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item:hover,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item:hover {
            background-color: #eaecf4
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item:active,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item:active {
            background-color: #dddfeb
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item.active,
        .sidebar .nav-item .collapsing .collapse-inner .collapse-item.active {
            color: #4e73df;
            font-weight: 700
        }

        .sidebar #sidebarToggle {
            width: 2.5rem;
            height: 2.5rem;
            text-align: center;
            margin-bottom: 1rem;
            cursor: pointer
        }

        .sidebar #sidebarToggle::after {
            font-weight: 900;
            content: '\f104';
            font-family: 'Font Awesome 5 Free';
            margin-right: .1rem
        }

        .sidebar #sidebarToggle:hover {
            text-decoration: none
        }

        .sidebar #sidebarToggle:focus {
            outline: 0
        }

        .sidebar.toggled {
            width: 0 !important;
            overflow: hidden
        }

        .sidebar.toggled #sidebarToggle::after {
            content: '\f105';
            font-family: 'Font Awesome 5 Free';
            margin-left: .25rem
        }

        .sidebar.toggled .sidebar-card {
            display: none
        }

        .sidebar .sidebar-brand {
            height: 4.375rem;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 800;
            padding: 1.5rem 1rem;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: .05rem;
            z-index: 1
        }

        .sidebar .sidebar-brand .sidebar-brand-icon i {
            font-size: 2rem
        }

        .sidebar .sidebar-brand .sidebar-brand-text {
            display: none
        }

        .sidebar hr.sidebar-divider {
            margin: 0 1rem 1rem
        }

        .sidebar .sidebar-heading {
            text-align: center;
            padding: 0 1rem;
            font-weight: 800;
            font-size: .65rem
        }

        .sidebar .sidebar-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: .875rem;
            border-radius: .35rem;
            color: rgba(255, 255, 255, .8);
            margin-left: 1rem;
            margin-right: 1rem;
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: rgba(0, 0, 0, .1)
        }

        .sidebar .sidebar-card .sidebar-card-illustration {
            height: 3rem;
            display: block
        }

        .sidebar .sidebar-card .sidebar-card-title {
            font-weight: 700
        }

        .sidebar .sidebar-card p {
            font-size: .75rem;
            color: rgba(255, 255, 255, .5)
        }

        @media (min-width:768px) {
            .sidebar {
                width: 14rem !important
            }

            .sidebar .nav-item .collapse {
                position: relative;
                left: 0;
                z-index: 1;
                top: 0;
                -webkit-animation: none;
                animation: none
            }

            .sidebar .nav-item .collapse .collapse-inner {
                border-radius: 0;
                box-shadow: none
            }

            .sidebar .nav-item .collapsing {
                display: block;
                transition: height .15s ease
            }

            .sidebar .nav-item .collapse,
            .sidebar .nav-item .collapsing {
                margin: 0 1rem
            }

            .sidebar .nav-item .nav-link {
                display: block;
                width: 100%;
                text-align: left;
                padding: 1rem;
                width: 14rem
            }

            .sidebar .nav-item .nav-link i {
                font-size: .85rem;
                margin-right: .25rem
            }

            .sidebar .nav-item .nav-link span {
                font-size: .85rem;
                display: inline
            }

            .sidebar .nav-item .nav-link[data-toggle=collapse]::after {
                width: 1rem;
                text-align: center;
                float: right;
                vertical-align: 0;
                border: 0;
                font-weight: 900;
                content: '\f107';
                font-family: 'Font Awesome 5 Free'
            }

            .sidebar .nav-item .nav-link[data-toggle=collapse].collapsed::after {
                content: '\f105'
            }

            .sidebar .sidebar-brand .sidebar-brand-icon i {
                font-size: 2rem
            }

            .sidebar .sidebar-brand .sidebar-brand-text {
                display: inline
            }

            .sidebar .sidebar-heading {
                text-align: left
            }

            .sidebar.toggled {
                overflow: visible;
                width: 6.5rem !important
            }

            .sidebar.toggled .nav-item .collapse {
                position: absolute;
                left: calc(6.5rem + 1.5rem / 2);
                z-index: 1;
                top: 2px;
                -webkit-animation-name: growIn;
                animation-name: growIn;
                -webkit-animation-duration: .2s;
                animation-duration: .2s;
                -webkit-animation-timing-function: transform cubic-bezier(.18, 1.25, .4, 1), opacity cubic-bezier(0, 1, .4, 1);
                animation-timing-function: transform cubic-bezier(.18, 1.25, .4, 1), opacity cubic-bezier(0, 1, .4, 1)
            }

            .sidebar.toggled .nav-item .collapse .collapse-inner {
                box-shadow: 0 .15rem 1.75rem 0 rgba(58, 59, 69, .15);
                border-radius: .35rem
            }

            .sidebar.toggled .nav-item .collapsing {
                display: none;
                transition: none
            }

            .sidebar.toggled .nav-item .collapse,
            .sidebar.toggled .nav-item .collapsing {
                margin: 0
            }

            .sidebar.toggled .nav-item:last-child {
                margin-bottom: 1rem
            }

            .sidebar.toggled .nav-item .nav-link {
                text-align: center;
                padding: .75rem 1rem;
                width: 6.5rem
            }

            .sidebar.toggled .nav-item .nav-link span {
                font-size: .65rem;
                display: block
            }

            .sidebar.toggled .nav-item .nav-link i {
                margin-right: 0
            }

            .sidebar.toggled .nav-item .nav-link[data-toggle=collapse]::after {
                display: none
            }

            .sidebar.toggled .sidebar-brand .sidebar-brand-icon i {
                font-size: 2rem
            }

            .sidebar.toggled .sidebar-brand .sidebar-brand-text {
                display: none
            }

            .sidebar.toggled .sidebar-heading {
                text-align: center
            }
        }

        .sidebar-light .sidebar-brand {
            color: #6e707e
        }

        .sidebar-light hr.sidebar-divider {
            border-top: 1px solid #eaecf4
        }

        .sidebar-light .sidebar-heading {
            color: #b7b9cc
        }

        .sidebar-light .nav-item .nav-link {
            color: #858796
        }

        .sidebar-light .nav-item .nav-link i {
            color: #d1d3e2
        }

        .sidebar-light .nav-item .nav-link:active,
        .sidebar-light .nav-item .nav-link:focus,
        .sidebar-light .nav-item .nav-link:hover {
            color: #6e707e
        }

        .sidebar-light .nav-item .nav-link:active i,
        .sidebar-light .nav-item .nav-link:focus i,
        .sidebar-light .nav-item .nav-link:hover i {
            color: #6e707e
        }

        .sidebar-light .nav-item .nav-link[data-toggle=collapse]::after {
            color: #b7b9cc
        }

        .sidebar-light .nav-item.active .nav-link {
            color: #6e707e
        }

        .sidebar-light .nav-item.active .nav-link i {
            color: #6e707e
        }

        .sidebar-light #sidebarToggle {
            background-color: #eaecf4
        }

        .sidebar-light #sidebarToggle::after {
            color: #b7b9cc
        }

        .sidebar-light #sidebarToggle:hover {
            background-color: #dddfeb
        }

        .sidebar-dark .sidebar-brand {
            color: #fff
        }

        .sidebar-dark hr.sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, .15)
        }

        .sidebar-dark .sidebar-heading {
            color: rgba(255, 255, 255, .4)
        }

        .sidebar-dark .nav-item .nav-link {
            color: rgba(255, 255, 255, .8)
        }

        .sidebar-dark .nav-item .nav-link i {
            color: rgba(255, 255, 255, .3)
        }

        .sidebar-dark .nav-item .nav-link:active,
        .sidebar-dark .nav-item .nav-link:focus,
        .sidebar-dark .nav-item .nav-link:hover {
            color: #fff
        }

        .sidebar-dark .nav-item .nav-link:active i,
        .sidebar-dark .nav-item .nav-link:focus i,
        .sidebar-dark .nav-item .nav-link:hover i {
            color: #fff
        }

        .sidebar-dark .nav-item .nav-link[data-toggle=collapse]::after {
            color: rgba(255, 255, 255, .5)
        }

        .sidebar-dark .nav-item.active .nav-link {
            color: #fff
        }

        .sidebar-dark .nav-item.active .nav-link i {
            color: #fff
        }

        .sidebar-dark #sidebarToggle {
            background-color: rgba(255, 255, 255, .2)
        }

        .sidebar-dark #sidebarToggle::after {
            color: rgba(255, 255, 255, .5)
        }

        .sidebar-dark #sidebarToggle:hover {
            background-color: rgba(255, 255, 255, .25)
        }

        .sidebar-dark.toggled #sidebarToggle::after {
            color: rgba(255, 255, 255, .5)
        }

        .btn-circle {
            border-radius: 100%;
            height: 2.5rem;
            width: 2.5rem;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center
        }

        .btn-circle.btn-sm,
        .btn-group-sm>.btn-circle.btn {
            height: 1.8rem;
            width: 1.8rem;
            font-size: .75rem
        }

        .btn-circle.btn-lg,
        .btn-group-lg>.btn-circle.btn {
            height: 3.5rem;
            width: 3.5rem;
            font-size: 1.35rem
        }

        .btn-icon-split {
            padding: 0;
            overflow: hidden;
            display: inline-flex;
            align-items: stretch;
            justify-content: center
        }

        .btn-icon-split .icon {
            background: rgba(0, 0, 0, .15);
            display: inline-block;
            padding: .375rem .75rem
        }

        .btn-icon-split .text {
            display: inline-block;
            padding: .375rem .75rem
        }

        .btn-group-sm>.btn-icon-split.btn .icon,
        .btn-icon-split.btn-sm .icon {
            padding: .25rem .5rem
        }

        .btn-group-sm>.btn-icon-split.btn .text,
        .btn-icon-split.btn-sm .text {
            padding: .25rem .5rem
        }

        .btn-group-lg>.btn-icon-split.btn .icon,
        .btn-icon-split.btn-lg .icon {
            padding: .5rem 1rem
        }

        .btn-group-lg>.btn-icon-split.btn .text,
        .btn-icon-split.btn-lg .text {
            padding: .5rem 1rem
        }

        .card .card-header .dropdown {
            line-height: 1
        }

        .card .card-header .dropdown .dropdown-menu {
            line-height: 1.5
        }

        .card .card-header[data-toggle=collapse] {
            text-decoration: none;
            position: relative;
            padding: .75rem 3.25rem .75rem 1.25rem
        }

        .card .card-header[data-toggle=collapse]::after {
            position: absolute;
            right: 0;
            top: 0;
            padding-right: 1.725rem;
            line-height: 51px;
            font-weight: 900;
            content: '\f107';
            font-family: 'Font Awesome 5 Free';
            color: #d1d3e2
        }

        .card .card-header[data-toggle=collapse].collapsed {
            border-radius: .35rem
        }

        .card .card-header[data-toggle=collapse].collapsed::after {
            content: '\f105'
        }

        .chart-area {
            position: relative;
            height: 10rem;
            width: 100%
        }

        @media (min-width:768px) {
            .chart-area {
                height: 20rem
            }
        }

        .chart-bar {
            position: relative;
            height: 10rem;
            width: 100%
        }

        @media (min-width:768px) {
            .chart-bar {
                height: 20rem
            }
        }

        .chart-pie {
            position: relative;
            height: 15rem;
            width: 100%
        }

        @media (min-width:768px) {
            .chart-pie {
                height: calc(20rem - 43px) !important
            }
        }

        .bg-login-image {
            background: url(https://source.unsplash.com/K4mSJ7kc0As/600x800);
            background-position: center;
            background-size: cover
        }

        .bg-register-image {
            background: url(https://source.unsplash.com/Mv9hjnEUHR4/600x800);
            background-position: center;
            background-size: cover
        }

        .bg-password-image {
            background: url(https://source.unsplash.com/oWTW-jNGl9I/600x800);
            background-position: center;
            background-size: cover
        }

        form.user .custom-checkbox.small label {
            line-height: 1.5rem
        }

        form.user .form-control-user {
            font-size: .8rem;
            border-radius: 10rem;
            padding: 1.5rem 1rem
        }

        form.user .btn-user {
            font-size: .8rem;
            border-radius: 10rem;
            padding: .75rem 1rem
        }

        .btn-google {
            color: #fff;
            background-color: #ea4335;
            border-color: #fff
        }

        .btn-google:hover {
            color: #fff;
            background-color: #e12717;
            border-color: #e6e6e6
        }

        .btn-google.focus,
        .btn-google:focus {
            color: #fff;
            background-color: #e12717;
            border-color: #e6e6e6;
            box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .5)
        }

        .btn-google.disabled,
        .btn-google:disabled {
            color: #fff;
            background-color: #ea4335;
            border-color: #fff
        }

        .btn-google:not(:disabled):not(.disabled).active,
        .btn-google:not(:disabled):not(.disabled):active,
        .show>.btn-google.dropdown-toggle {
            color: #fff;
            background-color: #d62516;
            border-color: #dfdfdf
        }

        .btn-google:not(:disabled):not(.disabled).active:focus,
        .btn-google:not(:disabled):not(.disabled):active:focus,
        .show>.btn-google.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .5)
        }

        .btn-facebook {
            color: #fff;
            background-color: #3b5998;
            border-color: #fff
        }

        .btn-facebook:hover {
            color: #fff;
            background-color: #30497c;
            border-color: #e6e6e6
        }

        .btn-facebook.focus,
        .btn-facebook:focus {
            color: #fff;
            background-color: #30497c;
            border-color: #e6e6e6;
            box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .5)
        }

        .btn-facebook.disabled,
        .btn-facebook:disabled {
            color: #fff;
            background-color: #3b5998;
            border-color: #fff
        }

        .btn-facebook:not(:disabled):not(.disabled).active,
        .btn-facebook:not(:disabled):not(.disabled):active,
        .show>.btn-facebook.dropdown-toggle {
            color: #fff;
            background-color: #2d4373;
            border-color: #dfdfdf
        }

        .btn-facebook:not(:disabled):not(.disabled).active:focus,
        .btn-facebook:not(:disabled):not(.disabled):active:focus,
        .show>.btn-facebook.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .5)
        }

        .error {
            color: #5a5c69;
            font-size: 7rem;
            position: relative;
            line-height: 1;
            width: 12.5rem
        }

        @-webkit-keyframes noise-anim {
            0% {
                clip: rect(49px, 9999px, 40px, 0)
            }

            5% {
                clip: rect(75px, 9999px, 72px, 0)
            }

            10% {
                clip: rect(97px, 9999px, 93px, 0)
            }

            15% {
                clip: rect(15px, 9999px, 9px, 0)
            }

            20% {
                clip: rect(14px, 9999px, 92px, 0)
            }

            25% {
                clip: rect(18px, 9999px, 94px, 0)
            }

            30% {
                clip: rect(17px, 9999px, 20px, 0)
            }

            35% {
                clip: rect(71px, 9999px, 59px, 0)
            }

            40% {
                clip: rect(42px, 9999px, 84px, 0)
            }

            45% {
                clip: rect(56px, 9999px, 25px, 0)
            }

            50% {
                clip: rect(46px, 9999px, 14px, 0)
            }

            55% {
                clip: rect(47px, 9999px, 1px, 0)
            }

            60% {
                clip: rect(64px, 9999px, 58px, 0)
            }

            65% {
                clip: rect(89px, 9999px, 92px, 0)
            }

            70% {
                clip: rect(56px, 9999px, 39px, 0)
            }

            75% {
                clip: rect(80px, 9999px, 71px, 0)
            }

            80% {
                clip: rect(8px, 9999px, 13px, 0)
            }

            85% {
                clip: rect(66px, 9999px, 68px, 0)
            }

            90% {
                clip: rect(68px, 9999px, 4px, 0)
            }

            95% {
                clip: rect(56px, 9999px, 14px, 0)
            }

            100% {
                clip: rect(28px, 9999px, 53px, 0)
            }
        }

        @keyframes noise-anim {
            0% {
                clip: rect(49px, 9999px, 40px, 0)
            }

            5% {
                clip: rect(75px, 9999px, 72px, 0)
            }

            10% {
                clip: rect(97px, 9999px, 93px, 0)
            }

            15% {
                clip: rect(15px, 9999px, 9px, 0)
            }

            20% {
                clip: rect(14px, 9999px, 92px, 0)
            }

            25% {
                clip: rect(18px, 9999px, 94px, 0)
            }

            30% {
                clip: rect(17px, 9999px, 20px, 0)
            }

            35% {
                clip: rect(71px, 9999px, 59px, 0)
            }

            40% {
                clip: rect(42px, 9999px, 84px, 0)
            }

            45% {
                clip: rect(56px, 9999px, 25px, 0)
            }

            50% {
                clip: rect(46px, 9999px, 14px, 0)
            }

            55% {
                clip: rect(47px, 9999px, 1px, 0)
            }

            60% {
                clip: rect(64px, 9999px, 58px, 0)
            }

            65% {
                clip: rect(89px, 9999px, 92px, 0)
            }

            70% {
                clip: rect(56px, 9999px, 39px, 0)
            }

            75% {
                clip: rect(80px, 9999px, 71px, 0)
            }

            80% {
                clip: rect(8px, 9999px, 13px, 0)
            }

            85% {
                clip: rect(66px, 9999px, 68px, 0)
            }

            90% {
                clip: rect(68px, 9999px, 4px, 0)
            }

            95% {
                clip: rect(56px, 9999px, 14px, 0)
            }

            100% {
                clip: rect(28px, 9999px, 53px, 0)
            }
        }

        .error:after {
            content: attr(data-text);
            position: absolute;
            left: 2px;
            text-shadow: -1px 0 #e74a3b;
            top: 0;
            color: #5a5c69;
            background: #f8f9fc;
            overflow: hidden;
            clip: rect(0, 900px, 0, 0);
            animation: noise-anim 2s infinite linear alternate-reverse
        }

        @-webkit-keyframes noise-anim-2 {
            0% {
                clip: rect(16px, 9999px, 10px, 0)
            }

            5% {
                clip: rect(22px, 9999px, 29px, 0)
            }

            10% {
                clip: rect(6px, 9999px, 68px, 0)
            }

            15% {
                clip: rect(85px, 9999px, 95px, 0)
            }

            20% {
                clip: rect(65px, 9999px, 91px, 0)
            }

            25% {
                clip: rect(93px, 9999px, 68px, 0)
            }

            30% {
                clip: rect(10px, 9999px, 27px, 0)
            }

            35% {
                clip: rect(37px, 9999px, 25px, 0)
            }

            40% {
                clip: rect(12px, 9999px, 23px, 0)
            }

            45% {
                clip: rect(40px, 9999px, 18px, 0)
            }

            50% {
                clip: rect(19px, 9999px, 71px, 0)
            }

            55% {
                clip: rect(2px, 9999px, 35px, 0)
            }

            60% {
                clip: rect(16px, 9999px, 69px, 0)
            }

            65% {
                clip: rect(8px, 9999px, 65px, 0)
            }

            70% {
                clip: rect(30px, 9999px, 57px, 0)
            }

            75% {
                clip: rect(14px, 9999px, 4px, 0)
            }

            80% {
                clip: rect(39px, 9999px, 30px, 0)
            }

            85% {
                clip: rect(22px, 9999px, 35px, 0)
            }

            90% {
                clip: rect(58px, 9999px, 71px, 0)
            }

            95% {
                clip: rect(34px, 9999px, 90px, 0)
            }

            100% {
                clip: rect(67px, 9999px, 68px, 0)
            }
        }

        @keyframes noise-anim-2 {
            0% {
                clip: rect(16px, 9999px, 10px, 0)
            }

            5% {
                clip: rect(22px, 9999px, 29px, 0)
            }

            10% {
                clip: rect(6px, 9999px, 68px, 0)
            }

            15% {
                clip: rect(85px, 9999px, 95px, 0)
            }

            20% {
                clip: rect(65px, 9999px, 91px, 0)
            }

            25% {
                clip: rect(93px, 9999px, 68px, 0)
            }

            30% {
                clip: rect(10px, 9999px, 27px, 0)
            }

            35% {
                clip: rect(37px, 9999px, 25px, 0)
            }

            40% {
                clip: rect(12px, 9999px, 23px, 0)
            }

            45% {
                clip: rect(40px, 9999px, 18px, 0)
            }

            50% {
                clip: rect(19px, 9999px, 71px, 0)
            }

            55% {
                clip: rect(2px, 9999px, 35px, 0)
            }

            60% {
                clip: rect(16px, 9999px, 69px, 0)
            }

            65% {
                clip: rect(8px, 9999px, 65px, 0)
            }

            70% {
                clip: rect(30px, 9999px, 57px, 0)
            }

            75% {
                clip: rect(14px, 9999px, 4px, 0)
            }

            80% {
                clip: rect(39px, 9999px, 30px, 0)
            }

            85% {
                clip: rect(22px, 9999px, 35px, 0)
            }

            90% {
                clip: rect(58px, 9999px, 71px, 0)
            }

            95% {
                clip: rect(34px, 9999px, 90px, 0)
            }

            100% {
                clip: rect(67px, 9999px, 68px, 0)
            }
        }

        .error:before {
            content: attr(data-text);
            position: absolute;
            left: -2px;
            text-shadow: 1px 0 #4e73df;
            top: 0;
            color: #5a5c69;
            background: #f8f9fc;
            overflow: hidden;
            clip: rect(0, 900px, 0, 0);
            animation: noise-anim-2 3s infinite linear alternate-reverse
        }

        footer.sticky-footer {
            padding: 2rem 0;
            flex-shrink: 0
        }

        footer.sticky-footer .copyright {
            line-height: 1;
            font-size: .8rem
        }

        body.sidebar-toggled footer.sticky-footer {
            width: 100%
        }
    </style>


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-2">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">User Registration</h1>
                            </div>
                            <form class="user" method="post" action="new">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFullName" placeholder="Enter Your Full Name" name="fname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="address" placeholder="Enter Your Address" name="address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Enter Username" name="username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleMobile" placeholder="Enter Mobile No." name="mobile">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                                </div> -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="rpass">
                                    </div>
                                </div>
                                <a href="login" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script>
        /*! jQuery v3.6.0 | (c) OpenJS Foundation and other contributors | jquery.org/license */ ! function(e, t) {
            "use strict";
            "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
                if (!e.document) throw new Error("jQuery requires a window with a document");
                return t(e)
            } : t(e)
        }("undefined" != typeof window ? window : this, function(C, e) {
            "use strict";
            var t = [],
                r = Object.getPrototypeOf,
                s = t.slice,
                g = t.flat ? function(e) {
                    return t.flat.call(e)
                } : function(e) {
                    return t.concat.apply([], e)
                },
                u = t.push,
                i = t.indexOf,
                n = {},
                o = n.toString,
                v = n.hasOwnProperty,
                a = v.toString,
                l = a.call(Object),
                y = {},
                m = function(e) {
                    return "function" == typeof e && "number" != typeof e.nodeType && "function" != typeof e.item
                },
                x = function(e) {
                    return null != e && e === e.window
                },
                E = C.document,
                c = {
                    type: !0,
                    src: !0,
                    nonce: !0,
                    noModule: !0
                };

            function b(e, t, n) {
                var r, i, o = (n = n || E).createElement("script");
                if (o.text = e, t)
                    for (r in c)(i = t[r] || t.getAttribute && t.getAttribute(r)) && o.setAttribute(r, i);
                n.head.appendChild(o).parentNode.removeChild(o)
            }

            function w(e) {
                return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? n[o.call(e)] || "object" : typeof e
            }
            var f = "3.6.0",
                S = function(e, t) {
                    return new S.fn.init(e, t)
                };

            function p(e) {
                var t = !!e && "length" in e && e.length,
                    n = w(e);
                return !m(e) && !x(e) && ("array" === n || 0 === t || "number" == typeof t && 0 < t && t - 1 in e)
            }
            S.fn = S.prototype = {
                jquery: f,
                constructor: S,
                length: 0,
                toArray: function() {
                    return s.call(this)
                },
                get: function(e) {
                    return null == e ? s.call(this) : e < 0 ? this[e + this.length] : this[e]
                },
                pushStack: function(e) {
                    var t = S.merge(this.constructor(), e);
                    return t.prevObject = this, t
                },
                each: function(e) {
                    return S.each(this, e)
                },
                map: function(n) {
                    return this.pushStack(S.map(this, function(e, t) {
                        return n.call(e, t, e)
                    }))
                },
                slice: function() {
                    return this.pushStack(s.apply(this, arguments))
                },
                first: function() {
                    return this.eq(0)
                },
                last: function() {
                    return this.eq(-1)
                },
                even: function() {
                    return this.pushStack(S.grep(this, function(e, t) {
                        return (t + 1) % 2
                    }))
                },
                odd: function() {
                    return this.pushStack(S.grep(this, function(e, t) {
                        return t % 2
                    }))
                },
                eq: function(e) {
                    var t = this.length,
                        n = +e + (e < 0 ? t : 0);
                    return this.pushStack(0 <= n && n < t ? [this[n]] : [])
                },
                end: function() {
                    return this.prevObject || this.constructor()
                },
                push: u,
                sort: t.sort,
                splice: t.splice
            }, S.extend = S.fn.extend = function() {
                var e, t, n, r, i, o, a = arguments[0] || {},
                    s = 1,
                    u = arguments.length,
                    l = !1;
                for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || m(a) || (a = {}), s === u && (a = this, s--); s < u; s++)
                    if (null != (e = arguments[s]))
                        for (t in e) r = e[t], "__proto__" !== t && a !== r && (l && r && (S.isPlainObject(r) || (i = Array.isArray(r))) ? (n = a[t], o = i && !Array.isArray(n) ? [] : i || S.isPlainObject(n) ? n : {}, i = !1, a[t] = S.extend(l, o, r)) : void 0 !== r && (a[t] = r));
                return a
            }, S.extend({
                expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
                isReady: !0,
                error: function(e) {
                    throw new Error(e)
                },
                noop: function() {},
                isPlainObject: function(e) {
                    var t, n;
                    return !(!e || "[object Object]" !== o.call(e)) && (!(t = r(e)) || "function" == typeof(n = v.call(t, "constructor") && t.constructor) && a.call(n) === l)
                },
                isEmptyObject: function(e) {
                    var t;
                    for (t in e) return !1;
                    return !0
                },
                globalEval: function(e, t, n) {
                    b(e, {
                        nonce: t && t.nonce
                    }, n)
                },
                each: function(e, t) {
                    var n, r = 0;
                    if (p(e)) {
                        for (n = e.length; r < n; r++)
                            if (!1 === t.call(e[r], r, e[r])) break
                    } else
                        for (r in e)
                            if (!1 === t.call(e[r], r, e[r])) break;
                    return e
                },
                makeArray: function(e, t) {
                    var n = t || [];
                    return null != e && (p(Object(e)) ? S.merge(n, "string" == typeof e ? [e] : e) : u.call(n, e)), n
                },
                inArray: function(e, t, n) {
                    return null == t ? -1 : i.call(t, e, n)
                },
                merge: function(e, t) {
                    for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
                    return e.length = i, e
                },
                grep: function(e, t, n) {
                    for (var r = [], i = 0, o = e.length, a = !n; i < o; i++) !t(e[i], i) !== a && r.push(e[i]);
                    return r
                },
                map: function(e, t, n) {
                    var r, i, o = 0,
                        a = [];
                    if (p(e))
                        for (r = e.length; o < r; o++) null != (i = t(e[o], o, n)) && a.push(i);
                    else
                        for (o in e) null != (i = t(e[o], o, n)) && a.push(i);
                    return g(a)
                },
                guid: 1,
                support: y
            }), "function" == typeof Symbol && (S.fn[Symbol.iterator] = t[Symbol.iterator]), S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) {
                n["[object " + t + "]"] = t.toLowerCase()
            });
            var d = function(n) {
                var e, d, b, o, i, h, f, g, w, u, l, T, C, a, E, v, s, c, y, S = "sizzle" + 1 * new Date,
                    p = n.document,
                    k = 0,
                    r = 0,
                    m = ue(),
                    x = ue(),
                    A = ue(),
                    N = ue(),
                    j = function(e, t) {
                        return e === t && (l = !0), 0
                    },
                    D = {}.hasOwnProperty,
                    t = [],
                    q = t.pop,
                    L = t.push,
                    H = t.push,
                    O = t.slice,
                    P = function(e, t) {
                        for (var n = 0, r = e.length; n < r; n++)
                            if (e[n] === t) return n;
                        return -1
                    },
                    R = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    M = "[\\x20\\t\\r\\n\\f]",
                    I = "(?:\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
                    W = "\\[" + M + "*(" + I + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + I + "))|)" + M + "*\\]",
                    F = ":(" + I + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + W + ")*)|.*)\\)|)",
                    B = new RegExp(M + "+", "g"),
                    $ = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
                    _ = new RegExp("^" + M + "*," + M + "*"),
                    z = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
                    U = new RegExp(M + "|>"),
                    X = new RegExp(F),
                    V = new RegExp("^" + I + "$"),
                    G = {
                        ID: new RegExp("^#(" + I + ")"),
                        CLASS: new RegExp("^\\.(" + I + ")"),
                        TAG: new RegExp("^(" + I + "|[*])"),
                        ATTR: new RegExp("^" + W),
                        PSEUDO: new RegExp("^" + F),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + R + ")$", "i"),
                        needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
                    },
                    Y = /HTML$/i,
                    Q = /^(?:input|select|textarea|button)$/i,
                    J = /^h\d$/i,
                    K = /^[^{]+\{\s*\[native \w/,
                    Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    ee = /[+~]/,
                    te = new RegExp("\\\\[\\da-fA-F]{1,6}" + M + "?|\\\\([^\\r\\n\\f])", "g"),
                    ne = function(e, t) {
                        var n = "0x" + e.slice(1) - 65536;
                        return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320))
                    },
                    re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                    ie = function(e, t) {
                        return t ? "\0" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                    },
                    oe = function() {
                        T()
                    },
                    ae = be(function(e) {
                        return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase()
                    }, {
                        dir: "parentNode",
                        next: "legend"
                    });
                try {
                    H.apply(t = O.call(p.childNodes), p.childNodes), t[p.childNodes.length].nodeType
                } catch (e) {
                    H = {
                        apply: t.length ? function(e, t) {
                            L.apply(e, O.call(t))
                        } : function(e, t) {
                            var n = e.length,
                                r = 0;
                            while (e[n++] = t[r++]);
                            e.length = n - 1
                        }
                    }
                }

                function se(t, e, n, r) {
                    var i, o, a, s, u, l, c, f = e && e.ownerDocument,
                        p = e ? e.nodeType : 9;
                    if (n = n || [], "string" != typeof t || !t || 1 !== p && 9 !== p && 11 !== p) return n;
                    if (!r && (T(e), e = e || C, E)) {
                        if (11 !== p && (u = Z.exec(t)))
                            if (i = u[1]) {
                                if (9 === p) {
                                    if (!(a = e.getElementById(i))) return n;
                                    if (a.id === i) return n.push(a), n
                                } else if (f && (a = f.getElementById(i)) && y(e, a) && a.id === i) return n.push(a), n
                            } else {
                                if (u[2]) return H.apply(n, e.getElementsByTagName(t)), n;
                                if ((i = u[3]) && d.getElementsByClassName && e.getElementsByClassName) return H.apply(n, e.getElementsByClassName(i)), n
                            } if (d.qsa && !N[t + " "] && (!v || !v.test(t)) && (1 !== p || "object" !== e.nodeName.toLowerCase())) {
                            if (c = t, f = e, 1 === p && (U.test(t) || z.test(t))) {
                                (f = ee.test(t) && ye(e.parentNode) || e) === e && d.scope || ((s = e.getAttribute("id")) ? s = s.replace(re, ie) : e.setAttribute("id", s = S)), o = (l = h(t)).length;
                                while (o--) l[o] = (s ? "#" + s : ":scope") + " " + xe(l[o]);
                                c = l.join(",")
                            }
                            try {
                                return H.apply(n, f.querySelectorAll(c)), n
                            } catch (e) {
                                N(t, !0)
                            } finally {
                                s === S && e.removeAttribute("id")
                            }
                        }
                    }
                    return g(t.replace($, "$1"), e, n, r)
                }

                function ue() {
                    var r = [];
                    return function e(t, n) {
                        return r.push(t + " ") > b.cacheLength && delete e[r.shift()], e[t + " "] = n
                    }
                }

                function le(e) {
                    return e[S] = !0, e
                }

                function ce(e) {
                    var t = C.createElement("fieldset");
                    try {
                        return !!e(t)
                    } catch (e) {
                        return !1
                    } finally {
                        t.parentNode && t.parentNode.removeChild(t), t = null
                    }
                }

                function fe(e, t) {
                    var n = e.split("|"),
                        r = n.length;
                    while (r--) b.attrHandle[n[r]] = t
                }

                function pe(e, t) {
                    var n = t && e,
                        r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                    if (r) return r;
                    if (n)
                        while (n = n.nextSibling)
                            if (n === t) return -1;
                    return e ? 1 : -1
                }

                function de(t) {
                    return function(e) {
                        return "input" === e.nodeName.toLowerCase() && e.type === t
                    }
                }

                function he(n) {
                    return function(e) {
                        var t = e.nodeName.toLowerCase();
                        return ("input" === t || "button" === t) && e.type === n
                    }
                }

                function ge(t) {
                    return function(e) {
                        return "form" in e ? e.parentNode && !1 === e.disabled ? "label" in e ? "label" in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && ae(e) === t : e.disabled === t : "label" in e && e.disabled === t
                    }
                }

                function ve(a) {
                    return le(function(o) {
                        return o = +o, le(function(e, t) {
                            var n, r = a([], e.length, o),
                                i = r.length;
                            while (i--) e[n = r[i]] && (e[n] = !(t[n] = e[n]))
                        })
                    })
                }

                function ye(e) {
                    return e && "undefined" != typeof e.getElementsByTagName && e
                }
                for (e in d = se.support = {}, i = se.isXML = function(e) {
                        var t = e && e.namespaceURI,
                            n = e && (e.ownerDocument || e).documentElement;
                        return !Y.test(t || n && n.nodeName || "HTML")
                    }, T = se.setDocument = function(e) {
                        var t, n, r = e ? e.ownerDocument || e : p;
                        return r != C && 9 === r.nodeType && r.documentElement && (a = (C = r).documentElement, E = !i(C), p != C && (n = C.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", oe, !1) : n.attachEvent && n.attachEvent("onunload", oe)), d.scope = ce(function(e) {
                            return a.appendChild(e).appendChild(C.createElement("div")), "undefined" != typeof e.querySelectorAll && !e.querySelectorAll(":scope fieldset div").length
                        }), d.attributes = ce(function(e) {
                            return e.className = "i", !e.getAttribute("className")
                        }), d.getElementsByTagName = ce(function(e) {
                            return e.appendChild(C.createComment("")), !e.getElementsByTagName("*").length
                        }), d.getElementsByClassName = K.test(C.getElementsByClassName), d.getById = ce(function(e) {
                            return a.appendChild(e).id = S, !C.getElementsByName || !C.getElementsByName(S).length
                        }), d.getById ? (b.filter.ID = function(e) {
                            var t = e.replace(te, ne);
                            return function(e) {
                                return e.getAttribute("id") === t
                            }
                        }, b.find.ID = function(e, t) {
                            if ("undefined" != typeof t.getElementById && E) {
                                var n = t.getElementById(e);
                                return n ? [n] : []
                            }
                        }) : (b.filter.ID = function(e) {
                            var n = e.replace(te, ne);
                            return function(e) {
                                var t = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
                                return t && t.value === n
                            }
                        }, b.find.ID = function(e, t) {
                            if ("undefined" != typeof t.getElementById && E) {
                                var n, r, i, o = t.getElementById(e);
                                if (o) {
                                    if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                                    i = t.getElementsByName(e), r = 0;
                                    while (o = i[r++])
                                        if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                                }
                                return []
                            }
                        }), b.find.TAG = d.getElementsByTagName ? function(e, t) {
                            return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : d.qsa ? t.querySelectorAll(e) : void 0
                        } : function(e, t) {
                            var n, r = [],
                                i = 0,
                                o = t.getElementsByTagName(e);
                            if ("*" === e) {
                                while (n = o[i++]) 1 === n.nodeType && r.push(n);
                                return r
                            }
                            return o
                        }, b.find.CLASS = d.getElementsByClassName && function(e, t) {
                            if ("undefined" != typeof t.getElementsByClassName && E) return t.getElementsByClassName(e)
                        }, s = [], v = [], (d.qsa = K.test(C.querySelectorAll)) && (ce(function(e) {
                            var t;
                            a.appendChild(e).innerHTML = "<a id='" + S + "'></a><select id='" + S + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && v.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || v.push("\\[" + M + "*(?:value|" + R + ")"), e.querySelectorAll("[id~=" + S + "-]").length || v.push("~="), (t = C.createElement("input")).setAttribute("name", ""), e.appendChild(t), e.querySelectorAll("[name='']").length || v.push("\\[" + M + "*name" + M + "*=" + M + "*(?:''|\"\")"), e.querySelectorAll(":checked").length || v.push(":checked"), e.querySelectorAll("a#" + S + "+*").length || v.push(".#.+[+~]"), e.querySelectorAll("\\\f"), v.push("[\\r\\n\\f]")
                        }), ce(function(e) {
                            e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                            var t = C.createElement("input");
                            t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && v.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && v.push(":enabled", ":disabled"), a.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && v.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), v.push(",.*:")
                        })), (d.matchesSelector = K.test(c = a.matches || a.webkitMatchesSelector || a.mozMatchesSelector || a.oMatchesSelector || a.msMatchesSelector)) && ce(function(e) {
                            d.disconnectedMatch = c.call(e, "*"), c.call(e, "[s!='']:x"), s.push("!=", F)
                        }), v = v.length && new RegExp(v.join("|")), s = s.length && new RegExp(s.join("|")), t = K.test(a.compareDocumentPosition), y = t || K.test(a.contains) ? function(e, t) {
                            var n = 9 === e.nodeType ? e.documentElement : e,
                                r = t && t.parentNode;
                            return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                        } : function(e, t) {
                            if (t)
                                while (t = t.parentNode)
                                    if (t === e) return !0;
                            return !1
                        }, j = t ? function(e, t) {
                            if (e === t) return l = !0, 0;
                            var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                            return n || (1 & (n = (e.ownerDocument || e) == (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !d.sortDetached && t.compareDocumentPosition(e) === n ? e == C || e.ownerDocument == p && y(p, e) ? -1 : t == C || t.ownerDocument == p && y(p, t) ? 1 : u ? P(u, e) - P(u, t) : 0 : 4 & n ? -1 : 1)
                        } : function(e, t) {
                            if (e === t) return l = !0, 0;
                            var n, r = 0,
                                i = e.parentNode,
                                o = t.parentNode,
                                a = [e],
                                s = [t];
                            if (!i || !o) return e == C ? -1 : t == C ? 1 : i ? -1 : o ? 1 : u ? P(u, e) - P(u, t) : 0;
                            if (i === o) return pe(e, t);
                            n = e;
                            while (n = n.parentNode) a.unshift(n);
                            n = t;
                            while (n = n.parentNode) s.unshift(n);
                            while (a[r] === s[r]) r++;
                            return r ? pe(a[r], s[r]) : a[r] == p ? -1 : s[r] == p ? 1 : 0
                        }), C
                    }, se.matches = function(e, t) {
                        return se(e, null, null, t)
                    }, se.matchesSelector = function(e, t) {
                        if (T(e), d.matchesSelector && E && !N[t + " "] && (!s || !s.test(t)) && (!v || !v.test(t))) try {
                            var n = c.call(e, t);
                            if (n || d.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n
                        } catch (e) {
                            N(t, !0)
                        }
                        return 0 < se(t, C, null, [e]).length
                    }, se.contains = function(e, t) {
                        return (e.ownerDocument || e) != C && T(e), y(e, t)
                    }, se.attr = function(e, t) {
                        (e.ownerDocument || e) != C && T(e);
                        var n = b.attrHandle[t.toLowerCase()],
                            r = n && D.call(b.attrHandle, t.toLowerCase()) ? n(e, t, !E) : void 0;
                        return void 0 !== r ? r : d.attributes || !E ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
                    }, se.escape = function(e) {
                        return (e + "").replace(re, ie)
                    }, se.error = function(e) {
                        throw new Error("Syntax error, unrecognized expression: " + e)
                    }, se.uniqueSort = function(e) {
                        var t, n = [],
                            r = 0,
                            i = 0;
                        if (l = !d.detectDuplicates, u = !d.sortStable && e.slice(0), e.sort(j), l) {
                            while (t = e[i++]) t === e[i] && (r = n.push(i));
                            while (r--) e.splice(n[r], 1)
                        }
                        return u = null, e
                    }, o = se.getText = function(e) {
                        var t, n = "",
                            r = 0,
                            i = e.nodeType;
                        if (i) {
                            if (1 === i || 9 === i || 11 === i) {
                                if ("string" == typeof e.textContent) return e.textContent;
                                for (e = e.firstChild; e; e = e.nextSibling) n += o(e)
                            } else if (3 === i || 4 === i) return e.nodeValue
                        } else
                            while (t = e[r++]) n += o(t);
                        return n
                    }, (b = se.selectors = {
                        cacheLength: 50,
                        createPseudo: le,
                        match: G,
                        attrHandle: {},
                        find: {},
                        relative: {
                            ">": {
                                dir: "parentNode",
                                first: !0
                            },
                            " ": {
                                dir: "parentNode"
                            },
                            "+": {
                                dir: "previousSibling",
                                first: !0
                            },
                            "~": {
                                dir: "previousSibling"
                            }
                        },
                        preFilter: {
                            ATTR: function(e) {
                                return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                            },
                            CHILD: function(e) {
                                return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || se.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && se.error(e[0]), e
                            },
                            PSEUDO: function(e) {
                                var t, n = !e[6] && e[2];
                                return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = h(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                            }
                        },
                        filter: {
                            TAG: function(e) {
                                var t = e.replace(te, ne).toLowerCase();
                                return "*" === e ? function() {
                                    return !0
                                } : function(e) {
                                    return e.nodeName && e.nodeName.toLowerCase() === t
                                }
                            },
                            CLASS: function(e) {
                                var t = m[e + " "];
                                return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && m(e, function(e) {
                                    return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
                                })
                            },
                            ATTR: function(n, r, i) {
                                return function(e) {
                                    var t = se.attr(e, n);
                                    return null == t ? "!=" === r : !r || (t += "", "=" === r ? t === i : "!=" === r ? t !== i : "^=" === r ? i && 0 === t.indexOf(i) : "*=" === r ? i && -1 < t.indexOf(i) : "$=" === r ? i && t.slice(-i.length) === i : "~=" === r ? -1 < (" " + t.replace(B, " ") + " ").indexOf(i) : "|=" === r && (t === i || t.slice(0, i.length + 1) === i + "-"))
                                }
                            },
                            CHILD: function(h, e, t, g, v) {
                                var y = "nth" !== h.slice(0, 3),
                                    m = "last" !== h.slice(-4),
                                    x = "of-type" === e;
                                return 1 === g && 0 === v ? function(e) {
                                    return !!e.parentNode
                                } : function(e, t, n) {
                                    var r, i, o, a, s, u, l = y !== m ? "nextSibling" : "previousSibling",
                                        c = e.parentNode,
                                        f = x && e.nodeName.toLowerCase(),
                                        p = !n && !x,
                                        d = !1;
                                    if (c) {
                                        if (y) {
                                            while (l) {
                                                a = e;
                                                while (a = a[l])
                                                    if (x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) return !1;
                                                u = l = "only" === h && !u && "nextSibling"
                                            }
                                            return !0
                                        }
                                        if (u = [m ? c.firstChild : c.lastChild], m && p) {
                                            d = (s = (r = (i = (o = (a = c)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]) && r[2], a = s && c.childNodes[s];
                                            while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                                if (1 === a.nodeType && ++d && a === e) {
                                                    i[h] = [k, s, d];
                                                    break
                                                }
                                        } else if (p && (d = s = (r = (i = (o = (a = e)[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] || [])[0] === k && r[1]), !1 === d)
                                            while (a = ++s && a && a[l] || (d = s = 0) || u.pop())
                                                if ((x ? a.nodeName.toLowerCase() === f : 1 === a.nodeType) && ++d && (p && ((i = (o = a[S] || (a[S] = {}))[a.uniqueID] || (o[a.uniqueID] = {}))[h] = [k, d]), a === e)) break;
                                        return (d -= v) === g || d % g == 0 && 0 <= d / g
                                    }
                                }
                            },
                            PSEUDO: function(e, o) {
                                var t, a = b.pseudos[e] || b.setFilters[e.toLowerCase()] || se.error("unsupported pseudo: " + e);
                                return a[S] ? a(o) : 1 < a.length ? (t = [e, e, "", o], b.setFilters.hasOwnProperty(e.toLowerCase()) ? le(function(e, t) {
                                    var n, r = a(e, o),
                                        i = r.length;
                                    while (i--) e[n = P(e, r[i])] = !(t[n] = r[i])
                                }) : function(e) {
                                    return a(e, 0, t)
                                }) : a
                            }
                        },
                        pseudos: {
                            not: le(function(e) {
                                var r = [],
                                    i = [],
                                    s = f(e.replace($, "$1"));
                                return s[S] ? le(function(e, t, n, r) {
                                    var i, o = s(e, null, r, []),
                                        a = e.length;
                                    while (a--)(i = o[a]) && (e[a] = !(t[a] = i))
                                }) : function(e, t, n) {
                                    return r[0] = e, s(r, null, n, i), r[0] = null, !i.pop()
                                }
                            }),
                            has: le(function(t) {
                                return function(e) {
                                    return 0 < se(t, e).length
                                }
                            }),
                            contains: le(function(t) {
                                return t = t.replace(te, ne),
                                    function(e) {
                                        return -1 < (e.textContent || o(e)).indexOf(t)
                                    }
                            }),
                            lang: le(function(n) {
                                return V.test(n || "") || se.error("unsupported lang: " + n), n = n.replace(te, ne).toLowerCase(),
                                    function(e) {
                                        var t;
                                        do {
                                            if (t = E ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return (t = t.toLowerCase()) === n || 0 === t.indexOf(n + "-")
                                        } while ((e = e.parentNode) && 1 === e.nodeType);
                                        return !1
                                    }
                            }),
                            target: function(e) {
                                var t = n.location && n.location.hash;
                                return t && t.slice(1) === e.id
                            },
                            root: function(e) {
                                return e === a
                            },
                            focus: function(e) {
                                return e === C.activeElement && (!C.hasFocus || C.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                            },
                            enabled: ge(!1),
                            disabled: ge(!0),
                            checked: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && !!e.checked || "option" === t && !!e.selected
                            },
                            selected: function(e) {
                                return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                            },
                            empty: function(e) {
                                for (e = e.firstChild; e; e = e.nextSibling)
                                    if (e.nodeType < 6) return !1;
                                return !0
                            },
                            parent: function(e) {
                                return !b.pseudos.empty(e)
                            },
                            header: function(e) {
                                return J.test(e.nodeName)
                            },
                            input: function(e) {
                                return Q.test(e.nodeName)
                            },
                            button: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && "button" === e.type || "button" === t
                            },
                            text: function(e) {
                                var t;
                                return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                            },
                            first: ve(function() {
                                return [0]
                            }),
                            last: ve(function(e, t) {
                                return [t - 1]
                            }),
                            eq: ve(function(e, t, n) {
                                return [n < 0 ? n + t : n]
                            }),
                            even: ve(function(e, t) {
                                for (var n = 0; n < t; n += 2) e.push(n);
                                return e
                            }),
                            odd: ve(function(e, t) {
                                for (var n = 1; n < t; n += 2) e.push(n);
                                return e
                            }),
                            lt: ve(function(e, t, n) {
                                for (var r = n < 0 ? n + t : t < n ? t : n; 0 <= --r;) e.push(r);
                                return e
                            }),
                            gt: ve(function(e, t, n) {
                                for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                                return e
                            })
                        }
                    }).pseudos.nth = b.pseudos.eq, {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) b.pseudos[e] = de(e);
                for (e in {
                        submit: !0,
                        reset: !0
                    }) b.pseudos[e] = he(e);

                function me() {}

                function xe(e) {
                    for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
                    return r
                }

                function be(s, e, t) {
                    var u = e.dir,
                        l = e.next,
                        c = l || u,
                        f = t && "parentNode" === c,
                        p = r++;
                    return e.first ? function(e, t, n) {
                        while (e = e[u])
                            if (1 === e.nodeType || f) return s(e, t, n);
                        return !1
                    } : function(e, t, n) {
                        var r, i, o, a = [k, p];
                        if (n) {
                            while (e = e[u])
                                if ((1 === e.nodeType || f) && s(e, t, n)) return !0
                        } else
                            while (e = e[u])
                                if (1 === e.nodeType || f)
                                    if (i = (o = e[S] || (e[S] = {}))[e.uniqueID] || (o[e.uniqueID] = {}), l && l === e.nodeName.toLowerCase()) e = e[u] || e;
                                    else {
                                        if ((r = i[c]) && r[0] === k && r[1] === p) return a[2] = r[2];
                                        if ((i[c] = a)[2] = s(e, t, n)) return !0
                                    } return !1
                    }
                }

                function we(i) {
                    return 1 < i.length ? function(e, t, n) {
                        var r = i.length;
                        while (r--)
                            if (!i[r](e, t, n)) return !1;
                        return !0
                    } : i[0]
                }

                function Te(e, t, n, r, i) {
                    for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s)));
                    return a
                }

                function Ce(d, h, g, v, y, e) {
                    return v && !v[S] && (v = Ce(v)), y && !y[S] && (y = Ce(y, e)), le(function(e, t, n, r) {
                        var i, o, a, s = [],
                            u = [],
                            l = t.length,
                            c = e || function(e, t, n) {
                                for (var r = 0, i = t.length; r < i; r++) se(e, t[r], n);
                                return n
                            }(h || "*", n.nodeType ? [n] : n, []),
                            f = !d || !e && h ? c : Te(c, s, d, n, r),
                            p = g ? y || (e ? d : l || v) ? [] : t : f;
                        if (g && g(f, p, n, r), v) {
                            i = Te(p, u), v(i, [], n, r), o = i.length;
                            while (o--)(a = i[o]) && (p[u[o]] = !(f[u[o]] = a))
                        }
                        if (e) {
                            if (y || d) {
                                if (y) {
                                    i = [], o = p.length;
                                    while (o--)(a = p[o]) && i.push(f[o] = a);
                                    y(null, p = [], i, r)
                                }
                                o = p.length;
                                while (o--)(a = p[o]) && -1 < (i = y ? P(e, a) : s[o]) && (e[i] = !(t[i] = a))
                            }
                        } else p = Te(p === t ? p.splice(l, p.length) : p), y ? y(null, t, p, r) : H.apply(t, p)
                    })
                }

                function Ee(e) {
                    for (var i, t, n, r = e.length, o = b.relative[e[0].type], a = o || b.relative[" "], s = o ? 1 : 0, u = be(function(e) {
                            return e === i
                        }, a, !0), l = be(function(e) {
                            return -1 < P(i, e)
                        }, a, !0), c = [function(e, t, n) {
                            var r = !o && (n || t !== w) || ((i = t).nodeType ? u(e, t, n) : l(e, t, n));
                            return i = null, r
                        }]; s < r; s++)
                        if (t = b.relative[e[s].type]) c = [be(we(c), t)];
                        else {
                            if ((t = b.filter[e[s].type].apply(null, e[s].matches))[S]) {
                                for (n = ++s; n < r; n++)
                                    if (b.relative[e[n].type]) break;
                                return Ce(1 < s && we(c), 1 < s && xe(e.slice(0, s - 1).concat({
                                    value: " " === e[s - 2].type ? "*" : ""
                                })).replace($, "$1"), t, s < n && Ee(e.slice(s, n)), n < r && Ee(e = e.slice(n)), n < r && xe(e))
                            }
                            c.push(t)
                        } return we(c)
                }
                return me.prototype = b.filters = b.pseudos, b.setFilters = new me, h = se.tokenize = function(e, t) {
                    var n, r, i, o, a, s, u, l = x[e + " "];
                    if (l) return t ? 0 : l.slice(0);
                    a = e, s = [], u = b.preFilter;
                    while (a) {
                        for (o in n && !(r = _.exec(a)) || (r && (a = a.slice(r[0].length) || a), s.push(i = [])), n = !1, (r = z.exec(a)) && (n = r.shift(), i.push({
                                value: n,
                                type: r[0].replace($, " ")
                            }), a = a.slice(n.length)), b.filter) !(r = G[o].exec(a)) || u[o] && !(r = u[o](r)) || (n = r.shift(), i.push({
                            value: n,
                            type: o,
                            matches: r
                        }), a = a.slice(n.length));
                        if (!n) break
                    }
                    return t ? a.length : a ? se.error(e) : x(e, s).slice(0)
                }, f = se.compile = function(e, t) {
                    var n, v, y, m, x, r, i = [],
                        o = [],
                        a = A[e + " "];
                    if (!a) {
                        t || (t = h(e)), n = t.length;
                        while (n--)(a = Ee(t[n]))[S] ? i.push(a) : o.push(a);
                        (a = A(e, (v = o, m = 0 < (y = i).length, x = 0 < v.length, r = function(e, t, n, r, i) {
                            var o, a, s, u = 0,
                                l = "0",
                                c = e && [],
                                f = [],
                                p = w,
                                d = e || x && b.find.TAG("*", i),
                                h = k += null == p ? 1 : Math.random() || .1,
                                g = d.length;
                            for (i && (w = t == C || t || i); l !== g && null != (o = d[l]); l++) {
                                if (x && o) {
                                    a = 0, t || o.ownerDocument == C || (T(o), n = !E);
                                    while (s = v[a++])
                                        if (s(o, t || C, n)) {
                                            r.push(o);
                                            break
                                        } i && (k = h)
                                }
                                m && ((o = !s && o) && u--, e && c.push(o))
                            }
                            if (u += l, m && l !== u) {
                                a = 0;
                                while (s = y[a++]) s(c, f, t, n);
                                if (e) {
                                    if (0 < u)
                                        while (l--) c[l] || f[l] || (f[l] = q.call(r));
                                    f = Te(f)
                                }
                                H.apply(r, f), i && !e && 0 < f.length && 1 < u + y.length && se.uniqueSort(r)
                            }
                            return i && (k = h, w = p), c
                        }, m ? le(r) : r))).selector = e
                    }
                    return a
                }, g = se.select = function(e, t, n, r) {
                    var i, o, a, s, u, l = "function" == typeof e && e,
                        c = !r && h(e = l.selector || e);
                    if (n = n || [], 1 === c.length) {
                        if (2 < (o = c[0] = c[0].slice(0)).length && "ID" === (a = o[0]).type && 9 === t.nodeType && E && b.relative[o[1].type]) {
                            if (!(t = (b.find.ID(a.matches[0].replace(te, ne), t) || [])[0])) return n;
                            l && (t = t.parentNode), e = e.slice(o.shift().value.length)
                        }
                        i = G.needsContext.test(e) ? 0 : o.length;
                        while (i--) {
                            if (a = o[i], b.relative[s = a.type]) break;
                            if ((u = b.find[s]) && (r = u(a.matches[0].replace(te, ne), ee.test(o[0].type) && ye(t.parentNode) || t))) {
                                if (o.splice(i, 1), !(e = r.length && xe(o))) return H.apply(n, r), n;
                                break
                            }
                        }
                    }
                    return (l || f(e, c))(r, t, !E, n, !t || ee.test(e) && ye(t.parentNode) || t), n
                }, d.sortStable = S.split("").sort(j).join("") === S, d.detectDuplicates = !!l, T(), d.sortDetached = ce(function(e) {
                    return 1 & e.compareDocumentPosition(C.createElement("fieldset"))
                }), ce(function(e) {
                    return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
                }) || fe("type|href|height|width", function(e, t, n) {
                    if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
                }), d.attributes && ce(function(e) {
                    return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
                }) || fe("value", function(e, t, n) {
                    if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
                }), ce(function(e) {
                    return null == e.getAttribute("disabled")
                }) || fe(R, function(e, t, n) {
                    var r;
                    if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
                }), se
            }(C);
            S.find = d, S.expr = d.selectors, S.expr[":"] = S.expr.pseudos, S.uniqueSort = S.unique = d.uniqueSort, S.text = d.getText, S.isXMLDoc = d.isXML, S.contains = d.contains, S.escapeSelector = d.escape;
            var h = function(e, t, n) {
                    var r = [],
                        i = void 0 !== n;
                    while ((e = e[t]) && 9 !== e.nodeType)
                        if (1 === e.nodeType) {
                            if (i && S(e).is(n)) break;
                            r.push(e)
                        } return r
                },
                T = function(e, t) {
                    for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
                    return n
                },
                k = S.expr.match.needsContext;

            function A(e, t) {
                return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
            }
            var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

            function j(e, n, r) {
                return m(n) ? S.grep(e, function(e, t) {
                    return !!n.call(e, t, e) !== r
                }) : n.nodeType ? S.grep(e, function(e) {
                    return e === n !== r
                }) : "string" != typeof n ? S.grep(e, function(e) {
                    return -1 < i.call(n, e) !== r
                }) : S.filter(n, e, r)
            }
            S.filter = function(e, t, n) {
                var r = t[0];
                return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? S.find.matchesSelector(r, e) ? [r] : [] : S.find.matches(e, S.grep(t, function(e) {
                    return 1 === e.nodeType
                }))
            }, S.fn.extend({
                find: function(e) {
                    var t, n, r = this.length,
                        i = this;
                    if ("string" != typeof e) return this.pushStack(S(e).filter(function() {
                        for (t = 0; t < r; t++)
                            if (S.contains(i[t], this)) return !0
                    }));
                    for (n = this.pushStack([]), t = 0; t < r; t++) S.find(e, i[t], n);
                    return 1 < r ? S.uniqueSort(n) : n
                },
                filter: function(e) {
                    return this.pushStack(j(this, e || [], !1))
                },
                not: function(e) {
                    return this.pushStack(j(this, e || [], !0))
                },
                is: function(e) {
                    return !!j(this, "string" == typeof e && k.test(e) ? S(e) : e || [], !1).length
                }
            });
            var D, q = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
            (S.fn.init = function(e, t, n) {
                var r, i;
                if (!e) return this;
                if (n = n || D, "string" == typeof e) {
                    if (!(r = "<" === e[0] && ">" === e[e.length - 1] && 3 <= e.length ? [null, e, null] : q.exec(e)) || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                    if (r[1]) {
                        if (t = t instanceof S ? t[0] : t, S.merge(this, S.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : E, !0)), N.test(r[1]) && S.isPlainObject(t))
                            for (r in t) m(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                        return this
                    }
                    return (i = E.getElementById(r[2])) && (this[0] = i, this.length = 1), this
                }
                return e.nodeType ? (this[0] = e, this.length = 1, this) : m(e) ? void 0 !== n.ready ? n.ready(e) : e(S) : S.makeArray(e, this)
            }).prototype = S.fn, D = S(E);
            var L = /^(?:parents|prev(?:Until|All))/,
                H = {
                    children: !0,
                    contents: !0,
                    next: !0,
                    prev: !0
                };

            function O(e, t) {
                while ((e = e[t]) && 1 !== e.nodeType);
                return e
            }
            S.fn.extend({
                has: function(e) {
                    var t = S(e, this),
                        n = t.length;
                    return this.filter(function() {
                        for (var e = 0; e < n; e++)
                            if (S.contains(this, t[e])) return !0
                    })
                },
                closest: function(e, t) {
                    var n, r = 0,
                        i = this.length,
                        o = [],
                        a = "string" != typeof e && S(e);
                    if (!k.test(e))
                        for (; r < i; r++)
                            for (n = this[r]; n && n !== t; n = n.parentNode)
                                if (n.nodeType < 11 && (a ? -1 < a.index(n) : 1 === n.nodeType && S.find.matchesSelector(n, e))) {
                                    o.push(n);
                                    break
                                } return this.pushStack(1 < o.length ? S.uniqueSort(o) : o)
                },
                index: function(e) {
                    return e ? "string" == typeof e ? i.call(S(e), this[0]) : i.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                },
                add: function(e, t) {
                    return this.pushStack(S.uniqueSort(S.merge(this.get(), S(e, t))))
                },
                addBack: function(e) {
                    return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
                }
            }), S.each({
                parent: function(e) {
                    var t = e.parentNode;
                    return t && 11 !== t.nodeType ? t : null
                },
                parents: function(e) {
                    return h(e, "parentNode")
                },
                parentsUntil: function(e, t, n) {
                    return h(e, "parentNode", n)
                },
                next: function(e) {
                    return O(e, "nextSibling")
                },
                prev: function(e) {
                    return O(e, "previousSibling")
                },
                nextAll: function(e) {
                    return h(e, "nextSibling")
                },
                prevAll: function(e) {
                    return h(e, "previousSibling")
                },
                nextUntil: function(e, t, n) {
                    return h(e, "nextSibling", n)
                },
                prevUntil: function(e, t, n) {
                    return h(e, "previousSibling", n)
                },
                siblings: function(e) {
                    return T((e.parentNode || {}).firstChild, e)
                },
                children: function(e) {
                    return T(e.firstChild)
                },
                contents: function(e) {
                    return null != e.contentDocument && r(e.contentDocument) ? e.contentDocument : (A(e, "template") && (e = e.content || e), S.merge([], e.childNodes))
                }
            }, function(r, i) {
                S.fn[r] = function(e, t) {
                    var n = S.map(this, i, e);
                    return "Until" !== r.slice(-5) && (t = e), t && "string" == typeof t && (n = S.filter(t, n)), 1 < this.length && (H[r] || S.uniqueSort(n), L.test(r) && n.reverse()), this.pushStack(n)
                }
            });
            var P = /[^\x20\t\r\n\f]+/g;

            function R(e) {
                return e
            }

            function M(e) {
                throw e
            }

            function I(e, t, n, r) {
                var i;
                try {
                    e && m(i = e.promise) ? i.call(e).done(t).fail(n) : e && m(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
                } catch (e) {
                    n.apply(void 0, [e])
                }
            }
            S.Callbacks = function(r) {
                var e, n;
                r = "string" == typeof r ? (e = r, n = {}, S.each(e.match(P) || [], function(e, t) {
                    n[t] = !0
                }), n) : S.extend({}, r);
                var i, t, o, a, s = [],
                    u = [],
                    l = -1,
                    c = function() {
                        for (a = a || r.once, o = i = !0; u.length; l = -1) {
                            t = u.shift();
                            while (++l < s.length) !1 === s[l].apply(t[0], t[1]) && r.stopOnFalse && (l = s.length, t = !1)
                        }
                        r.memory || (t = !1), i = !1, a && (s = t ? [] : "")
                    },
                    f = {
                        add: function() {
                            return s && (t && !i && (l = s.length - 1, u.push(t)), function n(e) {
                                S.each(e, function(e, t) {
                                    m(t) ? r.unique && f.has(t) || s.push(t) : t && t.length && "string" !== w(t) && n(t)
                                })
                            }(arguments), t && !i && c()), this
                        },
                        remove: function() {
                            return S.each(arguments, function(e, t) {
                                var n;
                                while (-1 < (n = S.inArray(t, s, n))) s.splice(n, 1), n <= l && l--
                            }), this
                        },
                        has: function(e) {
                            return e ? -1 < S.inArray(e, s) : 0 < s.length
                        },
                        empty: function() {
                            return s && (s = []), this
                        },
                        disable: function() {
                            return a = u = [], s = t = "", this
                        },
                        disabled: function() {
                            return !s
                        },
                        lock: function() {
                            return a = u = [], t || i || (s = t = ""), this
                        },
                        locked: function() {
                            return !!a
                        },
                        fireWith: function(e, t) {
                            return a || (t = [e, (t = t || []).slice ? t.slice() : t], u.push(t), i || c()), this
                        },
                        fire: function() {
                            return f.fireWith(this, arguments), this
                        },
                        fired: function() {
                            return !!o
                        }
                    };
                return f
            }, S.extend({
                Deferred: function(e) {
                    var o = [
                            ["notify", "progress", S.Callbacks("memory"), S.Callbacks("memory"), 2],
                            ["resolve", "done", S.Callbacks("once memory"), S.Callbacks("once memory"), 0, "resolved"],
                            ["reject", "fail", S.Callbacks("once memory"), S.Callbacks("once memory"), 1, "rejected"]
                        ],
                        i = "pending",
                        a = {
                            state: function() {
                                return i
                            },
                            always: function() {
                                return s.done(arguments).fail(arguments), this
                            },
                            "catch": function(e) {
                                return a.then(null, e)
                            },
                            pipe: function() {
                                var i = arguments;
                                return S.Deferred(function(r) {
                                    S.each(o, function(e, t) {
                                        var n = m(i[t[4]]) && i[t[4]];
                                        s[t[1]](function() {
                                            var e = n && n.apply(this, arguments);
                                            e && m(e.promise) ? e.promise().progress(r.notify).done(r.resolve).fail(r.reject) : r[t[0] + "With"](this, n ? [e] : arguments)
                                        })
                                    }), i = null
                                }).promise()
                            },
                            then: function(t, n, r) {
                                var u = 0;

                                function l(i, o, a, s) {
                                    return function() {
                                        var n = this,
                                            r = arguments,
                                            e = function() {
                                                var e, t;
                                                if (!(i < u)) {
                                                    if ((e = a.apply(n, r)) === o.promise()) throw new TypeError("Thenable self-resolution");
                                                    t = e && ("object" == typeof e || "function" == typeof e) && e.then, m(t) ? s ? t.call(e, l(u, o, R, s), l(u, o, M, s)) : (u++, t.call(e, l(u, o, R, s), l(u, o, M, s), l(u, o, R, o.notifyWith))) : (a !== R && (n = void 0, r = [e]), (s || o.resolveWith)(n, r))
                                                }
                                            },
                                            t = s ? e : function() {
                                                try {
                                                    e()
                                                } catch (e) {
                                                    S.Deferred.exceptionHook && S.Deferred.exceptionHook(e, t.stackTrace), u <= i + 1 && (a !== M && (n = void 0, r = [e]), o.rejectWith(n, r))
                                                }
                                            };
                                        i ? t() : (S.Deferred.getStackHook && (t.stackTrace = S.Deferred.getStackHook()), C.setTimeout(t))
                                    }
                                }
                                return S.Deferred(function(e) {
                                    o[0][3].add(l(0, e, m(r) ? r : R, e.notifyWith)), o[1][3].add(l(0, e, m(t) ? t : R)), o[2][3].add(l(0, e, m(n) ? n : M))
                                }).promise()
                            },
                            promise: function(e) {
                                return null != e ? S.extend(e, a) : a
                            }
                        },
                        s = {};
                    return S.each(o, function(e, t) {
                        var n = t[2],
                            r = t[5];
                        a[t[1]] = n.add, r && n.add(function() {
                            i = r
                        }, o[3 - e][2].disable, o[3 - e][3].disable, o[0][2].lock, o[0][3].lock), n.add(t[3].fire), s[t[0]] = function() {
                            return s[t[0] + "With"](this === s ? void 0 : this, arguments), this
                        }, s[t[0] + "With"] = n.fireWith
                    }), a.promise(s), e && e.call(s, s), s
                },
                when: function(e) {
                    var n = arguments.length,
                        t = n,
                        r = Array(t),
                        i = s.call(arguments),
                        o = S.Deferred(),
                        a = function(t) {
                            return function(e) {
                                r[t] = this, i[t] = 1 < arguments.length ? s.call(arguments) : e, --n || o.resolveWith(r, i)
                            }
                        };
                    if (n <= 1 && (I(e, o.done(a(t)).resolve, o.reject, !n), "pending" === o.state() || m(i[t] && i[t].then))) return o.then();
                    while (t--) I(i[t], a(t), o.reject);
                    return o.promise()
                }
            });
            var W = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
            S.Deferred.exceptionHook = function(e, t) {
                C.console && C.console.warn && e && W.test(e.name) && C.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t)
            }, S.readyException = function(e) {
                C.setTimeout(function() {
                    throw e
                })
            };
            var F = S.Deferred();

            function B() {
                E.removeEventListener("DOMContentLoaded", B), C.removeEventListener("load", B), S.ready()
            }
            S.fn.ready = function(e) {
                return F.then(e)["catch"](function(e) {
                    S.readyException(e)
                }), this
            }, S.extend({
                isReady: !1,
                readyWait: 1,
                ready: function(e) {
                    (!0 === e ? --S.readyWait : S.isReady) || (S.isReady = !0) !== e && 0 < --S.readyWait || F.resolveWith(E, [S])
                }
            }), S.ready.then = F.then, "complete" === E.readyState || "loading" !== E.readyState && !E.documentElement.doScroll ? C.setTimeout(S.ready) : (E.addEventListener("DOMContentLoaded", B), C.addEventListener("load", B));
            var $ = function(e, t, n, r, i, o, a) {
                    var s = 0,
                        u = e.length,
                        l = null == n;
                    if ("object" === w(n))
                        for (s in i = !0, n) $(e, t, s, n[s], !0, o, a);
                    else if (void 0 !== r && (i = !0, m(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function(e, t, n) {
                            return l.call(S(e), n)
                        })), t))
                        for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
                    return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
                },
                _ = /^-ms-/,
                z = /-([a-z])/g;

            function U(e, t) {
                return t.toUpperCase()
            }

            function X(e) {
                return e.replace(_, "ms-").replace(z, U)
            }
            var V = function(e) {
                return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
            };

            function G() {
                this.expando = S.expando + G.uid++
            }
            G.uid = 1, G.prototype = {
                cache: function(e) {
                    var t = e[this.expando];
                    return t || (t = {}, V(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                        value: t,
                        configurable: !0
                    }))), t
                },
                set: function(e, t, n) {
                    var r, i = this.cache(e);
                    if ("string" == typeof t) i[X(t)] = n;
                    else
                        for (r in t) i[X(r)] = t[r];
                    return i
                },
                get: function(e, t) {
                    return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][X(t)]
                },
                access: function(e, t, n) {
                    return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
                },
                remove: function(e, t) {
                    var n, r = e[this.expando];
                    if (void 0 !== r) {
                        if (void 0 !== t) {
                            n = (t = Array.isArray(t) ? t.map(X) : (t = X(t)) in r ? [t] : t.match(P) || []).length;
                            while (n--) delete r[t[n]]
                        }(void 0 === t || S.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                    }
                },
                hasData: function(e) {
                    var t = e[this.expando];
                    return void 0 !== t && !S.isEmptyObject(t)
                }
            };
            var Y = new G,
                Q = new G,
                J = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
                K = /[A-Z]/g;

            function Z(e, t, n) {
                var r, i;
                if (void 0 === n && 1 === e.nodeType)
                    if (r = "data-" + t.replace(K, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(r))) {
                        try {
                            n = "true" === (i = n) || "false" !== i && ("null" === i ? null : i === +i + "" ? +i : J.test(i) ? JSON.parse(i) : i)
                        } catch (e) {}
                        Q.set(e, t, n)
                    } else n = void 0;
                return n
            }
            S.extend({
                hasData: function(e) {
                    return Q.hasData(e) || Y.hasData(e)
                },
                data: function(e, t, n) {
                    return Q.access(e, t, n)
                },
                removeData: function(e, t) {
                    Q.remove(e, t)
                },
                _data: function(e, t, n) {
                    return Y.access(e, t, n)
                },
                _removeData: function(e, t) {
                    Y.remove(e, t)
                }
            }), S.fn.extend({
                data: function(n, e) {
                    var t, r, i, o = this[0],
                        a = o && o.attributes;
                    if (void 0 === n) {
                        if (this.length && (i = Q.get(o), 1 === o.nodeType && !Y.get(o, "hasDataAttrs"))) {
                            t = a.length;
                            while (t--) a[t] && 0 === (r = a[t].name).indexOf("data-") && (r = X(r.slice(5)), Z(o, r, i[r]));
                            Y.set(o, "hasDataAttrs", !0)
                        }
                        return i
                    }
                    return "object" == typeof n ? this.each(function() {
                        Q.set(this, n)
                    }) : $(this, function(e) {
                        var t;
                        if (o && void 0 === e) return void 0 !== (t = Q.get(o, n)) ? t : void 0 !== (t = Z(o, n)) ? t : void 0;
                        this.each(function() {
                            Q.set(this, n, e)
                        })
                    }, null, e, 1 < arguments.length, null, !0)
                },
                removeData: function(e) {
                    return this.each(function() {
                        Q.remove(this, e)
                    })
                }
            }), S.extend({
                queue: function(e, t, n) {
                    var r;
                    if (e) return t = (t || "fx") + "queue", r = Y.get(e, t), n && (!r || Array.isArray(n) ? r = Y.access(e, t, S.makeArray(n)) : r.push(n)), r || []
                },
                dequeue: function(e, t) {
                    t = t || "fx";
                    var n = S.queue(e, t),
                        r = n.length,
                        i = n.shift(),
                        o = S._queueHooks(e, t);
                    "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, function() {
                        S.dequeue(e, t)
                    }, o)), !r && o && o.empty.fire()
                },
                _queueHooks: function(e, t) {
                    var n = t + "queueHooks";
                    return Y.get(e, n) || Y.access(e, n, {
                        empty: S.Callbacks("once memory").add(function() {
                            Y.remove(e, [t + "queue", n])
                        })
                    })
                }
            }), S.fn.extend({
                queue: function(t, n) {
                    var e = 2;
                    return "string" != typeof t && (n = t, t = "fx", e--), arguments.length < e ? S.queue(this[0], t) : void 0 === n ? this : this.each(function() {
                        var e = S.queue(this, t, n);
                        S._queueHooks(this, t), "fx" === t && "inprogress" !== e[0] && S.dequeue(this, t)
                    })
                },
                dequeue: function(e) {
                    return this.each(function() {
                        S.dequeue(this, e)
                    })
                },
                clearQueue: function(e) {
                    return this.queue(e || "fx", [])
                },
                promise: function(e, t) {
                    var n, r = 1,
                        i = S.Deferred(),
                        o = this,
                        a = this.length,
                        s = function() {
                            --r || i.resolveWith(o, [o])
                        };
                    "string" != typeof e && (t = e, e = void 0), e = e || "fx";
                    while (a--)(n = Y.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
                    return s(), i.promise(t)
                }
            });
            var ee = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
                te = new RegExp("^(?:([+-])=|)(" + ee + ")([a-z%]*)$", "i"),
                ne = ["Top", "Right", "Bottom", "Left"],
                re = E.documentElement,
                ie = function(e) {
                    return S.contains(e.ownerDocument, e)
                },
                oe = {
                    composed: !0
                };
            re.getRootNode && (ie = function(e) {
                return S.contains(e.ownerDocument, e) || e.getRootNode(oe) === e.ownerDocument
            });
            var ae = function(e, t) {
                return "none" === (e = t || e).style.display || "" === e.style.display && ie(e) && "none" === S.css(e, "display")
            };

            function se(e, t, n, r) {
                var i, o, a = 20,
                    s = r ? function() {
                        return r.cur()
                    } : function() {
                        return S.css(e, t, "")
                    },
                    u = s(),
                    l = n && n[3] || (S.cssNumber[t] ? "" : "px"),
                    c = e.nodeType && (S.cssNumber[t] || "px" !== l && +u) && te.exec(S.css(e, t));
                if (c && c[3] !== l) {
                    u /= 2, l = l || c[3], c = +u || 1;
                    while (a--) S.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
                    c *= 2, S.style(e, t, c + l), n = n || []
                }
                return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
            }
            var ue = {};

            function le(e, t) {
                for (var n, r, i, o, a, s, u, l = [], c = 0, f = e.length; c < f; c++)(r = e[c]).style && (n = r.style.display, t ? ("none" === n && (l[c] = Y.get(r, "display") || null, l[c] || (r.style.display = "")), "" === r.style.display && ae(r) && (l[c] = (u = a = o = void 0, a = (i = r).ownerDocument, s = i.nodeName, (u = ue[s]) || (o = a.body.appendChild(a.createElement(s)), u = S.css(o, "display"), o.parentNode.removeChild(o), "none" === u && (u = "block"), ue[s] = u)))) : "none" !== n && (l[c] = "none", Y.set(r, "display", n)));
                for (c = 0; c < f; c++) null != l[c] && (e[c].style.display = l[c]);
                return e
            }
            S.fn.extend({
                show: function() {
                    return le(this, !0)
                },
                hide: function() {
                    return le(this)
                },
                toggle: function(e) {
                    return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                        ae(this) ? S(this).show() : S(this).hide()
                    })
                }
            });
            var ce, fe, pe = /^(?:checkbox|radio)$/i,
                de = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
                he = /^$|^module$|\/(?:java|ecma)script/i;
            ce = E.createDocumentFragment().appendChild(E.createElement("div")), (fe = E.createElement("input")).setAttribute("type", "radio"), fe.setAttribute("checked", "checked"), fe.setAttribute("name", "t"), ce.appendChild(fe), y.checkClone = ce.cloneNode(!0).cloneNode(!0).lastChild.checked, ce.innerHTML = "<textarea>x</textarea>", y.noCloneChecked = !!ce.cloneNode(!0).lastChild.defaultValue, ce.innerHTML = "<option></option>", y.option = !!ce.lastChild;
            var ge = {
                thead: [1, "<table>", "</table>"],
                col: [2, "<table><colgroup>", "</colgroup></table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: [0, "", ""]
            };

            function ve(e, t) {
                var n;
                return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && A(e, t) ? S.merge([e], n) : n
            }

            function ye(e, t) {
                for (var n = 0, r = e.length; n < r; n++) Y.set(e[n], "globalEval", !t || Y.get(t[n], "globalEval"))
            }
            ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td, y.option || (ge.optgroup = ge.option = [1, "<select multiple='multiple'>", "</select>"]);
            var me = /<|&#?\w+;/;

            function xe(e, t, n, r, i) {
                for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
                    if ((o = e[d]) || 0 === o)
                        if ("object" === w(o)) S.merge(p, o.nodeType ? [o] : o);
                        else if (me.test(o)) {
                    a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + S.htmlPrefilter(o) + u[2], c = u[0];
                    while (c--) a = a.lastChild;
                    S.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
                } else p.push(t.createTextNode(o));
                f.textContent = "", d = 0;
                while (o = p[d++])
                    if (r && -1 < S.inArray(o, r)) i && i.push(o);
                    else if (l = ie(o), a = ve(f.appendChild(o), "script"), l && ye(a), n) {
                    c = 0;
                    while (o = a[c++]) he.test(o.type || "") && n.push(o)
                }
                return f
            }
            var be = /^([^.]*)(?:\.(.+)|)/;

            function we() {
                return !0
            }

            function Te() {
                return !1
            }

            function Ce(e, t) {
                return e === function() {
                    try {
                        return E.activeElement
                    } catch (e) {}
                }() == ("focus" === t)
            }

            function Ee(e, t, n, r, i, o) {
                var a, s;
                if ("object" == typeof t) {
                    for (s in "string" != typeof n && (r = r || n, n = void 0), t) Ee(e, s, n, r, t[s], o);
                    return e
                }
                if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = Te;
                else if (!i) return e;
                return 1 === o && (a = i, (i = function(e) {
                    return S().off(e), a.apply(this, arguments)
                }).guid = a.guid || (a.guid = S.guid++)), e.each(function() {
                    S.event.add(this, t, i, r, n)
                })
            }

            function Se(e, i, o) {
                o ? (Y.set(e, i, !1), S.event.add(e, i, {
                    namespace: !1,
                    handler: function(e) {
                        var t, n, r = Y.get(this, i);
                        if (1 & e.isTrigger && this[i]) {
                            if (r.length)(S.event.special[i] || {}).delegateType && e.stopPropagation();
                            else if (r = s.call(arguments), Y.set(this, i, r), t = o(this, i), this[i](), r !== (n = Y.get(this, i)) || t ? Y.set(this, i, !1) : n = {}, r !== n) return e.stopImmediatePropagation(), e.preventDefault(), n && n.value
                        } else r.length && (Y.set(this, i, {
                            value: S.event.trigger(S.extend(r[0], S.Event.prototype), r.slice(1), this)
                        }), e.stopImmediatePropagation())
                    }
                })) : void 0 === Y.get(e, i) && S.event.add(e, i, we)
            }
            S.event = {
                global: {},
                add: function(t, e, n, r, i) {
                    var o, a, s, u, l, c, f, p, d, h, g, v = Y.get(t);
                    if (V(t)) {
                        n.handler && (n = (o = n).handler, i = o.selector), i && S.find.matchesSelector(re, i), n.guid || (n.guid = S.guid++), (u = v.events) || (u = v.events = Object.create(null)), (a = v.handle) || (a = v.handle = function(e) {
                            return "undefined" != typeof S && S.event.triggered !== e.type ? S.event.dispatch.apply(t, arguments) : void 0
                        }), l = (e = (e || "").match(P) || [""]).length;
                        while (l--) d = g = (s = be.exec(e[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = S.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = S.event.special[d] || {}, c = S.extend({
                            type: d,
                            origType: g,
                            data: r,
                            handler: n,
                            guid: n.guid,
                            selector: i,
                            needsContext: i && S.expr.match.needsContext.test(i),
                            namespace: h.join(".")
                        }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(t, r, h, a) || t.addEventListener && t.addEventListener(d, a)), f.add && (f.add.call(t, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), S.event.global[d] = !0)
                    }
                },
                remove: function(e, t, n, r, i) {
                    var o, a, s, u, l, c, f, p, d, h, g, v = Y.hasData(e) && Y.get(e);
                    if (v && (u = v.events)) {
                        l = (t = (t || "").match(P) || [""]).length;
                        while (l--)
                            if (d = g = (s = be.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d) {
                                f = S.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;
                                while (o--) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                                a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || S.removeEvent(e, d, v.handle), delete u[d])
                            } else
                                for (d in u) S.event.remove(e, d + t[l], n, r, !0);
                        S.isEmptyObject(u) && Y.remove(e, "handle events")
                    }
                },
                dispatch: function(e) {
                    var t, n, r, i, o, a, s = new Array(arguments.length),
                        u = S.event.fix(e),
                        l = (Y.get(this, "events") || Object.create(null))[u.type] || [],
                        c = S.event.special[u.type] || {};
                    for (s[0] = u, t = 1; t < arguments.length; t++) s[t] = arguments[t];
                    if (u.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, u)) {
                        a = S.event.handlers.call(this, u, l), t = 0;
                        while ((i = a[t++]) && !u.isPropagationStopped()) {
                            u.currentTarget = i.elem, n = 0;
                            while ((o = i.handlers[n++]) && !u.isImmediatePropagationStopped()) u.rnamespace && !1 !== o.namespace && !u.rnamespace.test(o.namespace) || (u.handleObj = o, u.data = o.data, void 0 !== (r = ((S.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, s)) && !1 === (u.result = r) && (u.preventDefault(), u.stopPropagation()))
                        }
                        return c.postDispatch && c.postDispatch.call(this, u), u.result
                    }
                },
                handlers: function(e, t) {
                    var n, r, i, o, a, s = [],
                        u = t.delegateCount,
                        l = e.target;
                    if (u && l.nodeType && !("click" === e.type && 1 <= e.button))
                        for (; l !== this; l = l.parentNode || this)
                            if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                                for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? -1 < S(i, this).index(l) : S.find(i, this, null, [l]).length), a[i] && o.push(r);
                                o.length && s.push({
                                    elem: l,
                                    handlers: o
                                })
                            } return l = this, u < t.length && s.push({
                        elem: l,
                        handlers: t.slice(u)
                    }), s
                },
                addProp: function(t, e) {
                    Object.defineProperty(S.Event.prototype, t, {
                        enumerable: !0,
                        configurable: !0,
                        get: m(e) ? function() {
                            if (this.originalEvent) return e(this.originalEvent)
                        } : function() {
                            if (this.originalEvent) return this.originalEvent[t]
                        },
                        set: function(e) {
                            Object.defineProperty(this, t, {
                                enumerable: !0,
                                configurable: !0,
                                writable: !0,
                                value: e
                            })
                        }
                    })
                },
                fix: function(e) {
                    return e[S.expando] ? e : new S.Event(e)
                },
                special: {
                    load: {
                        noBubble: !0
                    },
                    click: {
                        setup: function(e) {
                            var t = this || e;
                            return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click", we), !1
                        },
                        trigger: function(e) {
                            var t = this || e;
                            return pe.test(t.type) && t.click && A(t, "input") && Se(t, "click"), !0
                        },
                        _default: function(e) {
                            var t = e.target;
                            return pe.test(t.type) && t.click && A(t, "input") && Y.get(t, "click") || A(t, "a")
                        }
                    },
                    beforeunload: {
                        postDispatch: function(e) {
                            void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                        }
                    }
                }
            }, S.removeEvent = function(e, t, n) {
                e.removeEventListener && e.removeEventListener(t, n)
            }, S.Event = function(e, t) {
                if (!(this instanceof S.Event)) return new S.Event(e, t);
                e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? we : Te, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && S.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[S.expando] = !0
            }, S.Event.prototype = {
                constructor: S.Event,
                isDefaultPrevented: Te,
                isPropagationStopped: Te,
                isImmediatePropagationStopped: Te,
                isSimulated: !1,
                preventDefault: function() {
                    var e = this.originalEvent;
                    this.isDefaultPrevented = we, e && !this.isSimulated && e.preventDefault()
                },
                stopPropagation: function() {
                    var e = this.originalEvent;
                    this.isPropagationStopped = we, e && !this.isSimulated && e.stopPropagation()
                },
                stopImmediatePropagation: function() {
                    var e = this.originalEvent;
                    this.isImmediatePropagationStopped = we, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
                }
            }, S.each({
                altKey: !0,
                bubbles: !0,
                cancelable: !0,
                changedTouches: !0,
                ctrlKey: !0,
                detail: !0,
                eventPhase: !0,
                metaKey: !0,
                pageX: !0,
                pageY: !0,
                shiftKey: !0,
                view: !0,
                "char": !0,
                code: !0,
                charCode: !0,
                key: !0,
                keyCode: !0,
                button: !0,
                buttons: !0,
                clientX: !0,
                clientY: !0,
                offsetX: !0,
                offsetY: !0,
                pointerId: !0,
                pointerType: !0,
                screenX: !0,
                screenY: !0,
                targetTouches: !0,
                toElement: !0,
                touches: !0,
                which: !0
            }, S.event.addProp), S.each({
                focus: "focusin",
                blur: "focusout"
            }, function(e, t) {
                S.event.special[e] = {
                    setup: function() {
                        return Se(this, e, Ce), !1
                    },
                    trigger: function() {
                        return Se(this, e), !0
                    },
                    _default: function() {
                        return !0
                    },
                    delegateType: t
                }
            }), S.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout",
                pointerenter: "pointerover",
                pointerleave: "pointerout"
            }, function(e, i) {
                S.event.special[e] = {
                    delegateType: i,
                    bindType: i,
                    handle: function(e) {
                        var t, n = e.relatedTarget,
                            r = e.handleObj;
                        return n && (n === this || S.contains(this, n)) || (e.type = r.origType, t = r.handler.apply(this, arguments), e.type = i), t
                    }
                }
            }), S.fn.extend({
                on: function(e, t, n, r) {
                    return Ee(this, e, t, n, r)
                },
                one: function(e, t, n, r) {
                    return Ee(this, e, t, n, r, 1)
                },
                off: function(e, t, n) {
                    var r, i;
                    if (e && e.preventDefault && e.handleObj) return r = e.handleObj, S(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
                    if ("object" == typeof e) {
                        for (i in e) this.off(i, t, e[i]);
                        return this
                    }
                    return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = Te), this.each(function() {
                        S.event.remove(this, e, n, t)
                    })
                }
            });
            var ke = /<script|<style|<link/i,
                Ae = /checked\s*(?:[^=]|=\s*.checked.)/i,
                Ne = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

            function je(e, t) {
                return A(e, "table") && A(11 !== t.nodeType ? t : t.firstChild, "tr") && S(e).children("tbody")[0] || e
            }

            function De(e) {
                return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
            }

            function qe(e) {
                return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
            }

            function Le(e, t) {
                var n, r, i, o, a, s;
                if (1 === t.nodeType) {
                    if (Y.hasData(e) && (s = Y.get(e).events))
                        for (i in Y.remove(t, "handle events"), s)
                            for (n = 0, r = s[i].length; n < r; n++) S.event.add(t, i, s[i][n]);
                    Q.hasData(e) && (o = Q.access(e), a = S.extend({}, o), Q.set(t, a))
                }
            }

            function He(n, r, i, o) {
                r = g(r);
                var e, t, a, s, u, l, c = 0,
                    f = n.length,
                    p = f - 1,
                    d = r[0],
                    h = m(d);
                if (h || 1 < f && "string" == typeof d && !y.checkClone && Ae.test(d)) return n.each(function(e) {
                    var t = n.eq(e);
                    h && (r[0] = d.call(this, e, t.html())), He(t, r, i, o)
                });
                if (f && (t = (e = xe(r, n[0].ownerDocument, !1, n, o)).firstChild, 1 === e.childNodes.length && (e = t), t || o)) {
                    for (s = (a = S.map(ve(e, "script"), De)).length; c < f; c++) u = e, c !== p && (u = S.clone(u, !0, !0), s && S.merge(a, ve(u, "script"))), i.call(n[c], u, c);
                    if (s)
                        for (l = a[a.length - 1].ownerDocument, S.map(a, qe), c = 0; c < s; c++) u = a[c], he.test(u.type || "") && !Y.access(u, "globalEval") && S.contains(l, u) && (u.src && "module" !== (u.type || "").toLowerCase() ? S._evalUrl && !u.noModule && S._evalUrl(u.src, {
                            nonce: u.nonce || u.getAttribute("nonce")
                        }, l) : b(u.textContent.replace(Ne, ""), u, l))
                }
                return n
            }

            function Oe(e, t, n) {
                for (var r, i = t ? S.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || S.cleanData(ve(r)), r.parentNode && (n && ie(r) && ye(ve(r, "script")), r.parentNode.removeChild(r));
                return e
            }
            S.extend({
                htmlPrefilter: function(e) {
                    return e
                },
                clone: function(e, t, n) {
                    var r, i, o, a, s, u, l, c = e.cloneNode(!0),
                        f = ie(e);
                    if (!(y.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || S.isXMLDoc(e)))
                        for (a = ve(c), r = 0, i = (o = ve(e)).length; r < i; r++) s = o[r], u = a[r], void 0, "input" === (l = u.nodeName.toLowerCase()) && pe.test(s.type) ? u.checked = s.checked : "input" !== l && "textarea" !== l || (u.defaultValue = s.defaultValue);
                    if (t)
                        if (n)
                            for (o = o || ve(e), a = a || ve(c), r = 0, i = o.length; r < i; r++) Le(o[r], a[r]);
                        else Le(e, c);
                    return 0 < (a = ve(c, "script")).length && ye(a, !f && ve(e, "script")), c
                },
                cleanData: function(e) {
                    for (var t, n, r, i = S.event.special, o = 0; void 0 !== (n = e[o]); o++)
                        if (V(n)) {
                            if (t = n[Y.expando]) {
                                if (t.events)
                                    for (r in t.events) i[r] ? S.event.remove(n, r) : S.removeEvent(n, r, t.handle);
                                n[Y.expando] = void 0
                            }
                            n[Q.expando] && (n[Q.expando] = void 0)
                        }
                }
            }), S.fn.extend({
                detach: function(e) {
                    return Oe(this, e, !0)
                },
                remove: function(e) {
                    return Oe(this, e)
                },
                text: function(e) {
                    return $(this, function(e) {
                        return void 0 === e ? S.text(this) : this.empty().each(function() {
                            1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                        })
                    }, null, e, arguments.length)
                },
                append: function() {
                    return He(this, arguments, function(e) {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || je(this, e).appendChild(e)
                    })
                },
                prepend: function() {
                    return He(this, arguments, function(e) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var t = je(this, e);
                            t.insertBefore(e, t.firstChild)
                        }
                    })
                },
                before: function() {
                    return He(this, arguments, function(e) {
                        this.parentNode && this.parentNode.insertBefore(e, this)
                    })
                },
                after: function() {
                    return He(this, arguments, function(e) {
                        this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                    })
                },
                empty: function() {
                    for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (S.cleanData(ve(e, !1)), e.textContent = "");
                    return this
                },
                clone: function(e, t) {
                    return e = null != e && e, t = null == t ? e : t, this.map(function() {
                        return S.clone(this, e, t)
                    })
                },
                html: function(e) {
                    return $(this, function(e) {
                        var t = this[0] || {},
                            n = 0,
                            r = this.length;
                        if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                        if ("string" == typeof e && !ke.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
                            e = S.htmlPrefilter(e);
                            try {
                                for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (S.cleanData(ve(t, !1)), t.innerHTML = e);
                                t = 0
                            } catch (e) {}
                        }
                        t && this.empty().append(e)
                    }, null, e, arguments.length)
                },
                replaceWith: function() {
                    var n = [];
                    return He(this, arguments, function(e) {
                        var t = this.parentNode;
                        S.inArray(this, n) < 0 && (S.cleanData(ve(this)), t && t.replaceChild(e, this))
                    }, n)
                }
            }), S.each({
                appendTo: "append",
                prependTo: "prepend",
                insertBefore: "before",
                insertAfter: "after",
                replaceAll: "replaceWith"
            }, function(e, a) {
                S.fn[e] = function(e) {
                    for (var t, n = [], r = S(e), i = r.length - 1, o = 0; o <= i; o++) t = o === i ? this : this.clone(!0), S(r[o])[a](t), u.apply(n, t.get());
                    return this.pushStack(n)
                }
            });
            var Pe = new RegExp("^(" + ee + ")(?!px)[a-z%]+$", "i"),
                Re = function(e) {
                    var t = e.ownerDocument.defaultView;
                    return t && t.opener || (t = C), t.getComputedStyle(e)
                },
                Me = function(e, t, n) {
                    var r, i, o = {};
                    for (i in t) o[i] = e.style[i], e.style[i] = t[i];
                    for (i in r = n.call(e), t) e.style[i] = o[i];
                    return r
                },
                Ie = new RegExp(ne.join("|"), "i");

            function We(e, t, n) {
                var r, i, o, a, s = e.style;
                return (n = n || Re(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || ie(e) || (a = S.style(e, t)), !y.pixelBoxStyles() && Pe.test(a) && Ie.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
            }

            function Fe(e, t) {
                return {
                    get: function() {
                        if (!e()) return (this.get = t).apply(this, arguments);
                        delete this.get
                    }
                }
            }! function() {
                function e() {
                    if (l) {
                        u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", l.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", re.appendChild(u).appendChild(l);
                        var e = C.getComputedStyle(l);
                        n = "1%" !== e.top, s = 12 === t(e.marginLeft), l.style.right = "60%", o = 36 === t(e.right), r = 36 === t(e.width), l.style.position = "absolute", i = 12 === t(l.offsetWidth / 3), re.removeChild(u), l = null
                    }
                }

                function t(e) {
                    return Math.round(parseFloat(e))
                }
                var n, r, i, o, a, s, u = E.createElement("div"),
                    l = E.createElement("div");
                l.style && (l.style.backgroundClip = "content-box", l.cloneNode(!0).style.backgroundClip = "", y.clearCloneStyle = "content-box" === l.style.backgroundClip, S.extend(y, {
                    boxSizingReliable: function() {
                        return e(), r
                    },
                    pixelBoxStyles: function() {
                        return e(), o
                    },
                    pixelPosition: function() {
                        return e(), n
                    },
                    reliableMarginLeft: function() {
                        return e(), s
                    },
                    scrollboxSize: function() {
                        return e(), i
                    },
                    reliableTrDimensions: function() {
                        var e, t, n, r;
                        return null == a && (e = E.createElement("table"), t = E.createElement("tr"), n = E.createElement("div"), e.style.cssText = "position:absolute;left:-11111px;border-collapse:separate", t.style.cssText = "border:1px solid", t.style.height = "1px", n.style.height = "9px", n.style.display = "block", re.appendChild(e).appendChild(t).appendChild(n), r = C.getComputedStyle(t), a = parseInt(r.height, 10) + parseInt(r.borderTopWidth, 10) + parseInt(r.borderBottomWidth, 10) === t.offsetHeight, re.removeChild(e)), a
                    }
                }))
            }();
            var Be = ["Webkit", "Moz", "ms"],
                $e = E.createElement("div").style,
                _e = {};

            function ze(e) {
                var t = S.cssProps[e] || _e[e];
                return t || (e in $e ? e : _e[e] = function(e) {
                    var t = e[0].toUpperCase() + e.slice(1),
                        n = Be.length;
                    while (n--)
                        if ((e = Be[n] + t) in $e) return e
                }(e) || e)
            }
            var Ue = /^(none|table(?!-c[ea]).+)/,
                Xe = /^--/,
                Ve = {
                    position: "absolute",
                    visibility: "hidden",
                    display: "block"
                },
                Ge = {
                    letterSpacing: "0",
                    fontWeight: "400"
                };

            function Ye(e, t, n) {
                var r = te.exec(t);
                return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
            }

            function Qe(e, t, n, r, i, o) {
                var a = "width" === t ? 1 : 0,
                    s = 0,
                    u = 0;
                if (n === (r ? "border" : "content")) return 0;
                for (; a < 4; a += 2) "margin" === n && (u += S.css(e, n + ne[a], !0, i)), r ? ("content" === n && (u -= S.css(e, "padding" + ne[a], !0, i)), "margin" !== n && (u -= S.css(e, "border" + ne[a] + "Width", !0, i))) : (u += S.css(e, "padding" + ne[a], !0, i), "padding" !== n ? u += S.css(e, "border" + ne[a] + "Width", !0, i) : s += S.css(e, "border" + ne[a] + "Width", !0, i));
                return !r && 0 <= o && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5)) || 0), u
            }

            function Je(e, t, n) {
                var r = Re(e),
                    i = (!y.boxSizingReliable() || n) && "border-box" === S.css(e, "boxSizing", !1, r),
                    o = i,
                    a = We(e, t, r),
                    s = "offset" + t[0].toUpperCase() + t.slice(1);
                if (Pe.test(a)) {
                    if (!n) return a;
                    a = "auto"
                }
                return (!y.boxSizingReliable() && i || !y.reliableTrDimensions() && A(e, "tr") || "auto" === a || !parseFloat(a) && "inline" === S.css(e, "display", !1, r)) && e.getClientRects().length && (i = "border-box" === S.css(e, "boxSizing", !1, r), (o = s in e) && (a = e[s])), (a = parseFloat(a) || 0) + Qe(e, t, n || (i ? "border" : "content"), o, r, a) + "px"
            }

            function Ke(e, t, n, r, i) {
                return new Ke.prototype.init(e, t, n, r, i)
            }
            S.extend({
                cssHooks: {
                    opacity: {
                        get: function(e, t) {
                            if (t) {
                                var n = We(e, "opacity");
                                return "" === n ? "1" : n
                            }
                        }
                    }
                },
                cssNumber: {
                    animationIterationCount: !0,
                    columnCount: !0,
                    fillOpacity: !0,
                    flexGrow: !0,
                    flexShrink: !0,
                    fontWeight: !0,
                    gridArea: !0,
                    gridColumn: !0,
                    gridColumnEnd: !0,
                    gridColumnStart: !0,
                    gridRow: !0,
                    gridRowEnd: !0,
                    gridRowStart: !0,
                    lineHeight: !0,
                    opacity: !0,
                    order: !0,
                    orphans: !0,
                    widows: !0,
                    zIndex: !0,
                    zoom: !0
                },
                cssProps: {},
                style: function(e, t, n, r) {
                    if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                        var i, o, a, s = X(t),
                            u = Xe.test(t),
                            l = e.style;
                        if (u || (t = ze(s)), a = S.cssHooks[t] || S.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                        "string" === (o = typeof n) && (i = te.exec(n)) && i[1] && (n = se(e, t, i), o = "number"), null != n && n == n && ("number" !== o || u || (n += i && i[3] || (S.cssNumber[s] ? "" : "px")), y.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
                    }
                },
                css: function(e, t, n, r) {
                    var i, o, a, s = X(t);
                    return Xe.test(t) || (t = ze(s)), (a = S.cssHooks[t] || S.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = We(e, t, r)), "normal" === i && t in Ge && (i = Ge[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
                }
            }), S.each(["height", "width"], function(e, u) {
                S.cssHooks[u] = {
                    get: function(e, t, n) {
                        if (t) return !Ue.test(S.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? Je(e, u, n) : Me(e, Ve, function() {
                            return Je(e, u, n)
                        })
                    },
                    set: function(e, t, n) {
                        var r, i = Re(e),
                            o = !y.scrollboxSize() && "absolute" === i.position,
                            a = (o || n) && "border-box" === S.css(e, "boxSizing", !1, i),
                            s = n ? Qe(e, u, n, a, i) : 0;
                        return a && o && (s -= Math.ceil(e["offset" + u[0].toUpperCase() + u.slice(1)] - parseFloat(i[u]) - Qe(e, u, "border", !1, i) - .5)), s && (r = te.exec(t)) && "px" !== (r[3] || "px") && (e.style[u] = t, t = S.css(e, u)), Ye(0, t, s)
                    }
                }
            }), S.cssHooks.marginLeft = Fe(y.reliableMarginLeft, function(e, t) {
                if (t) return (parseFloat(We(e, "marginLeft")) || e.getBoundingClientRect().left - Me(e, {
                    marginLeft: 0
                }, function() {
                    return e.getBoundingClientRect().left
                })) + "px"
            }), S.each({
                margin: "",
                padding: "",
                border: "Width"
            }, function(i, o) {
                S.cssHooks[i + o] = {
                    expand: function(e) {
                        for (var t = 0, n = {}, r = "string" == typeof e ? e.split(" ") : [e]; t < 4; t++) n[i + ne[t] + o] = r[t] || r[t - 2] || r[0];
                        return n
                    }
                }, "margin" !== i && (S.cssHooks[i + o].set = Ye)
            }), S.fn.extend({
                css: function(e, t) {
                    return $(this, function(e, t, n) {
                        var r, i, o = {},
                            a = 0;
                        if (Array.isArray(t)) {
                            for (r = Re(e), i = t.length; a < i; a++) o[t[a]] = S.css(e, t[a], !1, r);
                            return o
                        }
                        return void 0 !== n ? S.style(e, t, n) : S.css(e, t)
                    }, e, t, 1 < arguments.length)
                }
            }), ((S.Tween = Ke).prototype = {
                constructor: Ke,
                init: function(e, t, n, r, i, o) {
                    this.elem = e, this.prop = n, this.easing = i || S.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (S.cssNumber[n] ? "" : "px")
                },
                cur: function() {
                    var e = Ke.propHooks[this.prop];
                    return e && e.get ? e.get(this) : Ke.propHooks._default.get(this)
                },
                run: function(e) {
                    var t, n = Ke.propHooks[this.prop];
                    return this.options.duration ? this.pos = t = S.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : Ke.propHooks._default.set(this), this
                }
            }).init.prototype = Ke.prototype, (Ke.propHooks = {
                _default: {
                    get: function(e) {
                        var t;
                        return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = S.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
                    },
                    set: function(e) {
                        S.fx.step[e.prop] ? S.fx.step[e.prop](e) : 1 !== e.elem.nodeType || !S.cssHooks[e.prop] && null == e.elem.style[ze(e.prop)] ? e.elem[e.prop] = e.now : S.style(e.elem, e.prop, e.now + e.unit)
                    }
                }
            }).scrollTop = Ke.propHooks.scrollLeft = {
                set: function(e) {
                    e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
                }
            }, S.easing = {
                linear: function(e) {
                    return e
                },
                swing: function(e) {
                    return .5 - Math.cos(e * Math.PI) / 2
                },
                _default: "swing"
            }, S.fx = Ke.prototype.init, S.fx.step = {};
            var Ze, et, tt, nt, rt = /^(?:toggle|show|hide)$/,
                it = /queueHooks$/;

            function ot() {
                et && (!1 === E.hidden && C.requestAnimationFrame ? C.requestAnimationFrame(ot) : C.setTimeout(ot, S.fx.interval), S.fx.tick())
            }

            function at() {
                return C.setTimeout(function() {
                    Ze = void 0
                }), Ze = Date.now()
            }

            function st(e, t) {
                var n, r = 0,
                    i = {
                        height: e
                    };
                for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = ne[r])] = i["padding" + n] = e;
                return t && (i.opacity = i.width = e), i
            }

            function ut(e, t, n) {
                for (var r, i = (lt.tweeners[t] || []).concat(lt.tweeners["*"]), o = 0, a = i.length; o < a; o++)
                    if (r = i[o].call(n, t, e)) return r
            }

            function lt(o, e, t) {
                var n, a, r = 0,
                    i = lt.prefilters.length,
                    s = S.Deferred().always(function() {
                        delete u.elem
                    }),
                    u = function() {
                        if (a) return !1;
                        for (var e = Ze || at(), t = Math.max(0, l.startTime + l.duration - e), n = 1 - (t / l.duration || 0), r = 0, i = l.tweens.length; r < i; r++) l.tweens[r].run(n);
                        return s.notifyWith(o, [l, n, t]), n < 1 && i ? t : (i || s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [l]), !1)
                    },
                    l = s.promise({
                        elem: o,
                        props: S.extend({}, e),
                        opts: S.extend(!0, {
                            specialEasing: {},
                            easing: S.easing._default
                        }, t),
                        originalProperties: e,
                        originalOptions: t,
                        startTime: Ze || at(),
                        duration: t.duration,
                        tweens: [],
                        createTween: function(e, t) {
                            var n = S.Tween(o, l.opts, e, t, l.opts.specialEasing[e] || l.opts.easing);
                            return l.tweens.push(n), n
                        },
                        stop: function(e) {
                            var t = 0,
                                n = e ? l.tweens.length : 0;
                            if (a) return this;
                            for (a = !0; t < n; t++) l.tweens[t].run(1);
                            return e ? (s.notifyWith(o, [l, 1, 0]), s.resolveWith(o, [l, e])) : s.rejectWith(o, [l, e]), this
                        }
                    }),
                    c = l.props;
                for (! function(e, t) {
                        var n, r, i, o, a;
                        for (n in e)
                            if (i = t[r = X(n)], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = S.cssHooks[r]) && "expand" in a)
                                for (n in o = a.expand(o), delete e[r], o) n in e || (e[n] = o[n], t[n] = i);
                            else t[r] = i
                    }(c, l.opts.specialEasing); r < i; r++)
                    if (n = lt.prefilters[r].call(l, o, c, l.opts)) return m(n.stop) && (S._queueHooks(l.elem, l.opts.queue).stop = n.stop.bind(n)), n;
                return S.map(c, ut, l), m(l.opts.start) && l.opts.start.call(o, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), S.fx.timer(S.extend(u, {
                    elem: o,
                    anim: l,
                    queue: l.opts.queue
                })), l
            }
            S.Animation = S.extend(lt, {
                tweeners: {
                    "*": [function(e, t) {
                        var n = this.createTween(e, t);
                        return se(n.elem, e, te.exec(t), n), n
                    }]
                },
                tweener: function(e, t) {
                    m(e) ? (t = e, e = ["*"]) : e = e.match(P);
                    for (var n, r = 0, i = e.length; r < i; r++) n = e[r], lt.tweeners[n] = lt.tweeners[n] || [], lt.tweeners[n].unshift(t)
                },
                prefilters: [function(e, t, n) {
                    var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t,
                        p = this,
                        d = {},
                        h = e.style,
                        g = e.nodeType && ae(e),
                        v = Y.get(e, "fxshow");
                    for (r in n.queue || (null == (a = S._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function() {
                            a.unqueued || s()
                        }), a.unqueued++, p.always(function() {
                            p.always(function() {
                                a.unqueued--, S.queue(e, "fx").length || a.empty.fire()
                            })
                        })), t)
                        if (i = t[r], rt.test(i)) {
                            if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
                                if ("show" !== i || !v || void 0 === v[r]) continue;
                                g = !0
                            }
                            d[r] = v && v[r] || S.style(e, r)
                        } if ((u = !S.isEmptyObject(t)) || !S.isEmptyObject(d))
                        for (r in f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = v && v.display) && (l = Y.get(e, "display")), "none" === (c = S.css(e, "display")) && (l ? c = l : (le([e], !0), l = e.style.display || l, c = S.css(e, "display"), le([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === S.css(e, "float") && (u || (p.done(function() {
                                h.display = l
                            }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function() {
                                h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                            })), u = !1, d) u || (v ? "hidden" in v && (g = v.hidden) : v = Y.access(e, "fxshow", {
                            display: l
                        }), o && (v.hidden = !g), g && le([e], !0), p.done(function() {
                            for (r in g || le([e]), Y.remove(e, "fxshow"), d) S.style(e, r, d[r])
                        })), u = ut(g ? v[r] : 0, r, p), r in v || (v[r] = u.start, g && (u.end = u.start, u.start = 0))
                }],
                prefilter: function(e, t) {
                    t ? lt.prefilters.unshift(e) : lt.prefilters.push(e)
                }
            }), S.speed = function(e, t, n) {
                var r = e && "object" == typeof e ? S.extend({}, e) : {
                    complete: n || !n && t || m(e) && e,
                    duration: e,
                    easing: n && t || t && !m(t) && t
                };
                return S.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in S.fx.speeds ? r.duration = S.fx.speeds[r.duration] : r.duration = S.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function() {
                    m(r.old) && r.old.call(this), r.queue && S.dequeue(this, r.queue)
                }, r
            }, S.fn.extend({
                fadeTo: function(e, t, n, r) {
                    return this.filter(ae).css("opacity", 0).show().end().animate({
                        opacity: t
                    }, e, n, r)
                },
                animate: function(t, e, n, r) {
                    var i = S.isEmptyObject(t),
                        o = S.speed(e, n, r),
                        a = function() {
                            var e = lt(this, S.extend({}, t), o);
                            (i || Y.get(this, "finish")) && e.stop(!0)
                        };
                    return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
                },
                stop: function(i, e, o) {
                    var a = function(e) {
                        var t = e.stop;
                        delete e.stop, t(o)
                    };
                    return "string" != typeof i && (o = e, e = i, i = void 0), e && this.queue(i || "fx", []), this.each(function() {
                        var e = !0,
                            t = null != i && i + "queueHooks",
                            n = S.timers,
                            r = Y.get(this);
                        if (t) r[t] && r[t].stop && a(r[t]);
                        else
                            for (t in r) r[t] && r[t].stop && it.test(t) && a(r[t]);
                        for (t = n.length; t--;) n[t].elem !== this || null != i && n[t].queue !== i || (n[t].anim.stop(o), e = !1, n.splice(t, 1));
                        !e && o || S.dequeue(this, i)
                    })
                },
                finish: function(a) {
                    return !1 !== a && (a = a || "fx"), this.each(function() {
                        var e, t = Y.get(this),
                            n = t[a + "queue"],
                            r = t[a + "queueHooks"],
                            i = S.timers,
                            o = n ? n.length : 0;
                        for (t.finish = !0, S.queue(this, a, []), r && r.stop && r.stop.call(this, !0), e = i.length; e--;) i[e].elem === this && i[e].queue === a && (i[e].anim.stop(!0), i.splice(e, 1));
                        for (e = 0; e < o; e++) n[e] && n[e].finish && n[e].finish.call(this);
                        delete t.finish
                    })
                }
            }), S.each(["toggle", "show", "hide"], function(e, r) {
                var i = S.fn[r];
                S.fn[r] = function(e, t, n) {
                    return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(st(r, !0), e, t, n)
                }
            }), S.each({
                slideDown: st("show"),
                slideUp: st("hide"),
                slideToggle: st("toggle"),
                fadeIn: {
                    opacity: "show"
                },
                fadeOut: {
                    opacity: "hide"
                },
                fadeToggle: {
                    opacity: "toggle"
                }
            }, function(e, r) {
                S.fn[e] = function(e, t, n) {
                    return this.animate(r, e, t, n)
                }
            }), S.timers = [], S.fx.tick = function() {
                var e, t = 0,
                    n = S.timers;
                for (Ze = Date.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
                n.length || S.fx.stop(), Ze = void 0
            }, S.fx.timer = function(e) {
                S.timers.push(e), S.fx.start()
            }, S.fx.interval = 13, S.fx.start = function() {
                et || (et = !0, ot())
            }, S.fx.stop = function() {
                et = null
            }, S.fx.speeds = {
                slow: 600,
                fast: 200,
                _default: 400
            }, S.fn.delay = function(r, e) {
                return r = S.fx && S.fx.speeds[r] || r, e = e || "fx", this.queue(e, function(e, t) {
                    var n = C.setTimeout(e, r);
                    t.stop = function() {
                        C.clearTimeout(n)
                    }
                })
            }, tt = E.createElement("input"), nt = E.createElement("select").appendChild(E.createElement("option")), tt.type = "checkbox", y.checkOn = "" !== tt.value, y.optSelected = nt.selected, (tt = E.createElement("input")).value = "t", tt.type = "radio", y.radioValue = "t" === tt.value;
            var ct, ft = S.expr.attrHandle;
            S.fn.extend({
                attr: function(e, t) {
                    return $(this, S.attr, e, t, 1 < arguments.length)
                },
                removeAttr: function(e) {
                    return this.each(function() {
                        S.removeAttr(this, e)
                    })
                }
            }), S.extend({
                attr: function(e, t, n) {
                    var r, i, o = e.nodeType;
                    if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? S.prop(e, t, n) : (1 === o && S.isXMLDoc(e) || (i = S.attrHooks[t.toLowerCase()] || (S.expr.match.bool.test(t) ? ct : void 0)), void 0 !== n ? null === n ? void S.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = S.find.attr(e, t)) ? void 0 : r)
                },
                attrHooks: {
                    type: {
                        set: function(e, t) {
                            if (!y.radioValue && "radio" === t && A(e, "input")) {
                                var n = e.value;
                                return e.setAttribute("type", t), n && (e.value = n), t
                            }
                        }
                    }
                },
                removeAttr: function(e, t) {
                    var n, r = 0,
                        i = t && t.match(P);
                    if (i && 1 === e.nodeType)
                        while (n = i[r++]) e.removeAttribute(n)
                }
            }), ct = {
                set: function(e, t, n) {
                    return !1 === t ? S.removeAttr(e, n) : e.setAttribute(n, n), n
                }
            }, S.each(S.expr.match.bool.source.match(/\w+/g), function(e, t) {
                var a = ft[t] || S.find.attr;
                ft[t] = function(e, t, n) {
                    var r, i, o = t.toLowerCase();
                    return n || (i = ft[o], ft[o] = r, r = null != a(e, t, n) ? o : null, ft[o] = i), r
                }
            });
            var pt = /^(?:input|select|textarea|button)$/i,
                dt = /^(?:a|area)$/i;

            function ht(e) {
                return (e.match(P) || []).join(" ")
            }

            function gt(e) {
                return e.getAttribute && e.getAttribute("class") || ""
            }

            function vt(e) {
                return Array.isArray(e) ? e : "string" == typeof e && e.match(P) || []
            }
            S.fn.extend({
                prop: function(e, t) {
                    return $(this, S.prop, e, t, 1 < arguments.length)
                },
                removeProp: function(e) {
                    return this.each(function() {
                        delete this[S.propFix[e] || e]
                    })
                }
            }), S.extend({
                prop: function(e, t, n) {
                    var r, i, o = e.nodeType;
                    if (3 !== o && 8 !== o && 2 !== o) return 1 === o && S.isXMLDoc(e) || (t = S.propFix[t] || t, i = S.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
                },
                propHooks: {
                    tabIndex: {
                        get: function(e) {
                            var t = S.find.attr(e, "tabindex");
                            return t ? parseInt(t, 10) : pt.test(e.nodeName) || dt.test(e.nodeName) && e.href ? 0 : -1
                        }
                    }
                },
                propFix: {
                    "for": "htmlFor",
                    "class": "className"
                }
            }), y.optSelected || (S.propHooks.selected = {
                get: function(e) {
                    var t = e.parentNode;
                    return t && t.parentNode && t.parentNode.selectedIndex, null
                },
                set: function(e) {
                    var t = e.parentNode;
                    t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
                }
            }), S.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
                S.propFix[this.toLowerCase()] = this
            }), S.fn.extend({
                addClass: function(t) {
                    var e, n, r, i, o, a, s, u = 0;
                    if (m(t)) return this.each(function(e) {
                        S(this).addClass(t.call(this, e, gt(this)))
                    });
                    if ((e = vt(t)).length)
                        while (n = this[u++])
                            if (i = gt(n), r = 1 === n.nodeType && " " + ht(i) + " ") {
                                a = 0;
                                while (o = e[a++]) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                                i !== (s = ht(r)) && n.setAttribute("class", s)
                            } return this
                },
                removeClass: function(t) {
                    var e, n, r, i, o, a, s, u = 0;
                    if (m(t)) return this.each(function(e) {
                        S(this).removeClass(t.call(this, e, gt(this)))
                    });
                    if (!arguments.length) return this.attr("class", "");
                    if ((e = vt(t)).length)
                        while (n = this[u++])
                            if (i = gt(n), r = 1 === n.nodeType && " " + ht(i) + " ") {
                                a = 0;
                                while (o = e[a++])
                                    while (-1 < r.indexOf(" " + o + " ")) r = r.replace(" " + o + " ", " ");
                                i !== (s = ht(r)) && n.setAttribute("class", s)
                            } return this
                },
                toggleClass: function(i, t) {
                    var o = typeof i,
                        a = "string" === o || Array.isArray(i);
                    return "boolean" == typeof t && a ? t ? this.addClass(i) : this.removeClass(i) : m(i) ? this.each(function(e) {
                        S(this).toggleClass(i.call(this, e, gt(this), t), t)
                    }) : this.each(function() {
                        var e, t, n, r;
                        if (a) {
                            t = 0, n = S(this), r = vt(i);
                            while (e = r[t++]) n.hasClass(e) ? n.removeClass(e) : n.addClass(e)
                        } else void 0 !== i && "boolean" !== o || ((e = gt(this)) && Y.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || !1 === i ? "" : Y.get(this, "__className__") || ""))
                    })
                },
                hasClass: function(e) {
                    var t, n, r = 0;
                    t = " " + e + " ";
                    while (n = this[r++])
                        if (1 === n.nodeType && -1 < (" " + ht(gt(n)) + " ").indexOf(t)) return !0;
                    return !1
                }
            });
            var yt = /\r/g;
            S.fn.extend({
                val: function(n) {
                    var r, e, i, t = this[0];
                    return arguments.length ? (i = m(n), this.each(function(e) {
                        var t;
                        1 === this.nodeType && (null == (t = i ? n.call(this, e, S(this).val()) : n) ? t = "" : "number" == typeof t ? t += "" : Array.isArray(t) && (t = S.map(t, function(e) {
                            return null == e ? "" : e + ""
                        })), (r = S.valHooks[this.type] || S.valHooks[this.nodeName.toLowerCase()]) && "set" in r && void 0 !== r.set(this, t, "value") || (this.value = t))
                    })) : t ? (r = S.valHooks[t.type] || S.valHooks[t.nodeName.toLowerCase()]) && "get" in r && void 0 !== (e = r.get(t, "value")) ? e : "string" == typeof(e = t.value) ? e.replace(yt, "") : null == e ? "" : e : void 0
                }
            }), S.extend({
                valHooks: {
                    option: {
                        get: function(e) {
                            var t = S.find.attr(e, "value");
                            return null != t ? t : ht(S.text(e))
                        }
                    },
                    select: {
                        get: function(e) {
                            var t, n, r, i = e.options,
                                o = e.selectedIndex,
                                a = "select-one" === e.type,
                                s = a ? null : [],
                                u = a ? o + 1 : i.length;
                            for (r = o < 0 ? u : a ? o : 0; r < u; r++)
                                if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !A(n.parentNode, "optgroup"))) {
                                    if (t = S(n).val(), a) return t;
                                    s.push(t)
                                } return s
                        },
                        set: function(e, t) {
                            var n, r, i = e.options,
                                o = S.makeArray(t),
                                a = i.length;
                            while (a--)((r = i[a]).selected = -1 < S.inArray(S.valHooks.option.get(r), o)) && (n = !0);
                            return n || (e.selectedIndex = -1), o
                        }
                    }
                }
            }), S.each(["radio", "checkbox"], function() {
                S.valHooks[this] = {
                    set: function(e, t) {
                        if (Array.isArray(t)) return e.checked = -1 < S.inArray(S(e).val(), t)
                    }
                }, y.checkOn || (S.valHooks[this].get = function(e) {
                    return null === e.getAttribute("value") ? "on" : e.value
                })
            }), y.focusin = "onfocusin" in C;
            var mt = /^(?:focusinfocus|focusoutblur)$/,
                xt = function(e) {
                    e.stopPropagation()
                };
            S.extend(S.event, {
                trigger: function(e, t, n, r) {
                    var i, o, a, s, u, l, c, f, p = [n || E],
                        d = v.call(e, "type") ? e.type : e,
                        h = v.call(e, "namespace") ? e.namespace.split(".") : [];
                    if (o = f = a = n = n || E, 3 !== n.nodeType && 8 !== n.nodeType && !mt.test(d + S.event.triggered) && (-1 < d.indexOf(".") && (d = (h = d.split(".")).shift(), h.sort()), u = d.indexOf(":") < 0 && "on" + d, (e = e[S.expando] ? e : new S.Event(d, "object" == typeof e && e)).isTrigger = r ? 2 : 3, e.namespace = h.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null == t ? [e] : S.makeArray(t, [e]), c = S.event.special[d] || {}, r || !c.trigger || !1 !== c.trigger.apply(n, t))) {
                        if (!r && !c.noBubble && !x(n)) {
                            for (s = c.delegateType || d, mt.test(s + d) || (o = o.parentNode); o; o = o.parentNode) p.push(o), a = o;
                            a === (n.ownerDocument || E) && p.push(a.defaultView || a.parentWindow || C)
                        }
                        i = 0;
                        while ((o = p[i++]) && !e.isPropagationStopped()) f = o, e.type = 1 < i ? s : c.bindType || d, (l = (Y.get(o, "events") || Object.create(null))[e.type] && Y.get(o, "handle")) && l.apply(o, t), (l = u && o[u]) && l.apply && V(o) && (e.result = l.apply(o, t), !1 === e.result && e.preventDefault());
                        return e.type = d, r || e.isDefaultPrevented() || c._default && !1 !== c._default.apply(p.pop(), t) || !V(n) || u && m(n[d]) && !x(n) && ((a = n[u]) && (n[u] = null), S.event.triggered = d, e.isPropagationStopped() && f.addEventListener(d, xt), n[d](), e.isPropagationStopped() && f.removeEventListener(d, xt), S.event.triggered = void 0, a && (n[u] = a)), e.result
                    }
                },
                simulate: function(e, t, n) {
                    var r = S.extend(new S.Event, n, {
                        type: e,
                        isSimulated: !0
                    });
                    S.event.trigger(r, null, t)
                }
            }), S.fn.extend({
                trigger: function(e, t) {
                    return this.each(function() {
                        S.event.trigger(e, t, this)
                    })
                },
                triggerHandler: function(e, t) {
                    var n = this[0];
                    if (n) return S.event.trigger(e, t, n, !0)
                }
            }), y.focusin || S.each({
                focus: "focusin",
                blur: "focusout"
            }, function(n, r) {
                var i = function(e) {
                    S.event.simulate(r, e.target, S.event.fix(e))
                };
                S.event.special[r] = {
                    setup: function() {
                        var e = this.ownerDocument || this.document || this,
                            t = Y.access(e, r);
                        t || e.addEventListener(n, i, !0), Y.access(e, r, (t || 0) + 1)
                    },
                    teardown: function() {
                        var e = this.ownerDocument || this.document || this,
                            t = Y.access(e, r) - 1;
                        t ? Y.access(e, r, t) : (e.removeEventListener(n, i, !0), Y.remove(e, r))
                    }
                }
            });
            var bt = C.location,
                wt = {
                    guid: Date.now()
                },
                Tt = /\?/;
            S.parseXML = function(e) {
                var t, n;
                if (!e || "string" != typeof e) return null;
                try {
                    t = (new C.DOMParser).parseFromString(e, "text/xml")
                } catch (e) {}
                return n = t && t.getElementsByTagName("parsererror")[0], t && !n || S.error("Invalid XML: " + (n ? S.map(n.childNodes, function(e) {
                    return e.textContent
                }).join("\n") : e)), t
            };
            var Ct = /\[\]$/,
                Et = /\r?\n/g,
                St = /^(?:submit|button|image|reset|file)$/i,
                kt = /^(?:input|select|textarea|keygen)/i;

            function At(n, e, r, i) {
                var t;
                if (Array.isArray(e)) S.each(e, function(e, t) {
                    r || Ct.test(n) ? i(n, t) : At(n + "[" + ("object" == typeof t && null != t ? e : "") + "]", t, r, i)
                });
                else if (r || "object" !== w(e)) i(n, e);
                else
                    for (t in e) At(n + "[" + t + "]", e[t], r, i)
            }
            S.param = function(e, t) {
                var n, r = [],
                    i = function(e, t) {
                        var n = m(t) ? t() : t;
                        r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
                    };
                if (null == e) return "";
                if (Array.isArray(e) || e.jquery && !S.isPlainObject(e)) S.each(e, function() {
                    i(this.name, this.value)
                });
                else
                    for (n in e) At(n, e[n], t, i);
                return r.join("&")
            }, S.fn.extend({
                serialize: function() {
                    return S.param(this.serializeArray())
                },
                serializeArray: function() {
                    return this.map(function() {
                        var e = S.prop(this, "elements");
                        return e ? S.makeArray(e) : this
                    }).filter(function() {
                        var e = this.type;
                        return this.name && !S(this).is(":disabled") && kt.test(this.nodeName) && !St.test(e) && (this.checked || !pe.test(e))
                    }).map(function(e, t) {
                        var n = S(this).val();
                        return null == n ? null : Array.isArray(n) ? S.map(n, function(e) {
                            return {
                                name: t.name,
                                value: e.replace(Et, "\r\n")
                            }
                        }) : {
                            name: t.name,
                            value: n.replace(Et, "\r\n")
                        }
                    }).get()
                }
            });
            var Nt = /%20/g,
                jt = /#.*$/,
                Dt = /([?&])_=[^&]*/,
                qt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
                Lt = /^(?:GET|HEAD)$/,
                Ht = /^\/\//,
                Ot = {},
                Pt = {},
                Rt = "*/".concat("*"),
                Mt = E.createElement("a");

            function It(o) {
                return function(e, t) {
                    "string" != typeof e && (t = e, e = "*");
                    var n, r = 0,
                        i = e.toLowerCase().match(P) || [];
                    if (m(t))
                        while (n = i[r++]) "+" === n[0] ? (n = n.slice(1) || "*", (o[n] = o[n] || []).unshift(t)) : (o[n] = o[n] || []).push(t)
                }
            }

            function Wt(t, i, o, a) {
                var s = {},
                    u = t === Pt;

                function l(e) {
                    var r;
                    return s[e] = !0, S.each(t[e] || [], function(e, t) {
                        var n = t(i, o, a);
                        return "string" != typeof n || u || s[n] ? u ? !(r = n) : void 0 : (i.dataTypes.unshift(n), l(n), !1)
                    }), r
                }
                return l(i.dataTypes[0]) || !s["*"] && l("*")
            }

            function Ft(e, t) {
                var n, r, i = S.ajaxSettings.flatOptions || {};
                for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
                return r && S.extend(!0, e, r), e
            }
            Mt.href = bt.href, S.extend({
                active: 0,
                lastModified: {},
                etag: {},
                ajaxSettings: {
                    url: bt.href,
                    type: "GET",
                    isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(bt.protocol),
                    global: !0,
                    processData: !0,
                    async: !0,
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    accepts: {
                        "*": Rt,
                        text: "text/plain",
                        html: "text/html",
                        xml: "application/xml, text/xml",
                        json: "application/json, text/javascript"
                    },
                    contents: {
                        xml: /\bxml\b/,
                        html: /\bhtml/,
                        json: /\bjson\b/
                    },
                    responseFields: {
                        xml: "responseXML",
                        text: "responseText",
                        json: "responseJSON"
                    },
                    converters: {
                        "* text": String,
                        "text html": !0,
                        "text json": JSON.parse,
                        "text xml": S.parseXML
                    },
                    flatOptions: {
                        url: !0,
                        context: !0
                    }
                },
                ajaxSetup: function(e, t) {
                    return t ? Ft(Ft(e, S.ajaxSettings), t) : Ft(S.ajaxSettings, e)
                },
                ajaxPrefilter: It(Ot),
                ajaxTransport: It(Pt),
                ajax: function(e, t) {
                    "object" == typeof e && (t = e, e = void 0), t = t || {};
                    var c, f, p, n, d, r, h, g, i, o, v = S.ajaxSetup({}, t),
                        y = v.context || v,
                        m = v.context && (y.nodeType || y.jquery) ? S(y) : S.event,
                        x = S.Deferred(),
                        b = S.Callbacks("once memory"),
                        w = v.statusCode || {},
                        a = {},
                        s = {},
                        u = "canceled",
                        T = {
                            readyState: 0,
                            getResponseHeader: function(e) {
                                var t;
                                if (h) {
                                    if (!n) {
                                        n = {};
                                        while (t = qt.exec(p)) n[t[1].toLowerCase() + " "] = (n[t[1].toLowerCase() + " "] || []).concat(t[2])
                                    }
                                    t = n[e.toLowerCase() + " "]
                                }
                                return null == t ? null : t.join(", ")
                            },
                            getAllResponseHeaders: function() {
                                return h ? p : null
                            },
                            setRequestHeader: function(e, t) {
                                return null == h && (e = s[e.toLowerCase()] = s[e.toLowerCase()] || e, a[e] = t), this
                            },
                            overrideMimeType: function(e) {
                                return null == h && (v.mimeType = e), this
                            },
                            statusCode: function(e) {
                                var t;
                                if (e)
                                    if (h) T.always(e[T.status]);
                                    else
                                        for (t in e) w[t] = [w[t], e[t]];
                                return this
                            },
                            abort: function(e) {
                                var t = e || u;
                                return c && c.abort(t), l(0, t), this
                            }
                        };
                    if (x.promise(T), v.url = ((e || v.url || bt.href) + "").replace(Ht, bt.protocol + "//"), v.type = t.method || t.type || v.method || v.type, v.dataTypes = (v.dataType || "*").toLowerCase().match(P) || [""], null == v.crossDomain) {
                        r = E.createElement("a");
                        try {
                            r.href = v.url, r.href = r.href, v.crossDomain = Mt.protocol + "//" + Mt.host != r.protocol + "//" + r.host
                        } catch (e) {
                            v.crossDomain = !0
                        }
                    }
                    if (v.data && v.processData && "string" != typeof v.data && (v.data = S.param(v.data, v.traditional)), Wt(Ot, v, t, T), h) return T;
                    for (i in (g = S.event && v.global) && 0 == S.active++ && S.event.trigger("ajaxStart"), v.type = v.type.toUpperCase(), v.hasContent = !Lt.test(v.type), f = v.url.replace(jt, ""), v.hasContent ? v.data && v.processData && 0 === (v.contentType || "").indexOf("application/x-www-form-urlencoded") && (v.data = v.data.replace(Nt, "+")) : (o = v.url.slice(f.length), v.data && (v.processData || "string" == typeof v.data) && (f += (Tt.test(f) ? "&" : "?") + v.data, delete v.data), !1 === v.cache && (f = f.replace(Dt, "$1"), o = (Tt.test(f) ? "&" : "?") + "_=" + wt.guid++ + o), v.url = f + o), v.ifModified && (S.lastModified[f] && T.setRequestHeader("If-Modified-Since", S.lastModified[f]), S.etag[f] && T.setRequestHeader("If-None-Match", S.etag[f])), (v.data && v.hasContent && !1 !== v.contentType || t.contentType) && T.setRequestHeader("Content-Type", v.contentType), T.setRequestHeader("Accept", v.dataTypes[0] && v.accepts[v.dataTypes[0]] ? v.accepts[v.dataTypes[0]] + ("*" !== v.dataTypes[0] ? ", " + Rt + "; q=0.01" : "") : v.accepts["*"]), v.headers) T.setRequestHeader(i, v.headers[i]);
                    if (v.beforeSend && (!1 === v.beforeSend.call(y, T, v) || h)) return T.abort();
                    if (u = "abort", b.add(v.complete), T.done(v.success), T.fail(v.error), c = Wt(Pt, v, t, T)) {
                        if (T.readyState = 1, g && m.trigger("ajaxSend", [T, v]), h) return T;
                        v.async && 0 < v.timeout && (d = C.setTimeout(function() {
                            T.abort("timeout")
                        }, v.timeout));
                        try {
                            h = !1, c.send(a, l)
                        } catch (e) {
                            if (h) throw e;
                            l(-1, e)
                        }
                    } else l(-1, "No Transport");

                    function l(e, t, n, r) {
                        var i, o, a, s, u, l = t;
                        h || (h = !0, d && C.clearTimeout(d), c = void 0, p = r || "", T.readyState = 0 < e ? 4 : 0, i = 200 <= e && e < 300 || 304 === e, n && (s = function(e, t, n) {
                            var r, i, o, a, s = e.contents,
                                u = e.dataTypes;
                            while ("*" === u[0]) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                            if (r)
                                for (i in s)
                                    if (s[i] && s[i].test(r)) {
                                        u.unshift(i);
                                        break
                                    } if (u[0] in n) o = u[0];
                            else {
                                for (i in n) {
                                    if (!u[0] || e.converters[i + " " + u[0]]) {
                                        o = i;
                                        break
                                    }
                                    a || (a = i)
                                }
                                o = o || a
                            }
                            if (o) return o !== u[0] && u.unshift(o), n[o]
                        }(v, T, n)), !i && -1 < S.inArray("script", v.dataTypes) && S.inArray("json", v.dataTypes) < 0 && (v.converters["text script"] = function() {}), s = function(e, t, n, r) {
                            var i, o, a, s, u, l = {},
                                c = e.dataTypes.slice();
                            if (c[1])
                                for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
                            o = c.shift();
                            while (o)
                                if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift())
                                    if ("*" === o) o = u;
                                    else if ("*" !== u && u !== o) {
                                if (!(a = l[u + " " + o] || l["* " + o]))
                                    for (i in l)
                                        if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                                            !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
                                            break
                                        } if (!0 !== a)
                                    if (a && e["throws"]) t = a(t);
                                    else try {
                                        t = a(t)
                                    } catch (e) {
                                        return {
                                            state: "parsererror",
                                            error: a ? e : "No conversion from " + u + " to " + o
                                        }
                                    }
                            }
                            return {
                                state: "success",
                                data: t
                            }
                        }(v, s, T, i), i ? (v.ifModified && ((u = T.getResponseHeader("Last-Modified")) && (S.lastModified[f] = u), (u = T.getResponseHeader("etag")) && (S.etag[f] = u)), 204 === e || "HEAD" === v.type ? l = "nocontent" : 304 === e ? l = "notmodified" : (l = s.state, o = s.data, i = !(a = s.error))) : (a = l, !e && l || (l = "error", e < 0 && (e = 0))), T.status = e, T.statusText = (t || l) + "", i ? x.resolveWith(y, [o, l, T]) : x.rejectWith(y, [T, l, a]), T.statusCode(w), w = void 0, g && m.trigger(i ? "ajaxSuccess" : "ajaxError", [T, v, i ? o : a]), b.fireWith(y, [T, l]), g && (m.trigger("ajaxComplete", [T, v]), --S.active || S.event.trigger("ajaxStop")))
                    }
                    return T
                },
                getJSON: function(e, t, n) {
                    return S.get(e, t, n, "json")
                },
                getScript: function(e, t) {
                    return S.get(e, void 0, t, "script")
                }
            }), S.each(["get", "post"], function(e, i) {
                S[i] = function(e, t, n, r) {
                    return m(t) && (r = r || n, n = t, t = void 0), S.ajax(S.extend({
                        url: e,
                        type: i,
                        dataType: r,
                        data: t,
                        success: n
                    }, S.isPlainObject(e) && e))
                }
            }), S.ajaxPrefilter(function(e) {
                var t;
                for (t in e.headers) "content-type" === t.toLowerCase() && (e.contentType = e.headers[t] || "")
            }), S._evalUrl = function(e, t, n) {
                return S.ajax({
                    url: e,
                    type: "GET",
                    dataType: "script",
                    cache: !0,
                    async: !1,
                    global: !1,
                    converters: {
                        "text script": function() {}
                    },
                    dataFilter: function(e) {
                        S.globalEval(e, t, n)
                    }
                })
            }, S.fn.extend({
                wrapAll: function(e) {
                    var t;
                    return this[0] && (m(e) && (e = e.call(this[0])), t = S(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
                        var e = this;
                        while (e.firstElementChild) e = e.firstElementChild;
                        return e
                    }).append(this)), this
                },
                wrapInner: function(n) {
                    return m(n) ? this.each(function(e) {
                        S(this).wrapInner(n.call(this, e))
                    }) : this.each(function() {
                        var e = S(this),
                            t = e.contents();
                        t.length ? t.wrapAll(n) : e.append(n)
                    })
                },
                wrap: function(t) {
                    var n = m(t);
                    return this.each(function(e) {
                        S(this).wrapAll(n ? t.call(this, e) : t)
                    })
                },
                unwrap: function(e) {
                    return this.parent(e).not("body").each(function() {
                        S(this).replaceWith(this.childNodes)
                    }), this
                }
            }), S.expr.pseudos.hidden = function(e) {
                return !S.expr.pseudos.visible(e)
            }, S.expr.pseudos.visible = function(e) {
                return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
            }, S.ajaxSettings.xhr = function() {
                try {
                    return new C.XMLHttpRequest
                } catch (e) {}
            };
            var Bt = {
                    0: 200,
                    1223: 204
                },
                $t = S.ajaxSettings.xhr();
            y.cors = !!$t && "withCredentials" in $t, y.ajax = $t = !!$t, S.ajaxTransport(function(i) {
                var o, a;
                if (y.cors || $t && !i.crossDomain) return {
                    send: function(e, t) {
                        var n, r = i.xhr();
                        if (r.open(i.type, i.url, i.async, i.username, i.password), i.xhrFields)
                            for (n in i.xhrFields) r[n] = i.xhrFields[n];
                        for (n in i.mimeType && r.overrideMimeType && r.overrideMimeType(i.mimeType), i.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest"), e) r.setRequestHeader(n, e[n]);
                        o = function(e) {
                            return function() {
                                o && (o = a = r.onload = r.onerror = r.onabort = r.ontimeout = r.onreadystatechange = null, "abort" === e ? r.abort() : "error" === e ? "number" != typeof r.status ? t(0, "error") : t(r.status, r.statusText) : t(Bt[r.status] || r.status, r.statusText, "text" !== (r.responseType || "text") || "string" != typeof r.responseText ? {
                                    binary: r.response
                                } : {
                                    text: r.responseText
                                }, r.getAllResponseHeaders()))
                            }
                        }, r.onload = o(), a = r.onerror = r.ontimeout = o("error"), void 0 !== r.onabort ? r.onabort = a : r.onreadystatechange = function() {
                            4 === r.readyState && C.setTimeout(function() {
                                o && a()
                            })
                        }, o = o("abort");
                        try {
                            r.send(i.hasContent && i.data || null)
                        } catch (e) {
                            if (o) throw e
                        }
                    },
                    abort: function() {
                        o && o()
                    }
                }
            }), S.ajaxPrefilter(function(e) {
                e.crossDomain && (e.contents.script = !1)
            }), S.ajaxSetup({
                accepts: {
                    script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
                },
                contents: {
                    script: /\b(?:java|ecma)script\b/
                },
                converters: {
                    "text script": function(e) {
                        return S.globalEval(e), e
                    }
                }
            }), S.ajaxPrefilter("script", function(e) {
                void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
            }), S.ajaxTransport("script", function(n) {
                var r, i;
                if (n.crossDomain || n.scriptAttrs) return {
                    send: function(e, t) {
                        r = S("<script>").attr(n.scriptAttrs || {}).prop({
                            charset: n.scriptCharset,
                            src: n.url
                        }).on("load error", i = function(e) {
                            r.remove(), i = null, e && t("error" === e.type ? 404 : 200, e.type)
                        }), E.head.appendChild(r[0])
                    },
                    abort: function() {
                        i && i()
                    }
                }
            });
            var _t, zt = [],
                Ut = /(=)\?(?=&|$)|\?\?/;
            S.ajaxSetup({
                jsonp: "callback",
                jsonpCallback: function() {
                    var e = zt.pop() || S.expando + "_" + wt.guid++;
                    return this[e] = !0, e
                }
            }), S.ajaxPrefilter("json jsonp", function(e, t, n) {
                var r, i, o, a = !1 !== e.jsonp && (Ut.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Ut.test(e.data) && "data");
                if (a || "jsonp" === e.dataTypes[0]) return r = e.jsonpCallback = m(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, a ? e[a] = e[a].replace(Ut, "$1" + r) : !1 !== e.jsonp && (e.url += (Tt.test(e.url) ? "&" : "?") + e.jsonp + "=" + r), e.converters["script json"] = function() {
                    return o || S.error(r + " was not called"), o[0]
                }, e.dataTypes[0] = "json", i = C[r], C[r] = function() {
                    o = arguments
                }, n.always(function() {
                    void 0 === i ? S(C).removeProp(r) : C[r] = i, e[r] && (e.jsonpCallback = t.jsonpCallback, zt.push(r)), o && m(i) && i(o[0]), o = i = void 0
                }), "script"
            }), y.createHTMLDocument = ((_t = E.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === _t.childNodes.length), S.parseHTML = function(e, t, n) {
                return "string" != typeof e ? [] : ("boolean" == typeof t && (n = t, t = !1), t || (y.createHTMLDocument ? ((r = (t = E.implementation.createHTMLDocument("")).createElement("base")).href = E.location.href, t.head.appendChild(r)) : t = E), o = !n && [], (i = N.exec(e)) ? [t.createElement(i[1])] : (i = xe([e], t, o), o && o.length && S(o).remove(), S.merge([], i.childNodes)));
                var r, i, o
            }, S.fn.load = function(e, t, n) {
                var r, i, o, a = this,
                    s = e.indexOf(" ");
                return -1 < s && (r = ht(e.slice(s)), e = e.slice(0, s)), m(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), 0 < a.length && S.ajax({
                    url: e,
                    type: i || "GET",
                    dataType: "html",
                    data: t
                }).done(function(e) {
                    o = arguments, a.html(r ? S("<div>").append(S.parseHTML(e)).find(r) : e)
                }).always(n && function(e, t) {
                    a.each(function() {
                        n.apply(this, o || [e.responseText, t, e])
                    })
                }), this
            }, S.expr.pseudos.animated = function(t) {
                return S.grep(S.timers, function(e) {
                    return t === e.elem
                }).length
            }, S.offset = {
                setOffset: function(e, t, n) {
                    var r, i, o, a, s, u, l = S.css(e, "position"),
                        c = S(e),
                        f = {};
                    "static" === l && (e.style.position = "relative"), s = c.offset(), o = S.css(e, "top"), u = S.css(e, "left"), ("absolute" === l || "fixed" === l) && -1 < (o + u).indexOf("auto") ? (a = (r = c.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), m(t) && (t = t.call(e, n, S.extend({}, s))), null != t.top && (f.top = t.top - s.top + a), null != t.left && (f.left = t.left - s.left + i), "using" in t ? t.using.call(e, f) : c.css(f)
                }
            }, S.fn.extend({
                offset: function(t) {
                    if (arguments.length) return void 0 === t ? this : this.each(function(e) {
                        S.offset.setOffset(this, t, e)
                    });
                    var e, n, r = this[0];
                    return r ? r.getClientRects().length ? (e = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
                        top: e.top + n.pageYOffset,
                        left: e.left + n.pageXOffset
                    }) : {
                        top: 0,
                        left: 0
                    } : void 0
                },
                position: function() {
                    if (this[0]) {
                        var e, t, n, r = this[0],
                            i = {
                                top: 0,
                                left: 0
                            };
                        if ("fixed" === S.css(r, "position")) t = r.getBoundingClientRect();
                        else {
                            t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;
                            while (e && (e === n.body || e === n.documentElement) && "static" === S.css(e, "position")) e = e.parentNode;
                            e && e !== r && 1 === e.nodeType && ((i = S(e).offset()).top += S.css(e, "borderTopWidth", !0), i.left += S.css(e, "borderLeftWidth", !0))
                        }
                        return {
                            top: t.top - i.top - S.css(r, "marginTop", !0),
                            left: t.left - i.left - S.css(r, "marginLeft", !0)
                        }
                    }
                },
                offsetParent: function() {
                    return this.map(function() {
                        var e = this.offsetParent;
                        while (e && "static" === S.css(e, "position")) e = e.offsetParent;
                        return e || re
                    })
                }
            }), S.each({
                scrollLeft: "pageXOffset",
                scrollTop: "pageYOffset"
            }, function(t, i) {
                var o = "pageYOffset" === i;
                S.fn[t] = function(e) {
                    return $(this, function(e, t, n) {
                        var r;
                        if (x(e) ? r = e : 9 === e.nodeType && (r = e.defaultView), void 0 === n) return r ? r[i] : e[t];
                        r ? r.scrollTo(o ? r.pageXOffset : n, o ? n : r.pageYOffset) : e[t] = n
                    }, t, e, arguments.length)
                }
            }), S.each(["top", "left"], function(e, n) {
                S.cssHooks[n] = Fe(y.pixelPosition, function(e, t) {
                    if (t) return t = We(e, n), Pe.test(t) ? S(e).position()[n] + "px" : t
                })
            }), S.each({
                Height: "height",
                Width: "width"
            }, function(a, s) {
                S.each({
                    padding: "inner" + a,
                    content: s,
                    "": "outer" + a
                }, function(r, o) {
                    S.fn[o] = function(e, t) {
                        var n = arguments.length && (r || "boolean" != typeof e),
                            i = r || (!0 === e || !0 === t ? "margin" : "border");
                        return $(this, function(e, t, n) {
                            var r;
                            return x(e) ? 0 === o.indexOf("outer") ? e["inner" + a] : e.document.documentElement["client" + a] : 9 === e.nodeType ? (r = e.documentElement, Math.max(e.body["scroll" + a], r["scroll" + a], e.body["offset" + a], r["offset" + a], r["client" + a])) : void 0 === n ? S.css(e, t, i) : S.style(e, t, n, i)
                        }, s, n ? e : void 0, n)
                    }
                })
            }), S.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
                S.fn[t] = function(e) {
                    return this.on(t, e)
                }
            }), S.fn.extend({
                bind: function(e, t, n) {
                    return this.on(e, null, t, n)
                },
                unbind: function(e, t) {
                    return this.off(e, null, t)
                },
                delegate: function(e, t, n, r) {
                    return this.on(t, e, n, r)
                },
                undelegate: function(e, t, n) {
                    return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
                },
                hover: function(e, t) {
                    return this.mouseenter(e).mouseleave(t || e)
                }
            }), S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, n) {
                S.fn[n] = function(e, t) {
                    return 0 < arguments.length ? this.on(n, null, e, t) : this.trigger(n)
                }
            });
            var Xt = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            S.proxy = function(e, t) {
                var n, r, i;
                if ("string" == typeof t && (n = e[t], t = e, e = n), m(e)) return r = s.call(arguments, 2), (i = function() {
                    return e.apply(t || this, r.concat(s.call(arguments)))
                }).guid = e.guid = e.guid || S.guid++, i
            }, S.holdReady = function(e) {
                e ? S.readyWait++ : S.ready(!0)
            }, S.isArray = Array.isArray, S.parseJSON = JSON.parse, S.nodeName = A, S.isFunction = m, S.isWindow = x, S.camelCase = X, S.type = w, S.now = Date.now, S.isNumeric = function(e) {
                var t = S.type(e);
                return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
            }, S.trim = function(e) {
                return null == e ? "" : (e + "").replace(Xt, "")
            }, "function" == typeof define && define.amd && define("jquery", [], function() {
                return S
            });
            var Vt = C.jQuery,
                Gt = C.$;
            return S.noConflict = function(e) {
                return C.$ === S && (C.$ = Gt), e && C.jQuery === S && (C.jQuery = Vt), S
            }, "undefined" == typeof e && (C.jQuery = C.$ = S), S
        });
    </script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script>
        /*!
         * Bootstrap v4.6.0 (https://getbootstrap.com/)
         * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
         */
        ! function(t, e) {
            "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], e) : e((t = "undefined" != typeof globalThis ? globalThis : t || self).bootstrap = {}, t.jQuery)
        }(this, (function(t, e) {
            "use strict";

            function n(t) {
                return t && "object" == typeof t && "default" in t ? t : {
                    default: t
                }
            }
            var i = n(e);

            function o(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }

            function r(t, e, n) {
                return e && o(t.prototype, e), n && o(t, n), t
            }

            function a() {
                return (a = Object.assign || function(t) {
                    for (var e = 1; e < arguments.length; e++) {
                        var n = arguments[e];
                        for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
                    }
                    return t
                }).apply(this, arguments)
            }

            function s(t) {
                var e = this,
                    n = !1;
                return i.default(this).one(l.TRANSITION_END, (function() {
                    n = !0
                })), setTimeout((function() {
                    n || l.triggerTransitionEnd(e)
                }), t), this
            }
            var l = {
                TRANSITION_END: "bsTransitionEnd",
                getUID: function(t) {
                    do {
                        t += ~~(1e6 * Math.random())
                    } while (document.getElementById(t));
                    return t
                },
                getSelectorFromElement: function(t) {
                    var e = t.getAttribute("data-target");
                    if (!e || "#" === e) {
                        var n = t.getAttribute("href");
                        e = n && "#" !== n ? n.trim() : ""
                    }
                    try {
                        return document.querySelector(e) ? e : null
                    } catch (t) {
                        return null
                    }
                },
                getTransitionDurationFromElement: function(t) {
                    if (!t) return 0;
                    var e = i.default(t).css("transition-duration"),
                        n = i.default(t).css("transition-delay"),
                        o = parseFloat(e),
                        r = parseFloat(n);
                    return o || r ? (e = e.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(e) + parseFloat(n))) : 0
                },
                reflow: function(t) {
                    return t.offsetHeight
                },
                triggerTransitionEnd: function(t) {
                    i.default(t).trigger("transitionend")
                },
                supportsTransitionEnd: function() {
                    return Boolean("transitionend")
                },
                isElement: function(t) {
                    return (t[0] || t).nodeType
                },
                typeCheckConfig: function(t, e, n) {
                    for (var i in n)
                        if (Object.prototype.hasOwnProperty.call(n, i)) {
                            var o = n[i],
                                r = e[i],
                                a = r && l.isElement(r) ? "element" : null === (s = r) || "undefined" == typeof s ? "" + s : {}.toString.call(s).match(/\s([a-z]+)/i)[1].toLowerCase();
                            if (!new RegExp(o).test(a)) throw new Error(t.toUpperCase() + ': Option "' + i + '" provided type "' + a + '" but expected type "' + o + '".')
                        } var s
                },
                findShadowRoot: function(t) {
                    if (!document.documentElement.attachShadow) return null;
                    if ("function" == typeof t.getRootNode) {
                        var e = t.getRootNode();
                        return e instanceof ShadowRoot ? e : null
                    }
                    return t instanceof ShadowRoot ? t : t.parentNode ? l.findShadowRoot(t.parentNode) : null
                },
                jQueryDetection: function() {
                    if ("undefined" == typeof i.default) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
                    var t = i.default.fn.jquery.split(" ")[0].split(".");
                    if (t[0] < 2 && t[1] < 9 || 1 === t[0] && 9 === t[1] && t[2] < 1 || t[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
                }
            };
            l.jQueryDetection(), i.default.fn.emulateTransitionEnd = s, i.default.event.special[l.TRANSITION_END] = {
                bindType: "transitionend",
                delegateType: "transitionend",
                handle: function(t) {
                    if (i.default(t.target).is(this)) return t.handleObj.handler.apply(this, arguments)
                }
            };
            var u = "alert",
                f = i.default.fn[u],
                d = function() {
                    function t(t) {
                        this._element = t
                    }
                    var e = t.prototype;
                    return e.close = function(t) {
                        var e = this._element;
                        t && (e = this._getRootElement(t)), this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
                    }, e.dispose = function() {
                        i.default.removeData(this._element, "bs.alert"), this._element = null
                    }, e._getRootElement = function(t) {
                        var e = l.getSelectorFromElement(t),
                            n = !1;
                        return e && (n = document.querySelector(e)), n || (n = i.default(t).closest(".alert")[0]), n
                    }, e._triggerCloseEvent = function(t) {
                        var e = i.default.Event("close.bs.alert");
                        return i.default(t).trigger(e), e
                    }, e._removeElement = function(t) {
                        var e = this;
                        if (i.default(t).removeClass("show"), i.default(t).hasClass("fade")) {
                            var n = l.getTransitionDurationFromElement(t);
                            i.default(t).one(l.TRANSITION_END, (function(n) {
                                return e._destroyElement(t, n)
                            })).emulateTransitionEnd(n)
                        } else this._destroyElement(t)
                    }, e._destroyElement = function(t) {
                        i.default(t).detach().trigger("closed.bs.alert").remove()
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this),
                                o = n.data("bs.alert");
                            o || (o = new t(this), n.data("bs.alert", o)), "close" === e && o[e](this)
                        }))
                    }, t._handleDismiss = function(t) {
                        return function(e) {
                            e && e.preventDefault(), t.close(this)
                        }
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }]), t
                }();
            i.default(document).on("click.bs.alert.data-api", '[data-dismiss="alert"]', d._handleDismiss(new d)), i.default.fn[u] = d._jQueryInterface, i.default.fn[u].Constructor = d, i.default.fn[u].noConflict = function() {
                return i.default.fn[u] = f, d._jQueryInterface
            };
            var c = i.default.fn.button,
                h = function() {
                    function t(t) {
                        this._element = t, this.shouldAvoidTriggerChange = !1
                    }
                    var e = t.prototype;
                    return e.toggle = function() {
                        var t = !0,
                            e = !0,
                            n = i.default(this._element).closest('[data-toggle="buttons"]')[0];
                        if (n) {
                            var o = this._element.querySelector('input:not([type="hidden"])');
                            if (o) {
                                if ("radio" === o.type)
                                    if (o.checked && this._element.classList.contains("active")) t = !1;
                                    else {
                                        var r = n.querySelector(".active");
                                        r && i.default(r).removeClass("active")
                                    } t && ("checkbox" !== o.type && "radio" !== o.type || (o.checked = !this._element.classList.contains("active")), this.shouldAvoidTriggerChange || i.default(o).trigger("change")), o.focus(), e = !1
                            }
                        }
                        this._element.hasAttribute("disabled") || this._element.classList.contains("disabled") || (e && this._element.setAttribute("aria-pressed", !this._element.classList.contains("active")), t && i.default(this._element).toggleClass("active"))
                    }, e.dispose = function() {
                        i.default.removeData(this._element, "bs.button"), this._element = null
                    }, t._jQueryInterface = function(e, n) {
                        return this.each((function() {
                            var o = i.default(this),
                                r = o.data("bs.button");
                            r || (r = new t(this), o.data("bs.button", r)), r.shouldAvoidTriggerChange = n, "toggle" === e && r[e]()
                        }))
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }]), t
                }();
            i.default(document).on("click.bs.button.data-api", '[data-toggle^="button"]', (function(t) {
                var e = t.target,
                    n = e;
                if (i.default(e).hasClass("btn") || (e = i.default(e).closest(".btn")[0]), !e || e.hasAttribute("disabled") || e.classList.contains("disabled")) t.preventDefault();
                else {
                    var o = e.querySelector('input:not([type="hidden"])');
                    if (o && (o.hasAttribute("disabled") || o.classList.contains("disabled"))) return void t.preventDefault();
                    "INPUT" !== n.tagName && "LABEL" === e.tagName || h._jQueryInterface.call(i.default(e), "toggle", "INPUT" === n.tagName)
                }
            })).on("focus.bs.button.data-api blur.bs.button.data-api", '[data-toggle^="button"]', (function(t) {
                var e = i.default(t.target).closest(".btn")[0];
                i.default(e).toggleClass("focus", /^focus(in)?$/.test(t.type))
            })), i.default(window).on("load.bs.button.data-api", (function() {
                for (var t = [].slice.call(document.querySelectorAll('[data-toggle="buttons"] .btn')), e = 0, n = t.length; e < n; e++) {
                    var i = t[e],
                        o = i.querySelector('input:not([type="hidden"])');
                    o.checked || o.hasAttribute("checked") ? i.classList.add("active") : i.classList.remove("active")
                }
                for (var r = 0, a = (t = [].slice.call(document.querySelectorAll('[data-toggle="button"]'))).length; r < a; r++) {
                    var s = t[r];
                    "true" === s.getAttribute("aria-pressed") ? s.classList.add("active") : s.classList.remove("active")
                }
            })), i.default.fn.button = h._jQueryInterface, i.default.fn.button.Constructor = h, i.default.fn.button.noConflict = function() {
                return i.default.fn.button = c, h._jQueryInterface
            };
            var p = "carousel",
                m = ".bs.carousel",
                g = i.default.fn[p],
                v = {
                    interval: 5e3,
                    keyboard: !0,
                    slide: !1,
                    pause: "hover",
                    wrap: !0,
                    touch: !0
                },
                _ = {
                    interval: "(number|boolean)",
                    keyboard: "boolean",
                    slide: "(boolean|string)",
                    pause: "(string|boolean)",
                    wrap: "boolean",
                    touch: "boolean"
                },
                b = {
                    TOUCH: "touch",
                    PEN: "pen"
                },
                y = function() {
                    function t(t, e) {
                        this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0, this.touchDeltaX = 0, this._config = this._getConfig(e), this._element = t, this._indicatorsElement = this._element.querySelector(".carousel-indicators"), this._touchSupported = "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0, this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent), this._addEventListeners()
                    }
                    var e = t.prototype;
                    return e.next = function() {
                        this._isSliding || this._slide("next")
                    }, e.nextWhenVisible = function() {
                        var t = i.default(this._element);
                        !document.hidden && t.is(":visible") && "hidden" !== t.css("visibility") && this.next()
                    }, e.prev = function() {
                        this._isSliding || this._slide("prev")
                    }, e.pause = function(t) {
                        t || (this._isPaused = !0), this._element.querySelector(".carousel-item-next, .carousel-item-prev") && (l.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
                    }, e.cycle = function(t) {
                        t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._updateInterval(), this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
                    }, e.to = function(t) {
                        var e = this;
                        this._activeElement = this._element.querySelector(".active.carousel-item");
                        var n = this._getItemIndex(this._activeElement);
                        if (!(t > this._items.length - 1 || t < 0))
                            if (this._isSliding) i.default(this._element).one("slid.bs.carousel", (function() {
                                return e.to(t)
                            }));
                            else {
                                if (n === t) return this.pause(), void this.cycle();
                                var o = t > n ? "next" : "prev";
                                this._slide(o, this._items[t])
                            }
                    }, e.dispose = function() {
                        i.default(this._element).off(m), i.default.removeData(this._element, "bs.carousel"), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
                    }, e._getConfig = function(t) {
                        return t = a({}, v, t), l.typeCheckConfig(p, t, _), t
                    }, e._handleSwipe = function() {
                        var t = Math.abs(this.touchDeltaX);
                        if (!(t <= 40)) {
                            var e = t / this.touchDeltaX;
                            this.touchDeltaX = 0, e > 0 && this.prev(), e < 0 && this.next()
                        }
                    }, e._addEventListeners = function() {
                        var t = this;
                        this._config.keyboard && i.default(this._element).on("keydown.bs.carousel", (function(e) {
                            return t._keydown(e)
                        })), "hover" === this._config.pause && i.default(this._element).on("mouseenter.bs.carousel", (function(e) {
                            return t.pause(e)
                        })).on("mouseleave.bs.carousel", (function(e) {
                            return t.cycle(e)
                        })), this._config.touch && this._addTouchEventListeners()
                    }, e._addTouchEventListeners = function() {
                        var t = this;
                        if (this._touchSupported) {
                            var e = function(e) {
                                    t._pointerEvent && b[e.originalEvent.pointerType.toUpperCase()] ? t.touchStartX = e.originalEvent.clientX : t._pointerEvent || (t.touchStartX = e.originalEvent.touches[0].clientX)
                                },
                                n = function(e) {
                                    t._pointerEvent && b[e.originalEvent.pointerType.toUpperCase()] && (t.touchDeltaX = e.originalEvent.clientX - t.touchStartX), t._handleSwipe(), "hover" === t._config.pause && (t.pause(), t.touchTimeout && clearTimeout(t.touchTimeout), t.touchTimeout = setTimeout((function(e) {
                                        return t.cycle(e)
                                    }), 500 + t._config.interval))
                                };
                            i.default(this._element.querySelectorAll(".carousel-item img")).on("dragstart.bs.carousel", (function(t) {
                                return t.preventDefault()
                            })), this._pointerEvent ? (i.default(this._element).on("pointerdown.bs.carousel", (function(t) {
                                return e(t)
                            })), i.default(this._element).on("pointerup.bs.carousel", (function(t) {
                                return n(t)
                            })), this._element.classList.add("pointer-event")) : (i.default(this._element).on("touchstart.bs.carousel", (function(t) {
                                return e(t)
                            })), i.default(this._element).on("touchmove.bs.carousel", (function(e) {
                                return function(e) {
                                    e.originalEvent.touches && e.originalEvent.touches.length > 1 ? t.touchDeltaX = 0 : t.touchDeltaX = e.originalEvent.touches[0].clientX - t.touchStartX
                                }(e)
                            })), i.default(this._element).on("touchend.bs.carousel", (function(t) {
                                return n(t)
                            })))
                        }
                    }, e._keydown = function(t) {
                        if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
                            case 37:
                                t.preventDefault(), this.prev();
                                break;
                            case 39:
                                t.preventDefault(), this.next()
                        }
                    }, e._getItemIndex = function(t) {
                        return this._items = t && t.parentNode ? [].slice.call(t.parentNode.querySelectorAll(".carousel-item")) : [], this._items.indexOf(t)
                    }, e._getItemByDirection = function(t, e) {
                        var n = "next" === t,
                            i = "prev" === t,
                            o = this._getItemIndex(e),
                            r = this._items.length - 1;
                        if ((i && 0 === o || n && o === r) && !this._config.wrap) return e;
                        var a = (o + ("prev" === t ? -1 : 1)) % this._items.length;
                        return -1 === a ? this._items[this._items.length - 1] : this._items[a]
                    }, e._triggerSlideEvent = function(t, e) {
                        var n = this._getItemIndex(t),
                            o = this._getItemIndex(this._element.querySelector(".active.carousel-item")),
                            r = i.default.Event("slide.bs.carousel", {
                                relatedTarget: t,
                                direction: e,
                                from: o,
                                to: n
                            });
                        return i.default(this._element).trigger(r), r
                    }, e._setActiveIndicatorElement = function(t) {
                        if (this._indicatorsElement) {
                            var e = [].slice.call(this._indicatorsElement.querySelectorAll(".active"));
                            i.default(e).removeClass("active");
                            var n = this._indicatorsElement.children[this._getItemIndex(t)];
                            n && i.default(n).addClass("active")
                        }
                    }, e._updateInterval = function() {
                        var t = this._activeElement || this._element.querySelector(".active.carousel-item");
                        if (t) {
                            var e = parseInt(t.getAttribute("data-interval"), 10);
                            e ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval, this._config.interval = e) : this._config.interval = this._config.defaultInterval || this._config.interval
                        }
                    }, e._slide = function(t, e) {
                        var n, o, r, a = this,
                            s = this._element.querySelector(".active.carousel-item"),
                            u = this._getItemIndex(s),
                            f = e || s && this._getItemByDirection(t, s),
                            d = this._getItemIndex(f),
                            c = Boolean(this._interval);
                        if ("next" === t ? (n = "carousel-item-left", o = "carousel-item-next", r = "left") : (n = "carousel-item-right", o = "carousel-item-prev", r = "right"), f && i.default(f).hasClass("active")) this._isSliding = !1;
                        else if (!this._triggerSlideEvent(f, r).isDefaultPrevented() && s && f) {
                            this._isSliding = !0, c && this.pause(), this._setActiveIndicatorElement(f), this._activeElement = f;
                            var h = i.default.Event("slid.bs.carousel", {
                                relatedTarget: f,
                                direction: r,
                                from: u,
                                to: d
                            });
                            if (i.default(this._element).hasClass("slide")) {
                                i.default(f).addClass(o), l.reflow(f), i.default(s).addClass(n), i.default(f).addClass(n);
                                var p = l.getTransitionDurationFromElement(s);
                                i.default(s).one(l.TRANSITION_END, (function() {
                                    i.default(f).removeClass(n + " " + o).addClass("active"), i.default(s).removeClass("active " + o + " " + n), a._isSliding = !1, setTimeout((function() {
                                        return i.default(a._element).trigger(h)
                                    }), 0)
                                })).emulateTransitionEnd(p)
                            } else i.default(s).removeClass("active"), i.default(f).addClass("active"), this._isSliding = !1, i.default(this._element).trigger(h);
                            c && this.cycle()
                        }
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this).data("bs.carousel"),
                                o = a({}, v, i.default(this).data());
                            "object" == typeof e && (o = a({}, o, e));
                            var r = "string" == typeof e ? e : o.slide;
                            if (n || (n = new t(this, o), i.default(this).data("bs.carousel", n)), "number" == typeof e) n.to(e);
                            else if ("string" == typeof r) {
                                if ("undefined" == typeof n[r]) throw new TypeError('No method named "' + r + '"');
                                n[r]()
                            } else o.interval && o.ride && (n.pause(), n.cycle())
                        }))
                    }, t._dataApiClickHandler = function(e) {
                        var n = l.getSelectorFromElement(this);
                        if (n) {
                            var o = i.default(n)[0];
                            if (o && i.default(o).hasClass("carousel")) {
                                var r = a({}, i.default(o).data(), i.default(this).data()),
                                    s = this.getAttribute("data-slide-to");
                                s && (r.interval = !1), t._jQueryInterface.call(i.default(o), r), s && i.default(o).data("bs.carousel").to(s), e.preventDefault()
                            }
                        }
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return v
                        }
                    }]), t
                }();
            i.default(document).on("click.bs.carousel.data-api", "[data-slide], [data-slide-to]", y._dataApiClickHandler), i.default(window).on("load.bs.carousel.data-api", (function() {
                for (var t = [].slice.call(document.querySelectorAll('[data-ride="carousel"]')), e = 0, n = t.length; e < n; e++) {
                    var o = i.default(t[e]);
                    y._jQueryInterface.call(o, o.data())
                }
            })), i.default.fn[p] = y._jQueryInterface, i.default.fn[p].Constructor = y, i.default.fn[p].noConflict = function() {
                return i.default.fn[p] = g, y._jQueryInterface
            };
            var w = "collapse",
                E = i.default.fn[w],
                T = {
                    toggle: !0,
                    parent: ""
                },
                C = {
                    toggle: "boolean",
                    parent: "(string|element)"
                },
                S = function() {
                    function t(t, e) {
                        this._isTransitioning = !1, this._element = t, this._config = this._getConfig(e), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + t.id + '"],[data-toggle="collapse"][data-target="#' + t.id + '"]'));
                        for (var n = [].slice.call(document.querySelectorAll('[data-toggle="collapse"]')), i = 0, o = n.length; i < o; i++) {
                            var r = n[i],
                                a = l.getSelectorFromElement(r),
                                s = [].slice.call(document.querySelectorAll(a)).filter((function(e) {
                                    return e === t
                                }));
                            null !== a && s.length > 0 && (this._selector = a, this._triggerArray.push(r))
                        }
                        this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
                    }
                    var e = t.prototype;
                    return e.toggle = function() {
                        i.default(this._element).hasClass("show") ? this.hide() : this.show()
                    }, e.show = function() {
                        var e, n, o = this;
                        if (!this._isTransitioning && !i.default(this._element).hasClass("show") && (this._parent && 0 === (e = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter((function(t) {
                                return "string" == typeof o._config.parent ? t.getAttribute("data-parent") === o._config.parent : t.classList.contains("collapse")
                            }))).length && (e = null), !(e && (n = i.default(e).not(this._selector).data("bs.collapse")) && n._isTransitioning))) {
                            var r = i.default.Event("show.bs.collapse");
                            if (i.default(this._element).trigger(r), !r.isDefaultPrevented()) {
                                e && (t._jQueryInterface.call(i.default(e).not(this._selector), "hide"), n || i.default(e).data("bs.collapse", null));
                                var a = this._getDimension();
                                i.default(this._element).removeClass("collapse").addClass("collapsing"), this._element.style[a] = 0, this._triggerArray.length && i.default(this._triggerArray).removeClass("collapsed").attr("aria-expanded", !0), this.setTransitioning(!0);
                                var s = "scroll" + (a[0].toUpperCase() + a.slice(1)),
                                    u = l.getTransitionDurationFromElement(this._element);
                                i.default(this._element).one(l.TRANSITION_END, (function() {
                                    i.default(o._element).removeClass("collapsing").addClass("collapse show"), o._element.style[a] = "", o.setTransitioning(!1), i.default(o._element).trigger("shown.bs.collapse")
                                })).emulateTransitionEnd(u), this._element.style[a] = this._element[s] + "px"
                            }
                        }
                    }, e.hide = function() {
                        var t = this;
                        if (!this._isTransitioning && i.default(this._element).hasClass("show")) {
                            var e = i.default.Event("hide.bs.collapse");
                            if (i.default(this._element).trigger(e), !e.isDefaultPrevented()) {
                                var n = this._getDimension();
                                this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", l.reflow(this._element), i.default(this._element).addClass("collapsing").removeClass("collapse show");
                                var o = this._triggerArray.length;
                                if (o > 0)
                                    for (var r = 0; r < o; r++) {
                                        var a = this._triggerArray[r],
                                            s = l.getSelectorFromElement(a);
                                        if (null !== s) i.default([].slice.call(document.querySelectorAll(s))).hasClass("show") || i.default(a).addClass("collapsed").attr("aria-expanded", !1)
                                    }
                                this.setTransitioning(!0);
                                this._element.style[n] = "";
                                var u = l.getTransitionDurationFromElement(this._element);
                                i.default(this._element).one(l.TRANSITION_END, (function() {
                                    t.setTransitioning(!1), i.default(t._element).removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")
                                })).emulateTransitionEnd(u)
                            }
                        }
                    }, e.setTransitioning = function(t) {
                        this._isTransitioning = t
                    }, e.dispose = function() {
                        i.default.removeData(this._element, "bs.collapse"), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
                    }, e._getConfig = function(t) {
                        return (t = a({}, T, t)).toggle = Boolean(t.toggle), l.typeCheckConfig(w, t, C), t
                    }, e._getDimension = function() {
                        return i.default(this._element).hasClass("width") ? "width" : "height"
                    }, e._getParent = function() {
                        var e, n = this;
                        l.isElement(this._config.parent) ? (e = this._config.parent, "undefined" != typeof this._config.parent.jquery && (e = this._config.parent[0])) : e = document.querySelector(this._config.parent);
                        var o = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
                            r = [].slice.call(e.querySelectorAll(o));
                        return i.default(r).each((function(e, i) {
                            n._addAriaAndCollapsedClass(t._getTargetFromElement(i), [i])
                        })), e
                    }, e._addAriaAndCollapsedClass = function(t, e) {
                        var n = i.default(t).hasClass("show");
                        e.length && i.default(e).toggleClass("collapsed", !n).attr("aria-expanded", n)
                    }, t._getTargetFromElement = function(t) {
                        var e = l.getSelectorFromElement(t);
                        return e ? document.querySelector(e) : null
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this),
                                o = n.data("bs.collapse"),
                                r = a({}, T, n.data(), "object" == typeof e && e ? e : {});
                            if (!o && r.toggle && "string" == typeof e && /show|hide/.test(e) && (r.toggle = !1), o || (o = new t(this, r), n.data("bs.collapse", o)), "string" == typeof e) {
                                if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                                o[e]()
                            }
                        }))
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return T
                        }
                    }]), t
                }();
            i.default(document).on("click.bs.collapse.data-api", '[data-toggle="collapse"]', (function(t) {
                "A" === t.currentTarget.tagName && t.preventDefault();
                var e = i.default(this),
                    n = l.getSelectorFromElement(this),
                    o = [].slice.call(document.querySelectorAll(n));
                i.default(o).each((function() {
                    var t = i.default(this),
                        n = t.data("bs.collapse") ? "toggle" : e.data();
                    S._jQueryInterface.call(t, n)
                }))
            })), i.default.fn[w] = S._jQueryInterface, i.default.fn[w].Constructor = S, i.default.fn[w].noConflict = function() {
                return i.default.fn[w] = E, S._jQueryInterface
            };
            var D = "undefined" != typeof window && "undefined" != typeof document && "undefined" != typeof navigator,
                N = function() {
                    for (var t = ["Edge", "Trident", "Firefox"], e = 0; e < t.length; e += 1)
                        if (D && navigator.userAgent.indexOf(t[e]) >= 0) return 1;
                    return 0
                }();
            var k = D && window.Promise ? function(t) {
                var e = !1;
                return function() {
                    e || (e = !0, window.Promise.resolve().then((function() {
                        e = !1, t()
                    })))
                }
            } : function(t) {
                var e = !1;
                return function() {
                    e || (e = !0, setTimeout((function() {
                        e = !1, t()
                    }), N))
                }
            };

            function A(t) {
                return t && "[object Function]" === {}.toString.call(t)
            }

            function I(t, e) {
                if (1 !== t.nodeType) return [];
                var n = t.ownerDocument.defaultView.getComputedStyle(t, null);
                return e ? n[e] : n
            }

            function O(t) {
                return "HTML" === t.nodeName ? t : t.parentNode || t.host
            }

            function x(t) {
                if (!t) return document.body;
                switch (t.nodeName) {
                    case "HTML":
                    case "BODY":
                        return t.ownerDocument.body;
                    case "#document":
                        return t.body
                }
                var e = I(t),
                    n = e.overflow,
                    i = e.overflowX,
                    o = e.overflowY;
                return /(auto|scroll|overlay)/.test(n + o + i) ? t : x(O(t))
            }

            function j(t) {
                return t && t.referenceNode ? t.referenceNode : t
            }
            var L = D && !(!window.MSInputMethodContext || !document.documentMode),
                P = D && /MSIE 10/.test(navigator.userAgent);

            function F(t) {
                return 11 === t ? L : 10 === t ? P : L || P
            }

            function R(t) {
                if (!t) return document.documentElement;
                for (var e = F(10) ? document.body : null, n = t.offsetParent || null; n === e && t.nextElementSibling;) n = (t = t.nextElementSibling).offsetParent;
                var i = n && n.nodeName;
                return i && "BODY" !== i && "HTML" !== i ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) && "static" === I(n, "position") ? R(n) : n : t ? t.ownerDocument.documentElement : document.documentElement
            }

            function H(t) {
                return null !== t.parentNode ? H(t.parentNode) : t
            }

            function M(t, e) {
                if (!(t && t.nodeType && e && e.nodeType)) return document.documentElement;
                var n = t.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING,
                    i = n ? t : e,
                    o = n ? e : t,
                    r = document.createRange();
                r.setStart(i, 0), r.setEnd(o, 0);
                var a, s, l = r.commonAncestorContainer;
                if (t !== l && e !== l || i.contains(o)) return "BODY" === (s = (a = l).nodeName) || "HTML" !== s && R(a.firstElementChild) !== a ? R(l) : l;
                var u = H(t);
                return u.host ? M(u.host, e) : M(t, H(e).host)
            }

            function q(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "top",
                    n = "top" === e ? "scrollTop" : "scrollLeft",
                    i = t.nodeName;
                if ("BODY" === i || "HTML" === i) {
                    var o = t.ownerDocument.documentElement,
                        r = t.ownerDocument.scrollingElement || o;
                    return r[n]
                }
                return t[n]
            }

            function B(t, e) {
                var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                    i = q(e, "top"),
                    o = q(e, "left"),
                    r = n ? -1 : 1;
                return t.top += i * r, t.bottom += i * r, t.left += o * r, t.right += o * r, t
            }

            function Q(t, e) {
                var n = "x" === e ? "Left" : "Top",
                    i = "Left" === n ? "Right" : "Bottom";
                return parseFloat(t["border" + n + "Width"]) + parseFloat(t["border" + i + "Width"])
            }

            function W(t, e, n, i) {
                return Math.max(e["offset" + t], e["scroll" + t], n["client" + t], n["offset" + t], n["scroll" + t], F(10) ? parseInt(n["offset" + t]) + parseInt(i["margin" + ("Height" === t ? "Top" : "Left")]) + parseInt(i["margin" + ("Height" === t ? "Bottom" : "Right")]) : 0)
            }

            function U(t) {
                var e = t.body,
                    n = t.documentElement,
                    i = F(10) && getComputedStyle(n);
                return {
                    height: W("Height", e, n, i),
                    width: W("Width", e, n, i)
                }
            }
            var V = function(t, e) {
                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                },
                Y = function() {
                    function t(t, e) {
                        for (var n = 0; n < e.length; n++) {
                            var i = e[n];
                            i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                        }
                    }
                    return function(e, n, i) {
                        return n && t(e.prototype, n), i && t(e, i), e
                    }
                }(),
                z = function(t, e, n) {
                    return e in t ? Object.defineProperty(t, e, {
                        value: n,
                        enumerable: !0,
                        configurable: !0,
                        writable: !0
                    }) : t[e] = n, t
                },
                X = Object.assign || function(t) {
                    for (var e = 1; e < arguments.length; e++) {
                        var n = arguments[e];
                        for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
                    }
                    return t
                };

            function K(t) {
                return X({}, t, {
                    right: t.left + t.width,
                    bottom: t.top + t.height
                })
            }

            function G(t) {
                var e = {};
                try {
                    if (F(10)) {
                        e = t.getBoundingClientRect();
                        var n = q(t, "top"),
                            i = q(t, "left");
                        e.top += n, e.left += i, e.bottom += n, e.right += i
                    } else e = t.getBoundingClientRect()
                } catch (t) {}
                var o = {
                        left: e.left,
                        top: e.top,
                        width: e.right - e.left,
                        height: e.bottom - e.top
                    },
                    r = "HTML" === t.nodeName ? U(t.ownerDocument) : {},
                    a = r.width || t.clientWidth || o.width,
                    s = r.height || t.clientHeight || o.height,
                    l = t.offsetWidth - a,
                    u = t.offsetHeight - s;
                if (l || u) {
                    var f = I(t);
                    l -= Q(f, "x"), u -= Q(f, "y"), o.width -= l, o.height -= u
                }
                return K(o)
            }

            function $(t, e) {
                var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                    i = F(10),
                    o = "HTML" === e.nodeName,
                    r = G(t),
                    a = G(e),
                    s = x(t),
                    l = I(e),
                    u = parseFloat(l.borderTopWidth),
                    f = parseFloat(l.borderLeftWidth);
                n && o && (a.top = Math.max(a.top, 0), a.left = Math.max(a.left, 0));
                var d = K({
                    top: r.top - a.top - u,
                    left: r.left - a.left - f,
                    width: r.width,
                    height: r.height
                });
                if (d.marginTop = 0, d.marginLeft = 0, !i && o) {
                    var c = parseFloat(l.marginTop),
                        h = parseFloat(l.marginLeft);
                    d.top -= u - c, d.bottom -= u - c, d.left -= f - h, d.right -= f - h, d.marginTop = c, d.marginLeft = h
                }
                return (i && !n ? e.contains(s) : e === s && "BODY" !== s.nodeName) && (d = B(d, e)), d
            }

            function J(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                    n = t.ownerDocument.documentElement,
                    i = $(t, n),
                    o = Math.max(n.clientWidth, window.innerWidth || 0),
                    r = Math.max(n.clientHeight, window.innerHeight || 0),
                    a = e ? 0 : q(n),
                    s = e ? 0 : q(n, "left"),
                    l = {
                        top: a - i.top + i.marginTop,
                        left: s - i.left + i.marginLeft,
                        width: o,
                        height: r
                    };
                return K(l)
            }

            function Z(t) {
                var e = t.nodeName;
                if ("BODY" === e || "HTML" === e) return !1;
                if ("fixed" === I(t, "position")) return !0;
                var n = O(t);
                return !!n && Z(n)
            }

            function tt(t) {
                if (!t || !t.parentElement || F()) return document.documentElement;
                for (var e = t.parentElement; e && "none" === I(e, "transform");) e = e.parentElement;
                return e || document.documentElement
            }

            function et(t, e, n, i) {
                var o = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                    r = {
                        top: 0,
                        left: 0
                    },
                    a = o ? tt(t) : M(t, j(e));
                if ("viewport" === i) r = J(a, o);
                else {
                    var s = void 0;
                    "scrollParent" === i ? "BODY" === (s = x(O(e))).nodeName && (s = t.ownerDocument.documentElement) : s = "window" === i ? t.ownerDocument.documentElement : i;
                    var l = $(s, a, o);
                    if ("HTML" !== s.nodeName || Z(a)) r = l;
                    else {
                        var u = U(t.ownerDocument),
                            f = u.height,
                            d = u.width;
                        r.top += l.top - l.marginTop, r.bottom = f + l.top, r.left += l.left - l.marginLeft, r.right = d + l.left
                    }
                }
                var c = "number" == typeof(n = n || 0);
                return r.left += c ? n : n.left || 0, r.top += c ? n : n.top || 0, r.right -= c ? n : n.right || 0, r.bottom -= c ? n : n.bottom || 0, r
            }

            function nt(t) {
                return t.width * t.height
            }

            function it(t, e, n, i, o) {
                var r = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
                if (-1 === t.indexOf("auto")) return t;
                var a = et(n, i, r, o),
                    s = {
                        top: {
                            width: a.width,
                            height: e.top - a.top
                        },
                        right: {
                            width: a.right - e.right,
                            height: a.height
                        },
                        bottom: {
                            width: a.width,
                            height: a.bottom - e.bottom
                        },
                        left: {
                            width: e.left - a.left,
                            height: a.height
                        }
                    },
                    l = Object.keys(s).map((function(t) {
                        return X({
                            key: t
                        }, s[t], {
                            area: nt(s[t])
                        })
                    })).sort((function(t, e) {
                        return e.area - t.area
                    })),
                    u = l.filter((function(t) {
                        var e = t.width,
                            i = t.height;
                        return e >= n.clientWidth && i >= n.clientHeight
                    })),
                    f = u.length > 0 ? u[0].key : l[0].key,
                    d = t.split("-")[1];
                return f + (d ? "-" + d : "")
            }

            function ot(t, e, n) {
                var i = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null,
                    o = i ? tt(e) : M(e, j(n));
                return $(n, o, i)
            }

            function rt(t) {
                var e = t.ownerDocument.defaultView.getComputedStyle(t),
                    n = parseFloat(e.marginTop || 0) + parseFloat(e.marginBottom || 0),
                    i = parseFloat(e.marginLeft || 0) + parseFloat(e.marginRight || 0);
                return {
                    width: t.offsetWidth + i,
                    height: t.offsetHeight + n
                }
            }

            function at(t) {
                var e = {
                    left: "right",
                    right: "left",
                    bottom: "top",
                    top: "bottom"
                };
                return t.replace(/left|right|bottom|top/g, (function(t) {
                    return e[t]
                }))
            }

            function st(t, e, n) {
                n = n.split("-")[0];
                var i = rt(t),
                    o = {
                        width: i.width,
                        height: i.height
                    },
                    r = -1 !== ["right", "left"].indexOf(n),
                    a = r ? "top" : "left",
                    s = r ? "left" : "top",
                    l = r ? "height" : "width",
                    u = r ? "width" : "height";
                return o[a] = e[a] + e[l] / 2 - i[l] / 2, o[s] = n === s ? e[s] - i[u] : e[at(s)], o
            }

            function lt(t, e) {
                return Array.prototype.find ? t.find(e) : t.filter(e)[0]
            }

            function ut(t, e, n) {
                return (void 0 === n ? t : t.slice(0, function(t, e, n) {
                    if (Array.prototype.findIndex) return t.findIndex((function(t) {
                        return t[e] === n
                    }));
                    var i = lt(t, (function(t) {
                        return t[e] === n
                    }));
                    return t.indexOf(i)
                }(t, "name", n))).forEach((function(t) {
                    t.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
                    var n = t.function || t.fn;
                    t.enabled && A(n) && (e.offsets.popper = K(e.offsets.popper), e.offsets.reference = K(e.offsets.reference), e = n(e, t))
                })), e
            }

            function ft() {
                if (!this.state.isDestroyed) {
                    var t = {
                        instance: this,
                        styles: {},
                        arrowStyles: {},
                        attributes: {},
                        flipped: !1,
                        offsets: {}
                    };
                    t.offsets.reference = ot(this.state, this.popper, this.reference, this.options.positionFixed), t.placement = it(this.options.placement, t.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), t.originalPlacement = t.placement, t.positionFixed = this.options.positionFixed, t.offsets.popper = st(this.popper, t.offsets.reference, t.placement), t.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", t = ut(this.modifiers, t), this.state.isCreated ? this.options.onUpdate(t) : (this.state.isCreated = !0, this.options.onCreate(t))
                }
            }

            function dt(t, e) {
                return t.some((function(t) {
                    var n = t.name;
                    return t.enabled && n === e
                }))
            }

            function ct(t) {
                for (var e = [!1, "ms", "Webkit", "Moz", "O"], n = t.charAt(0).toUpperCase() + t.slice(1), i = 0; i < e.length; i++) {
                    var o = e[i],
                        r = o ? "" + o + n : t;
                    if ("undefined" != typeof document.body.style[r]) return r
                }
                return null
            }

            function ht() {
                return this.state.isDestroyed = !0, dt(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[ct("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
            }

            function pt(t) {
                var e = t.ownerDocument;
                return e ? e.defaultView : window
            }

            function mt(t, e, n, i) {
                n.updateBound = i, pt(t).addEventListener("resize", n.updateBound, {
                    passive: !0
                });
                var o = x(t);
                return function t(e, n, i, o) {
                    var r = "BODY" === e.nodeName,
                        a = r ? e.ownerDocument.defaultView : e;
                    a.addEventListener(n, i, {
                        passive: !0
                    }), r || t(x(a.parentNode), n, i, o), o.push(a)
                }(o, "scroll", n.updateBound, n.scrollParents), n.scrollElement = o, n.eventsEnabled = !0, n
            }

            function gt() {
                this.state.eventsEnabled || (this.state = mt(this.reference, this.options, this.state, this.scheduleUpdate))
            }

            function vt() {
                var t, e;
                this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (t = this.reference, e = this.state, pt(t).removeEventListener("resize", e.updateBound), e.scrollParents.forEach((function(t) {
                    t.removeEventListener("scroll", e.updateBound)
                })), e.updateBound = null, e.scrollParents = [], e.scrollElement = null, e.eventsEnabled = !1, e))
            }

            function _t(t) {
                return "" !== t && !isNaN(parseFloat(t)) && isFinite(t)
            }

            function bt(t, e) {
                Object.keys(e).forEach((function(n) {
                    var i = ""; - 1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(n) && _t(e[n]) && (i = "px"), t.style[n] = e[n] + i
                }))
            }
            var yt = D && /Firefox/i.test(navigator.userAgent);

            function wt(t, e, n) {
                var i = lt(t, (function(t) {
                        return t.name === e
                    })),
                    o = !!i && t.some((function(t) {
                        return t.name === n && t.enabled && t.order < i.order
                    }));
                if (!o) {
                    var r = "`" + e + "`",
                        a = "`" + n + "`";
                    console.warn(a + " modifier is required by " + r + " modifier in order to work, be sure to include it before " + r + "!")
                }
                return o
            }
            var Et = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
                Tt = Et.slice(3);

            function Ct(t) {
                var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                    n = Tt.indexOf(t),
                    i = Tt.slice(n + 1).concat(Tt.slice(0, n));
                return e ? i.reverse() : i
            }
            var St = "flip",
                Dt = "clockwise",
                Nt = "counterclockwise";

            function kt(t, e, n, i) {
                var o = [0, 0],
                    r = -1 !== ["right", "left"].indexOf(i),
                    a = t.split(/(\+|\-)/).map((function(t) {
                        return t.trim()
                    })),
                    s = a.indexOf(lt(a, (function(t) {
                        return -1 !== t.search(/,|\s/)
                    })));
                a[s] && -1 === a[s].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
                var l = /\s*,\s*|\s+/,
                    u = -1 !== s ? [a.slice(0, s).concat([a[s].split(l)[0]]), [a[s].split(l)[1]].concat(a.slice(s + 1))] : [a];
                return (u = u.map((function(t, i) {
                    var o = (1 === i ? !r : r) ? "height" : "width",
                        a = !1;
                    return t.reduce((function(t, e) {
                        return "" === t[t.length - 1] && -1 !== ["+", "-"].indexOf(e) ? (t[t.length - 1] = e, a = !0, t) : a ? (t[t.length - 1] += e, a = !1, t) : t.concat(e)
                    }), []).map((function(t) {
                        return function(t, e, n, i) {
                            var o = t.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
                                r = +o[1],
                                a = o[2];
                            if (!r) return t;
                            if (0 === a.indexOf("%")) {
                                var s = void 0;
                                switch (a) {
                                    case "%p":
                                        s = n;
                                        break;
                                    case "%":
                                    case "%r":
                                    default:
                                        s = i
                                }
                                return K(s)[e] / 100 * r
                            }
                            if ("vh" === a || "vw" === a) return ("vh" === a ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * r;
                            return r
                        }(t, o, e, n)
                    }))
                }))).forEach((function(t, e) {
                    t.forEach((function(n, i) {
                        _t(n) && (o[e] += n * ("-" === t[i - 1] ? -1 : 1))
                    }))
                })), o
            }
            var At = {
                    placement: "bottom",
                    positionFixed: !1,
                    eventsEnabled: !0,
                    removeOnDestroy: !1,
                    onCreate: function() {},
                    onUpdate: function() {},
                    modifiers: {
                        shift: {
                            order: 100,
                            enabled: !0,
                            fn: function(t) {
                                var e = t.placement,
                                    n = e.split("-")[0],
                                    i = e.split("-")[1];
                                if (i) {
                                    var o = t.offsets,
                                        r = o.reference,
                                        a = o.popper,
                                        s = -1 !== ["bottom", "top"].indexOf(n),
                                        l = s ? "left" : "top",
                                        u = s ? "width" : "height",
                                        f = {
                                            start: z({}, l, r[l]),
                                            end: z({}, l, r[l] + r[u] - a[u])
                                        };
                                    t.offsets.popper = X({}, a, f[i])
                                }
                                return t
                            }
                        },
                        offset: {
                            order: 200,
                            enabled: !0,
                            fn: function(t, e) {
                                var n = e.offset,
                                    i = t.placement,
                                    o = t.offsets,
                                    r = o.popper,
                                    a = o.reference,
                                    s = i.split("-")[0],
                                    l = void 0;
                                return l = _t(+n) ? [+n, 0] : kt(n, r, a, s), "left" === s ? (r.top += l[0], r.left -= l[1]) : "right" === s ? (r.top += l[0], r.left += l[1]) : "top" === s ? (r.left += l[0], r.top -= l[1]) : "bottom" === s && (r.left += l[0], r.top += l[1]), t.popper = r, t
                            },
                            offset: 0
                        },
                        preventOverflow: {
                            order: 300,
                            enabled: !0,
                            fn: function(t, e) {
                                var n = e.boundariesElement || R(t.instance.popper);
                                t.instance.reference === n && (n = R(n));
                                var i = ct("transform"),
                                    o = t.instance.popper.style,
                                    r = o.top,
                                    a = o.left,
                                    s = o[i];
                                o.top = "", o.left = "", o[i] = "";
                                var l = et(t.instance.popper, t.instance.reference, e.padding, n, t.positionFixed);
                                o.top = r, o.left = a, o[i] = s, e.boundaries = l;
                                var u = e.priority,
                                    f = t.offsets.popper,
                                    d = {
                                        primary: function(t) {
                                            var n = f[t];
                                            return f[t] < l[t] && !e.escapeWithReference && (n = Math.max(f[t], l[t])), z({}, t, n)
                                        },
                                        secondary: function(t) {
                                            var n = "right" === t ? "left" : "top",
                                                i = f[n];
                                            return f[t] > l[t] && !e.escapeWithReference && (i = Math.min(f[n], l[t] - ("right" === t ? f.width : f.height))), z({}, n, i)
                                        }
                                    };
                                return u.forEach((function(t) {
                                    var e = -1 !== ["left", "top"].indexOf(t) ? "primary" : "secondary";
                                    f = X({}, f, d[e](t))
                                })), t.offsets.popper = f, t
                            },
                            priority: ["left", "right", "top", "bottom"],
                            padding: 5,
                            boundariesElement: "scrollParent"
                        },
                        keepTogether: {
                            order: 400,
                            enabled: !0,
                            fn: function(t) {
                                var e = t.offsets,
                                    n = e.popper,
                                    i = e.reference,
                                    o = t.placement.split("-")[0],
                                    r = Math.floor,
                                    a = -1 !== ["top", "bottom"].indexOf(o),
                                    s = a ? "right" : "bottom",
                                    l = a ? "left" : "top",
                                    u = a ? "width" : "height";
                                return n[s] < r(i[l]) && (t.offsets.popper[l] = r(i[l]) - n[u]), n[l] > r(i[s]) && (t.offsets.popper[l] = r(i[s])), t
                            }
                        },
                        arrow: {
                            order: 500,
                            enabled: !0,
                            fn: function(t, e) {
                                var n;
                                if (!wt(t.instance.modifiers, "arrow", "keepTogether")) return t;
                                var i = e.element;
                                if ("string" == typeof i) {
                                    if (!(i = t.instance.popper.querySelector(i))) return t
                                } else if (!t.instance.popper.contains(i)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), t;
                                var o = t.placement.split("-")[0],
                                    r = t.offsets,
                                    a = r.popper,
                                    s = r.reference,
                                    l = -1 !== ["left", "right"].indexOf(o),
                                    u = l ? "height" : "width",
                                    f = l ? "Top" : "Left",
                                    d = f.toLowerCase(),
                                    c = l ? "left" : "top",
                                    h = l ? "bottom" : "right",
                                    p = rt(i)[u];
                                s[h] - p < a[d] && (t.offsets.popper[d] -= a[d] - (s[h] - p)), s[d] + p > a[h] && (t.offsets.popper[d] += s[d] + p - a[h]), t.offsets.popper = K(t.offsets.popper);
                                var m = s[d] + s[u] / 2 - p / 2,
                                    g = I(t.instance.popper),
                                    v = parseFloat(g["margin" + f]),
                                    _ = parseFloat(g["border" + f + "Width"]),
                                    b = m - t.offsets.popper[d] - v - _;
                                return b = Math.max(Math.min(a[u] - p, b), 0), t.arrowElement = i, t.offsets.arrow = (z(n = {}, d, Math.round(b)), z(n, c, ""), n), t
                            },
                            element: "[x-arrow]"
                        },
                        flip: {
                            order: 600,
                            enabled: !0,
                            fn: function(t, e) {
                                if (dt(t.instance.modifiers, "inner")) return t;
                                if (t.flipped && t.placement === t.originalPlacement) return t;
                                var n = et(t.instance.popper, t.instance.reference, e.padding, e.boundariesElement, t.positionFixed),
                                    i = t.placement.split("-")[0],
                                    o = at(i),
                                    r = t.placement.split("-")[1] || "",
                                    a = [];
                                switch (e.behavior) {
                                    case St:
                                        a = [i, o];
                                        break;
                                    case Dt:
                                        a = Ct(i);
                                        break;
                                    case Nt:
                                        a = Ct(i, !0);
                                        break;
                                    default:
                                        a = e.behavior
                                }
                                return a.forEach((function(s, l) {
                                    if (i !== s || a.length === l + 1) return t;
                                    i = t.placement.split("-")[0], o = at(i);
                                    var u = t.offsets.popper,
                                        f = t.offsets.reference,
                                        d = Math.floor,
                                        c = "left" === i && d(u.right) > d(f.left) || "right" === i && d(u.left) < d(f.right) || "top" === i && d(u.bottom) > d(f.top) || "bottom" === i && d(u.top) < d(f.bottom),
                                        h = d(u.left) < d(n.left),
                                        p = d(u.right) > d(n.right),
                                        m = d(u.top) < d(n.top),
                                        g = d(u.bottom) > d(n.bottom),
                                        v = "left" === i && h || "right" === i && p || "top" === i && m || "bottom" === i && g,
                                        _ = -1 !== ["top", "bottom"].indexOf(i),
                                        b = !!e.flipVariations && (_ && "start" === r && h || _ && "end" === r && p || !_ && "start" === r && m || !_ && "end" === r && g),
                                        y = !!e.flipVariationsByContent && (_ && "start" === r && p || _ && "end" === r && h || !_ && "start" === r && g || !_ && "end" === r && m),
                                        w = b || y;
                                    (c || v || w) && (t.flipped = !0, (c || v) && (i = a[l + 1]), w && (r = function(t) {
                                        return "end" === t ? "start" : "start" === t ? "end" : t
                                    }(r)), t.placement = i + (r ? "-" + r : ""), t.offsets.popper = X({}, t.offsets.popper, st(t.instance.popper, t.offsets.reference, t.placement)), t = ut(t.instance.modifiers, t, "flip"))
                                })), t
                            },
                            behavior: "flip",
                            padding: 5,
                            boundariesElement: "viewport",
                            flipVariations: !1,
                            flipVariationsByContent: !1
                        },
                        inner: {
                            order: 700,
                            enabled: !1,
                            fn: function(t) {
                                var e = t.placement,
                                    n = e.split("-")[0],
                                    i = t.offsets,
                                    o = i.popper,
                                    r = i.reference,
                                    a = -1 !== ["left", "right"].indexOf(n),
                                    s = -1 === ["top", "left"].indexOf(n);
                                return o[a ? "left" : "top"] = r[n] - (s ? o[a ? "width" : "height"] : 0), t.placement = at(e), t.offsets.popper = K(o), t
                            }
                        },
                        hide: {
                            order: 800,
                            enabled: !0,
                            fn: function(t) {
                                if (!wt(t.instance.modifiers, "hide", "preventOverflow")) return t;
                                var e = t.offsets.reference,
                                    n = lt(t.instance.modifiers, (function(t) {
                                        return "preventOverflow" === t.name
                                    })).boundaries;
                                if (e.bottom < n.top || e.left > n.right || e.top > n.bottom || e.right < n.left) {
                                    if (!0 === t.hide) return t;
                                    t.hide = !0, t.attributes["x-out-of-boundaries"] = ""
                                } else {
                                    if (!1 === t.hide) return t;
                                    t.hide = !1, t.attributes["x-out-of-boundaries"] = !1
                                }
                                return t
                            }
                        },
                        computeStyle: {
                            order: 850,
                            enabled: !0,
                            fn: function(t, e) {
                                var n = e.x,
                                    i = e.y,
                                    o = t.offsets.popper,
                                    r = lt(t.instance.modifiers, (function(t) {
                                        return "applyStyle" === t.name
                                    })).gpuAcceleration;
                                void 0 !== r && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");
                                var a = void 0 !== r ? r : e.gpuAcceleration,
                                    s = R(t.instance.popper),
                                    l = G(s),
                                    u = {
                                        position: o.position
                                    },
                                    f = function(t, e) {
                                        var n = t.offsets,
                                            i = n.popper,
                                            o = n.reference,
                                            r = Math.round,
                                            a = Math.floor,
                                            s = function(t) {
                                                return t
                                            },
                                            l = r(o.width),
                                            u = r(i.width),
                                            f = -1 !== ["left", "right"].indexOf(t.placement),
                                            d = -1 !== t.placement.indexOf("-"),
                                            c = e ? f || d || l % 2 == u % 2 ? r : a : s,
                                            h = e ? r : s;
                                        return {
                                            left: c(l % 2 == 1 && u % 2 == 1 && !d && e ? i.left - 1 : i.left),
                                            top: h(i.top),
                                            bottom: h(i.bottom),
                                            right: c(i.right)
                                        }
                                    }(t, window.devicePixelRatio < 2 || !yt),
                                    d = "bottom" === n ? "top" : "bottom",
                                    c = "right" === i ? "left" : "right",
                                    h = ct("transform"),
                                    p = void 0,
                                    m = void 0;
                                if (m = "bottom" === d ? "HTML" === s.nodeName ? -s.clientHeight + f.bottom : -l.height + f.bottom : f.top, p = "right" === c ? "HTML" === s.nodeName ? -s.clientWidth + f.right : -l.width + f.right : f.left, a && h) u[h] = "translate3d(" + p + "px, " + m + "px, 0)", u[d] = 0, u[c] = 0, u.willChange = "transform";
                                else {
                                    var g = "bottom" === d ? -1 : 1,
                                        v = "right" === c ? -1 : 1;
                                    u[d] = m * g, u[c] = p * v, u.willChange = d + ", " + c
                                }
                                var _ = {
                                    "x-placement": t.placement
                                };
                                return t.attributes = X({}, _, t.attributes), t.styles = X({}, u, t.styles), t.arrowStyles = X({}, t.offsets.arrow, t.arrowStyles), t
                            },
                            gpuAcceleration: !0,
                            x: "bottom",
                            y: "right"
                        },
                        applyStyle: {
                            order: 900,
                            enabled: !0,
                            fn: function(t) {
                                var e, n;
                                return bt(t.instance.popper, t.styles), e = t.instance.popper, n = t.attributes, Object.keys(n).forEach((function(t) {
                                    !1 !== n[t] ? e.setAttribute(t, n[t]) : e.removeAttribute(t)
                                })), t.arrowElement && Object.keys(t.arrowStyles).length && bt(t.arrowElement, t.arrowStyles), t
                            },
                            onLoad: function(t, e, n, i, o) {
                                var r = ot(o, e, t, n.positionFixed),
                                    a = it(n.placement, r, e, t, n.modifiers.flip.boundariesElement, n.modifiers.flip.padding);
                                return e.setAttribute("x-placement", a), bt(e, {
                                    position: n.positionFixed ? "fixed" : "absolute"
                                }), n
                            },
                            gpuAcceleration: void 0
                        }
                    }
                },
                It = function() {
                    function t(e, n) {
                        var i = this,
                            o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                        V(this, t), this.scheduleUpdate = function() {
                            return requestAnimationFrame(i.update)
                        }, this.update = k(this.update.bind(this)), this.options = X({}, t.Defaults, o), this.state = {
                            isDestroyed: !1,
                            isCreated: !1,
                            scrollParents: []
                        }, this.reference = e && e.jquery ? e[0] : e, this.popper = n && n.jquery ? n[0] : n, this.options.modifiers = {}, Object.keys(X({}, t.Defaults.modifiers, o.modifiers)).forEach((function(e) {
                            i.options.modifiers[e] = X({}, t.Defaults.modifiers[e] || {}, o.modifiers ? o.modifiers[e] : {})
                        })), this.modifiers = Object.keys(this.options.modifiers).map((function(t) {
                            return X({
                                name: t
                            }, i.options.modifiers[t])
                        })).sort((function(t, e) {
                            return t.order - e.order
                        })), this.modifiers.forEach((function(t) {
                            t.enabled && A(t.onLoad) && t.onLoad(i.reference, i.popper, i.options, t, i.state)
                        })), this.update();
                        var r = this.options.eventsEnabled;
                        r && this.enableEventListeners(), this.state.eventsEnabled = r
                    }
                    return Y(t, [{
                        key: "update",
                        value: function() {
                            return ft.call(this)
                        }
                    }, {
                        key: "destroy",
                        value: function() {
                            return ht.call(this)
                        }
                    }, {
                        key: "enableEventListeners",
                        value: function() {
                            return gt.call(this)
                        }
                    }, {
                        key: "disableEventListeners",
                        value: function() {
                            return vt.call(this)
                        }
                    }]), t
                }();
            It.Utils = ("undefined" != typeof window ? window : global).PopperUtils, It.placements = Et, It.Defaults = At;
            var Ot = "dropdown",
                xt = i.default.fn[Ot],
                jt = new RegExp("38|40|27"),
                Lt = {
                    offset: 0,
                    flip: !0,
                    boundary: "scrollParent",
                    reference: "toggle",
                    display: "dynamic",
                    popperConfig: null
                },
                Pt = {
                    offset: "(number|string|function)",
                    flip: "boolean",
                    boundary: "(string|element)",
                    reference: "(string|element)",
                    display: "string",
                    popperConfig: "(null|object)"
                },
                Ft = function() {
                    function t(t, e) {
                        this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
                    }
                    var e = t.prototype;
                    return e.toggle = function() {
                        if (!this._element.disabled && !i.default(this._element).hasClass("disabled")) {
                            var e = i.default(this._menu).hasClass("show");
                            t._clearMenus(), e || this.show(!0)
                        }
                    }, e.show = function(e) {
                        if (void 0 === e && (e = !1), !(this._element.disabled || i.default(this._element).hasClass("disabled") || i.default(this._menu).hasClass("show"))) {
                            var n = {
                                    relatedTarget: this._element
                                },
                                o = i.default.Event("show.bs.dropdown", n),
                                r = t._getParentFromElement(this._element);
                            if (i.default(r).trigger(o), !o.isDefaultPrevented()) {
                                if (!this._inNavbar && e) {
                                    if ("undefined" == typeof It) throw new TypeError("Bootstrap's dropdowns require Popper (https://popper.js.org)");
                                    var a = this._element;
                                    "parent" === this._config.reference ? a = r : l.isElement(this._config.reference) && (a = this._config.reference, "undefined" != typeof this._config.reference.jquery && (a = this._config.reference[0])), "scrollParent" !== this._config.boundary && i.default(r).addClass("position-static"), this._popper = new It(a, this._menu, this._getPopperConfig())
                                }
                                "ontouchstart" in document.documentElement && 0 === i.default(r).closest(".navbar-nav").length && i.default(document.body).children().on("mouseover", null, i.default.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), i.default(this._menu).toggleClass("show"), i.default(r).toggleClass("show").trigger(i.default.Event("shown.bs.dropdown", n))
                            }
                        }
                    }, e.hide = function() {
                        if (!this._element.disabled && !i.default(this._element).hasClass("disabled") && i.default(this._menu).hasClass("show")) {
                            var e = {
                                    relatedTarget: this._element
                                },
                                n = i.default.Event("hide.bs.dropdown", e),
                                o = t._getParentFromElement(this._element);
                            i.default(o).trigger(n), n.isDefaultPrevented() || (this._popper && this._popper.destroy(), i.default(this._menu).toggleClass("show"), i.default(o).toggleClass("show").trigger(i.default.Event("hidden.bs.dropdown", e)))
                        }
                    }, e.dispose = function() {
                        i.default.removeData(this._element, "bs.dropdown"), i.default(this._element).off(".bs.dropdown"), this._element = null, this._menu = null, null !== this._popper && (this._popper.destroy(), this._popper = null)
                    }, e.update = function() {
                        this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
                    }, e._addEventListeners = function() {
                        var t = this;
                        i.default(this._element).on("click.bs.dropdown", (function(e) {
                            e.preventDefault(), e.stopPropagation(), t.toggle()
                        }))
                    }, e._getConfig = function(t) {
                        return t = a({}, this.constructor.Default, i.default(this._element).data(), t), l.typeCheckConfig(Ot, t, this.constructor.DefaultType), t
                    }, e._getMenuElement = function() {
                        if (!this._menu) {
                            var e = t._getParentFromElement(this._element);
                            e && (this._menu = e.querySelector(".dropdown-menu"))
                        }
                        return this._menu
                    }, e._getPlacement = function() {
                        var t = i.default(this._element.parentNode),
                            e = "bottom-start";
                        return t.hasClass("dropup") ? e = i.default(this._menu).hasClass("dropdown-menu-right") ? "top-end" : "top-start" : t.hasClass("dropright") ? e = "right-start" : t.hasClass("dropleft") ? e = "left-start" : i.default(this._menu).hasClass("dropdown-menu-right") && (e = "bottom-end"), e
                    }, e._detectNavbar = function() {
                        return i.default(this._element).closest(".navbar").length > 0
                    }, e._getOffset = function() {
                        var t = this,
                            e = {};
                        return "function" == typeof this._config.offset ? e.fn = function(e) {
                            return e.offsets = a({}, e.offsets, t._config.offset(e.offsets, t._element) || {}), e
                        } : e.offset = this._config.offset, e
                    }, e._getPopperConfig = function() {
                        var t = {
                            placement: this._getPlacement(),
                            modifiers: {
                                offset: this._getOffset(),
                                flip: {
                                    enabled: this._config.flip
                                },
                                preventOverflow: {
                                    boundariesElement: this._config.boundary
                                }
                            }
                        };
                        return "static" === this._config.display && (t.modifiers.applyStyle = {
                            enabled: !1
                        }), a({}, t, this._config.popperConfig)
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this).data("bs.dropdown");
                            if (n || (n = new t(this, "object" == typeof e ? e : null), i.default(this).data("bs.dropdown", n)), "string" == typeof e) {
                                if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                                n[e]()
                            }
                        }))
                    }, t._clearMenus = function(e) {
                        if (!e || 3 !== e.which && ("keyup" !== e.type || 9 === e.which))
                            for (var n = [].slice.call(document.querySelectorAll('[data-toggle="dropdown"]')), o = 0, r = n.length; o < r; o++) {
                                var a = t._getParentFromElement(n[o]),
                                    s = i.default(n[o]).data("bs.dropdown"),
                                    l = {
                                        relatedTarget: n[o]
                                    };
                                if (e && "click" === e.type && (l.clickEvent = e), s) {
                                    var u = s._menu;
                                    if (i.default(a).hasClass("show") && !(e && ("click" === e.type && /input|textarea/i.test(e.target.tagName) || "keyup" === e.type && 9 === e.which) && i.default.contains(a, e.target))) {
                                        var f = i.default.Event("hide.bs.dropdown", l);
                                        i.default(a).trigger(f), f.isDefaultPrevented() || ("ontouchstart" in document.documentElement && i.default(document.body).children().off("mouseover", null, i.default.noop), n[o].setAttribute("aria-expanded", "false"), s._popper && s._popper.destroy(), i.default(u).removeClass("show"), i.default(a).removeClass("show").trigger(i.default.Event("hidden.bs.dropdown", l)))
                                    }
                                }
                            }
                    }, t._getParentFromElement = function(t) {
                        var e, n = l.getSelectorFromElement(t);
                        return n && (e = document.querySelector(n)), e || t.parentNode
                    }, t._dataApiKeydownHandler = function(e) {
                        if (!(/input|textarea/i.test(e.target.tagName) ? 32 === e.which || 27 !== e.which && (40 !== e.which && 38 !== e.which || i.default(e.target).closest(".dropdown-menu").length) : !jt.test(e.which)) && !this.disabled && !i.default(this).hasClass("disabled")) {
                            var n = t._getParentFromElement(this),
                                o = i.default(n).hasClass("show");
                            if (o || 27 !== e.which) {
                                if (e.preventDefault(), e.stopPropagation(), !o || 27 === e.which || 32 === e.which) return 27 === e.which && i.default(n.querySelector('[data-toggle="dropdown"]')).trigger("focus"), void i.default(this).trigger("click");
                                var r = [].slice.call(n.querySelectorAll(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)")).filter((function(t) {
                                    return i.default(t).is(":visible")
                                }));
                                if (0 !== r.length) {
                                    var a = r.indexOf(e.target);
                                    38 === e.which && a > 0 && a--, 40 === e.which && a < r.length - 1 && a++, a < 0 && (a = 0), r[a].focus()
                                }
                            }
                        }
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return Lt
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return Pt
                        }
                    }]), t
                }();
            i.default(document).on("keydown.bs.dropdown.data-api", '[data-toggle="dropdown"]', Ft._dataApiKeydownHandler).on("keydown.bs.dropdown.data-api", ".dropdown-menu", Ft._dataApiKeydownHandler).on("click.bs.dropdown.data-api keyup.bs.dropdown.data-api", Ft._clearMenus).on("click.bs.dropdown.data-api", '[data-toggle="dropdown"]', (function(t) {
                t.preventDefault(), t.stopPropagation(), Ft._jQueryInterface.call(i.default(this), "toggle")
            })).on("click.bs.dropdown.data-api", ".dropdown form", (function(t) {
                t.stopPropagation()
            })), i.default.fn[Ot] = Ft._jQueryInterface, i.default.fn[Ot].Constructor = Ft, i.default.fn[Ot].noConflict = function() {
                return i.default.fn[Ot] = xt, Ft._jQueryInterface
            };
            var Rt = i.default.fn.modal,
                Ht = {
                    backdrop: !0,
                    keyboard: !0,
                    focus: !0,
                    show: !0
                },
                Mt = {
                    backdrop: "(boolean|string)",
                    keyboard: "boolean",
                    focus: "boolean",
                    show: "boolean"
                },
                qt = function() {
                    function t(t, e) {
                        this._config = this._getConfig(e), this._element = t, this._dialog = t.querySelector(".modal-dialog"), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0
                    }
                    var e = t.prototype;
                    return e.toggle = function(t) {
                        return this._isShown ? this.hide() : this.show(t)
                    }, e.show = function(t) {
                        var e = this;
                        if (!this._isShown && !this._isTransitioning) {
                            i.default(this._element).hasClass("fade") && (this._isTransitioning = !0);
                            var n = i.default.Event("show.bs.modal", {
                                relatedTarget: t
                            });
                            i.default(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), i.default(this._element).on("click.dismiss.bs.modal", '[data-dismiss="modal"]', (function(t) {
                                return e.hide(t)
                            })), i.default(this._dialog).on("mousedown.dismiss.bs.modal", (function() {
                                i.default(e._element).one("mouseup.dismiss.bs.modal", (function(t) {
                                    i.default(t.target).is(e._element) && (e._ignoreBackdropClick = !0)
                                }))
                            })), this._showBackdrop((function() {
                                return e._showElement(t)
                            })))
                        }
                    }, e.hide = function(t) {
                        var e = this;
                        if (t && t.preventDefault(), this._isShown && !this._isTransitioning) {
                            var n = i.default.Event("hide.bs.modal");
                            if (i.default(this._element).trigger(n), this._isShown && !n.isDefaultPrevented()) {
                                this._isShown = !1;
                                var o = i.default(this._element).hasClass("fade");
                                if (o && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), i.default(document).off("focusin.bs.modal"), i.default(this._element).removeClass("show"), i.default(this._element).off("click.dismiss.bs.modal"), i.default(this._dialog).off("mousedown.dismiss.bs.modal"), o) {
                                    var r = l.getTransitionDurationFromElement(this._element);
                                    i.default(this._element).one(l.TRANSITION_END, (function(t) {
                                        return e._hideModal(t)
                                    })).emulateTransitionEnd(r)
                                } else this._hideModal()
                            }
                        }
                    }, e.dispose = function() {
                        [window, this._element, this._dialog].forEach((function(t) {
                            return i.default(t).off(".bs.modal")
                        })), i.default(document).off("focusin.bs.modal"), i.default.removeData(this._element, "bs.modal"), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null
                    }, e.handleUpdate = function() {
                        this._adjustDialog()
                    }, e._getConfig = function(t) {
                        return t = a({}, Ht, t), l.typeCheckConfig("modal", t, Mt), t
                    }, e._triggerBackdropTransition = function() {
                        var t = this,
                            e = i.default.Event("hidePrevented.bs.modal");
                        if (i.default(this._element).trigger(e), !e.isDefaultPrevented()) {
                            var n = this._element.scrollHeight > document.documentElement.clientHeight;
                            n || (this._element.style.overflowY = "hidden"), this._element.classList.add("modal-static");
                            var o = l.getTransitionDurationFromElement(this._dialog);
                            i.default(this._element).off(l.TRANSITION_END), i.default(this._element).one(l.TRANSITION_END, (function() {
                                t._element.classList.remove("modal-static"), n || i.default(t._element).one(l.TRANSITION_END, (function() {
                                    t._element.style.overflowY = ""
                                })).emulateTransitionEnd(t._element, o)
                            })).emulateTransitionEnd(o), this._element.focus()
                        }
                    }, e._showElement = function(t) {
                        var e = this,
                            n = i.default(this._element).hasClass("fade"),
                            o = this._dialog ? this._dialog.querySelector(".modal-body") : null;
                        this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), i.default(this._dialog).hasClass("modal-dialog-scrollable") && o ? o.scrollTop = 0 : this._element.scrollTop = 0, n && l.reflow(this._element), i.default(this._element).addClass("show"), this._config.focus && this._enforceFocus();
                        var r = i.default.Event("shown.bs.modal", {
                                relatedTarget: t
                            }),
                            a = function() {
                                e._config.focus && e._element.focus(), e._isTransitioning = !1, i.default(e._element).trigger(r)
                            };
                        if (n) {
                            var s = l.getTransitionDurationFromElement(this._dialog);
                            i.default(this._dialog).one(l.TRANSITION_END, a).emulateTransitionEnd(s)
                        } else a()
                    }, e._enforceFocus = function() {
                        var t = this;
                        i.default(document).off("focusin.bs.modal").on("focusin.bs.modal", (function(e) {
                            document !== e.target && t._element !== e.target && 0 === i.default(t._element).has(e.target).length && t._element.focus()
                        }))
                    }, e._setEscapeEvent = function() {
                        var t = this;
                        this._isShown ? i.default(this._element).on("keydown.dismiss.bs.modal", (function(e) {
                            t._config.keyboard && 27 === e.which ? (e.preventDefault(), t.hide()) : t._config.keyboard || 27 !== e.which || t._triggerBackdropTransition()
                        })) : this._isShown || i.default(this._element).off("keydown.dismiss.bs.modal")
                    }, e._setResizeEvent = function() {
                        var t = this;
                        this._isShown ? i.default(window).on("resize.bs.modal", (function(e) {
                            return t.handleUpdate(e)
                        })) : i.default(window).off("resize.bs.modal")
                    }, e._hideModal = function() {
                        var t = this;
                        this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._showBackdrop((function() {
                            i.default(document.body).removeClass("modal-open"), t._resetAdjustments(), t._resetScrollbar(), i.default(t._element).trigger("hidden.bs.modal")
                        }))
                    }, e._removeBackdrop = function() {
                        this._backdrop && (i.default(this._backdrop).remove(), this._backdrop = null)
                    }, e._showBackdrop = function(t) {
                        var e = this,
                            n = i.default(this._element).hasClass("fade") ? "fade" : "";
                        if (this._isShown && this._config.backdrop) {
                            if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), i.default(this._backdrop).appendTo(document.body), i.default(this._element).on("click.dismiss.bs.modal", (function(t) {
                                    e._ignoreBackdropClick ? e._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === e._config.backdrop ? e._triggerBackdropTransition() : e.hide())
                                })), n && l.reflow(this._backdrop), i.default(this._backdrop).addClass("show"), !t) return;
                            if (!n) return void t();
                            var o = l.getTransitionDurationFromElement(this._backdrop);
                            i.default(this._backdrop).one(l.TRANSITION_END, t).emulateTransitionEnd(o)
                        } else if (!this._isShown && this._backdrop) {
                            i.default(this._backdrop).removeClass("show");
                            var r = function() {
                                e._removeBackdrop(), t && t()
                            };
                            if (i.default(this._element).hasClass("fade")) {
                                var a = l.getTransitionDurationFromElement(this._backdrop);
                                i.default(this._backdrop).one(l.TRANSITION_END, r).emulateTransitionEnd(a)
                            } else r()
                        } else t && t()
                    }, e._adjustDialog = function() {
                        var t = this._element.scrollHeight > document.documentElement.clientHeight;
                        !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
                    }, e._resetAdjustments = function() {
                        this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                    }, e._checkScrollbar = function() {
                        var t = document.body.getBoundingClientRect();
                        this._isBodyOverflowing = Math.round(t.left + t.right) < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
                    }, e._setScrollbar = function() {
                        var t = this;
                        if (this._isBodyOverflowing) {
                            var e = [].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top")),
                                n = [].slice.call(document.querySelectorAll(".sticky-top"));
                            i.default(e).each((function(e, n) {
                                var o = n.style.paddingRight,
                                    r = i.default(n).css("padding-right");
                                i.default(n).data("padding-right", o).css("padding-right", parseFloat(r) + t._scrollbarWidth + "px")
                            })), i.default(n).each((function(e, n) {
                                var o = n.style.marginRight,
                                    r = i.default(n).css("margin-right");
                                i.default(n).data("margin-right", o).css("margin-right", parseFloat(r) - t._scrollbarWidth + "px")
                            }));
                            var o = document.body.style.paddingRight,
                                r = i.default(document.body).css("padding-right");
                            i.default(document.body).data("padding-right", o).css("padding-right", parseFloat(r) + this._scrollbarWidth + "px")
                        }
                        i.default(document.body).addClass("modal-open")
                    }, e._resetScrollbar = function() {
                        var t = [].slice.call(document.querySelectorAll(".fixed-top, .fixed-bottom, .is-fixed, .sticky-top"));
                        i.default(t).each((function(t, e) {
                            var n = i.default(e).data("padding-right");
                            i.default(e).removeData("padding-right"), e.style.paddingRight = n || ""
                        }));
                        var e = [].slice.call(document.querySelectorAll(".sticky-top"));
                        i.default(e).each((function(t, e) {
                            var n = i.default(e).data("margin-right");
                            "undefined" != typeof n && i.default(e).css("margin-right", n).removeData("margin-right")
                        }));
                        var n = i.default(document.body).data("padding-right");
                        i.default(document.body).removeData("padding-right"), document.body.style.paddingRight = n || ""
                    }, e._getScrollbarWidth = function() {
                        var t = document.createElement("div");
                        t.className = "modal-scrollbar-measure", document.body.appendChild(t);
                        var e = t.getBoundingClientRect().width - t.clientWidth;
                        return document.body.removeChild(t), e
                    }, t._jQueryInterface = function(e, n) {
                        return this.each((function() {
                            var o = i.default(this).data("bs.modal"),
                                r = a({}, Ht, i.default(this).data(), "object" == typeof e && e ? e : {});
                            if (o || (o = new t(this, r), i.default(this).data("bs.modal", o)), "string" == typeof e) {
                                if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                                o[e](n)
                            } else r.show && o.show(n)
                        }))
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return Ht
                        }
                    }]), t
                }();
            i.default(document).on("click.bs.modal.data-api", '[data-toggle="modal"]', (function(t) {
                var e, n = this,
                    o = l.getSelectorFromElement(this);
                o && (e = document.querySelector(o));
                var r = i.default(e).data("bs.modal") ? "toggle" : a({}, i.default(e).data(), i.default(this).data());
                "A" !== this.tagName && "AREA" !== this.tagName || t.preventDefault();
                var s = i.default(e).one("show.bs.modal", (function(t) {
                    t.isDefaultPrevented() || s.one("hidden.bs.modal", (function() {
                        i.default(n).is(":visible") && n.focus()
                    }))
                }));
                qt._jQueryInterface.call(i.default(e), r, this)
            })), i.default.fn.modal = qt._jQueryInterface, i.default.fn.modal.Constructor = qt, i.default.fn.modal.noConflict = function() {
                return i.default.fn.modal = Rt, qt._jQueryInterface
            };
            var Bt = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
                Qt = {
                    "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                    a: ["target", "href", "title", "rel"],
                    area: [],
                    b: [],
                    br: [],
                    col: [],
                    code: [],
                    div: [],
                    em: [],
                    hr: [],
                    h1: [],
                    h2: [],
                    h3: [],
                    h4: [],
                    h5: [],
                    h6: [],
                    i: [],
                    img: ["src", "srcset", "alt", "title", "width", "height"],
                    li: [],
                    ol: [],
                    p: [],
                    pre: [],
                    s: [],
                    small: [],
                    span: [],
                    sub: [],
                    sup: [],
                    strong: [],
                    u: [],
                    ul: []
                },
                Wt = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
                Ut = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;

            function Vt(t, e, n) {
                if (0 === t.length) return t;
                if (n && "function" == typeof n) return n(t);
                for (var i = (new window.DOMParser).parseFromString(t, "text/html"), o = Object.keys(e), r = [].slice.call(i.body.querySelectorAll("*")), a = function(t, n) {
                        var i = r[t],
                            a = i.nodeName.toLowerCase();
                        if (-1 === o.indexOf(i.nodeName.toLowerCase())) return i.parentNode.removeChild(i), "continue";
                        var s = [].slice.call(i.attributes),
                            l = [].concat(e["*"] || [], e[a] || []);
                        s.forEach((function(t) {
                            (function(t, e) {
                                var n = t.nodeName.toLowerCase();
                                if (-1 !== e.indexOf(n)) return -1 === Bt.indexOf(n) || Boolean(t.nodeValue.match(Wt) || t.nodeValue.match(Ut));
                                for (var i = e.filter((function(t) {
                                        return t instanceof RegExp
                                    })), o = 0, r = i.length; o < r; o++)
                                    if (n.match(i[o])) return !0;
                                return !1
                            })(t, l) || i.removeAttribute(t.nodeName)
                        }))
                    }, s = 0, l = r.length; s < l; s++) a(s);
                return i.body.innerHTML
            }
            var Yt = "tooltip",
                zt = i.default.fn[Yt],
                Xt = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
                Kt = ["sanitize", "whiteList", "sanitizeFn"],
                Gt = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(number|string|function)",
                    container: "(string|element|boolean)",
                    fallbackPlacement: "(string|array)",
                    boundary: "(string|element)",
                    customClass: "(string|function)",
                    sanitize: "boolean",
                    sanitizeFn: "(null|function)",
                    whiteList: "object",
                    popperConfig: "(null|object)"
                },
                $t = {
                    AUTO: "auto",
                    TOP: "top",
                    RIGHT: "right",
                    BOTTOM: "bottom",
                    LEFT: "left"
                },
                Jt = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: 0,
                    container: !1,
                    fallbackPlacement: "flip",
                    boundary: "scrollParent",
                    customClass: "",
                    sanitize: !0,
                    sanitizeFn: null,
                    whiteList: Qt,
                    popperConfig: null
                },
                Zt = {
                    HIDE: "hide.bs.tooltip",
                    HIDDEN: "hidden.bs.tooltip",
                    SHOW: "show.bs.tooltip",
                    SHOWN: "shown.bs.tooltip",
                    INSERTED: "inserted.bs.tooltip",
                    CLICK: "click.bs.tooltip",
                    FOCUSIN: "focusin.bs.tooltip",
                    FOCUSOUT: "focusout.bs.tooltip",
                    MOUSEENTER: "mouseenter.bs.tooltip",
                    MOUSELEAVE: "mouseleave.bs.tooltip"
                },
                te = function() {
                    function t(t, e) {
                        if ("undefined" == typeof It) throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
                        this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
                    }
                    var e = t.prototype;
                    return e.enable = function() {
                        this._isEnabled = !0
                    }, e.disable = function() {
                        this._isEnabled = !1
                    }, e.toggleEnabled = function() {
                        this._isEnabled = !this._isEnabled
                    }, e.toggle = function(t) {
                        if (this._isEnabled)
                            if (t) {
                                var e = this.constructor.DATA_KEY,
                                    n = i.default(t.currentTarget).data(e);
                                n || (n = new this.constructor(t.currentTarget, this._getDelegateConfig()), i.default(t.currentTarget).data(e, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n)
                            } else {
                                if (i.default(this.getTipElement()).hasClass("show")) return void this._leave(null, this);
                                this._enter(null, this)
                            }
                    }, e.dispose = function() {
                        clearTimeout(this._timeout), i.default.removeData(this.element, this.constructor.DATA_KEY), i.default(this.element).off(this.constructor.EVENT_KEY), i.default(this.element).closest(".modal").off("hide.bs.modal", this._hideModalHandler), this.tip && i.default(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
                    }, e.show = function() {
                        var t = this;
                        if ("none" === i.default(this.element).css("display")) throw new Error("Please use show on visible elements");
                        var e = i.default.Event(this.constructor.Event.SHOW);
                        if (this.isWithContent() && this._isEnabled) {
                            i.default(this.element).trigger(e);
                            var n = l.findShadowRoot(this.element),
                                o = i.default.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element);
                            if (e.isDefaultPrevented() || !o) return;
                            var r = this.getTipElement(),
                                a = l.getUID(this.constructor.NAME);
                            r.setAttribute("id", a), this.element.setAttribute("aria-describedby", a), this.setContent(), this.config.animation && i.default(r).addClass("fade");
                            var s = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                                u = this._getAttachment(s);
                            this.addAttachmentClass(u);
                            var f = this._getContainer();
                            i.default(r).data(this.constructor.DATA_KEY, this), i.default.contains(this.element.ownerDocument.documentElement, this.tip) || i.default(r).appendTo(f), i.default(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new It(this.element, r, this._getPopperConfig(u)), i.default(r).addClass("show"), i.default(r).addClass(this.config.customClass), "ontouchstart" in document.documentElement && i.default(document.body).children().on("mouseover", null, i.default.noop);
                            var d = function() {
                                t.config.animation && t._fixTransition();
                                var e = t._hoverState;
                                t._hoverState = null, i.default(t.element).trigger(t.constructor.Event.SHOWN), "out" === e && t._leave(null, t)
                            };
                            if (i.default(this.tip).hasClass("fade")) {
                                var c = l.getTransitionDurationFromElement(this.tip);
                                i.default(this.tip).one(l.TRANSITION_END, d).emulateTransitionEnd(c)
                            } else d()
                        }
                    }, e.hide = function(t) {
                        var e = this,
                            n = this.getTipElement(),
                            o = i.default.Event(this.constructor.Event.HIDE),
                            r = function() {
                                "show" !== e._hoverState && n.parentNode && n.parentNode.removeChild(n), e._cleanTipClass(), e.element.removeAttribute("aria-describedby"), i.default(e.element).trigger(e.constructor.Event.HIDDEN), null !== e._popper && e._popper.destroy(), t && t()
                            };
                        if (i.default(this.element).trigger(o), !o.isDefaultPrevented()) {
                            if (i.default(n).removeClass("show"), "ontouchstart" in document.documentElement && i.default(document.body).children().off("mouseover", null, i.default.noop), this._activeTrigger.click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1, i.default(this.tip).hasClass("fade")) {
                                var a = l.getTransitionDurationFromElement(n);
                                i.default(n).one(l.TRANSITION_END, r).emulateTransitionEnd(a)
                            } else r();
                            this._hoverState = ""
                        }
                    }, e.update = function() {
                        null !== this._popper && this._popper.scheduleUpdate()
                    }, e.isWithContent = function() {
                        return Boolean(this.getTitle())
                    }, e.addAttachmentClass = function(t) {
                        i.default(this.getTipElement()).addClass("bs-tooltip-" + t)
                    }, e.getTipElement = function() {
                        return this.tip = this.tip || i.default(this.config.template)[0], this.tip
                    }, e.setContent = function() {
                        var t = this.getTipElement();
                        this.setElementContent(i.default(t.querySelectorAll(".tooltip-inner")), this.getTitle()), i.default(t).removeClass("fade show")
                    }, e.setElementContent = function(t, e) {
                        "object" != typeof e || !e.nodeType && !e.jquery ? this.config.html ? (this.config.sanitize && (e = Vt(e, this.config.whiteList, this.config.sanitizeFn)), t.html(e)) : t.text(e) : this.config.html ? i.default(e).parent().is(t) || t.empty().append(e) : t.text(i.default(e).text())
                    }, e.getTitle = function() {
                        var t = this.element.getAttribute("data-original-title");
                        return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
                    }, e._getPopperConfig = function(t) {
                        var e = this;
                        return a({}, {
                            placement: t,
                            modifiers: {
                                offset: this._getOffset(),
                                flip: {
                                    behavior: this.config.fallbackPlacement
                                },
                                arrow: {
                                    element: ".arrow"
                                },
                                preventOverflow: {
                                    boundariesElement: this.config.boundary
                                }
                            },
                            onCreate: function(t) {
                                t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                            },
                            onUpdate: function(t) {
                                return e._handlePopperPlacementChange(t)
                            }
                        }, this.config.popperConfig)
                    }, e._getOffset = function() {
                        var t = this,
                            e = {};
                        return "function" == typeof this.config.offset ? e.fn = function(e) {
                            return e.offsets = a({}, e.offsets, t.config.offset(e.offsets, t.element) || {}), e
                        } : e.offset = this.config.offset, e
                    }, e._getContainer = function() {
                        return !1 === this.config.container ? document.body : l.isElement(this.config.container) ? i.default(this.config.container) : i.default(document).find(this.config.container)
                    }, e._getAttachment = function(t) {
                        return $t[t.toUpperCase()]
                    }, e._setListeners = function() {
                        var t = this;
                        this.config.trigger.split(" ").forEach((function(e) {
                            if ("click" === e) i.default(t.element).on(t.constructor.Event.CLICK, t.config.selector, (function(e) {
                                return t.toggle(e)
                            }));
                            else if ("manual" !== e) {
                                var n = "hover" === e ? t.constructor.Event.MOUSEENTER : t.constructor.Event.FOCUSIN,
                                    o = "hover" === e ? t.constructor.Event.MOUSELEAVE : t.constructor.Event.FOCUSOUT;
                                i.default(t.element).on(n, t.config.selector, (function(e) {
                                    return t._enter(e)
                                })).on(o, t.config.selector, (function(e) {
                                    return t._leave(e)
                                }))
                            }
                        })), this._hideModalHandler = function() {
                            t.element && t.hide()
                        }, i.default(this.element).closest(".modal").on("hide.bs.modal", this._hideModalHandler), this.config.selector ? this.config = a({}, this.config, {
                            trigger: "manual",
                            selector: ""
                        }) : this._fixTitle()
                    }, e._fixTitle = function() {
                        var t = typeof this.element.getAttribute("data-original-title");
                        (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
                    }, e._enter = function(t, e) {
                        var n = this.constructor.DATA_KEY;
                        (e = e || i.default(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), i.default(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusin" === t.type ? "focus" : "hover"] = !0), i.default(e.getTipElement()).hasClass("show") || "show" === e._hoverState ? e._hoverState = "show" : (clearTimeout(e._timeout), e._hoverState = "show", e.config.delay && e.config.delay.show ? e._timeout = setTimeout((function() {
                            "show" === e._hoverState && e.show()
                        }), e.config.delay.show) : e.show())
                    }, e._leave = function(t, e) {
                        var n = this.constructor.DATA_KEY;
                        (e = e || i.default(t.currentTarget).data(n)) || (e = new this.constructor(t.currentTarget, this._getDelegateConfig()), i.default(t.currentTarget).data(n, e)), t && (e._activeTrigger["focusout" === t.type ? "focus" : "hover"] = !1), e._isWithActiveTrigger() || (clearTimeout(e._timeout), e._hoverState = "out", e.config.delay && e.config.delay.hide ? e._timeout = setTimeout((function() {
                            "out" === e._hoverState && e.hide()
                        }), e.config.delay.hide) : e.hide())
                    }, e._isWithActiveTrigger = function() {
                        for (var t in this._activeTrigger)
                            if (this._activeTrigger[t]) return !0;
                        return !1
                    }, e._getConfig = function(t) {
                        var e = i.default(this.element).data();
                        return Object.keys(e).forEach((function(t) {
                            -1 !== Kt.indexOf(t) && delete e[t]
                        })), "number" == typeof(t = a({}, this.constructor.Default, e, "object" == typeof t && t ? t : {})).delay && (t.delay = {
                            show: t.delay,
                            hide: t.delay
                        }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t.content && (t.content = t.content.toString()), l.typeCheckConfig(Yt, t, this.constructor.DefaultType), t.sanitize && (t.template = Vt(t.template, t.whiteList, t.sanitizeFn)), t
                    }, e._getDelegateConfig = function() {
                        var t = {};
                        if (this.config)
                            for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                        return t
                    }, e._cleanTipClass = function() {
                        var t = i.default(this.getTipElement()),
                            e = t.attr("class").match(Xt);
                        null !== e && e.length && t.removeClass(e.join(""))
                    }, e._handlePopperPlacementChange = function(t) {
                        this.tip = t.instance.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
                    }, e._fixTransition = function() {
                        var t = this.getTipElement(),
                            e = this.config.animation;
                        null === t.getAttribute("x-placement") && (i.default(t).removeClass("fade"), this.config.animation = !1, this.hide(), this.show(), this.config.animation = e)
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this),
                                o = n.data("bs.tooltip"),
                                r = "object" == typeof e && e;
                            if ((o || !/dispose|hide/.test(e)) && (o || (o = new t(this, r), n.data("bs.tooltip", o)), "string" == typeof e)) {
                                if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                                o[e]()
                            }
                        }))
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return Jt
                        }
                    }, {
                        key: "NAME",
                        get: function() {
                            return Yt
                        }
                    }, {
                        key: "DATA_KEY",
                        get: function() {
                            return "bs.tooltip"
                        }
                    }, {
                        key: "Event",
                        get: function() {
                            return Zt
                        }
                    }, {
                        key: "EVENT_KEY",
                        get: function() {
                            return ".bs.tooltip"
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return Gt
                        }
                    }]), t
                }();
            i.default.fn[Yt] = te._jQueryInterface, i.default.fn[Yt].Constructor = te, i.default.fn[Yt].noConflict = function() {
                return i.default.fn[Yt] = zt, te._jQueryInterface
            };
            var ee = "popover",
                ne = i.default.fn[ee],
                ie = new RegExp("(^|\\s)bs-popover\\S+", "g"),
                oe = a({}, te.Default, {
                    placement: "right",
                    trigger: "click",
                    content: "",
                    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                }),
                re = a({}, te.DefaultType, {
                    content: "(string|element|function)"
                }),
                ae = {
                    HIDE: "hide.bs.popover",
                    HIDDEN: "hidden.bs.popover",
                    SHOW: "show.bs.popover",
                    SHOWN: "shown.bs.popover",
                    INSERTED: "inserted.bs.popover",
                    CLICK: "click.bs.popover",
                    FOCUSIN: "focusin.bs.popover",
                    FOCUSOUT: "focusout.bs.popover",
                    MOUSEENTER: "mouseenter.bs.popover",
                    MOUSELEAVE: "mouseleave.bs.popover"
                },
                se = function(t) {
                    var e, n;

                    function o() {
                        return t.apply(this, arguments) || this
                    }
                    n = t, (e = o).prototype = Object.create(n.prototype), e.prototype.constructor = e, e.__proto__ = n;
                    var a = o.prototype;
                    return a.isWithContent = function() {
                        return this.getTitle() || this._getContent()
                    }, a.addAttachmentClass = function(t) {
                        i.default(this.getTipElement()).addClass("bs-popover-" + t)
                    }, a.getTipElement = function() {
                        return this.tip = this.tip || i.default(this.config.template)[0], this.tip
                    }, a.setContent = function() {
                        var t = i.default(this.getTipElement());
                        this.setElementContent(t.find(".popover-header"), this.getTitle());
                        var e = this._getContent();
                        "function" == typeof e && (e = e.call(this.element)), this.setElementContent(t.find(".popover-body"), e), t.removeClass("fade show")
                    }, a._getContent = function() {
                        return this.element.getAttribute("data-content") || this.config.content
                    }, a._cleanTipClass = function() {
                        var t = i.default(this.getTipElement()),
                            e = t.attr("class").match(ie);
                        null !== e && e.length > 0 && t.removeClass(e.join(""))
                    }, o._jQueryInterface = function(t) {
                        return this.each((function() {
                            var e = i.default(this).data("bs.popover"),
                                n = "object" == typeof t ? t : null;
                            if ((e || !/dispose|hide/.test(t)) && (e || (e = new o(this, n), i.default(this).data("bs.popover", e)), "string" == typeof t)) {
                                if ("undefined" == typeof e[t]) throw new TypeError('No method named "' + t + '"');
                                e[t]()
                            }
                        }))
                    }, r(o, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return oe
                        }
                    }, {
                        key: "NAME",
                        get: function() {
                            return ee
                        }
                    }, {
                        key: "DATA_KEY",
                        get: function() {
                            return "bs.popover"
                        }
                    }, {
                        key: "Event",
                        get: function() {
                            return ae
                        }
                    }, {
                        key: "EVENT_KEY",
                        get: function() {
                            return ".bs.popover"
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return re
                        }
                    }]), o
                }(te);
            i.default.fn[ee] = se._jQueryInterface, i.default.fn[ee].Constructor = se, i.default.fn[ee].noConflict = function() {
                return i.default.fn[ee] = ne, se._jQueryInterface
            };
            var le = "scrollspy",
                ue = i.default.fn[le],
                fe = {
                    offset: 10,
                    method: "auto",
                    target: ""
                },
                de = {
                    offset: "number",
                    method: "string",
                    target: "(string|element)"
                },
                ce = function() {
                    function t(t, e) {
                        var n = this;
                        this._element = t, this._scrollElement = "BODY" === t.tagName ? window : t, this._config = this._getConfig(e), this._selector = this._config.target + " .nav-link," + this._config.target + " .list-group-item," + this._config.target + " .dropdown-item", this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, i.default(this._scrollElement).on("scroll.bs.scrollspy", (function(t) {
                            return n._process(t)
                        })), this.refresh(), this._process()
                    }
                    var e = t.prototype;
                    return e.refresh = function() {
                        var t = this,
                            e = this._scrollElement === this._scrollElement.window ? "offset" : "position",
                            n = "auto" === this._config.method ? e : this._config.method,
                            o = "position" === n ? this._getScrollTop() : 0;
                        this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), [].slice.call(document.querySelectorAll(this._selector)).map((function(t) {
                            var e, r = l.getSelectorFromElement(t);
                            if (r && (e = document.querySelector(r)), e) {
                                var a = e.getBoundingClientRect();
                                if (a.width || a.height) return [i.default(e)[n]().top + o, r]
                            }
                            return null
                        })).filter((function(t) {
                            return t
                        })).sort((function(t, e) {
                            return t[0] - e[0]
                        })).forEach((function(e) {
                            t._offsets.push(e[0]), t._targets.push(e[1])
                        }))
                    }, e.dispose = function() {
                        i.default.removeData(this._element, "bs.scrollspy"), i.default(this._scrollElement).off(".bs.scrollspy"), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
                    }, e._getConfig = function(t) {
                        if ("string" != typeof(t = a({}, fe, "object" == typeof t && t ? t : {})).target && l.isElement(t.target)) {
                            var e = i.default(t.target).attr("id");
                            e || (e = l.getUID(le), i.default(t.target).attr("id", e)), t.target = "#" + e
                        }
                        return l.typeCheckConfig(le, t, de), t
                    }, e._getScrollTop = function() {
                        return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
                    }, e._getScrollHeight = function() {
                        return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
                    }, e._getOffsetHeight = function() {
                        return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
                    }, e._process = function() {
                        var t = this._getScrollTop() + this._config.offset,
                            e = this._getScrollHeight(),
                            n = this._config.offset + e - this._getOffsetHeight();
                        if (this._scrollHeight !== e && this.refresh(), t >= n) {
                            var i = this._targets[this._targets.length - 1];
                            this._activeTarget !== i && this._activate(i)
                        } else {
                            if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
                            for (var o = this._offsets.length; o--;) {
                                this._activeTarget !== this._targets[o] && t >= this._offsets[o] && ("undefined" == typeof this._offsets[o + 1] || t < this._offsets[o + 1]) && this._activate(this._targets[o])
                            }
                        }
                    }, e._activate = function(t) {
                        this._activeTarget = t, this._clear();
                        var e = this._selector.split(",").map((function(e) {
                                return e + '[data-target="' + t + '"],' + e + '[href="' + t + '"]'
                            })),
                            n = i.default([].slice.call(document.querySelectorAll(e.join(","))));
                        n.hasClass("dropdown-item") ? (n.closest(".dropdown").find(".dropdown-toggle").addClass("active"), n.addClass("active")) : (n.addClass("active"), n.parents(".nav, .list-group").prev(".nav-link, .list-group-item").addClass("active"), n.parents(".nav, .list-group").prev(".nav-item").children(".nav-link").addClass("active")), i.default(this._scrollElement).trigger("activate.bs.scrollspy", {
                            relatedTarget: t
                        })
                    }, e._clear = function() {
                        [].slice.call(document.querySelectorAll(this._selector)).filter((function(t) {
                            return t.classList.contains("active")
                        })).forEach((function(t) {
                            return t.classList.remove("active")
                        }))
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this).data("bs.scrollspy");
                            if (n || (n = new t(this, "object" == typeof e && e), i.default(this).data("bs.scrollspy", n)), "string" == typeof e) {
                                if ("undefined" == typeof n[e]) throw new TypeError('No method named "' + e + '"');
                                n[e]()
                            }
                        }))
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return fe
                        }
                    }]), t
                }();
            i.default(window).on("load.bs.scrollspy.data-api", (function() {
                for (var t = [].slice.call(document.querySelectorAll('[data-spy="scroll"]')), e = t.length; e--;) {
                    var n = i.default(t[e]);
                    ce._jQueryInterface.call(n, n.data())
                }
            })), i.default.fn[le] = ce._jQueryInterface, i.default.fn[le].Constructor = ce, i.default.fn[le].noConflict = function() {
                return i.default.fn[le] = ue, ce._jQueryInterface
            };
            var he = i.default.fn.tab,
                pe = function() {
                    function t(t) {
                        this._element = t
                    }
                    var e = t.prototype;
                    return e.show = function() {
                        var t = this;
                        if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && i.default(this._element).hasClass("active") || i.default(this._element).hasClass("disabled"))) {
                            var e, n, o = i.default(this._element).closest(".nav, .list-group")[0],
                                r = l.getSelectorFromElement(this._element);
                            if (o) {
                                var a = "UL" === o.nodeName || "OL" === o.nodeName ? "> li > .active" : ".active";
                                n = (n = i.default.makeArray(i.default(o).find(a)))[n.length - 1]
                            }
                            var s = i.default.Event("hide.bs.tab", {
                                    relatedTarget: this._element
                                }),
                                u = i.default.Event("show.bs.tab", {
                                    relatedTarget: n
                                });
                            if (n && i.default(n).trigger(s), i.default(this._element).trigger(u), !u.isDefaultPrevented() && !s.isDefaultPrevented()) {
                                r && (e = document.querySelector(r)), this._activate(this._element, o);
                                var f = function() {
                                    var e = i.default.Event("hidden.bs.tab", {
                                            relatedTarget: t._element
                                        }),
                                        o = i.default.Event("shown.bs.tab", {
                                            relatedTarget: n
                                        });
                                    i.default(n).trigger(e), i.default(t._element).trigger(o)
                                };
                                e ? this._activate(e, e.parentNode, f) : f()
                            }
                        }
                    }, e.dispose = function() {
                        i.default.removeData(this._element, "bs.tab"), this._element = null
                    }, e._activate = function(t, e, n) {
                        var o = this,
                            r = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? i.default(e).children(".active") : i.default(e).find("> li > .active"))[0],
                            a = n && r && i.default(r).hasClass("fade"),
                            s = function() {
                                return o._transitionComplete(t, r, n)
                            };
                        if (r && a) {
                            var u = l.getTransitionDurationFromElement(r);
                            i.default(r).removeClass("show").one(l.TRANSITION_END, s).emulateTransitionEnd(u)
                        } else s()
                    }, e._transitionComplete = function(t, e, n) {
                        if (e) {
                            i.default(e).removeClass("active");
                            var o = i.default(e.parentNode).find("> .dropdown-menu .active")[0];
                            o && i.default(o).removeClass("active"), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !1)
                        }
                        if (i.default(t).addClass("active"), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !0), l.reflow(t), t.classList.contains("fade") && t.classList.add("show"), t.parentNode && i.default(t.parentNode).hasClass("dropdown-menu")) {
                            var r = i.default(t).closest(".dropdown")[0];
                            if (r) {
                                var a = [].slice.call(r.querySelectorAll(".dropdown-toggle"));
                                i.default(a).addClass("active")
                            }
                            t.setAttribute("aria-expanded", !0)
                        }
                        n && n()
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this),
                                o = n.data("bs.tab");
                            if (o || (o = new t(this), n.data("bs.tab", o)), "string" == typeof e) {
                                if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                                o[e]()
                            }
                        }))
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }]), t
                }();
            i.default(document).on("click.bs.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', (function(t) {
                t.preventDefault(), pe._jQueryInterface.call(i.default(this), "show")
            })), i.default.fn.tab = pe._jQueryInterface, i.default.fn.tab.Constructor = pe, i.default.fn.tab.noConflict = function() {
                return i.default.fn.tab = he, pe._jQueryInterface
            };
            var me = i.default.fn.toast,
                ge = {
                    animation: "boolean",
                    autohide: "boolean",
                    delay: "number"
                },
                ve = {
                    animation: !0,
                    autohide: !0,
                    delay: 500
                },
                _e = function() {
                    function t(t, e) {
                        this._element = t, this._config = this._getConfig(e), this._timeout = null, this._setListeners()
                    }
                    var e = t.prototype;
                    return e.show = function() {
                        var t = this,
                            e = i.default.Event("show.bs.toast");
                        if (i.default(this._element).trigger(e), !e.isDefaultPrevented()) {
                            this._clearTimeout(), this._config.animation && this._element.classList.add("fade");
                            var n = function() {
                                t._element.classList.remove("showing"), t._element.classList.add("show"), i.default(t._element).trigger("shown.bs.toast"), t._config.autohide && (t._timeout = setTimeout((function() {
                                    t.hide()
                                }), t._config.delay))
                            };
                            if (this._element.classList.remove("hide"), l.reflow(this._element), this._element.classList.add("showing"), this._config.animation) {
                                var o = l.getTransitionDurationFromElement(this._element);
                                i.default(this._element).one(l.TRANSITION_END, n).emulateTransitionEnd(o)
                            } else n()
                        }
                    }, e.hide = function() {
                        if (this._element.classList.contains("show")) {
                            var t = i.default.Event("hide.bs.toast");
                            i.default(this._element).trigger(t), t.isDefaultPrevented() || this._close()
                        }
                    }, e.dispose = function() {
                        this._clearTimeout(), this._element.classList.contains("show") && this._element.classList.remove("show"), i.default(this._element).off("click.dismiss.bs.toast"), i.default.removeData(this._element, "bs.toast"), this._element = null, this._config = null
                    }, e._getConfig = function(t) {
                        return t = a({}, ve, i.default(this._element).data(), "object" == typeof t && t ? t : {}), l.typeCheckConfig("toast", t, this.constructor.DefaultType), t
                    }, e._setListeners = function() {
                        var t = this;
                        i.default(this._element).on("click.dismiss.bs.toast", '[data-dismiss="toast"]', (function() {
                            return t.hide()
                        }))
                    }, e._close = function() {
                        var t = this,
                            e = function() {
                                t._element.classList.add("hide"), i.default(t._element).trigger("hidden.bs.toast")
                            };
                        if (this._element.classList.remove("show"), this._config.animation) {
                            var n = l.getTransitionDurationFromElement(this._element);
                            i.default(this._element).one(l.TRANSITION_END, e).emulateTransitionEnd(n)
                        } else e()
                    }, e._clearTimeout = function() {
                        clearTimeout(this._timeout), this._timeout = null
                    }, t._jQueryInterface = function(e) {
                        return this.each((function() {
                            var n = i.default(this),
                                o = n.data("bs.toast");
                            if (o || (o = new t(this, "object" == typeof e && e), n.data("bs.toast", o)), "string" == typeof e) {
                                if ("undefined" == typeof o[e]) throw new TypeError('No method named "' + e + '"');
                                o[e](this)
                            }
                        }))
                    }, r(t, null, [{
                        key: "VERSION",
                        get: function() {
                            return "4.6.0"
                        }
                    }, {
                        key: "DefaultType",
                        get: function() {
                            return ge
                        }
                    }, {
                        key: "Default",
                        get: function() {
                            return ve
                        }
                    }]), t
                }();
            i.default.fn.toast = _e._jQueryInterface, i.default.fn.toast.Constructor = _e, i.default.fn.toast.noConflict = function() {
                return i.default.fn.toast = me, _e._jQueryInterface
            }, t.Alert = d, t.Button = h, t.Carousel = y, t.Collapse = S, t.Dropdown = Ft, t.Modal = qt, t.Popover = se, t.Scrollspy = ce, t.Tab = pe, t.Toast = _e, t.Tooltip = te, t.Util = l, Object.defineProperty(t, "__esModule", {
                value: !0
            })
        }));
        //# sourceMappingURL=bootstrap.bundle.min.js.map
    </script>
    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <script>
        (function(factory) {
            if (typeof define === "function" && define.amd) {
                define(["jquery"], function($) {
                    return factory($)
                })
            } else if (typeof module === "object" && typeof module.exports === "object") {
                exports = factory(require("jquery"))
            } else {
                factory(jQuery)
            }
        })(function($) {
            $.easing.jswing = $.easing.swing;
            var pow = Math.pow,
                sqrt = Math.sqrt,
                sin = Math.sin,
                cos = Math.cos,
                PI = Math.PI,
                c1 = 1.70158,
                c2 = c1 * 1.525,
                c3 = c1 + 1,
                c4 = 2 * PI / 3,
                c5 = 2 * PI / 4.5;

            function bounceOut(x) {
                var n1 = 7.5625,
                    d1 = 2.75;
                if (x < 1 / d1) {
                    return n1 * x * x
                } else if (x < 2 / d1) {
                    return n1 * (x -= 1.5 / d1) * x + .75
                } else if (x < 2.5 / d1) {
                    return n1 * (x -= 2.25 / d1) * x + .9375
                } else {
                    return n1 * (x -= 2.625 / d1) * x + .984375
                }
            }
            $.extend($.easing, {
                def: "easeOutQuad",
                swing: function(x) {
                    return $.easing[$.easing.def](x)
                },
                easeInQuad: function(x) {
                    return x * x
                },
                easeOutQuad: function(x) {
                    return 1 - (1 - x) * (1 - x)
                },
                easeInOutQuad: function(x) {
                    return x < .5 ? 2 * x * x : 1 - pow(-2 * x + 2, 2) / 2
                },
                easeInCubic: function(x) {
                    return x * x * x
                },
                easeOutCubic: function(x) {
                    return 1 - pow(1 - x, 3)
                },
                easeInOutCubic: function(x) {
                    return x < .5 ? 4 * x * x * x : 1 - pow(-2 * x + 2, 3) / 2
                },
                easeInQuart: function(x) {
                    return x * x * x * x
                },
                easeOutQuart: function(x) {
                    return 1 - pow(1 - x, 4)
                },
                easeInOutQuart: function(x) {
                    return x < .5 ? 8 * x * x * x * x : 1 - pow(-2 * x + 2, 4) / 2
                },
                easeInQuint: function(x) {
                    return x * x * x * x * x
                },
                easeOutQuint: function(x) {
                    return 1 - pow(1 - x, 5)
                },
                easeInOutQuint: function(x) {
                    return x < .5 ? 16 * x * x * x * x * x : 1 - pow(-2 * x + 2, 5) / 2
                },
                easeInSine: function(x) {
                    return 1 - cos(x * PI / 2)
                },
                easeOutSine: function(x) {
                    return sin(x * PI / 2)
                },
                easeInOutSine: function(x) {
                    return -(cos(PI * x) - 1) / 2
                },
                easeInExpo: function(x) {
                    return x === 0 ? 0 : pow(2, 10 * x - 10)
                },
                easeOutExpo: function(x) {
                    return x === 1 ? 1 : 1 - pow(2, -10 * x)
                },
                easeInOutExpo: function(x) {
                    return x === 0 ? 0 : x === 1 ? 1 : x < .5 ? pow(2, 20 * x - 10) / 2 : (2 - pow(2, -20 * x + 10)) / 2
                },
                easeInCirc: function(x) {
                    return 1 - sqrt(1 - pow(x, 2))
                },
                easeOutCirc: function(x) {
                    return sqrt(1 - pow(x - 1, 2))
                },
                easeInOutCirc: function(x) {
                    return x < .5 ? (1 - sqrt(1 - pow(2 * x, 2))) / 2 : (sqrt(1 - pow(-2 * x + 2, 2)) + 1) / 2
                },
                easeInElastic: function(x) {
                    return x === 0 ? 0 : x === 1 ? 1 : -pow(2, 10 * x - 10) * sin((x * 10 - 10.75) * c4)
                },
                easeOutElastic: function(x) {
                    return x === 0 ? 0 : x === 1 ? 1 : pow(2, -10 * x) * sin((x * 10 - .75) * c4) + 1
                },
                easeInOutElastic: function(x) {
                    return x === 0 ? 0 : x === 1 ? 1 : x < .5 ? -(pow(2, 20 * x - 10) * sin((20 * x - 11.125) * c5)) / 2 : pow(2, -20 * x + 10) * sin((20 * x - 11.125) * c5) / 2 + 1
                },
                easeInBack: function(x) {
                    return c3 * x * x * x - c1 * x * x
                },
                easeOutBack: function(x) {
                    return 1 + c3 * pow(x - 1, 3) + c1 * pow(x - 1, 2)
                },
                easeInOutBack: function(x) {
                    return x < .5 ? pow(2 * x, 2) * ((c2 + 1) * 2 * x - c2) / 2 : (pow(2 * x - 2, 2) * ((c2 + 1) * (x * 2 - 2) + c2) + 2) / 2
                },
                easeInBounce: function(x) {
                    return 1 - bounceOut(1 - x)
                },
                easeOutBounce: bounceOut,
                easeInOutBounce: function(x) {
                    return x < .5 ? (1 - bounceOut(1 - 2 * x)) / 2 : (1 + bounceOut(2 * x - 1)) / 2
                }
            })
        });
    </script>
    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script> -->

    <script>
        ! function(l) {
            "use strict";
            l("#sidebarToggle, #sidebarToggleTop").on("click", function(e) {
                l("body").toggleClass("sidebar-toggled"), l(".sidebar").toggleClass("toggled"), l(".sidebar").hasClass("toggled") && l(".sidebar .collapse").collapse("hide")
            }), l(window).resize(function() {
                l(window).width() < 768 && l(".sidebar .collapse").collapse("hide"), l(window).width() < 480 && !l(".sidebar").hasClass("toggled") && (l("body").addClass("sidebar-toggled"), l(".sidebar").addClass("toggled"), l(".sidebar .collapse").collapse("hide"))
            }), l("body.fixed-nav .sidebar").on("mousewheel DOMMouseScroll wheel", function(e) {
                var o;
                768 < l(window).width() && (o = (o = e.originalEvent).wheelDelta || -o.detail, this.scrollTop += 30 * (o < 0 ? 1 : -1), e.preventDefault())
            }), l(document).on("scroll", function() {
                100 < l(this).scrollTop() ? l(".scroll-to-top").fadeIn() : l(".scroll-to-top").fadeOut()
            }), l(document).on("click", "a.scroll-to-top", function(e) {
                var o = l(this);
                l("html, body").stop().animate({
                    scrollTop: l(o.attr("href")).offset().top
                }, 1e3, "easeInOutExpo"), e.preventDefault()
            })
        }(jQuery);
    </script>


</body>

</html>