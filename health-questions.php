<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; 
	$page = 'health-questions';?>
<title>ગામની મુલાકાતનું પત્રક</title>
	<?php include 'main-header.php'; ?>
<style>
    .step {
      display: none;
    }
    .step.active {
      display: block;
    }
</style>

<body>

    <div class="container mt-3">
		<div class="card mb-3">

                                <div class="card-body">
        <form id="surveyForm">
     		<!-- Step 3 -->
            <div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">આરોગ્યને બાબતના પ્રશ્નો</h5>
					  <div class="col-md-6 mb-3">
  	<label for="validationCustom03">તાલુકાનું નામ:</label>
      <select class="form-select" name="category" id="validationCustom03" onchange="ChangecatList()" required>
        <option value="">તાલુકો સિલેક્ટ કરો</option>
				<option value="taluka1">ગાંધીનગર</option>
				<option value="taluka2">કલોલ</option>
				<option value="taluka3">દહેગામ</option>
				<option value="taluka4">માણસા</option>
      </select>
	<div class="invalid-feedback">
		Please provide a category.
	</div>
  </div>
  <div class="col-md-6 mb-3">
  	<label for="validationCustom04">ગામનું નામ:</label>
     <select class="form-select" id="validationCustom04" name="activity" required></select>
    <div class="invalid-feedback">
		Please provide an activity.
	</div>
  </div>
	
						<div class="col-md-12">
                    <label for="health_1" class="form-label">CHC ખાતે ગાયનેકોલોજીસ્ટ ડૉક્ટર કે અન્ય કોઇ ડૉક્ટર વિરૂધ્ધ રજુઆત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="health_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="health_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_1v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="health_2" class="form-label">CHC ખાતે ડીલીવરી થાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="health_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="health_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_2v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="health_3" class="form-label">PHC/CHC-ખાતે સ્ટાફની ભરેલી/ખાલી જગ્યા</label>
                    <input type="text" class="form-control" id="phcchcsj" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="health_3" class="form-label">CHC ના ડૉક્ટરનું પ્રાઇવેટ પ્રેક્ટીસનું  ચલણ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="health_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="health_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_3v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="health_4" class="form-label">સબ સેન્ટરની જરૂરીયત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="health_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="health_4v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_4v" placeholder="">
                </div>
							<div class="col-md-12">
						<label for="health_5" class="form-label">PHC/CHC ની VISIT કોઇ અધિકારી દ્વારા કરવામાં આવે છે કે, કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_5">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_5v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_5v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_6" class="form-label">ટ્યુબવેલ માથી છોડવામાં આવતુ પાણી ક્લોરીનયુક્ત છે કે, કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_6">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_6v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_6v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_7v1" class="form-label">PHC સાથે જોડાયેલા ગામોની વિગતો ૧</label>
						<input type="text" class="form-control" id="health_7v1" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_7v2" class="form-label">PHC સાથે જોડાયેલા ગામોની વિગતો ૨</label>
						<input type="text" class="form-control" id="health_7v2" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_7v3" class="form-label">PHC સાથે જોડાયેલા ગામોની વિગતો ૩</label>
						<input type="text" class="form-control" id="health_7v3" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_8" class="form-label">માળખાકીય સુવિધાઓ – PHC બિલ્ડીંગ / સ્ટાફ ક્વાટર્સ / ડોક્ટર્સ કવાટર્સ સંબંધિત વિગતો</label>
							<select class="form-select" aria-label="Default select example" id="health_8">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_8v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_8v" placeholder="">
                </div>
					<div class="col-md-12">
						<label for="health_9" class="form-label">સ્ટાફની હાજરીની વિગતો</label>
						<input type="text" class="form-control" id="health_9" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_10" class="form-label">અન્ય જરૂરી સગવડો અંગે નિરીક્ષણ અને અભિપ્રાય</label>
						<input type="text" class="form-control" id="health_10" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_11" class="form-label">માસિક OPD સંબંધિત વિગતો</label>
						<input type="text" class="form-control" id="health_11" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_12" class="form-label">હિમોગ્લોબીન/ ડાયાબિટીસ/ બ્લડ પ્રેશર તપાસ અને સારવાર સંબંધિત વિગતો</label>
						<input type="text" class="form-control" id="health_12" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_13" class="form-label">બ્લડ ટેસ્ટ માટેના સાધન અને તેની ઉપયોગિતા</label>
							<select class="form-select" aria-label="Default select example" id="health_13">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_13v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_13v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_14" class="form-label">જરૂરી દવાઓની ઉપલબ્ધતા અંગેનો અભિપ્રાય</label>
						<input type="text" class="form-control" id="health_14" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_15_1" class="form-label">(અ) આવશ્યક દવાઓના લિસ્ટ મુજબ PHC ખાતે ઉપલબ્ધ દવાઓ ૧</label>
						<input type="text" class="form-control" id="health_15_1" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_15_2" class="form-label">(અ) આવશ્યક દવાઓના લિસ્ટ મુજબ PHC ખાતે ઉપલબ્ધ દવાઓ ૨</label>
						<input type="text" class="form-control" id="health_15_2" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_15_3" class="form-label">(અ) આવશ્યક દવાઓના લિસ્ટ મુજબ PHC ખાતે ઉપલબ્ધ દવાઓ ૩</label>
						<input type="text" class="form-control" id="health_15_3" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_16" class="form-label">(બ) દવાઓ/કન્ઝયુમેબલ્સનો ઉપલબ્ધ જથ્થો</label>
						<input type="text" class="form-control" id="health_16" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_17_1" class="form-label">(ક) ઉપલબ્ધ ન હોય તેવી દવાઓની યાદી ૧</label>
						<input type="text" class="form-control" id="health_17_1" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_17_2" class="form-label">(ક) ઉપલબ્ધ ન હોય તેવી દવાઓની યાદી ૨</label>
						<input type="text" class="form-control" id="health_17_2" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_17_3" class="form-label">(ક) ઉપલબ્ધ ન હોય તેવી દવાઓની યાદી ૩</label>
						<input type="text" class="form-control" id="health_17_3" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_18_1" class="form-label">(ડ) આગામી ત્રણ માસમાં એક્સપાયર થતી દવાઓનું લીસ્ટ ૧</label>
						<input type="text" class="form-control" id="health_18_1" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_18_2" class="form-label">(ડ) આગામી ત્રણ માસમાં એક્સપાયર થતી દવાઓનું લીસ્ટ ૨</label>
						<input type="text" class="form-control" id="health_18_2" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_18_3" class="form-label">(ડ) આગામી ત્રણ માસમાં એક્સપાયર થતી દવાઓનું લીસ્ટ ૩</label>
						<input type="text" class="form-control" id="health_18_3" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_19" class="form-label">(i) નોંધાયેલી પ્રસૂતિની સંખ્યા</label>
						<input type="text" class="form-control" id="health_19" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_20" class="form-label">(ii) છેલ્લા માસમાં થયેલ સંસ્થાકીય પ્રસૂતિની સંખ્યા</label>
						<input type="text" class="form-control" id="health_20" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_21" class="form-label">(iii) છેલ્લા ૧ વર્ષ દરમ્યાન નોંધાયેલ અન્ડર વેઈટ (ઓછું વજન ધરાવતા) પ્રસૂતિની સંખ્યા</label>
						<input type="text" class="form-control" id="health_21" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_22" class="form-label">ઉચ્ચ જોખમી ગર્ભાવસ્થાના કિસ્સામાં જન્મ પહેલાંની સંભાળ (ANC) કવરેજની ત્રિમાસિક વિગત</label>
						<input type="text" class="form-control" id="health_22" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_23" class="form-label">માતા/શિશુ સ્વાસ્થ્ય સંભાળ સંબંધિત TeCHO+ Software માં ઉપલબ્ધ માહિતી</label>
						<input type="text" class="form-control" id="health_23" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_24" class="form-label">સહાયક નર્સ અને મિડવાઈફ (ANM) દ્વારા નિયમિત ફોલોઅપ સંબંધિત વિગતો</label>
						<input type="text" class="form-control" id="health_24" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_25" class="form-label">FHW / MHW તથા આશા વર્કર દ્વારા લેવાયેલ મુલાકાત અને થયેલ Vaccination ની વિગતો</label>
						<input type="text" class="form-control" id="health_25" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_26" class="form-label">PHC દ્વારા પૂરી પાડવામાં આવતી સેવાઓ અંગે હાજર રહેલ નાગરિકોનો પ્રતિભાવ</label>
						<input type="text" class="form-control" id="health_26" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_27" class="form-label">OPD રજીસ્ટરમા દર્દિના નામ સામે બિમારીના લક્ષણો અથવા બિમારીનુ નામ લખેલ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_27">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_27v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_27v" placeholder="">
                </div>
					<div class="col-md-12">
						<label for="health_28" class="form-label">PAP SMEAR TEST ની સુવિધા ઉપલબ્ધ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_28">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_28v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_28v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_29" class="form-label">Pediatric Patient/નાના બાળકો માટેની આવશ્યક દવાઓ / Syrup ઉપલબ્ધ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_29">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_29v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_29v" placeholder="">
                </div>
					<div class="col-md-12">
						<label for="health_30" class="form-label">WBC/ Differential Count ની ટેસ્ટ થાય છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_30">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_30v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_30v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_31" class="form-label">છેલ્લા ૧ વર્ષમા કેટલા Still Birth થયેલ છે?</label>
						<input type="text" class="form-control" id="health_31" placeholder="">
					</div>
						<!-- <div class="col-md-12">
						<label for="health_32" class="form-label">તે પૈકી શીશુ (દીકરો/દીકરી)ની જાતી?</label>
						<input type="text" class="form-control" id="health_32" placeholder="">
					</div> -->
					<div class="col-md-12 col-sm-12">
						<label for="health_32p" class="form-label">તે પૈકી શીશુ (દીકરો/દીકરી)ની જાતી?</label>
						<input type="text" class="form-control" id="health_32" placeholder="">
					</div>
					<div class="col-md-6 col-sm-12">
						<label for="health_32p" class="form-label">પુરુષ</label>
						<input type="text" class="form-control" id="health_32p" placeholder="">
					</div>
					<div class="col-md-6 col-sm-12">
						<label for="health_32l" class="form-label">સ્ત્રી</label>
						<input type="text" class="form-control" id="health_32l" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_33" class="form-label">પ્રસુતીના કિસ્સામા જન્મેલ બાળકોના જાતી (દીકરો/દીકરી) ની વિગતો?</label>
						<input type="text" class="form-control" id="health_33" placeholder="">
					</div>
										<div class="col-md-6 col-sm-12">
						<label for="health_33s" class="form-label">દીકરો</label>
						<input type="text" class="form-control" id="health_33s" placeholder="">
					</div>
					<div class="col-md-6 col-sm-12">
						<label for="health_33d" class="form-label">દીકરી</label>
						<input type="text" class="form-control" id="health_332d" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_34" class="form-label">છેલ્લા ૧ વર્ષમા નોંધાયેલ Infant Deaths ની સંખ્યા?</label>
						<input type="text" class="form-control" id="health_34" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_35" class="form-label">છેલ્લા ૧ વર્ષમા નોધાયેલ Maternal Deaths ની સંખ્યા?</label>
						<input type="text" class="form-control" id="health_35" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_36" class="form-label">પ્રસુતી માટે અલગથી ડીલવરી રુમ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_36">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_36v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_36v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_37" class="form-label">હાઇ રીસ્ક પ્રેગ્નેન્સીમા નોંધાયેલ અન્ડરવેટ તથા એનીમીક માતાઓની સંખ્યા?</label>
						<input type="text" class="form-control" id="health_37" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_38" class="form-label">ઇન્ડોર પેશ્ન્ટ માટે પુરુષ અને સ્ત્રી માટે અલગ અલગ વોર્ડ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_38">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_38v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_38v" placeholder="">
                </div>
					<div class="col-md-12">
						<label for="health_39" class="form-label">ઇન્ડોર પેશ્ન્ટ માસ દરમ્યાન અંદાજીત કેટલા દર્દિઓ દાખલ થાય છે?</label>
						<input type="text" class="form-control" id="health_39" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_40" class="form-label">PHC નુ બિલ્ડીંગ NQAS પ્રમાણે છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_40">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_40v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_40v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_41" class="form-label">મમતા દિવસમા કેટલી માતા/બાળકોની તપાસ કરવામાં આવે છે?</label>
						<input type="text" class="form-control" id="health_41" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_42" class="form-label">બાળકો ને PHC ખાતે તમામ Vaccine આપવામાં આવે છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_42">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_42v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_42v" placeholder="">
                </div>
					<div class="col-md-12">
						<label for="health_43" class="form-label">ગૌરી દિવસમા કેટલી કિશોરીઓની તપાસ કરવામાં આવે છે?</label>
						<input type="text" class="form-control" id="health_43" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_44" class="form-label">Iron/Folic Acid ટેબ્લેટનુ વિતરણ થાય છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_44">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_44v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_44v" placeholder="">
                </div>
						<div class="col-md-12">
						<label for="health_45" class="form-label">પ્રાથમિક શાળા તથા માધ્યમીક શાળાના વિધાર્થીઓની નિયમીત તપાસ થાય છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_45">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_45v" class="form-label">છેલ્લી તાપસ ની તારીખ:</label>
                    <input type="text" class="form-control" id="health_45v" placeholder="">
                </div>
							<div class="col-md-12">
						<label for="health_46" class="form-label">PHC મા સ્વચ્છતા છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_46">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_46v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_46v" placeholder="">
                </div>
							<div class="col-md-12">
						<label for="health_47" class="form-label">Bio-Medical Waste નો યોગ્ય નિકાલ થાય છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_47">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
                    <label for="health_47v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="health_47v" placeholder="">
                </div>
						<div class="col-md-12">
							<label class="form-label" for="PHCphoto">Photo Upload of PHC/CHC</label>
<input type="file" class="form-control" id="PHCphoto" accept="image/*" />
                </div>
						<div class="col-md-12">
                    <label for="health_48v" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" id="health_48v" placeholder="">
                </div>
				</div>
                <button type="button" class="btn btn-secondary" onclick="window.location='yojano.php';">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="window.location='education-questions.php';">Next</button>
            </div>
				</form>
				
						
           
            </div>
			
			</div>
        

			</div>
  

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll(".step");
    
        function showStep(step) {
          steps.forEach((el, index) => {
            el.classList.toggle("active", index === step);
          });
        }
    
        function nextStep() {
          if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
          }
        }
    
        function prevStep() {
          if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
          }
        }
    
        document.getElementById("surveyForm").addEventListener("submit", function(event) {
          event.preventDefault();
          alert("Survey submitted!");
        });
    </script>

</body>
<?php include 'main-footer.php'; ?>
</html>