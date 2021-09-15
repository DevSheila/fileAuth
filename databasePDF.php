<?php
require('fpdf184/fpdf.php');

class DatabaseDetails extends FPDF{
    function header(){
        $this->SetFont("Arial",'B',12);
        $this->Cell(15,2,'P.O. Box Private Bag,',0,0,"L");
        // 
        $this->Ln();
        $this->Cell(15,5,'Kisumu',0,0,"L");
        $this->Cell(400,2,'Tel:+254-57-351620/22',0,0,"C");
        $this->Ln();
        $this->Cell(420,5,'Fax:+254 - 57 -351221',0,0,"C");
        $this->Ln();  
        $this->Cell(420,5,'Email:info@maseno.ac.ke',0,0,"C");
        $this->Ln();    
        $this->Image("img/maseno-university-logo.png",140,3,20);
        $this->Ln(); 
        $this->SetFont("Helvetica",'I',12);
        $this->SetTextColor(0,0,255);
        $this->Cell(280,15,'MASENO UNIVERSITY',0,0,"C");
        $this->Ln();
        $this->SetFont("Arial",'BU',12);
        $this->Cell(0,10,'SCHOOL OF COMPUTING NOMINAL ROLL',0,0,"C");
        // $this->SetFont('Times','',12);
        $this->Ln();
            }
            function footer(){
               $this->SetY(-15);
               $this->SetFont('Arial','',8);
               $this->Cell(0,10,"Page".$this->PageNo()."/{nb}",0,0,"C");
                           }
                           function headerTable(){
                            // $this->SetTextColor(0,255,0);
                            $this->SetFont('Times','B',12);
                            $this->Cell(15,19,"ID",1,0,"C");
                            $this->Cell(40,19,"RegNo.",1,0,"C");
                            $this->Cell(40,19,"Username",1,0,"C");
                            $this->Cell(40,19,"Course",1,0,"C");
                            $this->Cell(10,19,"Age",1,0,"C");
                            $this->Cell(20,19,"Gender",1,0,"C");
                            $this->Cell(40,19,"Image",1,0,"C");
                            $this->Cell(60,19,"Regestration Date",1,0,"C");
                            $this->Ln();
                           }
                    function viewDetailedTable(){
                   $studentDetails ="stud.json";
                   $details = file_get_contents($studentDetails);
                   $DisplayData = json_decode($details);
                    foreach ($DisplayData as $data) {
                        
                    }              
                }
            }               
        
$pdf = new DatabaseDetails();
//Defines an alias for the total number of pages. It will be substituted as the document is closed.
$pdf->AliasNbPages();
$pdf->AddPage("M","A4",0);
$pdf->headerTable();

$pdf->Output();
?>