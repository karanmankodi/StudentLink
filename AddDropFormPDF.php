<?php
require('./Styles/FPDF/fpdf.php');

$SemesterAndYear = $_GET["semesterandyear"];
$CollegeName = $_GET["collegename"];
$LastName = $_GET["lastname"];
$FirstName = $_GET["firstname"];
$MiddleInitial = $_GET["middleinitial"];
$BUID = $_GET["buid"];
$Action1 = $_GET["action1"];
$College1 = $_GET["college1"];
$Courses1 = $_GET["courses1"];
$Credits1 = $_GET["credits1"];
$Action2 = $_GET["action2"];
$College2 = $_GET["college2"];
$Courses2 = $_GET["courses2"];
$Credits2 = $_GET["credits2"];
$Action3 = $_GET["action3"];
$College3 = $_GET["college3"];
$Courses3 = $_GET["courses3"];
$Credits3 = $_GET["credits3"];
$Action4 = $_GET["action4"];
$College4 = $_GET["college4"];
$Courses4 = $_GET["courses4"];
$Credits4 = $_GET["credits4"];
$Action5 = $_GET["action5"];
$College5 = $_GET["college5"];
$Courses5 = $_GET["courses5"];
$Credits5 = $_GET["credits5"];
$Action6 = $_GET["action6"];
$College6 = $_GET["college6"];
$Courses6 = $_GET["courses6"];
$Credits6 = $_GET["credits6"];


class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('./Images/Logo.jpg',10,6,40,20);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Move to the right
	$this->SetXY(75,5);
    $this->Cell(80, 10, 'ADD/DROP FORM');
	$this->SetFontSize(8);
	$this->SetXY(150,5);
	$this->Cell(80, 10, 'OFFICE OF THE UNIVERSITY REGISTRAR');
	$this->SetFontSize(6);
	$this->SetXY(85,10);
	$this->Cell(80, 10, 'ACADEMIC SEMESTER AND YEAR');
    $this->SetXY(82,15);
	$this->Cell(80, 10, "$SemesterAndYear");
    $this->SetXY(160,10);
	$this->Cell(80, 10, "COLLEGE         $CollegeName");
    // Line break
    $this->Ln(30);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->SetXY(10,30);
$pdf->Cell(80, 10, 'LAST NAME');
$pdf->SetXY(70,30);
$pdf->Cell(80, 10, 'FIRST NAME');
$pdf->SetXY(130,30);
$pdf->Cell(80, 10, 'MIDDLE INITIAL');
$pdf->SetXY(165,30);
$pdf->Cell(80, 10, 'BU I.D');

$pdf->SetXY(10,40);
$pdf->Cell(80, 10, "$LastName");
$pdf->SetXY(70,40);
$pdf->Cell(80, 10, "$FirstName");
$pdf->SetXY(130,40);
$pdf->Cell(80, 10, "$MiddleInitial");
$pdf->SetXY(165,40);
$pdf->Cell(80, 10, "$BUID");
$pdf->Ln(10);
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(80,10, 'INSTRUCTIONS AND NOTES:');
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell(80,10, 'This form may be used to add or drop courses, change a class selection, indicate audit status, or change a credits in a variable credit class.');
$pdf->Ln(5);
$pdf->Cell(80,10, 'The college of the course, course number and section are required and all must be filled in completely.');
$pdf->Ln(5);
$pdf->Cell(80,10, 'The Class Schedule must be viewed online using the Registrars Office homepage, www.bu.edu/reg and/or the student link at www.bu.edu/studentlink.');
$pdf->Ln(10);
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(80,10, 'FOR STANDARD COURSES*');
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell(80,10, 'ADD: You may add classes for the first two weeks of class only.');
$pdf->Ln(5);
$pdf->Cell(80,10, 'DROP: Courses dropped in the first five weeks would not be recorded as a part of your permanent record.');
$pdf->Ln(5);
$pdf->Cell(80,10, 'Drops after the fifth week receive a W grade, indicating course withdrawal and you will be charged for the course.');
$pdf->Ln(5);
$pdf->Cell(80,10, 'AUDIT: Status cannot be changed after fifth week of class. ');
$pdf->Ln(5);
$pdf->Cell(80,10, 'CREDIT CHANGE: Enter the new number of credit hours for the course.');
$pdf->SetFont('Arial','B',8);
$pdf->Ln(5);
$pdf->Cell(80,10, '*Non-standard course information can be obtained at the Registrars website on www.bu.edu/reg.');
$pdf->Ln(10);

#Table
$pdf->Rect(10,115,190,50);

$pdf->Rect(10,115,20,50);
$pdf->Rect(30,115,20,50);
$pdf->Rect(50,115,30,50);
$pdf->Rect(80,115,20,50);
$pdf->Rect(160,115,40,50);

