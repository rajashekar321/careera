<!DOCTYPE html>
<html lang="en">
<head>
	<title>Career Guidance</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/jquery.convform.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="demo.css">
	<link rel="stylesheet" type="text/css" href="../css/creative.css">
</head>
<?php
  include("../Home/MenuBarInside.php");

?>
<body>
	<section id="demo" class=" col-md-12 jumbotron ">
	<br /> <br /> <h1 class="display-3">We are here to guide you!</h1>
  <p class="text-muted md-3">Please be advised that we only offer assistance with regard to this platform, if you have any other issues not related to this platform use this link <a href = "https:google.com">here </a>
  </p>
	        <div class="container-fluid  ">
		
	            <div class="  jumbotron-fluid">
	                    <div class="card no-border col-md-10">
	                        <div id="chat" class="conv-form-wrapper">
	                          	                            <form action="" method="GET" class="hidden">
	                                <input type="text" data-conv-question="Hello! I'm VISION the CGS chatbot, I'm here to help you with any problems you might encounter while using this platform" data-no-answer="true">
	                              
									
	                                <input type="text" name="name" data-conv-question="Alright! First, tell me your full name, please.|Okay! Please, tell me your name first.">
	                                <input type="text" data-conv-question="Hie, {name}:0! It's a pleasure to meet you. " data-no-answer="true">
	                              
	                              
									<select name="problemArea" data-callback="storeState" data-conv-question="Please select an area related to your problem?">
	                                     <option value="Counselling Session">Counselling Session</option>
	                                    <option value="Evaluation"> Get Evaluation</option>
	                                    <option value="Institutes">Institutes</option>
	                                    <option value="Professions">Professions</option>
	                                </select>

									<div data-conv-fork="problemArea">
									<!-- Counselling Session Section-->
											    <div data-conv-case="Counselling Session">
	                                        <input type="text" data-conv-question="thanks, it seems like your problem is related to the <b>Counselling Session</b>" data-no-answer="true">
	                                 
											<select name="question" data-callback="storeState" data-conv-question=" please select a question related to your problem">
	                                    <option value="what is it nhai">what is Counselling Session About?</option>
	                                    <option value="how does the thing work">how does the Counselling Session work?</option> <br />
										<option value="what im l supposed to do with this">what do l do here?</option>
										<option value="what is STEM">what is STEM?</option>
										
	                                </select>
									
	                                <div data-conv-fork="question">
	                                    <div data-conv-case="what is it nhai">
	                                        <input type="text" data-conv-question="ok  {name}:0, the Counselling Session is a section of the platform where you are provided with information about tertiary programs and possible careers based on the subjects you have selected in the initial form. Click <a href = 'http://cgs/counselingSession/main.php'>here</a> to visit it" data-no-answer="true">
	                                    </div>
	                                 	 <div data-conv-case="how does the thing work">
		                                    <input type="text" data-conv-question="well  {name}:0, You will have to enter 3 of your favourite STEM based subjects and the system uses that information to suggest tertiary programs for you." data-no-answer="true">
											<input type="text" data-conv-question=" Please make sure that the subjects you select result in a valid science combination since they are the only information required to guide you accordingly.Click <a href = 'http://cgs/counselingSession/main.php'>here</a> to visit it." data-no-answer="true">
	                                    </div> 
										<div data-conv-case="what im l supposed to do with this">
		                                    <input type="text" data-conv-question="it is pretty simple all you have to do is select your favourite subjects from the pretty blue menu and hit enter or click submit. Oww and  {name}:0, please make sure you enter <b>three</b> subjects and together they form a meaningful combination. " data-no-answer="true">
	                                    </div> 
										<div data-conv-case="what is STEM">
		                                    <input type="text" data-conv-question="this is a selection of Science Technology, Engineering and Mathematics subjects studied in high school" data-no-answer="true">
											 <input type="text" data-conv-question="The system was developed to cater for students doing these subjects but we will be able to help everyone soon. " data-no-answer="true">
	                                    </div>
	                                </div>		
									 </div>
	                                <!-- Evaluation Section-->					
	                                    <div data-conv-case="Evaluation">
	                                        <input type="text" data-conv-question="thanks, it seems like your problem is related to the <b>Evaluation</b>" data-no-answer="true">
	                                 
											<select name="question" data-callback="storeState" data-conv-question=" please select a question related to your problem">
	                                    <option value="what is it">what is the evaluation about?</option>
	                                    <option value="how does this work">how does the evaluation work?</option>
										<option value="what im l supposed to do">what im l supposed to do?</option>
										<option value="what is an IQ Test">what is an IQ Test?</option>
										<option value="what is happends if l fail">what happends if l fail?</option>
										
	                                </select>
									<div data-conv-fork="question">
	                                    <div data-conv-case="what is it">
	                                        <input type="text" data-conv-question="hey  {name}:0, the Get Evaluation is a section of the platform where you are provided with information about tertiary programs and possible careers based mainly on your IQ result. " data-no-answer="true">
											 <input type="text" data-conv-question="This section also offers you a couple of options after you finish the test, you can:
											 <ul>
											 <li>Continue  and select your favourite subjects</li> 
											 <li>You can view all the programs that are in your IQ range ireguardless of the branch of science</li>
											 <li>if you are not happy with your score, you can choose to re-do the test</li></ul>.
											 Click <a href = 'http://cgs/iqTest/IQ_test1.php'>here</a> to visit it." data-no-answer="true">
	                                    </div>
	                                 	 <div data-conv-case="how does this work">
		                                    <input type="text" data-conv-question="well {name}:0, you will have to take an IQ Test  designed to trigger various areas of your brain and assess your mental capabilities, the career guidance information you will recieve will be costom made for you. This IQ score will be used to determine which tertiary programs and careers are the best for you.  " data-no-answer="true">
											
											 <input type="text" data-conv-question=" This IQ score will be used to determine which tertiary programs and careers are the best for you. Click <a href = 'http://cgs/iqTest/index.php'>here</a> to visit it. " data-no-answer="true">
	                                    </div> 
										<div data-conv-case="what im l supposed to do">
										<input type="text" data-conv-question="Hie {name}:0, first you will have create an account so that we can save your details for later use. After that you can log in and start the evaluation process.  " data-no-answer="true">
										   
										<input type="text" data-conv-question="Dont worry {name}:0 its pretty simple, all you have to do is read each question carefully and select the correct answer,please be warned, this is not a walk in the park since the test is designed to measure your IQ.Click <a href = 'http://cgs/iqTest/index.php'>here</a> to visit it. " data-no-answer="true">
	                                    </div> 
										<div data-conv-case="what is an IQ Test">
		                                    <input type="text" data-conv-question="It is a special test that determines how efficiently each of us deals with situations as they arise, and how we profit intellectually from our experiences. This ability of mind varies in amount from person to person, and is what intelligence (IQ tests) attempt to measure." data-no-answer="true">
											 <input type="text" data-conv-question=" and {name}:0, its also encourage to know your IQ score and constantly trying to find out how you can improve it. Click <a href = 'http://cgs/iqTest/index.php'>here</a> to visit it." data-no-answer="true">
	                                    </div>
										<div data-conv-case="what is happends if l fail">
		                                    <input type="text" data-conv-question=" The programs in this system range from an IQ as low as 85, you have to aim to get at least 5 questions correct. If you fail, we suggest you try other braches of education such as law or commerce." data-no-answer="true">
											 <input type="text" data-conv-question=" but dont worry  {name}:0, l am confident that you have what it takes to study in the STEM branch of education." data-no-answer="true">
	                                    </div>
	                                </div>  
									</div>
									
									<!-- Institute Session Section-->
											    <div data-conv-case="Institutes">
	                                        <input type="text" data-conv-question="thanks, it seems like your problem is related to the <b>Institutes</b>" data-no-answer="true">
	                                 
											<select name="question" data-callback="storeState" data-conv-question=" please select a question related to your problem">
	                                    <option value="what is an Institute">what is an Institute?</option>
	                                    <option value="what am l supposed to do here">how does the institute section work?</option>
										<option value="what options do l have">what institute options do l have?</option>
										<option value="Why do l need this page">why do l need this page?</option>
									
	                                </select>
									
	                                <div data-conv-fork="question">
	                                    <div data-conv-case="what is an Institute">
	                                        <input type="text" data-conv-question="hey  {name}:0, an institute is an organisation that is more of a school that offered degrees, deplomas and other certifications. Usually students who excel in thier high school studies more on to these. Examples include universities and polytechnics." data-no-answer="true">
	                                    </div>
	                                 	 <div data-conv-case="what am l supposed to do here">
		                                    <input type="text" data-conv-question="In this section you have access to information about 12 of the most recognized universities in Zimbabwe. You have access to information about the institute itself and the programs it offers." data-no-answer="true">
											<input type="text" data-conv-question=".Click <a href = 'http://cgs/Institutes/main.php'>here</a> to visit it." data-no-answer="true">
	                              
										</div> 
										<div data-conv-case="what options do l have">
		                                    <input type="text" data-conv-question="Please note that this is a STEM based platform, so you can choose any institute from the 12, view  basic information about the institute and the programs offered there." data-no-answer="true">
											<input type="text" data-conv-question=".Click <a href = 'http://cgs/Institutes/main.php'>here</a> to visit it." data-no-answer="true">
										</div> 
										<div data-conv-case="Why do l need this page">
		                                    <input type="text" data-conv-question=" In the case that you already know the program you want to study at university and you do not have time to go through the long evaluation process, you can just find your preffered course at your favourite university page." data-no-answer="true">
											<input type="text" data-conv-question=".Click <a href = 'http://cgs/Institutes/main.php'>here</a> to visit it." data-no-answer="true">
									    </div>
	                                </div>		
									 </div>
	                                
     <!-- Professions Section-->					
	                                    <div data-conv-case="Professions">
	                                        <input type="text" data-conv-question="thanks, it seems like your problem is related to the <b>Professions</b>" data-no-answer="true">
	                                 
											<select name="question" data-callback="storeState" data-conv-question=" please select a question related to your problem">
	                                    <option value="what is a Profession">what is a Profession?</option>
	                                    <option value="how does this section work">how does the Proffession section work?</option>
										<option value="what are my options">what are my career options?</option>
										<option value="why do l need it">why do l need it?</option>
										
	                                </select>
									<div data-conv-fork="question">
	                                    <div data-conv-case="what is a Profession">
	                                        <input type="text" data-conv-question="A profession refers to the kind of job you would want to do after you have finished school. Since this is a career guidance platform, we have to provide you with information about the type you job you will probably do." data-no-answer="true">
											<input type="text" data-conv-question=".Click <a href = 'http://cgs/Professions/main.php'>here</a> to visit it." data-no-answer="true">
									    </div>
	                                 	 <div data-conv-case="how does this section work">
		                                    <input type="text" data-conv-question=" It is quite simple, all you have to do is select the branch of science you are interested in. The system will automatically find all possible job in that particular branch. It will also provide you with information about the job like the description, duties and skillset required. " data-no-answer="true">
											<input type="text" data-conv-question=".Click <a href = 'http://cgs/Professions/main.php'>here</a> to visit it." data-no-answer="true">
									    </div> 
										<div data-conv-case="what are my options">
		                                    <input type="text" data-conv-question="You can view a lot of information about each acreer and since our system is stem based, we only offer career  information on the following areas<br />
											 <ul><li>Engineering</li><li>Science</li><li>Mathematics</li><li>Health</li>
											 <li>Agriculture</li><li>Technology</li></ul>" data-no-answer="true">
											 <input type="text" data-conv-question=".Click <a href = 'http://cgs/Professions/main.php'>here</a> to visit it." data-no-answer="true">
	                                    </div> 
										
										<div data-conv-case="why do l need it">
		                                    <input type="text" data-conv-question=" This platform was created to provide career guidance to everyone from O levels up to post graduates. This session is for those users who already know the program the need to do and the institute that offer that program, it is form those users who just want to know which careers they are qualified for. " data-no-answer="true">
											<input type="text" data-conv-question=".Click <a href = 'http://cgs/Professions/main.php'>here</a> to visit it." data-no-answer="true">
									    </div>
	                                </div>  
									</div>
																
								
	                                    </div>
	                                
									
									
	                            <!--  <input type="text" data-conv-question="convForm also supports regex patterns. Look:" data-no-answer="true">
	                                <input data-conv-question="Type in your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?"> <input data-conv-question="Now tell me a secret (like a password)" type="password" data-minlength="6" id="senha" name="password" required placeholder="password"> 
									--><select data-conv-question="Choose from the following: ">
                                        <option value="google" data-callback="google">Go Back To Home</option>
                                        <option value="bing" data-callback="bing">Restart Session</option>
									</select> 
	                              
	                            </form>
	                        </div>
	                    </div>
					</div>
	            </div>
	       
	    
	</section>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="dist/autosize.min.js"></script>
	<script type="text/javascript" src="dist/jquery.convform.js"></script>

	<script>
		function google(stateWrapper, ready) {
			window.open("../index.php");
			window.close();
		}
		function bing(stateWrapper, ready) {
			if(originalState == false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}

		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
	</script>
</body>
</html>