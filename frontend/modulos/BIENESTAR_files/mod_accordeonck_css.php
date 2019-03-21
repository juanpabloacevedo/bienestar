
/*--------------------------------------------
--	Simple theme Menu Accordeon CK			--
--	This is a simple theme with annotations	--
--	you can fill it like you want			--
--	to put your own CSS						--
--------------------------------------------*/

/* main UL container */
ul#accordeonck604 {
    /*padding: 5px;*/
    margin: 0 0 30px;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 0 none;
    border-radius: 0px;
    box-shadow: none;
padding: 0px;
}
ul#accordeonck604:hover {
background-color:#0084A1;
}
ul#accordeonck604:hover a {
color:#ffffff;
}
ul#accordeonck604 ul {
/*margin-left:-7px;*/
}
ul#accordeonck604 ul:hover{
background-color:#11A6C5;
}

ul#accordeonck604 li a.isactive, ul#accordeonck604 li a:hover, ul#accordeonck604 li ul li ul li a.isactive, ul#accordeonck604 li ul li ul li a:hover {
color:#fff;

}
ul#accordeonck604 li ul li ul:hover{
background-color:#008F9B;
}
ul#accordeonck604 li ul li a.isactive, ul#accordeonck604 li ul li a:hover {
/*color:#111;*/
 font-style: oblique;
}
ul#accordeonck604 li ul li ul li a.isactive{
font-style: oblique;
}
/* style for all links */
ul#accordeonck604 li {
    border-bottom: 1px dotted #ddd;
    margin: 0 0 0 0px;
    text-align: left;
    list-style: none;
    color: #666;
	background: none;
	
}
ul#accordeonck604 li a {
    padding-top:5px;
padding-bottom:5px;
	
}



ul#accordeonck604 li:hover, ul#accordeonck604 li.active {
    background-color: #11A6C5;
    /*border: 1px solid #ffffff;*/
    /*border-radius: 0px 25px ;*/
    /*padding:7px 0px 7px 7px;*/
       margin-top: 0px;
    color:#fff;
}

ul#accordeonck604 li ul li:hover, ul#accordeonck604 li ul li.active {
        background-color: #008F9B;
    border: medium none;
    border-radius: 0px;
    color: #ccc;
    margin: 0px;
    
    
}
ul#accordeonck604 li ul li ul {
backgrund-color:#008F9B;
}
ul#accordeonck604 li ul li ul li:hover, ul#accordeonck604 li ul li ul li.active {
background-color: #05687e;
    /*border: 1px solid #ffffff;*/
    border-radius: 0 0px;
    color:#fff;
}
ul#accordeonck604 li ul li a.active {
color:#fff;
}

ul#accordeonck604 li a span.active, ul#accordeonck604 li a:hover, ul#accordeonck604 li a.active,{
    color:#fff;
}




/* style for all links from the second level */
ul#accordeonck604 li ul li {
    list-style-type :none;
    margin: 0 0 0 0px;
	border-bottom: none;
	border-top: 1px dotted #ddd;
}

/* style for all anchors */
ul#accordeonck604 li a {
    margin: 0;
    color: #555;
    text-align: left;
    display: block;
    padding-bottom: 7px;
    padding-left: 15px;
    padding-right: 4px;
    padding-top: 7px;
    text-decoration: none;
	background: none;
	font-family: archivo narrow;
}



ul#accordeonck604 li.active >ul  li a{
color:#fff;
}
ul#accordeonck604 li.hover >ul  li a{
color:#fff;
}


/* style for all anchors on mouseover */
ul#accordeonck604 ul li a:focus {
    
}

/* style for all link descriptions */
ul#accordeonck604 li a span.accordeonckdesc {
	display: block;
}