<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Guide touristique d'Espagne</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
$background--color:#1e2023;
$icon--color:#1e2023;
$font--color:#ffffff;
$font--color--active:#000000;
$font--primary:'Fira Sans', sans-serif;
$transition--length: .8;

body{
	background-color: $background--color;
	font-family: $font--primary;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.site-content{
	max-width: 1100px;
	height: 100vh;
	margin-left: auto;
	margin-right: auto;
	display: flex;
	align-items: center;
	justify-content: center;
	&__headline{
		font-weight: 200;
		color: $font--color;
		font-size: calc(2vw + 10px);
	}
}

//default state
.menu-icon{
	$size: 30px;
	height: $size;
	width: $size;
	position: fixed;
	z-index:2;
	left: 50px;
	top: 30px;
	cursor: pointer;
	&__line{
		height: 2px;
		width: $size;
		display: block;
		background-color: $font--color;
		margin-bottom: 4px;
		transition: transform .2s ease, background-color .5s ease;
	}
	&__line-left{
		width: $size / 2;
	}
	&__line-right{
		width: $size / 2;
		float: right;
	}
}

.nav{
	$width: 100vw;
	$height: 100vh;
	$font--size--calc: calc(2vw + 10px);
	$transition--easing: cubic-bezier(.77,0,.175,1);
	position: fixed;
	z-index:1;
	&:before,&:after{
		content: "";
		position: fixed;
		width:$width;
		height:$height;
		background: rgba(#eaeaea, .2);
		z-index: -1;
		transition: transform $transition--easing $transition--length + s;
		transform: translateX(0%) translateY(-100%);
	}
	&:after{
		background: rgba(#ffffff, 1);
		transition-delay: 0s;
	}
	&:before{
		transition-delay: .1s;
	}
	&__content{
		position: fixed;
		top:50%;
		transform: translate(0%,-50%);
		width: 100%;
    	text-align: center;
		font-size: $font--size--calc;
		font-weight: 200;
		cursor: pointer;
	}
	&__list-item{
		position: relative;
		display: inline-block;
		transition-delay: $transition--length + s;
		opacity: 0;
		transform: translate(0%, 100%);
		transition: opacity .2s ease, transform .3s ease;
		margin-right: 25px;
		&:before{
			content: "";
			position: absolute;
			background: $font--color--active;
			width: 20px;
			height: 1px;
			top: 100%;
			transform: translate(0%, 0%);
			transition: all .3s ease;
			z-index: -1;
		}
		&:hover{
			&:before{
				width: 100%;
			}
		}
	}
}

//active state
body.nav-active{
	$menu--items--count: 4;
	.menu-icon{
		&__line{
			background-color: #000;
			transform: translateX(0px) rotate(-45deg);
		}
		&__line-left{
			transform: translateX(1px) rotate(45deg);
		}
		&__line-right{
			transform: translateX(-2px) rotate(45deg);
		}
	}
	.nav{
		visibility:visible;
		&:before,&:after{
			transform: translateX(0%) translateY(0%);
		}
		&:after{
			transition-delay: .1s;
		}
		&:before{
			transition-delay: 0s;
		}
		&__list-item{
			opacity: 1;
			transform: translateX(0%);
			transition: opacity .3s ease, transform .3s ease, color .3s ease;
			@for $i from 0 through $menu--items--count {
				&:nth-child(#{$i}){
					transition-delay: $transition--length * $i / 8 + .5 + s;
				}
			}
		}
	}
}


        </style>

<div class="menu-icon">
	<span class="menu-icon__line menu-icon__line-left"></span>
	<span class="menu-icon__line"></span>
	<span class="menu-icon__line menu-icon__line-right"></span>
</div>

<div class="nav">
	<div class="nav__content">
		<ul class="nav__list">
        <li><a href="/"> Accueil </a></li>
        <li><a href="/a-propos"> À propos </a></li>
        <li><a href="/ag"> Liste des audioguides </a></li>
		</ul>
	</div>
</div>
</head>
<script>
console.clear();

const app = (() => {
	let body;
	let menu;
	let menuItems;
	
	const init = () => {
		body = document.querySelector('body');
		menu = document.querySelector('.menu-icon');
		menuItems = document.querySelectorAll('.nav__list-item');

		applyListeners();
	}
	
	const applyListeners = () => {
		menu.addEventListener('click', () => toggleClass(body, 'nav-active'));
	}
	
	const toggleClass = (element, stringClass) => {
		if(element.classList.contains(stringClass))
			element.classList.remove(stringClass);
		else
			element.classList.add(stringClass);
	}
	
	init();
})();

</script>
<div>
    @yield('content')
</div>