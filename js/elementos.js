j$123( "#accordion" ).accordion();
var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
j$123( "#autocomplete" ).autocomplete({
	source: availableTags
});

j$123( "#btn_aceptar_ingreso" ).button();


j$123( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});
j$123( "#radioset" ).buttonset();
j$123( "#controlgroup" ).controlgroup();
j$123( "#tabs" ).tabs();

function accion_dialogo(parametro){
	j$123( "#dialog" ).dialog({
		autoOpen: false,
		width: 400,
		buttons: [
			{
				text: "Ok",
				click: function() {
					eliminar_ingreso(parametro);
					j$123( this ).dialog( "close" );
				}
			},
			{
				text: "Cancel",
				click: function() {
					j$123( this ).dialog( "close" );
				}
			}
		]
	});
}

j$123( "#dialog_single_button" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				j$123( this ).dialog( "close" );
			}
		}
	]
});
// Link to open the dialog
j$123( "#datepicker" ).datepicker({
	inline: true
});
j$123( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});
j$123( "#progressbar" ).progressbar({
	value: 20
});
j$123( "#spinner" ).spinner();
j$123( "#menu" ).menu();
j$123( "#tooltip" ).tooltip();
j$123( "#selectmenu" ).selectmenu();
j$123( "#dialog-link, #icons li" ).hover(
	function() {
		j$123( this ).addClass( "ui-state-hover" );
	},
	function() {
		j$123( this ).removeClass( "ui-state-hover" );
	}
);
