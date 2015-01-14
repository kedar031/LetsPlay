/**************************************
 * THEME NAME: cafelite
 *
 * Files included in this sheet:
 *
 *   cafelite/cafelite.css
 **************************************/

/***** cafelite/cafelite.css start *****/

/*********************
 * moodle café theme *
 *********************/


/**************
 * core: body *	
 **************/

body {
	background-color: #FFFFEE;
	color:#310;
	font-family: "arial unicode ms", arial, helvetica, sans-serif;
        font-size : 10pt;
        text-align: center;
}

a:link,
a:visited {
        color:#630;
	text-decoration: none;
}

a:hover {
    color: #c60;
	text-decoration: none;
	
}

a.dimmed:link,
a.dimmed:visited {
	color:#aaaaaa;
	text-decoration: none;

}

#page {
	border: 5px solid #ffe;
	width: 95%;
	margin: 0 auto;
	text-align: left;
	background: #ffe url(img/bghead.jpg) repeat-x left top;
}


#layout-table {
	margin-top: 20px;
	padding-top: 10px;
}

#layout-table #middle-column{
  vertical-align:top;
  padding: 0 10px;
}

#layout-table #left-column{
  vertical-align:top;
  padding-left:5px;
  padding-right:0px;
}

#layout-table #right-column{
  vertical-align:top;
  padding-left:0px;
  padding-right:5px;
}


#content {
    background-color: #ffe; 
    margin-top:0;
	padding-top:10px;

}

h1.main,
h2.main,
h3.main,
h4.main,
h5.main,
h6.main {
	text-align: center;
	margin:0px;
	padding-top:10px;
	padding-bottom:10px;
}

th.header,
td.header,
h1.header,
h2.header,
h3.header,
div.header {     
    background: #ffe url(img/headgrad.jpg) top repeat-x; 
	border-top: gray 1px dashed;
	border-left: 0px;
	border-right: 0px;
	border-bottom: 1px;
	color: #c60;
}

.generalbox {
    background: transparent; 
	border: 0px;
}

/****************
 * core: header *
 ****************/

#header, #header-home {
        width: 100%;
	height: 135px;
	background: url(img/header.jpg) no-repeat left top;
	margin: 0;
	padding: 0;
	
}

#logo { 
	background: url(img/logo.png) no-repeat left top;
	width: 222px;
	height: 105px;
	float: left;
	left: 0px;
} 
#coursemenubar{ 
	background-color: #ffe; 
	position: relative; 
	top: 30px; 
	width: 100%; 
	height: 2em;
	line-height: 1.5em;
	float: left;
	font-size: 80%;
	text-transform: titlecase;
}
#cafelite-menu-bar { 
	background-color: #300; 
	position: relative; 
	top: 30px; 
	width: 100%; 
	height: 1.5em;
	line-height: 1.5em;
	float: left;
	font-size: 80%;
	text-transform: uppercase;
}


#cafelite-menu-bar ul.loginlogout {
	float: right; 
	text-align: right; 
	margin: 0 5px; 
	padding: 0; 
}

#cafelite-menu-bar ul.loginlogout li {
	display: inline; 
	margin: 0 10px;
	padding: 0;
	list-style-type: none;
}

#cafelite-menu-bar ul.date,
#cafelite-menu-bar ul.langopt {
        margin: 0 5px;
        padding: 0;
}


#cafelite-menu-bar ul.date,
#cafelite-menu-bar ul.langopt {
	float: left; 
	text-align: left; 
	list-style-type: none;
}

#cafelite-menu-bar a:link, 
#cafelite-menu-bar a:visited,
.breadcrumb ul a:link, 
.breadcrumb ul a:visited { 
        color: #ffe;
        text-decoration: none;
}

#cafelite-menu-bar a:hover,
#cafelite-menu-bar a:active,
.breadcrumb ul a:hover, 
.breadcrumb ul a:active { 
	color: #c60;
        text-decoration: none;	
}


form.popupform label {
  padding: 0;
  margin: 0;
}



 
 /****************
  * core: navbar *
  ****************/

