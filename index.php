<html>
    <head>
        <link rel="stylesheet" href="Style/style.css">
        <link href="Style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="Style/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="WOW-master/css/libs/animate.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="style/js/bootstrap.min.js"></script>
        <script src="style/js/script.js"></script>
        <script>
            $(document).ready(function()
            {$("#save").click(function()
            {$('#messageShow').hide();
            var loginReg =$("#loginReg").val();
            var email =$("#email").val();
            var error="";       
            if(error !="")
                {
                    $('#messageShow').html(error+"<div class=''clear><br></div>");
                     $('#messageShow').show();
                    return false;
                }
                              
                $.ajax({
                    url:'/ajax/register.php',
                    type: 'POST',
                    cache: false,
                    data:{'loginReg':loginReg,'email':email},
                    success: function(data){
                      $('#messageShow').html(data+"<div class=''clear><br></div>");
                      $('#messageShow').show();
                    
                          
                        
                    }
                }) 
                            });
                              
                              });
            
            </script>
    </head>
    <body>
    <div class="banner" >
        <img src="\img\firstcapitallogo.PNG" class="banner__img">
        <div class="banner__block">
            <a href="#RegForm" class="banner__title wow bounceInLeft">Сделай первый шаг к осуществлению своей мечты с First Capital</a>
            <a href="#RegForm" class="btn center-block banner__btn">Первый шаг</a>
        </div>
    </div>
    
    <div class="Reasons">
          <div class="container conte
                      nt-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-12">
                        <h2 >5 ПРИЧИН ВЫБРАТЬ СТАРТАП-ЦЕНТР "Fisrt Capital"</h2>
                        
                    </div>
                </div>
          </div>
             <!-- row -->
                
    
                 <div id="information">
            <div class="section wow slideInLeft" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 inf-text">
                            
                            <h2 class="inf-title">
                                <a href="http://fcapital.biz/">&#9734 Мы научим вас работать c CANVAS и создавать инновационные 
                проекты</a>
                            </h2>
                            <p class="inf-p">В
                                <a href="http://fcapital.biz/">«First Capital»</a>&nbsp;мы совмещаем и теорию, и практику. Наша команда постоянно проводит
                                бизнес-встречи, тренинги, деловые игры, квесты,
                                бизнес-игры IT-StartUp.</p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="image"><a href="http://fcapital.biz"><img  src="\img\Reasons\06.jpg" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section wow slideInRight" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 inf-text">
                            
                            <h2 class="inf-title">
                                <a href="http://fcapital.biz/">&#9734 Мы предоставим вам пространство и ресурсы для совместной работы стартап команд</a>
                            </h2>
                            <p class="inf-p">Стартап-центр
                                <a class="h2A" href="http://fcapital.biz/">«First Capital»</a>&nbsp;работает на базе Харьковского национального экономического университета
                                им. Семена Кузнеца. И ЗДЕСЬ мы предоставляем вам БЕСПЛАТНО возможность учиться, создавать свои проекты, расширять контакты и публиковать свои результаты на нашем портале: </p>  <a href="http://fcapital.biz"><b> http://www.fcapital.biz</b></a> 
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="image"><a href="http://fcapital.biz"><img  src="\img\Reasons\07.jpg" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section wow slideInLeft" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 inf-text">
                           
                            <h2 class="inf-title">
                                <a href="http://fcapital.biz/">&#9734 Мы - команда экспертов</a>
                            </h2>
                            <p class="inf-p">Вы сможете пообщаться с людьми, которые уже многого добились, узнаете
                                их истории успеха и неудач, а также об опыте, который они получили. Вы поймете,
                                как устроен бизнес "изнутри": во время тренингов эксперты ИТ компаний
                                расскажут особенности организации бизнеса, тонкости построения команд, современные подходы разработки ИТ-проектов и стартап-проектов.</p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="image"><a href="http://fcapital.biz"><img  src="\img\Reasons\08.jpg" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section wow slideInRight" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 inf-text">
                            
                            <h2 class="inf-title">
                                <a href="http://fcapital.biz/">&#9734 Мы расскажем вам о создании нового бизнеса</a>
                            </h2>
                            <p class="inf-p">Наши тренеры, партнеры, резиденты <a class="h2A" href="http://fcapital.biz/">«First Capital»</a> проводят вебинары, «круглые столы», тренинги,
                                семинары и конференции, направленные на обучение инновационному предпринимательству, а также
                               его развитию среди молодежи Харькова. Девиз Харькова: «Харьков — smart
                                city». И деятельность нашего центра подтверждение тому, что Харьков
                                — умный город, который думает о будущем.</p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="image"><a href="http://fcapital.biz"><img  src="\img\Reasons\09.jpg" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
                     
                     
            <div class="section wow slideInLeft" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 inf-text">
                            
                            <h2 class="inf-title">
                                <a href="http://fcapital.biz/">&#9734 Мы обеспечим МЕДИА - поддержку</a>
                            </h2>
                            <p class="inf-p"><object width="500" height="270"
                                data="https://www.youtube.com/v/uFxPBxVh8ek&t=19s" 
                                type="application/x-shockwave-flash">
                                    <param name="src" value="https://www.youtube.com/watch?v=uFxPBxVh8ek&t=19s"/>
                                    </object></p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="image"><a href="http://fcapital.biz"><img  src="\img\Reasons\05.PNG" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        
        </div>
    <div class="MakeYourChoice">
         <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Сделай свой выбыбор</h2>
                    </div>
                    <div class="row">
                            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                            <img class="choice" src="img/TakeYourChoice/tr.png">
                            <h2>Тренинг</h2>
                            <a id="c1" class="btn section-orange" href="http://fcapital.biz">Выбрать</a>
                            </div>
                            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                            <img class="choice" src="img/TakeYourChoice/coworking.png">
                            <h2>Коворкинг</h2>
                            <a id="c1" class="btn section-orange"href="http://fcapital.biz">Выбрать</a>
                            </div>
                            <div class="col-md-4 wow fadeInDown" data-wow-duration="1s">
                            <img class="choice" src="img/TakeYourChoice/cow_tr.png">
                            <h2>Тренинг + Коворкинг</h2>
                           <a id="c1" class="btn section-orange" href="http://fcapital.biz">Выбрать</a>
                            </div>
                    </div>
                </div>
             
          </div>
        
        
    </div>
    <div class="ourProjects">
         <div class="container content-lg">
                <div class="row text-center margin-b-40">
					<center>
                    <div class="col-sm-12">
                        <h2>Наши инновационные проекты</h2>
                    </div>
                    <div class="row">
                 	<div class="col-md-4 wow fadeInDown" data-wow-duration="1s" >
                     
						<div class="project"><img  src="img/Projects/Confe.jpg"> <a id="n"  href="http://fcapital.biz/project.php?id=28"><h2>Confe.Me</h2></a></div>
                    
                            </div>
                 	  <div class="col-md-4 wow fadeInDown" >
						 <div class="project"><img  class="project" src="img/Projects/biohet.jpg"><a  id="n" href="http://fcapital.biz/project.php?id=82"><h2>Организация производства брикетов из соломы. </h2></a></div>

								</div>
					 <div class="col-md-4 wow fadeInDown" >
						 <div class="project"><img  class="project" src="img/Projects/Perinatalis.jpg"><a  id="n" href="http://fcapital.biz/project.php?id=39"><h2>Perinatalis </h2></a>
								</div></div>

					 </div>
					 <div class="row">
						 <div class="col-md-4 wow fadeInDown">
									<div class="project"><img  class="project" src="img/Projects/Moreinfo.jpg"><a id="n" href="http://fcapital.biz/project.php?id=29"><h2>Moreinfo.in.ua</h2></a></div>

					 </div>
					 <div class="col-md-4 wow fadeInDown">
						<div class="project"> <img  class="project" src="img/Projects/Nav.jpg"><a id="n" href="http://fcapital.biz/project.php?id=12"><h2>Навигационная система Александра Книги </h2></a></div>

								</div>
					 <div class="col-md-4 wow fadeInDown" >
						<div class="project"> <img  class="project" src="img/Projects/Savkin.jpg"><a id="n" href="http://fcapital.biz/project.php?id=34"><h2>Савкін яр. Оазис у місті</h2></a></div>

								</div>
				 </div>	
					</center>
                </div>
            
          </div>
        
        
        </div>
    
    <div class="OurTeam">
         <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Команда</h2>
                        
                    </div>
                    
          </div>
             <div class="row  wow bounceInLeft" data-wow-duration="1s">
				 <center>
                 <div class="col-md-3" >
                     <div class="teams"><img  class="teams" src="img/OurTeams/Znahur.jpg">
                         <h2>Знахур Сергей Викторович</h2>
                         <p>Директор 
