<style type="text/css">

	html{
		scroll-behavior: smooth;
	}

*{ 
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	 /*font-family: 'Sigmar One', cursive;*/ 
}



.row{
	margin-left: 0!important;
	margin-right: 0!important;
}


.nav_style{
	background-color: #a29bfe !important;

}
	
.nav_style a{
	color: white;
}

/* main Header */
.main-header{
	height: 450px;
	width: 100%;
}

.right-side h1{
	font-size: 3rem;
}

.covid img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0%{transform : rotate(0);}
	100%{transform :rotate(360deg);}
}

.left-side img{
	animation: heartbeat 5s linear infinite;

}

@keyframes heartbeat
{
	0%{
		transform: scale(.75);
	}

	20%{
		transform: scale(1);
	}

	40%{
		transform: scale(.75);
	}

	60%{
		transform: scale(1);
	}

	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(.75);
	}

}

.corona_update{
	margin: 0 0 30px 0;
}




.corona_update h1{
	font-size: 2rem;
	text-align: center;
}

.sub_section{
	background-color: #fbfafd;
}

/* footer */
.footer_style{
	background-color: slategrey!important;

}

.footer_style{
	margin-bottom: 0!important
}

/*-------Responsive-------*/


@media(max-width: 768px){
	.main-header{
		height: 700px;
		text-align: center;
	}

	.main-header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}

	.count_style{
		display: inline!important;

	}

	.count_style p{
		text-align: center;
	}

	.img_res{
		margin-left: 0!important;
	}

	

	
}



</style>