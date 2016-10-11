<?php
	include('connect_db.php');
	
	//select values countries from table city
	$query = "SELECT countries, city from city";
	$result_country = $mysqli->query($query);
	
	$country1 = $result_country->fetch_array(MYSQLI_ASSOC); //Albania
	$country2 = $result_country->fetch_array(MYSQLI_ASSOC); //Andorra
	$country3 = $result_country->fetch_array(MYSQLI_ASSOC); //Austria
	$country4 = $result_country->fetch_array(MYSQLI_ASSOC); //Belarus
	$country5 = $result_country->fetch_array(MYSQLI_ASSOC); //Belgium
	$country6 = $result_country->fetch_array(MYSQLI_ASSOC); //Bosnia and Herzegovina		
	$country7 = $result_country->fetch_array(MYSQLI_ASSOC); //Bulgaria		
	$country8 = $result_country->fetch_array(MYSQLI_ASSOC); //Croatia		
	$country10 = $result_country->fetch_array(MYSQLI_ASSOC); //Czech Republic	

	$country11 = $result_country->fetch_array(MYSQLI_ASSOC); //Denmark		
	$country12 = $result_country->fetch_array(MYSQLI_ASSOC); //Estonia		
	$country13 = $result_country->fetch_array(MYSQLI_ASSOC); //Finland		
	$country14 = $result_country->fetch_array(MYSQLI_ASSOC); //France		
	$country15 = $result_country->fetch_array(MYSQLI_ASSOC); //Germany		
	$country16 = $result_country->fetch_array(MYSQLI_ASSOC); //Greece		
	$country17 = $result_country->fetch_array(MYSQLI_ASSOC); //Hungary		
	$country19 = $result_country->fetch_array(MYSQLI_ASSOC); //Ireland	
	$country20 = $result_country->fetch_array(MYSQLI_ASSOC); //Italy

	$country21 = $result_country->fetch_array(MYSQLI_ASSOC); //Latvia		
	$country22 = $result_country->fetch_array(MYSQLI_ASSOC); //Liechtenstein		
	$country23 = $result_country->fetch_array(MYSQLI_ASSOC); //Lithuania		
	$country24 = $result_country->fetch_array(MYSQLI_ASSOC); //Luxembourg		
	$country25 = $result_country->fetch_array(MYSQLI_ASSOC); //Macedonia		
	$country27 = $result_country->fetch_array(MYSQLI_ASSOC); //Moldova		
	$country28 = $result_country->fetch_array(MYSQLI_ASSOC); //Monaco		
	$country29 = $result_country->fetch_array(MYSQLI_ASSOC); //Montenegro		
	$country30 = $result_country->fetch_array(MYSQLI_ASSOC); //Netherlands	

	$country31 = $result_country->fetch_array(MYSQLI_ASSOC); //Norway		
	$country32 = $result_country->fetch_array(MYSQLI_ASSOC); //Poland		
	$country33 = $result_country->fetch_array(MYSQLI_ASSOC); //Portugal		
	$country34 = $result_country->fetch_array(MYSQLI_ASSOC); //Romania		
	$country36 = $result_country->fetch_array(MYSQLI_ASSOC); //Serbia		
	$country37 = $result_country->fetch_array(MYSQLI_ASSOC); //Slovakia		
	$country38 = $result_country->fetch_array(MYSQLI_ASSOC); //Slovenia		
	$country39 = $result_country->fetch_array(MYSQLI_ASSOC); //Spain		
	$country40 = $result_country->fetch_array(MYSQLI_ASSOC); //Sweden

	$country41 = $result_country->fetch_array(MYSQLI_ASSOC); //Switzerland		
	$country42 = $result_country->fetch_array(MYSQLI_ASSOC); //Turkey		
	$country43 = $result_country->fetch_array(MYSQLI_ASSOC); //Ukraine		
	$country44 = $result_country->fetch_array(MYSQLI_ASSOC); //United Kingdom		
	$result_country->free();
	
	
	// select values distances from table ways
	$query = "SELECT coutnryFrom, cityFrom, countryTo, cityTo, distance, time from ways";
	$result_dist = $mysqli->query($query);

	// Albania
	$dist_al_gr = $result_dist->fetch_array(MYSQLI_ASSOC);	//Albania -> Greece
	$dist_al_rs = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Albania -> Serbia
	$dist_al_me = $result_dist->fetch_array(MYSQLI_ASSOC);  //Albania -> Montenegro
	$dist_al_mk = $result_dist->fetch_array(MYSQLI_ASSOC);	//Albania -> Macedonia

