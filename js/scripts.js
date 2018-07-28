
$(document).ready( function() {
  
  // init left menu
  // $('#main-menu-link').bigSlide();

  // auto - expand textarea.
  ( function () {
    var textarea = ( document.querySelector('textarea') ) ? document.querySelector('textarea') : false;
    
    if ( textarea !== false ) {
        textarea.addEventListener('keydown', autosize);
    }
                
    function autosize(){
      var el = this;
      setTimeout(function(){
        el.style.cssText = 'height:auto; padding:0';
        // for box-sizing other than "content-box" use:
        // el.style.cssText = '-moz-box-sizing:content-box';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
      },0);
    }
  })();

  // maind gallery script.
  ( function () {

    var initPhotoSwipeFromDOM = function(gallerySelector) {
      
          // parse slide data (url, title, size ...) from DOM elements 
          // (children of gallerySelector)
          var parseThumbnailElements = function(el) {
              var thumbElements = el.childNodes,
                  numNodes = thumbElements.length,
                  items = [],
                  figureEl,
                  linkEl,
                  size,
                  item;
      
              for(var i = 0; i < numNodes; i++) {
      
                  figureEl = thumbElements[i]; // <figure> element
      
                  // include only element nodes 
                  if(figureEl.nodeType !== 1) {
                      continue;
                  }
      
                  linkEl = figureEl.children[0]; // <a> element
      
                  size = linkEl.getAttribute('data-size').split('x');
      
                  // create slide object
                  item = {
                      src: linkEl.getAttribute('href'),
                      w: parseInt(size[0], 10),
                      h: parseInt(size[1], 10)
                  };
      
      
      
                  if(figureEl.children.length > 1) {
                      // <figcaption> content
                      item.title = figureEl.children[1].innerHTML; 
                  }
      
                  if(linkEl.children.length > 0) {
                      // <img> thumbnail element, retrieving thumbnail url
                      item.msrc = linkEl.children[0].getAttribute('src');
                  } 
      
                  item.el = figureEl; // save link to element for getThumbBoundsFn
                  items.push(item);
              }
      
              return items;
          };
      
          // find nearest parent element
          var closest = function closest(el, fn) {
              return el && ( fn(el) ? el : closest(el.parentNode, fn) );
          };
      
          // triggers when user clicks on thumbnail
          var onThumbnailsClick = function(e) {
              e = e || window.event;
              e.preventDefault ? e.preventDefault() : e.returnValue = false;
      
              var eTarget = e.target || e.srcElement;
      
              // find root element of slide
              var clickedListItem = closest(eTarget, function(el) {
                  return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
              });
      
              if(!clickedListItem) {
                  return;
              }
      
              // find index of clicked item by looping through all child nodes
              // alternatively, you may define index via data- attribute
              var clickedGallery = clickedListItem.parentNode,
                  childNodes = clickedListItem.parentNode.childNodes,
                  numChildNodes = childNodes.length,
                  nodeIndex = 0,
                  index;
      
              for (var i = 0; i < numChildNodes; i++) {
                  if(childNodes[i].nodeType !== 1) { 
                      continue; 
                  }
      
                  if(childNodes[i] === clickedListItem) {
                      index = nodeIndex;
                      break;
                  }
                  nodeIndex++;
              }
      
      
      
              if(index >= 0) {
                  // open PhotoSwipe if valid index found
                  openPhotoSwipe( index, clickedGallery );
              }
              return false;
          };
      
          // parse picture index and gallery index from URL (#&pid=1&gid=2)
          var photoswipeParseHash = function() {
              var hash = window.location.hash.substring(1),
              params = {};
      
              if(hash.length < 5) {
                  return params;
              }
      
              var vars = hash.split('&');
              for (var i = 0; i < vars.length; i++) {
                  if(!vars[i]) {
                      continue;
                  }
                  var pair = vars[i].split('=');  
                  if(pair.length < 2) {
                      continue;
                  }           
                  params[pair[0]] = pair[1];
              }
      
              if(params.gid) {
                  params.gid = parseInt(params.gid, 10);
              }
      
              return params;
          };
      
          var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
              var pswpElement = document.querySelectorAll('.pswp')[0],
                  gallery,
                  options,
                  items;
      
              items = parseThumbnailElements(galleryElement);
      
              // define options (if needed)
              options = {
      
                  // define gallery index (for URL)
                  galleryUID: galleryElement.getAttribute('data-pswp-uid'),
      
                  getThumbBoundsFn: function(index) {
                      // See Options -> getThumbBoundsFn section of documentation for more info
                      var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                          pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                          rect = thumbnail.getBoundingClientRect(); 
      
                      return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                  }
      
              };
      
              // PhotoSwipe opened from URL
              if(fromURL) {
                  if(options.galleryPIDs) {
                      // parse real index when custom PIDs are used 
                      // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                      for(var j = 0; j < items.length; j++) {
                          if(items[j].pid == index) {
                              options.index = j;
                              break;
                          }
                      }
                  } else {
                      // in URL indexes start from 1
                      options.index = parseInt(index, 10) - 1;
                  }
              } else {
                  options.index = parseInt(index, 10);
              }
      
              // exit if index not found
              if( isNaN(options.index) ) {
                  return;
              }
      
              if(disableAnimation) {
                  options.showAnimationDuration = 0;
              }
      
              // Pass data to PhotoSwipe and initialize it
              gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
              gallery.init();
          };
      
          // loop through all gallery elements and bind events
          var galleryElements = document.querySelectorAll( gallerySelector );
      
          for(var i = 0, l = galleryElements.length; i < l; i++) {
              galleryElements[i].setAttribute('data-pswp-uid', i+1);
              galleryElements[i].onclick = onThumbnailsClick;
          }
      
          // Parse URL and open gallery if it contains #&pid=3&gid=1
          var hashData = photoswipeParseHash();
          if(hashData.pid && hashData.gid) {
              openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
          }
      };
      
      // execute above function
      initPhotoSwipeFromDOM('.my-gallery');

    })();

    var do_slide = function( list ) {
        if ( list.css('display') == 'none' ) {
            list.slideDown();
        } else {
            list.slideUp();
        }
    }

    // Sidebar history.
    $('.year-parent').click(function(){
        const year = $(this).data('year');
        const $month_list = $('#' + year + '-months');
        do_slide( $month_list );
    });

    $('.month').click(function(){
        const month = $(this).data('month');
        const $posts_list = $('#' + month );
        do_slide( $posts_list );
    });

    // disable link
    $('.link-disabled').click(function(e){
        e.preventDefault();
     });

     // open - close mobile menu.
     $('#mobile-menu-icon').on('click', function(e){
        $mobile_section = $('.mobile-menu');
        if ( $mobile_section.css('display') === 'none') {
            $mobile_section.slideDown();
        } else {
            $mobile_section.slideUp();
        }
     }); 

     /**
      * Remove cookies message and save the
      * accepted cookie state in localstorage.
      */
     $('#accept').click( function(e){
         e.preventDefault();
         localStorage.setItem( 'cookie-accepted', 'true' );
         $('.cookie-box').fadeOut();
     })

     /**
      * Check if the cookies have been accepted
      * in the current client browser
      */
      var checkCookieMessage = function() {
        var cookieValue = localStorage.getItem( 'cookie-accepted' );
        if ( cookieValue !== 'true' ) {
            $('.cookie-box').fadeIn();
        }
      };

     /**
      * Create comment html when a comment
      * is published using AJAX
      * 
      * @param {object} data Response comment data.
      * @return {string} html HTML code to be appended. 
      */
     var getHtml = function(data) {
        var html = "<div class='comment'>";
        html += "<h3><i class='fa fa-user-circle-o comment__icon' aria-hidden='true'></i>";
        html += data.comment_author;
        html += "<span class='comment__date'>";
        html += "<i class='fa fa-clock-o' aria-hidden='true'></i>";
        html += data.comment_date;
        html += "</span></h3>";
        html += "<p>" + data.comment_content + "</p>";
        html += "</div>";
        return html;
     }

     /**
      * Process contact form,
      * send AJAX request to publish comment
      * and get comment data to automatically
      * publish the comment on the front end.
      */
     $('#post-comment-form').submit( function(e){
        e.preventDefault();
        let errors = false;
        const time = 650;
        $('.form__error-message').slideUp();


        const $submitButton = $('.form__btn');
        const $animatedAjax = $('#loader');
        const action        = $('#action').val();
        const $errorMessage = $('.form-error-message');
        $submitButton.val( 'Procesando Formulario ... ' );
        $submitButton.addClass( 'form__btn--in-use');
        $animatedAjax.slideDown(time);

        if ( $('#name').val() === '' ) {
            errors = true;
            $('.name-error-message').slideDown();
        }

        if ( $('#comment').val() === '' ) {
            errors = true;
            $('.comment-error-message').slideDown();
        }

        if ( ! $('#terms_and_conditions').is(':checked') ) {
            errors = true;
            $('.terms-and-conditions-error-message').slideDown();
        }

        if ( errors ) {
            $animatedAjax.slideUp( 400, 'linear', function() {
                $submitButton.val( 'Publicar Comentario' );
                $submitButton.removeClass( 'form__btn--in-use' );
                $errorMessage.slideDown();
                return;
            });
        }

        let data = $(this).serialize();

        $.ajax({
            type: 'post',
            dataType: 'json',
            url: ajaxObject.ajaxUrl,
            data: {
                action: action,
                is_ajax: action,
                data: data,
            },
            success: function(response) {

                if (response.status) {
                    var html = getHtml(response.data);
                    $('.m16__comments-wrapper').prepend(html);

                        $animatedAjax.slideUp(time, 'linear', function() {
                            $submitButton.val( 'Publicar Comentario');
                            $submitButton.removeClass('form__btn--in-use');
                            $errorMessage.addClass('form__error-message--success')
                                .html('Su comentario se ha publicado con éxito y ya esta disponible en la sección de "Comentarios"')
                                .slideDown(time);
                            
                            // remove comments text if required.
                            var $noComments = $('.no-content-notification');
                            if ($noComments.length > 0) {
                                $noComments.slideUp();
                            }
                        });
                } else {
                    $errorMessage.innerHTML('Ha habido un error publicando tu comentario. Por favor reintentelo de nuevo mas tarde o pongase en contacto con el adminsitrador de este sitio web.' );
                    $animatedAjax.slideUp( time, 'linear', function() {
                        $submitButton.val( 'Publicar Comentario' );
                        $submitButton.removeClass( 'form__btn--in-use' );
                        $errorMessage.slideDown();
                        return;
                    });
                }

            },
            error: function(e) {
                console.log(e);
                console.log(2);
                $errorMessage.innerHTML('Ha habido un error publicando tu comentario. Por favor reintentelo de nuevo mas tarde o pongase en contacto con el adminsitrador de este sitio web.' );
                $animatedAjax.slideUp( time, 'linear', function() {
                    $submitButton.val( 'Publicar Comentario' );
                    $submitButton.removeClass( 'form__btn--in-use' );
                    $errorMessage.slideDown();
                    return;
                });
            }, 
        });
     });


     /**
      * Process contact form submit.
      * Send contact message by ajax and
      * update form response dynamicaly
      */
      $('#contact-form').submit( function(e) {
        e.preventDefault();
        let errors = false;
        const time = 650;
        $('.form__error-message').slideUp();


        const $submitButton = $('.form__btn');
        const $animatedAjax = $('#loader');
        const action        = $('#action').val();
        const $errorMessage = $('.form-error-message');
        const email         = $('#email').val(); 

        console.log(action);
        $submitButton.val( 'Procesando Formulario ... ' );
        $submitButton.addClass( 'form__btn--in-use');
        $animatedAjax.slideDown(time);

        if ( $('#name').val() === '' ) {
            errors = true;
            $('.name-error-message').slideDown();
        }

        if ( $('#message').val() === '' ) {
            errors = true;
            $('.message-error-message').slideDown();
        }

        if ( email !== '' && email.indexOf('@') === -1 ) {
            errors = true;
            $('.email-error-message').slideDown();
        }

        if ( ! $('#terms_and_conditions').is(':checked') ) {
            errors = true;
            $('.terms-and-conditions-error-message').slideDown();
        }

        if ( errors ) {
            $animatedAjax.slideUp( 400, 'linear', function() {
                $submitButton.val( 'Enviar mensaje' );
                $submitButton.removeClass( 'form__btn--in-use' );
                $errorMessage.slideDown();
                return;
            });
        }

        let data = $(this).serialize();
        console.log(data);
        
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: ajaxObject.ajaxUrl,
            data: {
                action: action,
                is_ajax: action,
                data: data,
            },
            success: function(response) {
                console.log(1);
                console.log(response);

                if (response.status) {
                    $animatedAjax.slideUp(time, 'linear', function() {
                        $submitButton.val( 'Enviar mensaje');
                        $submitButton.removeClass('form__btn--in-use');
                        $errorMessage.addClass('form__error-message--success')
                            .html('Su mensaje se ha enviado con éxito. Pronto nos pondremos en contacto con usted')
                            .slideDown(time);        
                    });
                } else {
                    $errorMessage.html('Ha habido un error enviando su mensaje. Por favor inténtelo otra vez en unos minutos' );
                    $animatedAjax.slideUp( time, 'linear', function() {
                        $submitButton.val( 'Enviar mensaje' );
                        $submitButton.removeClass( 'form__btn--in-use' );
                        $errorMessage.slideDown();
                        return;
                    });
                }

            },
            error: function(response) {
                console.log(2);
                console.log(response);

                $errorMessage.html('Ha habido un error enviando su mensaje. Por favor inténtelo otra vez en unos minutos' );
                $animatedAjax.slideUp( time, 'linear', function() {
                    $submitButton.val( 'Enviar mensaje' );
                    $submitButton.removeClass( 'form__btn--in-use' );
                    $errorMessage.slideDown();
                    return;
                });
            }
        });
      });

    // check if cookie popup has to be displayed
    checkCookieMessage();
});

/*
document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("div.content-section img"));
    console.log( lazyImages );

    if ("IntersectionObserver" in window) {
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              let lazyImage = entry.target;
              lazyImage.src = lazyImage.dataset.src;
              lazyImage.srcset = lazyImage.dataset.srcset;
              lazyImage.classList.remove("lazy");
              lazyImageObserver.unobserve(lazyImage);
            }
          });
        });
    
        lazyImages.forEach(function(lazyImage) {
          lazyImageObserver.observe(lazyImage);
        });
      } else {
        // Possibly fall back to a more compatible method here
      }
});
*/