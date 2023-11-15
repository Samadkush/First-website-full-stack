<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <img src= "logo.jpg" alt="Final International University" class="logo">
  <title>FINAL INTERNATIONAL UNIVERSITY ETHICS COMMITTEE APPLICATION FORM</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <h1>Ethics Committee Application Form</h1>
    <form id="ethicsForm" action="save_data2.php" method="POST">
   
    <p>Studies conducted in Final International University (FIU) and/or studies conducted by FIU personnel/students,
      which involve collecting data from human participants, are subject to review by the FIU Ethics Committee (EC).
      Applicants should submit this application form to the FIU EC along with the other required documents (see the
      Application Check List). Approval of the EC is required before the start of data collection from human
      participants.</p>

    <form id="ethicsForm">
      <div class="form-group">
        <label for="title">1. Title of study:</label>
        <input type="text" id="title" name="title" placeholder="Enter the title of your study">
      </div>

      <div class="form-group">
        <label>2. Type of study:</label>
        <div class="radio-options">
          <label for="academicStaff">
            <input type="radio" id="academicStaff" name="typeOfStudy" value="academicStaff">
            Academic Staff Study
          </label>
          <label for="doctorateThesis">
            <input type="radio" id="doctorateThesis" name="typeOfStudy" value="doctorateThesis">
            Doctorate Thesis
          </label>
          <label for="masterThesis">
            <input type="radio" id="masterThesis" name="typeOfStudy" value="masterThesis">
            Master Thesis
          </label>
          <label for="undergraduate">
            <input type="radio" id="undergraduate" name="typeOfStudy" value="undergraduate">
            Undergraduate
          </label>
          <label for="other">
            <input type="radio" id="other" name="typeOfStudy" value="other">
            Other (Specify)
          </label>
          <input type="text" id="otherSpecify" name="otherSpecify" placeholder="Specify" style="display: none;">
          
        </div>
      </div>
      
      
      

      <div class="form-group">
        <label for="researcherName">3. Researcher’s Name and surname:</label>
        <input type="text" id="researcherName" name="researcherName" placeholder="Enter your name and surname">
      </div>

      <div class="form-group">
        <label for="department">Department:</label>
        <input type="text" id="department" name="department" placeholder="Enter your department">
      </div>

      <div class="form-group">
        <label for="institute">Institute:</label>
        <input type="text" id="institute" name="institute" placeholder="Enter your institute">
      </div>

      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="Enter your address"></textarea>
      </div>

      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address">
      </div>

      <div class="form-group">
        
      </div>
  
      <div class="form-group">
        <label for="otherResearchers">Number of researchers (0-10):</label>
        <select id="numResearchers" name="numResearchers">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>
      
      <div class="researchers-container">
      </div>
      

  
      <div class="form-group" id="advisorSection" style="display: none;">
        <p>5. Advisor’s/Supervising Faculty Member’s (Undergraduate students conducting research must have an academic advisor/instructor supervising their research):</p>
        <label for="advisorTitle">Title:</label>
        <select id="advisorTitle" name="Title"> 
          <option value="Instr.">Instr.</option>
          <option value="Sen Instr.">Sen Instr.</option>
          <option value="Dr.">Dr.</option>
          <option value="Asst.Prof.Dr.">Asst.Prof.Dr.</option>
          <option value="Assoc.Pro.Dr.">Assoc.Pro.Dr.</option>
        </select> <br>
        <label for="advisorName">Name and Surname:</label>
        <input type="text" id="advisorName" name="advisorName" placeholder="Enter the name of the advisor">
        
        <label for="advisorAddress">Address:</label>
        <input type="text" id="advisorAddress" name="advisorAddress" placeholder="Enter address">
        
        <div class="advisor-info" style="display: none;">
          <label for="advisorDepartment">Department:</label>
          <input type="text" id="advisorDepartment" name="advisorDepartment" placeholder="Enter the advisor's department">
        </div>
      
        <div class="advisor-info" style="display: none;">
          <label for="advisorPhone">Phone:</label>
          <input type="tel" id="advisorPhone" name="advisorPhone" placeholder="Enter the advisor's phone number">
        </div>
      </div>
      
      
      
        
      
      
      <div class="form-group">
        <label for="studyTimeFrame">6. Expected time frame of the study:</label>
        <label for="startDate">Start:</label>
        <input type="date" id="startDate" name="startDate">
        <label for="endDate">End:</label>
        <input type="date" id="endDate" name="endDate">
        <p>The start date of the study should be at least three weeks from your date of application.</p>
      </div>

      <div class="form-group">
        <label for="organizations">7. Organizations, institutions in which data collection is planned to be accomplished:</label>
        <input type="text" id="organizations" name="organizations" placeholder="Organization A">
        <input type="text" id="organizations" name="organizations" placeholder="Organization B">
        <input type="text" id="organizations" name="organizations" placeholder="Organization C">
      </div>

      <div class="form-group">
        <label for="externalOrganization">8. Is the approval of organization/institution other than FIU required for data collection?</label>
        <input type="radio" id="externalOrganizationYes" name="externalOrganization" value="yes">
        <label for="externalOrganizationYes">Yes</label>
        <input type="radio" id="externalOrganizationNo" name="externalOrganization" value="no">
        <label for="externalOrganizationNo">No</label>
        <textarea id="externalOrganizationDetails" name="externalOrganizationDetails" placeholder="If yes, please specify the organization details"></textarea>
      </div>
      

      <div class="form-group">
        <label for="supported">9. Whether the project is supported/funded or not:</label>
        <input type="radio" id="supportedYes" name="supported" value="Supported">
        <label for="supportedYes">Supported</label>
        <input type="radio" id="supportedNo" name="supported" value="Not supported">
        <label for="supportedNo">Not supported</label>
      </div>

      <div id="fundingOrganizationSection" style="display: none;">
        <p>If supported, specify Institution</p>
        <input type="radio" id="University" name="supportingInstitution" value="University">
        <label for="University">University</label>
        <div id="universityTextBox" style="display: none;">
          <p>Specify the university:</p>
          <input type="text" id="universityInstitution" name="universityInstitution" placeholder="Enter university name">
        </div>
        <input type="radio" id="TUBITAK" name="supportingInstitution" value="TUBITAK">
        <label for="TUBITAK">TUBITAK</label>
        <div id="tubitakTextBox" style="display: none;">
          <p>Specify TUBITAK details:</p>
          <input type="text" id="tubitakInstitution" name="tubitakInstitution" placeholder="Enter TUBITAK details">
        </div>
        <input type="radio" id="International" name="supportingInstitution" value="International">
        <label for="International">International</label>
        <div id="internationalTextBox" style="display: none;">
          <p>Specify the international institution:</p>
          <input type="text" id="internationalInstitution" name="internationalInstitution" placeholder="Enter international institution name">
        </div>
        <input type="radio" id="Other" name="supportingInstitution" value="Other">
        <label for="Other">Other</label>
        <div id="otherTextBox" style="display: none;">
          <p>Specify other institution:</p>
          <input type="text" id="otherInstitution" name="otherInstitution" placeholder="Enter other institution name">
        </div>
      </div>

      <p>Will the ethical approval be used for a project submission (TUBITAK, EU projects, etc.)?</p>
      <input type="radio" id="approvalUsedYes" name="approvalUsed" value="yes">
      <label for="approvalUsedYes">Yes</label>
      <input type="radio" id="approvalUsedNo" name="approvalUsed" value="no">
      <label for="approvalUsedNo">No</label>
      
      

      <div class="form-group">
        <label for="applicationStatus">10. Status of the application:</label>
        <input type="radio" id="applicationStatusNew" name="applicationStatus" value="new">
        <label for="applicationStatusNew">New</label>
        <input type="radio" id="applicationStatusRevised" name="applicationStatus" value="revised">
        <label for="applicationStatusRevised">Revised</label>
        <input type="radio" id="applicationStatusExtension" name="applicationStatus" value="extension">
        <label for="applicationStatusExtension">Extension of a Previous Study</label>
        <input type="radio" id="applicationStatusChanges" name="applicationStatus" value="changes">
        <label for="applicationStatusChanges">Reporting changes</label>
        <br>
        <div class="form-group" id="extensionSection" style="display: none;">
    <label for="previousProtocolNumber">Protocol No (if extension):</label>
    <input type="text" id="previousProtocolNumber" name="previousProtocolNumber"> 
    <br>
    <label for="newCompletionDate">The new expected date of completion:</label>
    <input type="date" id="newCompletionDate" name="newCompletionDate">
    <br>
    <p>If this application is a request for the extension of a previous study, does the current study show any differences from the previously approved one?</p>
    <input type="radio" id="studyChangesYes" name="studyChanges" value="yes">
    <label for="studyChangesYes">Yes</label>
    <input type="radio" id="studyChangesNo" name="studyChanges" value="no">
    <label for="studyChangesNo">No</label>
    <br>
    <!-- Hidden section for "If yes, please explain the changes you want to make" -->
    <div class="form-group" id="studyChangesSection" style="display: none;">
      <label for="protocolChanges">If yes, please explain the changes you want to make:</label>
      <textarea id="protocolChanges" name="protocolChanges" placeholder="Explain the changes in a simple language (two paragraphs maximum)"></textarea>
      <br>
      <p>Is the reason for the proposed changes an unexpected situation that happens to a participant in the study (e.g., an event that could harm the participant’s psychological or physical health)?</p>
      <input type="radio" id="unexpectedYes" name="unexpected" value="yes">
      <label for="unexpectedYes">Yes</label>
      <input type="radio" id="unexpectedNo" name="unexpected" value="no">
      <label for="unexpectedNo">No</label>
      <br>
      <!-- Hidden section for "If your answer is yes..." -->
      <div class="form-group" id="unexpectedDetailsSection" style="display: none;">
        <label for="unexpectedDetails">If your answer is yes; describe the unexpected situation that requires you to make changes. Please indicate what measures you have taken to prevent similar situations from occurring in the future.</label>
        <textarea id="unexpectedDetails" name="unexpectedDetails" placeholder="Describe the unexpected situation and preventive measures"></textarea>
      </div>
    </div>
  </div>
