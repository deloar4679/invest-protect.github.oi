<?php
include ("header.php");
include ("gateways/gateways.php");
?>
<div class="post_cat2">
    <div class="cat_bg2"> LISTING ORDER</div>
    
    <style>
.wrap2 li{list-style: none;}
.wrap2 h1{
	display: block;
	text-align: center;
	text-transform: uppercase;
	color: #fff;
	font-size: 24px;
	font-weight: 700;
	margin-bottom: 25px;}
.wrap2 p{display: block;text-align: center;margin-bottom: 13px;}
.wrap2{margin: 0 auto;padding: 19px 0px;font-family: 'PT Sans', sans-serif;color: #fff;background-color: transparent;font-size: 16px;line-height: 21px;}
.banner{display: block;text-align: center;margin: 2px 0 -2px 0;}
.banner img{width: 100%;height: 100%; margin-top:-3px;}
.serv-list{margin-bottom: 30px;}
.serv-list h3{
	display: block;
	font-size: 18px;	
	font-weight: 700;
	color: #d34b2d;
	text-align: center;
	text-transform: uppercase;
	background: url(../img/bg1.png) center top no-repeat;
	background-size: cover;
	padding: 30px 0 25px 0;	}
.serv-list h3 span{color: #fff;}
.serv-list .arrow{display: block;text-align: center;background: url(../img/bg2.png) center top no-repeat;background-size: cover;padding-bottom: 96px;position: relative;}
.serv-list .arrow img{position: absolute;top: 50%;margin-top: -10px;left: 50%;margin-left: -10px;transition: 0.25s;}
.serv-list:hover img{top: 65%;}
.order{margin-bottom: 52px;}
.wallets{background-color: #d60303;border: 1px solid #f7f7f7;-webkit-box-shadow: 0px 0px 0px 12px rgba(211,75,45,1);-moz-box-shadow: 0px 0px 0px 12px rgba(211,75,45,1);box-shadow: 0px 0px 0px 12px rgba(211,75,45,1);padding: 10px 36px 19px 36px;display: block;margin: 0 20px 59px 20px;}

.wallets .title{display: block;text-align: center;font-size: 18px;font-weight: 700;color: #f7f7f7;text-transform: uppercase;margin-bottom: 10px;}
.wallets .item{position: relative;
    font-size: 14px;
    background-color: #fff;
    padding: 6px 4px 6px 18px;
    border-radius: 28px;
    margin-bottom: 7px;
    }
	
.wallets .item span{padding-left: 97px;border-left: 1px solid #f7f7f7;line-height: 28px;}
.wallets .item:before{position: absolute;content: '';top: 50%;background-size: cover;}
.wallets .perfmoney:before{
	/*/width: 130px;
	height: 27px;
	background: url(../img/p-money.png) center top no-repeat;/*/
	margin-top: -10px;
	left: 11px;}
.wallets .payeer:before{
	/*/width: 102px;
	height: 22px;
	background: url(../img/payeer.png) center top no-repeat;/*/
	margin-top: -11px;
	left: 11px;}
.wallets .advcash:before{
	/*/width: 116px;
	height: 32px;
	background: url(../img/advcash.png) center top no-repeat;/*/
	margin-top: -16px;
	left: 11px;}
.wallets .bitcoin:before{
	/*/width: 108px;
	height: 24px;
	background: url(../img/bitcoin.png) center top no-repeat;/*/
	margin-top: -12px;
	left: 11px;}
.wallets .item:after{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	background-position: 0 -28px;
	width: 23px; 
	height: 23px; 
	right: 15px;
	top: 50%;
	margin-top: -12px;}
.wallets .item:hover:after{background-position: -98px -28px;}
.wallets .item:hover span{color: #d34b2d;}
.wallets-wrp{margin-bottom: 53px;}
.wallets-wrp p{display: block;text-align: center;margin: 0;}
.faq{margin-bottom: 35px;}
.faq .text{margin-bottom: 38px;}
.faq h3{
	display: block;
	text-align: center;
	font-weight: 700;
	font-size: 18px;
	text-transform: uppercase;
	color: #d20000;
	margin-bottom: 21px;}
.serv-table{border-collapse: collapse;cellpadding: 0;cellspasing: 0;}
.serv-table td,
.serv-table th{text-align: center;}
.serv-table tr td:first-child{width: 194px;}
.serv-table tr th:first-child{width: 176px;}
.serv-table tr th:nth-child(2),
.serv-table tr td:nth-child(2){width: 131px;}
.serv-table tr th:nth-child(3),
.serv-table tr td:nth-child(3){width: 121px;}
.serv-table tr th:nth-child(4),
.serv-table tr td:nth-child(4){width: 97px;}
.serv-table tr th:nth-child(5),
.serv-table tr td:nth-child(5){width: 167px;}
.serv-table tr:first-child {background-color: #7d0404;width: 100%;margin-bottom: 7px;}
.serv-table th{
	position: relative;
	padding: 16px 0 17px 0;
	text-align: center;
	color: #fff;
	font-size: 12px;
	font-weight: 700;	
	text-shadow: 1px 0px 0px rgba(165, 165, 165, 1);
	text-transform: uppercase;}
.serv-table th:before{
	position: absolute;
	content: '';
	left: 0;
	top: 16px;
	bottom: 16px;
	width: 1px;
	background-color: #444;}
.serv-table th:after{
	position: absolute;
	content: '';
	right: 0;
	top: 16px;
	bottom: 16px;
	width: 1px;
	background-color: #000;	}
.serv-table th:first-child{text-align: left;padding-left: 24px;width: 170px;}
.serv-table th:first-child:before{display: none;}
.serv-table th:last-child:after{display: none;}
.serv-table tr td{font-size: 14px;padding: 5px 0 5px 0;border-bottom: 3px solid #f7f7f7;background: #004965;}
.serv-table tr th{border-bottom: 5px solid #f7f7f7;}
.serv-table  tr .name{
	text-align: center;
	background-color: #9c0000;
	color: #fff;
	position: relative;
	font-size: 18px;	
	height: 55px;
	line-height: 55px;}
.serv-table  tr td:first-child{padding: 0;}
.serv-table  tr .name:before{
	position: absolute;
	content: '';
	width: 0;
	height: 0;
	border-top: 27px solid transparent;
	border-left: 13px solid #a00000;
	border-bottom: 27px solid transparent;
	right: -13px;
	top: 0;}
.serv-table .ad-btn{
	background: #2e2e2e;
	color: #fff;
	font-size: 11px;
	font-weight: 700;
	border: none;
	text-transform: uppercase;
	padding: 8px 26px 6px 26px;
	outline: none;
	cursor: pointer;
	border-radius: 40px;
	transition: 0.25s;
	vertical-align: middle;
	display: table-cell;
	display: block;
	margin: 0 26px;
	text-decoration: none;}
.serv-table .ad-btn:hover{background-color: #d34b2d;}
.ad-btn2{
	background: #fff;
	color: #fff;
	font-size: 11px;
	font-weight: 700;
	border: none;
	text-transform: uppercase;
	padding: 12px 26px 12px 26px;
	outline: none;
	cursor: pointer;
	border-radius: 40px;
	transition: 0.25s;
	vertical-align: middle;
	display: block;
	margin: 0 26px;
	text-decoration: none;}
.ad-btn2:hover{background-color: #d34b2d;}
.list-wrp .item{margin-bottom: 55px;}
.list-wrp .title{
	font-weight: 700;
	border: 2px solid #e3e3e3;
	display: inline-block;
	font-size: 48px;
	padding: 30px 0px 95px 25px;
	width: 237px;}
.list-wrp .title span{
	font-size: 23px;
	display: block;
	margin-top: 12px;
	font-weight: 400;
	color: #2e2e2e;}
.ul-wrp{
	padding: 2px;
	border: 12px solid #fff;
	margin-left: 120px;
	margin-top: -90px;
	z-index: 3;
	position: relative;}
.ul-wrp ul{padding: 40px 20px;background-color: #fcfcfc;}
.ul-wrp li{
	list-style: none;
	position: relative;
	display: block;
	font-size: 14px;
	line-height: 22px;
	padding-left: 36px;}
.ul-wrp li:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	background-position: -24px -38px;
	width: 15px; 
	height: 13px;
	left: 0;
	top: 5px;}
.title.vip{color: #ffae00;}
.title.exc{color: #d34b2d;}
.title.preim{color: #89114e;}
.title.normal{color: #003374;}
.commend{margin-bottom: 59px;}
.show-text {background-color: #fff;/*	border-radius: 21px 21px 0 0;*/border-radius: 21px;}
.show-text input{display: none;}
.show-text .toggle-btn{
	width: 100%;
	/*/font-size: 14px;/*/
	outline: none;
	font-weight: 700;
	background-color: #d34b2d;
	color: #fff;
	display: block;
	text-align: center;
	text-transform: uppercase;
	padding: 13px 0 8px 0;
	border-radius: 21px;
	position: relative;
	cursor: pointer;
	transition: 0.25s;
	border: 1px solid #d34b2d;
	text-decoration: none;}
.show-text .toggle-btn:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	width: 26px;
	height: 23px; 
	background-position: -71px -28px;
	left: 140px;
	top: 50%;
	margin-top: -11px;
	transition: 0.25s;}
.show-text .toggle-btn:after{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	width: 26px;
	height: 23px; 
	background-position: -71px -28px;
	right: 140px;
	top: 50%;
	margin-top: -11px;
	transition: 0.25s;}
.show-text .toggle-btn:hover{background-color: #e6765e;}
.show-text .toggle-btn:hover:before,
.show-text .toggle-btn:hover:after{top: 60%;}
.hide{background-color: #fff;padding: 26px 19px 5px 19px;display: none;}
.hide.js-visible{display: block;}
.hide p{
	display: block;
	text-align: left;
	line-height: 19px;
	font-size: 16px;
	font-weight: 700;
	margin-bottom: 38px;}
.hide p.slog{margin-bottom: 25px;text-align: center;}
.hide h4{
	display: block;
	text-align: left;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: 400;
	margin-bottom: 30px;}
.hide ul{display: block;padding-left: 16px;margin-bottom: 30px;}
.hide ul li{
	line-height: 1;
	font-size: 17px;
	padding-left: 23px;
	display: block;
	text-align: left;
	margin-bottom: 18px;
	position: relative;}
.hide ul li:before{
	position: absolute;
	content: '';
	width: 5px; 
	height: 5px; 
	background: url(../img/sprites.png) no-repeat;
	background-position: -24px -27px;
	left: 0;
	top: 5px;}
.hide .img-wrp{
	display: inline-block;
	padding: 7px;
	text-decoration: none;
	background-color: #f7f7f7;
	margin-right: 30px;
	margin-bottom: 30px;
	width: 190px;
	height: 125px;
	vertical-align: top;}
.hide .img-wrp.w-margin{margin-right: 0;}
.hide .img-wrp img{width: 100%;height: 100%;display: block;}
.service a.all-btn{
	display: block;
	text-align: center;
	margin: 0 auto;
	padding-top: 16px;
	padding-bottom: 12px;
	width: 340px;
	text-decoration: none;
	line-height: 17px;
	font-size: 14px;
	font-weight: 700;
	color: #2e2e2e;
	border: 2px solid #2e2e2e;
	text-transform: uppercase;
	margin-bottom: 54px;
	transition: 0.25s;}
.service a.all-btn:hover{color: #f7f7f7;background-color: #2e2e2e;}
.service .branding{background-color: #fff;overflow: hidden;padding: 22px 25px 0 25px;margin-bottom: 55px;}
.service .branding .img-wrp{display: block;float: left;width: 310px;}
.service .branding .title{
	font-size: 21px;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 27px;
	margin-top: 15px;}
.service .branding ul{display: block;}
.service .branding li{
	display: block;
	list-style: none;
	font-size: 14px;
	line-height: 17px;
	margin-bottom: 4px;}
.dispatch{background-color: #fff;margin-bottom: 38px;}
.dispatch .headline{
	text-align: center;
	display: block;
	background: url(../img/bg3.png) center top no-repeat;
	background-size: cover;
	color: #fff;
	text-transform: uppercase;
	font-weight: 700;
	font-size: 21px;
	padding: 14px 0;
	text-decoration: none;}
.dispatch .headline span{display: block;font-size: 16px;margin-top: 16px;}
.dispatch .cont{padding: 0 23px 13px 23px;}
.dispatch .price{
	display: block;
	width: 595px;
	margin: 0 auto;
	background-color: #d34b2d;
	padding: 22px 0 20px 0;
	margin-bottom: 27px;}
.dispatch .price li{
	display: block;
	text-align: center;
	font-size: 14px;
	color: #fff;
	font-weight: 700;
	margin-bottom: 4px;
	text-transform: uppercase;}
.dispatch .text{font-size: 14px;text-align: left;line-height: 17px;}
.more-service{margin-bottom: 100px;}
.more-service .item{margin-bottom: 17px;}
.more-service .item h3{
	display: inline-block;
	padding-left: 35px;
	font-size: 21px;
	font-weight: 700;
	margin-bottom: 15px;
	position: relative;}
.more-service .item .text{display: block;font-size: 16px;line-height: 20px;}
.more-service .item ul{display: block;padding: 21px;}
.more-service .item ul li{display: block;font-size: 16px;font-style: italic;}
.more-service .item.loupe h3:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	left: 0;
	width: 26px; 
	height: 27px; 
	background-position: -82px 0;
	top: 50%;
	margin-top: -14px;}
.more-service .item.shield h3:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	left: 0;
	background-position: -30px 0;
	width: 23px; 
	height: 29px; 
	top: 50%;
	margin-top: -15px;}
.more-service .item.sms h3:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	left: 0;
	top: 50%;
	margin-top: -13px;
	width: 29px; 
	height: 26px; 
	background-position: 0 0;}
.more-service .item.vid h3:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	left: 0;
	top: 50%;
	margin-top: -11px;
	width: 30px; 
	height: 21px; 
	background-position: -40px -30px;}
.more-service .item.yadx h3:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	left: 5px;
	top: 50%;
	width: 14px; 
	height: 27px; 
	background-position: -109px 0;
	margin-top: -14px;}
.more-service .item.offline h3:before{
	position: absolute;
	content: '';
	background: url(../img/sprites.png) no-repeat;
	left: 0;
	top: 50%;
	width: 27px; 
	height: 27px; 
	background-position: -54px 0;
	margin-top: -14px;}
.result{
	padding: 47px 19px 19px 19px;
	background-color: #fff;
	margin-bottom: 30px;
}
.result h2{
	display: block;
	font-size: 18px;
	font-weight: 700;
	color: #fff;
	background-color: #d34b2d;
	width: 240px;
	text-align: center;
	margin: 0 auto;
	margin-top: -81px;
	text-transform: uppercase;
	padding: 22px 0 20px 0;
	margin-bottom: 41px;}
.result h2:hover{ background-color:#fb785b;}
.result .img-wrp{
	border: 12px solid #f7f7f7;
	display: inline-block;
	vertical-align: top;
	margin-right: 20px;
	width: 184px;
	height: 254px;
	margin-bottom: 28px;
	position: relative;}
.result .img-wrp img{transition: 0.3s;position: relative;display: block;}
/*.result .img-wrp img:hover{-moz-transform: scale(1.6);-webkit-transform: scale(1.6);transform: scale(1.6);z-index: 3;border: 3px solid #f7f7f7;}*/
.result .img-wrp:nth-child(4){margin-right: 0;}
.result .img-wrp:nth-child(7){margin-right: 0;}
.vip-serv{margin-bottom: 55px;}
.vip-serv .title{
	display: block;
	text-align: center;
	font-size: 24px;
	font-weight: 700;
	text-transform: uppercase;
	line-height: 31px;
	margin-bottom: 45px;}
.vip-serv .title span{color: #d34b2d;}
.vip-serv .form-wrp{
	display: block;
	background-color: #d34b2d;
	border: 1px solid #f7f7f7;
	-webkit-box-shadow: -1px 0px 0px 12px rgba(211, 75, 45, 1);
	-moz-box-shadow:    -1px 0px 0px 12px rgba(211, 75, 45, 1);
	box-shadow:         -1px 0px 0px 12px rgba(211, 75, 45, 1);
	padding: 45px 37px 37px 37px;
	margin: 0 12px;}
.vip-serv .row{display: block;overflow: hidden;margin-bottom: 10px;}
.vip-serv .row .item{
	background-color: #fff;
	border-radius: 60px;
	font-size: 16px;
	line-height: 19px;}
.vip-serv .row .name{
	float: left;
	width: 370px;
	padding-left: 30px;
	padding-right: 30px;}
.vip-serv .row .name span{height: 64px;display: table-cell;vertical-align: middle;}
.vip-serv .row .input-wrp{
	float: right;
	width: 180px;
	text-align: center;
	height: 42px;
	padding-top: 24px;
}
.vip-serv .row .input-wrp input{
	outline: none;
	margin-right: 13px;
	display: inline-block;
}
.vip-serv .total{
	display: block;
	width: 438px;
	margin: 0 auto;
	text-align: center;
	border: 1px solid #fff;
	font-size: 14px;
	font-weight: 700;
	color: #fff;
	text-transform: uppercase;
	margin-top: 28px;
	margin-bottom: 28px;р
}
.vip-serv .total span{
	display: inline-block;
	font-size: 21px;
	margin-left: 11px;
	padding-top: 21px;
	padding-bottom: 20px;
}
.vip-serv .submit{
	display: block;
	width: 183px;
	margin: 0 auto;
	text-transform: uppercase;
	color: #fff;
	background-color: #2e2e2e;
	outline: none;
	border: none;
	font-size: 16px;
	font-weight: 700;
	padding: 15px 0;
	border-radius: 40px;}
	
	
.overlay {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 10;
    display: none;
/* фон затемнения */
    background-color: rgba(0, 0, 0, 0.65);
    position: fixed; /* фиксированное поцизионирование */
    cursor: default; /* тип курсара */
}
/* активируем слой затемнения */
.overlay:target {
    display: block;
}
/* стили модального окна */
.popup {
    top: -100%;
    right: 0;
    left: 50%;
    font-size: 14px;
    z-index: 20;
    margin: 0;
    width: 85%;
    min-width: 320px;
    max-width: 700px;
/* фиксированное позиционирование, окно стабильно при прокрутке */
    position: fixed;
    padding: 15px;
    border: 1px solid #383838;
    background: #fefefe;
/* скругление углов */
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    font: 14px/18px 'Tahoma', Arial, sans-serif;
/* внешняя тень */
    -webkit-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -moz-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -ms-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -webkit-transform: translate(-50%, -500%);
    -ms-transform: translate(-50%, -500%);
    -o-transform: translate(-50%, -500%);
    transform: translate(-50%, -500%);
    -webkit-transition: -webkit-transform 0.6s ease-out;
    -moz-transition: -moz-transform 0.6s ease-out;
    -o-transition: -o-transform 0.6s ease-out;
    transition: transform 0.6s ease-out;
}
/* активируем модальный блок */
.overlay:target+.popup {
    -webkit-transform: translate(-50%, 0);
    -ms-transform: translate(-50%, 0);
    -o-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
    top: 5%;
}
/* формируем кнопку закрытия */
.close {
    top: -10px;
    right: -10px;
    width: 20px;
    height: 20px;
    position: absolute;
    padding: 0;
    border: 2px solid #ccc;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    -ms-border-radius: 15px;
    -o-border-radius: 15px;
    border-radius: 15px;
    background-color: rgba(61, 61, 61, 0.8);
    -webkit-box-shadow: 0px 0px 10px #000;
    -moz-box-shadow: 0px 0px 10px #000;
    box-shadow: 0px 0px 10px #000;
    text-align: center;
    text-decoration: none;
    font: 13px/20px 'Tahoma', Arial, sans-serif;
    font-weight: bold;
    -webkit-transition: all ease .8s;
    -moz-transition: all ease .8s;
    -ms-transition: all ease .8s;
    -o-transition: all ease .8s;
    transition: all ease .8s;
}
.close:before {
    color: rgba(255, 255, 255, 0.9);
    content: "X";
    text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
    font-size: 12px;
}
.close:hover {
    background-color: rgba(252, 20, 0, 0.8);
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);    
}
/* изображения внутри окна */
.popup img {
    width: 100%;
    height: auto;
}
/* миниатюры слева/справа */
.pic-left, 
.pic-right {
    width: 25%;
    height: auto;
}
.pic-left {
    float: left;
    margin: 5px 15px 5px 0;
}
.pic-right {
    float: right;
    margin: 5px 0 5px 15px;
}
/* элементы м-медиа, фреймы */
.popup embed, 
.popup iframe {
    top: 0;
    right: 0;
    bottom: 0; 
    left: 0; 
    display:block;
    margin: auto;
    width: 100%;
}
.popup h2 { /* заголовок 2 */
    margin: 0;
    color: #008000;
    padding: 5px 0px 10px;
    text-align: left;
    text-shadow: 1px 1px 3px #adadad;
    font-weight: 500;
    font-size: 1.4em;
    font-family: 'Tahoma', Arial, sans-serif;
    line-height: 1.3;
}
</style>


<!-- ----------------------------------------------------------------- !-->
<div class="wrap2">


		<div class="order">
			<h1>Listing order</h1>
			<p>We are glad to welcome you on the listing page of the <b> InvestLister.Com</b></p>
			<p>We guarantee high quality of services for promotion of your project, <br> due to our professionalism.</p>
		</div>

		<div class="wallets-wrp">
			<div class="wallets">
				<span class="title">Our wallets only:</span>
					<div class="item advcash"><img src="/images/msp.png" width="90" style="position: absolute;height:24px;top:8px;"><span style="color:red;"><?php echo $msp_account_id;?></span></div>
				<div class="item perfmoney"><img src="/images/p-money.png" style="position: absolute;height: 19px;top: 12px;"><span style="color:red;"><?php echo $pm_account_id;?></span></div>
				<div class="item payeer"><img src="/images/payeer.png" style="position: absolute;height: 18px;top: 11px;"><span style="color:red;"><?php echo $payeer_account_id;?></span></div>
			
				<div class="item bitcoin" style="font-size:13px;"><img src="/images/bitcoin.png"style="position: absolute;height:18px;top:10px;"><span style="color:red;"><?php echo $btc_account_id;?></span></div>
					<div class="item bitcoin" style="font-size:13px;"><img src="/images/adv.png"style="position: absolute;height:18px;top:10px;"><span style="color:red;"><?php echo $adv_account_id;?></span></div>
			</div>
			<p>We also use other payment systems. For any questions, please contact the contact information in the header of the site, we will be happy to listen to everyone!</p>
		</div>

		<div class="faq">
			<div class="text">
				<h3>Attention to project administrators:</h3>
				<p>Administrators <b> Fairmonitor.com </b> put the interests of depositors above their interests, so no investment project that causes suspicion - <br> will not get to us for monitoring. </p>
				<p> There is a well-coordinated team on our monitoring, and we do not have such that: if the admin has failed, we missed the "SCAM" project or a complaint against it. <br> We always show only current and most important honest information! </p>
<p> Adding a project takes up to 24 hours, video and text reviews up to 72 hours. </p>
				<table class="serv-table">
<tr>
 <td class="none"></td>
 
 <th>Activation</th>
 <th>Reinvestment</th>
 <th>Total Fee</th>
 <th>Add Program</th>
</tr>

<tr>
 <td><div class="name">HOT Listing</div></td>
 <td>$635.00</td>
 <td>$335.00</td>
 <td><b>$970.00</b></td>
 <td><a href="add.php?cat=1" class="ad-btn2">Add</a></td>

</tr>

 
 <tr>
 <td><div class="name">Trusted Listing</div></td>
 <td>$85.00</td>
 <td>$200.00</td>
 <td><b>$285.00</b></td>
 <td><a href="add.php?cat=2" class="ad-btn2">Add</a></td>

</tr>
<tr>
 <td><div class="name">Normal Listing</div></td>
 <td>$20.00</td>
 <td>$100.00</td>
 <td><b>$120.00</b></td>
 <td><a href="add.php?cat=3" class="ad-btn2">Add</a></td>

</tr>
 </table>
		</div>
<div class="site_content">
	<div align="center"><h1 style="color:green;"><span style="color:red;">HOT</span> Listing</h1></div>
	<div align="center" class="member_sidebar" style="width:700px;margin: auto;margin-bottom:15px;">
		<table width="100%" syle="">
			<tr>
															<td width="33%">
							<table width="70%" class="widget-tbl">
								<tr>
									
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Adding a project to the Hot section</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">We expose the maximum refback + bonuses to our referrals</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Contests of reposts and feedback of your project's news, for our referrals</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Set the status on aggregators</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Support for the project in 25 forums</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Newsletter about the project in the monitoring chat and on the mails of <br>the monitoring participants (over 1600 people)</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Target e-mail distribution on our databases (100,000 contacts)</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Banner 728x90 for 14 days as a gift</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Banner 160x600 for a week - as a gift</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Video review with voice and music</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Text review</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Open the project topics in the main investment forums</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Placing the project in our fixed topics on the forums</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Newsletter about the project on the monitoring channel Telegram</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Project news on Telegram channel monitoring</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Insurance of deposits in your project, with the amount  fund 200$</td>
										
										</tr>
											<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Special VIP status on all aggregators</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Post in our facebook group which have up to 10k Members</td>
										
										</tr>
												<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Daily payment proof posting on our investlister</td>
										
										</tr>
														
													
								</tr>
							</table>
						</td>
																				
							</table>
					
												</tr>
		</table>
	</div></div>


    
<div class="site_content">
	<div align="center"><h1 style="color:green;"><span style="color:red;">TRUSTED</span> Listing</h1></div>
	<div align="center" class="member_sidebar" style="width:700px;margin: auto;margin-bottom:15px;">
		<table width="100%" syle="">
			<tr>
															<td width="33%">
							<table width="70%" class="widget-tbl">
								<tr>
									
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Adding a project to the Trusted section</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">We expose the standard refback to our referrals</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Set the status on aggregators</td>
										
										</tr>
											<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Video review without voice only music</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Support for the project in 5 major forums</td>
										
										</tr>
									
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Banner 468x60 for 7 days as a gift</td>
										
										</tr>
									
									
									
									
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Post in our facebook group which have up to 10k Members</td>
										
										</tr>
												<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Daily payment proof posting on our investlister</td>
										
										</tr>
														
													
								</tr>
							</table>
						</td>
																				
							</table>
					
												</tr>
		</table>
	</div></div>

<div class="site_content">
	<div align="center"><h1 style="color:green;"><span style="color:red;">NORMAL</span> Listing</h1></div>
	<div align="center" class="member_sidebar" style="width:700px;margin: auto;margin-bottom:15px;">
		<table width="100%" syle="">
			<tr>
															<td width="33%">
							<table width="70%" class="widget-tbl">
								<tr>
									
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Adding a project to the Normal section</td>
										
										</tr>
										<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Support for the project in 1 major forum only here<font color="red"> www.alexearn.com</font></td>
										
										</tr>
											<tr class="titles">
											<td width="29" align="center"><img src="images/tick.png"></td>
											<td align="left">Daily payment proof posting on our investlister</td>
										
										</tr>
									
										
									
									
									
									
									
									
									
									
														
													
								</tr>
							</table>
						</td>
																				
							</table>
					
												</tr>
		</table>
	</div></div>





</div></div></div>




<?php
include ("footer.php");
?>