<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<?php 
    include __DIR__.'/../head.php'; 
	$page = 'yojano';
?>
<title>ગામની મુલાકાતનું પત્રક</title>
<?php 
    include __DIR__.'/../main-header.php'; 
?>
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
                <form id="yojanaForm">
                    @csrf
                    <div class="step active">
				        <div class="row">
					        <h5 class="card-title text-center fs-4" id="yojana">સરકારશ્રીની વિવિધ યોજનાઓનો લાભ મળવાનો બાકી હોય તેવા કુટુંબો (વ્યક્તિઓની વિગત)</h5>
                                <div class="col-md-12">
                                    ૧. વૃદ્ધ નિરાધાર યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vruddhaniradhar-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="vruddhaniradhar-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vruddhaniradhar-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="vruddhaniradhar-remarks" placeholder="" required>
                                </div>
                                <div class="col-md-12">
                                    ૨. વિધવા સહાય:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="widow-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="widow-count" placeholder="" required>
                                </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="widow-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="widow-remarks" placeholder="" required>
                                </div>
                                <div class="col-md-12">
                                    ૩. સંકટ મોચન યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="sankatmochan-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="sankatmochan-count" placeholder="" required>
                                </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="sankatmochan-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="sankatmochan-remarks" placeholder="" required>
                                </div>
                                <div class="col-md-12">
                                    ૪. એન.એફ.એસ.એ. રેશનકાર્ડ:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="nfsa-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="nfsa-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="nfsa-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="nfsa-remarks" placeholder="" required>
                                </div>
                                <div class="col-md-12">
                                    ૫. પ્રધાનમંત્રી જીવન સુરક્ષા યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pjsy-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pjsy-remarks" placeholder="" required>
                                </div>
							    <div class="col-md-12">
                                    ૬. પ્રધાનમંત્રી જીવન જ્યોત વીમા યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pjjvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pjjvy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pjjvy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pjjvy-remarks" placeholder="" required>
                                </div>
							    <div class="col-md-12">
                                    ૭. આયુષ્યમાન ભારત યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="aby-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="aby-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="aby-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="aby-remarks" placeholder="" required>
                                </div>
                                <div class="col-md-12">
                                    ૮. જનની સુરક્ષા યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="jsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="jsy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="jsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="jsy-remarks" placeholder="" required>
                                </div>
						        <div class="col-md-12">
                                    ૯. પ્રધાનમંત્રી માતૃ વંદના યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pmvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pmvy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pmvy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pmvy-remarks" placeholder="" required>
                                </div>
							    <div class="col-md-12">
                                    ૧૦. નિષય પોષણ યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="npy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="npy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="npy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="npy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૧. કસ્તુરબા પોષણ સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="kpsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="kpsy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="kpsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="kpsy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૨. કુંવરબાઈનું મામેરૂ સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="kmsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="kmsy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="kmsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="kmsy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૩. દિવ્યાંગ /વિકલાંગ (પાસ):
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="dvp-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="dvp-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="dvp-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="dvp-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૪. વ્હાલી દિકરી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="vdy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="vdy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="vdy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="vdy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૫. વૈદકીય સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="vsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="vsy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="vsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="vsy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૬. ઈંન્દીરા ગાંધી નેશનલ ડીસેબીલીટી પેન્શન યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="ignspy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="ignspy-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="ignspy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="ignspy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૭. સુકન્યા સમુધ્ધી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="ssy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="ssy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="ssy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="ssy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૮. પ્રધાનમંત્રી આવાસ યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pay-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pay-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pay-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pay-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૧૯. PM KISAN પ્રધાનમંત્રી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pkpy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pkpy-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pkpy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pkpy-remarks" placeholder="" required>
                                </div>
								<div class="col-md-12">
                                    ૨૦. PM JOY યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pjy-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pjy-remarks" placeholder="" required>
                                </div>
							    <div class="col-md-12">
                                    ૨૧. Disability Pension Scheme:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="dps-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="dps-count" placeholder="" required>
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="dps-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="dps-remarks" placeholder="" required>
                                </div>
						</div>
                        <button type="button" class="btn btn-secondary" onclick="window.location='index.php';">Previous</button>
                        <button type="submit" class="btn btn-success saveYojanaInfo" id="saveYojanaInfo">Save</button>
                        <button type="button" class="btn btn-primary" onclick="window.location='health-questions.php';">Next</button>
                    </div>
		        </form>
			</div>
		</div>
	</div>

    <script>

        var currentStep = 1;
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

        $('#yojanaForm').submit(function(event) {
            event.preventDefault();

            var formData = $('#yojanaForm').serialize();

            $.ajax({
                type: 'POST',
                url: "{{ route('yojano-form-submit') }}",
                data: formData,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', "{{ csrf_token() }}");
                },
                success: function(data) {
                    alert('Form submitted successfully!');
                    return false;
                },
                error: function(xhr, status, error) {
                    alert('Form submission failed: ' + error);
                }
            });
        });
    </script>

</body>
<?php include __DIR__.'/../main-footer.php'; ?>
</html>