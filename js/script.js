$(document).ready(function(){

	// Gestion du menu
	var menuManager = (function(){
	    var self = {};
	    self.navBar = $('.navbar-default');
	    self.navBarHeight = self.navBar.height();
	    self.init = function(){
	    	self.fixedNavigation();
	    	self.anchorScroll();
	    	self.linkColor();
	    }
	    self.fixedNavigation = function(){
	    	$(window).scroll(function(){
	    		if($(this).scrollTop() >= 100){
	    			self.navBar.addClass('fixed');
	    		}
	    		else{
	    			self.navBar.removeClass('fixed');
	    		}
	    		self.navBarHeight = self.navBar.height();
	    	});
	    };
	    self.anchorScroll = function(){
	    	self.navBar.find('a').click(function(event){
	    		event.preventDefault();
	    		var anchor = $(this).attr('href');
	    		$('html, body').stop().animate({
					scrollTop: $(anchor).offset().top - self.navBarHeight + 2
				}, 500);
	    	})
	    }
	    self.linkColor = function(){
	    	$(window).scroll(function(){
	    		$('section, header, .container-fluid').each(function(){
	    			var currentTopPos = $(this).offset().top - $(window).scrollTop() - self.navBarHeight;
	    			var currentBottomPos = ($(this).offset().top + $(this).height()) - $(window).scrollTop() - self.navBarHeight;
	    			var id = $(this).attr('id');
	    			if(currentTopPos <= 0 && currentBottomPos > 0){
	    				self.navBar.find('a[href="#'+id+'"]').parent().addClass('active');
	    			}
	    			else if(currentBottomPos < 0){
	    				self.navBar.find('a[href="#'+id+'"]').parent().removeClass('active');
	    			}
	    			else if(currentTopPos > 0){
	    				self.navBar.find('a[href="#'+id+'"]').parent().removeClass('active');
	    			}
	    		})
	    	});
	    }
	    return self;
	})();
	menuManager.init();

	var formManager =(function(){
		var self = {};
		self.form = $('.subscribe-form');
		self.init = function(){
			self.sendData();
		}
		self.sendData = function(){
			self.form.submit(function(e){
				var email = self.form.find('#mc-email').val();
				$.post('./back/data.php',{
						data: email
					}, function(data){
						if(data == "mail_already_exist"){
							notificationsManager.notifcationsDisplayer("error", $('#notification'), 'L\'email a déjà été renseigné');
						}
						else if(data == "mail_inserted"){
							notificationsManager.notifcationsDisplayer("success", $('#notification'), 'Votre email a bien été enregistré');
						}
						else{
							notificationsManager.notifcationsDisplayer("error", $('#notification'), "Une erreur inconnue est survenue");
						}
					}
				)
				return false;
			});
		}
		return self;
	})();
	formManager.init();

	var notificationsManager = (function(){
		var self = {};
		self.init = function(){
		}
		self.notifcationsDisplayer = function(type, id, message){
			id.removeClass('error, success');
			switch(type) {
			    case "error":
			    	id.html(message);
			    	id.addClass('error');
			        id.show();
			        break;
			    case "success":
			        id.html(message);
			        id.addClass('success');
			        id.show();
			        break;
			}
		}
		return self;
	})();
	notificationsManager.init();
});