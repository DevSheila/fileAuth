<?php
require('fpdf184/fpdf.php');
session_start();
date_default_timezone_set("Africa/Nairobi");


//A4 <width:219mm>
//default margin:10mmeach side
//witable horizontal :219-(10*2)=189mm




$jsondata = file_get_contents("stud.json");
$json =json_decode($jsondata,true);

if( isset($_SESSION['regNo']  ) ) {
    $regNo =$_SESSION['regNo'];

    foreach($json['students'] as $student){
        if( ($student['regNo']==$regNo)){
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

        }
    }
}
            $pdf =new FPDF('p','mm','A4');

            $pdf->AddPage();
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
        $pdf->Image($displayimage,140,3,20);
        $pdf->Ln(); 
        $pdf->SetFont("Helvetica",'I',12);
        $pdf->SetTextColor(0,0,255);
        $pdf->Cell(280,15,'MASENO UNIVERSITY',0,0,"C");
        $pdf->Ln();
        $pdf->SetFont("Arial",'BU',12);
        $pdf->Cell(0,10,'SCHOOL OF COMPUTING ',0,0,"C");
        $pdf->Ln();
        $pdf->Cell(0,10,'STUDENT DETAILS',0,0,"C");
        // $pdf->SetFont('Times','',12);
        $pdf->Ln();
        //  $pdf->Image("img/logo.png",140,3,20);
        // $pdf->Ln(); 
            //Cell (width,height,text,border,endline,[align])
            $pdf->Cell(130,5,'TITLE',1,0);
            $pdf->Cell(59,5,'VALUE',1,1);//end of line

            //set font to arial regular 12pt
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(130,5,'Student',1,0);
            $pdf->Cell(59,5,$username,1,1);//end of line

            $pdf->Cell(130,5,'Registration Number',1,0);
            $pdf->Cell(59,5,$regNo,1,1);//end of line

            $pdf->Cell(130,5,'Gender',1,0);
            $pdf->Cell(59,5,$gender,1,1);//end of line

            $pdf->Cell(130,5,'Age',1,0);
            $pdf->Cell(59,5,$age,1,1);//end of line

            $pdf->Cell(130,5,'Course',1,0);
            $pdf->Cell(59,5,$course,1,1);//end of line

            $pdf->Cell(130,5,'Email',1,0);
            $pdf->Cell(59,5,$email,1,1);//end of line





$pdf->Output();
?>