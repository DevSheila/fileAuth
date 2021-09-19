<?php
require('fpdf184/fpdf.php');
session_start();
date_default_timezone_set("Africa/Nairobi");


//A4 <width:219mm>
//default margin:10mmeach side
//witable horizontal :219-(10*2)=189mm


$pdf =new FPDF();
$pdf->AddPage("M","A4",0);
// $pdf->AddPage();
$pdf->SetFont('Arial','B',14);

$pdf->SetFont("Arial",'B',12);
$pdf->Cell(15,2,'P.O. Box Private Bag,',0,0,"L");
$pdf->Ln();
$pdf->Cell(15,5,'Kisumu',0,0,"L");
$pdf->Cell(400,2,'Tel:+254-57-351620/22',0,0,"C");
$pdf->Ln();
$pdf->Cell(420,5,'Fax:+254 - 57 -351221',0,0,"C");
$pdf->Ln();  
$pdf->Cell(420,5,'Email:info@maseno.ac.ke',0,0,"C");
$pdf->Ln();    
// $pdf->Image($displayimage,140,3,20);
// $pdf->Ln(); 
$pdf->SetFont("Helvetica",'I',12);
// $pdf->SetTextColor(0,0,255);
$pdf->Cell(280,15,'MASENO UNIVERSITY',0,0,"C");
$pdf->Ln();
$pdf->SetFont("Arial",'BU',12);
$pdf->Cell(0,10,'SCHOOL OF COMPUTING ',0,0,"C");
$pdf->Ln();
$pdf->Cell(0,10,'STUDENT DETAILS',0,0,"C");
// $pdf->SetFont('Times','',12);
$pdf->Ln();
//   $pdf->Image("img/logo.png",140,3,20);
// $pdf->Ln(); 
//Cell (width,height,text,border,endline,[align])
// $pdf->Cell(50,5,'Image',1,0);

$pdf->Cell(45,5,'Student',1,0);
$pdf->Cell(30,5,'RegNo',1,0);
$pdf->Cell(20,5,'Gender',1,0);
$pdf->Cell(13,5,'Age',1,0);
$pdf->Cell(25,5,'Phone',1,0);
$pdf->Cell(80,5,'Course',1,0);
$pdf->Cell(72,5,'Email',1,1);

$jsondata = file_get_contents("stud.json");
$json =json_decode($jsondata,true);

if( isset($_SESSION['regNo']  ) ) {
    $regNo =$_SESSION['regNo'];

    foreach($json['students'] as $student){
            $email =$student['email'];
            $username =$student['username'];
               $userimage =$student['Image'];
               $regNo =$student['regNo'];
               $age = $student['age'];
               $phone = $student['phone'];
               $course = $student['course'];
               $gender = $student['gender'];
               $email = $student['email'];
               $displayimage="userimg/".$userimage;

                           //set font to arial regular 12pt
                   
            $pdf->SetFont('Arial','',12);
            // $pdf->Image($displayimage,0,65,20);
            $pdf->Cell(45,5,$username,1,0);
            $pdf->Cell(30,5,$regNo,1,0);
            $pdf->Cell(20,5,$gender,1,0);
            $pdf->Cell(13,5,$age,1,0);
            $pdf->Cell(25,5,$phone,1,0);
            $pdf->Cell(80,5,$course,1,0);
            $pdf->Cell(72,5,$email,1,1);

    

    }

}

    $date = date("l jS \of F Y h:i:s A");
     $pdf->SetFont('Arial','I',12);
    $pdf->Cell(70,95,"Printed on :",0,0,"R");
    $pdf->Cell(70,95,$date,0,0,"L");

           

$pdf->Output();
?>