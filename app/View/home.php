<?php
include __DIR__ . '/../Controller/WeatherController.php';
include __DIR__ . '/../helper/sanitization_note.php';
?>

<!DOCTYPE html>
<html lang="ko">

<head>

    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" > -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <meta content="yes" name="apple-mobile-web-app-capable" /> -->
    <meta name="naver-site-verification" content="af133c1c11bf61613d4526d2e4dd93653bb66cf4" />
    <meta name="facebook-domain-verification" content="q5hb1fwx4dasma2taxjegjzrsxrbag" />
    <link rel="dns-prefetch" href="https://www.swanini.com/">
    <link rel="preconnect" href="https://www.swanini.com/">
    <link rel="icon" href="nini/img/swanini_favic.png">
    <link rel="shortcut icon" href="nini/img/swanini_favic.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" content="수화니니 수환느니니 스와니니 swanini swannenini swanne 귀염둥이 아기토끼 냐뮤냐뮤">
    <meta name="keywords" content="수화니니 수환느니니 스와니니 swanini swannenini swanne 귀염둥이 아기토끼 냐뮤냐뮤 사랑해요">
    <meta property="og:url" content="https://www.swanini.com/">
    <meta property="og:title" content="수화니니 | 수화니니 공식 사이트">
    <meta property="og:type" content="website">
    <meta property="og:image" content="nini/img/swanini+nation.png">
    <meta property="og:description" content="Swanne+International">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="수화니니 | 수화니니 공식 사이트">
    <meta name="twitter:description" content="Swanne+International">

    <title>수화니니</title>

    <link rel="manifest" href="nini/pwa/manifest.json" />

    <link rel="stylesheet" href="nini/css/swiper_9.4.1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="nini/css/initLoad.css">

    <link rel="stylesheet" href="nini/css/main_reset.css">

    <link rel="stylesheet" href="nini/css/swa_str.css">
    <link rel="stylesheet" href="nini/css/welc_str.css">

    <link rel="stylesheet" href="nini/css/calc_time.css">
    <link rel="stylesheet" href="nini/css/mlk_coin.css">

    <link rel="stylesheet" href="nini/css/mainMenu.css">
    <link rel="stylesheet" href="nini/css/home_contain.css">
    <link rel="stylesheet" href="nini/css/home_tube.css">
    <link rel="stylesheet" href="nini/css/home_sns.css">

    <link rel="stylesheet" href="nini/css/nini_contain.css">
    <link rel="stylesheet" href="nini/css/home_sns.css">
    <link rel="stylesheet" href="nini/css/3d_btn.css">
    <link rel="stylesheet" href="nini/css/popup.css">

    <link rel="stylesheet" href="nini/css/home_ist.css">

    <link rel="stylesheet" href="nini/css/lang_sel.css">
    <link rel="stylesheet" href="nini/css/niniEng.css">

    <link rel="stylesheet" href="nini/css/swiperContain.css">

    <link rel="stylesheet" href="nini/css/weather.css">
    <link rel="stylesheet" href="nini/css/likeDev.css">
    <link rel="stylesheet" href="nini/css/sortDev.css">


    <link rel="stylesheet" href="nini/css/cust_swiper.css">

    <style>
    @font-face {
        font-family: 'Binggrae';
        font-style: normal;
        font-weight: normal;
        src: url('nini/font/Binggrae.ttf') format('truetype');
    }

    @font-face {
        font-family: 'Binggrae-Bold';
        font-style: normal;
        font-weight: normal;
        src: url('nini/font/Binggrae-Bold.ttf') format('truetype');
    }

    html {
        width: 100%;
        height: 100%;
    }

    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px !important;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    html,
    body {
        max-width: 100%;
        max-height: 100%;
        overflow-x: hidden;
        overflow-y: hidden;
        font-family: 'Binggrae-Bold';
        font-size: 16px;
    }

    .loading {
        position: fixed;
        background: url(nini/img/lovsky.gif) no-repeat center center/cover;
        z-index: 9999;
    }

    .loaded {
        background: url(nini/img/log-ship.gif) no-repeat center center/cover;
    }


    /* 날씨 css 구간 시작 */
    .sunnyd {
        background: url(nini/img/sunnyd.gif) no-repeat center center/cover;
    }

    .sunnyn {
        background: url(nini/img/sunnyn.gif) no-repeat center center/cover;
    }

    .cloudd {
        background: url(nini/img/cloudd.gif) no-repeat center center/cover;
    }

    .cloudn {
        background: url(nini/img/cloudn.gif) no-repeat center center/cover;
    }

    .rainingd {
        background: url(nini/img/rainingd.gif) no-repeat center center/cover;
    }

    .rainingn {
        background: url(nini/img/rainingn.gif) no-repeat center center/cover;
    }

    .snowingd {
        background: url(nini/img/snowingd.gif) no-repeat center center/cover;
    }

    .snowingn {
        background: url(nini/img/snowingn.gif) no-repeat center center/cover;
    }

    .mistetcd {
        background: url(nini/img/rainingd.gif) no-repeat center center/cover;
    }

    .mistetcn {
        background: url(nini/img/rainingn.gif) no-repeat center center/cover;
    }

    /* 날씨 css 구간 종료 */


    #SwRtBoard {
        display: none;
    }

    .loadRightInfo {
        display: flex;
    }

    html,
    body {
        cursor: url('nini/img/ba_milk.cur'),
            auto;
    }

    a,
    a:link {
        cursor: url('nini/img/st_milk.cur'),
            auto;
        text-decoration: none;
        color: #464646;
    }

    a:link,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        cursor: url('nini/img/st_milk.cur'),
            auto;
        color: #00bfff;
    }

    button:link,
    button:hover,
    button:focus,
    button:active {
        text-decoration: none;
        cursor: url('nini/img/st_milk.cur'),
            auto;
    }

    input:link,
    input:hover,
    input:focus,
    input:active {
        text-decoration: none;
        cursor: url('nini/img/st_milk.cur'),
            auto;
    }

    label:link,
    label:hover,
    label:focus,
    label:active {
        text-decoration: none;
        cursor: url('nini/img/st_milk.cur'),
            auto;
    }
    </style>



</head>

