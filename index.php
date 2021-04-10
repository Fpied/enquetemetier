<?php 
     
    $job = $date = $namejob = $activityarea = $address = $city = $phone = $name = $function = $tasks = $occasional = $workingday = $jobdescription = $worktime = $timeworkweek = $holidays = $tools = $diploma = $training = $experience = $maintasks = $knowhow = $advantage = $cons = $recruited = $recruitedtoday = $recruitearea = $theoutlets = $easyjob = $salary = $differenttradenames = $orientation = $traineeship = $alternation = $recruitment = $email = ""; 
 
    $jobError = $dateError = $namejobError = $activityareaError = $addressError = $cityError = $phoneError = $nameError = $functionError = $tasksError = $occasionalError = $workingdayError = $jobdescriptionError = $worktimeError = $timeworkweekError = $holidaysError = $toolsError = $diplomaError = $trainingError = $experienceError = $maintasksError = $knowhowError = $advantageError = $consError = $recruitedError = $recruitedtodayError = $recruiteareaError = $theoutletsError = $easyjobError = $salaryError = $differenttradenamesError = $orientationError = $traineeshipError = $alternationError = $recruitmentError = $emailError = ""; 
 
    $isSuccess = false; 
    $emailTo = "piedfrancois@laposte.net"; 
     
     
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $job = verifyInput($_POST["job"]); 
        $date = verifyInput($_POST["date"]); 
        $namejob = verifyInput($_POST["namejob"]); 
        $activityarea = verifyInput($_POST["activityarea"]); 
        $address = verifyInput($_POST["address"]); 
        $city = verifyInput($_POST["city"]); 
        $phone = verifyInput($_POST["phone"]); 
        $name = verifyInput($_POST["name"]); 
        $function = verifyInput($_POST["function"]); 
        $tasks = verifyInput($_POST["tasks"]); 
        $occasional = verifyInput($_POST["occasional"]); 
        $workingday = verifyInput($_POST["workingday"]); 
        $jobdescription = verifyInput($_POST["jobdescription"]); 
        $worktime = verifyInput($_POST["worktime"]); 
        $timeworkweek = verifyInput($_POST["timeworkweek"]); 
        $holidays = verifyInput($_POST["holidays"]); 
        $tools = verifyInput($_POST["tools"]); 
        $diploma = verifyInput($_POST["diploma"]); 
        $training = verifyInput($_POST["training"]); 
        $experience = verifyInput($_POST["experience"]); 
        $maintasks = verifyInput($_POST["maintasks"]); 
        $knowhow = verifyInput($_POST["knowhow"]); 
        $advantage = verifyInput($_POST["advantage"]); 
        $cons = verifyInput($_POST["cons"]); 
        $recruited = verifyInput($_POST["recruited"]); 
        $recruitedtoday = verifyInput($_POST["recruitedtoday"]); 
        $recruitearea = verifyInput($_POST["recruitearea"]); 
        $theoutlets = verifyInput($_POST["theoutlets"]); 
        $easyjob = verifyInput($_POST["easyjob"]); 
        $salary = verifyInput($_POST["salary"]); 
        $orientation = verifyInput($_POST["orientation"]); 
        $traineeship = verifyInput($_POST["traineeship"]); 
        $alternation = verifyInput($_POST["alternation"]); 
        $recruitment = verifyInput($_POST["recruitment"]); 
        $email = verifyInput($_POST["email"]); 
        $isSuccess = true; 
        $emailText = ""; 
     
     
                                                      
    if(empty($job)) 
    { 
        $job = "je veux connaitre ton job!"; 
        $isSuccess = true; 
    } 
    else 
    {  
        $emailText .= "job: $job\n"; 
    } 
    if(empty($date)) 
    { 
        $date = "je veux connaitre la date de ton entretien ?"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "date: $date\n";         
    } 
    if(empty($namejob)) 
    { 
        $namejob = "je veux connaitre le nom de ton travail"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "namejob: $namejob\n";         
    } 
    if(empty($activityarea)) 
    { 
        $activityarea = "je veux connaitre ta zone d'activité"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "activityarea: $activityarea\n";         
    } 
    if(empty($address)) 
    { 
        $address = "je veux connaitre l'adresse de la ville de ton entreprise ?"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "address: $address\n";         
    } 
    if(empty($city)) 
    { 
        $city = "je veux connaitre ta ville"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "city: $city\n"; 
    } 
    if(empty($phone)) 
    { 
        $phone = "je veux connaitre le numéro de téléphone de ton entreprise"; 
        $isSuccess = false; 
    } 
    else 
    { 
         $emailText .= "phone: $phone\n"; 
    } 
    if(empty($name)) 
    { 
        $name = "je veux connaitre le nom de celui à qui tu fais l'enquête métier"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "name: $name\n";         
    } 
    if(empty($function)) 
    { 
        $function = "Je veux connaitre la fonction de celui que tu enquête"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "function: $function\n";         
    } 
    if(empty($tasks)) 
    { 
        $tasks = " je sais pas ce que je veux"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "tasks: $tasks\n";         
    } 
    if(empty($occasional)) 
    { 
        $occasional = " quel sont tes taches occasionnel"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "occasional: $occasional\n"; 
    } 
    if(empty($workingday)) 
    { 
        $workingday = "je veux connaitre ton jour de travail"; 
        $isSuccess = true; 
    } 
    else 
    { 
        $emailText .= "workingday: $workingday\n"; 
    }    
     if(empty($jobdescription)) 
     { 
         $jobdescription = "je veux connaitre ta descrition"; 
         $isSuccess = true; 
     } 
        else 
        { 
          $emailText .= "jobdescription: $jobdescription\n";   
        } 
    if(empty($wortime)) 
    { 
        $worktime = "tu travail ?"; 
        $isSuccess = true;       
    } 
        else 
        { 
            $emailText .= "worktime: $worktime\n";             
        } 
    if(empty($timeworkweek)) 
    { 
        $timeworkweek = "heuretravailsemaine"; 
        $isSuccess = true; 
    } 
    else 
    { 
       $emailText .= "timeworkweek: $timeworkweek\n";  
    } 
    if(empty($holidays)) 
    { 
        $holidays = "vacances"; 
        $isSuccess = true;         
    } 
    else 
    { 
        $emailText .= "holidays: $holidays\n";         
    } 
    if(empty($tools)) 
    { 
        $tools = "outils"; 
        $isSuccess = true;         
    } 
    else 
    { 
        $emailText .= "tools: $tools\n";         
    } 
    if(empty($diploma)) 
    { 
        $diploma = "diplome"; 
        $isSuccess = true;  
         
    } 
    else 
    { 
        $emailText .= "diploma: $diploma\n";         
    } 
    if(empty($training)) 
    { 
        $training = "stage"; 
        $isSuccess = true;  
    } 
        else 
        { 
            $emailText .= "training: $training\n"; 
        } 
    if(empty($experience)) 
    { 
        $experience = "experience"; 
        $isSuccess = false;  
    } 
    else 
    { 
       $emailText .= "experience: $experience\n";  
    } 
    if(empty($maintasks)) 
    { 
        $maintasks = "maintasks"; 
        $isSuccess = true;  
         
    } 
    else 
    { 
        $emailText .= "maintasks: $maintasks\n";         
    } 
    if(empty($knowhow)) 
    { 
        $knowhow = "savoir comment"; 
        $isSuccess = true;  
         
    } 
    else 
    { 
        $emailText .= "knowhow: $knowhow\n";         
    }      
    if(empty($advantage)) 
    { 
        $advantage = "avantage"; 
        $isSuccess = true;  
         
    } 
    else 
    { 
        $emailText .= "advantage: $advantage\n";         
    } 
    if(empty($cons)) 
    { 
        $cons = "inconvéniens"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "cons: $cons\n";         
    } 
    if(empty($recruited)) 
    { 
        $recruited = "recrutement"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "recruited: $recruited\n";         
    } 
    if(empty($recruitedtoday)) 
    { 
        $recruitedtoday = "recrutement aujourd'hui"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "recruitedtoday: $recruitedtoday\n";         
    } 
    if(empty($recruitearea)) 
    { 
        $recruitearea = "zone de recrutement"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "recruitearea: $recruitearea\n";         
    } 
    if(empty($theoutlets)) 
    { 
        $theoutlets = "boite à outils"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "theoutlets: $theoutlets\n";         
    } 
    if(empty($easyjob)) 
    { 
        $easyjob = "facile travail"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "easyjob: $easyjob\n";         
    } 
    if(empty($salary)) 
    { 
        $salary = "salaire"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "salary: $salary\n";         
    } 
    if(empty($orientation)) 
    { 
        $orientation = "orientation"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "orientation: $orientation\n";         
    } 
    if(empty($traineeship)) 
    { 
        $traineeship = "allo la terre"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "traineeship: $traineeship\n";         
    } 
    if(empty($alternation)) 
    { 
        $alternation = "alternance"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "alternation: $alternation\n";         
    } 
    if(empty($recruitment)) 
    { 
        $recruitment = "recrutement"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "recruitment: $recruitment\n"; 
    } 
    if(empty($email)) 
    { 
        $email = "si tu veux recevoir ton enquête métier renseigne ton adresse email"; 
        $isSuccess = true;  
    } 
    else 
    { 
        $emailText .= "email: $email\n";         
    }  
           
        if($isSuccess) 
        { 
         $headers = "from: <$email>\r\nReply-To: $email"; 
        mail($emailTo, "un message de votre site", $emailText , $headers); 
        $job = $date = $namejob = $activityarea = $address = $city = $phone = $name = $function = $tasks = $occasional = $workingday = $jobdescription = $worktime = $timeworkweek = $holidays = $tools = $diploma = $training = $experience = $maintasks = $knowhow = $advantage = $cons = $recruited = $recruitedtoday = $recruitearea = $theoutlets = $easyjob = $salary = $differenttradenames = $orientation = $traineeship = $alternation = $recruitment = $email = "";  
             
        }          
                                                
    } 
