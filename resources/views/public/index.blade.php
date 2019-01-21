@include ('public.layouts.header')
<body id="top">

	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo">
	      <a href="/">Unilonas</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Fechar</span></a>	

	   	<h3>Unilonas.</h3>  

			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="#home" title="">Início</a></li>
				<li><a class="smoothscroll" href="#about" title="">Sobre</a></li>
				<li><a class="smoothscroll" href="#services" title="">Serviços</a></li>
				<li><a class="smoothscroll" href="#portfolio" title="">Projetos</a></li>
				<li><a class="smoothscroll" href="#contact" title="">Contato</a></li>						
				<li><a href="/blog" title="">Blog</a></li>						
			</ul>			

			<ul class="header-social-list">
	         <li>
	         	<a href="#"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-instagram"></i></a>
	         </li>
            <li>
            	<a href="#"><i class="fa fa-behance"></i></a>
            </li>
	         <li>
	         	<a href="#"><i class="fa fa-dribbble"></i></a>
	         </li>	         
	      </ul>		

		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  		
			  				<h3 class="animate-intro">Nós somos a <img src="{{asset('../images/logo.png')}}" width="130px" class="logo"> .</h3>
				  			<h1 class="animate-intro">
							Fabricamos experiências  <br>
							em obras de arte.
				  			</h1>	

				  			<div class="more animate-intro">
				  				<a class="smoothscroll button stroke" href="#about">
				  					Saiba mais
				  				</a>
				  			</div>							

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-twitter"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-instagram"></i></a>
	      </li>
         <li class="animate-intro">
           	<a href="#"><i class="fa fa-behance"></i></a>
         </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-dribbble"></i></a>
	      </li>	      
	   </ul> <!-- end home-social-list -->	

		<div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Role para baixo  	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>			
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">Sobre nós</h3>
	   			<p class="lead animate-this"><img src="{{asset('../images/logo.png')}}" width="130px" class="logo"> is a creative digital agency based in Manila, Philippines. We are composed of creative designers and experienced developers.</p>	
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   ================================================== -->
   <section id="services">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   				<h3>Serviços</h3>
   			   <h1>O que fazemos.</h1>
   			
   			   <p class="lead">Lorem ipsum Elit ut consequat veniam eu nulla nulla reprehenderit reprehenderit sit velit in cupidatat ex aliquip ut cupidatat Excepteur tempor id irure sed dolore sint sunt voluptate ullamco nulla qui Duis qui culpa voluptate enim ea aute qui veniam in irure et nisi nostrud deserunt est officia minim.</p>
   			
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->

   	<div class="row services-content">

   		<div class="services-list block-1-2 block-tab-full group">

	      	<div class="bgrid service-item animate-this">	

	      		<span class="icon"><i class="icon-paint-brush"></i></span>            

	            <div class="service-content">
	            	<h3 class="h05">Serviço 1</h3>

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		
	         	</div> 	         	 

				</div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">	

					<span class="icon"><i class="icon-earth"></i></span>                          

	            <div class="service-content">	
	            	<h3 class="h05">Serviço 2</h3>  

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		
	            </div>	                          

			   </div> <!-- end bgrid -->

			   <div class="bgrid service-item animate-this">

			   	<span class="icon"><i class="icon-lego-block"></i></span>		            

	            <div class="service-content">
	            	<h3 class="h05">Serviço 3</h3>

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p>
	            </div> 	            	               

			   </div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">

					<span class="icon"><i class="icon-megaphone"></i></span>	              

	            <div class="service-content">
	            	<h3 class="h05">Serviço 4</h3>

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		
	            </div>                

				</div> <!-- end bgrid -->			   

	      </div> <!-- end services-list -->
   		
   	</div> <!-- end services-content -->   			

   </section> <!-- end services -->


   <!-- portfolio
   ================================================== -->
   <section id="portfolio">
   	
   	<div class="intro-wrap">

   		<div class="row narrow section-intro with-bottom-sep animate-this">
	   		<div class="col-twelve">
	   			<h3>Portfólio</h3>
		   		<h1>Projetos escolhidos especialmente para você.</h1>  			
		   		
		   		<p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>	   			
	   		</div>   		
	   	</div> <!-- end row section-intro -->   		

   	</div> <!-- end intro-wrap -->   	

   	<div class="row portfolio-content">
   		<div class="col-twelve">
   			<div id="folio-wrap" class="bricks-wrapper">					

   				<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="{{asset('images/portfolio/gallery/g-shutterbug.jpg')}}" data-sub-html="#01" > 	
	                  <a href="#" class="overlay">
	                  	<img src="{{asset('images/portfolio/shutterbug.jpg')}}" alt="Skaterboy">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					      Projeto 1
		     					   </span>
		     					   <h3 class="folio-title">Foto 1</h3>	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->
						
						<div id="01" class='hide'>
							<h4>Foto 1</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="{{asset('images/portfolio/gallery/g-yellowwall.jpg')}}" data-sub-html="#02"> 	
	                  <a href="#" class="overlay">
	                  	<img src="{{asset('images/portfolio/yellowwall.jpg')}}" alt="Shutterbug">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					      Projeto 2
		     					   </span>
		     					   <h3 class="folio-title">Foto 2</h3>  	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="02" class='hide'>
							<h4>Foto 2</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>	               
	        		</div> <!-- end folio-item -->

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="{{asset('images/portfolio/gallery/g-architecture.jpg')}}" data-sub-html="#03" >   	
	                  <a href="#" class="overlay">
	                  	<img src="{{asset('images/portfolio/architecture.jpg')}}" alt="Explore">	                     
	                     <div class="item-text">	                     		     					    
		     					   <span class="folio-types">
		     					      Projeto 3
		     					   </span>
		     					   <h3 class="folio-title">Foto 3</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->	

	               <div id="03" class='hide'>
							<h4>Foto 3</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>               
	        		</div> <!-- end folio-item -->

					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="{{asset('images/portfolio/gallery/g-minimalismo.jpg')}}"  data-sub-html="#04" >
	                  <a href="#" class="overlay">
	                  	<img src="{{asset('images/portfolio/minimalismo.jpg')}}" alt="Minimalismo">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					      Projeto 4
		     					   </span>
		     					   <h3 class="folio-title">Foto 4</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="04" class='hide'>
							<h4>Foto 4</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>  	               
	        		</div> <!-- end folio-item -->

					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="{{asset('images/portfolio/gallery/g-skaterboy.jpg')}}"  data-sub-html="#05" >  	
	                  <a href="#" class="overlay">
	                  	<img src="{{asset('images/portfolio/skaterboy.jpg')}}" alt="Bicycle">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					      Projeto 5
		     					   </span>
		     					   <h3 class="folio-title">Foto 5</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="05" class='hide'>
							<h4>Foto 5</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>	               
	        		</div> <!-- end folio-item -->
	           
					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="{{asset('images/portfolio/gallery/g-salad.jpg')}}"  data-sub-html="#06">     	
	                  <a href="#" class="overlay">
	                  	<img src="{{asset('images/portfolio/salad.jpg')}}" alt="Salad">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					      Projeto 6
		     					   </span>
		     					   <h3 class="folio-title">Foto 6</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div> <!-- end item-wrap -->

	               <div id="06" class='hide'>
							<h4>Foto 6</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="www.behance.net">Details</a></p>
						</div>	               
	        		</div> <!-- end folio-item -->   				

   			</div> <!-- end folio-wrap -->
   		</div> <!-- end twelve -->
   	</div> <!-- end portfolio-content -->   	

   </section>  <!-- end portfolio -->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

   	<div class="row">
   		<div class="col-twelve">
   			<h2 class="animate-this">O que dizem sobre nós.</h2>
   		</div>   		
   	</div>   	

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flex-slider animate-this">

            <ul class="slides">

               <li>
                  <p>
                  Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                  to do what you believe is great work. And the only way to do great work is to love what you do.
                  If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                  </p> 

                  <div class="testimonial-author">
                    	<img src="{{asset('images/avatars/user-02.jpg')}}" alt="Author image">
                    	<div class="author-info">
                    		Steve Jobs
                    		<span class="position">CEO, Apple.</span>
                    	</div>
                  </div>                 
             	</li> <!-- end slide -->

               <li>
                  <p>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.    
                  </p>

               	<div class="testimonial-author">
                    	<img src="{{asset('images/avatars/user-03.jpg')}}" alt="Author image">
                    	<div class="author-info">
                    		John Doe
                    		<span>CEO, ABC Corp.</span>
                    	</div>
                  </div>                                         
               </li> <!-- end slide -->

            </ul> <!-- end slides -->

         </div> <!-- end testimonial-slider -->         
        
      </div> <!-- end flex-container -->

   </section> <!-- end testimonials -->


	<!-- contact
   ================================================== -->
   <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-twelve">
   			<h3>Contato</h3>
   			<h1>Entre em contato.</h1>

   			<p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
   		</div> 
   	</div> <!-- end section-intro -->

   	<div class="row contact-content">

   		<div class="col-seven tab-full animate-this">

   			<h5>Envie-nos uma mensagem</h5>

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post">     			

               <div class="form-field">
 					   <input name="contactName" type="text" id="contactName" placeholder="Nome" value="" minlength="2" required="">
               </div>

               <div class="row">
                 	<div class="col-six tab-full">
                 		<div class="form-field">
                 			<input name="contactEmail" type="email" id="contactEmail" placeholder="E-mail" value="" required="">
                 		</div>		      			   
		            </div>
	            	<div class="col-six tab-full">	            
	            		<div class="form-field">
	            			<input name="contactSubject" type="text" id="contactSubject" placeholder="Assunto" value="">
	                  </div>		     				   
		            </div>
               </div>
                                         
               <div class="form-field">
	              	<textarea name="contactMessage" id="contactMessage" placeholder="Mensagem" rows="10" cols="50" required=""></textarea>
	            </div> 

               <div class="form-field">
                  <button class="submitform">Enviar</button>

                  <div id="submit-loader">
                     <div class="text-loader">Enviando...</div>                             
       			      <div class="s-loader">
							  	<div class="bounce1"></div>
							  	<div class="bounce2"></div>
							  	<div class="bounce3"></div>
							</div>
						</div>
               </div>

      		</form> <!-- end form -->

            <!-- contact-warning -->
            <div id="message-warning"></div> 

            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Sua mensagem foi enviada, obrigado!<br>
      		</div>

         </div> <!-- end col-seven --> 

         <div class="col-four tab-full contact-info end animate-this">

         	<h5>Informações de contato</h5>

         	<div class="cinfo">
	   			<h6>Onde nos encontrar</h6>
	   			<p>
	            	BR 262, KM 480, Posto Primavera<br>
	            	Bom Despacho, MG<br>
	            </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Envie-nos um e-mail</h6>
	   			<p>
	   				unilonasvendas@gmail.com			     
				   </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Nos ligue</h6>
	   			<p>
				   	(+37) 9 9923 2782
				   </p>
	   		</div>

         </div> <!-- end cinfo --> 

   	</div> <!-- end row contact-content -->
		
	</section> <!-- end contact -->


	@include ('public.layouts.header')

   <!-- Java Script
   ================================================== --> 
   <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
   <script src="{{asset('js/plugins.js')}}"></script>
   <script src="{{asset('js/main.js')}}"></script>

</body>

</html>