/*printf ("%s %s %s %s %s %s \n", $dist_al_gr["coutnryFrom"], $dist_al_gr["cityFrom"], 
		$dist_al_gr["countryTo"], $dist_al_gr["cityTo"], $dist_al_gr["distance"], $dist_al_gr["time"]);*/

	//Andorra
	$dist_ad_es = $result_dist->fetch_array(MYSQLI_ASSOC);	//Andorra -> Spain
	$dist_ad_fr = $result_dist->fetch_array(MYSQLI_ASSOC);	//Andorra -> France

	//Austria
	$dist_at_de = $result_dist->fetch_array(MYSQLI_ASSOC);	//Austria -> Germany
	$dist_at_ch = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Austria -> Switzerland
	$dist_at_sk = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Austria -> Slovakia
	$dist_at_hu = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Austria -> Hungary
	$dist_at_si = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Austria -> Slovenia
	$dist_at_cz = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Austria -> Czech Republic
	$dist_at_it = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Austria -> Italy
	$dist_at_li = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Austria -> Liechtenstein
	
	//Belarus
	$dist_by_ua = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Belarus -> Ukraine
	$dist_by_lt = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Belarus -> Lithuania
	$dist_by_pl = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Belarus -> Poland
	
	//Belgium
	$dist_be_nl = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Belgium -> Netherlands  
	$dist_be_de = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Belgium -> Germany
	$dist_be_lu = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Belgium -> Luxembourg
	$dist_be_fr = $result_dist->fetch_array(MYSQLI_ASSOC); 	//Belgium -> France

	//Bosnia and Herzegovina
	$dist_ba_rs = $result_dist->fetch_array(MYSQLI_ASSOC); //Bosnia and Herzegovina -> Serbia
	$dist_ba_me = $result_dist->fetch_array(MYSQLI_ASSOC); //Bosnia and Herzegovina -> Montenegro
	$dist_ba_hr = $result_dist->fetch_array(MYSQLI_ASSOC); //Bosnia and Herzegovina -> Croatia
	
	//Bulgaria
	$dist_bg_tr = $result_dist->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Turkey
	$dist_bg_gr = $result_dist->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Greece
	$dist_bg_rs = $result_dist->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Serbia
	$dist_bg_ro = $result_dist->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Romania
	$dist_bg_mk = $result_dist->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Macedonia
	
	//Croatia
	$dist_hr_rs = $result_dist->fetch_array(MYSQLI_ASSOC); //Croatia -> Serbia
	$dist_hr_hu = $result_dist->fetch_array(MYSQLI_ASSOC); //Croatia -> Hungary
	$dist_hr_si = $result_dist->fetch_array(MYSQLI_ASSOC); //Croatia -> Slovenia
	$dist_hr_me = $result_dist->fetch_array(MYSQLI_ASSOC); //Croatia -> Montenegro
	$dist_hr_ba = $result_dist->fetch_array(MYSQLI_ASSOC); //Croatia -> Bosnia and Herzegovina

	//Czech Republic
	$dist_cz_de = $result_dist->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Germany
	$dist_cz_sk = $result_dist->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Slovakia
	$dist_cz_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Austria
	$dist_cz_pl = $result_dist->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Poland

	//Denmark
	$dist_dk_de = $result_dist->fetch_array(MYSQLI_ASSOC); //Denmark -> Germany
	$dist_dk_se = $result_dist->fetch_array(MYSQLI_ASSOC); //Denmark -> Sweden

	//Estonia
	$dist_ee_fi = $result_dist->fetch_array(MYSQLI_ASSOC); //Estonia -> Finland
	$dist_ee_lv = $result_dist->fetch_array(MYSQLI_ASSOC); //Estonia -> Latvia

	//Finland
	$dist_fi_se = $result_dist->fetch_array(MYSQLI_ASSOC); //Finland -> Sweden
	$dist_fi_ee = $result_dist->fetch_array(MYSQLI_ASSOC); //Finland -> Estonia

	//France
	$dist_fr_ad = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Andorra
	$dist_fr_de = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Germany
	$dist_fr_ch = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Switzerland
	$dist_fr_be = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Belgium
	$dist_fr_lu = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Luxembourg
	$dist_fr_es = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Spain
	$dist_fr_mc = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Monaco
	$dist_fr_it = $result_dist->fetch_array(MYSQLI_ASSOC); //France -> Italy

	//Germany
	$dist_de_nl = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Netherlands  
	$dist_de_ch = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Switzerland
	$dist_de_be = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Belgium
	$dist_de_dk = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Denmark
	$dist_de_lu = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Luxembourg
	$dist_de_fr = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> France
	$dist_de_cz = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Czech Republic
	$dist_de_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Austria
	$dist_de_pl = $result_dist->fetch_array(MYSQLI_ASSOC); //Germany -> Poland

	//Greece
	$dist_gr_tr = $result_dist->fetch_array(MYSQLI_ASSOC); //Greece -> Turkey
	$dist_gr_mk = $result_dist->fetch_array(MYSQLI_ASSOC); //Greece -> Macedonia
	$dist_gr_bg = $result_dist->fetch_array(MYSQLI_ASSOC); //Greece -> Bulgaria
	$dist_gr_al = $result_dist->fetch_array(MYSQLI_ASSOC); //Greece -> Albania

	//Hungary
	$dist_hu_rs = $result_dist->fetch_array(MYSQLI_ASSOC); //Hungary -> Serbia
	$dist_hu_sk = $result_dist->fetch_array(MYSQLI_ASSOC); //Hungary -> Slovakia
	$dist_hu_ro = $result_dist->fetch_array(MYSQLI_ASSOC); //Hungary -> Romania
	$dist_hu_ua = $result_dist->fetch_array(MYSQLI_ASSOC); //Hungary -> Ukraine
	$dist_hu_si = $result_dist->fetch_array(MYSQLI_ASSOC); //Hungary -> Slovenia
	$dist_hu_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Hungary -> Austria
	$dist_hu_hr = $result_dist->fetch_array(MYSQLI_ASSOC); //Hungary -> Croatia

	//Ireland 
	$dist_ie_uk = $result_dist->fetch_array(MYSQLI_ASSOC); //Ireland -> United Kingdom

	//Italy
	$dist_it_ch = $result_dist->fetch_array(MYSQLI_ASSOC); //Italy -> Switzerland
	$dist_it_si = $result_dist->fetch_array(MYSQLI_ASSOC); //Italy -> Slovenia
	$dist_it_fr = $result_dist->fetch_array(MYSQLI_ASSOC); //Italy -> France
	$dist_it_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Italy -> Austria

	//Latvia	
	$dist_lv_lt = $result_dist->fetch_array(MYSQLI_ASSOC); //Latvia -> Lithuania
	$dist_lv_ee = $result_dist->fetch_array(MYSQLI_ASSOC); //Latvia -> Estonia

	//Liechtenstein
	$dist_li_ch = $result_dist->fetch_array(MYSQLI_ASSOC); //Liechtenstein -> Switzerland
	$dist_li_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Liechtenstein -> Austria

	//Lithuania
	$dist_lt_by = $result_dist->fetch_array(MYSQLI_ASSOC); //Lithuania -> Belarus
	$dist_lt_lv = $result_dist->fetch_array(MYSQLI_ASSOC); //Lithuania -> Latvia
	$dist_lt_pl = $result_dist->fetch_array(MYSQLI_ASSOC); //Lithuania -> Poland

	//Luxembourg
	$dist_lu_be = $result_dist->fetch_array(MYSQLI_ASSOC); //Luxembourg -> Belgium
	$dist_lu_de = $result_dist->fetch_array(MYSQLI_ASSOC); //Luxembourg -> Germany
	$dist_lu_fr = $result_dist->fetch_array(MYSQLI_ASSOC); //Luxembourg -> France
	
	//Macedonia
	$dist_mk_gr = $result_dist->fetch_array(MYSQLI_ASSOC); //Macedonia -> Greece
	$dist_mk_ro = $result_dist->fetch_array(MYSQLI_ASSOC); //Macedonia -> Romania
	$dist_mk_bg = $result_dist->fetch_array(MYSQLI_ASSOC); //Macedonia -> Bulgaria
	$dist_mk_al = $result_dist->fetch_array(MYSQLI_ASSOC); //Macedonia -> Albania

	//Moldova	
	$dist_md_ro = $result_dist->fetch_array(MYSQLI_ASSOC); //Moldova -> Romania
	$dist_md_ua = $result_dist->fetch_array(MYSQLI_ASSOC); //Moldova -> Ukraine

	//Monaco
	$dist_mc_fr = $result_dist->fetch_array(MYSQLI_ASSOC); //Monaco -> France

	//Montenegro
	$dist_me_ba = $result_dist->fetch_array(MYSQLI_ASSOC); //Montenegro -> Bosnia and Herzegovina
	$dist_me_rs = $result_dist->fetch_array(MYSQLI_ASSOC); //Montenegro -> Serbia
	$dist_me_al = $result_dist->fetch_array(MYSQLI_ASSOC); //Montenegro -> Albania
	$dist_me_hr = $result_dist->fetch_array(MYSQLI_ASSOC); //Montenegro -> Croatia

	//Netherlands
	$dist_nl_de = $result_dist->fetch_array(MYSQLI_ASSOC); //Netherlands -> Germany
	$dist_nl_be = $result_dist->fetch_array(MYSQLI_ASSOC); //Netherlands -> Belgium
	$dist_nl_uk = $result_dist->fetch_array(MYSQLI_ASSOC); //Netherlands -> United Kingdom

	//Norway
	$dist_no_fi = $result_dist->fetch_array(MYSQLI_ASSOC); //Norway -> Finland
	$dist_no_se = $result_dist->fetch_array(MYSQLI_ASSOC); //Norway -> Sweden

	//Poland
	$dist_pl_de = $result_dist->fetch_array(MYSQLI_ASSOC); //Poland -> Germany
	$dist_pl_sk = $result_dist->fetch_array(MYSQLI_ASSOC); //Poland -> Slovakia
	$dist_pl_ua = $result_dist->fetch_array(MYSQLI_ASSOC); //Poland -> Ukraine
	$dist_pl_by = $result_dist->fetch_array(MYSQLI_ASSOC); //Poland -> Belarus
	$dist_pl_cz = $result_dist->fetch_array(MYSQLI_ASSOC); //Poland -> Czech Republic
	$dist_pl_lt = $result_dist->fetch_array(MYSQLI_ASSOC); //Poland -> Lithuania
	
	//Portugal
	$dist_pt_es = $result_dist->fetch_array(MYSQLI_ASSOC); //Portugal -> Spain

	//Romania
	$dist_ro_rs = $result_dist->fetch_array(MYSQLI_ASSOC); //Romania -> Serbia
	$dist_ro_hu = $result_dist->fetch_array(MYSQLI_ASSOC); //Romania -> Hungary
	$dist_ro_md = $result_dist->fetch_array(MYSQLI_ASSOC); //Romania -> Moldova
	$dist_ro_ua = $result_dist->fetch_array(MYSQLI_ASSOC); //Romania -> Ukraine
	$dist_ro_bg = $result_dist->fetch_array(MYSQLI_ASSOC); //Romania -> Bulgaria

	//Serbia
	$dist_rs_ro = $result_dist->fetch_array(MYSQLI_ASSOC); //Serbia -> Romania
	$dist_rs_hu = $result_dist->fetch_array(MYSQLI_ASSOC); //Serbia -> Hungary
	$dist_rs_me = $result_dist->fetch_array(MYSQLI_ASSOC); //Serbia -> Montenegro
	$dist_rs_ba = $result_dist->fetch_array(MYSQLI_ASSOC); //Serbia -> Bosnia and Herzegovina
	$dist_rs_mk = $result_dist->fetch_array(MYSQLI_ASSOC); //Serbia -> Macedonia
	$dist_rs_bg = $result_dist->fetch_array(MYSQLI_ASSOC); //Serbia -> Bulgaria
	$dist_rs_hr = $result_dist->fetch_array(MYSQLI_ASSOC); //Serbia -> Croatia

	//Slovakia
	$dist_sk_hu = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovakia -> Hungary
	$dist_sk_ua = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovakia -> Ukraine
	$dist_sk_cz = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovakia -> Czech Republic
	$dist_sk_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovakia -> Austria
	$dist_sk_pl = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovakia -> Poland

	//Slovenia
	$dist_si_hu = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovenia -> Hungary
	$dist_si_it = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovenia -> Italy
	$dist_si_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovenia -> Austria
	$dist_si_hr = $result_dist->fetch_array(MYSQLI_ASSOC); //Slovenia -> Croatia
	
	//Spain
	$dist_es_ad = $result_dist->fetch_array(MYSQLI_ASSOC); //Spain -> Andorra
	$dist_es_pt = $result_dist->fetch_array(MYSQLI_ASSOC); //Spain -> Portugal
	$dist_es_fr = $result_dist->fetch_array(MYSQLI_ASSOC); //Spain -> France

	//Sweden
	$dist_se_dk = $result_dist->fetch_array(MYSQLI_ASSOC); //Sweden -> Denmark
	$dist_se_fi = $result_dist->fetch_array(MYSQLI_ASSOC); //Sweden -> Finland
	$dist_se_no = $result_dist->fetch_array(MYSQLI_ASSOC); //Sweden -> Norway

	//Switzerland
	$dist_ch_de = $result_dist->fetch_array(MYSQLI_ASSOC); //Switzerland -> Germany
	$dist_ch_fr = $result_dist->fetch_array(MYSQLI_ASSOC); //Switzerland -> France
	$dist_ch_it = $result_dist->fetch_array(MYSQLI_ASSOC); //Switzerland -> Italy
	$dist_ch_li = $result_dist->fetch_array(MYSQLI_ASSOC); //Switzerland -> Liechtenstein
	$dist_ch_at = $result_dist->fetch_array(MYSQLI_ASSOC); //Switzerland -> Austria

	//Turkey
	$dist_tr_gr = $result_dist->fetch_array(MYSQLI_ASSOC); //Turkey -> Greece
	$dist_tr_bg = $result_dist->fetch_array(MYSQLI_ASSOC); //Turkey -> Bulgaria

	//Ukraine
	$dist_ua_sk = $result_dist->fetch_array(MYSQLI_ASSOC); //Ukraine -> Slovakia
	$dist_ua_ro = $result_dist->fetch_array(MYSQLI_ASSOC); //Ukraine -> Romania
	$dist_ua_hu = $result_dist->fetch_array(MYSQLI_ASSOC); //Ukraine -> Hungary
	$dist_ua_md = $result_dist->fetch_array(MYSQLI_ASSOC); //Ukraine -> Moldova
	$dist_ua_by = $result_dist->fetch_array(MYSQLI_ASSOC); //Ukraine -> Belarus
	$dist_ua_pl = $result_dist->fetch_array(MYSQLI_ASSOC); //Ukraine -> Poland

	//United Kingdom
	$dist_uk_nl = $result_dist->fetch_array(MYSQLI_ASSOC); //United Kingdom -> Netherlands  
	$dist_uk_be = $result_dist->fetch_array(MYSQLI_ASSOC); //United Kingdom -> Belgium
	$dist_uk_ie = $result_dist->fetch_array(MYSQLI_ASSOC); //United Kingdom -> Ireland
	$dist_uk_fr = $result_dist->fetch_array(MYSQLI_ASSOC); //United Kingdom -> France
	$result_dist->free();	


