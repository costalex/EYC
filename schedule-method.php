<!DOCTYPE html>
<html>
<head>
  <!--<title id='Description'>jqxScheduler widget displays a set of Appointments in Day, Week, Month, Timeline Day, Timeline Week and Timeline Month views</title>-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EYC - Schedule and Method</title>
  <meta name="description" content="150 youth leaders will meet at the European Parliament in Strasbourg from 9-12 March for the European Youth Convention to write a European Constitution.">
  <meta name="keywords" content="union constitution european youth convention strasbourg">
  <meta property="title" content="The European Youth Convention" />
  <meta property="og:title" content="The European Youth Convention" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="150 youth leaders will meet at the European Parliament in Strasbourg from 9-12 March for the European Youth Convention to write a European Constitution."/>
  <meta property="og:image" content="http://www.youthconvention.eu/images/pe-je-2015-127.JPG" />
  <meta property="og:url" content="http://www.youthconvention.eu/"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet"  type="text/css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link href="bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/scripts/demos.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdate.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscheduler.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscheduler.api.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcheckbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxdropdownlist.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxnumberinput.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxradiobutton.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxinput.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/globalization/globalize.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/globalization/globalize.culture.de-DE.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var appointments = new Array();
            var appointment1 = {
                id: "id1",
                background: "#fff",
                color: "#000",
                location: "Plenary",
                subject: "Opening Ceremony",
                calendar: "Plenary",
                start: new Date(2017, 02, 09, 12, 0, 0),
                end: new Date(2017, 02, 09, 13, 45, 0)
            }
            var appointment2 = {
                id: "id2",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 09, 13, 45, 0),
                end: new Date(2017, 02, 09, 14, 0, 0)
            }
            var appointment4 = {
                id: "id4",
                background: "#FF0000",
                location: "Room A",
                subject: "Red",
                calendar: "Room A",
                start: new Date(2017, 02, 09, 14, 00, 0),
                end: new Date(2017, 02, 09, 15, 0, 0)
            }
            var appointment3 = {
                id: "id3",
                background: "#fff",
                color: "#000",
                location: "Room B",
                subject: "White",
                calendar: "Room B",
                start: new Date(2017, 02, 09, 14, 00, 0),
                end: new Date(2017, 02, 09, 15, 0, 0)
            }
            var appointment5 = {
                id: "id5",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 09, 15, 00, 0),
                end: new Date(2017, 02, 09, 15, 15, 0)
            }
            var appointment6 = {
                id: "id6",
                background: "#000",
                color: "#fff",
                location: "Room A",
                subject: "Black",
                calendar: "Room A",
                start: new Date(2017, 02, 09, 15, 15, 0),
                end: new Date(2017, 02, 09, 16, 10, 0)
            }
            var appointment7 = {
                id: "id7",
                background: "#00CCFF",
                location: "Room B",
                subject: "Light Blue",
                calendar: "Room B",
                start: new Date(2017, 02, 09, 15, 15, 0),
                end: new Date(2017, 02, 09, 16, 15, 0)
            }
            var appointment8 = {
                id: "id8",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 09, 16, 15, 0),
                end: new Date(2017, 02, 09, 16, 30, 0)
            }
            var appointment9 = {
                id: "id9",
                background: "#FF944B",
                location: "Room A",
                subject: "Orange",
                calendar: "Room A",
                start: new Date(2017, 02, 09, 16, 30, 0),
                end: new Date(2017, 02, 09, 17, 30, 0)
            }
            var appointment10 = {
                id: "id10",
                background: "#993300",
                location: "Room B",
                subject: "Brown",
                calendar: "Room B",
                start: new Date(2017, 02, 09, 16, 30, 0),
                end: new Date(2017, 02, 09, 17, 30, 0)
            }
            var appointment11 = {
                id: "id11",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 09, 17, 30, 0),
                end: new Date(2017, 02, 09, 17, 45, 0)
            }
            var appointment12 = {
                id: "id12",
                background: "#008800",
                location: "Room A",
                subject: "Green",
                calendar: "Room A",
                start: new Date(2017, 02, 09, 17, 45, 0),
                end: new Date(2017, 02, 09, 18, 45, 0)
            }
            var appointment13 = {
                id: "id13",
                background: "#FFFF02",
                color: "#000",
                location: "Room B",
                subject: "Yellow",
                calendar: "Room B",
                start: new Date(2017, 02, 09, 17, 45, 0),
                end: new Date(2017, 02, 09, 18, 45, 0)
            }
            var appointment14 = {
                id: "id14",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 09, 18, 45, 0),
                end: new Date(2017, 02, 09, 19, 00, 0)
            }
            var appointment16 = {
                id: "id16",
                background: "#FFCC01",
                color: "#000",
                location: "Room A",
                subject: "Gold",
                calendar: "Room A",
                start: new Date(2017, 02, 09, 19, 00, 0),
                end: new Date(2017, 02, 09, 20, 00, 0)
            }
            var appointment15 = {
                id: "id15",
                background: "#000080",
                color: "#fff",
                location: "Room B",
                subject: "Dark Blue",
                calendar: "Room B",
                start: new Date(2017, 02, 09, 19, 00, 0),
                end: new Date(2017, 02, 09, 20, 00, 0)
            }
            var appointment17 = {
                id: "id17",
                background: "#B4DAFF",
                location: "Hotel du Département",
                subject: "Dinner",
                calendar: "Meals",
                start: new Date(2017, 02, 09, 20, 00, 0),
                end: new Date(2017, 02, 09, 21, 30, 0)
            }

            //** FRIDAY **/

            var appointment18 = {
                id: "id18",
                background: "#C0C0C0",
                color: "#000",
                location: "Room A",
                subject: "Silver",
                calendar: "Room A",
                start: new Date(2017, 02, 10, 8, 30, 0),
                end: new Date(2017, 02, 10, 9, 30, 0)
            }
            var appointment19 = {
                id: "id19",
                background: "#800180",
                color: "#fff",
                location: "Room B",
                subject: "Purple",
                calendar: "Room B",
                start: new Date(2017, 02, 10, 8, 30, 0),
                end: new Date(2017, 02, 10, 9, 30, 0)
            }
            var appointment20 = {
                id: "id20",
                background: "#fff",
                color: "#000",
                location: "Foyer",
                subject: "Visual Applause",
                calendar: "Foyer",
                start: new Date(2017, 02, 10, 9, 30, 0),
                end: new Date(2017, 02, 10, 11, 00, 0)
            }
            var appointment21 = {
                id: "id21",
                background: "#FF0000",
                location: "Room A",
                subject: "Red",
                calendar: "Room A",
                start: new Date(2017, 02, 10, 11, 00, 0),
                end: new Date(2017, 02, 10, 12, 00, 0)
            }
            var appointment22 = {
                id: "id22",
                background: "#fff",
                color: "#000",
                location: "Room B",
                subject: "White",
                calendar: "Room B",
                start: new Date(2017, 02, 10, 11, 00, 0),
                end: new Date(2017, 02, 10, 12, 00, 0)
            }
            var appointment23 = {
                id: "id23",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 10, 12, 00, 0),
                end: new Date(2017, 02, 10, 12, 15, 0)
            }
            var appointment25 = {
                id: "id25",
                background: "#000",
                color: "#fff",
                location: "Room A",
                subject: "Black",
                calendar: "Room A",
                start: new Date(2017, 02, 10, 12, 15, 0),
                end: new Date(2017, 02, 10, 13, 15, 0)
            }
            var appointment24 = {
                id: "id24",
                background: "#00CCFF",
                location: "Room B",
                subject: "Light Blue",
                calendar: "Room B",
                start: new Date(2017, 02, 10, 12, 15, 0),
                end: new Date(2017, 02, 10, 13, 15, 0)
            }
            var appointment26 = {
                id: "id26",
                background: "#B4DAFF",
                location: "Restaurant",
                subject: "Lunch",
                calendar: "Meals",
                start: new Date(2017, 02, 10, 13, 15, 0),
                end: new Date(2017, 02, 10, 14, 00, 0)
            }
            var appointment27 = {
                id: "id27",
                background: "#FF944B",
                location: "Room A",
                subject: "Orange",
                calendar: "Room A",
                start: new Date(2017, 02, 10, 14, 00, 0),
                end: new Date(2017, 02, 10, 15, 00, 0)
            }
            var appointment28 = {
                id: "id28",
                background: "#993300",
                location: "Room B",
                subject: "Brown",
                calendar: "Room B",
                start: new Date(2017, 02, 10, 14, 00, 0),
                end: new Date(2017, 02, 10, 15, 00, 0)
            }
            var appointment29 = {
                id: "id29",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 10, 15, 00, 0),
                end: new Date(2017, 02, 10, 15, 15, 0)
            }
            var appointment30 = {
                id: "id30",
                background: "#008800",
                location: "Room A",
                subject: "Green",
                calendar: "Room A",
                start: new Date(2017, 02, 10, 15, 15, 0),
                end: new Date(2017, 02, 10, 16, 15, 0)
            }
            var appointment31 = {
                id: "id31",
                background: "#FFFF02",
                color: "#000",
                location: "Room B",
                subject: "Yellow",
                calendar: "Room B",
                start: new Date(2017, 02, 10, 15, 15, 0),
                end: new Date(2017, 02, 10, 16, 15, 0)
            }
            var appointment32 = {
                id: "id32",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 10, 16, 15, 0),
                end: new Date(2017, 02, 10, 16, 30, 0)
            }
            var appointment33 = {
                id: "id33",
                background: "#FFCC01",
                color: "#000",
                location: "Room A",
                subject: "Gold",
                calendar: "Room A",
                start: new Date(2017, 02, 10, 16, 30, 0),
                end: new Date(2017, 02, 10, 17, 30, 0)
            }
            var appointment34 = {
                id: "id34",
                background: "#000080",
                color: "#fff",
                location: "Room B",
                subject: "Dark Blue",
                calendar: "Room B",
                start: new Date(2017, 02, 10, 16, 30, 0),
                end: new Date(2017, 02, 10, 17, 30, 0)
            }
            var appointment35 = {
                id: "id35",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 10, 17, 30, 0),
                end: new Date(2017, 02, 10, 17, 45, 0)
            }
            var appointment36 = {
                id: "id36",
                background: "#C0C0C0",
                color: "#000",
                location: "Room A",
                subject: "Silver",
                calendar: "Room A",
                start: new Date(2017, 02, 10, 17, 45, 0),
                end: new Date(2017, 02, 10, 18, 45, 0)
            }
            var appointment37 = {
                id: "id37",
                background: "#800180",
                color: "#fff",
                location: "Room B",
                subject: "Purple",
                calendar: "Room B",
                start: new Date(2017, 02, 10, 17, 45, 0),
                end: new Date(2017, 02, 10, 18, 45, 0)
            }
            var appointment38 = {
                id: "id38",
                background: "#fff",
                color: "#000",
                location: "",
                subject: "Transfer to evening venue",
                calendar: "Transfer",
                start: new Date(2017, 02, 10, 18, 45, 0),
                end: new Date(2017, 02, 10, 19, 15, 0)
            }
            var appointment39 = {
                id: "id39",
                background: "#B4DAFF",
                location: "Contemporary Museum of Strasbourg",
                subject: "Dinner",
                calendar: "Meals",
                start: new Date(2017, 02, 10, 19, 15, 0),
                end: new Date(2017, 02, 10, 21, 30, 0)
            }
            var appointment40 = {
                id: "id40",
                background: "#fff",
                color: "#000",
                location: "Foyer",
                subject: "Visual Applause",
                calendar: "Foyer",
                start: new Date(2017, 02, 11, 9, 00, 0),
                end: new Date(2017, 02, 11, 10, 30, 0)
            }
            var appointment41 = {
                id: "id41",
                background: "#FF0000",
                location: "Room A",
                subject: "Red",
                calendar: "Room A",
                start: new Date(2017, 02, 11, 10, 30, 0),
                end: new Date(2017, 02, 11, 11, 45, 0)
            }
            var appointment42 = {
                id: "id42",
                background: "#fff",
                color: "#000",
                location: "Room B",
                subject: "White",
                calendar: "Room B",
                start: new Date(2017, 02, 11, 10, 30, 0),
                end: new Date(2017, 02, 11, 11, 45, 0)
            }
            var appointment43 = {
                id: "id43",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 11, 11, 45, 0),
                end: new Date(2017, 02, 11, 12, 00, 0)
            }
            var appointment44 = {
                id: "id44",
                background: "#000",
                color: "#fff",
                location: "Room A",
                subject: "Black",
                calendar: "Room A",
                start: new Date(2017, 02, 11, 12, 00, 0),
                end: new Date(2017, 02, 11, 13, 00, 0)
            }
            var appointment45 = {
                id: "id45",
                background: "#00CCFF",
                location: "Room B",
                subject: "Light Blue",
                calendar: "Room B",
                start: new Date(2017, 02, 11, 12, 00, 0),
                end: new Date(2017, 02, 11, 13, 00, 0)
            }
            var appointment46 = {
                id: "id46",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 11, 13, 00, 0),
                end: new Date(2017, 02, 11, 13, 15, 0)
            }
            var appointment47 = {
                id: "id47",
                background: "#FF944B",
                location: "Room A",
                subject: "Orange",
                calendar: "Room A",
                start: new Date(2017, 02, 11, 13, 15, 0),
                end: new Date(2017, 02, 11, 14, 30, 0)
            }
            var appointment48 = {
                id: "id48",
                background: "#993300",
                location: "Room B",
                subject: "Brown",
                calendar: "Room B",
                start: new Date(2017, 02, 11, 13, 15, 0),
                end: new Date(2017, 02, 11, 14, 30, 0)
            }
            var appointment49 = {
                id: "id49",
                background: "#B4DAFF",
                location: "Restaurant",
                subject: "Lunch",
                calendar: "Meals",
                start: new Date(2017, 02, 11, 14, 30, 0),
                end: new Date(2017, 02, 11, 15, 30, 0)
            }
            var appointment51 = {
                id: "id51",
                background: "#008800",
                location: "Room A",
                subject: "Green",
                calendar: "Room A",
                start: new Date(2017, 02, 11, 15, 30, 0),
                end: new Date(2017, 02, 11, 16, 45, 0)
            }
            var appointment50 = {
                id: "id50",
                background: "#FFFF02",
                color: "#000",
                location: "Room B",
                subject: "Yellow",
                calendar: "Room B",
                start: new Date(2017, 02, 11, 15, 30, 0),
                end: new Date(2017, 02, 11, 16, 45, 0)
            }
            var appointment52 = {
                id: "id52",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 11, 16, 45, 0),
                end: new Date(2017, 02, 11, 17, 0, 0)
            }
            var appointment53 = {
                id: "id53",
                background: "#FFCC01",
                color: "#000",
                location: "Room A",
                subject: "Gold",
                calendar: "Room A",
                start: new Date(2017, 02, 11, 17, 0, 0),
                end: new Date(2017, 02, 11, 18, 15, 0)
            }
            var appointment54 = {
                id: "id54",
                background: "#000080",
                color: "#fff",
                location: "Room B",
                subject: "Dark Blue",
                calendar: "Room B",
                start: new Date(2017, 02, 11, 17, 0, 0),
                end: new Date(2017, 02, 11, 18, 15, 0)
            }
            var appointment55 = {
                id: "id55",
                background: "#B4DAFF",
                color: "#000",
                location: "",
                subject: "Coffee Break",
                calendar: "Coffee Break",
                start: new Date(2017, 02, 11, 18, 15, 0),
                end: new Date(2017, 02, 11, 18, 30, 0)
            }
            var appointment56 = {
                id: "id56",
                background: "#C0C0C0",
                color: "#000",
                location: "Room A",
                subject: "Silver",
                calendar: "Room A",
                start: new Date(2017, 02, 11, 18, 30, 0),
                end: new Date(2017, 02, 11, 19, 30, 0)
            }
            var appointment57 = {
                id: "id57",
                background: "#800180",
                color: "#fff",
                location: "Room B",
                subject: "Purple",
                calendar: "Room B",
                start: new Date(2017, 02, 11, 18, 30, 0),
                end: new Date(2017, 02, 11, 19, 30, 0)
            }
            var appointment58 = {
                id: "id58",
                background: "#fff",
                color: "#000",
                location: "",
                subject: "Transfer to evening venue",
                calendar: "Transfer",
                start: new Date(2017, 02, 11, 19, 30, 0),
                end: new Date(2017, 02, 11, 20, 0, 0)
            }
            var appointment59 = {
                id: "id59",
                background: "#B4DAFF",
                location: "",
                subject: "Farewell Party",
                calendar: "Meals",
                start: new Date(2017, 02, 11, 20, 0, 0),
                end: new Date(2017, 02, 11, 22, 0, 0)
            }
            var appointment60 = {
                id: "id60",
                background: "#fff",
                color: "#000",
                location: "Plenary",
                subject: "Discussion and final voting on Constitution",
                calendar: "Plenary",
                start: new Date(2017, 02, 12, 9, 0, 0),
                end: new Date(2017, 02, 12, 14, 0, 0)
            }
            var appointment61 = {
                id: "id61",
                background: "#fff",
                color: "#000",
                location: "",
                subject: "End Syntegration®",
                calendar: "",
                start: new Date(2017, 02, 12, 14, 0, 0),
                end: new Date(2017, 02, 12, 14, 30, 0)
            }

            appointments.push(appointment1);
            appointments.push(appointment2);
            appointments.push(appointment3);
            appointments.push(appointment4);
            appointments.push(appointment5);
            appointments.push(appointment6);
            appointments.push(appointment7);
            appointments.push(appointment8);
            appointments.push(appointment9);
            appointments.push(appointment10);
            appointments.push(appointment11);
            appointments.push(appointment12);
            appointments.push(appointment13);
            appointments.push(appointment14);
            appointments.push(appointment15);
            appointments.push(appointment16);
            appointments.push(appointment17);
            appointments.push(appointment18);
            appointments.push(appointment19);
            appointments.push(appointment20);
            appointments.push(appointment21);
            appointments.push(appointment22);
            appointments.push(appointment23);
            appointments.push(appointment24);
            appointments.push(appointment25);
            appointments.push(appointment26);
            appointments.push(appointment27);
            appointments.push(appointment28);
            appointments.push(appointment29);
            appointments.push(appointment30);
            appointments.push(appointment31);
            appointments.push(appointment32);
            appointments.push(appointment33);
            appointments.push(appointment34);
            appointments.push(appointment35);
            appointments.push(appointment36);
            appointments.push(appointment37);
            appointments.push(appointment38);
            appointments.push(appointment39);
            appointments.push(appointment40);
            appointments.push(appointment41);
            appointments.push(appointment42);
            appointments.push(appointment43);
            appointments.push(appointment44);
            appointments.push(appointment45);
            appointments.push(appointment46);
            appointments.push(appointment47);
            appointments.push(appointment48);
            appointments.push(appointment49);
            appointments.push(appointment50);
            appointments.push(appointment51);
            appointments.push(appointment52);
            appointments.push(appointment53);
            appointments.push(appointment54);
            appointments.push(appointment55);
            appointments.push(appointment56);
            appointments.push(appointment57);
            appointments.push(appointment58);
            appointments.push(appointment59);
            appointments.push(appointment60);
            appointments.push(appointment61);


            // prepare the data
            var source =
            {
                dataType: "array",
                dataFields: [
                    { name: 'id', type: 'string' },
                    { name: 'background', type: 'string' },
                    { name: 'color', type: 'string' },
                    { name: 'description', type: 'string' },
                    { name: 'location', type: 'string' },
                    { name: 'subject', type: 'string' },
                    { name: 'calendar', type: 'string' },
                    { name: 'start', type: 'date' },
                    { name: 'end', type: 'date' }
                ],
                id: 'id',
                localData: appointments
            };
            var adapter = new $.jqx.dataAdapter(source);
            $("#scheduler").jqxScheduler({
                date: new $.jqx.date(2017, 03, 09),
                width: 980,
                height: 800,
                source: adapter,
                view: 'weekView',
                disabled: true,
                showLegend: false,
                showToolbar: false,
                rowsHeight: 25,
                localization: { firstDay: 1,},
                ready: function () {
                    $("#scheduler").jqxScheduler('ensureAppointmentVisible', 'id1');
                },
                resources:
                {
                    colorScheme: "scheme05",
                    dataField: "calendar",
                    source:  new $.jqx.dataAdapter(source)
                },
                appointmentDataFields:
                {
                    from: "start",
                    to: "end",
                    id: "id",
                    background: "background",
                    color: "color",
                    description: "description",
                    location: "location",
                    subject: "subject",
                    resourceId: "calendar",
                },
                views:
                [
                    { type: "weekView", showWeekends: true, timeRuler: { scale: "quarterHour", scaleStartHour: 8, scaleEndHour: 21, formatString: 'HH:mm' } },
                ]
            });
        });
    </script>