.navbar {
        background:#ffe url('img/navbar.jpg') repeat-y;     
	border-top:0px;
	border-bottom:solid 1px #ffe;
	border-left:0px;
	border-right:0px;
	margin-top: 30px;
	font-size: 80%;
}


/****************
 * core: footer *
 ****************/



#footer {
        height: 2em;        
	background: #ffe url(img/headgrad.jpg) left top repeat-x;
	margin-top: 10px;
	padding: 10px;
	border-top: 1px dashed #ffe;
	border-left: 0px none;
	border-right: 0px none ;
	border-bottom: 0px none;
	color: #300;
}

#footer-lt, #footer-rt { 
	width: 400px;
	margin: 0;
        padding: 0; 
}

#footer-lt { float: left; text-align: left;}
#footer-rt { float: right; text-align: right; }

#footer-rt p.copyright,
#footer-lt .logininfo { 
	padding: 0; 
	margin: 0; 
	line-height: 2em; 
	font-size: 0.8em; 
}




/********************
 * core: side block *
 ********************/

.sideblock {
	color: #310;
	border-top: 1px dashed #ffe;
	border-left: 0 none;
	border-right: 0 none;
	border-bottom: 1px dashed #c60;
  	background: url('img/headgrad.jpg') repeat-x;
}

.sideblock .content {
	color: #310;
	padding: 4px;
	border: 0px;
}

.sideblock .header h2 {
	padding-top: 4px;

 }

.sideblock .header .hide-show-image {
	padding-top: 4px;
}
 
.sideblock .footer {
	border:0px;
	margin-top: 4px;
	margin-bottom: 4px;
	font-size:0.85em;
	text-align: left;
}

.sideblock .header, .sideblock .header h2 {
	color: #c60;
	font-size:1em;
	border: 0px;
  	background-color: transparent;
}



.sideblock .content .post .head .date,
.sideblock .content .post .head .name {
	color: #310;
}


/****************
 * core: course *	
 ****************/

.coursebox {
	background: #fff;
	border: 0px;    
	margin-bottom: 0px;
	margin-right: 2px;
}

body#site-index .headingblock,
body#course-view .headingblock {
	margin-bottom: 0px;
}

.section {
	background: #ffe;
}

#course-view .section td.content {
	border-top:0px;
	border-left:0px;
	border-right:0px;
	border-bottom:1px dashed #c60;
}

#course-view .section td.side {
        border-width:0px;
}

/******************
 * modules: forum *	
 ******************/


.forumpost {
	border: 0px;    
	width: auto;
	overflow: hidden;
}

.forumpost .left {
	background-color:#ffe;
        background-image: none;
}

.forumpost .picture,
.forumpost .topic {
	background-color: #ffe;
	background-image: none;
	border:0px;
}

.forumpost .topic a:link,
.forumpost .topic a:visited {
}

.forumpost img {
  max-width: 100%;
}

/*********************
 * modules: calendar *	
 *********************/


#calendar .event_global,
.minicalendar .event_global,
.block_calendar_month .event_global {
	border-color:#c60;
	background-color:#ffe;
}

#calendar .event_course,
.minicalendar .event_course,
.block_calendar_month .event_course {
  	border-color:#c90;
  	background-color:#ffe;
}

#calendar .event_group,
.minicalendar .event_group,
.block_calendar_month .event_group {
 	border-color:#ffe !important;
 	background-color:#c60;
}

#calendar .event_user,
.minicalendar .event_user,
.block_calendar_month .event_user {
  	border-color:#c69 !important;
  	background-color:#ffe;
}

#calendar .nottoday, .minicalendar .today {
        border:1px solid;
        color: #c60;
        font-weight: bold;
}

table.minicalendar { font-size: 80%;}

table.minicalendar tr td.weekend {
  	color: #c60;
  }
  
.tabrow0 .here a:link, .tabrow0 .here a:visited, .tabrow0 .here a.nolink {
position:relative;
z-index: 1;
}

.headingblock, h2.headingblock { 
         background:#FFFFEE url('../images/navbar.jpg') repeat-y;
         color: #97694F !important;
         font-size: 150%;
         font-weight: lighter;
         text-transform: uppercase;
		 
		 
         
}/***** cafelite/cafelite.css end *****/