function isPhone($var) 
{ 
    return preg_match("/^[0-9]*$/", $var); 
} 
function isEmail($var) 
{ 
    return filter_var($var, FILTER_VALIDATE_EMAIL); 
} 
 
    function verifyInput($var) 
    { 
        $var = trim($var); 
        $var = stripslashes($var); 
        $var = htmlspecialchars($var); 
        return $var; 
    } 
 
?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Enquête Professionnelle</title> 
        <meta charset="utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="css/style.css"> 
    </head> 
    <body> 
         
        <div class="container"> 
            <div class="heading">
                <a href="cvfrançoispied.fr"><img class="left" src="image/logo.png" width="250px" height="250px" alt="logo" title="pc"/></a>
                <h1>Enquête professionnelle</h1> 
            </div> 
             
            <div class="row"> 
                <div class="col-lg-10 col-lg-offset-1"> 
                    <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form"> 
                        <div class="row"> 
                            <div class="col-md-12"></div> 
                                <label for="job">Métier</label> 
                                <input type="text" id="job" name="job" class="form-control" placeholder="Métier" value="<?php echo $job; ?>"> 
                            <div class="col-md-12"></div> 
                            <label for="date">Date de l'entretien</label> 
                                <input type="text" id="date" name="date" class="form-control" placeholder="date" value="<?php echo $date; ?>">  
                        </div> 
                        <h3>Entreprise</h3> 
                            <div class="col-md-12"></div> 
                            <div class="red"> 
                                <label for="namejob">Nom</label> 
                                <input type="text" id="namejob" name="namejob" class="form-control" placeholder="nom" value="<?php echo $namejob; ?>"> 
                            <div class="col-md-12"></div> 
                                <label for="activityarea">Secteur d'activité</label> 
                                <input type="text" id="activityarea" name="activityarea" class="form-control" placeholder="Secteur d'activité" value="<?php echo $activityarea; ?>"> 
                            <div class="col-md-12"></div> 
                                <label for="address">Adresse</label> 
                                <input type="text" id="address" name="address" class="form-control" placeholder="adresse" value="<?php echo $address; ?>"> 
                            <div class="col-md-12"></div> 
                                <label for="city">Ville</label> 
                                <input type="text" id="city" name="city" class="form-control" placeholder="ville" value="<?php echo $city; ?>"> 
                                <div class="col-md-12"></div> 
                                <label for="phone">Téléphone</label> 
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>"> 
                                <p class="comments"> 
                                 
                        <h3>Interlocuteur</h3> 
                            <div class="col-md-12"></div> 
                                <label for="name">nom</label> 
                                <input type="text" id="name" name="name" class="form-control" placeholder="nom" value="<?php echo $name; ?>"> 
                            <div class="col-md-12"></div> 
                                <label for="function">fonction</label> 
                                <input type="text" id="function" name="function" class="form-control" placeholder="Fonction" value="<?php echo $function; ?>"> 
                                </div> 
                        <!-- début d'enquête --> 
                        <h2>informations sur le poste</h2> 
                            <div class="col-md-12"></div> 
                                <label for="tasks">Quelles sont les tâches principales de votre métier ?</label> 
                                <textarea id="tasks" name="tasks" class="form-control" placeholder="Quelles sont les tâches principales de votre métier ?" rows="4"><?php echo $tasks; ?></textarea> 
                            <div class="col-md-12"></div> 
                                <label for="occasional">Lesquelles sont occasionnelles ?</label> 
                                <textarea id="occasional" name="occasional" class="form-control" placeholder="Lesquelles sont occasionnelles ?" rows="4"><?php echo $occasional; ?></textarea> 
                            <div class="col-md-12"></div> 
                                <label for="workingday">Pouvez-vous me raconter une semaine de travail ? A quoi ressemble une journée type?</label> 
                                <textarea id="workingday" name="workingday" class="form-control" placeholder="Pouvez-vous me raconter une semaine de travail ? A quoi ressemble une journée type ?" rows="4" ><?php echo $workingday; ?></textarea> 
                            <div class="col-md-12"></div> 
                                <label for="jobdescription">Avez-vous une fiche de poste ?</label> 
                                <textarea id="jobdescription" name="jobdescription" class="form-control" placeholder="Avez-vous une fiche de poste ?" rows="4"><?php echo $jobdescription; ?></textarea> 
                        <h2>Conditions de Travail</h2> 
                        <div class="col-md-12"></div> 
                                <label for="worktime">Quels sont vos horaire de travail ?</label> 
                                <textarea id="worktime" name="worktime" class="form-control" placeholder="Quels sont vos horaire de travail ?" rows="4"><?php echo $worktime; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="timeworkweek">Combien d'heures travaillez-vous par semaine ?</label> 
                                <textarea id="timeworkweek" name="timeworkweek" class="form-control" placeholder="Combien d'heures travaillez-vous par semaine ?" rows="4"><?php echo $timeworkweek; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="holidays">Travaillez-vous le weekend, les jours férié ?</label> 
                                <textarea id="holidays" name="holidays" class="form-control" placeholder="Travaillez-vous le weekend, les jours férié ?" rows="4"><?php echo $holidays; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="tools">Quels sont vos outils de travail ? quel langage utiliser vous ? (machines, véhicules, logiciels,etc...)</label> 
                                <textarea id="tools" name="tools" class="form-control" placeholder="Quels sont vos outils de travail ? quel langage utiliser vous ? (machines, véhicules, logiciels,etc...)" rows="4" ><?php echo $tools ?></textarea> 
                        <h2>Formation et profil requis</h2> 
                        <div class="col-md-12"></div> 
                                <label for="diploma">Y-a-t-il un diplôme exigé pour ce métier ? Si oui lequel ?</label> 
                                <textarea id="diploma" name="diploma" class="form-control" placeholder="Y-a-t-il un diplôme exigé pour ce métier ? Si oui lequel ?" rows="4" ><?php echo $diploma; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="training">Quelles sont les formations nécessaires pour accéder à ce métier ?</label> 
                                <textarea id="training" name="training" class="form-control" placeholder="Quelles sont les formations nécessaires pour accéder à ce métier ?" rows="4"><?php echo $training; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="experience">Faut-il une expérience pour débuter dans ce métier, de quelle nature et de quelle durée ?</label> 
                                <textarea id="experience" name="experience" class="form-control" placeholder="Faut-il une expérience pour débuter dans ce métier, de quelle nature et de quelle durée ?" rows="4" ><?php echo $experience; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="maintasks">Quelles sont les tâches principales de votre métier ? Lesquelles sont occasionnelles ?</label> 
                                <textarea id="maintasks" name="maintasks" class="form-control" placeholder="Quelles sont les tâches principales de votre métier ? Lesquelles sont occasionnelles ?" rows="4" ><?php echo $maintasks ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="knowhow">Que faut-il savoir faire pour exercer ce métier, quelles compétences sont nécessaires ?</label> 
                                <textarea id="knowhow" name="knowhow" class="form-control" placeholder="Que faut-il savoir faire pour exercer ce métier, quelles compétences sont nécessaires ?" rows="4" ><?php echo $knowhow; ?></textarea> 
                        <h2>Avantages et inconvenients du metier</h2> 
                        <div class="col-md-12"></div> 
                                <label for="advantage">Qu'est-ce qui vous a attiré dans ce métier, les aspects positifs ?</label> 
                                <textarea id="advantage" name="advantage" class="form-control" placeholder="Qu'est-ce qui vous a attiré dans ce métier, les aspects positifs ?" rows="4"><?php echo $advantage; ?></textarea> 
                         <div class="col-md-12"></div> 
                                <label for="cons">Quelles sont les contraintes, les aspects plus difficiles ?</label> 
                                <textarea id="cons" name="cons" class="form-control" placeholder="Quelles sont les contraintes, les aspects plus difficiles ?" rows="4"><?php echo $cons ?></textarea> 
                        <h2>Carriere</h2> 
                        <div class="col-md-12"></div> 
                                <label for="recruited">Comment avez-vous été recruté ?(annonces, candidature spontanée, intérim...) ?</label> 
                                <textarea id="recruited" name="recruited" class="form-control" placeholder="Comment avez-vous été recruté ?(annonces, candidature spontanée, intérim...) ?" rows="4"><?php echo $recruited; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="recruitedtoday">Comment recrute votre entreprise aujourd'hui ? (annonces, Pôle Emploi, presse, site internet ?)?</label> 
                                <textarea id="recruitedtoday" name="recruitedtoday" class="form-control" placeholder="Comment recrute votre entreprise aujourd'hui ? (annonces, Pôle Emploi, presse, site internet ?)?" rows="4"><?php echo $recruitedtoday; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="recruitearea">Est-ce que votre secteur d'activité recrute ?</label> 
                                <textarea id="recruitearea" name="recruitearea" class="form-control" placeholder="Est-ce que votre secteur d'activité recrute ?" rows="4"><?php echo $recruitearea; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="theoutlets">Quelles sont les perspectives d'emploi actuelles dans ce secteur, l'avenir du métier (les débouchés) ?</label> 
                                <textarea id="theoutlets" name="theoutlets" class="form-control" placeholder="Quelles sont les perspectives d'emploi actuelles dans ce secteur, l'avenir du métier (les débouchés) ?" rows="4"><?php echo $theoutlets; ?></textarea> 
                        <div class="col-md-12"></div> 
                                <label for="easyjob">Est-il facile de trouver un emploi dans votre branche ? Pourquoi ?</label> 
                                <textarea id="easyjob" name="easyjob" class="form-control" placeholder="Est-il facile de trouver un emploi dans votre branche ? Pourquoi ?" rows="4"></textarea> 
                        <div class="col-md-12"><?php echo $easyjob; ?></div> 
                                <label for="salary">Pouvez vous me donner une fourchette de rémunération ?</label> 
                                <input type="text" id="salary" name="salary" class="form-control" placeholder="Pouvez vous me donner une fourchette de rémunération ?" value="<?php echo $salary; ?>"> 
                        <h2>Pour poursuivre?.</h2> 
                        <div class="col-md-12"></div> 
                                <label for="differenttradenames">Quelles sont les différentes appellations de votre métier ?</label> 
                                <input type="text" id="differenttradenames" name="differenttradenames" class="form-control" placeholder="Quelles sont les différentes appellations de votre métier ?"> 
                        <div class="col-md-12" value="<?php echo $differenttradenames; ?>"></div> 
                                <label for="orientation">Quels conseil pourriez-vous donner à quelqu'un qui souhaite s'orienter dans ce métier ?</label> 
                                <input type="text" id="orientation" name="orientation" class="form-control" placeholder="Quels conseil pourriez-vous donner à quelqu'un qui souhaite s'orienter dans ce métier ?"> 
                        <div class="col-md-12" value="<?php echo $orientation; ?>"></div> 
                                <label for="traineeship">Votre entreprise prend-elle des stagiaires ?</label> 
                                <input type="text" id="traineeship" name="traineeship" class="form-control" placeholder="Votre entreprise prend-elle des stagiaires ?" value="<?php echo $traineeship; ?>"> 
                        <div class="col-md-12"></div> 
                                <label for="alternation">Votre entreprise prend-elle des personnes en contrat d'alternance ?</label> 
                                <input type="text" id="alternation" name="alternation" class="form-control" placeholder="Votre entreprise prend-elle des personnes en contrat d'alternance ?" value="<?php echo $alternation; ?>"> 
                        <div class="col-md-12"></div> 
                                <label for="recruitment">Votre entreprise envisage-t-elle des recrutements ?</label> 
                                <input type="text" id="recruitment" name="recruitment" class="form-control" placeholder="Votre entreprise envisage-t-elle des recrutements" value="<?php echo $recruitment; ?>"> 
                        <div class="col-md-12"></div> 
                                <label for="email">Ton adresse email</label> 
                                <input type="email" id="email" name="email" class="form-control" placeholder="Ton adresse email"> 
                        <p class="comments" value="<?php echo $email; ?>"></p> 
                                <input type="submit" class="button1" value="Envoyer"> 
                         
                    </form> 
                </div> 
            </div> 
        </div> 
    </body> 
</html> 