стартап-центра</p>
                     </div>
                            </div>
                 <div class="col-md-3" >
                     <div class="teams"><img  class="teams" src="img/OurTeams/zolotarjova.jpg">
                        <h2>Золотарева Ирина Александровна</h2>
                        <p>Куратор      
проекта SUCSID</p>
                     </div>
                            </div>
                 <div class="col-md-3" >
                     <div class="teams"><img  class="teams" src="img/OurTeams/ploha160x213.jpg">
                        <h2>Плохая Елена Борисовна</h2>
                          <p>Тренер</p>
                     </div></div>
                 <div class="col-md-3" >
                     <div class="teams"><img  class="teams" src="img/OurTeams/plehanova.jpg">
                        <h2>Плеханова Анна Олеговна</h2>  
                          <p>Тренер</p>
                     </div></div>
				 </center>         
             </div>

        </div>
         <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Расписание стартап центра First Capital</h2>
                        <iframe src="https://calendar.google.com/calendar/embed?src=lts0lthj4166349i76gemhh3os%40group.calendar.google.com&ctz=Europe/Kiev" style="border: 0" width="600" height="500" frameborder="0" scrolling="no"></iframe>
                        
                    </div>
                    
          </div>
        </div>

    </div>
    <div class="RegForm" id ="RegForm">
         <div class="container content-lg">
             <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Сделай первый шаг</h2>
                    </div>
                </div>
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                    <div class="modal-body">
                        
                        <!-- Форма для регистрации -->
                    <form role="form" class="form-horizontal">
                        <h2><center>Стань резидентом First Capital</center></h2>
                      <!-- Блок для ввода логина -->
                        <div id="messageShow"></div>
                      <div class="form-group has-feedback">
                       
                        <div class="col-xs-7 col-xs-offset-3">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>         
                            <input type="text" placeholder="Введите Имя" class="form-control input-lg" required="required" id="loginReg" pattern="[A-Za-z]{6,}">
                          </div>
                          <span class="glyphicon form-control-feedback"></span>
                        </div>
                      </div>
                         
                        
                      <!-- Блок для ввода email -->
                      <div class="form-group has-feedback">
                    
                          <div class="col-xs-7 col-xs-offset-3">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="email" placeholder="Введите Email" class="form-control input-lg" required="required" id="email">
                          </div>
                          <span class="glyphicon form-control-feedback"></span>
                        </div>
                      </div>
                          <!-- Конец блока для ввода email-->
                         <button id="save" type="button" class="btn btn-primary">Сделать первый шаг</button>
                        </form>
                      </div>
                        
                    </div>
                </div>
          </div>
            
        </div>
    <div class="Contacts">
         <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Контакты</h2>
                    </div>  
                </div>
          </div>
        <div class="row">
			 <div class="col-sm-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.8573205466064!2d36.22187836576922!3d50.01402942659536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a12384771bb5%3A0x72b7b046a3223352!2zOUEsINC_0YDQvtGB0L_QtdC60YIg0J3QsNGD0LrQuCwgOdCQLCDQpdCw0YDQutGW0LIsINCl0LDRgNC60ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1496410887867" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-4 col-sm-offset-2">
                 <h1>Адрес стартап центра:</h1>
                   
                                              <p>г. Харьков, пр. Науки, 9а,
                            <br>Харьковский национальный экономический университет
                            <br>им. Семена Кузнеца,
                            <br>научно-библиотечный корпус (НБК), ауд. 501.</p>
                            <p>
                          email:
                     <a href="mailto:fcapital.ua@gmail.com?Subject=Hello,%20Fcapital" target="_top">fcapital.ua@gmail.com</a>
                            </p>
                <a id="n" href="https://www.youtube.com/watch?v=uFxPBxVh8ek&t=19s"><i class="fa fa-youtube fa-4x"  aria-hidden="true"></i></a>
                <a  id="n" href="https://www.facebook.com/startupkhnue/?hc_ref=SEARCH&fref=nf"><i class="fa fa-facebook fa-4x" aria-hidden="true"></i></a>
            </div>
            
           
        </div>
      </div>
        
        
         
         <script src="WOW-master/dist/wow.js"></script>
              <script>
              new WOW().init();
              </script>    
        
    </body>
</html>