<body class="loading" id="changeLang" oncontextmenu="return false" ondragstart="return false"
    onselectstart="return false">

    <div class="dots-loader"></div>

    <div id="popup">
        <div id="popmenu">
            <p>개발사업예정</p>

            <table class="demo01">
                <tr>
                    <th>웹개발</th>
                    <td>리뉴얼 진행중</td>
                </tr>
                <tr>
                    <th>sso, uss</th>
                    <td>완료, 배포준비</td>
                </tr>
                <tr>
                    <th>멀티플랫폼</th>
                    <td>개발중</td>
                </tr>
            </table>

            <div>
                <span style="width: 100%; color: pink; background-color: #00bfff;">
                    진행중사이트가기
                </span>
            </div>

            <div class="exit">닫기</div>
        </div>
    </div>

    <div id="popRep">
        <div id="popRepMe">
            <p data-lang-kr="노트해요 수화니니" data-lang-jp="ノートしてください、ニニ">노트해요 수화니니</p>
            <div class="popRepButt">
                <a class="blogBu1" href="https://swi.swanini.com" data-lang-kr="연구" data-lang-jp="研究">연구</a>
                <a class="blogBu2" href="https://blog.swanini.com" data-lang-kr="생활" data-lang-jp="生活">생활</a>
            </div>
            <div class="popRepButt">
                <a class="exitRep" href="javascript:void(0);" data-lang-kr="닫기" data-lang-jp="閉る">닫기</a>
            </div>
        </div>
    </div>

    <style>
    #agreePop {
        z-index: 2;
        display: none;
        /*숨기기*/
        position: fixed;
        width: 100%;
        height: 110%;
        background: #cfedff6d;
    }

    #agreePopMenu {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 400px;
        text-align: center;
        background: #ffefd9;
        border-radius: 30px;
    }

    .agreePopHeader {
        width: 84%;
        height: 15%;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    .agreePopBottom {
        width: 100%;
        height: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
    }









    .agreePopBody {
        max-width: 430px;
        height: 55%;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        color: #333;
    }

    .agreePopBody .agree-text {
        font-size: 20px;
        font-weight: bold;
        color: #444;
        margin-bottom: 15px;
    }

    .agreePopBody ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .agreePopBody li {
        position: relative;
        padding-left: 65px;
        margin-bottom: 12px;
        font-size: 18px;
        color: #555;
        text-align: left;
    }

    .agreePopBody li::before {
        content: "•";
        position: absolute;
        left: 35px;
        color: #1e90ff;
        font-size: 22px;
    }

    /* 1280px 이하 화면 스타일 */
    @media (max-width: 1280px) {
        .agreePopBody {
            max-width: 420px;
            padding: 18px;
        }

        .agreePopBody .agree-text {
            font-size: 18px;
        }

        .agreePopBody li {
            font-size: 16px;
        }
    }

    /* 769px 이하 화면 스타일 */
    @media (max-width: 769px) {
        .agreePopBody {
            max-width: 90%;
            padding: 15px;
        }

        .agreePopBody .agree-text {
            font-size: 16px;
        }

        .agreePopBody li {
            font-size: 14px;
            padding-left: 100px;
        }

        .agreePopBody li::before {
            font-size: 20px;
            left: 74px;
        }
    }

    @media (max-width: 505px) {
        .agreePopHeader {
            font-size: 13px;
        }

        #agreePopMenu {
            width: 333px;
        }

        .agreePopBody {
            max-width: 90%;
            padding: 15px;
        }

        .agreePopBody .agree-text {
            font-size: 16px;
        }

        .agreePopBody li {
            font-size: 14px;
            padding-left: 42px;
        }

        .agreePopBody li::before {
            font-size: 20px;
            left: 23px;
        }
    }
    </style>

    <div id="agreePop">
        <div id="agreePopMenu">
            <div class="agreePopHeader">
                <span data-lang-kr="동의해주셔서 감사합니다!" data-lang-jp="同意してくださってありがとうございます！"
                    data-lang-en="Thank you for agreeing!"></span>
            </div>

            <div class="agreePopBody">
                <ul>
                    <p class="agree-text" data-lang-kr="계정의 다음 정보를 수집합니다." data-lang-jp="アカウントの次の情報を収集します。"
                        data-lang-en="Gather information from account"></p>
                    <li data-lang-kr="계정 이메일 ✉️ 주소 [인증 필수]" data-lang-jp="アカウントメール ✉️ [必須]"
                        data-lang-en="Account Email ✉️ [required]">
                    </li>
                    <li data-lang-kr="쇼핑 몰 및 샵 🛍️ 전화번호 및 주소" data-lang-jp="モール及びショップ 🛍️ 番号及び住所"
                        data-lang-en="Mall & Shop 🛍️ Phone & Address">
                    </li>
                    <li data-lang-kr="블로그 💉 IP 추적" data-lang-jp="ブログ 💉 IP追跡" data-lang-en="Blog 💉 IP Tracking">
                    </li>
                    <li data-lang-kr="니니톡 💬 데이터 암호화 처리" data-lang-jp="ニニトーク 💬 データ暗号化処理"
                        data-lang-en="NiNiTalk 💬 Data Encrypt">
                    </li>
                </ul>
            </div>

            <div class="agreePopBottom">
                <a onclick="closePopup()" class="leftClose" href="javascript:void(0)" data-lang-kr="닫기"
                    data-lang-jp="閉る" data-lang-en="CLOSE" style="margin: 0;">
                </a>
            </div>
        </div>
    </div>

    <!--{? member_info.user_st !== 'act'}-->

    <style>
    #activPop {
        z-index: 2;
        display: none;
        /*숨기기*/
        position: fixed;
        width: 100%;
        height: 110%;
        background: #cfedff6d;
    }

    .activPopHeader {
        width: 84%;
        height: 15%;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    .activPopBottom {
        width: 100%;
        height: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .activPopBody {
        max-width: 430px;
        height: 55%;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        color: #333;
    }
    </style>
    <div id="activPop">
        <div class="activPopHeader">
            <span data-lang-kr="메일을 발송했습니다!" data-lang-jp="同意してくださってありがとうございます！"
                data-lang-en="Thank you for agreeing!"></span>
        </div>

        <div class="activPopBody">
            계정인증을 해주세요!
        </div>

        <div class="activPopBottom">
            <a onclick="closinPopup()" class="leftClose" href="javascript:void(0)" data-lang-kr="닫기" data-lang-jp="閉る"
                data-lang-en="CLOSE" style="margin: 0;">
            </a>
        </div>
    </div>


    <!--{/}-->




    <div class="swa_info_all">
        <div id="info_left" class="swa_info_left">

            <div class="left_header">

                <div class="lang_sel">
                    <form id="languageForm" method="get" action="">
                        <input type="radio" id="lang_sel1" name="lang" value="kr" checked style="width:30%;">
                        <label for="lang_sel1"
                            style="border-radius: 25px 0px 0px 25px; width:30%;height:40px; padding:0px; margin:0; vertical-align:middle;">🇰🇷</label>
                        <input type="radio" id="lang_sel2" name="lang" value="jp" style="width:30%;">
                        <label for="lang_sel2"
                            style="width:30%;height:40px; padding:0px; vertical-align:middle;">🇯🇵</label>
                        <input type="radio" id="lang_sel3" name="lang" value="gb" style="width:30%;">
                        <label for="lang_sel3"
                            style="border-radius: 0px 25px 25px 0px; width:30%;height:40px; padding:0px; vertical-align:middle;">🇬🇧</label>
                    </form>
                </div>

                <a id="leftHide" class="leftClose" href="javascript:void(0)" data-lang-kr="닫기" data-lang-jp="閉る"
                    data-lang-en="CLOSE" style="margin: 0;">
                </a>

            </div>
            <style>
            .info_left_inner {
                height: 90%;
                width: 100%;
            }

            .info_left_ready {
                height: 100%;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            </style>

            <div class="info_left_inner">


                <style>
                .btn {
                    background: hsl(var(--hue), 98%, 80%);
                    border: none;
                    border-radius: 7px;
                    cursor: pointer;
                    color: black;
                    font-size: 12px;
                    font-weight: 600;
                    letter-spacing: 0.05em;
                    overflow: hidden;
                    padding: 0.7em 3em;
                    min-height: 3.3em;
                    position: relative;
                    text-transform: lowercase;
                }

                .btn--yellow {
                    --hue: 46;
                }

                .btn--green {
                    --hue: 163;
                }

                .btn--pink {
                    --hue: 330;
                }

                .btn--purple {
                    --hue: 244;
                }

                .btn--red {
                    --hue: 0;
                }

                .btn--blue {
                    --hue: 210;
                }

                .btn:active,
                .btn:focus {
                    outline: 3px solid hsl(calc(var(--hue) + 90), 98%, 80%);
                }

                .btn+.btn {
                    margin-top: 1.3em;
                }

                .btn__txt {
                    position: relative;
                    z-index: 2;
                }

                .btn__bg {
                    background: hsl(var(--hueBg), 98%, 80%);
                    border-radius: 50%;
                    display: block;
                    height: 0;
                    left: 50%;
                    margin: -50% 0 0 -50%;
                    padding-top: 100%;
                    position: absolute;
                    top: 50%;
                    width: 100%;
                    transform: scale(0);
                    transform-origin: 50% 50%;
                    transition: transform 0.175s cubic-bezier(0.5, 1, 0.89, 1);
                    z-index: 1;
                }

                .btn__bg:nth-of-type(1) {
                    --hueBg: calc(var(--hue) - 90);
                    transition-delay: 0.1725s;
                }

                .btn__bg:nth-of-type(2) {
                    --hueBg: calc(var(--hue) - 180);
                    transition-delay: 0.115s;
                }

                .btn__bg:nth-of-type(3) {
                    --hueBg: calc(var(--hue) - 270);
                    transition-delay: 0.0575s;
                }

                .btn__bg:nth-of-type(4) {
                    --hueBg: calc(var(--hue) - 360);
                    transition-delay: 0s;
                }

                .btn:hover .btn__bg,
                .btn:focus .btn__bg,
                .btn:active .btn__bg {
                    transform: scale(1.5);
                    transition: transform 0.35s cubic-bezier(0.11, 0, 0.5, 0);
                }

                .btn:hover .btn__bg:nth-of-type(1),
                .btn:focus .btn__bg:nth-of-type(1),
                .btn:active .btn__bg:nth-of-type(1) {
                    transition-delay: 0.115s;
                }

                .btn:hover .btn__bg:nth-of-type(2),
                .btn:focus .btn__bg:nth-of-type(2),
                .btn:active .btn__bg:nth-of-type(2) {
                    transition-delay: 0.23s;
                }

                .btn:hover .btn__bg:nth-of-type(3),
                .btn:focus .btn__bg:nth-of-type(3),
                .btn:active .btn__bg:nth-of-type(3) {
                    transition-delay: 0.345s;
                }

                .btn:hover .btn__bg:nth-of-type(4),
                .btn:focus .btn__bg:nth-of-type(4),
                .btn:active .btn__bg:nth-of-type(4) {
                    transition-delay: 0.46s;
                }





                .intro_swn {
                    margin-top: 20px;
                }
                </style>

                <div class="intro_swn">
                    <button type="button" class="btn btn--purple">
                        <span class="btn__txt" data-lang-kr="수화니니 회사" data-lang-jp="ニーニー会社"
                            data-lang-en="NiNi-Co."></span>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="btn btn--pink">
                        <span class="btn__txt" data-lang-kr="수화니니
                        채용" data-lang-jp="ニーニー採用" data-lang-en="Employ"></span>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="btn btn--blue">
                        <span class="btn__txt" data-lang-kr="수화니니 안내" data-lang-jp="ニーニーガイド" data-lang-en="NiNi-Info">
                        </span>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                    </button>


                    <!-- 
                    <button type="button" class="btn btn--red">
                        <span class="btn__txt">수화니니 안내</span>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                    </button>

                    <button type="button" class="btn btn--yellow">
                        <span class="btn__txt">Yellow button</span>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                        <i class="btn__bg" aria-hidden="true"></i>
                    </button> -->
                </div>


                <div class="coin_mark">

                    <!-- <span class="mlkcoin_title">🍼🪙실시간</span>

                    <div class="milkCrypto">

                    </div> -->
                </div>
            </div>
        </div>

        <!-- <style>
            .swinter {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
            }

            .pullbur {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 14px;
                position: relative;
                margin: 25px;
                /* padding: 5px; */
                width: 130px;
                height: 60px;
                color: #FFF;
                border-radius: 10px;
                background-color: #eeaaee;
            }

            .pullbur:after {
                content: "";
                position: absolute;
                top: 21px;
                right: 130px;
                border-right: 30px solid #eeaaee;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
            }

            .pullbul {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 14px;
                position: relative;
                margin: 25px;
                /* padding: 20px; */
                width: 130px;
                height: 60px;
                color: #FFF;
                border-radius: 10px;
                background-color: #00bfff;
            }

            .pullbul:after {
                content: "";
                position: absolute;
                top: 21px;
                right: -29px;
                border-left: 30px solid #00bfff;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
            }

            @media (max-width: 769px) {
                .pullbur {
                    display: none;
                    font-size: 12px;
                    position: relative;
                    margin: 25px;
                    /* padding: 5px; */
                    width: 130px;
                    height: 60px;
                    color: #FFF;
                    border-radius: 10px;
                    background-color: #eeaaee;
                }

                .pullbur:after {

                    content: "";
                    position: absolute;
                    top: 21px;
                    right: 130px;
                    border-right: 30px solid #eeaaee;
                    border-top: 10px solid transparent;
                    border-bottom: 10px solid transparent;
                }

                .pullbul {
                    display: none;
                    font-size: 14px;
                    position: relative;
                    margin: 25px;
                    /* padding: 20px; */
                    width: 130px;
                    height: 60px;
                    color: #FFF;
                    border-radius: 10px;
                    background-color: #00bfff;
                }

                .pullbul:after {
                    content: "";
                    position: absolute;
                    top: 21px;
                    right: -29px;
                    border-left: 30px solid #00bfff;
                    border-top: 10px solid transparent;
                    border-bottom: 10px solid transparent;
                }
            }

            .logout_font {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
            }
        </style> -->

        <div class="swa_info_center">


            <style>
            #SwNINCoin {
                /* width: 100%;
                    height: 100%; */
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .swnincoin_inner {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                width: 85%;
                height: 85%;
                background: #fff;
                border-radius: 20px;

            }

            .nincoin_header {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 10%;
                width: 100%;
            }

            .nincoin_body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 80%;
                width: 100%;
            }

            .nincoin_bottom {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 10%;
                width: 100%;
            }
            </style>

            <div id="SwNINCoin">
                <div class="swnincoin_inner">
                    <div class="nincoin_header">
                        <span data-lang-kr="니니 코인 거래소" data-lang-jp="ニーニーコイン取引所"
                            data-lang-en="NiNi Coin Exchange"></span>
                    </div>
                    <div class="nincoin_body">
                        <span data-lang-kr="준비중" data-lang-jp="準備中" data-lang-en="Preparing"></span>
                    </div>
                    <div class="nincoin_bottom">
                        <input id="SwNINCoinBtn_close" class="SwNINCoinBtn_close" type="button" data-lang-kr="닫기"
                            data-lang-jp="閉る" data-lang-en="CLOSE">
                    </div>
                </div>
            </div>


            <style>
            .ident_con {
                position: relative;
                width: 100%;
                height: 100%;
            }

            .square {
                position: absolute;
                width: 50%;
                height: 50%;
                background-color: #4CAF50;
                transition: top 0.8s ease, left 0.8s ease, right 0.8s ease, bottom 0.8s ease;
                z-index: 10002;
            }

            .squared1 {
                background-color: #c4d0e8;
                border-radius: 20px 0 0 0;
            }

            .squared2 {
                background-color: #f4f3b3;
                border-radius: 0 20px 0 0;
            }

            .squared3 {
                background-color: #a3c0a2;
                border-radius: 0 0 0 20px;
            }

            .squared4 {
                background-color: #efd7d7;
                border-radius: 0 0 20px 0;
            }

            #square1 {
                top: -750px;
                left: -750px;
            }

            #square2 {
                top: -750px;
                right: -750px;
            }

            #square3 {
                bottom: -750px;
                left: -750px;
            }

            #square4 {
                bottom: -750px;
                right: -750px;
            }

            .popupUp {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 88%;
                height: 88%;
                background-color: #ffffff;
                color: #474747;
                display: none;
                justify-content: center;
                align-items: center;
                text-align: center;
                /* padding: 20px; */
                flex-direction: column;
                z-index: 10002;
                border-radius: 20px;
            }
            </style>

            <div id="square1" class="square squared1"></div>
            <div id="square2" class="square squared2"></div>
            <div id="square3" class="square squared3"></div>
            <div id="square4" class="square squared4"></div>
            <div id="popupUp" class="popupUp">



















                <?php if ($member_info === false): ?>

                <div class="loginContain signin" style="display: none;">
                    <!-- <img src="nini/img/swanini_favic.png" alt="swania_login" id="rightHide"> -->
                    <form id="loginForm" method="post">
                        <input type="hidden" name="host_lo" value="main" />
                        <div class="login-input">
                            <input type="text" name="emailId" id="loginEId" placeholder="" required />
                            <!-- <input type="text" name="emailId" id="loginEId" placeholder="" data-lang-kr="메일 또는 ID"
                data-lang-jp="メールまたはID" data-lang-en="Email or ID" required /> -->
                            <input type="password" name="user_pw" placeholder="비밀번호" required />
                            <div class="milogin-checkbox">
                                <input type="checkbox" class="milogin_form_check" id="autoLoChk">
                                <label for="autoLoChk">
                                    <span class="chk_aulo" data-lang-kr="자동로그인" data-lang-jp="オート・ログイン"
                                        data-lang-en="Auto SignIn"></span>
                                </label>
                            </div>
                        </div>
                        <div class="login-btns">
                            <input id="loginSubmitBtn" class="login-submit" type="button" data-lang-kr="로그인"
                                data-lang-jp="ログイン" data-lang-en="Sign in">
                            <input id="signUpBtn" class="login-create" type="button" data-lang-kr="계정만들기"
                                data-lang-jp="ID登録" data-lang-en="CreateID">
                            <input id="lostPwBtn" class="login-losti" type="button" data-lang-kr="비번분실"
                                data-lang-jp="再設定" data-lang-en="ChangeID">
                            <input onclick="hidePopup()" class="SwUpBtn_close" type="button" data-lang-kr="닫기"
                                data-lang-jp="閉る" data-lang-en="CLOSE">
                            <!-- <button class="SwUpBtn_close">닫기</button> -->
                        </div>

                        <!-- 로딩 인디케이터 추가 -->
                        <div class="loading-indicator" id="loadingIndicator"></div>
                    </form>
                </div>


                <script>
                document.getElementById('loginSubmitBtn').addEventListener('click', function() {
                    const formData = new FormData(document.getElementById('loginForm'));
                    const loadingIndicator = document.getElementById('loadingIndicator');
                    loadingIndicator.innerText = '로그인 중...';

                    fetch('/home/login', {
                            method: 'POST',
                            body: formData
                        })
                        .then(res => res.json())
                        .then(data => {
                            loadingIndicator.innerText = '';
                            if (data.success) {
                                alert('로그인 성공!');
                                location.reload(); // 또는 원하는 페이지로 이동
                            } else {
                                alert(data.message || '로그인 실패!');
                            }
                        })
                        .catch(error => {
                            loadingIndicator.innerText = '';
                            alert('오류가 발생했습니다.');
                            console.error(error);
                        });
                });
                </script>

                <!-- <script>
                $(document).ready(function() {
                    var $loginSubmitBtn = $('#loginSubmitBtn');
                    var $SwRtBoard = $("#SwRtBoard");
                    $loginSubmitBtn.off('click').on('click', function(e) {
                        e.preventDefault();

                        var emailId = $('input[name="emailId"]').val().trim();
                        var userPw = $('input[name="user_pw"]').val().trim();

                        if (!emailId) {
                            alert("이메일을 입력하세요!");
                            return;
                        }

                        if (userPw.length < 6) {
                            alert("비밀번호를 입력하세요!");
                            return;
                        }

                        var formData = $('#loginForm').serialize();

                        $.ajax({
                            type: "POST",
                            url: "{main_murl}/login_ok.php",
                            data: formData,
                            dataType: 'json',
                            xhrFields: {
                                withCredentials: true
                            },
                            beforeSend: function() {
                                // 로딩 인디케이터 표시
                                $('#loadingIndicator').show();
                            },
                            success: function(response) {

                                if (response.status === 'success') {
                                    alert(response.message);
                                    window.location.href = response.redirect;
                                } else {
                                    alert(response.message);
                                }

                            },
                            error: function(xhr, status, error) {
                                console.error("통신 실패:", error);
                                alert("로그인 처리 중 문제가 발생했습니다. 다시 시도해주세요.");
                            },
                            complete: function() {
                                // 로딩 인디케이터 숨김
                                $('#loadingIndicator').hide();
                            }
                        });

                    });
                });
                </script> -->

                <script src="nini/js/loginSubmit.js"></script>

                <div class="loginContain register" style="display: none;">


                    <!-- <img src="nini/img/swanini_favic.png" alt="swania_login" id="rightHide"> -->
                    <!-- <form id="loginForm" method="post" action="{main_murl}/login_ok.php"> -->
                    <form id="registForm" method="post">
                        <input type="hidden" name="host_lo" value="main" />
                        <div class="login-input">


                            <input type="text" name="email_id" placeholder="메일 또는 ID" required>

                            <input type="password" name="userPw" placeholder="비밀번호" required>

                            <input type="password" name="user_pw_re" placeholder="비밀번호확인" required>

                            <div class="milogin-checkbox">
                                <input type="checkbox" class="milogin_form_check" id="agrChk" name="agrChk">
                                <label for="agrChk">
                                    <span class="chk_aulo" data-lang-kr="동의해요~!" data-lang-jp="同意します~！"
                                        data-lang-en="I agree!"></span>
                                </label>
                            </div>
                        </div>
                        <div class="login-btns">
                            <input id="registerSubmitBtn" class="login-create" type="button" data-lang-kr="만들어요"
                                data-lang-jp="作ります" data-lang-en="MakeID">
                            <input id="backToLoginBtn" class="login-back" type="button" data-lang-kr="돌아가요"
                                data-lang-jp="帰ります" data-lang-en="GoBack">
                            <input onclick="hidePopup()" class="SwUpBtn_close" type="button" data-lang-kr="닫기"
                                data-lang-jp="閉る" data-lang-en="CLOSE">
                        </div>
                    </form>
                </div>


                <script>
                const agreeChkbox = document.getElementById('agrChk');
                const agreeChkpop = document.getElementById('agreePop');

                agreeChkbox.addEventListener('click', function(event) {
                    console.log('Checkbox clicked');
                    console.log('Checkbox checked:', agreeChkbox.checked);
                });

                agreeChkbox.addEventListener('change', function() {
                    if (agreeChkbox.checked) {
                        agreeChkpop.style.display = 'block'; // 체크 시 팝업 표시
                    } else {
                        agreeChkpop.style.display = 'none'; // 체크 해제 시 팝업 숨기기
                    }
                });

                function closePopup() {
                    agreeChkpop.style.display = 'none';
                    // agreeChkbox.checked = false;  // 닫기 버튼 클릭 시 체크 해제
                }


                $(document).ready(function() {
                    var $registerSubmitBtn = $('#registerSubmitBtn');
                    $registerSubmitBtn.off('click').on('click', function(e) {
                        e.preventDefault();

                        var email_id = $('input[name="email_id"]').val();
                        var userPw = $('input[name="userPw"]').val();
                        var userPwRe = $('input[name="user_pw_re"]').val();
                        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                        // Validation checks
                        if (!email_id) {
                            alert("이메일을 입력하세요!!@#");
                            return;
                        }
                        if (!emailRegex.test(email_id)) {
                            alert("유효하지 않은 이메일 주소입니다!");
                            return;
                        }

                        // 비밀번호 길이 확인
                        if (userPw.length < 6) {
                            alert("비밀번호는 최소 6자 이상이어야 합니다!");
                            return;
                        }

                        // 비밀번호 확인
                        if (userPw !== userPwRe) {
                            alert("비밀번호와 비밀번호 확인이 일치하지 않습니다!");
                            return;
                        }

                        // 동의 체크 확인
                        if (!$('#agrChk').is(':checked')) {
                            alert("회원가입 약관에 동의해주세요!");
                            return;
                        }

                        var formData = $('#registForm').serialize();

                        $.ajax({
                            type: "POST",
                            url: "{main_murl}/join_ok.php",
                            data: formData,
                            dataType: 'json',
                            beforeSend: function() {
                                // 로딩 인디케이터 표시
                                $('#loadingIndicator').show();
                            },
                            success: function(response) {
                                if (response.status === 'success') {
                                    alert(response.message);
                                } else {
                                    alert(response.message);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("통신 실패:", error);
                                alert("로그인 처리 중 문제가 발생했습니다. 다시 시도해주세요.");
                            },
                            complete: function() {
                                // 로딩 인디케이터 숨김
                                $('#loadingIndicator').hide();
                            }
                        });

                    });
                });
                </script>





                <!-- <script src="nini/js/registerSubmit.js"></script> -->



                <div class=" loginContain lostpw" style="display: none;">
                    <!-- <img src="nini/img/swanini_favic.png" alt="swania_login" id="rightHide"> -->
                    <form id="loginFormPwRe" method="post">
                        <input type="hidden" name="host_lo" value="main" />
                        <div class="login-input">
                            <input type="text" name="email_idf" placeholder="이메일">
                        </div>
                        <div class="login-btns">
                            <input id="sendMailBtn" class="login-losti" type="submit" name="submit"
                                data-lang-kr="ID변경해요" data-lang-jp="ID変更ます" data-lang-en="ChangePW">
                            <input id="backToLoginBtnLostPw" class="login-back" type="button" data-lang-kr="돌아가요"
                                data-lang-jp="帰ります" data-lang-en="GoBack">
                            <input onclick="hidePopup()" class="SwUpBtn_close" type="button" data-lang-kr="닫기"
                                data-lang-jp="閉る" data-lang-en="CLOSE">
                        </div>
                    </form>
                </div>


                <script>
                $(document).ready(function() {
                    var $sendMailBtn = $('#sendMailBtn');
                    var $SwRtBoard = $("#SwRtBoard");
                    $sendMailBtn.off('click').on('click', function(e) {
                        e.preventDefault();

                        var email_idf = $('input[name="email_idf"]').val().trim();

                        if (!email_idf) {
                            alert("이메일을 입력하세요!");
                            return;
                        }

                        var formData = $('#loginFormPwRe').serialize();

                        $.getJSON("https://api.ipify.org?format=json", function(ipResponse) {
                            var userIP = ipResponse.ip;

                            formData += "&user_ip=" + encodeURIComponent(userIP);

                            $.ajax({
                                type: "POST",
                                url: "{main_murl}/password_reset_ok.php",
                                data: formData,
                                dataType: 'json',
                                xhrFields: {
                                    withCredentials: true
                                },
                                beforeSend: function() {
                                    // 로딩 인디케이터 표시
                                    $('#loadingIndicator').show();
                                },
                                success: function(response) {

                                    if (response.status === 'success') {
                                        alert(response.message);
                                    } else {
                                        alert(response.message);
                                    }

                                },
                                error: function(xhr, status, error) {
                                    console.error("통신 실패:", error);
                                    alert("메일 발송 실패. 다시 시도해보세요.");
                                },
                                complete: function() {
                                    // 로딩 인디케이터 숨김
                                    $('#loadingIndicator').hide();
                                }
                            });
                        }).fail(function() {
                            alert("IP 정보를 가져오는 데 실패했습니다. 다시 시도해주세요.");
                        });
                    });
                });
                </script>





                <script src=" nini/js/sesparam.js"></script>

                <style>
                .introEmail {
                    position: absolute;
                    bottom: 0;

                    width: 100%;
                    height: 50%;

                    font-size: 19px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
                </style>

                <div class="introEmail">
                    여기에 @swanini.com 이메일
                </div>


                <?php else: ?>

                <!--{? member_info.user_st !== 'act'}-->

                <style>
                .member_actInfo_box {
                    width: 100%;
                    text-align: left;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                }

                .member_actInfo_box_inner {
                    width: 80%;
                }

                .member_actInfo {
                    width: 100%;
                }



                @media (max-width: 1280px) {}

                @media (max-width: 769px) {

                    .member_actInfo_box {
                        width: 100%;
                        text-align: left;
                        margin-left: 28px;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                    }

                    .member_actInfo {
                        width: 100%;
                        font-size: 12px;
                    }

                }
                </style>

                <div class="loginContain">


                    <!-- <img src="nini/img/swanini_favic.png" alt="swania_login" id="rightHide"> -->
                    <form id="loginForm" method="post">
                        <input type="hidden" name="host_lo" value="main" />
                        <div class="login-input">
                            <!-- <img src="{member_pic.file_path}" alt="" class="member_pic" id="chInfo"> -->
                            <div class="member_actInfo_box">
                                <div class="member_actInfo_box_inner">
                                    <p class="member_actInfo">{member_info.user_id}</p>
                                    <p class="member_actInfo">{member_info.user_name}님</p>
                                    <p class="member_actInfo">{member_info.email}</p>
                                </div>
                            </div>
                            <div class="member_act_param">
                                <input id="actiEmBtn" class="login-submit" type="button" value="메일발송">

                                <input type="text" name="user_st" placeholder="인증번호" required>

                                <input id="activateBtn" class="login-submit" type="button" value="계정인증">
                            </div>
                        </div>
                        <div class="login-btns">

                            <input id="logoutBtn" class="login-submit" type="button" value="로그아웃"
                                onclick="location.href='{main_murl}/logout.php'">
                            <input id="editInfoBtn" class="login-submit" type="button" value="정보변경"
                                onclick="location.href='{main_murl}/edit.php'">
                            <input id="retireBtn" class="login-submit" type="button" value="계정삭제"
                                onclick="location.href='{main_murl}/retire.php'">
                            <input id="SwUpBtn_close" class="SwUpBtn_close" type="button" data-lang-kr="닫기"
                                data-lang-jp="閉る" data-lang-en="CLOSE">
                            <!-- <button class="SwUpBtn_close">닫기</button> -->
                        </div>

                    </form>

                    <script>
                    $(document).ready(function() {
                        $('#actiEmBtn').on('click', function() {

                            $.ajax({
                                url: "{main_murl}/activating.php",
                                type: 'POST',
                                dataType: 'json',
                                // data: {                // 전송할 데이터
                                //     host_lo: $('input[name="host_lo"]').val() // 숨겨진 input 값
                                // },
                                beforeSend: function() {
                                    // 로딩 인디케이터 표시
                                    $('#loadingIndicator').show();
                                },
                                success: function(response) {
                                    if (response.status === 'success') {
                                        alert(response.message);
                                    } else {
                                        alert(response.message);
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error("통신 실패:", error);
                                    alert("메일 발송 실패");
                                },
                                complete: function() {
                                    // 로딩 인디케이터 숨김
                                    $('#loadingIndicator').hide();
                                }
                            });
                        });
                    });
                    </script>


                    <script>
                    $(document).ready(function() {
                        $('#activateBtn').on('click', function() {
                            // AJAX 요청
                            $.ajax({
                                url: "{main_murl}/activate_ok.php",
                                type: 'POST', // HTTP 요청 방식
                                dataType: 'json',
                                data: {
                                    user_st: $('input[name="user_st"]').val()
                                },
                                beforeSend: function() {
                                    // 로딩 인디케이터 표시
                                    $('#loadingIndicator').show();
                                },
                                success: function(response) {
                                    if (response.status === 'success') {
                                        alert(response.message);
                                        window.location.href = response.redirect;
                                    } else {
                                        alert(response.message);
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error("통신 실패:", error);
                                    alert("인증 절차 실패");
                                },
                                complete: function() {
                                    // 로딩 인디케이터 숨김
                                    $('#loadingIndicator').hide();
                                }
                            });
                        });
                    });
                    </script>


                    <!-- <a href="{main_murl}/logout.php" class="btn navbar-btn btn-primary">
            로그아웃
        </a> -->

                    <!-- <div class="login-btns">
            <input id="logoutB" class="login-submit" type="button" value="로그아웃">
            <input id="chInfo" class="login-submit" type="button" value="정보변경">
            <input id="retireAc" class="login-submit" type="button" value="계정삭제">
        </div> -->

                    <!-- 메일 / 알람 / 앱등 -->
                    <div>

                    </div>


                </div>



                <!--{:}-->
                <div class="loginContain">
                    <!-- <img src="nini/img/swanini_favic.png" alt="swania_login" id="rightHide"> -->


                    <!--{? member_pic > 0}-->
                    <!-- <img src="{member_pic.file_path}" alt="" class="member_pic" id="chInfo"> -->
                    <!--{/}-->



                    <!-- <img src="nini/img/swanini_favic.png" alt="swania_login" id="rightHide"> -->
                    <form id="loginForm" method="post">
                        <input type="hidden" name="host_lo" value="main" />
                        <div class="login-input">
                            <img src="{member_pic.file_path}" alt="" class="member_pic" id="chInfo">
                            <p class="navbar-text">{member_info.user_name}님</p>
                        </div>
                        <div class="login-btns">
                            <!-- <input id="loginSubmitBtn" class="login-submit" type="button" data-lang-kr="로그인"
                    data-lang-jp="ログイン" data-lang-en="Sign in">
                <input id="signUpBtn" class="login-submit" type="button" data-lang-kr="계정만들기"
                    data-lang-jp="ID登録" data-lang-en="CreateID">
                <input id="lostPwBtn" class="login-submit" type="button" data-lang-kr="비번분실"
                    data-lang-jp="再設定" data-lang-en="ChangeID"> -->


                            <input id="logoutBtn" class="login-submit" type="button" value="로그아웃"
                                onclick="location.href='{main_murl}/logout.php'">
                            <input id="editInfoBtn" class="login-submit" type="button" value="정보변경"
                                onclick="location.href='{main_murl}/edit.php'">
                            <!--{? member_info.user_st !== 'act'}-->
                            <input id="activateBtn" class="login-submit" type="button" value="활성버튼"
                                onclick="location.href='{main_murl}/activate.php'">
                            <!--{/}-->
                            <input id="retireBtn" class="login-submit" type="button" value="계정삭제"
                                onclick="location.href='{main_murl}/retire.php'">
                            <input onclick="hidePopup()" class="SwUpBtn_close" type="button" data-lang-kr="닫기"
                                data-lang-jp="閉る" data-lang-en="CLOSE">
                            <!-- <button class="SwUpBtn_close">닫기</button> -->
                        </div>

                    </form>



                    <!-- <a href="{main_murl}/logout.php" class="btn navbar-btn btn-primary">
            로그아웃
        </a> -->

                    <!-- <div class="login-btns">
            <input id="logoutB" class="login-submit" type="button" value="로그아웃">
            <input id="chInfo" class="login-submit" type="button" value="정보변경">
            <input id="retireAc" class="login-submit" type="button" value="계정삭제">
        </div> -->

                    <!-- 메일 / 알람 / 앱등 -->
                    <div>

                    </div>


                </div>

                <!--{/}-->

                <?php endif; ?>





























            </div>

            <script>
            function showPopup() {
                const squares = document.querySelectorAll('.square');
                squares.forEach((square, index) => {
                    setTimeout(() => {
                        if (index === 0) {
                            square.style.top = '0';
                            square.style.left = '0';
                        } else if (index === 1) {
                            square.style.top = '0';
                            square.style.right = '0';
                        } else if (index === 2) {
                            square.style.bottom = '0';
                            square.style.left = '0';
                        } else if (index === 3) {
                            square.style.bottom = '0';
                            square.style.right = '0';
                        }
                    }, index * 100); // 100ms 간격으로 차례로 이동
                });

                setTimeout(() => {
                    document.getElementById('popupUp').style.display = 'flex';
                }, 1000);
            }

            function hidePopup() {
                const squares = document.querySelectorAll('.square');
                squares.forEach((square, index) => {
                    setTimeout(() => {
                        if (index === 0) {
                            square.style.top = '-750px';
                            square.style.left = '-750px';
                        } else if (index === 1) {
                            square.style.top = '-750px';
                            square.style.right = '-750px';
                        } else if (index === 2) {
                            square.style.bottom = '-750px';
                            square.style.left = '-750px';
                        } else if (index === 3) {
                            square.style.bottom = '-750px';
                            square.style.right = '-750px';
                        }
                    }, index * 100); // 100ms 간격으로 차례로 복귀
                });

                setTimeout(() => {
                    document.getElementById('popupUp').style.display = 'none';
                }, 1000);
            }
            </script>




            <div class="swa_info_top">
                <div class="swa_info_top_head">
                    <div class="swinter">
                        <a href="javascript:void(0)" id="leftBar">
                            🍔
                        </a>
                        <!-- <div class="pullbur" data-lang-kr="놀러오세요~" data-lang-jp="遊びに来てね~" data-lang-en="play hear~">
                            <span></span>
                        </div> -->
                    </div>


                    <?php if ($member_info === false): ?>
                    <div class="swUpSlide">
                        <a href="javascript:void(0);" onclick="showPopup()">
                            🪪
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="swUpSlide">
                        <a href="javascript:void(0);" onclick="showPopup()">
                            🩷
                        </a>
                    </div>
                    <?php endif; ?>

                    <style>
                    .swanini_logo {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0;
                        width: 30%;

                    }

                    .logo_img {
                        width: 100%;
                    }
                    </style>
                    <div class="swanini_logo">
                        <img src="nini/img/swanini_logo.png" class="logo_img" alt="swania_logo">
                    </div>

                    <div class="swDownSlide">
                        <!-- <div class="pullbul" data-lang-kr="테스트계정준비중" data-lang-jp="ログインして~" data-lang-en="log in~">
                                <span></span>
                            </div> -->
                        <a href="javascript:void(0);" id="SwNINCoinBtn">
                            <!-- <a href="javascript:void(0);" id="swDownBtn"> -->
                            🪙
                        </a>
                    </div>


                    <div class="swlogin">
                        <div class="logout_font">
                            <!-- <div class="pullbul" data-lang-kr="테스트계정준비중" data-lang-jp="ログインして~" data-lang-en="log in~">
                                <span></span>
                            </div> -->
                            <a href="javascript:void(0);" id="SwRtBoardBtn">
                                📆
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swa_info">


                <style>
                #SwUpBoard {
                    position: absolute;
                    top: -800px;
                    left: 0;
                    width: 100%;
                    height: 45%;
                    /* color: white; */
                    transition: top 0.5s ease;
                    z-index: 1000;
                }

                .swub_container {
                    width: 100%;
                    height: 100%;
                    background: url(nini/img/logIn_pop.gif) no-repeat center center/cover;
                    border-radius: 20px 20px 0 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .swub_inner {
                    width: 90%;
                    height: 85%;
                    background: #fff;
                    border-radius: 10px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }



                .SwUpBtn_close {
                    font-family: 'Binggrae-Bold';

                    width: 80%;
                    height: 38px;
                    /* padding: 13px 30px; */
                    margin: 5px 0 7px 0;
                    font-size: 15px;
                    color: #fff;
                    background-color: #ffa89d;
                    border: none;
                    border-bottom: 4px solid #ff7664;
                    border-radius: 10px;
                    cursor: pointer;
                }

                .SwUpBtn_close:hover {
                    transition: all 0.5s;
                    background: #6c2c40;
                    color: #fff;
                }





                .nonLogin {
                    display: flex;
                    align-items: center;
                    justify-content: space-around;
                    flex-direction: column;

                    width: 100%;
                    height: 80%;
                }

                .main_logform {
                    width: 100%;
                    height: 80%;
                    display: flex;
                    justify-content: space-around;
                    flex-direction: column;
                    align-items: center;
                }

                .typing_sign {
                    width: 70%;
                    height: 25%;
                }



                .loginContain {
                    font-family: 'Binggrae-Bold';
                    width: 100%;
                    text-align: center;
                    border-radius: 4%;
                    transform-style: preserve-3d;
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: row;
                }

                .signin {}

                #loginForm {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    height: 100%;
                    position: relative;
                }

                #registForm {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                }

                #loginFormPwRe {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                }

                .login-input {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    position: absolute;
                    width: 50%;
                    height: 50%;
                    top: 0;
                    left: 0;
                }

                .login-input input[type="text"],
                [type="password"] {
                    /* font-size: 18px; */
                    /* margin-bottom: 25px; */

                    width: 80%;
                    height: 45px;
                    margin-bottom: 10px;
                    border-radius: 10px;
                    padding-left: 10px;
                    border: 3px solid #00bfff;
                }




                /* 버튼들 시작합시다. */
                .login-submit {
                    font-family: 'Binggrae-Bold';

                    width: 80%;
                    height: 38px;
                    /* padding: 13px 30px; */
                    margin: 5px 0 7px 0;
                    font-size: 15px;
                    color: #fff;
                    background-color: #2962ff;
                    border: none;
                    border-bottom: 4px solid #2196f3;
                    border-radius: 10px;
                    cursor: pointer;
                }

                .login-submit:hover {
                    transition: all 0.5s;
                    background: #2c536c;
                    color: #fff;
                }

                .login-create {
                    font-family: 'Binggrae-Bold';

                    width: 80%;
                    height: 38px;
                    /* padding: 13px 30px; */
                    margin: 5px 0 7px 0;
                    font-size: 15px;
                    color: #fff;
                    background-color: #1db91f;
                    border: none;
                    border-bottom: 4px solid #21f360;
                    border-radius: 10px;
                    cursor: pointer;
                }

                .login-create:hover {
                    transition: all 0.5s;
                    background: #2c6c2f;
                    color: #fff;
                }

                .login-losti {
                    font-family: 'Binggrae-Bold';

                    width: 80%;
                    height: 38px;
                    /* padding: 13px 30px; */
                    margin: 5px 0 7px 0;
                    font-size: 15px;
                    color: #fff;
                    background-color: #b97d1d;
                    border: none;
                    border-bottom: 4px solid #f3c221;
                    border-radius: 10px;
                    cursor: pointer;
                }

                .login-losti:hover {
                    transition: all 0.5s;
                    background: #6c672c;
                    color: #fff;
                }

                .login-back {
                    font-family: 'Binggrae-Bold';

                    width: 80%;
                    height: 38px;
                    /* padding: 13px 30px; */
                    margin: 5px 0 7px 0;
                    font-size: 15px;
                    color: #fff;
                    background-color: #a734ff;
                    border: none;
                    border-bottom: 4px solid #c271ff;
                    border-radius: 10px;
                    cursor: pointer;
                }

                .login-losti:hover {
                    transition: all 0.5s;
                    background: #6411a3;
                    color: #fff;
                }







                /* 버튼들 마지막합시다. */







                .fgt_pass {
                    font-size: 14px;
                    color: #eeaaee !important;
                }

                .login-input input:hover {
                    box-shadow: 0 0 10px 10px #eeaaee;
                }

                .login-btns {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 50%;
                    height: 50%;
                }



                .milogin-checkbox {
                    display: flex;
                    /* Flexbox 사용하여 나란히 정렬 */
                    align-items: center;
                    /* 수직 중앙 정렬 */
                }

                .milogin_form_check {
                    margin-right: 8px;
                    /* 체크박스와 레이블 사이의 간격 */
                }

                .chk_aulo {
                    /* 원하는 스타일 추가 */
                    /* 글자 크기 */
                    /* 추가 스타일을 필요에 따라 추가하세요 */
                }






                /* 로딩 인디케이터 스타일 */
                .loading-indicator {
                    display: none;
                    /* 기본적으로 숨김 */
                    width: 40px;
                    height: 40px;
                    border: 4px solid #ccc;
                    border-top-color: #333;
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }

                @keyframes spin {
                    0% {
                        transform: rotate(0deg);
                    }

                    100% {
                        transform: rotate(360deg);
                    }
                }









                .member_pic {
                    width: 15%;
                }
                </style>

                <div id="SwUpBoard">
                    <div class="swub_container">

                        <div class="swub_inner">



                            <input id="SwUpBtn_close" class="SwUpBtn_close" type="button" data-lang-kr="닫기"
                                data-lang-jp="閉る" data-lang-en="CLOSE">


                        </div>

                    </div>

                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // container의 위치와 높이를 가져와 SwUpBoard에 적용
                    const swa_info_center = document.querySelector('.swa_info_center');
                    const SwUpBoard = document.getElementById('SwUpBoard');
                    const swa_info_top = document.querySelector('.swa_info');

                    // SwUpBoardBtn 버튼 클릭 시 SwUpBoard를 애니메이션으로 이동
                    document.getElementById('SwUpBoardBtn').addEventListener('click', function() {
                        const containerRect = container.getBoundingClientRect();
                        const scrollY = window.scrollY || window.pageYOffset;
                        const containerTop = containerRect.top + scrollY;

                        SwUpBoard.style.transition = 'top 0.5s ease'; // 애니메이션 설정
                        SwUpBoard.style.top = containerTop + 'px'; // container 위치로 설정
                    });

                    // SwUpBtn_close 버튼 클릭 시 SwUpBoard를 화면 밖으로 올리기
                    var closeButtons = document.getElementsByClassName('SwUpBtn_close');
                    for (var i = 0; i < closeButtons.length; i++) {
                        closeButtons[i].addEventListener('click', function() {
                            SwUpBoard.style.transition = 'top 0.5s ease'; // 애니메이션 설정
                            SwUpBoard.style.top = '-800px'; // 화면 밖으로 올리기
                        });
                    }

                });
                </script>


                <style>
                #swDown {
                    position: absolute;
                    top: 1200px;
                    left: 0;
                    width: 100%;
                    height: 45%;
                    /* color: white; */
                    transition: top 0.5s ease;
                    z-index: 1000;
                }

                .swdb_container {
                    width: 100%;
                    height: 100%;
                    background: #c5a4e1;
                    /* border-radius: 0 0 20px 20px; */
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .swdb_inner {
                    width: 90%;
                    height: 85%;
                    background: #fff;
                    border-radius: 10px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                }

                .ninicoin_box {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    height: 100%;
                }

                .ninicoin_store {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 50%;
                    height: 100%;
                }

                .ninicoin_sales {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 50%;
                    height: 100%;
                }


                .SwDownBtn_close_area {
                    width: 100%;
                    height: 10%;
                }

                .SwDownBtn_close {
                    width: 100%;
                    height: 100%;
                    bottom: 0;
                    background-color: #ff39a7;
                    color: white;
                    border-radius: 0 0 10px 10px;
                    font-size: 17px;
                    border: 0;
                    cursor: pointer;
                    font-family: 'Binggrae-Bold';
                }
                </style>

                <div id="swDown">
                    <div class="swdb_container">

                        <div class="swdb_inner">
                            <div class="ninicoin_box">
                                <div class="ninicoin_store">

                                    <link rel='stylesheet'
                                        href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
                                    <link rel="stylesheet" href="nini/css/swplayer.css">
                                    <div class="swa_music">
                                        <div class="swa_music_inner">
                                            <div id="app-cover">
                                                <div id="player">
                                                    <div id="player-track">
                                                        <div id="album-name"></div>
                                                        <div id="track-name"></div>
                                                        <div id="track-time">
                                                            <div id="current-time"></div>
                                                            <div id="track-length"></div>
                                                        </div>
                                                        <div id="s-area">
                                                            <div id="ins-time"></div>
                                                            <div id="s-hover"></div>
                                                            <div id="seek-bar"></div>
                                                        </div>
                                                    </div>
                                                    <div id="player-content">
                                                        <div id="album-art">
                                                            <img src="nini/img/potalimg.png" class=" active" id="_1">
                                                            <img src="nini/img/papersculpture.jpg" id="_2">
                                                            <!-- <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_3.jpg"
                                                            id="_3">
                                                        <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_4.jpg"
                                                            id="_4">
                                                        <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_5.jpg"
                                                            id="_5"> -->
                                                            <div id="buffer-box">Buffering ...</div>
                                                        </div>
                                                        <div id="player-controls">
                                                            <div class="control">
                                                                <div class="button" id="play-previous">
                                                                    <a>
                                                                        <i class="fas fa-backward"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="control">
                                                                <div class="button" id="play-pause-button">
                                                                    <a>
                                                                        <i class="fas fa-play"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="control">
                                                                <div class="button" id="play-next">
                                                                    <a>
                                                                        <i class="fas fa-forward"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ninicoin_sales">
                                    그림그려요~
                                    <br>
                                    수화니니
                                    <br>
                                    그림판개발
                                </div>
                            </div>
                            <div class="SwDownBtn_close_area">
                                <button class="SwDownBtn_close" data-lang-kr="그만볼래요" data-lang-jp="今見ません" data-lang-en="
                                    Stop watching">닫기</button>
                            </div>
                        </div>

                    </div>

                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const swDown = document.getElementById('swDown');
                    const swa_info = document.querySelector('.swa_info');
                    let isClosed = true; // SwDownBtn_close 버튼 여부

                    // swDownBtn 버튼 클릭 시 SwUpBoard를 애니메이션으로 이동
                    document.getElementById('swDownBtn').addEventListener('click', function() {
                        isClosed = false;
                        updateSwDownPosition();
                    });

                    // SwDownBtn_close버튼 클릭 시 SwUpBoard를 화면 밖으로 올리기
                    var closeButtons = document.getElementsByClassName('SwDownBtn_close');
                    for (var i = 0; i < closeButtons.length; i++) {
                        closeButtons[i].addEventListener('click', function() {
                            swDown.style.transition = 'top 0.5s ease'; // 애니메이션 설정
                            swDown.style.top = '1200px'; // 화면 밖으로 내림
                            isClosed = true;
                        });
                    }

                    // 브라우저 사이즈가 변경될 때 swDown의 위치 업데이트
                    window.addEventListener('resize', function() {
                        if (!isClosed) {
                            updateSwDownPosition();
                        }
                    });

                    function updateSwDownPosition() {
                        console.log("containerBottom : " + swa_info.clientHeight);
                        swDown.style.transition = 'top 0.5s ease'; // 애니메이션 설정
                        swDown.style.top = (swa_info.clientHeight * 0.45) + 'px';
                    }
                });
                </script>




                <div class="welcome_header">
                    <div class="welcome_header_inner">
                        <link rel="stylesheet" href="nini/css/slick.css">
                        <link rel="stylesheet" href="nini/css/slick-theme.css">
                        <link rel="stylesheet" href="nini/css/slick-custom.css">



                        <div class="slider">
                            <?php foreach ($upmenu as $umenu): ?>
                            <div class="slide">
                                <div class="menuBtn" data-param="<?= niniNoteCon($umenu['file_name']) ?>">
                                    <a href="javascript:void(0);">
                                        <div class="menuImgSp">
                                            <div class="menuImgMid">
                                                <!-- <object data="" class="devImg"></object> -->
                                                <img src="<?= niniNoteCon($umenu['file_path']) ?>" class="menuImg">
                                            </div>
                                            <span class="choiSp" data-lang-kr="<?= niniNoteCon($umenu['subjectkr']) ?>"
                                                data-lang-jp="<?= niniNoteCon($umenu['subjectjp']) ?>"
                                                data-lang-en="<?= niniNoteCon($umenu['subjecten']) ?>">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <!-- <div class="slide">
                                <div class="menuBtn" data-param="home">
                                    <a href="javascript:void(0);">
                                        <div class="menuImgSp">
                                            <div class="menuImgMid"> -->
                            <!-- <object data="" class="devImg"></object> -->
                            <!-- <img src="nini/img/house.png" class="menuImg">
                                            </div>
                                            <span class="choiSp" data-lang-kr="니니홈" data-lang-jp="ニニホム">
                                                니니홈
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div> -->

                            <!-- <div class="slide">
                                <div class="menuBtn" data-param="mall">
                                    <a href="javascript:void(0);">
                                        <div class="menuImgSp">
                                            <div class="menuImgMid">
                                                <img src="nini/img/harvest.png" class="menuImg">
                                            </div>
                                            <span class="choiSp" data-lang-kr="니니몰" data-lang-jp="ニニモール">
                                                니니몰
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>


                <div class="welcome_center">

                    <div class="homeContainer welcome_hidden">

                        <div class=" home_inner">

                            <!-- <div class="home_head">
                                <div class="home_head_outter">
                                    <div class="home_head_head">
                                        수화니니 유튜브
                                    </div>
                                    <div class="home_head_inner">
                                        <div class="home_profile">
                                        </div>
                                        <div class="visualvie">
                                            <div class="lovwel">
                                                <sapn>방문자수</sapn>
                                                <div class="visiting">
                                                    <span>
                                                        비밀🩷
                                                    </span>
                                                    <span>|</span>
                                                    <span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="lovwel">
                                                <span class="" data-lang-kr="수화니니 날씨 🌦️" data-lang-jp="スワーニの天気 🌦️">
                                                    수화니니 날씨 🌦️
                                                </span>
                                                <span>
                                                    weather_alert
                                                </span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="greeting">
                                        <div class="nini_intro">
                                            <div class="nini_intro_inner">
                                                <div class="intro_img">
                                                </div>
                                                <div class="intro_img">
                                                </div>
                                                <div class="intro_img">
                                                </div>
                                                <div class="intro_img">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="home_head_head">
                                        귀염둥이 알림장
                                    </div>
                                    <div class="home_head_scroll">
                                        <div class="home_head_wrap">
                                            <span>수화니니 포탈사이트 변경 개시</span>
                                        </div>
                                    </div>
                                    <div class="home_head_scroll">
                                        <div class="home_head_wrap">

                                            free_list
                                            <div class="home_head_body">
                                                subject
                                            </div>

                                            /

                                        </div>
                                    </div>
                                </div>
                            </div> -->



                            <div class="home_tube">
                                <div class="home_tube_inner">

                                    <div class="home_tube_head">
                                        <div class="home_tube_head_wrap">

                                            <span class="choiSp" data-lang-kr="수화니 TV" data-lang-jp="スワニ TV"
                                                data-lang-en="Swanne TV">
                                            </span>
                                            <img src="nini/img/utube.png" class="fbImg" id="fbLogo">
                                            <script>
                                            const tvLogo = document.getElementById('fbLogo');
                                            fbLogo.addEventListener('click', function() {
                                                window.open(
                                                    'https://www.youtube.com/channel/UCtoQMyTV-BsvAHdPiHPJbbg',
                                                    '_blank');
                                            });
                                            </script>
                                        </div>
                                    </div>


                                    <div class="home_tube_scroll">
                                        <div class="home_tube_wrap">

                                            <div class="tubebox">
                                                <ul class="">
                                                    <?php if (!empty($videos)): ?>
                                                    <?php foreach ($videos as $video): ?>
                                                    <li class="">
                                                        <a href="<?= htmlspecialchars($video['link']) ?>"
                                                            target="_blank">
                                                            <span class="">
                                                                <div class="img">
                                                                    <img src="https://img.youtube.com/vi/<?= htmlspecialchars($video['id']) ?>/hqdefault.jpg"
                                                                        alt="<?= htmlspecialchars($video['title']) ?>">
                                                                </div>
                                                                <h4 class="tubetit">
                                                                    <p><?= htmlspecialchars($video['title']) ?></p>
                                                                </h4>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                    <?php else: ?>
                                                    <p>유튜브 영상을 불러올 수 없습니다.</p>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="home_sns">
                                <div class="home_sns_inner">
                                    <div class="home_sns_head">
                                        <div class="home_sns_head_wrap">
                                            <style>
                                            .snshinfo_imgt {
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                height: 100%;
                                                width: 100%;
                                            }

                                            .snshinfo {
                                                font-size: 12px;
                                            }
                                            </style>
                                            <div class="snshinfo_imgt">
                                                <img src="nini/img/nininote.png" class="fbImg2" id="fbLogo">
                                                <span class="snshinfo" data-lang-kr="니니노트" data-lang-jp="ニニノト"
                                                    data-lang-en="NiNinote"></span>
                                            </div>
                                            <div class="snshinfo_imgt">
                                                <img src="nini/img/fb_logo.png" class="fbImg2" id="fbLogo">
                                                <span class="snshinfo" data-lang-kr="페이스북" data-lang-jp="フェイスブック"
                                                    data-lang-en="Facebook"></span>
                                            </div>
                                            <div class="snshinfo_imgt">
                                                <img src="nini/img/ist_logo.png" class="fbImg2" id="istLogo">
                                                <span class="snshinfo" data-lang-kr="인스타그램" data-lang-jp="インスタグラム"
                                                    data-lang-en="Instagram"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                    const fbLogo = document.getElementById('fbLogo');
                                    fbLogo.addEventListener('click', function() {
                                        window.open('https://www.facebook.com/profile.php?id=100076668277499',
                                            '_blank');
                                    });

                                    const istLogo = document.getElementById('istLogo');
                                    istLogo.addEventListener('click', function() {
                                        window.open(
                                            'https://www.instagram.com/swannenini/?fbclid=IwAR2KnvOT9CvmXpx3VdPBbSmIZQUdN1zRKvnEE9JotnFOntP7Dq4l3FN-d2g'
                                        );
                                    });
                                    </script>


                                    <div class="home_sns_scroll">
                                        <div class="home_sns_wrap">

                                            <?php if (!empty($nininote_list)): ?>
                                            <?php foreach ($nininote_list as $note): ?>
                                            <div class=" home_sns_body">
                                                <div class="ist_wrap">
                                                    <div class="ist_inner">
                                                        <?php if (!empty($note['file_path'])): ?>
                                                        <div class="fb_image">
                                                            <img src="<?= htmlspecialchars($note['file_path']) ?>"
                                                                alt="썸네일 이미지" class="fb_img">
                                                        </div>
                                                        <?php endif; ?>
                                                        <div class="ist_right">

                                                            <div class="ist_cap">
                                                                <span id="krlang">
                                                                    <?= niniNoteCon($note['contentkr']) ?>
                                                                </span>
                                                                <span id="jplang">
                                                                    <?= niniNoteCon($note['contentjp']) ?>
                                                                </span>
                                                                <span id="enlang">
                                                                    <?= niniNoteCon($note['contenten']) ?>
                                                                </span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <p>게시물이 없습니다.</p>
                                            <?php endif; ?>




                                            <!-- {@instatab}
                                            <div class=" home_sns_body">
                                                <div class="ist_wrap">
                                                    <div class="ist_inner">
                                                        <div class="fb_img">
                                                            <a href="{.permalink}" target="_blank">
                                                                <img src="{.media_url}" class="fb_img">
                                                            </a>
                                                        </div>
                                                        <div class="ist_right">

                                                            {<div class="ist_link">
                                                                <a href="{.permalink}" target="_blank">
                                                                    <img src="nini/img/ist_logo.png"
                                                                        class="fbImg">
                                                                </a>
                                                            </div>}

                                                            <div class="ist_cap">
                                                                {=nl2br(.caption)}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {/} -->

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="home_margin"></div>

                        </div>


                    </div>







                    <style>
                    .mallContainer {
                        width: 100%;
                        height: 100%;
                        overflow-y: auto;
                        display: flex;
                        justify-content: space-evenly;
                        flex-direction: row;
                        align-items: center;
                        flex-direction: column;
                        background: #006994;

                        color: #4b4b4b;

                        /* background: #2E8B57; */
                        /* sea green */
                        /* background: #177A76; */
                        /* deep cyan */
                    }

                    .mall_header {
                        width: 95%;
                        height: 20%;
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        flex-direction: row;
                        /* background: #EAF2F8;
                        border-radius: 15px; */
                    }

                    .mall_logo {
                        width: 20%;
                        height: 100%;
                        background: #EAF2F8;
                        border-radius: 15px;
                    }

                    .mall_search {
                        width: 75%;
                        height: 100%;
                        background: #EAF2F8;

                        border-radius: 15px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .mall_header_dott {
                        width: 98%;
                        height: 95%;
                        border: 5px dashed #177A76;
                        border-radius: 15px;
                        background: #fff;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                        border-bottom: none;
                    }

                    .mall_input {
                        height: 50%;
                        width: 100%;
                        /* background-color: tomato; */
                    }

                    .mall_menu_btn {
                        height: 50%;
                        width: 100%;
                        /* background-color: rgb(190, 255, 150); */
                        display: flex;
                        justify-content: space-evenly;
                        align-items: center;
                        flex-direction: row;
                        overflow-x: auto;
                        overflow-y: hidden;
                        white-space: nowrap;
                        /* 콘텐츠가 한 줄로 정렬되도록 설정 */
                    }


                    .mall_menu_btn::-webkit-scrollbar {
                        width: 5px;
                        height: 10px;
                    }

                    .menu_search_btn {
                        padding: 10px;
                        width: auto;
                        height: 70%;
                        border: 1px solid #4b4b4b;
                        border-radius: 15px;
                        /* display: flex; */
                        display: inline-flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0 7px;
                    }

                    .persim {
                        border: 2px solid #ffb464;
                        color: #ffb464;
                    }

                    .jujube {
                        border: 2px solid #D2B48C;
                        color: #D2B48C;
                    }

                    .peach {
                        border: 2px solid #eeaaee;
                        color: #eeaaee;
                    }

                    .apple {
                        border: 2px solid #ff4128;
                        color: #ff4128;
                    }

                    /* .menu_search_btn a {} */

                    .mall_inner {
                        width: 95%;
                        height: 70%;
                        /* background: #EAF2F8; */
                        background: #FFCC99;
                        border-radius: 15px;

                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }





                    .mall_inner_in {
                        width: 95%;
                        height: 92%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }


                    .mall_inner_scroll {
                        overflow-y: auto;
                        overflow-x: hidden;
                        width: 100%;
                        height: 95%;
                        border: 5px dashed #00bfff;
                        /* border-right: none; */
                        border-radius: 10px;
                        /* background-color: #F8ECC9; */
                        direction: ltr;
                    }

                    /* 스크롤바 스타일 */
                    .mall_inner_scroll::-webkit-scrollbar {
                        width: 12px;
                        /* 스크롤바 너비 */
                    }

                    .mall_inner_scroll::-webkit-scrollbar-thumb {
                        background: linear-gradient(180deg, #eeaaee, #00bfff);
                        /* 그라데이션 색상 */
                        border-radius: 10px;
                        /* 둥근 모서리 */
                    }

                    .mall_inner_scroll::-webkit-scrollbar-track {
                        background: #b5e0be;
                        /* 스크롤바 트랙 배경 */
                        border-radius: 10px;
                    }

                    .mall_inner_wrap {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                    }

                    .mallbox {
                        direction: ltr;
                    }

                    .mallbox ul {
                        list-style-type: none;
                        padding: 0;
                        margin: 15px;
                        display: flex;
                        flex-wrap: wrap;
                        /* justify-content: space-around; */
                        justify-content: flex-start;
                        width: 96%;
                    }

                    .mallbox ul li {
                        width: 23%;
                        /* 기본 4개 항목 표시 (100% / 4 - 2% 마진 고려) */
                        margin: 1%;
                    }

                    .mall_list {
                        background: #EAF2F8;
                        border-radius: 15px;
                    }

                    .mallImgA {
                        width: 100%;
                    }

                    .mall_goods_info {
                        display: flex;
                        justify-content: space-evenly;
                        align-items: center;
                        flex-direction: row;
                    }

                    @media (max-width: 1200px) {
                        .mallbox ul li {
                            width: 30%;
                            /* 3개 항목 표시 (100% / 3 - 3.33% 마진 고려) */
                        }
                    }

                    @media (max-width: 785px) {
                        .mallbox ul li {
                            width: 45%;
                            /* 2개 항목 표시 (100% / 2 - 5% 마진 고려) */
                        }
                    }

                    .mallImg {
                        border-radius: 10px;
                        width: 65%;
                        margin-top: 5px;
                    }

                    .malltit {
                        font-size: 16px;
                    }



                    .mall_board {
                        width: 97%;
                        height: 97%;

                        background: #fff;


                        border-radius: 15px;
                    }

                    /* .search_board::selection {
                        box-shadow: rgba(0, 0, 0, 0.99);
                    }

                    .serch_inner {} */
                    </style>


                    <div class="mallContainer welcome_hidden">

                        <div class="mall_header">

                            <div class="mall_logo">
                                니니몰 로고
                            </div>
                            <div class="mall_search">
                                <div class="mall_header_dott">
                                    <div class="mall_input">
                                        <div>

                                        </div>

                                        <div>

                                        </div>
                                    </div>
                                    <div class="mall_menu_btn">
                                        <a href="#" class="menu_search_btn persim">
                                            전체보기
                                        </a>

                                        <a href="#" class="menu_search_btn jujube">
                                            강화장준감
                                        </a>
                                        <a href="#" class="menu_search_btn jujube">
                                            진강산대추
                                        </a>
                                        <a href="#" class="menu_search_btn jujube">
                                            복숭아농장
                                        </a>
                                        <a href="#" class="menu_search_btn jujube">
                                            수화니농장
                                        </a>
                                        <a href="#" class="menu_search_btn jujube">
                                            장난감가게
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=" mall_inner">

                            <div class="mall_inner_in">

                                <div class="mall_inner_scroll">
                                    <div class="mall_inner_wrap">


                                        <div class="mallbox">
                                            <ul class="">
                                                <li class="mall_list">
                                                    <a href="https://mall.swanini.com/persimmon.html" target="_blank">
                                                        <img class="mallImg" src="nini/img/persim5.jpg"
                                                            alt="Video thumbnail">
                                                    </a>
                                                    <div class="mall_goods_info">
                                                        <h4 class="malltit">
                                                            강화장준감
                                                        </h4>
                                                        <a class="mall_kart_btn" href="#" target="_blank">
                                                            🛒
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="mall_list">
                                                    <a href="#" target="_blank">
                                                        <img class="mallImg" src="nini/img/juju.jpg"
                                                            alt="Video thumbnail">
                                                    </a>
                                                    <div class="mall_goods_info">
                                                        <h4 class="malltit">
                                                            진강산대추
                                                        </h4>
                                                        <a class="mall_kart_btn" href="#" target="_blank">
                                                            🛒
                                                        </a>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>




                    </div>
















                    <style>
                    .niniContainer {
                        width: 100%;
                        height: 100%;
                    }


                    .nini_outer {
                        width: 100%;
                        height: 100%;
                        overflow-y: hidden;
                        display: flex;
                        justify-content: center;
                        flex-direction: row;
                        align-items: center;

                        background: #FFD4F2;
                    }


                    .nini_outing {
                        width: 100%;
                        height: 100%;
                        overflow-y: auto;
                        display: flex;
                        justify-content: center;
                        flex-direction: row;
                        align-items: center;
                        /* max-width: 100%; */
                        box-sizing: border-box;
                        position: relative;
                        overflow-x: hidden;
                        margin: 0;
                        padding: 0;
                        /* transform: translateZ(0);*/
                    }

                    .nini_inner {
                        width: 95%;
                        height: 95%;
                    }

                    .login {
                        height: 100%;
                        min-height: 460px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                    }

                    .login .login_logo {
                        height: 90px;
                        background-image: url("nini/img/login_logo.png");
                        /*컴파일 된 이후의 경로*/
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: auto 100%;
                        margin-bottom: 20px;
                    }

                    .login .login_account {
                        font-size: 0.8em;
                        color: rgba(0, 0, 0, 0.8);
                        text-align: center;
                    }

                    .login .login_account a {
                        color: #585858;
                    }

                    .login_form {
                        width: 240px;
                        margin: 0 auto 80px;
                        font-size: 0.8em;
                    }

                    .login_form input {
                        width: 240px;
                        height: 40px;
                        border: 0px solid rgba(0, 0, 0, 0.8);
                    }

                    .login_form input:focus {
                        outline: none;
                    }

                    .login_form input::placeholder {
                        color: #86c7ff;
                    }

                    .login_form .login_form_id {
                        border-radius: 3px 3px 0 0;
                        border-bottom: none;
                        padding-left: 10px;
                    }

                    .login_form .login_form_pw {
                        border-radius: 0 0 3px 3px;
                        border-top: 1px solid rgba(0, 0, 0, 0.05);
                        padding-left: 10px;
                        margin-bottom: 7px;
                    }

                    .login_form .login_form_btn {
                        background-color: #CBE5FC;
                        color: #fff;
                    }

                    .login_form .login_form_btn:hover {
                        background-color: #fff;
                        color: #CBE5FC;
                    }

                    .login_form .login_form_check {
                        width: 16px;
                        vertical-align: middle;
                    }

                    .login_form label {
                        color: #585858;
                    }
                    </style>



                    <div class="niniContainer welcome_hidden">




                        <?php if ($member_info === false): ?>

                        <div class="nini_outer">

                            <div class="nini_inner">


                                <div class="login">
                                    <h1 class="login_logo"></h1>
                                    <!-- <form action="./chatList.html" class="login_form"> -->
                                    <form action="https://swannenini.com" class="login_form">
                                        <input type="text" class="login_form_id" placeholder="니니계정 (이메일 또는 전화번호)">
                                        <input type="password" class="login_form_pw" placeholder="비밀번호">
                                        <input type="submit" class="login_form_btn" value="로그인">
                                        <input type="checkbox" class="login_form_check" id="check"> <label for="check">
                                            자동로그인</label>
                                    </form>
                                    <p class="login_account">
                                        <a href="#">니니톡 가입하기</a>
                                        &nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;
                                        <a href="#">비밀번호재설정</a>
                                    </p>
                                </div>

                            </div>

                        </div>


                        <?php else: ?>

                        <style>
                        .navi {
                            height: 100%;
                            width: 251px;
                            border-radius: 0;
                            /* position: fixed; */
                            background-color: #ffeaf9;
                            padding-top: 50px;
                            left: 0;
                            position: sticky;
                            top: 0;
                            /* margin: 20px; */
                            padding: 22px;
                        }

                        .navi .navi_list .navi_btn {
                            padding: 14px 0;
                            text-align: center;
                        }

                        .navi .navi_list a {
                            color: #86c7ff;
                        }

                        .navi .navi_list a.active {
                            color: #0088ff;
                        }

                        .headerni {
                            display: flex;
                            justify-content: space-between;
                            padding: 50px 20px 20px;
                            position: sticky;
                            top: 0;
                            background: #fff;
                            z-index: 10;
                            width: calc(100% - 70px);
                        }

                        .headerni .headerni_title {
                            font: size 1.4em;
                        }

                        .headerni .headerni_menu span {
                            height: 36px;
                            width: 36px;
                            border-radius: 18px;
                            display: inline-block;
                            text-align: center;
                            line-height: 36px;
                            cursor: pointer;
                        }

                        .headerni .headerni_menu span:hover {
                            background-color: #ffeaf9;
                        }

                        .preview {
                            display: flex;
                            padding: 16px;
                            position: relative;
                        }

                        .preview .preview_pic {
                            height: 50px;
                            width: 50px;
                            border-radius: 16px;
                            background-color: #CBE5FC;
                            margin-right: 16px;
                        }

                        .preview .preview_nick {
                            width: 50vw;
                            font-size: 0.85em;
                            margin-bottom: 6px;
                            white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }

                        .preview .preview_msg {
                            width: 50vw;
                            font-size: 0.82em;
                            color: #919191;
                            display: -webkit-box;
                            word-wrap: break-word;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }

                        .preview .preview_time {
                            position: absolute;
                            top: 10px;
                            right: 16px;
                            font-size: 0.7em;
                            color: #86c7ff;
                        }

                        .preview .bubble {
                            height: auto;
                            width: auto;
                            border-radius: 4px;
                            position: relative;
                            background-color: #d1dfe8;
                            box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
                            padding: 10px;
                            font-size: 0.9em;
                        }

                        .preview .bubble::before {
                            height: 0;
                            width: 0;
                            border-radius: 0;
                            content: "";
                            position: absolute;
                            top: 10px;
                            left: -10px;
                            border-bottom: 10px solid transparent;
                            border-right: 10px solid #d1dfe8;
                        }

                        .preview.my {
                            flex-direction: row-reverse;
                        }

                        .preview.my .bubble_wrap {
                            flex-direction: row-reverse;
                        }

                        .preview.my .preview_pic {
                            display: none;
                        }

                        .preview.my .preview_nick {
                            display: none;
                        }

                        .preview.my .bubble {
                            background-color: #ede2e3;
                        }

                        .preview.my .bubble::before {
                            left: auto;
                            right: -10px;
                            border-top: 10px solid #ede2e3;
                            border-right: 10px solid transparent;
                        }

                        .friends {
                            display: flex;
                            padding: 12px 0 12px 5px;
                            position: relative;
                            margin: 0;
                        }

                        .friends .friends_pic {
                            height: 50px;
                            width: 50px;
                            border-radius: 16px;
                            background-color: #CBE5FC;
                            margin-right: 16px;
                        }

                        .friends .friends_nick {
                            width: 50vw;
                            font-size: 1.2em;
                            margin-bottom: 6px;
                            white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }

                        .friends .friends_msg {
                            width: 65vw;
                            font-size: 0.85em;
                            color: #919191;
                            display: -webkit-box;
                            word-wrap: break-word;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }

                        .login_container {
                            width: 100%;
                            height: 100%;
                            background-color: #FFD4F2;
                        }

                        .login {
                            height: 100%;
                            min-height: 460px;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                        }

                        .login .login_logo {
                            height: 90px;
                            background-img: url("../img/login_logo.png");
                            /*컴파일 된 이후의 경로*/
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: auto 100%;
                            margin-bottom: 20px;
                        }

                        .login .login_account {
                            font-size: 0.8em;
                            color: rgba(0, 0, 0, 0.8);
                            text-align: center;
                        }

                        .login .login_account a {
                            color: #585858;
                        }

                        .login_form {
                            width: 240px;
                            margin: 0 auto 80px;
                            font-size: 0.8em;
                        }

                        .login_form input {
                            width: 240px;
                            height: 40px;
                            border: 1px solid rgba(0, 0, 0, 0.8);
                        }

                        .login_form input:focus {
                            outline: none;
                        }

                        .login_form input::placeholder {
                            color: #86c7ff;
                        }

                        .login_form .login_form_id {
                            border-radius: 3px 3px 0 0;
                            border-bottom: none;
                            padding-left: 10px;
                        }

                        .login_form .login_form_pw {
                            border-radius: 0 0 3px 3px;
                            border-top: 1px solid rgba(0, 0, 0, 0.05);
                            padding-left: 10px;
                            margin-bottom: 7px;
                        }

                        .login_form .login_form_btn {
                            background-color: #CBE5FC;
                            color: #fff;
                        }

                        .login_form .login_form_btn:hover {
                            background-color: #fff;
                            color: #CBE5FC;
                        }

                        .login_form .login_form_check {
                            width: 16px;
                            vertical-align: middle;
                        }

                        .login_form label {
                            color: #585858;
                        }

                        .chats {
                            /* margin-left: 70px; */

                            width: 100%;
                            margin: 0;
                            padding: 0;
                        }

                        a.preview_wrap {
                            color: #000;
                        }

                        a.preview_wrap .preview:hover {
                            background: #ffeaf9;
                        }

                        .chat {
                            height: 100%;
                            width: 100%;
                            border-radius: 0;
                        }

                        .chat_screen {
                            height: calc(100% - 140px);
                            overflow: auto;
                            background-color: #efffe6;
                        }

                        .chat_screen .chat_screen_bar {
                            position: sticky;
                            top: 0;
                            z-index: 10;
                        }

                        .chat_screen .chat_screen_bar .chat_nick {
                            font-size: 1em;
                        }

                        .chat_user {
                            background-color: #ffe1d7;
                        }

                        .bubble_container {
                            padding-top: 20px;
                        }

                        .bubble_wrap {
                            display: flex;
                        }

                        .bubble_wrap .buuble_content {
                            width: 80%;
                            max-width: 700px;
                        }

                        .bubble_wrap .bubble_time {
                            font-size: 0.7em;
                            display: flex;
                            align-items: self-end;
                            padding-left: 6px;
                            white-space: nowrap;
                            margin-right: 10px;
                        }

                        .chat_form {
                            background: #cbe5fc;
                            height: 140px;
                            padding: 10px;
                        }

                        .chat_form .chat_form_msg {
                            height: 75px;
                            width: 100%;
                            border-radius: 0;
                            resize: none;
                            border: none;
                            outline: none;
                            margin-bottom: 8px;
                        }

                        .chat_form .chat_form_util {
                            display: flex;
                            justify-content: space-between;
                        }

                        .chat_form .chat_form_util .chat_form_util_plugin i {
                            margin-right: 10px;
                            color: #86c7ff;
                            line-height: 35px;
                        }

                        .chat_form .chat_form_util .chat_form_util_submit .chat_form_btn {
                            height: 35px;
                            width: 70px;
                            border-radius: 6px;
                            border: none;
                            color: #585858;
                        }

                        .chats {
                            margin-left: 70px;
                        }

                        .friends_list {
                            width: 100%;
                            display: flex;
                            align-items: flex-start;
                            flex-direction: column;
                        }

                        a.friends_wrap {
                            color: #000;
                            width: 100%;
                        }

                        a.friends_wrap .friends:hover {
                            background: #ffeaf9;
                        }

                        a.friends_wrap .friends:active {
                            background-color: #f7f7f7;
                        }

                        #mydiv {
                            position: absolute;
                            top: 20%;
                            left: 25%;
                            z-index: 9;
                            background-color: #f1f1f1;
                            text-align: center;
                            border: 1px solid #d3d3d3;
                        }

                        #mydiv img {
                            width: 250px;
                            height: 250px;
                        }

                        #mydiv .friends_select {
                            height: 70px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                        }

                        #mydiv a {
                            top: 0;
                            padding: 30px;
                        }

                        #mydivheaderni {
                            padding: 10px;
                            cursor: move;
                            z-index: 10;
                            background-color: #2196F3;
                            color: #fff;
                        }

                        .divhr {
                            text-align: center;
                            width: 100%;
                            display: flex;
                            justify-content: center;
                        }

                        .divhr hr {
                            width: 100%;
                            border: 1px solid #d5d5d5;
                        }
                        </style>







                        <div class="nini_outing">




                            <nav class="navi">
                                <ul class="navi_list">
                                    <li class="navi_btn">
                                        <a href="friends.html">
                                            <i class="fa-solid fa-user fa-xl"></i>
                                        </a>
                                    </li>
                                    <li class="navi_btn">
                                        <a href="#" class="active">
                                            <i class="fa-solid fa-comment fa-xl"></i>
                                        </a>
                                    </li>
                                    <li class="navi_btn">
                                        <a href="#">
                                            <i class="fa-solid fa-ellipsis fa-xl"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="chats">
                                <header class="headerni">
                                    <h3 class="headerni_title">채팅</h3>
                                    <div class="headerni_menu">
                                        <span><i class="fa-solid fa-magnifying-glass fa-lg"></i></span>
                                        <span><i class="fa-regular fa-comments fa-lg"></i></span>
                                        <span><i class="fa-solid fa-user-plus fa-lg"></i></span>
                                    </div>
                                </header>
                                <main class="previews">
                                    <div class="preview_list">
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolor sit amet,
                                                        officia excepteur ex fugiat reprehenderit
                                                        enim
                                                        labore culpa sint ad nisi Lorem pariatur</div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolor sit amet,
                                                        officia excepteur ex fugiat reprehenderit
                                                        enim labore culpa sint ad nisi Lorem pariatur Lorem ipsum
                                                        dolor
                                                        sit amet, officia excepteur ex fugiat
                                                        reprehenderit enim labore culpa sint ad nisi Lorem pariatur
                                                    </div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름 Lorem ipsum dolor sit amet,
                                                        officia
                                                        excepteur ex fugiat reprehenderit
                                                    </div>
                                                    <div class="preview_msg">reprehenderit enim
                                                        labore culpa sint ad nisi Lorem pariatur</div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 </div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름 채팅방이름 채팅방이름 채팅방이름 </div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolorim
                                                        labore culpa sint ad nisi Lorem pariatur</div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름 채팅방이름 채팅방이름 채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolor sit amet,
                                                        officia excepteur ex fugiat reprehenderit
                                                        enim
                                                        labore culpa sint ad nisi Lorem pariatur</div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolor sit amet,
                                                        officia excepteur ex fugiat reprehenderit
                                                        enim labore culpa sint ad nisi Lorem pariatur</div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolor sit amet
                                                    </div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolor sit amet,
                                                        officia excepteur ex fugiat reprehenderit
                                                        enim
                                                        labore culpa sint ad nisi Lorem pariatur</div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="chat.html" class="preview_wrap">
                                            <div class="preview">
                                                <div class="preview_column">
                                                    <div class="preview_pic"></div>
                                                </div>
                                                <div class="preview_column">
                                                    <div class="preview_nick">채팅방이름</div>
                                                    <div class="preview_msg">채팅방 미리보기 Lorem ipsum dolor sit amet,
                                                        officia excepteur ex fugiat reprehenderit
                                                        enim
                                                        labore culpa sint ad nisi Lorem pariatur</div>
                                                    <div class="preview_time">오전 10:30</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </main>
                            </div>

                        </div>


                    </div>
                    <?php endif; ?>


                    <style>
                    .blogContainer {
                        width: 100%;
                        height: 100%;
                        overflow-y: auto;
                        display: flex;
                        justify-content: center;
                        flex-direction: row;
                        align-items: center;

                        background: #dfdfdf;
                    }

                    .blog_inner {
                        width: 95%;
                        height: 95%;
                    }
                    </style>


                    <div class="blogContainer welcome_hidden">

                        <div class="blog_inner">

                            <div>
                                어떤 것이든 검색해보세요!
                            </div>
                            <div>
                                수화니니 데이터베이스 활용
                            </div>

                        </div>


                    </div>







                    <div class="swiper-container welcome_hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="choiUi">
                                    <a href="javascript:void(0);" class="menu-link" data-target="web">
                                        <div class="menu-nation">
                                            <img src="nini/img/swanne+national+re.png" class="devImg">
                                            <span class="devSel" data-lang-kr="웹개발" data-lang-jp="ウェブ開発"
                                                data-lang-en="WebDev">
                                            </span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="menu-link" data-target="meta">
                                        <div class="menu-nation">
                                            <img src="nini/img/swanne+meta_re.png" class="devImg">
                                            <span class="devSel" data-lang-kr="메타플랫폼" data-lang-jp="メタプラト"
                                                data-lang-en="MetaFlat">
                                            </span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="menu-link" data-target="cathol">
                                        <div class="menu-nation">
                                            <img src="nini/img/swanne+christen_re.png" class="devImg">
                                            <span class="devSel" data-lang-kr="수화니성당" data-lang-jp="金秀の聖堂"
                                                data-lang-en="SwCatholic">
                                            </span>
                                        </div>
                                    </a>
                                </div>



                                <div class="welcomeWeb">

                                    <!-- 수화니니케이크 시작 -->
                                    <link rel="stylesheet" href="nini/css/starter-cake.css">
                                    <link rel='stylesheet' href='nini/css/cake-3d.css'>
                                    <link rel="stylesheet" href="nini/css/cake.css">
                                    <div style="transform-style: preserve-3d; width: 20%; height: 100%;">
                                        <!-- ? orbit (Y-axis) -->
                                        <section data-camera>
                                            <section data-scene>
                                                <div class="n-gon plate" data-3d>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>

                                                <div class="n-gon cake-base" data-slice data-3d>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>

                                                <div class="spheres strawberries" data-3d>
                                                    <div>
                                                        <div class="sphere"></div>
                                                        <div class="leaf l1"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                        <div class="leaf l4"></div>
                                                        <div class="leaf l4 l5"></div>
                                                        <div class="leaf l4 l5 l6"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                        <div class="leaf l7"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                        <div class="leaf l7 l8"></div>
                                                    </div>
                                                    <div>
                                                        <div class="sphere"></div>
                                                        <div class="leaf l7 l9"></div>
                                                    </div>
                                                </div>

                                                <div class="cake-base-shadow"></div>
                                            </section>
                                        </section>

                                        <script src="nini/js/camera-cake.js"></script>
                                        <!-- <script src="nini/js/cake.js"></script> -->
                                    </div>
                                    <!-- 수화니니 케이크 종료 -->

                                    <!-- 커피 시작 -->
                                    <link rel="stylesheet" href="nini/css/grigo.css">
                                    <div id="plate">
                                        <div id="cup">
                                            <div id="cupInner"></div>
                                            <div id="coffeBg">
                                                <div id="foamWrapper">
                                                    <div id="foam1" class="foam"></div>
                                                    <div id="foam2" class="foam"></div>
                                                    <div id="foam3" class="foam"></div>
                                                    <div id="foam4" class="foam"></div>
                                                    <div id="foam5" class="foam"></div>
                                                    <div id="foam6" class="foam"></div>
                                                    <div id="foam7" class="foam"></div>
                                                    <div id="foam8" class="foam"></div>
                                                    <div id="foam9" class="foam"></div>
                                                    <div id="foam10" class="foam"></div>
                                                    <div id="foam11" class="foam"></div>
                                                    <div id="foam12" class="foam"></div>
                                                    <div id="foam13" class="foam"></div>

                                                    <div id="foamMiddleWrapper">
                                                        <div id="foamMiddleContainer">
                                                            <div id="foamMiddle1" class="foamMiddle"></div>
                                                            <div id="foamMiddle2" class="foamMiddle"></div>
                                                            <div id="bubbleMiddle1" class="bubble"></div>
                                                            <div id="bubbleMiddle2" class="bubble"></div>
                                                            <div id="bubbleMiddle3" class="bubble"></div>
                                                            <div id="bubbleMiddle4" class="bubble"></div>
                                                        </div>
                                                    </div>

                                                    <div id="bubble1" class="bubble"></div>
                                                    <div id="bubble2" class="bubble"></div>
                                                    <div id="bubble3" class="bubble"></div>
                                                    <div id="bubble4" class="bubble"></div>
                                                    <div id="bubble5" class="bubble"></div>
                                                    <div id="bubble6" class="bubble"></div>
                                                    <div id="bubble7" class="bubble"></div>
                                                    <div id="bubble8" class="bubble"></div>
                                                    <div id="bubble9" class="bubble"></div>
                                                    <div id="bubble10" class="bubble"></div>
                                                    <div id="bubble11" class="bubble"></div>
                                                    <div id="bubble12" class="bubble"></div>
                                                    <div id="bubble13" class="bubble"></div>
                                                    <div id="bubble14" class="bubble"></div>
                                                    <div id="bubble15" class="bubble"></div>

                                                    <div id="bubbleSmall1" class="bubbleSmall"></div>
                                                    <div id="bubbleSmall2" class="bubbleSmall"></div>
                                                    <div id="bubbleSmall3" class="bubbleSmall"></div>
                                                    <div id="bubbleSmall4" class="bubbleSmall"></div>
                                                    <div id="bubbleSmall5" class="bubbleSmall"></div>
                                                    <div id="bubbleSmall6" class="bubbleSmall"></div>
                                                    <div id="bubbleSmall7" class="bubbleSmall"></div>
                                                    <div id="bubbleSmall8" class="bubbleSmall"></div>

                                                </div>
                                                <div id="innerShadow"></div>
                                                <div id="glow"></div>
                                            </div>
                                        </div>
                                        <div id="handle"></div>
                                    </div>
                                    <!-- <div id="steamWrapper">
                                        <div id="steam"></div>
                                    </div> -->

                                    <svg width="0" height="0">
                                        <defs>
                                            <filter id="goo">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"
                                                    id="blurFilter" />
                                                <feColorMatrix in="blur" mode="matrix"
                                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -5"
                                                    result="goo" />
                                                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                            </filter>
                                        </defs>
                                    </svg>

                                    <svg width="0" height="0">
                                        <defs>
                                            <filter id="scatter">
                                                <feTurbulence baseFrequency="10.9" type="fractalNoise" numOctaves="1" />
                                                <feDisplacementMap in="SourceGraphic" xChannelSelector="G"
                                                    yChannelSelector="B" scale="20" />
                                                <feComposite operator="in" in2="finalMask" />
                                            </filter>
                                        </defs>
                                    </svg>

                                    <svg width="0" height="0">
                                        <filter id="fog">
                                            <feTurbulence type="fractalNoise" baseFrequency=".01" numOctaves="10" />
                                            <feDisplacementMap in="SourceGraphic" scale="180" />
                                        </filter>
                                    </svg>

                                    <script src="nini/js/grigo.js"></script>
                                    <!-- 커피 종료 -->

                                </div>

                                <div class="btnWeb">
                                    <a href=" /alpha.php">
                                        <div class="icon-block">
                                            <div class="icon gift-icon">
                                                <svg enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g class="gift-icon__gift">
                                                        <path
                                                            d="m351.219 66.184h-9.198v-21.945c0-15.434-16.427-25.319-30.064-18.091l-63.618 33.721c-7.197 3.815-15.154 5.932-23.275 6.25-8.121-.319-16.078-2.436-23.275-6.25l-63.619-33.721c-13.637-7.228-30.064 2.657-30.064 18.091v21.945h-9.198c-18.552 0-33.592 15.04-33.592 33.592v14.187h319.495v-14.187c0-18.552-15.04-33.592-33.592-33.592z"
                                                            fill="#df646e"></path>
                                                        <path
                                                            d="m351.219 66.184h-9.198v-21.945c0-15.434-16.427-25.319-30.064-18.091l-5.885 3.119c3.941 3.652 6.51 8.876 6.51 14.971v21.945h9.198c18.552 0 33.592 15.04 33.592 33.592v14.187h29.439v-14.186c0-18.552-15.04-33.592-33.592-33.592z"
                                                            fill="#dc4955"></path>
                                                        <path
                                                            d="m48.775 451.919v-139.169l53.535-28.111-53.535-54.569v-43.806h352.576v265.655c0 13.607-11.031 24.638-24.638 24.638h-85.941l-71.057-68.727-4.825 68.727h-141.477c-13.607.001-24.638-11.03-24.638-24.638z"
                                                            fill="#e27c48"></path>
                                                        <path d="m48.775 319.833 156.725 156.725h96.575l-253.3-253.3z"
                                                            fill="#f7f3f1"></path>
                                                        <path
                                                            d="m48.775 186.264v31.175h295.722c13.952 0 25.263 11.31 25.263 25.263v209.218c0 13.607-11.031 24.638-24.638 24.638h31.592c13.607 0 24.638-11.031 24.638-24.638v-265.656z"
                                                            fill="#dd552d"></path>
                                                        <path
                                                            d="m401.352 351.029-164.766-164.765h-96.575l261.341 261.341z"
                                                            fill="#f7f3f1"></path>
                                                        <path d="m401.352 447.605v-96.576l-31.593-31.592v96.576z"
                                                            fill="#dc4955"></path>
                                                        <path d="m267.761 217.439-31.175-31.175h-96.575l31.175 31.175z"
                                                            fill="#ebe1dc"></path>
                                                        <path
                                                            d="m303.874 66.184h38.146v-15.452h-38.146c-4.268 0-7.726 3.459-7.726  7.726s3.459 7.726 7.726 7.726z"
                                                            fill="#dc4955"></path>
                                                        <path d="m312.581 50.732h29.439v15.453h-29.439z" fill="#d82f3c">
                                                        </path>
                                                        <path
                                                            d="m108.106 50.732v15.453h38.146c4.267 0 7.726-3.459 7.726-7.726s-3.459-7.726-7.726-7.726h-38.146z"
                                                            fill="#dc4955"></path>
                                                        <path
                                                            d="m225.063 30.332c-13.983 0-25.318 11.335-25.318 25.318v58.313h50.636v-58.313c.001-13.983-11.335-25.318-25.318-25.318z"
                                                            fill="#dc4955"></path>
                                                        <path
                                                            d="m0 128.028v44.171c0 7.768 6.297 14.065 14.065 14.065h421.997c7.768 0 14.065-6.297 14.065-14.065v-44.171c0-7.768-6.297-14.065-14.065-14.065h-421.997c-7.768 0-14.065 6.297-14.065 14.065z"
                                                            fill="#94d4a2"></path>
                                                        <path
                                                            d="m436.062 113.963h-31.592c7.768 0 14.065 6.297 14.065 14.065v44.172c0 7.768-6.297 14.065-14.065 14.065h31.592c7.768 0 14.065-6.297 14.065-14.065v-44.171c0-7.769-6.297-14.066-14.065-14.066z"
                                                            fill="#6dc17d"></path>
                                                    </g>
                                                    <g class="gift-icon__egg">
                                                        <path
                                                            d="m414.922 244.441c-30.052-.362-63.408 28.51-83.182 71.158-10.478 22.599 5.277 38.084 4.94 66.119-.096 7.969-21.664 26.614-19.972 33.895 9.906 42.606 48.648 72.082 95.28 72.643 47.007.566 86.706-28.435 97.259-71.354 1.705-6.933-15.613-25.262-15.522-32.855.341-28.301 12.459-44.127 2.359-67.115-18.786-42.76-51.262-72.131-81.162-72.491z"
                                                            fill="#f1cd88"></path>
                                                        <path
                                                            d="m414.922 244.441c-5.426-.065-10.961.834-16.503 2.584 41.488 13.281 82.661 75.99 81.794 148.054-.587 48.734-36.294 85.223-82.785 92.035 4.748.693 9.609 1.082 14.56 1.142 54.601.657 99.342-38.576 99.999-93.177.974-80.943-51.09-150.084-97.065-150.638z"
                                                            fill="#ebb34c"></path>
                                                        <path
                                                            d="m488.525 307.994c-3.533-2.159-7.977-2.159-11.51 0l-23.317 14.252c-3.533 2.16-7.977 2.16-11.511 0l-23.318-14.252c-3.533-2.159-7.978-2.159-11.511 0l-23.316 14.251c-3.533 2.16-7.978 2.16-11.511 0l-23.315-14.251c-3.533-2.16-7.978-2.16-11.511 0l-3.24 1.981c-12.037 23.777-19.84 52.329-20.206 82.724-.133 11.012 1.545 21.442 4.752 31.082l18.694-11.428c3.533-2.16 7.978-2.16 11.511 0l23.315 14.251c3.533 2.16 7.978 2.16 11.511 0l23.316-14.251c3.533-2.159 7.978-2.159 11.511 0l23.318 14.252c3.533 2.16 7.978 2.159 11.511 0l23.317-14.252c3.533-2.159 7.977-2.16 11.51 0l18.734 11.449c2.954-8.937 4.605-18.564 4.727-28.723.371-30.812-6.949-59.908-18.688-84.168z"
                                                            fill="#80b6fc"></path>
                                                        <path
                                                            d="m504.485 340.14c-.018-.063-.037-.125-.055-.187-2.93-10.073-6.661-19.805-11.131-29.042l-4.773-2.917c-3.533-2.159-7.977-2.159-11.51 0l-13.118 8.018c10.343 23.191 16.661 50.386 16.316 79.066-.068 5.674-.632 11.174-1.614 16.488 3.216-1.315 6.903-1.061 9.926.786l18.734 11.449c8.302-25.119 4.48-58.621-2.775-83.661z"
                                                            fill="#62a4fb"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <!--replay btn-->
                                            <button class="webDevBtn" type="button" data-lang-kr="포트폴리오"
                                                data-lang-jp="ポートフォリオ">포트폴리오</button>
                                        </div>
                                    </a>
                                    <a href=" /beta.php">
                                        <!--single icon-->
                                        <div class="icon-block">
                                            <div class="icon chick-icon">
                                                <svg enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m207.983 47.935c5.71 6.271 8.68 14.434 11.519 22.374 5.831-9.696 14.035-18.953 23.01-27.431-.745-.984-1.534-1.938-2.385-2.846-5.884-6.275-15.223-10.121-23.273-7.091-5.515 2.076-9.41 7.085-11.147 12.778.806.698 1.568 1.44 2.276 2.216z"
                                                        fill="#ebb34c"></path>
                                                    <path
                                                        d="m308.957 89.069c14.469-7.03 27.135-17.333 35.181-29.978 6.096-9.579 10.479-20.742 9.605-32.063s-7.976-22.615-18.827-25.957c-12.608-3.883-25.833 3.434-36.147 11.659-16.926 13.498-35.954 31.019-46.548 49.898-3.036-8.048-6.21-16.321-12.093-22.596-5.884-6.275-15.223-10.121-23.273-7.091-7.588 2.856-12.13 11.258-12.167 19.366s3.719 15.825 8.652 22.258c2.587 3.374 5.532 6.463 8.752 9.236-88.278 29.991-159.159 160.667-159.07 264.331.06 70.148 38.615 119.749 96.543 144.92 27.714 12.042 164.129 13.244 193.249.949 57.303-24.196 96.222-72.263 96.163-141.027-.087-102.318-59.412-226.002-140.02-263.905z"
                                                        fill="#f1cd88"></path>
                                                    <path
                                                        d="m255.299 98.763c-16.431-2.141-31.877-11.048-41.96-24.198-4.934-6.434-8.69-14.151-8.652-22.258s4.579-16.51 12.167-19.366c8.05-3.03 17.39.817 23.273 7.091s9.057 14.548 12.093 22.596c10.594-18.879 29.623-36.4 46.548-49.898 10.314-8.226 23.539-15.542 36.147-11.659 10.851 3.342 17.952 14.636 18.827 25.957s-3.509 22.484-9.605 32.063c-17.45 27.424-56.604 43.872-88.838 39.672z"
                                                        fill="#f1cd88"></path>
                                                    <path
                                                        d="m308.957 89.069c14.469-7.03 27.135-17.333 35.181-29.978 6.096-9.579 10.479-20.742 9.605-32.063-.875-11.321-7.975-22.615-18.827-25.957-11.879-3.658-24.306 2.626-34.33 10.245.846.179 1.689.401 2.528.676 10.716 3.515 17.524 14.723 18.14 25.814s-3.993 21.909-10.27 31.138c-8.285 12.183-21.111 21.971-35.656 28.517 79.308 38.906 135.528 161.219 133.322 261.287-2.148 97.42-84.662 150.492-185.064 151.222 9.863 1.2 100.109-3.673 129.229-15.969 57.303-24.196 96.222-72.263 96.163-141.027-.088-102.318-59.413-226.002-140.021-263.905z"
                                                        fill="#ebb34c"></path>
                                                    <path
                                                        d="m253.917 511.977c36.007.452 69.952-5.723 99.124-18.084-13.346-36.905-51.735-63.577-97.041-63.577-44.912 0-83.022 26.213-96.683 62.62 27.772 12.112 60.006 18.607 94.6 19.041z"
                                                        fill="#ebe1dc"></path>
                                                    <path
                                                        d="m344.513 476.627c-32.497 21.621-74.797 32.998-120.874 33.342.293.035.589.067.882.101 9.909 1.171 20.165 1.791 29.396 1.907 33.627.422 68.158-4.962 99.124-18.084-2.19-6.058-5.068-11.833-8.528-17.266z"
                                                        fill="#dcd2cd"></path>
                                                    <path
                                                        d="m193.735 219.071c-4.268 0-7.726-3.459-7.726-7.726v-5.299c0-4.267 3.459-7.726 7.726-7.726s7.726 3.459 7.726 7.726v5.299c.001 4.267-3.458 7.726-7.726 7.726z"
                                                        fill="#655e67"></path>
                                                    <path
                                                        d="m318.265 219.071c-4.268 0-7.726-3.459-7.726-7.726v-5.299c0-4.267 3.459-7.726 7.726-7.726 4.268 0 7.726 3.459 7.726 7.726v5.299c0 4.267-3.459 7.726-7.726 7.726z"
                                                        fill="#655e67"></path>
                                                    <path
                                                        d="m224.457 260.196 21.321 28.436c5.11 6.816 15.334 6.816 20.444 0l21.321-28.436c2.396-3.195 2.074-7.699-.794-10.478-20.499-19.856-40.998-19.856-61.497 0-2.869 2.779-3.191 7.282-.795 10.478z"
                                                        fill="#e27c48"></path>
                                                    <path
                                                        d="m450.83 317.02c-2.201-5.825-9.625-7.557-14.181-3.312-17.983 16.758-30.586 39.52-35.602 63.61-2.713 13.031-2.416 27.01 3.001 39.168 11.436 25.663 47.782 34.828 63.784 7.73 5.563-9.421 6.879-20.877 5.692-31.753-2.768-25.363-13.733-51.723-22.694-75.443z"
                                                        fill="#e9a52d"></path>
                                                    <g fill="#e18720">
                                                        <path
                                                            d="m471.533 379.943c-7.004-3.57-13.051-8.859-17.319-15.231-2.374-3.546-7.175-4.495-10.718-2.12-3.546 2.374-4.495 7.173-2.121 10.719 6.884 10.28 17.168 18.45 28.956 23.006.917.354 1.857.522 2.784.522.25 0 .495-.032.742-.056-.066-1.446-.175-2.888-.332-4.32-.453-4.152-1.144-8.331-1.992-12.52z">
                                                        </path>
                                                        <path
                                                            d="m471.087 417.211c-.869-.404-1.825-.657-2.841-.711-10.622-.568-20.547-6.177-25.903-14.638-2.283-3.606-7.055-4.678-10.661-2.395-3.606 2.282-4.678 7.055-2.395 10.661 7.11 11.232 19.473 19.07 33.059 21.246 2.006-2.03 3.857-4.396 5.488-7.158 1.316-2.232 2.388-4.58 3.253-7.005z">
                                                        </path>
                                                    </g>
                                                    <path
                                                        d="m61.17 317.02c2.201-5.825 9.625-7.557 14.181-3.312 17.983 16.758 30.586 39.52 35.602 63.61 2.713 13.031 2.416 27.01-3.001 39.168-11.436 25.663-47.782 34.828-63.784 7.73-5.563-9.421-6.879-20.877-5.692-31.753 2.768-25.363 13.733-51.723 22.694-75.443z"
                                                        fill="#e9a52d"></path>
                                                    <g fill="#e18720">
                                                        <path
                                                            d="m80.319 399.466c-3.607-2.283-8.378-1.211-10.661 2.395-5.356 8.461-15.282 14.07-25.903 14.638-1.016.054-1.972.307-2.841.711.864 2.425 1.936 4.773 3.254 7.004 1.631 2.762 3.482 5.128 5.488 7.158 13.586-2.176 25.948-10.014 33.059-21.246 2.282-3.604 1.21-8.377-2.396-10.66z">
                                                        </path>
                                                        <path
                                                            d="m38.885 396.838c.926 0 1.867-.168 2.784-.522 11.788-4.556 22.071-12.726 28.956-23.006 2.374-3.546 1.426-8.345-2.121-10.719-3.545-2.375-8.345-1.426-10.718 2.12-4.267 6.372-10.314 11.661-17.319 15.231-.848 4.189-1.539 8.368-1.992 12.52-.156 1.432-.266 2.874-.332 4.32.247.024.493.056.742.056z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <!--replay btn-->

                                            <button class="webDevBtn" type="button" data-lang-kr="니니사이트"
                                                data-lang-jp="ニニサイト">니니사이트</button>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <div class="icon-block">
                                            <div class="icon basket-icon">
                                                <svg enable-background="new 0 0 512 512" height="512"
                                                    viewBox="0 0 512 512" width="512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g class="basket-icon__top">
                                                        <path
                                                            d="m362.336 328.721c-4.268 0-7.726-3.459-7.726-7.726v-166.979c0-64.681-52.623-117.303-117.304-117.303s-117.303 52.621-117.303 117.303v166.979c0 4.267-3.459 7.726-7.726 7.726-4.268 0-7.726-3.459-7.726-7.726v-166.979c0-73.202 59.554-132.756 132.756-132.756s132.757 59.554 132.757 132.756v166.979c-.002 4.267-3.46 7.726-7.728 7.726z"
                                                            fill="#766d78"></path>
                                                    </g>
                                                    <g class="basket-icon__egg-1">
                                                        <path
                                                            d="m409.603 154.951c43 15.067 70.013 96.471 43.487 172.174-17.894 51.066-72.323 73.753-123.39 55.859s-79.432-69.591-61.538-120.658c26.526-75.703 98.441-122.442 141.441-107.375z"
                                                            fill="#f7f3f1"></path>
                                                        <path
                                                            d="m409.603 154.951c-2.503-.877-5.107-1.536-7.791-2.001 32.42 19.059 48.294 93.078 23.312 164.375-17.001 48.519-61.333 73.395-102.889 62.729 2.431 1.056 4.919 2.037 7.466 2.929 51.066 17.894 105.496-4.792 123.39-55.859 26.525-75.702-.489-157.106-43.488-172.173z"
                                                            fill="#ebe1dc"></path>
                                                        <ellipse cx="383.738" cy="297.364" fill="#94d4a2" rx="33.994"
                                                            ry="33.994"
                                                            transform="matrix(.707 -.707 .707 .707 -97.874 358.44)">
                                                        </ellipse>
                                                        <path
                                                            d="m451.064 208.509c1.132 0 2.246.078 3.341.214 5.305 15.088 8.539 32.321 9.107 50.563-3.724 1.947-7.955 3.053-12.448 3.053-14.865 0-26.915-12.05-26.915-26.915s12.05-26.915 26.915-26.915z"
                                                            fill="#94d4a2"></path>
                                                        <path
                                                            d="m451.064 262.339c4.493 0 8.725-1.107 12.448-3.053-.493-15.835-3.052-32.231-8.137-47.709-.315-.958-.97-2.854-.97-2.854-1.096-.136-2.209-.214-3.341-.214-6.143 0-11.803 2.062-16.332 5.527 2.366 13.608 3.225 28.622 2.279 44.344 4.09 2.51 8.902 3.959 14.053 3.959z"
                                                            fill="#6dc17d"></path>
                                                        <ellipse cx="370.341" cy="206.005" fill="#94d4a2" rx="18.307"
                                                            ry="18.307"
                                                            transform="matrix(.707 -.707 .707 .707 -37.197 322.208)">
                                                        </ellipse>
                                                    </g>
                                                    <g class="basket-icon__egg-2">
                                                        <path
                                                            d="m225.555 141.395c45.56-.548 98.786 66.707 99.751 146.917.651 54.107-42.737 94.041-96.844 94.692s-98.443-38.227-99.094-92.334c-.965-80.21 50.627-148.726 96.187-149.275z"
                                                            fill="#80b6fc"></path>
                                                        <path
                                                            d="m225.555 141.395c-4.178.05-8.406.677-12.641 1.827 37.624 10.283 76.981 72.582 77.859 145.555.6 49.813-32.043 87.537-74.798 93.667 4.092.42 8.26.611 12.487.56 54.107-.651 97.495-40.585 96.844-94.692-.965-80.21-54.192-147.465-99.751-146.917z"
                                                            fill="#62a4fb"></path>
                                                        <path
                                                            d="m151.068 201.012c3.372.276 6.685 1.249 9.619 2.94l15.769 9.104c7.015 4.055 16.18 4.055 23.195 0l15.769-9.104c7.015-4.042 16.18-4.042 23.195 0l15.769 9.104c7.015 4.055 16.18 4.055 23.195 0l15.769-9.104c2.797-1.612 5.937-2.569 9.146-2.896 10.41 18.94 18.097 41.286 21.249 65.384l-7.2-4.163c-7.015-4.042-16.18-4.042-23.195 0l-15.769 9.117c-7.015 4.042-16.18 4.042-23.195 0l-15.769-9.117c-7.015-4.042-16.18-4.042-23.195 0l-15.769 9.117c-7.015 4.042-16.18 4.042-23.195 0l-15.769-9.117c-7.015-4.042-16.18-4.042-23.195 0l-6.791 3.922c2.887-23.984 10.26-46.274 20.367-65.187z"
                                                            fill="#f1cd88"></path>
                                                        <path
                                                            d="m316.542 262.278 7.2 4.163c-2.939-22.449-10.082-45.066-21.249-65.384-3.208.326-6.349 1.284-9.146 2.896 0 0-16.881 9.703-17.453 9.97 6.223 15.422 10.856 32.602 13.192 50.819l4.261-2.463c7.015-4.043 16.181-4.043 23.195-.001z"
                                                            fill="#ebb34c"></path>
                                                    </g>
                                                    <g class="basket-icon__bottom">
                                                        <path
                                                            d="m512 315.623v12.901c0 10.549-9.191 19.101-20.529 19.101h-470.942c-11.338 0-20.529-8.552-20.529-19.101v-12.901c0-10.549 9.191-19.101 20.529-19.101h470.942c11.338 0 20.529 8.552 20.529 19.101z"
                                                            fill="#ecb880"></path>
                                                        <path
                                                            d="m491.471 296.522h-38.582c11.338 0 20.529 8.552 20.529 19.101v12.901c0 10.549-9.191 19.101-20.529 19.101h38.582c11.338 0 20.529-8.552 20.529-19.101v-12.901c0-10.549-9.191-19.101-20.529-19.101z"
                                                            fill="#e69642"></path>
                                                        <path
                                                            d="m467.409 347.625-30.725 95.209c-9.198 28.501-36.449 47.906-67.276 47.906h-226.816c-30.827 0-58.078-19.405-67.276-47.906l-30.725-95.209z"
                                                            fill="#ecb880"></path>
                                                        <path
                                                            d="m431.763 347.625h-387.172l9.038 28.007h344.16c12.319 0 21.061 12.007 17.277 23.731l-14.029 43.472c-9.198 28.501-36.449 47.906-67.276 47.906h35.646c30.827 0 58.078-19.405 67.276-47.906l30.725-95.209h-35.645z"
                                                            fill="#e69642"></path>
                                                    </g>
                                                    <g class="ribbon" fill="#df646e">
                                                        <path
                                                            d="m54.863 336.296c4.415-8.497 10.576-15.965 15.366-24.257s8.235-17.962 6.432-27.366l35.991 3.73c1.804 9.405-1.642 19.074-6.432 27.366-4.789 8.292-10.95 15.76-15.366 24.257-8.665 16.675-9.881 37.012-3.477 54.655.765 2.108-.956 4.284-3.186 4.053l-29.164-3.023c-1.099-.114-2.066-.806-2.493-1.824-7.665-18.292-6.821-39.983 2.329-57.591z">
                                                        </path>
                                                        <path
                                                            d="m169.69 336.296c-4.415-8.497-10.576-15.965-15.366-24.257s-8.235-17.962-6.432-27.366l-35.991 3.73c-1.804 9.405 1.642 19.074 6.432 27.366 4.789 8.292 10.95 15.76 15.366 24.257 8.665 16.675 9.881 37.012 3.477 54.655-.765 2.108.956 4.284 3.186 4.053l29.164-3.023c1.099-.114 2.066-.806 2.493-1.824 7.665-18.292 6.82-39.983-2.329-57.591z">
                                                        </path>
                                                        <path
                                                            d="m41.734 283.716c2.037-2.572 2.037-6.191 0-8.763-2.393-3.021-4.572-6.19-6.125-9.705-2.442-5.529-3.152-12.138-.447-17.543 2.917-5.828 9.398-9.295 15.886-9.913s12.979 1.245 18.955 3.846c16.56 7.207 30.409 20.419 38.47 36.574v2.244c-8.062 16.155-21.91 29.367-38.47 36.574-5.976 2.601-12.467 4.463-18.955 3.846s-12.969-4.085-15.886-9.913c-2.705-5.405-1.995-12.014.447-17.543 1.552-3.515 3.732-6.684 6.125-9.704z"
                                                            fill="#dc4955"></path>
                                                        <path
                                                            d="m182.819 283.716c-2.037-2.572-2.037-6.191 0-8.763 2.393-3.021 4.572-6.19 6.125-9.705 2.442-5.529 3.152-12.138.447-17.543-2.917-5.828-9.398-9.295-15.886-9.913s-12.979 1.245-18.955 3.846c-16.56 7.207-30.409 20.419-38.47 36.574v2.244c8.062 16.155 21.91 29.367 38.47 36.574 5.976 2.601 12.467 4.463 18.955 3.846s12.969-4.085 15.886-9.913c2.705-5.405 1.995-12.014-.447-17.543-1.553-3.515-3.732-6.684-6.125-9.704z"
                                                            fill="#dc4955"></path>
                                                        <path
                                                            d="m112.276 250.908c12.461 0 22.563 10.102 22.563 22.563v11.726c0 12.461-10.102 22.563-22.563 22.563s-22.563-10.102-22.563-22.563v-11.726c0-12.461 10.102-22.563 22.563-22.563z"
                                                            fill="#df646e"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <!--replay btn-->
                                            <button class="webDevBtn" type="button" data-lang-kr="니니몰"
                                                data-lang-jp="ニニモール">니니몰</button>
                                        </div>
                                    </a>
                                    <!-- <a>
                                    <div class="icon-block">
                                        <div class="icon painting-icon">
                                            <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                                width="512" xmlns="http://www.w3.org/2000/svg">
                                                <g class="painting-icon__egg">
                                                    <path
                                                        d="m174.233 41.593c82.515-.993 178.916 120.817 180.664 266.089 1.179 97.995-77.403 170.322-175.398 171.501-97.996 1.18-178.296-69.235-179.475-167.23-1.748-145.273 91.693-269.367 174.209-270.36z"
                                                        fill="#f1cd88"></path>
                                                    <path
                                                        d="m174.233 41.593c-7.254.087-14.592 1.145-21.942 3.066 76.061 19.681 154.906 131.769 156.485 263.023 1.095 90.996-66.589 159.847-154.724 170.164 8.318.978 16.811 1.441 25.446 1.337 97.995-1.179 176.577-73.506 175.398-171.501-1.747-145.272-98.148-267.082-180.663-266.089z"
                                                        fill="#ebb34c"></path>
                                                    <g class="painting-icon__egg-top egg-top">
                                                        <path class="egg-top__main"
                                                            d="m174.233 41.593c-51.847.624-108 49.855-142.151 122.395h21.135c23.712 0 42.934 19.222 42.934 42.934v112.7c0 16.066 13.024 29.091 29.091 29.091s29.091-13.024 29.091-29.091v-111.88c0-13.136 10.649-23.785 23.785-23.785s23.785 10.649 23.785 23.785v19.501c0 10.004 8.11 18.114 18.114 18.114s18.114-8.11 18.114-18.114v-24.116c0-31.227 25.315-56.542 56.542-56.542h17.192c-36.051-63.885-89.226-105.574-137.632-104.992z"
                                                            fill="#80b6fc"></path>
                                                        <path class="egg-top__shadow"
                                                            d="m269.115 152.695c7.678-3.899 16.357-6.111 25.557-6.111h17.192c-9.042-16.022-19.656-31.524-31.786-45.649-.141-.164-.283-.328-.424-.491-21.474-24.876-49.943-47.782-81.52-55.86-.21-.054-.42-.11-.63-.163-15.88-3.956-30.328-3.651-45.214.238 42.821 11.08 86.523 51.449 116.825 108.036z"
                                                            fill="#62a4fb"></path>
                                                    </g>
                                                </g>
                                                <g class="painting-icon__basket">
                                                    <path
                                                        d="m416.187 479.198h-137.091c-11.242 0-20.355-9.113-20.355-20.355v-111.1h177.801v111.1c0 11.242-9.113 20.355-20.355 20.355z"
                                                        fill="#766d78"></path>
                                                    <path
                                                        d="m405.767 347.743v111.1c0 11.242-9.113 20.355-20.355 20.355h30.775c11.242 0 20.355-9.113 20.355-20.355v-111.1z"
                                                        fill="#655e67"></path>
                                                    <path
                                                        d="m238.131 314.955v40.948c0 5.394 4.373 9.767 9.767 9.767h199.488c5.394 0 9.767-4.373 9.767-9.767v-40.948c0-5.394-4.373-9.767-9.767-9.767h-199.488c-5.394 0-9.767 4.373-9.767 9.767z"
                                                        fill="#f7f3f1"></path>
                                                    <path
                                                        d="m447.386 305.188h-30.776c5.394 0 9.767 4.373 9.767 9.767v40.948c0 5.394-4.373 9.767-9.767 9.767h30.775c5.394 0 9.767-4.373 9.767-9.767v-40.948c.001-5.394-4.372-9.767-9.766-9.767z"
                                                        fill="#ebe1dc"></path>
                                                    <ellipse cx="347.642" cy="419.499" fill="#80b6fc" rx="39.651"
                                                        ry="24.365"></ellipse>
                                                </g>
                                                <g class="painting-icon__brush">
                                                    <path
                                                        d="m378.767 166.038c-20.7-20.702-54.483-20.672-75.149.065-8.107 8.135-13.015 18.246-14.755 28.778 0 0-5.274 29.198-20.47 44.545-4.268 4.31-3.721 11.409 1.321 14.781 32.361 21.645 81.521 14.441 109.052-13.09 20.732-20.733 20.733-54.346.001-75.079z"
                                                        fill="#766d78"></path>
                                                    <path
                                                        d="m378.767 166.038c-1.585-1.585-3.255-3.034-4.981-4.376 5.761 18.278 1.412 39.054-13.077 53.543-22.6 22.6-59.767 31.486-90.26 21.977-.666.772-1.347 1.527-2.056 2.243-4.268 4.31-3.721 11.409 1.321 14.781 32.361 21.645 81.521 14.441 109.052-13.09 20.732-20.731 20.733-54.345.001-75.078z"
                                                        fill="#655e67"></path>
                                                    <path
                                                        d="m351.356 193.446c-14.285-14.285-13.235-37.749 2.269-50.701l126.132-105.374c7.805-6.521 19.297-6.007 26.489 1.185s7.706 18.683 1.185 26.489l-105.374 126.132c-12.952 15.504-36.415 16.554-50.701 2.269z"
                                                        fill="#94d4a2"></path>
                                                    <path
                                                        d="m506.245 38.557c-2.857-2.857-6.394-4.641-10.107-5.369.247 4.778-1.705 10.224-5.734 14.831l-108.011 123.493c-10.756 12.298-26.327 17.188-37.517 12.938 1.613 3.239 3.769 6.283 6.481 8.995 14.285 14.285 37.749 13.235 50.701-2.269l105.373-126.131c6.52-7.805 6.006-19.297-1.186-26.488z"
                                                        fill="#6dc17d"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <button class="webDevBtn" type="button">사랑해요</button>
                                    </div>
                                </a> -->
                                    <!-- <a class="btnst2" href="/beta.php" data-lang-kr="베타X" data-lang-jp="ベータX">베타X</a>
                                <a class="btnst3" href="javascript:void(0)" data-lang-kr="정식(준비중)" data-lang-jp="準備中">
                                    정식(준비중)
                                </a> -->
                                </div>
                                <!-- <div class="btnWeb">
                                <a class="btnst1" href="#" data-lang-kr="복숭아농장" data-lang-jp="桃のうじょう">
                                    복숭아농장
                                </a>
                            </div> -->


                                <div class="btnMeta">

                                    <div class="metaFl">
                                        <a href="javascript:void(0)" onclick="AuthEve();">
                                            <link rel="stylesheet"
                                                href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
                                            <link rel="stylesheet" href="nini/css/coin.css">
                                            <script
                                                src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js">
                                            </script>

                                            <!-- partial:index.partial.html -->
                                            <!-- The Coin -->
                                            <div class="purse">
                                                <div class="coin">
                                                    <div class="front"></div>
                                                    <div class="back"></div>
                                                    <div class="side">
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                        <div class="spoke"></div>
                                                    </div>
                                                </div>
                                                <div class="info" data-lang-kr="swanne코인" data-lang-jp="コイン">
                                                    swanne코인
                                                </div>
                                            </div>
                                            <!-- partial -->
                                            <!-- <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
                                        </a>

                                        <a href="https://meta.swanini.com">
                                            <link href='https://fonts.googleapis.com/css?family=Playfair+Display'
                                                rel='stylesheet' type='text/css'>
                                            <link rel="stylesheet"
                                                href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
                                            <link rel="stylesheet" href="nini/css/waves.css">
                                            <div class='box'>
                                                <div class='wave -one'></div>
                                                <div class='wave -two'></div>
                                                <div class='wave -three'></div>
                                                <div class='title'>swannemeta</div>
                                            </div>
                                        </a>

                                        <a href="https://nini.swanini.com" style="margin-left: 35px;">
                                            <link rel="stylesheet" href="nini/css/rabit.css">
                                            <div id="chest">
                                                <div class="heart left side top"></div>
                                                <div class="heart center">&hearts;</div>
                                                <!-- <div class="heart center">니니톡</div> -->
                                                <div class="heart right side"></div>
                                                <div class="titleh" data-lang-kr="니니톡" data-lang-jp="ニニトク">
                                                    니니톡
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <!-- 수화니성소 -->
                                <div class="catholika">

                                    <div class="cathoFl">
                                        <link rel="stylesheet" href="nini/css/book.css">
                                        <!-- <a class="" href="https://swi.swanini.com"> -->
                                        <a id="blogSta" href="javascript:void(0);">
                                            <div class="v-center"></div>
                                            <div id="container">
                                                <div class="book">
                                                    <div class="first paper">
                                                        <div class="page front contents">
                                                            <div class="intro">
                                                                <h2>REPORT</h2>
                                                                <h1>2023</h1>
                                                            </div>
                                                        </div>
                                                        <div class="page back"></div>
                                                    </div>
                                                    <div class="second paper">
                                                        <div class="page front contents">
                                                            <div id="vara-container"></div>
                                                        </div>
                                                        <div class="page back"></div>
                                                    </div>
                                                    <div class="third paper">
                                                        <div class="page front contents">
                                                            <div id="vara-container2"></div>
                                                        </div>
                                                        <div class="page back"></div>
                                                    </div>
                                                    <div class="fourth paper">
                                                        <div class="page last front contents">
                                                            <div id="vara-container3"></div>
                                                        </div>
                                                        <div class="page back"></div>
                                                    </div>
                                                    <div class="side"></div>
                                                    <div class="bottom"></div>
                                                    <div class="shadow"></div>
                                                </div>
                                            </div>
                                        </a>

                                        <link rel="stylesheet" href="nini/css/sanct.css">
                                        <style>
                                        .btnsanct {
                                            min-height: 100%;
                                            margin: 0;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            text-align: center;
                                        }
                                        </style>
                                        <a class="btnsanct" href="https://swy.swanini.com">
                                            <canvas class="illo"></canvas>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <!-- <h2>무엇이든 검색해보세요!</h2>

                                <div>
                                    <form method="get">
                                        <input placeholder="무엇이든 검색해보세요!" />
                                        <button type="submit">검색</button>
                                    </form>
                                </div> -->
                                <div class="niniEngin">
                                    <div class="niniEngin_inner">

                                        <!-- 방향키 시작 -->
                                        <div class="upperBtn">
                                            △
                                        </div>
                                        <div class="downBtn">
                                            ▽
                                        </div>
                                        <div class="leftBtn">
                                            ◁
                                        </div>
                                        <div class="rightBtn">
                                            ▷
                                        </div>
                                        <!-- 방향키 종료 -->

                                        <!-- 액션키 시작 -->
                                        <div class="abuBtn">
                                            A
                                        </div>
                                        <div class="bbuBtn">
                                            B
                                        </div>
                                        <div class="cbuBtn">
                                            C
                                        </div>
                                        <div class="dbuBtn">
                                            D
                                        </div>
                                        <div class="lbuBtn">
                                            L
                                        </div>
                                        <div class="rbuBtn">
                                            R
                                        </div>
                                        <!-- 액션키 종료 -->

                                        <div class="appEngine">

                                            <div class="wrapper_eng">

                                                <!-- <div class="container_eng">
                                                    <div class="eng-text">
                                                        <div class="eng-text-header">
                                                            <span>X</span>
                                                        </div>
                                                        <div class="eng-text-body">
                                                            <span data-lang-kr="안녕 세상아" data-lang-jp="ようこそ、世界よ">
                                                                안녕 세상아
                                                            </span>
                                                            <span data-lang-kr="어서 와요!" data-lang-jp="お帰りなさい">
                                                                어서 와요!
                                                            </span>
                                                            <span data-lang-kr="기다리고 있었어요!" data-lang-jp="待っていました！">
                                                                기다리고 있었어요!
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div> -->

                                                <div class="container_eng">

                                                </div>

                                                <!-- <canvas id="canvas"></canvas> -->
                                                <!-- <script>

                                                    const canvas = document.getElementById("canvas");
                                                    let ctx = canvas.getContext("2d");

                                                    canvas.width = window.innerWidth - 100;
                                                    canvas.height = window.innerHeight - 100;

                                                    ctx.fillRect(500, 20, 50, 50);


                                                </script> -->

                                                <!-- <script>
                                                    var canvas = documnet.getElementById('canvas');
                                                    var ctx = canvas.getContext('2d');

                                                    // canvas.width = window.innerWidth - 100;
                                                    // canvas.height = window.innerHeight - 100;

                                                    canvas.style.width = "100%";
                                                    canvas.style.height = "100%";

                                                    var dino = {
                                                        x: 10,
                                                        y: 200,
                                                        width: 50,
                                                        height: 50,
                                                        draw() {
                                                            ctx.fillStyle = 'green';
                                                            ctx.fillRect(this.x, this.y, this.width, this.height);
                                                        }
                                                    }


                                                    class Cactus {
                                                        constructor() {
                                                            this.x = 500;
                                                            this.y = 200;
                                                            this.width = 50;
                                                            this.height = 50;
                                                        }
                                                        draw() {
                                                            ctx.fillStyle = 'red';
                                                            ctx.fillRect(this.x, this.y, this.width, this.height);
                                                        }
                                                    }

                                                    var timer = 0;
                                                    var cactusd = [];

                                                    function afsd() {
                                                        requestAnimationFrame(afsd);
                                                        timer++;

                                                        ctx.cleearRect(0, 0, canvas.width, canvas.height);

                                                        if (timer % 120 === 0) {
                                                            var cactus = new Cactus();
                                                            cactusd.push(cactus);
                                                        }
                                                        cactusd.forEach((a) => {

                                                            a.draw();
                                                        })

                                                        dino.draw();
                                                    }
                                                    afsd();
                                                </script> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="swiper-slide">
                                <!-- <h2 data-lang-kr="안녕 세상의 포도밭" data-lang-jp="ようこそ、世界よ">안녕 세상의 포도밭</h2>
                                <h3 data-lang-kr="개발 지정 장소" data-lang-jp="開発指定場所">개발 지정 장소</h3> -->



                                <style>
                                .niniMimi {
                                    width: 100%;
                                    height: 100%;
                                    /* border: 1px solid #eeaaee; */
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                }

                                .niniMimi_inner {
                                    width: 100%;
                                    height: 100%;
                                    /* border: 1px solid #eeaaee; */

                                }

                                /* .wrapper {
                                        width: 100%;
                                        height: 100%;
                                    } */
                                </style>


                                <div class="swiper-slide">
                                    <!-- <h2>무엇이든 검색해보세요!</h2>
    
                                    <div>
                                        <form method="get">
                                            <input placeholder="무엇이든 검색해보세요!" />
                                            <button type="submit">검색</button>
                                        </form>
                                    </div> -->
                                    <div class="niniMimi">
                                        <div class="niniMimi_inner">
                                            <div class="video-bg">
                                            </div>
                                            <div class="dark-light">
                                                <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                                                </svg>
                                            </div>
                                            <div class="app">
                                                <div class="header">
                                                    <div class="menu-circle"></div>
                                                    <div class="header-menu">
                                                        <a class="menu-link is-active" href="javascript:void(0);"
                                                            data-lang-kr="미니니" data-lang-jp="ミニニ">
                                                            미니니
                                                        </a>
                                                        <a class="menu-link notify" href="javascript:void(0);"
                                                            data-lang-kr="미니게시판" data-lang-jp="ミニ掲示板">
                                                            미니게시판
                                                        </a>
                                                        <a class="menu-link" href="javascript:void(0);"
                                                            data-lang-kr="사진첩" data-lang-jp="アルバム">
                                                            사진첩
                                                        </a>
                                                        <a class="menu-link notify" href="javascript:void(0);"
                                                            data-lang-kr="미니몰" data-lang-jp="ミニモール">
                                                            미니몰
                                                        </a>
                                                    </div>
                                                    <div class="search-bar">
                                                        <input type="text" placeholder="Search">
                                                    </div>


                                                    <div class="header-profile">
                                                        <!--{? member_info === FALSE }-->
                                                        <a href="javascript:void(0);" id="SwRtBoardBtn_mini"
                                                            data-lang-kr="로그인" data-lang-jp="ログイン" class="loginBu">
                                                            로그인
                                                        </a>
                                                        <!--{:}-->
                                                        <div class="notification">
                                                            <span class="notification-number">3</span>
                                                            <svg viewBox="0 0 24 24" fill="currentColor"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-bell">
                                                                <path
                                                                    d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
                                                            </svg>
                                                        </div>
                                                        <svg viewBox="0 0 512 512" fill="currentColor">
                                                            <path
                                                                d="M448.773 235.551A135.893 135.893 0 00451 211c0-74.443-60.557-135-135-135-47.52 0-91.567 25.313-115.766 65.537-32.666-10.59-66.182-6.049-93.794 12.979-27.612 19.013-44.092 49.116-45.425 82.031C24.716 253.788 0 290.497 0 331c0 7.031 1.703 13.887 3.006 20.537l.015.015C12.719 400.492 56.034 436 106 436h300c57.891 0 106-47.109 106-105 0-40.942-25.053-77.798-63.227-95.449z" />
                                                        </svg>
                                                        <img class="profile-img" src="nini/img/swanne+national.png"
                                                            alt="">
                                                        <!--{/}-->
                                                    </div>


                                                </div>
                                                <div class="wrapper_mini">
                                                    <div class="left-side">
                                                        <div class="side-wrapper">
                                                            <div class="side-title" data-lang-kr="미니홈"
                                                                data-lang-jp="ミニホーム ">
                                                                미니홈
                                                            </div>
                                                            <div class="side-menu">
                                                                <a href="javascript:void(0);">
                                                                    <svg viewBox="0 0 512 512">
                                                                        <g xmlns="http://www.w3.org/2000/svg"
                                                                            fill="currentColor">
                                                                            <path
                                                                                d="M0 0h128v128H0zm0 0M192 0h128v128H192zm0 0M384 0h128v128H384zm0 0M0 192h128v128H0zm0 0"
                                                                                data-original="#bfc9d1" />
                                                                        </g>
                                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                                            d="M192 192h128v128H192zm0 0"
                                                                            fill="currentColor"
                                                                            data-original="#82b1ff" />
                                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                                            d="M384 192h128v128H384zm0 0M0 384h128v128H0zm0 0M192 384h128v128H192zm0 0M384 384h128v128H384zm0 0"
                                                                            fill="currentColor"
                                                                            data-original="#bfc9d1" />
                                                                    </svg>
                                                                    <span data-lang-kr="모아보기" data-lang-jp="集めてみる">
                                                                        모아보기
                                                                    </span>
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <svg viewBox="0 0 488.932 488.932"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
                                                                    </svg>
                                                                    <span data-lang-kr="업데이트" data-lang-jp="アップデート">
                                                                        업데이트
                                                                    </span>
                                                                    <span class="notification-number updates">3</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="side-wrapper">
                                                            <div class="side-title" data-lang-kr="미니니 놀이터"
                                                                data-lang-jp="ミニニ遊び場">
                                                                미니니 놀이터
                                                            </div>
                                                            <div class="side-menu">
                                                                <!-- <div class="side-menu-a-wrap"> -->
                                                                <a href="javascript:void(0);">
                                                                    <svg viewBox="0 0 488.455 488.455"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M287.396 216.317c23.845 23.845 23.845 62.505 0 86.35s-62.505 23.845-86.35 0-23.845-62.505 0-86.35 62.505-23.845 86.35 0" />
                                                                        <path
                                                                            d="M427.397 91.581H385.21l-30.544-61.059H133.76l-30.515 61.089-42.127.075C27.533 91.746.193 119.115.164 152.715L0 396.86c0 33.675 27.384 61.074 61.059 61.074h366.338c33.675 0 61.059-27.384 61.059-61.059V152.639c-.001-33.674-27.385-61.058-61.059-61.058zM244.22 381.61c-67.335 0-122.118-54.783-122.118-122.118s54.783-122.118 122.118-122.118 122.118 54.783 122.118 122.118S311.555 381.61 244.22 381.61z" />
                                                                    </svg>

                                                                    <span data-lang-kr="사진첩" data-lang-jp="アルバム">
                                                                        사진첩
                                                                    </span>
                                                                </a>
                                                                <!-- </div> -->
                                                                <a href="javascript:void(0);">
                                                                    <svg viewBox="0 0 58 58" fill="currentColor">
                                                                        <path
                                                                            d="M57 6H1a1 1 0 00-1 1v44a1 1 0 001 1h56a1 1 0 001-1V7a1 1 0 00-1-1zM10 50H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2v-9h8v9zm0-11H2V8h8v9zm26.537 12.844l-11 7a1.007 1.007 0 01-1.018.033A1.001 1.001 0 0124 36V22a1.001 1.001 0 011.538-.844l11 7a1.003 1.003 0 01-.001 1.688zM56 50h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8v-9h8v9zm0-11h-8V8h8v9z" />
                                                                    </svg>
                                                                    <span data-lang-kr="니니TV" data-lang-jp="ニニTV">
                                                                        니니TV
                                                                    </span>
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <svg viewBox="0 0 512 512" fill="currentColor">
                                                                        <path
                                                                            d="M499.377 46.402c-8.014-8.006-18.662-12.485-29.985-12.613a41.13 41.13 0 00-.496-.003c-11.142 0-21.698 4.229-29.771 11.945L198.872 275.458c25.716 6.555 47.683 23.057 62.044 47.196a113.544 113.544 0 0110.453 23.179L500.06 106.661C507.759 98.604 512 88.031 512 76.89c0-11.507-4.478-22.33-12.623-30.488zM176.588 302.344a86.035 86.035 0 00-3.626-.076c-20.273 0-40.381 7.05-56.784 18.851-19.772 14.225-27.656 34.656-42.174 53.27C55.8 397.728 27.795 409.14 0 416.923c16.187 42.781 76.32 60.297 115.752 61.24 1.416.034 2.839.051 4.273.051 44.646 0 97.233-16.594 118.755-60.522 23.628-48.224-5.496-112.975-62.192-115.348z" />
                                                                    </svg>
                                                                    <span data-lang-kr="미니니 꾸미기" data-lang-jp="かわいいニニ">
                                                                        미니니 꾸미기
                                                                    </span>
                                                                </a>
                                                                <a href="javascript:void(0);">
                                                                    <svg viewBox="0 0 512 512" fill="currentColor">
                                                                        <path
                                                                            d="M0 331v112.295a14.996 14.996 0 007.559 13.023L106 512V391L0 331zM136 391v121l105-60V331zM271 331v121l105 60V391zM406 391v121l98.441-55.682A14.995 14.995 0 00512 443.296V331l-106 60zM391 241l-115.754 57.876L391 365.026l116.754-66.15zM262.709 1.583a15.006 15.006 0 00-13.418 0L140.246 57.876 256 124.026l115.754-66.151L262.709 1.583zM136 90v124.955l105 52.5V150zM121 241L4.246 298.876 121 365.026l115.754-66.15zM271 150v117.455l105-52.5V90z" />
                                                                    </svg>
                                                                    <span data-lang-kr="멀티플랫폼" data-lang-jp="マルチプラット">
                                                                        멀티플랫폼
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="side-wrapper">
                                                            <div class="side-title">SNS</div>
                                                            <div class="side-menu">
                                                                <a href="javascript:void(0);">
                                                                    <svg viewBox="0 0 512 512" fill="currentColor">
                                                                        <path
                                                                            d="M352 0H64C28.704 0 0 28.704 0 64v320a16.02 16.02 0 009.216 14.496A16.232 16.232 0 0016 400c3.68 0 7.328-1.248 10.24-3.712L117.792 320H352c35.296 0 64-28.704 64-64V64c0-35.296-28.704-64-64-64z" />
                                                                        <path
                                                                            d="M464 128h-16v128c0 52.928-43.072 96-96 96H129.376L128 353.152V400c0 26.464 21.536 48 48 48h234.368l75.616 60.512A16.158 16.158 0 00496 512c2.336 0 4.704-.544 6.944-1.6A15.968 15.968 0 00512 496V176c0-26.464-21.536-48-48-48z" />
                                                                    </svg>
                                                                    <span data-lang-kr="공유해요 수화니니"
                                                                        data-lang-jp="共有しましょう">
                                                                        공유해요 수화니니
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="main-container">
                                                        <div class="main-header">
                                                            <!-- <a class="menu-link-main" href="#">All Apps</a> -->
                                                            <div class="header-menu">
                                                                <a class="main-header-link is-active"
                                                                    href="javascript:void(0);" data-lang-kr="미니니 집"
                                                                    data-lang-jp="ミニニの家">
                                                                    미니니 집
                                                                </a>
                                                                <a class="main-header-link" href="javascript:void(0);"
                                                                    data-lang-kr="미니니 룸" data-lang-jp="ミニニ部屋">
                                                                    미니니 룸
                                                                </a>
                                                                <a class="main-header-link" href="javascript:void(0);"
                                                                    data-lang-kr="예쁘게!" data-lang-jp="きれいに！">
                                                                    예쁘게!
                                                                </a>

                                                            </div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <div class="content-wrapper-header">
                                                                <div class="content-wrapper-context">
                                                                    <div class="content-text">
                                                                        <span data-lang-kr="안녕 세상아"
                                                                            data-lang-jp="ようこそ、世界よ">
                                                                            안녕 세상아
                                                                        </span>
                                                                        <span data-lang-kr="안녕 니니"
                                                                            data-lang-jp="ようこそ、二二">
                                                                            안녕 니니
                                                                        </span>
                                                                        <span data-lang-kr="어서 와요!"
                                                                            data-lang-jp="お帰りなさい">
                                                                            어서 와요!
                                                                        </span>
                                                                    </div>
                                                                    <button class="content-button" data-lang-kr="꾸며보아요~"
                                                                        data-lang-jp="愛らしくて！">
                                                                        꾸며보아요~
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="content-section">
                                                                <div class="content-section-title">Installed</div>
                                                                <ul>
                                                                    <li class="adobe-product">
                                                                        <div class="products">
                                                                            <svg viewBox="0 0 52 52"
                                                                                style="border:1px solid #3291b8">
                                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z"
                                                                                        fill="#061e26"
                                                                                        data-original="#393687" />
                                                                                    <path
                                                                                        d="M12.16 39H9.28V11h9.64c2.613 0 4.553.813 5.82 2.44 1.266 1.626 1.9 3.76 1.9 6.399 0 .934-.027 1.74-.08 2.42-.054.681-.22 1.534-.5 2.561-.28 1.026-.66 1.866-1.14 2.52-.48.654-1.213 1.227-2.2 1.72-.987.494-2.16.74-3.52.74h-7.04V39zm0-12h6.68c.96 0 1.773-.187 2.44-.56.666-.374 1.153-.773 1.46-1.2.306-.427.546-1.04.72-1.84.173-.801.267-1.4.28-1.801.013-.399.02-.973.02-1.72 0-4.053-1.694-6.08-5.08-6.08h-6.52V27zM29.48 33.92l2.8-.12c.106.987.6 1.754 1.48 2.3.88.547 1.893.82 3.04.82s2.14-.26 2.98-.78c.84-.52 1.26-1.266 1.26-2.239s-.36-1.747-1.08-2.32c-.72-.573-1.6-1.026-2.64-1.36-1.04-.333-2.086-.686-3.14-1.06a7.36 7.36 0 01-2.78-1.76c-.987-.934-1.48-2.073-1.48-3.42s.54-2.601 1.62-3.761 2.833-1.739 5.26-1.739c.854 0 1.653.1 2.4.3.746.2 1.28.394 1.6.58l.48.279-.92 2.521c-.854-.666-1.974-1-3.36-1-1.387 0-2.42.26-3.1.78-.68.52-1.02 1.18-1.02 1.979 0 .88.426 1.574 1.28 2.08.853.507 1.813.934 2.88 1.28 1.066.347 2.126.733 3.18 1.16 1.053.427 1.946 1.094 2.68 2s1.1 2.106 1.1 3.6c0 1.494-.6 2.794-1.8 3.9-1.2 1.106-2.954 1.66-5.26 1.66-2.307 0-4.114-.547-5.42-1.64-1.307-1.093-1.987-2.44-2.04-4.04z"
                                                                                        fill="#c1dbe6"
                                                                                        data-original="#89d3ff" />
                                                                                </g>
                                                                            </svg>
                                                                            Photoshop
                                                                        </div>
                                                                        <span class="status">
                                                                            <span class="status-circle green"></span>
                                                                            Updated</span>
                                                                        <div class="button-wrapper">
                                                                            <button
                                                                                class="content-button status-button open">Open</button>
                                                                            <div class="menu">
                                                                                <button class="dropdown">
                                                                                    <ul>
                                                                                        <li><a href="#">Go to Discover</a>
                                                                                        </li>
                                                                                        <li><a href="#">Learn more</a></li>
                                                                                        <li><a href="#">Uninstall</a></li>
                                                                                    </ul>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="adobe-product">
                                                                        <div class="products">
                                                                            <svg viewBox="0 0 52 52"
                                                                                style="border:1px solid #b65a0b">
                                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z"
                                                                                        fill="#261400"
                                                                                        data-original="#6d4c13" />
                                                                                    <path
                                                                                        d="M30.68 39h-3.24l-2.76-9.04h-8.32L13.72 39H10.6l8.24-28h3.32l8.52 28zm-6.72-12l-3.48-11.36L17.12 27h6.84zM37.479 12.24c0 .453-.16.84-.48 1.16-.32.319-.7.479-1.14.479-.44 0-.827-.166-1.16-.5-.334-.333-.5-.713-.5-1.14s.166-.807.5-1.141c.333-.333.72-.5 1.16-.5.44 0 .82.16 1.14.48.321.322.48.709.48 1.162zM37.24 39h-2.88V18.96h2.88V39z"
                                                                                        fill="#e6d2c0"
                                                                                        data-original="#ffbd2e" />
                                                                                </g>
                                                                            </svg>
                                                                            Illustrator
                                                                        </div>
    
                                                                        <span class="status">
                                                                            <span class="status-circle"></span>
                                                                            Update Available</span>
                                                                        <div class="button-wrapper">
                                                                            <button
                                                                                class="content-button status-button">Update
                                                                                this app</button>
                                                                            <div class="pop-up">
                                                                                <div class="pop-up__title">Update This App
                                                                                    <svg class="close" width="24"
                                                                                        height="24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-x-circle">
                                                                                        <circle cx="12" cy="12" r="10" />
                                                                                        <path d="M15 9l-6 6M9 9l6 6" />
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="pop-up__subtitle">Adjust your
                                                                                    selections for advanced options as
                                                                                    desired before continuing. <a
                                                                                        href="#">Learn more</a></div>
                                                                                <div class="checkbox-wrapper">
                                                                                    <input type="checkbox" id="check1"
                                                                                        class="checkbox">
                                                                                    <label for="check1">Import previous
                                                                                        settings and preferences</label>
                                                                                </div>
                                                                                <div class="checkbox-wrapper">
                                                                                    <input type="checkbox" id="check2"
                                                                                        class="checkbox">
                                                                                    <label for="check2">Remove old
                                                                                        versions</label>
                                                                                </div>
                                                                                <div class="content-button-wrapper">
                                                                                    <button
                                                                                        class="content-button status-button open close">Cancel</button>
                                                                                    <button
                                                                                        class="content-button status-button">Continue</button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="menu">
                                                                                <button class="dropdown">
                                                                                    <ul>
                                                                                        <li><a href="#">Go to Discover</a>
                                                                                        </li>
                                                                                        <li><a href="#">Learn more</a></li>
                                                                                        <li><a href="#">Uninstall</a></li>
                                                                                    </ul>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="adobe-product">
                                                                        <div class="products">
                                                                            <svg viewBox="0 0 52 52"
                                                                                style="border: 1px solid #C75DEB">
                                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z"
                                                                                        fill="#3a3375"
                                                                                        data-original="#3a3375" />
                                                                                    <path
                                                                                        d="M27.44 39H24.2l-2.76-9.04h-8.32L10.48 39H7.36l8.24-28h3.32l8.52 28zm-6.72-12l-3.48-11.36L13.88 27h6.84zM31.48 33.48c0 2.267 1.333 3.399 4 3.399 1.653 0 3.466-.546 5.44-1.64L42 37.6c-2.054 1.254-4.2 1.881-6.44 1.881-4.64 0-6.96-1.946-6.96-5.841v-8.2c0-2.16.673-3.841 2.02-5.04 1.346-1.2 3.126-1.801 5.34-1.801s3.94.594 5.18 1.78c1.24 1.187 1.86 2.834 1.86 4.94V30.8l-11.52.6v2.08zm8.6-5.24v-3.08c0-1.413-.44-2.42-1.32-3.021-.88-.6-1.907-.899-3.08-.899-1.174 0-2.167.359-2.98 1.08-.814.72-1.22 1.773-1.22 3.16v3.199l8.6-.439z"
                                                                                        fill="#e4d1eb"
                                                                                        data-original="#e7adfb" />
                                                                                </g>
                                                                            </svg>
                                                                            After Effects
                                                                        </div>
                                                                        <span class="status">
                                                                            <span class="status-circle green"></span>
                                                                            Updated</span>
                                                                        <div class="button-wrapper">
                                                                            <button
                                                                                class="content-button status-button open">Open</button>
                                                                            <div class="menu">
                                                                                <button class="dropdown">
                                                                                    <ul>
                                                                                        <li><a href="#">Go to Discover</a>
                                                                                        </li>
                                                                                        <li><a href="#">Learn more</a></li>
                                                                                        <li><a href="#">Uninstall</a></li>
                                                                                    </ul>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div> -->
                                                            <!-- <div class="content-section">
                                                                <div class="content-section-title">Apps in your plan</div>
                                                                <div class="apps-card">
                                                                    <div class="app-card">
                                                                        <span>
                                                                            <svg viewBox="0 0 512 512"
                                                                                style="border: 1px solid #a059a9">
                                                                                <path xmlns="http://www.w3.org/2000/svg"
                                                                                    d="M480 0H32C14.368 0 0 14.368 0 32v448c0 17.664 14.368 32 32 32h448c17.664 0 32-14.336 32-32V32c0-17.632-14.336-32-32-32z"
                                                                                    fill="#210027"
                                                                                    data-original="#7b1fa2" />
                                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M192 64h-80c-8.832 0-16 7.168-16 16v352c0 8.832 7.168 16 16 16s16-7.168 16-16V256h64c52.928 0 96-43.072 96-96s-43.072-96-96-96zm0 160h-64V96h64c35.296 0 64 28.704 64 64s-28.704 64-64 64zM400 256h-32c-18.08 0-34.592 6.24-48 16.384V272c0-8.864-7.168-16-16-16s-16 7.136-16 16v160c0 8.832 7.168 16 16 16s16-7.168 16-16v-96c0-26.464 21.536-48 48-48h32c8.832 0 16-7.168 16-16s-7.168-16-16-16z"
                                                                                        fill="#f6e7fa"
                                                                                        data-original="#e1bee7" />
                                                                                </g>
                                                                            </svg>
                                                                            Premiere Pro
                                                                        </span>
                                                                        <div class="app-card__subtext">Edit, master and
                                                                            create fully proffesional videos</div>
                                                                        <div class="app-card-buttons">
                                                                            <button
                                                                                class="content-button status-button">Update</button>
                                                                            <div class="menu"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="app-card">
                                                                        <span>
                                                                            <svg viewBox="0 0 52 52"
                                                                                style="border: 1px solid #c1316d">
                                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z"
                                                                                        fill="#2f0015"
                                                                                        data-original="#6f2b41" />
                                                                                    <path
                                                                                        d="M18.08 39H15.2V13.72l-2.64-.08V11h5.52v28zM27.68 19.4c1.173-.507 2.593-.761 4.26-.761s3.073.374 4.22 1.12V11h2.88v28c-2.293.32-4.414.48-6.36.48-1.947 0-3.707-.4-5.28-1.2-2.08-1.066-3.12-2.92-3.12-5.561v-7.56c0-2.799 1.133-4.719 3.4-5.759zm8.48 3.12c-1.387-.746-2.907-1.119-4.56-1.119-1.574 0-2.714.406-3.42 1.22-.707.813-1.06 1.847-1.06 3.1v7.12c0 1.227.44 2.188 1.32 2.88.96.719 2.146 1.079 3.56 1.079 1.413 0 2.8-.106 4.16-.319V22.52z"
                                                                                        fill="#e1c1cf"
                                                                                        data-original="#ff70bd" />
                                                                                </g>
                                                                            </svg>
                                                                            InDesign
                                                                        </span>
                                                                        <div class="app-card__subtext">Design and publish
                                                                            great projects & mockups</div>
                                                                        <div class="app-card-buttons">
                                                                            <button
                                                                                class="content-button status-button">Update</button>
                                                                            <div class="menu"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="app-card">
                                                                        <span>
                                                                            <svg viewBox="0 0 52 52"
                                                                                style="border: 1px solid #C75DEB">
                                                                                <g xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M40.824 52H11.176C5.003 52 0 46.997 0 40.824V11.176C0 5.003 5.003 0 11.176 0h29.649C46.997 0 52 5.003 52 11.176v29.649C52 46.997 46.997 52 40.824 52z"
                                                                                        fill="#3a3375"
                                                                                        data-original="#3a3375" />
                                                                                    <path
                                                                                        d="M27.44 39H24.2l-2.76-9.04h-8.32L10.48 39H7.36l8.24-28h3.32l8.52 28zm-6.72-12l-3.48-11.36L13.88 27h6.84zM31.48 33.48c0 2.267 1.333 3.399 4 3.399 1.653 0 3.466-.546 5.44-1.64L42 37.6c-2.054 1.254-4.2 1.881-6.44 1.881-4.64 0-6.96-1.946-6.96-5.841v-8.2c0-2.16.673-3.841 2.02-5.04 1.346-1.2 3.126-1.801 5.34-1.801s3.94.594 5.18 1.78c1.24 1.187 1.86 2.834 1.86 4.94V30.8l-11.52.6v2.08zm8.6-5.24v-3.08c0-1.413-.44-2.42-1.32-3.021-.88-.6-1.907-.899-3.08-.899-1.174 0-2.167.359-2.98 1.08-.814.72-1.22 1.773-1.22 3.16v3.199l8.6-.439z"
                                                                                        fill="#e4d1eb"
                                                                                        data-original="#e7adfb" />
                                                                                </g>
                                                                            </svg>
                                                                            After Effects
                                                                        </span>
                                                                        <div class="app-card__subtext">Industry Standart
                                                                            motion graphics & visual effects</div>
                                                                        <div class="app-card-buttons">
                                                                            <button
                                                                                class="content-button status-button">Update</button>
                                                                            <div class="menu"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="overlay-app"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>




                    <style>
                    .robotContainer {
                        width: 100%;
                        height: 100%;
                        overflow-y: auto;
                        display: flex;
                        justify-content: center;
                        flex-direction: row;
                        align-items: center;

                        background: #deb0ff;
                    }

                    .robot_inner {
                        width: 95%;
                        height: 95%;
                    }
                    </style>


                    <div class="robotContainer welcome_hidden">

                        <div class="robot_inner">

                            <div>
                                iot 로봇 컨트롤
                            </div>
                            <div>
                                수화니니 WASM 데이터베이스 활용
                            </div>

                        </div>


                    </div>

                </div>


                <style>
                .NINcoin,
                .cha_backg {
                    font-size: 30px;
                }
                </style>





                <div class="welcome_bottom">
                    <div class="welcome_bottom_inner">
                        <div class="NINcoin">
                            <a href="javascript:void(0);" id="SwUpBoardBtn">
                                🍼
                            </a>
                        </div>
                        <div>
                            Swanini<span style="color:red">+</span>Nia <span style="color:pink">a</span><span
                                style="color:#00bfff">n</span><span style="color:pink">d</span> AzureNode
                        </div>
                        <div class="cha_backg">
                            <a href="javascript:void(0);" id="swDownBtn">
                                💞
                            </a>
                        </div>
                    </div>
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const SwNINCoin = document.getElementById('SwNINCoin');
                    const SwNINCoinBtn = document.getElementById('SwNINCoinBtn');
                    const closeButtons = document.getElementsByClassName('SwNINCoinBtn_close');

                    // 초기 위치 및 스타일 설정
                    SwNINCoin.style.position = 'fixed';
                    SwNINCoin.style.top = '50%';
                    SwNINCoin.style.left = '50%';
                    SwNINCoin.style.width = '50%';
                    SwNINCoin.style.height = '88%';
                    SwNINCoin.style.transform = 'translate(-50%, -50%) scale(0)'; // 초기 크기 0으로 설정
                    SwNINCoin.style.transition = 'transform 0.5s ease';
                    SwNINCoin.style.zIndex = '1001';
                    SwNINCoin.style.background = '#EEAAEEDB';
                    SwNINCoin.style.borderRadius = '20px';
                    SwNINCoin.style.visibility = 'hidden';



                    // SwNINCoinBtn 클릭 시 SwNINCoin 중앙에서 확장
                    SwNINCoinBtn.addEventListener('click', function() {
                        SwNINCoin.style.visibility = 'visible';
                        SwNINCoin.style.transform = 'translate(-50%, -50%) scale(1)'; // 크기 확장
                        updateSwNINCoinWidth();
                    });

                    // SwNINCoinBtn_close 클릭 시 SwNINCoin 중앙으로 모이면서 사라짐
                    for (let i = 0; i < closeButtons.length; i++) {
                        closeButtons[i].addEventListener('click', function() {
                            SwNINCoin.style.transform = 'translate(-50%, -50%) scale(0)'; // 크기 축소
                            setTimeout(() => {
                                SwNINCoin.style.visibility = 'hidden';
                            }, 500);
                        });
                    }

                    window.addEventListener('resize', updateSwNINCoinWidth);

                    function updateSwNINCoinWidth() {
                        if (window.innerWidth <= 768) {
                            SwNINCoin.style.width = '100%';
                            SwNINCoin.style.top = '52%';
                        } else if (window.innerWidth <= 1280) {
                            SwNINCoin.style.width = '85%';
                            SwNINCoin.style.top = '50%';
                        } else {
                            SwNINCoin.style.width = '50%';
                            SwNINCoin.style.top = '50%';
                        }
                    }

                    updateSwNINCoinWidth();
                });
                </script>


            </div>

        </div>



        <style>
        .right_header {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 12%;
            border-bottom: 5px dashed #eeaaeeaa
        }

        .right_content {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 90%;
        }
        </style>




        <div id="SwRtBoard" class="swa_info_right">
            <div class="right_container">
                <div class="right_inner">

                    <div class="right_header">
                        <a id="rightHide" class="rightCl" href="javascript:void(0)" data-lang-kr="닫기" data-lang-jp="閉る"
                            data-lang-en="CLOSE" style="margin: 0;"></a>
                    </div>
                    <div class="right_content">



                        <div class="cal">
                            <div class="cal_container">
                                <div class="cal_item">
                                    <div class="calhead">
                                        <button type="button" class="calcbtn" onclick="prev()">
                                            ◀️
                                        </button>
                                        <div class="cal_acc">
                                            <div>
                                                <div id="year" class="top-bar"></div>
                                                <div id="month" class="top-bar"></div>
                                            </div>
                                        </div>
                                        <button type="button" class="calcbtn" onclick="next()">
                                            ▶️
                                        </button>
                                    </div>

                                    <table class="cal_table">
                                        <tr>
                                            <th>일</th>
                                            <th>월</th>
                                            <th>화</th>
                                            <th>수</th>
                                            <th>목</th>
                                            <th>금</th>
                                            <th>토</th>
                                        </tr>
                                        <tbody id="calendar-body">
                                            <!-- 날짜 자동 삽입 -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="today_now">
                            <div class="nowtime"></div>
                        </div>

                        <div class="swa_weather">

                            <div class="geolo_weather">
                                <p id="city" data-lang-kr="현재위치" data-lang-jp="現在地" data-lang-en="Cu_Lo">
                                </p>
                                <p id="weathericonUrl"></p>
                                <p id="temperature"></p>
                            </div>

                            <div class="geolo_weather">
                                <p id="tokyo" data-lang-kr="도쿄" data-lang-jp="東京" data-lang-en="Tokyo"></p>
                                <p id="tokyoweaiconUrl"></p>
                                <p id="tokyotemper"></p>
                            </div>

                            <div class="geolo_weather">
                                <p id="seoul" data-lang-kr="서울" data-lang-jp="ソウル" data-lang-en="Seoul"></p>
                                <p id="seoulweaiconUrl"></p>
                                <p id="seoultemper"></p>
                            </div>
                        </div>



                    </div>



                </div>
            </div>
        </div>

        <!-- <script src="nini/js/slign.js"></script> -->

        <script>
        // $(document).ready(function () {
        //     var $loginSubmitBtn = $('#loginSubmitBtn');
        //     var $SwRtBoard = $("#SwRtBoard");

        //     $loginSubmitBtn.off('click').on('click', function (e) {
        //         e.preventDefault();

        //         var emailId = $('input[name="emailId"]').val().trim();
        //         var userPw = $('input[name="user_pw"]').val().trim();

        //         // Validation checks
        //         if (!emailId) {
        //             alert("유효한 이메일 주소를 입력해주세요.");
        //             return;
        //         }

        //         if (userPw.length < 6) {
        //             alert("비밀번호는 최소 6자 이상이어야 합니다.");
        //             return;
        //         }

        //         var formData = $('#loginForm').serialize();

        //         $SwRtBoard.css("right", "-80%");
        //         setTimeout(function () {
        //             $SwRtBoard.addClass("swa_info_right_hide");
        //         }, 500);

        //         $.ajax({
        //             type: "POST",
        //             url: "{main_murl}/login_ok.php",
        //             data: formData,
        //             dataType: "json",
        //             beforeSend: function () {
        //                 // 로딩 인디케이터 표시
        //             },
        //             success: function (response) {
        //                 console.log("서버 응답:", response);
        //                 $('.loginUser').html(response.html);
        //             },
        //             error: function (xhr, status, error) {
        //                 console.error("통신 실패:", error);
        //                 alert("로그인 처리 중 문제가 발생했습니다. 다시 시도해주세요.");
        //             },
        //             complete: function () {
        //                 // 로딩 인디케이터 숨김
        //             }
        //         });

        //         // 기존 이벤트 제거 후 로드된 DOM에 이벤트 다시 할당
        //         $SwRtBoard.load(location.href + "#SwRtBoard .rightInner", function () {
        //             $("#rightHide").off('click').on('click', function () {
        //                 $SwRtBoard.css("right", "-80%");
        //                 setTimeout(function () {
        //                     $SwRtBoard.addClass("swa_info_right_hide");
        //                 }, 500);
        //             });
        //         });

        //         setTimeout(function () {
        //             $SwRtBoard.css("right", "0%");
        //             $SwRtBoard.removeClass("swa_info_right_hide");
        //         }, 500);

        //         $('.swlogin').load(location.href + ' .swlogin .login_font', function () {
        //             $("#SwRtBoardBtn").off('click').on('click', function () {
        //                 $SwRtBoard.removeClass("swa_info_right_hide");
        //                 SwRtBoardBtnClick = true;
        //                 setRightPosition();
        //             });

        //             // CSS 스타일 동적 적용
        //             $('.swlogin .login_font').css({
        //                 'display': 'flex',
        //                 'align-items': 'center',
        //                 'flex-direction': 'row',
        //                 'justify-content': 'center'
        //             });

        //             setLanguageText('kr');
        //         });
        //     });

        //     // 로그아웃 처리
        //     $(document).off('click', '#logoutB').on('click', '#logoutB', function (e) {
        //         e.preventDefault();

        //         $.ajax({
        //             type: "POST",
        //             url: "{main_murl}/logout.php",
        //             success: function (data) {
        //                 console.log("서버 응답:", data);
        //                 $('.loginUser').html(data);
        //             },
        //             error: function (xhr, status, error) {
        //                 console.error("통신 실패:", error);
        //             }
        //         });
        //     });

        //     function setLanguageText(lang) {
        //         $('.pullbul').each(function () {
        //             var text = $(this).attr('data-lang-' + lang);
        //             if (text) {
        //                 $(this).text(text);
        //             } else {
        //                 console.warn('No text found for:', $(this));
        //             }
        //         });
        //     }

        //     function setRightPosition() {
        //         if (!SwRtBoardBtnClick) return;

        //         var windowWidth = $(window).width();
        //         if (windowWidth <= 1280) {
        //             $SwRtBoard.css("right", windowWidth <= 443 ? "0%" : "7.5%");
        //         } else {
        //             $SwRtBoard.css("right", "0");
        //         }
        //     }
        // });
        </script>



    </div>




    <script src="nini/js/swiper.js"></script>

    <script>
    var swiper = new Swiper('.swiper-container', {
        // slidesPerView: 1,
        // slidesPerGroup: 1,
        initialSlide: 0,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>

    <script src="nini/js/calc_time.js"></script>
    <script src="nini/js/weather.js"></script>
    <script src="nini/js/mlk_coin.js"></script>

    <script src="nini/js/slick.js"></script>
    <script src="nini/js/slick-custom.js"></script>

    <script src="nini/js/chaLang1.js"></script>
    <script src="nini/js/chaLang2.js"></script>
    <script src="nini/js/chaLang3.js"></script>
    <script src="nini/js/chaLang4.js"></script>




    <script>

    </script>

    <script>
    $(document).ready(function() {
        $("#contents").click(function() {
            $("#popup").fadeIn();
        });
        $(".exit").click(function() {
            $("#popup").fadeOut();
        });
    });
    </script>

    <script>
    weatherCondition = "<?= $GLOBALS['weatherCondition'] ?>";
    </script>

    <script src="nini/js/initLoad.js"></script>

    <script>
    const menuLinks = document.querySelectorAll('.menu-link');
    const welcomeWeb = document.querySelectorAll('.welcomeWeb');
    welcomeWeb.forEach(function(btn) {
        btn.style.display = 'flex';
    });

    // const devImgs = document.querySelectorAll('.devImg');

    let clickLink = null;
    // 클릭된 링크
    let isOpen = false;
    // welcomeWeb열려 있는지 확인 초기값 false(열려있음)

    menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            const target = this.getAttribute('data-target');

            const allElements = document.querySelectorAll(
                '.welcomeWeb, .btnWeb, .btnMeta, .catholika');
            allElements.forEach(function(non) {
                non.style.display = 'none';
            });
            const eraseBord = document.querySelectorAll(
                'a.menu-link[data-target="web"] .devImg, a.menu-link[data-target="meta"] .devImg, a.menu-link[data-target="cathol"] .devImg'
            );
            allElements.forEach(function(non) {
                non.style.display = 'none';
            });

            if (target === 'welcomeWeb') {
                welcomeWeb.forEach(function(btn) {
                    btn.style.display = 'flex';
                });
            } else if (target === 'web') {
                const btnWeb = document.querySelectorAll('.btnWeb');
                btnWeb.forEach(function(btn) {
                    btn.style.display = 'flex';
                });
                const devImgin = document.querySelectorAll(
                    'a.menu-link[data-target="web"] .devImg');
                devImgin.forEach(function(img) {
                    img.style.border = '5px solid #099FE9';
                });
            } else if (target === 'meta') {
                const btnMeta = document.querySelectorAll('.btnMeta');
                btnMeta.forEach(function(btn) {
                    btn.style.display = 'flex';
                });
                const devImgin = document.querySelectorAll(
                    'a.menu-link[data-target="meta"] .devImg');
                devImgin.forEach(function(img) {
                    img.style.border = '5px solid #099FE9';
                });
            } else if (target === 'cathol') {
                const catholika = document.querySelectorAll('.catholika');
                catholika.forEach(function(btn) {
                    btn.style.display = 'flex';
                });
                const devImgin = document.querySelectorAll(
                    'a.menu-link[data-target="cathol"] .devImg');
                devImgin.forEach(function(img) {
                    img.style.border = '5px solid #099FE9';
                });
            }

            // 클릭된 링크가 또 클릭이 되었어?
            if (clickLink === this) {
                // welcomeWeb 열려있어?
                if (isOpen) {
                    welcomeWeb.forEach(function(btn) {
                        btn.style.display = 'none';
                    });
                    isOpen = false;

                    // welcomeWeb 닫혀있어?
                } else {
                    const allElements = document.querySelectorAll(
                        '.welcomeWeb, .btnWeb, .btnMeta, .catholika');
                    allElements.forEach(function(non) {
                        non.style.display = 'none';
                    });
                    welcomeWeb.forEach(function(btn) {
                        btn.style.display = 'flex';
                    });
                    isOpen = true;
                }
                // 클릭된 링크가 달라?
            } else {
                isOpen = true;
            }

            clickLink = this;

        });


        link.addEventListener('mouseover', function() {
            const target = this.getAttribute('data-target');

            const eraseBord = document.querySelectorAll(
                'a.menu-link[data-target="web"] .devImg, a.menu-link[data-target="meta"] .devImg, a.menu-link[data-target="cathol"] .devImg'
            )
            eraseBord.forEach(function(non) {
                non.style.border = 'none';
            });

            if (target === 'web') {
                const devImgs = document.querySelectorAll('a.menu-link[data-target="web"] .devImg');
                devImgs.forEach(function(img) {
                    img.style.border = '5px solid #eeaaee';
                });
            } else if (target === 'meta') {
                const devImgs = document.querySelectorAll(
                    'a.menu-link[data-target="meta"] .devImg');
                devImgs.forEach(function(img) {
                    img.style.border = '5px solid #eeaaee';
                });
            } else if (target === 'cathol') {
                const devImgs = document.querySelectorAll(
                    'a.menu-link[data-target="cathol"] .devImg');
                devImgs.forEach(function(img) {
                    img.style.border = '5px solid #eeaaee';
                });
            } else {
                const eraseBord = document.querySelectorAll(
                    'a.menu-link[data-target="web"] .devImg, a.menu-link[data-target="meta"] .devImg, a.menu-link[data-target="cathol"] .devImg'
                )
                eraseBord.forEach(function(non) {
                    non.style.border = 'none';
                });
            }
        });

        link.addEventListener('mouseout', function() {
            const eraseBord = document.querySelectorAll(
                'a.menu-link[data-target="web"] .devImg, a.menu-link[data-target="meta"] .devImg, a.menu-link[data-target="cathol"] .devImg'
            );
            eraseBord.forEach(function(non) {
                non.style.border = 'none';
            });
        });
    });
    </script>


    <script>
    function update_star(i) {
        if (--starv[i] == 25) star[i].style.clip = "rect(1px, 4px, 4px, 1px)";
        if (starv[i]) {
            stary[i] += 1 + Math.random() * 3;
            starx[i] += (i % 5 - 2) / 5;
            if (stary[i] < shigh + sdown) {
                star[i].style.top = stary[i] + "px";
                star[i].style.left = starx[i] + "px";
            } else {
                star[i].style.visibility = "hidden";
                starv[i] = 0;
                return;
            }
        } else {
            tinyv[i] = 50;
            tiny[i].style.top = (tinyy[i] = stary[i]) + "px";
            tiny[i].style.left = (tinyx[i] = starx[i]) + "px";
            tiny[i].style.width = "2px";
            tiny[i].style.height = "2px";
            tiny[i].style.backgroundColor = star[i].childNodes[0].style.backgroundColor;
            star[i].style.visibility = "hidden";
            tiny[i].style.visibility = "visible"
        }
    }

    function update_tiny(i) {
        if (--tinyv[i] == 25) {
            tiny[i].style.width = "1px";
            tiny[i].style.height = "1px";
        }
        if (tinyv[i]) {
            tinyy[i] += 1 + Math.random() * 3;
            tinyx[i] += (i % 5 - 2) / 5;
            if (tinyy[i] < shigh + sdown) {
                tiny[i].style.top = tinyy[i] + "px";
                tiny[i].style.left = tinyx[i] + "px";
            } else {
                tiny[i].style.visibility = "hidden";
                tinyv[i] = 0;
                return;
            }
        } else tiny[i].style.visibility = "hidden";
    }

    document.onmousemove = mouse;

    function mouse(e) {
        if (e) {
            y = e.pageY;
            x = e.pageX;
        } else {
            set_scroll();
            y = event.y + sdown;
            x = event.x + sleft;
        }
    }

    window.onscroll = set_scroll;

    function set_scroll() {
        if (typeof(self.pageYOffset) == 'number') {
            sdown = self.pageYOffset;
            sleft = self.pageXOffset;
        } else if (document.body && (document.body.scrollTop || document.body.scrollLeft)) {
            sdown = document.body.scrollTop;
            sleft = document.body.scrollLeft;
        } else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement
                .scrollLeft)) {
            sleft = document.documentElement.scrollLeft;
            sdown = document.documentElement.scrollTop;
        } else {
            sdown = 0;
            sleft = 0;
        }
    }

    window.onresize = set_width;

    function set_width() {
        var sw_min = 999999;
        var sh_min = 999999;
        if (document.documentElement && document.documentElement.clientWidth) {
            if (document.documentElement.clientWidth > 0) sw_min = document.documentElement.clientWidth;
            if (document.documentElement.clientHeight > 0) sh_min = document.documentElement.clientHeight;
        }
        if (typeof(self.innerWidth) == 'number' && self.innerWidth) {
            if (self.innerWidth > 0 && self.innerWidth < sw_min) sw_min = self.innerWidth;
            if (self.innerHeight > 0 && self.innerHeight < sh_min) sh_min = self.innerHeight;
        }
        if (document.body.clientWidth) {
            if (document.body.clientWidth > 0 && document.body.clientWidth < sw_min) sw_min = document.body
                .clientWidth;
            if (document.body.clientHeight > 0 && document.body.clientHeight < sh_min) sh_min = document.body
                .clientHeight;
        }
        if (sw_min == 999999 || sh_min == 999999) {
            sw_min = 800;
            sh_min = 600;
        }
        swide = sw_min;
        shigh = sh_min;
    }

    function createDiv(height, width) {
        var div = document.createElement("div");
        div.style.position = "absolute";
        div.style.height = height + "px";
        div.style.width = width + "px";
        div.style.overflow = "hidden";
        return (div);
    }

    function newColour() {
        var c = new Array();
        c[0] = 255;
        c[1] = Math.floor(Math.random() * 256);
        c[2] = Math.floor(Math.random() * (256 - c[1] / 2));
        c.sort(function() {
            return (0.5 - Math.random());
        });
        return ("rgb(" + c[0] + ", " + c[1] + ", " + c[2] + ")");
    }

    var sparks = 75; // how many sparks per clicksplosion
    var speed = 33; // how fast - smaller is faster
    var bangs = 5; // how many can be launched simultaneously (note that using too many can slow the script down)
    var colours = new Array('#03f', '#f03', '#0e0', '#93f', '#0cf', '#f93', '#f0c');

    var intensity = new Array();
    var Xpos = new Array();
    var Ypos = new Array();
    var dX = new Array();
    var dY = new Array();
    var stars = new Array();
    var decay = new Array();
    var timers = new Array();
    var swide = 800;
    var shigh = 600;
    var sleft = sdown = 0;
    var count = 0;

    function addLoadEvent(funky) {
        var oldonload = window.onload;
        if (typeof(oldonload) != 'function') window.onload = funky;
        else window.onload = function() {
            if (oldonload) oldonload();
            funky();
        }
    }

    addLoadEvent(clicksplode);

    function clicksplode() {
        if (document.getElementById) {
            var i, j;
            window.onscroll = set_scroll;
            window.onresize = set_width;
            document.onclick = eksplode;
            set_width();
            set_scroll();
            for (i = 0; i < bangs; i++)
                for (j = sparks * i; j < sparks + sparks * i; j++) {
                    stars[j] = createDiv('*', 13);
                    document.body.appendChild(stars[j]);
                }
        }
    }

    function createDiv(char, size) {
        var div, sty;
        div = document.createElement('div');
        sty = div.style;
        sty.font = size + 'px monospace';
        sty.position = 'absolute';
        sty.backgroundColor = 'transparent';
        sty.visibility = 'hidden';
        sty.zIndex = '101';
        div.appendChild(document.createTextNode(char));
        return (div);
    }

    function bang(N) {
        var i, Z, A = 0;
        for (i = sparks * N; i < sparks * (N + 1); i++) {
            if (decay[i]) {
                Z = stars[i].style;
                Xpos[i] += dX[i];
                Ypos[i] += (dY[i] += 1.25 / intensity[N]);
                if (Xpos[i] >= swide || Xpos[i] < 0 || Ypos[i] >= shigh + sdown || Ypos[i] < 0) decay[i] = 1;
                else {
                    Z.left = Xpos[i] + 'px';
                    Z.top = Ypos[i] + 'px';
                }
                if (decay[i] == 15) Z.fontSize = '7px';
                else if (decay[i] == 7) Z.fontSize = '2px';
                else if (decay[i] == 1) Z.visibility = 'hidden';
                decay[i]--;
            } else A++;
        }
        if (A != sparks) timers[N] = setTimeout('bang(' + N + ')', speed);
    }

    function eksplode(e) {
        var x, y, i, M, Z, N;
        set_scroll();
        y = (e) ? e.pageY : event.y + sdown;
        x = (e) ? e.pageX : event.x + sleft;
        N = ++count % bangs;
        M = Math.floor(Math.random() * 3 * colours.length);
        intensity[N] = 5 + Math.random() * 4;
        for (i = N * sparks; i < (N + 1) * sparks; i++) {
            Xpos[i] = x;
            Ypos[i] = y - 5;
            dY[i] = (Math.random() - 0.5) * intensity[N];
            dX[i] = (Math.random() - 0.5) * (intensity[N] - Math.abs(dY[i])) * 1.25;
            decay[i] = 16 + Math.floor(Math.random() * 16);
            Z = stars[i].style;
            if (M < colours.length) Z.color = colours[i % 2 ? count % colours.length : M];
            else if (M < 2 * colours.length) Z.color = colours[count % colours.length];
            else Z.color = colours[i % colours.length];
            Z.fontSize = '13px';
            Z.visibility = 'visible';
        }
        clearTimeout(timers[N]);
        bang(N);
    }

    function set_width() {
        var sw_min = 999999;
        var sh_min = 999999;
        if (document.documentElement && document.documentElement.clientWidth) {
            if (document.documentElement.clientWidth > 0) sw_min = document.documentElement.clientWidth;
            if (document.documentElement.clientHeight > 0) sh_min = document.documentElement.clientHeight;
        }
        if (typeof(self.innerWidth) == 'number' && self.innerWidth) {
            if (self.innerWidth > 0 && self.innerWidth < sw_min) sw_min = self.innerWidth;
            if (self.innerHeight > 0 && self.innerHeight < sh_min) sh_min = self.innerHeight;
        }
        if (document.body.clientWidth) {
            if (document.body.clientWidth > 0 && document.body.clientWidth < sw_min) sw_min = document.body
                .clientWidth;
            if (document.body.clientHeight > 0 && document.body.clientHeight < sh_min) sh_min = document.body
                .clientHeight;
        }
        if (sw_min == 999999 || sh_min == 999999) {
            sw_min = 800;
            sh_min = 600;
        }
        swide = sw_min - 7;
        shigh = sh_min - 7;
    }

    function set_scroll() {
        if (typeof(self.pageYOffset) == 'number') {
            sdown = self.pageYOffset;
            sleft = self.pageXOffset;
        } else if (document.body && (document.body.scrollTop || document.body.scrollLeft)) {
            sdown = document.body.scrollTop;
            sleft = document.body.scrollLeft;
        } else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement
                .scrollLeft)) {
            sleft = document.documentElement.scrollLeft;
            sdown = document.documentElement.scrollTop;
        } else {
            sdown = 0;
            sleft = 0;
        }
    }
    </script>
    <script src="nini/js/sanct2.js"></script>
    <script src="nini/js/sanct.js"></script>
    <script src='https://rawcdn.githack.com/akzhy/Vara/c55a1b40c15b808cdd4a047de95c905094be87db/src/vara.min.js'>
    </script>
    <script src="nini/js/book.js"></script>

    <script>
    $(document).ready(function() {

        var leftBarClick = false;

        $("#leftBar").click(function() {
            $("#info_left").removeClass("swa_info_left_hide");
            leftBarClick = true;
            setLeftPosition();
        });
        $("#leftHide").click(function() {
            $("#info_left").css("left", "-80%");
            setTimeout(function() {
                $("#info_left").addClass("swa_info_left_hide");
            }, 500);
        });

        function setLeftPosition() {

            if (!leftBarClick) {
                return;
            }

            var windowWidth = $(window).width();
            if (windowWidth <= 443) {
                $("#info_left").css("left", "0");
                // $("#info_left").addClass("swa_info_left_hide");
            } else if (windowWidth <= 572) {
                $("#info_left").css("left", "0");
            } else if (windowWidth <= 769) {
                $("#info_left").css("left", "0");
            } else if (windowWidth <= 1280) {
                $("#info_left").css("left", "7.5%");
            } else {
                $("#info_left").css("left", "5%");
            }
        }

        if ($(window).width() <= 443) {
            $("#info_left").css("left", "-80%");
        } else if ($(window).width() <= 572) {
            $("#info_left").css("left", "-80%");
        } else if ($(window).width() <= 769) {
            $("#info_left").css("left", "-80%");
        } else if ($(window).width() <= 1280) {
            $("#info_left").css("left", "-80%");
        } else {
            $("#info_left").css("left", "-80%");
        }
        $(window).resize(function() {
            setLeftPosition();
        });
    });
    </script>


    <script>
    // document.addEventListener("keydown", function (event) {
    //     if (event.key === "F12") {
    //         event.preventDefault();
    //         alert("개발자 도구 사용이 제한되었습니다.");
    //     }

    //     if (event.ctrlKey && event.shiftKey && (event.key === "I" || event.key === "C" || event.key === "J")) {
    //         event.preventDefault();
    //         alert("개발자 도구 사용이 제한되었습니다.");
    //     }

    //     if (event.ctrlKey && event.key === "s") {
    //         event.preventDefault();
    //         alert("페이지 저장이 제한되었습니다.");
    //     }

    //     if (event.ctrlKey && event.key === "u") {
    //         event.preventDefault();
    //         alert("소스 보기 사용이 제한되었습니다.");
    //     }
    // });

    // // 우클릭 비활성화
    // document.addEventListener("contextmenu", function (event) {
    //     event.preventDefault();
    //     alert("우클릭이 비활성화되었습니다.");
    // });
    </script>




    <script>
    $(document).ready(function() {

        var SwRtBoardBtnClick = false;

        $("#SwRtBoardBtn").click(function() {
            $("#SwRtBoard").removeClass("swa_info_right_hide");
            SwRtBoardBtnClick = true;
            setRightPosition();
        });



        $("#SwRtBoardBtn_mini").click(function() {
            $("#SwRtBoard").removeClass("swa_info_right_hide");
            SwRtBoardBtnClick = true;
            setRightPosition();
        });



        $("#rightHide").click(function() {
            $("#SwRtBoard").css("right", "-80%");
            SwRtBoardBtnClick = false;
            setTimeout(function() {
                $("#SwRtBoard").addClass("swa_info_right_hide");
            }, 500);
        });

        function setRightPosition() {

            if (!SwRtBoardBtnClick) {
                return;
            }

            var windowWidth = $(window).width();

            if (windowWidth <= 443) {
                $("#SwRtBoard").css("right", "0%");
            } else if (windowWidth <= 572) {
                $("#SwRtBoard").css("right", "0%");
            } else if (windowWidth <= 768) {
                $("#SwRtBoard").css("right", "0%");
            } else if (windowWidth <= 1280) {
                $("#SwRtBoard").css("right", "7.5%");
            } else {
                $("#SwRtBoard").css("right", "0");
            }
        }

        if ($(window).width() <= 443) {
            $("#SwRtBoard").css("right", "-80%");
        } else if ($(window).width() <= 572) {
            $("#SwRtBoard").css("right", "-80%");
        } else if ($(window).width() <= 768) {
            $("#SwRtBoard").css("right", "-80%");
        } else if ($(window).width() <= 1280) {
            $("#SwRtBoard").css("right", "-80%");
        } else {
            $("#SwRtBoard").css("right", "-80%");
        }

        $(window).resize(function() {
            setRightPosition();
        });

        // 클릭 이벤트를 초기 상태
        // $("#SwRtBoardBtn").click();
    });
    </script>


    <script src="nini/js/menuLink.js"></script>




    <script>
    $(document).ready(function() {
        $("#blogSta").click(function() {
            setTimeout(function() {
                $("#popRep").fadeIn();
            }, 1300);
            $(".exitRep").click(function() {
                $("#popRep").fadeOut();
            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#popMall").fadeIn();

        $(".exitRep").click(function() {
            $("#popMall").fadeOut();
        });
    });
    </script>



    <!-- <script src="nini/js/swplayer.js"></script> -->
    <script>
    $(function() {
        var playerTrack = $("#player-track"),
            bgArtwork = $("#bg-artwork"),
            bgArtworkUrl,
            albumName = $("#album-name"),
            trackName = $("#track-name"),
            albumArt = $("#album-art"),
            sArea = $("#s-area"),
            seekBar = $("#seek-bar"),
            trackTime = $("#track-time"),
            insTime = $("#ins-time"),
            sHover = $("#s-hover"),
            playPauseButton = $("#play-pause-button"),
            i = playPauseButton.find("i"),
            tProgress = $("#current-time"),
            tTime = $("#track-length"),
            seekT,
            seekLoc,
            seekBarPos,
            cM,
            ctMinutes,
            ctSeconds,
            curMinutes,
            curSeconds,
            durMinutes,
            durSeconds,
            playProgress,
            bTime,
            nTime = 0,
            buffInterval = null,
            tFlag = false,
            albums = [
                "Potal2",
                "WhitsEnd",
                // "Electro Boy",
            ],
            trackNames = [
                "Cara Mia Addio - Potal2",
                "Paper Sculpture - WhitsEnd",
                // "Kaaze - Electro Boy",
            ],
            // albumArtworks = ["_1", "_2", "_3"],
            albumArtworks = ["_1", "_2"],
            trackUrl = [
                "nini/sound/CaraMiaAddio.mp3",
                "nini/sound/papersculpture.mp3",
                // "https://raw.githubusercontent.com/himalayasingh/music-player-1/master/music/1.mp3",
            ],
            playPreviousTrackButton = $("#play-previous"),
            playNextTrackButton = $("#play-next"),
            currIndex = -1;

        function playPause() {
            setTimeout(function() {
                if (audio.paused) {
                    playerTrack.addClass("active");
                    albumArt.addClass("active");
                    checkBuffering();
                    i.attr("class", "fas fa-pause");
                    audio.play();
                } else {
                    playerTrack.removeClass("active");
                    albumArt.removeClass("active");
                    clearInterval(buffInterval);
                    albumArt.removeClass("buffering");
                    i.attr("class", "fas fa-play");
                    audio.pause();
                }
            }, 300);
        }

        function showHover(event) {
            seekBarPos = sArea.offset();
            seekT = event.clientX - seekBarPos.left;
            seekLoc = audio.duration * (seekT / sArea.outerWidth());

            sHover.width(seekT);

            cM = seekLoc / 60;

            ctMinutes = Math.floor(cM);
            ctSeconds = Math.floor(seekLoc - ctMinutes * 60);

            if (ctMinutes < 0 || ctSeconds < 0) return;

            if (ctMinutes < 0 || ctSeconds < 0) return;

            if (ctMinutes < 10) ctMinutes = "0" + ctMinutes;
            if (ctSeconds < 10) ctSeconds = "0" + ctSeconds;

            if (isNaN(ctMinutes) || isNaN(ctSeconds)) insTime.text("--:--");
            else insTime.text(ctMinutes + ":" + ctSeconds);

            insTime.css({
                left: seekT,
                "margin-left": "-21px"
            }).fadeIn(0);
        }

        function hideHover() {
            sHover.width(0);
            insTime.text("00:00").css({
                left: "0px",
                "margin-left": "0px"
            }).fadeOut(0);
        }

        function playFromClickedPos() {
            audio.currentTime = seekLoc;
            seekBar.width(seekT);
            hideHover();
        }

        function updateCurrTime() {
            nTime = new Date();
            nTime = nTime.getTime();

            if (!tFlag) {
                tFlag = true;
                trackTime.addClass("active");
            }

            curMinutes = Math.floor(audio.currentTime / 60);
            curSeconds = Math.floor(audio.currentTime - curMinutes * 60);

            durMinutes = Math.floor(audio.duration / 60);
            durSeconds = Math.floor(audio.duration - durMinutes * 60);

            playProgress = (audio.currentTime / audio.duration) * 100;

            if (curMinutes < 10) curMinutes = "0" + curMinutes;
            if (curSeconds < 10) curSeconds = "0" + curSeconds;

            if (durMinutes < 10) durMinutes = "0" + durMinutes;
            if (durSeconds < 10) durSeconds = "0" + durSeconds;

            if (isNaN(curMinutes) || isNaN(curSeconds)) tProgress.text("00:00");
            else tProgress.text(curMinutes + ":" + curSeconds);

            if (isNaN(durMinutes) || isNaN(durSeconds)) tTime.text("00:00");
            else tTime.text(durMinutes + ":" + durSeconds);

            if (
                isNaN(curMinutes) ||
                isNaN(curSeconds) ||
                isNaN(durMinutes) ||
                isNaN(durSeconds)
            )
                trackTime.removeClass("active");
            else trackTime.addClass("active");

            seekBar.width(playProgress + "%");

            if (playProgress == 100) {
                i.attr("class", "fa fa-play");
                seekBar.width(0);
                tProgress.text("00:00");
                albumArt.removeClass("buffering").removeClass("active");
                clearInterval(buffInterval);
            }
        }

        function checkBuffering() {
            clearInterval(buffInterval);
            buffInterval = setInterval(function() {
                if (nTime == 0 || bTime - nTime > 1000) albumArt.addClass("buffering");
                else albumArt.removeClass("buffering");

                bTime = new Date();
                bTime = bTime.getTime();
            }, 100);
        }

        function selectTrack(flag) {
            if (flag == 0 || flag == 1) ++currIndex;
            else --currIndex;

            if (currIndex > -1 && currIndex < albumArtworks.length) {
                if (flag == 0) i.attr("class", "fa fa-play");
                else {
                    albumArt.removeClass("buffering");
                    i.attr("class", "fa fa-pause");
                }

                seekBar.width(0);
                trackTime.removeClass("active");
                tProgress.text("00:00");
                tTime.text("00:00");

                currAlbum = albums[currIndex];
                currTrackName = trackNames[currIndex];
                currArtwork = albumArtworks[currIndex];

                audio.src = trackUrl[currIndex];

                nTime = 0;
                bTime = new Date();
                bTime = bTime.getTime();

                if (flag != 0) {
                    audio.play();
                    playerTrack.addClass("active");
                    albumArt.addClass("active");

                    clearInterval(buffInterval);
                    checkBuffering();
                }

                albumName.text(currAlbum);
                trackName.text(currTrackName);
                albumArt.find("img.active").removeClass("active");
                $("#" + currArtwork).addClass("active");

                bgArtworkUrl = $("#" + currArtwork).attr("src");

                bgArtwork.css({
                    "background-img": "url(" + bgArtworkUrl + ")"
                });
            } else {
                if (flag == 0 || flag == 1) --currIndex;
                else ++currIndex;
            }
        }

        function initPlayer() {
            audio = new Audio();

            selectTrack(0);

            audio.loop = false;

            playPauseButton.on("click", playPause);

            sArea.mousemove(function(event) {
                showHover(event);
            });

            sArea.mouseout(hideHover);

            sArea.on("click", playFromClickedPos);

            $(audio).on("timeupdate", updateCurrTime);

            playPreviousTrackButton.on("click", function() {
                selectTrack(-1);
            });
            playNextTrackButton.on("click", function() {
                selectTrack(1);
            });
        }

        initPlayer();
    });
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/3.1.0/anime.min.js'></script>
    <script src="nini/js/likeDev.js"></script>





    <script>
    function goToLogin() {
        var link = "{main_murl}/login.php?lang=" + lang;
        return link;
    }
    </script>

    <script>
    // 이 코드는 default로 만들어주는 코드이다.
    // 아래의 리다이렉트 코드가 있기 때문에 불필요하다.
    var url = window.location.href;

    if (url.indexOf('?') > -1) {
        if (url.indexOf('?lang=') === -1 && url.indexOf('&lang=') === -1) {
            url += '&lang=jp';
        }
    } else {
        url += '?lang=kr';
    }
    var newUrl = url;
    window.history.pushState({
        path: newUrl
    }, '', newUrl);
    </script>



    <script src="nini/js/sortDev.js"></script>



</body>

<script>
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('nini/pwa/serviceWork.js');
}
</script>

</html>