</head>

  <body class='default'>
    <div class="bg-nav"></div>

    <div class="page-wrap">

        <header>
          <?php include 'menu.php'; ?>
        </header>

          <?php include 'responsive-menu.php'; ?>

            <strong><h3 id="schedule-method-title">Schedule and Method</h3></strong>

            <p class="schedule-note"><i><span style="text-decoration:underline">Please note</span>: on Thursday and Friday we will be at the European Parliament and on Saturday and Sunday we will be at the Région Grand Est Regional Council.</i></p>

              <div id="scheduler" style="width:400px;"></div>

          <hr style="margin-top:40px;">

          <article id="method">
            <h1><strong>The European Youth Convention's Approach to create <br>the European Citizen's Constitution</strong></h1>
            <br>
            <strong>The European Youth Convention is powered by the new social technology <a href="http://www.malik-management.com/en" target="_blank">Malik Syntegration®</a>.</strong>
            <br><br><br>
            <p>Increasingly, in a society of complexity it will not be individuals and their heroic acts that count,
              but the ability of large numbers of informed people to interlink their knowledge to create better solutions.
              <br><br>
              Institutional and not individual leadership will matter most;
              many institutions are already today too large and too complex to be grasped by a single person alone.
              <br><br>
              The same holds true for the creation of a European Citizen's Constitution. How then, can we integrate the diverse expectations, visions and experiences of the 150 EYC-Members?
              How to leverage intelligence, emotions, values and energy tied up in individual players?
              <br><br>
            </p>

            <p><strong>Maximum use of our intelligence</strong>
              <br><br>
              We will create new ideas by joining what was separate, and we will generate these new ideas faster by simultaneously doing what otherwise would be done sequentially.
              The laws of interconnectedness and simultaneity are among the most powerful design resources for a better Europe.
            </p>

            <img src="images/iko-ikosaeder-ohne-spiegelung.png" alt="Malik Institute's Icosahedron graphic" class="icosahedron" style="width:200px;">
            <p class="icosahedron-legend"><i>The Syntegration® Icosahedron, a three-dimensional communications structure and the foundation for a Syntegration®.
               Each of the twelve topics is allocated to one of the corners (vertices or nodes), and each participant is allocated to a specific double-coloured strut for the entire Syntegration®.</i></p>

            <p>The social technology to achieve that is Malik Syntegration®. It is a high-performance communication approach for managing complexity,
              interconnectedness and rapid change. Large numbers of people find new solutions for complex questions by communicating simultaneously and in an interconnected manner,
              in such a way that their joint knowledge, experience, and their social energy lead to new solutions.
              <br><br>

              <strong>Great changes open up great opportunities – Europe’s great transformation</strong>
              <br><br>
              The Better Europe and the transition to it are complex but not “composed end to end.” There is no written score.
              The concept is open-ended and improvises along the way – but not in an unstructured manner. To use a different analogy:
              If you imagine the Better Europe as a painting, it will not show a detailed landscape but rather rules for the creation of landscapes, as well as instructions for defining new rules.
              <br><br>
              „Be ahead of change“ is one of the basic laws of successful transformation and this is the most effective strategy:
              initiate change yourself or others will do it – and be faster than others through innovative methods.
              <br><br>

              <strong><a href="http://www.malik-management.com/en" target="_blank">Malik Institute for Complexity Management</a></strong>
              <br><br>
              An international expert in new governance and general management solutions Malik is a trusted partner to global market players and governments alike. Malik stands for a unique governance approach that sees management as the means to a viable society.
              <br><br>
              Our foundations are the sciences of complexity and dynamics; our solutions, the result of over 40 years of research, development and application; the fundamental positions of the system, customer value and social responsibility. Our entirely new methods ensure sweeping results in complex situations.
              <br><br>
              Our solutions emphasise crosslinking the intelligence, expertise and experience of all people involved and create an intense working client-relationship, based on professional working attitude, trust and integrity.
              <a href="http://www.malik-management.com/en">www.malik-institute.com</a>.
              <br><br>
            </p>

              <a href="http://www.malik-management.com/en" target="_blank"><img src="images/Malik-Institute.png" alt="Malik Institue logo" class="method-malik-logo" style="width:300px;"></a>

          </article>

    </div> <!-- END PAGE WRAP -->

        <?php include 'footer.php'; ?>

  </body>
</html>
