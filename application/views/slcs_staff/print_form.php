<?php
	require("print_form/fpdf.php");
	$pdf=new FPDF();
	$pdf->Open();
	//var_dump(get_class_methods($pdf));
	//Biodata
	$fname = $r->fname; $mname = $r->mname;
	$lname = $r->lname; $gender = ucfirst($r->gender); $dob = $r->dob;
	$age = $r->age; $pob = $r->birthplace; $nationality = ucfirst($r->nationality);
	$ms = ucfirst($r->marital_stat); $lang = $r->language; $ppno = $r->passport_no;
	$toc = $r->type_of_contract; $dh = $r->date_hired; $ds = $r->date_started; $dr = $r->date_release;
	$profpic = $r->file_name;
	//Contact Details
	$vno = $r->villa_no; $st = $r->street; $csp = $r->city_state_province;
	$ca = $r->complete_address;
	$email = $r->email; $mno = $r->mnumber;
	$hn = $r->home_number;
	//Emergency
	$n1 = $r->N1; $r1 = $r->R1; $mn1 = $r->MN1; $ca1 = $r->CA1;
	$n2 = $r->N2; $r2 = $r->R2; $mn2 = $r->MN2; $ca2 = $r->CA2;
	$n3 = $r->N3; $r3 = $r->R3; $mn3 = $r->MN3; $ca3 = $r->CA3;
	//Banking
	$bnkn = ucfirst($r->bank_name); $bnkb = $r->branch_name;
	$bnkac = $r->account_name; $bnkan = $r->account_number;
	//Position
	$posi = $r->position; $estat = ucfirst($r->employment_status);
	//Salary&Wages
	$gp = ucfirst($r->gratuity_pay); $tocontract = ucfirst($r->tocontract);
	$bs = $r->basicsalary; $accom = $r->accommodation; $transpo = $r->transpo_allowance; $totalamtsal = ($bs + $accom + $transpo);
	$yrofservice = $r->years_of_service; $mnthofservice = $r->months_of_service; $totalamtaed = $r->total_amount;
	//Benefits
	$midno = $r->m_card_num; $midid = $r->m_issue_date; $mided = $r->m_expiry_date; $mido = $r->m_others;
	$byt = ucfirst($r->byt); $bapl = ucfirst($r->bapl);
	$b30dal = ucfirst($r->b30dal); $bbonus = $r->m_bonus; $bnbonus = $r->bn_bonus;
	//Licenses&Benefits
	$dlidcno = $r->dl_idcno; $dlidate = $r->dl_idate; $dlexdate = $r->dl_exdate; $dlothers = $r->dl_others;
	$lcidcno = $r->lc_idcno; $lcidate = $r->lc_idate; $lcexdate = $r->lc_exdate; $lcothers = $r->lc_others;
	$ridcno = $r->r_idcno; $ridate = $r->r_idate; $rexdate = $r->r_exdate; $rothers = $r->r_others;
	$vsidcno = $r->vs_idcno; $vsidate = $r->vs_idate; $vsexdate = $r->vs_exdate; $vsothers = $r->vs_others;
	$otherid = $r->others_idcno; $otheridate = $r->others_idate; $otherexdate = $r->others_exdate; $otherothers = $r->others_others;
	
	//$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',60,30,90,0,'PNG');
	//$pdf->Image('localhost/sl_ci/images/profile_pic/default',60,30,90,0,'jpg');
	//$pdf->Image('admin.png',10,10,-300);
	//$image1 = "print_form/default.jpg";
	//echo $image1;
	
	$pdf->AddPage();
	$pdf->Image('http://192.168.10.121/sl_ci/images/profile_pic/RE.jpg',9,5);
	$pdf->Image('http://192.168.10.121/sl_ci/images/profile_pic/'.$profpic,165,5,35,0);
	//$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',144,75,60,0,'PNG');
	$pdf->SetFont("Arial","B","17");
	$pdf->Cell(190,5,"SOFT LINE GROUP SERVICES LLC",0,1,"C");
	$pdf->SetFont("Arial","","9");
	$pdf->Cell(190,5,"Yes Business Center Building, Al Barsha 1, Dubai UAE",0,1,"C");
	$pdf->SetFont("Arial","","9");
	$pdf->Cell(190,5,"4th Floor, Room # 403 - 404 | P.O Box No.: 392962",0,1,"C");
	$pdf->SetFont("Arial","","9");
	$pdf->Cell(190,5,"Tel No.: (+971) 04-5516390 | Fax No.: (+971) 04-5516428",0,1,"C");
	//$pdf->SetFont("Arial","B","14");
	//$pdf->Cell(0,16,"","",1,"");	
	
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,13,"","",1,"");
	//Biodata
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Biodata","",1,"");
	$pdf->Line(10, 46, 210-10, 46);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
	//$pdf->Line(10, 48, 210-10, 48);
			// X1, Y1, X2    , Y2
	//190 //95
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"First Name :",1);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(66,7,"$fname",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(26,7,"Middle Name :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(71,7,"$mname",1,1);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Last Name :",1);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(66,7,"$lname",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(17,7,"Gender :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(14,7,"$gender",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(26,7,"Date of Birth :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(40,7,"$dob",1,1);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(12,7,"Age :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(15,7,"$age",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Place of Birth :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(39,7,"$pob",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(26,7,"Nationality :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(71,7,"$nationality",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Marital Status :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(17,7,"$ms",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(22,7,"Language :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(27,7,"$lang",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(26,7,"Passport No. :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(71,7,"$ppno",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Contract :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(17,7,"$toc",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(22,7,"Date Hired :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(27,7,"$dh",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(26,7,"Date Started :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(22,7,"$ds",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(26,7,"Date Release :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(23,7,"$dr",1,1);
	
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,5,"",0,1,"");
	
	//Contact Details
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Contact Details","",1,"");
	$pdf->Line(10,90, 210-10, 90);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(18,7,"Villa No. :",1);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(12,7,"$vno",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(14,7,"Street :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(40,7,"$st",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(36,7,"City/Province/State :",1);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(70,7,"$csp",1,1);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(44,7,"Complete Address :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(146,7,"$ca",1,1);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(18,7,"Email :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(66,7,"$email",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(26,7,"Mobile No. :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(80,7,"$mno",1,1);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(30,7,"Home Phone No.",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(160,7,"$hn",1,1);
	
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,5,"",0,1,"");
	
	//Emergency Details
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Incase of Emergency Details","",1,"");
	$pdf->Line(10,127, 210-10, 127);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(8,7,"No.",1);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(40,7,"Name",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(25,7,"Relationship",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(28,7,"Mobile No.",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(89,7,"Complete Address",1,1,"C");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(8,7,"1",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(40,7,"$n1",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(25,7,"$r1",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(28,7,"$mn1",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(89,7,"$ca1",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(8,7,"2",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(40,7,"$n2",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(25,7,"$r2",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(28,7,"$mn2",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(89,7,"$ca2",1,1);

	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(8,7,"3",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(40,7,"$n3",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(25,7,"$r3",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(28,7,"$mn3",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(89,7,"$ca3",1,1);
	
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,5,"",0,1,"");
	
	//Banking Details
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Banking Details","",1,"");
	$pdf->Line(10,164, 210-10, 164);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(29,7,"Bank Name :",1);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(64,7,"$bnkn",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Branch Name :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(70,7,"$bnkb",1,1);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(29,7,"Account Name :",1);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(64,7,"$bnkac",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Account No :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(70,7,"$bnkan",1,1);
	
	$pdf->Cell(0,5,"",0,1,"");
	
	//Position Details
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Position Details","",1,"");
	$pdf->Line(10,187, 210-10, 187);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(29,7,"Position Title :",1);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(64,7,"$posi",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(48,7,"Employment Status :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(49,7,"$estat",1,1);
	
	$pdf->Cell(0,5,"",0,1,"");
	
	//Salary & Wages Details
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Salary & Wages Details","",1,"");
	$pdf->Line(10,203, 210-10, 203);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(29,7,"Gratuity Pay :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(64,7,"$gp",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(48,7,"Type of Contract :",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(49,7,"$tocontract",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(44,7,"Basic Salary :",1,0,"R");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(49,7,"$bs",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(97,7,"Total No. of",1,1,"C");
		
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(44,7,"Accomodations :",1,0,"R");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(49,7,"$accom",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(32,7,"Year/s :",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(65,7,"$yrofservice",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(44,7,"Transportation :",1,0,"R");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(49,7,"$transpo",1,0);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(32,7,"Month/s :",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(65,7,"$mnthofservice",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(44,7,"Total Amt. Salary (AED) :",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(49,7,"$totalamtsal",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(32,7,"Total Amt. (AED) :",1,0);
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(65,7,"$totalamtaed",1,1);
	
	$pdf->Cell(0,5,"",0,1,"");
	
	//Salary & Wages Details
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(0,7,"",0,1,"");
	$pdf->Cell(0,7,"",0,1,"");
	$pdf->Cell(0,7,"",0,1,"");
	$pdf->Cell(0,7,"",0,1,"");	
	
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,13,"","",1,"");
	//Benefits Details
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Benefits Details","",1,"");
	$pdf->Line(10, 26, 210-10, 26);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
	//$pdf->Line(10, 48, 210-10, 48);
			// X1, Y1, X2    , Y2
	//190 //95
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(33,7,"Benefits",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(46,7,"ID/Card Number",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Issue Date",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(27,7,"Expiry Date",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(57,7,"Others",1,1,"C");
	
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(33,7,"Medical Insurance",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(46,7,"$midno",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(27,7,"$midid",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(27,7,"$mided",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(57,7,"$mido",1,1, "C");	
	
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,2,"","",1,"");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(39,7,"Yearly Ticket",1,0,"L");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(56,7,"$byt",1,0);	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(39,7,"Annual Paid Leave",1,0,"L");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(56,7,"$bapl",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(39,7,"30 Day Annual Leave",1,0,"L");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(56,7,"$b30dal",1,0);	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(39,7,"Bonus",1,0,"L");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(56,7,"$bbonus",1,1);
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(39,7,"Others",1,0,"L");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(151,7,"$bnbonus",1,1);
	
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,5,"",0,1,"");
	
	//Position Details
	$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,1,"Position Details","",1,"");
	$pdf->Line(10,72, 210-10, 72);
	//$pdf->SetFont("Arial","B","14");
	$pdf->Cell(0,3,"","",1,"");
		
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"License and ID/s",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"ID/ Card Number",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Issue Date",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Expiry Date",1,0,"C");
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Others",1,1,"C");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Driver's License",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$dlidcno",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$dlidate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$dlexdate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$dlothers",1,1,"C");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Labour Card",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$lcidcno",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$lcidate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$lcexdate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$lcothers",1,1,"C");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Resident ID Card",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$ridcno",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$ridate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$rexdate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$rothers",1,1,"C");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Visa Status",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$vsidcno",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$vsidate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$vsexdate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$vsothers",1,1,"C");
	
	$pdf->SetFont("Arial","B","10");
	$pdf->Cell(38,7,"Others",1,0);
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$otherid",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$otheridate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$otherexdate",1,0,"C");
	$pdf->SetFont("Arial","","10");
	$pdf->Cell(38,7,"$otherothers",1,1,"C");
	
	
	
	
	
	$pdf->SetFont("","","20");
	$pdf->Output();
	
?>