</div>

<div class="form-group" id="reportingChangesSection" style="display: none;">

        <p>Reporting changes (if any)</p>
        <p>Protocol Number</p> 
        <br>
        <input type="text" id="Protocol No." name="Protocol No." placeholder="Enter Protocol Number">
        <br>
        <p>Please explain the changes you want to make (e.g., adding a new researcher to the research team, adding a new measure, adding a new study similar to your approved study) in a simple language so that people with no expertise in the field can understand (two paragraphs maximum). If your change(s) will be new informed consent form, debriefing form, etc., submit these forms together with the revised application to the Ethics Committee.</p>
        <input type="text" id="Changes" name="Changes">
        <p>Is the reason for the proposed changes an unexpected situation that happens to a participant in the study (e.g., an event that could harm the participant’s psychological or physical health)?</p>
        <input type="radio" id="unexpectedYes" name="unexpected" value="yes">
        <label for="unexpectedYes">Yes</label>
        <input type="radio" id="unexpectedNo" name="unexpected" value="no">
        <label for="unexpectedNo">No</label>
        <br>
        <p>If your answer is yes; describe the unexpected situation that requires you to make changes. Please indicate what measures you have taken to prevent similar situations from occurring in the future.</p>
        <input type="text" id="Reason" name="Reason">
      </div>
      <div class="form-group" id="question11To21" style="display: none;">
      <div class="form-group">
        <label for="purposeStudy">11. Please explain the purpose of your study and the research question you are trying to answer with this study:</label>
        <textarea id="purposeStudy" name="purposeStudy" placeholder="Explain the purpose and research question in a simple language (maximum of two paragraphs)"></textarea>
      </div>

      <div class="form-group">
        <label for="dataCollectionProcess">12. Write down your data collection process, including the method, scale, tools, and techniques to be used. (Submit a copy of any measure or questionnaire used in the research with this document.)</label>
        <textarea id="dataCollectionProcess" name="dataCollectionProcess" placeholder="Explain the data collection process"></textarea>
      </div>

      <div class="form-group">
        <label for="deception">13. Does the study aim to partially/completely provide the participants with incorrect information in any way? Is there deception? Does the study require secrecy?</label>
        <input type="radio" id="deceptionYes" name="deception" value="yes">
        <label for="deceptionYes">Yes</label>
        <input type="radio" id="deceptionNo" name="deception" value="no">
        <label for="deceptionNo">No</label>
      </div>

      <div class="form-group">
        <label for="negativeEffects">14. Beyond the minimum stress and discomfort that participants may encounter in their daily lives, does your work contain elements that threaten their physical and/or mental health or that may be a source of stress for them?</label>
        <input type="radio" id="negativeEffectsYes" name="negativeEffects" value="yes">
        <label for="negativeEffectsYes">Yes</label>
        <input type="radio" id="negativeEffectsNo" name="negativeEffects" value="no">
        <label for="negativeEffectsNo">No</label>
        <br>
        <label for="effectsDetails">If your answer is yes; what negative effects does your work have on the physical and/or mental health of the participants? Please explain in detail. Please write down the measures taken in order to eliminate or minimize the effects of these elements.</label>
        <textarea id="effectsDetails" name="effectsDetails" placeholder="Explain the negative effects and preventive measures"></textarea>
      </div>

      <div class="form-group">
        <label for="expectedParticipants">15. The expected number of participants:</label>
        <input type="number" id="expectedParticipants" name="expectedParticipants">
      </div>

      <div class="form-group">
        <label for="controlGroup">16. If you are doing an education or intervention study, will a control group be used?</label>
        <input type="radio" id="controlGroupYes" name="controlGroup" value="yes">
        <label for="controlGroupYes">Yes</label>
        <input type="radio" id="controlGroupNo" name="controlGroup" value="no">
        <label for="controlGroupNo">No</label>
      </div>

      <div class="form-group" id="question17To21" style="display: none;">

      <div class="form-group">
        <p>17. From the list presented below, tick the options that best describe the participants:</p>
        <input type="checkbox" id="participantTypeUniversityStudents" name="participantType" value="universityStudents">
        <label for="participantTypeUniversityStudents">University students</label>
        <input type="checkbox" id="participantTypeAdultsEmployment" name="participantType" value="adultsEmployment">
        <label for="participantTypeAdultsEmployment">Adults in employment</label>
        <input type="checkbox" id="participantTypeUnemployedAdults" name="participantType" value="unemployedAdults">
        <label for="participantTypeUnemployedAdults">Unemployed adults</label>
        <input type="checkbox" id="participantTypePreschoolChildren" name="participantType" value="preschoolChildren">
        <label for="participantTypePreschoolChildren">Preschool children</label>
        <input type="checkbox" id="participantTypePrimarySchoolPupils" name="participantType" value="primarySchoolPupils">
        <label for="participantTypePrimarySchoolPupils">Primary school pupils</label>
        <input type="checkbox" id="participantTypeHighSchoolStudents" name="participantType" value="highSchoolStudents">
        <label for="participantTypeHighSchoolStudents">High school students</label>
        <input type="checkbox" id="participantTypeChildWorkers" name="participantType" value="childWorkers">
        <label for="participantTypeChildWorkers">Child workers</label>
        <input type="checkbox" id="participantTypeElderly" name="participantType" value="elderly">
        <label for="participantTypeElderly">The elderly</label>
        <input type="checkbox" id="participantTypeMentallyDisabled" name="participantType" value="mentallyDisabled">
        <label for="participantTypeMentallyDisabled">Mentally disabled/challenged individuals</label>
        <input type="checkbox" id="participantTypePhysicallyDisabled" name="participantType" value="physicallyDisabled">
        <label for="participantTypePhysicallyDisabled">Physically disabled/challenged individuals</label>
        <input type="checkbox" id="participantTypePrisoners" name="participantType" value="prisoners">
        <label for="participantTypePrisoners">Prisoners</label>
        <input type="checkbox" id="participantTypeOther" name="participantType" value="Other">
  <label for="participantTypeOther">Other (please specify)</label>
  <input type="text" id="participantTypeOtherText" name="participantTypeOtherText" style="display: none;">
        <br>
        <p>If applicable, submit the Parental Approval Form or Informed Consent Form for children and pupils participating in the study.</p>
      </div>
      </div>

      <div class="form-group">
        <label for="sampleCharacteristics">18. Briefly describe the sample characteristics, special restrictions, and conditions for participation (e.g., age group restriction, certain social group requirements, etc.):</label>
        <textarea id="sampleCharacteristics" name="sampleCharacteristics" placeholder="Explain the sample characteristics and restrictions"></textarea>
      </div>

      <div class="form-group">
        <label for="invitationMethod">19. Explain how you will invite participants to the study. If the invitation will be via e-mail, social media, various websites, and similar channels, insert the text of the announcement into the application file:</label>
        <textarea id="invitationMethod" name="invitationMethod" placeholder="Explain the method of invitation and insert the announcement text"></textarea>
      </div>

      <div class="form-group">
        <label for="methodsToBeUsed">20. Please tick the method(s) to be used:</label>
        <input type="checkbox" id="methodSurvey" name="methodsToBeUsed" value="survey">
        <label for="methodSurvey">Survey</label>
        <input type="checkbox" id="methodInterview" name="methodsToBeUsed" value="interview">
        <label for="methodInterview">Interview</label>
        <input type="checkbox" id="methodObservation" name="methodsToBeUsed" value="observation">
        <label for="methodObservation">Observation</label>
        <input type="checkbox" id="methodComputerTest" name="methodsToBeUsed" value="computerTest">
        <label for="methodComputerTest">Computer test</label>
        <input type="checkbox" id="methodVideoRecording" name="methodsToBeUsed" value="videoRecording">
        <label for="methodVideoRecording">Video/film recording</label>
        <input type="checkbox" id="methodVoiceRecording" name="methodsToBeUsed" value="voiceRecording">
        <label for="methodVoiceRecording">Voice recording</label>
        <input type="checkbox" id="methodPhysiologicalMeasurement" name="methodsToBeUsed" value="physiologicalMeasurement">
        <label for="methodPhysiologicalMeasurement">Physiological measurement</label>
        <input type="checkbox" id="methodBiologicalSample" name="methodsToBeUsed" value="biologicalSample">
        <label for="methodBiologicalSample">Biological sample</label>
        <input type="checkbox" id="methodAlcoholDrugs" name="methodsToBeUsed" value="alcoholDrugs">
        <label for="methodAlcoholDrugs">Making participants use alcohol, drugs, or any other chemical substance</label>
        <input type="checkbox" id="methodExposureStimulation" name="methodsToBeUsed" value="exposureStimulation">
        <label for="methodExposureStimulation">Exposure to high stimulation (such as light, sound)</label>
        <input type="checkbox" id="methodExposureRadioactive" name="methodsToBeUsed" value="exposureRadioactive">
        <label for="methodExposureRadioactive">Exposure to radioactive material</label>
        <input type="checkbox" id="methodOther" name="methodsToBeUsed" value="other">
  <label for="methodOther">Other (please specify)</label>
  <input type="text" id="methodOtherText" name="methodOtherText" style="display: none;">
      </div>

      <div class="form-group">
        <label for="contributions">21. Write down the possible contributions of this work to your field and/or society (one paragraph at most):</label>
        <textarea id="contributions" name="contributions" placeholder="Explain the possible contributions of the study"></textarea>
      </div>
    </div>

      <div class="form-group">
        <p>I confirm that the information I have given above is accurate to the best of my knowledge.</p>
        <label for="supervisorName">Supervisor’s (if any) Name and Surname:</label>
        <input type="text" id="supervisorName" name="supervisorName" placeholder="Enter supervisor's name and surname">
        <label for="supervisorSignature">Signature:</label>
        <input type="text" id="supervisorSignature" name="supervisorSignature" placeholder="Enter supervisor's signature">
        <label for="dateSupervisor">Date:</label>
        <input type="date" id="dateSupervisor" name="dateSupervisor">
        <br>
        <label for="researcherSignature">Researcher’s Name and Surname:</label>
        <input type="text" id="researcherSignature" name="researcherSignature" placeholder="Enter researcher's name and surname">
        <label for="researcherSignature">Signature:</label>
        <input type="signature" id="researcherSignature" name="researcherSignature" placeholder="Enter researcher's signature">
        <label for="dateResearcher">Date:</label>
        <input type="date" id="dateResearcher" name="dateResearcher">
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>
  <script src="form1.js"></script> 
</body>

</html>
