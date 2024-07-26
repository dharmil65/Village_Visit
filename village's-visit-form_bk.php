<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
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
            <!-- Step 1 -->
            <div class="step active">
				<h5 class="card-title text-center fs-4" id="villagedetails">ગામ ની વિગત</h5>
				      
				<div class="row">
					        <div class="col-md-4 col-sm-12">
								
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
          <div class="col-md-4 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
  
						<div class="col-md-4 col-sm-12">
 
                    <label for="village-total-population" class="form-label">ગામ ની કુલ વસ્તી:</label>
                    <input type="text" class="form-control" id="village-total-population" placeholder="">
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="sarpanch-name" class="form-label">સરપંચશ્રીનું નામ:</label>
                    <input type="text" class="form-control" id="sarpanch-name" placeholder="">
                </div>
						<div class="col-md-6 col-sm-12">
                    <label for="sarpanch-mobile" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="sarpanch-mobile" placeholder="">
                </div>
						<div class="col-md-6 col-sm-12">
                    <label for="talati-name" class="form-label">તલાટીશ્રીનું નામ:</label>
                    <input type="text" class="form-control" id="talati-name" placeholder="">
                </div>
						<div class="col-md-6 col-sm-12">
                    <label for="talati-mobile" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="talati-mobile" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="vce-name" class="form-label">VCE શ્રીનું નામ:</label>
                    <input type="text" class="form-control" id="vce-name" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="vce-mobile" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="vce-mobile" placeholder="">
                </div>
					     <div class="col-md-12 col-sm-12">
            <label for="PHC/CHC" class="form-label">PHC/CHC છે કે કેમ?</label>
            <select class="form-select" aria-label="Default select example" id="PHC/CHC">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
              <!-- Add more options as needed -->
            </select>
          </div>
					<div class="col-md-6 col-sm-12">
                    <label for="medicalofficer-name" class="form-label">મેડિકલ ઓફિસરનું  નામ:</label>
                    <input type="text" class="form-control" id="medicalofficer-name" placeholder="">
                </div>
						<div class="col-md-6 col-sm-12">
                    <label for="medicalofficer-mobile" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="medicalofficer-mobile" placeholder="">
                </div>
					<div class="col-md-12 col-sm-12">
                    <label for="aanganwadikaryakarta-name" class="form-label">આંગણવાડી કાર્યકર્તાનું  નામ:</label>
                    <input type="text" class="form-control" id="aanganwadikaryakarta-name" placeholder="">
                </div>
					<div class="col-md-4 col-sm-12">
                    <label for="aanganwadikaryakarta-mobile1" class="form-label">મોબાઇલ નં. ૧:</label>
                    <input type="tel" class="form-control" id="aanganwadikaryakarta-mobile1" placeholder="">
                </div>
					<div class="col-md-4 col-sm-12">
                    <label for="aanganwadikaryakarta-mobile2" class="form-label">મોબાઇલ નં. ૨:</label>
                    <input type="tel" class="form-control" id="aanganwadikaryakarta-mobile2" placeholder="">
                </div>
					<div class="col-md-4 col-sm-12">
                    <label for="aanganwadikaryakarta-mobile3" class="form-label">મોબાઇલ નં. ૩.:</label>
                    <input type="tel" class="form-control" id="aanganwadikaryakarta-mobile3" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="aashaworker-name" class="form-label">આશા વર્કરનું  નામ:</label>
                    <input type="text" class="form-control" id="aashaworker-name" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="aashaworker-mobile" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="aashaworker-mobile" placeholder="">
                </div>
					<div class="col-md-12 col-sm-12">
                    <label for="vyajbibhavduakndar-name" class="form-label">વ્યાજબી ભાવ ની દુકાન ના દુકાનદારશ્રી નુ નામ:</label>
                    <input type="text" class="form-control" id="vyajbibhavduakndar-name" placeholder="">
                </div>
					<div class="col-md-4 col-sm-12">
                    <label for="vyajbibhavduakndar-mobile1" class="form-label">મોબાઇલ નં. ૧:</label>
                    <input type="tel" class="form-control" id="vyajbibhavduakndar-mobile1" placeholder="">
                </div>
					<div class="col-md-4 col-sm-12">
                    <label for="vyajbibhavduakndar-mobile2" class="form-label">મોબાઇલ નં. ૨:</label>
                    <input type="tel" class="form-control" id="vyajbibhavduakndar-mobile2" placeholder="">
                </div>
						<div class="col-md-4 col-sm-12">
                    <label for="vyajbibhavduakndar-mobile3" class="form-label">મોબાઇલ નં. ૩:</label>
                    <input type="tel" class="form-control" id="vyajbibhavduakndar-mobile3" placeholder="">
                </div>
					<div class="col-md-12 col-sm-12">
                    <label for="fpscardholders-name" class="form-label">FPS માં નોંધાયેલા કાર્ડ હોલ્ડરો ની વિગત:</label>
                    <input type="text" class="form-control" id="fpscardholders-name" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="primaryschool-name" class="form-label">પ્રાથમિક શાળા નુ નામ:</label>
                    <input type="text" class="form-control" id="primaryschool-name" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="principal-name" class="form-label">આચાર્યશ્રીનું નામ:</label>
                    <input type="text" class="form-control" id="principal-name" placeholder="">
                </div>
						<div class="col-md-6 col-sm-12">
                    <label for="mobileno" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="mobileno" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="childern-count" class="form-label">બાળકો ની સંખ્યા:</label>
                    <input type="text" class="form-control" id="childern-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="milkasspramukh-name" class="form-label">દુધ મંડળી પ્રમુખશ્રી નુ નામ:</label>
                    <input type="text" class="form-control" id="milkasspramukh-name" placeholder="">
                </div>
						<div class="col-md-6 col-sm-12">
                    <label for="milkasspramukh-mobile" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="milkasspramukh-mobile" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="sahkarimandlipramukh-name" class="form-label">સહકારી મંડળીના પ્રમુખશ્રીનુ નામ:</label>
                    <input type="text" class="form-control" id="sahkarimandlipramukh-name" placeholder="">
                </div>
						<div class="col-md-6 col-sm-12">
                    <label for="sahkarimandlipramukh-mobile" class="form-label">મોબાઇલ નં.:</label>
                    <input type="tel" class="form-control" id="sahkarimandlipramukh-mobile" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="reshancard" class="form-label">રેશનકાર્ડ કોઈ નુ બાકી છે કે કેમ?</label>
            <select class="form-select" aria-label="Default select example" id="reshancard">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="reshancard-remaincount" class="form-label">બાકી સંખ્યા:</label>
                    <input type="text" class="form-control" id="reshancard-remaincount" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="aadharcard" class="form-label">આધારકાર્ડ કોઈ નુ બાકી છે કે કેમ?</label>
            <select class="form-select" aria-label="Default select example" id="aadharcard">
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="aadharcard-remaincount" class="form-label">બાકી સંખ્યા:</label>
                    <input type="text" class="form-control" id="aadharcard-remaincount" placeholder="">
                </div>
					
				</div>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
				<button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
					</div>
					    <!-- Step 2 -->
            <div class="step">
				<div class="row">
					
					<h5 class="card-title text-center fs-4" id="yojana">સરકારશ્રીની વિવિધ યોજનાઓનો લાભ મળવાનો બાકી હોય તેવા કુટુંબો (વ્યક્તિઓની વિગત)</h5>
				
					<div class="col-md-12">
						૧. વૃદ્ધ નિરાધાર યોજના:
					</div>
					<div class="col-md-6 col-sm-12">
                    <label for="vruddhaniradhar-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="vruddhaniradhar-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="vruddhaniradhar-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="vruddhaniradhar-remarks" placeholder="">
                </div>
					<div class="col-md-12">
						૨. વિધવા સહાય:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="widow-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="widow-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="widow-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="widow-remarks" placeholder="">
                </div>
						<div class="col-md-12">
						૩. સંકટ મોચન યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="sankatmochan-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="sankatmochan-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="sankatmochan-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="sankatmochan-remarks" placeholder="">
                </div>
						<div class="col-md-12">
						૪. એન.એફ.એસ.એ. રેશનકાર્ડ:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="nfsa-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="nfsa-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="nfsa-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="nfsa-remarks" placeholder="">
                </div>
							<div class="col-md-12">
						૫. પ્રધાનમંત્રી જીવન સુરક્ષા યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="pjsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="pjsy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="pjsy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="pjsy-remarks" placeholder="">
                </div>
							<div class="col-md-12">
						૬. પ્રધાનમંત્રી જીવન જ્યોત વીમા યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="pjjvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="pjjvy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="pjjvy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="pjjvy-remarks" placeholder="">
                </div>
							<div class="col-md-12">
						૭. આયુષ્યમાન ભારત યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="aby-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="aby-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="aby-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="aby-remarks" placeholder="">
                </div>
						<div class="col-md-12">
						૮. જનની સુરક્ષા યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="jsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="jsy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="jsy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="jsy-remarks" placeholder="">
                </div>
						<div class="col-md-12">
						૯. પ્રધાનમંત્રી માતૃ વંદના યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="pmvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="pmvy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="pmvy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="pmvy-remarks" placeholder="">
                </div>
							<div class="col-md-12">
						૧૦. નિષય પોષણ યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="npy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="npy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="npy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="npy-remarks" placeholder="">
                </div>
								<div class="col-md-12">
						૧૧. કસ્તુરબા પોષણ સહાય યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="kpsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="kpsy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="kpsy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="kpsy-remarks" placeholder="">
                </div>
								<div class="col-md-12">
						૧૨. કુંવરબાઈનું મામેરૂ સહાય યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="kmsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="kmsy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="kmsy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="kmsy-remarks" placeholder="">
                </div>
								<div class="col-md-12">
						૧૩. દિવ્યાંગ /વિકલાંગ (પાસ):
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="dvp-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="dvp-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="dvp-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="dvp-remarks" placeholder="">
                </div>
								<div class="col-md-12">
						૧૪. વાલી દિકરી યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="vdy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="vdy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="vdy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="vdy-remarks" placeholder="">
                </div>
								<div class="col-md-12">
						૧૫. વૈદકીય સહાય યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="vsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="vsy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="vsy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="vsy-remarks" placeholder="">
                </div>
									<div class="col-md-12">
						૧૬. ઈંન્દીરા ગાંધી નેશનલ ડીસેબીલીટી પેન્શન યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="ignspy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="ignspy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="ignspy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="ignspy-remarks" placeholder="">
                </div>
										<div class="col-md-12">
						૧૭. સુકન્યા સમુધ્ધી યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="ssy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="ssy-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="ssy-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="ssy-remarks" placeholder="">
                </div>
											<div class="col-md-12">
						૧૮. પ્રધાનમંત્રી આવાસ યોજના:
					</div>
						<div class="col-md-6 col-sm-12">
                    <label for="pay-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                    <input type="text" class="form-control" id="pay-count" placeholder="">
                </div>
					<div class="col-md-6 col-sm-12">
                    <label for="pay-remarks" class="form-label">રિમાર્કસ</label>
                    <input type="text" class="form-control" id="pay-remarks" placeholder="">
                </div>
						</div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			
            </div>
			<!-- Step 3 -->
            <div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">આરોગ્યને બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
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
                    <label for="health_2" class="form-label">CHC ખાતે ડીલીવરી થાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="health_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="health_3" class="form-label">PHC/CHC-ખાતે સ્ટાફની ભરેલી/ખાલી જગ્યા</label>
                    <input type="text" class="form-control" id="phcchcsj" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="chcdppc" class="form-label">CHC ના ડૉક્ટરનું પ્રાઇવેટ પ્રેક્ટીસનું  ચલણ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="health_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
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
						<label for="health_5" class="form-label">PHC/CHC ની VISIT કોઇ અધિકારી દ્વારા કરવામાં આવે છે કે, કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_5">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
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
						<label for="health_7" class="form-label">PHC સાથે જોડાયેલા ગામોની વિગતો</label>
						<input type="text" class="form-control" id="health_7" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_8" class="form-label">માળખાકીય સુવિધાઓ – PHC બિલ્ડીંગ / સ્ટાફ ક્વાટર્સ / ડોક્ટર્સ કવાટર્સ સંબંધિત વિગતો</label>
						<input type="text" class="form-control" id="health_8" placeholder="">
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
						<input type="text" class="form-control" id="health_13" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_14" class="form-label">જરૂરી દવાઓની ઉપલબ્ધતા અંગેનો અભિપ્રાય</label>
						<input type="text" class="form-control" id="health_14" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_15" class="form-label">(અ) આવશ્યક દવાઓના લિસ્ટ મુજબ PHC ખાતે ઉપલબ્ધ દવાઓ</label>
						<input type="text" class="form-control" id="health_15" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_16" class="form-label">(બ) દવાઓ/કન્ઝયુમેબલ્સનો ઉપલબ્ધ જથ્થો</label>
						<input type="text" class="form-control" id="health_16" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_17" class="form-label">(ક) ઉપલબ્ધ ન હોય તેવી દવાઓની યાદી</label>
						<input type="text" class="form-control" id="health_17" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_18" class="form-label">(ડ) આગામી ત્રણ માસમાં એક્સપાયર થતી દવાઓનું લીસ્ટ</label>
						<input type="text" class="form-control" id="health_18" placeholder="">
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
						<label for="health_28" class="form-label">PAP SMEAR TEST ની સુવિધા ઉપલબ્ધ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_28">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
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
						<label for="health_30" class="form-label">WBC/ Differential Count ની ટેસ્ટ થાય છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_30">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="health_31" class="form-label">છેલ્લા ૧ વર્ષમા કેટલા Still Birth થયેલ છે?</label>
						<select class="form-select" aria-label="Default select example" id="health_31">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="health_32" class="form-label">તે પૈકી શીશુ (દીકરો/દીકરી)ની જાતી?</label>
						<input type="text" class="form-control" id="health_32" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="health_33" class="form-label">પ્રસુતીના કિસ્સામા જન્મેલ બાળકોના જાતી (દીકરો/દીકરી) ની વિગતો?</label>
						<input type="text" class="form-control" id="health_33" placeholder="">
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
						<label for="health_41" class="form-label">મમતા દિવસમા કેટલી માતા/બાળકોની તપાસ કરવામાં આવે છે?</label>
						<input type="text" class="form-control" id="health_41" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_42" class="form-label">ગૌરી દિવસમા કેટલી કિશોરીઓની તપાસ કરવામાં આવે છે?</label>
						<input type="text" class="form-control" id="health_42" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="health_43" class="form-label">Iron/Folic Acid ટેબ્લેટનુ વિતરણ થાય છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_43">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="health_44" class="form-label">પ્રાથમિક શાળા તથા માધ્યમીક શાળાના વિધાર્થીઓની નિયમીત તપાસ થાય છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_44">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
							<div class="col-md-12">
						<label for="health_45" class="form-label">PHC મા સ્વચ્છતા છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="health_45">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
				</div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
            </div>
            <!-- Step 4 -->
            <div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">શિક્ષણને બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="edu_1" class="form-label">શાળામાં પુરતા પ્રમાણમાં શિક્ષકો કે આચાર્ય  છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="edu_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="edu_2" class="form-label">કોમ્પ્યુટર લેબ છે કે, કેમ? ઉપયોગમા લેવાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="edu_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="edu_3" class="form-label">કોમ્પ્યુટર ચાલુ હાલતમાં છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="edu_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="edu_4" class="form-label">શાળામાં સ્માર્ટક્લાસ છે કે, કેમ?  ઉપયોગમાં  લેવાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="edu_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="edu_5" class="form-label">શાળામાં મધ્યાનભોજન યોજના અંગે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="edu_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
						<label for="edu_6" class="form-label">માળખાકીય સુવિધાઓ – શાળાનું બિલ્ડીંગ / ઓરડાઓની સંખ્યા/ રમતનું મેદાન / પ્રયોગશાળાની વ્યવસ્થા/ ગ્રંથાલય/પીવાના પાણીની વ્યવસ્થા / શૌચાલય સંબંધિત વિગતો</label>
						<input type="text" class="form-control" id="edu_6" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_7" class="form-label">શિક્ષકો/ વિદ્યાથીઓની ભૌતિક હાજરીની વિગતો તેમજ તે જ દિવસે વિદ્યા સમીક્ષા કેન્દ્રમાં નોંધાયેલ  હાજરીની વિગતો સાથે સરખામણી</label>
						<input type="text" class="form-control" id="edu_7" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="edu_8" class="form-label">સ્માર્ટ કલાસની યોગ્ય કાર્યરતતા</label>
						<input type="text" class="form-control" id="edu_8" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_9" class="form-label">PM Poshan Scheme ની અમલવારી સંબંધિત વિગતો</label>
						<input type="text" class="form-control" id="edu_9" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_10" class="form-label">મધ્યાહન ભોજનની ગુણવત્તા યોગ્ય છે કે નહીં તે અંગે પુરતી ચકાસણી અને અભિપ્રાય</label>
						<input type="text" class="form-control" id="edu_10" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_11" class="form-label">કિશોર વયની બાળકીઓને આયર્ન  અને ફોલિક એસિડ ટેબલેટ આપવામાં નિયમિતતા</label>
						<input type="text" class="form-control" id="edu_11" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_12" class="form-label">૧૫ થી ૧૮ વર્ષની કિશોરીઓ માટે સીકલ સેલ  એનિમિયાના test ની વિગતો તથા test થયા બાદ લેવાતા પગલાં (સિકલસેલ એનિમીયા પ્રભાવિત જિલ્લાઓ)</label>
						<input type="text" class="form-control" id="edu_12" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_13" class="form-label">પ્રાથમિક આરોગ્ય કેન્દ્ર દ્વારા બાળકોમાંબ આરોગ્યની તપાસ અને સારવાર માટે હાથ ધરાયેલ  કાર્યવાહીની  વિગતો</label>
						<input type="text" class="form-control" id="edu_13" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_14" class="form-label">ટ્રાયબલ તાલુકામાં આપવામાં આવતી દૂધ-સંજીવની યોજના અંગેની વિગતો</label>
						<input type="text" class="form-control" id="edu_14" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_15" class="form-label">ગામમાં પ્રાથમિક તથા માધ્યમીક શાળાની સંખ્યા</label>
						<input type="text" class="form-control" id="edu_15" placeholder="">
					</div>
						<div class="col-md-12">
                    <label for="edu_16" class="form-label">શાળાનુ બિલ્ડીગ જર્જરીત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="edu_16">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
						<label for="edu_17" class="form-label">નવા બિલ્ડીગની દરખાસ્ત કરેલ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_17">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="edu_18" class="form-label">પ્રયોગશાળામા થતા પ્રયોગોની વિગતો?</label>
						<select class="form-select" aria-label="Default select example" id="edu_18">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="edu_19" class="form-label">MDM માટેનો શેડ ઉપલબ્ધ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_19">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="edu_20" class="form-label">શાળામા કેટલા વર્ગખંડ છે તેની સંખ્યા?</label>
						<input type="text" class="form-control" id="edu_20" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_21" class="form-label">કુમાર અને કન્યાનુ શૌચાલય અલગ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_21">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						
					<div class="col-md-12">
						<label for="edu_22" class="form-label">પીવાના પાણીની વ્યવસ્થા છે કે કેમ? તેમાં બોર,ફીલ્ટર અને કલોરીનેશનની વિગતો દર્શાવવી.</label>
						<input type="text" class="form-control" id="edu_22" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="edu_23" class="form-label">શાળામા સીસીટીવી છે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_23">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
					<div class="col-md-12">
						<label for="edu_24" class="form-label">શાળામા SMC ની મીટીંગ નિયમીત થાય છે કેમ? તથા તેનુ રજીસ્ટર નિભાવવામા આવે છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_24">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="edu_25" class="form-label">શાળામા વાલી મીટીંગ(PTA) નિયમીત થાય છે કે કેમ? તેની રજીસ્ટર નિભાવવામા આવે છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_25">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
						<div class="col-md-12">
						<label for="edu_26" class="form-label">RBSK ની ટીમ ધ્વારા નિયમીત કેમ્પ યોજવામા આવે છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_26">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
					<div class="col-md-12">
						<label for="edu_27" class="form-label">ગુણોત્સવ ૨.૦ (GSQAC) અંતર્ગતના સુચક આંક મુજબ શાળાને મેળવેલ ગુણ તથા મુલાકાત દરમ્યાન અધિકારીશ્રી ધ્વારા આપેલ ગુણ?</label>
						<input type="text" class="form-control" id="edu_27" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="edu_28" class="form-label">ધોરણ ૪ થી ૮ પૈકીના કોઇ એક ધોરણના પરીણામ પત્રક મુજબ વિધાર્થીએ મેળવેલ ખરેખર ગુણ બાબતે પરીક્ષાની ઉત્તરવહીની ચકાસણી યોગ્ય કરેલ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_28">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
					<div class="col-md-12">
						<label for="edu_29" class="form-label">કોઇપણ વિષયના Periodic Assessment Test (PAT) ની નોધપોથીની ચકાસણી બરાબર થયેલ છે કે કેમ?</label>
						<select class="form-select" aria-label="Default select example" id="edu_29">
				  <option value="" disabled selected></option>
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				  <!-- Add more options as needed -->
				</select>
					</div>
				</div>
				
				<button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>

            </div>
			<!-- Step 5 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">પુરવઠાને બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="supply_1" class="form-label">ગામમા માઇગ્રેટ થઇ આવેલા લોકો/ મજુર વર્ગને રાશન આપવા આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="supply_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="supply_2" class="form-label">અનાજમાં ઘટ આવે છે કે,  કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="supply_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="supply_3" class="form-label">રેશન કાર્ડમાં KYC કરાવવા માટે મામલતદાર કચેરીએ આવવુ પડે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="supply_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
						<label for="supply_4" class="form-label">અનાજની ગુણવત્તા અને ઉપલબ્ધતા તેમજ અનાજની જાળવણી અંગેની  વિગતો</label>
						<input type="text" class="form-control" id="supply_4" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="supply_5" class="form-label">અંત્યોદય અન્ન યોજના અંતર્ગત નોંધાયેલ કાર્ડની સંખ્યા</label>
						<input type="text" class="form-control" id="supply_5" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="supply_6" class="form-label">પ્રધાનમંત્રી ગરીબ કલ્યાણ અન્ન યોજના અંતર્ગત નિયમિત વિતરણ થાય છે કે કેમ તે અંગેનો અભિપ્રાય</label>
						<input type="text" class="form-control" id="supply_6" placeholder="">
					</div>
					<div class="col-md-12">
						<label for="supply_7" class="form-label">છેલ્લા ત્રણ મહિનામાં માસવાર ઓફલાઈ અનાજ મેળવતાં લાભાર્થીઓની સંખ્યા</label>
						<input type="text" class="form-control" id="supply_7" placeholder="">
					</div>
						<div class="col-md-12">
						<label for="supply_8" class="form-label">લાભાર્થીઓ/ગ્રામજનો પાસેથી ૫ કિલોગ્રામ મફત અનાજ વિતરણ સંબંધિત પ્રતિભાવ</label>
						<input type="text" class="form-control" id="supply_8" placeholder="">
					</div>
					<div class="col-md-12">
                    <label for="supply_9" class="form-label">વ્યાજબી ભાવની દુકાનની ચકાસણી નિયત નમુનાના ફોર્મમા થયેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="supply_9">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
			<!-- Step 6 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">પાણીને બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="water_1" class="form-label">ગામમા પાણી નિયમિત આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="water_2" class="form-label">ગામમાં પાણીનો પુરવઠો પુરતા પ્રમાણમાં પહોચાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="water_3" class="form-label">ગામની વસ્તી પ્રમાણે પીવાનુ પાણી પહોચડવા માટે પુરતા પ્રમાણમાં સંસાધનો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="water_4" class="form-label">પીવાના પાણી પહોચાડવાની પાઇપ લાઇનો બદલવાની જરૂયાત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="water_5" class="form-label">ગ્રામ પંચાયત દ્વારા ક્લોરીન યુક્ત પાણી આપવામાં આવે છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="water_6" class="form-label">ગામમા ભુર્ગળ જળસ્તર વધારવા માટે ONGC/કોઇ કંપની/NGOની મદદથી તળાવમાં રિચાર્જ કુવા બનાવવામાં આવેલ છે કે કેમ? તથા તેની જરૂરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
							<div class="col-md-12">
                    <label for="water_7" class="form-label">ગામમાં STP પ્લાટ છે કે કેમ? તથા તેની જરૂરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_7">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
				<!-- Step 7 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">વીજપુરવઠો બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="electric_1" class="form-label">GEB/UGVCL દ્વારા નિયમિત ૨૪ કલાક વીજ પુરવઠો ઉપલબ્ધ કરાવવામાં આવે છે કે કેમ,?</label>
                    <select class="form-select" aria-label="Default select example" id="electric_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="electric_2" class="form-label">GEB/UGVCL વીજ પુરવઠા બાબતે સમસ્યાઓ/પ્રશ્નોના નિરાકરણ માટે કોઇ વ્યવસ્થા છે કે, કેમ ?</label>
                    <select class="form-select" aria-label="Default select example" id="electric_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="electric_3" class="form-label">નવુ લાઇટ કનેક્શન લેવા માટે ગ્રામજનોને માહિતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="electric_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
						<!-- Step 8 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">રોડ/રસ્તા બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="road_1" class="form-label">ગામમા સી.સી રોડ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="road_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="road_2" class="form-label">નવા સી.સી રોડ બનાવવાની જરૂરીયાત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="road_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
							<!-- Step 9 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">ગટર બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="sewer_1" class="form-label">ગામમાં ગટર લાઇન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="sewer_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="sewer_2" class="form-label">નવી ગટર લાઇનની જરૂરીયાત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="sewer_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="sewer_3" class="form-label">અધુરી ગટર લાઇન પુર્ણ કરવામાં આવેલ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="sewer_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="sewer_4" class="form-label">ગટર લાઇનની ચોમાસા પહેલા સાફ સફાઇ કરવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="sewer_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="sewer_5" class="form-label">ગટર ચોકઅપના કોઇ પ્રશ્નો છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="sewer_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
								<!-- Step 10 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">સ્વચ્છતા બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="cleanliness_1" class="form-label">ડોર ટુ ડોર કલેક્શનની સેવા ઉપલબ્ધ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="cleanliness_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="cleanliness_2" class="form-label">ગામની ડમ્પીંગ સાઇટથી મુખ્ય ડમ્પીંગ સાઇટ પર વેસ્ટ કચરાનો નિકાલ કેટલા દિવસે થાય છે?</label>
                    <select class="form-select" aria-label="Default select example" id="cleanliness_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="cleanliness_3" class="form-label">સ્વચ્છતા માટે કેટલા વ્યક્તિ કાર્યરત છે?</label>
                    <input type="text" class="form-control" id="cleanliness_3" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="cleanliness_4" class="form-label">સ્વચ્છતા માટે કેટલા વાહનો છે? કયા કયા?</label>
                    <input type="text" class="form-control" id="cleanliness_4" placeholder="">
                </div>
				

				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
								<!-- Step 11 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">પ્રદુષણ બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="polution_1" class="form-label">ગામમાં આવેલી GIDC/ફેક્ટરીની આજુબાજુમાં સ્વચ્છતા જળવાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="polution_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="polution_2" class="form-label">ગામમા પ્રદુષણ અંગે કોઇ પ્રશ્ન છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="polution_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="polution_3" class="form-label">ગામમાં આવેલ જી.આઈ.ડી.સી/ કોઈ ફેક્ટરી દ્રારા છોડવામાં આવતા કેમિકલ યુક્ત પાણીનો નિકાલ યોગ્ય રીતે થાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="polution_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="polution_4" class="form-label">ગામમાં આવેલ જી.આઈ.ડી.સી/કોઈ ફેક્ટરી IUDASTUICAL SATEDY AUDIT થાય છે કે, કેમ? </label>
                    <select class="form-select" aria-label="Default select example" id="polution_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
			<!-- Step 12 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">મહેસુલી બાબતે</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="revenue_1" class="form-label">ગામમા ગ્રામ પંચાયત VCE દ્વારા ૭/૧૨ ના ઉતારા કાઢી આપવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_2" class="form-label">સરકારશ્રીની મહેસુલી યોજનાઓની સેવાઓ ઓનલાઇન પુરી પાડવામાં આવે છે. તે બાબતેની માહીતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_3" class="form-label">ગામમા પ્રોપટી કાર્ડ બાબતે કોઇ પશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_4" class="form-label">ગામમા રી સર્વે પ્રમોગ્રેશન બાબતના પ્રશ્નો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>

						<div class="col-md-12">
                    <label for="revenue_5" class="form-label">ગામમા વાડા પત્રક બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_6" class="form-label">ગામમા નવી - જુની શરતના કેસો અંગે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
					<!-- Step 13 -->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">આંગણવાડીને લગતા પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="anganwadi_1" class="form-label">ગામમા કુલ કેટલી આંગણવાડી આવેલ છે?</label>
                    <input type="text" class="form-control" id="anganwadi_1" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_2" class="form-label">આંગણવાડીની સ્થિતિ/માળખાકીય સુવિધાઓ અંગેની વિગતો</label>
                    <input type="text" class="form-control" id="anganwadi_2" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_3" class="form-label">સ્ટાફની હાજરીની વિગતો</label>
                    <input type="text" class="form-control" id="anganwadi_3" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_4" class="form-label">બાળકોની નોંધણી સંખ્યા અને વાસ્તવિક હાજરી સંબંધિત વિગતો</label>
                    <input type="text" class="form-control" id="anganwadi_4" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_5" class="form-label">બાળકોને આંગણવાડીમાં મેનુ પ્રમાણે ગરમ નાસ્તાના વિતરણ અંગેની ચકાસણી</label>
                    <input type="text" class="form-control" id="anganwadi_5" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_6" class="form-label">સગર્ભા/સ્તનપાન કરાવતી માતાઓનાં થયેલ રજીસ્ટ્રેશનની સંખ્યા</label>
                    <input type="text" class="form-control" id="anganwadi_6" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_7" class="form-label">રક્તની ઉણપ ધરાવતી સગર્ભા/ધાત્રી માતાઓની સંખ્યા</label>
                    <input type="text" class="form-control" id="anganwadi_7" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_8" class="form-label">પ્રધાનમંત્રી માતૃ વંદાના યોજના હેઠળ દર મહિને મમતા દિવસના રોજ કરાતા ચેક-અપની વિગતો</label>
                    <input type="text" class="form-control" id="anganwadi_8" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_9" class="form-label">સગર્ભા/ધાત્રી માતાઓ તેમજ કિશોર વયની બાળકીઓ માટે ટેક-હોમ રાશનના પુરવઠા અને વહેંચણી સંબંધિત વિગતોની ચકાસણી</label>
                    <input type="text" class="form-control" id="anganwadi_9" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_10" class="form-label">મુખ્યમંત્રી માતૃશક્તિ યોજના અન્વયે કિટના વિતરણ સંબંધિત વિગતો</label>
                    <input type="text" class="form-control" id="anganwadi_10" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_11" class="form-label">બાળકોનું માસિક પરીક્ષણ-ઊંચાઈ અને વજનની માપણીની નિયમીતતા</label>
                    <input type="text" class="form-control" id="anganwadi_11" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_12" class="form-label">પાંચ બાળકોના વજન અને ઊંચાઈની માપણી અને પોષણ ટ્રેકરના છેલ્લા અદ્યતન ડેટા સાથે તેની સરખામણી</label>
                    <input type="text" class="form-control" id="anganwadi_12" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_13" class="form-label">ઉપલ્બધ ઉપકરણોનું પરિક્ષણ, ચકાસણી અને એકંદરે અભિપ્રાય</label>
                    <input type="text" class="form-control" id="anganwadi_13" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_14" class="form-label">ટ્રાયબલ તાલુકામાં આપવામાં આવતી દૂધ સંજીવની યોજના અંગેની વિગતો</label>
                    <input type="text" class="form-control" id="anganwadi_14" placeholder="">
                </div>
				
	<div class="col-md-12">
                    <label for="anganwadi_15" class="form-label">આંગણવાડીનુ મકાન પોતાનુ છે /ભાડે રાખેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anganwadi_15">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_16" class="form-label">આંગણવાડીના મકાનમા રીપેરીગની કોઇ જરુરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anganwadi_16">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_17" class="form-label">કલર કોર્ડીગ પ્રમાણે બાળકોની સંખ્યા ? (ગ્રીન,યલો અને રેડ)</label>
                    <input type="text" class="form-control" id="anganwadi_17" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="anganwadi_18" class="form-label">સ્ટેડીયો મીટર,ઇન્ફેન્ટો મીટર,સોલ્ટર સ્કેલ અથવા ઇલેકટ્રોનીક વેંઇગ મશીન ચાલુ હાલતમા છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anganwadi_18">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="anganwadi_19" class="form-label">ટેકહોમ રાશનનુ રજીસ્ટર નિભાવેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anganwadi_19">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
								<div class="col-md-12">
                    <label for="anganwadi_20" class="form-label">છેલ્લા ૩ માસની મારી વિકાસ યાત્રા બુક કાર્યકરશ્રી ધ્વારા ભરેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anganwadi_20">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="anganwadi_21" class="form-label">કાર્યકરશ્રીના મોબાઇલમા પોષણ ટ્રેકર એપ્લીકેશન ઉપલબ્ધ છે કે કેમ? તમામ મોડયુલની એન્ટ્રી તથા બાળકોના વજન,ઉંચાઇની એન્ટ્રી કરવામા આવે છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anganwadi_21">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
				<div class="col-md-12">
                    <label for="anganwadi_22" class="form-label">એનીમીયા વાળી કિશોરીઓની સંખ્યા?</label>
                    <input type="text" class="form-control" id="anganwadi_22" placeholder="">
                </div>
						
				<div class="col-md-12">
                    <label for="anganwadi_23" class="form-label">અન્ય કોઇ સાધનસામગ્રીની જરુરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anganwadi_23">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>				
			
			<!-- Step 14-->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">બેંકીંગ સેવાને લગતા પ્રશ્નો </h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
							નજીકમાં ઉપલબ્ધ સરકારી/બિન સરકારી બેંકની વિગતો (અંતરની વિગતો સાથે)<br>
                    <label for="bank_1" class="form-label">(i) ગામમાં બેંકીંગ કોરસ્પોન્ડન્ટની ઉપલબ્ધતા</label>
                    <input type="text" class="form-control" id="bank_1" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="bank_2" class="form-label">(ii) બેંકીંગ કોરસ્પોન્ડન્ટની સમયાંતરે ગામની મુલાકાત</label>
                    <input type="text" class="form-control" id="bank_2" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="bank_3" class="form-label">બેંકીંગ કોરસ્પોન્ડન્ટનુ નામ અને નંબર</label>
                    <input type="text" class="form-control" id="bank_3" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="bank_4" class="form-label">PMJDY અકાઉન્ટસની સંખ્યા?</label>
                    <input type="text" class="form-control" id="bank_4" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_5" class="form-label">PMSBY ની સંખ્યા?</label>
                    <input type="text" class="form-control" id="bank_5" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_6" class="form-label">PMJJBY ની સંખ્યા?</label>
                    <input type="text" class="form-control" id="bank_6" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_7" class="form-label">અટલ પેન્શન યોજનાની સંખ્યા?</label>
                    <input type="text" class="form-control" id="bank_7" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_8" class="form-label">સખીમંડળ/SHG ધ્વારા લોનની માંગણી કરવામા આવેલ અરજીઓ પૈકી પડતર અરજીઓની સંખ્યા?</label>
                    <input type="text" class="form-control" id="bank_8" placeholder="">
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
			
						<!-- Step 15-->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">ગ્રામ પંચાયત બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="grampanchayat_1" class="form-label">પંચાયત બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_2" class="form-label">ગામ પંચાયતમાં આવકના દાખલો, મરણનો દાખલો. પુન: લગ્ન ના કર્યા અંગેનો દાખલો, વિધવા સહાયની કામગીરી  થાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_3" class="form-label">ગામમા સ્માશાન ભઠ્ઠી છે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_4" class="form-label">ગામમા સ્માશાન માટે સ્મશાન ગૃહ અંગેનો શેડ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_5" class="form-label">ભારતનેટ ધ્વારા આપવામા આવતી બ્રોડ બેન્ડ કનેકટીવીટી ગ્રામ પંચાયતમા યોગ્ય રીતે કાર્યરત છે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_6" class="form-label">ગામમા ઇગ્રામ ની સગવડ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_7" class="form-label">ગામ લોકો ધ્વારા જણાવવામા આવેલ અન્ય કોઇ પ્રશ્નો/બાબતોની વિગતો</label>
                    <input type="text" class="form-control" id="grampanchayat_7" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_8" class="form-label">પ્રધાનમંત્રી આવાસ યોજનાના પશ્નોના નિરાકરણ બાબતે કોઇ વ્યવસ્થા છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_8">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_9" class="form-label">ગ્રામ પંચાયત VCE દ્વારા વિધવા સહાયની અરજી ઓનલાઇન સમયસર કરી આપવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_9">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_10" class="form-label">ગ્રુપ ગ્રામ પંચાયતમાં આધાર કેન્દ્ર / જનસેવા કેન્દ્રની જરૂરીયાત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="grampanchayat_10">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
					<!-- Step 16-->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">અન્ય બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="anotherthing_1" class="form-label">ગામમા ગેસ પાઇપલાઇન છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="anotherthing_2" class="form-label">ગામમા ગેસ એજન્સી દ્વારા નિયમિત નોંધણી કરાવ્યા બાદ ગેસના સીલીન્ડરની  સમયસર ડીલીવરી કરવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="anotherthing_3" class="form-label">ગામમા જાહેર સૌચાલયનો પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="anotherthing_4" class="form-label">ગામમા સ્માશાન માટે સ્મશાન ગૃહ અંગેનો શેડ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
							<div class="col-md-12">
                    <label for="anotherthing_5" class="form-label">ગામમા ખેતી માટે પાણીના સિચાઇનો પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_6" class="form-label">કોઇ સિંચાઇની કેનાલ અધુરી છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_7" class="form-label">નવી કેનાલની જરૂરીયાત?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_7">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_8" class="form-label">ગામમા ખેતી માટેના કોઇ પ્રશ્નો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_8">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_9" class="form-label">ગામમા ગ્રામ સેવક દ્વારા સરકારશ્રીની ખેતી વિષયકની યોજનાઓની માહીતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_9">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_10" class="form-label">ગામમા ખેતીના ઓજારો/ સાધનો પર સરકારશ્રી દ્વારા આપવામાં આવતી સબસીડી બાબતે કોઇ પ્રશ્નો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_10">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_11" class="form-label">ગામમા ઢોર વાડા બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_11">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_12" class="form-label">ગામમા એસ.ટી બસ સ્ટેન્ડ બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_12">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_13" class="form-label">કોઇ રુટની માંગણી કરેલ છે.</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_13">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_14" class="form-label">કોઇ બસ સ્ટોપ ચેન્જ કરવા માટેની માંગણી</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_14">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_15" class="form-label">ગામની પોસ્ટ ઓફીસ / બેન્ક દ્વારા  આધાર કાર્ડમાં સુધારા વધારા કરી આપવામાં  કરી આપવામાં આવે છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_15">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_16" class="form-label">ગામમા વરસાદી પાણીનો સંગ્રહ્ય કરી તેને ઉપયોગમાં લેવા બાબતે કોઇ સુવિધા છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="anotherthing_16">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
			</div>
			<!-- Step 17-->
			<div class="step">
				<div class="row">
					<h5 class="card-title text-center fs-4">અન્ય બાબતના પ્રશ્નો</h5>
					    <div class="col-md-6 col-sm-12">
            <label for="taluka-name" class="form-label">તાલુકાનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="taluka-name">
              <option value="" disabled selected>Select your Taluka</option>
              <option value="taluka1">Taluka 1</option>
              <option value="taluka2">Taluka 2</option>
              <option value="taluka3">Taluka 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
				    <div class="col-md-6 col-sm-12">
            <label for="village-name" class="form-label">ગામનું નામ:</label>
            <select class="form-select" aria-label="Default select example" id="village-name">
              <option value="" disabled selected>Select your village</option>
              <option value="village1">Village 1</option>
              <option value="village2">Village 2</option>
              <option value="village3">Village 3</option>
              <!-- Add more options as needed -->
            </select>
          </div>
						<div class="col-md-12">
                    <label for="anotherthing_17" class="form-label">ગામમાં આવેલ મુખ્ય આકર્ષણનું સ્થળ/ પૌરાણિક સ્થળની વિગત</label>
                    <input type="text" class="form-control" id="anotherthing_17" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_18" class="form-label">ગામની અન્ય વિશેષતા</label>
                    <input type="text" class="form-control" id="anotherthing_18" placeholder="">
                </div>
						 <div class="col-md-12">
                    <label for="anotherthing_19" class="form-label">ગામની અન્ય કોઈ વિશેષ રજૂઆત</label>
                    <input type="text" class="form-control" id="anotherthing_19" placeholder="">
                </div>
		
				</div>
				                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                <button type="submit" class="btn btn-success">Submit</button>
				   <div class="row"> <label class="form-label"> નોંધ :<br>
(૧)	ગ્રામની મુલાકાત પહેલા અગાઉથી ગ્રામજનોને તલાટીશ્રી મારફતે પંચાયત ખાતે નિયત સમયે હાજર રહેવાની જાણ કરવાની રહેશે. <br>
(૨)	સદરહું ચેકલીસ્ટના તમામ હોદ્દેદારોએ હાજર રહેવાનું રહેશે. <br>
(૩)	સદરહું મુલાકાતની ફોટોગ્રાફી/વિડિયોગ્રાફી મોબાઈલથી કરીને મોકલવાની રહેશે.<br> 
(૪)	સદરહું ચેકલીસ્ટ મુલાકાતની બીજા દિવસે કલેક્ટર કચેરી ખાતે એડીએમ-૩ શાખા ખાતે ઈ-મેલથી મોકલી આપવાનું રહેશે.	
				  </label>
									</div>
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