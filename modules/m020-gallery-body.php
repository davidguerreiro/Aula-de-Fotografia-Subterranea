<?php

/**
 * Module 020 - Gallery Body
 * 
 * This module uses lightgallery js plugin.
 * 
 * @package aula/modules
 */

 $url = "http://lorempixel.com/500/300";

 ?>

<div class="module m20">

    <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="my-gallery__item">
            <a href="http://lorempixel.com/500/300/sports/david" itemprop="contentUrl" data-size="600x400">
                <img src="http://lorempixel.com/500/300/sports/david" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description"></figcaption>
        </figure>

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="my-gallery__item">
            <a href="http://lorempixel.com/500/300/sports/david2" itemprop="contentUrl" data-size="600x400">
                <img src="http://lorempixel.com/500/300/sports/david2" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description"></figcaption>
        </figure>

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="my-gallery__item">
            <a href="http://lorempixel.com/500/300" itemprop="contentUrl" data-size="600x400">
                <img src="http://lorempixel.com/500/300" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description"></figcaption>
        </figure>

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="my-gallery__item">
            <a href="http://lorempixel.com/500/300" itemprop="contentUrl" data-size="600x400">
                <img src="http://lorempixel.com/500/300" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description"></figcaption>
        </figure>

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="my-gallery__item">
            <a href="http://lorempixel.com/500/300" itemprop="contentUrl" data-size="600x400">
                <img src="http://lorempixel.com/500/300" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description"></figcaption>
        </figure>

        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="my-gallery__item">
            <a href="http://lorempixel.com/500/300" itemprop="contentUrl" data-size="600x400">
                <img src="http://lorempixel.com/500/300" itemprop="thumbnail" alt="Image description" />
            </a>
            <figcaption itemprop="caption description"></figcaption>
        </figure>

    </div>

</div>
  
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

          </div>

        </div>

</div>