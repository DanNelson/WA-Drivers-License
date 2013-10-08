<?php

//Return encoded checksum as an integer
function returnChecksumNumber($in){
	switch($in){
		case "*":
			return 4;
			break;
		case strcasecmp($in,"A"):
			return 1;
			break;
		case strcasecmp($in,"B"):
			return 2;
			break;
		case strcasecmp($in,"C"):
			return 3;
			break;
		case strcasecmp($in,"D"):
			return 4;
			break;
		case strcasecmp($in,"E"):
			return 5;
			break;
		case strcasecmp($in,"F"):
			return 6;
			break;
		case strcasecmp($in,"G"):
			return 7;
			break;
		case strcasecmp($in,"H"):
			return 8;
			break;
		case strcasecmp($in,"I"):
			return 9;
			break;
		case strcasecmp($in,"J"):
			return 1;
			break;
		case strcasecmp($in,"K"):
			return 2;
			break;
		case strcasecmp($in,"L"):
			return 3;
			break;
		case strcasecmp($in,"M"):
			return 4;
			break;
		case strcasecmp($in,"N"):
			return 5;
			break;
		case strcasecmp($in,"O"):
			return 6;
			break;
		case strcasecmp($in,"P"):
			return 7;
			break;
		case strcasecmp($in,"Q"):
			return 8;
			break;
		case strcasecmp($in,"R"):
			return 9;
			break;
		case strcasecmp($in,"S"):
			return 2;
			break;
		case strcasecmp($in,"T"):
			return 3;
			break;
		case strcasecmp($in,"U"):
			return 4;
			break;
		case strcasecmp($in,"V"):
			return 5;
			break;
		case strcasecmp($in,"W"):
			return 6;
			break;
		case strcasecmp($in,"X"):
			return 7;
			break;
		case strcasecmp($in,"Y"):
			return 8;
			break;
		case strcasecmp($in,"Z"):
			return 9;
			break;

	}

}

//Return encoded day of month as an integer
function returndayOfMonthNumber($in){
	switch($in){
		case strcasecmp($in,"A"):
			return 1;
			break;
		case strcasecmp($in,"B"):
			return 2;
			break;
		case strcasecmp($in,"C"):
			return 3;
			break;
		case strcasecmp($in,"D"):
			return 4;
			break;
		case strcasecmp($in,"E"):
			return 5;
			break;
		case strcasecmp($in,"F"):
			return 6;
			break;
		case strcasecmp($in,"G"):
			return 7;
			break;
		case strcasecmp($in,"H"):
			return 8;
			break;
		case strcasecmp($in,"Z"):
			return 9;
			break;
		case strcasecmp($in,"S"):
			return 10;
			break;
		case strcasecmp($in,"J"):
			return 11;
			break;
		case strcasecmp($in,"K"):
			return 12;
			break;
		case strcasecmp($in,"L"):
			return 13;
			break;
		case strcasecmp($in,"M"):
			return 14;
			break;
		case strcasecmp($in,"N"):
			return 15;
			break;
		case strcasecmp($in,"W"):
			return 16;
			break;
		case strcasecmp($in,"P"):
			return 17;
			break;
		case strcasecmp($in,"Q"):
			return 18;
			break;
		case strcasecmp($in,"R"):
			return 19;
			break;
		case 0:
			return 20;
			break;
		case 1:
			return 1;
			break;
		case 2:
			return 22;
			break;
		case 3:
			return 23;
			break;
		case 4:
			return 24;
			break;
		case 5:
			return 25;
			break;
		case 6:
			return 26;
			break;
		case 7:
			return 27;
			break;
		case 8:
			return 28;
			break;
		case 9:
			return 29;
			break;
		case strcasecmp($in,"T"):
			return 30;
			break;
		case strcasecmp($in,"U"):
			return 31;
			break;

	}

}

//Return encoded month of birth as a string
function returnMothOfBirth($in){
	switch($in){
		case strcasecmp($in,"S"):
		case strcasecmp($in,"B"):
			return "Jan";
			break;
		case strcasecmp($in,"T"):
		case strcasecmp($in,"C"):
			return "Feb";
			break;
		case strcasecmp($in,"D"):
		case  strcasecmp($in,"U"):
			return "Mar";
			break;
		case strcasecmp($in,"J"):
		case strcasecmp($in,"1"):
			return "Apr";
			break;
		case strcasecmp($in,"K"):
		case strcasecmp($in,"2"):
			return "May";
			break;
		case strcasecmp($in,"L"):
		case strcasecmp($in,"3"):
			return "Jun";
			break;
		case strcasecmp($in,"M"):
		case strcasecmp($in,"4"):
			return "Jul";
			break;
		case strcasecmp($in,"N"):
		case strcasecmp($in,"5"):
			return "Aug";
			break;
		case strcasecmp($in,"O"):
		case strcasecmp($in,"6"):
			return "Sep";
			break;
		case strcasecmp($in,"P"):
		case strcasecmp($in,"7"):
			return "Oct";
			break;
		case strcasecmp($in,"Q"):
		case strcasecmp($in,"8"):
			return "Nov";
			break;
		case strcasecmp($in,"R"):
		case strcasecmp($in,"9"):
			return "Dec";
			break;
	}
}

?>