$pdf->Cell(20,8,"ACTION",0,0,C);
$pdf->Rect(10,115,20,8);
$pdf->Cell(20,8,"COLLEGE",0,0,C);
$pdf->Rect(30,115,20,8);
$pdf->Cell(30,8,"COURSE #",0,0,C);
$pdf->Rect(50,115,30,8);
$pdf->Cell(20,8,"CREDITS",0,0,C);
$pdf->Rect(80,115,20,8);
$pdf->Cell(60,8,"INSTRUCTOR'S COMMENTS",0,0,C);
$pdf->Rect(100,115,60,8);
$pdf->Cell(40,8,"INSTRUCTOR'S SIGNATURE",0,0,C);
$pdf->Rect(160,115,40,8);

$pdf->Rect(10,123,190,7);
$pdf->SetXY(10,123);
$pdf->Cell(20,7,"$Action1",0,0,C);
$pdf->Cell(20,7,"$College1",0,0,C);
$pdf->Cell(30,7,"$Courses1",0,0,C);
$pdf->Cell(20,7,"$Credits1",0,0,C);
$pdf->Cell(60,7,"",0,0,C);
$pdf->Cell(40,7,"",0,0,C);

$pdf->Rect(10,130,190,7);
$pdf->SetXY(10,130);
$pdf->Cell(20,7,"$Action2",0,0,C);
$pdf->Cell(20,7,"$College2",0,0,C);
$pdf->Cell(30,7,"$Courses2",0,0,C);
$pdf->Cell(20,7,"$Credits2",0,0,C);
$pdf->Cell(60,7,"",0,0,C);
$pdf->Cell(40,7,"",0,0,C);

$pdf->Rect(10,137,190,7);
$pdf->SetXY(10,137);
$pdf->Cell(20,7,"$Action3",0,0,C);
$pdf->Cell(20,7,"$College3",0,0,C);
$pdf->Cell(30,7,"$Courses3",0,0,C);
$pdf->Cell(20,7,"$Credits3",0,0,C);
$pdf->Cell(60,7,"",0,0,C);
$pdf->Cell(40,7,"",0,0,C);

$pdf->Rect(10,144,190,7);
$pdf->SetXY(10,144);
$pdf->Cell(20,7,"$Action4",0,0,C);
$pdf->Cell(20,7,"$College4",0,0,C);
$pdf->Cell(30,7,"$Courses4",0,0,C);
$pdf->Cell(20,7,"$Credits4",0,0,C);
$pdf->Cell(60,7,"",0,0,C);
$pdf->Cell(40,7,"",0,0,C);

$pdf->Rect(10,151,190,7);
$pdf->SetXY(10,151);
$pdf->Cell(20,7,"$Action5",0,0,C);
$pdf->Cell(20,7,"$College5",0,0,C);
$pdf->Cell(30,7,"$Courses5",0,0,C);
$pdf->Cell(20,7,"$Credits5",0,0,C);
$pdf->Cell(60,7,"",0,0,C);
$pdf->Cell(40,7,"",0,0,C);

$pdf->Rect(10,158,190,7);
$pdf->SetXY(10,158);
$pdf->Cell(20,7,"$Action6",0,0,C);
$pdf->Cell(20,7,"$College6",0,0,C);
$pdf->Cell(30,7,"$Courses6",0,0,C);
$pdf->Cell(20,7,"$Credits6",0,0,C);
$pdf->Cell(60,7,"",0,0,C);
$pdf->Cell(40,7,"",0,0,C);

$pdf->Ln(15);

$pdf->Cell(80,10, 'STUDENTS WILLING TO WITHDRAW/TAKE LEAVE OF ABSENSE FROM THE UNIVERSITY MUST DO USING A WITHDRAWAL/LEAVE OF');
$pdf->Ln(5);
$pdf->Cell(80,10, 'ABSENSE FORM RATHER THAN AN ADD/DROP FORM. GRADUATE STUDENTS MUST SUBMIT THIS FORM TO THEIR ACADEMIC DEANS OFFICE.');
$pdf->Ln(5);
$pdf->Cell(80,10, 'UNDERGRADUATE STUDENTS MUST SUBMIT THIS FORM TO THE UNIVERSITY SERVICE CENTER.');
$pdf->Ln(10);
$pdf->Cell(80,10, 'I AM AWARE THAT MY ABOVE CHANGES WILL AFFECT MY ACADEMIC RECORDS AND FINANCIAL CHARGES. I HAVE CONSULTED MY ADVISOR.');
$pdf->Ln(30);
$pdf->Cell(30,10,'________________________________________________________');
$pdf->SetX(115);
$pdf->Cell(30,10,'________________________________________________________');
$pdf->Ln(5);
$pdf->Cell(30,10,'STUDENT SIGN AND DATE');
$pdf->SetX(115);
$pdf->Cell(30,10,'ADVISOR SIGN AND DATE');






$pdf->Output();


?>