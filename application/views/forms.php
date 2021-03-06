
    <section>
      <br>
    </section>
       
    <section class="container form-con">
        
        <?=  form_open('Forms') ?>
            <fieldset>
            <!-- Form Name -->
            <legend>Please fill out the fields to create a log</legend>
            <!-- Text input-->
            <kbd><?= validation_errors()?></kbd>
            <div class="form-group">
              <label class="" for="summary">Fault Summary</label>
              <div class="">
                <input id="summary" name="summary" placeholder="Please enter Summary" class="form-control" required="true" type="text" value="<?= set_value('summary') ?>">
                 <span class="help-block">Enter the summary of the fault Here</span> 
              </div>
            </div>

            <div class="row">
                <!-- Textarea -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="fault">Fault</label>
                  <div class="">                     
                    <textarea id="fault" name="fault" value="<?= set_value('fault') ?>" class="form-control" required="true" rows="4" placeholder="Please enter fault here" ></textarea>
                     <span class="help-block">Enter the details of the fault Here</span> 
                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group col-md-6">
                  <label class="control-label" for="solution">Solution</label>
                  <div class="">                     
                    <textarea id="solution" name="solution" value="<?= set_value('solution') ?>" class="form-control" rows="4" placeholder="Please enter solution here" ></textarea>
                     <span class="help-block"></span> 
                  </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Multiple Radios -->
                <div class="form-group col-md-6" required="true">
                  <label class="control-label" for="cart"></label>
                  <div class="">
                    <div class="radio">
                        <label for="cart-3">
                          <input name="cart" id="cart-3" value="Weather System" type="radio" onClick="displayForm(this)" checked>
                          Weather System
                        </label>
                    </div>
                    <div class="radio">
                        <label for="cart-0">
                          <input name="cart" id="cart-0" value="Communication" type="radio" onClick="displayForm(this)">
                          Communication
                        </label>
                    </div>
                    <div class="radio">
                        <label for="cart-1">
                          <input name="cart" id="cart-1" value="Navigation" type="radio" onClick="displayForm(this)">
                          Navigation
                        </label>
                    </div>
                    <div class="radio">
                        <label for="cart-2">
                          <input name="cart" id="cart-2" value="Surveillance" type="radio" onClick="displayForm(this)">
                          Surveillance
                        </label>
                    </div>
                    <div class="radio">
                        <label for="cart-4">
                          <input name="cart" id="cart-4" value="Research and development" type="radio" onClick="displayForm(this)">
                          Research and development
                        </label>
                    </div>
                  </div>
                </div>

                <!-- important select on hide -->
                <div class="form-group col-md-6">
                  <!-- Select Basic -->
                  <div class="form-group">
                      <select id="comsubcart" name="comsubcart" class="form-control" style="display:none">
                          <option value="Aeronautical Message Handling System (AMHS)">Aeronautical Message Handling System (AMHS)</option>  
                          <option value="Aeronautical Fixed Telecommunication Network (AFTN)">Aeronautical Fixed Telecommunication Network (AFTN)</option>
                          <option value="Private Automatic Branch Exchange (PABX)">Private Automatic Branch Exchange (PABX)</option>
                          <option value="Very Small Aperture Terminal (VSAT)">Very Small Aperture Terminal (VSAT)</option>
                          <option value="High Frequency Radios (HF)">High Frequency Radios (HF)</option>
                          <option value="Veryhigh Frequency Radios (VHF)">Veryhigh Frequency Radios (VHF)</option>
                          <option value="Voice Communications Control System (VCCS)">Voice Communications Control System (VCCS)</option>
                          <option value="Voice Communications Management System (VCMS)">Voice Communications Management System (VCMS)</option>
                          <option value="Remote Control and Monitoring System (RCMS)">Remote Control and Momitoring System (RCMS)</option>
                          <option value="Microwave Link">Microwave Link</option>
                          <option value="Voice Recorder">Voice Recorder</option>
                          <option value="Intelsat Business Service (IBS)">Intelsat Business Service (IBS)</option>
                          <option value="Public Switched Telephone Network (PSTN)">Public Switched Telephone Network (PSTN)</option>
                          <option value="Air Traffic Service/Direct Speech (ATS/DS)">Air Traffic Service/Direct Speech (ATS/DS)</option>
                      </select>
                  </div>

                  <!-- Select Basic -->
                  <div class="form-group">
                      <select id="navsubcart" name="navsubcart" class="form-control" style="display:none">
                        <option value="Instrument Landing System (ILS)">Instrument Landing System (ILS)</option> 
                        <option value="Glide Path">Glide Path (GP)</option>   
                        <option value="Localizer">Localizer</option>   
                        <option value="Doppler Veryhigh Frequency Omnidorectional Range (DVOR)">Doppler Veryhigh Frequency Omnidorectional Range (DVOR)</option>
                        <option value="Conventional Veryhigh Frequency Omnidorectional Range (CVOR)">Conventional Veryhigh Frequency Omnidorectional Range (CVOR)</option>
                        <option value="Distance Measuring Device (DME)">Distance Measuring Device (DME)</option>
                        <option value="Automatic Terminal Information Service (ATIS)">Automatic terminal information service (ATIS)</option>
                        <option value="Non-directional Beacon (NDB)">Non-directional Beacon (NDB)</option>
                        <option value="Automated Weather Observing System (AWOS)">Automated Weather Observing System (AWOS)</option>
                      </select>

                  </div>

                  <!-- Select Basic -->
                  <div class="form-group">
                      <select id="sursubcart" name="sursubcart" class="form-control" style="display:none">
                          <option value="Air Traffic Management System(ATM)">Air Traffic Management System(ATM)</option>
                          <option value="Primary Surveillance radar (PSR)">Primary Surveillance Radar (PSR)</option>  
                          <option value="Secondary Surveillance radar (SSR)">Secondary Surveillance Radar (SSR)</option>
                          <option value="Controller Working Position (CWP)">Controller Working Position (CWP)</option>
                          <option value="Flight Data display (FDD)">Flight Data Display (FDD)</option>
                          <option value="Flight Data Processor (FDP)">Flight Data Processor (FDP)</option>
                          <option value="Automatic Dependent Surveillance (ADS)">Automatic Dependent Surveillance (ADS)</option>
                          <option value="Secondary Surveillance radar (SDP)">Surveillance Data Processor (SDP)</option>
                          <option value="Safety Net (SNET)">Safety Net (SNET)</option>

                      </select>
                  </div>

                  <!-- Select Basic -->
                  <div class="form-group">
                      <select id="wetsubcart" name="wetsubcart" class="form-control" style="display:none">
                        <option value="1">Option one</option>
                        <option value="2">Option two</option>
                      </select>
                  </div>

                  <!-- Select Basic -->
                  <div class="form-group">
                      <select id="radsubcart" name="radsubcart" class="form-control" style="display:none">
                         <option value="Aeronautical Message Handling System (AMHS)">Aeronautical Message Handling System (AMHS)</option>  
                          <option value="Aeronautical Fixed Telecommunication Network (AFTN)">Aeronautical Fixed Telecommunication Network (AFTN)</option>
                          <option value="Private Automatic Branch Exchange (PABX)">Private Automatic Branch Exchange (PABX)</option>
                          <option value="Very Small Aperture Terminal (VSAT)">Very Small Aperture Terminal (VSAT)</option>
                          <option value="High Frequency Radios (HF)">High Frequency Radios (HF)</option>
                          <option value="Veryhigh Frequency Radios (VHF)">Veryhigh Frequency Radios (VHF)</option>
                          <option value="Voice Communications Control System (VCCS)">Voice Communications Control System (VCCS)</option>
                          <option value="Voice Communications Management System (VCMS)">Voice Communications Management System (VCMS)</option>
                          <option value="Remote Control and Monitoring System (RCMS)">Remote Control and Momitoring System (RCMS)</option>
                          <option value="Microwave Link">Microwave Link</option>
                          <option value="Voice Recorder">Voice Recorder</option>
                          <option value="Intelsat Business Service (IBS)">Intelsat Business Service (IBS)</option>
                          <option value="Public Switched Telephone Network (PSTN)">Public Switched Telephone Network (PSTN)</option>
                          <option value="Air Traffic Service/Direct Speech (ATS/DS)">Air Traffic Service/Direct Speech (ATS/DS)</option>
                        <option value="Instrument Landing System (ILS)">Instrument Landing System (ILS)</option> 
                        <option value="Glide Path">Glide Path (GP)</option>   
                        <option value="Localizer">Localizer</option>   
                        <option value="Doppler Veryhigh Frequency Omnidorectional Range (DVOR)">Doppler Veryhigh Frequency Omnidorectional Range (DVOR)</option>
                        <option value="Conventional Veryhigh Frequency Omnidorectional Range (CVOR)">Conventional Veryhigh Frequency Omnidorectional Range (CVOR)</option>
                        <option value="Distance Measuring Device (DME)">Distance Measuring Device (DME)</option>
                        <option value="Automatic Terminal Information Service (ATIS)">Automatic terminal information service (ATIS)</option>
                        <option value="Non-directional Beacon (NDB)">Non-directional Beacon (NDB)</option>
                        <option value="Automated Weather Observing System (AWOS)">Automated Weather Observing System (AWOS)</option>
                         <option value="Air Traffic Management System(ATM)">Air Traffic Management System(ATM)</option>
                          <option value="Primary Surveillance radar (PSR)">Primary Surveillance Radar (PSR)</option>  
                          <option value="Secondary Surveillance radar (SSR)">Secondary Surveillance Radar (SSR)</option>
                          <option value="Controller Working Position (CWP)">Controller Working Position (CWP)</option>
                          <option value="Flight Data display (FDD)">Flight Data Display (FDD)</option>
                          <option value="Flight Data Processor (FDP)">Flight Data Processor (FDP)</option>
                          <option value="Automatic Dependent Surveillance (ADS)">Automatic Dependent Surveillance (ADS)</option>
                          <option value="Secondary Surveillance radar (SDP)">Surveillance Data Processor (SDP)</option>
                          <option value="Safety Net (SNET)">Safety Net (SNET)</option>
                      </select>
                  </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group">
                  <label class="col-md-1 control-label" for="status">Status</label>
                  <div class="col-md-3">
                    <select id="status" name="status" class="form-control">
                      
                      <option value="Solved">Solved</option>
                      
                      <option value="Monitoring">Monitoring</option>
                      
                      <option value="Pending">Pending</option>
                      
                    </select>
                  </div>
                  <div class="col-md-1"></div>
                  <label class="col-md-2 control-label" for="status"> Your Name: </label>
                  <div class="col-md-5">
                     <select id="inputState" class="form-control" name="emp_select">
                        <?php foreach ($emps as $emp ) : ?>
                            <option value="<?= $emp->emp_id;?>"><?= $emp->emp_name;?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                </div>
            </div>
            <div style="padding-bottom: 15px;"></div>
            <div class="row">
                <div class="form-group">
                  <label class="col-md-1 control-label" for="status">Location</label>
                  <div class="col-md-3">
                    <select id="area" name="area" class="form-control">
                      
                      <option value="Kotoka">Kotoka</option>
                      
                      <option value="Kumasi">Kumasi</option>
                      
                      <option value="Tamale">Tamale</option>
                      
                      <option value="Sunyani">Sunyani</option>

                      <option value="Takoradi">Takoradi</option>

                      <option value="Wa">Wa</option>
                    </select>
                  </div>
                  <div class="col-md-1"></div>
                  <label class="col-md-2 control-label" for="status"> Your ID Number: </label>
                  <div class="col-md-5">
                    <input id="id_number" name="id_number" placeholder="Please enter ID Number" class="form-control" required="true" type="text">
                  </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-info">Create Log</button>
            </fieldset>
        <?= form_close() ?>
    </section>