$graph = array( 
	
	//Albania
	$country1["countries"] => array (
		$dist_al_gr["countryTo"] => $dist_al_gr["distance"],
		$dist_al_rs["countryTo"] => $dist_al_rs["distance"],
		$dist_al_me["countryTo"] => $dist_al_me["distance"],
		$dist_al_mk["countryTo"] => $dist_al_mk["distance"]
),
	
	//Andorra
	$country2["countries"] => array (
		$dist_ad_es["countryTo"] => $dist_ad_es["distance"],
		$dist_ad_fr["countryTo"] => $dist_ad_fr["distance"]
),
	
	//Austria
	$country3["countries"] => array (
		$dist_at_de["countryTo"] => $dist_at_de["distance"],
		$dist_at_ch["countryTo"] => $dist_at_ch["distance"],
		$dist_at_sk["countryTo"] => $dist_at_sk["distance"],
		$dist_at_hu["countryTo"] => $dist_at_hu["distance"],
		$dist_at_si["countryTo"] => $dist_at_si["distance"],
		$dist_at_cz["countryTo"] => $dist_at_cz["distance"],
		$dist_at_it["countryTo"] => $dist_at_it["distance"],
		$dist_at_li["countryTo"] => $dist_at_li["distance"]
),
	
	//Belarus
	$country4["countries"] => array (
		$dist_by_ua["countryTo"] => $dist_by_ua["distance"],
		$dist_by_lt["countryTo"] => $dist_by_lt["distance"],
		$dist_by_pl["countryTo"] => $dist_by_pl["distance"]
),
	
	//Belgium
	$country5["countries"] => array (
		$dist_be_nl["countryTo"] => $dist_be_nl["distance"],
		$dist_be_de["countryTo"] => $dist_be_de["distance"],
		$dist_be_lu["countryTo"] => $dist_be_lu["distance"],
		$dist_be_fr["countryTo"] => $dist_be_fr["distance"]
),
	
	//Bosnia and Herzegovina
	$country6["countries"] => array (
		$dist_ba_rs["countryTo"] => $dist_ba_rs["distance"],
		$dist_ba_me["countryTo"] => $dist_ba_me["distance"],
		$dist_ba_hr["countryTo"] => $dist_ba_hr["distance"]
),
	
	//Bulgaria
	$country7["countries"] => array (
		$dist_bg_tr["countryTo"] => $dist_bg_tr["distance"],
		$dist_bg_gr["countryTo"] => $dist_bg_gr["distance"],
		$dist_bg_rs["countryTo"] => $dist_bg_rs["distance"],
		$dist_bg_ro["countryTo"] => $dist_bg_ro["distance"],
		$dist_bg_mk["countryTo"] => $dist_bg_mk["distance"]
),
	
	//Croatia
	$country8["countries"] => array (
		$dist_hr_rs["countryTo"] => $dist_hr_rs["distance"],
		$dist_hr_hu["countryTo"] => $dist_hr_hu["distance"],
		$dist_hr_si["countryTo"] => $dist_hr_si["distance"],
		$dist_hr_me["countryTo"] => $dist_hr_me["distance"],
		$dist_hr_ba["countryTo"] => $dist_hr_ba["distance"]
),
	
	//Czech Republic
	$country10["countries"] => array (
		$dist_cz_de["countryTo"] => $dist_cz_de["distance"],
		$dist_cz_sk["countryTo"] => $dist_cz_sk["distance"],
		$dist_cz_at["countryTo"] => $dist_cz_at["distance"],
		$dist_cz_pl["countryTo"] => $dist_cz_pl["distance"]
),
	
	//Denmark
	$country11["countries"] => array (
		$dist_dk_de["countryTo"] => $dist_dk_de["distance"],
		$dist_dk_se["countryTo"] => $dist_dk_se["distance"]
),
	
	//Estonia
	$country12["countries"] => array (
		$dist_ee_fi["countryTo"] => $dist_ee_fi["distance"],
		$dist_ee_lv["countryTo"] => $dist_ee_lv["distance"]
),
	
	//Finland	
	$country13["countries"] => array (
		$dist_fi_se["countryTo"] => $dist_fi_se["distance"],
		$dist_fi_ee["countryTo"] => $dist_fi_ee["distance"]
),
	
	//France
	$country14["countries"] => array (
		$dist_fr_ad["countryTo"] => $dist_fr_ad["distance"],
		$dist_fr_de["countryTo"] => $dist_fr_de["distance"],
		$dist_fr_ch["countryTo"] => $dist_fr_ch["distance"],
		$dist_fr_be["countryTo"] => $dist_fr_be["distance"],
		$dist_fr_lu["countryTo"] => $dist_fr_lu["distance"],
		$dist_fr_es["countryTo"] => $dist_fr_es["distance"],
		$dist_fr_mc["countryTo"] => $dist_fr_mc["distance"],
		$dist_at_it["countryTo"] => $dist_at_it["distance"]
),
	
	//Germany
	$country15["countries"] => array (
		$dist_de_nl["countryTo"] => $dist_de_nl["distance"],
		$dist_de_ch["countryTo"] => $dist_de_ch["distance"],
		$dist_de_be["countryTo"] => $dist_de_be["distance"],
		$dist_de_dk["countryTo"] => $dist_de_dk["distance"],
		$dist_de_lu["countryTo"] => $dist_de_lu["distance"],
		$dist_de_fr["countryTo"] => $dist_de_fr["distance"],
		$dist_de_cz["countryTo"] => $dist_de_cz["distance"],
		$dist_de_at["countryTo"] => $dist_de_at["distance"],
		$dist_de_pl["countryTo"] => $dist_de_pl["distance"]
),
	
	//Greece
	$country16["countries"] => array (
		$dist_gr_tr["countryTo"] => $dist_gr_tr["distance"],
		$dist_gr_mk["countryTo"] => $dist_gr_mk["distance"],
		$dist_gr_bg["countryTo"] => $dist_gr_bg["distance"],
		$dist_gr_al["countryTo"] => $dist_gr_al["distance"]
),
	
	//Hungary
	$country17["countries"] => array (
		$dist_hu_rs["countryTo"] => $dist_hu_rs["distance"],
		$dist_hu_sk["countryTo"] => $dist_hu_sk["distance"],
		$dist_hu_ro["countryTo"] => $dist_hu_ro["distance"],
		$dist_hu_ua["countryTo"] => $dist_hu_ua["distance"],
		$dist_hu_si["countryTo"] => $dist_hu_si["distance"],
		$dist_hu_at["countryTo"] => $dist_hu_at["distance"],
		$dist_hu_hr["countryTo"] => $dist_hu_hr["distance"]
),
	
	//Ireland
	$country19["countries"] => array (
		$dist_ie_uk["countryTo"] => $dist_ie_uk["distance"]
),
	
	//Italy
	$country20["countries"] => array (
		$dist_it_ch["countryTo"] => $dist_it_ch["distance"],
		$dist_it_si["countryTo"] => $dist_it_si["distance"],
		$dist_it_fr["countryTo"] => $dist_it_fr["distance"],
		$dist_it_at["countryTo"] => $dist_it_at["distance"]
),
	
	//Latvia
	$country21["countries"] => array (
		$dist_lv_lt["countryTo"] => $dist_lv_lt["distance"],
		$dist_lv_ee["countryTo"] => $dist_lv_ee["distance"]
),
	//Liechtenstein
	$country22["countries"] => array (
		$dist_li_ch["countryTo"] => $dist_li_ch["distance"],
		$dist_li_at["countryTo"] => $dist_li_at["distance"]
),
	
	//Lithuania
	$country23["countries"] => array (
		$dist_lt_by["countryTo"] => $dist_lt_by["distance"],
		$dist_lt_lv["countryTo"] => $dist_lt_lv["distance"],
		$dist_lt_pl["countryTo"] => $dist_lt_pl["distance"]
),
	
	//Luxembourg
	$country24["countries"] => array (
		$dist_lu_be["countryTo"] => $dist_lu_be["distance"],
		$dist_lu_de["countryTo"] => $dist_lu_de["distance"],
		$dist_lu_fr["countryTo"] => $dist_lu_fr["distance"]
),	
	
	//Macedonia
	$country25["countries"] => array (
		$dist_mk_gr["countryTo"] => $dist_mk_gr["distance"],
		$dist_mk_ro["countryTo"] => $dist_mk_ro["distance"],
		$dist_mk_bg["countryTo"] => $dist_mk_bg["distance"],
		$dist_mk_al["countryTo"] => $dist_mk_al["distance"]
),	
	
	//Moldova
	$country27["countries"] => array (
		$dist_md_ro["countryTo"] => $dist_md_ro["distance"],
		$dist_md_ua["countryTo"] => $dist_md_ua["distance"]
),
	
	//Monaco
	$country28["countries"] => array (
		$dist_mc_fr["countryTo"] => $dist_mc_fr["distance"]
),
	
	//Montenegro
	$country29["countries"] => array (
		$dist_me_ba["countryTo"] => $dist_me_ba["distance"],
		$dist_me_rs["countryTo"] => $dist_me_rs["distance"],
		$dist_me_al["countryTo"] => $dist_me_al["distance"],
		$dist_me_hr["countryTo"] => $dist_me_hr["distance"]
),	
	
	//Netherlands
	$country30["countries"] => array (
		$dist_nl_de["countryTo"] => $dist_nl_de["distance"],
		$dist_nl_be["countryTo"] => $dist_nl_be["distance"],
		$dist_nl_uk["countryTo"] => $dist_nl_uk["distance"]
),	
	
	//Norway
	$country31["countries"] => array (
		$dist_no_fi["countryTo"] => $dist_no_fi["distance"],
		$dist_no_se["countryTo"] => $dist_no_se["distance"]
),	
	
	//Poland
	$country32["countries"] => array (
		$dist_pl_de["countryTo"] => $dist_pl_de["distance"],
		$dist_pl_sk["countryTo"] => $dist_pl_sk["distance"],
		$dist_pl_ua["countryTo"] => $dist_pl_ua["distance"],
		$dist_pl_by["countryTo"] => $dist_pl_by["distance"],
		$dist_pl_cz["countryTo"] => $dist_pl_cz["distance"],
		$dist_pl_lt["countryTo"] => $dist_pl_lt["distance"]
),	
	
	//Portugal
	$country33["countries"] => array (
		$dist_pt_es["countryTo"] => $dist_pt_es["distance"]
),	
	
	//Romania
	$country34["countries"] => array (
		$dist_ro_rs["countryTo"] => $dist_ro_rs["distance"],
		$dist_ro_hu["countryTo"] => $dist_ro_hu["distance"],
		$dist_ro_md["countryTo"] => $dist_ro_md["distance"],
		$dist_ro_ua["countryTo"] => $dist_ro_ua["distance"],
		$dist_ro_bg["countryTo"] => $dist_ro_bg["distance"]
),	
	
	//Serbia
	$country36["countries"] => array (
		$dist_rs_ro["countryTo"] => $dist_rs_ro["distance"],
		$dist_rs_hu["countryTo"] => $dist_rs_hu["distance"],
		$dist_rs_me["countryTo"] => $dist_rs_me["distance"],
		$dist_rs_ba["countryTo"] => $dist_rs_ba["distance"],
		$dist_rs_mk["countryTo"] => $dist_rs_mk["distance"],
		$dist_rs_bg["countryTo"] => $dist_rs_bg["distance"],
		$dist_rs_hr["countryTo"] => $dist_rs_hr["distance"]
),	
	
	//Slovakia
	$country37["countries"] => array (
		$dist_sk_hu["countryTo"] => $dist_sk_hu["distance"],
		$dist_sk_ua["countryTo"] => $dist_sk_ua["distance"],
		$dist_sk_cz["countryTo"] => $dist_sk_cz["distance"],
		$dist_sk_at["countryTo"] => $dist_sk_at["distance"],
		$dist_sk_pl["countryTo"] => $dist_sk_pl["distance"]
),	
	
	//Slovenia
	$country38["countries"] => array (
		$dist_si_hu["countryTo"] => $dist_si_hu["distance"],
		$dist_si_it["countryTo"] => $dist_si_it["distance"],
		$dist_si_at["countryTo"] => $dist_si_at["distance"],
		$dist_si_hr["countryTo"] => $dist_si_hr["distance"]
),	
	
	//Spain
	$country39["countries"] => array (
		$dist_es_ad["countryTo"] => $dist_es_ad["distance"],
		$dist_es_pt["countryTo"] => $dist_es_pt["distance"],
		$dist_es_fr["countryTo"] => $dist_es_fr["distance"]
),	
	
	//Sweden
	$country40["countries"] => array (
		$dist_se_dk["countryTo"] => $dist_se_dk["distance"],
		$dist_se_fi["countryTo"] => $dist_se_fi["distance"],
		$dist_se_no["countryTo"] => $dist_se_no["distance"]
),	
 
	//Switzerland
	$country41["countries"] => array (
		$dist_ch_de["countryTo"] => $dist_ch_de["distance"],
		$dist_ch_fr["countryTo"] => $dist_ch_fr["distance"],
		$dist_ch_it["countryTo"] => $dist_ch_it["distance"],
		$dist_ch_li["countryTo"] => $dist_ch_li["distance"],
		$dist_ch_at["countryTo"] => $dist_ch_at["distance"]
),	

	//Turkey
	$country42["countries"] => array (
		$dist_tr_gr["countryTo"] => $dist_tr_gr["distance"],
		$dist_tr_bg["countryTo"] => $dist_tr_bg["distance"]
),	
	
	//Ukraine
	$country43["countries"] => array (
		$dist_ua_sk["countryTo"] => $dist_ua_sk["distance"],
		$dist_ua_ro["countryTo"] => $dist_ua_ro["distance"],
		$dist_ua_hu["countryTo"] => $dist_ua_hu["distance"],
		$dist_ua_md["countryTo"] => $dist_ua_md["distance"],
		$dist_ua_by["countryTo"] => $dist_ua_by["distance"],
		$dist_ua_pl["countryTo"] => $dist_ua_pl["distance"]
),	

	//United Kingdom
	$country44["countries"] => array (
		$dist_uk_nl["countryTo"] => $dist_uk_nl["distance"],
		$dist_uk_be["countryTo"] => $dist_uk_be["distance"],
		$dist_uk_ie["countryTo"] => $dist_uk_ie["distance"],
		$dist_uk_fr["countryTo"] => $dist_uk_fr["distance"]
),
);


	// select value time from table ways
	$query = "SELECT countryTo, times from ways";
	$result_time = $mysqli->query($query);
	
	// Albania
	$time_al_gr = $result_time->fetch_array(MYSQLI_ASSOC);	//Albania -> Greece
	$time_al_rs = $result_time->fetch_array(MYSQLI_ASSOC); 	//Albania -> Serbia
	$time_al_me = $result_time->fetch_array(MYSQLI_ASSOC);  //Albania -> Montenegro
	$time_al_mk = $result_time->fetch_array(MYSQLI_ASSOC);	//Albania -> Macedonia

	//Andorra
	$time_ad_es = $result_time->fetch_array(MYSQLI_ASSOC);	//Andorra -> Spain
	$time_ad_fr = $result_time->fetch_array(MYSQLI_ASSOC);	//Andorra -> France

	//Austria
	$time_at_de = $result_time->fetch_array(MYSQLI_ASSOC);	//Austria -> Germany
	$time_at_ch = $result_time->fetch_array(MYSQLI_ASSOC); 	//Austria -> Switzerland
	$time_at_sk = $result_time->fetch_array(MYSQLI_ASSOC); 	//Austria -> Slovakia
	$time_at_hu = $result_time->fetch_array(MYSQLI_ASSOC); 	//Austria -> Hungary
	$time_at_si = $result_time->fetch_array(MYSQLI_ASSOC); 	//Austria -> Slovenia
	$time_at_cz = $result_time->fetch_array(MYSQLI_ASSOC); 	//Austria -> Czech Republic
	$time_at_it = $result_time->fetch_array(MYSQLI_ASSOC); 	//Austria -> Italy
	$time_at_li = $result_time->fetch_array(MYSQLI_ASSOC); 	//Austria -> Liechtenstein
	
	//Belarus
	$time_by_ua = $result_time->fetch_array(MYSQLI_ASSOC); 	//Belarus -> Ukraine
	$time_by_lt = $result_time->fetch_array(MYSQLI_ASSOC); 	//Belarus -> Lithuania
	$time_by_pl = $result_time->fetch_array(MYSQLI_ASSOC); 	//Belarus -> Poland
	
	//Belgium
	$time_be_nl = $result_time->fetch_array(MYSQLI_ASSOC); 	//Belgium -> Netherlands  
	$time_be_de = $result_time->fetch_array(MYSQLI_ASSOC); 	//Belgium -> Germany
	$time_be_lu = $result_time->fetch_array(MYSQLI_ASSOC); 	//Belgium -> Luxembourg
	$time_be_fr = $result_time->fetch_array(MYSQLI_ASSOC); 	//Belgium -> France

	//Bosnia and Herzegovina
	$time_ba_rs = $result_time->fetch_array(MYSQLI_ASSOC); //Bosnia and Herzegovina -> Serbia
	$time_ba_me = $result_time->fetch_array(MYSQLI_ASSOC); //Bosnia and Herzegovina -> Montenegro
	$time_ba_hr = $result_time->fetch_array(MYSQLI_ASSOC); //Bosnia and Herzegovina -> Croatia
	
	//Bulgaria
	$time_bg_tr = $result_time->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Turkey
	$time_bg_gr = $result_time->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Greece
	$time_bg_rs = $result_time->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Serbia
	$time_bg_ro = $result_time->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Romania
	$time_bg_mk = $result_time->fetch_array(MYSQLI_ASSOC); //Bulgaria -> Macedonia
	
	//Croatia
	$time_hr_rs = $result_time->fetch_array(MYSQLI_ASSOC); //Croatia -> Serbia
	$time_hr_hu = $result_time->fetch_array(MYSQLI_ASSOC); //Croatia -> Hungary
	$time_hr_si = $result_time->fetch_array(MYSQLI_ASSOC); //Croatia -> Slovenia
	$time_hr_me = $result_time->fetch_array(MYSQLI_ASSOC); //Croatia -> Montenegro
	$time_hr_ba = $result_time->fetch_array(MYSQLI_ASSOC); //Croatia -> Bosnia and Herzegovina

	//Czech Republic
	$time_cz_de = $result_time->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Germany
	$time_cz_sk = $result_time->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Slovakia
	$time_cz_at = $result_time->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Austria
	$time_cz_pl = $result_time->fetch_array(MYSQLI_ASSOC); //Czech Republic -> Poland

	//Denmark
	$time_dk_de = $result_time->fetch_array(MYSQLI_ASSOC); //Denmark -> Germany
	$time_dk_se = $result_time->fetch_array(MYSQLI_ASSOC); //Denmark -> Sweden

	//Estonia
	$time_ee_fi = $result_time->fetch_array(MYSQLI_ASSOC); //Estonia -> Finland
	$time_ee_lv = $result_time->fetch_array(MYSQLI_ASSOC); //Estonia -> Latvia

	//Finland
	$time_fi_se = $result_time->fetch_array(MYSQLI_ASSOC); //Finland -> Sweden
	$time_fi_ee = $result_time->fetch_array(MYSQLI_ASSOC); //Finland -> Estonia

	//France
	$time_fr_ad = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Andorra
	$time_fr_de = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Germany
	$time_fr_ch = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Switzerland
	$time_fr_be = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Belgium
	$time_fr_lu = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Luxembourg
	$time_fr_es = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Spain
	$time_fr_mc = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Monaco
	$time_fr_it = $result_time->fetch_array(MYSQLI_ASSOC); //France -> Italy

	//Germany
	$time_de_nl = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Netherlands  
	$time_de_ch = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Switzerland
	$time_de_be = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Belgium
	$time_de_dk = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Denmark
	$time_de_lu = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Luxembourg
	$time_de_fr = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> France
	$time_de_cz = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Czech Republic
	$time_de_at = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Austria
	$time_de_pl = $result_time->fetch_array(MYSQLI_ASSOC); //Germany -> Poland

	//Greece
	$time_gr_tr = $result_time->fetch_array(MYSQLI_ASSOC); //Greece -> Turkey
	$time_gr_mk = $result_time->fetch_array(MYSQLI_ASSOC); //Greece -> Macedonia
	$time_gr_bg = $result_time->fetch_array(MYSQLI_ASSOC); //Greece -> Bulgaria
	$time_gr_al = $result_time->fetch_array(MYSQLI_ASSOC); //Greece -> Albania

	//Hungary
	$time_hu_rs = $result_time->fetch_array(MYSQLI_ASSOC); //Hungary -> Serbia
	$time_hu_sk = $result_time->fetch_array(MYSQLI_ASSOC); //Hungary -> Slovakia
	$time_hu_ro = $result_time->fetch_array(MYSQLI_ASSOC); //Hungary -> Romania
	$time_hu_ua = $result_time->fetch_array(MYSQLI_ASSOC); //Hungary -> Ukraine
	$time_hu_si = $result_time->fetch_array(MYSQLI_ASSOC); //Hungary -> Slovenia
	$time_hu_at = $result_time->fetch_array(MYSQLI_ASSOC); //Hungary -> Austria
	$time_hu_hr = $result_time->fetch_array(MYSQLI_ASSOC); //Hungary -> Croatia

	//Ireland 
	$time_ie_uk = $result_time->fetch_array(MYSQLI_ASSOC); //Ireland -> United Kingdom

	//Italy
	$time_it_ch = $result_time->fetch_array(MYSQLI_ASSOC); //Italy -> Switzerland
	$time_it_si = $result_time->fetch_array(MYSQLI_ASSOC); //Italy -> Slovenia
	$time_it_fr = $result_time->fetch_array(MYSQLI_ASSOC); //Italy -> France
	$time_it_at = $result_time->fetch_array(MYSQLI_ASSOC); //Italy -> Austria

	//Latvia	
	$time_lv_lt = $result_time->fetch_array(MYSQLI_ASSOC); //Latvia -> Lithuania
	$time_lv_ee = $result_time->fetch_array(MYSQLI_ASSOC); //Latvia -> Estonia

	//Liechtenstein
	$time_li_ch = $result_time->fetch_array(MYSQLI_ASSOC); //Liechtenstein -> Switzerland
	$time_li_at = $result_time->fetch_array(MYSQLI_ASSOC); //Liechtenstein -> Austria

	//Lithuania
	$time_lt_by = $result_time->fetch_array(MYSQLI_ASSOC); //Lithuania -> Belarus
	$time_lt_lv = $result_time->fetch_array(MYSQLI_ASSOC); //Lithuania -> Latvia
	$time_lt_pl = $result_time->fetch_array(MYSQLI_ASSOC); //Lithuania -> Poland

	//Luxembourg
	$time_lu_be = $result_time->fetch_array(MYSQLI_ASSOC); //Luxembourg -> Belgium
	$time_lu_de = $result_time->fetch_array(MYSQLI_ASSOC); //Luxembourg -> Germany
	$time_lu_fr = $result_time->fetch_array(MYSQLI_ASSOC); //Luxembourg -> France
	
	//Macedonia
	$time_mk_gr = $result_time->fetch_array(MYSQLI_ASSOC); //Macedonia -> Greece
	$time_mk_ro = $result_time->fetch_array(MYSQLI_ASSOC); //Macedonia -> Romania
	$time_mk_bg = $result_time->fetch_array(MYSQLI_ASSOC); //Macedonia -> Bulgaria
	$time_mk_al = $result_time->fetch_array(MYSQLI_ASSOC); //Macedonia -> Albania

	//Moldova	
	$time_md_ro = $result_time->fetch_array(MYSQLI_ASSOC); //Moldova -> Romania
	$time_md_ua = $result_time->fetch_array(MYSQLI_ASSOC); //Moldova -> Ukraine

	//Monaco
	$time_mc_fr = $result_time->fetch_array(MYSQLI_ASSOC); //Monaco -> France

	//Montenegro
	$time_me_ba = $result_time->fetch_array(MYSQLI_ASSOC); //Montenegro -> Bosnia and Herzegovina
	$time_me_rs = $result_time->fetch_array(MYSQLI_ASSOC); //Montenegro -> Serbia
	$time_me_al = $result_time->fetch_array(MYSQLI_ASSOC); //Montenegro -> Albania
	$time_me_hr = $result_time->fetch_array(MYSQLI_ASSOC); //Montenegro -> Croatia

	//Netherlands
	$time_nl_de = $result_time->fetch_array(MYSQLI_ASSOC); //Netherlands -> Germany
	$time_nl_be = $result_time->fetch_array(MYSQLI_ASSOC); //Netherlands -> Belgium
	$time_nl_uk = $result_time->fetch_array(MYSQLI_ASSOC); //Netherlands -> United Kingdom

	//Norway
	$time_no_fi = $result_time->fetch_array(MYSQLI_ASSOC); //Norway -> Finland
	$time_no_se = $result_time->fetch_array(MYSQLI_ASSOC); //Norway -> Sweden

	//Poland
	$time_pl_de = $result_time->fetch_array(MYSQLI_ASSOC); //Poland -> Germany
	$time_pl_sk = $result_time->fetch_array(MYSQLI_ASSOC); //Poland -> Slovakia
	$time_pl_ua = $result_time->fetch_array(MYSQLI_ASSOC); //Poland -> Ukraine
	$time_pl_by = $result_time->fetch_array(MYSQLI_ASSOC); //Poland -> Belarus
	$time_pl_cz = $result_time->fetch_array(MYSQLI_ASSOC); //Poland -> Czech Republic
	$time_pl_lt = $result_time->fetch_array(MYSQLI_ASSOC); //Poland -> Lithuania
	
	//Portugal
	$time_pt_es = $result_time->fetch_array(MYSQLI_ASSOC); //Portugal -> Spain

	//Romania
	$time_ro_rs = $result_time->fetch_array(MYSQLI_ASSOC); //Romania -> Serbia
	$time_ro_hu = $result_time->fetch_array(MYSQLI_ASSOC); //Romania -> Hungary
	$time_ro_md = $result_time->fetch_array(MYSQLI_ASSOC); //Romania -> Moldova
	$time_ro_ua = $result_time->fetch_array(MYSQLI_ASSOC); //Romania -> Ukraine
	$time_ro_bg = $result_time->fetch_array(MYSQLI_ASSOC); //Romania -> Bulgaria

	//Serbia
	$time_rs_ro = $result_time->fetch_array(MYSQLI_ASSOC); //Serbia -> Romania
	$time_rs_hu = $result_time->fetch_array(MYSQLI_ASSOC); //Serbia -> Hungary
	$time_rs_me = $result_time->fetch_array(MYSQLI_ASSOC); //Serbia -> Montenegro
	$time_rs_ba = $result_time->fetch_array(MYSQLI_ASSOC); //Serbia -> Bosnia and Herzegovina
	$time_rs_mk = $result_time->fetch_array(MYSQLI_ASSOC); //Serbia -> Macedonia
	$time_rs_bg = $result_time->fetch_array(MYSQLI_ASSOC); //Serbia -> Bulgaria
	$time_rs_hr = $result_time->fetch_array(MYSQLI_ASSOC); //Serbia -> Croatia

	//Slovakia
	$time_sk_hu = $result_time->fetch_array(MYSQLI_ASSOC); //Slovakia -> Hungary
	$time_sk_ua = $result_time->fetch_array(MYSQLI_ASSOC); //Slovakia -> Ukraine
	$time_sk_cz = $result_time->fetch_array(MYSQLI_ASSOC); //Slovakia -> Czech Republic
	$time_sk_at = $result_time->fetch_array(MYSQLI_ASSOC); //Slovakia -> Austria
	$time_sk_pl = $result_time->fetch_array(MYSQLI_ASSOC); //Slovakia -> Poland

	//Slovenia
	$time_si_hu = $result_time->fetch_array(MYSQLI_ASSOC); //Slovenia -> Hungary
	$time_si_it = $result_time->fetch_array(MYSQLI_ASSOC); //Slovenia -> Italy
	$time_si_at = $result_time->fetch_array(MYSQLI_ASSOC); //Slovenia -> Austria
	$time_si_hr = $result_time->fetch_array(MYSQLI_ASSOC); //Slovenia -> Croatia
	
	//Spain
	$time_es_ad = $result_time->fetch_array(MYSQLI_ASSOC); //Spain -> Andorra
	$time_es_pt = $result_time->fetch_array(MYSQLI_ASSOC); //Spain -> Portugal
	$time_es_fr = $result_time->fetch_array(MYSQLI_ASSOC); //Spain -> France

	//Sweden
	$time_se_dk = $result_time->fetch_array(MYSQLI_ASSOC); //Sweden -> Denmark
	$time_se_fi = $result_time->fetch_array(MYSQLI_ASSOC); //Sweden -> Finland
	$time_se_no = $result_time->fetch_array(MYSQLI_ASSOC); //Sweden -> Norway

	//Switzerland
	$time_ch_de = $result_time->fetch_array(MYSQLI_ASSOC); //Switzerland -> Germany
	$time_ch_fr = $result_time->fetch_array(MYSQLI_ASSOC); //Switzerland -> France
	$time_ch_it = $result_time->fetch_array(MYSQLI_ASSOC); //Switzerland -> Italy
	$time_ch_li = $result_time->fetch_array(MYSQLI_ASSOC); //Switzerland -> Liechtenstein
	$time_ch_at = $result_time->fetch_array(MYSQLI_ASSOC); //Switzerland -> Austria

	//Turkey
	$time_tr_gr = $result_time->fetch_array(MYSQLI_ASSOC); //Turkey -> Greece
	$time_tr_bg = $result_time->fetch_array(MYSQLI_ASSOC); //Turkey -> Bulgaria

	//Ukraine
	$time_ua_sk = $result_time->fetch_array(MYSQLI_ASSOC); //Ukraine -> Slovakia
	$time_ua_ro = $result_time->fetch_array(MYSQLI_ASSOC); //Ukraine -> Romania
	$time_ua_hu = $result_time->fetch_array(MYSQLI_ASSOC); //Ukraine -> Hungary
	$time_ua_md = $result_time->fetch_array(MYSQLI_ASSOC); //Ukraine -> Moldova
	$time_ua_by = $result_time->fetch_array(MYSQLI_ASSOC); //Ukraine -> Belarus
	$time_ua_pl = $result_time->fetch_array(MYSQLI_ASSOC); //Ukraine -> Poland

	//United Kingdom
	$time_uk_nl = $result_time->fetch_array(MYSQLI_ASSOC); //United Kingdom -> Netherlands  
	$time_uk_be = $result_time->fetch_array(MYSQLI_ASSOC); //United Kingdom -> Belgium
	$time_uk_ie = $result_time->fetch_array(MYSQLI_ASSOC); //United Kingdom -> Ireland
	$time_uk_fr = $result_time->fetch_array(MYSQLI_ASSOC); //United Kingdom -> France
	$result_time->free();	

   $graph_time = array( 
	
	//Albania
	$country1["countries"] => array (
		$time_al_gr["countryTo"] => $time_al_gr["times"],
		$time_al_rs["countryTo"] => $time_al_rs["times"],
		$time_al_me["countryTo"] => $time_al_me["times"],
		$time_al_mk["countryTo"] => $time_al_mk["times"]
	),
	
	//Andorra
	$country2["countries"] => array (
		$time_ad_es["countryTo"] => $time_ad_es["times"],
		$time_ad_fr["countryTo"] => $time_ad_fr["times"]
	),
	
	//Austria
	$country3["countries"] => array (
		$time_at_de["countryTo"] => $time_at_de["times"],
		$time_at_ch["countryTo"] => $time_at_ch["times"],
		$time_at_sk["countryTo"] => $time_at_sk["times"],
		$time_at_hu["countryTo"] => $time_at_hu["times"],
		$time_at_si["countryTo"] => $time_at_si["times"],
		$time_at_cz["countryTo"] => $time_at_cz["times"],
		$time_at_it["countryTo"] => $time_at_it["times"],
		$time_at_li["countryTo"] => $time_at_li["times"]
	),
	
	//Belarus
	$country4["countries"] => array (
		$time_by_ua["countryTo"] => $time_by_ua["distance"],
		$time_by_lt["countryTo"] => $time_by_lt["distance"],
		$time_by_pl["countryTo"] => $time_by_pl["distance"]
),
	
	//Belgium
	$country5["countries"] => array (
		$time_be_nl["countryTo"] => $time_be_nl["distance"],
		$time_be_de["countryTo"] => $time_be_de["distance"],
		$time_be_lu["countryTo"] => $time_be_lu["distance"],
		$time_be_fr["countryTo"] => $time_be_fr["distance"]
),
	
	//Bosnia and Herzegovina
	$country6["countries"] => array (
		$time_ba_rs["countryTo"] => $time_ba_rs["distance"],
		$time_ba_me["countryTo"] => $time_ba_me["distance"],
		$time_ba_hr["countryTo"] => $time_ba_hr["distance"]
),
	
	//Bulgaria
	$country7["countries"] => array (
		$time_bg_tr["countryTo"] => $time_bg_tr["times"],
		$time_bg_gr["countryTo"] => $time_bg_gr["times"],
		$time_bg_rs["countryTo"] => $time_bg_rs["times"],
		$time_bg_ro["countryTo"] => $time_bg_ro["times"],
		$time_bg_mk["countryTo"] => $time_bg_mk["times"]
),
	
	//Croatia
	$country8["countries"] => array (
		$time_hr_rs["countryTo"] => $time_hr_rs["times"],
		$time_hr_hu["countryTo"] => $time_hr_hu["times"],
		$time_hr_si["countryTo"] => $time_hr_si["times"],
		$time_hr_me["countryTo"] => $time_hr_me["times"],
		$time_hr_ba["countryTo"] => $time_hr_ba["times"]
),
	
	//Czech Republic
	$country10["countries"] => array (
		$time_cz_de["countryTo"] => $time_cz_de["times"],
		$time_cz_sk["countryTo"] => $time_cz_sk["times"],
		$time_cz_at["countryTo"] => $time_cz_at["times"],
		$time_cz_pl["countryTo"] => $time_cz_pl["times"]
),
	
	//Denmark
	$country11["countries"] => array (
		$time_dk_de["countryTo"] => $time_dk_de["times"],
		$time_dk_se["countryTo"] => $time_dk_se["times"]
),
	
	//Estonia
	$country12["countries"] => array (
		$time_ee_fi["countryTo"] => $time_ee_fi["times"],
		$time_ee_lv["countryTo"] => $time_ee_lv["times"]
),
	
	//Finland	
	$country13["countries"] => array (
		$time_fi_se["countryTo"] => $time_fi_se["times"],
		$time_fi_ee["countryTo"] => $time_fi_ee["times"]
),
	
	//France
	$country14["countries"] => array (
		$time_fr_ad["countryTo"] => $time_fr_ad["times"],
		$time_fr_de["countryTo"] => $time_fr_de["times"],
		$time_fr_ch["countryTo"] => $time_fr_ch["times"],
		$time_fr_be["countryTo"] => $time_fr_be["times"],
		$time_fr_lu["countryTo"] => $time_fr_lu["times"],
		$time_fr_es["countryTo"] => $time_fr_es["times"],
		$time_fr_mc["countryTo"] => $time_fr_mc["times"],
		$time_at_it["countryTo"] => $time_at_it["times"]
),
	
	//Germany
	$country15["countries"] => array (
		$time_de_nl["countryTo"] => $time_de_nl["times"],
		$time_de_ch["countryTo"] => $time_de_ch["times"],
		$time_de_be["countryTo"] => $time_de_be["times"],
		$time_de_dk["countryTo"] => $time_de_dk["times"],
		$time_de_lu["countryTo"] => $time_de_lu["times"],
		$time_de_fr["countryTo"] => $time_de_fr["times"],
		$time_de_cz["countryTo"] => $time_de_cz["times"],
		$time_de_at["countryTo"] => $time_de_at["times"],
		$time_de_pl["countryTo"] => $time_de_pl["times"]
),
	
	//Greece
	$country16["countries"] => array (
		$time_gr_tr["countryTo"] => $time_gr_tr["times"],
		$time_gr_mk["countryTo"] => $time_gr_mk["times"],
		$time_gr_bg["countryTo"] => $time_gr_bg["times"],
		$time_gr_al["countryTo"] => $time_gr_al["times"]
),
	
	//Hungary
	$country17["countries"] => array (
		$time_hu_rs["countryTo"] => $time_hu_rs["times"],
		$time_hu_sk["countryTo"] => $time_hu_sk["times"],
		$time_hu_ro["countryTo"] => $time_hu_ro["times"],
		$time_hu_ua["countryTo"] => $time_hu_ua["times"],
		$time_hu_si["countryTo"] => $time_hu_si["times"],
		$time_hu_at["countryTo"] => $time_hu_at["times"],
		$time_hu_hr["countryTo"] => $time_hu_hr["times"]
),
	
	//Ireland
	$country19["countries"] => array (
		$time_ie_uk["countryTo"] => $time_ie_uk["times"]
),
	
	//Italy
	$country20["countries"] => array (
		$time_it_ch["countryTo"] => $time_it_ch["times"],
		$time_it_si["countryTo"] => $time_it_si["times"],
		$time_it_fr["countryTo"] => $time_it_fr["times"],
		$time_it_at["countryTo"] => $time_it_at["times"]
),
	
	//Latvia
	$country21["countries"] => array (
		$time_lv_lt["countryTo"] => $time_lv_lt["times"],
		$time_lv_ee["countryTo"] => $time_lv_ee["times"]
),
	//Liechtenstein
	$country22["countries"] => array (
		$time_li_ch["countryTo"] => $time_li_ch["times"],
		$time_li_at["countryTo"] => $time_li_at["times"]
),
	
	//Lithuania
	$country23["countries"] => array (
		$time_lt_by["countryTo"] => $time_lt_by["times"],
		$time_lt_lv["countryTo"] => $time_lt_lv["times"],
		$time_lt_pl["countryTo"] => $time_lt_pl["times"]
),
	
	//Luxembourg
	$country24["countries"] => array (
		$time_lu_be["countryTo"] => $time_lu_be["times"],
		$time_lu_de["countryTo"] => $time_lu_de["times"],
		$time_lu_fr["countryTo"] => $time_lu_fr["times"]
),	
	
	//Macedonia
	$country25["countries"] => array (
		$time_mk_gr["countryTo"] => $time_mk_gr["times"],
		$time_mk_ro["countryTo"] => $time_mk_ro["times"],
		$time_mk_bg["countryTo"] => $time_mk_bg["times"],
		$time_mk_al["countryTo"] => $time_mk_al["times"]
),	
	
	//Moldova
	$country27["countries"] => array (
		$time_md_ro["countryTo"] => $time_md_ro["times"],
		$time_md_ua["countryTo"] => $time_md_ua["times"]
),
	
	//Monaco
	$country28["countries"] => array (
		$time_mc_fr["countryTo"] => $time_mc_fr["times"]
),
	
	//Montenegro
	$country29["countries"] => array (
		$time_me_ba["countryTo"] => $time_me_ba["times"],
		$time_me_rs["countryTo"] => $time_me_rs["times"],
		$time_me_al["countryTo"] => $time_me_al["times"],
		$time_me_hr["countryTo"] => $time_me_hr["times"]
),	
	
	//Netherlands
	$country30["countries"] => array (
		$time_nl_de["countryTo"] => $time_nl_de["times"],
		$time_nl_be["countryTo"] => $time_nl_be["times"],
		$time_nl_uk["countryTo"] => $time_nl_uk["times"]
),	
	
	//Norway
	$country31["countries"] => array (
		$time_no_fi["countryTo"] => $time_no_fi["times"],
		$time_no_se["countryTo"] => $time_no_se["times"]
),	
	
	//Poland
	$country32["countries"] => array (
		$time_pl_de["countryTo"] => $time_pl_de["times"],
		$time_pl_sk["countryTo"] => $time_pl_sk["times"],
		$time_pl_ua["countryTo"] => $time_pl_ua["times"],
		$time_pl_by["countryTo"] => $time_pl_by["times"],
		$time_pl_cz["countryTo"] => $time_pl_cz["times"],
		$time_pl_lt["countryTo"] => $time_pl_lt["times"]
),	
	
	//Portugal
	$country33["countries"] => array (
		$time_pt_es["countryTo"] => $time_pt_es["times"]
),	
	
	//Romania
	$country34["countries"] => array (
		$time_ro_rs["countryTo"] => $time_ro_rs["times"],
		$time_ro_hu["countryTo"] => $time_ro_hu["times"],
		$time_ro_md["countryTo"] => $time_ro_md["times"],
		$time_ro_ua["countryTo"] => $time_ro_ua["times"],
		$time_ro_bg["countryTo"] => $time_ro_bg["times"]
),	
	
	//Serbia
	$country36["countries"] => array (
		$time_rs_ro["countryTo"] => $time_rs_ro["times"],
		$time_rs_hu["countryTo"] => $time_rs_hu["times"],
		$time_rs_me["countryTo"] => $time_rs_me["times"],
		$time_rs_ba["countryTo"] => $time_rs_ba["times"],
		$time_rs_mk["countryTo"] => $time_rs_mk["times"],
		$time_rs_bg["countryTo"] => $time_rs_bg["times"],
		$time_rs_hr["countryTo"] => $time_rs_hr["times"]
),	
	
	//Slovakia
	$country37["countries"] => array (
		$time_sk_hu["countryTo"] => $time_sk_hu["times"],
		$time_sk_ua["countryTo"] => $time_sk_ua["times"],
		$time_sk_cz["countryTo"] => $time_sk_cz["times"],
		$time_sk_at["countryTo"] => $time_sk_at["times"],
		$time_sk_pl["countryTo"] => $time_sk_pl["times"]
),	
	
	//Slovenia
	$country38["countries"] => array (
		$time_si_hu["countryTo"] => $time_si_hu["times"],
		$time_si_it["countryTo"] => $time_si_it["times"],
		$time_si_at["countryTo"] => $time_si_at["times"],
		$time_si_hr["countryTo"] => $time_si_hr["times"]
),	
	
	//Spain
	$country39["countries"] => array (
		$time_es_ad["countryTo"] => $time_es_ad["times"],
		$time_es_pt["countryTo"] => $time_es_pt["times"],
		$time_es_fr["countryTo"] => $time_es_fr["times"]
),	
	
	//Sweden
	$country40["countries"] => array (
		$time_se_dk["countryTo"] => $time_se_dk["times"],
		$time_se_fi["countryTo"] => $time_se_fi["times"],
		$time_se_no["countryTo"] => $time_se_no["times"]
),	
 
	//Switzerland
	$country41["countries"] => array (
		$time_ch_de["countryTo"] => $time_ch_de["times"],
		$time_ch_fr["countryTo"] => $time_ch_fr["times"],
		$time_ch_it["countryTo"] => $time_ch_it["times"],
		$time_ch_li["countryTo"] => $time_ch_li["times"],
		$time_ch_at["countryTo"] => $time_ch_at["times"]
),	

	//Turkey
	$country42["countries"] => array (
		$time_tr_gr["countryTo"] => $time_tr_gr["times"],
		$time_tr_bg["countryTo"] => $time_tr_bg["times"]
),	
	
	//Ukraine
	$country43["countries"] => array (
		$time_ua_sk["countryTo"] => $time_ua_sk["times"],
		$time_ua_ro["countryTo"] => $time_ua_ro["times"],
		$time_ua_hu["countryTo"] => $time_ua_hu["times"],
		$time_ua_md["countryTo"] => $time_ua_md["times"],
		$time_ua_by["countryTo"] => $time_ua_by["times"],
		$time_ua_pl["countryTo"] => $time_ua_pl["times"]
),	

	//United Kingdom
	$country44["countries"] => array (
		$time_uk_nl["countryTo"] => $time_uk_nl["times"],
		$time_uk_be["countryTo"] => $time_uk_be["times"],
		$time_uk_ie["countryTo"] => $time_uk_ie["times"],
		$time_uk_fr["countryTo"] => $time_uk_fr["times"]
),
);

$mysqli->close();
 ?> 